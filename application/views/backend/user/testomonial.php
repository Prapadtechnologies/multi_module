 
 <?php
if($edit_data!=''){
    $name=$edit_data['name'];
    $client=$edit_data['client'];
    $form_url='u_testomonial/'.base64_encode($edit_data['id']);
}else{
    $this->session->set_userdata('last_page',current_url());
    $form_url='u_testomonial';
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
                                                <input name="name" type="text" class="form-control" value="<?=$login_user_details['first_name'];?>" readonly>
                                                <input type="hidden" name="client_id" value="<?=$login_user_details['id'];?>">
                                            </div>
                                        </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-sm-4 control-label text-sm-right pt-2">Client Review: </label>
                                                <div class="col-sm-5">
                                                    <textarea class="form-control" rows="3" id="answer" autocomplete="off" required="" name="client"><?=$client;?></textarea>
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
                                   