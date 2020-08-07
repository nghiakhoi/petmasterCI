<div class="container-fluid">
<div id="content-wrapper" class="row-fluid">
<div class="span12">
<div class="row-fluid">
    <div class="span12">
        <div class="page-header">
            <h1 class="pull-left">
                
                <span>Yêu Cầu</span>
            </h1>
           
        </div>
    </div>
</div>

<div class="row-fluid">
<div style="margin-bottom:0;" class="span12 box bordered-box orange-border">
<div class="box-header blue-background">
    <div class="title">Danh sách yêu cầu</div>
    
</div>
<div class="box-content box-no-padding">
<div class="responsive-table">
<div class="scrollable-area">
<div role="grid" class="dataTables_wrapper form-inline" id="DataTables_Table_0_wrapper">
<div class="row-fluid">
<div class="span12 text-right"><div class="dataTables_filter" id="DataTables_Table_0_filter"><label>Search: <input type="text" aria-controls="DataTables_Table_0"></label></div></div></div><table style="margin-bottom:0;" class="data-table table table-bordered table-striped dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
<thead>
<tr role="row">
<th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 172px;" aria-sort="ascending" aria-label="
        Name
    : activate to sort column descending">
        Mã yêu cầu
    </th>
	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 369px;" aria-label="
        E-mail
    : activate to sort column ascending">
        Họ tên khách
    </th>
	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 369px;" aria-label="
        E-mail
    : activate to sort column ascending">
        Phone
    </th>
	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 369px;" aria-label="
        E-mail
    : activate to sort column ascending">
        Địa chỉ
    </th>
	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 369px;" aria-label="
        E-mail
    : activate to sort column ascending">
        Ngày yêu cầu
    </th>

	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 143px;" aria-label=": activate to sort column ascending">Tùy chọn</th></tr>
</thead>

<tbody role="alert" aria-live="polite" aria-relevant="all">
<?php $dem=0; foreach($users as $item)
					{
					
					?>

<tr class="odd">
    <td class="  sorting_1"><?php echo $item['id'];?>
    <input type="hidden" name="idyeucau<?php echo $dem;?>" id="idyeucau<?php echo $dem;?>" value="<?php echo $item['id'];?>" />
    </td>
    <td class=" "><?php echo $item['hoten'];?></td>
    <td class=" "><?php echo $item['phone'];?></td>
    <td class=" "><?php echo $item['diachi'];?></td>
    <td class=" "><?php echo $item['ngaythang'];?></td>

    <td class=" ">
        <div class="text-right">
            <a onClick="showUserxx<?php echo $dem;?>();" data-target="#myModal" data-toggle="modal" href="#" class="btn btn-success btn-mini">
                <i class="icon-edit"></i>
            </a>
            <a href="<?php echo base_url();?>cadmin/xoayeucau/<?php echo $item['id'];?>" onclick="return confirm('Chắc chắn muốn xóa yêu cầu này?  ');" class="btn btn-danger btn-mini">
                <i class="icon-remove"></i>
            </a>
        </div>
    </td>
</tr>

<script>
function showUserxx<?php echo $dem;?>() {
	var giatri1 = document.getElementById('idyeucau<?php echo $dem;?>').value;
	
	var p1="idyeucau="+giatri1;
	
	
	
	var p=p1;
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("myModal").innerHTML=xmlhttp.responseText;
    }
  }
  
  xmlhttp.open("POST",'<?php echo base_url();?>index.php/ajax/ajax_showdonhang/',true);
  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xmlhttp.send(p);
}


</script>

<?php $dem++; };?>

</tbody></table></div>
</div>
</div>
</div>
</div>
</div>
<hr class="hr-double">
</div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
</div>



</div>