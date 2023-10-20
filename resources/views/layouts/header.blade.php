<nav x-data="{ scrolled: false }" x-init="window.addEventListener('scroll', () => {
        scrolled = window.scrollY > 0;
    })" x-bind:class="{ 'md:bg-transparent md:dark:bg-transparent bg-blue-800 dark:bg-slate-800 duration-200': !scrolled, 'bg-blue-800 dark:bg-slate-800  duration-200': scrolled }" class="md:fixed z-50 p-4 w-full">
    <div class="md:container mx-auto flex justify-between items-center w-full">
        <div>
            <a href="{{route('home')}}">
                <h1 class="font-bold text-xl text-white">
                    <div class="flex gap-2">
                        <img src="{{ asset('storage/images/logo.png') }}" alt="" class="w-9 h-9">
                        Nyanpasu Music
                    </div>
                </h1>
            </a>
        </div>
        <div class="flex gap-2 text-white">
            <x-setting-toggle />
        </div>
    </div>
</nav>