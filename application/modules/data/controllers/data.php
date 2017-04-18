<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class data extends CI_Controller {
	
	function index($uri=0)
	{
		
	
		//pr($this->session->userdata);exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			$session['session']=array();
			$session['session']=$this->session->userdata;
			$d['dt_retrieve'] = $this->app_load_data_model->load_data_client($GLOBALS['site_limit_medium'],$uri);
			$this->load->template($GLOBALS['site_theme']."/data/data-client",$d);
		}
		else
		{
			redirect("login");
		}
	}
	
	//Start Client
	function client($uri=0)
	{
		
	
		//pr($this->session->userdata);exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			$session['session']=array();
			$session['session']=$this->session->userdata;
			$d['dt_retrieve'] = $this->app_load_data_model->load_data_client($GLOBALS['site_limit_medium'],$uri);
			$this->load->template($GLOBALS['site_theme']."/data/data-client",$d);
		}
		else
		{
			redirect("login");
		}
	}
	
	function AddClient()
	{
		//pr($this->session->userdata);exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			//session TO view
			$session['session']=array();
			$session['session']=$this->session->userdata;
			
			$get = $this->db->get("groupclient")->result();;
				
			$d['data']= $get;
			$this->load->template($GLOBALS['site_theme']."/data/data-create-client",$d);
		
		}
		else
		{
			redirect("login");
		}
	}
	
	function EditClient($idclient)
	{
		//pr($this->session->userdata);exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			//session TO view
			$session['session']=array();
			$session['session']=$this->session->userdata;
			
			//pr($this->session->userdata['Id']);exit;
			$id['id'] = $idclient;
			//pr($id);exit;
			
			$geting = $this->db->get("groupclient")->result();;
			$d['data']= $geting;
			
			
			$get = $this->db->get_where("bahana_client",$id)->row();
			
		    
			$d['uploadKTP'] = $get->uploadKTP;
			$d['GroupClient'] = $get->GroupClient;
			$d['nameCP'] = $get->nameCP;
			$d['nameClient'] = $get->nameClient;
			$d['Phone'] = $get->phone;
			$d['mobile'] = $get->mobile;
			$d['NoKTP'] = $get->NoKTP;
			$d['fax'] = $get->fax;
			$d['email'] = $get->email;
			$d['Address'] = $get->Address;
			$d['city'] = $get->city;
			$d['provinsi'] = $get->provinsi;
			$d['Country'] = $get->Country;
			$d['id'] = $get->id;
			

		  
 			$this->load->template($GLOBALS['site_theme']."/data/data-edit-client",$d);

		}
		else
		{
			redirect("login");
		}
	}
	
	
	function TambahClient($idclient)
	{
		//pr($_FILES);
		//pr($_POST);exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			
			
			//session TO view
			$session['session']=array();
			$session['session']=$this->session->userdata;
			
			$id['id'] = $idclient;
			//pr($_FILES);exit;
			if($_FILES['uploadKTP']['name']!="")
			{
			$config['upload_path'] = dirname($_SERVER["SCRIPT_FILENAME"])."/files/" ;
			$config['upload_url']	= base_url()."files/";
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|xml';
			$config['max_size']	= '100';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			
			$this->load->library('upload', $config);
			$this->upload->do_upload('uploadKTP');
			
			//exit;
			$dt['uploadKTP'] =$_FILES['uploadKTP']['name'];
			}
			if(isset($_POST['GroupClient'])){$dt['GroupClient'] = $this->security->xss_clean($this->input->post('GroupClient'));}
			if(isset($_POST['nameCP'])){$dt['nameCP'] = $this->security->xss_clean($this->input->post('nameCP'));}
			if(isset($_POST['nameClient'])){$dt['nameClient'] = $this->security->xss_clean($_POST['nameClient']);}
			if(isset($_POST['phone'])){$dt['phone'] = $this->security->xss_clean($_POST['phone']);}
			if(isset($_POST['mobile'])){$dt['mobile'] = $this->security->xss_clean($_POST['mobile']);}
			if(isset($_POST['NoKTP'])){$dt['NoKTP'] = $this->security->xss_clean($_POST['NoKTP']);}
			if(isset($_POST['fax'])){$dt['fax'] = $this->security->xss_clean($_POST['fax']);}
			if(isset($_POST['email'])){$dt['email'] = $this->security->xss_clean($_POST['email']);}
			if(isset($_POST['Address'])){$dt['Address'] = $this->security->xss_clean($_POST['Address']);}
			if(isset($_POST['city'])){$dt['city'] = $this->security->xss_clean($_POST['city']);}
			if(isset($_POST['provinsi'])){$dt['provinsi'] = $this->security->xss_clean($_POST['provinsi']);}
			if(isset($_POST['Country'])){$dt['Country'] = $this->security->xss_clean($_POST['provinsi']);}
			if(isset($_POST['provinsi'])){$dt['provinsi'] = $this->security->xss_clean($_POST['provinsi']);}
		
			//pr($dt);exit;
			$this->db->insert("bahana_client",$dt);
			redirect("data");
			
			
		}
		else
		{
			redirect("login");
		}
	}
	
	function simpan()
	{
		
		//pr( $this->db->escape($this->security->xss_clean($_POST)));exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
			
		{
			$session['session']=array();
			$session['session']=$this->session->userdata;
			
			$id['id'] = $idclient;
			//pr($_FILES);exit;
			if($_FILES['uploadKTP']['name']!="")
			{
			$config['upload_path'] = dirname($_SERVER["SCRIPT_FILENAME"])."/files/" ;
			$config['upload_url']	= base_url()."files/";
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|xml';
			$config['max_size']	= '100';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			
			$this->load->library('upload', $config);
			$this->upload->do_upload('uploadKTP');
			
			//exit;
			$dt['FilesName'] =$_FILES['uploadKTP']['name'];
			}
			
			
			if(isset($_POST['GroupClient'])){$dt['GroupClient'] = $this->security->xss_clean($_POST['GroupClient']);}
			if(isset($_POST['nameCP'])){$dt['nameCP'] = $this->security->xss_clean($_POST['nameCP']);}
			if(isset($_POST['nameClient'])){$dt['nameClient'] = $this->security->xss_clean($_POST['nameClient']);}
			if(isset($_POST['phone'])){$dt['phone'] = $this->security->xss_clean($_POST['phone']);}
			if(isset($_POST['mobile'])){$dt['mobile'] = $this->security->xss_clean($_POST['mobile']);}
			if(isset($_POST['id'])){$dt['id'] = $this->security->xss_clean($_POST['id']);}
			//pr($dt);exit;
			//Kalo ada Inputan Baru	
			$get = $this->db->get_where("bahana_client",$dt)->row();


			if(isset($_POST['NoKTP'])){$dt['NoKTP'] = $this->security->xss_clean($_POST['NoKTP']);}
			if(isset($_POST['fax'])){$dt['fax'] = $this->security->xss_clean($_POST['fax']);}
			if(isset($_POST['email'])){$dt['email'] = $this->security->xss_clean($_POST['email']);}
			if(isset($_POST['Address'])){$dt['Address'] = $this->security->xss_clean($_POST['Address']);}
			if(isset($_POST['city'])){$dt['city'] = $this->security->xss_clean($_POST['city']);}
			if(isset($_POST['provinsi'])){$dt['provinsi'] = $this->security->xss_clean($_POST['provinsi']);}
			if(isset($_POST['Country'])){$dt['Country'] = $this->security->xss_clean($_POST['Country']);}
			
			//pr($dt);exit;
			$this->db->where('id', $dt['id']);
			$this->db->update("bahana_client",$dt);
			
			redirect("data");
			
			
		}
		else
		{
			redirect("login");
		}
	}
	
	
	function HapusClient($id_param)
	{
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			$id['id'] = $id_param;
			$get = $this->db->delete("bahana_client",$id);
			redirect("data");
		}
		else
		{
			redirect("login");
		}
	}
	
	
	//End Client
	
	//Start Vendor
	function vendor($uri=0)
	{
		
	
		//pr($this->session->userdata);exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			$session['session']=array();
			$session['session']=$this->session->userdata;
			$d['dt_retrieve'] = $this->app_load_data_model->load_data_vendor($GLOBALS['site_limit_medium'],$uri);

 			$this->load->template($GLOBALS['site_theme']."/data/data-vendor",$d);
		}
		else
		{
			redirect("login");
		}
	}
	
	function create_vendor()
	{
		//pr($this->session->userdata);exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			//session TO view
			$session['session']=array();
			$session['session']=$this->session->userdata;
			
			$get = $this->db->get("groupclient")->result();;
			
			//pr($get);exit;
			//View Profile		
			$d['data']= $get;
			
			
 			$this->load->template($GLOBALS['site_theme']."/data/data-create-vendor",$d);
			
		}
		else
		{
			redirect("login");
		}
	}
	
	
	function simpan_vendor()
	{
		//pr($_FILES);
		//pr($_POST);exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			//session TO view
			$session['session']=array();
			$session['session']=$this->session->userdata;
			//pr($_FILES);exit;
			if($_FILES['uploadKTP']['name']!="")
			{
			$config['upload_path'] = dirname($_SERVER["SCRIPT_FILENAME"])."/files/" ;
			$config['upload_url']	= base_url()."files/";
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|xml';
			$config['max_size']	= '100';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			
			$this->load->library('upload', $config);
			$this->upload->do_upload('uploadKTP');
			
			//exit;
			$dt['uploadKTP'] =$_FILES['uploadKTP']['name'];
			}
			if(isset($_POST['nameVendor'])){$dt['nameVendor'] = $this->security->xss_clean($this->input->post('nameVendor'));}
			if(isset($_POST['nameCP'])){$dt['nameCP'] = $this->security->xss_clean($this->input->post('nameCP'));}		
			if(isset($_POST['phone'])){$dt['phone'] = $this->security->xss_clean($_POST['phone']);}
			if(isset($_POST['mobile'])){$dt['mobile'] = $this->security->xss_clean($_POST['mobile']);}
			if(isset($_POST['email'])){$dt['email'] = $this->security->xss_clean($_POST['email']);}
			if(isset($_POST['NoKTP'])){$dt['NoKTP'] = $this->security->xss_clean($_POST['NoKTP']);}
			if(isset($_POST['fax'])){$dt['fax'] = $this->security->xss_clean($_POST['fax']);}
			if(isset($_POST['Address'])){$dt['Address'] = $this->security->xss_clean($_POST['Address']);}
			if(isset($_POST['city'])){$dt['city'] = $this->security->xss_clean($_POST['city']);}
			if(isset($_POST['provinsi'])){$dt['provinsi'] = $this->security->xss_clean($_POST['provinsi']);}
			if(isset($_POST['Country'])){$dt['Country'] = $this->security->xss_clean($_POST['provinsi']);}
		
			//pr($dt);exit;
			$this->db->insert("bahana_vendor",$dt);
			redirect("data/vendor");
			
			
		}
		else
		{
			redirect("login");
		}
	}
	
	function EditVendor($idclient)
	{
		//pr($this->session->userdata);exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			//session TO view
			$session['session']=array();
			$session['session']=$this->session->userdata;
			
			//pr($this->session->userdata['Id']);exit;
			$id['id'] = $idclient;
			//pr($id);exit;
			
			$geting = $this->db->get("groupclient")->result();;
			$d['data']= $geting;
			
			
			$get = $this->db->get_where("bahana_vendor",$id)->row();
			
		    
			$d['uploadKTP'] = $get->uploadKTP;
			$d['nameVendor'] = $get->nameVendor;
			$d['nameCP'] = $get->nameCP;			
			$d['Phone'] = $get->phone;
			$d['mobile'] = $get->mobile;
			$d['email'] = $get->email;
			$d['NoKTP'] = $get->NoKTP;
			$d['fax'] = $get->fax;
			$d['Address'] = $get->Address;
			$d['city'] = $get->city;
			$d['provinsi'] = $get->provinsi;
			$d['Country'] = $get->Country;
			$d['id'] = $get->id;
			

		    $this->load->template($GLOBALS['site_theme']."/data/data-edit-vendor",$d);
			
		}
		else
		{
			redirect("login");
		}
	}
	
	function editsimpan()
	{
		
		//pr( $this->db->escape($this->security->xss_clean($_POST)));exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
			
		{
			$session['session']=array();
			$session['session']=$this->session->userdata;
			
			$id['id'] = $idclient;
			//pr($_FILES);exit;
			if($_FILES['uploadKTP']['name']!="")
			{
			$config['upload_path'] = dirname($_SERVER["SCRIPT_FILENAME"])."/files/" ;
			$config['upload_url']	= base_url()."files/";
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|xml';
			$config['max_size']	= '100';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			
			$this->load->library('upload', $config);
			$this->upload->do_upload('uploadKTP');
			
			//exit;
			$dt['uploadKTP'] =$_FILES['uploadKTP']['name'];
			}
			if(isset($_POST['nameVendor'])){$dt['nameVendor'] = $this->security->xss_clean($this->input->post('nameVendor'));}
			if(isset($_POST['nameCP'])){$dt['nameCP'] = $this->security->xss_clean($this->input->post('nameCP'));}		
			if(isset($_POST['phone'])){$dt['phone'] = $this->security->xss_clean($_POST['phone']);}
			if(isset($_POST['mobile'])){$dt['mobile'] = $this->security->xss_clean($_POST['mobile']);}
			if(isset($_POST['email'])){$dt['email'] = $this->security->xss_clean($_POST['email']);}
			if(isset($_POST['NoKTP'])){$dt['NoKTP'] = $this->security->xss_clean($_POST['NoKTP']);}
			if(isset($_POST['fax'])){$dt['fax'] = $this->security->xss_clean($_POST['fax']);}
			if(isset($_POST['Address'])){$dt['Address'] = $this->security->xss_clean($_POST['Address']);}
			if(isset($_POST['city'])){$dt['city'] = $this->security->xss_clean($_POST['city']);}
			if(isset($_POST['provinsi'])){$dt['provinsi'] = $this->security->xss_clean($_POST['provinsi']);}
			if(isset($_POST['Country'])){$dt['Country'] = $this->security->xss_clean($_POST['provinsi']);}
			if(isset($_POST['id'])){$dt['id'] = $this->security->xss_clean($_POST['id']);}
			
			//pr($dt);exit;
			$this->db->where('id', $dt['id']);
			$this->db->update("bahana_vendor",$dt);
			
			redirect("data/vendor");
			
			
		}
		else
		{
			redirect("login");
		}
	}
	
	function HapusVendor($id_param)
	{
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			$id['id'] = $id_param;
			$get = $this->db->delete("bahana_vendor",$id);
			redirect("data/vendor");
		}
		else
		{
			redirect("login");
		}
	}
	//End Vendor
	function data_car($uri=0)
	{
		
	
		//pr($this->session->userdata);exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			$session['session']=array();
			$session['session']=$this->session->userdata;
			$d['dt_retrieve'] = $this->app_load_data_model->load_data_car($GLOBALS['site_limit_medium'],$uri);
			$this->load->template($GLOBALS['site_theme']."/data/data-car",$d);
		
		}
		else
		{
			redirect("login");
		}
	}
	
	
	function create_car()
	{
		//pr($this->session->userdata);exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			//session TO view
			$session['session']=array();
			$session['session']=$this->session->userdata;
			
			$get = $this->db->query("SELECT id,nameVendor FROM bahana_vendor")->result();;
			$d['data']= $get;
			$this->load->template($GLOBALS['site_theme']."/data/data-create-car",$d);
		
		}
		else
		{
			redirect("login");
		}
	}
	
	function simpan_car()
	{
		//pr($_FILES);
		//pr($_POST);exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			//session TO view
			$session['session']=array();
			$session['session']=$this->session->userdata;
			//pr($_FILES);exit;
			if($_FILES['CarPhoto']['name']!="")
			{
			$config['upload_path'] = dirname($_SERVER["SCRIPT_FILENAME"])."/files/" ;
			$config['upload_url']	= base_url()."files/";
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|xml';
			$config['max_size']	= '100';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			
			$this->load->library('upload', $config);
			$this->upload->do_upload('CarPhoto');
			
			//exit;
			$dt['CarPhoto'] =$_FILES['CarPhoto']['name'];
			}
			if(isset($_POST['VendorName'])){$dt['VendorName'] = $this->security->xss_clean($this->input->post('VendorName'));}
			if(isset($_POST['CarBrand'])){$dt['CarBrand'] = $this->security->xss_clean($this->input->post('CarBrand'));}		
			if(isset($_POST['CarName'])){$dt['CarName'] = $this->security->xss_clean($_POST['CarName']);}
			if(isset($_POST['NoPolisi'])){$dt['NoPolisi'] = $this->security->xss_clean($_POST['NoPolisi']);}
			if(isset($_POST['Color'])){$dt['Color'] = $this->security->xss_clean($_POST['Color']);}
			if(isset($_POST['Year'])){$dt['Year'] = $this->security->xss_clean($_POST['Year']);}
			if(isset($_POST['Transmission'])){$dt['Transmission'] = $this->security->xss_clean($_POST['Transmission']);}
			if(isset($_POST['Status'])){$dt['Status'] = $this->security->xss_clean($_POST['Status']);}
			if(isset($_POST['Notes'])){$dt['Notes'] = $this->security->xss_clean($_POST['Notes']);}
		
			//pr($dt);exit;
			$this->db->insert("bahana_car",$dt);
			redirect("data/data_car");
		}
		else
		{
			redirect("login");
		}
	}
	
	function EditCar($idclient)
	{
		//pr($this->session->userdata);exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			//session TO view
			$session['session']=array();
			$session['session']=$this->session->userdata;
			
			//pr($this->session->userdata['Id']);exit;
			$id['id_car'] = $idclient;
			//pr($id);exit;
			
			$geting = $this->db->query("SELECT id,nameVendor FROM bahana_vendor")->result();;
			$d['data']= $geting;
			
			
			$get = $this->db->get_where("bahana_car",$id)->row();
			
		    
			$d['CarPhoto'] = $get->CarPhoto;
			$d['VendorName'] = $get->VendorName;
			$d['CarBrand'] = $get->CarBrand;			
			$d['CarName'] = $get->CarName;
			$d['NoPolisi'] = $get->NoPolisi;
			$d['Color'] = $get->Color;
			$d['Year'] = $get->Year;
			$d['Transmission'] = $get->Transmission;
			$d['Status'] = $get->Status;
			$d['Notes'] = $get->Notes;
			$d['id_car'] = $get->id_car;
			
			$this->load->template($GLOBALS['site_theme']."/data/data-edit-car",$d);
		   
			
		}
		else
		{
			redirect("login");
		}
	}
	
	function editsimpancar()
	{
		
		//pr( $this->db->escape($this->security->xss_clean($_POST)));exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
			
		{
			$session['session']=array();
			$session['session']=$this->session->userdata;
			
			
			//pr($_FILES);exit;
			if($_FILES['CarPhoto']['name']!="")
			{
			$config['upload_path'] = dirname($_SERVER["SCRIPT_FILENAME"])."/files/" ;
			$config['upload_url']	= base_url()."files/";
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|xml';
			$config['max_size']	= '100';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			
			$this->load->library('upload', $config);
			$this->upload->do_upload('CarPhoto');
			
			//exit;
			$dt['CarPhoto'] =$_FILES['CarPhoto']['name'];
			}
			if(isset($_POST['VendorName'])){$dt['VendorName'] = $this->security->xss_clean($this->input->post('VendorName'));}
			if(isset($_POST['CarBrand'])){$dt['CarBrand'] = $this->security->xss_clean($this->input->post('CarBrand'));}		
			if(isset($_POST['CarName'])){$dt['CarName'] = $this->security->xss_clean($_POST['CarName']);}
			if(isset($_POST['NoPolisi'])){$dt['NoPolisi'] = $this->security->xss_clean($_POST['NoPolisi']);}
			if(isset($_POST['Color'])){$dt['Color'] = $this->security->xss_clean($_POST['Color']);}
			if(isset($_POST['Year'])){$dt['Year'] = $this->security->xss_clean($_POST['Year']);}
			if(isset($_POST['Transmission'])){$dt['Transmission'] = $this->security->xss_clean($_POST['Transmission']);}
			if(isset($_POST['Status'])){$dt['Status'] = $this->security->xss_clean($_POST['Status']);}
			if(isset($_POST['Notes'])){$dt['Notes'] = $this->security->xss_clean($_POST['Notes']);}
			if(isset($_POST['id_car'])){$dt['id_car'] = $this->security->xss_clean($_POST['id_car']);}
			//pr($dt);exit;
			$this->db->where('id_car', $dt['id_car']);
			$this->db->update("bahana_car",$dt);
			
			redirect("data/data_car");
			
			
		}
		else
		{
			redirect("login");
		}
	}
	
	function HapusCar($id_param)
	{
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			$id['id_car'] = $id_param;
			$get = $this->db->delete("bahana_car",$id);
			redirect("data/data_car");
		}
		else
		{
			redirect("login");
		}
	}
	
	function data_driver($uri=0)
	{
		
	
		//pr($this->session->userdata);exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			$session['session']=array();
			$session['session']=$this->session->userdata;
			$d['dt_retrieve'] = $this->app_load_data_model->load_data_driver($GLOBALS['site_limit_medium'],$uri);
		

		$this->load->template($GLOBALS['site_theme']."/data/data-driver",$d);
		
		}
		else
		{
			redirect("login");
		}
	}
	
	function create_driver()
	{
		//pr($this->session->userdata);exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			//session TO view
			$session['session']=array();
			$session['session']=$this->session->userdata;
			
			$get = $this->db->get("groupvendor")->result();;
			
			//pr($get);exit;
			//View Profile		
			$d['data']= $get;
			
			
			$this->load->template($GLOBALS['site_theme']."/data/data-create-driver",$d);
		
		}
		else
		{
			redirect("login");
		}
	}
	
	function simpan_driver()
	{
		//pr($_FILES);
		//pr($_POST);exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			//session TO view
			$session['session']=array();
			$session['session']=$this->session->userdata;
			//pr($_FILES);exit;
			if($_FILES['FotoSIM']['name']!="")
			{
			$config['upload_path'] = dirname($_SERVER["SCRIPT_FILENAME"])."/files/" ;
			$config['upload_url']	= base_url()."files/";
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|xml';
			$config['max_size']	= '2000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			
			$this->load->library('upload', $config);
			$this->upload->do_upload('FotoSIM');
			
			//exit;
			$dt['FotoSIM'] =$_FILES['FotoSIM']['name'];
			}
			if(isset($_POST['DriverName'])){$dt['DriverName'] = $this->security->xss_clean($this->input->post('DriverName'));}
			if(isset($_POST['Mobile1'])){$dt['Mobile1'] = $this->security->xss_clean($this->input->post('Mobile1'));}		
			if(isset($_POST['Mobile2'])){$dt['Mobile2'] = $this->security->xss_clean($_POST['Mobile2']);}
			if(isset($_POST['PINBB'])){$dt['PINBB'] = $this->security->xss_clean($_POST['PINBB']);}
			if(isset($_POST['Email'])){$dt['Email'] = $this->security->xss_clean($_POST['Email']);}
			if(isset($_POST['Status'])){$dt['Status'] = $this->security->xss_clean($_POST['Status']);}
			if(isset($_POST['Address'])){$dt['Address'] = $this->security->xss_clean($_POST['Address']);}
			if(isset($_POST['City'])){$dt['City'] = $this->security->xss_clean($_POST['City']);}
			if(isset($_POST['Province'])){$dt['Province'] = $this->security->xss_clean($_POST['Province']);}
			if(isset($_POST['Country'])){$dt['Country'] = $this->security->xss_clean($_POST['Country']);}
			if(isset($_POST['NoSIM'])){$dt['NoSIM'] = $this->security->xss_clean($_POST['NoSIM']);}
		
			//pr($dt);exit;
			$this->db->insert("bahana_driver",$dt);
			redirect("data/data_driver");
		}
		else
		{
			redirect("login");
		}
	}
	
	function EditDriver($idclient)
	{
		//pr($this->session->userdata);exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			//session TO view
			$session['session']=array();
			$session['session']=$this->session->userdata;
			
			//pr($this->session->userdata['Id']);exit;
			$id['id'] = $idclient;
			//pr($id);exit;
			
			//$geting = $this->db->get("groupvendor")->result();;
			//$d['data']= $geting;
			
			
			$get = $this->db->get_where("bahana_driver",$id)->row();
			
		    
			$d['FotoSIM'] = $get->FotoSIM;
			$d['DriverName'] = $get->DriverName;
			$d['Mobile1'] = $get->Mobile1;			
			$d['Mobile2'] = $get->Mobile2;
			$d['PINBB'] = $get->PINBB;
			$d['Email'] = $get->Email;
			$d['Status'] = $get->Status;
			$d['Address'] = $get->Address;
			$d['City'] = $get->City;
			$d['Province'] = $get->Province;
			$d['Country'] = $get->Country;
			$d['NoSIM'] = $get->NoSIM;
			$d['id'] = $get->id;
			

		    //pr($d);exit;
		    $this->load->template($GLOBALS['site_theme']."/data/data-edit-driver",$d);
		
		}
		else
		{
			redirect("login");
		}
	}
	
	function editsimpandriver()
	{
		
		//pr( $this->db->escape($this->security->xss_clean($_POST)));exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
			
		{
			$session['session']=array();
			$session['session']=$this->session->userdata;
			
			
			//pr($_FILES);exit;
			if($_FILES['FotoSIM']['name']!="")
			{
			$config['upload_path']          = './files/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 2000;
			$config['max_width']            = 1024;
			$config['max_height']           = 768;
 
			$this->load->library('upload', $config);
			$this->upload->do_upload('FotoSIM');
			
			//exit;
			$dt['FotoSIM'] =$_FILES['FotoSIM']['name'];
			}
			if(isset($_POST['DriverName'])){$dt['DriverName'] = $this->security->xss_clean($this->input->post('DriverName'));}
			if(isset($_POST['Mobile1'])){$dt['Mobile1'] = $this->security->xss_clean($this->input->post('Mobile1'));}		
			if(isset($_POST['Mobile2'])){$dt['Mobile2'] = $this->security->xss_clean($_POST['Mobile2']);}
			if(isset($_POST['PINBB'])){$dt['PINBB'] = $this->security->xss_clean($_POST['PINBB']);}
			if(isset($_POST['Email'])){$dt['Email'] = $this->security->xss_clean($_POST['Email']);}
			if(isset($_POST['Status'])){$dt['Status'] = $this->security->xss_clean($_POST['Status']);}
			if(isset($_POST['Address'])){$dt['Address'] = $this->security->xss_clean($_POST['Address']);}
			if(isset($_POST['City'])){$dt['City'] = $this->security->xss_clean($_POST['City']);}
			if(isset($_POST['Province'])){$dt['Province'] = $this->security->xss_clean($_POST['Province']);}
			if(isset($_POST['Country'])){$dt['Country'] = $this->security->xss_clean($_POST['Country']);}
			if(isset($_POST['NoSIM'])){$dt['NoSIM'] = $this->security->xss_clean($_POST['NoSIM']);}
			if(isset($_POST['id'])){$dt['id'] = $this->security->xss_clean($_POST['id']);}
			//pr($dt);exit;
			$this->db->where('id', $dt['id']);
			$this->db->update("bahana_driver",$dt);
			
			redirect("data/data_driver");
			
			
		}
		else
		{
			redirect("login");
		}
	}
	
	function HapusDriver($id_param)
	{
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			$id['id'] = $id_param;
			$get = $this->db->delete("bahana_driver",$id);
			redirect("data/data_driver");
		}
		else
		{
			redirect("login");
		}
	}
	
	function page($uri=0)
	{
		//pr($this->session->userdata);exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			$session['session']=array();
			$session['session']=$this->session->userdata;
			$d['dt_retrieve'] = $this->app_load_data_model->load_data_client($GLOBALS['site_limit_medium'],$uri);
		 	$this->load->template($GLOBALS['site_theme']."/data/data-client",$d);
		
			
		}
		else
		{
			redirect("login");
		}
	}
	
	
	
	
	
	function viewprofile($id_param)
	{
		//pr($id_param);exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			//session TO view
			$session['session']=array();
			$session['session']=$this->session->userdata;
			
			//pr($this->session->userdata['Id']);exit;
			$id['id'] = $id_param;
			$get = $this->db->get_where("user",$id)->row();
			
			//View Profile		
			$d['NamaLengkap'] = $get->NamaLengkap;
			$d['Position'] = $get->Position;
			$d['Email'] = $get->Email;
			$d['Phone'] = $get->Phone;
			$d['City'] = $get->City;
			$d['Province'] = $get->Province;
			$d['Country'] = $get->Country;
			$d['BBMAccount'] = $get->BBMAccount;
			$d['YMAccount'] = $get->YMAccount;
			$d['Address'] = $get->Address;
			$d['Username'] = $get->Username;
			$d['Password'] = $get->Password;
			$d['FilesName'] = $get->FilesName;
			$d['id'] = $get->id;
			
			//Get Group Id
			$idgroup['IdRole'] = $get->Role;;
			$getProfile = $this->db->get_where("group_profile",$idgroup)->row();
			$d['Role'] = $getProfile->NamaRole;
			
			$this->load->template($GLOBALS['site_theme']."/user/pages-profile",$d);
		
		}
		else
		{
			redirect("login");
		}
	}
	
	
	
	
	
	function EditProfile()
	{
		//pr($this->session->userdata);exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			//session TO view
			$session['session']=array();
			$session['session']=$this->session->userdata;
			
			//pr($this->session->userdata['Id']);exit;
			$id['id'] = $this->session->userdata['id'];
			$get = $this->db->get_where("user",$id)->row();
		
	
			//View Profile		
			$d['NamaLengkap'] = $get->NamaLengkap;
			$d['Position'] = $get->Position;
			$d['Role'] = $get->Role;
			$d['Email'] = $get->Email;
			$d['Phone'] = $get->Phone;
			$d['City'] = $get->City;
			$d['Province'] = $get->Province;
			$d['Country'] = $get->Country;
			$d['BBMAccount'] = $get->BBMAccount;
			$d['YMAccount'] = $get->YMAccount;
			$d['Address'] = $get->Address;
			$d['Username'] = $get->Username;
			$d['Password'] = $get->Password;
			$d['id'] = $get->id;
			
			$d['Password'] = $get->Password;
			$d['FilesName'] = $get->FilesName;
			$d['FilesName'] = $get->FilesName;
			$this->load->view($GLOBALS['site_theme']."/bg_header",$session);
 			$this->load->view($GLOBALS['site_theme']."/bg_left");
 			$this->load->view($GLOBALS['site_theme']."/user/edit-profile",$d);
 			$this->load->view($GLOBALS['site_theme']."/bg_footer");
		}
		else
		{
			redirect("login");
		}
	}
	
	
	
	
	function tambah()
	{
		
		//pr( $this->db->escape($this->security->xss_clean($_POST)));exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			//pr($_FILES);exit;
			if($_FILES['uploadPhoto']['name']!="")
			{
			$config['upload_path'] = dirname($_SERVER["SCRIPT_FILENAME"])."/files/" ;
			$config['upload_url']	= base_url()."files/";
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|xml';
			$config['max_size']	= '100';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			
			$this->load->library('upload', $config);
			$this->upload->do_upload();
			
			//exit;
			$dt['FilesName'] =$_FILES['uploadPhoto']['name'];
			}
			
			
			if(isset($_POST['NamaLengkap'])){$dt['NamaLengkap'] = $this->security->xss_clean($_POST['NamaLengkap']);}
			if(isset($_POST['Position'])){$dt['Position'] = $this->security->xss_clean($_POST['Position']);}
			if(isset($_POST['Role'])){$dt['Role'] = $this->security->xss_clean($_POST['Role']);}
			if(isset($_POST['Email'])){$dt['Email'] = $this->security->xss_clean($_POST['Email']);}
			if(isset($_POST['Username'])){$dt['Username'] = $this->security->xss_clean($_POST['Username']);}
			//$this->load->library('encrypt');
			if(isset($_POST['Password'])){$dt['Password'] = md5($this->security->xss_clean($_POST['Password']));}
			if(isset($_POST['Address'])){$dt['Address'] = $this->security->xss_clean($_POST['Address']);}
			if(isset($_POST['City'])){$dt['City'] = $this->security->xss_clean($_POST['City']);}
			if(isset($_POST['Province'])){$dt['Province'] = $this->security->xss_clean($_POST['Province']);}
			if(isset($_POST['Country'])){$dt['Country'] = $this->security->xss_clean($_POST['Country']);}
			if(isset($_POST['Phone'])){$dt['Phone'] = $this->security->xss_clean($_POST['Phone']);}
			if(isset($_POST['BBMAccount'])){$dt['BBMAccount'] = $this->security->xss_clean($_POST['BBMAccount']);}
			if(isset($_POST['YMAccount'])){$dt['YMAccount'] = $this->security->xss_clean($_POST['YMAccount']);}
			
			//pr($dt);exit;
			$this->db->insert("user",$dt);
			redirect("user/member");
			
			
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
	
	
}
