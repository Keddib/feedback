@extends('layouts.master')

@section('header')
    @include('partials.header')
@endsection

@section('content')

<div class="main flex">

    <div class="img w-1/2">
        <img src="storage/app/public/artisan" alt="image">
    </div>
    <div class="welcome w-1/2">
        <h1>Wlecome to FeedBack</h1>
        <h2>Share your thoughts</h2>
        <button button>Continue</button>
    </div>

</div>

@endsection

@section('footer')
    @include('partials.footer')
@endsection
