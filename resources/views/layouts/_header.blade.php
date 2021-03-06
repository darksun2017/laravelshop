<nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('/') }}">
                Laravel Shop
            </a>
        </div>
        <div>
            <ul class="nav navbar-nav">
            @guest
                <li><a href="{{route('login')}}">登录</a></li>
                <li><a href="{{route('register')}}">注册</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="user-avatar pull-left" style="margin-right:8px; margin-top:-5px;">
                            <img src="/images/userImg.png" class="img-responsive img-circle" width="30px" height="30px">
                        </span>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                退出登录
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endguest
            </ul>
        </div>
    </div>
</nav>