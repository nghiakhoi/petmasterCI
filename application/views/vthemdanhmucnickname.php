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
						'placeholder'  => 'Thứ tự ưu tiên để hiển thị trên cùng',
                    );

	
   
					
	
	$link = array(
                        'name'        => 'link',
                        'id'          => 'link',
                        'class'        => 'inp-form',
						
                    );
	$ten = array(
                        'name'        => 'ten',
                        'id'          => 'ten',
                        'class'        => 'inp-form',
						
                    );
	$tieude2 = array(
                        'name'        => 'tieude2',
                        'id'          => 'tieude2',
                        'class'        => 'inp-form',
						
                    );
	$options = array(
                        'name'        => 'options',
                        'id'          => 'options',
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
                               
                                <span>Danh mục nickname</span>
                            </h1>
                            
                        </div>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12 box">
                        <div class="box-header blue-background">
                            <div class="title">Thêm Danh mục nickname</div>
                            
                        </div>
                        <div class="box-content">
                            <form action="" method="POST" enctype="multipart/form-data" accept-charset="utf-8" style="margin-bottom: 0;" class="form form-horizontal " >
															
                                
                                <div class="control-group">
                                    <label for="validation_email" class="control-label">Tên: </label>
                                    <div class="controls">
                                        <?php echo form_input($ten); ?>
                                    </div>
                                </div>
                                
                                
                                
								<div class="control-group">
                                    <label  class="control-label">Hình icon: </label>
                                    <div class="controls">
										<input type="file"  name="img" id="img" required="required">
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