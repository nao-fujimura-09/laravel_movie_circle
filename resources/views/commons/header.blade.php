<header class="mb-5">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
 
        <a class="navbar-brand" href="/">MOVIE.circle</a>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            
            <ul class="navbar-nav">
                
                @if(Auth::check())
                
                <li class="nav-item">{!! link_to_route('logout', 'ログアウト', [], ['class' => 'nav-link']) !!}</li>
                <li class="nav-item">{!! link_to_route('signup', 'マイページ', [], ['class' => 'nav-link']) !!}</li>
                
                @else
                
                <li class="nav-item">{!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
                <li class="nav-item">{!! link_to_route('signup', '新規登録', [], ['class' => 'nav-link']) !!}</li>
                
                @endif
                
            </ul>
        </div>
    </nav>

    @if(Auth::check())
        {{ Auth::user()->name }} 様
    @endif

</header>