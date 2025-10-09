<div class="fixed inset-y-0 left-0 w-64 text-white bg-[#830800]">
    <div class="flex items-center justify-center h-auto gap-5 py-3">
        <img src="{{ asset('assets/rweb_logo.png') }}" alt="" class="w-10 h-10">
        <img src="{{ asset('assets/logo-yellow.png') }}" alt="Logo" class="h-10 w-30">
    </div>
    <nav class="mt-6">
        <ul class="px-3 space-y-10">
            <div class="space-y-2">
                <li>
                    <a href="{{ route('homepageBanner.show') }}"
                        class="block py-2 pl-4 pr-6  
              {{ Route::is('homepageBanner.*') ? 'bg-[#FBD55B] text-black' : 'text-white' }} 
              hover:bg-gray-800 hover:pl-4 hover:border-l-4 rounded-xl hover:border-[#FBD55B] hover:text-white">
                        Homepage Banners
                    </a>

                </li>
                <li>
                    <a href="{{ route('show.blogs') }}"
                        class="block py-2 pl-4 pr-6
              {{ Route::is('show.blogs') ? 'bg-[#FBD55B] text-black' : 'text-white' }} 
              hover:bg-gray-800 hover:pl-4 hover:border-l-4 rounded-xl hover:border-[#FBD55B] hover:text-white">
                        Blogs
                    </a>

                </li>
                <li>
                    <a href="{{ route('show.gallery') }}"
                        class="block py-2 pl-4 pr-6
              {{ Route::is('show.gallery') ? 'bg-[#FBD55B] text-black' : 'text-white' }} 
              hover:bg-gray-800 hover:pl-4 hover:border-l-4 rounded-xl hover:border-[#FBD55B] hover:text-white">
                        Galleries
                    </a>

                </li>
                <li>
                    <a href="{{ route('show.campaign-gallery') }}"
                        class="block py-2 pl-4 pr-6
              {{ Route::is('show.campaign-gallery') ? 'bg-[#FBD55B] text-black' : 'text-white' }} 
              hover:bg-gray-800 hover:pl-4 hover:border-l-4 rounded-xl hover:border-[#FBD55B] hover:text-white">
                        Campaign Galleries
                    </a>

                </li>
                <li>
                    <a href="{{ route('show.donations') }}"
                        class="block py-2 pl-4 pr-6
              {{ Route::is('show.donations') ? 'bg-[#FBD55B] text-black' : 'text-white' }} 
              hover:bg-gray-800 hover:pl-4 hover:border-l-4 rounded-xl hover:border-[#FBD55B] hover:text-white">
                        Donations
                    </a>
                </li>
                <li>
                    <a href="{{ route('show.messages') }}"
                        class="block py-2 pl-4 pr-6
              {{ Route::is('show.messages') ? 'bg-[#FBD55B] text-black' : 'text-white' }} 
              hover:bg-gray-800 hover:pl-4 hover:border-l-4 rounded-xl hover:border-[#FBD55B] hover:text-white">
                        Contact Us
                    </a>
                </li>

                <li>
                    <a href="{{ route('show.newsletters') }}"
                        class="block py-2 pl-4 pr-6
                    {{ Route::is('show.newsletters') ? 'bg-[#FBD55B] text-black' : 'text-white' }} 
                    hover:bg-gray-800 hover:pl-4 hover:border-l-4 rounded-xl hover:border-[#FBD55B] hover:text-white">
                        Newsletters
                    </a>
                </li>
                <li>
                    <a href="{{ route('show.users') }}"
                        class="block py-2 pl-4 pr-6
          {{ Route::is('show.users') ? 'bg-[#FBD55B] text-black' : 'text-white' }} 
          hover:bg-gray-800 hover:pl-4 hover:border-l-4 rounded-xl hover:border-[#FBD55B] hover:text-white">
                        User Management
                    </a>
                </li>
            </div>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full px-4 py-2 text-white bg-red-500 rounded hover:bg-red-600">
                    Logout
                </button>
            </form>
        </ul>
    </nav>
</div>
