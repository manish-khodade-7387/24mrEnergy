<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ContactController extends Controller
{
    public function Contact()
    {
        // Load the contact form view
        return view('Contact_Us');
    }
}