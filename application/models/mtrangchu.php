<?php
class Mtrangchu extends CI_Model{
private $_table = "users";
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
	
	public function listall(){
       
        
		$this->db->select("*");        
        $this->db->order_by("thutu", 'asc');
		$this->db->where("anhien","0");
		// $this->db->limit($off,$limit);
        //$this->db->limit(8,0);
        $query=$this->db->get("sanpham");
        return $query->result_array();
    }
	public function getInforCheDoGiaoHang(){
       
        
		$this->db->select("*");   
        $query=$this->db->get("chedogiaohang");
        return $query->row_array();
    }
	public function getInfordichvukhac($id){
       
        
        $this->db->select("*");   
        $this->db->where("id",$id);
        $query=$this->db->get("dichvukhac");
        return $query->row_array();
    }
	public function getInforGiaCongThanhPham(){
       
        
		$this->db->select("*");   
        $query=$this->db->get("giacongthanhpham");
        return $query->row_array();
    }

    function getchitiettinnumrows($id){
		//$this->db->join('giaovien','giaovien.idgv=detai.idgv');
        //$this->db->join('loaidoan','loaidoan.idloaidoan=detai.idloaidoan');
		$this->db->where("idtintuc",$id);
		
        //$this->db->limit($off,$limit);
        //$this->db->order_by("iddetai","desc");
        $query = $this->db->get('tintuc');
        
        return $query->num_rows();
    }
    function getchitietinannumrows($id){
		//$this->db->join('giaovien','giaovien.idgv=detai.idgv');
        //$this->db->join('loaidoan','loaidoan.idloaidoan=detai.idloaidoan');
		$this->db->where("id",$id);
		
        //$this->db->limit($off,$limit);
        //$this->db->order_by("iddetai","desc");
        $query = $this->db->get('danhmucs');
        
        return $query->num_rows();
    }

    function getInfotinlienquan($id,$stt){
		$this->db->join("danhmuctintuc","danhmuctintuc.iddmtintuc=tintuc.iddmtintuc");
		$this->db->select("*");
        $this->db->from("tintuc"); 
		//$this->db->from("danhmuccha"); 
        
		$this->db->where("tintuc.iddmtintuc",$id);
		$this->db->not_like('idtintuc', $stt);
		$this->db->order_by("idtintuc", "desc"); 
		$this->db->limit(4,0); 
        $query = $this->db->get();
        
        if($query)
            return $query->result_array();
        else
            return FALSE;
    }
    function getInfotininanlienquan($stt){
		$this->db->select("*");
        $this->db->from("danhmucs"); 
		$this->db->not_like('id', $stt);
        $query = $this->db->get();
        
        if($query)
            return $query->result_array();
        else
            return FALSE;
    }

    function getInfochitiettin($id){
		$this->db->from("tintuc"); 
		$this->db->join("danhmuctintuc","danhmuctintuc.iddmtintuc=tintuc.iddmtintuc");
		
        $this->db->where("idtintuc",$id);
        $query = $this->db->get();
        
        if($query)
            return $query->row_array();
        else
            return FALSE;
    }
    function getInfochitietinan($id){
		$this->db->from("danhmucs"); 
		
        $this->db->where("id",$id);
        $query = $this->db->get();
        
        if($query)
            return $query->row_array();
        else
            return FALSE;
    }

    public function listalltintucwithpaging($off="",$limit=""){
       
        $this->db->join("danhmuctintuc","danhmuctintuc.iddmtintuc=tintuc.iddmtintuc");
		$this->db->select("*");       
		$this->db->where("anhien","0");
		//$this->db->order_by("thutu", 'asc');
		$this->db->order_by("idtintuc", 'desc');
        $this->db->limit($off,$limit);
        $query=$this->db->get("tintuc");
        return $query->result_array();
    }

    public function listalltintuc(){
       
        
		$this->db->select("*");        
        //$this->db->order_by("thutu", 'asc');
		$this->db->order_by("idtintuc", 'desc');
		$this->db->where("anhien","0");
		//$this->db->limit($off,$limit);
        //$this->db->limit(8,0);
        $query=$this->db->get("tintuc");
        return $query->result_array();
    }
    public function listalltintucforhomepage(){
       
        
		$this->db->select("*");        
        //$this->db->order_by("thutu", 'asc');
		$this->db->order_by("idtintuc", 'desc');
		$this->db->where("anhien","0");
		//$this->db->limit($off,$limit);
        $this->db->limit(3,0);
        $query=$this->db->get("tintuc");
        return $query->result_array();
    }

