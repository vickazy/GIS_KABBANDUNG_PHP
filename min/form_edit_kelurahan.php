 <?php include("../template/header_admin.php");?>

  <body>
 <style>
      #map-canvas {
        height: 200px;
      
      }
      #message{
        color:red;
      }
    </style>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
       <?php include("../template/menu_atas_admin.php");?>
    </div>

    <div class="container-fluid">
      <sdiv class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <?php include("../template/menu_samping_admin.php");?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h2>Form Edit Kelurahan </h2>
            <?php
			$id=$_GET['id'];
                $query = "select * from kelurahan where IDKelurahan='$id'";
                $q = mysql_query($query) or die(mysql_error());
                $data = mysql_fetch_array($q);
             ?>
        <form class="form-horizontal" method="POST" action="proses_edit_kelurahan.php"  enctype="multipart/form-data">
        <div class="form-group">
          <label for="edit_kelurahan" class="col-sm-2 control-label">ID Kelurahan </label>
          <div class="col-sm-10">
            <input type="text" name="IDKelurahan" value="<?php echo $data['IDKelurahan'];?>" readonly>
          </div>
        </div>
         
         <div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Nama</label>
          <div class="col-sm-10">
           <textarea class="form-control" rows="3" id="Nama" name="Nama" required><?php echo $data['Nama'];?></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Update</button>
          </div>
        </div>
      </form>
        </div>
      </div>
    </div>
  </body>
</html>
