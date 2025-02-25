<?php

namespace App\Controllers;
use App\Models\Admin_model;
use CodeIgniter\HTTP\RedirectResponse;

class Home extends BaseController

{
    protected $db;

    public function __construct()
    {
        // Initialize the database connection
        $this->db = \Config\Database::connect();
    }
    public function index(): string
    {
    
        $model = new Admin_model();
        // Check if 'id' or 'name' is provided in the URL, if so, filter product data accordingly

            $data['product_data'] = $model->getallproductdata('tbl_product');

    
        // Fetch additional data
        $data['vendor_data'] = $model->getallvendordata('tbl_vendor');
        $data['pc_data'] = $model->getalldata('tbl_productcategory');
        $data['banner_data'] = $model->getalldata('tbl_banner');

        // echo "<pre>";print_r($data['product_data']);exit();
    
        // Return the view with all data
        return view('home', $data);
    }
    public function inventory(){
        return view('admin/updatestock');

    }
    

    public function home()
    {
        // Retrieve the 'id' and 'name' from the URL query parameters
        $id = $this->request->getGet('id');
        $name = $this->request->getGet('name');
    
        // Initialize your model
        $uri = service('uri');
        $cid = $uri->getSegment(2);
        $model = new Admin_model();
        // Check if 'id' or 'name' is provided in the URL, if so, filter product data accordingly
        if (!empty($id) || !empty($name)) {
            // Fetch filtered product data by id or name
            $data['product_data'] = $model->getallproductdataidornamewise('tbl_product', $id, $name);
        } else if(!empty($cid)){
           
            $data['product_data'] = $model->getallproductdataid('tbl_product', $cid);

        }else{
            $data['product_data'] = $model->getallproductdata('tbl_product');

        }
    
        // Fetch additional data
        $data['vendor_data'] = $model->getallvendordata('tbl_vendor');
        $data['pc_data'] = $model->getalldata('tbl_productcategory');
        $data['banner_data'] = $model->getalldata('tbl_banner');

        // echo "<pre>";print_r($data['product_data']);exit();
    
        // Return the view with all data
        return view('home', $data);
    }

