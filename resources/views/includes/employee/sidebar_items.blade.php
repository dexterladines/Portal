<li class="nav-item has-treeview">
    <a href="{{ route('employee.profile') }}" class="nav-link">
        <i class="nav-icon fa fa-user"></i>
        <p>
            Profile
        </p>
    </a>
</li>
<li class="nav-item has-treeview">
    <a href="" class="nav-link">
        <i class="nav-icon fa fa-calendar-check-o"></i>
        <p>
            Attendance
        </p>
    </a>
</li>
<li class="nav-item has-treeview">
    <a href="" class="nav-link">
        <i class="nav-icon fa fa-calendar-check-o"></i>
        <p>
            Leave
        </p>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('logout') }}"
    onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
      <i class="nav-icon fas fa-solid fa-power-off"></i>
       <p>Logout</p>
      </a>
       <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
    </form>
      
    </a>
  </li>
