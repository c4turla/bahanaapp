
<div class="page-content"> <!-- page content start -->

<div class="page-subheading page-subheading-md">
    <ol class="breadcrumb">
        <li><a href="javascript:;">Dashboard</a></li>
        <li><a href="javascript:;">Faktur</a></li>
        <li class="active"><a href="javascript:;">Approved Faktur</a></li>
    </ol>
</div>
<div class="page-heading page-heading-md">
    <h2>Approved Faktur</h2>
</div>

<div class="container-fluid-md">
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#tab1-1">Reservation</a></li>
                 <?php if($sesi['Role'] === '5'){?>
                <li><a data-toggle="tab" href="#tab1-2">Manager Approve</a></li>
                <?php }?>

            </ul>

			<div class="tab-content"> <!-- tab content start -->

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
							<?php 
							if($status==1){echo '<span class="label label-danger"> NEW</span>';} 
							if($status==2){echo '<span class="label label-info"> APPROVED</span>';} 
							if($status==3){echo '<span class="label label-warning"> UPDATE</span>';} 
							if($status==4){echo '<span class="label label-success"> FINISH</span>';} 
							?>
						</div>
						<div class="panel-body">
							<form class="form-horizontal form-bordered" role="form">
								<fieldset>
									<legend class="form-legend">
										<span>Sales Order (SO)</span>
									</legend>
                					<div class="form-group">
										<label class="col-sm-3 control-label" for="no-faktur">No. Sales Order</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" id="no-faktur"  placeholder="auto.." value="<?php echo $NomorSO; ?>" readonly>
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
											<input type="text" class="form-control NoFA" id="no-faktur" name="NoFA" placeholder="auto.." value="<?php echo $NomorFaktur; ?>" readonly>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label" for="date-create">Date Create</label>
										<div class="col-sm-2">
											<input type="text" class="form-control" data-rel="datepicker" name="datecreate" id="date-create" value="<?php echo $DateCreate; ?>" readonly >
										</div>
                                        <label class="col-sm-3 control-label" for="time-create">Time Create</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" data-rel="timepicker" name="timecreate" data-show-meridian="false" value="<?php echo $TimeCreate; ?>" data-show-seconds="true" id="time-create" readonly>
                                        </div>
									</div>                                  
                                    <?php  if($status==3){ ?>                      
                                    <div class="form-group">
										<label class="col-sm-3 control-label" for="date-update">Date Update</label>
										<div class="col-sm-2">
											<input type="text" class="form-control" id="date-update" data-rel="datepicker" value="<?php echo $DateUpdate; ?>" readonly>
										</div>
                                        <label class="col-sm-3 control-label" for="time-update">Time Update</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" data-rel="timepicker" data-show-meridian="false"  value="<?php echo $TimeUpdate; ?>" data-show-seconds="true" id="time-update" readonly>
                                        </div>
									</div> 
                                   <?php } ?>
                                     <div class="form-group">
										<label for="client" class="col-sm-3 control-label">Client</label>
										<div class="col-sm-4">
											<select class="form-control form-select2" name="client" data-placeholder="Client..." readonly>
											<option value="">Please Select</option>
											<?php foreach($data as $row){ ?>
													<?php if($row->id===$client){ ?> 
														<option value="<?php echo $row->id;  ?>" selected><?php echo $row->nameClient;  ?></option>
													<?php }else {?>
														<option value="<?php echo $row->id;  ?>"><?php echo $row->nameClient;  ?></option>
													<?php } ?>
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
															<select class="form-control form-select2 changecar" name="Mobil"  data-placeholder="mobil.." readonly>
															<option value="">Please Select</option>
																<?php foreach($car as $rowc){ ?>

																	<?php if($rowc->id_car===$DataMobil){ ?> 
																		<option value="<?php echo $rowc->id_car;  ?>" selected><?php echo $rowc->CarBrand;  ?> - <?php echo $rowc->CarName;  ?></option>
																	<?php }else {?>
																		<option value="<?php echo $rowc->id_car;  ?>"><?php echo $rowc->CarBrand;  ?> - <?php echo $rowc->CarName;  ?></option>
																	<?php } ?>
																		
																<?php } ?>
                        									</select>
														</div></td>
                                						<td width="14%"><div class="controls">
															<input type="text" class="form-control onchangecar" name="Vendor"  value="<?php echo $vendor; ?>" placeholder="auto.." readonly>
														</div></td>
                                						<td width="13%"><div class="controls">
															<input type="text" class="form-control" id="datepicker" name="TglSewa" value="<?php echo $TglSewa; ?>" data-rel="datepicker"placeholder="tanggal" readonly>
										
														</div></td>
                                                        <td width="13%"><div class="controls">
                        									<input type="text" class="form-control" name="hari" value="<?php echo $Hari; ?>"  placeholder="hari" readonly>
                    									</div></td>
                                                        <td width="14%"><div class="controls">
                        									<input type="text" class="form-control" name="tujuan"  value="<?php echo $Tujuan; ?>" placeholder="tujuan" readonly> 
                    									</div></td>
                                                        <td width="14%"><div class="controls">
                        									<input type="text" class="form-control buying" name="buying"  value="<?php echo $buying; ?>" placeholder="buying" readonly>
                    									</div></td>
                                                        <td width="14%"><div class="controls">
                        								   <input type="text" class="form-control selling" name="selling" value="<?php echo $selling; ?>" id='userinput' pattern="[0-9]*" placeholder="selling" readonly>
                    									</div></td>
                            						</tr>
                            						
                                                    <tr>
                                						<td colspan="6" align="right"><strong>Total Selling</strong></td>
                                                        <td><div class="controls">
                        									<input type="text" class="form-control totalselling" name="totalselling"  value="<?php echo $TotalSelling; ?>"  placeholder="total selling" readonly>
                    									</div></td>
                            						</tr>
                        						</tbody>
                    						</table>
                						</div>
									</div>
                                    
                                    <div class="form-group">
										<label class="col-sm-3 control-label">Notes</label>
										<div class="col-sm-6">
											<textarea rows="5" class="form-control" name="Notes" placeholder="Include, Alamat Jemput, Jam Standby, Driver, dll." style="resize:vertical" readonly><?php echo $Notes; ?></textarea>
										</div>
									</div>
                                    
                                <!--     <div class="form-group">
										<div class="col-sm-offset-4 col-sm-8">
											
											<a href="#" class="btn btn-primary proses" id="button-pop"><i class="fa fa-check"></i> Submit</a>
											<a href="list-faktur.php" class="btn btn-primary"><i class="fa fa-times"></i> Cancel</a>
											
											<div id="pop-up">
												<a class="b-close btn btn-round btn-primary"><i class="fa fa-times"></i></a>
												Are you sure?
												<div class="btn-pop">
												 <input type="submit" name="submit" class="submit" style="display:none;">
													<span class="btn btn-primary ok-btn-add-fa"><i class="fa fa-check"></i> OK</span>
												</div>
											</div>
										</div>
									</div> -->
								</fieldset>
                                
                            </form>							
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
							<?php 
							if($status==1){echo '<span class="label label-danger"> NEW</span>';} 
							if($status==2){echo '<span class="label label-info"> APPROVED</span>';} 
							if($status==3){echo '<span class="label label-warning"> UPDATE</span>';} 
							if($status==4){echo '<span class="label label-success"> FINISH</span>';} 
							?>
						</div>
						
						<div class="panel-body">
							
							<?php echo form_open_multipart("faktur/simpan",'class="form-horizontal form-bordered Formapprove"'); ?>		
								<fieldset>
									<legend class="form-legend">
										<span>Manager Approve</span>
									</legend>
									
                					<div class="form-group">
										<label class="col-sm-3 control-label" for="date-approve">Date Approve</label>
										<div class="col-sm-2">
											<input type="text" class="form-control" data-rel="datepicker" value="<?php echo $dateapproved; ?>" id="date-appove" disabled="disabled">
										</div>
                                        <label class="col-sm-3 control-label" for="time-approve">Time Approve</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" data-rel="timepicker"  value="<?php echo $timeapproved; ?>" data-show-meridian="false" data-show-seconds="true" id="time-approve" disabled="disabled">
                                        </div>
									</div>
								
									<div class="form-group">
										<div class="col-sm-offset-4 col-sm-8">
											<input type="hidden" name="dateapproved" value="<?php echo $dateapproved; ?>">
											<input type="hidden" name="timeapproved" value="<?php echo $timeapproved; ?>">
											<input type="hidden" name="JenisSimpan" value="2">
											<input type="hidden" name="NomorFaktur" value="<?php echo $NomorFaktur; ?>">
											<a href="#" class="btn btn-primary" id="button-pop2"><i class="fa fa-check"></i> Submit</a>
											<a href="<?php echo base_url(); ?>faktur" class="btn btn-primary"><i class="fa fa-times"></i> Cancel</a>
											<!-- Element to pop up -->
											<div id="pop-up2">
												<a class="b-close2 btn btn-round btn-primary"><i class="fa fa-times"></i></a>
												Are you sure?
												<div class="btn-pop">
													<span class="btn btn-primary ok-btn-add-app"><i class="fa fa-check"></i> OK</span>
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