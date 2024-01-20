     <!--Trailupload-->
     <?php

    if($edit_data!=''){
        $item=$edit_data['item'];
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
                                            <label class="col-sm-4 control-label text-sm-right pt-2">Client Name:</label>
                                            <div class="col-sm-5">
                                                <input name="client" type="text" class="form-control" value="<?=$login_user_details['first_name'];?>" readonly>
                                                <input type="hidden" name="client_id" value="<?=$login_user_details['id'];?>">
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
