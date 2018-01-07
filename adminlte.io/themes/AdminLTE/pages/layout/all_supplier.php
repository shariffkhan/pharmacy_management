  <?php 
    require_once("classes/Connection.php");
    require_once("classes/Supplier.php");
    $supplier=new Supplier();

    if(isset($_GET['delete_id'])){
      $id=$_GET['delete_id'];

      $supplier->delete_supplier($id);
    }

    if(isset($_POST['edit_supp'])){
      $id=$_POST['id'];
      $name=$_POST['name'];
      $phone=$_POST['phone'];
      $location=$_POST['location'];
      $address=$_POST['address'];
      $comment=$_POST['comment'];

      $supplier->change_supplier($id,$name,$phone,$location,$address,$comment);
    }
   ?>
<!DOCTYPE html>
<html>

<head>
  <?php include 'fixed/header.php'; ?>
  <!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini">

  <?php include 'fixed/header_nav_fixed.php'; ?>

  <!-- =============================================== -->

    <?php include 'fixed/sidebar_fixed.php'; ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
    <?php include 'content_files/total_supplier_content.php'; ?>
<!-- end content_wrapper -->

  
  <?php include 'fixed/footer.php'; ?>

  <!-- DataTables -->
<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script>
          
</script>

  </body>

<!-- Mirrored from adminlte.io/themes/AdminLTE/pages/layout/fixed.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Dec 2017 10:53:56 GMT -->
</html>