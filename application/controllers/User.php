<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Kolkata');    
        error_reporting(1);  
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

        if($this->session->userdata('login_id')==''){
            redirect('auth');
        }
    }
  public function index() {
        if ($this->session->userdata('role_id') != 2){ 
            redirect(base_url() . 'auth', 'refresh');
        }
        if ($this->session->userdata('role_id') == 2){
            redirect(base_url() . 'u_dashboard', 'refresh');
        }
    }
    /*public function board()
    {
       $page_data['page_title'] = 'Dashboard';
        $page_data['page_name'] = 'dashboard';
        $this->load->view('backend/index', $page_data);
    }*/
    public function dashboard(){
        if($this->session->userdata('role_id')!=2){
        redirect('error_404');
        }
        $page_data['page_title'] = 'Dashboard';
        $page_data['page_name'] = 'dashboard';
        $this->load->view('backend/index', $page_data);
    }
    public function trailexams(){
        if($this->session->userdata('role_id')!=2){
        redirect('error_404');
        }
        if($this->input->post()){
            if($this->input->post('input_type')=='answers'){
            $this->form_validation->set_rules('download_id', 'Download id', 'trim|required|xss_clean');
            if ($this->form_validation->run() == TRUE) {
                $input=$this->input->post();
                if(isset($_FILES['trail_answer']['name']) && $_FILES['trail_answer']['name']!="" && $mime = get_mime_by_extension($_FILES['trail_answer']['name'])=='application/pdf'){
                    $input_data=array(
                        'row_status'=> 2
                    );
                    $res = $this->crud_model->update_operation($input_data,'trail_exam_downloads', ['id' => $input['download_id']]);
                    if($res){
                        $this->session->set_flashdata('success_message','Uploaded Successfully');
                        move_uploaded_file($_FILES["trail_answer"]["tmp_name"], "uploads/trail/answers/". $input['download_id'].'.pdf');
                        redirect('u_traildownload', 'refresh');
                    }else{
                        $this->session->set_flashdata('error_message','Not Uploaded');
                        redirect('u_traildownload', 'refresh');
                    }
                }else{
                    $this->session->set_flashdata('error_message','Please upload only pdf files');
                    redirect('u_traildownload', 'refresh');
                }
            }
        }
        }
        $page_data['page_title'] = 'Trail Exams';
        $page_data['page_name'] = 'trailexams';
        $page_data['trailexams'] = $this->crud_model->get_trailexams_info();
        $this->load->view('backend/index', $page_data);
    }
    
    public function traildownload(){
        if($this->session->userdata('role_id')!=2){
        redirect('error_404');
        }
        if(isset($_POST['exam_type']) && isset($_POST['start_date']) && isset($_POST['end_date']) )
              $page_data['trail_download'] = $this->crud_model->fetch_trail_exam_downloaded_list($this->input->post('exam_type'), $this->input->post('start_date'), $this->input->post('end_date'));
        else 
              $page_data['trail_download'] = $this->crud_model->fetch_trail_exam_downloaded_list();
       $page_data['page_title'] = 'Trail Download';
       $page_data['page_name'] = 'traildownload';
       $this->load->view('backend/index', $page_data);
    }
    
    public function mainexams(){
        if($this->session->userdata('role_id')!=2){
            redirect('error_404');
        }
        $page_data['page_title'] = 'Main Exams';
        $page_data['page_name'] = 'mainexams';
        $page_data['mainexams'] = $this->my_model->get_mainexams_info();
        $this->load->view('backend/index', $page_data);
    }
    
    public function maindownload(){
        if($this->session->userdata('role_id')!=2){
            redirect('error_404');
        }
        if($this->input->post()){
            if($this->input->post('input_type')=='answers'){
            $this->form_validation->set_rules('download_id', 'Download id', 'trim|required|xss_clean');
            if ($this->form_validation->run() == TRUE) {
                $input=$this->input->post();
                if(isset($_FILES['main_answer']['name']) && $_FILES['main_answer']['name']!="" && $mime = get_mime_by_extension($_FILES['main_answer']['name'])=='application/pdf'){
                    $input_data=array(
                        'row_status'=> 2
                    );
                    $res = $this->crud_model->update_operation($input_data,'exam_downloads', ['id' => $input['download_id']]);
                    if($res){
                        $this->session->set_flashdata('success_message','Uploaded Successfully');
                        move_uploaded_file($_FILES["main_answer"]["tmp_name"], "uploads/main/answers/". $input['download_id'].'.pdf');
                        redirect('u_maindownload', 'refresh');
                    }else{
                        $this->session->set_flashdata('error_message','Not Uploaded');
                        redirect('u_maindownload', 'refresh');
                    }
                }else{
                    $this->session->set_flashdata('error_message','Please upload only pdf files');
                    redirect('u_maindownload', 'refresh');
                }
            }
        }
        }
        if(isset($_POST['exam_type']) && isset($_POST['start_date']) && isset($_POST['end_date']) )
            $page_data['main_download'] = $this->crud_model->fetch_main_exam_downloaded_list($this->input->post('exam_type'), $this->input->post('start_date'), $this->input->post('end_date'));
            else
                $page_data['main_download'] = $this->my_model->fetch_main_exam_downloaded_list();
                $page_data['page_title'] = 'Main Download';
                $page_data['page_name'] = 'maindownload';
                $this->load->view('backend/index', $page_data);
    }
    
    public function myresults(){
        if($this->session->userdata('role_id')!=2){
        redirect('error_404');
        }
        $page_data['page_title'] = 'My Results';
        $page_data['page_name'] = 'myresults';
        $page_data['results'] = $this->crud_model->fetch_tail_exam_results();
        $this->load->view('backend/index', $page_data);
    }
    public function performancereport(){
        if($this->session->userdata('role_id')!=2){
        redirect('error_404');
        }
        $page_data['page_title'] = 'Performance Report';
        $page_data['page_name'] = 'performancereport';
       
        $this->load->view('backend/index', $page_data);
    }
    public function uploadhistory(){
        if($this->session->userdata('role_id')!=2){
        redirect('error_404');
        }
        $page_data['page_title'] = 'Upload History';
        $page_data['page_name'] = 'uploadhistory';
       
        $this->load->view('backend/index', $page_data);
    }
    public function notifications(){
        if($this->session->userdata('role_id')!=2){
        redirect('error_404');
        }
        $page_data['page_title'] = 'Notifications';
        $page_data['page_name'] = 'notifications';
       
        $this->load->view('backend/index', $page_data);
    }
    public function support(){
        if($this->session->userdata('role_id')!=2){
        redirect('error_404');
        }
        $page_data['page_title'] = 'Support';
        $page_data['page_name'] = 'support';
       
        $this->load->view('backend/index', $page_data);
    }
    public function notes(){
        if($this->session->userdata('role_id')!=2){
        redirect('error_404');
        }
        $page_data['page_title'] = 'Notes';
        $page_data['page_name'] = 'notes';
        $page_data['notes'] = $this->my_model->get_user_notes_info();
        $this->load->view('backend/index', $page_data);
    }
    public function videos(){
        if($this->session->userdata('role_id')!=2){
        redirect('error_404');
        }
        $page_data['page_title'] = 'Videos';
        $page_data['page_name'] = 'videos';
        $page_data['videos'] = $this->my_model->get_user_main_videos_info();
        $this->load->view('backend/index', $page_data);
    }
    public function guidelines(){
        if($this->session->userdata('role_id')!=2){
        redirect('error_404');
        }
        $page_data['page_title'] = 'Guidelines';
        $page_data['page_name'] = 'guidelines';
       
        $this->load->view('backend/index', $page_data);
    }
      
    function change_password() {
      if($this->input->post()){
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
if ($this->form_validation->run() == TRUE) {
    $user_id=$this->session->userdata('login_id');
    $password=$this->input->post('password');
            $res=$this->crud_model->update_user_password($password,$user_id);
            if($res){
                $this->session->set_flashdata('success_message', 'Password Updated');
            }else{
                $this->session->set_flashdata('error_message', 'Password Not Updated');
            }
            redirect(base_url() . 'change_password', 'refresh');
        }
    }
        $page_data['page_name'] = 'change_password';
        $page_data['page_title'] = 'Change Password';
        $this->load->view('backend/index', $page_data);
        }
   public function received_sms(){
        if($this->session->userdata('role_id')!=2){
        redirect('error_404');
        }
        $page_data['page_title'] = 'Received SMS';
        $page_data['page_name'] = 'received_sms';
       
        $this->load->view('backend/index', $page_data);
    }
    public function feedback(){
        if($this->session->userdata('role_id')!=2){
        redirect('error_404');
        }
        if($this->input->post()){
            $input=$this->input->post();
            $inputData=array(
                'user_id'=>$this->session->userdata('login_id'),
                'message'=>$input['message'],
            );
            $res=$this->crud_model->saving_insert_details('feedback',$inputData);
            if($res>0){
                $this->session->set_flashdata('success_message',"Feedback Sent Successfully");
            }else{
                $this->session->set_flashdata('error_message',"Feedback Not Sent");
            }
            redirect($this->session->userdata('last_page'));
        }
        $page_data['page_title'] = 'Feedback';
        $page_data['page_name'] = 'feedback';
       
        $this->load->view('backend/index', $page_data);
    }
    public function common_delete_details($type,$where,$table){
        $ret=$this->crud_model->common_delete_details($type,$where,$table);
        if($ret){
                $this->session->set_flashdata('success_message', 'Deleted Successfully');
            }else{
                $this->session->set_flashdata('error_message', 'Not Deleted');
            }
            redirect($this->session->userdata('last_page'));
    }
    function error_404(){
        $page_data['page_title'] = 'Error 404';
        $page_data['page_name'] = 'error_404';
       
        $this->load->view('backend/index', $page_data);
    }

    public function faqs($id = '')
    {
    if ($this->session->userdata('role_id') != 2) {
        redirect('error_404');
    }

    if ($id != '') {
        $id = base64_decode($id);
        $page_data['edit_data'] = $this->crud_model->get_single_faq_info($id);
    } else {
        $page_data['edit_data'] = '';
    }

    $page_data['page_title'] = "FAQ's";
    $page_data['page_name'] = 'faqs';
    $page_data['faqs'] = $this->crud_model->get_faqs_info_with_clients();

    if ($this->input->post()) {
        $input = $this->input->post();
        $input_data = array(
            'question' => $input['question'],
            'answer' => $input['answer'],
            'user_id' => $input['client_id']
        );

        if ($id == '') {
            $res = $this->crud_model->saving_insert_details('faqs', $input_data);
            if ($res > 0) {
                $this->session->set_flashdata('success_message', "FAQ's Saved Successfully");
            } else {
                $this->session->set_flashdata('error_message', "FAQ's Not Saved");
            }
        } elseif ($id != '') {
            $where['id'] = $id;
            $res = $this->crud_model->update_operation($input_data, 'faqs', $where);
            if ($res > 0) {
                $this->session->set_flashdata('success_message', "FAQ's Updated Successfully");
            } else {
                $this->session->set_flashdata('error_message', "FAQ's Not Updated");
            }
        }
        redirect('u_faqs');
    }

    $this->load->view('backend/index', $page_data);
    }
    public function team($id='')
        {
                if($this->session->userdata('role_id')!=2)
            {
                redirect('error_404');
            }
            if($id!='')
            {
                    $id=base64_decode($id);
                    $page_data['edit_data']=$this->crud_model->get_single_team_info($id);
            }else{
                    $page_data['edit_data']='';
                }
                $page_data['page_title'] = "Team Members";
                $page_data['page_name'] = 'team';
                $page_data['team'] = $this->crud_model->get_team_info_with_clients();
                if($this->input->post()){
                    $input=$this->input->post();
                    $input_data=array(
                        'review'=>$input['answer'],
                        'user_id'=>$input['client_id']

                    );
                    /*print_r($input_data);
                    die();*/
                   if($id==''){
                    $res=$this->crud_model->saving_insert_details('teams',$input_data);
                    if($res>0){
                        $this->session->set_flashdata('success_message',"team Saved Successfully");
                        move_uploaded_file($_FILES["img"]["tmp_name"], "uploads/team2/". $res.'.jpg');

                    }else{
                        $this->session->set_flashdata('error_message',"team Not Saved");
                    }
                }elseif($id!=''){
                        $where['id']=$id;
                        $res=$this->crud_model->update_operation($input_data,'teams',$where);
                    if($res>0){
                        $this->session->set_flashdata('success_message',"team Updated Successfully");
                    }else{
                        $this->session->set_flashdata('error_message',"team Not Updated");
                    }
                    }
                    redirect('u_team');
                }
                $this->load->view('backend/index', $page_data);
        }

        public function testomonial($id = '')
        {
            if($this->session->userdata('role_id')!=2)
            {
            redirect('error_404');
            }
            if($id!=''){
                $id=base64_decode($id);
                $page_data['edit_data']=$this->crud_model->get_single_testomonial_info($id);
            }else{
                $page_data['edit_data']='';
            }
            $page_data['page_title'] = "Testomonial's";
            $page_data['page_name'] = 'testomonial';
            $page_data['testomonial'] = $this->crud_model->get_testomonial_info_with_clients();
            
            if($this->input->post())
            {
                $input=$this->input->post();
                $input_data=array(
                    'review'=>$input['client'],
                    'name'=>$input['name'],
                    'user_id'=>$input['client_id']

                );
               if($id==''){
                    $res=$this->crud_model->saving_insert_details('testomonial',$input_data);
                    move_uploaded_file($_FILES["img"]["tmp_name"], "uploads/testomonial/". $res.'.jpg');

                    if($res>0){
                        $this->session->set_flashdata('success_message',"testomonial's Saved Successfully");
                    }else{
                    $this->session->set_flashdata('error_message',"testomonial's Not Saved");
                    }
                }elseif($id!=''){
                    $where['id']=$id;
                    $res=$this->crud_model->update_operation($input_data,'testomonial',$where);
                    if($res>0){
                        $this->session->set_flashdata('success_message',"testomonial's Updated Successfully");
                    }else{
                        $this->session->set_flashdata('error_message',"testomonial's Not Updated");
                    }
                }
                redirect('u_testomonial');
            }
            $this->load->view('backend/index', $page_data);
        }
         /*Aboutus*/
            public function aboutus()
{
    if ($this->session->userdata('role_id') != 2) {
        redirect('error_404');
    }

    if ($this->input->post()) {
        $input = $this->input->post();

        $data['user_id'] = $input['client_id'];
        $data['description'] = $input['message'];

        // Check if a file is uploaded
        if (!empty($_FILES['img']['name'])) {
            // File upload configuration
            $config['upload_path']   = './uploads/about/';
            $config['allowed_types'] = 'jpg';
            $config['max_size']      = 1024; // 1 MB

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('img')) {
                $data['image'] = $this->upload->data('file_name');
            } else {
                // File upload error
                $this->session->set_flashdata('img_error', $this->upload->display_errors());
                redirect($this->session->userdata('last_page'));
            }
        }

        
        $existing_record = $this->db->get_where('aboutus', array('user_id' => $input['client_id']))->row();

        if ($existing_record) {
            // If a record exists, update it
            $this->crud_model->update_aboutus($input['client_id'], $data);
            $this->session->set_flashdata('success_message', "Aboutus Updated Successfully");
            $img_id = $existing_record->id;
        } else {
            // If a record doesn't exist, insert a new one
            $img_id = $this->crud_model->insertabout($data);
            $this->session->set_flashdata('success_message', "Aboutus Inserted Successfully");
        }

        if ($img_id > 0) {
            // Move the uploaded file to the destination
            move_uploaded_file($_FILES["img"]["tmp_name"], $config['upload_path'] . $data['image']);
        }

        redirect($this->session->userdata('last_page'));
    }

    $page_data['page_title'] = 'About Us';
    $page_data['page_name'] = 'aboutus';

    $this->load->view('backend/index', $page_data);
}

    /*About us*/
    /*Banner*/
    public function add_image($id='')
        {
                if($this->session->userdata('role_id')!=2)
            {
                redirect('error_404');
            }
            if($id!='')
            {
                    $id=base64_decode($id);
                   
            }else{
                    $page_data['edit_data']='';
                }
                $page_data['page_title'] = "Banner";
                $page_data['page_name'] = 'addimage';
                if($this->input->post()){
                    $input=$this->input->post();
                    $input_data=array(
                        'user_id' => $input['client_id']

                    );
                   if($id==''){
                    $res=$this->crud_model->saving_insert_details('banner',$input_data);
                    if($res>0){
                        $this->session->set_flashdata('success_message',"Banner Saved Successfully");
                        move_uploaded_file($_FILES["img"]["tmp_name"], "uploads/wrapper/". $res.'.jpg');

                    }else{
                        $this->session->set_flashdata('error_message',"Banner Not Saved");
                    }
                }elseif($id!=''){
                        $where['id']=$id;
                        $res=$this->crud_model->update_operation($input_data,'banner',$where);
                    if($res>0){
                        $this->session->set_flashdata('success_message',"Banner Updated Successfully");
                    }else{
                        $this->session->set_flashdata('error_message',"Banner Not Updated");
                    }
                    }
                    redirect('u_addimage');
                }
                $this->load->view('backend/index', $page_data);
        }
        /*Product*/
        public function product($id = '')
{
    if ($this->session->userdata('role_id') != 2) {
        redirect('error_404');
    }

    if ($id != '') {
        $id = base64_decode($id);
        $page_data['edit_data'] = $this->crud_model->get_single_product_info($id);
    } else {
        $page_data['edit_data'] = '';
    }

    $page_data['page_title'] = "Add Product";
    $page_data['page_name'] = 'product';
    $page_data['faqs'] = $this->crud_model->get_product_info();

    // Set validation rules
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('heading', 'Heading', 'required');
    $this->form_validation->set_rules('client_id', 'Client Id', 'required');
    /*echo "string";
    die();*/
    if ($this->form_validation->run() === TRUE) {
        $input = $this->input->post();
        $input_data = array(
            'name' => $input['name'],
            'heading' => $input['heading'],
            'user_id' => $input['client_id'],
            'product_rs' => $input['price']
        );
          
        // Check if an image is uploaded
        if (!empty($_FILES['img']['name'])) {
            // File upload configuration
            $config['upload_path']   = './uploads/product/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size']      = 1024; // 1 MB
            $config['encrypt_name']  = TRUE; // Encrypt the file name for security

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('img')) {
                $input_data['image'] = $this->upload->data('file_name');
              /*  $input_data['img_width']  = 400; 
                $input_data['img_height'] = 300; */
            } else {
                // File upload error
                $this->session->set_flashdata('img_error', $this->upload->display_errors());
                log_message('error', 'Image Upload Error: ' . $this->upload->display_errors());
                redirect('product');
            }
        }

        if ($id == '') {
            $res = $this->crud_model->saving_insert_details('product', $input_data);

            if ($res > 0) {
                $this->session->set_flashdata('success_message', "Product Saved Successfully");
            } else {
                $this->session->set_flashdata('error_message', "Product Not Saved");
            }
        } elseif ($id != '') {
            $where['id'] = $id;
            $res = $this->crud_model->update_operation($input_data, 'product', $where);

            if ($res > 0) {
                $this->session->set_flashdata('success_message', "Product Updated Successfully");
            } else {
                $this->session->set_flashdata('error_message', "Product Not Updated");
            }
        }

        redirect('u_product');
    } 
   
    else {
        $this->load->view('backend/index', $page_data);
    }
}

    /*Products*/
    /*Services*/
    public function services($id = '')
    {
    if ($this->session->userdata('role_id') != 2) {
        redirect('error_404');
    }

    if ($id != '') {
        $id = base64_decode($id);
        $page_data['edit_data'] = $this->crud_model->get_single_service_info($id);
    } else {
        $page_data['edit_data'] = '';
    }

    $page_data['page_title'] = "Services";
    $page_data['page_name'] = 'services';
    $page_data['services'] = $this->crud_model->get_service_info_with_clients();

    if ($this->input->post()) {
        $input = $this->input->post();
        $input_data = array(
            'items' => $input['item'],
            'review' => $input['review'],
            'user_id' => $input['client_id']
        );

        if ($id == '') {
            $res = $this->crud_model->saving_insert_details('services', $input_data);
            if ($res > 0) {
                $this->session->set_flashdata('success_message', "Services Saved Successfully");
            } else {
                $this->session->set_flashdata('error_message', "Services Not Saved");
            }
        } elseif ($id != '') {
            $where['id'] = $id;
            $res = $this->crud_model->update_operation($input_data, 'services', $where);
            if ($res > 0) {
                $this->session->set_flashdata('success_message', "Services Updated Successfully");
            } else {
                $this->session->set_flashdata('error_message', "Services Not Updated");
            }
        }
        redirect('u_services');
    }

    $this->load->view('backend/index', $page_data);
    }
    /*services*/

}
?>