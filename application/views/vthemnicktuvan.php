<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  
  xmlhttp.open("GET",'<?php echo base_url();?>index.php/ajax/ajax_level2/'+str,true);
  xmlhttp.send();
}
</script>






<?php
$ngaythang= date('d/m/Y');
  
	
	$thutu = array(
                        'name'        => 'thutu',
                        'id'          => 'thutu',
                        'width'          => '10px',
						'class'        => 'inp-form',
						'placeholder'  => 'Thứ tự ưu tiên để hiển thị sản phẩm trên cùng',
                    );

    $tennick = array(
                        'name'        => 'tennick',
                        'id'          => 'tennick',
                        'width'          => '10px',
						'class'        => 'inp-form',
                    );
    $link = array(
                        'name'        => 'link',
                        'id'          => 'link',
                        'width'          => '10px',
						'class'        => 'inp-form',
                    );
	
    $motangan = array(
                        'name'        => 'motangan',
                        'id'          => 'motangan',
                        
						
                    );
	
    $tukhoa = array(
                        'name'        => 'tukhoa',
                        'id'          => 'tukhoa',
                        'class'        => 'inp-form',
						
                    );
					
	$size = array(
                        'name'        => 'size',
                        'id'          => 'size',
                        'class'        => 'inp-form',
						
                    );
					
	$mau = array(
                        'name'        => 'mau',
                        'id'          => 'mau',
                        'class'        => 'inp-form',
						
                    );
					
	$giagoc = array(
                        'name'        => 'giagoc',
                        'id'          => 'giagoc',
                        'class'        => 'inp-form',
						
                    );		
				
	$giagiam = array(
                        'name'        => 'giagiam',
                        'id'          => 'giagiam',
                        'class'        => 'inp-form',

                    );
					
	$ngayketthuc = array(
                        'name'        => 'ngayketthuc',
                        'id'          => 'ngayketthuc',
                        'class'        => 'inp-form',
						
                    );
					
	$motanganseo = array(
                        'name'        => 'motanganseo',
                        'id'          => 'motanganseo',
                        
						
                    );
	$diemnoibat = array(
                        'name'        => 'diemnoibat',
                        'id'          => 'diemnoibat',
                        'class'        => 'inp-form',
						
                    );
	$dieukien = array(
                        'name'        => 'dieukien',
                        'id'          => 'dieukien',
                        'class'        => 'inp-form',
						
                    );
	$noidung = array(
                        'name'        => 'noidung',
                        'id'          => 'noidung',
                        'class'        => 'inp-form',
						
                    );
	$ngayketthuc = array(
                        'name'        => 'ngayketthuc',
                        'id'          => 'ngayketthuc',
                        'class'        => 'inp-form',
						
                    );
	$hinhthuc = array(
                        'name'        => 'hinhthuc',
                        'id'          => 'hinhthuc',
                        'class'        => 'inp-form',
						
                    );
	$trongluong = array(
                        'name'        => 'trongluong',
                        'id'          => 'trongluong',
                        'class'        => 'inp-form',
						
                    );
	
	
	
	
	$submit = array(
                        "name"=>"ok",
                        "value"=>"Thêm",
						
                    );
					
				
					
?>


<script type="text/javascript" src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>
 <link rel="stylesheet" href="<?php echo base_url();?>css/jquery-ui.css" />
    <script src="<?php echo base_url();?>js/jquery-1.8.3.js"></script>
    <script src="<?php echo base_url();?>js/jquery-ui.js"></script>

  







    




 



<div class="container-fluid">
        <div id="content-wrapper" class="row-fluid">
            <div class="span12">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="page-header">
                            <h1 class="pull-left">
                               
                                <span>Nick tư vấn</span>
                            </h1>
                            
                        </div>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12 box">
                        <div class="box-header blue-background">
                            <div class="title">Thêm nick tư vấn</div>
                            
                        </div>
                        <div class="box-content">
                            <form method="POST" enctype="multipart/form-data" accept-charset="utf-8" style="margin-bottom: 0;" class="form form-horizontal " >
															
                                
                                
                                <div class="control-group">
                                    <label for="validation_password" class="control-label">Tên: </label>
                                    <div class="controls">
                                    <?php echo form_input($tennick); ?>
									</div>
                                </div>
                                <div class="control-group">
                                    <label for="validation_password_confirmation" class="control-label">Link: </label>
                                    <div class="controls">
										<?php echo form_input($link); ?>
									</div>
                                </div>
								
							
								
								
								
								
								<div class="control-group">
                                    <label for="validation_password_confirmation" class="control-label">Loại nick tư vấn: </label>
                                    <div class="controls">
										<select  name="iddanhmucnicktuvan" class="styledselect_form_1" required="required">
					
                    
                    <option value="" selected>Chọn</option>
				<?php foreach($danhmucnicktuvan as $item)
				{
				
				
				?>
                    <option value="<?php echo $item['id'];?>"><?php echo $item['ten'];?></option>
                 <?php }   ?>
                

                </select>
									</div>
                                </div>
								
								
								
                                <div style="margin-bottom:0" class="form-actions">
                                    <button type="submit" name="ok" class="btn btn-primary">
                                        <i class="icon-save"></i>
                                        Thêm
                                    </button>
									<button type="reset" name="reset" class="btn btn-warning">
                                        <i class="icon-remove"></i>
                                        Hủy
                                    </button>
									
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
               
            </div>
        </div>
    </div>