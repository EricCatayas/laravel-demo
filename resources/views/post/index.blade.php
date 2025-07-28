<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900 dark:text-gray-100">                
                    <x-category-tabs name="sample">
                        No Categories
                    </x-category-tabs>
                </div>
            </div>
        </div>
    </div>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-8 text-gray-900 dark:text-gray-100">  
                    @forelse ($posts as $post)
                        <x-post-item :post="$post" />
                    @empty
                        <div class="p-4 text-gray-900 dark:text-gray-100">
                            <p>No posts found.</p>
                        </div>
                    @endforelse
                </div>
                <div class="mt-4">
                    {{ $posts->onEachSide(1)->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
