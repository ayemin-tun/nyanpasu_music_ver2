<div class="  bg-blue-900 dark:bg-slate-800 p-4">
    <div class="md:container mx-auto flex md:flex-row flex-col gap-3">
        <div class="p-3 w-full md:w-6/12">
            <div class="border-b-2 py-4">
                <h3 class="text-white font-bold text-lg mb-3">About Us</h3>
                <p class="text-white">
                    လူကြိုက်များပြီးနားထောင်လို့ကောင်းတဲ့ Anime သီချင်းလေးတွေကို တင်ပေးနေတဲ့ site လေးဖြစ်တဲ့အတွက် ဝင်ပြီးတော့နားထောင်ခံစားကြည့်ပြီး ကြိုက်ကျမယ်လို့မျှော်လင့်ပါတယ်။
                </p>
            </div>
            <div class="py-4">
                <h3 class="text-white font-bold text-lg my-3">Please Visit</h3>
                <p class="text-white gap-1 flex">
                    <a href="" class="hover:rotate-[360deg] duration-500">
                        <img src="storage/images/facebook_icon.png" alt="" srcset="">
                    </a>
                    <a href="" class="hover:rotate-[360deg] duration-500">
                        <img src="storage/images/youtube_icon.png" alt="" srcset="">
                    </a>

                </p>
            </div>

        </div>

        <div class="p-3 w-full md:w-6/12">
            <div class="border-b-2 py-4">
                <h3 class="text-white font-bold text-lg mb-3">Request Music</h3>
                <p class="text-white">
                    နားထောင်ချင်တဲ့ သီချင်းလေးတွေကိုလည်း website မှာတောင်းဆိုလို့ရပါတယ်နော်။
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