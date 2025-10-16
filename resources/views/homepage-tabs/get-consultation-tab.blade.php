{{-- DESKTOP FORM --}}
<div class="hidden lg:pb-20 lg:flex" data-aos="zoom-in" data-aos-duration="1000">
    <div class="container relative mx-auto lg:rounded-[3rem] lg:w-fit lg:h-fit bg-[#edb42f]">
        <div class="flex items-center justify-center">
            <img src="{{ asset('assets/rectangle.png') }}" alt="">
        </div>
        <div class="absolute inset-0 flex flex-col gap-8 p-20">
            <div class="text-5xl text-[#0035c6] pattaya-regular">
                Get Consultation
            </div>
            <div class="w-1/2">
                <div class="text-xl font-light text-[#0035c6] w-fit">
                    It’s quick and easy—submit your details, and we’ll get back to you shortly.
                </div>
            </div>
            <form action="{{ route('consultations.store') }}" method="POST" class="flex gap-10">
                @csrf
                <input type="text" name="name" placeholder="Your Name*" required
                    class="px-10 py-4 rounded-full bg-[#f7e0ab] placeholder-[#0035c6] placeholder:opacity-50 focus:outline-none focus:ring-2 focus:ring-[#edb42f]">
                <input type="email" name="email" placeholder="Your Email*" required
                    class="px-10 py-4 rounded-full bg-[#f7e0ab] placeholder-[#0035c6] placeholder:opacity-50 focus:outline-none focus:ring-2 focus:ring-[#edb42f]">
                <input type="text" name="contact_num" placeholder="Your Contact Number*" required
                    class="px-10 py-4 rounded-full bg-[#f7e0ab] placeholder-[#0035c6] placeholder:opacity-50 focus:outline-none focus:ring-2 focus:ring-[#edb42f]">
                <button type="submit"
                    class="flex items-center gap-3 transition duration-300 bg-white rounded-full py-auto hover:scale-105 hover:shadow-lg">
                    <span class="font-semibold ml-7 text-[#0035c6]">SUBMIT CONSULTANCY</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-12 text-[#0035c6]">
                        <g fill="none" stroke="currentColor" stroke-width="1">
                            <circle cx="12" cy="12" r="10" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h8m0 0l-3-3m3 3l-3 3" />
                        </g>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</div>

{{-- MOBILE FORM --}}
<div class="flex lg:py-20 lg:hidden" data-aos="zoom-in" data-aos-duration="1000">
    <div class="bg-no-repeat bg-cover bg-[#edb42f]" style="background-image: url({{ asset('assets/rectangle2.png') }})">
        <div class="flex flex-col gap-8 px-3 py-10">
            <div class="text-2xl text-white pattaya-regular">
                Get Consultation
            </div>
            <div>
                <div class="text-sm font-light text-white w-fit">
                    It’s quick and easy—submit your details, and we’ll get back to you shortly.
                </div>
            </div>
            <form action="{{ route('consultations.store') }}" method="POST" class="flex flex-col gap-10">
                @csrf
                <input type="text" name="name" placeholder="Your Name*" required
                    class="px-10 py-4 rounded-full bg-[#f7e0ab] placeholder-white focus:outline-none focus:ring-2 focus:ring-[#edb42f]">
                <input type="email" name="email" placeholder="Your Email*" required
                    class="px-10 py-4 rounded-full bg-[#f7e0ab] placeholder-white focus:outline-none focus:ring-2 focus:ring-[#edb42f]">
                <input type="text" name="contact_num" placeholder="Your Contact Number*" required
                    class="px-10 py-4 rounded-full bg-[#f7e0ab] placeholder-white focus:outline-none focus:ring-2 focus:ring-[#edb42f]">
                <button type="submit"
                    class="flex items-center gap-3 transition duration-300 bg-white rounded-full w-fit py-auto hover:scale-105 hover:shadow-lg">
                    <span class="text-base font-semibold ml-7 text-[#edb42f]">SUBMIT CONSULTANCY</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-12 text-[#edb42f]">
                        <g fill="none" stroke="currentColor" stroke-width="1">
                            <circle cx="12" cy="12" r="10" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h8m0 0l-3-3m3 3l-3 3" />
                        </g>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</div>

{{-- SweetAlert Success --}}
@if(session('success'))
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: "{{ session('success') }}",
        confirmButtonColor: '#0035c6'
    });
</script>
@endif