    public function category()
    {
        // Retrieve the 'id' and 'name' from the URL query parameters
        $id = $this->request->getGet('id');
        $name = $this->request->getGet('name');
    
        // Initialize your model
        $uri = service('uri');
        $cid = $uri->getSegment(2);
        $model = new Admin_model();
        
        // Check if 'id' or 'name' is provided in the URL, if so, filter product data accordingly
        if (!empty($id) || !empty($name)) {
            // Fetch filtered product data by id or name
            $data['product_data'] = $model->getallproductdataidornamewise('tbl_product', $id, $name);
            if(empty($data['product_data']))
            {
                $data['product_data'] = $model->getallproductdata('tbl_product');

            }
        } else if(!empty($cid)){
           
            $data['product_data'] = $model->getallproductdataid('tbl_product', $cid);
            if(empty($data['product_data']))
            {
                $data['product_data'] = $model->getallproductdata('tbl_product');

            }

        }else{
            $data['product_data'] = $model->getallproductdata('tbl_product');

        }


        // echo "<pre>";print_r($data['product_data']);exit();
    
        // Return the view with all data
        return view('category', $data);
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

    
    public function offer(){
        return view('offer');
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

    // public function check_login()
    // {
    //     $request = service('request');
    //     $session = session();
    //     $login = $request->getPost('login');
    //     $password = $request->getPost('password');
    
    //     $db = \Config\Database::connect();
    
    //     // Fetch user data from tbl_login
    //     $user = $db->table('tbl_login')
    //                ->where('mobileno', $login)
    //                ->orWhere('email', $login)
    //                ->get()
    //                ->getRowArray(); // Fetch as array
    
    //     if ($user) {
    //         // Compare passwords directly (since you are not using hashing)
    //         if ($password === $user['password']) {
    //             // Check if user exists in the vendor table
    //             $vendor = $db->table('tbl_vendor')
    //                          ->where('vendor_id', $user['users_id'])
    //                          ->get()
    //                          ->getRowArray();
    
    //             // Set session data
    //             $sessionData = [
    //                 'users_id'   => $user['users_id'],
    //                 'username'   => $user['username'],
    //                 'role_type'   => $user['role_type'],

    //                 'isLoggedIn' => true,
    //                 'isVendor'   => !empty($vendor), // True if user is a vendor
    //                 'vendor_id'  => !empty($vendor) ? $vendor['id'] : null // Store vendor ID if user is a vendor
    //             ];
    //             $session->set($sessionData);
    
    //             // Redirect based on user type
    //             if (!empty($vendor)) {
    //                 return redirect()->to(base_url('billing'))->with('success', 'Vendor Login Successful');
    //             } else {
    //                 return redirect()->to(base_url('billing'))->with('success', 'Login Successful');
    //             }
    //         } else {
    //             return redirect()->to(base_url('login'))->with('error', 'Invalid Password');
    //         }
    //     } else {
    //         return redirect()->to(base_url('login'))->with('error', 'User not found');
    //     }
    // }
    


    public function check_login()
{
    $request = service('request');
    $session = session();
    $login = $request->getPost('login');
    $password = $request->getPost('password');

    $db = \Config\Database::connect();

    // Fetch user data from tbl_login
    $user = $db->table('tbl_login')
               ->where('mobileno', $login)
               ->orWhere('email', $login)
               ->get()
               ->getRowArray(); // Fetch as array

    if ($user) {
        // Compare passwords directly (Assuming passwords are stored in plain text)
        if ($password === $user['password']) {
            $userData = null;
            $vendor_id = null;

            if ($user['role_type'] == 'vendor') {
                // Fetch vendor data if role_type is vendor
                $userData = $db->table('tbl_vendor')
                               ->where('vendor_id', $user['users_id'])
                               ->get()
                               ->getRowArray();
                $vendor_id = $userData['id'] ?? null;
            } elseif ($user['role_type'] == 'user') {
                // Fetch user data if role_type is user
                $userData = $db->table('tbl_user')
                               ->where('user_id', $user['users_id'])
                               ->get()
                               ->getRowArray();
                $vendor_id = $userData['id'] ?? null;

            }

            // Set session data
            $sessionData = [
                'users_id'   => $user['users_id'],
                'username'   => $user['username'],
                'role_type'  => $user['role_type'],
                'isLoggedIn' => true,
                'isVendor'   => ($user['role_type'] == 'vendor'),
                'vendor_id'  => $vendor_id // Set vendor ID if applicable
            ];
            $session->set($sessionData);

            // Redirect based on user type
            if ($user['role_type'] == 'vendor') {
                return redirect()->to(base_url('billing'))->with('success', 'Vendor Login Successful');
            } else {
                return redirect()->to(base_url('dashboard'))->with('success', 'User Login Successful');
            }
        } else {
            return redirect()->to(base_url('login'))->with('error', 'Invalid Password');
        }
    } else {
        return redirect()->to(base_url('login'))->with('error', 'User not found');
    }
}

    

    public function logout()
    {
        
        session()->destroy();
        return redirect()->to(base_url('login'))->with('success', 'Logged out successfully.');
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
    // public function add_user() {
           

    //     if ($this->request->getVar('submit') == 'submit') {
    //          $menu_data = $this->request->getVar('menu'); // Assuming menu data comes as an array
      
    //         // Check if menu data is an array and convert it to a comma-separated string
    //          $menu_string = is_array($menu_data) ? implode(',', $menu_data) : '';

    //         $data = [
    //             'username' => $this->request->getVar('username'),
    //             'mobileno' => $this->request->getVar('mobileno'),
    //             'email'    => $this->request->getVar('email'),
    //             'password' => $this->request->getVar('password'),
    //             'menu'     => $menu_string, // Store menu as a comma-separated string
    //         ];

   

    //         $db = \Config\Database::connect();
    //         $id = $this->request->getVar('id');

    //         if (empty($id)) {
    //             $add_data = $db->table('tbl_user');
    //             $add_data->insert($data);
    //             session()->setFlashdata('success', 'Data added successfully.');
    //         } else {
    //             $update_data = $db->table('tbl_user')->where('id', $id);
    //             $update_data->update($data);
    //             session()->setFlashdata('success', 'Data updated successfully.');
    //         }
    //     }

    //     return redirect()->to('userlist');
    // }


    public function add_user() {
        $db = \Config\Database::connect();
    
        if ($this->request->getVar('submit') == 'submit') {
            $menu_data = $this->request->getVar('menu'); // Assuming menu data comes as an array
            $menu_string = is_array($menu_data) ? implode(',', $menu_data) : '';
    
            $data = [
                'username' => $this->request->getVar('username'),
                'mobileno' => $this->request->getVar('mobileno'),
                'email'    => $this->request->getVar('email'),
                'password' => $this->request->getVar('password'),
                'menu'     => $menu_string, // Store menu as a comma-separated string
            ];
    
            $id = $this->request->getVar('id');
    
            if (empty($id)) {
                // Insert new user
                $db->table('tbl_user')->insert($data);
                $lastInsertId = $db->insertID(); // Get the newly inserted user ID
    
                // Fetch newly inserted user data
                $userData = $db->table('tbl_user')->where('id', $lastInsertId)->get()->getRow();
    
                if (!empty($userData)) {
                    $loginData = [
                        'username'  => $userData->username ?? null,
                        'mobileno'  => $userData->mobileno ?? null,
                        'email'     => $userData->email ?? null,
                        'password'  => $userData->password ?? null,
                        'role_type' => 'user', // Assign user role
                        'users_id'  => $userData->user_id ?? null,
                    ];
    
                    // Insert into tbl_login
                    $db->table('tbl_login')->insert($loginData);
                }
    
                session()->setFlashdata('success', 'User added successfully.');
            } else {
                // Update existing user
                $db->table('tbl_user')->where('id', $id)->update($data);
    
                // Fetch updated user data
                $userData = $db->table('tbl_user')->where('id', $id)->get()->getRow();
    
                if (!empty($userData)) {
                    $loginData = [
                        'username'  => $userData->username ?? null,
                        'mobileno'  => $userData->mobileno ?? null,
                        'email'     => $userData->email ?? null,
                        'password'  => $userData->password ?? null,
                        'role_type' => 'user',
                    ];
    
                    // Update tbl_login using correct user ID reference
                    $db->table('tbl_login')->where('users_id', $userData->user_id )->update($loginData);
                }
    
                session()->setFlashdata('success', 'User updated successfully.');
            }
        }
    
        return redirect()->to('stafflist');
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
    // public function add_vendor(){


    //     if($this->request->getVar('submit') == 'submit'){
    //         $data = [
    //           'vendor_name' => $this->request->getVar('vendor_name'),
	// 		  'contact_person_name' => $this->request->getVar('contact_person_name'),
	// 		  'email' => $this->request->getVar('email'),
	// 		  'mobileno' => $this->request->getVar('mobileno'),
    //           'password' => $this->request->getVar('password'),
	// 		  'country_id' => $this->request->getVar('Country'),
	// 		  'state_id' => $this->request->getVar('State'),
	// 		  'city_id' => $this->request->getVar('city_id'),
    //           'vendor_type_id' => $this->request->getVar('vendor_type_id'),
	// 		  'gst_no' => $this->request->getVar('gst_no'),
	// 		  'pan_no' => $this->request->getVar('pan_no'),
            
    //         ];

    //         $image = $this->request->getFile('shopImage');
    //         if ($image && $image->isValid() && !$image->hasMoved()) {
    //             $newName = $image->getRandomName();
    //             $image->move(ROOTPATH . 'public/assets/uploads', $newName);
    //             $data['shopImage'] = $newName; // Store the image filename in the database
    //         }


    //         $db = \Config\Database::Connect();
    //         $id = $this->request->getVar('id');

    //         if(empty($id)){
    //             $add_data = $db->table('tbl_vendor');
	// 	        $add_data->insert($data);
    //             session()->setFlashdata('success', 'Data added successfully.');

    //         }else{
    //             $update_data = $db->table('tbl_vendor')->where('id',$this->request->getVar('id'));
	// 	        $update_data->update($data);
    //         }
            
    //     }
    //     return redirect()->to('vendorlist'); 

    // }
    public function add_vendor() {
        $model = new Admin_model();
        // echo "<pre>";print_r($_POST);exit();
    
        if ($this->request->getVar('submit') == 'submit') {
            // Prepare vendor data
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
    
            // Handle the shop image upload
            $image = $this->request->getFile('shopImage');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move(ROOTPATH . 'public/assets/uploads', $newName);
                $data['shopImage'] = $newName;
            }
    
            $db = \Config\Database::connect();
            $id = $this->request->getVar('id');
    
            if (empty($id)) {
                // Insert new vendor data
                $db->table('tbl_vendor')->insert($data);
                $lastInsertId = $db->insertID(); // Get newly inserted vendor ID
    
                // Fetch newly inserted vendor data
                $vendordata = $model->getsingledata('tbl_vendor', $lastInsertId);
    
                if (!empty($vendordata)) {
                    $loginData = [
                       'username'  => $vendordata->vendor_name ?? null, // Use object property syntax
                        'mobileno'  => $vendordata->mobileno ?? null,
                        'email'     => $vendordata->email ?? null,
                        'password'  => $vendordata->password ?? null,
                        'role_type' => 'vendor',
                        'users_id'  => $vendordata->vendor_id ?? null, // Use vendor_id
                    ];
    
                    // Insert into tbl_login
                    $db->table('tbl_login')->insert($loginData);
                    session()->setFlashdata('success', 'Vendor added successfully.');
                }
    
            } else {

            
                // Update existing vendor
                $db->table('tbl_vendor')->where('id', $id)->update($data);
    
                // Fetch updated vendor data
                $vendordata = $model->getsingledata('tbl_vendor', $id);
    
                if (!empty($vendordata)) {
                    $loginData = [
                        'username'  => $vendordata->vendor_name ?? null, // Use object property syntax
                        'mobileno'  => $vendordata->mobileno ?? null,
                        'email'     => $vendordata->email ?? null,
                        'password'  => $vendordata->password ?? null,
                        'role_type' => 'vendor',
                        'users_id'  => $vendordata->vendor_id ?? null, // Use vendor_id
                    ];
    
                    // Update tbl_login using correct vendor_id reference
                    $db->table('tbl_login')->where('users_id', $vendordata->vendor_id)->update($loginData);
                    echo "'success', 'Vendor updated successfully.'";
                    session()->setFlashdata('success', 'Vendor updated successfully.');
                }
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
        $lastInsertId = "";


        $model = new Admin_model();
    
        if ($this->request->getVar('submit') == 'submit') {
            // Prepare vendor data
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
    
            // Handle the shop image upload
            $image = $this->request->getFile('shopImage');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move(ROOTPATH . 'public/assets/uploads', $newName);
                $data['shopImage'] = $newName; // Store the image filename in the database
            }
    
            $db = \Config\Database::connect();
            $id = $this->request->getVar('id');
    
            if (empty($id)) {
                // Insert into tbl_vendor
                $add_data = $db->table('tbl_vendor');
                $add_data->insert($data);
                $lastInsertId = $db->insertID(); // Get the last inserted ID
                $vendordata = $model->getsingledata('tbl_vendor', $lastInsertId);
                // echo "<pre>";print_r($vendordata);
    
                // Check if vendor data exists before inserting into tbl_login
                if (!empty($vendordata)) {
                    $loginData = [
                        'username' => $vendordata->vendor_name ?? null,
                        'mobileno' => $vendordata->mobileno ?? null,
                        'email' => $vendordata->email ?? null,
                        'password' => $vendordata->password ?? null,
                        'role_type' => 'vendor',
                        'users_id' => $vendordata->vendor_id ?? null, // Use the vendor's ID
                    ];

                    // echo "<pre>";print_r($loginData);exit();
    
                    $db->table('tbl_login')->insert($loginData); // Insert into tbl_login
                    session()->setFlashdata('success', 'Data added successfully.');
                }
    
            } else {
                // Update existing vendor data
                $update_data = $db->table('tbl_vendor')->where('id', $this->request->getVar('id'));
                $update_data->update($data);
    
                $lastInsertId = $this->request->getVar('id'); // Get the last inserted ID
                $vendordata = $model->getsingledata('tbl_vendor', $lastInsertId);
    
                // Check if vendor data exists before updating tbl_login
                if (!empty($vendordata)) {
                    $loginData = [
                        'username' => $vendordata->vendor_name ?? null,
                        'mobileno' => $vendordata->mobileno ?? null,
                        'email' => $vendordata->email ?? null,
                        'password' => $vendordata->password ?? null,
                        'role_type' => 'vendor',
                        'users_id' => $vendordata->vendor_id ?? null, // Use the vendor's ID
                    ];
    
                    // Update the existing login entry
                    $loginDataupdate_data = $db->table('tbl_login')->where('users_id', $vendordata->id);
                    $loginDataupdate_data->update($loginData);
    
                    session()->setFlashdata('success', 'Data updated successfully.');
                }
            }
        }
    return redirect()->to('offer/'. $lastInsertId); 

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

public function get_productdata() {
    $model = new Admin_model();
    $pdata = $model->getallproductdata('tbl_product');

    echo json_encode($pdata); // Return the results as JSON
}

public function get_product_and_shops() {
    // Access the request service
    $request = service('request');
    
    // Retrieve the search term from GET request
    $searchTerm = $request->getGet('search'); // Using getGet() to retrieve the search term
    
    $model = new Admin_model();

    // First, search in tbl_product table
    $pdata = $model->search_in_tableproduct('tbl_product', $searchTerm);

    // If no match found in tbl_product, search in vendor table
    if (empty($pdata)) {
        $pdata = $model->search_in_tablevendor('tbl_vendor', $searchTerm);
    }

    // If still no match found, search in cities table
    if (empty($pdata)) {
        $pdata = $model->search_in_tablecities('cities', $searchTerm);
    }

    // Return the results as JSON
    echo json_encode($pdata); // Make sure your results are in array format, suitable for JSON encoding
}

public function search_product()
{
    $search = $this->request->getGet('search');
    $model = new Admin_model(); // Adjust model name

    // $products = $productModel->like('name', $search)->findAll(); // Perform search
    $products = $model->getallproductdatas('tbl_product', $search);

    return $this->response->setJSON($products);
}

public function save_bill() {
    
    // echo "<pre>";print_r($_POST);exit();
    $billItemsRaw   = $this->request->getPost('billItems');
    $billSummaryRaw = $this->request->getPost('billSummary');


    if (empty($billItemsRaw) || empty($billSummaryRaw)) {
        return $this->response->setJSON([
            'status'  => 'error',
            'message' => 'Bill items or summary data is missing.'
        ]);
    }

    // Decode JSON data
    $billItems   = json_decode($billItemsRaw, true);
    $billSummary = json_decode($billSummaryRaw, true);

    if (is_null($billSummary)) {
        return $this->response->setJSON([
            'status'  => 'error',
            'message' => 'Bill summary data is invalid or could not be decoded.'
        ]);
    }
    if (is_null($billItems)) {
        return $this->response->setJSON([
            'status'  => 'error',
            'message' => 'Bill items data is invalid or could not be decoded.'
        ]);
    }

    // Proceed to save data in the database...
    $bill_data = [
        'total_amount' => $billSummary['totalAmount'],
        'gst_amount'   => $billSummary['gstAmount'],
        'cgst_amount'  => $billSummary['cgstAmount'],
        'final_total'  => $billSummary['finalTotal'],
    ];
    $this->db->table('tbl_bills')->insert($bill_data);
    $bill_id = $this->db->insertID();

    foreach ($billItems as $item) {
        $data = [
            'bill_id'      => $bill_id,
            'product_name' => $item['productName'],
            'quantity'     => $item['quantity'],
            'unit_price'   => $item['unitPrice'],
            'total'        => $item['total']
        ];
        $this->db->table('tbl_bill_items')->insert($data);
    }

    return $this->response->setJSON(['status' => 'success']);
}


public function billinglist(){
    $model = new Admin_model();
    $data['billing_data'] = $model->getalldata('tbl_bills');
    // echo "<pre>";print_r($data['billing_data']);exit();
    return view('admin/billinglist', $data);
}

public function viewbill(){

    $uri = service('uri');
    $id = $uri->getSegment(2);
    $model = new Admin_model();

    $data['billing_data'] = $model->getsingledata('tbl_bills', $id);

    // echo "<pre>";print_r($data['billing_data']);exit();
    return view('admin/viewbill', $data);
}




	
}
