@extends('layouts.master')
@section('content')
<div class="w-full md:h-96 bg-cover bg-center h-56 flex items-center justify-center" style="background-image: url('{{asset('images/searchbackground.jpg')}}">
    <div class="flex text-lg md:w-96 w-60">

    </div>
</div>
<div class="md:container">
    <section class="md:p-7 p-2">
        <h1 class="dark:text-white font-extrabold text-blue-800 text-lg md:pt-2 pt-5">
            @lang('home.‌all_music')
        </h1>
        @if(count($musics) > 0)
        <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-2 mt-3">
            @foreach($musics as $music)
            <x-music-card :music="$music" />
            @endforeach
        </div>
        @else
        <div class="flex justify-between items-center text-lg font-bold bg-orange-400 rounded-xl text-white w-full p-3 my-3">
            <span class="p-3">
                No music
            </span>
            <a href="{{route('all_music')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd" d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12L5.47 6.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
        @endif
        <x-go-home-button />
    </section>
</div>

</div>
@endsection