@php
    $info_web = \App\Models\AboutU::find(1);
@endphp
<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container d-flex align-items-center position-relative d-header">
        <a href="{{route('home')}}" class="logo align-items-center scrollto me-auto me-lg-0 white">
            <img class="logo" src="{{$info_web['logo_white']}}" alt="logo" width="120px">
        </a>
        <a href="{{route('home')}}" class="logo align-items-center scrollto me-auto me-lg-0 violet">
            <img class="logo" src="{{$info_web['logo']}}" alt="logo" width="120px">
        </a>
        <nav class="navbar nav-menu navbar-expand-lg navbar-light ml-0">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @foreach($menus as $menu)
                        @if(isset($menu['slug']))
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" aria-current="page" href="{{route('slug',['category_slug' => $menu['slug']])}}">{{$menu['name']}}</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" aria-current="page" target="_blank" href="{{$menu['url']}}">{{$menu['name']}}</a>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                    <form class="d-flex" action="{{route('search')}}">
                        <div class="search position-relative">
                            <input class="form-control me-2" type="search" name="key" placeholder="Từ khóa ..." aria-label="Search">
                            <img class="icon-search" src="/front-end/images/search.png" alt="search" width="20">
                            <img class="icon-search-top" src="/front-end/icons/search_white.png" alt="search" width="20">
                        </div>
                        {{--                            <button class="btn btn-outline-success" type="submit">Search</button>--}}
                    </form>
                </div>
            </div>
        </nav>
    </div>
</header>
