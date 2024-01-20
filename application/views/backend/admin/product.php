 <!--Trailupload-->
 <?php
if($edit_data!=''){
    $name=$edit_data['name'];
    $heading=$edit_data['heading'];
    
    $price=$edit_data['price'];
/*'password'=>md5($post['password'])*/
    $form_url='product/'.base64_encode($edit_data['id']);
}else{
    $this->session->set_userdata('last_page',current_url());
    $form_url='product';
}
?>
                    <div class="row">
                        <div class="col">
                                <section class="card">
                                    <div class="card-header">
                                        <form method="post" action="<?=base_url().$form_url;?>" enctype="multipart/form-data" novalidate="novalidate" class="form-horizontal" id="form">
                                            <div class="form-group row">
                                                    
                                                    <label class="col-sm-4 control-label text-sm-right pt-2">Select Client: </label>
                                                    <div class="col-sm-5">

                                                        <select name="client_id" class="form-control"  required>
                                                         <option>Select Client</option>
                                                            <?php
                                                                $client=$this->crud_model->get_client_info();
                                                                foreach ($client as $row) {
                                                                echo '<option value="' . $row['id'] . '">' . $row['first_name'] . '</option>';
                                                            }
                                                            ?>
                                                    </select>
                                                    
                                                    </div>
                                                </div>
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
                                            <!--  -->
                                            <div class="form-group row">
                                                
                                                <label class="col-sm-4 control-label text-sm-right pt-2">Product Heading: </label>
                                                <div class="col-sm-5">
                                                    <input type="text" id="heading" class="form-control" name="heading" value="<?=$heading;?>" required=""><?=$heading;?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                
                                                <label class="col-sm-4 control-label text-sm-right pt-2">Product Name: </label>
                                                <div class="col-sm-5">
                                                    <input type="text" id="name" class="form-control"id="name" name="name" value="<?=$name;?>" required=""><?=$name;?>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-sm-4 control-label text-sm-right pt-2"> Product Price </label>
                                                <div class="col-sm-5">
                                                    <input type="Number" id="price" class="form-control" name="price" value="<?=$price;?>" required="">
                                                </div>
                                            </div>

                                            <!--  -->
                                            
                                            
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
                                                    <th>Product Name</th>
                                                    <th>Heading</th>
                                                    <th>Rs</th>
                                                    <th>Images </th>
                                                    <th>Actions</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $product=$this->crud_model->get_product_info();
                                                $i=0;
                                                foreach ($product as $row) {
                                                    ?>
                                                <tr>
                                                    <td><?=$i+1;?></td>
                                                    <td><?=$row['name'];?></td>
                                                    <td><?=$row['heading'];?></td>
                                                    <td><?=$row['product_rs'];?></td>
                                                    <td><img  height="100px" width="100px"  src="<?= base_url('uploads/product/' . $row['image']); ?> " alt="Image"></td>                                                
                                                    <td>
                                                       <a href="<?=base_url('product/').base64_encode($row['id']);?>" class=" mr-2  text-primary">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <a href="#" class="mr-2  text-danger" onclick="return delete_row('<?=base_url('set_row_status/').'product/id/'.$row['id'].'/0';?>');">
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

