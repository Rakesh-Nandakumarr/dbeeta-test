<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Enrollment;
use Stripe\Stripe;
use Stripe\Checkout\Session as StripeSession;
use Exception;

class CourseController extends Controller
{
    public function show(Course $course)
    {
        $user = auth()->user();
        $isEnrolled = false;

        if ($user && $user->role === 'student') {
            $isEnrolled = $course->enrollments()->where('student_id', $user->id)->exists();
        }

        return view('course.show', compact('course', 'isEnrolled'));
    }

    public function enroll(Course $course)
    {
        $user = auth()->user();

        // Check if the user is already enrolled
        $isEnrolled = $course->enrollments()->where('student_id', $user->id)->exists();

        if (!$isEnrolled) {
            return $this->createCheckoutSession($course);
        }

        return redirect()->route('course.show', $course);
    }

    private function createCheckoutSession(Course $course)
    {
        try {
            Stripe::setApiKey(config('stripe.stripe_sk'));

            $checkoutSession = StripeSession::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => $course->title,
                        ],
                        'unit_amount' => $course->price,
                    ],
                    'quantity' => 1,
                ]],
                'mode' => 'payment',
                'success_url' => route('course.checkout.success', $course) . '?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('course.checkout.cancel', $course),
            ]);

            return redirect($checkoutSession->url);
        } catch (Exception $e) {
            return redirect()->route('course.show', $course)
                ->with('error', 'Failed to initiate payment. Please try again.');
        }
    }

    public function handleCheckoutSuccess(Request $request, Course $course)
    {
        $user = auth()->user();

        $sessionId = $request->get('session_id');
        // Verify the session ID with Stripe if needed

        // Enroll the student
        Enrollment::create([
            'course_id' => $course->id,
            'student_id' => $user->id,
        ]);

        return redirect()->route('course.show', $course)
            ->with('success', 'Payment successful and enrollment completed!');
    }

    public function handleCheckoutCancel(Request $request, Course $course)
    {
        return redirect()->route('course.show', $course)
            ->with('error', 'Payment was canceled. Please try again.');
    }
}
