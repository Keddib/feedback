@extends('layouts.master')

@section('title', 'create')

@section('header')
    @include('partials.header')
@endsection

@section('content')

<div class="main flex flex-col justify-center container m-auto w-full py-4">
	<div class="bar w-1/2 m-auto border bg-white p-4">
		<form action="{{ route('store') }}" method="post">
			@csrf
			<label class="block">
				<span class="block text-sm font-medium text-slate-700">Nick Name</span>
				<!-- Using form state modifers, the classes can be identical for every input -->
				<input type="text" name="nickname" placeholder="Nickname" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
				  focus:outline-none focus:border-main-blue focus:ring-1 focus:ring-main-blue
				  disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
				  invalid:border-pink-500 invalid:text-pink-600
				  focus:invalid:border-pink-500 focus:invalid:ring-pink-500
				"/>
			  </label>
			<label class="block">
				<span class="block text-sm font-medium text-slate-700">Message</span>
				<!-- Using form state modifers, the classes can be identical for every input -->
				<textarea  name="text" placeholder="feel free to write anything" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
				  focus:outline-none focus:border-main-blue focus:ring-1 focus:ring-main-blue
				  disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
				  invalid:border-pink-500 invalid:text-pink-600
				  focus:invalid:border-pink-500 focus:invalid:ring-pink-500
				"> </textarea>
			  </label>
			  <div class="flex justify-end  mt-4 pr-4">
				  <button class="button w-1/3 px-8 mr-4 my-y text-mr py-1 text-white font-semibold rounded-full border bg-main-blue border-main-blue hover:text-main-blue hover:bg-white focus:outline-none focus:ring-2 focus:ring-main-blue focus:ring-offset-2 ">submit</button>
			  </div>
			  <!-- ... -->
		</form>
	</div>

</div>

@endsection
