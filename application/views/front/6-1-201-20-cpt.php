<?php
$this->session->set_userdata('last_page',current_url());
?>

<!-- <div class="request_call">
<div class="request_call_button">
    call
</div>
</div> -->
<style>
    .w-90{
        width: 90%
    }
    .pt-150{
        padding-top: 150px
    }
    .m--auto{
        margin: auto;
    }
    .outline{
            outline: 2px solid black;
    }
    .plan-title{
        background-color: #fab301;
        padding: 10px 40px;
        border-radius: 40px;
        color: white;
    }
    .plan-section{
        
        padding: 65px 0px;
    }
    .plan-bg{
       /* background-color: #fff5e9;*/
    }
    .plan-title1 {
        padding: 9px 42px;
        background-color: #fab301;
        border-radius: 7px;
        color: white;
        /* margin: auto; */
        font-size: 14px;
    }
    
    .chapter1  .bg1 {
    background: #0b5f8e;
    }
   .chapter1 h5.plan-title1 {
    background: #07bb0a;
    }
    .chapter1 .bg3{
        background: #282828;
    }
    .chapter1 .bg2{
       background:#e11105;
    }
    .plan-title-sec{
        /*margin: auto;*/
        display: grid;
        justify-content: center;
    }
    .yl{
        background-color: #fab301;
    }
    .pd-lr-26{
        padding: 9px 26px;
    }
</style>
<!-- style2-->
<style>
    /* CSS code */
* 
{ 
box-sizing: border-box; 
} 
body 
{ 
font-family: Verdana, sans-serif; 
} 

.image-sliderfade 
{ 
display: none; 
} 

img 
{ 
vertical-align: middle; 
} 

/* Slideshow container */
.container 
{ 
max-width: 1000px; 
position: relative; 
margin: auto; 
} 

/* Caption text */
.text 
{ 
color: #f2f2f2; 
font-size: 15px; 
padding: 20px 15px; 
position: absolute; 
right: 10px; 
bottom: 10px; 
width: 40%; 
background: rgba(0, 0, 0, .7); 
text-align: left; 
} 

/* The dots/bullets/indicators */
.dot 
{ 
height: 15px; 
width: 15px; 
margin: 0 2px; 
background-color: transparent; 
border-color: #ddd; 
border-width: 5 px; 
border-style: solid; 
border-radius: 50%; 
display: inline-block; 
transition: border-color 0.6s ease; 
} 

.active 
{ 
border-color: #666; 
} 

/* Animation */
.fade 
{ 
-webkit-animation-name: fade-image; 
-webkit-animation-duration: 1.5s; 
animation-name: fade-image; 
animation-duration: 1.5s; 
} 

@-webkit-keyframes fade-image 
{ 
from {opacity: .4} 
to {opacity: 1} 
} 

@keyframes fade-image 
{ 
from {opacity: .4} 
to {opacity: 1} 
} 

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) 
{ 
.text {font-size: 11px} 
} 

</style>


<section>
    <div class="container-fluid" style="height: 355px;">
        <div class="row">
            <div class="col-lg-12">
                 <!-- start img slider -->
            <!--HTML Code-->
        <!-- Slideshow Container Div -->
            <div class="container-fluid">
            <!-- Full-width images with caption text -->
            <div class="image-sliderfade fade"> 
                <img src="http://localhost/ca/assets/front-end/img/home-slide1.jpg" style="width:100%"> 
                <!-- <div class="text">Image caption 1</div>  -->
            </div> 
            <div class="image-sliderfade fade"> 
                <img src="http://localhost/ca/assets/front-end/img/home-slide2.jpg" style="width:100%"> 
              <!--   <div class="text">Image caption 2</div>  -->
            </div> 
            <div class="image-sliderfade fade"> 
                <img src="http://localhost/ca/assets/front-end/img/home-slide3.jpg" style="width:100%"> 
                <!-- <div class="text">Image caption 3</div>  -->
            </div> 
            <div class="image-sliderfade fade"> 
                <img src="http://localhost/ca/assets/front-end/img/home-slide4.jpg" style="width:100%"> 
                <!-- <div class="text">Image caption 4</div>  -->
            </div> 
        </div> 
        <br> 

        <!-- The dots/circles -->
        <div style="text-align:center"> 
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span>  
        </div> 


        <script type="text/javascript">
            var slideIndex = 0; 
