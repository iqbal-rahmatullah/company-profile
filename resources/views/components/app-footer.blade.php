@php
    $links = [
        [
            "to" => "/product",
            "label" => "Products",
        ],
        [
            "to" => "/blog",
            "label" => "Blog",
        ],
        [
            "to" => "/about_us",
            "label" => "About Us",
        ],
        [
            "to" => "/contact",
            "label" => "Contact",
        ],
    ];
@endphp

<x-container>
    <div class="m-auto md:w-10/12 lg:w-8/12 xl:w-6/12 pb-10">
        <div class="flex flex-wrap items-center justify-between md:flex-nowrap">
            <div
                class="flex w-full  justify-center space-x-12 text-gray-600 dark:text-gray-300 sm:w-7/12 md:justify-start"
            >
                <ul class="list-inside list-disc space-y-8">
                    @foreach($links as $link)
                        <li><a href="{{$link['to']}}" class="transition hover:text-primary">{{$link['label']}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div
                class="m-auto mt-16 w-10/12 space-y-6 text-center sm:mt-auto sm:w-5/12 sm:text-left"
            >
            <span class="block text-gray-500 dark:text-gray-400"
            >RaksaCyber</span
            >


                <span class="flex justify-between text-gray-600 dark:text-white">
              <a href="#" class="font-medium">Terms of Use </a>
              <a href="#" class="font-medium"> Privacy Policy</a>
            </span>

                <span class="block text-gray-500 dark:text-gray-400"
                >Need help? <a href="{{route('contact')}}" class="font-semibold text-gray-600 dark:text-white"> Contact Us</a></span
                >
            </div>
        </div>
    </div>
</x-container>
