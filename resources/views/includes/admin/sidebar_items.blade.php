<li class="nav-item">
    <a
        href="{{ route('admin.employees.create') }}"
        class="nav-link"
    >
        <i class="ion-person-add nav-icon"></i>
        <p>Add User</p>
    </a>
</li>
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon ion-person-stalker"></i>
        
        <p>
            User Management
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right"></span>
        </p>
    </a>
    <ul class="nav nav-treeview">
       
        <li class="nav-item">
            <a
                href="{{ route('admin.employees.index') }}"
                class="nav-link"
            >
                <i class="ion-ios-people nav-icon"></i>
                <p>All Users</p>
            </a>
        </li>
        <li class="nav-item">
            <a
                {{-- href="{{ route('admin.employees.attendance') }}" --}}
                class="nav-link"
            >
                <i class="ion-ios-unlocked-outline nav-icon"></i>
                <p>Roles & Permission</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon ion-ios-list-outline"></i>
        <p>
            Attendance
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right"></span>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a
                {{-- href="{{ route('admin.leaves.index') }}" --}}
                class="nav-link"
            >
                <i class="ion-email nav-icon"></i>
                <p>Leaves</p>
            </a>
        </li>
        <li class="nav-item">
            <a
                {{-- href="{{ route('admin.leaves.index') }}" --}}
                class="nav-link"
            >
                <i class="ion-ios-time-outline nav-icon"></i>
                <p>OT/Overtime</p>
            </a>
        </li> 
        <li class="nav-item">
            <a
                {{-- href="{{ route('admin.leaves.index') }}" --}}
                class="nav-link"
            >
                <i class="ion-ios-time nav-icon"></i>
                <p>Undertime</p>
            </a>
        </li>
    </ul>
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


