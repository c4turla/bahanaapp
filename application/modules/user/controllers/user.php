<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Controller {
	
	
	function index()
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
			$d['FilesName'] = $get->FilesName;
			$d['id'] = $get->id;
			
			$this->load->view($GLOBALS['site_theme']."/bg_header",$session);
 			$this->load->view($GLOBALS['site_theme']."/bg_left");
 			$this->load->view($GLOBALS['site_theme']."/user/pages-profile",$d);
 			$this->load->view($GLOBALS['site_theme']."/bg_footer");
		}
		else
		{
			redirect("login");
		}
	}
	function profile()
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
			
			$this->load->view($GLOBALS['site_theme']."/bg_header",$session);
 			$this->load->view($GLOBALS['site_theme']."/bg_left");
 			$this->load->view($GLOBALS['site_theme']."/user/pages-profile",$d);
 			$this->load->view($GLOBALS['site_theme']."/bg_footer");
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
			$idgroup['IdRole'] = $get->Role;
			$getProfile = $this->db->get_where("group_profile",$idgroup)->row();
			$d['Role'] = $getProfile->NamaRole;
			
			$this->load->view($GLOBALS['site_theme']."/bg_header",$session);
 			$this->load->view($GLOBALS['site_theme']."/bg_left");
 			$this->load->view($GLOBALS['site_theme']."/user/pages-profile",$d);
 			$this->load->view($GLOBALS['site_theme']."/bg_footer");
		}
		else
		{
			redirect("login");
		}
	}
	
	
	function AddProfile()
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
		
	
			
			$this->load->view($GLOBALS['site_theme']."/bg_header",$session);
 			$this->load->view($GLOBALS['site_theme']."/bg_left");
 			$this->load->view($GLOBALS['site_theme']."/user/Add-profile");
 			$this->load->view($GLOBALS['site_theme']."/bg_footer");
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
	
	
	function simpan()
	{
		
		//pr( $this->db->escape($this->security->xss_clean($_POST)));exit;
		if($this->session->userdata("logged_in")=="yesGetMeLoginBaby")
		{
			//pr($_FILES);exit;
			if($_FILES['FilesName']['name']!="")
			{
			$config['upload_path'] = dirname($_SERVER["SCRIPT_FILENAME"])."/files/" ;
			$config['upload_url']	= base_url()."files/";
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|xml';
			$config['max_size']	= '2000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			
			$this->load->library('upload', $config);
			$this->upload->do_upload('FilesName');
			
			//exit;
			$dt['FilesName'] =$_FILES['FilesName']['name'];
			}
			
			
			if(isset($_POST['NamaLengkap'])){$dt['NamaLengkap'] = $this->security->xss_clean($_POST['NamaLengkap']);}
			if(isset($_POST['Position'])){$dt['Position'] = $this->security->xss_clean($_POST['Position']);}
			if(isset($_POST['Role'])){$dt['Role'] = $this->security->xss_clean($_POST['Role']);}
			if(isset($_POST['Email'])){$dt['Email'] = $this->security->xss_clean($_POST['Email']);}
			if(isset($_POST['Username'])){$dt['Username'] = $this->security->xss_clean($_POST['Username']);}
			if(isset($_POST['id'])){$dt['id'] = $this->security->xss_clean($_POST['id']);}
			//if(isset($_POST['id'])){$dt['id'] = md5($this->security->xss_clean($_POST['id']));}
			//pr($dt);exit;
			//Kalo ada Inputan Baru	
			$get = $this->db->get_where("user",$dt)->row();

			if(md5($this->security->xss_clean($_POST['Password'])) !=  $get->Password)
			{
				if(isset($_POST['Password'])){$dt['Password'] = md5($this->security->xss_clean($_POST['Password']));}
			}
			if(isset($_POST['Address'])){$dt['Address'] = $this->security->xss_clean($_POST['Address']);}
			if(isset($_POST['City'])){$dt['City'] = $this->security->xss_clean($_POST['City']);}
			if(isset($_POST['Province'])){$dt['Province'] = $this->security->xss_clean($_POST['Province']);}
			if(isset($_POST['Country'])){$dt['Country'] = $this->security->xss_clean($_POST['Country']);}
			if(isset($_POST['Phone'])){$dt['Phone'] = $this->security->xss_clean($_POST['Phone']);}
			if(isset($_POST['BBMAccount'])){$dt['BBMAccount'] = $this->security->xss_clean($_POST['BBMAccount']);}
			if(isset($_POST['YMAccount'])){$dt['YMAccount'] = $this->security->xss_clean($_POST['YMAccount']);}
			
			//pr($dt);exit;
			$this->db->where('id', $dt['id']);
			$this->db->update("user",$dt);
			
			redirect("user/profile");
			
			
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
			if($_FILES['FilesName']['name']!="")
			{
			$config['upload_path'] = dirname($_SERVER["SCRIPT_FILENAME"])."/files/" ;
			$config['upload_url']	= base_url()."files/";
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|xml';
			$config['max_size']	= '2000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			
			$this->load->library('upload', $config);
			$this->upload->do_upload('FilesName');
			
			//exit;
			$dt['FilesName'] =$_FILES['FilesName']['name'];
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
	
}
