@extends('layouts.app')

@section('title', 'Service')

@section('content')
    <div class="flex flex-col">
        <x-banner title1="Our" title2="Services" img_path='assets/services-banner.png' page="Services /"
            breadcrumb="{{ $service->title }}" />
        <div class="h-full py-20 bg-gray-100">
            <div class="container grid grid-cols-1 gap-8 px-4 py-12 mx-auto lg:px-8 lg:grid-cols-3">

                <!-- Left Content -->
                <div class="space-y-8 lg:col-span-2">

                    <!-- Top Image -->
                    <div class="rounded-3xl">
                        <img src="{{ asset($service->img) }}" alt="Service Image" class="w-full">
                    </div>

                    <!-- Description -->
                    <div>
                        <h2 class="mb-4 text-2xl font-bold pattaya-regular">Description</h2>
                        <p class="leading-relaxed text-gray-700">
                            {{ $service->desc }}
                        </p>
                    </div>

                    <!-- What's Included -->
                    <div>
                        <h3 class="mb-4 text-2xl font-bold pattaya-regular">What's Included</h3>
                        <ul class="space-y-2 text-gray-700">
                            @foreach ($service->inclusions as $item)
                                <li class="flex items-start space-x-2">
                                    <span class="text-yellow-500">✔</span>
                                    <span>{{ $item }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Why It Matters -->
                    <div>
                        <h3 class="mb-4 text-2xl font-bold pattaya-regular">Why It Matters</h3>
                        <p class="leading-relaxed text-gray-700">
                            {{ $service->why_it_matters }}
                        </p>
                    </div>

                    <!-- Benefits for Patients -->
                    <div>
                        <h3 class="mb-4 text-2xl font-bold pattaya-regular">Benefits for Patients</h3>
                        <ul class="space-y-2 text-gray-700">
                            @foreach ($service->benefits_for_patients as $item)
                                <li class="flex items-start space-x-2">
                                    <img src="{{ asset('assets/benefits-icon.png') }}" alt="">
                                    <span>{{ $item }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>

                <!-- Right Sidebar -->
                <div class="space-y-8">

                    <!-- Other Services -->
                    <div class="flex flex-col">
                        <div class="p-6 text-lg text-white bg-blue-500 rounded-t-2xl ">Other Services</div>
                        <div class="p-6 bg-white shadow rounded-b-2xl">
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-center justify-between">
                                    <span>Special Departments</span>
                                    <span class="text-gray-500">›</span>
                                </li>
                                <li class="flex items-center justify-between">
                                    <span>Emergency & Critical Care</span>
                                    <span class="text-gray-500">›</span>
                                </li>
                                <li class="flex items-center justify-between">
                                    <span>Maternal & Child Care</span>
                                    <span class="text-gray-500">›</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Appointment Form -->
                    <div class="flex flex-col">
                        <div class="p-6 text-lg text-white bg-blue-500 rounded-t-2xl ">Appointment</div>
                        <div class="p-6 bg-white shadow rounded-b-2xl">
                            <form class="space-y-4">
                                <div class="relative w-full">
                                    <select class="w-full px-5 py-3 pr-12 border rounded-full appearance-none">
                                        <option>Select Department</option>
                                    </select>
                                    <!-- Custom arrow -->
                                    <span class="absolute -translate-y-1/2 pointer-events-none right-5 top-1/2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" class="w-auto h-4">
                                            <rect width="1024" height="1024" fill="none" />
                                            <path fill="currentColor"
                                                d="M831.872 340.864L512 652.672L192.128 340.864a30.59 30.59 0 0 0-42.752 0a29.12 29.12 0 0 0 0 41.6L489.664 714.24a32 32 0 0 0 44.672 0l340.288-331.712a29.12 29.12 0 0 0 0-41.728a30.59 30.59 0 0 0-42.752 0z"
                                                stroke-width="25.5" stroke="currentColor" />
                                        </svg>
                                    </span>
                                </div>

                                <div class="relative w-full">
                                    <select class="w-full px-5 py-3 pr-12 border rounded-full appearance-none">
                                        <option>Select Doctor</option>
                                    </select>
                                    <!-- Custom arrow -->
                                    <span class="absolute -translate-y-1/2 pointer-events-none right-5 top-1/2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" class="w-auto h-4">
                                            <rect width="1024" height="1024" fill="none" />
                                            <path fill="currentColor"
                                                d="M831.872 340.864L512 652.672L192.128 340.864a30.59 30.59 0 0 0-42.752 0a29.12 29.12 0 0 0 0 41.6L489.664 714.24a32 32 0 0 0 44.672 0l340.288-331.712a29.12 29.12 0 0 0 0-41.728a30.59 30.59 0 0 0-42.752 0z"
                                                stroke-width="25.5" stroke="currentColor" />
                                        </svg>
                                    </span>
                                </div>

                                <input type="text" placeholder="Full Name" class="w-full px-5 py-3 border rounded-full">
                                <input type="text" placeholder="Phone No." class="w-full px-5 py-3 border rounded-full">
                                <input type="date" class="w-full px-5 py-3 border rounded-full">
                                <div class="flex justify-center mt-20">
                                    <a href="#"
                                        class="flex items-center justify-between w-full px-1 py-1 text-white transition duration-300 rounded-full shadow bg-[#0035c6] hover:scale-105 hover:shadow-lg">
                                        <span class="ml-5 text-base">BOOK YOUR APPOINTMENT</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-7 lg:h-11">
                                            <g fill="none" stroke="currentColor" stroke-width="1">
                                                <circle cx="12" cy="12" r="10" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8 12h8m0 0l-3-3m3 3l-3 3" />
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
