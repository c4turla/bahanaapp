<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* load the MX_Loader class */
require APPPATH."third_party/MX/Loader.php";

class MY_Loader extends MX_Loader {

	 public function template($template_name, $vars = array(), $return = FALSE)
	    {

	    	$session['session']=array();
			$session['session']=$this->session->userdata;
				
	 		//Total Faktur
			$CountFaktur = $this->db->query("select count(*) as total from bahana_faktur bf where bf.`status`=1");
			$totalfaktur = $CountFaktur->result();
			$res['totalfakturnew']   = $totalfaktur[0]->total;

			//Total Faktur
			$CountFaktur2 = $this->db->query("select count(*) as total from bahana_faktur bf where bf.`status`=2");
			$totalfaktur2 = $CountFaktur2->result();
			$res['totalfakturapprove']   = $totalfaktur2[0]->total;

			//Total Faktur
			$CountFaktur3 = $this->db->query("select count(*) as total from bahana_faktur bf where bf.`status`=3");
			$totalfaktur3 = $CountFaktur3->result();
			$res['totalfakturupdate']   = $totalfaktur3[0]->total;
			
			//Total Faktur
			$CountFaktur4 = $this->db->query("select count(*) as total from bahana_faktur bf where bf.`status`=4");
			$totalfaktur4 = $CountFaktur4->result();
			$res['totalfakturfinish']  = $totalfaktur4[0]->total;


			//Total SO
			$CountSO = $this->db->query("select count(*) as total from bahana_sales_order");
			$totalSO = $CountFaktur4->result();
			$res['totalso']  = $totalSO[0]->total;

			//Total Client
			$CountClient = $this->db->query("select count(*) as total from bahana_client");
			$totalClient = $CountClient->result();
			$res['totalClient']  = $totalClient[0]->total;

			//Total Client
			$CountCars = $this->db->query("select count(*) as total from bahana_car");
			$totalCars = $CountClient->result();
			$res['totalCars']  = $totalCars[0]->total;

			//Total Drivers
			$CountDrivers = $this->db->query("select count(*) as total from bahana_driver");
			$totalDrivers = $CountDrivers->result();
			$res['totalDrivers']  = $totalDrivers[0]->total;

	 		$res['arraymenu']   = array();         
			foreach($session['session']['menu'] as $val){
			   if($val['parent_id'] != 0){
			       $res['arraymenu'][$val['parent_id']]['childnya'][] = $val;
			   }
			   else{
			       $res['arraymenu'][$val['menu_id']] = $val;
			   }
			}
			//pr($res['arraymenu']);exit;
	        $content  = $this->view($GLOBALS['site_theme']."/bg_header",$session);
	        $content  = $this->view($GLOBALS['site_theme']."/bg_left",$res);
	        $content .= $this->view($template_name, $vars, $return);
	        $content .= $this->view($GLOBALS['site_theme']."/bg_footer");

	        if ($return)
	        {
	            return $content;
	        }
	    }
}