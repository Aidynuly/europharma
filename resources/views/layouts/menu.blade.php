<!-- need to remove -->

<div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
            </button>
        </div>
    </div>
</div>

<li class="nav-item">
    <a href="" class="nav-link active">
        <i class="nav-icon fas fa-home"></i>
        <p>Главная страница</p>
    </a>

    <a href="{{route('users.index')}}" class="nav-link active">
        <i class="nav-icon fas fa-users"></i>
        <p>Пользователи</p>
    </a>

    <a href="{{route('employees.index')}}" class="nav-link active">
        <i class="nav-icon fas fa-users"></i>
        <p>Водители</p>
    </a>

    <a href="{{route('cities.index')}}" class="nav-link active">
        <i class="nav-icon fas fa-city"></i>
        <p>Города</p>
    </a>

    <a href="{{route('orders.index')}}" class="nav-link active">
        <i class="nav-icon fas fa-comments-dollar"></i>
        <p>Заказы</p>
    </a>

    <a href="{{route('cars.index')}}" class="nav-link active">
        <i class="nav-icon fas fa-car"></i>
        <p>Машины</p>
    </a>

    <a href="{{route('schedules.index')}}" class="nav-link active">
        <i class="nav-icon fas fa-calendar"></i>
        <p>Графики</p>
    </a>
</li>
