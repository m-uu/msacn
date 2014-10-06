@extends('layouts.default')

@section('content')

<div class="row">
    <div class="large-12 columns">
        <div class="panel"><h1>{{ $player->email }}</h1></div>
    </div>
    <div class="large-12 columns">
    	<div class="panel">
    		<p>这个邮箱似乎曾经被用于注册遗产的游戏账号。如果你还记得密码的话，你就能将它归入自己的网站账号里！</p>
    		{{ Form::open() }}
    		{{ Form::label('legacy_password', '遗产的密码') }}
    		{{ Form::password('legacy_password') }}
    		{{ Form::submit('碰碰运气！') }}
    		{{ Form::hidden('email', $player->email) }}
    		{{ Form::close() }}
    	</div>
    </div>
</div>

@endsection
