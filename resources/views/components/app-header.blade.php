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

<header>
    <nav id="nav" class="absolute group z-10 w-full border-b border-black/5 dark:border-white/5 lg:border-transparent">
        <x-container>
            <div class="relative flex flex-wrap items-center justify-between gap-6 py-3 md:gap-0 md:py-4">
                <div class="relative z-20 flex w-full justify-between md:px-0 lg:w-fit">
                    <a href="/" aria-label="logo" class="flex items-center space-x-2">
                        <img src="{{asset('images/logo-raksacyber.png')}}" alt="logo" class="w-10"/>
                        <span class="text-xl font-bold text-gray-800 dark:text-white">RaksaCyber</span>
                    </a>

                    <div class="relative flex max-h-10 items-center lg:hidden">
                        <button aria-label="hamburger" id="hamburger"
                                class="relative -mr-6 p-6 active:scale-95 duration-300">
                            <div aria-hidden="true" id="line"
                                 class="m-auto h-0.5 w-5 rounded bg-gray-950 transition duration-300 dark:bg-white origin-top group-data-[state=active]:rotate-45 group-data-[state=active]:translate-y-1.5"></div>
                            <div aria-hidden="true" id="line2"
                                 class="m-auto mt-2 h-0.5 w-5 rounded bg-gray-950 transition duration-300 dark:bg-white origin-bottom group-data-[state=active]:-rotate-45 group-data-[state=active]:-translate-y-1"></div>
                        </button>
                    </div>
                </div>

                <div id="navLayer" aria-hidden="true"
                     class="fixed inset-0 z-10 h-screen w-screen origin-bottom scale-y-0 bg-white/70 backdrop-blur-2xl transition duration-500 group-data-[state=active]:origin-top group-data-[state=active]:scale-y-100 dark:bg-gray-950/70 lg:hidden"></div>

                <div id="navlinks"
                     class="invisible absolute top-full left-0 z-20 w-full origin-top-right translate-y-1 scale-90 flex-col flex-wrap justify-end gap-6 rounded-3xl border border-gray-100 bg-white p-8 opacity-0 shadow-2xl shadow-gray-600/10 transition-all duration-300 dark:border-gray-700 dark:bg-gray-800 dark:shadow-none lg:visible lg:relative lg:flex lg:w-fit lg:translate-y-0 lg:scale-100 lg:flex-row lg:items-center lg:gap-0 lg:border-none lg:bg-transparent lg:p-0 lg:opacity-100 lg:shadow-none lg:dark:bg-transparent group-data-[state=active]:visible group-data-[state=active]:scale-100 group-data-[state=active]:opacity-100 lg:group-data-[state=active]:translate-y-0">
                    <div class="w-full text-gray-600 dark:text-gray-200 lg:w-auto lg:pr-4 lg:pt-0">
                        <div id="links-group" class="flex flex-col gap-6 tracking-wide lg:flex-row lg:gap-0 lg:text-sm">
                            @foreach ($links as $link)
                                <a href="{{ $link['to'] }}"
                                   class="hover:text-primary block transition dark:hover:text-white md:px-4">
                                    <span>{{ $link['label'] }}</span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </x-container>
    </nav>
</header>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        let isToggled = false;
        const navbar = document.querySelector("#nav");
        const menuBtn = document.querySelector("#hamburger");
        const links = [...document.querySelectorAll("#links-group a")];

        function toggleNavlinks() {
            navbar.dataset.state = isToggled ? "active" : "";
        }

        menuBtn.addEventListener("click", () => {
            isToggled = !isToggled;
            toggleNavlinks();
        });

        links.forEach((link) => {
            link.addEventListener("click", () => {
                isToggled = false;
                toggleNavlinks();
            });
        });
    });
</script>
