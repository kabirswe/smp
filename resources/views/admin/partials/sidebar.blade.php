<nav id="sidebarMenu" class="dashboard-sidebar">
    <div class="position-sticky pt-3">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
          <img src="{{ asset('images/front/Gummy-Specialists-Logo.png') }}" class="navbar-brand-img" alt="...">
        </a>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link{{ Route::is('dashboard') ? ' active' : '' }}" aria-current="page" href="{{ route('dashboard') }}">
                    <ion-icon name="albums-outline"></ion-icon>
                    Dashboard
                </a>
            </li>
            @can('product-category')
            <li class="nav-item">
                <a class="nav-link{{ Route::is('product_category.index', 'product_category.edit',  'product_category.create') ? ' active' : '' }}" href="{{ route('product_category.index') }}">
                    <ion-icon name="people-outline"></ion-icon>
                    Product Category List
                </a>
            </li>
            @endcan
            @can('product-type')
            <li class="nav-item">
                <a class="nav-link{{ Route::is('product_type.index', 'product_type.edit',  'product_type.create') ? ' active' : '' }}" href="{{ route('product_type.index') }}">
                    <ion-icon name="people-outline"></ion-icon>
                    Product Type
                </a>
            </li>
            @endcan
            @can('product')
            <li class="nav-item">
                <a class="nav-link{{ Route::is('product.index', 'product.edit',  'product.create') ? ' active' : '' }}" href="{{ route('product.index') }}">
                    <ion-icon name="people-outline"></ion-icon>
                    Product
                </a>
            </li>
            @endcan
            @can('order')
            <li class="nav-item">
                <a class="nav-link{{ Route::is('order.index') ? ' active' : '' }}" href="{{ route('order.index') }}">
                    <ion-icon name="people-outline"></ion-icon>
                    Order
                </a>
            </li>
            @endcan
            @can('rating')
            <li class="nav-item">
                <a class="nav-link{{ Route::is('rating.index') ? ' active' : '' }}" href="{{ route('rating.index') }}">
                    <ion-icon name="people-outline"></ion-icon>
                    Rating
                </a>
            </li>
            @endcan
            @can('post-category')
            <li class="nav-item">
                <a class="nav-link{{ Route::is('post_category.index', 'post_category.edit',  'post_category.create') ? ' active' : '' }}" href="{{ route('post_category.index') }}">
                    <ion-icon name="people-outline"></ion-icon>
                    Post Category
                </a>
            </li>
            @endcan
            @can('post')
            <li class="nav-item">
                <a class="nav-link{{ Route::is('post.index', 'post.edit',  'post.create') ? ' active' : '' }}" href="{{ route('post.index') }}">
                    <ion-icon name="people-outline"></ion-icon>
                    Post
                </a>
            </li>
            @endcan
            @can('post-comment')
            <li class="nav-item">
                <a class="nav-link{{ Route::is('post_comment.index', 'post_comment.edit',  'post_comment.create') ? ' active' : '' }}" href="{{ route('post_comment.index') }}">
                    <ion-icon name="people-outline"></ion-icon>
                    Post Comment
                </a>
            </li>
            @endcan
            @can('all-account-list')
            <li class="nav-item">
                <a class="nav-link{{ Route::is('users.index', 'users.edit', 'users.show', 'users.create') ? ' active' : '' }}" href="{{ route('users.index') }}">
                    <ion-icon name="people-outline"></ion-icon>
                    Users list
                </a>
            </li>
            @endcan
            @can('role')
            <li class="nav-item">
                <a class="nav-link{{ Route::is('roles.index', 'roles.edit', 'roles.show', 'roles.create') ? ' active' : '' }}" href="{{ route('roles.edit', 1) }}">
                    <ion-icon name="people-outline"></ion-icon>
                    Users role
                </a>
            </li>
            @endcan
            @can('account-unblock')
            <li class="nav-item">
                <a class="nav-link{{ Route::is('blockedUserList') ? ' active' : '' }}" href="{{ route('blockedUserList') }}">
                    <ion-icon name="people-outline"></ion-icon>
                    Unblock User
                </a>
            </li>
            @endcan
            @can('activity-log')
            <li class="nav-item">
                <a class="nav-link{{ Route::is('user.logs') ? ' active' : '' }}" href="{{ route('user.logs') }}">
                    <ion-icon name="people-outline"></ion-icon>
                    Users logs
                </a>
            </li>
            @endcan
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
