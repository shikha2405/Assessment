<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                
                    <table class="border-collapse border border-slate-500">
                        <thead class="bg-dark text-blank">
                            <tr>
                                <th class="border border-slate-600">Title</th>
                                <th class="border border-slate-600">Content</th>
                            </tr>
                        </thead>
                        @foreach ($posts as $key => $post)
                            <tbody>
                            <tr>
                                <td class="border border-slate-600">{{ $post->title }}</td>
                                <td class="border border-slate-600">{{ $post->content }}</td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>
                    <div class="row">
                        <div class="col-md-12">
                            {{ $posts->links('pagination::tailwind') }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
