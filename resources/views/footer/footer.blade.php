<footer class="bg-gray-800 text-white py-6">
    <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center">
      <p class="text-sm">&copy; 2025 MyWebsite. All rights reserved.</p>
      <div class="space-x-4 text-sm mt-2 md:mt-0">
        <a href="#" class="hover:text-gray-300">Privacy</a>
        <a href="#" class="hover:text-gray-300">Terms</a>
        <a href="#" class="hover:text-gray-300">Support</a>
      </div>
    </div>
  </footer>

  <!-- Script to toggle mobile menu -->
  <script>
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu');
    btn.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });
  </script>