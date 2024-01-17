 <!--Add plan in plans menu-->
                    <div class="row">
                        <div class="col">
                                <section class="card">
                                    <div class="card-body">
                                        <form method="post" action="<?=base_url('u_addimage');?>" enctype="multipart/form-data" novalidate="novalidate" class="form-horizontal" id="form">
                                             
                                           
                                            <div class="form-group row">
                                            <label class="col-sm-4 control-label text-sm-right pt-2">Client Name:</label>
                                            <div class="col-sm-5">
                                                <input name="client" type="text" class="form-control" value="<?=$login_user_details['first_name'];?>" readonly>
                                                <input type="hidden" name="client_id" value="<?=$login_user_details['id'];?>">
                                            </div>
                                        </div>

                                            <div class="form-group row">
                                                <label class="col-sm-4 control-label text-sm-right pt-2">Upload Image: </label>
                                                <div class="col-sm-6">
                                                    <div class="custom-file">
                                                        <input type="file" class="form-control custom-file-input" id="sapaper" name="img" required="">
                                                        <label class="custom-file-label" for="sapaper">Choose file</label>
                                                  </div>    
                                                  <?php 
                                                            if($this->session->flashdata('img_error')!=''){echo '
                                                            <div class="error">'.$this->session->flashdata('img_error').'</div>';}?>
                                                <?php echo form_error('img', '<div class="error">', '</div>'); ?>
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
                                    
                                </section>
                            </div>
                        </div>

<script type="text/javascript">

function show_subjects(type_id){
    if(type_id == 'softcopy'){
    $('#book_file').show()
    }else{
    $('#book_file').hide()
    }
}
</script>