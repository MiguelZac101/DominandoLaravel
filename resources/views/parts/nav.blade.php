<nav>
    {{dump(request()->path())}}
    <ul>
        <li class="{{setActive('home')}}">
            <a href="/">@lang('Home')</a>
        </li>
        <li class="{{setActive('about')}}">
            <a href="/about">about</a>
        </li>
        <li class="{{setActive('portafolio')}}">
            <a href="/portafolio">portafolio</a>
        </li>
        <li class="{{request()->routeIs('contact')?'active':''}}">
            <a href="/contact">@lang('Contact')</a>
        </li>
    </ul>
</nav>