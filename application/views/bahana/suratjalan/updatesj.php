
<div class="page-content"> <!-- page content start -->

<div class="page-subheading page-subheading-md">
    <ol class="breadcrumb">
        <li><a href="javascript:;">Dashboard</a></li>
        <li><a href="javascript:;">Surat Jalan</a></li>
        <li class="active"><a href="javascript:;">Update Surat Jalan</a></li>
    </ol>
</div>
<div class="page-heading page-heading-md">
    <h2>Update Surat Jalan</h2>
</div>

<div class="container-fluid-md">
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#tab1-1">Operational</a></li>
				<?php if($sesi['Role'] === '5'){?>
                <li><a data-toggle="tab" href="#tab1-2">Manager Update</a></li>
                <?php }?>
           	</ul>

			<div class="tab-content"> <!-- tab content start -->

				<div id="tab1-1" class="tab-pane active">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h4 class="panel-title">Surat Jalan Form</h4>

							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="fa fa-fw fa-minus"></i></a>
								<a href="#" data-rel="reload"><i class="fa fa-fw fa-refresh"></i></a>
							</div>
						</div>
						<div class="margin-lg-bottom" style="line-height:30px">Status : &nbsp;
                          <?php 
							if($status==1){echo '<span class="label label-danger"> NEW</span>';} 
							if($status==2){echo '<span class="label label-info"> APPROVED</span>';} 
							if($status==3){echo '<span class="label label-warning"> UPDATE</span>';} 
							if($status==4){echo '<span class="label label-success"> FINISH</span>';} 
							?>
                        </div>
                        <?php if($statusview === 'berhasil'){?>
                            <div class="alert alert-success alert-dismissible alerttambah">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h4><i class="icon fa fa-check"></i> Perhatian !</h4>
                                   Data Berhasil Ditambahkan
                            </div>
                        <?php }?>
						<div class="panel-body">
							<?php echo form_open_multipart("suratjalan/simpan",'class="form-horizontal form-bordered FormProfile"'); ?>		
								<fieldset>
									<legend class="form-legend">
										<span>Faktur (FA)</span>
									</legend>
                					<div class="form-group">
									<label for="sales-order" class="col-sm-3 control-label">No. Faktur</label>
										<div class="col-sm-4">
											 <select class="form-control form-select2 array-klas NofakturSj" name="NoFA" data-placeholder="Nomor Faktur.." disabled="disabled">
	
												<option value="">Please Select</option>
                                                <?php foreach($fakturlist as $row){ ?>

		                                                	<?php if($row->NomorFaktur===$NomorFaktur){ ?> 
																<option value="<?php echo $row->NomorFaktur;  ?>" selected><?php echo $row->NomorFaktur;  ?></option>
															<?php }else {?>
																<option value="<?php echo $row->NomorFaktur;  ?>"><?php echo $row->NomorFaktur;  ?></option>
															<?php } ?>

                                                     
                                                <?php } ?>

                        						</select>
										</div>
									</div>
								</fieldset>
                                
                                <fieldset>
									<legend class="form-legend">
										<span>Surat Jalan (SJ)</span>
									</legend>
                					<div class="form-group">
										<label class="col-sm-3 control-label" for="no-jalan">No. Surat Jalan</label>
										<div class="col-sm-4">
											<input type="text" readonly name="suratjalan" class="form-control" id="no-jalan" value="<?php echo $NomorSJ;?>" placeholder="auto.." readonly>
										</div>
									</div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="date-create">Date Create</label>
                                        <div class="col-sm-2">
                                            <input type="text" readonly name="tanggalcreate" class="form-control" data-rel="datepicker" name="datecreate" id="date-create" value="<?php echo $DateCreate ?>" readonly >
                                        </div>
                                        <label class="col-sm-3 control-label" for="time-create">Time Create</label>
                                        <div class="col-sm-2">
                                            <input type="text" readonly name="timecreate" class="form-control" data-rel="timepicker" name="timecreate" data-show-meridian="false" value="<?php echo $TimeCreate ?>" data-show-seconds="true" id="time-create" readonly>
                                        </div>
                                    </div>       
                                    
                                    <div class="form-group">
									<label for="client" class="col-sm-3 control-label">Client</label>
										<div class="col-sm-4">
											<input type="text" readonly name="client" class="form-control Client" id="client" value="<?php echo $Client ?>"  placeholder="auto.." readonly>
										</div>
									</div>
                                    
                                    <div class="form-group">
									<label class="col-sm-3 control-label">Mobil</label>
										<div class="col-sm-4">
											<select class="form-control form-select2" name="mobil" data-placeholder="mobil.." disabled="disabled">
												<option value="">Please Select</option>
                                                <?php foreach($car as $rowc){ ?>
                                                			<?php if($rowc->id_car===$DataMobil){ ?> 


																<option value="<?php echo $rowc->id_car;  ?>" selected><?php echo $rowc->CarBrand;  ?> - <?php echo $rowc->CarName;  ?></option>
															<?php }else {?>
																<option value="<?php echo $rowc->id_car;  ?>"><?php echo $rowc->CarBrand;  ?> - <?php echo $rowc->CarName;  ?></option>
															<?php } ?>
                                                       
                                                <?php } ?>
                        					</select>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label">KM Start</label>
										<div class="col-sm-2">
											<input type="text" readonly class="form-control" name="kmstart" placeholder="KM Start"  value="<?php echo $kmstart ?>">
										</div>
                                        <label class="col-sm-3 control-label">KM Finish</label>
                                        <div class="col-sm-2">
                                            <input type="text" readonly class="form-control" name="kmfinish" placeholder="KM Finish" value="<?php echo $kmfinish ?>">
                                        </div>
									</div>
                                    <div class="form-group">
									<label class="col-sm-3 control-label">Driver</label>
										<div class="col-sm-4">
											<select class="form-control form-select2" name="driver" data-placeholder="driver.." disabled="disabled" >
											<option value="">Please Select</option>
                                                <?php foreach($driver as $rowd){ ?>
                                                			<?php if($rowd->id===$Driver){ ?> 
																<option value="<?php echo $rowd->id;  ?>" selected><?php echo $rowd->DriverName;  ?> - <?php echo $rowd->Mobile1;  ?></option>
															<?php }else {?>
																<option value="<?php echo $rowd->id;  ?>"><?php echo $rowd->DriverName;  ?> - <?php echo $rowd->Mobile1;  ?></option>
															<?php } ?>
                                                    
                                                <?php } ?>
											
                        					</select>
										</div>
									</div>
                                    <div class="form-group">
									<label class="col-sm-3 control-label">Nama Tamu</label>
										<div class="col-sm-4">
											<input type="text" readonly class="form-control" name="namatamu" placeholder="nama tamu" value="<?php echo $Namatamu ?>">
										</div>
									</div>
                                    <div class="form-group">
									<label class="col-sm-3 control-label">Telepon Tamu</label>
										<div class="col-sm-4">
											<input type="text" readonly class="form-control" name="telptamu" placeholder="telepon tamu" value="<?php echo $Telptamu ?>">
										</div>
									</div>
                                    <div class="form-group">
									<label class="col-sm-3 control-label">Alamat Jemput</label>
										<div class="col-sm-4">
											<input type="text" readonly class="form-control" name="alamatjemput" placeholder="alamat jemput" value="<?php echo $Alamatjemput ?>">
										</div>
									</div>
                                    <br />
								</fieldset>
                                
                                <fieldset>
									<legend class="form-legend">
										<span>Time Sheet Driver</span>
									</legend>
                                    <div class="form-group">
										<div class="panel-body">
                    						<table class="table table-bordered">
                        						<thead>
                            						<tr>
                                						<th><div align="center">#</div></th>
                                						<th><div align="center">Hari/Day</div></th>
                                						<th><div align="center">Tanggal/Date</div></th>
                                                        <th><div align="center">Mulai/Start</div></th>
                                                        <th><div align="center">Selesai/Finish</div></th>
                                                        <th><div align="center">Total Jam</div></th>
                                                        <th><div align="center">Over Time</div></th>
                                                        <th><div align="center">TTD</div></th>
                        							</tr>
                        						</thead>
                        						<tbody>
                            						<tr>
                                						<td width="4%"><a href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></a></td>
                                						<td width="15%"><div class="controls">
															<input type="text" readonly class="form-control Hari"  name="hari" placeholder="auto.." value="<?php echo $hari ?>" disabled="disabled">
														</div></td>
                                						<td width="15%"><div class="controls">
															<input type="text" readonly class="form-control" name="DateJemput" data-rel="datepicker" value="<?php echo $DateJemput ?>" placeholder="tanggal" disabled="disabled">
														</div></td>
                                                        <td width="15%"><div class="controls">
                        									<input type="text" readonly class="form-control timemulai" name="timemulai" data-rel="timepicker" value="<?php echo $timemulai ?>" data-show-meridian="false">
                    									</div></td>
                                                        <td width="15%"><div class="controls">
                        									<input type="text" readonly class="form-control timeakhir" name="timeakhir" data-rel="timepicker" value="<?php echo $timeakhir ?>" data-show-meridian="false">
                    									</div></td>
                                                        <td width="15%"><div class="controls">
                        									<input type="text" readonly class="form-control timetotal" name="timetotal"  value="<?php echo $timetotal ?>"  placeholder="total jam">
                    									</div></td>
                                                        <td width="15%"><div class="controls">
                        									<input type="text" readonly class="form-control" name="overtime" value="<?php echo $overtime ?>"   placeholder="over time">
                    									</div></td>
                                                        <td width="6%" align="center"><div class="controls">
                        									<input type="checkbox" value="">
                    									</div></td>
                            						</tr>
                            						
                            					
                                                    
                        						</tbody>
                    						</table>
                						</div>
									</div>                                    
                                    <div class="form-group">
										<label class="col-sm-1 control-label">Note Time Sheet</label>
										<div class="col-sm-11">
											<textarea rows="2" class="form-control" name="notatime"  placeholder="JIKA TIDAK ADA JAM PEMAKAIAN MAKA KLIEN BERHAK UNTUK TIDAK TANDA TANGAN DAFTAR TIME SHEET" style="resize:vertical" disabled="disabled">
												<?php echo $notatime ?>
											</textarea>
										</div>
									</div>
                                    <div class="form-group">
										<div class="panel-body">
                    						<table class="table table-bordered" id="myTable">
                        						<thead>
                            						<tr>
                                						<th><div align="center">#</div></th>
                                						<th><div align="center">Rute/Tujuan</div></th>
                        							</tr>
                        						</thead>
                        						<tbody class="bodynya">
                        						 <?php foreach($rute as $rowrute){ ?>

                            						<tr>
                                						<td width="4%"><span class="btn btn-danger hapusrow"><i class="fa fa-trash-o"></i></span></td>
                                						<td width="96%"><div class="controls">
															<input type="text" readonly name="rute[]"  value="<?php echo $rowrute; ?>" class="form-control" placeholder="rute/tujuan">
														</div></td>
                            						</tr>
                            					<?php } ?>
                                                                                                    
                        						</tbody>
                    						</table>
                    					<!-- 	<table>
                    						 		<tr>
                                                    	
                                						<td colspan="2"><span id="btnAdd" onclick="AddRow()" class="btn btn-success addrow"><i class="fa fa-plus"></i> Add</span></td>
                            						</tr>   
                            				</table> -->

                						</div>
									</div>                                    
								</fieldset>
                                
                                <fieldset>
									<legend class="form-legend">
										<span>Questioner Driver</span>
									</legend>
                                    <div class="form-group">
										<div class="panel-body">
                    						<table class="table table-bordered">
                        						<thead>
                            						<tr>
                                						<th><div align="center">No.</div></th>
                                						<th><div align="center">PERTANYAAN</div></th>
                                						<th><div align="center">BAIK</div></th>
                                                        <th><div align="center">CUKUP</div></th>
                                                        <th><div align="center">KURANG</div></th>
                        							</tr>
                        						</thead>
                        						<tbody>
                            						<tr>
                                						<td width="4%" align="center">1</td>
                                						<td width="51%"><p>Apakah driver kami bersikap ramah dan sopan ?</p></td>
                                					
		                                					<?php for ($i = 1; $i <= 3; $i++) { 
		                                						if($r1==$i){ 
		                                						?>
																<td width="15%" align="center">
				   													<div class="controls">
		                        										<input type="radio" name="r1" value="<?php echo $i; ?>" checked disabled>
		                    										</div>
	                    										</td>
															<?php }else{ ?>
																<td width="15%" align="center">
				   													<div class="controls">
		                        										<input type="radio" name="r1" value="<?php echo $i; ?>" disabled>
		                    										</div>
	                    										</td>

															<?php }
															}?>
                                							
                                                        
                                                       
                            						</tr>
                            						<tr>
                                						<td align="center">2</td>
                                						<td><p>Apakah kendaraan yang kami sediakan nyaman ?</p></td>
                                							<?php for ($i = 1; $i <= 3; $i++) { 
		                                						if($r2==$i){ 
		                                						?>
																<td width="15%" align="center">
				   													<div class="controls">
		                        										<input type="radio" name="r2" value="<?php echo $i; ?>" checked disabled>
		                    										</div>
	                    										</td>
															<?php }else{ ?>
																<td width="15%" align="center">
				   													<div class="controls">
		                        										<input type="radio" name="r2" value="<?php echo $i; ?>" disabled>
		                    										</div>
	                    										</td>

															<?php }
															}?>
                            						</tr>
                            						<tr>
                                						<td align="center">3</td>
                                						<td><p>Apakah driver kami mengemudi dengan hati-hati ?</p></td>
                                						<?php for ($i = 1; $i <= 3; $i++) { 
		                                						if($r3==$i){ 
		                                						?>
																<td width="15%" align="center">
				   													<div class="controls">
		                        										<input type="radio" name="r3" value="<?php echo $i; ?>" checked disabled>
		                    										</div>
	                    										</td>
															<?php }else{ ?>
																<td width="15%" align="center">
				   													<div class="controls">
		                        										<input type="radio" name="r3" value="<?php echo $i; ?>" disabled>
		                    										</div>
	                    										</td>

															<?php }
															}?>
                            						</tr>
                                                    <tr>
                                						<td align="center">4</td>
                                						<td><p>Apakah driver kami menguasai jalan yang dituju ?</p></td>
                                						<?php for ($i = 1; $i <= 3; $i++) { 
		                                						if($r4==$i){ 
		                                						?>
																<td width="15%" align="center">
				   													<div class="controls">
		                        										<input type="radio" name="r4" value="<?php echo $i; ?>" checked disabled>
		                    										</div>
	                    										</td>
															<?php }else{ ?>
																<td width="15%" align="center">
				   													<div class="controls">
		                        										<input type="radio" name="r4" value="<?php echo $i; ?>" disabled>
		                    										</div>
	                    										</td>

															<?php }
															}?>
                            						</tr>
                                                    <tr>
                                						<td align="center">5</td>
                                						<td><p>Apakah driver kami berinisiatif dan peduli ?</p></td>
                                						<?php for ($i = 1; $i <= 3; $i++) { 
		                                						if($r5==$i){ 
		                                						?>
																<td width="15%" align="center">
				   													<div class="controls">
		                        										<input type="radio" name="r5" value="<?php echo $i; ?>" checked disabled>
		                    										</div>
	                    										</td>
															<?php }else{ ?>
																<td width="15%" align="center">
				   													<div class="controls">
		                        										<input type="radio" name="r5" value="<?php echo $i; ?>"  disabled>
		                    										</div>
	                    										</td>

															<?php }
															}?>
                            						</tr>
                                                    <tr>
                                						<td align="center">6</td>
                                						<td><p>Apakah driver kami berpakaian bersih dan rapih ?</p></td>
                                						<?php for ($i = 1; $i <= 3; $i++) { 
		                                						if($r6==$i){ 
		                                						?>
																<td width="15%" align="center">
				   													<div class="controls">
		                        										<input type="radio" name="r6" value="<?php echo $i; ?>" checked disabled>
		                    										</div>
	                    										</td>
															<?php }else{ ?>
																<td width="15%" align="center">
				   													<div class="controls">
		                        										<input type="radio" name="r6" value="<?php echo $i; ?>" disabled>
		                    										</div>
	                    										</td>

															<?php }
															}?>
                            						</tr>
                                                    <tr>
                                						<td align="center">7</td>
                                						<td><p>Apakah driver kami standby tepat waktu ?</p></td>
                                						<?php for ($i = 1; $i <= 3; $i++) { 
		                                						if($r7==$i){ 
		                                						?>
																<td width="15%" align="center">
				   													<div class="controls">
		                        										<input type="radio" name="r7" value="<?php echo $i; ?>" checked disabled>
		                    										</div>
	                    										</td>
															<?php }else{ ?>
																<td width="15%" align="center">
				   													<div class="controls">
		                        										<input type="radio" name="r7" value="<?php echo $i; ?>" disabled>
		                    										</div>
	                    										</td>

															<?php }
															}?>
                            						</tr>
                                                    <tr>
                                						<td align="center">8</td>
                                						<td><p>Bagaimana dengan pelayanan yang kami berikan ?</p></td>
                                						<?php for ($i = 1; $i <= 3; $i++) { 
		                                						if($r8==$i){ 
		                                						?>
																<td width="15%" align="center">
				   													<div class="controls">
		                        										<input type="radio" name="r8" value="<?php echo $i; ?>" checked disabled>
		                    										</div>
	                    										</td>
															<?php }else{ ?>
																<td width="15%" align="center">
				   													<div class="controls">
		                        										<input type="radio" name="r8" value="<?php echo $i; ?>" disabled>
		                    										</div>
	                    										</td>

															<?php }
															}?>
                            						</tr>
                        						</tbody>
                    						</table>
                						</div>
									</div>
                                    
                                    <div class="form-group">
										<label class="col-sm-1 control-label">KET</label>
										<div class="col-sm-11">
											<textarea rows="1" class="form-control" name="keterangan" placeholder="Berikan tanda pada kolom diatas sesuai dengan penilaian anda." style="resize:vertical" disabled="disabled"><?php echo $keterangan;?></textarea>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-1 control-label">NOTE</label>
										<div class="col-sm-11">
											<textarea rows="5" class="form-control" name="note" placeholder="Kritik dan Saran bisa sms ke Bahana Holiday 08123456789, pin 999888... Bahana Holiday mengucapkan terima kasih atas kepercayaan Bapak/Ibu dalam menggunakan jasa transportasi kami, kiranya dilain kesempatan kita bisa bertemu kembali." disabled="disabled"><?php echo $note;?></textarea>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label">Rincian Uang Jalan</label>
										<div class="col-sm-7">
											<textarea rows="7" class="form-control" name="ricianuangjalan" placeholder="BBM, TOL, PARKIR, FEE, dll." disabled="disabled"><?php echo $ricianuangjalan;?></textarea>
										</div>
									</div>
                                    
                                   
								</fieldset>
                                
                             <?php echo form_close(); ?> 						
						</div>
					</div>
                </div>
                
                <div id="tab1-2" class="tab-pane">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h4 class="panel-title">Manager Update Form</h4>

							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="fa fa-fw fa-minus"></i></a>
								<a href="#" data-rel="reload"><i class="fa fa-fw fa-refresh"></i></a>
							</div>
						</div>
						<div class="margin-lg-bottom" style="line-height:30px">Status : &nbsp;
							<?php 
							if($status==1){echo '<span class="label label-danger"> NEW</span>';} 
							if($status==2){echo '<span class="label label-info"> APPROVED</span>';} 
							if($status==3){echo '<span class="label label-warning"> UPDATE</span>';} 
							if($status==4){echo '<span class="label label-success"> FINISH</span>';} 
							?>
						</div>
						<div class="panel-body">
							<?php echo form_open_multipart("suratjalan/simpan",'class="form-horizontal form-bordered Formapprove"'); ?>		
								<fieldset>
									<legend class="form-legend">
										<span>Manager Update</span>
									</legend>
                					<div class="form-group">
										<label class="col-sm-3 control-label" for="date-update">Date Update</label>
										<div class="col-sm-2">
												<input type="text" class="form-control" data-rel="datepicker" value="<?php echo $dateupdated; ?>" id="date-update" disabled="disabled">
										</div>
                                        <label class="col-sm-3 control-label" for="time-update">Time Update</label>
                                        <div class="col-sm-2">
                                         <input type="text" class="form-control" data-rel="timepicker"  value="<?php echo $NomorSJ; ?>"data-show-meridian="false" data-show-seconds="true" id="time-update" disabled="disabled">
                                        </div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label">Uang Jalan</label>
                                        <div class="controls col-sm-4">
											<div class="input-group">
                            					<span class="input-group-addon">Rp.</span>
                            					<input type="text" name="uangjalan"  value="<?php echo $uangjalan; ?>" class="form-control" placeholder="0" disabled="disabled">
                        					</div>
                                        </div>
									</div>
								
									<div class="form-group">
										<div class="col-sm-offset-4 col-sm-8">
											<input type="hidden" name="dateupdated" value="<?php echo $dateupdated; ?>">
											<input type="hidden" name="timeupdated" value="<?php echo $timeupdated; ?>">
											<input type="hidden" name="JenisSimpan" value="4">
											<input type="hidden" name="NomorSJ" value="<?php echo $NomorSJ; ?>">
											<a href="#" class="btn btn-primary" id="button-pop2"><i class="fa fa-check"></i> Update</a>
											<a href="<?php echo base_url(); ?>suratjalan" class="btn btn-primary"><i class="fa fa-times"></i> Cancel</a>
											<!-- Element to pop up -->
											<div id="pop-up2">
												<a class="b-close2 btn btn-round btn-primary"><i class="fa fa-times"></i></a>
												Are you sure?
												<div class="btn-pop">
													<a href="#" class="btn btn-primary  ok-btn-add-app"><i class="fa fa-check"></i> OK</a>
												</div>
											</div>
										</div>
									</div> 
                       
								</fieldset>
                             <?php echo form_close(); ?>       
						</div>
                    </div>
				</div>
                
            </div> <!-- tab content end -->
            
        </div>
    </div>
</div>

</div> <!-- page content end -->
