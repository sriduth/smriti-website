<?php
if (!defined('BASEPATH'))
{
    exit('No direct script access allowed');
}

class Events extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('events_model');
	}

	public function index($club = FALSE, $event = FALSE)
	{
		$event_details = $this->events_model->get_event_details($club, $event);

		$data["event_details"] = $event_details;

		$this->load->view('events_view', $data);
	}
}