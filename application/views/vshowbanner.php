<div class="container-fluid">
<div id="content-wrapper" class="row-fluid">
<div class="span12">
<div class="row-fluid">
    <div class="span12">
        <div class="page-header">
            <h1 class="pull-left">
                
                <span>Banner</span>
            </h1>
           
        </div>
    </div>
</div>

<div class="row-fluid">
<div style="margin-bottom:0;" class="span12 box bordered-box orange-border">
<div class="box-header blue-background">
    <div class="title">Danh sách banner</div>
    
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
        Thứ tự
    </th>
	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 369px;" aria-label="
        E-mail
    : activate to sort column ascending">
        Link
    </th>
	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 304px;" aria-label="
        Status
    : activate to sort column ascending">
        Hình ảnh
    </th>
	
	
	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 143px;" aria-label=": activate to sort column ascending">Tùy chọn</th></tr>
</thead>

<tbody role="alert" aria-live="polite" aria-relevant="all">
<?php foreach($users as $item)
					{
					
					?>

<tr class="odd">
    <td class="  sorting_1"><?php echo $item['thutu'];?></td>
    <td class=" "><?php echo $item['link'];?></td>
	<td class=" "><img width="100px" height="100px" src="<?php echo base_url();?>uploads/<?php echo $item['hinhanh'];?>"  border="0" /></td>
	
    <td class=" ">
        <div class="text-right">
            <a href="<?php echo base_url();?>cadmin/suabanner/<?php echo $item['idbanner'];?>" class="btn btn-success btn-mini">
                <i class="icon-edit"></i>
            </a>
            <a href="<?php echo base_url();?>cadmin/xoabanner/<?php echo $item['idbanner'];?>" onclick="return confirm('Chắc chắn muốn xóa banner này?  ');" class="btn btn-danger btn-mini">
                <i class="icon-remove"></i>
            </a>
        </div>
    </td>
</tr>
<?php };?>

</tbody></table>

<div class="row-fluid">
<div class="span12 text-right">
<div class="dataTables_paginate paging_bootstrap pagination pagination-small">
<ul>


<?php

                    if($num_rows>0){

                        echo $link;

                        echo " | Tổng số : ".$num_rows;

                    }

                  ?>



</ul>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
<hr class="hr-double">
</div>
</div>
</div>