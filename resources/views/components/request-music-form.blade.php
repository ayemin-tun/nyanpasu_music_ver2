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