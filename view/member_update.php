<div class="content">
        <div class="header">
            <h1 class="page-title"></strong></h1>
                    <ul class="breadcrumb">
            <li><a href="<?php echo $app_path?>">Home</a> </li>
            <li class="active">Edit</li>
        </ul>

        </div>
        <div class="main-content" >
  </span>  
<ul class="nav nav-tabs" style="width:60%">
  <li class="active"><a href="#home" data-toggle="tab">Thông Tin Cơ Bản</a></li>
  <li><a href="#profile" data-toggle="tab"></a></li>
</ul>

<div class="row" >
  <div class="col-md-4" style="width:60%" >
    <br>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
      <form id="tab" action="." method="post">
        <div class="form-group">
        <label style="font-weight:bold">First Name</label>
        <input type="text" value="<?php echo $edit['firstname'];?>" class="form-control" name="firstname"  >
        </div>
        <div class="form-group">
        <label style="font-weight:bold">Last Name</label>
        <input type="text"  value="<?php echo $edit['lastname'];?>" name="lastname"  class="form-control"  >
                <input type="hidden"  value="<?php echo $edit['id'];?>" name="id"  class="form-control">

        </div>
        <div class="form-group">
        <label style="font-weight:bold">Địa chỉ Email</label>
        <input type="text" value="<?php echo $edit['email'];?>" class="form-control" name="email" >
        </div>
         <div class="form-group">
        <label style="font-weight:bold">Địa chỉ Email</label>
        <input type="text" value="<?php echo $edit['phonenumber'];?>" class="form-control" name="phone" >
        </div>
        <div class="form-group">
        <label style="font-weight:bold">Ngày sinh</label>
        <input type="text" value="<?php echo $edit['date'];?>" class="form-control" name="date" >
        </div>
        
    </div>
       </div>
 <div class="panel panel-default">
        <p class="panel-heading"> </p>
        <div class="panel-body gallery" style="text-align:left">
                 <label>Chức vụ <select name="category" required="" >
                 <option value=""></option>
                  		 <?php foreach ($category as $categories){
                                echo '<option value="'.$categories['id'].'">'.$categories['level_name'].'</option>';
                            }?></select> </label> | 
		 			<label> Tình trạng <select name="stt" required="" >
                		<option value=""></option>
						<option value="0">Tắt</option>  
            			<option value="1">Bật</option></select></label> | 
		 			 
            <div class="clearfix"></div>
        </div>
    </div>       

  <div class="tab-pane fade" id="profile">
  <div id="tab2">
  <div class="form-group">
  </div>
  <div>
  </div>
  </div>
  </div>
  <div class="btn-toolbar list-toolbar">
      <button class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
      <input type="hidden" name="action" value="update"/>
      <input type="hidden" name="idmem" value="<?php echo intval($_GET['idmem']);?>"/>
  </form>
    </div>
  </div>
</div>
<div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
       
      </div>
    
     
    </div>
  </div>
</div>


           
