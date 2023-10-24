<div class="  bg-blue-900 dark:bg-slate-800 p-4 z-40">
    <div class="md:container mx-auto flex md:flex-row flex-col gap-3">
        <div class="p-3 w-full md:w-6/12">
            <div class="border-b-2 py-4">
                <h3 class="text-white font-bold text-lg mb-3">
                    @lang('home.about_us')
                </h3>
                <p class="text-white">
                    @lang('home.description')
                </p>
            </div>
            <div class="py-4">
                <h3 class="text-white font-bold text-lg my-3"> @lang('home.please_visit')</h3>
                <p class="text-white gap-1 flex">
                    <a href="" class="hover:rotate-[360deg] duration-500">
                        <img src="{{ asset('storage/images/facebook_icon.png') }}" alt="" class="w-9 h-9">
                    </a>
                    <a href="" class="hover:rotate-[360deg] duration-500">
                        <img src="{{ asset('storage/images/youtube_icon.png') }}" alt="" class="w-9 h-9">
                    </a>

                </p>
            </div>

        </div>

        <div class="p-3 w-full md:w-6/12">
            <div class="border-b-2 py-4">
                <h3 class="text-white font-bold text-lg mb-3"> @lang('home.request_music')</h3>
                <p class="text-white">
                    @lang('home.req_des')
                </p>
            </div>

            <x-request-music-form />

        </div>
    </div>
</div>

<script>
    // for darkmode toggle
    const isDarkModeEnabled = localStorage.getItem('darkMode') === 'enabled';

    function toggleDarkMode() {
        const switchBtn = document.getElementById('toggleDarkMode');
        if (switchBtn.checked) {
            document.documentElement.classList.add('dark');
            localStorage.setItem('darkMode', 'enabled');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('darkMode', 'disabled');
        }
    }

    // Add event listener for the checkbox
    const switchBtn = document.getElementById('toggleDarkMode');
    switchBtn.addEventListener('change', toggleDarkMode);

    // Apply dark mode on page load if it was enabled
    if (isDarkModeEnabled) {
        switchBtn.checked = true;
        toggleDarkMode();
    }
    // for darkmode toggle
</script>