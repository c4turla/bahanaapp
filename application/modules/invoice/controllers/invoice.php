<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class invoice extends CI_Controller {
	
	
	function index($uri=0)
	{
		
	
		//pr($this->session->userdata);exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			$session['session']=array();
			$session['session']=$this->session->userdata;
			$d['sesi']=$session['session'];
			$d['dt_retrieve'] = $this->app_load_data_model->load_data_invoice($GLOBALS['site_limit_medium'],$uri);
			$this->load->template($GLOBALS['site_theme']."/invoice/listinvoice",$d);
		}
		else
		{
			redirect("login");
		}
	}
	function createinvoice()
	{
		//pr('masuk');exit;
		//pr($this->session->userdata);exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			$session['session']=array();
			$session['session']=$this->session->userdata;
			$d['sesi']=$session['session'];
			$get = $this->db->get("bahana_client")->result();
			$getcar = $this->db->get("bahana_car")->result();
			$getdriver = $this->db->get("bahana_driver")->result();
			$fakturlist = $this->db->query("select * from bahana_faktur where status=4")->result();
			//pr($fakturlist);exit;
			//GET LAST ID FOR AUTONUMBER FA
			$Newsj=$this->GetNewSJ();
			//VIEW PROFILE		
			$d['data']= $get;
			$d['car']= $getcar;
			$d['driver']= $getdriver;
			$d['autonumbersj']=$Newsj;
			$d['statusview'] = $this->session->flashdata('statusview');
			$d['fakturlist']=$fakturlist;


			$d['datecreate']=date('Y-m-d');
			$d['dateupdate']=date('Y-m-d');
			$d['timecreate']=date('h:i:s');
			$d['timeupdate']=date('h:i:s');

			$this->load->template($GLOBALS['site_theme']."/invoice/createinvoice",$d);

		}
		else
		{
			redirect("login");
		}
	}


	function approved()
	{
		//pr('masuk');exit;
		//pr($this->session->userdata);exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			$id['NomorSJ'] = $this->input->get('NoSJ');
			$get = $this->db->get_where("bahana_surat_jalan",$id)->row();
			$getclient = $this->db->get("bahana_client")->result();
			$getcar = $this->db->get("bahana_car")->result();
			
			$d['id']=$get->id;
			$d['NomorFaktur']=$get->NomorFaktur;
			$d['NomorSJ']=$get->NomorSJ;
			$d['DateCreate']=$get->DateCreate;
			$d['TimeCreate']=$get->TimeCreate;
			$d['DateUpdate']=$get->DateUpdate;
			$d['TimeUpdate']=$get->TimeUpdate;
			$d['DataMobil']=$get->DataMobil;
			$d['Client']=$get->Client;
			$d['kmstart']=$get->kmstart;
			$d['kmfinish']=$get->kmfinish;
			$d['create_by']=$get->create_by;
			$d['approved_by']=$get->approved_by;
			$d['update_by']=$get->update_by;
			$d['Driver']=$get->Driver;
			$d['Namatamu']=$get->Namatamu;
			$d['Telptamu']=$get->Telptamu;
			$d['Alamatjemput']=$get->Alamatjemput;
			$d['DateJemput']=$get->DateJemput;
			$d['timemulai']=$get->timemulai;
			$d['timeakhir']=$get->timeakhir;
			$d['timetotal']=$get->timetotal;
			$d['overtime']=$get->overtime;
			$d['notatime']=$get->notatime;
			$d['rute']=unserialize($get->rute);
			$d['r1']=$get->r1;
			$d['r2']=$get->r2;
			$d['r3']=$get->r3;
			$d['r4']=$get->r4;
			$d['r5']=$get->r5;
			$d['r6']=$get->r6;
			$d['r7']=$get->r7;
			$d['r8']=$get->r8;
			$d['keterangan']=$get->keterangan;
			$d['note']=$get->note;
			$d['ricianuangjalan']=$get->ricianuangjalan;
			$d['status']=$get->status;
			$d['uangjalan']=$get->uangjalan;

			//pr($d['notatime']);exit;
				//session TO view
			$session['session']=array();
			$session['session']=$this->session->userdata;
			$d['sesi']=$session['session'];

			$d['statusview'] = $this->session->flashdata('statusview');

			$get = $this->db->get("bahana_client")->result();
			$getcar = $this->db->get("bahana_car")->result();
			$getdriver = $this->db->get("bahana_driver")->result();
			$fakturlist = $this->db->get("bahana_faktur")->result();
		
			//pr($getcar);exit;

			$d['data']= $get;
			$d['car']= $getcar;
			$d['driver']= $getdriver;
			
			$d['statusview'] = $this->session->flashdata('statusview');
			$d['fakturlist']=$fakturlist;
			$d['dateapproved']=date('Y-m-d');
			$d['timeapproved']=date('h:i:s');
			//pr($session);exit;
			$this->load->template($GLOBALS['site_theme']."/suratjalan/approvesj",$d);
	
		}
		else
		{
			redirect("login");
		}
	}
	function viewsuratjalan()
	{
		//pr('masuk');exit;
		//pr($this->session->userdata);exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			$id['NomorSJ'] = $this->input->get('NoSJ');
			$get = $this->db->get_where("bahana_surat_jalan",$id)->row();
			$getclient = $this->db->get("bahana_client")->result();
			$getcar = $this->db->get("bahana_car")->result();
			
			$d['id']=$get->id;
			$d['NomorFaktur']=$get->NomorFaktur;
			$d['NomorSJ']=$get->NomorSJ;
			$d['DateCreate']=$get->DateCreate;
			$d['TimeCreate']=$get->TimeCreate;
			$d['DateUpdate']=$get->DateUpdate;
			$d['TimeUpdate']=$get->TimeUpdate;
			$d['DataMobil']=$get->DataMobil;
			$d['Client']=$get->Client;
			$d['kmstart']=$get->kmstart;
			$d['kmfinish']=$get->kmfinish;
			$d['create_by']=$get->create_by;
			$d['approved_by']=$get->approved_by;
			$d['update_by']=$get->update_by;
			$d['Driver']=$get->Driver;
			$d['Namatamu']=$get->Namatamu;
			$d['Telptamu']=$get->Telptamu;
			$d['Alamatjemput']=$get->Alamatjemput;
			$d['DateJemput']=$get->DateJemput;
			$d['timemulai']=$get->timemulai;
			$d['timeakhir']=$get->timeakhir;
			$d['timetotal']=$get->timetotal;
			$d['overtime']=$get->overtime;
			$d['notatime']=$get->notatime;
			$d['rute']=unserialize($get->rute);
			$d['r1']=$get->r1;
			$d['r2']=$get->r2;
			$d['r3']=$get->r3;
			$d['r4']=$get->r4;
			$d['r5']=$get->r5;
			$d['r6']=$get->r6;
			$d['r7']=$get->r7;
			$d['r8']=$get->r8;
			$d['keterangan']=$get->keterangan;
			$d['note']=$get->note;
			$d['ricianuangjalan']=$get->ricianuangjalan;
			$d['status']=$get->status;
			$d['uangjalan']=$get->uangjalan;

			//pr($d['notatime']);exit;
				//session TO view
			$session['session']=array();
			$session['session']=$this->session->userdata;
			$d['sesi']=$session['session'];

			$d['statusview'] = $this->session->flashdata('statusview');

			$get = $this->db->get("bahana_client")->result();
			$getcar = $this->db->get("bahana_car")->result();
			$getdriver = $this->db->get("bahana_driver")->result();
			$fakturlist = $this->db->get("bahana_faktur")->result();
		
			//pr($getcar);exit;

			$d['data']= $get;
			$d['car']= $getcar;
			$d['driver']= $getdriver;
			
			$d['statusview'] = $this->session->flashdata('statusview');
			$d['fakturlist']=$fakturlist;


			$d['dateapproved']=date('Y-m-d');
			$d['timeapproved']=date('h:i:s');
			//pr($session);exit;
			$this->load->template($GLOBALS['site_theme']."/suratjalan/viewsuratjalan",$d);
 		}
		else
		{
			redirect("login");
		}
	}
	function GetDataFaktur(){

			$idfaktur=$_POST['id'];
					
			$ResultFaktur = $this->db->query("select BC.nameClient as NamaClient,bf.Hari as Hari
							from bahana_faktur bf 
							LEFT JOIN bahana_client BC on bf.client=BC.id
							where bf.NomorFaktur='".$idfaktur."'");

			$data = $ResultFaktur->result();

			//pr($data[0]->NamaClient);exit;
			
			if($data){
				echo json_encode(array('status' => 1, 'DataClient' => ''.$data[0]->NamaClient.'','Hari' =>''.$data[0]->Hari.'' ))	;			
			}else{
				echo json_encode(array('status' => 0)	)	;		
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
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			
			
			//session TO view
			$session['session']=array();
			$session['session']=$this->session->userdata;
			$JenisSimpan=$this->security->xss_clean($this->input->post('JenisSimpan'));
			
   			
			if($JenisSimpan==1){
			//TAMBAH DATA SURAT JALAN
			if(isset($_POST['NoFA'])){$AddDataSJ['NomorFaktur']=$this->security->xss_clean($this->input->post('NoFA'));}
			
			if($AddDataSJ['NomorFaktur']){
				$id['NomorFaktur'] = $AddDataSJ['NomorFaktur'];
				$getNoSO = $this->db->get_where("bahana_faktur",$id)->row();
				$AddDataSJ['NomorSO']=$getNoSO->NomorSO;
			}

			if(isset($_POST['suratjalan'])){$AddDataSJ['NomorSJ']=$this->security->xss_clean($this->input->post('suratjalan'));}
			if(isset($_POST['tanggalcreate'])){$AddDataSJ['DateCreate']=$this->security->xss_clean($this->input->post('tanggalcreate'));}
			if(isset($_POST['timecreate'])){$AddDataSJ['TimeCreate']=$this->security->xss_clean($this->input->post('timecreate'));}
			if(isset($_POST['client'])){$AddDataSJ['Client']=$this->security->xss_clean($this->input->post('client'));}
			if(isset($_POST['mobil'])){$AddDataSJ['DataMobil']=$this->security->xss_clean($this->input->post('mobil'));}
			if(isset($_POST['kmstart'])){$AddDataSJ['kmstart']=$this->security->xss_clean($this->input->post('kmstart'));}
			if(isset($_POST['kmfinish'])){$AddDataSJ['kmfinish']=$this->security->xss_clean($this->input->post('kmfinish'));}
			if(isset($_POST['driver'])){$AddDataSJ['Driver']=$this->security->xss_clean($this->input->post('driver'));}
			if(isset($_POST['namatamu'])){$AddDataSJ['Namatamu']=$this->security->xss_clean($this->input->post('namatamu'));}
			if(isset($_POST['telptamu'])){$AddDataSJ['Telptamu']=$this->security->xss_clean($this->input->post('telptamu'));}
			if(isset($_POST['alamatjemput'])){$AddDataSJ['Alamatjemput']=$this->security->xss_clean($this->input->post('alamatjemput'));}

			$time = strtotime($this->security->xss_clean($this->input->post('DateJemput')));
			$newformat = date('Y-m-d',$time);
			if(isset($_POST['DateJemput'])){$AddDataSJ['DateJemput']=$newformat ;}
			if(isset($_POST['timemulai'])){$AddDataSJ['timemulai']=$this->security->xss_clean($this->input->post('timemulai'));}
			if(isset($_POST['timeakhir'])){$AddDataSJ['timeakhir']=$this->security->xss_clean($this->input->post('timeakhir'));}
			if(isset($_POST['timetotal'])){$AddDataSJ['timetotal']=$this->security->xss_clean($this->input->post('timetotal'));}
			if(isset($_POST['overtime'])){$AddDataSJ['overtime']=$this->security->xss_clean($this->input->post('overtime'));}
			if(isset($_POST['notatime'])){$AddDataSJ['notatime']=$this->security->xss_clean($this->input->post('notatime'));}
			if(isset($_POST['hari'])){$AddDataSJ['hari']=$this->security->xss_clean($this->input->post('hari'));}
			if(isset($_POST['ttd'])){$AddDataSJ['ttd']=$this->security->xss_clean($this->input->post('ttd'));}
			if(isset($_POST['rute'])){$AddDataSJ['rute']=serialize($_POST['rute']);}
			if(isset($_POST['r1'])){$AddDataSJ['r1']=$this->security->xss_clean($this->input->post('r1'));}
			if(isset($_POST['r2'])){$AddDataSJ['r2']=$this->security->xss_clean($this->input->post('r2'));}
			if(isset($_POST['r3'])){$AddDataSJ['r3']=$this->security->xss_clean($this->input->post('r3'));}
			if(isset($_POST['r4'])){$AddDataSJ['r4']=$this->security->xss_clean($this->input->post('r4'));}
			if(isset($_POST['r5'])){$AddDataSJ['r5']=$this->security->xss_clean($this->input->post('r5'));}
			if(isset($_POST['r6'])){$AddDataSJ['r6']=$this->security->xss_clean($this->input->post('r6'));}
			if(isset($_POST['r7'])){$AddDataSJ['r7']=$this->security->xss_clean($this->input->post('r7'));}
			if(isset($_POST['r8'])){$AddDataSJ['r8']=$this->security->xss_clean($this->input->post('r8'));}
			if(isset($_POST['keterangan'])){$AddDataSJ['keterangan']=$this->security->xss_clean($this->input->post('keterangan'));}
			if(isset($_POST['note'])){$AddDataSJ['note']=$this->security->xss_clean($this->input->post('note'));}
			if(isset($_POST['ricianuangjalan'])){$AddDataSJ['ricianuangjalan']=$this->security->xss_clean($this->input->post('ricianuangjalan'));}
			$AddDataSJ['create_by']=$this->session->userdata['id'];
			$AddDataSJ['status'] = 1;
			//pr($AddDataSJ);exit;
			$result=$this->db->insert("bahana_surat_jalan",$AddDataSJ);
		
			if($result>0){
				$this->session->set_flashdata('statusview', 'berhasil');
			}
			
			redirect("suratjalan/createsuratjalan");

			}
			else if($JenisSimpan==2)
			{
				//KALO APPROVED SURAT JALAN
				if(isset($_POST['NomorSJ'])){$ApproveDt['NomorSJ'] = $this->security->xss_clean($this->input->post('NomorSJ'));}
				if(isset($_POST['timeapproved'])){$ApproveDt['TimeApprove'] = $this->security->xss_clean($this->input->post('timeapproved'));}
				if(isset($_POST['dateapproved'])){$ApproveDt['DateApprove'] = $this->security->xss_clean($this->input->post('dateapproved'));}
				if(isset($_POST['JenisSimpan'])){$ApproveDt['status'] = $this->security->xss_clean($this->input->post('JenisSimpan'));}
				if(isset($_POST['uangjalan'])){$ApproveDt['uangjalan'] = $this->security->xss_clean($this->input->post('uangjalan'));}
				$ApproveDt['approved_by'] = $this->session->userdata['id'];
				//pr($ApproveDt);exit;

				$this->db->where('NomorSJ', $ApproveDt['NomorSJ']);
				$this->db->update("bahana_surat_jalan",$ApproveDt);

				redirect("suratjalan");
				
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
			$autonumber_so="";
			if($ParsAuto_so[0]->NomorSO != null || $ParsAuto_so[0]->NomorSO != ""){
				$ParsAutonumber_so=$tot_hal_so->result()[0]->NomorSO;
				$autonumber_so=autonumber($ParsAutonumber_so, 11, 4);
			}else{
				//pr(date('Ymd'));exit;
				$autonumber_so=autonumber('SO-'.date('Ymd').'.', 11, 4);
			}
			return $autonumber_so;

	}

	function GetNewSJ(){

			//GET LAST ID FOR AUTONUMBER FA
			$tot_hal = $this->db->query("select MAX(NomorSJ) as NomorSJ from  bahana_surat_jalan");
			$ParsAuto=$tot_hal->result();
			$autonumber="";
			if($ParsAuto[0]->NomorSJ != null || $ParsAuto[0]->NomorSJ != ""){
				$ParsAutonumber=$tot_hal->result()[0]->NomorSJ;
				$autonumber=autonumber($ParsAutonumber, 11, 4);
			}else{
				$autonumber=autonumber('SJ-'.date('Ymd').'.', 11, 4);
			}

			return $autonumber;
	}
	
}
