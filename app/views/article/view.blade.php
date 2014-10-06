@extends('layouts.default')

@section('content')
<div class="row">
    <div class="large-12 columns">
        <div class="panel text-center">
    		<h1>{{ $article->title }}</h1>
        </div>
    </div>
    <div class="large-12 columns">
        <div class="panel">
            <p>{{ $article->content }}</p>
            <p>创建者：{{ link_to_route('player_view', Player::find($article->creator)->nickname, $article->creator) }}</p>
        </div>
    </div>
</div>

@endsection
