<!DOCTYPE html>
<html lang="en">

@include('header.header') 

<body class="bg-gray-100">

  <!-- Navbar -->
  @include('header.nav')

  @yield('content')
  
  <!-- Footer -->
  @include('footer.footer')

</body>
</html>
