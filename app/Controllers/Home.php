<?php

namespace App\Controllers;
use App\Models\Admin_model;
use CodeIgniter\HTTP\RedirectResponse;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
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
        
    //     echo $segment2;
        
    //    exit();

        $model = new Admin_model();
		$data['single'] = $model->getsingledata('tbl_user', $id);
        // echo "<pre>";print_r($data['single']);exit();

        return view('admin/user',$data);
    }
    public function add_user(){

        if($this->request->getVar('submit') == 'submit'){
            $data = [
              'username' => $this->request->getVar('username'),
			  'mobileno' => $this->request->getVar('mobileno'),
			  'email' => $this->request->getVar('email'),
			  'password' => $this->request->getVar('password'),
            ];

            $this->request->getVar('id'); 
            $db = \Config\Database::Connect();
            $id = $this->request->getVar('id');

            if(empty($id)){
                $add_data = $db->table('tbl_user');
		        $add_data->insert($data);
                session()->setFlashdata('success', 'Data added successfully.');

            }else{
                $update_data = $db->table('tbl_user')->where('id',$this->request->getVar('id'));
		        $update_data->update($data);
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
        $model = new Admin_model();
        $data['country'] = $model->getalldata('countries');

        $data['states'] = $model->getalldata('states');

        $data['citys'] = $model->getalldata('cities');

        $data['vendor_type'] = $model->getalldata('tbl_vendortype');


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
			  'country_id' => $this->request->getVar('country_id'),
			  'state_id' => $this->request->getVar('state_id'),
			  'city_id' => $this->request->getVar('city_id'),

              'vendor_type_id' => $this->request->getVar('vendor_type_id'),
			  'gst_no' => $this->request->getVar('gst_no'),
			  'pan_no' => $this->request->getVar('pan_no'),
            
            ];

            $this->request->getVar('id'); 
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
        return view('admin/product');
    }
    public function productlist(){
        return view('admin/productlist');
    }
    public function productcategory(){
        return view('admin/productcategory');
    }
    public function productcategorylist(){
        return view('admin/productcategorylist');
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
        return view('admin/menu');
    }
    public function menulist(){
        return view('admin/menulist');
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


    
	
}
