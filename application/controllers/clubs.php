<?php
if (!defined('BASEPATH'))
{
    exit('No direct script access allowed');
}

class Clubs extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('clubs_model');
	}

	public function index($club = FALSE)
	{
		$clubs_details = $this->clubs_model->get_all_clubs_details();

		$data["all_clubs_details"] = $clubs_details;

		$this->load->view('all_clubs_view', $data);
	}

	public function club_details($club = FALSE)
	{
		if($club == FALSE) return;

		$club_details = $this->clubs_model->get_club_details($club);

		$data["club_details"] = $club_details;

		$this->load->view('temp/club_view', $data);
	}
}