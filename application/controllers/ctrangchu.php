<?php
class Ctrangchu extends CI_Controller{

        
	var $_register = "register"; // ten cua session register khi dang ki thanh vien
    var $_fgpassword = "fgpassword";
    public function __construct(){
        parent::__construct();
		$this->load->helper(array("url","date","my_data","cookie"));
		$this->load->library('user_agent');
        $this->load->library(array("form_validation","my_layout","session","email","my_auth","cart"));
        $this->my_layout->setLayout("vtrangchu");
     
        $this->load->database();
        $this->load->model("Mtrangchu");
		$this->load->model("muser");
		//$this->load->model("mhome");
		
    }
    public function index(){
       
		
        $userid = $this->my_auth->idkhach;
            $data['info'] = $this->muser->getInfokhach($userid);
		
		$data['danhmuccha'] = $this->muser->showdanhmuccha();
		$data['danhmucchaduoi'] = $this->muser->showdanhmucchaduoi();
		//$param              = $this->uri->segment(3);  
		$data['banner'] = $this->muser->showbanner();
		$data['nicktuvan'] = $this->muser->shownicktuvan();
		$data['danhmucnicktuvan'] = $this->muser->showdanhmucnicktuvan();
		$data['dichvukhac'] = $this->muser->showdichvukhac();
        $data['hienthi']=1;
		//$data['songuoimua']=$this->muser->getsonguoimua();
		
		$data['title']="In Ấn TD";
		$data['des']="In Ấn TD";
		
		$min = 100;
		$max = $this->muser->getsanphamnumrows();
		$data['num_rows'] = $max;
		if($max!=0){
            
            $this->load->library('pagination');
            $config['base_url'] = base_url()."trang-chu.html/";
            $config['total_rows'] = $max;
            $config['per_page'] = $min;
            $config['num_link'] = 1; 
            $config['uri_segment'] = 2;
			$config['cur_tag_open'] = '<strong style="margin-left:4px;" class="pagination-selected-page">';
			$config['cur_tag_close'] = '</strong>';
            $this->pagination->initialize($config);
            
            $data['link'] = $this->pagination->create_links();
			$data['sanpham'] = $this->Mtrangchu->listall();
			$data['sanphamnewlimit'] = $this->Mtrangchu->listallsanphamnewwithlimit(24);
			$data['sanphamhotlimit'] = $this->Mtrangchu->listallsanphamhotwithlimit(24);
			
			$data['showbanner']=1;
			$data['showpromo']=1;
			$data['alltintuc']=$this->Mtrangchu->listalltintucforhomepage();
            
            $this->my_layout->view("vsp",$data);
        
        }else{
			
            $data['report'] = "Khong co du lieu de hien thi";
            $this->my_layout->view("backend/report",$data);
        }
        
		

    }
	
	public function loi(){
			$userid = $this->my_auth->idkhach;
            $data['info'] = $this->muser->getInfokhach($userid);
		$this->Mtrangchu->listall();
		$data['menucha']=$this->Mtrangchu->menucha();
		$data['menucon']=$this->Mtrangchu->menucon();
		$data['menusubcon']=$this->Mtrangchu->menusubcon();
		//$param              = $this->uri->segment(3);  
        $data['hienthi']=1;
		
		$data['title']="In Ấn TD";
		$data['des']="In Ấn TD";
			//$data['tendanhmuc']=$this->Mtrangchu->layiddmcha($iddm);
            $data['report'] = '<div style="margin-left:30px;font-size:30px">Chưa có sản phẩm nào</div>';
            $this->my_layout->view("reportloi",$data);
	}
	
	
	public function newest(){
        
		if ($this->agent->is_mobile())
		{
			
			redirect(base_url()."ctrangchumobile", 'refresh');
		}
		else
		{
		
        $userid = $this->my_auth->idkhach;
            $data['info'] = $this->muser->getInfokhach($userid);
		$this->Mtrangchu->listallnew();
		$data['menucha']=$this->Mtrangchu->menucha();
		$data['menucon']=$this->Mtrangchu->menucon();
		$data['menusubcon']=$this->Mtrangchu->menusubcon();
		//$param              = $this->uri->segment(3);  
        $data['hienthi']=1;
		
		$data['title']="In Ấn TD";
		$data['des']="In Ấn TD";
		
		$min = 100;
		$max = $this->muser->getsanphamnewnumrows();
		$data['num_rows'] = $max;
		if($max!=0){
            
            $this->load->library('pagination');
            $config['base_url'] = base_url()."/moi-nhat.html/";
            $config['total_rows'] = $max;
            $config['per_page'] = $min;
            $config['num_link'] = 1; 
            $config['uri_segment'] = 2;
			$config['cur_tag_open'] = '<strong style="margin-left:4px;" class="pagination-selected-page">';
			$config['cur_tag_close'] = '</strong>';
            $this->pagination->initialize($config);
            
            $data['link'] = $this->pagination->create_links();
            $data['sanpham'] = $this->Mtrangchu->listallnew($min,$this->uri->segment($config['uri_segment']));
            
            $this->my_layout->view("vsp",$data);
        
        }else{
			
            $data['report'] = "Khong co du lieu de hien thi";
            $this->my_layout->view("backend/report",$data);
        }
        
	}	

    }
	