showSlides(); // call showslide method 

function showSlides() 
{ 
    var i; 

    // get the array of divs' with classname image-sliderfade 
    var slides = document.getElementsByClassName("image-sliderfade"); 
    
    // get the array of divs' with classname dot 
    var dots = document.getElementsByClassName("dot"); 

    for (i = 0; i < slides.length; i++) { 
        // initially set the display to 
        // none for every image. 
        slides[i].style.display = "none"; 
    } 

    // increase by 1, Global variable 
    slideIndex++; 

    // check for boundary 
    if (slideIndex > slides.length) 
    { 
        slideIndex = 1; 
    } 

    for (i = 0; i < dots.length; i++) { 
        dots[i].className = dots[i].className. 
                            replace(" active", ""); 
    } 

    slides[slideIndex - 1].style.display = "block"; 
    dots[slideIndex - 1].className += " active"; 

    // Change image every 3 seconds 
    setTimeout(showSlides, 3000); 
} 

</script>

        <!-- close img slider -->
    </div>
            </div>
        </div>
    </div>
</section>
   <div>
           

        <!-- Start Features Area -->
        <section class="features-area app-features pt-4 pb-4 section-bg">
            <div class="container">
                <div class="section-title">
                    <h2 class="text-center">Exclusive Benifits we offer</h2>
                    <div class="bar"></div><br>
                </div>
                <div class="row" data-aos="flip-up" >
                    <div class="col-md-2 col-sm-3 col-3 mb-4" >
                        <img src="<?=base_url();?>assets/front-end/img/benifit-icons/1.svg" data-aos-anchor-placement="top-bottom">
                    </div> 
                    <div class="col-md-2 col-sm-3 col-3 mb-4" >
                        <img src="<?=base_url();?>assets/front-end/img/benifit-icons/2.svg" data-aos-anchor-placement="top-bottom">
                    </div> 
                    <div class="col-md-2 col-sm-3 col-3 mb-4" >
                        <img src="<?=base_url();?>assets/front-end/img/benifit-icons/3.svg" data-aos-anchor-placement="top-bottom">
                    </div> 
                    <div class="col-md-2 col-sm-3 col-3 mb-4" >
                        <img src="<?=base_url();?>assets/front-end/img/benifit-icons/4.svg" data-aos-anchor-placement="top-bottom">
                    </div> 
                    <div class="col-md-2 col-sm-3 col-3 mb-4" >
                        <img src="<?=base_url();?>assets/front-end/img/benifit-icons/5.svg" data-aos-anchor-placement="top-bottom">
                    </div> 
                    <div class="col-md-2 col-sm-3 col-3 mb-4" >
                        <img src="<?=base_url();?>assets/front-end/img/benifit-icons/6.svg" data-aos-anchor-placement="top-bottom">
                    </div> 
                    <div class="col-md-2 col-sm-3 col-3 mb-4" >
                        <img src="<?=base_url();?>assets/front-end/img/benifit-icons/7.svg" data-aos-anchor-placement="top-bottom">
                    </div> 
                    <div class="col-md-2 col-sm-3 col-3 mb-4" >
                        <img src="<?=base_url();?>assets/front-end/img/benifit-icons/8.svg" data-aos-anchor-placement="top-bottom">
                    </div> 
                    <div class="col-md-2 col-sm-3 col-3 mb-4" >
                        <img src="<?=base_url();?>assets/front-end/img/benifit-icons/9.svg" data-aos-anchor-placement="top-bottom">
                    </div> 
                    <div class="col-md-2 col-sm-3 col-3 mb-4" >
                        <img src="<?=base_url();?>assets/front-end/img/benifit-icons/10.svg" data-aos-anchor-placement="top-bottom">
                    </div> 
                    <div class="col-md-2 col-sm-3 col-3 mb-4" >
                        <img src="<?=base_url();?>assets/front-end/img/benifit-icons/11.svg" data-aos-anchor-placement="top-bottom">
                    </div> 
                    <div class="col-md-2 col-sm-3 col-3 mb-4" >
                        <img src="<?=base_url();?>assets/front-end/img/benifit-icons/12.svg" data-aos-anchor-placement="top-bottom">
                    </div> 
                    <div class="col-md-2 col-sm-3 col-3 mb-4" >
                        <img src="<?=base_url();?>assets/front-end/img/benifit-icons/13.svg" data-aos-anchor-placement="top-bottom">
                    </div> 
                    <div class="col-md-2 col-sm-3 col-3 mb-4" >
                        <img src="<?=base_url();?>assets/front-end/img/benifit-icons/14.svg" data-aos-anchor-placement="top-bottom">
                    </div> 
                    <div class="col-md-2 col-sm-3 col-3 mb-4" >
                        <img src="<?=base_url();?>assets/front-end/img/benifit-icons/15.svg" data-aos-anchor-placement="top-bottom">
                    </div> 
                    <div class="col-md-2 col-sm-3 col-3 mb-4" >
                        <img src="<?=base_url();?>assets/front-end/img/benifit-icons/16.svg" data-aos-anchor-placement="top-bottom">
                    </div> 
                </div>
            </div>
            <!--<div class="features-inner-area">
                <div class="container-fluid">
                    <div class="row h-100 justify-content-center align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="features-image">
                                <img src="<?=base_url();?>assets/front-end/img/features-img1.png" alt="image">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="features-inner-content">
                                <div class="features-item">
                                    <div class="icon">
                                        <i class="icofont-ui-call"></i>
                                    </div>
                                    <h3>Free Caliing Service</h3>
                                    <p>Plan ahead by day, week, or month, and see project status at a glance. Search and filter to focus in on anything form a single project to an individual person's workload.</p>
                                </div>

                                <div class="features-item">
                                    <div class="icon">
                                        <i class="icofont-gift"></i>
                                    </div>
                                    <h3>Daily Free Gift</h3>
                                    <p>Plan ahead by day, week, or month, and see project status at a glance. Search and filter to focus in on anything form a single project to an individual person's workload.</p>
                                </div>

                                <div class="features-item">
                                    <div class="icon">
                                        <i class="icofont-qr-code"></i>
                                    </div>
                                    <h3>QR Code Scaner</h3>
                                    <p>Plan ahead by day, week, or month, and see project status at a glance. Search and filter to focus in on anything form a single project to an individual person's workload.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <div class="shape7"><img src="<?=base_url();?>assets/front-end/img/shape7.png" alt="shape"></div>
            <div class="shape3"><img src="<?=base_url();?>assets/front-end/img/shape3.png" alt="img"></div>
            <div class="bg-gray shape-1"></div>
            <div class="shape6"><img src="<?=base_url();?>assets/front-end/img/shape6.png" alt="img"></div>
            <div class="shape8 rotateme"><img src="<?=base_url();?>assets/front-end/img/shape8.svg" alt="shape"></div>
            <div class="shape9"><img src="<?=base_url();?>assets/front-end/img/shape9.svg" alt="shape"></div>
            <div class="shape10"><img src="<?=base_url();?>assets/front-end/img/shape10.svg" alt="shape"></div>
            <div class="shape11 rotateme"><img src="<?=base_url();?>assets/front-end/img/shape11.svg" alt="shape"></div>
        </section>
