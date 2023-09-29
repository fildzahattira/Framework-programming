<?php 
    class library extends CI_Controller{
        function __construct()
        {
            parent::__construct();
            $this->load->model('libraryModel');
        }
        //menampilkan data cgry
        function index()
        {
            //ambil data dr model
            $data['judul'] = "BOOK CATEGORY DATA";
            $data['cgry'] = $this->libraryModel->get_category();
            //ambil template tampilan dr view
            $this->load->view('v_library', $data);
        }
        // function form()
        // {
        //     $data['judul'] = "INPUT DATA";
        //     $this->load->view('v_form', $data);
        // }
        function insert()
        {
            if ($this->input->post()) {
                $data_input_user = $this->input->post();
                //print_r($data_input_user);
                //exit;
                $this->libraryModel->insert_category($data_input_user);
                redirect('library/index');
            }
            else{
                $data['judul'] = "INPUT DATA";
                $this->load->view('v_libraryForm', $data);
            }
        }
        public function update($id_category = null)
        {
            if ($this->input->post()){
                //proses update
                $update_data = $this->input->post();
                $this->libraryModel->update($update_data);
                redirect('library');
            }
            else{
                $data['judul'] = "UPDATE DATA";
                $data['cgry'] = $this->libraryModel->get_one($id_category);
                $this->load->view('v_libraryUpdate', $data);
            }
        }
        function delete($id_category)
        {
            $this->libraryModel->delete($id_category);
            redirect('library');
        }
    }
?>
