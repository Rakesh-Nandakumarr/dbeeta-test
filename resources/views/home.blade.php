<x-app-layout>
    <!-- Courses Section -->
    <h2 class="text-3xl font-bold text-center mb-16 mt-10 text-gray-800">Courses</h2>

    <div class="container mx-auto px-4" x-data="{ search: '', currentPage: 1, perPage: 8, filteredCourses: [] }" x-init="
        filteredCourses = {{ $courses->toJson() }};
        $watch('search', value => {
            filteredCourses = {{ $courses->toJson() }}.filter(course => 
                course.title.toLowerCase().includes(value.toLowerCase()) ||
                course.category.toLowerCase().includes(value.toLowerCase())
            );
            currentPage = 1;
        });
    ">
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
            <template x-for="(course, index) in filteredCourses.slice((currentPage - 1) * perPage, currentPage * perPage)" :key="course.id">
                <div 
                    class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-200"
                >
                    <div class="p-6 pt-8">
                        <h3 class="font-semibold text-xl text-gray-800" x-text="course.title"></h3>
                        <p class="text-sm text-indigo-600 font-medium mt-2" x-text="course.category"></p>
                        <p class="mt-4 text-sm text-gray-600" x-text="course.description.substring(0, 100) + '...'"></p>
                        <div class="mt-6">
                            <a :href="`/course/${course.id}`" class="inline-block bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-500 transition-colors duration-200">View Course</a>
                        </div>
                    </div>
                </div>
            </template>
        </div>

        <!-- Custom Pagination -->
        <div class="mt-8 flex justify-center items-center space-x-4 mb-20" x-show="filteredCourses.length > perPage">
            <button 
                @click="if(currentPage > 1) currentPage--"
                class="px-4 py-2 bg-gray-300 rounded-md text-gray-700"
                :disabled="currentPage === 1"
            >
                Previous
            </button>

            <template x-for="page in Math.ceil(filteredCourses.length / perPage)">
                <button 
                    @click="currentPage = page"
                    class="px-4 py-2 rounded-md"
                    :class="currentPage === page ? 'bg-indigo-600 text-white' : 'bg-gray-300 text-gray-700'"
                >
                    <span x-text="page"></span>
                </button>
            </template>

            <button 
                @click="if(currentPage < Math.ceil(filteredCourses.length / perPage)) currentPage++"
                class="px-4 py-2 bg-gray-300 rounded-md text-gray-700"
                :disabled="currentPage === Math.ceil(filteredCourses.length / perPage)"
            >
                Next
            </button>
        </div>
    </div>
</x-app-layout>
