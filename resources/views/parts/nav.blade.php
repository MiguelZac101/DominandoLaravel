<nav>
    {{dump(request()->path())}}
    <ul>
        <li class="{{setActive('home')}}">
            <a href="{{route('home')}}">@lang('Home')</a>
        </li>
        <li class="{{setActive('about')}}">
            <a href="{{route('about')}}">about</a>
        </li>
        <li class="{{setActive('projects.*')}}">
            <a href="{{route('projects.index')}}">projects</a>
        </li>
        <li class="{{request()->routeIs('contact')?'active':''}}">
            <a href="{{route('contact')}}">@lang('Contact')</a>
        </li>
    </ul>
</nav>