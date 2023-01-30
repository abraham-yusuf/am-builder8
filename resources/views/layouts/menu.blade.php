<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('io_generator_builder') }}" class="nav-link {{ Request::is('generator_builder') ? 'active' : '' }}">
        <i class="nav-icon fas fa-code"></i>
        <p>Builder</p>
    </a>
</li>

