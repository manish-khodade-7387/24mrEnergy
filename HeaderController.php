<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Libraries\CartLibrary; // Import the CartLibrary

class HeaderController extends Controller
{
    public function Header()
    {
         // Create an instance of CartLibrary to get cart count
       $cartLibrary = new CartLibrary();
       $cartCount = $cartLibrary->getCartItemCount();
      $data['cartCount'] = $cartCount;
        
        return view('Header',$data);
    }
}