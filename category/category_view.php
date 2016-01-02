<?php include('../view/header_admin.php');?>

    <div class="content">
        <div class="header">
            <div class="stats">
    <p class="stat"><span class="label label-info">5</span> Tickets</p>
    <p class="stat"><span class="label label-success">27</span> Tasks</p>
    <p class="stat"><span class="label label-danger">15</span> Overdue</p>
</div>

            <h1 class="page-title">Dashboard</h1>
                    <ul class="breadcrumb">
            <li><a href="<?php echo $app_path?>">Home</a> </li>
            <li class="active">
        	<?php $category=getcategory($category_id);
		   echo $category['level_name']; ?></li>
        </ul>

        </div>
        <div class="main-content">
            





<div class="row">
    <div class="col-sm-6 col-md-6 " style="width:100%">
        <div class="panel panel-default">
            <div class="panel-heading no-collapse"> <h4 style="color:#F00"><img src="../images/new.png" width="20" height="20"/> Danh mục thành viên</h4><span class="label label-warning"><a href="">Xem tất cả</a></span></div>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
				 <th>Email</th>
               	<th>Phone</th>
                  <th>Ngày sinh</th>
                  <th>Cấp độ</th>
                  <th></th> 
                  <th></th> 
                </tr>
              </thead>
              <tbody>
              <?php 
			 foreach ($result as $results){
				 ?>
                <tr>
                <td><?php echo $results['firstname'];?></td>

                <td><?php echo $results['lastname'];?></td>
			   <td><?php echo $results['email'];?></td>
                <td><?php echo $results['phonenumber'];?></td>
                <td>0<?php echo $results['date'];?></td>
                  <td><?php echo $results['level'];?></td>

	                  

                <td><a href="<?php echo $app_path;?>?action=edit">Chi Tiết</a></td>
     			<!-- <td><a href="javascript:check_Delete('<?php echo $orders["orderID"];?>')">Xóa </a></td> -->
				<td><a href="">Xóa</a></td>
                </tr>
               
                <?php }?>
              </tbody>
            </table>
            <?php $pagelist = $p->pagesList($_GET['page'],$pages);
            echo "<p align='center'>".$pagelist."</p>";?>	
        </div>
    </div>
		
    
   


       <?php include('../view/footer_admin.php');?>


