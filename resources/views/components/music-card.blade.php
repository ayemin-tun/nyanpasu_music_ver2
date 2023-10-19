@props(['music'])
<a href="{{url('/music/'.$music['id'])}}">
    <div class="mt-3 h-48 relative overflow-hidden rounded-xl cursor-pointer">
        <div class="h-48 relative bg-gradient-to-r from-cyan-500 to-blue-500 bg-cover bg-center hover:scale-125 duration-300 border shadow-sm rounded-xl" style="background-image: url('{{ asset('storage/' . $music['image']) }}');">
        </div>
        <div class="pl-3 absolute bottom-0 left-0 h-16 py-2 w-2/3 rounded-tr-full shadow-lg bg-blue-800   overflow-hidden">
            <p class="text-white px-2 font-bold text-base">
                {{ Str::limit($music['name'], $limit = 20, $end = '...') }}
            </p>
            <p class="text-white px-2 font-bold text-[12px]">
                {{ Str::limit($music['artist'], $limit = 30, $end = '...') }}
            </p>

        </div>
    </div>
</a>