<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller 
{
	public function __construct() 
     {
           parent::__construct(); 
		   $this->load->database();
		   $this->load->model('User_model');
		   $this->load->model('Language_model');
		   $this->load->model('Event_model');
		   $this->load->helper('url');
		   $this->load->helper('form');
		   $this->load->library('form_validation');
	 }
	 
	public function events()
	{	
		$pendingEventsArray = $this->Event_model->GetPendingEvents();
		$data['events'] = $pendingEventsArray;
	
		$a=array();

		foreach ($pendingEventsArray as $row) 
		{
			array_push($a, array("title" => $row->description, "start" => $row->start_date, "end" => $row->end_date));			
		}			
		
		$data['pendingEventArray'] = json_encode($a);

		$this->load->view('header');
		$this->load->view('main', $data);
		$this->load->view('footer');	
	}

	public function logout()
	{	
		$this->load->helper('url');
		$this->load->view('login');
	}

	public function navigation()
	{
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
	} 
    // quando a submissão é true chama essa função
	public function submitNewInterpreter()
	{	
		// Validações
		$this->form_validation->set_rules('name', 'name', 'required|min_length[3]|max_length[15]',
			array('required'      => 'You have not provided %s.'));
		$this->form_validation->set_rules('password', 'Password', 'required', 
			array('required' => 'A senha é obrigatória'));
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[user.email]', 
			array(
					'required'      => 'You have not provided %s.',
					'is_unique'     => 'Esse %s já está cadastrado.'
			));
	    
		if ($this->form_validation->run() == FALSE)
		{
			// formulario esta invalido.
			$this->interpreter();
		}
		else
		{
			// realiza inserção de dados no BD
			// chama a função INsert user que esta na user_model
			$this->User_model->InsertUser('IN');
			redirect('Main/navigation?lang=' .  $this->Language_model->getLanguage());
		}		
	}

	public function submitEvent()
	{
		if ($this->form_validation->run() == FALSE)
		{
			$this->event();
		}
		else
		{
			$this->Event_model->InsertEvent();
			redirect('Main/navigation?lang=' .  $this->Language_model->getLanguage());
		}
	}

	// inserido por Luíla
	/*public function submitAge()
	{
		if ($this->form_validation->run() == FALSE)
		{
			$this->event();
		}
		else
		{
			$this->Event_model->InsertEvent();
			redirect('Main/navigation?lang=' .  $this->Language_model->getLanguage());
		}
	}*/

	public function interpreter_validation($interpreterArray)
	{
		foreach ($interpreterArray as $element)
		{
			echo $element . '<br>';
		}

		// if (sizeof($interpreterArray) == 0)
		// {
		// 	$this->form_validation->set_message('interpreterSelect', 'O interprete é obrigatório');
		// 	return false;
		// }
		// else if(sizeof($interpreterArray) > 3)
		// {
		// 	$this->form_validation->set_message('interpreterSelect', 'Selecione no máximo 3 interpretes');
		// 	return false;
		// }

		 return false;
	}
	
	public function interpreter()
	{
		$this->load->view('header');
		$this->load->view('registerInterpreter');
		$this->load->view('footer');
	}

	public function event()
	{
		$data['result'] = $this->User_model->getInterpreters();
		$this->load->view('header');
		$this->load->view('registerEvent', $data);
		$this->load->view('footer');
	}


	public function report()
	{
		$this->load->view('header');
		$this->load->view('report');
		$this->load->view('footer');
	}

	public function slislist()
	{
		$data['result'] = $this->User_model->getInterpreters();
		$this->load->view('header');
		$this->load->view('slislist', $data);
		$this->load->view('footer');
	}

	// Luíla
	public function questionnaire()
	{
		$this->load->view('header');
		$this->load->view('sociodemographic');
		$this->load->view('footer');
	}

	/*
	public function newPopup()
	{
		varWindow = window.open ('popup.php', 'popup')
	}
	*/
}