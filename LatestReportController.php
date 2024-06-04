<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ContactsModel;
use App\Models\ReportModel;
use App\Libraries\CartLibrary; 

class LatestReportController extends Controller
{
    public function latest_report()
    {

        
        $contactsModel = new ContactsModel();
         $contacts = $contactsModel->getContactsByCity('Pune');

         $data['contacts'] = $contacts;

        // Pass the $contacts data to your view

        $reportModel = new ReportModel();
        $latestReports = $reportModel->getLatestReports();

        $data['latestReports'] = $latestReports;



         // Create an instance of CartLibrary to get cart count
       $cartLibrary = new CartLibrary();
       $cartCount = $cartLibrary->getCartItemCount();
      $data['cartCount'] = $cartCount;
      

        return view('latest_report', $data);
    }


    // AJAX method to load next set of reports
    public function loadReports($page = 1)
    {
        $perPage = $this->request->getVar('perPage') ?? 1; // Default items per page
        $offset = ($page - 1) * $perPage;
    
        $reportModel = new ReportModel();
        $latestReports = $reportModel
            ->orderBy('publishdate', 'DESC')
            ->findAll($perPage, $offset);

        // Get total number of reports for pagination
        $totalReports = $reportModel->countAllResults();
    
        $data = [
            'reports' => $latestReports,
            'totalReports' => $totalReports,
            'perPage' => $perPage
        ];
    
        echo json_encode($data);
    }
}
