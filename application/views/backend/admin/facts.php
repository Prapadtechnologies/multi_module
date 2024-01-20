     <!--Trailupload-->
     <?php

    if($edit_data!=''){
        $client_id=$edit_data['client_id'];
        $experince=$edit_data['experince'];
        $orders=$edit_data['orders'];
        $happy=$edit_data['happy'];
        $projects=$edit_data['projects'];
        $form_url='facts/'.base64_encode($edit_data['id']);
    }else{
        $this->session->set_userdata('last_page',current_url());
        $form_url='facts';
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
                                                    
                                                    <label class="col-sm-4 control-label text-sm-right pt-2">Experince: </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="experince" class="form-control" required="" value="<?=$experince;?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 control-label text-sm-right pt-2">Orders: </label>
                                                    <div class="col-sm-5">
                                                        <input class="form-control" rows="3" id="orders" autocomplete="off" required="" name="orders"><?=$orders;?>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 control-label text-sm-right pt-2">Happy Clients: </label>
                                                    <div class="col-sm-5">
                                                        <input class="form-control" rows="3" id="happy" autocomplete="off" required="" name="happy"><?=$happy;?>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 control-label text-sm-right pt-2">Projects: </label>
                                                    <div class="col-sm-5">
                                                        <input class="form-control" rows="3" id="projects" autocomplete="off" required="" name="projects"><?=$projects;?>
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
                                                        <th>Experince</th>
                                                        <th>Order</th>
                                                        <th>Client's Happy</th>
                                                        <th>Projects</th>
                                                        
                                                        <th>Actions</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php

                                                    $i=0;
                                                    foreach ($facts as $row) {
                                                        ?>
                                                    <tr>
                                                        <td><?=$i+1;?></td>
                                                        <td><?=$row['experince'];?></td>
                                                        <td><?=$row['orders'];?></td>
                                                        <td><?=$row['clients_happy'];?></td>
                                                        <td><?=$row['projects'];?></td>
                                                        
                                                        
                                                        <td>
                                                           <a href="<?=base_url('facts/').base64_encode($row['id']);?>" class=" mr-2  text-primary">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                            <a href="#" class="mr-2  text-danger" onclick="return delete_row('<?=base_url('set_row_status/').'facts/id/'.$row['id'].'/0';?>');">
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

