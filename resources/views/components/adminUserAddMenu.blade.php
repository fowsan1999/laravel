<div>
    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link men {{ (request()->is('user')) ? 'active' : '' }}" aria-current="page" href="{{ url('user') }}">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link men {{ (request()->is('role')) ? 'active' : '' }}" aria-current="page" href="{{ url('role') }}">Roles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link men {{ (request()->is('assign-role')) ? 'active' : '' }}" aria-current="page" href="{{ url('assign-role') }}">Assign Role</a>
        </li>
    </ul>
</div>

<style>
    .men:hover
    {
        background-color: #0f65e7e3;
        color: white;
    }
</style>
