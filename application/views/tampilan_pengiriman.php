<?php include 'include/head.php';?>

<?php include 'include/header.php';?>
<?php include 'include/sidebar.php';?>

<?php include 'include/breadcrumb.php'; ?>
<html>
<body>
  <table style="margin-left: 30px; margin: 20px;">
    <?php echo form_open_multipart('admin/prosespengiriman'); ?>
    <h2 style="text-align: center; margin-top: 10px;">Kirim Pesan</h2>
    <tbody>
      <tr>
       <td>Ke</td>
       <td><input type="email" name="to" style="margin-bottom: 10px;"></td>
     </tr>
     <tr>
       <td>Dari</td>
       <td><input type="email" name="from" style="margin-bottom: 10px;"></td>
     </tr>
     <tr>
       <td>Subject</td>
       <td><input type="text" name="subject" style="margin-bottom: 10px;"></td>
     </tr>
     <tr>
       <td>Isi Pesan</td>
       <td><textarea name="isi"></textarea></td>
     </tr>
     <td></td>
     <br>
     <td><input type="submit" value="Kirim" data-toggle="modal" data-target="#myModal"></td>
     <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog modal-md">
        <div style="background-color: #3c8dbc; " class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 style="text-align: center;" class="modal-title">Halo!!!</h4>
          </div>
          <div class="modal-body">
          <p style="text-align: center;">Sudah Terkirim Kepada Client</p>
          </div>
        </div>
      </div>
    </div>
  </tr>
  <?php echo form_close();?>
</table>
</body>
</html>
<?php include 'include/footer.php';?>
<?php include 'include/foot.php';?> 