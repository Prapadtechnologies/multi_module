<!--Trailupload-->
<?php
if ($edit_data != '') {
    $review = $edit_data['review'];
    $theme = $edit_data['theme'];
    $name=$edit_data['name'];
    $form_url = 'testomonial/' . base64_encode($edit_data['id']);
} else {
    $this->session->set_userdata('last_page', current_url());
    $form_url = 'testomonial';
}
?>
<div class="row">
    <div class="col">
        <section class="card">
            <div class="card-header">
                <form method="post" action="<?= base_url() . $form_url; ?>" enctype="multipart/form-data" novalidate="novalidate" class="form-horizontal" id="form">
                    <!-- Client name -->
                    <div class="form-group row">
                        <label class="col-sm-4 control-label text-sm-right pt-2">Select Client: </label>
                        <div class="col-sm-5">
                            <select name="theme" class="form-control" required>
                                <option>Select Client</option>
                                <?php
                                $client = $this->crud_model->get_client_info();
                                foreach ($client as $row) {
                                    echo '<option value="' . $row['id'] . '">' . $row['first_name'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <!-- Clients based name -->
                    <div class="form-group row">
                        <label class="col-sm-4 control-label text-sm-right pt-2">Client Name: </label>
                        <div class="col-sm-5">
                            <textarea class="form-control"  id="name" autocomplete="off" required="" name="name"><?= $name; ?></textarea>
                        </div>
                    </div>


                    <!-- Image upload -->

                    <div class="form-group row">
                        <label class="col-sm-4 control-label text-sm-right pt-2">Upload Image: </label>
                        <div class="col-sm-6">
                            <div class="custom-file">
                                <input type="file" class="form-control custom-file-input" id="img" name="img">
                                <label class="custom-file-label" for="img">Choose file</label>
                            </div>
                            <?php
                            if ($this->session->flashdata('img_error') != '') {
                                echo '<div class="error">' . $this->session->flashdata('img_error') . '</div>';
                            }
                            ?>
                            <?php echo form_error('img', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 control-label text-sm-right pt-2">Client Review: </label>
                        <div class="col-sm-5">
                            <textarea class="form-control" rows="3" id="review" autocomplete="off" required="" name="review"><?= $review; ?></textarea>
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
                            <th>client name</th>
                            <th>client review</th>
                            <th>Select client</th>
                            <th>Images</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        foreach ($testomonial as $row) {
                            ?>
                            <tr>
                                <td><?= $i + 1; ?></td>
                                <td><?= $row['name']; ?></td>
                                <td><?= $row['review']; ?></td>
                                <td><?= $row['first_name']; ?></td>
                                <td><img  height="100px" width="150px"  src="<?= base_url('uploads/testomonial/' . $row['id'] . '.jpg'); ?> " alt="Image"></td>
                                <td>
                                    <a href="<?= base_url('testomonial/') . base64_encode($row['id']); ?>" class="mr-2 text-primary">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="#" class="mr-2 text-danger" onclick="return delete_row('<?= base_url('set_row_status/') . 'testomonial/id/' . $row['id'] . '/0'; ?>');">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php $i++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>
