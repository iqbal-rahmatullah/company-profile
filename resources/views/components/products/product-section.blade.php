<div id="product">
    <x-container>
        <div class="mb-12 space-y-2 text-center pt-36">
            <h2 class="text-3xl font-bold text-gray-800 md:text-4xl dark:text-white mb-5">All Product</h2>
            <p class="lg:mx-auto lg:w-6/12 text-gray-600 dark:text-gray-300">
                Discover our wide selection of top-quality products designed to meet your needs.
                From superior quality to affordable prices, we are here to provide the perfect solutions for your
                lifestyle.
            </p>
        </div>
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @forelse($products as $product)
                <div
                    class="group p-6 sm:p-8 rounded-3xl bg-white border border-gray-100 dark:shadow-none dark:border-gray-700 dark:bg-gray-800 bg-opacity-50 shadow-2xl shadow-gray-600/10">
                    <div class="relative overflow-hidden rounded-xl">
                        <img
                            src="{{ asset('storage/' . $product->image) }}"
                            alt="art cover" loading="lazy" width="1000" height="667"
                            class="h-64 w-full object-cover object-top transition duration-500 group-hover:scale-105"/>
                    </div>
                    <div class="mt-6 relative">
                        <h3 class="text-2xl font-semibold text-gray-800 dark:text-white">
                            {{$product->title}}
                        </h3>
                        <p class="mt-4 text-gray-600 dark:text-gray-300">
                            {{$product->description}}
                        </p>
                        <p class="mt-2 mb-8  dark:text-white font-bold text-xl">
                            Rp. {{$product->price}}
                        </p>
                        <button type="button"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            Order Now
                        </button>
                    </div>

                </div>
            @empty
                <div class="flex flex-col items-center justify-center w-full  col-span-12 text-center py-12">
                    <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-4">
                        Tidak ada produk yang tersedia saat ini
                    </h2>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">
                        Kami sedang memperbarui katalog produk kami. Silakan cek kembali nanti!
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
