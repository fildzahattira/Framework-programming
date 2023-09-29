<?php
    class restaurantModel extends CI_Model{
        function __construct()
        {
            parent::__construct();
        }
        function get_foodsMenu()
        {
            $sql = "SELECT * FROM 21_148_fildzah";
            $data = $this->db->query($sql);
            return $data->result();
        }
        function insert_foodsMenu($data)
        {
            $sql = "INSERT INTO 21_148_fildzah (name_food, category_food, price_food, calorie_food, description_food) VALUES (?,?,?,?,?)";
            $this->db->query($sql, array($data['name_food'], $data['category_food'], $data['price_food'], $data['calorie_food'], $data['description_food']));
        }
        function get_one($id_food)
        {
            $sql = "SELECT * FROM 21_148_fildzah WHERE  id_food = ?";
            $data = $this->db->query($sql, array($id_food));
            return $data->result();
        }
        function update_foodsMenu($data)
        {
            $sql = "UPDATE 21_148_fildzah SET name_food = ?, category_food = ?, price_food = ?, calorie_food = ?, description_food = ? WHERE id_food = ?";
            $this->db->query($sql, array($data['name_food'], $data['category_food'], $data['price_food'], $data['calorie_food'], $data['description_food'], $data['id_food']));
        }
        function delete_foodsMenu($id_food)
        {
            $sql = "DELETE FROM 21_148_fildzah WHERE id_food = ?";
            $this->db->query($sql, array($id_food));
        }
    }
?>