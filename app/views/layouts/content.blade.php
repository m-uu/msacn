@extends('layouts.body')
@section('content')
<!-- Messages Drawer -->
<div id="messages" class="tile drawer animated">
    <div class="listview narrow">
        <div class="media">
            <a href="">Send a New Message</a>
            <span class="drawer-close">&times;</span>
        </div>
        <div class="overflow" style="height: 254px">
            <div class="media">
                <div class="pull-left">
                    <img width="40" src="img/profile-pics/1.jpg" alt="">
                </div>
                <div class="media-body">
                    <small class="text-muted">Nadin Jackson - 2 Hours ago</small><br>
                    <a class="t-overflow" href="">Mauris consectetur urna nec tempor adipiscing. Proin sit amet nisi ligula. Sed eu adipiscing lectus</a>
                </div>
            </div>
            <div class="media">
                <div class="pull-left">
                    <img width="40" src="img/profile-pics/2.jpg" alt="">
                </div>
                <div class="media-body">
                    <small class="text-muted">David Villa - 5 Hours ago</small><br>
                    <a class="t-overflow" href="">Suspendisse in purus ut nibh placerat Cras pulvinar euismod nunc quis gravida. Suspendisse pharetra</a>
                </div>
            </div>
            <div class="media">
                <div class="pull-left">
                    <img width="40" src="img/profile-pics/3.jpg" alt="">
                </div>
                <div class="media-body">
                    <small class="text-muted">Harris worgon - On 15/12/2013</small><br>
                    <a class="t-overflow" href="">Maecenas venenatis enim condimentum ultrices fringilla. Nulla eget libero rhoncus, bibendum diam eleifend, vulputate mi. Fusce non nibh pulvinar, ornare turpis id</a>
                </div>
            </div>
            <div class="media">
                <div class="pull-left">
                    <img width="40" src="img/profile-pics/4.jpg" alt="">
                </div>
                <div class="media-body">
                    <small class="text-muted">Mitch Bradberry - On 14/12/2013</small><br>
                    <a class="t-overflow" href="">Phasellus interdum felis enim, eu bibendum ipsum tristique vitae. Phasellus feugiat massa orci, sed viverra felis aliquet quis. Curabitur vel blandit odio. Vestibulum sagittis quis sem sit amet tristique.</a>
                </div>
            </div>
            <div class="media">
                <div class="pull-left">
                    <img width="40" src="img/profile-pics/1.jpg" alt="">
                </div>
                <div class="media-body">
                    <small class="text-muted">Nadin Jackson - On 15/12/2013</small><br>
                    <a class="t-overflow" href="">Ipsum wintoo consectetur urna nec tempor adipiscing. Proin sit amet nisi ligula. Sed eu adipiscing lectus</a>
                </div>
            </div>
            <div class="media">
                <div class="pull-left">
                    <img width="40" src="img/profile-pics/2.jpg" alt="">
                </div>
                <div class="media-body">
                    <small class="text-muted">David Villa - On 16/12/2013</small><br>
                    <a class="t-overflow" href="">Suspendisse in purus ut nibh placerat Cras pulvinar euismod nunc quis gravida. Suspendisse pharetra</a>
                </div>
            </div>
            <div class="media">
                <div class="pull-left">
                    <img width="40" src="img/profile-pics/3.jpg" alt="">
                </div>
                <div class="media-body">
                    <small class="text-muted">Harris worgon - On 17/12/2013</small><br>
                    <a class="t-overflow" href="">Maecenas venenatis enim condimentum ultrices fringilla. Nulla eget libero rhoncus, bibendum diam eleifend, vulputate mi. Fusce non nibh pulvinar, ornare turpis id</a>
                </div>
            </div>
            <div class="media">
                <div class="pull-left">
                    <img width="40" src="img/profile-pics/4.jpg" alt="">
                </div>
                <div class="media-body">
                    <small class="text-muted">Mitch Bradberry - On 18/12/2013</small><br>
                    <a class="t-overflow" href="">Phasellus interdum felis enim, eu bibendum ipsum tristique vitae. Phasellus feugiat massa orci, sed viverra felis aliquet quis. Curabitur vel blandit odio. Vestibulum sagittis quis sem sit amet tristique.</a>
                </div>
            </div>
            <div class="media">
                <div class="pull-left">
                    <img width="40" src="img/profile-pics/5.jpg" alt="">
                </div>
                <div class="media-body">
                    <small class="text-muted">Wendy Mitchell - On 19/12/2013</small><br>
                    <a class="t-overflow" href="">Integer a eros dapibus, vehicula quam accumsan, tincidunt purus</a>
                </div>
            </div>
        </div>
        <div class="media text-center whiter l-100">
            <a href=""><small>VIEW ALL</small></a>
        </div>
    </div>
</div>