	public function hot(){
        
		if ($this->agent->is_mobile())
		{
			
			redirect(base_url()."ctrangchumobile", 'refresh');
		}
		else
		{
		
        $userid = $this->my_auth->idkhach;
            $data['info'] = $this->muser->getInfokhach($userid);
		//$this->Mtrangchu->listallhot();
		$data['menucha']=$this->Mtrangchu->menucha();
		$data['menucon']=$this->Mtrangchu->menucon();
		$data['menusubcon']=$this->Mtrangchu->menusubcon();
		//$param              = $this->uri->segment(3);  
        $data['hienthi']=1;
		
		$data['title']="In Ấn TD";
		$data['des']="In Ấn TD";
		
		$min = 100;
		$max = $this->muser->getsanphamhotnumrows();
		$data['num_rows'] = $max;
		if($max!=0){
            
            $this->load->library('pagination');
            $config['base_url'] = base_url()."/hot-nhat.html/";
            $config['total_rows'] = $max;
            $config['per_page'] = $min;
            $config['num_link'] = 1; 
            $config['uri_segment'] = 2;
			$config['cur_tag_open'] = '<strong style="margin-left:4px;" class="pagination-selected-page">';
			$config['cur_tag_close'] = '</strong>';
            $this->pagination->initialize($config);
            
            $data['link'] = $this->pagination->create_links();
            $data['sanpham'] = $this->Mtrangchu->listallhot($min,$this->uri->segment($config['uri_segment']));
            //print_r($data['menucha']);
            $this->my_layout->view("vsp",$data);
        
        }else{
			
            $data['report'] = "Khong co du lieu de hien thi";
            $this->my_layout->view("backend/report",$data);
        }
        
	}	

    }
	
	public function banchaynhat(){
        
		if ($this->agent->is_mobile())
		{
			
			redirect(base_url()."ctrangchumobile", 'refresh');
		}
		else
		{
		
        $userid = $this->my_auth->idkhach;
            $data['info'] = $this->muser->getInfokhach($userid);
		$this->Mtrangchu->listallbanchay();
		$data['menucha']=$this->Mtrangchu->menucha();
		$data['menucon']=$this->Mtrangchu->menucon();
		$data['menusubcon']=$this->Mtrangchu->menusubcon();
		//$param              = $this->uri->segment(3);  
        $data['hienthi']=1;
		
		$data['title']="In Ấn TD";
		$data['des']="In Ấn TD";
		
		$min = 100;
		$max = $this->muser->getsanphambanchaynhatnumrows();
		$data['num_rows'] = $max;
		if($max!=0){
            
            $this->load->library('pagination');
            $config['base_url'] = base_url()."/ban-chay-nhat.html/";
            $config['total_rows'] = $max;
            $config['per_page'] = $min;
            $config['num_link'] = 1; 
            $config['uri_segment'] = 2;
			$config['cur_tag_open'] = '<strong style="margin-left:4px;" class="pagination-selected-page">';
			$config['cur_tag_close'] = '</strong>';
            $this->pagination->initialize($config);
            
            $data['link'] = $this->pagination->create_links();
            $data['sanpham'] = $this->Mtrangchu->listallbanchay($min,$this->uri->segment($config['uri_segment']));
            
            $this->my_layout->view("vsp",$data);
        
        }else{
			
            $data['report'] = "Khong co du lieu de hien thi";
            $this->my_layout->view("backend/report",$data);
        }
        
	}	

    }
	
	
	
	public function loaisptheocha($a=""){
		

		$userid = $this->my_auth->idkhach;
			$data['info'] = $this->muser->getInfokhach($userid);
			$data['danhmuccha'] = $this->muser->showdanhmuccha();
		$data['allsanphammenu']=$this->Mtrangchu->getallsanpham();
		$data['allsanpham']=$this->Mtrangchu->getallsanpham();
        $data['hienthi']=1;
		
		$data['title']="In Ấn TD";
		$data['des']="In Ấn TD";
		
		$min = 100;
		$max = $this->Mtrangchu->getnumrowallsanpham();
		$data['num_rows'] = $max;
		if($max!=0){
                        
            $this->my_layout->view("vloaisp",$data);
        
        }else{
			
            $data['report'] = "Khong co du lieu de hien thi";
            $this->my_layout->view("backend/report",$data);
        }
    
		

	}
	
	public function loaisptheochabyid($a=""){
		

		$userid = $this->my_auth->idkhach;
		$data['info'] = $this->muser->getInfokhach($userid);
		$data['danhmuccha'] = $this->muser->showdanhmuccha();
		$data['allsanphammenu']=$this->Mtrangchu->getallsanpham();
		$data['allsanpham']=$this->Mtrangchu->getallsanphambyid($a);
        $data['hienthi']=1;
		
		$data['title']="In Ấn TD";
		$data['des']="In Ấn TD";
		
		$min = 100;
		$max = $this->Mtrangchu->getnumrowallsanphambyid($a);
		$data['num_rows'] = $max;
		if($max!=0){
                        
            $this->my_layout->view("vloaisp",$data);
        
        }else{
			
            $data['report'] = "Khong co du lieu de hien thi";
            $this->my_layout->view("backend/report",$data);
        }
    
		

    }
	
	public function loaisptheocon($b=""){
		$userid = $this->my_auth->idkhach;
            $data['info'] = $this->muser->getInfokhach($userid);
        
		//$iddm1=explode("-",$this->uri->segment(2));
		$iddm=$b;
        
		$data['menucha']=$this->Mtrangchu->menucha();
		$data['menucon']=$this->Mtrangchu->menucon();
		$data['menusubcon']=$this->Mtrangchu->menusubcon();
		$data['hienthi']=3;
		$data['tendanhmuc']=$this->Mtrangchu->layiddmcon($iddm);
		$data['title']=$data['tendanhmuc']['tendmcon'];
		$data['des']="In Ấn TD- ".$data['title']." Mua sắm thời trang online đẹp giá rẻ ";
		
		function utf8convert($str) { //chuyển chuỗi thành ko dấu
	if(!$str) return false;
	$utf8 = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'd'=>'đ|Đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',
			);
	foreach($utf8 as $ascii=>$uni) $str = preg_replace("/($uni)/i",$ascii,$str);
return $str;
}
		
		$data['key']=$data['title'].", ".utf8convert($data['title']);
		
