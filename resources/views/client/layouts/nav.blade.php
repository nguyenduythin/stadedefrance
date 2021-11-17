<div class="nav-holder main-menu">
    <nav>
        <ul>
            <li>
                <a href="{{ route('home') }}" class="{{ request()->is('/') ? 'act-link' : '' }}">Home </a>
            </li>
            <li>
                <a href="{{ route('menu') }}" class="{{ request()->is('menu*') ? 'act-link' : '' }}">Menu</a>
            </li>
            <li><a href="{{ route('about') }}" class="{{ request()->is('about*') ? 'act-link' : '' }}">About</a></li>
            <li><a href="{{ route('contact') }}" class="{{ request()->is('contact*') ? 'act-link' : '' }}">Contact</a>
            </li>
            <li><a href="{{ route('news') }}" class="{{ request()->is('news*') ? 'act-link' : '' }}">News</a></li>
            <li>
                <a href="{{ route('gallery') }}" class="{{ request()->is('gallery*') ? 'act-link' : '' }}">Gallery</a>
            </li>
        </ul>
    </nav>
</div>