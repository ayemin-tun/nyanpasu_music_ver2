<div class="w-full md:h-96 bg-cover bg-center h-56 flex items-center justify-center" style="background-image: url('{{asset('images/searchbackground.jpg')}}">
    <div class="flex text-lg md:w-96 w-60">
        <span class="inline-flex items-center md:px-5 md:py-5 px-3 py-2 text-sm text-gray-900 bg-blue-800 border border-r-0 rounded-l-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="text-white font-extrabold" width="22" height="22" viewBox="0 0 24 24">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m21 21l-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
        </span>
        <input type="text" id="website-admin" class="rounded-none rounded-r-lg bg-transparentBlack text-white border focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full p-2.5 text-lg" placeholder="Search Music ..." wire:model.live.debounce.300ms="search" name="search">
    </div>
</div>