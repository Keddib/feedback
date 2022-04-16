@extends('layouts.master')

@section('title', 'Feeds')

@section('header')
    @include('partials.header')
@endsection

@section('content')

<div class="main flex flex-col justify-center container m-auto w-full py-4">
	<div class="bar w-1/2 m-auto border bg-white flex justify-between p-4">
		<h1 class="text-xl font-medium text-slate-900" >Create you feed</h1>
		<div class="icon">
			<button class="p-0 m-0" onclick="location.href='{{ route('create') }}'"  >
				<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 hover:text-main-blue" viewBox="0 0 20 20" fill="rgb(100 116 139)">
					<path fill-rule="evenodd" d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z" clip-rule="evenodd" />
				</svg>
			</button>
		</div>
	</div>
	<ul role="list" class="px-6 pt-6  divide-y divide-slate-200 w-full flex flex-col justify-center">
		{{-- {#each people as person} --}}
		@foreach ($feeds as $feed)

		<li class="flex first:pt-0 last:pb-0 bg-white w-1/2 m-auto justify-center mb-4 items-center border">
		  <img class="h-20 w-20 rounded-full m-4" src="{{ URL::to('/images/art.png') }}" alt="" />
		  <div class="ml-3 overflow-hidden w-1/2 m-4 flex flex-col justify-center">
			<p class="text-2xl font-medium text-slate-900"> {{$feed->nickname}} </p>
			<p class="text-xl text-slate-500"> {{$feed->text}} </p>
		  </div>
		</li>

		@endforeach
	  </ul>
</div>

@endsection
