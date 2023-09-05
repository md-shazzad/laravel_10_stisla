<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown {{ request()->routeIs('dashboard.*') ? 'active' : '' }}">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ request()->routeIs('dashboard.general') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="">General Dashboard</a>
                    </li>
                    <li class="{{ request()->routeIs('dashboard.ecommerce') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="">Ecommerce Dashboard</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">Starter</li>
            
            <li class="{{ request()->routeIs('blank_page') ? 'active' : '' }}">
                <a class="nav-link"
                    href=""><i class="far fa-square"></i> <span>Blank Page</span></a>
            </li>
            
        </ul>
    </aside>
</div>
