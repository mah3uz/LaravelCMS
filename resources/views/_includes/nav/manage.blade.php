<div class="col-md-2 side-menu">
  <aside class="menu m-t-30 m-l-10">
    <p class="menu-label">
      General
    </p>
    <ul class="menu-list">
      <li><a href="{{ route('manage.dashboard') }}">Dashboard</a></li>
    </ul>

    <p class="menu-label">
      Administration
    </p>
    <ul class="menu-list">
      <li><a href="{{ route('users.index') }}">Manage Users</a></li>
      <li>
        <a href="#">Roles &amp; Permissions</a>
        <ul>
          <li><a href="#">Roles</a></li>
          <li><a href="#">Permissions</a></li>
        </ul>
      </li>
    </ul>
  </aside>
</div>
