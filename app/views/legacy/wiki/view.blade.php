@extends('layouts.default')

@section('content')
<div class="row">
	<div class="large-12 columns">
	    <h1>{{ Legacy::locale('legacy_wiki') }}</h1>
	</div>
	@if ($icon)
		<div class="large-1 columns"><img src="{{ URL::asset($icon) }}" alt=""></div>
	    <div class="large-11 columns">
	        <div class="panel">
	            <h1> {{ $title }} </h1>
	            <p> {{ $content }} </p>
	        </div>
    	</div>
    @else
	    <div class="large-12 columns">
	        <div class="panel">
	            <h1> {{ $title }} </h1>
	            <p> {{ $content }} </p>
	        </div>
    	</div>
	@endif
</div>
@endsection
