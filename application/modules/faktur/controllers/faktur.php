<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class faktur extends CI_Controller {
	
	
	function index($uri=0)
	{
		
	
		//pr($this->session->userdata);exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			$session['session']=array();
			$session['session']=$this->session->userdata;
			$d['dt_sj_finish'] = $this->app_load_data_model->load_sj_finish($GLOBALS['site_limit_medium'],$uri);
			$d['dt_retrieve'] = $this->app_load_data_model->load_data_faktur($GLOBALS['site_limit_medium'],$uri);
			
			$this->load->view($GLOBALS['site_theme']."/bg_header",$session);
 			$this->load->view($GLOBALS['site_theme']."/bg_left");
 			$this->load->view($GLOBALS['site_theme']."/faktur/listfaktur",$d);
 			$this->load->view($GLOBALS['site_theme']."/bg_footer");
		}
		else
		{
			redirect("login");
		}
	}
	function createfaktur()
	{
		//pr('masuk');exit;
		//pr($this->session->userdata);exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			//SESSION TO VIEW
			$session['session']=array();
			$session['session']=$this->session->userdata;
			//pr($session['session']);exit;
			$get = $this->db->get("bahana_client")->result();
			$getcar = $this->db->get("bahana_car")->result();
			$getso= $this->db->get("bahana_sales_order")->result();
			//GET LAST ID FOR AUTONUMBER FA
			$NewSO=$this->GetNewSO();
			//GET LAST ID FOR AUTONUMBER FA
			$Newfa=$this->GetNewFA();
			
			
			//VIEW PROFILE		
			$d['data']= $get;
			$d['car']= $getcar;
			$d['getso']= $getso;
			$d['autonumberso']=$NewSO;
			$d['autonumberfa']=$Newfa;
			$d['sesi']=$session['session'];

			$d['datecreate']=date('Y-m-d');
			$d['dateupdate']=date('Y-m-d');
			$d['timecreate']=date('h:i:s');
			$d['timeupdate']=date('h:i:s');
			
			$d['statusview'] = $this->session->flashdata('statusview');

			$this->load->view($GLOBALS['site_theme']."/bg_header",$session);
 			$this->load->view($GLOBALS['site_theme']."/bg_left");
 			$this->load->view($GLOBALS['site_theme']."/faktur/createfaktur",$d);
 			$this->load->view($GLOBALS['site_theme']."/bg_footer");
		}
		else
		{
			redirect("login");
		}
	}


	function approved($idfaktur)
	{
		//pr('masuk');exit;
		//pr($this->session->userdata);exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			//$id['NomorFaktur'] = $this->input->get('NoFA', TRUE);
			$id['NomorFaktur'] = $idfaktur;
			$get = $this->db->get_where("bahana_faktur",$id)->row();
			$getclient = $this->db->get("bahana_client")->result();
			$getcar = $this->db->get("bahana_car")->result();
			$d['data']= $getclient;
			$d['car']= $getcar;

			//pr($get);exit;
	
			$d['id'] = $get->id;
			$d['NomorSO'] = $get->NomorSO;
			$d['NomorFaktur'] = $get->NomorFaktur;
			$d['DateCreate'] = $get->DateCreate;
			$d['TimeCreate'] = $get->TimeCreate;
			$d['DateUpdate'] = $get->DateUpdate;
			$d['TimeUpdate'] = $get->TimeUpdate;
			$d['DataMobil'] = $get->DataMobil;
			$d['TotalSelling'] = $get->TotalSelling;
			$d['Notes'] = $get->Notes;
			$d['status'] = $get->status;
			$d['create_by'] = $get->create_by;
			$d['approved_by'] = $get->approved_by;
			$d['update_by'] = $get->update_by;
			$d['vendor'] = $get->vendor;
			$d['TglSewa'] = $get->TglSewa;
			$d['Hari'] = $get->Hari;
			$d['buying'] = $get->buying;
			$d['Tujuan'] = $get->Tujuan;
			$d['selling'] = $get->selling;
			$d['client'] = $get->client;


				//session TO view
			$session['session']=array();
			$session['session']=$this->session->userdata;
			$session['sesi']=$this->session->userdata;
			$d['dateapproved']=date('Y-m-d');
			$d['timeapproved']=date('h:i:s');
			//pr($session);exit;
			$this->load->view($GLOBALS['site_theme']."/bg_header",$session);
 			$this->load->view($GLOBALS['site_theme']."/bg_left");
 			$this->load->view($GLOBALS['site_theme']."/faktur/approvefaktur",$d);
 			$this->load->view($GLOBALS['site_theme']."/bg_footer");
		}
		else
		{
			redirect("login");
		}
	}
	
	function update($idfaktur)
	{
		//pr('masuk');exit;
		//pr($this->session->userdata);exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			//$id['NomorFaktur'] = $this->input->get('NoFA', TRUE);
			$id['NomorFaktur'] = $idfaktur;
			$get = $this->db->get_where("bahana_faktur",$id)->row();
			$getclient = $this->db->get("bahana_client")->result();
			$getcar = $this->db->get("bahana_car")->result();
			$d['data']= $getclient;
			$d['car']= $getcar;

			//pr($get);exit;
	
			$d['id'] = $get->id;
			$d['NomorSO'] = $get->NomorSO;
			$d['NomorFaktur'] = $get->NomorFaktur;
			$d['DateCreate'] = $get->DateCreate;
			$d['TimeCreate'] = $get->TimeCreate;
			$d['DateUpdate'] = $get->DateUpdate;
			$d['TimeUpdate'] = $get->TimeUpdate;
			$d['DataMobil'] = $get->DataMobil;
			$d['TotalSelling'] = $get->TotalSelling;
			$d['Notes'] = $get->Notes;
			$d['status'] = $get->status;
			$d['create_by'] = $get->create_by;
			$d['approved_by'] = $get->approved_by;
			$d['update_by'] = $get->update_by;
			$d['vendor'] = $get->vendor;
			$d['TglSewa'] = $get->TglSewa;
			$d['Hari'] = $get->Hari;
			$d['buying'] = $get->buying;
			$d['Tujuan'] = $get->Tujuan;
			$d['selling'] = $get->selling;
			$d['client'] = $get->client;


				//session TO view
			$session['session']=array();
			$session['session']=$this->session->userdata;
			$session['sesi']=$this->session->userdata;
			$d['dateupdated']=date('Y-m-d');
			$d['timeupdated']=date('h:i:s');
			//pr($session);exit;
			$this->load->view($GLOBALS['site_theme']."/bg_header",$session);
 			$this->load->view($GLOBALS['site_theme']."/bg_left");
 			$this->load->view($GLOBALS['site_theme']."/faktur/updatefaktur",$d);
 			$this->load->view($GLOBALS['site_theme']."/bg_footer");
		}
		else
		{
			redirect("login");
		}
	}
	
	
