                <div class="card-body">
                                        <h4>View details</h4>
                                        <table class="table table-bordered table-striped mb-0" id="Trailupload">
                                            <thead>
                                                <tr>
                                                    <th>Sl.No</th>
                                                    <th>Image</th>
                                                    <th>Client Name</th>
                                                    <th>Email</th>
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
                                                    <td><?=$row['id'].'jpg';?></td>
                                                    <td><?=$row['first_name'];?></td>
                                                    <td><?=$row['email'];?></td>
                                                
                                                    <td>
                                                       <a href="<?=base_url('addclient/').base64_encode($row['id']);?>" class=" mr-2  text-primary">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <a href="#" class="mr-2  text-danger" onclick="return delete_row('<?=base_url('set_row_status/').'addclient/id/'.$row['id'].'/0';?>');">
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

