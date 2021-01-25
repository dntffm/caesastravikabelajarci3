<?php
class Book_model extends CI_Model{
    public function getAll()
    {
        return $this->db->get('books')->result_array();
    }

    public function getById($id)
    {
        return $this->db->query('SELECT * FROM books WHERE id = '.$id)->result_array();
    }

    public function updateData($data) {
 
        if($this->db->update('books', $data,array('id' => $data["id"]))){

            return true;
        }
    }

    public function deleteData($id)
    {
        if($this->db->delete('books',array('id' => $id))){
            return true;
        }
    }
}