<div class="chapter1">

<?php
$res=$this->crud_model->get_plans_by_id($plan_type);
if($plan_type!=1){
/*    $res=$this->crud_model->get_plans_by_id($plan_type);

    for ($i=0; $i < count($res); $i++) { 
        if($res[$i]['module']==1 && $res[$i]['plan_type']=='unscheduled'){
            
        }
    }*/
     $chapter=$this->crud_model->get_common_data_by_where('plans',array('course_id'=>$plan_type,'module'=>1));
     $section=$this->crud_model->get_common_data_by_where('plans',array('course_id'=>$plan_type,'module'=>2));
     $unit=$this->crud_model->get_common_data_by_where('plans',array('course_id'=>$plan_type,'module'=>3));
?>
<!-- <div class="container-fluid" style="border:1px solid green; min-height: 200px">  -->
 
    <div class="row">
        <?php
        if($chapter!=''){
            for ($c=0; $c < count($chapter); $c++) { 
                if($chapter[$c]['plan_type']=='scheduled'){
                    $c_c=$chapter[$c];
                }elseif($chapter[$c]['plan_type']=='unscheduled'){
                    $c_un=$chapter[$c];
                }
            }
        ?>
        <div class="col-md-4 ">
           <div class="plan-title-sec  mt-3 ">
                <h3 class="plan-title1 bg1"> Chapter</h3>
           </div>
            <div class="plan-title-sec mt-3">
                <h5 class="plan-title1">Each Chapter = 1 Exam</h5>
           </div>
           <div class="row mt-3">
                <div class="col-md-6">
                   <div class="plan-title1 bg123">
                        <b>Un-Scheduled</b>
                    </div>
                </div> 
                <div class="col-md-6">
                   <div class="plan-title1 bg123">
                        <b>Scheduled</b>
                    </div>
                </div> 
           </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <?php if($c_un!=''){?>
                    <div class="pricing-table">
                        <div class="price-header">
                            <h3 class="title"><?=$c_un['plan'];?></h3>
                           <!-- <div class="price"><span class="dollar"><i class="fa fa-inr" aria-hidden="true"></i></span>15</div>-->
                            <span class="plan-h plan-hh"><?=$c_un['headerbox'];?></span>
                        </div>

                        <div class="price-body">
                            <ul>
                                <?php $lis=explode(':@',$c_un['description']);
                                    for ($l=0; $l < count($lis); $l++) { 
                                        echo '<li>'.$lis[$l].'</li>';
                                    }
                                ?>
                            </ul>
                        </div>

                        <div class="price-footer">
                            <a class="btn-sm btn-primary" href="#plan-<?=$c_un['plan'];?>">View Plan</a>
                        </div>
                    </div>
                <?php }?>
                </div>
                <div class="col-md-6">
                    <?php
                        if($c_c!=''){
                        ?>
                    <div class="pricing-table">
                        <div class="price-header">
                            <h3 class="title"><?=$c_c['plan'];?></h3>
                           <!-- <div class="price"><span class="dollar"><i class="fa fa-inr" aria-hidden="true"></i></span>15</div>-->
                            <span class="plan-h plan-hh"><?=$c_c['headerbox'];?></span>
                        </div>

                        <div class="price-body">
                            <ul>
                                <?php $lis=explode(':@',$c_c['description']);
                                    for ($l=0; $l < count($lis); $l++) { 
                                        echo '<li>'.$lis[$l].'</li>';
                                    }
                                ?>
                            </ul>
                        </div>

                        <div class="price-footer">
                            <a class="btn-sm btn-primary" href="#plan-<?=$c_c['plan'];?>">View Plan</a>
                        </div>
                    </div>
                 <?php }?>
                </div>
            </div>
        </div>
        <?php }?>
        <?php
        if($section!=''){
            for ($c=0; $c < count($section); $c++) { 
                if($section[$c]['plan_type']=='scheduled'){
                    $s_c=$section[$c];
                }elseif($section[$c]['plan_type']=='unscheduled'){
                    $s_un=$section[$c];
                }
            }
        ?>
        <div class="col-md-4 ">
           <div class="plan-title-sec mt-3">
                <h3 class="plan-title1 bg2"> Section</h3>
           </div>
            <div class="plan-title-sec mt-3">
                <h5 class="plan-title1">Each Chapter = 1 Exam</h5>
           </div>
           <div class="row mt-3">
                <div class="col-md-6">
                   <div class="plan-title1 bg2 ">
                        <b>Un-Scheduled</b>
                    </div>
                </div> 
                <div class="col-md-6">
                   <div class="plan-title1 bg2">
                        <b>Scheduled</b>
                    </div>
                </div> 
           </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <?php if($s_un!=''){?>
                    <div class="pricing-table">
                        <div class="price-header">
                            <h3 class="title"><?=$s_un['plan'];?></h3>
                           <!-- <div class="price"><span class="dollar"><i class="fa fa-inr" aria-hidden="true"></i></span>15</div>-->
                            <span class="plan-h plan-hh"><?=$s_un['headerbox'];?></span>
                        </div>
                        <div class="price-body">
                            <ul>
                                <?php $lis=explode(':@',$s_un['description']);
                                    for ($l=0; $l < count($lis); $l++) { 
                                        echo '<li>'.$lis[$l].'</li>';
                                    }
                                ?>
                            </ul>
                        </div>

                        <div class="price-footer">
                            <a class="btn-sm btn-primary" href="#plan-<?=$s_un['plan'];?>">View Plan</a>
                        </div>
                    </div>
                <?php }?>
                </div>
                <div class="col-md-6">
                    <?php
                        if($s_c!=''){
                        ?>
                    <div class="pricing-table">
                        <div class="price-header">
                            <h3 class="title"><?=$s_c['plan'];?></h3>
                           <!-- <div class="price"><span class="dollar"><i class="fa fa-inr" aria-hidden="true"></i></span>15</div>-->
                            <span class="plan-h plan-hh"><?=$s_c['headerbox'];?></span>
                        </div>
                        <div class="price-body">
                            <ul>
                                <?php $lis=explode(':@',$s_c['description']);
                                    for ($l=0; $l < count($lis); $l++) { 
                                        echo '<li>'.$lis[$l].'</li>';
                                    }
                                ?>
                            </ul>
                        </div>

                        <div class="price-footer">
                            <a class="btn-sm btn-primary" href="#plan-<?=$s_c['plan'];?>">View Plan</a>
                        </div>
                    </div>
                 <?php }?>
                </div>
            </div>
        </div>
    <?php }?>
    <?php
        if($unit!=''){
            for ($c=0; $c < count($unit); $c++) { 
                if($unit[$c]['plan_type']=='scheduled'){
                    $u_c=$unit[$c];
                }elseif($unit[$c]['plan_type']=='unscheduled'){
                    $u_un=$unit[$c];
                }
            }
        ?>
        <div class="col-md-4 ">
           <div class="plan-title-sec mt-3">
                <h3 class="plan-title1 bg3"> Chapter</h3>
           </div>
            <div class="plan-title-sec mt-3">
                <h5 class="plan-title1">Each Chapter = 1 Exam</h5>
           </div>
           <div class="row mt-3"> 
                <div class="col-md-6">
                   <div class="plan-title1 bg3">
                        <b>Un-Scheduled</b>
                    </div>
                </div> 
                <div class="col-md-6">
                   <div class="plan-title1 bg3">
                        <b>Scheduled</b>
                    </div>
                </div>
           </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <?php if($u_un!=''){?>
                    <div class="pricing-table">
                        <div class="price-header">
                            <h3 class="title"><?=$u_un['plan'];?></h3>
                           <!-- <div class="price"><span class="dollar"><i class="fa fa-inr" aria-hidden="true"></i></span>15</div>-->
                            <span class="plan-h plan-hh"><?=$u_un['headerbox'];?></span>
                        </div>
                        <div class="price-body">
                            <ul>
                                <?php $lis=explode(':@',$u_un['description']);
                                    for ($l=0; $l < count($lis); $l++) { 
                                        echo '<li>'.$lis[$l].'</li>';
                                    }
                                ?>
                            </ul>
                        </div>

                        <div class="price-footer">
                            <a class="btn-sm btn-primary" href="#plan-<?=$u_un['plan'];?>">View Plan</a>
                        </div>
                    </div>
                <?php }?>
                </div>
                <div class="col-md-6">
                        <?php
                            if($u_c!=''){
                            ?>
                            <div class="pricing-table">
                                <div class="price-header">
                                    <h3 class="title"><?=$u_c['plan'];?></h3>
                                   <!-- <div class="price"><span class="dollar"><i class="fa fa-inr" aria-hidden="true"></i></span>15</div>-->
                                    <span class="plan-h plan-hh"><?=$u_c['headerbox'];?></span>
                                </div>
                        <div class="price-body">
                            <ul>
                                <?php $lis=explode(':@',$u_c['description']);
                                    for ($l=0; $l < count($lis); $l++) { 
                                        echo '<li>'.$lis[$l].'</li>';
                                    }
                                ?>
                            </ul>
                        </div>

                        <div class="price-footer">
                            <a class="btn-sm btn-primary" href="#plan-<?=$u_c['plan'];?>">View Plan</a>
                        </div>
                    </div>
                 <?php }?>
                </div>
            </div>
            
        
        </div>
    <?php }?>
    </div>
 </div>

    <?php }?>
    <?php
    $p=0;foreach (array_reverse($res) as $plan) {
    ?>
<div class="plan-section  <?php if($p % 2 == 0){echo "plan-bg";}?>" id="plan-<?=$plan['plan'];?>">
    <div class="container ">
    <div class="row justify-content-center align-items-center">
        <div class="col-12 justify-content-center align-items-center d-flex">
             <h3 class="mb-3 plan-title"> <b><?=$plan['plan'];?></b></h3><!--plan name-->
        </div>
        <div class="col-12 justify-content-center align-items-center d-flex">
             <?php $down=$this->db->get_where('schedules',array('plan_id'=>$plan['id'],'course_id'=>$plan['course_id']))->row();?>
                  <center><h5 class="justify-content-center align-items-center "><b><?=$plan['downbox']?></b><br/> <a class="download_pdf" href="<?php if($down!=''){echo base_url('uploads/schedules/').$down->file_name;}else{echo '#';}?>" <?php if($down!=''){echo 'download="'.$down->file_name.'"'; }?>> <?=($plan['plan_type']=='scheduled')? '(Click Here & Download Schedule Pdf)' : '(Click Here & Download Syllabus Pdf)';?></a>
              </h5></center>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 mb-4">
            <?php
                $group1=$this->crud_model->select_results_info('packages',array('course_id'=>$plan_type,'plan_id'=>$plan['id'],'type'=>1))->row_array();
                if($group1!=''){
                    ?>
            <div class="pricing-table">
                <div class="price-header">
                    <h3 class="title">Group1</h3>
                    <div class="price"><small><strike><span class="dollar"><i class="fa fa-inr" aria-hidden="true"></i></span><?=$group1['actual_price'];?></strike></small>&nbsp;&nbsp;<span class="dollar"><i class="fa fa-inr" aria-hidden="true"></i></span><?=$group1['discount_price'];?></div>
                    <!--<span class="plan-h plan-hh">Winners Choice</span>-->
                </div>
                <div class="price-body">
                    <ul>
                       <?php $lis=explode(':@',$group1['description']);
                            for ($l=0; $l < count($lis); $l++) { 
                                echo '<li>'.$lis[$l].'</li>';
                            }
                                                            ?>
                    </ul>
                </div>
                <div class="price-footer">
                    <a class="btn-sm btn-primary" onclick="return addCart('<?=$group1['id'];?>')" href="#">Add to cart</a>
                    <a class="btn-sm btn-primary" onclick="return addCart('<?=$group1['id'];?>')" href="<?=base_url('cart');?>">Buy Now</a>
                    <!-- <a class="btn-sm btn-primary" href="<?=base_url('cart')?>" onclick="<?php if($login_role_details!=''){?>return addCart('<?=$group1['id'];?>');<?php }else{?>return login_to_account('Please Login To Buy This');<?php }?>">Buy Now</a> -->
                </div>
            </div>
        <?php }?>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 mb-4">
            <?php
                $group2=$this->crud_model->select_results_info('packages',array('course_id'=>$plan_type,'plan_id'=>$plan['id'],'type'=>2))->row_array();
                if($group2!=''){
                    ?>
            <div class="pricing-table">
                <div class="price-header">
                    <h3 class="title">Group2</h3>
                    <div class="price"><span class="dollar"><i class="fa fa-inr" aria-hidden="true"></i></span><?=$group2['discount_price'];?></div>
                    <!--<span class="plan-h plan-hh">Winners Choice</span>-->
                </div>
                <div class="price-body">
                    <ul>
                                           <?php $lis=explode(':@',$group2['description']);
                    for ($l=0; $l < count($lis); $l++) { 
                        echo '<li>'.$lis[$l].'</li>';
                    }
                                                    ?>
                    </ul>
                </div>
                <div class="price-footer">
                    <a class="btn-sm btn-primary" onclick="return addCart('<?=$group2['id'];?>')" href="#">Add to cart</a>
                    <a class="btn-sm btn-primary" onclick="return addCart('<?=$group2['id'];?>')" href="<?=base_url('cart');?>">Buy Now</a>
                    <!-- <a class="btn-sm btn-primary" href="#" onclick="<?php if($login_role_details!=''){?>return buy_this_package('1');<?php }else{?>return login_to_account('Please Login To Buy This');<?php }?>">Buy Now</a> -->
                </div>
            </div>
            <?php }?>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 mb-4">
            <?php
            $both=$this->crud_model->select_results_info('packages',array('course_id'=>$plan_type,'plan_id'=>$plan['id'],'type'=>3))->row_array();
            if($both!=''){
            ?>
            <div class="pricing-table">
                <div class="price-header">
                    <h3 class="title">Both Groups</h3>
                    <div class="price"><span class="dollar"><i class="fa fa-inr" aria-hidden="true"></i></span><?=$both['discount_price'];?></div>
                    <!--<span class="plan-h plan-hh">Winners Choice</span>-->
                </div>
                <div class="price-body">
                    <ul>
                                                <?php $lis=explode(':@',$both['description']);
                        for ($l=0; $l < count($lis); $l++) { 
                            echo '<li>'.$lis[$l].'</li>';
                        }
                                                        ?>
                    </ul>
                </div>
                <div class="price-footer">
                    <a class="btn-sm btn-primary" onclick="return addCart('<?=$both['id'];?>')" href="#">Add to cart</a>
                    <a class="btn-sm btn-primary" onclick="return addCart('<?=$both['id'];?>')" href="<?=base_url('cart');?>">Buy Now</a>
                    <!-- <a class="btn-sm btn-primary" href="#" onclick="<?php if($login_role_details!=''){?>return buy_this_package('1');<?php }else{?>return login_to_account('Please Login To Buy This');<?php }?>">Buy Now</a> -->
                </div>
            </div>
        <?php }?>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 mb-4">
            <?php
                $all=$this->crud_model->get_common_data_by_where('packages',array('course_id'=>$plan_type,'plan_id'=>$plan['id'],'type'=>0));
                if($all!=''){
            ?>
            <div class="pricing-table">
                <div class="price-header">
                    <h3 class="title">Select Subjects</h3>
                    <div class="price"><span class="dollar"><i class="fa fa-inr" aria-hidden="true"></i></span><!-- <span id="subj_price<?=$plan['id'];?>"><?=$this->crud_model->get_sum_of_product('packages',array('course_id'=>$plan_type,'plan_id'=>$plan['id'],'type'=>0),'discount_price');?></span> --> <span id="subj_price<?=$plan['id'];?>">0</span></div>
                    <!--<span class="plan-h plan-hh">Winners Choice</span>-->
                </div>
                <div class="price-body">
                    <ul class="subject-height">
                        <form>
                            <?php $k=0;foreach ($all as $row): ?>
                            <li>
                                <div class="checkbox-custom checkbox-warning">
                                    <label><input type="checkbox" class="my_pack<?=$plan['id']?>" onchange="return get_subj_price('<?=$plan['id'];?>','<?=$row['id'];?>');" id="subj_id<?=$row['id'];?>" value="<?=$row['id'];?>"/> <?=$row['subject_name']?></label>
                                </div>
                            </li>
                            <?php endforeach ?>
                            
                        </form>
                    </ul>
                </div>
                <div class="price-footer">
                    <a class="btn-sm btn-primary" onclick="return addsub_Cart('<?=$plan['id']?>')" href="#">Add to cart</a>
                    <a class="btn-sm btn-primary" onclick="return addsub_Cart('<?=$plan['id'];?>')" href="<?=base_url('cart');?>">Buy Now</a>
                    <!-- <a class="btn-sm btn-primary" href="#" onclick="<?php if($login_role_details!=''){?>return buy_this_package('1');<?php }else{?>return login_to_account('Please Login To Buy This');<?php }?>">Buy Now</a> -->
                </div>
            </div><?php }?>
        </div>
    </div>
</div>
</div>




<?php $p++;}?>
<!-- Start Overview Area -->
        <section class="overview-section pt-4 pb-4">
            <div class="container">
                <div class="section-title">
                    <h2 class="text-center">How It Works</h2>
                    <div class="bar"></div>
                </div>
                <div class="overview-box">
                    <div class="row h-100 justify-content-center align-items-center">
                        <div class="col-lg-6 col-md-6 overview-img">
                            <img src="<?=base_url();?>assets/front-end/img/how-it-works.jpg" alt="image">
                        </div>

                        <div class="col-lg-6 col-md-6 overview-content pl-4">
                            <div class="mb-30">
                                <span class="icon"><i class="icofont-download-alt"></i></span><h3>Download Question Paper</h3>
                            </div>
                            <div class="mb-30">
                                <span class="icon"><i class="icofont-notepad"></i></span><h3> Write Exam On Paper</h3>
                            </div>
                            <div class="mb-30">
                                 <span class="icon"><i class="icofont-package"></i></span><h3>Scan The Answer Paper</h3>
                            </div>
                            <div class="mb-30">
                                 <span class="icon"><i class="fa fa-upload
                                     "></i></span><h3>Upload Scanned Copy</h3>
                            </div>
                            <div class="mb-30">
                                 <span class="icon"><i class="fa fa-cogs"></i></span><h3>Your Answers will be Evaluated</h3>
                            </div>
                            <div class="mb-30">
                                 <span class="icon"><i class="fa fa-check-circle"></i></span><h3>Analyse &amp; Correct Your Mistakes</h3>
                            </div>
                       
                            
                            
                            <!--<p>Plan ahead by day, week, or month, and see project status at a glance. Search and filter to focus in on anything form a single project to an individual person's workload.</p>

                            <ul>
                                <li>Unimited Video Call</li>
                                <li>Add Favourite contact</li>
                                <li>Camera Filter</li>
                            </ul>-->
                            <!-- <a href="#" class="btn btn-primary">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape7"><img src="<?=base_url();?>assets/front-end/img/shape7.png" alt="shape"></div>
            <div class="shape3"><img src="<?=base_url();?>assets/front-end/img/shape3.png" alt="img"></div>
            <div class="bg-gray shape-1"></div>
            <div class="shape6"><img src="<?=base_url();?>assets/front-end/img/shape6.png" alt="img"></div>
            <div class="shape8 rotateme"><img src="<?=base_url();?>assets/front-end/img/shape8.svg" alt="shape"></div>
            <div class="shape9"><img src="<?=base_url();?>assets/front-end/img/shape9.svg" alt="shape"></div>
            <div class="shape10"><img src="<?=base_url();?>assets/front-end/img/shape10.svg" alt="shape"></div>
            <div class="shape11 rotateme"><img src="<?=base_url();?>assets/front-end/img/shape11.svg" alt="shape"></div>
        </section>
                <!-- Start Subscribe Area -->
        <section class="subscribe-area pt-4 pb-4">
            <div class="container">
                <div class="section-title">
                        <h2 class=" text-center">OUR STUDENTS FEEDBACK</h2>
                        <div class="bar"></div>
                        
                        <div class="row">
                        <div class="feedback-slides">
                            <div class="col-lg-12">
                                <div class="single-feedback">
                                    <div class="client-info">
                                       <!--  <img src="<?=base_url();?>assets/front-end/img/client1.jpg"> -->
                                        <span> <iframe src="https://www.youtube.com/embed/RBkjrqtsebQ?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe></span>
                                    </div>
                                  
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="single-feedback">
                                    <div class="client-info">
                                        <img src="<?=base_url();?>assets/front-end/img/client2.jpg">
                                       
                                         <span> <iframe src="https://www.youtube.com/embed/RBkjrqtsebQ?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe></span>
                                    </div>
                                   
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="single-feedback">
                                    <div class="client-info">
                                        <img src="<?=base_url();?>assets/front-end/img/client3.jpg">
                                      
                                         <span> <iframe src="https://www.youtube.com/embed/RBkjrqtsebQ?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe></span>
                                    </div>
                                   
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="single-feedback">
                                    <div class="client-info">
                                        <img src="<?=base_url();?>assets/front-end/img/client4.jpg">
                                      
                                         <span> <iframe src="https://www.youtube.com/embed/RBkjrqtsebQ?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe></span>
                                    </div>
                                 
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-feedback">
                                    <div class="client-info">
                                        <img src="<?=base_url();?>assets/front-end/img/client4.jpg">
                                      
                                         <span> <iframe src="https://www.youtube.com/embed/RBkjrqtsebQ?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe></span>
                                    </div>
                                  
                                </div>
                            </div>
                             <div class="col-lg-12">
                                <div class="single-feedback">
                                    <div class="client-info">
                                        <img src="<?=base_url();?>assets/front-end/img/client4.jpg">
                                       
                                         <span> <iframe src="https://www.youtube.com/embed/RBkjrqtsebQ?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe></span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
$this->load->view('front/faqs');
?>
<!-- </div> -->  

