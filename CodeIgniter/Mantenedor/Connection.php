<?php
/*
 ''' -----------------------------------------------------------------------------
 ''' Author   : Trx-Homie
 ''' Project  : PHP CodeIgniter
 ''' Class    : Connection
 ''' Github   : HomieStart
 ''' License  : Creative Commons
 ''' -----------------------------------------------------------------------------
 ''' <summary>
 ''' This class only used for Connections with PDO
 ''' </summary>
 ''' </version>0.1
 ''' </version>
 ''' <remarks>
 ''' If you need any help, you can Contact me
 ''' </remarks>
 ''' <history>
 '''    [FQ-HomieStart] Created
 ''' </history>
 '''
 ''' -----------------------------------------------------------------------------*/

//++IN CONFIG APP
//Define autoload['libraries'] = array('database')
//Config the Driver on DataBase Parameters

//IN MODEL
class My_DB extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	function getAll(){
		$query = $this->db->get('My_Value_Column');
		return $query->result();
	}
}

//IN CONTROLER
class Welcome extends CI_Controller{
	public function index(){
		$this->load->model('testModel');
		$arr->$this->testModel->getAll();
		$Result_Set = json_encode($arr);
		//SendTO
		$this->load->view('MyPage', $Result_Set);
	}
}

?>
