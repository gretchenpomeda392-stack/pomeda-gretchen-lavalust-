<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        session_start();

        $_SESSION['student_access'] = true;

        $this->call->view('student_home');
    }

    public function profile()
    {
        $student = [
            'student_id' => 'MCC2024-00219',
            'name' => 'Gretchen N. Pomeda',
            'course' => 'Bachelor of Science in Information Technology',
            'year' => '3rd Year',
            'section' => '3-F5',
            'email' => 'gretchenpomeda392@gmail.com',
            'address' => 'Highlander, Canubing 1, Calapan City',
            'contact_number' => '0931-874-6241',
            'skills' => 'CSS',
            'hobbies' => 'Watching k-dramas, listening to music, Eating, Watching TikTok and Instagram reels',
            'profile_description' => 'I am committed to gaining new knowledge and experiences that will help me become a better person.',
            'social_media' => [
                'facebook' => 'https://www.facebook.com/njt.eian'
            ]
        ];

         $this->call->view('student_profile', $student);
    }
}