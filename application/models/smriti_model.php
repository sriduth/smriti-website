<?php
class Smriti_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_events($club_id = FALSE)
	{
		if ($club_id === FALSE)
		{
			echo "ERROR!!! .... CLUB ID MISSING";
		}

			$query = $this->db->get('events');
			return $query->result_array();
	}

	public function set_news()
	{
		$this->load->helper('url');

		$slug = url_title($this->input->post('title'), 'dash', TRUE);

		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'text' => $this->input->post('text')
		);

		return $this->db->insert('news', $data);
	}
}