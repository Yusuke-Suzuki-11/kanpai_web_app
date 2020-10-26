<header class="main-header">
    <div class="main-logo">
        <a href="#" class="main-logo-link">KANPAI!!</a>
    </div>

    @if( Auth::check() )
    <div>
        <ul class="main-header-menus">
            <li>
                <a href="#" class="header-menus-li" >ダミー</a>
            </li>
            <li>
                <a href="{{route('register')}}" class="header-menus-li">ダミー２</a>
            </li>
            <li>
                <a href="{{route('login')}}" class="header-menus-li">ダミー３</a>
            </li>
            <li>
                <a class="show-signout-li" rel="nofollow" data-method="POST" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
            </li>
        </ul>
    </div>
    @else
        <div>
            <ul class="main-header-menus">
                <li>
                <a href="{{route('login')}}" class="header-menus-li" >アプリの使い方</a>
                </li>
                <li>
                    <a href="{{route('register')}}" class="header-menus-li">新規登録</a>
                </li>
                <li>
                    <a href="{{route('login')}}" class="header-menus-li">ログイン</a>
                </li>

            </ul>
        </div>
    @endif
</header>
