<?php

namespace App\Controllers;
use App\Models\Admin_model;
use CodeIgniter\HTTP\RedirectResponse;

class Home extends BaseController
{
    public function index(): string
    {
        $model = new Admin_model();
		$data['product_data'] = $model->getallproductdata('tbl_product');
        $data['vendor_data'] = $model->getallvendordata('tbl_vendor');
        $data['pc_data'] = $model->getalldata('tbl_productcategory');
        $data['banner_data'] = $model->getalldata('tbl_banner');

        // echo "<pre>";print_r( $data['banner_data']);exit();

        return view('home', $data);
    }

    public function userregister(){
        return view('userregister');
    }
    public function shopregister(){
        $uri = service('uri');
        $id = $uri->getSegment(2);
        $model = new Admin_model();

        $data['country'] = $model->getalldata('countries');

        $data['states'] = $model->getalldata('states');

        $data['citys'] = $model->getalldata('cities');

        $data['vendor_type'] = $model->getalldata('tbl_vendortype');

		$data['single'] = $model->getsingledata('tbl_vendor', $id);

        return view('shopregister', $data);
    }
    public function addProduct(){

        $uri = service('uri');
        $id = $uri->getSegment(2);
        $model = new Admin_model();

		$data['single'] = $model->getsingledata('tbl_product', $id);

        $data['pc_data'] = $model->getalldata('tbl_productcategory');
         
        return view('admin/addProduct', $data);
    }


    public function billing(){
        return view('admin/billing');
    }
    public function productdetail(){
        return view('productdetail');
    }
    public function shopdetail(){
        return view('shopdetail');
    }
    public function login(){
        return view('admin/login');
    }
    public function dashboard(){
        return view('admin/dashboard');
    }
    public function user(){
        $uri = service('uri');
        $id = $uri->getSegment(2);

        $model = new Admin_model();

		$data['menu_data'] = $model->getalldata('tbl_menu');

		$data['single'] = $model->getsingledata('tbl_user', $id);


        if (!empty($data['single']->menu)) {
            // Convert the menu string to an array
            $data['single']->menu = explode(',', $data['single']->menu); 
        }
        // echo "<pre>";print_r($data['single']);exit();

        return view('admin/user',$data);
    }
    public function add_user() {
           

        if ($this->request->getVar('submit') == 'submit') {
             $menu_data = $this->request->getVar('menu'); // Assuming menu data comes as an array
      
            // Check if menu data is an array and convert it to a comma-separated string
             $menu_string = is_array($menu_data) ? implode(',', $menu_data) : '';

            $data = [
                'username' => $this->request->getVar('username'),
                'mobileno' => $this->request->getVar('mobileno'),
                'email'    => $this->request->getVar('email'),
                'password' => $this->request->getVar('password'),
                'menu'     => $menu_string, // Store menu as a comma-separated string
            ];

   

            $db = \Config\Database::connect();
            $id = $this->request->getVar('id');

            if (empty($id)) {
                $add_data = $db->table('tbl_user');
                $add_data->insert($data);
                session()->setFlashdata('success', 'Data added successfully.');
            } else {
                $update_data = $db->table('tbl_user')->where('id', $id);
                $update_data->update($data);
                session()->setFlashdata('success', 'Data updated successfully.');
            }
        }

        return redirect()->to('userlist');
    }

