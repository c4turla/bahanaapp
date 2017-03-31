<div class="page-content"> <!-- page content start -->

<div class="page-subheading page-subheading-md">
    <ol class="breadcrumb">
        <li><a href="javascript:;">Dashboard</a></li>
        <li><a href="javascript:;">Invoice</a></li>
        <li class="active"><a href="javascript:;">Create Invoice</a></li>
    </ol>
</div>
<div class="page-heading page-heading-md">
    <h2>Create Invoice</h2>
</div>

<div class="container-fluid-md">
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#tab1-1">Finance</a></li>
                <?php if($sesi['Role'] === '5'){?>
                <li><a data-toggle="tab" href="#tab1-2">Manager Approve</a></li>
                <?php }?>

            </ul>

			<div class="tab-content"> <!-- tab content start -->

				<div id="tab1-1" class="tab-pane active">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h4 class="panel-title">Invoice Form</h4>

							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="fa fa-fw fa-minus"></i></a>
								<a href="#" data-rel="reload"><i class="fa fa-fw fa-refresh"></i></a>
							</div>
						</div>
						<div class="margin-lg-bottom" style="line-height:30px">Status : &nbsp;
							<span class="label label-danger">NEW</span>
							<span class="label label-info">APPROVE</span>
							<span class="label label-warning">UPDATE</span>
							<span class="label label-success">FINISH</span>
						</div>
						<div class="panel-body">
							<form class="form-horizontal form-bordered" role="form">
								<fieldset>
									<legend class="form-legend">
										<span>Sales Order (SO)</span>
									</legend>
                					<div class="form-group">
									<label for="sales-order" class="col-sm-3 control-label">No. Sales Order</label>
										<div class="col-sm-4">
											<select class="form-control form-select2" data-placeholder="Sales Order...">
												<option value=""></option>
												 <?php foreach($fakturlist as $row){ ?>
                                                        <option value="<?php echo $row->NomorSO;  ?>"><?php echo $row->NomorSO;  ?></option>
                                                <?php } ?>
                        						</select>
										</div>
									</div>
								</fieldset>
                                
                                <fieldset>
									<legend class="form-legend">
										<span>Invoice (INV)</span>
									</legend>
                					<div class="form-group">
										<label class="col-sm-3 control-label" for="no-invoice">No. Invoice</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" id="no-invoice" placeholder="auto.." disabled="disabled">
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label" for="date-create">Date Create</label>
										<div class="col-sm-2">
											<input type="text" class="form-control" data-rel="datepicker" id="date-create" disabled="disabled">
										</div>
                                        <label class="col-sm-3 control-label" for="time-create">Time Create</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" data-rel="timepicker" data-show-meridian="false" data-show-seconds="true" id="time-create" disabled="disabled">
                                        </div>
									</div>                                    
                                    <div class="form-group">
										<label class="col-sm-3 control-label" for="date-update">Date Update</label>
										<div class="col-sm-2">
											<input type="text" class="form-control" id="date-update" data-rel="datepicker" disabled="disabled">
										</div>
                                        <label class="col-sm-3 control-label" for="time-update">Time Update</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" data-rel="timepicker" data-show-meridian="false" data-show-seconds="true" id="time-update" disabled="disabled">
                                        </div>
									</div>
                                    
                                    <div class="form-group">
									<label for="client" class="col-sm-3 control-label">Agent/Customer</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" id="client" placeholder="auto.." disabled="disabled">
										</div>
									</div>
                                    
                                    <div class="form-group">
									<label for="" class="col-sm-3 control-label">Currency</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" id="" placeholder="IDR/USD">
										</div>
									</div>
                                    
                                    <div class="form-group">
									<label for="" class="col-sm-3 control-label">Due Date</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" id="" placeholder="Jatuh Tempo">
										</div>
									</div>
                                    
                                    <div class="form-group">
										<div class="panel-body">
                    						<table class="table table-bordered">
                        						<thead>
                            						<tr>
                                						<th>#</th>
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
                                						<td>1</td>
                                						<td><div class="controls">
															<input type="text" class="form-control" placeholder="auto.." disabled="disabled">
														</div></td>
                                						<td><div class="controls">
															<input type="text" class="form-control" placeholder="auto.." disabled="disabled">
														</div></td>
                                						<td><div class="controls">
															<input type="text" class="form-control" data-rel="datepicker" id="date-sewa" placeholder="auto.." disabled="disabled">
														</div></td>
                                                        <td><div class="controls">
                        									<input type="text" class="form-control" placeholder="auto.." disabled="disabled">
                    									</div></td>
                                                        <td><div class="controls">
                        									<input type="text" class="form-control" placeholder="auto.." disabled="disabled">
                    									</div></td>
                                                        <td><div class="controls">
                        									<input type="text" class="form-control" placeholder="auto.." disabled="disabled">
                    									</div></td>
                                                        <td><div class="controls">
                        									<input type="text" class="form-control" placeholder="auto.." disabled="disabled">
                    									</div></td>
                            						</tr>
                            						<tr>
                                						<td>2</td>
                                						<td><div class="controls">
															<input type="text" class="form-control" placeholder="auto.." disabled="disabled">
														</div></td>
                                						<td><div class="controls">
															<input type="text" class="form-control" placeholder="auto.." disabled="disabled">
														</div></td>
                                						<td><div class="controls">
															<input type="text" class="form-control" data-rel="datepicker" id="date-sewa" placeholder="auto.." disabled="disabled">
														</div></td>
                                                        <td><div class="controls">
                        									<input type="text" class="form-control" placeholder="auto.." disabled="disabled">
                    									</div></td>
                                                        <td><div class="controls">
                        									<input type="text" class="form-control" placeholder="auto.." disabled="disabled">
                    									</div></td>
                                                        <td><div class="controls">
                        									<input type="text" class="form-control" placeholder="auto.." disabled="disabled">
                    									</div></td>
                                                        <td><div class="controls">
                        									<input type="text" class="form-control" placeholder="auto.." disabled="disabled">
                    									</div></td>
                            						</tr>
                            						<tr>
                                						<td>3</td>
                                						<td><div class="controls">
															<input type="text" class="form-control" placeholder="auto.." disabled="disabled">
														</div></td>
                                						<td><div class="controls">
															<input type="text" class="form-control" placeholder="auto.." disabled="disabled">
														</div></td>
                                						<td><div class="controls">
															<input type="text" class="form-control" data-rel="datepicker" id="date-sewa" placeholder="auto.." disabled="disabled">
														</div></td>
                                                        <td><div class="controls">
                        									<input type="text" class="form-control" placeholder="auto.." disabled="disabled">
                    									</div></td>
                                                        <td><div class="controls">
                        									<input type="text" class="form-control" placeholder="auto.." disabled="disabled">
                    									</div></td>
                                                        <td><div class="controls">
                        									<input type="text" class="form-control" placeholder="auto.." disabled="disabled">
                    									</div></td>
                                                        <td><div class="controls">
                        									<input type="text" class="form-control" placeholder="auto.." disabled="disabled">
                    									</div></td>
                            						</tr>
                            						
                                                    <tr>
                                						<td colspan="7" align="right"><strong>Total Selling</strong></td>
                                                        <td><div class="controls">
                        									<input type="text" class="form-control" placeholder="auto.." disabled="disabled">
                    									</div></td>
                            						</tr>
                                                    <tr>
                                						<td colspan="7" align="right"><strong>Down Payment</strong></td>
                                                        <td><div class="controls">
                        									<input type="text" class="form-control" placeholder="DP">
                    									</div></td>
                            						</tr>
                                                    <tr>
                                						<td colspan="7" align="right"><strong>TOTAL</strong></td>
                                                        <td><div class="controls">
                        									<input type="text" class="form-control" placeholder="TOTAL">
                    									</div></td>
                            						</tr>
                                                    
                                                    <tr>
                                						<td colspan="2" align="right"><strong>Says</strong></td>
                                                        <td colspan="6"><div class="controls">
                        									<input type="text" class="form-control" placeholder="TERBILANG">
                    									</div></td>
                            						</tr>
                        						</tbody>
                    						</table>
                						</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label">Note Invoice</label>
										<div class="col-sm-6">
											<textarea rows="5" class="form-control" placeholder="Catatan Invoice" style="resize:vertical"></textarea>
										</div>
									</div>
								</fieldset>
                                
                                <fieldset>
									<legend class="form-legend">
										<span>For UPDATE Invoice (if invoice=update STATUS BAYAR dibawah enable) && (if STATUS BAYAR=ALL PAID invoice baru FINISH)</span>
									</legend>
                                    <legend class="form-legend">
										<span>STATUS BAYAR - Client</span>
									</legend>
                                    <div class="form-group">
										<label for="" class="col-sm-3 control-label">From Client</label>
										<div class="col-sm-4">
											<select class="form-control form-select2" data-placeholder="Status Bayar Client">
												<option value=""></option>
												<option value="1">UNPAID</option>
                           						<option value="2">PAID</option>
                        					</select>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label">Notes</label>
										<div class="col-sm-4">
											<textarea rows="4" class="form-control" placeholder="Tanggal & Jumlah Bayar" style="resize:vertical"></textarea>
										</div>
									</div>
								</fieldset>
                                
                                <fieldset>
									<legend class="form-legend">
										<span>STATUS BAYAR - Vendor</span>
									</legend>
                                    <div class="form-group">
										<label for="" class="col-sm-3 control-label">To Vendor</label>
										<div class="col-sm-4">
											<select class="form-control form-select2" data-placeholder="Status Bayar Vendor" disabled="disabled">
												<option value=""></option>
												<option value="1">UNPAID</option>
                           						<option value="2">PAID</option>
                        					</select>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label">Notes</label>
										<div class="col-sm-4">
											<textarea rows="4" class="form-control" placeholder="Tanggal & Jumlah Bayar" style="resize:vertical" disabled="disabled"></textarea>
										</div>
									</div>

									<!-- BUTTON -->
                                    <div class="form-group">
										<div class="col-sm-offset-4 col-sm-8">
											<a href="#" class="btn btn-primary" id="button-pop"><i class="fa fa-check"></i> Submit</a>
											<a href="list-invoice.php" class="btn btn-primary"><i class="fa fa-times"></i> Cancel</a>
											<!-- Element to pop up -->
											<div id="pop-up">
												<a class="b-close btn btn-round btn-primary"><i class="fa fa-times"></i></a>
												Are you sure?
												<div class="btn-pop">
													<a href="#" class="btn btn-primary"><i class="fa fa-check"></i> OK</a>
												</div>
											</div>
										</div>
									</div>
                                    <!-- BUTTON -->
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
							<span class="label label-danger">NEW</span>
							<span class="label label-info">APPROVE</span>
							<span class="label label-warning">UPDATE</span>
							<span class="label label-success">FINISH</span>
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
										<div class="col-sm-offset-4 col-sm-8">
											<a href="#" class="btn btn-primary" id="button-pop2"><i class="fa fa-check"></i> Submit</a>
											<a href="list-invoice.php" class="btn btn-primary"><i class="fa fa-times"></i> Cancel</a>
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