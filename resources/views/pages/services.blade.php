@extends('layouts.app')

@section('title', 'Services')


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
            'title' => 'Maternal & Child Care',
            'items' => ['Obstetrics and gynecology services', 'Prenatal and postnatal care', 'Pediatric services'],
            'img' => 'assets/icon7.png',
        ],
        (object) [
            'id' => 6,
            'title' => 'Maternal & Child Care',
            'items' => ['Obstetrics and gynecology services', 'Prenatal and postnatal care', 'Pediatric services'],
            'img' => 'assets/icon7.png',
        ],
        (object) [
            'id' => 7,
            'title' => 'Maternal & Child Care',
            'items' => ['Obstetrics and gynecology services', 'Prenatal and postnatal care', 'Pediatric services'],
            'img' => 'assets/icon7.png',
        ],
        (object) [
            'id' => 8,
            'title' => 'TEST',
            'items' => ['Obstetrics and gynecology services', 'Prenatal and postnatal care', 'Pediatric services'],
            'img' => 'assets/icon7.png',
        ],
    ];
@endphp

@section('content')
    <div class="relative flex flex-col overflow-x-hidden">
        <x-banner title1="Our" title2="Services" img_path='assets/services-banner.png' page="Services" breadcrumb="" />

        <div class="bg-gray-100">
            <div class="container py-32 mx-auto">
                <div class="grid grid-cols-1 gap-x-24 gap-y-24 lg:grid-cols-4">
                    @foreach ($services as $item)
                        <div
                            class="w-full cursor-pointer hover:scale-105 transition duration-300 swiper-slide max-h-fit rounded-[3rem] shadow-lg">
                            <a href="{{ route('service.show', $item->id) }}">
                                <div class="relative p-6 text-center clip-box bg-white rounded-[3rem] lg:h-[25rem]">
                                    <div class="flex flex-col items-center justify-around h-auto mt-5 lg:h-full">
                                        <h3 class="mt-10 mb-5 text-xl font-bold text-[#0035c6] pattaya-regular">
                                            {{ $item->title }}
                                        </h3>
                                        <ul class="px-5 mb-6 space-y-2 text-sm text-gray-700 list-disc text-start">
                                            @foreach ($item->items as $list)
                                                <li>{{ $list }}</li>
                                            @endforeach
                                        </ul>
                                        <a href="{{ route('service.show', $item->id) }}"
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
                            </a>
                            <div class="absolute transform left-[125px] lg:left-[40%] -top-6">
                                <div
                                    class="flex items-center justify-center w-20 h-20 bg-yellow-500 rounded-full shadow-md ">
                                    <img src="{{ asset($item->img) }}" alt="General Services" class="h-12 ">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
