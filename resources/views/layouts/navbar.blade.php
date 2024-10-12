<nav class="bg-red-900 w-full z-20 top-0 start-0 border-b border-red-800 bg-center"
    style="background-image: url('{{ asset('images/navbar.png') }}');">
    <div class="max-w-screen-xl flex
        flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('images/logo.png') }}" class="h-12" alt="Logo">
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-100 rounded-lg md:hidden hover:bg-gray-200 focus:outline-none"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 md:gap-16 mt-4 font-medium rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-red-900">
                <li>
                    <a href="/"
                        class="menu-item block py-2 px-3 rounded text-white md:bg-transparent md:hover:text-red-500 md:p-0"
                        aria-current="page">Beranda</a>
                </li>
                <li>
                    <a href="{{ route('berita-tampil') }}"
                        class="menu-item block py-2 px-3 rounded text-white md:bg-transparent md:hover:text-red-500 md:p-0">Berita</a>
                </li>
                <li>
                    <a href="{{ route('statistik') }}"
                        class="menu-item block py-2 px-3 rounded text-white md:bg-transparent md:hover:text-red-500 md:p-0">Statistik
                        Penduduk</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script>
    const menuItems = document.querySelectorAll('.menu-item');

    menuItems.forEach(item => {
        item.addEventListener('click', function() {
            menuItems.forEach(i => i.classList.remove('bg-red-500'));
            this.classList.add('bg-red-500');
        });
    });
</script>
