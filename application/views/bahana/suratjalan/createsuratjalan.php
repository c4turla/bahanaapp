
<div class="page-content"> <!-- page content start -->

<div class="page-subheading page-subheading-md">
    <ol class="breadcrumb">
        <li><a href="javascript:;">Dashboard</a></li>
        <li><a href="javascript:;">Surat Jalan</a></li>
        <li class="active"><a href="javascript:;">Create Surat Jalan</a></li>
    </ol>
</div>
<div class="page-heading page-heading-md">
    <h2>Create Surat Jalan</h2>
</div>

<div class="container-fluid-md">
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#tab1-1">Operational</a></li>
                <?php if($sesi['Role'] === '5'){?>
                <li><a data-toggle="tab" href="#tab1-2">Manager Approve</a></li>
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
                            <span class="label label-danger">NEW </span>
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
											 <select class="form-control form-select2 array-klas NofakturSj" name="NoFA" data-placeholder="Nomor Faktur..">
	
												<option value="">Please Select</option>
                                                <?php foreach($fakturlist as $row){ ?>
                                                        <option value="<?php echo $row->NomorFaktur;  ?>"><?php echo $row->NomorFaktur;  ?></option>
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
											<input type="text" name="suratjalan" class="form-control" id="no-jalan" value="<?php echo $autonumbersj;?>" placeholder="auto.." readonly>
										</div>
									</div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="date-create">Date Create</label>
                                        <div class="col-sm-2">
                                            <input type="text" name="tanggalcreate" class="form-control" data-rel="datepicker" name="datecreate" id="date-create" value="<?php echo $datecreate ?>" readonly >
                                        </div>
                                        <label class="col-sm-3 control-label" for="time-create">Time Create</label>
                                        <div class="col-sm-2">
                                            <input type="text" name="timecreate" class="form-control" data-rel="timepicker" name="timecreate" data-show-meridian="false" value="<?php echo $timecreate ?>" data-show-seconds="true" id="time-create" readonly>
                                        </div>
                                    </div>       
                                    
                                    <div class="form-group">
									<label for="client" class="col-sm-3 control-label">Client</label>
										<div class="col-sm-4">
											<input type="text" name="client" class="form-control Client" id="client" placeholder="auto.." readonly>
										</div>
									</div>
									<div class="form-group">
									<label for="mobil" class="col-sm-3 control-label">Mobil</label>
										<div class="col-sm-4">
											<input type="text" name="mobil" class="form-control Mobil" id="mobil" placeholder="auto.." readonly>
										</div>
									</div>
									
									
                                    
                                    <div class="form-group">
									<label class="col-sm-3 control-label">Mobil</label>
										<div class="col-sm-4">
											<select class="form-control form-select2" name="mobil" data-placeholder="mobil..">
												<option value="">Please Select</option>
                                                <?php foreach($car as $rowc){ ?>
                                                        <option value="<?php echo $rowc->id_car;  ?>"><?php echo $rowc->CarBrand;  ?> - <?php echo $rowc->CarName;  ?></option>
                                                <?php } ?>
                        					</select>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label">KM Start</label>
										<div class="col-sm-2">
											<input type="text" class="form-control" name="kmstart" placeholder="KM Start">
										</div>
                                        <label class="col-sm-3 control-label">KM Finish</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" name="kmfinish" placeholder="KM Finish">
                                        </div>
									</div>
                                    <div class="form-group">
									<label class="col-sm-3 control-label">Driver</label>
										<div class="col-sm-4">
											<select class="form-control form-select2" name="driver" data-placeholder="driver..">
											<option value="">Please Select</option>
                                                <?php foreach($driver as $rowd){ ?>
                                                        <option value="<?php echo $rowd->id;  ?>"><?php echo $rowd->DriverName;  ?> - <?php echo $rowd->Mobile1 ;  ?>,<?php echo $rowd->Mobile2 ?></option>
                                                <?php } ?>
											
                        					</select>
										</div>
									</div>
                                    <div class="form-group">
									<label class="col-sm-3 control-label">Nama Tamu</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" name="namatamu" placeholder="nama tamu">
										</div>
									</div>
                                    <div class="form-group">
									<label class="col-sm-3 control-label">Telepon Tamu</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" name="telptamu" placeholder="telepon tamu">
										</div>
									</div>
                                    <div class="form-group">
									<label class="col-sm-3 control-label">Alamat Jemput</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" name="alamatjemput" placeholder="alamat jemput">
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
															<input type="text" class="form-control Hari"  name="hari" placeholder="auto..">
														</div></td>
                                						<td width="15%"><div class="controls">
															<input type="text" class="form-control" name="DateJemput" data-rel="datepicker"placeholder="tanggal">
														</div></td>
                                                        <td width="15%"><div class="controls">
                        									<input type="text" class="form-control timemulai" name="timemulai" data-rel="timepicker" data-show-meridian="false">
                    									</div></td>
                                                        <td width="15%"><div class="controls">
                        									<input type="text" class="form-control timeakhir" name="timeakhir" data-rel="timepicker" data-show-meridian="false">
                    									</div></td>
                                                        <td width="15%"><div class="controls">
                        									<input type="text" class="form-control timetotal" name="timetotal" placeholder="total jam">
                    									</div></td>
                                                        <td width="15%"><div class="controls">
                        									<input type="text" class="form-control" name="overtime"  placeholder="over time">
                    									</div></td>
                                                        <td width="6%" align="center"><div class="controls">
                        									<input type="checkbox" name="ttd">
                    									</div></td>
                            						</tr>
                            						
                            					
                                                    
                        						</tbody>
                    						</table>
                						</div>
									</div>                                    
                                    <div class="form-group">
										<label class="col-sm-1 control-label">Note Time Sheet</label>
										<div class="col-sm-11">
											<textarea rows="2" class="form-control" name="notatime" placeholder="JIKA TIDAK ADA JAM PEMAKAIAN MAKA KLIEN BERHAK UNTUK TIDAK TANDA TANGAN DAFTAR TIME SHEET" style="resize:vertical"></textarea>
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
                            						<tr>
                                						<td width="4%"><span class="btn btn-danger hapusrow"><i class="fa fa-trash-o"></i></span></td>
                                						<td width="96%">
														<div class="controls">
															<input type="text" name="rute[]" class="form-control" placeholder="rute/tujuan">
														</div>
														</td>
                            						</tr>
                            					
                                                                                                    
                        						</tbody>
                    						</table>
                    						<table>
                    						 		<tr>                                                    	
                                						<td colspan="2"><span id="btnAdd" onclick="AddRow()" class="btn btn-success addrow"><i class="fa fa-plus"></i> Add</span></td>
                            						</tr>   
                            				</table>

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
                                						<td width="15%" align="center"><div class="controls">
															<input type="radio" name="r1" value="1">
														</div></td>
                                                        <td width="15%" align="center"><div class="controls">
                        									<input type="radio" name="r1" value="2">
                    									</div></td>
                                                        <td width="15%" align="center"><div class="controls">
                        									<input type="radio" name="r1" value="3">
                    									</div></td>
                            						</tr>
                            						<tr>
                                						<td align="center">2</td>
                                						<td><p>Apakah kendaraan yang kami sediakan nyaman ?</p></td>
                                						<td align="center"><div class="controls">
															<input type="radio" name="r2" value="1">
														</div></td>
                                                        <td align="center"><div class="controls">
                        									<input type="radio" name="r2" value="2">
                    									</div></td>
                                                        <td align="center"><div class="controls">
                        									<input type="radio" name="r2" value="3">
                    									</div></td>
                            						</tr>
                            						<tr>
                                						<td align="center">3</td>
                                						<td><p>Apakah driver kami mengemudi dengan hati-hati ?</p></td>
                                						<td align="center"><div class="controls">
															<input type="radio" name="r3" value="1">
														</div></td>
                                                        <td align="center"><div class="controls">
                        									<input type="radio" name="r3" value="2">
                    									</div></td>
                                                        <td align="center"><div class="controls">
                        									<input type="radio" name="r3" value="3">
                    									</div></td>
                            						</tr>
                                                    <tr>
                                						<td align="center">4</td>
                                						<td><p>Apakah driver kami menguasai jalan yang dituju ?</p></td>
                                						<td align="center"><div class="controls">
															<input type="radio" name="r4" value="1">
														</div></td>
                                                        <td align="center"><div class="controls">
                        									<input type="radio" name="r4" value="2">
                    									</div></td>
                                                        <td align="center"><div class="controls">
                        									<input type="radio" name="r4" value="3">
                    									</div></td>
                            						</tr>
                                                    <tr>
                                						<td align="center">5</td>
                                						<td><p>Apakah driver kami berinisiatif dan peduli ?</p></td>
                                						<td align="center"><div class="controls">
															<input type="radio" name="r5" value="1">
														</div></td>
                                                        <td align="center"><div class="controls">
                        									<input type="radio" name="r5" value="2">
                    									</div></td>
                                                        <td align="center"><div class="controls">
                        									<input type="radio" name="r5" value="3">
                    									</div></td>
                            						</tr>
                                                    <tr>
                                						<td align="center">6</td>
                                						<td><p>Apakah driver kami berpakaian bersih dan rapih ?</p></td>
                                						<td align="center"><div class="controls">
															<input type="radio" name="r6" value="1">
														</div></td>
                                                        <td align="center"><div class="controls">
                        									<input type="radio" name="r6" value="2">
                    									</div></td>
                                                        <td align="center"><div class="controls">
                        									<input type="radio" name="r6" value="3">
                    									</div></td>
                            						</tr>
                                                    <tr>
                                						<td align="center">7</td>
                                						<td><p>Apakah driver kami standby tepat waktu ?</p></td>
                                						<td align="center"><div class="controls">
															<input type="radio" name="r7" value="1">
														</div></td>
                                                        <td align="center"><div class="controls">
                        									<input type="radio" name="r7" value="2">
                    									</div></td>
                                                        <td align="center"><div class="controls">
                        									<input type="radio" name="r7" value="3">
                    									</div></td>
                            						</tr>
                                                    <tr>
                                						<td align="center">8</td>
                                						<td><p>Bagaimana dengan pelayanan yang kami berikan ?</p></td>
                                						<td align="center"><div class="controls">
															<input type="radio" name="r8" value="1">
														</div></td>
                                                        <td align="center"><div class="controls">
                        									<input type="radio" name="r8" value="2">
                    									</div></td>
                                                        <td align="center"><div class="controls">
                        									<input type="radio" name="r8" value="3">
                    									</div></td>
                            						</tr>
                        						</tbody>
                    						</table>
                						</div>
									</div>
                                    
                                    <div class="form-group">
										<label class="col-sm-1 control-label">KET</label>
										<div class="col-sm-11">
											<textarea rows="1" class="form-control" name="keterangan" placeholder="Berikan tanda pada kolom diatas sesuai dengan penilaian anda." style="resize:vertical"></textarea>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-1 control-label">NOTE</label>
										<div class="col-sm-11">
											<textarea rows="5" class="form-control" name="note" placeholder="Kritik dan Saran bisa sms ke Bahana Holiday 08123456789, pin 999888... Bahana Holiday mengucapkan terima kasih atas kepercayaan Bapak/Ibu dalam menggunakan jasa transportasi kami, kiranya dilain kesempatan kita bisa bertemu kembali."></textarea>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label">Rincian Uang Jalan</label>
										<div class="col-sm-7">
											<textarea rows="7" class="form-control" name="ricianuangjalan" placeholder="BBM, TOL, PARKIR, FEE, dll."></textarea>
										</div>
									</div>
                                    
                                    <div class="form-group">
											<div class="col-sm-offset-4 col-sm-8">
											<input type="hidden" name="JenisSimpan" value="1">
											<a href="#" class="btn btn-primary proses" id="button-pop"><i class="fa fa-check"></i> Submit</a>
											<a href="list-faktur.php" class="btn btn-primary"><i class="fa fa-times"></i> Cancel</a>
											<!-- Element to pop up -->
											<div id="pop-up">
												<a class="b-close btn btn-round btn-primary"><i class="fa fa-times"></i></a>
												Are you sure?
												<div class="btn-pop">
												 <input type="submit" name="submit" class="submit" style="display:none;">
													<span class="btn btn-primary ok-btn-add-fa"><i class="fa fa-check"></i> OK</span>
												</div>
											</div>
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
							<h4 class="panel-title">Manager Approve Form</h4>

							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="fa fa-fw fa-minus"></i></a>
								<a href="#" data-rel="reload"><i class="fa fa-fw fa-refresh"></i></a>
							</div>
						</div>
						<div class="margin-lg-bottom" style="line-height:30px">Status : &nbsp;
							 <span class="label label-danger">NEW </span>
						</div>
						<div class="panel-body">
							<form class="form-horizontal form-bordered" role="form">
								<fieldset>
									<legend class="form-legend">
										<span>Manager Approve</span>
									</legend>
                					<div class="form-group">
										<label class="col-sm-3 control-label" for="date-approve">Date Approve</label>
										<div class="col-sm-2">
											<input type="text" class="form-control" data-rel="datepicker" id="date-appove" disabled="disabled">
										</div>
                                        <label class="col-sm-3 control-label" for="time-approve">Time Approve</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" data-rel="timepicker" data-show-meridian="false" data-show-seconds="true" id="time-approve" disabled="disabled">
                                        </div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label">Uang Jalan</label>
                                        <div class="controls col-sm-4">
											<div class="input-group">
                            					<span class="input-group-addon">Rp.</span>
                            					<input type="text" class="form-control" placeholder="0">
                        					</div>
                                        </div>
									</div>
								
									<div class="form-group">
										<div class="col-sm-offset-4 col-sm-8">
											<a href="#" class="btn btn-primary" id="button-pop2"><i class="fa fa-check"></i> Submit</a>
											<a href="list-jalan.php" class="btn btn-primary"><i class="fa fa-times"></i> Cancel</a>
											<!-- Element to pop up -->
											<div id="pop-up2">
												<a class="b-close2 btn btn-round btn-primary"><i class="fa fa-times"></i></a>
												Are you sure?
												<div class="btn-pop">
													<a href="#" class="btn btn-primary"><i class="fa fa-check"></i> OK</a>
												</div>
											</div>
										</div>
									</div>                        
								</fieldset>
                            </form>    
						</div>
                    </div>
				</div>
                
            </div> <!-- tab content end -->
            
        </div>
    </div>
</div>

</div> <!-- page content end -->
