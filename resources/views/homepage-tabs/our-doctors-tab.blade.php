<!-- Make sure Swiper CSS & JS are included -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<div class="bg-gray-50">
    <div>
        <div class="grid gap-10 px-4 mx-auto py-14 lg:py-16 lg:grid-cols-1 max-w-7xl">
            <!-- Section Titles -->
            <div class="flex items-center justify-center lg:justify-start lg:items-start">
                <span class="px-4 py-1 text-sm font-semibold text-blue-700 bg-white rounded-full w-fit h-fit">
                    Our Doctors
                </span>
            </div>
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center justify-center w-full lg:justify-start">
                    <span class="text-2xl font-bold text-[#0035c6] lg:text-5xl pattaya-regular">
                        Meet the Professionals
                    </span>
                </div>
                <div class="justify-start hidden lg:flex">
                    <a href="#"
                        class="flex items-center gap-5 px-1 py-1 text-white transition duration-300 rounded-full shadow bg-[#0035c6] hover:scale-105 hover:shadow-lg">
                        <span class="ml-5 text-base text-nowrap">VIEW ALL DOCTORS</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-7 lg:h-14">
                            <g fill="none" stroke="currentColor" stroke-width="1">
                                <circle cx="12" cy="12" r="10" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h8m0 0l-3-3m3 3l-3 3" />
                            </g>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- ✅ Swiper -->
            <div class="overflow-hidden swiper doctors-swiper">
                <div class="swiper-wrapper">
                    @foreach ($doctors as $item)
                        <div class="swiper-slide">
                            <div
                                class="flex flex-col justify-end w-full transition duration-300 bg-white border rounded-lg shadow-md hover:border-blue-700 bg-opacity-80">
                                <img src="{{ asset('assets/doctor-thumbnail.png') }}" alt=""
                                    class="object-cover rounded-md">
                                <div class="p-4">
                                    <h3 class="font-semibold text-blue-700">{{ $item->name }}</h3>
                                    <p class="text-sm text-[#edb42f]">{{ $item->specialization }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Navigation -->
            <div class="flex justify-center w-auto gap-4 lg:w-full">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    class="h-12 transition duration-300 cursor-pointer text-[#0035c6] hover:scale-110 prev-btn"
                    data-swiper-action="prev">
                    <g fill="none" stroke="currentColor" stroke-width="1">
                        <circle cx="12" cy="12" r="10" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 12H8m0 0l3-3m-3 3l3 3" />
                    </g>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    class="h-12 transition duration-300 cursor-pointer text-[#0035c6] hover:scale-110 next-btn"
                    data-swiper-action="next">
                    <g fill="none" stroke="currentColor" stroke-width="1">
                        <circle cx="12" cy="12" r="10" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h8m0 0l-3-3m3 3l-3 3" />
                    </g>
                </svg>
            </div>
        </div>
    </div>
</div>

<!-- ✅ Initialize after DOM renders -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const doctorsSwiper = new Swiper('.doctors-swiper', {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 32,
            speed: 600,
            grabCursor: true,
            breakpoints: {
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 4
                },
            },
        });

        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');

        if (prevBtn) prevBtn.addEventListener('click', () => doctorsSwiper.slidePrev());
        if (nextBtn) nextBtn.addEventListener('click', () => doctorsSwiper.slideNext());
    });
</script>
