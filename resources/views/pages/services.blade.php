@extends('layouts.app')

@section('title', 'Services')

@section('content')
<div class="relative flex flex-col overflow-x-hidden">
    <x-banner title1="Our" title2="Services" img_path='assets/services-banner.png' page="Services" breadcrumb="" />

    <div class="bg-gray-100">
        <div class="container py-32 mx-auto">
            <div class="grid grid-cols-1 gap-x-24 gap-y-24 lg:grid-cols-4">
                @foreach ($services as $service)
                <div class="w-full cursor-pointer hover:scale-105 transition duration-300 max-h-fit rounded-[3rem] shadow-lg"
                    data-aos="zoom-in" data-aos-duration="1000">
                    <a href="{{ route('service.show', $service->id) }}">
                        <div class="relative p-6 text-center clip-box bg-white rounded-[3rem] lg:h-[25rem]">
                            <div class="flex flex-col items-center justify-around h-auto mt-5 lg:h-full">
                                <h3 class="mt-10 mb-5 text-xl font-bold text-[#0035c6] pattaya-regular">
                                    {{ $service->title }}
                                </h3>

                                {{-- ✅ Show inclusions or benefits --}}
                                <ul class="px-5 mb-6 space-y-2 text-sm text-gray-700 list-disc text-start">
                                    @forelse ($service->inclusions as $inclusion)
                                    <li>{{ $inclusion->inclusion_name }}</li>
                                    @empty
                                    @forelse ($service->benefits as $benefit)
                                    <li>{{ $benefit->benefit_name }}</li>
                                    @empty
                                    <li>No details available.</li>
                                    @endforelse
                                    @endforelse
                                </ul>

                                <a href="{{ route('service.show', $service->id) }}"
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

                    {{-- ✅ Icon Image --}}
                    @if ($service->icon && $service->icon->file)
                    <div class="absolute transform left-[125px] lg:left-[40%] -top-6">
                        <div
                            class="flex items-center justify-center w-20 h-20 bg-yellow-500 rounded-full shadow-md">
                            <img src="{{ asset('storage/' . $service->icon->file->image_path) }}">
                        </div>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endsection