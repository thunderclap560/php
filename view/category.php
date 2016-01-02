

    <div class="content">
        <div class="header">
            <div class="stats">
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
            <div class="panel-heading no-collapse"> <h4 style="color:#F00">Danh sách thành viên</h4>
                <span class="label label-warning"> 
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
                  <th>Tình trạng</th> 
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
               	<td><?php if ($results['level']==1){echo 'Nhân viên';}else{ echo 'Trưởng phòng';}?></td>
                <td><?php if ($results['check']==1){echo 'Đang hoạt động';}else{ echo 'Vô hiệu hóa';}?></td>				
                <td><a href="<?php echo $app_path;?>?action=edit&idmem=<?php echo $results['id'];?>"><i class="fa fa-pencil"></i></a></td>
				<td><a href="javascript:del('<?php echo $members["id"];?>')"><i class="fa fa-trash-o"></i></a></td>
                </tr>
               
                <?php }?>
              </tbody>
            </table>
          
        </div>
    </div>  <?php $pagelist = $p->pagesList($_GET['page'],$pages);
            echo "<p align='center'>".$pagelist."</p>";?>	
		
    
   



