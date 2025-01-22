<div id="product">
    <x-container>
        <div class="mb-12 space-y-2 text-center pt-36">
            <h2 class="text-3xl font-bold text-gray-800 md:text-4xl dark:text-white mb-5">All Product</h2>
            <p class="lg:mx-auto lg:w-6/12 text-gray-600 dark:text-gray-300">
                Temukan berbagai pilihan produk terbaik kami yang dirancang untuk memenuhi kebutuhan Anda.
                Dari kualitas unggul hingga harga terjangkau, kami hadir untuk memberikan solusi yang sempurna
                bagi gaya hidup Anda.
            </p>
        </div>
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach($products as $product)
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
            @endforeach
        </div>
    </x-container>
</div>