    public function userlist(){
        $model = new Admin_model();
		$data['user_data'] = $model->getalldata('tbl_user');

        return view('admin/userlist', $data);
    }
    public function vendor(){

        $uri = service('uri');
        $id = $uri->getSegment(2);
        $model = new Admin_model();

        $data['country'] = $model->getalldata('countries');

        $data['states'] = $model->getalldata('states');

        $data['citys'] = $model->getalldata('cities');

        $data['vendor_type'] = $model->getalldata('tbl_vendortype');

		$data['single'] = $model->getsingledata('tbl_vendor', $id);

            // echo "<pre>";print_r($data['single']);exit();

        return view('admin/vendor', $data);
    }
    public function add_vendor(){
                    // echo "<pre>";print_r($_POST);exit();


        if($this->request->getVar('submit') == 'submit'){
            $data = [
              'vendor_name' => $this->request->getVar('vendor_name'),
			  'contact_person_name' => $this->request->getVar('contact_person_name'),
			  'email' => $this->request->getVar('email'),
			  'mobileno' => $this->request->getVar('mobileno'),
              'password' => $this->request->getVar('password'),
			  'country_id' => $this->request->getVar('Country'),
			  'state_id' => $this->request->getVar('State'),
			  'city_id' => $this->request->getVar('city_id'),

              'vendor_type_id' => $this->request->getVar('vendor_type_id'),
			  'gst_no' => $this->request->getVar('gst_no'),
			  'pan_no' => $this->request->getVar('pan_no'),
            
            ];

            $image = $this->request->getFile('shopImage');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move(ROOTPATH . 'public/assets/uploads', $newName);
                $data['shopImage'] = $newName; // Store the image filename in the database
            }


            $db = \Config\Database::Connect();
            $id = $this->request->getVar('id');

            if(empty($id)){
                $add_data = $db->table('tbl_vendor');
		        $add_data->insert($data);
                session()->setFlashdata('success', 'Data added successfully.');

            }else{
                $update_data = $db->table('tbl_vendor')->where('id',$this->request->getVar('id'));
		        $update_data->update($data);
            }
            
        }
        return redirect()->to('vendorlist'); 

    }
    public function vendorlist(){
        $model = new Admin_model();
		$data['vendor_data'] = $model->getallvendordata('tbl_vendor');

        // echo "<pre>";print_r($data['vendor_data']);exit();
        return view('admin/vendorlist',$data);
    }
    public function product(){

        $uri = service('uri');
        $id = $uri->getSegment(2);
        $model = new Admin_model();

		$data['single'] = $model->getsingledata('tbl_product', $id);

        $data['pc_data'] = $model->getalldata('tbl_productcategory');

        return view('admin/product',$data);
    }
    public function productlist(){
        $model = new Admin_model();
		$data['product_data'] = $model->getallproductdata('tbl_product');
        return view('admin/productlist', $data);
    }

    public function add_product() {
        if ($this->request->getVar('submit') == 'submit') {
            
            $data = [
                'productname' => $this->request->getVar('productname'),
                'productcategory_id' => $this->request->getVar('productcategory_id'),
                'productNumber' => $this->request->getVar('productNumber'),
                'productDetails' => $this->request->getVar('productDetails'),
                'price' => $this->request->getVar('price'),
                'totalQty' => $this->request->getVar('totalQty'),
                'product_type' => $this->request->getVar('product_type'),
                'dprice' => $this->request->getVar('dprice'),
            ];
    
            // Handle file uploads
            $image = $this->request->getFile('mainImage');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move(ROOTPATH . 'public/assets/uploads', $newName);
                $data['mainImage'] = $newName; // Store the image filename in the database
            }

            $hoverimg = $this->request->getFile('hoverimg');
            if ($hoverimg && $hoverimg->isValid() && !$hoverimg->hasMoved()) {
                $newNamehoverimg = $hoverimg->getRandomName();
                $hoverimg->move(ROOTPATH . 'public/assets/uploads', $newNamehoverimg);
                $data['hoverimg'] = $newNamehoverimg; // Store the image filename in the database
            }
    
    
            // Handle variant images
            $variantImages = $this->request->getFileMultiple('variantImages');

                if ($variantImages && is_array($variantImages)) {
                    $variantImageNames = [];
                    foreach ($variantImages as $variantImage) {
                        if ($variantImage->isValid() && !$variantImage->hasMoved()) {
                            $newName = $variantImage->getRandomName();
                            $variantImage->move(ROOTPATH . 'public/assets/uploads', $newName);
                            $variantImageNames[] = $newName;
                        }
                    }
                }
    
            // Save the variant images, if any
            if (!empty($variantImageNames)) {
                $data['variantImages'] = implode(',', $variantImageNames); // Store variant images filenames in the database
            }
    
            // Database connection
            $db = \Config\Database::Connect();
            $id = $this->request->getVar('id');
    
            if (empty($id)) {
                // Insert new product
                $add_data = $db->table('tbl_product');
                $add_data->insert($data);
                session()->setFlashdata('success', 'Data added successfully.');
            } else {
                // Update existing product
                $update_data = $db->table('tbl_product')->where('id', $this->request->getVar('id'));
                $update_data->update($data);
                session()->setFlashdata('success', 'Data updated successfully.');
            }
        }
    
        return redirect()->to('productlist'); // Redirect to the product list page
    }
    
    
    public function productcategory(){
        $uri = service('uri');
        $id = $uri->getSegment(2);
        $model = new Admin_model();

		$data['single'] = $model->getsingledata('tbl_productcategory', $id);

        return view('admin/productcategory', $data);
    }
    public function productcategorylist(){
        $model = new Admin_model();
		$data['pc_data'] = $model->getalldata('tbl_productcategory');

        return view('admin/productcategorylist',$data);
    }

    public function add_productcategory(){


        if($this->request->getVar('submit') == 'submit'){
        $data = [
        'pcname' => $this->request->getVar('pcname'),
        
        ];

        $db = \Config\Database::Connect();
        $id = $this->request->getVar('id');

        if(empty($id)){
            $add_data = $db->table('tbl_productcategory');
            $add_data->insert($data);
            session()->setFlashdata('success', 'Data added successfully.');

        }else{
            $update_data = $db->table('tbl_productcategory')->where('id',$this->request->getVar('id'));
            $update_data->update($data);
        }

        }
        return redirect()->to('productcategorylist'); 

    }
    public function country(){
        return view('admin/country');
    }
    public function countrylist(){
        return view('admin/countrylist');
    }
    public function state(){
        return view('admin/state');
    }
    public function statelist(){
        return view('admin/statelist');
    }
    public function city(){
        return view('admin/city');
    }
    public function citylist(){
        return view('admin/citylist');
    }
    public function menu(){
        $uri = service('uri');
        $id = $uri->getSegment(2);
        $model = new Admin_model();

		$data['single'] = $model->getsingledata('tbl_menu', $id);
        return view('admin/menu',$data);
    }
    public function menulist(){        
        $model = new Admin_model();
		$data['menu_data'] = $model->getalldata('tbl_menu');

        // echo "<pre>";print_r($data['menu_data']);exit();
        return view('admin/menulist', $data);
    }
    public function add_menu(){


        if($this->request->getVar('submit') == 'submit'){
        $data = [
        'menuname' => $this->request->getVar('menuname'),
        'urlname' => $this->request->getVar('urlname'),
        
        ];

       
        $db = \Config\Database::Connect();
        $id = $this->request->getVar('id');

        if(empty($id)){
            $add_data = $db->table('tbl_menu');
            $add_data->insert($data);
            session()->setFlashdata('success', 'Data added successfully.');

        }else{
            $update_data = $db->table('tbl_menu')->where('id',$this->request->getVar('id'));
            $update_data->update($data);
        }

        }
        return redirect()->to('menulist'); 

    }
    public function reports(){
        return view('admin/reports');
    }

    public function delete()
	{

        $uri = service('uri');
        $id = $uri->getSegment(2);
        $table = $uri->getSegment(3);

		// echo $id ;
		// echo $table ;exit();
	
	
		$data = ['is_deleted' => 'Y'];
        $db = \Config\Database::Connect();
	
	
		$update_data = $db->table($table)->where('id', $id);
		$update_data->update($data);


		session()->setFlashdata('success', 'Data deleted successfully.');
        return redirect()->back();
	
	
	
		// Redirect or return a response as needed
	}

    public function get_state_name_location(){

        $model = new Admin_Model();

        $country_id = $this->request->getVar('country_id');

		$model->get_state_name_location($country_id);

	}



    public function get_city_name_location(){

        $model = new Admin_Model();

        $state_id = $this->request->getVar('state_id');

		$model->get_city_name_location($state_id);

	}



    public function banner(){

        $uri = service('uri');
        $id = $uri->getSegment(2);
        $model = new Admin_model();
    
        $data['single'] = $model->getsingledata('tbl_banner', $id);
    
    
        return view('admin/banner',$data);
    }
    public function bannerlist(){
        $model = new Admin_model();
        $data['banner_data'] = $model->getalldata('tbl_banner');
        return view('admin/bannerlist', $data);
    }
    
    public function add_banner() {
        // echo $this->request->getFile('bannerimg');

        // echo "<pre>";print_r($_POST);exit();
        if ($this->request->getVar('submit') == 'submit') {
            
            $data = [
                'title1' => $this->request->getVar('title1'),
                'title2' => $this->request->getVar('title2'),
                'description' => $this->request->getVar('description'),
             
            ];
    
            // Handle file uploads
            $image = $this->request->getFile('bannerimg');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move(ROOTPATH . 'public/assets/uploads', $newName);
                $data['bannerimg'] = $newName; // Store the image filename in the database
            }
    
        // echo "<pre>";print_r($data);exit();

            $db = \Config\Database::Connect();
            $id = $this->request->getVar('id');
    
            if (empty($id)) {
                // Insert new banner
                $add_data = $db->table('tbl_banner');
                $add_data->insert($data);
                session()->setFlashdata('success', 'Data added successfully.');
            } else {
                // Update existing banner
                $update_data = $db->table('tbl_banner')->where('id', $this->request->getVar('id'));
                $update_data->update($data);
                session()->setFlashdata('success', 'Data updated successfully.');
            }
        }
    
        return redirect()->to('bannerlist'); // Redirect to the banner list page
    }
    
        public function productsubcategory(){
        $uri = service('uri');
        $id = $uri->getSegment(2);
        $model = new Admin_model();
        $data['pc_data'] = $model->getalldata('tbl_productcategory');


		$data['single'] = $model->getsingledata('tbl_productsubcategory', $id);

        return view('admin/productsubcategory', $data);
    }
    public function productsubcategorylist(){
        $model = new Admin_model();
		$data['pc_data'] = $model->getallproductsubcategorydata('tbl_productsubcategory');
        

        return view('admin/productsubcategorylist',$data);
    }

    public function add_productsubcategory(){


        if($this->request->getVar('submit') == 'submit'){
        $data = [
            'productcategory_id' => $this->request->getVar('productcategory_id'),
            'pcsname' => $this->request->getVar('pcsname'),
        ];

        $db = \Config\Database::Connect();
        $id = $this->request->getVar('id');

        if(empty($id)){
            $add_data = $db->table('tbl_productsubcategory');
            $add_data->insert($data);
            session()->setFlashdata('success', 'Data added successfully.');

        }else{
            $update_data = $db->table('tbl_productsubcategory')->where('id',$this->request->getVar('id'));
            $update_data->update($data);
        }

        }
        return redirect()->to('productsubcategorylist'); 

    }
    public function add_shop(){
        // echo "<pre>";print_r($_POST);exit();


if($this->request->getVar('submit') == 'submit'){
$data = [
  'vendor_name' => $this->request->getVar('vendor_name'),
  'contact_person_name' => $this->request->getVar('contact_person_name'),
  'email' => $this->request->getVar('email'),
  'mobileno' => $this->request->getVar('mobileno'),
  'password' => $this->request->getVar('password'),
  'country_id' => $this->request->getVar('Country'),
  'state_id' => $this->request->getVar('State'),
  'city_id' => $this->request->getVar('city_id'),

  'vendor_type_id' => $this->request->getVar('vendor_type_id'),
  'gst_no' => $this->request->getVar('gst_no'),
  'pan_no' => $this->request->getVar('pan_no'),

];

$image = $this->request->getFile('shopImage');
if ($image && $image->isValid() && !$image->hasMoved()) {
    $newName = $image->getRandomName();
    $image->move(ROOTPATH . 'public/assets/uploads', $newName);
    $data['shopImage'] = $newName; // Store the image filename in the database
}


$db = \Config\Database::Connect();
$id = $this->request->getVar('id');

if(empty($id)){
    $add_data = $db->table('tbl_vendor');
    $add_data->insert($data);
    session()->setFlashdata('success', 'Data added successfully.');

}else{
    $update_data = $db->table('tbl_vendor')->where('id',$this->request->getVar('id'));
    $update_data->update($data);
}

}
return redirect()->to('shop-register'); 

}
   

public function add_customer() {
           

    if ($this->request->getVar('submit') == 'submit') {
     

        $data = [
            'name' => $this->request->getVar('name'),
            'whatsappnumber' => $this->request->getVar('whatsappnumber'),
            'password'    => $this->request->getVar('password'),
        ];
        $db = \Config\Database::connect();
        $id = $this->request->getVar('id');

        if (empty($id)) {
            $add_data = $db->table('tbl_customer');
            $add_data->insert($data);
            session()->setFlashdata('success', 'Data added successfully.');
        } else {
            $update_data = $db->table('tbl_customer')->where('id', $id);
            $update_data->update($data);
            session()->setFlashdata('success', 'Data updated successfully.');
        }
    }

    return redirect()->to('user-register');
}
	
}
