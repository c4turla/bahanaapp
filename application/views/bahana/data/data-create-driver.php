<div class="page-content"> <!-- page content start -->

<div class="page-subheading page-subheading-md">
    <ol class="breadcrumb">
        <li><a href="javascript:;">Dashboard</a></li>
        <li><a href="javascript:;">Data</a></li>
        <li class="active"><a href="javascript:;">Create Driver</a></li>
    </ol>
</div>
<div class="page-heading page-heading-md">
    <h2>Create/Edit Driver</h2>
</div>

<div class="container-fluid-md">
	<div class="panel panel-primary">    	
        <div class="panel-heading">
            <h4 class="panel-title"><strong>DATA DRIVER</strong></h4>

            <div class="panel-options">
                <a href="#" data-rel="collapse"><i class="fa fa-fw fa-minus"></i></a>
                <a href="#" data-rel="reload"><i class="fa fa-fw fa-refresh"></i></a>
            </div>
        </div>
        <div class="panel-body">
			<?php echo form_open_multipart("data/simpan_driver",'class="form-horizontal form-bordered FormProfile",data-toggle="validator"','data-toggle="validator"'); ?>
			<fieldset>
				<legend class="form-legend">
					<span>Driver Information</span>
				</legend>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Driver Name</label>
					<div class="col-sm-4">
						<input type="" class="form-control" id="DriverName" placeholder="Driver Name" name="DriverName">
					</div>
				</div>                
                <div class="form-group">
					<label for="" class="col-sm-3 control-label">Mobile1</label>
					<div class="col-sm-4">
						<div class="input-group">
                        	<span class="input-group-addon">+62</span>
                            <input type="text" class="form-control" id="Mobile1" placeholder="Mobile1" name="Mobile1">
						</div>
					</div>
				</div>
                <div class="form-group">
					<label for="" class="col-sm-3 control-label">Mobile2</label>
					<div class="col-sm-4">
						<div class="input-group">
                        	<span class="input-group-addon">+62</span>
                            <input type="text" class="form-control" id="Mobile2" placeholder="Mobile2" name="Mobile2">
						</div>
					</div>
				</div>
                <div class="form-group">
					<label for="" class="col-sm-3 control-label">PIN Blackberry</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="PINBB" placeholder="PIN Blackberry" name="PINBB">
					</div>
				</div>
                <div class="form-group">
					<label for="" class="col-sm-3 control-label">Email</label>
					<div class="col-sm-4">
						<input type="email" class="form-control" id="Email" placeholder="Email" name="Email">
					</div>
				</div>
                <div class="form-group">
					<label for="" class="col-sm-3 control-label">Status</label>
					<div class="col-sm-4">
						Status Now : <span class="label label-success">READY</span> &nbsp;
                        <span class="label label-info">OTR</span> &nbsp;
                        <span class="label label-danger">NOT READY</span><br /><br />
                        <select class="form-control form-select2" id="Status" data-placeholder="Car Status..." name="Status">
							<option value=""></option>
							<option value="1">READY</option>
                            <option value="2">OTR</option>
							<option value="3">NOT READY</option>
                        </select>
					</div>
				</div>
			</fieldset>
            
            <fieldset>
				<legend class="form-legend">
					<span>Driver Address</span>
				</legend>
                <div class="form-group">
					<label for="" class="col-sm-3 control-label">Address</label>
					<div class="col-sm-4">
						<textarea class="form-control autogrow" rows="4" placeholder="Address" id="Address" name="Address"></textarea>
					</div>
				</div>
                
                <div class="form-group">
					<label for="" class="col-sm-3 control-label">City</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="City" name="City" placeholder="City">
					</div>
				</div>
                <div class="form-group">
					<label for="" class="col-sm-3 control-label">Province</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="Province" name="Province" placeholder="Province">
					</div>
				</div>
                <div class="form-group">
					<label for="" class="col-sm-3 control-label">Country</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="Country" name="Country" placeholder="Country">
					</div>
				</div>
			</fieldset>
            
            <fieldset>
                <legend class="form-legend">
					<span>Others Information</span>
				</legend>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">SIM Driver</label>
					<div class="col-sm-4">
                        <img alt="image" class="img-profile" src="app/images/sim/sim-sample.jpg" width="320">
						<input type="file" name="FotoSIM" name="FotoSIM"> Format file SIM images: .jpg
					</div>
				</div>
                <div class="form-group">
					<label for="" class="col-sm-3 control-label">SIM No.</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="NoSIM" name="NoSIM" placeholder="SIM Number">
					</div>
				</div>
                
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-9">
						<a href="javascript:void(0)" class="btn btn-primary vendoradd" ><i class="fa fa-check"></i> Submit</a>
						<a href="javascript:void(0)" style="display:none" class="btn btn-primary" id="button-pop" ></a>
						<button style="display:none" type="submit" class="trigereditprofile"><i class="fa fa-check"></i> </button>
                        <a href="<?php echo base_url(); ?>data/data_driver" class="btn btn-primary"><i class="fa fa-times"></i> Cancel</a>
                        <!-- Element to pop up -->
						<div id="pop-up">
							<a class="b-close btn btn-round btn-primary "><i class="fa fa-times"></i></a>
							Are you sure?
							<div class="btn-pop">
								<a href="#" class="btn btn-primary editprofile"><i class="fa fa-check"></i> OK</a>
							</div>
						</div>
					</div>
				</div>
                
			</fieldset>            
			<?php echo form_close(); ?>
            </form>
			
        </div>
    </div>
    
</div>

</div> <!-- page content end -->