<!-- Notification Drawer -->
<div id="notifications" class="tile drawer animated">
    <div class="listview narrow">
        <div class="media">
            <a href="">Notification Settings</a>
            <span class="drawer-close">&times;</span>
        </div>
        <div class="overflow" style="height: 254px">
            <div class="media">
                <div class="pull-left">
                    <img width="40" src="img/profile-pics/1.jpg" alt="">
                </div>
                <div class="media-body">
                    <small class="text-muted">Nadin Jackson - 2 Hours ago</small><br>
                    <a class="t-overflow" href="">Mauris consectetur urna nec tempor adipiscing. Proin sit amet nisi ligula. Sed eu adipiscing lectus</a>
                </div>
            </div>
            <div class="media">
                <div class="pull-left">
                    <img width="40" src="img/profile-pics/2.jpg" alt="">
                </div>
                <div class="media-body">
                    <small class="text-muted">David Villa - 5 Hours ago</small><br>
                    <a class="t-overflow" href="">Suspendisse in purus ut nibh placerat Cras pulvinar euismod nunc quis gravida. Suspendisse pharetra</a>
                </div>
            </div>
            <div class="media">
                <div class="pull-left">
                    <img width="40" src="img/profile-pics/3.jpg" alt="">
                </div>
                <div class="media-body">
                    <small class="text-muted">Harris worgon - On 15/12/2013</small><br>
                    <a class="t-overflow" href="">Maecenas venenatis enim condimentum ultrices fringilla. Nulla eget libero rhoncus, bibendum diam eleifend, vulputate mi. Fusce non nibh pulvinar, ornare turpis id</a>
                </div>
            </div>
            <div class="media">
                <div class="pull-left">
                    <img width="40" src="img/profile-pics/4.jpg" alt="">
                </div>
                <div class="media-body">
                    <small class="text-muted">Mitch Bradberry - On 14/12/2013</small><br>
                    <a class="t-overflow" href="">Phasellus interdum felis enim, eu bibendum ipsum tristique vitae. Phasellus feugiat massa orci, sed viverra felis aliquet quis. Curabitur vel blandit odio. Vestibulum sagittis quis sem sit amet tristique.</a>
                </div>
            </div>
            <div class="media">
                <div class="pull-left">
                    <img width="40" src="img/profile-pics/1.jpg" alt="">
                </div>
                <div class="media-body">
                    <small class="text-muted">Nadin Jackson - On 15/12/2013</small><br>
                    <a class="t-overflow" href="">Ipsum wintoo consectetur urna nec tempor adipiscing. Proin sit amet nisi ligula. Sed eu adipiscing lectus</a>
                </div>
            </div>
            <div class="media">
                <div class="pull-left">
                    <img width="40" src="img/profile-pics/2.jpg" alt="">
                </div>
                <div class="media-body">
                    <small class="text-muted">David Villa - On 16/12/2013</small><br>
                    <a class="t-overflow" href="">Suspendisse in purus ut nibh placerat Cras pulvinar euismod nunc quis gravida. Suspendisse pharetra</a>
                </div>
            </div>
        </div>
        <div class="media text-center whiter l-100">
            <a href=""><small>VIEW ALL</small></a>
        </div>
    </div>
</div>

<!-- Breadcrumb -->
<ol class="breadcrumb hidden-xs">
    <li><a href="#">Home</a></li>
    <li><a href="#">Library</a></li>
    <li class="active">Data</li>
</ol>

@yield('wrapper')
<!-- Chat -->
<div class="chat">
    
    <!-- Chat List -->
    <div class="pull-left chat-list">
        <div class="listview narrow">
            <div class="media">
                <img class="pull-left" src="img/profile-pics/1.jpg" width="30" alt="">
                <div class="media-body p-t-5">
                    Alex Bendit
                </div>
            </div>
            <div class="media">
                <img class="pull-left" src="img/profile-pics/2.jpg" width="30" alt="">
                <div class="media-body">
                    <span class="t-overflow p-t-5">David Volla Watkinson</span>
                </div>
            </div>
            <div class="media">
                <img class="pull-left" src="img/profile-pics/3.jpg" width="30" alt="">
                <div class="media-body">
                    <span class="t-overflow p-t-5">Mitchell Christein</span>
                </div>
            </div>
            <div class="media">
                <img class="pull-left" src="img/profile-pics/4.jpg" width="30" alt="">
                <div class="media-body">
                    <span class="t-overflow p-t-5">Wayne Parnell</span>
                </div>
            </div>
            <div class="media">
                <img class="pull-left" src="img/profile-pics/5.jpg" width="30" alt="">
                <div class="media-body">
                    <span class="t-overflow p-t-5">Melina April</span>
                </div>
            </div>
            <div class="media">
                <img class="pull-left" src="img/profile-pics/6.jpg" width="30" alt="">
                <div class="media-body">
                    <span class="t-overflow p-t-5">Ford Harnson</span>
                </div>
            </div>
            
        </div>
    </div>
    
    <!-- Chat Area -->
    <div class="media-body">
        <div class="chat-header">
            <a class="btn btn-sm" href="">
                <i class="fa fa-circle-o status m-r-5"></i> Chat with Friends
            </a>
        </div>
    
        <div class="chat-body">
            <div class="media">
                <img class="pull-right" src="img/profile-pics/1.jpg" width="30" alt="" />
                <div class="media-body pull-right">
                    Hiiii<br/>
                    How you doing bro?
                    <small>Me - 10 Mins ago</small>
                </div>
            </div>
            
            <div class="media pull-left">
                <img class="pull-left" src="img/profile-pics/2.jpg" width="30" alt="" />
                <div class="media-body">
                    I'm doing well buddy. <br/>How do you do?
                    <small>David - 9 Mins ago</small>
                </div>
            </div>
            
            <div class="media pull-right">
                <img class="pull-right" src="img/profile-pics/2.jpg" width="30" alt="" />
                <div class="media-body">
                    I'm Fine bro <br/>Thank you for asking
                    <small>Me - 8 Mins ago</small>
                </div>
            </div>
            
            <div class="media pull-right">
                <img class="pull-right" src="img/profile-pics/2.jpg" width="30" alt="" />
                <div class="media-body">
                    Any idea for a hangout?
                    <small>Me - 8 Mins ago</small>
                </div>
            </div>
        
        </div>
    
        <div class="chat-footer media">
            <i class="chat-list-toggle pull-left fa fa-bars"></i>
            <i class="pull-right fa fa-picture-o"></i> 
            <div class="media-body">
                <textarea class="form-control" placeholder="Type something..."></textarea>
            </div>
        </div>
    </div>
</div>
@endsection