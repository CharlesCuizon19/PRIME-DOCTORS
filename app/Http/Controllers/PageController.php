<?php

namespace App\Http\Controllers;

use App\Models\BlogCategories;
use App\Models\Blogs;
use App\Models\Careers;
use App\Models\Doctors;
use App\Models\Services;
use Carbon\Carbon;

class PageController extends Controller
{
    public function home()
    {
        $news = [
            (object) [
                'id' => 1,
                'thumbnail_image_id' => 'assets/news-img1.png',
                'title' => 'Prime Doctors Medical Center Launches New Telemedicine Services',
                'date' => '2023-09-10',
                'excerpt' => 'Prime Doctors Medical Center is excited to announce the launch of our new telemedicine services, allowing patients to consult with healthcare professionals from the comfort of their homes.',
            ],
            (object) [
                'id' => 2,
                'thumbnail_image_id' => 'assets/news-img2.png',
                'title' => 'Health Tips for the Flu Season',
                'date' => '2023-10-05',
                'excerpt' => 'As the flu season approaches, it’s important to strengthen your immune system and stay protected with vaccines and good hygiene habits.',
            ],
            (object) [
                'id' => 3,
                'thumbnail_image_id' => 'assets/news-img3.png',
                'title' => 'Prime Doctors Celebrates 20 Years of Service',
                'date' => '2024-03-15',
                'excerpt' => 'Our medical center proudly celebrates two decades of providing trusted healthcare to the community, with a renewed commitment to innovation and patient care.',
            ],
            (object) [
                'id' => 4,
                'thumbnail_image_id' => 'assets/news-img4.png',
                'title' => 'New Cardiology Wing Opens at Prime Doctors Medical Center',
                'date' => '2024-05-20',
                'excerpt' => 'The new Cardiology Department features state-of-the-art diagnostic equipment and specialized cardiologists ready to serve patients with heart-related conditions.',
            ],
            (object) [
                'id' => 5,
                'thumbnail_image_id' => 'assets/news-img5.png',
                'title' => 'Free Community Health Check-Up Program Announced',
                'date' => '2024-06-12',
                'excerpt' => 'Prime Doctors Medical Center invites everyone to join our free health check-up event aimed at promoting early detection and prevention of lifestyle diseases.',
            ],
            (object) [
                'id' => 6,
                'thumbnail_image_id' => 'assets/news-img6.png',
                'title' => 'Prime Doctors Partners with Local Schools for Health Awareness',
                'date' => '2024-07-05',
                'excerpt' => 'We’ve launched a partnership with local schools to promote health education and awareness among students through interactive seminars and wellness activities.',
            ],
            (object) [
                'id' => 7,
                'thumbnail_image_id' => 'assets/news-img7.png',
                'title' => 'Upgraded Emergency Department Now Open 24/7',
                'date' => '2024-08-18',
                'excerpt' => 'Our newly upgraded Emergency Department provides round-the-clock service with faster response times and advanced medical facilities.',
            ],
            (object) [
                'id' => 8,
                'thumbnail_image_id' => 'assets/news-img8.png',
                'title' => 'Mental Health Awareness Month: Prime Doctors Leads the Way',
                'date' => '2024-09-10',
                'excerpt' => 'In celebration of Mental Health Awareness Month, our specialists are hosting workshops and free counseling sessions to promote emotional well-being.',
            ],
            (object) [
                'id' => 9,
                'thumbnail_image_id' => 'assets/news-img9.png',
                'title' => 'New Pediatric Unit Welcomes Young Patients',
                'date' => '2024-10-01',
                'excerpt' => 'The newly opened Pediatric Unit offers a safe and friendly environment designed to make children feel comfortable while receiving quality medical care.',
            ],
        ];

        $doctors = [
            (object) [
                'id' => 1,
                'profile_img_id' => null,
                'name' => 'Dr. Charles Cuizon',
                'gender' => 'Male',
                'language' => 'Bisaya',
                'specialization' => 'Consultant Pediatrician',
                'subSpecialization' => null,
                'clinic_room_number' => 'Room 101, West Wing',
                'phone_number' => '+63 912 345 6789',
                'language' => 'English, Filipino, Bisaya',
                'clinic_hours' => 'Monday to Friday: 9:00 AM - 5:00 PM',
                'telephone' => '+1 (555) 123-4567',
            ],
            (object) [
                'id' => 2,
                'profile_img_id' => null,
                'name' => 'Dr. Lorem Ipsum',
                'gender' => 'Female',
                'language' => 'Bisaya',
                'specialization' => 'Cardiologist',
                'subSpecialization' => null,
                'clinic_room_number' => 'Room 101, West Wing',
                'phone_number' => '+63 912 345 6789',
                'language' => 'English, Filipino, Bisaya',
                'clinic_hours' => 'Monday to Friday: 9:00 AM - 5:00 PM',
                'telephone' => '+1 (555) 123-4567',
            ],
            (object) [
                'id' => 3,
                'profile_img_id' => null,
                'name' => 'Dr. Atlas Fox',
                'gender' => 'Female',
                'language' => 'Bisaya',
                'specialization' => 'Consultant Pediatrician',
                'subSpecialization' => null,
                'clinic_room_number' => 'Room 101, West Wing',
                'phone_number' => '+63 912 345 6789',
                'language' => 'English, Filipino, Bisaya',
                'clinic_hours' => 'Monday to Friday: 9:00 AM - 5:00 PM',
                'telephone' => '+1 (555) 123-4567',
            ],
            (object) [
                'id' => 4,
                'profile_img_id' => null,
                'name' => 'Dr. Jugger Naut',
                'gender' => 'Male',
                'language' => 'Bisaya',
                'specialization' => 'Cardiologist',
                'subSpecialization' => null,
                'clinic_room_number' => 'Room 101, West Wing',
                'phone_number' => '+63 912 345 6789',
                'language' => 'English, Filipino, Bisaya',
                'clinic_hours' => 'Monday to Friday: 9:00 AM - 5:00 PM',
                'telephone' => '+1 (555) 123-4567',
            ],
            (object) [
                'id' => 4,
                'profile_img_id' => null,
                'name' => 'Dr. Jugger Naut',
                'gender' => 'Male',
                'language' => 'Bisaya',
                'specialization' => 'Cardiologist',
                'subSpecialization' => null,
                'clinic_room_number' => 'Room 101, West Wing',
                'phone_number' => '+63 912 345 6789',
                'language' => 'English, Filipino, Bisaya',
                'clinic_hours' => 'Monday to Friday: 9:00 AM - 5:00 PM',
                'telephone' => '+1 (555) 123-4567',
            ],
            (object) [
                'id' => 4,
                'profile_img_id' => null,
                'name' => 'Dr. Jugger Naut',
                'gender' => 'Male',
                'language' => 'Bisaya',
                'specialization' => 'Cardiologist',
                'subSpecialization' => null,
                'clinic_room_number' => 'Room 101, West Wing',
                'phone_number' => '+63 912 345 6789',
                'language' => 'English, Filipino, Bisaya',
                'clinic_hours' => 'Monday to Friday: 9:00 AM - 5:00 PM',
                'telephone' => '+1 (555) 123-4567',
            ],
            (object) [
                'id' => 4,
                'profile_img_id' => null,
                'name' => 'Dr. Jugger Naut',
                'gender' => 'Male',
                'language' => 'Bisaya',
                'specialization' => 'Cardiologist',
                'subSpecialization' => null,
                'clinic_room_number' => 'Room 101, West Wing',
                'phone_number' => '+63 912 345 6789',
                'language' => 'English, Filipino, Bisaya',
                'clinic_hours' => 'Monday to Friday: 9:00 AM - 5:00 PM',
                'telephone' => '+1 (555) 123-4567',
            ],
        ];

        $news = collect($news)->sortByDesc('date')->take(4);

        return view('pages.home', compact('news', 'doctors'));
    }
    public function about_us()
    {
        return view('pages.about-us');
    }
    public function services()
    {
        $services = Services::with([
            'icon.file',
            'benefits',
            'inclusions'
        ])->orderBy('created_at', 'desc')->get();
        return view('pages.services', compact('services'));
    }
    public function show_service($id)
    {
        // ✅ Fetch the specific service with its relationships
        $service = Services::with(['image', 'icon', 'inclusions', 'benefits'])
            ->findOrFail($id);

        // ✅ Fetch other services (excluding the current one)
        $services = Services::where('id', '!=', $id)
            ->take(3)
            ->get();

        return view('pages.show_service', compact('service', 'services'));
    }


