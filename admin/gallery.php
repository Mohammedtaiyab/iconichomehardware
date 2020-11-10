<?php include 'includes/session.php'; ?>
<?php
  $where = '';
  if(isset($_GET['product'])){
    $catid = $_GET['product'];
    $where = 'WHERE Product_Id ='.$catid;
  }

?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gallery List
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li>Products</li>
        <li class="active">Gallery List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat" id="addproduct"><i class="fa fa-plus"></i> New</a>
              <div class="pull-right">
                <form class="form-inline">
                  <div class="form-group">
                    <label>Category: </label>
                    <select class="form-control input-sm" id="select_category">
                      <option value="0">ALL</option>
                      <?php
                        $conn = $pdo->open();

                        $stmt = $conn->prepare("SELECT * FROM product");
                        $stmt->execute();
                        $catid='';
                        foreach($stmt as $crow){
                          $selected = ($crow['ID'] == $catid) ? 'selected' : ''; 
                          echo "
                            <option value='".$crow['ID']."' ".$selected.">".$crow['Name']."</option>
                          ";
                        }

                        $pdo->close();
                      ?>
                    </select>
                  </div>
                </form>
              </div>
            </div>
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered ">
                <thead>
                	<th>Product ID</th>
                  <th>Variant Type</th>
                  <th>Variant</th>
                  <th>Photo</th>
                  <th>Price</th>
                  <th>Tools</th>
                </thead>
                <tbody>
                  <?php
                    $conn = $pdo->open();

                    try{
                      $now = date('Y-m-d');
                      $stmt = $conn->prepare("SELECT * FROM gallery $where");
                      $stmt->execute();
                      foreach($stmt as $row){
                        $image = (!empty($row['Image'])) ? '../images/product/'.$row['Image'] : '../images/noimage.jpg';
                       // $counter = ($row['date_view'] == $now) ? $row['counter'] : 0;
                        echo "
                          <tr>
                          <td>".$row['Product_Id']."</td>
                          <td>".$row['Variant_type']."</td>
                            <td>".$row['Variant']."</td>
                            <td>
                              <img src='".$image."' height='30px' width='30px'>
                              <span class='pull-right'><a href='#edit_photo' class='photo' data-toggle='modal' data-id='".$row['Id']."'><i class='fa fa-edit'></i></a></span>
                            </td>
                           
                            <td>₹ ".number_format($row['Price'],2)."</td>
                         
                            <td>";
                               if($row['Status']==1){
                                  echo "<button class='btn btn-sm btn-flat btn-info'><a style='color: white;' href='?table=gallery&type=status&operation=deactive&id=".$row['Id']."'>Active</a></button>";
                }else{
                   echo "<button class='btn btn-danger btn-sm  btn-flat'><a style='color: white;' href='?table=gallery&type=status&operation=active&id=".$row['Id']."'>Deactive</a></button>";
                }echo "
                              <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['Id']."' disabled><i class='fa fa-edit'></i> Edit</button>
                              <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['Id']."'><i class='fa fa-trash'></i> Delete</button>
                            </td>
                          </tr>
                        ";
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }

                    $pdo->close();
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
     
  </div>
  	<?php include 'includes/footer.php'; ?>
    <?php include 'includes/gallery_modal.php'; ?>
    <?php include 'includes/gallery_modal2.php'; ?>

</div>
<!-- ./wrapper -->

<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.photo', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.desc', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

  $('#select_category').change(function(){
    var val = $(this).val();
    if(val == 0){
      window.location = 'gallery.php';
    }
    else{
      window.location = 'gallery.php?product='+val;
    }
  });

  $('#addproduct').click(function(e){
    e.preventDefault();
    getCategory();
  });

  $("#addnew").on("hidden.bs.modal", function () {
      $('.append_items').remove();
  });

  $("#edit").on("hidden.bs.modal", function () {
      $('.append_items').remove();
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'gallery_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
       $('.glryid').val(response.Id);
      $('.prodid').val(response.prodid);
      $('#edit_name').val(response.vatname);
      $('#catselected').val(response.prodid).html(response.prodname);
      $('#edit_price').val(response.Price);
      CKEDITOR.instances["editor2"].setData(response.description);
      getCategory();
    }
  });
}
function getCategory(){
  $.ajax({
    type: 'POST',
    url: 'products_fetch.php',
    dataType: 'json',
    success:function(response){
      $('#product').append(response);
      $('#edit_category').append(response);
    }
  });
}
</script>
</body>
</html>
