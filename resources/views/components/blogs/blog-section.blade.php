<div id="blog">
    <x-container>
        <div class="mb-12 space-y-2 text-center pt-36">
            <h2 class="text-3xl font-bold text-gray-800 md:text-4xl dark:text-white mb-5">All Article</h2>
            <p class="lg:mx-auto lg:w-6/12 text-gray-600 dark:text-gray-300">
                Discover a variety of engaging articles covering current topics, from practical guides to in-depth
                reviews. We are committed to providing useful and relevant information to help you stay informed and
                inspired. Explore our articles and uncover new insights for your everyday life.


            </p>
        </div>

        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @forelse($articles as $article)
                <div
                    class="group p-6 sm:p-8 rounded-3xl bg-white border border-gray-100 dark:shadow-none dark:border-gray-700 dark:bg-gray-800 bg-opacity-50 shadow-2xl shadow-gray-600/10">
                    <div class="relative overflow-hidden rounded-xl">
                        <img
                            src="{{ asset('storage/' . $article->banner) }}"
                            alt="art cover" loading="lazy" width="1000" height="667"
                            class="h-64 w-full object-cover object-top transition duration-500 group-hover:scale-105"/>
                    </div>
                    <div class="mt-6 relative">
                        <h3 class="text-2xl font-semibold text-gray-800 dark:text-white">
                            {{$article->title}}
                        </h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            By {{$article->author}} - {{ $article->created_at->format('M d, Y') }}
                        </p>
                        <p class="mt-4 mb-6 text-gray-600 dark:text-gray-300 overflow-hidden text-ellipsis line-clamp-3">
                            {{$article->content}}
                        </p>
                        <a href="{{ route('blog.show', $article->id) }}"
                           class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            Read More
                        </a>
                    </div>

                </div>

            @empty
                <div class="flex flex-col items-center justify-center w-full  col-span-12 text-center py-12">
                    <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-4">
                        Tidak ada Artikel yang tersedia saat ini
                    </h2>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">
                        Kami sedang memperbarui katalog Artikel kami. Silakan cek kembali nanti!
                    </p>
                    <a href="/"
                       class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Kembali ke Beranda
                    </a>
                </div>
            @endforelse
        </div>

    </x-container>
</div>