    public function careers()
    {
        // Fetch careers with their image, file, qualifications, and responsibilities
        $careers = Careers::with(['image.file', 'qualifications', 'responsibilities'])
            ->orderBy('created_at', 'desc')
            ->get();

        // Add computed monthsAgo (for display like before)
        foreach ($careers as $career) {
            $career->monthsAgo = Carbon::parse($career->created_at)->diffInMonths(Carbon::now());
        }

        $careers_count = $careers->count();

        return view('pages.careers', compact('careers', 'careers_count'));
    }

    public function show_career($id)
    {
        $career = Careers::with(['qualifications', 'responsibilities', 'image.file'])
            ->findOrFail($id);

        // Calculate how many months ago it was posted
        $career->monthsAgo = \Carbon\Carbon::parse($career->created_at)->diffInMonths(now());

        // Optionally: load all careers if you still want to show related positions
        $careers = Careers::with('image.file')
            ->where('id', '!=', $id)
            ->latest()
            ->get();

        return view('pages.show_career', compact('career', 'careers'));
    }


    public function find_a_doctor()
    {
        // ✅ Fetch doctors with their related info
        $doctors = Doctors::with([
            'languages',
            'specializations',
        ])->get();


        return view('pages.find-a-doctor', compact('doctors'));
    }


