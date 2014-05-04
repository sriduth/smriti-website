<?php
class Events_Model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_event_details($club, $event)
	{
		$this->db->select('*');
		$this->db->from('clubs');
		$this->db->join('events', 'clubs.club_id = events.club_id');
		$this->db->join('photos', 'photos.club_id = events.club_id AND events.event_id = photos.event_id');
		$this->db->where(array('club_name' => $club, 'event_name' => $event));
		$query = $this->db->get();

		//echo $this->db->_error_message();

		if($query->num_rows() == 0) return '-1';

		

		return $query->row_array();
	}
}