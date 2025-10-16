@extends('layouts.app')

@section('title', 'Service')

@section('content')
<div class="flex flex-col">
    <x-banner title1="Our" title2="Services" img_path='assets/services-banner.png' page="Services /"
        breadcrumb="{!! $service->title !!}" />

    <div class="h-full py-20 bg-gray-100">
        <div class="container grid grid-cols-1 gap-12 px-4 py-12 mx-auto lg:px-8 lg:grid-cols-3">

            <!-- LEFT CONTENT -->
            <div class="space-y-12 lg:col-span-2">

                <!-- Service Image -->
                <div class="overflow-hidden rounded-3xl shadow-md">
                    <img src="{{ asset('storage/services/' . basename(optional($service->image)?->file?->image_path ?? '')) }}"
                        alt="{{ $service->title }} Image"
                        class="object-cover w-full">
                </div>

                <!-- Description -->
                <section>
                    <h2 class="mb-4 text-3xl font-bold text-[#0035c6] pattaya-regular">Description</h2>
                    <p class="leading-relaxed text-gray-700 text-justify">
                        {!! $service->description !!}
                    </p>
                </section>

                <!-- What's Included -->
                @if($service->inclusions && $service->inclusions->count() > 0)
                <section>
                    <h3 class="mb-4 text-3xl font-bold text-[#0035c6] pattaya-regular">What's Included</h3>
                    <ul class="space-y-3 text-gray-700">
                        @foreach ($service->inclusions as $inclusion)
                        <li class="flex items-start space-x-3">
                            <div class="flex items-center justify-center w-6 h-6 bg-yellow-500 rounded-full">
                                <span class="text-white text-sm font-bold">✔</span>
                            </div>
                            <span>{{ $inclusion->inclusion_name }}</span>
                        </li>
                        @endforeach
                    </ul>
                </section>
                @endif

                <!-- Why It Matters -->
                @if($service->why_it_matters)
                <section>
                    <h3 class="mb-4 text-3xl font-bold text-[#0035c6] pattaya-regular">Why It Matters</h3>
                    <p class="leading-relaxed text-gray-700 text-justify">
                        {!! $service->why_it_matters !!}
                    </p>
                </section>
                @endif

                <!-- Benefits for Patients -->
                @if($service->benefits && $service->benefits->count() > 0)
                <section>
                    <h3 class="mb-4 text-3xl font-bold text-[#0035c6] pattaya-regular">Benefits for Patients</h3>
                    <ul class="space-y-3 text-gray-700">
                        @foreach ($service->benefits as $benefit)
                        <li class="flex items-start space-x-3">
                            <img src="{{ asset('assets/benefits-icon.png') }}" alt="" class="w-6 h-6 mt-1">
                            <span>{{ $benefit->benefit_name }}</span>
                        </li>
                        @endforeach
                    </ul>
                </section>
                @endif

            </div>

            <!-- RIGHT SIDEBAR -->
            <aside class="space-y-10">

                <!-- Other Services -->
                <div class="overflow-hidden rounded-3xl shadow-md bg-white">
                    <div class="p-5 text-lg font-semibold text-white bg-[#0035c6]">Other Services</div>
                    <ul class="p-6 space-y-3">
                        @foreach ($services as $item)
                        <li>
                            <a href="{{ route('service.show', ['id' => $item->id]) }}"
                                class="flex items-center justify-between text-gray-700 hover:text-[#0035c6] transition">
                                <span>{{ $item->title }}</span>
                                <span class="text-2xl text-gray-400">›</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Appointment Form -->
                <div class="overflow-hidden rounded-3xl shadow-md bg-white">
                    <div class="p-5 text-lg font-semibold text-white bg-[#0035c6]">Book an Appointment</div>
                    <div class="p-6">
                        <form class="space-y-4">
                            <div class="relative">
                                <select class="w-full px-5 py-3 pr-10 text-gray-700 border rounded-full appearance-none">
                                    <option>Select Department</option>
                                </select>
                                <span class="absolute right-5 top-1/2 -translate-y-1/2 text-gray-500 pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" class="w-4 h-4">
                                        <path fill="currentColor"
                                            d="M831.872 340.864L512 652.672L192.128 340.864a30.59 30.59 0 0 0-42.752 0a29.12 29.12 0 0 0 0 41.6L489.664 714.24a32 32 0 0 0 44.672 0l340.288-331.712a29.12 29.12 0 0 0 0-41.728a30.59 30.59 0 0 0-42.752 0z" />
                                    </svg>
                                </span>
                            </div>

                            <div class="relative">
                                <select class="w-full px-5 py-3 pr-10 text-gray-700 border rounded-full appearance-none">
                                    <option>Select Doctor</option>
                                </select>
                                <span class="absolute right-5 top-1/2 -translate-y-1/2 text-gray-500 pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" class="w-4 h-4">
                                        <path fill="currentColor"
                                            d="M831.872 340.864L512 652.672L192.128 340.864a30.59 30.59 0 0 0-42.752 0a29.12 29.12 0 0 0 0 41.6L489.664 714.24a32 32 0 0 0 44.672 0l340.288-331.712a29.12 29.12 0 0 0 0-41.728a30.59 30.59 0 0 0-42.752 0z" />
                                    </svg>
                                </span>
                            </div>

                            <input type="text" placeholder="Full Name" class="w-full px-5 py-3 border rounded-full">
                            <input type="text" placeholder="Phone No." class="w-full px-5 py-3 border rounded-full">
                            <input type="date" class="w-full px-5 py-3 border rounded-full">

                            <button type="submit"
                                class="w-full flex items-center justify-center gap-2 py-3 font-semibold text-white rounded-full shadow-md bg-[#edb42f] hover:bg-yellow-500 hover:scale-105 transition duration-300">
                                BOOK YOUR APPOINTMENT
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                                    <path fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" d="M8 12h8m0 0l-3-3m3 3l-3 3" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </aside>

        </div>
    </div>
</div>
@endsection