	public function listallsanphamnewwithlimit($limit){
       
        
		$this->db->select("*");        
        $this->db->order_by("thutu", 'asc');
		$this->db->where("anhien","0");
		$this->db->where("new","1");
		// $this->db->limit($off,$limit);
        $this->db->limit($limit,0);
        $query=$this->db->get("sanpham");
        return $query->result_array();
    }
	public function listallsanphamhotwithlimit($limit){
       
        
		$this->db->select("*");        
        $this->db->order_by("thutu", 'asc');
		$this->db->where("anhien","0");
		$this->db->where("hot","1");
		// $this->db->limit($off,$limit);
        $this->db->limit($limit,0);
        $query=$this->db->get("sanpham");
        return $query->result_array();
    }
	
	public function listallnew($off="",$limit=""){
       
        
		$this->db->select("*");        
        $this->db->order_by("thutu", 'asc');
		$this->db->order_by("stt", 'desc');
		$this->db->where("anhien","0");
		$this->db->where("new","1");
		$this->db->limit($off,$limit);
        //$this->db->limit(8,0);
        $query=$this->db->get("sanpham");
        return $query->result_array();
    }
	
	public function listallhot($off="",$limit=""){
       
        
		//$this->db->select("*"); 
        //$this->db->order_by("thutu", 'asc');
		//$this->db->order_by("stt", 'desc');
		//$this->db->where("anhien","0");
		//$this->db->where("hot","1");
		$this->db->limit($off,$limit);
        //$this->db->limit(8,0);
        $query=$this->db->query("select *,(round((giagiam*100)/giagoc)) as phantram from sanpham where anhien=0 ORDER BY phantram asc");
        return $query->result_array();
    }
	
	public function listallbanchay($off="",$limit=""){
       
        
		$this->db->select("*");        
        $this->db->order_by("songuoimua", 'desc');
		//$this->db->order_by("stt", 'desc');
		$this->db->where("anhien","0");
		
		$this->db->limit($off,$limit);
        //$this->db->limit(8,0);
        $query=$this->db->get("sanpham");
        return $query->result_array();
    }
	
	public function listsptheocha($id,$off="",$limit=""){
       
        
		$this->db->select("*");       
		
        
		$this->db->where("parent_id",$id);
		$this->db->where("anhien","0");
		$this->db->order_by("thutu", 'asc');
		$this->db->order_by("stt", 'desc');
        //$this->db->limit($off,$limit);
        $query=$this->db->get("sanpham");
        return $query->result_array();
    }
	
	public function listsptheocon($id,$off="",$limit=""){
       
        //$this->db->join("danhmuccon","danhmuccon.iddmcon=sanpham.iddmcon");
		$this->db->select("*");       
		
        
		$this->db->where("sanpham.iddmcon",$id);
		$this->db->where("anhien","0");
		$this->db->order_by("thutu", 'asc');
		$this->db->order_by("stt", 'desc');
        $this->db->limit($off,$limit);
        $query=$this->db->get("sanpham");
        return $query->result_array();
    }
	
	public function listsptheosubcon($id,$off="",$limit=""){
       
        //$this->db->join("danhmuccon","danhmuccon.iddmcon=sanpham.iddmcon");
		$this->db->select("*");       
		
        
		$this->db->where("sanpham.iddmsubcon",$id);
		$this->db->where("anhien","0");
		$this->db->order_by("thutu", 'asc');
		$this->db->order_by("stt", 'desc');
        $this->db->limit($off,$limit);
        $query=$this->db->get("sanpham");
        return $query->result_array();
    }
	
	public function layiddmcon($id){
       
        //$this->db->join("danhmuccon","danhmuccon.iddmcon=sanpham.iddmcon");
		$this->db->select("*");       
		
        //$this->db->order_by("stt", 'desc');
		$this->db->where("iddmcon",$id);
        //$this->db->limit(8,0);
        $query=$this->db->get("danhmuccon");
        return $query->row_array();
    }
	
	public function layiddmsubcon($id){
       
        //$this->db->join("danhmuccon","danhmuccon.iddmcon=sanpham.iddmcon");
		$this->db->select("*");       
		
        //$this->db->order_by("stt", 'desc');
		$this->db->where("iddmsubcon",$id);
        //$this->db->limit(8,0);
        $query=$this->db->get("danhmucsubcon");
        return $query->row_array();
    }
	
	public function layiddmcha($id){
       
        //$this->db->join("danhmuccon","danhmuccon.iddmcon=sanpham.iddmcon");
		$this->db->select("*");       
		
        //$this->db->order_by("stt", 'desc');
		$this->db->where("id",$id);
        //$this->db->limit(8,0);
        $query=$this->db->get("danhmucs");
        return $query->row_array();
    }

