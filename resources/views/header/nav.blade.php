<nav class="bg-white shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4">
      <div class="flex justify-between items-center py-4">
        <!-- Logo -->
        <div class="flex items-center space-x-2">
          <span class="text-2xl font-bold text-blue-600">MyWebsite</span>
        </div>

        <!-- Nav links -->
        <div class="hidden md:flex space-x-6">
          <a href="{{ route('home') }}" class="text-gray-700 @if(request()->is('home')) @endif active">Home</a>
          <a href="{{ route('aboutUs' }}" class="text-gray-700 @if(request()->is('about-us')) @endif active">About</a>
          <a href="{{route('service') }}" class="text-gray-700 @if(request()->is('service')) @endif active">Services</a>
          <a href="{{route('contact') }}" class="text-gray-700 @if(request()->is('contact')) @endif active">Contact</a>
        </div>

        <!-- Hamburger -->
        <div class="md:hidden flex items-center">
          <button id="menu-btn" class="text-gray-700 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
              <path d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden px-4 pb-4">
      <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Home</a>
      <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">About</a>
      <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Services</a>
      <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Contact</a>
    </div>
  </nav>