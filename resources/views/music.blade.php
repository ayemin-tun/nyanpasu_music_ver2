@extends('layouts.master')
@section('content')
<x-music-search-bundle />
<div class="md:container">
    <section class="md:p-7 p-2">
        <h1 class="dark:text-white font-extrabold text-blue-800 text-lg md:pt-2 pt-5">All Music</h1>
        <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-2 mt-3">
            @foreach($musics as $music)
            <x-music-card :music="$music" />
            @endforeach
        </div>
        <x-go-home-button />
    </section>
</div>

@endsection