    function getsanphamtheochanumrows($id){
		//$this->db->join('giaovien','giaovien.idgv=detai.idgv');
        //$this->db->join('loaidoan','loaidoan.idloaidoan=detai.idloaidoan');
		$this->db->where("iddmtintuc",$id);
		
        //$this->db->limit($off,$limit);
        //$this->db->order_by("iddetai","desc");
        $query = $this->db->get('tintuc');
        
        return $query->num_rows();
    }

    public function layiddmtintuc($id){
       
        //$this->db->join("danhmuccon","danhmuccon.iddmcon=sanpham.iddmcon");
		$this->db->select("*");       
		
        //$this->db->order_by("stt", 'desc');
		$this->db->where("iddmtintuc",$id);
        //$this->db->limit(8,0);
        $query=$this->db->get("danhmuctintuc");
        return $query->row_array();
    }

	public function layalldmtintuc(){
       
        //$this->db->join("danhmuccon","danhmuccon.iddmcon=sanpham.iddmcon");
		$this->db->select("*");       
		
        //$this->db->order_by("stt", 'desc');
        //$this->db->limit(8,0);
        $query=$this->db->get("danhmuctintuc");
        return $query->result_array();
    }
	
	public function layiddmcha1($id){
       
        //$this->db->join("danhmuccon","danhmuccon.iddmcon=sanpham.iddmcon");
		$this->db->select("id");       
		
        //$this->db->order_by("stt", 'desc');
		$this->db->where("parent_id",$id);
        //$this->db->limit(8,0);
        $query=$this->db->get("danhmucs");
        return $query->result_array();
    }
	
	public function layiddmcha2($id){
       
        //$this->db->join("danhmuccon","danhmuccon.iddmcon=sanpham.iddmcon");
		$this->db->select("id");       
		
        //$this->db->order_by("stt", 'desc');
		$this->db->where_in("parent_id",$id);
        //$this->db->limit(8,0);
        $query=$this->db->get("danhmucs");
        return $query->row_array();
    }
	
	public function layiddmcha3($id){
       
        //$this->db->join("danhmuccon","danhmuccon.iddmcon=sanpham.iddmcon");
		$this->db->select("id");       
		
        //$this->db->order_by("stt", 'desc');
		$this->db->where_in("parent_id",$id);
        //$this->db->limit(8,0);
        $query=$this->db->get("danhmucs");
        return $query->row_array();
    }

    public function listtintheodanhmuc($id,$off="",$limit=""){
       
        $this->db->join("danhmuctintuc","danhmuctintuc.iddmtintuc=tintuc.iddmtintuc");
		$this->db->select("*");
        
		$this->db->where("tintuc.iddmtintuc",$id);
		$this->db->where("anhien","0");
		//$this->db->order_by("thutu", 'asc');
		$this->db->order_by("idtintuc", 'desc');
        $this->db->limit($off,$limit);
        $query=$this->db->get("tintuc");
        return $query->result_array();
    }

    public function menudanhmuc(){
       
        
		$this->db->select("*"); 
		$this->db->from("danhmuctintuc"); 
		
		
        $this->db->order_by("iddmtintuc","asc");
        
        $query=$this->db->get();
        return $query->result_array();
    }
    public function getNumberOfalltintuc(){
       
        
		$this->db->select("*"); 
		$this->db->from("tintuc"); 
        
        $query=$this->db->get();
        return $query->num_rows();
    }
	
	public function menucha(){
       
        
		$this->db->select("*"); 
		$this->db->from("danhmuccha"); 
		
		
        $this->db->order_by("vitri","asc");
        
        $query=$this->db->get();
        return $query->result_array();
    }

	public function getallsanpham(){
       
        
		$this->db->select("*"); 
		$this->db->from("danhmucs"); 
		
		
        $this->db->order_by("vitri","asc");
        
        $query=$this->db->get();
        return $query->result_array();
    }
	public function getallsanphambyid($id){
       
        
		$this->db->select("*"); 
		$this->db->from("danhmucs"); 
        $this->db->order_by("vitri","asc");
        $this->db->where("parent_id",$id);
        $query=$this->db->get();
        return $query->result_array();
    }
	public function getnumrowallsanphambyid($id){
       
        
		$this->db->select("*"); 
		$this->db->from("danhmucs"); 
        $this->db->order_by("vitri","asc");
        $this->db->where("parent_id",$id);
        $query=$this->db->get();
        return $query->num_rows();
    }
	public function getnumrowallsanpham(){
       
        
		$this->db->select("*"); 
		$this->db->from("danhmucs"); 
		
		
        $this->db->order_by("vitri","asc");
        
        $query=$this->db->get();
        return $query->num_rows();
    }
	
