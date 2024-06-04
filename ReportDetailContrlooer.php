<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ReportModel;
use App\Models\ReportDetailModel;
use App\Models\ContactsModel;
use App\Models\CategoryModel;
use App\Libraries\CartLibrary; 
class ReportDetailContrlooer extends Controller
{
    public function report($reportid, $reportTitle)
    {
        $reportModel = new ReportModel();
        $report = $reportModel->find($reportid);

        $reportsDetailsModel = new ReportDetailModel();
        $reportsDetails = $reportsDetailsModel->find($reportid);

        if (!$report) {
            // Handle case when report is not found
            return redirect()->to('/');
        }

        $contactsModel = new ContactsModel();
        $contacts = $contactsModel->getContactsByCity('Pune');
       
        $categoryModel = new CategoryModel();
        $categoryId = $categoryModel->getCategoryIdByReportId($reportid);
        $category = $categoryModel->find($categoryId);


        $cartLibrary = new CartLibrary();
        $cartCount = $cartLibrary->getCartItemCount();
       $data['cartCount'] = $cartCount;
     

        $data['contacts'] = $contacts;
        $data['report'] = $report;
        $data['reportsDetails'] = $reportsDetails;
        $data['category'] = $category['category_name']; 
        $data['reportTitle'] = urldecode($reportTitle); // Decode the URL-encoded report title

        return view('report_detail', $data);

    }

    
    
}
