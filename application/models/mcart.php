<?php
/**
 * @author Hieu Pham - HCM
 * @copyright 2013
 */
class Mcart extends CI_Model{
	private $_table="mbooks";
	private $_id = "books_id";
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function listAllProduct(){
		return $this->db->get('sanpham')
						->result_array();
	}
	public function getProductById($id){
		$this->db->where('stt',$id);
		return $this->db->get('sanpham')
						->row_array();
	}	
	
	public function dathang($data){
		if($this->db->insert_batch('chitiethoadon',$data))
		{
			
            return TRUE;
		}
        else
            return FALSE;
	}	
	
	public function dathanghoadon($data){
		$this->db->insert('hoadon',$data);
		return  $this->db->insert_id();
		
	}	
	
	public function updatenguoimua($data){
		if($this->db->update_batch('sanpham',$data, 'stt'))
		{
			
            return TRUE;
		}
        else
            return FALSE;
	}	
    
	public function add_cart($data){
        $this->db->insert('cart', $data);
        return $this->db->insert_id();
    }
    
    public function add_cart_detail($data){
        return $this->db->insert_batch('hoadon', $data);
    }
}


?>