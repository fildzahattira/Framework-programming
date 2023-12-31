<?php 
    class restaurant extends CI_Controller{
        function __construct()
        {
            parent::__construct();
            $this->load->model('restaurantModel');
            // $this->load->model('myweb');

        }
        function index()
        {
            $data['title'] = "Food Menu";
            $data['f_menu'] = $this->restaurantModel->get_foodsMenu();
            $this->load->view('v_foodsMenu', $data);
        }
        function insert()
        {
            $data['certification'] = $this->restaurantModel->get_certification();
            if ($this->input->post()) 
            {
                $data_input_foodsMenu = $this->input->post();
                $result = $this->restaurantModel->insert_foodsMenu($data_input_foodsMenu);
                if ($result > 0){
                    //success
                    $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
                   SUCCESS! data saved
                  </div>');
                }
                else{
                    //err
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                    ERROR! fail
                   </div>');
                }
                redirect('restaurant/index');
            }
            else
            {
                $data['title'] = "ADD NEW DATA";
                $this->load->view('v_foodsMenuForm', $data);
            }
        }
        public function update($id_food = null)
        {
            $data['certification'] = $this->restaurantModel->get_certification();
            if ($this->input->post()){
                $update_data = $this->input->post();
                // print_r($update_data);
                $this->restaurantModel->update_foodsMenu($update_data);
                redirect('restaurant/index');
            }
            else{
                $data['title'] = "Update Food Menu";
                $data['f_menu'] = $this->restaurantModel->get_one($id_food);
                $this->load->view('v_foodsMenuUpdate', $data);
            }
        }
        function delete($id_food)
        {
            $this->restaurantModel->delete_foodsMenu($id_food);
            redirect('restaurant/index');
        }
    }
?>