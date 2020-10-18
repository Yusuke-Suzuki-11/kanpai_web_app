<header class="main-header">
    <div class="main-logo">
        <a href="#" class="main-logo-link">KANPAI!!</a>
    </div>

    @if( Auth::check() )
    <div>
        <ul class="main-header-menus">
            <li>
                <a href="#" class="header-menus-li" >これ何</a>
            </li>
            <li>
                <a href="{{route('register')}}" class="header-menus-li">test</a>
            </li>
            <li>
                <a href="{{route('login')}}" class="header-menus-li">test</a>
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
                    <a href="#" class="header-menus-li">新規登録</a>
                </li>
                <li>
                    <a href="#" class="header-menus-li">ログイン</a>
                </li>
            </ul>
        </div>
    @endif
</header>
