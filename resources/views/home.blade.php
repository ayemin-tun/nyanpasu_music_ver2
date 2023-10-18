@extends('layouts.master')
@section('content')
<x-top-music-bundle :music="$latestMusic" />
<div class="dark:bg-slate-700 dark:text-white md:container w-full">

    <section class="md:p-7 p-2">
        <h1 class="text-black dark:text-white font-bold text-lg">Latest Add</h1>
        <div class="grid md:grid-cols-3 gap-2 mt-3">
            @foreach($allMusics as $music)
            <x-music-card :music="$music" />
            @endforeach
        </div>
        <x-more-music-button />
    </section>
</div>

@endsection