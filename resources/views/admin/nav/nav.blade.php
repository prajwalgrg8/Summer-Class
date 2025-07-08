<div class="sidebar">
  <h4>IMDb Admin</h4>
  <a href="{{ route('admin.dashboard.index') }}" class="@if(request()->is('/')) active @endif">Dashboard</a>
  <a href="{{ route('admin.movie.index') }}" class="@if(request()->is('admin/movies')) active @endif">Movies</a>
  <a href="{{ route('admin.genre.index') }}" class="@if(request()->is('admin/genres')) active @endif">Genres</a>
  <a href="{{ route('admin.user.index') }}" class="@if(request()->is('admin/users')) active @endif">Users</a>
  <a href="{{ route('admin.review.index') }}" class="@if(request()->is('reviews')) active @endif">Ratings & Reviews</a>
  <!--<a href="#">Awards</a>-->
  
  <a href="#">Logout</a>
</div>
