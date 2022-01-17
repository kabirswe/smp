<nav id="sidebarMenu" class="dashboard-sidebar">
    <div class="position-sticky pt-3">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
          <img src="{{ asset('images/admin/logo.svg') }}" class="navbar-brand-img" alt="...">
        </a>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link{{ Route::is('dashboard') ? ' active' : '' }}" aria-current="page" href="{{ route('dashboard') }}">
                    <ion-icon name="albums-outline"></ion-icon>
                    Dashboard
                </a>
            </li>  
            <li class="nav-item">
                <a class="nav-link{{ Route::is('ticket.index', 'ticket.edit',  'ticket.create_by_category') ? ' active' : '' }}" href="{{ route('ticket.index') }}">
                    <ion-icon name="people-outline"></ion-icon>
                    Ticket
                </a>
            </li>                        
            <li class="nav-item">
                <a class="nav-link{{ Route::is('category.index', 'category.edit',  'category.create') ? ' active' : '' }}" href="{{ route('category.index') }}">
                    <ion-icon name="people-outline"></ion-icon>
                    Category
                </a>
            </li> 
            <li class="nav-item">
                <a class="nav-link{{ Route::is('users.index', 'users.edit', 'users.show', 'users.create') ? ' active' : '' }}" href="{{ route('users.index') }}">
                    <ion-icon name="people-outline"></ion-icon>
                    Users list
                </a>
            </li>                      
            <li class="nav-item">
                <a class="nav-link{{ Route::is('roles.index', 'roles.edit', 'roles.show', 'roles.create') ? ' active' : '' }}" href="{{ route('roles.edit', 1) }}">
                    <ion-icon name="people-outline"></ion-icon>
                    Users role
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link{{ Route::is('blockedUserList') ? ' active' : '' }}" href="{{ route('blockedUserList') }}">
                    <ion-icon name="people-outline"></ion-icon>
                    Unblock User
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link{{ Route::is('user.logs') ? ' active' : '' }}" href="{{ route('user.logs') }}">
                    <ion-icon name="people-outline"></ion-icon>
                    Users logs
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link{{ Route::is('profile.show') ? ' active' : '' }}" href="{{ route('profile.show') }}">
                    <ion-icon name="people-outline"></ion-icon>
                    Users Profile
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <ion-icon name="log-out-outline"></ion-icon>
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</nav>
