<?php

namespace App\Controllers;

use App\Libraries\CartLibrary;
use CodeIgniter\Controller;

class CartController extends Controller
{
    protected $cartLibrary;

    public function __construct()
    {
        $this->cartLibrary = new CartLibrary();
    }

    public function cart()
    {
        $cartItems = $this->cartLibrary->getCartItems();
        $data['cartItems'] = $cartItems;
        $data['cartCount'] = $this->cartLibrary->getCartItemCount(); // Fetch cart count

        return view('Cart', $data);
    }

    public function addToCart()
    {
        $data = [
            
            'report_title' => $this->request->getPost('report_title'),
            'report_id' => $this->request->getPost('report_id'),
            'purchase_option' => $this->request->getPost('purchase')
        ];

        $this->cartLibrary->addToCart($data);

        return redirect()->to(base_url('cart'));
    }

    public function removeItem()
    {
        $cartId = $this->request->getPost('cart_id');
        $this->cartLibrary->removeItem($cartId);

        return redirect()->to(base_url('cart'));
    }

    public function getCartCount()
    {
        return $this->cartLibrary->getCartItemCount();
    }

    
    public function updatePurchaseOption()
    {
        $cartId = $this->request->getPost('cart_id');
        $purchaseOption = $this->request->getPost('purchase_option');

        $data = [
            'purchase_option' => $purchaseOption
        ];

        $this->cartLibrary->updatePurchaseOption($cartId, $data);

        return redirect()->to(base_url('cart'));
    }
    
}
