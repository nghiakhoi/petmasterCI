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

<script>
function showUser1(str) {
  if (str=="") {
    document.getElementById("txtHint1").innerHTML="";
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
      document.getElementById("txtHint1").innerHTML=xmlhttp.responseText;
    }
  }
  
  xmlhttp.open("GET",'<?php echo base_url();?>index.php/ajax/ajax_level2a/'+str,true);
  xmlhttp.send();
}
</script>


<?php //print_r($loaidoan);?>

<?php
$ngaythang= date('d/m/Y');
  


   

    $tieude = array(
                        'name'        => 'tieude',
                        'id'          => 'tieude',
                        'width'          => '10px',
						'class'        => 'inp-form',
						'value'        => $info['tieude'],
                    );
	
    $motangan = array(
                        'name'        => 'motangan',
                        'id'          => 'motangan',
                        'value'        => $info['motangan'],
						
                    );
	
    $tukhoa = array(
                        'name'        => 'tukhoa',
                        'id'          => 'tukhoa',
                        'class'        => 'inp-form',
						'value'        => $info['tukhoa'],
                    );
					
	
	
	
	$motangan = array(
                        'name'        => 'motangan',
                        'id'          => 'motangan',
                        
						'value'        => $info['motangan'],
                    );
	$motanganseo = array(
                        'name'        => 'motanganseo',
                        'id'          => 'motanganseo',
                        
						'value'        => $info['motanganseo'],
                    );


	$noidung = array(
                        'name'        => 'noidung',
                        'id'          => 'noidung',
                        'class'        => 'inp-form',
						'value'        => $info['noidung'],
                    );

    
					
	
	
	
	$submit = array(
                        "name"=>"ok",
                        "value"=>"Sửa",
						
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
                               
                                <span>Tin tức</span>
                            </h1>
                            
                        </div>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12 box">
                        <div class="box-header blue-background">
                            <div class="title">Sửa tin tức</div>
                            
                        </div>
                        <div class="box-content">
                            <form method="POST" enctype="multipart/form-data" accept-charset="utf-8" style="margin-bottom: 0;" class="form form-horizontal " >
															
                                <div class="control-group">
                                    <label for="validation_name" class="control-label">Ẩn / Hiện sản phẩm: </label>
									
                                    <div class="controls">
                                        <select  name="anhien" class="styledselect_form_1" style="width:100px;">
		
				
                   <option value="<?php if($info['anhien']==0) echo "0"; else echo "1";?>"><?php if($info['anhien']==0) echo "Hiện"; else echo "Ẩn";?></option>
					<option value="<?php if($info['anhien']==0) echo "1"; else echo "0";?>"><?php if($info['anhien']==0) echo "Ẩn"; else echo "Hiện";?></option>
					
                 
                </select>
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label for="validation_password" class="control-label">Tiêu đề: </label>
                                    <div class="controls">
                                    <?php echo form_input($tieude); ?>
									</div>
                                </div>
                                <div class="control-group">
                                    <label for="validation_password_confirmation" class="control-label">Từ khóa: </label>
                                    <div class="controls">
										<?php echo form_input($tukhoa); ?>
									</div>
                                </div>
								
								
								
								<div class="control-group">
                                    <label for="validation_password_confirmation" class="control-label">Mô tả ngắn SEO: </label>
                                    <div class="controls">
										<?php echo form_textarea($motanganseo)?>
									</div>
                                </div>
								
								
								<div class="control-group">
                                    <label for="validation_password_confirmation" class="control-label">Mô tả ngắn: </label>
                                    <div class="controls">
										<?php echo form_textarea($motangan)?><script type="text/javascript">
                        CKEDITOR.replace( 'motangan' );
						//CKEDITOR.config.height=100;
                </script>
				<br><span style="color:red;font-weight:bold;">*Ghi chú: Hình ảnh trong Mô tả ngắn nên đặt Width(Độ rộng)=600px, Height(Độ cao) sẽ tự động cân chỉnh</span>
									</div>
                                </div>
								<div class="control-group">
                                    <label for="validation_password_confirmation" class="control-label">Nội dung: </label>
                                    <div class="controls">
										<?php echo form_textarea($noidung)?><script type="text/javascript">
                        CKEDITOR.replace( 'noidung' );
						//CKEDITOR.config.height=100;
                </script>
				<br><span style="color:red;font-weight:bold;">*Ghi chú: Hình ảnh trong Nội dung nên đặt Width(Độ rộng)=600px, Height(Độ cao) sẽ tự động cân chỉnh</span>
									</div>
                                </div>
								
								<div class="control-group">
                                    <label for="validation_password_confirmation" class="control-label">Thuộc danh mục: </label>
                                    <div class="controls">
										<select  name="iddmtintuc" class="styledselect_form_1" required="required">
					
                    <?php 
				
				foreach($info1 as $item)
				{ if($info['iddmtintuc']!=$item['iddmtintuc']){?>

        <option value="<?php echo $item['iddmtintuc'];?>"><?php echo $item['tendmtintuc'];?></option>
        <?php }else{?>
          <option selected value="<?php echo $item['iddmtintuc'];?>"><?php echo $item['tendmtintuc'];?></option>
        <?php }?>
                 <?php };   ?>

                </select>
									</div>
                                </div>
								
								<div class="control-group">
                                    <label  class="control-label">Hình ảnh chính: </label>
                                    <div class="controls">
										<input type="file"  name="img" id="img" >
										<img width="100px" height="100px" src="<?php echo base_url();?>uploads/<?php echo $info['hinhdaidien'];?>"  border="0" />
			
									</div>
                                </div>
								
								
								
							
                                
                                
                                <div style="margin-bottom:0" class="form-actions">
                                    <button type="submit" name="ok" class="btn btn-primary">
                                        <i class="icon-save"></i>
                                        Sửa
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