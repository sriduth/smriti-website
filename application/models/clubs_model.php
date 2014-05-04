<?php
class Clubs_Model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_all_clubs_details()
	{
		$this->db->select('*');
		$this->db->from('clubs');
		$query = $this->db->get();

		if($query->num_rows() == 0) return '-1';

		return $query->result_array();
	}

	public function get_club_details($club)
	{
		$this->db->select('*');
		$this->db->from('clubs');
		$this->db->join('events', 'clubs.club_id = events.club_id');
		$this->db->where('club_name',$club);
		$query = $this->db->get();

		if($query->num_rows() == 0) return '-1';

		return $query->row_array();
	}
}