 <!--Trailupload-->
 <?php
if($edit_data!=''){
    $answer=$edit_data['answer'];
    $question=$edit_data['question'];
    $form_url='team/'.base64_encode($edit_data['id']);
}else{
    $this->session->set_userdata('last_page',current_url());
    $form_url='team';
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
                                                
                                                <label class="col-sm-4 control-label text-sm-right pt-2">Select Client: </label>
                                                <div class="col-sm-5">
                                                    <select name="theme" class="form-control" required>
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
                                                <label class="col-sm-4 control-label text-sm-right pt-2">Review: </label>
                                                <div class="col-sm-5">
                                                    <textarea class="form-control" rows="3" id="answer" autocomplete="off" required="" name="answer"><?=$answer;?></textarea>
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
                                                    <th>img</th>
                                                    <th>Theme </th>
                                                    <th>Name</th>
                                                    <th>Review</th>
                                                    <th>Actions</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i=0;
                                                foreach ($team as $row) {
                                                    ?>
                                                <tr>
                                                    <td><?=$i+1;?></td>
                                                    <td><?=$row['id'].'jpg';?></td>
                                                    <td><?=$row['theme_type'];?></td>
                                                    <td><?=$row['first_name'];?></td>
                                                    <td><?=$row['review'];?></td>

                                                    <td>
                                                       <a href="<?=base_url('team/').base64_encode($row['id']);?>" class=" mr-2  text-primary">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <a href="#" class="mr-2  text-danger" onclick="return delete_row('<?=base_url('set_row_status/').'teams/id/'.$row['id'].'/0';?>');">
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