function viewfaktur()
	{
		//pr('masuk');exit;
		//pr($this->session->userdata);exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			$id['NomorFaktur'] = $this->input->get('NoFA');
			$get = $this->db->get_where("bahana_faktur",$id)->row();
			$getclient = $this->db->get("bahana_client")->result();
			$getcar = $this->db->get("bahana_car")->result();
			$d['data']= $getclient;
			$d['car']= $getcar;

			//pr($get);exit;
	
			$d['id'] = $get->id;
			$d['NomorSO'] = $get->NomorSO;
			$d['NomorFaktur'] = $get->NomorFaktur;
			$d['DateCreate'] = $get->DateCreate;
			$d['TimeCreate'] = $get->TimeCreate;
			$d['DateUpdate'] = $get->DateUpdate;
			$d['TimeUpdate'] = $get->TimeUpdate;
			$d['DataMobil'] = $get->DataMobil;
			$d['TotalSelling'] = $get->TotalSelling;
			$d['Notes'] = $get->Notes;
			$d['status'] = $get->status;
			$d['create_by'] = $get->create_by;
			$d['approved_by'] = $get->approved_by;
			$d['update_by'] = $get->update_by;
			$d['vendor'] = $get->vendor;
			$d['TglSewa'] = $get->TglSewa;
			$d['Hari'] = $get->Hari;
			$d['buying'] = $get->buying;
			$d['Tujuan'] = $get->Tujuan;
			$d['selling'] = $get->selling;
			$d['client'] = $get->client;


				//session TO view
			$session['session']=array();
			$session['session']=$this->session->userdata;

			$d['dateapproved']=date('Y-m-d');
			$d['timeapproved']=date('h:i:s');
			$this->load->view($GLOBALS['site_theme']."/faktur/viewfaktur",$d);
 			
		}
		else
		{
			redirect("login");
		}
	}

	
	function changecar(){

			$idcar=$_POST['id'];
			$idcars['id_car'] = $idcar;
			$get = $this->db->get_where("bahana_car",$idcars)->row();
			$data = $get->VendorName;
			//array('status' => 1, 'file' => '')
			if($data){
				echo json_encode(array('status' => 1, 'file' => ''.$data.''))	;			
			}else{
				echo json_encode(array('status' => 0)	)	;		
			}

	}

	function pilihso(){

			$idso['id']=$_POST['id'];
			
			if($idso['id']=='NewSO'){

					$NewSO=$this->GetNewSO();
					$Newfa=$this->GetNewFA();
					$data='<label class="col-sm-3 control-label" for="no-order">No. Sales Order</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="no-order" name="NewSO" placeholder="auto.." value="'.$NewSO.'" readonly>
							</div>';
					//pr($Newfa);exit;
					echo json_encode(array('status' => 1, 'file' => ''.$data.'','NoFA'=>$Newfa))	;			
				
				
			}else{
				$query = $this->db->get("bahana_sales_order");
				//pr($query->result());exit;
				
				$resarr=array();
				$resarrnew=array();
							
						foreach ($query->result() as $key => $value) {
							$arr1=array('id' => $value->NomorSO);
							$arr2=array('text' => $value->NomorSO);
							
							$resarrnew[$key]=array_merge($arr1,$arr2);

						}
				//$resarrnew[]=array_merge($resarr['id'], $resarr['text']);
        		//pr($resarrnew);exit;
				
				if($resarrnew){
					echo json_encode(array('status' => 1, 'file' => $resarrnew))	;			
				}else{
					echo json_encode(array('status' => 0)	)	;		
				}

			}

	}
	
	
	function simpan()
	{
		//pr($_FILES);
		//pr($_POST);exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			
			
			//session TO view
			$session['session']=array();
			$session['session']=$this->session->userdata;
			//pr($_FILES);exit;
			//pr($_POST);exit;
			
			$JenisSimpan=$this->security->xss_clean($this->input->post('JenisSimpan'));
			
   			//pr($_POST);exit;
			//TAMBAH DATA
			if($JenisSimpan==1){
			//SO	
			if(isset($_POST['r1'])){$JenisSO= $this->security->xss_clean($this->input->post('r1'));}
			//Condition SO NEW and OLD
			if($JenisSO=="NewSO"){
				$dt['NomorSO']=$this->security->xss_clean($this->input->post('NewSO'));
			}else{
				$dt['NomorSO']=$this->security->xss_clean($this->input->post('FAOldSo'));
			}

			if(isset($_POST['NoFA'])){$dt['NomorFaktur'] = $this->security->xss_clean($this->input->post('NoFA'));}
			if(isset($_POST['datecreate'])){$dt['DateCreate'] = $this->security->xss_clean($this->input->post('datecreate'));}
			if(isset($_POST['timecreate'])){$dt['timecreate'] = $this->security->xss_clean($this->input->post('timecreate'));}
			if(isset($_POST['client'])){$dt['client'] = $this->security->xss_clean($this->input->post('client'));}
			if(isset($_POST['Mobil'])){$dt['DataMobil'] = $this->security->xss_clean($this->input->post('Mobil'));}
			if(isset($_POST['Vendor'])){$dt['vendor'] = $this->security->xss_clean($this->input->post('Vendor'));}
			if(isset($_POST['TglSewa'])){
				$tglsewa = $this->security->xss_clean($this->input->post('TglSewa'));
				$myDateTime = DateTime::createFromFormat('d/m/Y', $tglsewa);
				$dt['TglSewa'] = $myDateTime->format('Y-m-d');
			}
			
			//pr($newDateString);exit;
			if(isset($_POST['hari'])){$dt['Hari'] = $this->security->xss_clean($this->input->post('hari'));}
			if(isset($_POST['tujuan'])){$dt['Tujuan'] = $this->security->xss_clean($this->input->post('tujuan'));}
			if(isset($_POST['buying'])){$dt['buying'] = $this->security->xss_clean($this->input->post('buying'));}
			if(isset($_POST['selling'])){$dt['selling'] = $this->security->xss_clean($this->input->post('selling'));}
			if(isset($_POST['totalselling'])){$dt['TotalSelling'] = $this->security->xss_clean($this->input->post('totalselling'));}
			if(isset($_POST['Notes'])){$dt['Notes'] = $this->security->xss_clean($this->input->post('Notes'));}

			//APPROVED DATA
			if(isset($_POST['NomorFaktur'])){$ApproveDt['NomorFaktur'] = $this->security->xss_clean($this->input->post('NomorFaktur'));}
			
			$dt['status'] = 1;
			$dt['create_by'] = $this->session->userdata['id'];
			
			//pr($this->session->userdata['id']);exit;
			//Execution
			$pars['NomorSO']=$dt['NomorSO'];
				//KALO NEW
				$this->db->where('NomorSO',$pars['NomorSO']);
	   			$q = $this->db->get('bahana_sales_order');
				if ( $q->num_rows() == 0 ) 
				{
					$this->db->insert("bahana_sales_order",$pars);
				}		

				$result=$this->db->insert("bahana_faktur",$dt);
				//pr($result);exit;
				if($result>0){
					$this->session->set_flashdata('statusview', 'berhasil');
				}
				
				redirect("faktur/createfaktur");

			}else if($JenisSimpan==2){
			//KALO APPROVED
				if(isset($_POST['NomorFaktur'])){$ApproveDt['NomorFaktur'] = $this->security->xss_clean($this->input->post('NomorFaktur'));}
				if(isset($_POST['timeapproved'])){$ApproveDt['TimeApprove'] = $this->security->xss_clean($this->input->post('timeapproved'));}
				if(isset($_POST['dateapproved'])){$ApproveDt['DateApprove'] = $this->security->xss_clean($this->input->post('dateapproved'));}
				if(isset($_POST['JenisSimpan'])){$ApproveDt['status'] = $this->security->xss_clean($this->input->post('JenisSimpan'));}
				$ApproveDt['approved_by'] =$this->session->userdata['id'];
				$this->db->where('NomorFaktur', $ApproveDt['NomorFaktur']);
				$this->db->update("bahana_faktur",$ApproveDt);

				redirect("faktur");
				
			}
			
			else if($JenisSimpan==4){
			//KALO Update
				if(isset($_POST['NomorFaktur'])){$ApproveDt['NomorFaktur'] = $this->security->xss_clean($this->input->post('NomorFaktur'));}
				if(isset($_POST['timeupdated'])){$ApproveDt['TimeUpdate'] = $this->security->xss_clean($this->input->post('timeupdated'));}
				if(isset($_POST['dateupdated'])){$ApproveDt['DateUpdate'] = $this->security->xss_clean($this->input->post('dateupdated'));}
				if(isset($_POST['JenisSimpan'])){$ApproveDt['status'] = $this->security->xss_clean($this->input->post('JenisSimpan'));}
				$ApproveDt['update_by'] =$this->session->userdata['id'];
				$this->db->where('NomorFaktur', $ApproveDt['NomorFaktur']);
				$this->db->update("bahana_faktur",$ApproveDt);

				redirect("faktur");
				
			}
			
		}
		else
		{
			redirect("login");
		}
	}
	
	
	
	function member(){
		
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
		    $session['session']=array();
			$session['session']=$this->session->userdata;
			
			$d['dt_retrieve'] = $this->app_load_data_model->index_table_user();
			//pr($d);exit;
			$this->load->view($GLOBALS['site_theme']."/bg_header",$session);
 			$this->load->view($GLOBALS['site_theme']."/bg_left");
 			$this->load->view($GLOBALS['site_theme']."/user/member-profile",$d);
 			$this->load->view($GLOBALS['site_theme']."/bg_footer");
		}
		else
		{
			redirect("login");
		}
	}
	function hapus($id_param)
	{
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			$id['id'] = $id_param;
			$get = $this->db->delete("user",$id);
			redirect("dashboard");
		}
		else
		{
			redirect("login");
		}
	}
	function GetNewSO(){
			//GET LAST ID FOR AUTONUMBER FA
			$tot_hal_so = $this->db->query("select MAX(NomorSO) as NomorSO from  bahana_faktur");
			$ParsAuto_so=$tot_hal_so->result();
			//pr($ParsAuto_so);exit;
			$autonumber_so="";
			if($ParsAuto_so[0]->NomorSO != null || $ParsAuto_so[0]->NomorSO != ""){
				$ParsAutonumber_so=$ParsAuto_so[0]->NomorSO;
				$autonumber_so=autonumber($ParsAutonumber_so, 11, 4);
			}else{
				//pr(date('Ymd'));exit;
				$autonumber_so=autonumber('SO-'.date('Ymd').'.', 11, 4);
			}
			return $autonumber_so;

	}

	function GetNewFA(){

			//GET LAST ID FOR AUTONUMBER FA
			$tot_hal = $this->db->query("select MAX(NomorFaktur) as NomorFaktur from  bahana_faktur");
			$ParsAuto=$tot_hal->result();
			$autonumber="";
			if($ParsAuto[0]->NomorFaktur != null || $ParsAuto[0]->NomorFaktur != ""){
				$ParsAutonumber=$ParsAuto[0]->NomorFaktur;
				$autonumber=autonumber($ParsAutonumber, 11, 4);
			}else{
				$autonumber=autonumber('FA-'.date('Ymd').'.', 11, 4);
			}

			return $autonumber;
	}
	
}
