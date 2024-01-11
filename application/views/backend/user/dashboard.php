<!-- <style type="text/css">
    html .toggle-primary .toggle label {
    color: #0088CC;
    border-left-color: #0088CC;
    border-right-color: #0088CC;
}

</style>

<div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-center">Welcome to CA Exam Series</h2>
                            <?php 
                        if($login_user_details['row_status']==1){

                    $res=$this->crud_model->get_main_user_dashboard_list();
                    /*echo "<pre>";
                    print_r($res);*/
                    foreach ($res as $r) {
                         ?>
                            <h4 class="text-center"> <b><?=$r['plan'];?></b></h4>
                            <?php 
                            foreach ($r['result'] as $p) {
                                if($p['package_type']==0){
                                    $where=array('id'=>$p['subject_id']);
                                }else if($p['package_type']==1){
                                    $where=array('course_id'=>$p['course_id'],'type'=>$p['package_type']);
                                }else if($p['package_type']==2){
                                    $where=array('course_id'=>$p['course_id'],'type'=>$p['package_type']);
                                }else if($p['package_type']==3){
                                    $where=array('course_id'=>$p['course_id']);
                                }
                                $subjects=$this->crud_model->select_results_info('subjects',$where)->result_array();
                               foreach ($subjects as $sub) {
                                $ex_count=$this->crud_model->get_user_exams_by_sub($sub['id'],$p['plan_id'])->num_rows();
                                /*$ex_count=$this->crud_model->select_results_info('exams',array('subject_id'=>$sub['id'],'row_status'=>1))->num_rows();*/
                            ?>
                            <div class="toggle toggle-primary" data-plugin-toggle="">
                                <section class="toggle">
                                    <label onclick="get_my_exams(<?=$sub['id'];?>,<?=$p['plan_id'];?>);"><i class="fas fa-plus"></i><i class="fas fa-minus"></i><?=ucwords($sub['subject']);?> <span class="badge badge-pill badge-success"><?=$ex_count;?></span> </label>
                                    <div class="toggle-content" style="display: none;" id="exams_<?=$sub['id']?>">
                                      
                                    </div>
                                </section>
                            </div>
                        <?php }}?>
                       <?php }} ?>
                       <?php 
                                    if($login_user_details['row_status']==3){?>
                            <h4 class="text-center"> <b>Trail Exams</b></h4>
                                <section class="card">
                                    <div class="card-header">
                                        <h4 > Trail Videos</h4>
                                    </div>
                                    <div class="card-body">
                                         <div class="row">
                                             <?php
                                        $dashboard=$this->crud_model->get_traildashboard_by_course($login_user_details['exam_type']);
                                        $urls=explode(':@',$dashboard['url']);
                                        for($i=0;$i<count($urls);$i++) {
                                        ?>
                                          
                                    <div class="col-sm-4">
                                        <div class="embed-responsive embed-responsive-4by3">
                                            <iframe src="<?=$urls[$i];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
   
                                        <?php }?>
                                         </div>
                                              
                                    </div>
                                </section>
                                <section class="card">
                                    <div class="card-header">
                                        <h4 > Instructions</h4>
                                    </div>
                                    <div class="card-body">
                                           
                                         <div class="timeline timeline-simple mt-3 mb-3">
                                                <div class="tm-body">
                                                    <ol class="tm-items">
                                                          <?php
                                        $dashboard=$this->crud_model->get_traildashboard_by_course($login_user_details['exam_type']);
                                        $inst=explode(':@',$dashboard['instructions']);
                                        for($i=0;$i<count($inst);$i++) {
                                        ?>
                                        <li>
                                                            <div class="tm-box">
                                                                   <?=$inst[$i];?>
                                                            </div>
                                                        </li>
                                                        <?php }?>
                                                    </ol>
                                                </div>
                                            </div>
                                    </div>
                                </section>
                                <?php }?>
                        </div>
                    </div>


<script type="text/javascript">
    function get_my_exams(sub_id,plan_id) {
        /*alert(sub_id);
        alert(plan_id);*/
        $.ajax({
            type: "GET",
            url: "<?=base_url('ajax/get_user_exams_by_sub/');?>"+sub_id+'/'+plan_id,
            dataType: "json",
            success: function(result){
                /*if(response.status==1){}*/
                $('#exams_'+sub_id).html(result.mess);
            }
        });
    }
</script>
<script>
 function exam_timer(dtime,exam_id) {
var countDownDate = new Date(dtime).getTime();
var x = setInterval(function() {
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  document.getElementById("d"+exam_id).innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
  if (distance < 0) {
    clearInterval(x);
   location.reload();
  }
}, 1000);
}
</script> -->

