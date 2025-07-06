<div class="sidebar">
  <h4>IMDb Admin</h4>
  <a href="{{ route('dashboard') }}" class="@if(request()->is('dashboard')) active @endif">Dashboard</a>
  <a href="{{ route('movie') }}" class="@if(request()->is('movies')) active @endif">Movies</a>
  <a href="{{ route('genre') }}" class="@if(request()->is('genres')) active @endif">Genres</a>
  <a href="{{ route('user') }}" class="@if(request()->is('users')) active @endif">Users</a>
  <a href="{{ route('review') }}" class="@if(request()->is('reviews')) active @endif">Ratings & Reviews</a>
  <!--<a href="#">Awards</a>-->
  <a href="{{ route('report') }}" class="@if(request()->is('reports')) active @endif">Reports</a>
  <a href="#">Logout</a>
</div>
