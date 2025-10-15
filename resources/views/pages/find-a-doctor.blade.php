@extends('layouts.app')

@section('title', 'Find a Doctor')

@section('content')
<div class="flex flex-col">
    <x-banner title1="Find a" title2="Doctor" img_path='assets/find-a-doctor-banner.png' page="Find a Doctor" breadcrumb="" />

    <div class="py-32 bg-gray-50">
        <div class="container grid items-start grid-cols-1 gap-10 mx-auto lg:grid-cols-2">

            <!-- Left Form -->
            <div class="h-full p-10 bg-white shadow rounded-2xl" data-aos="zoom-in" data-aos-duration="1000">
                <form class="flex flex-col justify-between h-full space-y-6">

                    <!-- Doctor Name -->
                    <div>
                        <label class="block mb-1 text-sm font-semibold text-blue-700">Doctor Name</label>
                        <select id="doctorSelect" class="w-full px-3 py-2 border rounded-full focus:ring focus:ring-blue-200">
                            <option value="">Select a Doctor</option>
                            @foreach ($doctors as $doctor)
                            @php
                            $primarySpecializations = $doctor->specializations
                            ->filter(fn($s) => $s->pivot->type === 'Primary')
                            ->pluck('specialization_name')
                            ->implode(', ');

                            $secondarySpecializations = $doctor->specializations
                            ->filter(fn($s) => $s->pivot->type === 'Secondary')
                            ->pluck('specialization_name')
                            ->implode(', ');

                            $languages = $doctor->languages->pluck('language')->implode(', ');
                            @endphp

                            <option value="{{ $doctor->id }}"
                                data-gender="{{ $doctor->gender }}"
                                data-language="{{ $languages }}"
                                data-specialization="{{ $primarySpecializations }}"
                                data-subspecialization="{{ $secondarySpecializations }}">
                                {{ $doctor->name }}
                            </option>
                            @endforeach

                        </select>
                    </div>

                    <!-- Gender & Language -->
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <label class="block mb-1 text-sm font-semibold text-blue-700">Gender</label>
                            <select id="genderSelect" class="w-full px-3 py-2 border rounded-full focus:ring focus:ring-blue-200">
                                <option>Select a Gender</option>
                            </select>
                        </div>
                        <div>
                            <label class="block mb-1 text-sm font-semibold text-blue-700">Language</label>
                            <select id="languageSelect" class="w-full px-3 py-2 border rounded-full focus:ring focus:ring-blue-200">
                                <option>Select a Language</option>
                            </select>
                        </div>
                    </div>

                    <!-- Specialization -->
                    <div>
                        <label class="block mb-1 text-sm font-semibold text-blue-700">Specialization</label>
                        <select id="specializationSelect" class="w-full px-3 py-2 border rounded-full focus:ring focus:ring-blue-200">
                            <option>Select a Specialization</option>
                        </select>
                    </div>

                    <!-- Sub-specialization -->
                    <div>
                        <label class="block mb-1 text-sm font-semibold text-blue-700">Sub-specialization</label>
                        <select id="subspecializationSelect" class="w-full px-3 py-2 border rounded-full focus:ring focus:ring-blue-200">
                            <option>Select a Sub-specialization</option>
                        </select>
                    </div>

                    <!-- Search Button -->
                    <div class="flex items-center justify-center w-full cursor-pointer">
                        <a id="searchDoctorBtn" href="{{ route('find-a-doctor.show') }}" class="flex items-center justify-center gap-5 py-1 pl-5 pr-1 text-white transition duration-300 bg-blue-700 rounded-full shadow hover:scale-105 w-fit">
                            <div class="text-sm font-semibold">SEARCH DOCTOR</div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="p-2 border border-white rounded-full size-10">
                                <path fill="currentColor" fill-rule="evenodd" d="M14.385 15.446a6.75 6.75 0 1 1 1.06-1.06l5.156 5.155a.75.75 0 1 1-1.06 1.06zm-7.926-1.562a5.25 5.25 0 1 1 7.43-.005l-.005.005l-.005.004a5.25 5.25 0 0 1-7.42-.004" clip-rule="evenodd" stroke-width="0.4" stroke="currentColor" />
                            </svg>
                        </a>
                    </div>

                </form>
            </div>

            <!-- Right Content -->
            <div class="space-y-6 full:text-left">
                <div class="space-y-6">
                    <h2 class="text-4xl font-bold text-blue-700 pattaya-regular" data-aos="zoom-in" data-aos-duration="1000">Find the Right Doctor for You</h2>
                    <div class="pb-8 border-b-2 w-fit">
                        <img src="{{ asset('assets/findadoctor-img.png') }}" alt="Doctor with patient" class="shadow rounded-xl full:mx-0 h-auto w-[38rem]" data-aos="zoom-in" data-aos-duration="1000">
                    </div>
                </div>
                <p class="text-gray-600 w-[75%] top-3" data-aos="zoom-in" data-aos-duration="1000">
                    Your health is our priority. Use our Find a Doctor tool to connect with trusted specialists who meet your medical needs, preferences, and language of care.
                </p>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const doctorSelect = document.getElementById('doctorSelect');
        const genderSelect = document.getElementById('genderSelect');
        const languageSelect = document.getElementById('languageSelect');
        const specializationSelect = document.getElementById('specializationSelect');
        const subspecializationSelect = document.getElementById('subspecializationSelect');
        const searchDoctorBtn = document.getElementById('searchDoctorBtn');

        doctorSelect.addEventListener('change', function() {
            const selectedOption = this.options[this.selectedIndex];

            // Reset selects
            [genderSelect, languageSelect, specializationSelect, subspecializationSelect].forEach(select => {
                select.innerHTML = `<option>Select a ${select.id.replace('Select','')}</option>`;
            });

            if (!this.value) {
                searchDoctorBtn.href = "#";
                return;
            }

            // Populate fields
            const gender = selectedOption.dataset.gender;
            const language = selectedOption.dataset.language;
            const specialization = selectedOption.dataset.specialization;
            const subspecialization = selectedOption.dataset.subspecialization;

            genderSelect.innerHTML += `<option selected>${gender}</option>`;
            languageSelect.innerHTML += `<option selected>${language}</option>`;
            specializationSelect.innerHTML += `<option selected>${specialization}</option>`;
            subspecializationSelect.innerHTML += `<option selected>${subspecialization}</option>`;

            // Update link dynamically
            const routeTemplate = "{{ route('find-a-doctor.singlepage', ['id' => ':id']) }}";
            searchDoctorBtn.href = routeTemplate.replace(':id', this.value);
        });
    });
</script>
@endsection