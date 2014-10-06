@extends('layouts.default')

@section('content')
<div class="row">
	<div class="large-12 columns">
	    <h1>{{ Legacy::locale('create_wiki') }}</h1>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<div class="panel">
				{{ Form::open(['route'=> 'legacy_wiki_store']) }}
				<p>
					{{ Form::label('wiki_title', Legacy::locale('wiki_title')) }}
					{{ Form::text('wiki_title') }}
				</p>
				<p>
					{{ Form::label('wiki_content', Legacy::locale('wiki_content')) }}
					{{ Form::textarea('wiki_content') }}
				</p>
				<p>
					{{ Form::submit(Legacy::locale('submit')) }}
				</p>
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>
@endsection
