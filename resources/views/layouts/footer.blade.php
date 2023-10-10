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

            <div class="py-4">
                <form method="post" action="{{route('request_music')}}" id="requestForm">
                    @if(session('success'))
                    <div class="py-2 bg-green-200 text-center rounded-md">
                        {{ session('success') }}
                    </div>
                    @endif
                    @if(session('error'))
                    <div class="py-2 bg-red-200 text-center rounded-md">
                        {{ session('error') }}
                    </div>
                    @endif
                    @csrf
                    <div class="flex gap-2 mt-2">
                        <div class="mb-2 w-full">
                            <label for="user_name" class="block mb-2 text-sm font-medium dark:text-white text-white">Name</label>
                            <input type="text" name="user_name" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required value="{{ old('user_name') }}" placeholder="Your name">
                            @error('user_name')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-2 w-full">
                            <label for="music_name" class="block mb-2 text-sm font-medium dark:text-white text-white">Music Name</label>
                            <input type="text" id="music_name" name="music_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required value="{{ old('music_name') }}" placeholder="music_name">
                            @error('music_name')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <label for="anime_name" class="block mb-2 text-sm font-medium dark:text-white text-white">Anime Name</label>
                        <input type="text" id="anime_name" name="anime_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('anime_name') }}" placeholder="Anime name">
                        @error('anime_name')
                        <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label for="comment" class="block mb-2 text-sm font-medium text-white dark:text-white">Your message</label>
                        <textarea id="message" name="comment" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>
                    </div>
                    <div class="w-full">
                        <input type="submit" value="Send Request" class="px-3 py-3 bg-blue-500 rounded-lg w-full border text-white font-bold cursor-pointer dark:bg-gray-600">
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('requestForm').addEventListener('submit', function() {
        document.getElementById('submitButton').disabled = true;
    });
    // for dropdownToggle
    document.addEventListener("DOMContentLoaded", function() {
        const dropdownToggleButton = document.getElementById("dropdownToggleButton");
        const dropdownToggle = document.getElementById("dropdownToggle");
        let isOpen = false;
        dropdownToggleButton.addEventListener("click", function(event) {
            // Prevent the click event from propagating to the document
            event.stopPropagation();
            isOpen = !isOpen;
            dropdownToggle.classList.toggle("hidden", !isOpen);
        });

        document.documentElement.addEventListener('click', function() {
            if (isOpen) {
                dropdownToggle.classList.add("hidden");
                isOpen = false;
            }
        });
    });



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