		$min = 100;
		$max = $this->muser->getsanphamtheoconnumrows($iddm);
		$data['num_rows'] = $max;
		if($max!=0){
			
			if ($this->agent->is_mobile())
		{
			
			redirect(base_url()."danh-muc-mobile/".$data['tendanhmuc']['slug']."-".$data['tendanhmuc']['iddmcon'].".html", 'refresh');
		}
            
            $this->load->library('pagination');
            $config['base_url'] = base_url()."ctrangchu/loaisptheocon/".$iddm."/index";
            $config['total_rows'] = $max;
            $config['per_page'] = $min;
            $config['num_link'] = 1; 
            $config['uri_segment'] = 5;
			$config['cur_tag_open'] = '<strong style="margin-left:4px;" class="pagination-selected-page">';
			$config['cur_tag_close'] = '</strong>';
            $this->pagination->initialize($config);
            
            $data['link'] = $this->pagination->create_links();
			$data['sanpham']=$this->Mtrangchu->listsptheocon($iddm,$min,$this->uri->segment($config['uri_segment']));
			
            
            
            $this->my_layout->view("vloaispcon",$data);
        
        }else{
			redirect(base_url());
        }
			

    }
	
	public function loaisptheosubcon($b=""){
		$userid = $this->my_auth->idkhach;
            $data['info'] = $this->muser->getInfokhach($userid);
        
		//$iddm1=explode("-",$this->uri->segment(2));
		$iddm=$b;
        
		$data['menucha']=$this->Mtrangchu->menucha();
		$data['menucon']=$this->Mtrangchu->menucon();
		$data['menusubcon']=$this->Mtrangchu->menusubcon();
		$data['hienthi']=3;
		$data['tendanhmuc']=$this->Mtrangchu->layiddmsubcon($iddm);
		$data['title']=$data['tendanhmuc']['tendmsubcon'];
		$data['des']="In Ấn TD- ".$data['title']." Mua sắm thời trang online đẹp giá rẻ ";
		
		function utf8convert($str) { //chuyển chuỗi thành ko dấu
	if(!$str) return false;
	$utf8 = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'd'=>'đ|Đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',
			);
	foreach($utf8 as $ascii=>$uni) $str = preg_replace("/($uni)/i",$ascii,$str);
return $str;
}
		
		$data['key']=$data['title'].", ".utf8convert($data['title']);
		
		$min = 100;
		$max = $this->muser->getsanphamtheosubconnumrows($iddm);
		$data['num_rows'] = $max;
		if($max!=0){
            
			if ($this->agent->is_mobile())
		{
			
			redirect(base_url()."danh-muc-mobile/".$data['tendanhmuc']['slug']."-".$data['tendanhmuc']['iddmsubcon'].".html", 'refresh');
		}
			
            $this->load->library('pagination');
            $config['base_url'] = base_url()."ctrangchu/loaisptheosubcon/".$iddm."/index";
            $config['total_rows'] = $max;
            $config['per_page'] = $min;
            $config['num_link'] = 1; 
            $config['uri_segment'] = 5;
			$config['cur_tag_open'] = '<strong style="margin-left:4px;" class="pagination-selected-page">';
			$config['cur_tag_close'] = '</strong>';
            $this->pagination->initialize($config);
            
            $data['link'] = $this->pagination->create_links();
			$data['sanpham']=$this->Mtrangchu->listsptheosubcon($iddm,$min,$this->uri->segment($config['uri_segment']));
			
            
            
            $this->my_layout->view("vloaispsubcon",$data);
        
        }else{
			redirect(base_url());
        }
			

	}
	

	public function trangtintuc($a=""){
		$userid = $this->my_auth->idkhach;
            $data['info'] = $this->muser->getInfokhach($userid);
		$iddm=$a;
		$data['danhmuccha'] = $this->muser->showdanhmuccha();
		$data['menudanhmuc']=$this->Mtrangchu->menudanhmuc();
        $data['hienthi']=3;
		$data['alldmtintuc']=$this->Mtrangchu->layalldmtintuc();
		$data['title']="Tin tức";
		$data['des']="Tin tức - ".$data['title']." Tin tức";
		
		function utf8convert($str) { //chuyển chuỗi thành ko dấu
	if(!$str) return false;
	$utf8 = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'd'=>'đ|Đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',
			);
	foreach($utf8 as $ascii=>$uni) $str = preg_replace("/($uni)/i",$ascii,$str);
return $str;
}
		
		$data['key']=$data['title'].", ".utf8convert($data['title']);
        $min1 = 3;
		$max = $this->Mtrangchu->getNumberOfalltintuc();
		$data['num_rows'] = $max;
		if($max!=0){
            
            $this->load->library('pagination');
            $config['base_url'] = base_url()."danh-muc-tin-tuc.html/";
            $config['total_rows'] = $max;
            $config['per_page'] = $min1;
            $config['num_link'] = 1; 
            $config['uri_segment'] = 2;
			$config['next_link'] = '<i class="fa fa-caret-right"></i>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['next_link'] = 'Next';
			$config['prev_link'] = 'Prev';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			$config['first_link'] = false;
			$config['last_link'] = false;
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li><span aria-current="page" class="page-numbers current">';
			$config['cur_tag_close'] = '</span></li>';
            $this->pagination->initialize($config);
            
            $data['link'] = $this->pagination->create_links();
			$data['alltintuc']=$this->Mtrangchu->listalltintucwithpaging($min1,$this->uri->segment($config['uri_segment']));
            
            
            $this->my_layout->view("vloaitintuc",$data);
        
        }else{
			redirect(base_url());
        }
			

	}

	public function danhmuctintuc($a=""){
		$userid = $this->my_auth->idkhach;
            $data['info'] = $this->muser->getInfokhach($userid);
        
		//$iddm1=explode("-",$this->uri->segment(2));
		$iddm=$a;
		$data['danhmuccha'] = $this->muser->showdanhmuccha();
		$data['menudanhmuc']=$this->Mtrangchu->menudanhmuc();
		$data['menucon']=$this->Mtrangchu->menucon();
		$data['menusubcon']=$this->Mtrangchu->menusubcon();
		//$param              = $this->uri->segment(3);  
        $data['hienthi']=3;
		$data['tendanhmuc']=$this->Mtrangchu->layiddmtintuc($iddm);
		$data['title']=$data['tendanhmuc']['tendmtintuc'];
		$data['des']="Deal Hàng Việt - ".$data['title']." khuyến mãi giá rẻ chỉ có tại dealhangviet.vn";
		$min=6;
		$data['tintuc'] = $this->Mtrangchu->listalltintuc($min,0);
		$data['sanpham'] = $this->Mtrangchu->listallbanchay(10,0);
		function utf8convert($str) { //chuyển chuỗi thành ko dấu
	if(!$str) return false;
	$utf8 = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'd'=>'đ|Đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',
			);
	foreach($utf8 as $ascii=>$uni) $str = preg_replace("/($uni)/i",$ascii,$str);
return $str;
}
		
		$data['key']=$data['title'].", ".utf8convert($data['title']);
        $min1 = 6;
		$max = $this->Mtrangchu->getsanphamtheochanumrows($iddm);
		$data['num_rows'] = $max;
		if($max!=0){
            
            $this->load->library('pagination');
            $config['base_url'] = base_url()."danh-muc/".$data['tendanhmuc']['slug']."-".$iddm.".html"."/index";
            $config['total_rows'] = $max;
            $config['per_page'] = $min1;
            $config['num_link'] = 1; 
            $config['uri_segment'] = 4;
			$config['next_link'] = '<i class="fa fa-caret-right"></i>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['next_link'] = 'Next';
			$config['prev_link'] = 'Prev';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			$config['first_link'] = false;
			$config['last_link'] = false;
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li><span aria-current="page" class="page-numbers current">';
			$config['cur_tag_close'] = '</span></li>';
            $this->pagination->initialize($config);
            
            $data['link'] = $this->pagination->create_links();
			$data['tintuctrongdanhmuc']=$this->Mtrangchu->listtintheodanhmuc($iddm,$min1,$this->uri->segment($config['uri_segment']));
            
            
            $this->my_layout->view("vloaitintucdanhmuc",$data);
        
        }else{
			redirect(base_url());
        }
			

    }

	
	public function chitiettintuc($a=""){
		$userid = $this->my_auth->idkhach;
            $data['info'] = $this->muser->getInfokhach($userid);
        $sp=$a;
		$min=6;
		$data['danhmuccha'] = $this->muser->showdanhmuccha();
        $data['tintuc'] = $this->Mtrangchu->listalltintuc($min,0);
		$data['menudanhmuc']=$this->Mtrangchu->menudanhmuc();
		$data['sanpham'] = $this->Mtrangchu->listallbanchay(10,0);
		$max = $this->Mtrangchu->getchitiettinnumrows($sp);
		function utf8convert($str) { //chuyển chuỗi thành ko dấu
			if(!$str) return false;
			$utf8 = array(
					'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
					'd'=>'đ|Đ',
					'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
					'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',
					'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
					'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
					'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',
					);
			foreach($utf8 as $ascii=>$uni) $str = preg_replace("/($uni)/i",$ascii,$str);
		return $str;
		}
		if($max==0){
			//$data['tendanhmuc']=$this->Mtrangchu->layidthuonghieu($iddm);
            redirect(base_url());
            
            
        
        }
		else{
		
		$data['chitiettin']=$this->Mtrangchu->getInfochitiettin($sp);
		$data['tinlienquan']=$this->Mtrangchu->getInfotinlienquan($data['chitiettin']['iddmtintuc'],$data['chitiettin']['idtintuc']);
		$data['title']=$data['chitiettin']['tieude'];
		$data['des']=$data['chitiettin']['des'];
		$data['key']=$data['chitiettin']['tukhoa'];
		$data['hienthi']=2;
		//$data['max'] = $this->muser->getallthemenum();
		//$data['cosan'] = $this->muser->laytheme();
		
        
            //$userid = $this->my_auth->userid;
            //$data['info'] = $this->muser->getInfo($userid);
            //$data['about']=$this->mhome->get_about();
            //$this->load->view("frontend/user/home_view",$data);
			//print_r($data['chitietsp']);
			$this->my_layout->view("vchitiettin",$data);
		}
		
	}
	
	public function chitietinan($a=""){
		$userid = $this->my_auth->idkhach;
            $data['info'] = $this->muser->getInfokhach($userid);
        $sp=$a;
		$min=6;
		$data['danhmuccha'] = $this->muser->showdanhmuccha();
		$max = $this->Mtrangchu->getchitietinannumrows($sp);
		function utf8convert($str) { //chuyển chuỗi thành ko dấu
			if(!$str) return false;
			$utf8 = array(
					'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
					'd'=>'đ|Đ',
					'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
					'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',
					'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
					'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
					'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',
					);
			foreach($utf8 as $ascii=>$uni) $str = preg_replace("/($uni)/i",$ascii,$str);
		return $str;
		}
		if($max==0){
            redirect(base_url());
            
            
        
        }
		else{
		
		$data['chitiettin']=$this->Mtrangchu->getInfochitietinan($sp);
		$data['tinlienquan']=$this->Mtrangchu->getInfotininanlienquan($data['chitiettin']['id']);
		$data['title']=$data['chitiettin']['tendanhmuc'];
		$data['des']=$data['chitiettin']['des'];
		$data['key']=$data['chitiettin']['tukhoa'];
		$data['hienthi']=2;

			$this->my_layout->view("vchitietinan",$data);
		}
		
    }

	
	
	public function chitiet($c=""){
        
		$userid = $this->my_auth->idkhach;
            $data['info'] = $this->muser->getInfokhach($userid);
		
        $sp=$c;
        $data['sanpham']=$this->Mtrangchu->listall();
		$data['danhmuccha'] = $this->muser->showdanhmuccha();

		
		$data['chitietsp']=$this->Mtrangchu->getInfochitietsp($sp);
		$data['tendanhmuc']=$this->Mtrangchu->layiddmcha($data['chitietsp']['parent_id']);
		$data['splienquan']=$this->Mtrangchu->getInfosplienquan($data['chitietsp']['parent_id'],$data['chitietsp']['stt']);
		$max = count($data['chitietsp']);
		if($max==0){
			//$data['tendanhmuc']=$this->Mtrangchu->layidthuonghieu($iddm);
            redirect(base_url());
            
            
        
        }
		else{
		$data['splienquan']=$this->Mtrangchu->getInfosplienquan($data['chitietsp']['parent_id'],$data['chitietsp']['stt']);
		$data['title']=$data['chitietsp']['tensp'];
		$data['des']=$data['chitietsp']['des'];
		$data['key']=$data['chitietsp']['tukhoa'];
		$data['hienthi']=2;
		
		
        
            //$userid = $this->my_auth->userid;
            //$data['info'] = $this->muser->getInfo($userid);
            //$data['about']=$this->mhome->get_about();
            //$this->load->view("frontend/user/home_view",$data);
			//print_r($data['chitietsp']);
			$this->my_layout->view("vchitiet",$data);
		}
			
    }
	
	public function danhmuccha(){
        
		$userid = $this->my_auth->idkhach;
            $data['info'] = $this->muser->getInfokhach($userid);
        $sp=$this->uri->segment(3);
        $data['sanpham']=$this->Mtrangchu->listall();
		$data['menucha']=$this->Mtrangchu->menucha();
		$data['menucon']=$this->Mtrangchu->menucon();
		$data['menusubcon']=$this->Mtrangchu->menusubcon();
		$data['chitietsp']=$this->Mtrangchu->getInfochitietsp($sp);
		$data['danhmuccha']=$this->Mtrangchu->getInfochitietsp($sp);
		
		
		
        
            //$userid = $this->my_auth->userid;
            //$data['info'] = $this->muser->getInfo($userid);
            //$data['about']=$this->mhome->get_about();
            //$this->load->view("frontend/user/home_view",$data);
			//print_r($data['chitietsp']);
			$this->my_layout->view("vchitiet",$data);
			
    }
	
	public function tintuc(){
        
		
        
        $data['sanpham']=$this->Mtrangchu->listall();
        $data['loaisp']=$this->mhome->get_theloai();
		
		
		$param              = $this->uri->segment(3);   
        
            $userid = $this->my_auth->userid;
            $data['info'] = $this->muser->getInfo($userid);
            
			$this->load->library('pagination');
                         $config['base_url']         = base_url().'ctrangchu/tintuc';            
                         $config['total_rows']       = $this->mhome->get_total_rows_tintuc();
                         //$config['use_page_numbers'] = TRUE;//hiển thị số trang đúng
                         $config['per_page']         = 3;  
                         $config['uri_segment']      = 3;                              
                         $this->pagination->initialize($config);                         
                         $data['tintuc']          = $this->mhome->get_tintuc($config['per_page'],$param); 
			
			$this->my_layout->view("news",$data);
			
    }

	
	public function new_detail(){
        
		
        
        $data['sanpham']=$this->Mtrangchu->listall();
        $data['loaisp']=$this->mhome->get_theloai();
		
		
		$param              = $this->uri->segment(3);   
        
            $userid = $this->my_auth->userid;
            $data['info'] = $this->muser->getInfo($userid);
            
			$this->load->library('pagination');
                         $config['base_url']         = base_url().'ctrangchu/tintuc';            
                         $config['total_rows']       = $this->mhome->get_total_rows_tintuc();
                         //$config['use_page_numbers'] = TRUE;//hiển thị số trang đúng
                         $config['per_page']         = 3;  
                         $config['uri_segment']      = 3;                              
                         $this->pagination->initialize($config);                         
                         $data['tintuc']          = $this->mhome->get_newdetail($param); 
			
			$this->my_layout->view("new_detail",$data);
			
    }
	
	public function dichvu(){
        
		
        
        $data['sanpham']=$this->Mtrangchu->listall();
        $data['loaisp']=$this->mhome->get_theloai();
		
		
		
			
			$this->my_layout->view("services",$data);
			
    }
	
	public function duandalam(){
        
		
        
$data['sanpham']=$this->Mtrangchu->listall();
        $data['loaisp']=$this->mhome->get_theloai();
		
		
		
			
			$this->my_layout->view("duan",$data);
			
    }
	
	public function lienhe(){
        
		
        
		$userid = $this->my_auth->idkhach;
		$data['info'] = $this->muser->getInfokhach($userid);
	
	$data['danhmuccha'] = $this->muser->showdanhmuccha();
	$data['danhmucchaduoi'] = $this->muser->showdanhmucchaduoi();
	//$param              = $this->uri->segment(3);  
	$data['banner'] = $this->muser->showbanner();
	$data['hienthi']=1;
	//$data['songuoimua']=$this->muser->getsonguoimua();
	
	$data['title']="In Ấn TD";
	$data['des']="In Ấn TD";
	
	$min = 100;
	$max = $this->muser->getsanphamnumrows();
	$data['num_rows'] = $max;
	
//cấu hình thông tin do google cung cấp
$api_url     = 'https://www.google.com/recaptcha/api/siteverify';
$site_key    = '6LfHt58UAAAAAELmAgSDGihVAyFhBotS6g4eU-Xc';
$secret_key  = '6LfHt58UAAAAAFLapCRu0rONjtcxrU-_P5Ih9rfr';
  
//kiem tra submit form
if($this->input->post("ok"))
{
    //lấy dữ liệu được post lên
    $site_key_post    = $_POST['g-recaptcha-response'];
      
    //lấy IP của khach
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $remoteip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $remoteip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $remoteip = $_SERVER['REMOTE_ADDR'];
    }
     
    //tạo link kết nối
    $api_url = $api_url.'?secret='.$secret_key.'&response='.$site_key_post.'&remoteip='.$remoteip;
    //lấy kết quả trả về từ google
    $response = file_get_contents($api_url);
    //dữ liệu trả về dạng json
    $response = json_decode($response);
    if(!isset($response->success))
    {
        redirect($this->agent->referrer());
    }
    if($response->success == true)
    {
		$ngaythang= date('d/m/Y h:i');
		$add = array(
			"hoten" => $this->input->post("hoten"),
			"phone" => $this->input->post("phone"),
			"diachi" => $this->input->post("diachi"),
			"noidung" => $this->input->post("noidung"),
			"ngaythang" => $ngaythang,
			
	);
	if($this->muser->addthongtinyeucau($add)){
		redirect(base_url()."thank-you.html");
	}
        redirect(base_url()."loi-yeu-cau.html");
    }else{
        redirect($this->agent->referrer());
    }
}else{
	$this->load->library('pagination');
	$config['base_url'] = base_url()."trang-chu.html/";
	$config['total_rows'] = $max;
	$config['per_page'] = $min;
	$config['num_link'] = 1; 
	$config['uri_segment'] = 2;
	$config['cur_tag_open'] = '<strong style="margin-left:4px;" class="pagination-selected-page">';
	$config['cur_tag_close'] = '</strong>';
	$this->pagination->initialize($config);
	
	$data['link'] = $this->pagination->create_links();
	$data['sanpham'] = $this->Mtrangchu->listall();
	$data['sanphamnewlimit'] = $this->Mtrangchu->listallsanphamnewwithlimit(24);
	$data['sanphamhotlimit'] = $this->Mtrangchu->listallsanphamhotwithlimit(24);
	
	$data['showbanner']=1;
	$data['showpromo']=1;
	
	$this->my_layout->view("vcontact",$data);
}

	
		
		
	
	
			
    }
	public function giacong(){
        
		
        
		$userid = $this->my_auth->idkhach;
		$data['info'] = $this->muser->getInfokhach($userid);
	
	$data['danhmuccha'] = $this->muser->showdanhmuccha();
	$data['danhmucchaduoi'] = $this->muser->showdanhmucchaduoi();
	//$param              = $this->uri->segment(3);  
	$data['banner'] = $this->muser->showbanner();
	$data['hienthi']=1;
	//$data['songuoimua']=$this->muser->getsonguoimua();
	
	$data['title']="In Ấn TD";
	$data['des']="In Ấn TD";
	
	$min = 100;
	$max = $this->muser->getsanphamnumrows();
	$data['num_rows'] = $max;
	if($max!=0){
		
		$this->load->library('pagination');
		$config['base_url'] = base_url()."trang-chu.html/";
		$config['total_rows'] = $max;
		$config['per_page'] = $min;
		$config['num_link'] = 1; 
		$config['uri_segment'] = 2;
		$config['cur_tag_open'] = '<strong style="margin-left:4px;" class="pagination-selected-page">';
		$config['cur_tag_close'] = '</strong>';
		$this->pagination->initialize($config);
		
		$data['link'] = $this->pagination->create_links();
		$data['giacongthanhpham'] = $this->Mtrangchu->getInforGiaCongThanhPham();
		$data['sanphamnewlimit'] = $this->Mtrangchu->listallsanphamnewwithlimit(24);
		$data['sanphamhotlimit'] = $this->Mtrangchu->listallsanphamhotwithlimit(24);
		
		$data['showbanner']=1;
		$data['showpromo']=1;
		
		$this->my_layout->view("vgiacong",$data);
	
	}else{
		
		$data['report'] = "Khong co du lieu de hien thi";
		$this->my_layout->view("backend/report",$data);
	}
			
    }
	public function chedogiaohang(){
        
		
        
		$userid = $this->my_auth->idkhach;
		$data['info'] = $this->muser->getInfokhach($userid);
	
	$data['danhmuccha'] = $this->muser->showdanhmuccha();
	$data['danhmucchaduoi'] = $this->muser->showdanhmucchaduoi();
	//$param              = $this->uri->segment(3);  
	$data['banner'] = $this->muser->showbanner();
	$data['hienthi']=1;
	//$data['songuoimua']=$this->muser->getsonguoimua();
	
	$data['title']="In Ấn TD";
	$data['des']="In Ấn TD";
	
	$min = 100;
	$max = $this->muser->getsanphamnumrows();
	$data['num_rows'] = $max;
	if($max!=0){
		
		$this->load->library('pagination');
		$config['base_url'] = base_url()."trang-chu.html/";
		$config['total_rows'] = $max;
		$config['per_page'] = $min;
		$config['num_link'] = 1; 
		$config['uri_segment'] = 2;
		$config['cur_tag_open'] = '<strong style="margin-left:4px;" class="pagination-selected-page">';
		$config['cur_tag_close'] = '</strong>';
		$this->pagination->initialize($config);
		
		$data['link'] = $this->pagination->create_links();
		$data['chedogiaohang'] = $this->Mtrangchu->getInforCheDoGiaoHang();
		
		$data['showbanner']=1;
		$data['showpromo']=1;
		
		$this->my_layout->view("vchedogiaohang",$data);
	
	}else{
		
		$data['report'] = "Khong co du lieu de hien thi";
		$this->my_layout->view("backend/report",$data);
	}
			
	}
	
	public function dichvukhac($id){
        
		
        
		$userid = $this->my_auth->idkhach;
		$data['info'] = $this->muser->getInfokhach($userid);
	
	$data['danhmuccha'] = $this->muser->showdanhmuccha();
	$data['danhmucchaduoi'] = $this->muser->showdanhmucchaduoi();
	$param              = $this->uri->segment(3);  
	$data['banner'] = $this->muser->showbanner();
	$data['hienthi']=1;
	//$data['songuoimua']=$this->muser->getsonguoimua();
	
	$data['title']="In Ấn TD";
	$data['des']="In Ấn TD";
	
	$min = 100;
	$max = $this->muser->getsanphamnumrows();
	$data['num_rows'] = $max;
	if($max!=0){
		
		$this->load->library('pagination');
		$config['base_url'] = base_url()."trang-chu.html/";
		$config['total_rows'] = $max;
		$config['per_page'] = $min;
		$config['num_link'] = 1; 
		$config['uri_segment'] = 2;
		$config['cur_tag_open'] = '<strong style="margin-left:4px;" class="pagination-selected-page">';
		$config['cur_tag_close'] = '</strong>';
		$this->pagination->initialize($config);
		
		$data['link'] = $this->pagination->create_links();
		$data['dichvukhac'] = $this->Mtrangchu->getInfordichvukhac($id);
		
		$data['showbanner']=1;
		$data['showpromo']=1;
		
		$this->my_layout->view("vdichvukhac",$data);
	
	}else{
		
		$data['report'] = "Khong co du lieu de hien thi";
		$this->my_layout->view("backend/report",$data);
	}
			
    }
	
	public function loaisanpham(){
        
		$param              = $this->uri->segment(3);   
        
        $data['loaisp']=$this->mhome->get_theloai();
		
		$data['content_cat']   = $this->mhome->content_theloai($param);
		
			
			$this->my_layout->view("categories",$data);
			
    }
	
	public function dkthanhcong(){
        
		
        
        $data['sanpham']=$this->Mtrangchu->listall();
        $data['loaisp']=$this->mhome->get_theloai();
		$data['title']="Đăng ký thành viên thành công";
		

		
		
			
			$this->my_layout->view("dkthanhcong",$data);
			
    }
	
	public function thanhtoan(){
        
		if($this->input->post()){
            $post_data = $this->input->post('data');
            $this->load->model('mcustomer');
            $insert_id = $this->mcustomer->add_customer($post_data);
            
            $tong_tien = 0;
            foreach($this->cart->contents() as $item){
                $tong_tien += $item['subtotal'];
            }
            
            $this->load->model('mcart');
            $cart_data = array(
                'id_khach_hang' => $insert_id,
                'tong_tien' => $tong_tien
            );
            
            $insert_id = $this->mcart->add_cart($cart_data);
            echo $insert_id;
            
            
            // Lưu đơn hàng
            $cart_data = array();
            $i = 0;
            
            foreach($this->cart->contents() as $item){
                $cart_data[$i]['id_cart'] = $insert_id;
                $cart_data[$i]['id_hang'] = $item['id'];
                $cart_data[$i]['so_luong'] = $item['qty'];
                $cart_data[$i]['don_gia'] = $item['price'];
                $cart_data[$i]['thanh_tien'] = $item['subtotal'];
                $i++;
            }
            
            if($this->mcart->add_cart_detail($cart_data))
                $data['message'] = 'Thanh toán thành công';
            
        }
        
        $data['sanpham']=$this->Mtrangchu->listall();
        $data['loaisp']=$this->mhome->get_theloai();

		$this->my_layout->view("thanhtoan",$data);
    }
	
	public function chitietsp(){
        
		$param              = $this->uri->segment(3);  
        
        $data['sanpham']=$this->Mtrangchu->listall();
        $data['loaisp']=$this->mhome->get_theloai();
		
		$data['chitietsp']=$this->mhome->getchitietsp($param);
		
		
			
			$this->my_layout->view("single_product",$data);
			
    }
	
	function register()
    {
	$data['sanpham']=$this->Mtrangchu->listall();
        $data['loaisp']=$this->mhome->get_theloai();
	
        //--- Neu Login thi khong duoc dang ki
        if($this->my_auth->is_Login()){
            redirect(base_url()."ctrangchu");
            exit();
        }
        
        $this->form_validation->set_rules("full_name","Full name","required|min_length[6]");
        $this->form_validation->set_rules("username","Username","required|max_length[25]|callback_checkUser");
        $this->form_validation->set_rules("password","Password","required|matches[repassword]");
        $this->form_validation->set_rules("email","Email","required|valid_email|callback_checkEmail");
        $this->form_validation->set_rules("address","Address","required");
        $this->form_validation->set_rules("phone","Phone number","required|callback_validPhone");
        $this->form_validation->set_rules("gender","Gender","required");
        
        if($this->form_validation->run()==FALSE){
            $data['error']="";
            $this->my_layout->view("frontend/user/register",$data);
			
        }
        else
        {
                $salt = create_random_string(5);
                $add = array(
                        "full_name" => $this->input->post("full_name"),
                        "username"  => $this->input->post("username"),
                        "salt"      => $salt,
                        "password"  => md5($this->input->post("password")),
                        "email"     => $this->input->post("email"),
                        "address"   => $this->input->post("address"),
                        "phone"     => $this->input->post("phone"),
                        "level"     => 2, // mac dinh la memmber khi dang ki thanh vien
                        "gender"    => $_POST['gender'],
                        "add_date"  => date("Y-m-d H:i:s"),
                        "active"    => 0, // chua kich hoat
                );

                //--- Xử lý ảnh : phần này không bắt buộc
                $img = "";
                $flag = TRUE;
                if($_FILES['image']['name'] != NULL){
                    $config['upload_path']   = 'public/images/avata/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size']      = '5000';
                    $config['max_width']     = '2000';
                    $config['max_height']    = '2000';
                    $config['encrypt_name']  = true; // ma hoa ten file
                    $config['remove_spaces'] = true; // xoa khoang trang
                    $this->load->library('upload', $config);

                    if(!$this->upload->do_upload("image"))
                    {
                        $data['error'] = $this->upload->display_errors();
                        $this->my_layout->view("frontend/user/register",$data);
                        $flag = FALSE;
                    }
                    else
                    {
                        $img = $this->upload->data();
                        $add['image'] = $img['file_name'];
                    }
                }

                if($flag==TRUE){
                    //--- Gui mail kich hoat neu add thanh cong
                    $message = "";
                    if($this->muser->addUser($add)){

                        $userid = mysql_insert_id();
                        $link_active = base_url()."home/user/active/?userid=".$userid."&key=".md5($salt);
                        $message  = "Please follow this link to active your acount <br/>".
                        $message .= "Link : <a href=".$link_active.">".$link_active."</a><br/>";
                        $message .= "username : ".$add['username']."<br/>";
                        $message .= "password : ".$this->input->post("password");

                        $mail = array(
                                "to_receiver"   => $add['email'],
                                "message"       => $message,
                            );

                        $this->load->library("my_email");
                        $this->my_email->config($mail);
                        $this->my_email->sendmail();

                        $this->session->set_userdata(array($this->_register => TRUE));
                        redirect(base_url()."ctrangchu/dkthanhcong");
                    }
                }
        }
        
    }
	
	public function thanhcong()
	{
		$userid = $this->my_auth->idkhach;
            $data['info'] = $this->muser->getInfokhach($userid);
			$data['title']="Đặt hàng thành công";
		$this->Mtrangchu->listall();
		$data['danhmuccha'] = $this->muser->showdanhmuccha();
		//$param              = $this->uri->segment(3);  
        $data['hienthi']=2;
		
            $this->my_layout->view("vthankyou",$data);
        
	}
	public function thankyou()
	{
		$userid = $this->my_auth->idkhach;
            $data['info'] = $this->muser->getInfokhach($userid);
			$data['title']="Đặt hàng thành công";
		$this->Mtrangchu->listall();
		$data['danhmuccha'] = $this->muser->showdanhmuccha();
		//$param              = $this->uri->segment(3);  
        $data['hienthi']=2;
		
            $this->my_layout->view("vthankyou",$data);
        
	}
	public function loiyeucau()
	{
		$userid = $this->my_auth->idkhach;
            $data['info'] = $this->muser->getInfokhach($userid);
			$data['title']="Lỗi";
		$this->Mtrangchu->listall();
		$data['danhmuccha'] = $this->muser->showdanhmuccha();
		//$param              = $this->uri->segment(3);  
        $data['hienthi']=2;
		
            $this->my_layout->view("vloiyeucaulienlac",$data);
        
	}
	
	public function thongtinkhachhang()
	{
		$userid = $this->my_auth->idkhach;
            $data['info'] = $this->muser->getInfokhach($userid);
			$data['title']="Thông tin khách hàng";
			if(count($data['info'])!=0)
			{
			
			
		$this->Mtrangchu->listall();
		$data['menucha']=$this->Mtrangchu->menucha();
		$data['menucon']=$this->Mtrangchu->menucon();
		$data['menusubcon']=$this->Mtrangchu->menusubcon();
		//$param              = $this->uri->segment(3);  
        $data['hienthi']=2;
		
            $this->my_layout->view("vthongtinkhachhang",$data);
			}
			else
			{
				redirect(base_url()."ctrangchu");
			}
        
	}
	
	public function xlthongtinkhachhang()
	{
		$userid = $this->my_auth->idkhach;
            $data['info'] = $this->muser->getInfokhach($userid);
			if(isset($_POST['luu']))
			{
				if($_POST['password']!="")
				{
				//$username = $_POST['tendangnhap'],
				$diachi=$_POST['diachi0']."|".$_POST['diachi1']."|".$_POST['diachi2']."|".$_POST['diachi3']."|".$_POST['diachi4'];
			$thongtin=array(
				"hoten" => $_POST['hoten'],
				
				"password" => md5($_POST['password']),
				"email" => $_POST['email'],
				"gioitinh" => $_POST['gioitinh'],
				"diachi" => $diachi,
				"phone" => $_POST['dienthoai'],
				"ngaysinh" => $_POST['ngaysinh'],
			);
			}
			else 
			{
				//$username = $_POST['tendangnhap'],
				$diachi=$_POST['diachi0']."|".$_POST['diachi1']."|".$_POST['diachi2']."|".$_POST['diachi3']."|".$_POST['diachi4'];
			$thongtin=array(
				"hoten" => $_POST['hoten'],
				
				//"password" => md5($_POST['password']),
				"email" => $_POST['email'],
				"gioitinh" => $_POST['gioitinh'],
				"diachi" => $diachi,
				"phone" => $_POST['dienthoai'],
				"ngaysinh" => $_POST['ngaysinh'],
				);
			}
			
			$this->muser->updateUser1($thongtin,$userid);
			redirect(base_url()."ctrangchu/thongtinkhachhang");
			}
			redirect(base_url()."ctrangchu/thongtinkhachhang");
        
	}
	
	public function dangky()
	{
		
		$userid = $this->my_auth->idkhach;
            $data['info'] = $this->muser->getInfokhach($userid);
			
			$data['title'] = "Đăng ký thành viên";
			
			if(count($data['info'])==0)
			{
		$this->Mtrangchu->listall();
		$data['menucha']=$this->Mtrangchu->menucha();
		$data['menucon']=$this->Mtrangchu->menucon();
		$data['menusubcon']=$this->Mtrangchu->menusubcon();
		//$param              = $this->uri->segment(3);  
        $data['hienthi']=2;
		
            $this->my_layout->view("vdangky",$data);
			}
			else
			{
				redirect(base_url()."ctrangchu");
			}
        
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url()."ctrangchu");
	}
	
	
	
	
	
	
	
	
	
}