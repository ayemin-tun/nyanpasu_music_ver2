@props(['musics'])
<div class="w-full md:h-[35rem] h-auto border-none m-0 p-0">
    <div class="w-full h-full mx-auto relative" x-data="{ activeSlide: 0, slides:{{ json_encode($musics) }} }">
        <!-- Slides -->
        <template x-for="(slide, index) in slides" :key="index">
            <div class="w-full h-full bg-cover bg-center shadow" x-show="activeSlide === index" x-bind:style="`background-image: url('{{ asset('storage/${slide.image}') }}')`">
                <div class="w-full h-full bg-transparentBlack flex justify-start items-center md:p-20 p-4">
                    <div>
                        <span class="mb-10 text-sm bg-blue-800 text-white md:px-3 md:py-1 px-1 py-1 md:rounded-xl rounded-md">
                            Latest Add
                        </span>
                        <h1 class="text-white md:mt-4 font-extrabold md:text-[40px] text-xl" x-text="slide.name">
                        </h1>
                        <p class="md:mt-3 text-white md:text-base text-sm" x-text="slide.artist">
                        </p>
                        <p class="mt-5 md:text-lg text-sm text-white " x-text="slide.description">
                        </p>
                        <a :href="`/music/${slide.id}`">
                            <button class="bg-blue-800 md:text-lg text-sm text-white md:font-bold md:px-10 px-2 py-1 md:py-3 mt-3 md:rounded-xl rounded-md flex gap-1 items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                        <path d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178c.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path d="M15 12a3 3 0 1 1-6 0a3 3 0 0 1 6 0Z" />
                                    </g>
                                </svg>
                                Go Watch
                            </button>
                        </a>

                    </div>
                </div>

            </div>
        </template>

        <!-- Prev/Next Arrows -->
        <div class="absolute inset-0 flex h-14 top-1/2">
            <div class="flex items-center justify-start w-1/2">
                <button class=" font-bold hover:bg-transparentBlack3 hover:text-white w-14 h-14 rounded-full text-xl  text-white" x-on:click="activeSlide = (activeSlide - 1 + slides.length) % slides.length">
                    <span class="md:block hidden">&#8592;</span>
                </button>
            </div>
            <div class="flex items-center justify-end w-1/2">
                <button class=" font-bold hover:bg-transparentBlack3 hover:text-white w-14 h-14 text-xl text-white rounded-full" x-on:click="activeSlide = (activeSlide + 1) % slides.length">
                    <span class="md:block hidden">&#8594;</span>
                </button>
            </div>
        </div>

        <!-- Buttons -->
        <div class="absolute w-full flex items-center md:bottom-4 bottom-0 justify-center">
            <div class="px-4 text-center">

                <template x-for="(slide, index) in slides" :key="index">
                    <button class="flex-1 w-4 h-2 mt-4 mx-2 mb-0 rounded-full overflow-hidden transition-colors duration-200 ease-out hover:bg-teal-600 hover:shadow-lg" :class="{ 
                        'bg-orange-600': activeSlide === index,
                        'bg-teal-300': activeSlide !== index 
                    }" x-on:click="activeSlide = index"></button>
                </template>
            </div>
        </div>
    </div>
</div>