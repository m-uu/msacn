@extends('layouts.default')

@section('content')
<img class="legacy_item_bg" src="{{ Request::root().'/img/legacy/bgs/test1.png' }}" alt=""/>
<div class="row">
    <div class="large-12 columns">
        <div class="panel text-center"><h1>{{ $item->name }}</h1></div>
    </div>
    <div class="large-12 columns">
        <div class="panel">
            <p>{{ $desc->description }}</p>
            <p>创建者：{{ link_to_route('player_view', Player::find($desc->creator)->nickname, $desc->creator) }}</p>
        </div>
    </div>
</div>

@endsection
