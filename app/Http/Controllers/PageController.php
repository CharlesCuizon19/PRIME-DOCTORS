<?php

namespace App\Http\Controllers;

use App\Models\Banners;
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
        // Fetch banners with images
        $banners = Banners::with('image.file')->latest()->get();

        // Fetch all services dynamically with icon, benefits, inclusions, and main image
        $services = Services::with(['image.file', 'icon.file', 'benefits', 'inclusions'])
            ->orderBy('created_at', 'desc')
            ->get();

        // Fetch latest 4 news with images
        $news = Blogs::with('image.file')->latest()->take(4)->get();

        // Fetch doctors dynamically with profile images and specializations
        $doctors = Doctors::with(['image.file', 'specializations'])
            ->orderBy('name')
            ->get();

        // Return to view with all data
        return view('pages.home', compact('banners', 'services', 'news', 'doctors'));
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
