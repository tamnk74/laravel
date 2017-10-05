<li class="treeview {{ Request::is('backend/users*') || Request::is('backend/permissions*') || Request::is('backend/roles*')? 'active' : '' }}">
    <a href="#">
    <i class="fa fa-users"></i>
    <span>User, Role, Permission</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('backend/users*') ? 'active' : '' }}">
            <a href="{{ route('users.index') }}"><i class="fa  fa-user"></i><span>Users</span></a>
        </li>
        <li class="{{ Request::is('backend/permissions*') ? 'active' : '' }}">
            <a href="{!! route('permissions.index') !!}"><i class="fa fa-hand-o-right"></i><span>Permissions</span></a>
        </li>

        <li class="{{ Request::is('backend/roles*') ? 'active' : '' }}">
            <a href="{!! route('roles.index') !!}"><i class="fa fa-hand-o-right"></i><span>Roles</span></a>
        </li>
    </ul>
</li>
