<?php

namespace App\Controllers;

use App\Models\ReportModel;
use App\Controllers\HeaderController;
use CodeIgniter\Controller;

class SearchController extends Controller
{
    public function search()
    {
        // Load the HeaderController to fetch cart count
        $headerController = new HeaderController();
        $cartCount = $headerController->Header();

        $searchTerm = $this->request->getVar('search_term');

        // Load the ReportModel
        $reportModel = new ReportModel();

        // Call the method to perform the search
        $searchResults = $reportModel->searchReportsByTitle($searchTerm);

        // Pass the search results and cart count to the view
        $data = [
            'searchResults' => $searchResults,
            'cartCount' => $cartCount
        ];

        return view('search_results', $data);
    }
}
