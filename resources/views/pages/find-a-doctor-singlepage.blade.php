@extends('layouts.app')

@section('title', 'Doctor')

@section('content')
<div class="flex flex-col">
    <x-banner title1="Find a" title2="Doctor" img_path='assets/find-a-doctor-banner.png' page="Find a Doctor"
        breadcrumb="" />

    <div class="container py-32 mx-auto">
        <div>
            <div class="flex items-center justify-between pb-10 border-b">
                <div class="font-bold text-blue-700">
                    Results
                </div>
                <div class="flex items-center justify-center cursor-pointer">
                    <a href="{{ route('find-a-doctor.show') }}"
                        class="flex items-center justify-center gap-5 py-1 pl-5 pr-1 text-white transition duration-300 bg-blue-700 rounded-full shadow hover:scale-105 w-fit">
                        <div class="text-sm font-semibold">SEARCH OTHER DOCTOR</div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            class="p-2 border border-white rounded-full size-10">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M14.385 15.446a6.75 6.75 0 1 1 1.06-1.06l5.156 5.155a.75.75 0 1 1-1.06 1.06zm-7.926-1.562a5.25 5.25 0 1 1 7.43-.005l-.005.005l-.005.004a5.25 5.25 0 0 1-7.42-.004"
                                clip-rule="evenodd" stroke-width="0.4" stroke="currentColor" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="pt-10 space-y-8">
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24"
                            class="text-[#edb42f]">
                            <path fill="currentColor"
                                d="M19.652 19.405c.552-.115.882-.693.607-1.187c-.606-1.087-1.56-2.043-2.78-2.771C15.907 14.509 13.98 14 12 14s-3.907.508-5.479 1.447c-1.22.728-2.174 1.684-2.78 2.771c-.275.494.055 1.072.607 1.187a37.5 37.5 0 0 0 15.303 0"
                                stroke-width="0.5" stroke="currentColor" />
                            <circle cx="12" cy="8" r="5" fill="currentColor" stroke-width="0.5"
                                stroke="currentColor" />
                        </svg>
                        <div class="text-lg font-semibold text-[#0035c6]">
                            Searched Doctor
                            <span class="text-xs">({{ $doctor_count }})</span>
                        </div>
                    </div>
                    <a href="{{ route('find-a-doctor.doctor-details', ['id' => $doctor->id]) }}"
                        class="grid grid-cols-1 cursor-pointer 2xl:grid-cols-1 w-fit">
                        <div class="flex flex-col justify-end transition duration-300 bg-white border rounded-lg shadow-md hover:border-blue-700 bg-opacity-80">
                            <img src="{{ asset('assets/doctor-thumbnail.png') }}" alt="" class="object-cover rounded-md">
                            <div class="p-4">
                                <h3 class="font-semibold text-blue-700">{{ $doctor->name }}</h3>
                                <p class="text-sm text-[#edb42f]">
                                    {{ $doctor->specializations->filter(fn($s) => $s->pivot->type === 'Primary')->pluck('specialization_name')->implode(', ') }}
                                </p>
                            </div>
                        </div>

                    </a>
                </div>
                <div class="pt-10 space-y-8 mt-7">
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24"
                            class="text-[#edb42f]">
                            <path fill="currentColor"
                                d="M21.987 18.73a2 2 0 0 1-.34.85a1.9 1.9 0 0 1-1.56.8h-1.651a.74.74 0 0 1-.6-.31a.76.76 0 0 1-.11-.67c.37-1.18.29-2.51-3.061-4.64a.77.77 0 0 1-.32-.85a.76.76 0 0 1 .72-.54a7.61 7.61 0 0 1 6.792 4.39a2 2 0 0 1 .13.97M19.486 7.7a4.43 4.43 0 0 1-4.421 4.42a.76.76 0 0 1-.65-1.13a6.16 6.16 0 0 0 0-6.53a.75.75 0 0 1 .61-1.18a4.3 4.3 0 0 1 3.13 1.34a4.46 4.46 0 0 1 1.291 3.12z"
                                stroke-width="0.5" stroke="currentColor" />
                            <path fill="currentColor"
                                d="M16.675 18.7a2.65 2.65 0 0 1-1.26 2.48c-.418.257-.9.392-1.39.39H4.652a2.63 2.63 0 0 1-1.39-.39A2.62 2.62 0 0 1 2.01 18.7a2.6 2.6 0 0 1 .5-1.35a8.8 8.8 0 0 1 6.812-3.51a8.78 8.78 0 0 1 6.842 3.5a2.7 2.7 0 0 1 .51 1.36M14.245 7.32a4.92 4.92 0 0 1-4.902 4.91a4.903 4.903 0 0 1-4.797-5.858a4.9 4.9 0 0 1 6.678-3.57a4.9 4.9 0 0 1 3.03 4.518z"
                                stroke-width="0.5" stroke="currentColor" />
                        </svg>
                        <div class="text-lg font-semibold text-[#0035c6]">
                            Related Specialists

                            <span class="text-xs">({{ $related_doctors_count }})</span>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-5 2xl:grid-cols-5">
                        @foreach ($related_doctors as $item)
                        <a href="{{ route('find-a-doctor.doctor-details', ['id' => $item->id]) }}"
                            class="flex flex-col justify-end transition duration-300 bg-white border rounded-lg shadow-md cursor-pointer hover:border-blue-700 bg-opacity-80">
                            <img src="{{ asset('assets/doctor-thumbnail.png') }}" alt=""
                                class="object-cover rounded-md">
                            <div class="p-4">
                                <h3 class="font-semibold text-blue-700">{{ $item->name }}</h3>
                                <p class="text-sm text-[#edb42f]">
                                    {{ $doctor->specializations->filter(fn($s) => $s->pivot->type === 'Primary')->pluck('specialization_name')->implode(', ') }}
                                </p>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection