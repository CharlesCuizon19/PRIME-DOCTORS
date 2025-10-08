<?php

namespace App\Http\Controllers;

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
        return view('pages.services');
    }
    public function show_service($id)
    {
        $service = [
            (object) [
                'id' => 1,
                'title' => 'General Services',
                'img' => 'assets/service-img1.png',
                'desc' => 'Our General Services provide the foundation of healthcare at Prime Doctors Medical Center. This service is designed to address the everyday medical needs of individuals and families, ensuring that essential care is always within reach. From routine check-ups and preventive screenings to minor treatments and lifestyle guidance, General Services are meant to keep you healthy, informed, and protected at every stage of life.
        It is through these services that patients establish a trusted relationship with our doctors, allowing for continuous monitoring of health and early detection of potential concerns. Whether you are managing a chronic condition, seeking preventive advice, or simply needing a professional consultation, our General Services are built to offer convenient, reliable, and personalized care that adapts to your needs',
                'inclusions' => [
                    'Routine check-ups and physical exams',
                    'Preventive screenings and vaccinations',
                    'Diagnosis and treatment of common illnesses',
                    'Management of chronic conditions (e.g., diabetes, hypertension)',
                    'Health education and lifestyle counseling',
                ],
                'why_it_matters' => 'General Services play a vital role in maintaining long-term health and preventing serious illnesses. By providing accessible and comprehensive care, these services help individuals stay proactive about their health, catch potential issues early, and manage existing conditions effectively. Regular interactions with healthcare providers through General Services foster a deeper understanding of personal health, empowering patients to make informed decisions and lead healthier lives.',
                'benefits_for_patients' => [
                    'Convenient access to essential healthcare services',
                    'Early detection and prevention of health issues',
                    'Cost-effective approach to maintaining wellness',
                ]
            ],
            (object) [
                'id' => 2,
                'title' => 'Specialized Departments',
                'img' => 'assets/service-img1.png',
                'desc' => 'Our General Services provide the foundation of healthcare at Prime Doctors Medical Center. This service is designed to address the everyday medical needs of individuals and families, ensuring that essential care is always within reach. From routine check-ups and preventive screenings to minor treatments and lifestyle guidance, General Services are meant to keep you healthy, informed, and protected at every stage of life.
        It is through these services that patients establish a trusted relationship with our doctors, allowing for continuous monitoring of health and early detection of potential concerns. Whether you are managing a chronic condition, seeking preventive advice, or simply needing a professional consultation, our General Services are built to offer convenient, reliable, and personalized care that adapts to your needs',
                'inclusions' => [
                    'Routine check-ups and physical exams',
                    'Preventive screenings and vaccinations',
                    'Diagnosis and treatment of common illnesses',
                    'Management of chronic conditions (e.g., diabetes, hypertension)',
                    'Health education and lifestyle counseling',
                ],
                'why_it_matters' => 'General Services play a vital role in maintaining long-term health and preventing serious illnesses. By providing accessible and comprehensive care, these services help individuals stay proactive about their health, catch potential issues early, and manage existing conditions effectively. Regular interactions with healthcare providers through General Services foster a deeper understanding of personal health, empowering patients to make informed decisions and lead healthier lives.',
                'benefits_for_patients' => [
                    'Convenient access to essential healthcare services',
                    'Early detection and prevention of health issues',
                    'Cost-effective approach to maintaining wellness',
                ]
            ],
            (object) [
                'id' => 3,
                'title' => 'Emergency & Critical Care',
                'img' => 'assets/service-img1.png',
                'desc' => 'Our General Services provide the foundation of healthcare at Prime Doctors Medical Center. This service is designed to address the everyday medical needs of individuals and families, ensuring that essential care is always within reach. From routine check-ups and preventive screenings to minor treatments and lifestyle guidance, General Services are meant to keep you healthy, informed, and protected at every stage of life.
        It is through these services that patients establish a trusted relationship with our doctors, allowing for continuous monitoring of health and early detection of potential concerns. Whether you are managing a chronic condition, seeking preventive advice, or simply needing a professional consultation, our General Services are built to offer convenient, reliable, and personalized care that adapts to your needs',
                'inclusions' => [
                    'Routine check-ups and physical exams',
                    'Preventive screenings and vaccinations',
                    'Diagnosis and treatment of common illnesses',
                    'Management of chronic conditions (e.g., diabetes, hypertension)',
                    'Health education and lifestyle counseling',
                ],
                'why_it_matters' => 'General Services play a vital role in maintaining long-term health and preventing serious illnesses. By providing accessible and comprehensive care, these services help individuals stay proactive about their health, catch potential issues early, and manage existing conditions effectively. Regular interactions with healthcare providers through General Services foster a deeper understanding of personal health, empowering patients to make informed decisions and lead healthier lives.',
                'benefits_for_patients' => [
                    'Convenient access to essential healthcare services',
                    'Early detection and prevention of health issues',
                    'Cost-effective approach to maintaining wellness',
                ]
            ],
        ];

        $service = collect($service)->where('id', $id)->first();

        return view('pages.show_service', compact('service'));
    }

    public function careers()
    {
        $careers = [
            (object) [
                'id' => 1,
                'img' => 'assets/careers-img2.png',
                'title' => 'Medical Technologist',
                'location' => 'Makati, Metro Manila',
                'type' => 'Full-time',
                'date' => '2023-10-01',
                'vacancy' => 3,
                'description' => 'We are seeking a dedicated and compassionate Medical Doctor to join our healthcare team. The ideal candidate will be responsible for diagnosing and treating patients, providing preventive care, and promoting overall health and wellness. The Medical Doctor will work closely with other healthcare professionals to ensure comprehensive patient care.',
                'responsibilities' => [
                    'Conduct thorough medical examinations and assessments of patients.',
                    'Diagnose and treat a wide range of medical conditions and illnesses.',
                    'Prescribe medications and therapies as needed.',
                    'Provide preventive care, including vaccinations and health screenings.',
                    'Educate patients on health maintenance and disease prevention.',
                    'Collaborate with other healthcare professionals to develop and implement treatment plans.',
                    'Maintain accurate and up-to-date patient records.',
                    'Stay informed about the latest medical research and advancements in healthcare.',
                ],
                'qualifications' => [
                    'Medical degree from an accredited institution.',
                    'Valid medical license to practice in the Philippines.',
                    'Proven experience as a Medical Doctor or in a similar role.',
                    'Strong knowledge of medical procedures, treatments, and protocols.',
                    'Excellent communication and interpersonal skills.',
                    'Ability to work effectively in a team-oriented environment.',
                    'Compassionate and patient-focused approach to care.',
                ],
            ],
            (object) [
                'id' => 2,
                'img' => 'assets/careers-img1.png',
                'title' => 'Registered Nurse (RN)',
                'location' => 'Makati, Metro Manila',
                'type' => 'Part-time',
                'date' => '2024-10-01',
                'vacancy' => 4,
                'description' => 'We are looking for a skilled and compassionate Registered Nurse to join our healthcare team. The ideal candidate will be responsible for providing high-quality nursing care to patients, assisting with medical procedures, and promoting overall health and wellness. The Registered Nurse will work closely with doctors and other healthcare professionals to ensure comprehensive patient care.',
                'responsibilities' => [
                    'Provide direct nursing care to patients, including administering medications and treatments.',
                    'Monitor patients\' vital signs and overall health status.',
                    'Assist doctors with medical procedures and examinations.',
                    'Educate patients and their families on health maintenance and disease prevention.',
                    'Maintain accurate and up-to-date patient records.',
                    'Collaborate with other healthcare professionals to develop and implement care plans.',
                    'Ensure a safe and clean environment for patients.',
                    'Stay informed about the latest nursing practices and advancements in healthcare.',
                ],
                'qualifications' => [
                    'Nursing degree from an accredited institution.',
                    'Valid nursing license to practice in the Philippines.',
                    'Proven experience as a Registered Nurse or in a similar role.',
                    'Strong knowledge of nursing procedures, treatments, and protocols.',
                    'Excellent communication and interpersonal skills.',
                    'Ability to work effectively in a team-oriented environment.',
                    'Compassionate and patient-focused approach to care.',
                ],
            ],
            (object) [
                'id' => 3,
                'img' => 'assets/careers-img1.png',
                'title' => 'Registered Nurse (RN)',
                'location' => 'Makati, Metro Manila',
                'type' => 'Part-time',
                'date' => '2024-10-01',
                'vacancy' => 4,
                'description' => 'We are looking for a skilled and compassionate Registered Nurse to join our healthcare team. The ideal candidate will be responsible for providing high-quality nursing care to patients, assisting with medical procedures, and promoting overall health and wellness. The Registered Nurse will work closely with doctors and other healthcare professionals to ensure comprehensive patient care.',
                'responsibilities' => [
                    'Provide direct nursing care to patients, including administering medications and treatments.',
                    'Monitor patients\' vital signs and overall health status.',
                    'Assist doctors with medical procedures and examinations.',
                    'Educate patients and their families on health maintenance and disease prevention.',
                    'Maintain accurate and up-to-date patient records.',
                    'Collaborate with other healthcare professionals to develop and implement care plans.',
                    'Ensure a safe and clean environment for patients.',
                    'Stay informed about the latest nursing practices and advancements in healthcare.',
                ],
                'qualifications' => [
                    'Nursing degree from an accredited institution.',
                    'Valid nursing license to practice in the Philippines.',
                    'Proven experience as a Registered Nurse or in a similar role.',
                    'Strong knowledge of nursing procedures, treatments, and protocols.',
                    'Excellent communication and interpersonal skills.',
                    'Ability to work effectively in a team-oriented environment.',
                    'Compassionate and patient-focused approach to care.',
                ],
            ],
            (object) [
                'id' => 4,
                'img' => 'assets/careers-img1.png',
                'title' => 'Registered Nurse (RN)',
                'location' => 'Makati, Metro Manila',
                'type' => 'Part-time',
                'date' => '2024-10-01',
                'vacancy' => 4,
                'description' => 'We are looking for a skilled and compassionate Registered Nurse to join our healthcare team. The ideal candidate will be responsible for providing high-quality nursing care to patients, assisting with medical procedures, and promoting overall health and wellness. The Registered Nurse will work closely with doctors and other healthcare professionals to ensure comprehensive patient care.',
                'responsibilities' => [
                    'Provide direct nursing care to patients, including administering medications and treatments.',
                    'Monitor patients\' vital signs and overall health status.',
                    'Assist doctors with medical procedures and examinations.',
                    'Educate patients and their families on health maintenance and disease prevention.',
                    'Maintain accurate and up-to-date patient records.',
                    'Collaborate with other healthcare professionals to develop and implement care plans.',
                    'Ensure a safe and clean environment for patients.',
                    'Stay informed about the latest nursing practices and advancements in healthcare.',
                ],
                'qualifications' => [
                    'Nursing degree from an accredited institution.',
                    'Valid nursing license to practice in the Philippines.',
                    'Proven experience as a Registered Nurse or in a similar role.',
                    'Strong knowledge of nursing procedures, treatments, and protocols.',
                    'Excellent communication and interpersonal skills.',
                    'Ability to work effectively in a team-oriented environment.',
                    'Compassionate and patient-focused approach to care.',
                ],
            ],
            (object) [
                'id' => 5,
                'img' => 'assets/careers-img1.png',
                'title' => 'Registered Nurse (RN)',
                'location' => 'Makati, Metro Manila',
                'type' => 'Part-time',
                'date' => '2024-10-01',
                'vacancy' => 4,
                'description' => 'We are looking for a skilled and compassionate Registered Nurse to join our healthcare team. The ideal candidate will be responsible for providing high-quality nursing care to patients, assisting with medical procedures, and promoting overall health and wellness. The Registered Nurse will work closely with doctors and other healthcare professionals to ensure comprehensive patient care.',
                'responsibilities' => [
                    'Provide direct nursing care to patients, including administering medications and treatments.',
                    'Monitor patients\' vital signs and overall health status.',
                    'Assist doctors with medical procedures and examinations.',
                    'Educate patients and their families on health maintenance and disease prevention.',
                    'Maintain accurate and up-to-date patient records.',
                    'Collaborate with other healthcare professionals to develop and implement care plans.',
                    'Ensure a safe and clean environment for patients.',
                    'Stay informed about the latest nursing practices and advancements in healthcare.',
                ],
                'qualifications' => [
                    'Nursing degree from an accredited institution.',
                    'Valid nursing license to practice in the Philippines.',
                    'Proven experience as a Registered Nurse or in a similar role.',
                    'Strong knowledge of nursing procedures, treatments, and protocols.',
                    'Excellent communication and interpersonal skills.',
                    'Ability to work effectively in a team-oriented environment.',
                    'Compassionate and patient-focused approach to care.',
                ],
            ],
            (object) [
                'id' => 6,
                'img' => 'assets/careers-img1.png',
                'title' => 'Registered Nurse (RN)',
                'location' => 'Makati, Metro Manila',
                'type' => 'Part-time',
                'date' => '2024-10-01',
                'vacancy' => 4,
                'description' => 'We are looking for a skilled and compassionate Registered Nurse to join our healthcare team. The ideal candidate will be responsible for providing high-quality nursing care to patients, assisting with medical procedures, and promoting overall health and wellness. The Registered Nurse will work closely with doctors and other healthcare professionals to ensure comprehensive patient care.',
                'responsibilities' => [
                    'Provide direct nursing care to patients, including administering medications and treatments.',
                    'Monitor patients\' vital signs and overall health status.',
                    'Assist doctors with medical procedures and examinations.',
                    'Educate patients and their families on health maintenance and disease prevention.',
                    'Maintain accurate and up-to-date patient records.',
                    'Collaborate with other healthcare professionals to develop and implement care plans.',
                    'Ensure a safe and clean environment for patients.',
                    'Stay informed about the latest nursing practices and advancements in healthcare.',
                ],
                'qualifications' => [
                    'Nursing degree from an accredited institution.',
                    'Valid nursing license to practice in the Philippines.',
                    'Proven experience as a Registered Nurse or in a similar role.',
                    'Strong knowledge of nursing procedures, treatments, and protocols.',
                    'Excellent communication and interpersonal skills.',
                    'Ability to work effectively in a team-oriented environment.',
                    'Compassionate and patient-focused approach to care.',
                ],
            ],
            (object) [
                'id' => 7,
                'img' => 'assets/careers-img1.png',
                'title' => 'Registered Nurse (RN)',
                'location' => 'Makati, Metro Manila',
                'type' => 'Part-time',
                'date' => '2024-10-01',
                'vacancy' => 4,
                'description' => 'We are looking for a skilled and compassionate Registered Nurse to join our healthcare team. The ideal candidate will be responsible for providing high-quality nursing care to patients, assisting with medical procedures, and promoting overall health and wellness. The Registered Nurse will work closely with doctors and other healthcare professionals to ensure comprehensive patient care.',
                'responsibilities' => [
                    'Provide direct nursing care to patients, including administering medications and treatments.',
                    'Monitor patients\' vital signs and overall health status.',
                    'Assist doctors with medical procedures and examinations.',
                    'Educate patients and their families on health maintenance and disease prevention.',
                    'Maintain accurate and up-to-date patient records.',
                    'Collaborate with other healthcare professionals to develop and implement care plans.',
                    'Ensure a safe and clean environment for patients.',
                    'Stay informed about the latest nursing practices and advancements in healthcare.',
                ],
                'qualifications' => [
                    'Nursing degree from an accredited institution.',
                    'Valid nursing license to practice in the Philippines.',
                    'Proven experience as a Registered Nurse or in a similar role.',
                    'Strong knowledge of nursing procedures, treatments, and protocols.',
                    'Excellent communication and interpersonal skills.',
                    'Ability to work effectively in a team-oriented environment.',
                    'Compassionate and patient-focused approach to care.',
                ],
            ],
            (object) [
                'id' => 8,
                'img' => 'assets/careers-img1.png',
                'title' => 'Registered Nurse (RN)',
                'location' => 'Makati, Metro Manila',
                'type' => 'Part-time',
                'date' => '2024-10-01',
                'vacancy' => 4,
                'description' => 'We are looking for a skilled and compassionate Registered Nurse to join our healthcare team. The ideal candidate will be responsible for providing high-quality nursing care to patients, assisting with medical procedures, and promoting overall health and wellness. The Registered Nurse will work closely with doctors and other healthcare professionals to ensure comprehensive patient care.',
                'responsibilities' => [
                    'Provide direct nursing care to patients, including administering medications and treatments.',
                    'Monitor patients\' vital signs and overall health status.',
                    'Assist doctors with medical procedures and examinations.',
                    'Educate patients and their families on health maintenance and disease prevention.',
                    'Maintain accurate and up-to-date patient records.',
                    'Collaborate with other healthcare professionals to develop and implement care plans.',
                    'Ensure a safe and clean environment for patients.',
                    'Stay informed about the latest nursing practices and advancements in healthcare.',
                ],
                'qualifications' => [
                    'Nursing degree from an accredited institution.',
                    'Valid nursing license to practice in the Philippines.',
                    'Proven experience as a Registered Nurse or in a similar role.',
                    'Strong knowledge of nursing procedures, treatments, and protocols.',
                    'Excellent communication and interpersonal skills.',
                    'Ability to work effectively in a team-oriented environment.',
                    'Compassionate and patient-focused approach to care.',
                ],
            ],
            (object) [
                'id' => 9,
                'img' => 'assets/careers-img1.png',
                'title' => 'Registered Nurse (RN)',
                'location' => 'Makati, Metro Manila',
                'type' => 'Part-time',
                'date' => '2024-10-01',
                'vacancy' => 4,
                'description' => 'We are looking for a skilled and compassionate Registered Nurse to join our healthcare team. The ideal candidate will be responsible for providing high-quality nursing care to patients, assisting with medical procedures, and promoting overall health and wellness. The Registered Nurse will work closely with doctors and other healthcare professionals to ensure comprehensive patient care.',
                'responsibilities' => [
                    'Provide direct nursing care to patients, including administering medications and treatments.',
                    'Monitor patients\' vital signs and overall health status.',
                    'Assist doctors with medical procedures and examinations.',
                    'Educate patients and their families on health maintenance and disease prevention.',
                    'Maintain accurate and up-to-date patient records.',
                    'Collaborate with other healthcare professionals to develop and implement care plans.',
                    'Ensure a safe and clean environment for patients.',
                    'Stay informed about the latest nursing practices and advancements in healthcare.',
                ],
                'qualifications' => [
                    'Nursing degree from an accredited institution.',
                    'Valid nursing license to practice in the Philippines.',
                    'Proven experience as a Registered Nurse or in a similar role.',
                    'Strong knowledge of nursing procedures, treatments, and protocols.',
                    'Excellent communication and interpersonal skills.',
                    'Ability to work effectively in a team-oriented environment.',
                    'Compassionate and patient-focused approach to care.',
                ],
            ],
            (object) [
                'id' => 10,
                'img' => 'assets/careers-img1.png',
                'title' => 'Registered Nurse (RN)',
                'location' => 'Makati, Metro Manila',
                'type' => 'Part-time',
                'date' => '2024-10-01',
                'vacancy' => 4,
                'description' => 'We are looking for a skilled and compassionate Registered Nurse to join our healthcare team. The ideal candidate will be responsible for providing high-quality nursing care to patients, assisting with medical procedures, and promoting overall health and wellness. The Registered Nurse will work closely with doctors and other healthcare professionals to ensure comprehensive patient care.',
                'responsibilities' => [
                    'Provide direct nursing care to patients, including administering medications and treatments.',
                    'Monitor patients\' vital signs and overall health status.',
                    'Assist doctors with medical procedures and examinations.',
                    'Educate patients and their families on health maintenance and disease prevention.',
                    'Maintain accurate and up-to-date patient records.',
                    'Collaborate with other healthcare professionals to develop and implement care plans.',
                    'Ensure a safe and clean environment for patients.',
                    'Stay informed about the latest nursing practices and advancements in healthcare.',
                ],
                'qualifications' => [
                    'Nursing degree from an accredited institution.',
                    'Valid nursing license to practice in the Philippines.',
                    'Proven experience as a Registered Nurse or in a similar role.',
                    'Strong knowledge of nursing procedures, treatments, and protocols.',
                    'Excellent communication and interpersonal skills.',
                    'Ability to work effectively in a team-oriented environment.',
                    'Compassionate and patient-focused approach to care.',
                ],
            ],
            (object) [
                'id' => 11,
                'img' => 'assets/careers-img1.png',
                'title' => 'Registered Nurse (RN)',
                'location' => 'Makati, Metro Manila',
                'type' => 'Part-time',
                'date' => '2024-10-01',
                'vacancy' => 4,
                'description' => 'We are looking for a skilled and compassionate Registered Nurse to join our healthcare team. The ideal candidate will be responsible for providing high-quality nursing care to patients, assisting with medical procedures, and promoting overall health and wellness. The Registered Nurse will work closely with doctors and other healthcare professionals to ensure comprehensive patient care.',
                'responsibilities' => [
                    'Provide direct nursing care to patients, including administering medications and treatments.',
                    'Monitor patients\' vital signs and overall health status.',
                    'Assist doctors with medical procedures and examinations.',
                    'Educate patients and their families on health maintenance and disease prevention.',
                    'Maintain accurate and up-to-date patient records.',
                    'Collaborate with other healthcare professionals to develop and implement care plans.',
                    'Ensure a safe and clean environment for patients.',
                    'Stay informed about the latest nursing practices and advancements in healthcare.',
                ],
                'qualifications' => [
                    'Nursing degree from an accredited institution.',
                    'Valid nursing license to practice in the Philippines.',
                    'Proven experience as a Registered Nurse or in a similar role.',
                    'Strong knowledge of nursing procedures, treatments, and protocols.',
                    'Excellent communication and interpersonal skills.',
                    'Ability to work effectively in a team-oriented environment.',
                    'Compassionate and patient-focused approach to care.',
                ],
            ],
            (object) [
                'id' => 12,
                'img' => 'assets/careers-img1.png',
                'title' => 'Registered Nurse (RN)',
                'location' => 'Makati, Metro Manila',
                'type' => 'Part-time',
                'date' => '2024-10-01',
                'vacancy' => 4,
                'description' => 'We are looking for a skilled and compassionate Registered Nurse to join our healthcare team. The ideal candidate will be responsible for providing high-quality nursing care to patients, assisting with medical procedures, and promoting overall health and wellness. The Registered Nurse will work closely with doctors and other healthcare professionals to ensure comprehensive patient care.',
                'responsibilities' => [
                    'Provide direct nursing care to patients, including administering medications and treatments.',
                    'Monitor patients\' vital signs and overall health status.',
                    'Assist doctors with medical procedures and examinations.',
                    'Educate patients and their families on health maintenance and disease prevention.',
                    'Maintain accurate and up-to-date patient records.',
                    'Collaborate with other healthcare professionals to develop and implement care plans.',
                    'Ensure a safe and clean environment for patients.',
                    'Stay informed about the latest nursing practices and advancements in healthcare.',
                ],
                'qualifications' => [
                    'Nursing degree from an accredited institution.',
                    'Valid nursing license to practice in the Philippines.',
                    'Proven experience as a Registered Nurse or in a similar role.',
                    'Strong knowledge of nursing procedures, treatments, and protocols.',
                    'Excellent communication and interpersonal skills.',
                    'Ability to work effectively in a team-oriented environment.',
                    'Compassionate and patient-focused approach to care.',
                ],
            ],
        ];

        foreach ($careers as $career) {
            $postedDate = Carbon::parse($career->date);
            $career->monthsAgo = $postedDate->diffInMonths(Carbon::now());
        }

        $careers_count = count($careers);

        return view('pages.careers', compact('careers', 'careers_count'));
    }

    public function show_career($id)
    {
        $careers = [
            (object) [
                'id' => 1,
                'img' => 'assets/careers-img2.png',
                'title' => 'Medical Technologist',
                'location' => 'Makati, Metro Manila',
                'type' => 'Full-time',
                'experience' => '1-2 years',
                'date' => '2023-10-01',
                'vacancy' => 3,
                'overview' => 'Join Prime Doctors Medical Center as a Medical Technologist, where you will perform critical laboratory tests to aid in patient diagnosis and treatment. This role requires precision and expertise in handling advanced diagnostic equipment.',
                'date_updated' => '2023-09-15',
                'description' => 'We are seeking a skilled Medical Technologist to conduct laboratory tests, analyze results, and collaborate with healthcare professionals to ensure accurate diagnoses. The role involves maintaining lab equipment and adhering to safety protocols.',
                'responsibilities' => [
                    'Perform clinical laboratory tests, including blood, urine, and tissue analyses.',
                    'Analyze and interpret test results with high accuracy.',
                    'Maintain and calibrate laboratory equipment to ensure optimal performance.',
                    'Ensure compliance with safety and quality control standards.',
                    'Collaborate with physicians to provide timely diagnostic insights.',
                    'Document and report test results accurately.',
                    'Stay updated on advancements in laboratory technology.',
                ],
                'qualifications' => [
                    'Bachelor’s degree in Medical Technology or related field.',
                    'Valid license as a Medical Technologist in the Philippines.',
                    '1-2 years of experience in a clinical laboratory setting.',
                    'Strong analytical and problem-solving skills.',
                    'Excellent attention to detail and organizational skills.',
                    'Ability to work in a fast-paced environment.',
                ],
            ],
            (object) [
                'id' => 2,
                'img' => 'assets/careers-img1.png',
                'title' => 'Registered Nurse (Emergency Department)',
                'location' => 'Quezon City, Metro Manila',
                'type' => 'Full-time',
                'experience' => '2-3 years',
                'date' => '2024-11-01',
                'vacancy' => 2,
                'overview' => 'Prime Doctors Medical Center is looking for a dedicated Registered Nurse to join our Emergency Department, providing urgent care to patients in critical conditions with compassion and efficiency.',
                'date_updated' => '2024-10-10',
                'description' => 'We seek an experienced Registered Nurse for our Emergency Department to deliver rapid, high-quality care to patients with acute medical conditions. The role requires quick decision-making and teamwork in high-pressure situations.',
                'responsibilities' => [
                    'Triage and assess patients upon arrival in the emergency department.',
                    'Administer emergency treatments and medications as prescribed.',
                    'Monitor and stabilize patients with critical conditions.',
                    'Assist in emergency medical procedures and surgeries.',
                    'Educate patients and families on post-emergency care.',
                    'Maintain accurate patient records in a fast-paced environment.',
                    'Collaborate with emergency physicians and specialists.',
                ],
                'qualifications' => [
                    'Bachelor of Science in Nursing from an accredited institution.',
                    'Valid nursing license in the Philippines.',
                    '2-3 years of experience in emergency or critical care nursing.',
                    'Strong critical thinking and decision-making skills.',
                    'Ability to remain calm under pressure.',
                    'Excellent communication and teamwork abilities.',
                ],
            ],
            (object) [
                'id' => 3,
                'img' => 'assets/careers-img3.png',
                'title' => 'Physical Therapist',
                'location' => 'Pasig City, Metro Manila',
                'type' => 'Part-time',
                'experience' => '1-3 years',
                'date' => '2024-12-01',
                'vacancy' => 1,
                'overview' => 'Prime Doctors Medical Center is hiring a Physical Therapist to help patients recover mobility and manage pain through customized rehabilitation programs.',
                'date_updated' => '2024-11-01',
                'description' => 'We are looking for a compassionate Physical Therapist to design and implement rehabilitation plans for patients recovering from injuries or surgeries. The role involves assessing patient needs and collaborating with healthcare teams.',
                'responsibilities' => [
                    'Evaluate patients’ physical conditions and mobility levels.',
                    'Develop individualized treatment plans for rehabilitation.',
                    'Administer therapeutic exercises and manual therapy techniques.',
                    'Educate patients on exercises for home care.',
                    'Monitor patient progress and adjust treatment plans as needed.',
                    'Collaborate with physicians and nurses for holistic patient care.',
                    'Maintain detailed records of patient progress.',
                ],
                'qualifications' => [
                    'Bachelor’s degree in Physical Therapy from an accredited institution.',
                    'Valid license to practice as a Physical Therapist in the Philippines.',
                    '1-3 years of experience in physical therapy.',
                    'Knowledge of rehabilitation techniques and equipment.',
                    'Strong interpersonal and motivational skills.',
                    'Ability to work independently and in a team.',
                ],
            ],
            (object) [
                'id' => 4,
                'img' => 'assets/careers-img4.png',
                'title' => 'Pharmacist',
                'location' => 'Taguig City, Metro Manila',
                'type' => 'Full-time',
                'experience' => '2-4 years',
                'date' => '2024-09-15',
                'vacancy' => 2,
                'overview' => 'Join our pharmacy team at Prime Doctors Medical Center to ensure safe and effective medication management for our patients.',
                'date_updated' => '2024-08-20',
                'description' => 'We are seeking a licensed Pharmacist to dispense medications, counsel patients, and collaborate with healthcare professionals to optimize patient outcomes. The role requires expertise in pharmacology and patient care.',
                'responsibilities' => [
                    'Dispense medications accurately based on prescriptions.',
                    'Provide medication counseling to patients and caregivers.',
                    'Monitor for potential drug interactions and adverse effects.',
                    'Collaborate with physicians to optimize medication therapy.',
                    'Maintain accurate inventory of pharmaceuticals.',
                    'Ensure compliance with regulatory and safety standards.',
                    'Educate patients on proper medication use.',
                ],
                'qualifications' => [
                    'Bachelor’s degree in Pharmacy from an accredited institution.',
                    'Valid pharmacist license in the Philippines.',
                    '2-4 years of experience in a hospital or clinical pharmacy.',
                    'Strong knowledge of pharmacology and drug interactions.',
                    'Excellent communication and patient counseling skills.',
                    'Attention to detail and organizational skills.',
                ],
            ],
            (object) [
                'id' => 5,
                'img' => 'assets/careers-img5.png',
                'title' => 'Radiologic Technologist',
                'location' => 'Manila, Metro Manila',
                'type' => 'Full-time',
                'experience' => '1-2 years',
                'date' => '2024-10-15',
                'vacancy' => 3,
                'overview' => 'Prime Doctors Medical Center is seeking a Radiologic Technologist to perform diagnostic imaging procedures with precision and care.',
                'date_updated' => '2024-09-30',
                'description' => 'We are looking for a skilled Radiologic Technologist to operate imaging equipment, such as X-rays and CT scans, to assist in patient diagnosis. The role requires technical expertise and a patient-centered approach.',
                'responsibilities' => [
                    'Perform diagnostic imaging procedures, including X-rays and CT scans.',
                    'Ensure patient safety during imaging procedures.',
                    'Prepare and position patients for accurate imaging results.',
                    'Maintain and calibrate imaging equipment.',
                    'Collaborate with radiologists to review imaging results.',
                    'Document procedures and maintain patient records.',
                    'Adhere to radiation safety protocols.',
                ],
                'qualifications' => [
                    'Bachelor’s degree in Radiologic Technology or related field.',
                    'Valid license as a Radiologic Technologist in the Philippines.',
                    '1-2 years of experience in diagnostic imaging.',
                    'Knowledge of imaging equipment and safety protocols.',
                    'Strong technical and analytical skills.',
                    'Compassionate and patient-focused approach.',
                ],
            ],
            (object) [
                'id' => 6,
                'img' => 'assets/careers-img6.png',
                'title' => 'Medical Records Officer',
                'location' => 'Cebu City, Cebu',
                'type' => 'Full-time',
                'experience' => '1-2 years',
                'date' => '2024-11-10',
                'vacancy' => 1,
                'overview' => 'Join our administrative team at Prime Doctors Medical Center to manage and safeguard patient records with accuracy and confidentiality.',
                'date_updated' => '2024-10-20',
                'description' => 'We are seeking a detail-oriented Medical Records Officer to maintain and organize patient health records, ensuring compliance with data privacy regulations and supporting healthcare operations.',
                'responsibilities' => [
                    'Organize and maintain electronic and paper patient records.',
                    'Ensure accuracy and completeness of medical documentation.',
                    'Comply with data privacy and confidentiality regulations.',
                    'Assist healthcare staff in accessing patient records.',
                    'Process requests for patient information in accordance with policies.',
                    'Conduct regular audits of medical records for quality control.',
                    'Stay updated on health information management practices.',
                ],
                'qualifications' => [
                    'Bachelor’s degree in Health Information Management or related field.',
                    '1-2 years of experience in medical records management.',
                    'Knowledge of data privacy laws and regulations.',
                    'Strong organizational and data entry skills.',
                    'Proficiency in electronic health record systems.',
                    'Excellent attention to detail and multitasking abilities.',
                ],
            ],
            (object) [
                'id' => 7,
                'img' => 'assets/careers-img7.png',
                'title' => 'Pediatric Nurse',
                'location' => 'Davao City, Davao',
                'type' => 'Part-time',
                'experience' => '2-3 years',
                'date' => '2024-12-15',
                'vacancy' => 2,
                'overview' => 'Prime Doctors Medical Center is seeking a Pediatric Nurse to provide specialized care for children and support their families in a nurturing environment.',
                'date_updated' => '2024-11-20',
                'description' => 'We are looking for a compassionate Pediatric Nurse to deliver high-quality care to pediatric patients, from infants to adolescents, while collaborating with healthcare teams and families.',
                'responsibilities' => [
                    'Provide specialized nursing care to pediatric patients.',
                    'Administer medications and treatments as prescribed.',
                    'Monitor growth and development milestones in children.',
                    'Educate parents on child health and wellness.',
                    'Assist pediatricians during examinations and procedures.',
                    'Maintain accurate pediatric patient records.',
                    'Create a comforting and supportive environment for young patients.',
                ],
                'qualifications' => [
                    'Bachelor of Science in Nursing from an accredited institution.',
                    'Valid nursing license in the Philippines.',
                    '2-3 years of experience in pediatric nursing.',
                    'Knowledge of pediatric care protocols and procedures.',
                    'Excellent communication and empathy skills.',
                    'Ability to work with children and their families.',
                ],
            ],
            (object) [
                'id' => 8,
                'img' => 'assets/careers-img8.png',
                'title' => 'Surgical Nurse',
                'location' => 'Mandaluyong City, Metro Manila',
                'type' => 'Full-time',
                'experience' => '3-5 years',
                'date' => '2024-10-20',
                'vacancy' => 2,
                'overview' => 'Join our surgical team at Prime Doctors Medical Center as a Surgical Nurse to assist in life-saving procedures and ensure patient safety in the operating room.',
                'date_updated' => '2024-09-25',
                'description' => 'We are seeking an experienced Surgical Nurse to support surgeons during operations, prepare patients for surgery, and provide post-operative care to ensure optimal recovery.',
                'responsibilities' => [
                    'Prepare operating rooms and surgical instruments.',
                    'Assist surgeons during surgical procedures.',
                    'Monitor patients’ vital signs during surgery.',
                    'Provide post-operative care and monitor recovery.',
                    'Educate patients and families on surgical aftercare.',
                    'Ensure sterile and safe conditions in the operating room.',
                    'Document surgical procedures and patient outcomes.',
                ],
                'qualifications' => [
                    'Bachelor of Science in Nursing from an accredited institution.',
                    'Valid nursing license in the Philippines.',
                    '3-5 years of experience in surgical or perioperative nursing.',
                    'Knowledge of surgical procedures and sterile techniques.',
                    'Strong attention to detail and ability to work under pressure.',
                    'Excellent teamwork and communication skills.',
                ],
            ],
            (object) [
                'id' => 9,
                'img' => 'assets/careers-img9.png',
                'title' => 'Clinical Dietitian',
                'location' => 'San Juan, Metro Manila',
                'type' => 'Part-time',
                'experience' => '1-3 years',
                'date' => '2024-11-05',
                'vacancy' => 1,
                'overview' => 'Prime Doctors Medical Center is hiring a Clinical Dietitian to develop nutrition plans that promote patient health and recovery.',
                'date_updated' => '2024-10-15',
                'description' => 'We seek a knowledgeable Clinical Dietitian to assess patients’ nutritional needs, create personalized diet plans, and educate patients on healthy eating habits to support their medical treatment.',
                'responsibilities' => [
                    'Assess patients’ nutritional and dietary needs.',
                    'Develop personalized nutrition plans for patients.',
                    'Educate patients and families on healthy eating habits.',
                    'Collaborate with physicians to align diet plans with medical treatments.',
                    'Monitor patient progress and adjust nutrition plans as needed.',
                    'Conduct nutritional counseling sessions.',
                    'Maintain accurate records of dietary interventions.',
                ],
                'qualifications' => [
                    'Bachelor’s degree in Nutrition and Dietetics or related field.',
                    'Valid license as a Registered Nutritionist-Dietitian in the Philippines.',
                    '1-3 years of experience in clinical nutrition.',
                    'Strong knowledge of medical nutrition therapy.',
                    'Excellent communication and counseling skills.',
                    'Ability to work collaboratively with healthcare teams.',
                ],
            ],
            (object) [
                'id' => 10,
                'img' => 'assets/careers-img10.png',
                'title' => 'Respiratory Therapist',
                'location' => 'Las Piñas, Metro Manila',
                'type' => 'Full-time',
                'experience' => '2-4 years',
                'date' => '2024-10-30',
                'vacancy' => 2,
                'overview' => 'Join Prime Doctors Medical Center as a Respiratory Therapist to provide critical care for patients with respiratory conditions.',
                'date_updated' => '2024-10-05',
                'description' => 'We are seeking a skilled Respiratory Therapist to assess and treat patients with breathing disorders, administer respiratory therapies, and collaborate with healthcare teams to improve patient outcomes.',
                'responsibilities' => [
                    'Assess patients with respiratory or cardiopulmonary conditions.',
                    'Administer respiratory therapies, such as oxygen or ventilator support.',
                    'Monitor and adjust treatment plans based on patient progress.',
                    'Educate patients on managing respiratory conditions.',
                    'Collaborate with physicians and nurses for comprehensive care.',
                    'Maintain and operate respiratory equipment.',
                    'Document patient assessments and treatments.',
                ],
                'qualifications' => [
                    'Bachelor’s degree in Respiratory Therapy or related field.',
                    'Valid license as a Respiratory Therapist in the Philippines.',
                    '2-4 years of experience in respiratory care.',
                    'Knowledge of respiratory therapy techniques and equipment.',
                    'Strong analytical and patient care skills.',
                    'Ability to work in critical care settings.',
                ],
            ],
            (object) [
                'id' => 11,
                'img' => 'assets/careers-img11.png',
                'title' => 'Medical Social Worker',
                'location' => 'Parañaque, Metro Manila',
                'type' => 'Part-time',
                'experience' => '1-2 years',
                'date' => '2024-12-10',
                'vacancy' => 1,
                'overview' => 'Prime Doctors Medical Center is looking for a Medical Social Worker to support patients and families with psychosocial and socioeconomic needs.',
                'date_updated' => '2024-11-15',
                'description' => 'We seek a compassionate Medical Social Worker to assist patients and families in navigating healthcare challenges, providing counseling, and connecting them with community resources.',
                'responsibilities' => [
                    'Assess patients’ psychosocial and socioeconomic needs.',
                    'Provide counseling and emotional support to patients and families.',
                    'Connect patients with community resources and support services.',
                    'Collaborate with healthcare teams to address patient needs.',
                    'Advocate for patients’ rights and access to care.',
                    'Document case management activities and outcomes.',
                    'Conduct support group sessions when needed.',
                ],
                'qualifications' => [
                    'Bachelor’s degree in Social Work or related field.',
                    'Valid license as a Registered Social Worker in the Philippines.',
                    '1-2 years of experience in medical or clinical social work.',
                    'Strong knowledge of community resources and support systems.',
                    'Excellent counseling and interpersonal skills.',
                    'Ability to handle sensitive and complex situations.',
                ],
            ],
            (object) [
                'id' => 12,
                'img' => 'assets/careers-img12.png',
                'title' => 'Occupational Therapist',
                'location' => 'Bacoor, Cavite',
                'type' => 'Full-time',
                'experience' => '2-3 years',
                'date' => '2024-11-20',
                'vacancy' => 2,
                'overview' => 'Join Prime Doctors Medical Center as an Occupational Therapist to help patients regain independence through therapeutic interventions.',
                'date_updated' => '2024-10-25',
                'description' => 'We are seeking a dedicated Occupational Therapist to assist patients in developing or recovering skills for daily living and work, collaborating with healthcare teams to promote patient independence.',
                'responsibilities' => [
                    'Assess patients’ functional abilities and limitations.',
                    'Develop individualized occupational therapy plans.',
                    'Implement therapeutic activities to improve daily living skills.',
                    'Educate patients and families on adaptive techniques and equipment.',
                    'Monitor and document patient progress.',
                    'Collaborate with healthcare professionals for holistic care.',
                    'Stay updated on occupational therapy best practices.',
                ],
                'qualifications' => [
                    'Bachelor’s degree in Occupational Therapy from an accredited institution.',
                    'Valid license as an Occupational Therapist in the Philippines.',
                    '2-3 years of experience in occupational therapy.',
                    'Knowledge of therapeutic techniques and adaptive equipment.',
                    'Strong problem-solving and patient care skills.',
                    'Excellent communication and teamwork abilities.',
                ],
            ],
        ];

        foreach ($careers as $item) {
            $postedDate = Carbon::parse($item->date);
            $item->monthsAgo = $postedDate->diffInMonths(Carbon::now());
        }

        $career = collect($careers)->where('id', $id)->first();

        return view('pages.show_career', compact('career', 'careers'));
    }

    public function find_a_doctor()
    {

        $doctors = [
            (object) [
                'id' => 1,
                'name' => 'Charles Cuizon',
                'gender' => 'Male',
                'language' => 'Bisaya',
                'specialization' => 'Consultant Pediatrician',
                'subSpecialization' => '',
            ],
            (object) [
                'id' => 2,
                'name' => 'Lorem Ipsum',
                'gender' => 'Female',
                'language' => 'Bisaya',
                'specialization' => 'Cardiologist',
                'subSpecialization' => '',
            ],
        ];

        return view('pages.find-a-doctor', compact('doctors'));
    }

    public function show_doctor($id)
    {
        $doctors = [
            (object) [
                'id' => 1,
                'name' => 'Dr. Charles Cuizon',
                'gender' => 'Male',
                'language' => 'Bisaya',
                'specialization' => 'Consultant Pediatrician',
                'subSpecialization' => '',
            ],
            (object) [
                'id' => 2,
                'name' => 'Dr. Lorem Ipsum',
                'gender' => 'Female',
                'language' => 'Bisaya',
                'specialization' => 'Cardiologist',
                'subSpecialization' => '',
            ],
            (object) [
                'id' => 3,
                'name' => 'Dr. Atlas Fox',
                'gender' => 'Female',
                'language' => 'Bisaya',
                'specialization' => 'Consultant Pediatrician',
                'subSpecialization' => '',
            ],
            (object) [
                'id' => 4,
                'name' => 'Dr. Jugger Naut',
                'gender' => 'Male',
                'language' => 'Bisaya',
                'specialization' => 'Cardiologist',
                'subSpecialization' => '',
            ],
        ];

        $doctor = collect($doctors)->where('id', $id)->first();
        $doctor_count = collect($doctors)->where('id', $id)->count();

        $related_doctors = collect($doctors)->where('specialization', $doctor->specialization)->all();
        $related_doctors_count = collect($doctors)->where('specialization', $doctor->specialization)->count();

        return view('pages.find-a-doctor-singlepage', compact('doctor', 'doctor_count', 'related_doctors_count', 'related_doctors'));
    }

    public function doctor_details($id)
    {
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
        ];

        $doctor = collect($doctors)->where('id', $id)->first();

        return view('pages.doctor-details', compact('doctor'));
    }

    public function news_and_events()
    {
        $news = [
            (object) [
                'id' => 1,
                'thumbnail_image_id' => null,
                'img' => 'assets/news-img1.png',
                'title' => 'Prime Doctors Medical Center Launches New Telemedicine Services',
                'date' => '2023-09-10',
                'excerpt' => 'Prime Doctors Medical Center is excited to announce the launch of our new telemedicine services, allowing patients to consult with our healthcare professionals from the comfort of their own homes.',
            ],
            (object) [
                'id' => 2,
                'thumbnail_image_id' => null,
                'img' => 'assets/news-img2.png',
                'title' => 'Health Tips for the Flu Season',
                'date' => '2023-10-05',
                'excerpt' => 'As the flu season approaches, it\'s important to take preventive measures to protect yourself and your loved ones. Here are some essential health tips to keep in mind.',
            ],
            (object) [
                'id' => 3,
                'thumbnail_image_id' => null,
                'img' => 'assets/news-img2.png',
                'title' => 'Health Tips for the Flu Season',
                'date' => '2023-10-05',
                'excerpt' => 'As the flu season approaches, it\'s important to take preventive measures to protect yourself and your loved ones. Here are some essential health tips to keep in mind.',
            ],
            (object) [
                'id' => 4,
                'thumbnail_image_id' => null,
                'img' => 'assets/news-img2.png',
                'title' => 'Health Tips for the Flu Season',
                'date' => '2023-10-05',
                'excerpt' => 'As the flu season approaches, it\'s important to take preventive measures to protect yourself and your loved ones. Here are some essential health tips to keep in mind.',
            ],
            (object) [
                'id' => 5,
                'thumbnail_image_id' => null,
                'img' => 'assets/news-img2.png',
                'title' => 'Health Tips for the Flu Season',
                'date' => '2023-10-05',
                'excerpt' => 'As the flu season approaches, it\'s important to take preventive measures to protect yourself and your loved ones. Here are some essential health tips to keep in mind.',
            ],
            (object) [
                'id' => 6,
                'thumbnail_image_id' => null,
                'img' => 'assets/news-img2.png',
                'title' => 'Health Tips for the Flu Season',
                'date' => '2023-10-05',
                'excerpt' => 'As the flu season approaches, it\'s important to take preventive measures to protect yourself and your loved ones. Here are some essential health tips to keep in mind.',
            ],
            (object) [
                'id' => 7,
                'thumbnail_image_id' => null,
                'img' => 'assets/news-img2.png',
                'title' => 'Health Tips for the Flu Season',
                'date' => '2023-10-05',
                'excerpt' => 'As the flu season approaches, it\'s important to take preventive measures to protect yourself and your loved ones. Here are some essential health tips to keep in mind.',
            ],
            (object) [
                'id' => 8,
                'thumbnail_image_id' => null,
                'img' => 'assets/news-img2.png',
                'title' => 'Health Tips for the Flu Season',
                'date' => '2023-10-05',
                'excerpt' => 'As the flu season approaches, it\'s important to take preventive measures to protect yourself and your loved ones. Here are some essential health tips to keep in mind.',
            ],
            (object) [
                'id' => 9,
                'thumbnail_image_id' => null,
                'img' => 'assets/news-img2.png',
                'title' => 'Health Tips for the Flu Season',
                'date' => '2023-10-05',
                'excerpt' => 'As the flu season approaches, it\'s important to take preventive measures to protect yourself and your loved ones. Here are some essential health tips to keep in mind.',
            ],
        ];


        return view('pages.news-and-events', compact('news'));
    }

    public function show_news($id)
    {
        $all_news = [
            (object) [
                'id' => 1,
                'thumbnail_image_id' => null,
                'img' => 'assets/news-img1.png',
                'title' => 'Prime Doctors Medical Center Launches New Telemedicine Services',
                'date' => '2023-09-10',
                'excerpt' => 'Prime Doctors Medical Center introduces telemedicine consultations, offering patients access to quality healthcare without leaving their homes.',
            ],
            (object) [
                'id' => 2,
                'thumbnail_image_id' => null,
                'img' => 'assets/news-img2.png',
                'title' => 'Community Blood Donation Drive Exceeds Expectations',
                'date' => '2023-09-25',
                'excerpt' => 'The recent community blood donation event successfully gathered over 150 donors, providing critical blood supply to local hospitals.',
            ],
            (object) [
                'id' => 3,
                'thumbnail_image_id' => null,
                'img' => 'assets/news-img3.png',
                'title' => 'New Diagnostic Center Opens in Cebu City',
                'date' => '2023-10-05',
                'excerpt' => 'Prime Doctors Medical Center expands its facilities with a new diagnostic center, offering advanced imaging and laboratory services.',
            ],
            (object) [
                'id' => 4,
                'thumbnail_image_id' => null,
                'img' => 'assets/news-img4.png',
                'title' => 'Wellness Seminar Promotes Healthy Living Habits',
                'date' => '2023-10-15',
                'excerpt' => 'Employees and patients joined the hospital’s wellness seminar focusing on mental health, nutrition, and exercise routines.',
            ],
            (object) [
                'id' => 5,
                'thumbnail_image_id' => null,
                'img' => 'assets/news-img5.png',
                'title' => 'Doctors Celebrate Medical Professionals Day 2023',
                'date' => '2023-10-28',
                'excerpt' => 'Prime Doctors Medical Center honors its dedicated healthcare professionals with a day of recognition and celebration.',
            ],
            (object) [
                'id' => 6,
                'thumbnail_image_id' => null,
                'img' => 'assets/news-img6.png',
                'title' => 'Hospital Implements Eco-Friendly Waste Management',
                'date' => '2023-11-03',
                'excerpt' => 'The medical center adopts a new waste segregation program to promote sustainability and reduce environmental impact.',
            ],
            (object) [
                'id' => 7,
                'thumbnail_image_id' => null,
                'img' => 'assets/news-img7.png',
                'title' => 'Free Health Check-Up for Senior Citizens Announced',
                'date' => '2023-11-18',
                'excerpt' => 'Prime Doctors Medical Center offers free annual check-ups for senior citizens as part of its community outreach initiative.',
            ],
            (object) [
                'id' => 8,
                'thumbnail_image_id' => null,
                'img' => 'assets/news-img8.png',
                'title' => 'Emergency Department Upgrades Equipment',
                'date' => '2023-11-28',
                'excerpt' => 'The hospital’s emergency department now features upgraded life-saving equipment to improve response time and patient outcomes.',
            ],
            (object) [
                'id' => 9,
                'thumbnail_image_id' => null,
                'img' => 'assets/news-img9.png',
                'title' => 'Christmas Charity Program Brings Smiles to Children',
                'date' => '2023-12-15',
                'excerpt' => 'Staff and volunteers of Prime Doctors Medical Center visited local communities to distribute gifts and host a children’s Christmas party.',
            ],
        ];



        $collection = collect($all_news);

        $news = $collection->where('id', $id)->first();


        $latest_news = $collection
            ->where('id', '!=', $id)
            ->sortByDesc('date')
            ->take(3);

        if (!$news) {
            abort(404);
        }

        return view('pages.news-and-event-singlepage', compact('news', 'latest_news'));
    }

    public function contact_us()
    {
        return view('pages.contact-us');
    }
}
