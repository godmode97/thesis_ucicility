<div class="navbar-holder">
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}">
                    <span class="icon-uccility"></span>UCCILITY
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle admin-img" href="#" data-toggle="dropdown" role="button" aria-expanded="false">
                        <img src="{{asset('img/img_avatar3.png')}}" alt="profile_pic" class="img-thumbnail img-circle admin-photo">&nbsp;
                        {{ Auth::user()->fname }} {{ Auth::user()->lname }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>
</div>