<?php include 'includes/session.php'; ?>
<?php
  $where = '';
  $catid ='';
  if(isset($_GET['date_range'])){
    $catid = $_GET['date_range'];
    $where = 'WHERE Added_on >='.$catid;
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
        Enquiry List
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Enquiry List</li>
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
           <!--    <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat" id="addproduct"><i class="fa fa-plus"></i> New</a> -->
              <div class="pull-right">
              <form class="form-inline">
                  <div class="input-group">
                    <div class="input-group-addon">
                    </div>
                    <input type="date" class="form-control pull-right col-sm-8" id="reservation" name="date_range">
                  </div>
                  <button type="submit" class="btn btn-success btn-sm btn-flat" name="">Check</button>
                </form>
              </div>
            </div>
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Contact</th>
                  <th>Company</th>
                   <th>Comment</th>
                   <th>Added_on</th>
                  <th>Tools</th>
                </thead>
                <tbody>
                  <?php
                    $conn = $pdo->open();

                    try{
                      $now = date('Y-m-d');
                      $stmt = $conn->prepare("SELECT * FROM contact_us $where");
                      $stmt->execute();
                      foreach($stmt as $row){
                        echo "
                          <tr>
                          <td>".$row['ID']."</td>
                          <td>".$row['Name']."</td>
                          <td>".$row['Email']."</td>
                          <td>".$row['Contact']."</td>
                          <td>".$row['Company']."</td>
                          <td><a href='#description' data-toggle='modal' class='btn btn-info btn-sm btn-flat desc' data-id='".$row['ID']."'><i class='fa fa-search'></i> View</a></td>
                         <td>".$row['Added_on']."</td>
                            <td>";
                              if($row['Status']==1){
                                  echo "<button class='btn btn-sm btn-flat btn-info' disabled><a style='color: white;' href='?table=contact_us&type=status&operation=deactive&id=".$row['ID']."' >Done</a></button>";

              
                }else{
                   echo "<button class='btn btn-danger btn-sm  btn-flat'><a style='color: white;' href='?table=contact_us&type=status&operation=active&id=".$row['ID']."'>Pending</a></button>";
                }echo "
                              <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['ID']."' disabled><i class='fa fa-edit'></i>Edit</button>
                              <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['ID']."' disabled><i class='fa fa-trash'></i> Delete</button>
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
    <?php include 'includes/enquiry_modal.php'; ?>

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
      window.location = 'enquiry.php';
    }
    else{
      window.location = 'enquiry.php?date_range='+val;
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
    url: 'enquiry_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('#desc').html(response.Comment);
      $('.name').html(response.Name);
      $('.id').val(response.ID);
      $('#edit_name').val(response.prodname);
      $('#catselected').val(response.category_id).html(response.catname);
      $('#edit_price').val(response.Price);
      $('#edit_mrp').val(response.mrp);
      CKEDITOR.instances["editor2"].setData(response.Description);
      getCategory();
    }
  });
}
function getCategory(){
  $.ajax({
    type: 'POST',
    url: 'category_fetch.php',
    dataType: 'json',
    success:function(response){
      $('#category').append(response);
      $('#edit_category').append(response);
    }
  });
}
</script>
</body>
</html>
