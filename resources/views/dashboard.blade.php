<x-app-layout>
    <div class="container mx-auto px-4 py-12">
        <h2 class="text-2xl font-bold mb-6">Your Courses Progress</h2>

        @foreach ($enrollments as $enrollment)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-6">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">{{ $enrollment->course->title }}</h3>
                    <p class="text-gray-600 mb-4">{{ $enrollment->course->category }}</p>

                    <!-- Lessons List with Checkboxes -->
                    <ul class="list-disc list-inside text-gray-700">
                        @foreach ($enrollment->course->lessons as $lesson)
                            <li class="flex items-center mt-2">
                                <input 
                                    type="checkbox" 
                                    name="completed" 
                                    value="1" 
                                    {{ $enrollment->progress->where('lesson_id', $lesson->id)->first()?->is_completed ? 'checked' : '' }}
                                    class="mr-2 lesson-checkbox"
                                    data-lesson-id="{{ $lesson->id }}"
                                    data-enrollment-id="{{ $enrollment->id }}"
                                >
                                <span>{{ $lesson->title }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <a href="{{ route('course_show', $enrollment->course) }}" class="text-indigo-600 hover:text-indigo-500 mt-4 inline-block">
                        View Course
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Script for AJAX request -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const checkboxes = document.querySelectorAll('.lesson-checkbox');

            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function () {
                    const lessonId = this.getAttribute('data-lesson-id');
                    const enrollmentId = this.getAttribute('data-enrollment-id');
                    const isCompleted = this.checked;

                    fetch(`{{ url('progress/update') }}`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            lesson_id: lessonId,
                            enrollment_id: enrollmentId,
                            completed: isCompleted
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            console.log('Progress updated successfully!');
                        } else {
                            console.error('Error updating progress');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
                });
            });
        });
    </script>
</x-app-layout>
