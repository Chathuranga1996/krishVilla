<?php

class Shop extends CI_Controller {

	public function index()
    {
        $this->load->view('Structure/Header');
		$this->load->view('Shop');
      
        $this->load->model('ShopItemModel');
        $shopItems['shopItem'] = $this->ShopItemModel->shopModel();
        $this->load->view('DynamicSelectItems/ShopItem', $shopItems);


        $this->load->view('Structure/Footer');

    }

    

	
	

	



}
