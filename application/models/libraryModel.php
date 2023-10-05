<?php 
    class libraryModel extends CI_Model{
        function __construct()
        {
            parent::__construct();
        }
        function get_category()
        {
            //RAW SQL
            // $sql = "SELECT * FROM category";
            // $data = $this->db->query($sql);
            // return $data->result();

            //QUERY BUILDER
            return $this->db->get('category')->result();
        }
        function insert_category($data)
        {
            // $sql = "INSERT INTO category (name_category) VALUES (?)";
            // $this->db->query($sql, array($data['name_category']));
            
            //QUERY BUILDER
            $data_insert = array(
                'name_category' => $data['name_category']
            );

            $this->db->insert('category', $data_insert);
        }
        function get_one($id_category)
        {
            $sql = "SELECT * FROM category WHERE  id_category = ?";
            $data = $this->db->query($sql, array($id_category));
            return $data->result();
        }
        function update($data)
        {
            // $sql = "UPDATE category SET name_category = ? WHERE id_category = ?";
            // $this->db->query($sql, array($data['name_category'], $data['id_category']));

            //QUERY BUILDER
            $data_update = array(
                'name_category' => $data['name_category']
            );

            $this->db->where('id_category', $data['id_category']);
            $this->db->update('category', $data_update);
        }
        function delete($id_category)
        {
            // $sql = "DELETE FROM category WHERE id_category = ?";
            // $this->db->query($sql, array($id_category));

            //QUERY BUILDER
            $this->db->where('id_category', $id_category);
            $this->db->delete('category');
        }
    }

?>