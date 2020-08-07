<?php

$ngaythang= date('d/m/Y');

    $tendmtintuc = array(

                        'name'        => 'tendmtintuc',

                        'id'          => 'tendmtintuc',

                        'width'          => '10px',

						'class'        => 'inp-form',
						
						'required' => "true"

                    );

					$keyword = array(

                        'name'        => 'keyword',

                        'id'          => 'keyword',

                        'width'          => '10px',

						'class'        => 'inp-form',
						'required' => "true"

                    );
					
	$des = array(

                        'name'        => 'des',

                        'id'          => 'des',

                        'width'          => '10px',

						'class'        => 'inp-form',
						'required' => "true"

                    );

	$vitri = array(

                        'name'        => 'vitri',

                        'id'          => 'vitri',

                        'width'          => '10px',

						'class'        => 'inp-form',
						'required' => "true"

                    );

			

	$submit = array(

                        "name"=>"ok",

                        "value"=>"Đăng Nhập",

						'class'        => 'button',

						'style' => 'width:100px;height:40px;background:#3a3a3a;border-radius:30px;',

                    );

?>



<?php //print_r($data['khoahoc']);?>

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
                               
                                <span>Danh mục tin tức</span>
                            </h1>
                            
                        </div>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12 box">
                        <div class="box-header blue-background">
                            <div class="title">Thêm danh mục tin tức</div>
                            
                        </div>
                        <div class="box-content">
                            <form method="POST" style="margin-bottom: 0;" class="form form-horizontal validate-form" >
								
								
								
								<div class="control-group">
                                    <label for="validation_name" class="control-label">Ẩn / Hiện danh mục: </label>
									
                                    <div class="controls">
                                        <select  name="anhien" class="styledselect_form_1" style="width:100px;">
		
				
                    <option value="0">Hiện</option>
					<option value="1">Ẩn</option>
                 
                </select>
				
                                    </div>
                                </div>
								
								
                                        <select  name="anhienthem" class="styledselect_form_1" style="width:100px; display:none">
		
				
                    <option value="0">Hiện</option>
					<option value="1">Ẩn</option>
                 
                </select>
				
                                  
							
                                <div class="control-group">
                                    <label for="validation_name" class="control-label">Tên danh mục tin tức: </label>
									
                                    <div class="controls">
                                        <?php echo form_input($tendmtintuc); ?>
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
                                    <?php echo form_input($keyword); ?>
									</div>
                                </div>
                                <div class="control-group">
                                    <label for="validation_password_confirmation" class="control-label">Description</label>
                                    <div class="controls">
										<?php echo form_input($des); ?>
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

