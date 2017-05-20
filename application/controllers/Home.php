<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	function __construct(){
		parent::__construct(); 


		$this->content 	= 'content';
		/*VIEW*/
		$this->content_about 	= 'about/about';
		$this->content_brisbane = 'about/brisbane';
		$this->content_perth 	= 'about/perth';
		$this->content_santiago 	= 'about/santiago';
		$this->content_buenos_aires 	= 'about/buenos_aires';

		$this->content_events 	= 'events/events';
		$this->content_upcoming 	= 'events/upcoming';
		$this->content_past 	= 'events/past';
	}

	public function index(){
		$data['content'] 	= $this->content;
		$data['fecha_principal'] = $this->newsfeed_ml->fecha_principal();
		$this->load->view('template/index',$data);
	}
	public function about(){
		$data['content'] 	= $this->content_about;
		$this->load->view('template/index',$data);
	}

	public function brisbane(){
		$data['content'] 	= $this->content_brisbane;
		$this->load->view('template/index',$data);
	}

	public function perth(){
		$data['content'] 	= $this->content_perth;
		$this->load->view('template/index',$data);
	}

	public function santiago(){
		$data['content'] 	= $this->content_santiago;
		$this->load->view('template/index',$data);
	}

	public function buenos_aires(){
		$data['content'] 	= $this->content_buenos_aires;
		$this->load->view('template/index',$data);
	}

	public function events(){
		$data['content'] 	= $this->content_events;
		$data['proximos'] = $this->newsfeed_ml->eventos_proximos();
		$this->load->view('template/index',$data);
	}

	public function upcoming(){
		$data['content'] 	= $this->content_upcoming;
		$data['eventos_proximos'] = $this->newsfeed_ml->eventos_proximos();
		$this->load->view('template/index',$data);
	}

	public function past(){
		$data['content'] 	= $this->content_past;
		$data['events_past'] = $this->newsfeed_ml->events_past();
		$this->load->view('template/index',$data);
	}

	public function join(){
		$data['content'] 	= 'join';
		$data['country'] = $this->main_model->get_countries();
		$data['interests'] = $this->main_model->get_interests();
		$data['industries'] = $this->newsfeed_ml->listado_industrias();
		$data['languages'] = $this->newsfeed_ml->listado_lenguajes();
		$data['education'] = $this->newsfeed_ml->listado_education();
		$this->load->view('template/index',$data);
	}
	public function user(){
		$data['content'] 	= 'user';
		$this->load->view('template/index',$data);
	}	
	public function traer_fecha(){
		$this->newsfeed_ml->fecha_principal();
	}
}