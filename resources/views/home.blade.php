@extends('layouts.master')
@section('content')
<?php
// dd($allMusicsCarousel)
?>
<x-image-carousel :musics="$allMusicsCarousel" />
<div class="dark:bg-slate-700 dark:text-white md:container w-full">
    <section class="md:p-7 p-2">
        <h1 class="dark:text-white font-extrabold text-blue-800 text-lg md:pt-2 pt-5">Available Music</h1>
        <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-2 mt-3">
            @foreach($allMusics as $music)
            <x-music-card :music="$music" />
            @endforeach
        </div>
        <x-more-music-button />
    </section>
</div>

@endsection