@include('admin.header')

<div class="wrapper">
  @include('admin.nav')

  <div class="content-wrapper">
    <div class="content">
      @yield('content')
    </div>

    @include('admin.footer')
  </div>
</div>
