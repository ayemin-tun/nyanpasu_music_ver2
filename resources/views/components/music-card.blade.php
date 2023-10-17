@props(['music'])
<div class="flex md:flex-row flex-col gap-4 my-2 w-full dark:border-0 border bg-white dark:bg-slate-800 p-5 rounded-lg items-center shadow">
    <div>
        <img src="{{ asset('storage/' . $music['image']) }}" alt="" class="w-20 h-20 rounded-lg shadow-sm">
    </div>
    <div>
        <h5 class="flex gap-1 mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
            <span class="text-blue-500 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m9 9l10.5-3m0 6.553v3.75a2.25 2.25 0 0 1-1.632 2.163l-1.32.377a1.803 1.803 0 1 1-.99-3.467l2.31-.66a2.25 2.25 0 0 0 1.632-2.163Zm0 0V2.25L9 5.25v10.303m0 0v3.75a2.25 2.25 0 0 1-1.632 2.163l-1.32.377a1.803 1.803 0 0 1-.99-3.467l2.31-.66A2.25 2.25 0 0 0 9 15.553Z" />
                </svg>
            </span>
            {{$music['name']}}
        </h5>
        <p class="text-gray-600 dark:text-white text-base font-semibold">Artist: {{$music['artist']}}</p>
    </div>
</div>