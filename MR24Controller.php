<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ContactsModel;
use App\Models\ReportModel;
use App\Models\CategoryModel; // Import the CategoryModel
use App\Libraries\CartLibrary; // Import the CartLibrary

class MR24Controller extends Controller
{
    public function index()
    {
        $contactsModel = new ContactsModel();
        $contacts = $contactsModel->getContactsByCity('Pune');
        $data['contacts'] = $contacts;

        // Pass the $contacts data to your view

        $reportModel = new ReportModel();
        $latestReports = $reportModel->getLatestReports();
        $data['latestReports'] = $latestReports;

        // Fetch all categories using CategoryModel
        $categoryModel = new CategoryModel();
        $categories = $categoryModel->findAll();
        $data['categories'] = $categories;

      // Create an instance of CartLibrary to get cart count
       $cartLibrary = new CartLibrary();
        $cartCount = $cartLibrary->getCartItemCount();
       $data['cartCount'] = $cartCount;

        return view('index', $data);
    }
}
