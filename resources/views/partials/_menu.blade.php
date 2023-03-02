<div class="sidebar__menu-group">
    <ul class="sidebar_nav">

        <li>
            <a href="{{ route('cases') }}" class="{{ Request::is('cases') ? 'active':'' }}">
                <span class="nav-icon">
                    <i class="fa-solid fa-suitcase"></i>
                </span>
                <span class="menu-text">Cases</span>
            </a>
        </li>
    </ul>
</div>
