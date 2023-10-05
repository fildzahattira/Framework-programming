<?php
    class restaurantModel extends CI_Model{
        function __construct()
        {
            parent::__construct();
        }
        function get_foodsMenu()
        {
            $this->db->select('foodsmenu.*, certification.id_certification AS id_certification, certification.name_certification');
            $this->db->join('certification', 'foodsmenu.id_certification = certification.id_certification');
            $this->db->from('foodsmenu');
            $this->db->order_by('id_food', 'ASC');
            $query = $this->db->get();
            return $query->result();
        }

        function get_certification()
        {
            return $this->db->get('certification')->result();
        }
        
        function insert_foodsMenu($data)
        {
            $data_insert = array(
                'name_food' => $data['name_food'],
                'category_food' => $data['category_food'],
                'price_food' => $data['price_food'],
                'calorie_food' => $data['calorie_food'],
                'description_food' => $data['description_food'],
                'id_certification' => $data['id_certification']
            ); 

            $this->db->insert('foodsmenu', $data_insert);
        }

        function get_one($id_food)
        {
            $this->db->where('id_food', $id_food);
            return $this->db->get('foodsmenu')->result();
        }

        function update_foodsMenu($data)
        {
            $data_update = array(
                'name_food' => $data['name_food'],
                'category_food' => $data['category_food'],
                'price_food' => $data['price_food'],
                'calorie_food' => $data['calorie_food'],
                'description_food' => $data['description_food'],
                'id_certification' => $data['id_certification']
            );

            $this->db->where('id_food', $data['id_food']);
            $this->db->update('foodsmenu', $data_update);

        }

        function delete_foodsMenu($id_food)
        {
            $this->db->delete('foodsmenu', array('id_food' => $id_food));
        }
    }
?>