<footer class="bg-primary text-white py-6">
    <div class="container mx-auto text-center">
      &copy; 2025 Department of Computer Engineering &mdash; GCTU
    </div>
  </footer>

  <!-- 3) AOS JS just before closing body -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      AOS.init();
      // Mobile menu logic
      const btn = document.getElementById('mobile-menu-btn');
      const mobileNav = document.getElementById('mobile-nav');
      btn.addEventListener('click', function() {
        mobileNav.classList.toggle('hidden');
      });
      // Close mobile menu on link click
      mobileNav.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
          mobileNav.classList.add('hidden');
        });
      });
      // Optional: close menu if window resized to desktop
      window.addEventListener('resize', function() {
        if(window.innerWidth >= 1024) {
          mobileNav.classList.add('hidden');
        }
      });
    });
  </script>
</body>

</html>