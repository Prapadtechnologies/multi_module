 <!--Trailupload-->
 <?php
if($edit_data!=''){
    $name=$edit_data['first_name'];
    $email=$edit_data['email'];
    $password=$edit_data['password'];
    $mobile=$edit_data['mobile'];
    $adress=$edit_data['address'];

/*'password'=>md5($post['password'])*/
    $form_url='addclient/'.base64_encode($edit_data['id']);
}else{
    $this->session->set_userdata('last_page',current_url());
    $form_url='addclient';
}
?>
                    <div class="row">
                        <div class="col">
                                <section class="card">
                                    <div class="card-header">
                                        <form method="post" action="<?=base_url().$form_url;?>" enctype="multipart/form-data" novalidate="novalidate" class="form-horizontal" id="form">
                                            <div class="form-group row">
                                                <label class="col-sm-4 control-label text-sm-right pt-2">Upload Image: </label>
                                                <div class="col-sm-6">
                                                    <div class="custom-file">
                                                        <input type="file" class="form-control custom-file-input" id="sapaper" name="img" >
                                                        <label class="custom-file-label" for="sapaper">Choose file</label>
                                                  </div>    
                                                  <?php 
                                                            if($this->session->flashdata('img_error')!=''){echo '
                                                            <div class="error">'.$this->session->flashdata('img_error').'</div>';}?>
                                                <?php echo form_error('img', '<div class="error">', '</div>'); ?>
                                                </div>
                                                
                                            </div>
                                           <div class="form-group row">
                                                <label class="col-sm-4 control-label text-sm-right pt-2">Upload Logo: </label>
                                                <div class="col-sm-6">
                                                    <div class="custom-file">
                                                        <input type="file" class="form-control custom-file-input" id="sapaper" name="logo" >
                                                        <label class="custom-file-label" for="sapaper">Choose file</label>
                                                  </div>    
                                                  <?php 
                                                            if($this->session->flashdata('img_error')!=''){echo '
                                                            <div class="error">'.$this->session->flashdata('img_error').'</div>';}?>
                                                <?php echo form_error('img', '<div class="error">', '</div>'); ?>
                                                </div>
                                                
                                            </div>
                                           
                                            <div class="form-group row">
                                                
                                                <label class="col-sm-4 control-label text-sm-right pt-2">Select Theme: </label>
                                                <div class="col-sm-5">
                                                    <select name="theme" class="form-control" required>
                                                    <option>Select theme</option>
                                                    <option value="1">Food</option>
                                                    <option value="2">Grocery</option>
                                                    <option value="3">Ecomercers</option>
                                                    <option value="4">Real Estate</option>
                                                </select>
                                                </div>
                                            </div>
                                            <!--  -->
                                            <div class="form-group row">
                                                
                                                <label class="col-sm-4 control-label text-sm-right pt-2">Client Name: </label>
                                                <div class="col-sm-5">
                                                    <input type="text" id="name" class="form-control"id="name" name="name" value="<?=$name;?>" required=""><?=$name;?>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-sm-4 control-label text-sm-right pt-2">Mobile No: </label>
                                                <div class="col-sm-5">
                                                    <input type="Number" id="mobile" class="form-control" name="mobile" value="<?=$mobile;?>" required="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                
                                                <label class="col-sm-4 control-label text-sm-right pt-2">Adress: </label>
                                                <div class="col-sm-5">
                                                    <input type="text" id="adress" class="form-control"id="adress" name="adress" value="<?=$adress;?>" required="">
                                                </div>
                                            </div>
                                            <!--  -->
                                            
                                            <div class="form-group row">
                                                <label class="col-sm-4 control-label text-sm-right pt-2">Email: </label>
                                                <div class="col-sm-5">
                                                    <input type="email" class="form-control" rows="3" id="email" autocomplete="off" required="" name="email"  value="<?=$email;?>" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 control-label text-sm-right pt-2">Password: </label>
                                                <div class="col-sm-5">
                                                    <input type="password" class="form-control" rows="3" id="password" autocomplete="off" required="" name="password"  value="<?=$password;?>" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                
                                                <div class="col-sm-5">
                                                    <input type="hidden" name="role_id" class="form-control" value="2" readonly required="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 control-label text-sm-right pt-2"> </label>
                                                <div class="col-sm-5">
                                                    <div class="custom-file">
                                                        <input type="submit" class="btn btn-primary" Placeholder="Submit">

                                                  </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-body">
                                        <h4>View details</h4>
                                        <table class="table table-bordered table-striped mb-0" id="Trailupload">
                                            <thead>
                                                <tr>
                                                    <th>Sl.No</th>
                                                    <th>Client Name</th>
                                                    <th>Email</th>
                                                    <th>Mobile</th>
                                                    <th>Images </th>
                                                    <th>Actions</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $client=$this->crud_model->get_client_info();
                                                $i=0;
                                                foreach ($client as $row) {
                                                    ?>
                                                <tr>
                                                    <td><?=$i+1;?></td>
                                                    <td><?=$row['first_name'];?></td>
                                                    <td><?=$row['email'];?></td>
                                                    <td><?=$row['mobile'];?></td>
                                                    <td><img  height="100px" width="150px"  src="<?= base_url('uploads/client/' . $row['id'] . '.jpg'); ?> " alt="Image"></td>                                                
                                                    <td>
                                                       <a href="<?=base_url('addclient/').base64_encode($row['id']);?>" class=" mr-2  text-primary">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <a href="#" class="mr-2  text-danger" onclick="return delete_row('<?=base_url('set_row_status/').'users/id/'.$row['id'].'/0';?>');">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php $i++;}?>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                            </div>
                        </div>

