
<nav class="bg-primary text-white shadow-lg">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center h-16">
      <!-- Logo -->
      <div class="flex items-center">
        <h1 class="text-2xl font-bold">SDS2025</h1>
        <span class="ml-3 text-sm bg-blue-700 px-2 py-1 rounded">Semana de Sistemas</span>
      </div>

      <!-- Desktop Menu -->
      <div class="hidden md:flex items-center space-x-1">
        <!-- Inicio -->
        <a href="#inicio" class="px-4 py-2 rounded-md hover:bg-blue-700 transition-colors">
          Inicio
        </a>

        <!-- Dropdown Días -->
        <div class="relative group">
          <button class="px-4 py-2 rounded-md hover:bg-blue-700 transition-colors flex items-center">
            Días de la Semana
            <svg class="ml-1 h-4 w-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          
          <!-- Dropdown Menu -->
          <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
            <div class="py-1">
              <a href="#dia1" class="block px-4 py-2 text-gray-800 hover:bg-blue-50 hover:text-primary transition-colors">
                 Día 1 - Lunes
              </a>
              <a href="#dia2" class="block px-4 py-2 text-gray-800 hover:bg-blue-50 hover:text-primary transition-colors">
                 Día 2 - Martes
              </a>
              <a href="#dia3" class="block px-4 py-2 text-gray-800 hover:bg-blue-50 hover:text-primary transition-colors">
                 Día 3 - Miércoles
              </a>
              <a href="#dia4" class="block px-4 py-2 text-gray-800 hover:bg-blue-50 hover:text-primary transition-colors">
                 Día 4 - Jueves
              </a>
              <a href="#dia5" class="block px-4 py-2 text-gray-800 hover:bg-blue-50 hover:text-primary transition-colors">
                 Día 5 - Viernes
              </a>
            </div>
          </div>
        </div>

        <!-- Contacto -->
        <a href="#contacto" class="px-4 py-2 rounded-md hover:bg-blue-700 transition-colors">
          Contacto
        </a>
      </div>

      <!-- Mobile Menu Button -->
      <div class="md:hidden">
        <button id="mobile-menu-button" class="p-2 rounded-md hover:bg-blue-700 transition-colors">
          <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-blue-700">
      <div class="px-2 pt-2 pb-3 space-y-1">
        <a href="#inicio" class="block px-3 py-2 rounded-md hover:bg-blue-800 transition-colors">
          Inicio
        </a>
        
        <!-- Mobile Dropdown -->
        <div class="relative">
          <button id="mobile-dropdown-button" class="w-full text-left px-3 py-2 rounded-md hover:bg-blue-800 transition-colors flex items-center justify-between">
            Días de la Semana
            <svg class="h-4 w-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          
          <div id="mobile-dropdown-menu" class="hidden pl-6 space-y-1">
            <a href="#dia1" class="block px-3 py-2 text-sm hover:bg-blue-800 rounded-md transition-colors">
               Día 1 - Lunes
            </a>
            <a href="#dia2" class="block px-3 py-2 text-sm hover:bg-blue-800 rounded-md transition-colors">
               Día 2 - Martes
            </a>
            <a href="#dia3" class="block px-3 py-2 text-sm hover:bg-blue-800 rounded-md transition-colors">
               Día 3 - Miércoles
            </a>
            <a href="#dia4" class="block px-3 py-2 text-sm hover:bg-blue-800 rounded-md transition-colors">
               Día 4 - Jueves
            </a>
            <a href="#dia5" class="block px-3 py-2 text-sm hover:bg-blue-800 rounded-md transition-colors">
               Día 5 - Viernes
            </a>
          </div>
        </div>

        <a href="#contacto" class="block px-3 py-2 rounded-md hover:bg-blue-800 transition-colors">
          Contacto
        </a>
      </div>
    </div>
  </div>
</nav>

<!-- JavaScript para el menú móvil -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  // Mobile menu toggle
  const mobileMenuButton = document.getElementById('mobile-menu-button');
  const mobileMenu = document.getElementById('mobile-menu');
  
  if (mobileMenuButton && mobileMenu) {
    mobileMenuButton.addEventListener('click', function() {
      mobileMenu.classList.toggle('hidden');
    });
  }

  // Mobile dropdown toggle
  const mobileDropdownButton = document.getElementById('mobile-dropdown-button');
  const mobileDropdownMenu = document.getElementById('mobile-dropdown-menu');
  
  if (mobileDropdownButton && mobileDropdownMenu) {
    mobileDropdownButton.addEventListener('click', function() {
      mobileDropdownMenu.classList.toggle('hidden');
      const svg = mobileDropdownButton.querySelector('svg');
      svg.classList.toggle('rotate-180');
    });
  }

  // Smooth scrolling para los enlaces de anclaje
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
        // Cerrar menú móvil después de hacer clic
        if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
          mobileMenu.classList.add('hidden');
        }
      }
    });
  });
});
</script>
