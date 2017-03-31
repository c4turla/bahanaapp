<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class app_load_data_model extends CI_Model {

public function index_table_user(){
	
	
			  
			$tot_hal = $this->db->query("select * from user");
			$hasil = '
		<div class="page-content"> <!-- page content start -->

		<div class="page-subheading page-subheading-md">
			<ol class="breadcrumb">
				<li><a href="javascript:;">Dashboard</a></li>
				<li><a href="javascript:;">User</a></li>
				<li class="active"><a href="javascript:;">Members</a></li>
			</ol>
		</div>
		<div class="page-subheading page-subheading-md bg-white">
			<div class="row">
				<div class="col-sm-4 col-xs-5">
					<a href="#" class="btn btn-round btn-primary" title="Members"><strong>'.$tot_hal->num_rows().' Members</a>
				</div>
				<div class="col-sm-7 col-sm-push-1 col-xs-6 col-xs-push-1">
					<a href="'. base_url() . 'user/AddProfile" class="btn btn-success pull-right" title="Update"><i class="fa fa-lg fa-fw fa-plus"></i> Add Users</a>
				</div>
			</div>
		</div>

		<div class="container-fluid-md">
			<div class="row"> ';
		
		$get = $this->db->query("select * from user where 1=1 ");
	
		foreach($get->result() as $g)
			{
				$hasil.=' <div class="col-sm-6 col-md-4 col-lg-3">
							<div class="panel panel-default panel-member">
								<div class="panel-body">
									<a href="'. base_url() . 'user/viewprofile/'.$g->id.'">
										<div class="text-center">
											<img src="'. base_url() . 'files/'.$g->FilesName.'"  width="150px" height="150px" class="img-circle" alt="image">

											<h4 class="thin">
												'.$g->NamaLengkap.'
											</h4>
										</div>
									</a>
								</div>
							</div>
						</div>';
				    
           
			}
			
			 $hasil .= '</div>
						</div>
						</div> <!-- page content end -->
						';
			
			return $hasil;
	
	
}


		public function indexs_table_user($limit,$offset)
		{
			$hasil = "";
			$hasil .= '
				<table class="table table-striped">
                <thead>
                    <tr>
                        <th width="20%">No</th>
                        <th width="20%">Nama Lengkap</th>
                        <th width="15%">Posisi</th>
                        <th width="15%">Role</th>
                        <th width="15%">Email</th>
						<th width="15%">Action</th>
                    </tr>
                </thead>';
				  
			$tot_hal = $this->db->query("select * from user");
			
			$config['base_url'] = base_url() . 'dashboard/managementuser/page/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 4;
			$config['full_tag_open'] = '<ul class="pagination pull-right" >';
			$config['full_tag_close'] = '</ul>';
			$config['first_link'] = false;
			$config['last_link'] = false;
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['prev_link'] = '&laquo Prev';
			$config['prev_tag_open'] = '<li class="prev">';
			$config['prev_tag_close'] = '</li>';
			$config['next_link'] = 'Next &raquo';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			
			$this->pagination->initialize($config);
			$get = $this->db->query("select * from user where 1=1 LIMIT ".$offset.",".$limit."");
			$i = $offset+1;
			foreach($get->result() as $g)
			{
				
				    
              $hasil .= '<tr class="">
                        <td>'.$i.'</td>
                        <td>'.$g->NamaLengkap.'</td>
                        <td>'.$g->Position.'</td>
                        <td>'.$g->Role.'</td>
						<td>'.$g->Email.'</td>
                        <td class="center">
                            <a class="btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Print Preview"><i class="fa fa-print"></i></a>
                            <div class="btn-group" data-toggle="tooltip" data-placement="top" title="Actions">
								<a class="btn-sm btn-danger dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-eye"></i> <span class="caret"></span><span class="sr-only"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#" id="button-pop-a1"><i class="fa fa-edit"></i> Edit</a></li>
									<li><a href="#" id="button-pop-a2"><i class="fa fa-ban"></i> Delete</a></li>
								</ul>
							</div>
						</td>
                    </tr>';
			
				$i++;
			}
			
			 $hasil .= '<tfoot>
                    <tr>
                        <th width="20%">No</th>
                        <th width="20%">Nama Lengkap</th>
                        <th width="15%">Posisi</th>
                        <th width="15%">Role</th>
                        <th width="15%">Email</th>
						<th width="15%"><!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div></th>
                    </tr>
                </tfoot>';
			$hasil .= "</table>";
			
			$hasil .= $this->pagination->create_links();
			return $hasil;
		}
		
		public function load_data_client($limit,$offset)
		{
			$hasil = "";
			$hasil .= '
				<table id="table-basic" class="table table-striped">
                <thead>
                    <tr>
						<th>No</th>
                        <th>Name</th>
                        <th>C/P</th>
                        <th>Phone/Mobile</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                </thead>';
				  
			$tot_hal = $this->db->query("select * from bahana_client");
			
			$config['base_url'] = base_url() . 'dashboard/managementuser/page/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 4;
			$config['full_tag_open'] = '<ul class="pagination pull-right" >';
			$config['full_tag_close'] = '</ul>';
			$config['first_link'] = false;
			$config['last_link'] = false;
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['prev_link'] = '&laquo Prev';
			$config['prev_tag_open'] = '<li class="prev">';
			$config['prev_tag_close'] = '</li>';
			$config['next_link'] = 'Next &raquo';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			
			$this->pagination->initialize($config);
			//pr($offset);exit;
			$get = $this->db->query("select * from bahana_client where 1=1 LIMIT ".$offset.",".$limit."");
			$i = $offset+1;
			foreach($get->result() as $g)
			{
				
				    
              $hasil .= '<tr class="">
                        <td>'.$i.'</td>
                        <td>'.$g->nameClient.'</td>
                        <td>'.$g->nameCP.'</td>
                        <td>'.$g->phone.''.$g->mobile.'</td>
						<td width="35%">'.$g->Address.'</td>
						
                        <td class="center">
                            <a class="btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Print Preview"><i class="fa fa-print"></i></a>
                            <div class="btn-group" data-toggle="tooltip" data-placement="top" title="Actions">
								<a class="btn-sm btn-danger dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-eye"></i> <span class="caret"></span><span class="sr-only"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="'. base_url() . 'data/EditClient/'.$g->id.'" id="button-pop-a1"><i class="fa fa-edit"></i> Edit</a></li>
									<li><a href="'. base_url() . 'data/HapusClient/'.$g->id.'" id="button-pop"><i class="fa fa-ban"></i> Delete</a></li>
								</ul>
							</div>
							
						</td>
                    </tr>';
			
				$i++;
			}
			
			 $hasil .= '<tfoot>
                    <tr>
						<th>No</th>
						<th>Name</th>
                        <th>C/P</th>
                        <th>Phone/Mobile</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>';
			$hasil .= "</table>";
			
			//$hasil .= $this->pagination->create_links();
			return $hasil;
		}
		
		public function load_data_faktur($limit,$offset)
		{
			$hasil = "";
			$hasil .= '
				<table id="table-basic" class="table table-striped">
                <thead>
                   <tr>
                        <th width="12%">No. SO</th>
                        <th width="12%">No. Faktur</th>
                        <th width="15%">Client</th>
                        <th width="15%">Car</th>
                        <th width="13%">No. Polisi</th>
                        <th width="15%">Status</th>
                        <th width="18%">Actions</th>
                    </tr>
                </thead>';
				
			$tot_hal = $this->db->query("select * from bahana_faktur");
			
			$config['base_url'] = base_url() . 'dashboard/managementuser/page/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 4;
			$config['full_tag_open'] = '<ul class="pagination pull-right" >';
			$config['full_tag_close'] = '</ul>';
			$config['first_link'] = false;
			$config['last_link'] = false;
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['prev_link'] = '&laquo Prev';
			$config['prev_tag_open'] = '<li class="prev">';
			$config['prev_tag_close'] = '</li>';
			$config['next_link'] = 'Next &raquo';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			
			$this->pagination->initialize($config);
			//pr($offset);exit;
			$get = $this->db->query("select 
										br.CarName as NamaMobil,
										br.NoPolisi as NoPolisi,
										bc.nameClient as NamaClient,
										bf.* 
									from bahana_faktur bf 
									left join bahana_client bc on bf.client=bc.id 
									left join bahana_car br on bf.DataMobil=br.id_car 
									where 1=1");
			$i = $offset+1;
			foreach($get->result() as $g)
			{
				
				    
              $hasil .= '<tr class="">
                        <td>'.$g->NomorSO.'</td>
                        <td>'.$g->NomorFaktur.'</td>
                        <td>'.$g->NamaClient.'</td>
                        <td>'.$g->NamaMobil.'</td>
						<td>'.$g->NoPolisi.'</td>
						<td class="center">';

				if($g->status==1){
					$hasil .='<span class="label label-danger">N</span>';
				}else if($g->status==2){
					$hasil .='<span class="label label-danger">N</span><span class="label label-info">A</span>';
				}else if($g->status==3){
					$hasil .='<span class="label label-danger">N</span><span class="label label-info">A</span><span class="label label-warning">U</span>';
				}else if($g->status==4){
					$hasil .='<span class="label label-danger">N</span><span class="label label-info">A</span><span class="label label-warning">U</span><span class="label label-success">F</span></td>';
				}
				
				$hasil .='
                        <td class="center">
							<a href="faktur/viewfaktur/'.$g->NomorFaktur.'" target="_blank" class="btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Print Preview"><i class="fa fa-print"></i></a>
                            <a href="faktur/approved/'.$g->NomorFaktur.'" class="btn-sm btn-info" data-toggle="tooltip" data-placement="top" title="Approve"><i class="fa fa-check-square"></i></a>
                            <a href="faktur/update/'.$g->NomorFaktur.'" class="btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Update"><i class="fa fa-plus-square"></i></a>
                            <div class="btn-group" data-toggle="tooltip" data-placement="top" title="Actions">
								<a class="btn-sm btn-danger dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-eye"></i> <span class="caret"></span><span class="sr-only"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#" id="button-pop-a1"><i class="fa fa-edit"></i> Edit</a></li>
									<li><a href="#" id="button-pop-a2"><i class="fa fa-ban"></i> Delete</a></li>
								</ul>
                                <!-- Element to pop up - Edit-->
								<div id="pop-up-a1">
									<a class="b-close-a1 btn btn-round btn-primary"><i class="fa fa-times"></i></a>
									<div class="form-group">
										<div class="well bg-danger well-sm">
											<strong>Password</strong> required.
										</div>										
										<div class="controls">
											<input type="password" placeholder="Password" class="form-control" id="pass-security">
                                            <p><code>Need Security Password to Continue.<br />- Please contact your Manager.</code></p>
										</div>										
									</div>
									<div class="btn-pop">
										<a href="#" class="btn btn-primary"><i class="fa fa-check"></i> OK</a>
									</div>
								</div>
                                <!-- Element to pop up - Delete-->
								<div id="pop-up-a2">
									<a class="b-close-a2 btn btn-round btn-primary"><i class="fa fa-times"></i></a>
									<div class="form-group">
										<div class="well bg-danger well-sm">
											<strong>Password</strong> required.
										</div>										
										<div class="controls">
											<input type="password" placeholder="Password" class="form-control" id="pass-security">
                                            <p><code>Need Security Password to Continue.<br />- Please contact your Manager.</code></p>
										</div>										
									</div>
									<div class="btn-pop">
										<a href="#" class="btn btn-primary"><i class="fa fa-check"></i> OK</a>
									</div>
								</div>
							</div><!-- /btn-group -->
						</td>

                    </tr>';
			
				$i++;
			}
			
			 $hasil .= '<tfoot>
                    <tr>
						   <th width="12%">No. SO</th>
                        <th width="12%">No. Faktur</th>
                        <th width="15%">Client</th>
                        <th width="15%">Car</th>
                        <th width="13%">No. Polisi</th>
                        <th width="15%">Status</th>
                        <th width="18%">Actions</th>
                    </tr>
                </tfoot>';
			$hasil .= "</table>";
			
			//$hasil .= $this->pagination->create_links();
			return $hasil;
		}
		
		public function load_data_invoice($limit,$offset)
		{
			$hasil = "";
			$hasil .= '
				<table id="table-basic" class="table table-striped">
				 <thead>
                    <tr>
                        <th width="12%">No. Invoice</th>
                        <th width="12%">No. SO</th>
                        <th width="15%">Client</th>
                        <th width="15%">Car</th>
                        <th width="13%">No. Polisi</th>
                        <th width="15%">Status</th>
                        <th width="18%">Actions</th>
                    </tr>
                </thead>';
				
			$tot_hal = $this->db->query("select * from bahana_invoice");
			
			$config['base_url'] = base_url() . 'dashboard/managementuser/page/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 4;
			$config['full_tag_open'] = '<ul class="pagination pull-right" >';
			$config['full_tag_close'] = '</ul>';
			$config['first_link'] = false;
			$config['last_link'] = false;
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['prev_link'] = '&laquo Prev';
			$config['prev_tag_open'] = '<li class="prev">';
			$config['prev_tag_close'] = '</li>';
			$config['next_link'] = 'Next &raquo';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			
			$this->pagination->initialize($config);
			//pr($offset);exit;
			$get = $this->db->query("select 
										br.CarName as NamaMobil,
										br.NoPolisi as NoPolisi,
										bc.nameClient as NamaClient,
										bi.* 
									from bahana_invoice bi 
									left join bahana_client bc on bi.client=bc.id 
									left join bahana_car br on bi.DataMobil=br.id_car 
									where 1=1");
			$i = $offset+1;
			foreach($get->result() as $g)
			{
				
				    
              $hasil .= '<tr class="">
                        <td>'.$g->NomorInvoice.'</td>
                        <td>'.$g->NomorSO.'</td>
                        <td>'.$g->NamaClient.'</td>
                        <td>'.$g->NamaMobil.'</td>
						<td>'.$g->NoPolisi.'</td>
						<td class="center">';

				if($g->status==1){
					$hasil .='<span class="label label-danger">N</span>';
				}else if($g->status==2){
					$hasil .='<span class="label label-danger">N</span><span class="label label-info">A</span>';
				}else if($g->status==3){
					$hasil .='<span class="label label-danger">N</span><span class="label label-info">A</span><span class="label label-warning">U</span>';
				}else if($g->status==4){
					$hasil .='<span class="label label-danger">N</span><span class="label label-info">A</span><span class="label label-warning">U</span><span class="label label-success">F</span></td>';
				}
				
				$hasil .='
                        <td class="center">
							<a href="faktur/viewfaktur/'.$g->NomorInvoice.'" target="_blank" class="btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Print Preview"><i class="fa fa-print"></i></a>
                            <a href="faktur/approved/'.$g->NomorInvoice.'" class="btn-sm btn-info" data-toggle="tooltip" data-placement="top" title="Approve"><i class="fa fa-check-square"></i></a>
                            <a href="faktur/update/'.$g->NomorInvoice.'" class="btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Update"><i class="fa fa-plus-square"></i></a>
                            <div class="btn-group" data-toggle="tooltip" data-placement="top" title="Actions">
								<a class="btn-sm btn-danger dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-eye"></i> <span class="caret"></span><span class="sr-only"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#" id="button-pop-a1"><i class="fa fa-edit"></i> Edit</a></li>
									<li><a href="#" id="button-pop-a2"><i class="fa fa-ban"></i> Delete</a></li>
								</ul>
                                <!-- Element to pop up - Edit-->
								<div id="pop-up-a1">
									<a class="b-close-a1 btn btn-round btn-primary"><i class="fa fa-times"></i></a>
									<div class="form-group">
										<div class="well bg-danger well-sm">
											<strong>Password</strong> required.
										</div>										
										<div class="controls">
											<input type="password" placeholder="Password" class="form-control" id="pass-security">
                                            <p><code>Need Security Password to Continue.<br />- Please contact your Manager.</code></p>
										</div>										
									</div>
									<div class="btn-pop">
										<a href="#" class="btn btn-primary"><i class="fa fa-check"></i> OK</a>
									</div>
								</div>
                                <!-- Element to pop up - Delete-->
								<div id="pop-up-a2">
									<a class="b-close-a2 btn btn-round btn-primary"><i class="fa fa-times"></i></a>
									<div class="form-group">
										<div class="well bg-danger well-sm">
											<strong>Password</strong> required.
										</div>										
										<div class="controls">
											<input type="password" placeholder="Password" class="form-control" id="pass-security">
                                            <p><code>Need Security Password to Continue.<br />- Please contact your Manager.</code></p>
										</div>										
									</div>
									<div class="btn-pop">
										<a href="#" class="btn btn-primary"><i class="fa fa-check"></i> OK</a>
									</div>
								</div>
							</div><!-- /btn-group -->
						</td>

                    </tr>';
			
				$i++;
			}
			
			 $hasil .= '<tfoot>
                    <tr>
                        <th>No. Invoice</th>
                        <th>No. SO</th>
                        <th>Client</th>
                        <th>Car</th>
                        <th>No. Polisi</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>';
			$hasil .= "</table>";
			
			//$hasil .= $this->pagination->create_links();
			return $hasil;
		}
		
		public function load_sj_finish($limit,$offset)
		{
			$hasil = "";
			$hasil .= '
				<table class="table table-hover">
                <thead>
                   <tr>
                        <th width="12%">No. SO</th>
                        <th width="12%">No. Surat</th>
                        <th width="15%">Client</th>
                        <th width="15%">Car</th>
                        <th width="15%">No. Polisi</th>                        
                        <th width="8%">Status</th>
                        <th width="12%">No. Faktur</th>
                        <th width="11%">Actions</th>
                    </tr>
                </thead>';
				
			$tot_hal = $this->db->query("select * from bahana_surat_jalan where status=4");
			
			$config['base_url'] = base_url() . 'dashboard/managementuser/page/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 4;
			$config['full_tag_open'] = '<ul class="pagination pull-right" >';
			$config['full_tag_close'] = '</ul>';
			$config['first_link'] = false;
			$config['last_link'] = false;
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['prev_link'] = '&laquo Prev';
			$config['prev_tag_open'] = '<li class="prev">';
			$config['prev_tag_close'] = '</li>';
			$config['next_link'] = 'Next &raquo';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			
			$this->pagination->initialize($config);
			
			$get = $this->db->query("SELECT br.CarName AS NamaMobil,
									br.NoPolisi AS NoPolisi,
									bc.nameClient AS NamaClient,
									bs.NomorSJ AS NomorSJ,
									bs.status AS StatusSJ,
									bf.* 
									FROM bahana_faktur bf 
									LEFT JOIN bahana_client bc ON bf.client=bc.id 
									LEFT JOIN bahana_car br ON bf.DataMobil=br.id_car
									LEFT JOIN bahana_surat_jalan bs ON bf.NomorFaktur=bs.NomorFaktur 
									WHERE 1=1 AND bs.status=4");
			$i = $offset+1;
			foreach($get->result() as $s)
			{
				
				    
              $hasil .= '<tr class="">
                        <td>'.$s->NomorSO.'</td>
                        <td>'.$s->NomorSJ.'</td>
                        <td>'.$s->NamaClient.'</td>
                        <td>'.$s->NamaMobil.'</td>
						<td>'.$s->NoPolisi.'</td>
						<td class="center">';

				if($s->StatusSJ==4){
					$hasil .='<span class="label label-success">FINISH</span>';
				}'</td>';
				$hasil .='
						<td>'.$s->NomorFaktur.'</td>
                        <td class="center">
							<a href="faktur/update/'.$s->NomorFaktur.'" class="btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Update"><i class="fa fa-plus-square"> </i> UPDATE</a>
					</td>
                    </tr>';
			
				$i++;
			}
			

			$hasil .= "</table>";
			
			//$hasil .= $this->pagination->create_links();
			return $hasil;
		}
		
		
		public function load_faktur_approved($limit,$offset)
		{
			$hasil = "";
			$hasil .= '
				<table class="table table-hover">
                <thead>
                   <tr>
                        <th width="12%">No. SO</th>
                        <th width="12%">No. Faktur</th>
                        <th width="17%">Client</th>
                        <th width="17%">Car</th>
                        <th width="15%">No. Polisi</th>                        
                        <th width="10%">Status</th>
                        <th width="17%">Actions</th>
                    </tr>
                </thead>';
				
			$tot_hal = $this->db->query("select * from bahana_faktur where status=2");
			
			$config['base_url'] = base_url() . 'dashboard/managementuser/page/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 4;
			$config['full_tag_open'] = '<ul class="pagination pull-right" >';
			$config['full_tag_close'] = '</ul>';
			$config['first_link'] = false;
			$config['last_link'] = false;
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['prev_link'] = '&laquo Prev';
			$config['prev_tag_open'] = '<li class="prev">';
			$config['prev_tag_close'] = '</li>';
			$config['next_link'] = 'Next &raquo';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			
			$this->pagination->initialize($config);
			
			$get = $this->db->query("SELECT 	br.CarName AS NamaMobil,
									br.NoPolisi AS NoPolisi,
									bc.nameClient AS NamaClient,
									bf.nomorso AS NomorSO,
									bf.nomorfaktur AS NomorFaktur,
									bf.status AS StatusFA 
									FROM bahana_faktur bf 
									LEFT JOIN bahana_client bc ON bf.client=bc.id 
									LEFT JOIN bahana_car br ON bf.DataMobil=br.id_car
									WHERE 1=1 AND bf.status=2");
			$i = $offset+1;
			foreach($get->result() as $s)
			{
				
				    
              $hasil .= '<tr class="">
                        <td>'.$s->NomorSO.'</td>
                        <td>'.$s->NomorFaktur.'</td>
                        <td>'.$s->NamaClient.'</td>
                        <td>'.$s->NamaMobil.'</td>
						<td>'.$s->NoPolisi.'</td>
						<td class="center">';

				if($s->StatusFA==2){
					$hasil .='<span class="label label-info">APPROVED</span>';
				}'</td>';
				$hasil .='
                        <td class="center">
							<a href="suratjalan/createsuratjalan/" class="btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="New Surat Jalan"><i class="fa fa-plus-square"> </i> NEW SURAT JALAN</a>
					</td>
                    </tr>';
			
				$i++;
			}
			

			$hasil .= "</table>";
			
			//$hasil .= $this->pagination->create_links();
			return $hasil;
		}
		
		public function load_data_vendor($limit,$offset)
		{
			$hasil = "";
			$hasil .= '
				<table id="table-basic" class="table table-striped">
                <thead>
                    <tr>
						<th>No</th>
                        <th>Name</th>
                        <th>C/P</th>
                        <th>Phone/Mobile</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                </thead>';
				  
			$tot_hal = $this->db->query("select * from bahana_vendor");
			
			$config['base_url'] = base_url() . 'dashboard/managementuser/page/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 4;
			$config['full_tag_open'] = '<ul class="pagination pull-right" >';
			$config['full_tag_close'] = '</ul>';
			$config['first_link'] = false;
			$config['last_link'] = false;
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['prev_link'] = '&laquo Prev';
			$config['prev_tag_open'] = '<li class="prev">';
			$config['prev_tag_close'] = '</li>';
			$config['next_link'] = 'Next &raquo';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			
			$this->pagination->initialize($config);
			//pr($offset);exit;
			$get = $this->db->query("select * from bahana_vendor where 1=1");
			$i = $offset+1;
			foreach($get->result() as $g)
			{
				
				    
              $hasil .= '<tr class="">
                        <td>'.$i.'</td>
                        <td>'.$g->nameVendor.'</td>
                        <td>'.$g->nameCP.'</td>
                        <td>'.$g->phone.''.$g->mobile.'</td>
						<td>'.$g->Address.'</td>
						
                        <td class="center">
							<a class="btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Print Preview"><i class="fa fa-print"></i></a>
							<a href="'. base_url() . 'data/EditVendor/'.$g->id.'" class="btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
							<a href="'. base_url() . 'data/HapusVendor/'.$g->id.'"class="btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-ban"></i></a>
						</td>
                    </tr>';
			
				$i++;
			}
			
			 $hasil .= '<tfoot>
                    <tr>
						<th>No</th>
						<th>Name</th>
                        <th>C/P</th>
                        <th>Phone/Mobile</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>';
			$hasil .= "</table>";
			
			//$hasil .= $this->pagination->create_links();
			return $hasil;
		}


		public function load_data_suratjalan($limit,$offset)
		{
			$hasil = "";
			$hasil .= '
				<table id="table-basic" class="table table-striped">
                <thead>
                     <tr>
                        <th width="30%">No. Surat Jalan</th>
                        <th width="12%">No. Faktur</th>
                        <th width="15%">Client</th>
                        <th width="15%">Car</th>
                        <th width="13%">No. Polisi</th>
                        <th width="15%">Status</th>
                        <th width="18%">Actions</th>
                    </tr>
                </thead>';
				  
			$tot_hal = $this->db->query("select * from bahana_surat_jalan");
			
			$config['base_url'] = base_url() . 'dashboard/managementuser/page/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 4;
			$config['full_tag_open'] = '<ul class="pagination pull-right" >';
			$config['full_tag_close'] = '</ul>';
			$config['first_link'] = false;
			$config['last_link'] = false;
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['prev_link'] = '&laquo Prev';
			$config['prev_tag_open'] = '<li class="prev">';
			$config['prev_tag_close'] = '</li>';
			$config['next_link'] = 'Next &raquo';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			
			$this->pagination->initialize($config);
			//pr($offset);exit;
			$get = $this->db->query("select 
										br.CarName as NamaMobil,
										br.NoPolisi as NoPolisi,
									
										bs.* 
									from bahana_surat_jalan bs
									left join bahana_car br on bs.DataMobil=br.id_car 
									where 1=1
									");
			$i = $offset+1;
			foreach($get->result() as $g)
			{
				
				    
              $hasil .= '<tr class="">
                   
                        <td width="14%">'.$g->NomorSJ.'</td>
                        <td>'.$g->NomorFaktur.'</td>
                        <td>'.$g->Client.'</td>
						<td>'.$g->NamaMobil.'</td>
						<td>'.$g->NoPolisi.'</td>
                      	<td width="5%" class="center">';

						if($g->status==1){
							$hasil .='<span class="label label-danger">N</span>';
						}else if($g->status==2){
							$hasil .='<span class="label label-danger">N</span><span class="label label-info">A</span>';
						}else if($g->status==3){
							$hasil .='<span class="label label-danger">N</span><span class="label label-info">A</span><span class="label label-warning">U</span>';
						}else if($g->status==4){
							$hasil .='<span class="label label-danger">N</span><span class="label label-info">A</span><span class="label label-warning">U</span><span class="label label-success">F</span></td>';
						}
						
						$hasil .='
		                        <td class="center">
									<a href="suratjalan/viewsuratjalan/'.$g->NomorSJ.'" target="_blank" class="btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Print Preview"><i class="fa fa-print"></i></a>
									<a href="suratjalan/approved/'.$g->NomorSJ.'" class="btn-sm btn-info" data-toggle="tooltip" data-placement="top" title="Approve"><i class="fa fa-check-square"></i></a>
		                            <a href="suratjalan/updatesj/'.$g->NomorSJ.'" class="btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Update"><i class="fa fa-plus-square"></i></a>
									<div class="btn-group" data-toggle="tooltip" data-placement="top" title="Actions">
										<a class="btn-sm btn-danger dropdown-toggle" data-toggle="dropdown">
											<i class="fa fa-eye"></i> <span class="caret"></span><span class="sr-only"></span></a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#" id="button-pop-a1"><i class="fa fa-edit"></i> Edit</a></li>
											<li><a href="#" id="button-pop-a2"><i class="fa fa-ban"></i> Delete</a></li>
										</ul>
		                                <!-- Element to pop up - Edit-->
										<div id="pop-up-a1">
											<a class="b-close-a1 btn btn-round btn-primary"><i class="fa fa-times"></i></a>
											<div class="form-group">
												<div class="well bg-danger well-sm">
													<strong>Password</strong> required.
												</div>										
												<div class="controls">
													<input type="password" placeholder="Password" class="form-control" id="pass-security">
		                                            <p><code>Need Security Password to Continue.<br />- Please contact your Manager.</code></p>
												</div>										
											</div>
											<div class="btn-pop">
												<a href="#" class="btn btn-primary"><i class="fa fa-check"></i> OK</a>
											</div>
										</div>
		                                <!-- Element to pop up - Delete-->
										<div id="pop-up-a2">
											<a class="b-close-a2 btn btn-round btn-primary"><i class="fa fa-times"></i></a>
											<div class="form-group">
												<div class="well bg-danger well-sm">
													<strong>Password</strong> required.
												</div>										
												<div class="controls">
													<input type="password" placeholder="Password" class="form-control" id="pass-security">
		                                            <p><code>Need Security Password to Continue.<br />- Please contact your Manager.</code></p>
												</div>										
											</div>
											<div class="btn-pop">
												<a href="#" class="btn btn-primary"><i class="fa fa-check"></i> OK</a>
											</div>
										</div>
									</div><!-- /btn-group -->
								</td>

		                    </tr>';
			
				$i++;
			}
			
			 $hasil .= '<tfoot>
                    <tr>
						<th width="12%">No. Surat Jalan</th>
                        <th width="12%">No. Faktur</th>
                        <th width="15%">Client</th>
                        <th width="15%">Car</th>
                        <th width="13%">No. Polisi</th>
                        <th width="5%">Status</th>
                        <th width="18%">Actions</th>
                    </tr>
                </tfoot>';
			$hasil .= "</table>";
			
			//$hasil .= $this->pagination->create_links();
			return $hasil;
		}


		public function load_data_car($limit,$offset)
		{
			$hasil = "";
			$hasil .= '
				<table id="table-basic" class="table table-striped">
                <thead>
                    <tr>
						<th>No</th>
                        <th>Brand</th>
                        <th>Name</th>
                        <th>No Polisi</th>
                        <th>Vendor</th>
						<th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>';
				  
			$tot_hal = $this->db->query("select * from bahana_car");
			
			$config['base_url'] = base_url() . 'dashboard/managementuser/page/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 4;
			$config['full_tag_open'] = '<ul class="pagination pull-right" >';
			$config['full_tag_close'] = '</ul>';
			$config['first_link'] = false;
			$config['last_link'] = false;
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['prev_link'] = '&laquo Prev';
			$config['prev_tag_open'] = '<li class="prev">';
			$config['prev_tag_close'] = '</li>';
			$config['next_link'] = 'Next &raquo';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			
			$this->pagination->initialize($config);
			//pr($offset);exit;
			$get = $this->db->query("select * from bahana_car where 1=1");
			$i = $offset+1;
			foreach($get->result() as $g)
			{
				
				    
              $hasil .= '<tr class="">
                        <td>'.$i.'</td>
                        <td>'.$g->CarBrand.'</td>
                        <td>'.$g->CarName.'</td>
                        <td>'.$g->NoPolisi.'</td>
						<td>'.$g->VendorName.'</td>
						<td class="center">';

						if($g->Status==1){
							$hasil .='<span class="label label-success">READY</span>';
						}else if($g->Status==2){
							$hasil .='<span class="label label-info">OTR</span>';
						}else if($g->Status==3){
							$hasil .='<span class="label label-warning">REPAIR</span>';	
						}else if($g->Status==4){
							$hasil .='<span class="label label-danger">PENDING</span></td>';
						};
						$hasil .='
						<td class="center">
							<a class="btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Print Preview"><i class="fa fa-print"></i></a>
							<a href="'. base_url() . 'data/EditCar/'.$g->id_car.'" class="btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
							<a href="'. base_url() . 'data/HapusCar/'.$g->id_car.'" class="btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-ban"></i></a>
						</td>
                    </tr>';
			
				$i++;
			}
			
			 $hasil .= '<tfoot>
                    <tr>
						<th>No</th>
                        <th>Brand</th>
                        <th>Name</th>
                        <th>No Polisi</th>
                        <th>Vendor</th>
						<th>Status</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>';
			$hasil .= "</table>";
			
			//$hasil .= $this->pagination->create_links();
			return $hasil;
		}
	public function load_data_driver($limit,$offset)
		{
			$hasil = "";
			$hasil .= '
				<table id="table-basic" class="table table-striped">
                <thead>
                    <tr>
						<th>No</th>
                        <th>Name</th>
                        <th>Phone/Mobile</th>
                        <th>BBM Pin</th>
                        <th>Address</th>
						<th>Actions</th>
                    </tr>
                </thead>';
				  
			$tot_hal = $this->db->query("select * from bahana_driver");
			
			$config['base_url'] = base_url() . 'dashboard/managementuser/page/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 4;
			$config['full_tag_open'] = '<ul class="pagination pull-right" >';
			$config['full_tag_close'] = '</ul>';
			$config['first_link'] = false;
			$config['last_link'] = false;
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['prev_link'] = '&laquo Prev';
			$config['prev_tag_open'] = '<li class="prev">';
			$config['prev_tag_close'] = '</li>';
			$config['next_link'] = 'Next &raquo';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			
			$this->pagination->initialize($config);
			//pr($offset);exit;
			$get = $this->db->query("select * from bahana_driver where 1=1");
			$i = $offset+1;
			foreach($get->result() as $g)
			{
				
				    
              $hasil .= '<tr class="">
                        <td>'.$i.'</td>
                        <td>'.$g->DriverName.'</td>
                        <td>'.$g->Mobile1.'/'.$g->Mobile2.'</td>
                        <td>'.$g->PINBB.'</td>
						<td>'.$g->Address.'</td>
						
						<td class="center">
							<a class="btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Print Preview"><i class="fa fa-print"></i></a>
							<a href="'. base_url() . 'data/EditDriver/'.$g->id.'" class="btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
							<a href="'. base_url() . 'data/HapusDriver/'.$g->id.'" class="btn-sm btn-danger" id="button-pop-a2" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-ban"></i></a>
							
							<!-- Element to pop up - Delete-->
										<div id="pop-up-a2">
											<a class="b-close-a2 btn btn-round btn-primary"><i class="fa fa-times"></i></a>
											<div class="form-group">									
												<div class="controls">
		                                            <p><code>Are you sure?</code></p>
												</div>										
											</div>
											<div class="btn-pop">
												<a href="#" class="btn btn-primary"><i class="fa fa-check"></i> OK</a>
											</div>
										</div>
							
						</td>
                    </tr>';
			
				$i++;
			}
			
			 $hasil .= '<tfoot>
                    <tr>
						<th>No</th>
						<th>Name</th>
                        <th>C/P</th>
                        <th>Phone/Mobile</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>';
			$hasil .= "</table>";
			
			//$hasil .= $this->pagination->create_links();
			return $hasil;
		}	
}

/* End of file app_user_login_model.php */
/* Location: ./application/models/app_user_login_model.php */