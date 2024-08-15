<x-app-layout>
    <div class="container mx-auto px-4 py-12" x-data="{ search: '' }">
        <h2 class="text-2xl font-bold mb-6">Your Courses Progress</h2>

        <!-- Search Bar -->
        <div class="mb-6 flex justify-end">
            <input 
                type="text" 
                placeholder="Search your courses..." 
                x-model="search"
                class="w-full max-w-sm p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"
            />
        </div>

        @if ($enrollments->isEmpty())
            <!-- No Enrollments Message -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-6 p-6 text-center">
                <p class="text-gray-700 mb-4">You are not enrolled in any courses yet.</p>
                <a href="/" class="text-indigo-600 hover:text-indigo-500 mt-4 inline-block">
                    Browse Our Courses
                </a>
            </div>
        @else
            @foreach ($enrollments as $enrollment)
                <div 
                    class="bg-white rounded-lg shadow-lg overflow-hidden mb-6"
                    x-data="{ open: false, completed: 0, total: {{ $enrollment->course->lessons->count() }} }"
                    x-init="() => {
                        completed = {{ $enrollment->progress->where('is_completed', true)->count() }};
                    }"
                    x-show="search === '' || '{{ strtolower($enrollment->course->title) }}'.includes(search.toLowerCase()) || '{{ strtolower($enrollment->course->category) }}'.includes(search.toLowerCase())"
                >
                    <div class="p-6">
                        <div class="flex justify-between items-center">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800">{{ $enrollment->course->title }}</h3>
                                <p class="text-gray-600">{{ $enrollment->course->category }}</p>
                            </div>
                            <!-- View Course Link -->
                            <a href="{{ route('course_show', $enrollment->course) }}" class="text-indigo-600 hover:text-indigo-500">
                                View Course
                            </a>
                        </div>

                        <!-- Progress Bar -->
                        <div class="mt-4">
                            <div class="relative pt-1">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm font-semibold text-gray-700">Progress: <span x-text="Math.round((completed / total) * 100) + '%'"></span></span>
                                </div>
                                <div class="flex mt-2">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 overflow-hidden">
                                        <div class="bg-indigo-500 h-full" :style="{ width: (completed / total) * 100 + '%' }"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Toggle Button -->
                        <button @click="open = !open" class="text-indigo-600 hover:text-indigo-500 mt-4 inline-block">
                            <span x-text="open ? 'Hide Course Progress' : 'View Course Progress'"></span>
                        </button>

                        <!-- Lessons List with Checkboxes, transition only on close -->
                        <div x-show="open" x-transition:enter="transition ease-in-out duration-300" 
                             x-transition:enter-start="opacity-0" 
                             x-transition:enter-end="opacity-100"
                             x-transition:leave="transition ease-in-out duration-300"
                             x-transition:leave-start="opacity-100" 
                             x-transition:leave-end="opacity-0"
                             class="mt-4 overflow-hidden">
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
                                            @change="completed = document.querySelectorAll('[data-enrollment-id=\'{{ $enrollment->id }}\']:checked').length"
                                        >
                                        <span>{{ $lesson->title }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
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
