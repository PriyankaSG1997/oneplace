<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class Admin_model extends Model{
    
public function getalldata($table)
{
    $row = $this->db->table($table)
                    ->where('is_deleted','N')
                   ->get()
                   ->getResult();  
                   
    if (!empty($row)) {
        return $row;
    } else {
        return false;
    }
}
public function getallvendordata($table)
{
    $row = $this->db->table($table)
                    ->select('
                        tbl_vendor.*, 
                        countries.name AS country_name,
                        states.name AS state_name,
                        cities.name AS city_name,
                        tbl_vendortype.vendortype_name AS vendor_type_name')
                    ->join('countries', 'countries.id = tbl_vendor.country_id', 'left')
                    ->join('states', 'states.id = tbl_vendor.state_id', 'left')
                    ->join('cities', 'cities.id = tbl_vendor.city_id', 'left')
                    ->join('tbl_vendortype', 'tbl_vendortype.id = tbl_vendor.vendor_type_id', 'left')
                    ->where('tbl_vendor.is_deleted', 'N')
                    ->get()
                    ->getResult();  

    if (!empty($row)) {
        return $row;
    } else {
        return false;
    }
}

public function getsingledata($table, $id)
{
    $row = $this->db->table($table)->where('id', $id)->get()->getRow();

    if (!empty($row)) {
        return $row;
    } else {
        return false;
    }
}


public function get_state_name_location($country_id){

    $result = $this->db->table('states')->where('country_id', $country_id)->get()->getResult();

    echo json_encode($result);

}



public function get_city_name_location($state_id){

    $result = $this->db->table('cities')->where('state_id', $state_id)->get()->getResult();

    echo json_encode($result);

}


    // public function getUserModelById($id)
    // {
    //     return $this->db->table('tbl_branch')->where('id', $id)->get()->getRowArray();
    // }








}