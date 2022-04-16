@extends('layouts.master')

@section('header')
    @include('partials.header')
@endsection

@section('content')

<div class="main flex bg-white">

    <div class="img w-3/5 bg-[url('/images/art.png')] bg-cover bg-no-repeat bg-center">
        <img src="{{ URL::to('/images/art.png') }}" class="h-full py-11" >
    </div>
    <div class="welcome py-4 px-10 flex flex-col justify-center w-2/5">
        <div class="my-4 ">
            <blockquote class=" text-6xl font-semibold italic text-slate-900">
                Welcome To
                <span class="mx-2 before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-main-blue relative inline-block">
                  <span class="relative text-white">FEEDs</span>
                </span>
              </blockquote>
        </div>
        <h2 class=" my-4 text-2xl pl-1 font-semibold italic text-slate-900" >Share your thoughts</h2>
        <button onclick="location.href='{{ route('feeds') }}'" class=" w-1/3 px-8 mr-4 my-y text-mr py-1 text-white font-semibold rounded-full border bg-main-blue border-main-blue hover:text-main-blue hover:bg-white focus:outline-none focus:ring-2 focus:ring-main-blue focus:ring-offset-2 ">
            Continue
        </button>

    </div>

</div>

@endsection

@section('footer')
    @include('partials.footer')
@endsection