<div class="row">
    <div class="col-lg-12">
                            <div class="row mb-3">
                                <div class="col-xl-6">
                                    <section class="card card-featured-left card-featured-primary mb-3">
                                        <div class="card-body">
                                            <div class="widget-summary">
                                                <div class="widget-summary-col widget-summary-col-icon">
                                                    <div class="summary-icon bg-primary">
                                                        <i class="fas fa-life-ring"></i>
                                                    </div>
                                                </div>
                                                <div class="widget-summary-col">
                                                    <div class="summary">
                                                        <h4 class="title">Support Questions</h4>
                                                        <div class="info">
                                                            <strong class="amount">1281</strong>
                                                            <span class="text-primary">(14 unread)</span>
                                                        </div>
                                                    </div>
                                                    <div class="summary-footer">
                                                        <a class="text-muted text-uppercase" href="#">(view all)</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-xl-6">
                                    <section class="card card-featured-left card-featured-secondary">
                                        <div class="card-body">
                                            <div class="widget-summary">
                                                <div class="widget-summary-col widget-summary-col-icon">
                                                    <div class="summary-icon bg-secondary">
                                                        <i class="fas fa-dollar-sign"></i>
                                                    </div>
                                                </div>
                                                <div class="widget-summary-col">
                                                    <div class="summary">
                                                        <h4 class="title">Total Profit</h4>
                                                        <div class="info">
                                                            <strong class="amount">$ 14,890.30</strong>
                                                        </div>
                                                    </div>
                                                    <div class="summary-footer">
                                                        <a class="text-muted text-uppercase" href="#">(withdraw)</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <section class="card card-featured-left card-featured-tertiary mb-3">
                                        <div class="card-body">
                                            <div class="widget-summary">
                                                <div class="widget-summary-col widget-summary-col-icon">
                                                    <div class="summary-icon bg-tertiary">
                                                        <i class="fas fa-shopping-cart"></i>
                                                    </div>
                                                </div>
                                                <div class="widget-summary-col">
                                                    <div class="summary">
                                                        <h4 class="title">Today's Orders</h4>
                                                        <div class="info">
                                                            <strong class="amount">38</strong>
                                                        </div>
                                                    </div>
                                                    <div class="summary-footer">
                                                        <a class="text-muted text-uppercase" href="#">(statement)</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-xl-6">
                                    <section class="card card-featured-left card-featured-quaternary">
                                        <div class="card-body">
                                            <div class="widget-summary">
                                                <div class="widget-summary-col widget-summary-col-icon">
                                                    <div class="summary-icon bg-quaternary">
                                                        <i class="fas fa-user"></i>
                                                    </div>
                                                </div>
                                                <div class="widget-summary-col">
                                                    <div class="summary">
                                                        <h4 class="title">Today's Visitors</h4>
                                                        <div class="info">
                                                            <strong class="amount">3765</strong>
                                                        </div>
                                                    </div>
                                                    <div class="summary-footer">
                                                        <a class="text-muted text-uppercase" href="#">(report)</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-xl-12">
                            <section class="card">
                                <header class="card-header card-header-transparent">
                                    <div class="card-actions">
                                        <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
                                        <a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
                                    </div>
                    
                                    <h2 class="card-title">Projects Stats</h2>
                                </header>
                                <div class="card-body">
                                    <table class="table table-responsive-md table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Project</th>
                                                <th>Status</th>
                                                <th>Progress</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Porto - Responsive HTML5 Template</td>
                                                <td><span class="badge badge-success">Success</span></td>
                                                <td>
                                                    <div class="progress progress-sm progress-half-rounded m-0 mt-1 light">
                                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                            100%
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Porto - Responsive Drupal 7 Theme</td>
                                                <td><span class="badge badge-success">Success</span></td>
                                                <td>
                                                    <div class="progress progress-sm progress-half-rounded m-0 mt-1 light">
                                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                            100%
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Tucson - Responsive HTML5 Template</td>
                                                <td><span class="badge badge-warning">Warning</span></td>
                                                <td>
                                                    <div class="progress progress-sm progress-half-rounded m-0 mt-1 light">
                                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                            60%
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Tucson - Responsive Business WordPress Theme</td>
                                                <td><span class="badge badge-success">Success</span></td>
                                                <td>
                                                    <div class="progress progress-sm progress-half-rounded m-0 mt-1 light">
                                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                                            90%
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Porto - Responsive Admin HTML5 Template</td>
                                                <td><span class="badge badge-warning">Warning</span></td>
                                                <td>
                                                    <div class="progress progress-sm progress-half-rounded m-0 mt-1 light">
                                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                                            45%
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Porto - Responsive HTML5 Template</td>
                                                <td><span class="badge badge-danger">Danger</span></td>
                                                <td>
                                                    <div class="progress progress-sm progress-half-rounded m-0 mt-1 light">
                                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                                            40%
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Porto - Responsive Drupal 7 Theme</td>
                                                <td><span class="badge badge-success">Success</span></td>
                                                <td>
                                                    <div class="progress progress-sm progress-half-rounded mt-1 light">
                                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                                                            95%
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                        </div>
</div>

 -->