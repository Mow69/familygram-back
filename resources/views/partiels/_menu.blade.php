<div class="row mt-2 mb-5">
    <div class="col">
        <ul class="nav nav-pills justify-content-center">
            @guest
                <li class="nav-item">
                    <a class="nav-link {{ Request::path()=="/"?"active":"" }}" href="/">Accueil</a>
                </li>
            @endguest
            @auth
                <li class="nav-item">
                    <a class="nav-link {{ Request::path()=="/posts"?"active":"" }}" href="/posts">Feed</a>
                </li>
            @endauth
        </ul>
    </div>
</div>