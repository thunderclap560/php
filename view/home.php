 <div class="content">
        <div class="header">
                  <h1 class="page-title">Dashboard</h1>
                    <ul class="breadcrumb">
            <li><a href="<?php echo $app_path ?>">Home</a> </li>  
            <li><a href="<?php echo $app_path ?>?action=logout">Thoát</a> </li>            
        </ul>
        </div>
        <div class="main-content">
			<?php if(isset($_GET['del']) ){echo '<div class="alert alert-error" >Xóa Thành Công </div>';}?>
            <?php if(isset($_GET['add']) ){echo '<div class="alert alert-error" >Thêm Thành Công </div>';}?>
<div class="row">
    <div class="col-sm-6 col-md-6 " style="width:100%">
        <div class="panel panel-default">
            <div class="panel-heading no-collapse"> <h4 style="color:#F00"><img src="images/new.png" width="20" height="20"/> Danh mục thành viên</h4><span class="label label-warning"> 
                    <form action="." method="get"><input type="hidden" name="add_product" value="add_product"/>
                   <a href="<?php echo $app_path?>?action=add"> <i class="fa fa-plus"></i> Thêm thành viên</a>
                    </form>
                 </span>
            
            </div>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
				 <th>Email</th>
               	<th>Phone</th>
                  <th>Ngày sinh</th>
                  <th>Cấp độ</th>
                  <th>Tình Trạng</th>
                  <th></th> 
                  <th></th> 
                </tr>
              </thead>
              
              <tbody>
              <?php 
			  	$member= get_member();
				foreach ($member as $members){
				 ?>
                <tr>
               <td <?php if ($members['status']== 0) { echo 'style="background-color:#FFCECE"';} ?>><?php echo $members['firstname'];?></td>
				<td <?php if ($members['status']== 0) { echo 'style="background-color:#FFCECE"';} ?>><?php echo $members['lastname'];?></td>
			   	<td <?php if ($members['status']== 0) { echo 'style="background-color:#FFCECE"';} ?>><?php echo $members['email'];?></td>
             	 <td <?php if ($members['status']== 0) { echo 'style="background-color:#FFCECE"';} ?>><?php echo $members['phonenumber'];?></td>
             	<td <?php if ($members['status']== 0) { echo 'style="background-color:#FFCECE"';} ?>><?php echo $members['date'];?></td>
               	<td><?php if ($members['level']==1){echo 'Nhân viên';}else{ echo 'Trưởng phòng';}?></td>
                <td><?php if ($members['status']!= ""){echo 'Đang hoạt động';}else{ echo 'Vô hiệu hóa';}?></td>
				<td><a href="<?php echo $app_path;?>?action=edit&idmem=<?php echo $members['id'];?>"><i class="fa fa-pencil"></i></a></td>
				<td><a href="javascript:del('<?php echo $members["id"];?>')"><i class="fa fa-trash-o"></i></a></td>
                </tr>
               
                <?php }?>
              </tbody>
            </table>
        </div>
    </div>