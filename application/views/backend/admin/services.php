     <!--Trailupload-->
     <?php

    if($edit_data!=''){
        $item=$edit_data['items'];
        $review=$edit_data['review'];
        $theme=$edit_data['client_id'];
        $form_url='services/'.base64_encode($edit_data['id']);
    }else{
        $this->session->set_userdata('last_page',current_url());
        $form_url='services';
    }
    ?>
    <?php if($this->session->flashdata('error_message')!=''){
                echo '<div class="alert alert-danger alert_message">'.$this->session->flashdata('error_message').'</div>';
            }elseif($this->session->flashdata('success_message')!=''){
                    echo '<div class="alert alert-success alert_message">'.$this->session->flashdata('success_message').'</div>';
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

                                                        <select name="client_id" class="form-control"  required="" >
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
                                                    
                                                    <label class="col-sm-4 control-label text-sm-right pt-2">Item: </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" id="item"  class="form-control" required="" name="item" value="<?=$item;?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 control-label text-sm-right pt-2">Reviews: </label>
                                                    <div class="col-sm-5">
                                                        <textarea class="form-control" rows="3" id="review" autocomplete="off" required="" name="review"><?=$review;?></textarea>
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
                                                        <th>Item</th>
                                                        <th>Review</th>
                                                        
                                                        
                                                        <th>Actions</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $service=$this->crud_model->get_service_info_with_clients();
                                                    $i=0;
                                                    foreach ($service as $row) {
                                                        ?>
                                                    <tr>
                                                        <td><?=$i+1;?></td>
                                                        <td><?=$row['items'];?></td>
                                                        <td><?=$row['review'];?></td>
                                                        <td><?=$row['first_name'];?></td>
                                                        
                                                        <td>
                                                           <a href="<?=base_url('services/').base64_encode($row['id']);?>" class=" mr-2  text-primary">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                            <a href="#" class="mr-2  text-danger" onclick="return delete_row('<?=base_url('set_row_status/').'services/id/'.$row['id'].'/0';?>');">
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

