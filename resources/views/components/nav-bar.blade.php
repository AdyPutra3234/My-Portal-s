 <nav class="bg-white shadow">
    <div class="mx-auto px-8 sm:px-4 lg:px-20">
      <div class="flex h-16">
        <div class="flex w-full justify-between items-center">
            <div class="space-x-1">
                <i class="fa-regular fa-newspaper text-xl" style="color: rgb(54, 54, 209)"></i>
                <span class="font-bold text-xl text-gray-900">My Portal's</span>    
            </div>
          <div class="hidden sm:block ">
            <div class="ml-10 items-baseline space-x-4">
              <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
              <x-nav-link href="/trending" :active="request()->is('trending')">Trending</x-nav-link>
              <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
              <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
            </div>
          </div>
        </div>
        <div class="-mr-2 flex sm:hidden">
        
          <!-- Mobile menu button -->
          <button type="button" command="--toggle" commandfor="mobile-menu" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
              <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
              <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <el-disclosure id="mobile-menu" hidden class="block sm:hidden">
      <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
        <a href="/" aria-current="page" class="{{ request()->is('/')  ? 'bg-gray-900 text-white' : 'text-gray-300' }} block rounded-md px-3 py-2 text-base font-medium">Home</a>
        <a href="/trending" class="{{ request()->is('trending')  ? 'bg-gray-900 text-white' : 'text-gray-300' }} block rounded-md px-3 py-2 text-base font-medium hover:bg-white/5 hover:text-white">Trending</a>
        <a href="/contact" class="{{ request()->is('contact')  ? 'bg-gray-900 text-white' : 'text-gray-300' }} block rounded-md px-3 py-2 text-base font-medium hover:bg-white/5 hover:text-white">Contact</a>
        <a href="/about" class="{{ request()->is('about')  ? 'bg-gray-900 text-white' : 'text-gray-300' }} block rounded-md px-3 py-2 text-base font-medium hover:bg-white/5 hover:text-white">About</a>
      </div>
    </el-disclosure>
  </nav>