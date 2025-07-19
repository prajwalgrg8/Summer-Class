<div class="sidebar">
  <h4>IMDb Admin</h4>
  
  <a href="{{ route('admin.dashboard.index') }}" 
     class="{{ Route::is('admin.dashboard.index') ? 'active' : '' }}">
     Dashboard
  </a>

  <a href="{{ route('admin.movie.index') }}" 
     class="{{ Route::is('admin.movie.*') ? 'active' : '' }}">
     Movies
  </a>

  <a href="{{ route('admin.genre.index') }}" 
     class="{{ Route::is('admin.genre.index') ? 'active' : '' }}">
     Genres
  </a>

  <a href="{{ route('admin.user.index') }}" 
     class="{{ Route::is('admin.user.index') ? 'active' : '' }}">
     Users
  </a>
<!--
  <a href="{{ route('admin.review.index') }}" 
     class="{{ Route::is('admin.review.index') ? 'active' : '' }}">
     Ratings & Reviews
  </a>-->

  <a href="#">Logout</a>
</div>
