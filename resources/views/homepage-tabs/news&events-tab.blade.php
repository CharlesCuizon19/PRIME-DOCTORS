<div class="flex items-center justify-center py-12 bg-white">
    <div class="container grid items-center justify-center max-w-6xl gap-10 p-6 mx-auto text-center lg:grid-cols-1">
        <div class="flex items-center justify-center">
            <div class="px-4 py-1 text-sm font-semibold text-blue-700 bg-gray-100 rounded-full w-fit h-fit">
                News & Events
            </div>
        </div>
        <div class="flex justify-center mb-12 text-2xl font-bold text-[#0035c6] itemce lg:text-5xl lg:w-full">
            <div class="w-[70%] pattaya-regular leading-tight">
                Expert Advice & Health
                Tips for a
                Smarter Wellness Journey
            </div>
        </div>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
            @foreach ($news as $item)
                <div class="overflow-hidden transition duration-300 cursor-pointer hover:scale-105">
                    <img src="{{ asset($item->thumbnail_image_id ?? 'assets/logo.png') }}"
                        onerror="this.onerror=null; this.src='{{ asset('assets/logo.png') }}';" alt="Health Check-Up"
                        class="object-cover w-full h-[70%] rounded-2xl">
                    <div class="py-4">
                        <p class="flex items-center justify-start gap-2 mb-2 text-sm text-[#edb42f]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <path fill="currentColor"
                                    d="M6 7.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5zm0 3a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5zM7.5 7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m1 3h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5M10 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M4.5 0a.5.5 0 0 1 .5.5V1h6V.5a.5.5 0 0 1 1 0V1c1.66 0 3 1.34 3 3v8c0 1.66-1.34 3-3 3H4c-1.66 0-3-1.34-3-3V4c0-1.66 1.34-3 3-3V.5a.5.5 0 0 1 .5-.5M14 4v1H2V4c0-1.1.895-2 2-2v.5a.5.5 0 0 0 1 0V2h6v.5a.5.5 0 0 0 1 0V2c1.1 0 2 .895 2 2M2 12V6h12v6c0 1.1-.895 2-2 2H4c-1.1 0-2-.895-2-2"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>{{ \Carbon\Carbon::parse($item->date)->format('F d, Y') }}</span>
                        </p>
                        <h2 class="text-base font-semibold text-gray-800 lg:text-lg text-start line-clamp-2">
                            {{ $item->title }}
                        </h2>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </>
</div>
