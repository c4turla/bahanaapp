<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class app_user_login_model extends CI_Model {

	public function cekUserLogin($data)
	{
	
		$d['username'] 	= mysql_real_escape_string($data['username']);
		
		
		$d['Password'] = md5(mysql_real_escape_string($data['password']));
		//pr($d);exit;
		//pr($d['Password']);exit;
		$_SQL="SELECT * FROM `user` us LEFT JOIN `group_profile` gp on us.Role=gp.IdRole WHERE us.username='".$d['username']."' AND us.password='".$d['Password']."'";
		//pr($_SQL);exit;
		$q_cek_login = $this->db->query($_SQL);
		
		if(count($q_cek_login->result())>0)
		{
			//pr('masuk');exit;
			foreach($q_cek_login->result() as $qad)
			{
				$sess_data['logged_in'] = 'yesGetMeLoginBaby';
				$sess_data['id'] = $qad->id;
				$sess_data['NamaLengkap'] = $qad->NamaLengkap;
				$sess_data['Position'] = $qad->Position;
				$sess_data['Role'] = $qad->Role;
				$sess_data['FilesName'] = $qad->FilesName;
				$sess_data['Email'] = $qad->Email;
				$sess_data['Username'] = $qad->Username;
				$sess_data['Password'] = $qad->Password;
				$sess_data['Address'] = $qad->Address;
				$sess_data['City'] = $qad->City;
				$sess_data['Province'] = $qad->Province;
				$sess_data['Country'] = $qad->Country;
				$sess_data['Phone'] = $qad->Phone;
				$sess_data['BBMAccount'] = $qad->BBMAccount;
				$sess_data['YMAccount'] = $qad->YMAccount;
				$sess_data['IdRole'] = $qad->IdRole;
				$sess_data['NamaRole'] = $qad->NamaRole;
				$sess_data['UserProfile'] = $qad->UserProfile;
				$sess_data['Members'] = $qad->Members;
				$sess_data['GroupProfile'] = $qad->GroupProfile;
				$sess_data['CompanyInformation'] = $qad->CompanyInformation;
				$sess_data['PaymentAccount'] = $qad->PaymentAccount;
				$sess_data['SecurityPassword'] = $qad->SecurityPassword;
				$sess_data['DataClient'] = $qad->DataClient;
				$sess_data['DataVendor'] = $qad->DataVendor;
				$sess_data['DataCars'] = $qad->DataCars;
				$sess_data['DataDriver'] = $qad->DataDriver;
				$sess_data['ListFaktur'] = $qad->ListFaktur;
				$sess_data['CreateFaktur'] = $qad->CreateFaktur;
				$sess_data['ManagerAppFaktur'] = $qad->ManagerAppFaktur;
				$sess_data['ListSuratJalan'] = $qad->ListSuratJalan;
				$sess_data['CreateSuratJalan'] = $qad->CreateSuratJalan;
				$sess_data['ManagerAppSuratUangJalan'] = $qad->ManagerAppSuratUangJalan;
				$sess_data['ListInvoice'] = $qad->ListInvoice;
				$sess_data['CreateInvoice'] = $qad->CreateInvoice;
				$sess_data['ManagerAppInvoice'] = $qad->ManagerAppInvoice;
				$sess_data['ReportOrders'] = $qad->ReportOrders;
				$sess_data['ReportClients'] = $qad->ReportClients;
				$sess_data['ReportVendors'] = $qad->ReportVendors;
				$sess_data['ReportCars'] = $qad->ReportCars;
				$sess_data['ReportDrivers'] = $qad->ReportDrivers;
				$sess_data['ManagerAppInvoice'] = $qad->ManagerAppInvoice;
		
				$this->session->set_userdata($sess_data);
			}
			redirect("dashboard");
		}
		else
		{
			//print_r('ss');exit;
			$this->session->set_flashdata("result_login","Gagal Login. Username dan Password Anda Salah...");
			redirect("login");
		}
		
	}
}

/* End of file app_user_login_model.php */
/* Location: ./application/models/app_user_login_model.php */