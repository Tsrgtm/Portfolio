<header class="max-w-3xl mx-auto py-1 flex items-center justify-between">
  <a href="/"
    class="text-2xl font-bold grid grid-cols-2 w-max gap-0 items-center justify-center">
    <span class="text-laravel">T</span>
    <span class="text-black dark:text-white">G</span>
    <span class="text-black dark:text-white text-[5.5px] col-span-2">Tusar Gautam</span>
  </a>

  <div class="flex items-center gap-2">
    <nav class="hidden sm:block">
      <ul class="flex items-center gap-4 text-gray-600 dark:text-gray-400 tracking-wide">
        <li
          class="{{ request()->routeIs('home') ? 'text-laravel font-medium' : 'hover:text-gray-900' }} transition-colors duration-200">
          <a href="{{ route('home') }}">Portfolio</a>
        </li>
        <li>
          <a href="#">Blogs</a>
        </li>
        <li
          class="{{ request()->routeIs('contact') ? 'text-laravel font-medium' : 'hover:text-gray-900' }} transition-colors duration-200">
          <a href="{{ route('contact') }}">Contact</a>
        </li>
      </ul>
    </nav>

    <span class="h-5 border-l border-border ml-2 hidden sm:block"></span>

    <div class="flex items-center">
      <button id="theme-toggle-button"
        class="group p-2 rounded-lg hover:bg-black/5 dark:hover:bg-white/10 transition-colors duration-200">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="w-4 h-4 text-gray-700 dark:hidden 
                            transition-transform duration-300 ease-out
                            group-hover:rotate-6 group-hover:scale-110">
          <circle cx="12" cy="12" r="4" class="transition-all duration-300" />
          <path d="M12 2v2" />
          <path d="M12 20v2" />
          <path d="m4.93 4.93 1.41 1.41" />
          <path d="m17.66 17.66 1.41 1.41" />
          <path d="M2 12h2" />
          <path d="M20 12h2" />
          <path d="m6.34 17.66-1.41 1.41" />
          <path d="m19.07 4.93-1.41 1.41" />
        </svg>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="w-4 h-4 text-gray-300 hidden dark:block
                            transition-all duration-300 ease-out
                            group-hover:-rotate-6 group-hover:scale-110 group-hover:drop-shadow-[0_0_4px_rgba(255,255,255,0.35)]">
          <path
            d="M20.985 12.486a9 9 0 1 1-9.473-9.472c.405-.022.617.46.402.803a6 6 0 0 0 8.268 8.268c.344-.215.825-.004.803.401" />
        </svg>
      </button>

    </div>

    <span class="h-5 border-l border-border ml-2 block sm:hidden"></span>

    <div class="sm:hidden relative">
      <button id="mobile-menu-button" aria-expanded="false" aria-controls="mobile-menu"
        class="p-2 rounded-lg hover:bg-black/5 dark:hover:bg-white/10 transition-colors duration-200">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="text-gray-700 dark:text-gray-300 w-5 h-5">
          <path d="M3 5h18" />
          <path d="M3 12h18" />
          <path d="M3 19h18" />
        </svg>
      </button>

      <div id="mobile-menu"
        class="mt-2 space-y-1 hidden absolute right-0 w-40 bg-white dark:bg-[#242423] border border-border rounded-lg shadow-lg py-2 z-10">
        <a href="{{ route('home') }}"
          class="block px-3 py-2 rounded-md {{ request()->routeIs('home') ? 'text-laravel font-medium' : 'text-gray-700 dark:text-gray-300' }} hover:bg-black/5 dark:hover:bg-white/10">Portfolio</a>
        <a href="#"
          class="block px-3 py-2 rounded-md text-gray-700 dark:text-gray-300 hover:bg-black/5 dark:hover:bg-white/10">Blogs</a>
        <a href="{{ route('contact') }}"
          class="block px-3 py-2 rounded-md {{ request()->routeIs('contact') ? 'text-laravel font-medium' : 'text-gray-700 dark:text-gray-300' }} hover:bg-black/5 dark:hover:bg-white/10">Contact</a>
      </div>

      <script>
        (function() {
          const btn = document.getElementById('mobile-menu-button')
          const menu = document.getElementById('mobile-menu')

          if (!btn || !menu) return

          btn.addEventListener('click', function(e) {
            const isOpen = btn.getAttribute('aria-expanded') === 'true'
            btn.setAttribute('aria-expanded', String(!isOpen))
            menu.classList.toggle('hidden')
          })

          // close when clicking outside
          document.addEventListener('click', function(e) {
            if (!menu.contains(e.target) && !btn.contains(e.target)) {
              if (!menu.classList.contains('hidden')) {
                menu.classList.add('hidden')
                btn.setAttribute('aria-expanded', 'false')
              }
            }
          })

          // close on Escape
          document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !menu.classList.contains('hidden')) {
              menu.classList.add('hidden')
              btn.setAttribute('aria-expanded', 'false')
              btn.focus()
            }
          })
        })()
      </script>
    </div>

  </div>

</header>
