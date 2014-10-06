@extends('layouts.default')

@section('content')
<div class="row">
	<div class="large-12 columns">
	    <h1>{{ Legacy::locale('legacy_wiki_index') }}</h1>
	</div>
    <div class="large-12 columns">
        <div class="panel">
        	<ul>
        	@foreach ($wikis as $wiki)
            	<li> @if ($wiki->icon) <img src="{{ URL::asset($wiki->icon) }}" alt=""/> @endif {{ link_to_route('legacy_wiki_view', $wiki->title, $wiki->id) }} </a> </li>
            @endforeach
            </ul>
        </div>
	</div>
</div>
@endsection