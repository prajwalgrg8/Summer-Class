@include('admin.header.header')

<div class="wrapper">
  @include('admin.nav.nav')

  <div class="content-wrapper">
    <div class="content">
      @yield('content')
    </div>

    @include('admin.footer.footer')
  </div>
</div>
