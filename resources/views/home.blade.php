@extends('layouts.master')
@section('content')
<?php
// dd($allMusicsCarousel)
?>
<x-image-carousel :musics="$allMusicsCarousel" />
<div class="dark:bg-slate-700 dark:text-white md:container w-full">
    <section class="md:p-7 p-2">
        <div class="w-full flex justify-between items-center">
            <h1 class="dark:text-white font-extrabold text-blue-800 text-lg">Available Music</h1>
            <a href="{{route('all_music')}}">
                <span class="pb-2 text-blue-800 font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m8.25 4.5l7.5 7.5l-7.5 7.5" />
                    </svg>
                </span>
            </a>

        </div>

        <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-2 mt-3">
            @foreach($allMusics as $music)
            <x-music-card :music="$music" />
            @endforeach
        </div>
        <x-more-music-button />

    </section>
</div>

@endsection