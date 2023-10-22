@props(['music'])

<div class="w-full h-auto border-none m-0 p-0">
    <div class="w-full h-full bg-cover bg-center shadow" style="background-image: url('{{ asset('storage/' . $music['image']) }}');">
        <div class="w-full h-full bg-transparentBlack flex justify-start items-start md:p-20 p-4">
            <div class="w-full h-auto bg-white dark:bg-transparentBlack rounded-2xl p-3 ">
                <a href="{{route('all_music')}}">
                    <span class="pb-2 dark:text-white font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>
                    </span>
                </a>
                <div class="w-full h-auto grid md:grid-cols-2 gap-3 mt-2 md:mt-0">
                    <div class="md:p-6">
                        <img src="{{ asset('storage/' . $music['image']) }}" alt="" class="w-full md:h-96 h-50 rounded-xl">
                    </div>
                    <div>
                        <h1 class="dark:text-white md:mt-4 font-extrabold md:text-[35px] text-xl">
                            {{$music['name']}}
                        </h1>
                        <p class="md:mt-3 dark:text-white md:text-base text-sm">
                            Artist: {{$music['artist']}} <br>
                            Movie: {{$music['movie_name']?$music['movie_name']:"No Movie"}}
                        </p>
                        <p class="md:mt-3 text-white md:text-base text-sm">

                        </p>
                        <p class="dark:text-white mt-4 border-t-2 border-b-2 pt-4 pb-4">
                            <span class="md:text-base text-sm">
                                {{$music['description']}}
                            </span>
                        </p>
                        <a href="{{$music['download_link'] }}" download="music_filename.mp3">
                            <button class="px-4 py-2 bg-blue-800 text-white font-bold mt-5 rounded-md flex justify-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                                    <g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd">
                                        <path d="M5.478 5.559A1.5 1.5 0 0 1 6.912 4.5H9A.75.75 0 0 0 9 3H6.912a3 3 0 0 0-2.868 2.118l-2.411 7.838a3 3 0 0 0-.133.882V18a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3v-4.162c0-.299-.045-.596-.133-.882l-2.412-7.838A3 3 0 0 0 17.088 3H15a.75.75 0 0 0 0 1.5h2.088a1.5 1.5 0 0 1 1.434 1.059l2.213 7.191H17.89a3 3 0 0 0-2.684 1.658l-.256.513a1.5 1.5 0 0 1-1.342.829H10.39a1.5 1.5 0 0 1-1.342-.83l-.256-.512a3 3 0 0 0-2.684-1.658H3.265l2.213-7.191Z" />
                                        <path d="M12 2.25a.75.75 0 0 1 .75.75v6.44l1.72-1.72a.75.75 0 1 1 1.06 1.06l-3 3a.75.75 0 0 1-1.06 0l-3-3a.75.75 0 0 1 1.06-1.06l1.72 1.72V3a.75.75 0 0 1 .75-.75Z" />
                                    </g>
                                </svg>
                                Download Music
                            </button>
                        </a>
                    </div>
                </div>



            </div>

        </div>
    </div>
</div>