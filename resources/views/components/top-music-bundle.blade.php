@props(['music'])

<div class="w-full md:h-[30rem] h-auto border-none m-0 p-0">
    <div class="w-full h-full bg-cover bg-center shadow" style="background-image: url('{{ asset('storage/' . $music['image']) }}');">
        <div class="w-full h-full bg-transparentBlack dark:bg-transparentBlack2 flex justify-start items-center md:p-20 p-4">
            <div>
                <span class="mb-10 text-sm bg-blue-800 text-white md:px-3 md:py-1 px-1 py-1 md:rounded-xl rounded-md">
                    Latest Add
                </span>
                <h1 class="text-white md:mt-4 font-extrabold md:text-[40px] text-xl">
                    {{$music['name']}}
                </h1>
                <p class="md:mt-3 text-white md:text-base text-sm">
                    Artist: {{$music['artist']}}
                </p>
                <p class="mt-5 md:text-lg text-sm text-white md:block hidden">
                    {{$music['description']}}
                </p>
                <p class="mt-2 md:text-lg text-[12px] text-white md:hidden block">
                    {{ Str::limit($music['description'], $limit = 100, $end = '...') }}
                </p>
                <button class="bg-blue-800 md:text-lg text-sm text-white md:font-bold md:px-10 px-2 py-1 md:py-3 mt-3 md:rounded-xl rounded-md flex gap-1 items-center">
                    Go Watch
                </button>

            </div>
        </div>
    </div>
</div>