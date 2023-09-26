<?php 
    class libraryModel extends CI_Model{
        function __construct()
        {
            parent::__construct();
        }
        function get_category()
        {
            $sql = "SELECT * FROM category";
            $data = $this->db->query($sql);
            return $data->result();
        }
        function insert_category($data)
        {
            $sql = "INSERT INTO category (name_category) VALUES (?)";
            $this->db->query($sql, array($data['name_category']));
        }
        function get_one($id_category)
        {
            $sql = "SELECT * FROM category WHERE  id_category = ?";
            $data = $this->db->query($sql, array($id_category));
            return $data->result();
        }
        function update($data)
        {
            $sql = "UPDATE category SET name_category = ? WHERE id_category = ?";
            $this->db->query($sql, array($data['name_category'], $data['id_category']));
        }
        function delete($id_category)
        {
            $sql = "DELETE FROM category WHERE id_category = ?";
            $this->db->query($sql, array($id_category));
        }
    }

?>