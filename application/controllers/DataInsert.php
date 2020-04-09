<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
header("Access-Control-Allow-Origin: *");

class DataInsert extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function admin_creation(){
		try{
			$data=array(
				array(
					'companyid'=>1,
					'name'=>'Apanabazar Admin',
					'contactnumber'=>9876543210,
					'contactverified'=>true,
					'emailid'=>'admin@apanabazar.com',
					'emailverified'=>true,
					'address'=>'At-Apanabazar,po-Apanabazar',
					'auth'=>password_hash("ApanaBazar@123",PASSWORD_ARGON2I),
					'authactive'=>true,
					'iscomplete'=>true,
					'entryby'=>1
				)
			);
			$res=$this->Model_Db->insert(1,$data);
			if($res!=false){
				echo "Admin Creatred successfully";
			}else{
				echo "Some error occoured.";
			}
		}catch (Exception $e){
			$data['message']= "Message:".$e->getMessage();
			$data['status']=false;
			$data['error']=true;
			echo json_encode($data);
			exit();
		}
	}
}
