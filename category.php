<?php 
require_once("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Add Product</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<!-- start hearder -->
<?php include('includes/header.php'); ?>
<!-- end header -->
  
  <!-- Left side column. contains the logo and sidebar -->
   <!-- left menu starts -->
      <?php include('includes/sidebar.php'); ?>
        <!-- left menu ends -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Category</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Category</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="category.php">
            <div class="form-group">
              <label for="">Category Name</label>
              <input type="text" name="category" class="form-control" required="required">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>

            <button type="submit" name="cat_sub" class="btn btn-primary" name="brand">Submit</button>
        </div>
      </div>

      </form>
      
    </div>
  </div>
  
      
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
 
      <div class="row"> <!-- body Start -->
 

       
 <div class="col-md-8 col-lg-offset-2">
  <?php 


if(isset($_POST['cat_sub']))
{
   
    $category = $_POST['category'];

   
  
    
  
$sql="INSERT INTO `category` (`id`, `category_name`) VALUES (NULL, '$category')";




if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo '

<div class="alert alert-success">
  <strong>Success!</strong> category successfully inserted.
</div>


';
   
}

?>


<!-- category table  -->
<div class="box">
            <div class="box-header">
              <h3 class="box-title">All Category</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody>

                  <tr>
                  
                  <th>Category  Name</th>
                  <th>Action</th>

                 

                </tr>
               
               
                
                

            <?php
  $sql="SELECT * FROM `category`";
  $sqle=mysqli_query($con,$sql);

  if($sqle){
while($row=mysqli_fetch_array($sqle)){


     echo " 
                <tr>
                  <td>$row[category_name]</td>
                 
                 
                  <td>

              

                  <a class=\"btn btn-danger\" href=\"cate_delete.php?id=$row[id]\" onclick=\"return confirm('Are you sure delete this Product ?')\">
                <i class=\"glyphicon glyphicon-trash icon-white\"></i>
                Delete
                </a>

                  </td>

                </tr>


               ";

                  }
                  }
 ?>




              </tbody>

            </table>
            </div>
            <!-- /.box-body -->
          </div>



       

      

</div>

      </div> <!-- /body -->
    
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



 
   <!-- footer start -->
 <?php include('includes/footer.php'); ?>
   <!-- footer end -->
 


</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
