CONTENT START -->

<div class="page-content"> <!-- page content start -->

<div class="page-subheading page-subheading-md">
    <ol class="breadcrumb">
        <li><a href="javascript:;">Dashboard</a></li>
        <li><a href="javascript:;">Faktur</a></li>
        <li class="active"><a href="javascript:;">Create Faktur</a></li>
    </ol>
</div>
<div class="page-heading page-heading-md">
    <h2>Create Faktur</h2>
</div>

<div class="container-fluid-md">
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#tab1-1">Reservation </a></li>
                 <?php if($sesi['Role'] === '5'){?>
                <li><a data-toggle="tab" href="#tab1-2">Manager Approve</a></li>
                <?php }?>

            </ul>

			<div class="tab-content"> <!-- tab content start -->
			<?php echo form_open_multipart("faktur/simpan",'class="form-horizontal form-bordered FormProfile"'); ?>		
				<div id="tab1-1" class="tab-pane active">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h4 class="panel-title">Reservation Form</h4>

							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="fa fa-fw fa-minus"></i></a>
								<a href="#" data-rel="reload"><i class="fa fa-fw fa-refresh"></i></a>
							</div>
						</div>
						<div class="margin-lg-bottom" style="line-height:30px">Status : &nbsp;
							<span class="label label-danger">NEW</span>
						</div>
						<?php if($statusview === 'berhasil'){?>
							<div class="alert alert-success alert-dismissible alerttambah">
					                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					                <h4><i class="icon fa fa-check"></i> Perhatian !</h4>
					               Data Berhasil Ditambahkan
					        </div>
						<?php }?>
						<div class="panel-body">
							<form class="form-horizontal form-bordered" role="form">
								<fieldset>
									<legend class="form-legend">
										<span>Sales Order (SO)</span>
									</legend>

									<div class="form-group">
										<label class="col-sm-3 control-label" for="no-order">Pilih Jenis SO</label>
										<div class="col-sm-4">
											<div class="controls">
											<div class="col-sm-6">
													<input type="radio" name="r1" value="NewSO" class="pilihso"> New SO
													</div>
											<div class="col-sm-6">
													<input type="radio" name="r1" value="OldSO" class="pilihso" checked> Old SO
													</div>
											</div>
										</div>
									</div>
                					<div class="form-group">
	                					<div class="salesorder">
	                					
										</div>
										<div class="OrderOldnya">
										<label for="sales-order" class="col-sm-3 control-label">No. Sales Order</label>
											<div class="col-sm-4">
												<select class="form-control form-select2 array-klas" name="FAOldSo" data-placeholder="Sales Order...">
												<option>.:: Please Select ::.</option>
													<?php foreach($getso as $rowx){ ?>
													<option value="<?php echo $rowx->NomorSO;  ?>"><?php echo $rowx->NomorSO;  ?></option>
										   		 <?php } ?>
												</select>	
											</div>
										</div>
									</div>
									
										
								</fieldset>
                                
                                <fieldset>
									<legend class="form-legend">
										<span>Faktur (FK)</span>
									</legend>
                					<div class="form-group">
										<label class="col-sm-3 control-label" for="no-faktur">No. Faktur</label>
										<div class="col-sm-4">
											<input type="text" class="form-control NoFA" id="no-faktur" name="NoFA" placeholder="auto.." value="<?php echo $autonumberfa ?>" readonly>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label" for="date-create">Date Create</label>
										<div class="col-sm-2">
											<input type="text" class="form-control" data-rel="datepicker" name="datecreate" id="date-create" value="<?php echo $datecreate ?>" readonly >
										</div>
                                        <label class="col-sm-3 control-label" for="time-create">Time Create</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" data-rel="timepicker" name="timecreate" data-show-meridian="false" value="<?php echo $timecreate ?>" data-show-seconds="true" id="time-create" readonly>
                                        </div>
									</div>                                    
                               
                                    <div class="form-group">
										<label for="client" class="col-sm-3 control-label">Client</label>
										<div class="col-sm-4">
											<select class="form-control form-select2" name="client" data-placeholder="Client...">
											<option value="">Please Select</option>
											<?php foreach($data as $row){ ?>
													<option value="<?php echo $row->id;  ?>"><?php echo $row->nameClient;  ?></option>
										    <?php } ?>
                        					</select>
										</div>
									</div>
                                    
                                    <div class="form-group">
										<div class="panel-body">
                    						<table class="table table-bordered">
                        						<thead>
                            						<tr>
                                					
                                						<th>Mobil</th>
                                						<th>Vendor</th>
                                						<th>Tanggal Sewa</th>
                                                        <th>Hari Sewa</th>
                                                        <th>Tujuan</th>
                                                        <th>Buying</th>
                                                        <th>Selling</th>
                        							</tr>
                        						</thead>
                        						<tbody>
												<tr>
                                					<td width="14%"><div class="controls">
															<select class="form-control form-select2 changecar" name="Mobil"  data-placeholder="mobil..">
															<option value="">Please Select</option>
																<?php foreach($car as $rowc){ ?>
																		<option value="<?php echo $rowc->id_car;  ?>"><?php echo $rowc->CarBrand;  ?> - <?php echo $rowc->CarName;  ?></option>
																<?php } ?>
                        									</select>
														</div></td>
                                						<td width="14%"><div class="controls">
															<input type="text" class="form-control onchangecar" name="Vendor"  placeholder="auto.." readonly>
														</div></td>
                                						<td width="13%"><div class="controls">
															<input type="text" class="form-control" id="datepicker" name="TglSewa" data-rel="datepicker"placeholder="tanggal">
										
														</div></td>
                                                        <td width="13%"><div class="controls">
                        									<input type="text" class="form-control" name="hari" placeholder="hari">
                    									</div></td>
                                                        <td width="14%"><div class="controls">
                        									<input type="text" class="form-control" name="tujuan" placeholder="tujuan">
                    									</div></td>
                                                        <td width="14%"><div class="controls">
                        									<input type="text" class="form-control buying" name="buying" placeholder="buying">
                    									</div></td>
                                                        <td width="14%"><div class="controls">
                        								   <input type="text" class="form-control selling" name="selling" id='userinput' pattern="[0-9]*" placeholder="selling">
                    									</div></td>
                            						</tr>
                            						
                                                    <tr>
                                						<td colspan="6" align="right"><strong>Total Selling</strong></td>
                                                        <td><div class="controls">
                        									<input type="text" class="form-control totalselling" name="totalselling" placeholder="total selling">
                    									</div></td>
                            						</tr>
                        						</tbody>
                    						</table>
                						</div>
									</div>
                                    
                                    <div class="form-group">
										<label class="col-sm-3 control-label">Notes</label>
										<div class="col-sm-6">
											<textarea rows="5" class="form-control" name="Notes" placeholder="Include, Alamat Jemput, Jam Standby, Driver, dll." style="resize:vertical"></textarea>
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
                                
                            </form>							
						</div>
					</div>
                </div>

             <?php echo form_close(); ?> 



               
            </div> <!-- tab content end -->
            
        </div>
    </div>
</div>

</div> <!-- page content end -->


<!-- CONTENT END