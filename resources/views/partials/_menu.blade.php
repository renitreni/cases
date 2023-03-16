<div class="sidebar__menu-group">
    <ul class="sidebar_nav">

        <li>
            <a href="{{ route('cases') }}" class="{{ Request::is('cases') ? 'active':'' }}">
                <span class="nav-icon">
                    <i class="fa-solid fa-suitcase"></i>
                </span>
                <span class="menu-text">SRA/Company</span>
            </a>
        </li>
        <li>
            <a href="{{ route('lifted') }}" class="{{ Request::is('lifted') ? 'active':'' }}">
                <span class="nav-icon">
                    <i class="fa-solid fa-award"></i>
                </span>
                <span class="menu-text">Lifted</span>
            </a>
        </li>
        <li>
            <a href="{{ route('searchables') }}" class="{{ Request::is('searchables') ? 'active':'' }}">
                <span class="nav-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </span>
                <span class="menu-text">Searchables</span>
            </a>
        </li>
        <li>
            <a href="{{ route('users') }}" class="{{ Request::is('users') ? 'active':'' }}">
                <span class="nav-icon">
                    <i class="fa-solid fa-user"></i>
                </span>
                <span class="menu-text">User</span>
            </a>
        </li>
    </ul>
</div>
