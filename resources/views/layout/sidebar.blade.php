<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="{{ url('otika') }}/assets/img/logo.png" class="header-logo" />
                <span class="logo-name">DIKO ADMIN</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown @if (request()->routeIs('home')) active @endif">
                <a href="{{ route('home') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
                <a href="" class="nav-link"><i data-feather="user"></i><span>Data User</span></a>
            </li>
        </ul>
        <ul class="sidebar-menu">
            <li class="menu-header">Landing Page Utama</li>
            <li class="dropdown @if (request()->routeIs('fitur')) active @endif">
                <a href="{{ route('fitur') }}" class="nav-link"><i data-feather="layers"></i><span>Features</span></a>
            </li>
            <li class="dropdown @if (request()->routeIs('faq')) active @endif">
                <a href="{{ route('faq') }}" class="nav-link"><i data-feather="help-circle"></i><span>FAQ</span></a>
            </li>
        </ul>
        <ul class="sidebar-menu">
            <li class="menu-header">DIKO POS</li>
            <li class="dropdown @if (request()->routeIs('posFitur')) active @endif">
                <a href="{{ route('posFitur') }}" class="nav-link"><i data-feather="layers"></i><span>Features POS</span></a>
            </li>
            <li class="dropdown @if (request()->routeIs('posPlugin')) active @endif">
                <a href="{{ route('posPlugin') }}" class="nav-link"><i data-feather="package"></i><span>Plugin</span></a>
            </li>
            <li class="dropdown @if (request()->routeIs('posPricing')) active @endif">
                <a href="{{ route('posPricing') }}" class="nav-link"><i data-feather="tag"></i><span>Pricing</span></a>
            </li>
            <li class="dropdown @if (request()->routeIs('pos.faq')) active @endif">
                <a href="{{ route('pos.faq') }}" class="nav-link"><i data-feather="help-circle"></i><span>FAQ</span></a>
            </li>
        </ul>
        <ul class="sidebar-menu">
            <li class="menu-header">DIKO SP</li>
            <li class="dropdown @if (request()->routeIs('spFitur')) active @endif">
                <a href="{{ route('spFitur') }}" class="nav-link"><i data-feather="layers"></i><span>Features SP</span></a>
            </li>
            <li class="dropdown @if (request()->routeIs('spPlugin')) active @endif">
                <a href="{{ route('spPlugin') }}" class="nav-link"><i data-feather="package"></i><span>Plugin</span></a>
            </li>
            <li class="dropdown @if (request()->routeIs('spPricing')) active @endif">
                <a href="{{ route('spPricing') }}" class="nav-link"><i data-feather="tag"></i><span>Pricing</span></a>
            </li>
            <li class="dropdown @if (request()->routeIs('sp.faq')) active @endif">
                <a href="{{ route('sp.faq') }}" class="nav-link"><i data-feather="help-circle"></i><span>FAQ</span></a>
            </li>
        </ul>
    </aside>
</div>
