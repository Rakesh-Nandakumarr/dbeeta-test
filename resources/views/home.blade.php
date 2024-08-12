<x-app-layout>
    <!-- Courses Section -->
    <h2 class="text-3xl font-bold text-center mb-16 mt-10 text-gray-800">Courses</h2>

    <div class="container mx-auto px-4" x-data="{ search: '' }">
        <!-- Search Bar -->
        <div class="mb-8 flex justify-center">
            <input 
                type="text" 
                placeholder="Search courses..." 
                x-model="search"
                class="w-full max-w-lg p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"
            />
        </div>

        <!-- Courses Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @foreach ($courses as $course)
                <div 
                    class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-200"
                    x-show="search === '' || '{{ strtolower($course->title) }}'.includes(search.toLowerCase()) || '{{ strtolower($course->category) }}'.includes(search.toLowerCase())"
                >
                    <div class="p-6 pt-8">
                        <h3 class="font-semibold text-xl text-gray-800">{{ $course->title }}</h3>
                        <p class="text-sm text-indigo-600 font-medium mt-2">{{ $course->category }}</p>
                        <p class="mt-4 text-sm text-gray-600">{{ Str::limit($course->description, 100) }}</p>
                        <div class="mt-6">
                            <a href="{{ route('course_show',$course)}}" class="inline-block bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-500 transition-colors duration-200">View Course</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination Links -->
        <div class="mt-8 flex justify-center mb-20">
            {{ $courses->links('pagination::tailwind') }}
        </div>
    </div>
</x-app-layout>
