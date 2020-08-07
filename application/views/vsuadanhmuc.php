<script>

function showUser() {

	var giatri = document.getElementById('loaidoan').value;

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

  

  xmlhttp.open("POST",'<?php echo base_url();?>index.php/ajax1/ajax_level2/',true);

  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");

  xmlhttp.send("iddetai=<?php echo $this->uri->segment(3);?>&idloaidoan="+giatri);

}

</script>

<?php

$ngaythang= date('d/m/Y');



    $tendanhmuccha = array(

                        'name'        => 'tendanhmuccha',

                        'id'          => 'tendanhmuccha',

                        'width'          => '10px',

						'class'        => 'inp-form',

						"value" => $info["tendanhmuc"],

                    );

	$tukhoa = array(

                        'name'        => 'tukhoa',

                        'id'          => 'tukhoa',

                        'width'          => '10px',

						'class'        => 'inp-form',

						"value" => $info["tukhoa"],

                    );
	
	$des = array(

                        'name'        => 'des',

                        'id'          => 'des',

                        'width'          => '10px',

						'class'        => 'inp-form',

						"value" => $info["des"],

                    );
	$motangan = array(

                        'name'        => 'motangan',

                        'id'          => 'motangan',

                        'width'          => '10px',

						'class'        => 'inp-form',

						"value" => $info["motangan"],

                    );
	$noidung = array(

                        'name'        => 'noidung',

                        'id'          => 'noidung',

                        'width'          => '10px',

						'class'        => 'inp-form',

						"value" => $info["noidungdichvu"],

                    );

    $vitri = array(

                        'name'        => 'vitri',

                        'id'          => 'vitri',

                        "value" => $info["vitri"],

						'width'          => '10px',

						'class'        => 'inp-form',

						

						

                    );

					

	

	

	

	$submit = array(

                        "name"=>"ok",

                        "value"=>"Sửa",

						

                    );

					

					

?>



<?php //print_r($info);?>



<script type="text/javascript" src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>

 <link rel="stylesheet" href="<?php echo base_url();?>css/jquery-ui.css" />

    <script src="<?php echo base_url();?>js/jquery-1.8.3.js"></script>

    <script src="<?php echo base_url();?>js/jquery-ui.js"></script>

  

  <script>





$(function($) {

    $.datepicker.regional['vi'] = {

        closeText: 'Đóng',

        prevText: '&#x3c;Trước',

        nextText: 'Tiếp&#x3e;',

        currentText: 'Hôm nay',

        monthNames: ['Tháng Một', 'Tháng Hai', 'Tháng Ba', 'Tháng Tư', 'Tháng Năm', 'Tháng Sáu',

            'Tháng Bảy', 'Tháng Tám', 'Tháng Chín', 'Tháng Mười', 'Th.Mười Một', 'Th.Mười Hai'],

        monthNamesShort: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6',

            'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],

        dayNames: ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy'],

        dayNamesShort: ['CN', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7'],

        dayNamesMin: ['CN', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7'],

        weekHeader: 'Tu',

        dateFormat: 'dd/mm/yy',

        firstDay: 0,

        isRTL: false,

        showMonthAfterYear: false,

        yearSuffix: ''

    };

    $.datepicker.setDefaults($.datepicker.regional['vi']);

});

</script>  



<div class="container-fluid">
        <div id="content-wrapper" class="row-fluid">
            <div class="span12">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="page-header">
                            <h1 class="pull-left">
                               
                                <span>Danh mục</span>
                            </h1>
                            
                        </div>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12 box">
                        <div class="box-header blue-background">
                            <div class="title">Sửa danh mục</div>
                            
                        </div>
                        <div class="box-content">
                            <form method="POST" enctype="multipart/form-data" style="margin-bottom: 0;" class="form form-horizontal validate-form" >
								
								<div class="control-group">
                                    <label for="validation_select" class="control-label">Thuộc danh mục:</label>
                                    <div class="controls">
                                        <select name="danhmuccha"  required="true">
										<option value="0">Danh Mục Cha</option>
                                        
<?php
					function cate_parent($data, $parent=0, $str="==", $selected=0, $ids=null){
    foreach($data as $val){
        $id = $val['id'];
        $name = $val['tendanhmuc'];
        if($val['parent_id']==$parent){
            if($selected!=0 && $id==$selected){
                echo "<option value='$id' selected='selected'>$str $name</option>";
            }else{
                if( $id==$ids){
                   echo "<option value='$id' disabled >$str $name</option>"; 
               }else{
                echo "<option value='$id' >$str $name</option>";
            } 
        }

        cate_parent($data, $id, $str."==",$selected,$ids);
    }
}
}

					cate_parent($danhmuccha, 0, "==", $info['parent_id'],$info['id']);?>									
											
										</select>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label for="validation_name" class="control-label">Ẩn / Hiện danh mục: </label>
									
                                    <div class="controls">
                                        <select  name="anhien" class="styledselect_form_1" style="width:100px;">
		
				
                   <option value="<?php if($info['anhien']==0) echo "0"; else echo "1";?>"><?php if($info['anhien']==0) echo "Hiện"; else echo "Ẩn";?></option>
					<option value="<?php if($info['anhien']==0) echo "1"; else echo "0";?>"><?php if($info['anhien']==0) echo "Ẩn"; else echo "Hiện";?></option>
					
                 
                </select>
				
                                    </div>
                                </div>
									
									
                                        <select  name="anhienthem" class="styledselect_form_1" style="width:100px; display:none">
		
				
                   <option value="<?php if($info['anhienthem']==0) echo "0"; else echo "1";?>"><?php if($info['anhienthem']==0) echo "Hiện"; else echo "Ẩn";?></option>
					<option value="<?php if($info['anhienthem']==0) echo "1"; else echo "0";?>"><?php if($info['anhienthem']==0) echo "Ẩn"; else echo "Hiện";?></option>
					
                 
                </select>
			
                                   
							
                                <div class="control-group">
                                    <label for="validation_name" class="control-label">Tên danh mục: </label>
									
                                    <div class="controls">
                                        <?php echo form_input($tendanhmuccha); ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="validation_email" class="control-label">Vị trí: </label>
                                    <div class="controls">
                                        <?php echo form_input($vitri); ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="validation_password" class="control-label">Keyword: </label>
                                    <div class="controls">
                                    <?php echo form_input($tukhoa); ?>
									</div>
                                </div>
                                <div class="control-group">
                                    <label for="validation_password_confirmation" class="control-label">Description</label>
                                    <div class="controls">
										<?php echo form_input($des); ?>
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
                                    <label  class="control-label">Hình ảnh chính: </label>
                                    <div class="controls">
										<input type="file"  name="img" id="img" >
										<img width="100px" height="100px" src="<?php echo base_url();?>uploads/<?php echo $info['hinhdaidien'];?>"  border="0" />
			
									</div>
                                </div>
								
								<div class="control-group">
                                    <label  class="control-label">Hình ảnh phụ: </label>
                                    <div class="controls">
										<input type="file" name="imglist[]" id="imglist" multiple="multiple" >
										<?php $hinhanh=explode("|", $info['hinhanhphu']); 
	for($j=0;$j<count($hinhanh);$j++)
	{
	if($hinhanh[$j]!=null)
	{
?>
<img  src="<?php echo base_url();?>uploads/<?php echo $hinhanh[$j];?>" width="44" height="44"  />
<?php }else break;}?>
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