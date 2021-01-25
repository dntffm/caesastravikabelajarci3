<?php
class About_model extends CI_Model{
	public function get_books(){
		$query = $this->db->get('books');
		return $query->result_array();
	}
}

?>
