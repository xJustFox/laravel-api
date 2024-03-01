<aside class="asideMenu">
    <ul class=" list-unstyled ">
        <li>
            <a class="asideMenuLink" href="{{ route('admin.dashboard') }}">
                <i class="fa-solid fa-gauge {{ Route::currentRouteName() == 'admin.dashboard' ? 'activeRoute' : '' }}"></i>
                <span class="{{ Route::currentRouteName() == 'admin.dashboard' ? 'activeRoute' : '' }}">{{ __('Dashboard') }}</span>
            </a>
        </li>
        <li>
            <a class="asideMenuLink" href="{{ route('admin.projects.index')}}">
                <i class="fa-solid fa-folder-tree {{ Route::currentRouteName() == 'admin.projects.index' ? 'activeRoute' : '' }}"></i>
                <span class="{{ Route::currentRouteName() == 'admin.projects.index' ? 'activeRoute' : '' }}">{{ __('Projects') }}</span>
            </a>
        </li>
        <li>
            <a class="asideMenuLink" href="{{ route('admin.types.index')}}">
                <i class="fa-solid fa-cubes {{ Route::currentRouteName() == 'admin.types.index' ? 'activeRoute' : '' }}"></i>
                <span class="{{ Route::currentRouteName() == 'admin.types.index' ? 'activeRoute' : '' }}">{{ __('Types') }}</span>
            </a>
        </li>
        <li>
            <a class="asideMenuLink" href="{{ route('admin.technologies.index')}}">
                <i class="fa-solid fa-code {{ Route::currentRouteName() == 'admin.technologies.index' ? 'activeRoute' : '' }}"></i>
                <span class="{{ Route::currentRouteName() == 'admin.technologies.index' ? 'activeRoute' : '' }}">{{ __('Technologies') }}</span>
            </a>
        </li>
    </ul>
</aside>