 <nav class="navbar bg-base-100 shadow-lg">
  <div class="flex-1 px-4 lg:px-8">
    <a href="{{ url('/') }}" class="btn btn-ghost normal-case text-xl">
      <i class="fas fa-wine-bottle text-2xl mr-2"></i>
      {{ config('app.name', 'Viana Loja') }}
    </a>
  </div>
  <div class="flex-none hidden lg:block">
    <ul class="menu menu-horizontal p-0">
      <li>
        <a href="{{ route('dashboard') }}" @class(['active' => request()->routeIs('dashboard')])>
          <i class="fas fa-chart-line mr-1"></i> Dashboard
        </a>
      </li>
      <li tabindex="0">
        <a>
          <i class="fas fa-user-circle mr-1"></i> {{ Auth::user()->name }}
          <i class="fas fa-chevron-down ml-1"></i>
        </a>
        <ul class="p-2 bg-base-100">
          <li>
            <a href="{{ route('profile.edit') }}">
              <i class="fas fa-id-badge mr-1"></i> Profile
            </a>
          </li>
          <li>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="w-full text-left">
                <i class="fas fa-sign-out-alt mr-1"></i> Log Out
              </button>
            </form>
          </li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="flex-none lg:hidden">
    <button id="btn-mobile" class="btn btn-square btn-ghost">
      <i class="fas fa-bars text-xl"></i>
    </button>
  </div>
</nav>
