@extends('layouts.master')
@section('content')
<div class="dark:bg-slate-700 dark:text-white">
    <section x-data="{name: 'Aye Min Tun'}">
        <h3 x-text="name"></h3>
    </section>
</div>

@endsection