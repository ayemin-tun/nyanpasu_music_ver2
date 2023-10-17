@extends('layouts.master')
@section('content')
<div class="dark:bg-slate-700 dark:text-white md:container w-full">
    <section class="md:p-7 p-2">
        <h1 class="text-black dark:text-white font-bold text-lg">Latest Music</h1>
        <div class="grid md:grid-cols-2 gap-2 mt-3">
            @foreach($allMusics as $music)
            <x-music-card :music="$music" />
            @endforeach
        </div>
    </section>
</div>

@endsection