    public function show_doctor($id)
    {
        $doctor = Doctors::with(['specializations', 'languages'])->findOrFail($id);

        $primaryType = $doctor->specializations->first()->pivot->type ?? 'Primary';

        $related_doctors = Doctors::whereHas('specializations', function ($q) use ($doctor, $primaryType) {
            $q->whereIn('specializations.id', $doctor->specializations->pluck('id'))
                ->where('doctor_specializations.type', $primaryType);
        })->where('id', '!=', $doctor->id)
            ->with(['specializations', 'languages'])
            ->get();

        // Add this line to pass $doctor_count
        $doctor_count = 1;
        $related_doctors_count = $related_doctors->count();

        return view('pages.find-a-doctor-singlepage', compact('doctor', 'doctor_count', 'related_doctors', 'related_doctors_count'));
    }


    public function doctor_details($id)
    {
        $doctor = Doctors::with(['specializations', 'languages', 'image.file'])->findOrFail($id);

        // Fetch 3 random other doctors (excluding this one)
        $otherDoctors = Doctors::where('id', '!=', $id)
            ->with(['image.file'])
            ->inRandomOrder()
            ->take(3)
            ->get();

        return view('pages.doctor-details', compact('doctor', 'otherDoctors'));
    }

    public function news_and_events()
    {
        // Fetch the 'News' and 'Events' categories
        $categories = BlogCategories::whereIn('category_name', ['News', 'Events'])->pluck('id', 'category_name');

        // Fetch blogs for these categories, latest first
        $news = Blogs::with('category', 'image.file')
            ->whereIn('category_id', $categories)
            ->orderBy('blog_date', 'desc')
            ->get();

        return view('pages.news-and-events', compact('news'));
    }


    public function show_news($id)
    {
        // Get the blog by ID with category and image-file relationship
        $news = Blogs::with(['category', 'image.file'])
            ->findOrFail($id);

        // Get 3 latest blogs excluding current
        $latest_news = Blogs::with(['image.file'])
            ->where('id', '!=', $id)
            ->orderByDesc('blog_date')
            ->take(3)
            ->get();

        return view('pages.news-and-event-singlepage', compact('news', 'latest_news'));
    }


    public function contact_us()
    {
        return view('pages.contact-us');
    }
}
