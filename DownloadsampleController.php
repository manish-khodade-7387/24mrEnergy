<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Config\Services;
use App\Models\ClientModel;
use App\Models\ReportModel;
use App\Models\CategoryModel;
use CodeIgniter\Email\Email;
use App\Libraries\CartLibrary; 
class DownloadsampleController extends Controller
{
    public function downloadSample($reportid, $reportTitle)
    {
        $reportModel = new ReportModel();
        $report = $reportModel->find($reportid);

        $categoryModel = new CategoryModel();
        $categoryId = $categoryModel->getCategoryIdByReportId($reportid);
        $category = $categoryModel->find($categoryId);

        $data['report'] = $report;
        $data['category'] = $category['category_name'];
        $data['reportTitle'] = urldecode($reportTitle); // Decode the URL-encoded report title


        $cartLibrary = new CartLibrary();
        $cartCount = $cartLibrary->getCartItemCount();
       $data['cartCount'] = $cartCount;
       
        // Load the view and pass the data
        return view('Downloadsample', $data);
    }

    public function success()
    {
        // Get the form data
        $data = [
            'Full_Name' => $this->request->getPost('Full_Name'),
            'Business_Email' => $this->request->getPost('Business_Email'),
            'Company_Name' => $this->request->getPost('Company_Name'),
            'Job_Role' => $this->request->getPost('Job_Role'),
            'Country_Code' => $this->request->getPost('Country_Code'),
            'Contact_Number' => $this->request->getPost('Contact_Number'),
            'Security_Code' => $this->request->getPost('Security_Code'),
            'report_id' => $this->request->getPost('report_id'), // Retrieve the report ID from the form
            'report_title' => $this->request->getPost('report_title')
        ];
    
        // Insert data into the database
        $clientModel = new ClientModel();
        $clientModel->insert($data);
    
        // Send email
        $email = \Config\Services::email(); // Load email library
    
        $email->setFrom('khodade2001@gmail.com', 'Manish Khodade');
        $email->setTo('manishkhodade@gmail.com');
        $email->setBCC('manishkhodade7387@gmail.com');
        $email->setCC('manishkhodade9088@gmail.com');

       $email->setReplyTo('manishkhodade7387@gmail.com');
        $email->setSubject('Data added successfully');
    
        $message = '<html><head><style>';
        $message .= file_get_contents(base_url('assets/css/style.css')); // Link the external CSS file
        $message .= '</style></head><body>';
        $message .= '<h2> '. $data['report_title'] .'</h2>';
        $message .= '<p>Here is the data:</p>';
        $message .= '<table>';

        foreach ($data as $key => $value) {
            // Replace underscores with spaces in the key
            $key = str_replace('_', ' ', $key);
        
            if ($key == 'report title') {
                // If key is 'report title', create a link
                $baseUrl = base_url(); // Retrieve the base URL
                $message .= '<tr><td>' . $key . '</td><td><a href="' . $baseUrl . 'report/' . $data['report_id'] . '/' . urlencode($value) . '">' . $value . '</a></td></tr>';
            } else {
                $message .= '<tr><td>' . $key . '</td><td>' . $value . '</td></tr>';
            }
        }
        $message .= '</table>';
        $message .= '</body></html>';
        
        $email->setMessage($message);
        $email->setMailType('html');

        // Attempt to send email
        if ($email->send()) {
            // Message to display
            $message = 'Data added successfully and email sent!';
        } else {
            // Email sending failed
            $message = 'Data added successfully but email sending failed.';
        }
    
        $data['message'] = $message;
        return view('success', $data);
    }
}