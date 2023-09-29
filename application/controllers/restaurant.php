<?php 
    class restaurant extends CI_Controller{
        function __construct()
        {
            parent::__construct();
            $this->load->model('restaurantModel');
        }
        function index()
        {
            $data['title'] = "Food Menu";
            $data['f_menu'] = $this->restaurantModel->get_foodsMenu();
            $this->load->view('v_foodsMenu', $data);
        }
        function insert()
        {
            if ($this->input->post()) 
            {
                $data_input_foodsMenu = $this->input->post();
                $this->restaurantModel->insert_foodsMenu($data_input_foodsMenu);
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
            if ($this->input->post()){
                $update_data = $this->input->post();
                $this->restaurantModel->update_foodsMenu($update_data);
                redirect('restaurant');
            }
            else{
                $data['judul'] = "Update Food Menu";
                $data['f_menu'] = $this->restaurantModel->get_one($id_food);
                $this->load->view('v_foodsMenuUpdate', $data);
            }
        }
        function delete($id_food)
        {
            $this->restaurantModel->delete_foodsMenu($id_food);
            redirect('restaurant');
        }
    }
?>