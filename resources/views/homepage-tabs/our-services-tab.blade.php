@php
    $services = [
        (object) [
            'id' => 1,
            'title' => 'General Services',
            'items' => [
                'Annual check-ups and health screenings',
                'Management of chronic illnesses (e.g., diabetes, hypertension)',
                'Preventive care',
            ],
            'img' => 'assets/icon4.png',
        ],
        (object) [
            'id' => 2,
            'title' => 'Specialized Departments',
            'items' => [
                'Cardiology: Heart health and
diagnostics',
                'Neurology: Brain and nervous system
care',
                'Orthopedics: Bone and joint
treatment',
            ],
            'img' => 'assets/icon5.png',
        ],
        (object) [
            'id' => 3,
            'title' => 'Emergency & Critical Care',
            'items' => ['Fully equipped emergency rooms', 'Trauma care', 'Intensive Care Units (ICU)'],
            'img' => 'assets/icon6.png',
        ],
        (object) [
            'id' => 4,
            'title' => 'Maternal & Child Care',
            'items' => ['Obstetrics and gynecology services', 'Prenatal and postnatal care', 'Pediatric services'],
            'img' => 'assets/icon7.png',
        ],
        (object) [
            'id' => 5,
            'title' => 'TEST',
            'items' => ['Obstetrics and gynecology services', 'Prenatal and postnatal care', 'Pediatric services'],
            'img' => 'assets/icon7.png',
        ],
    ];
@endphp

<div class="h-full py-16 bg-no-repeat bg-cover" style="background-image: url({{ asset('assets/ourservices-bg.png') }});">
    <div class="container flex flex-col px-6 mx-auto">
        <!-- Section Tag -->
        <div class="flex justify-center mb-10">
            <span class="px-4 py-1 text-sm font-semibold text-blue-700 bg-white rounded-full">
                Our Services
            </span>
        </div>

        <!-- Title -->
        <h2 class="mb-5 text-2xl font-bold text-center text-[#0035c6] md:text-4xl lg:text-5xl pattaya-regular">
            Comprehensive Medical Services
        </h2>

        <!-- Swiper Container -->
        <div class="swiper">
            <div class="pt-10 lg:pt-24 swiper-wrapper">
                @foreach ($services as $item)
                    <div
                        class="w-full cursor-pointer hover:scale-105 transition duration-300 swiper-slide max-h-fit rounded-[3rem]">
                        <a href="{{ route('service.show', $item->id) }}">
                            <div
                                class="relative p-6 text-center clip-box bg-white rounded-[3rem] lg:w-[20rem]  lg:h-[25rem]">
                                <div class="flex flex-col items-center justify-around h-auto mt-5 lg:h-full">
                                    <h3 class="mt-10 mb-5 text-xl font-bold text-[#0035c6] pattaya-regular">
                                        {{ $item->title }}
                                    </h3>
                                    <ul class="px-5 mb-6 space-y-2 text-sm text-gray-700 list-disc text-start">
                                        @foreach ($item->items as $list)
                                            <li>{{ $list }}</li>
                                        @endforeach
                                    </ul>
                                    <a href="#"
                                        class="inline-flex items-center gap-2 font-semibold text-[#edb42f] hover:text-yellow-700">
                                        <span class="text-sm lg:text-lg"> Book a Consultation</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M4 12h12.25L11 6.75l.66-.75l6.5 6.5l-6.5 6.5l-.66-.75L16.25 13H4z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="absolute transform left-[125px] lg:left-[138px] -top-6">
                                <div
                                    class="flex items-center justify-center w-20 h-20 bg-yellow-500 rounded-full shadow-md ">
                                    <img src="{{ asset($item->img) }}" alt="General Services" class="h-12 ">
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <!-- Swiper Pagination -->
            <div class="mt-5 lg:mt-20 swiper-pagination"></div>
        </div>

        <!-- Button -->
        <div class="flex justify-center">
            <a href="{{ route('services') }}"
                class="flex items-center gap-5 px-1 py-1 text-white transition duration-300 rounded-full shadow bg-[#0035c6] hover:scale-105 hover:shadow-lg">
                <span class="ml-5 text-base">VIEW ALL SERVICES</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-7 lg:h-14">
                    <g fill="none" stroke="currentColor" stroke-width="1">
                        <circle cx="12" cy="12" r="10" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h8m0 0l-3-3m3 3l-3 3" />
                    </g>
                </svg>
            </a>
        </div>
    </div>
</div>
