<x-app-layout>
    <!-- Display Success Message -->
    @if (session('success'))
        <div class="container mx-auto px-4 py-4">
            <div class="bg-green-600 text-white text-center py-3 px-6 rounded-lg shadow-lg">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <!-- Display Error Message -->
    @if (session('error'))
        <div class="container mx-auto px-4 py-4">
            <div class="bg-red-600 text-white text-center py-3 px-6 rounded-lg shadow-lg">
                {{ session('error') }}
            </div>
        </div>
    @endif

    <!-- Course Detail Section -->
    <div class="container mx-auto px-4 py-12 max-w-4xl">
        <!-- Back Button -->
        <div class="mb-8">
            <a href="/" class="inline-block text-indigo-600 hover:text-indigo-500 text-sm font-medium">
                &larr; Back to Courses
            </a>
        </div>

        <!-- Course Information -->
        <div class="bg-white rounded-lg shadow-xl overflow-hidden border border-gray-200">
            <div class="p-8">
                <h2 class="text-4xl font-extrabold text-gray-900 mb-4">{{ $course->title }}</h2>
                <p class="text-sm text-indigo-500 font-semibold mb-4">{{ $course->category }}</p>
                <p class="text-lg text-gray-800 mb-8">{{ $course->description }}</p>

                <!-- Instructor Information -->
                @if ($course->instructor)
                    <div class="border-t border-gray-300 pt-6 mt-6">
                        <h3 class="text-2xl font-semibold text-gray-900">Instructor Details</h3>
                        <p class="text-sm text-gray-700 mt-2">Name: <span class="font-medium">{{ $course->instructor->name }}</span></p>
                        <p class="text-sm text-gray-700">Email: <a href="mailto:{{ $course->instructor->email }}" class="text-indigo-600 hover:text-indigo-500">{{ $course->instructor->email }}</a></p>
                    </div>
                @endif

                <!-- Lessons List -->
                <div class="border-t border-gray-300 pt-6 mt-6">
                    <h3 class="text-2xl font-semibold text-gray-900">Lessons</h3>
                    <ul class="list-disc list-inside text-gray-800 mt-2">
                        @forelse ($course->lessons as $lesson)
                            <li class="mt-2 text-indigo-600 hover:text-indigo-500 cursor-pointer">
                                {{ $lesson->title }}
                            </li>
                        @empty
                            <li class="text-gray-600">No lessons available for this course.</li>
                        @endforelse
                    </ul>
                </div>

                <!-- Enroll Now Button -->
                @if (auth()->user()->role !== 'instructor' && !$isEnrolled)
                    <div class="mt-8">
                        <form action="{{ route('course.enroll', $course->id) }}" method="POST">
                            @csrf
                            <button 
                                type="submit" 
                                class="inline-block bg-indigo-700 text-white py-3 px-6 rounded-lg shadow-lg hover:bg-indigo-600 transition-colors duration-300"
                            >
                                Enroll Now
                            </button>
                        </form>
                    </div>
                @elseif ($isEnrolled)
                    <div class="mt-8">
                        <span class="inline-block bg-green-600 text-white py-3 px-6 rounded-lg shadow-lg">
                            Already Enrolled
                        </span>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
