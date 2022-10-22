<div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                    <a class="nav-link" href="{{ url('dashboard') }}">Home</a>
                @can('Product List')
                    <a class="nav-link {{ (request()->is('product*')) ? 'active' : '' }}" href="{{ url('product') }}">Product</a>
                @endcan
                @can('User List')
                    <a class="nav-link {{ (request()->is('user*','role*','assign-role*')) ? 'active' : '' }}" href="{{ url('user') }}">User</a>
                @endcan
                @can('Customer List')
                    <a class="nav-link" href="#">Customer</a>
                @endcan
            </div>
          </div>
        </div>
      </nav>
</div>