	public function menucon(){
       
        
		$this->db->select("*"); 
		$this->db->from("danhmuccon"); 
		
		
        //$this->db->order_by(" asc");
        
        $query=$this->db->get();
        return $query->result_array();
    }
	
	public function menusubcon(){
       
        
		$this->db->select("*"); 
		$this->db->from("danhmucsubcon"); 
		
		
        //$this->db->order_by(" asc");
        
        $query=$this->db->get();
        return $query->result_array();
    }
	
	
	
	function getalldata($off="",$limit=""){
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->limit($off,$limit);
        $this->db->order_by("userid","asc");
        $query = $this->db->get();
        $data = $query->result_array();
        return $data;
    }
    
    //--- Lay thong tin 1 record qua id
    function getInfochitietsp($id){
		$this->db->from("sanpham"); 
		//$this->db->from("danhmucs"); 
        $this->db->where("stt",$id);
        $query = $this->db->get();
        
        if($query)
            return $query->row_array();
        else
            return FALSE;
    }
	
	function getInfosplienquan($id,$stt){
		
        $this->db->from("sanpham"); 
		//$this->db->from("danhmuccha"); 
        
		//$this->db->where("parent_id",$id);
		$this->db->not_like('stt', $stt);
		$this->db->order_by("stt", "random"); 
		$this->db->limit(16,0); 
        $query = $this->db->get();
        
        if($query)
            return $query->result_array();
        else
            return FALSE;
    }

    //---- Lay thong tin qua email
    function getInfoByEmail($email){
        $this->db->where("email",$email);
        $query = $this->db->get($this->_table);

        if($query)
            return $query->row_array();
        else
            return FALSE;
    }

    //--- Them User moi
    function addUser($data){
        if($this->db->insert($this->_table,$data))
            return TRUE;
        else
            return FALSE;
    }

    //--- Xoa user
    function deleteUser($id){
        if($id!=1){
            $this->db->where("userid",$id);
            $this->db->delete($this->_table);
        }
    }

    //--- Cap nhat user
    function updateUser($data,$id){
        $this->db->where("userid",$id);
        if($this->db->update($this->_table,$data))
            return TRUE;
        else
            return FALSE;
    }

    // Tong so record
    function num_rows(){
        return $this->db->count_all($this->_table);
    }
    
    
    //---- Kiem tra username hop le
    function getUser($username,$id){
        if(isset($id)){ //use for update
           $this->db->where("username",$username);
           $this->db->where("userid !=",$id);
           $query = $this->db->get($this->_table);
        }
        else{ //user for add
            $this->db->where("username",$username);
            $query = $this->db->get($this->_table);
        }
        
        if($query->num_rows()!=0){
            return FALSE;
        }
        else{
            return TRUE;
        }
    }
    
    //--- da kich hoat 
    function actived($userid){
        $this->db->select("userid,active");
        $this->db->where("userid",$userid);
        $query = $this->db->get($this->_table);
        $info  = $query->row_array();
        if($info){
            if($info['active']==1)
            return TRUE;
        else
            return FALSE;
        }
        else
        {
            return FALSE;
        }
    }
    
    //--- Kiem tra userid v� key
    function checkActive($userid,$key){
         if($userid!="" && $key!=""){
            
            $this->db->where("userid",$userid);
            $this->db->where("md5(salt)",$key);
            $query = $this->db->get($this->_table);
            if($query->num_rows()!=0){
                
                return $query->row_array();
                
            }else{
                return FALSE;
            }
            
        }else{
            return FALSE;
        }
    }
    //--- Kiem tra Email
    function checkEmail($email,$id=""){
        
        if(isset($id) && $id!="")
        { //use for update
           $this->db->where("email",$email);
           $this->db->where("userid !=",$id);
           $query = $this->db->get($this->_table);
        }
        else
        { //user for add
            $this->db->where("email",$email);
            $query = $this->db->get($this->_table);
        }
        
        if($query->num_rows()!=0){
            return FALSE;
        }
        else{
            return TRUE;
        }
        
    }
    
    //--- Kiem tra dang nhap
    //----------------------------- CHECK LOGIN
    function checkLogin($username,$password){
        $u = $username;
        $p = md5($password);
        $this->db->where("Email",$u);
        $this->db->where("Password",$p);
        $query = $this->db->get($this->_table);
        if($query->num_rows()==0){
            return FALSE;
        }
        else{
            return $query->row_array();
        }
        
    }
}
?>