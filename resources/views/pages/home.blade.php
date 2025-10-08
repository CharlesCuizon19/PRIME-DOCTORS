@extends('layouts.app')

@section('title', 'Bridging Health Through Care')

@section('content')
    <div>
        @include('homepage-tabs.banner-tab')

        {{-- OUR SERVICES --}}
        @include('homepage-tabs.our-services-tab')

        {{-- ABOUT US --}}
        @include('homepage-tabs.about-us-tab')

        {{-- OUR DOCTOR --}}
        @include('homepage-tabs.our-doctors-tab')

        {{-- FAQ --}}
        @include('homepage-tabs.FAQ-tab')

        {{-- NEWS & EVENTS --}}
        @include('homepage-tabs.news&events-tab')

        {{-- GET CONSULTATION DESKTOP --}}
        @include('homepage-tabs.get-consultation-tab')

        <style>
            /* Custom styles for Swiper */
            .swiper,
            .doctors-swiper {
                width: 100%;
                padding-bottom: 0px;
            }

            .swiper-slide {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .swiper-pagination {
                position: relative;
                bottom: 10px;
            }

            .swiper-button-next,
            .swiper-button-prev {
                color: #1e40af;
                /* Matches blue-700 theme */
            }
        </style>

        <script>
            const swiper = new Swiper('.swiper', {
                // Responsive breakpoints
                loop: true,
                slidesPerView: 1,
                spaceBetween: 32,
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 4,
                    },
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });

            const doctorsSwiper = new Swiper('.doctors-swiper', {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 20,
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 4,
                    },
                },
                // Custom navigation will be handled via event listeners
            });

            document.addEventListener('DOMContentLoaded', function() {
                const prevBtn = document.querySelector('.prev-btn');
                const nextBtn = document.querySelector('.next-btn');

                if (prevBtn) {
                    prevBtn.addEventListener('click', function() {
                        doctorsSwiper.slidePrev();
                    });
                }

                if (nextBtn) {
                    nextBtn.addEventListener('click', function() {
                        doctorsSwiper.slideNext();
                    });
                }
            });

            function toggleContent(containerId, contentId) {
                const allContainers = document.querySelectorAll('[id^="faqContainer"]');
                const allContents = document.querySelectorAll('[id^="content"]');
                const allDownIcons = document.querySelectorAll('.down');
                const allUpIcons = document.querySelectorAll('.up');

                // Close all FAQs first
                allContents.forEach(content => {
                    content.style.maxHeight = '0px';
                });
                allContainers.forEach(container => {
                    container.classList.remove('border-[#EDB42F]');
                    container.classList.remove('divide-y');
                    container.classList.remove('text-[#EDB42F]');
                });
                allDownIcons.forEach(icon => icon.classList.remove('hidden'));
                allUpIcons.forEach(icon => icon.classList.add('hidden'));

                // Open the clicked one
                const container = document.getElementById(containerId);
                const content = document.getElementById(contentId);
                const downIcon = container.querySelector('.down');
                const upIcon = container.querySelector('.up');

                if (content.style.maxHeight === '0px' || content.style.maxHeight === '') {
                    content.style.maxHeight = content.scrollHeight + 'px';
                    container.classList.add('border-[#EDB42F]');
                    container.classList.add('text-[#EDB42F]');
                    container.classList.add('divide-y');
                    downIcon.classList.add('hidden');
                    upIcon.classList.remove('hidden');
                }
            }
        </script>
    @endsection
