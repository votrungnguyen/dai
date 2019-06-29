<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
<thead>
   <tr>
   <th>idLT</th> 
   <th>Tên</th>  
   <th>Thứ Tự</th>  
   <th>Ẩn Hiện</th>
   <th>Ten_KhongDau</th>  
   <th>Thể loại</th> 
   <th>Ngôn ngữ</th>
   <th>Cập nhật/Xóa</th>
</tr>
</thead>
<tbody>
<?php $kq = $qt->ListLoaiTin(); ?>
<?php while ($rowLT = $kq->fetch_assoc() ) { ?>
<tr>
<td><?=$rowLT['idLT']?></td>
<td><?=$rowLT['Ten']?></td>
<td><?=$rowLT['ThuTu']?></td>
<td><?=($rowLT['AnHien']==1)?"Đang hiện":"Đang ẩn"?></td>
<td> <?=$rowLT['Ten_KhongDau']?></td>
<td><?=$rowLT['TenTL']?></td>
<td><?=($rowLT['lang']=='en')?"Tiếng Anh":"Tiếng Việt"?></td>
<td>
<a href="?p=loaitin_sua&idLT=<?=$rowLT['idLT']?>" class="btn bg-blue waves-effect">Cập nhật</a> &nbsp;
<a href="loaitin_xoa.php?idLT=<?=$rowLT['idLT']?>" class="btn bg-red waves-effect" onClick="return confirm('Xóa hả')">Xóa</a>
</td>
</tr>
<?php } ?>
</tbody>
</table>


<!-- JQuery DataTable Css -->
<link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
<!-- JQuery DataTable Css -->
<link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
<!-- Jquery DataTable Plugin Js -->
<script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
<!-- Custom Js -->
<script src="js/pages/tables/jquery-datatable.js"></script>
