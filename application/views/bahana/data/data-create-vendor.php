
<div class="page-content"> <!-- page content start -->

<div class="page-subheading page-subheading-md">
    <ol class="breadcrumb">
        <li><a href="javascript:;">Dashboard</a></li>
        <li><a href="javascript:;">Data</a></li>
        <li class="active"><a href="javascript:;">Create Vendor</a></li>
    </ol>
</div>
<div class="page-heading page-heading-md">
    <h2>Create Vendor</h2>
</div>

<div class="container-fluid-md">
	<div class="panel panel-primary">    	
        <div class="panel-heading">
            <h4 class="panel-title"><strong>DATA Vendor</strong></h4>

            <div class="panel-options">
                <a href="#" data-rel="collapse"><i class="fa fa-fw fa-minus"></i></a>
                <a href="#" data-rel="reload"><i class="fa fa-fw fa-refresh"></i></a>
            </div>
        </div>
        <div class="panel-body">
			<?php echo form_open_multipart("data/simpan_vendor",'class="form-horizontal form-bordered FormProfile",data-toggle="validator"','data-toggle="validator"'); ?>
		
            
            <fieldset>
				<legend class="form-legend">
					<span>Vendor Information</span>
				</legend>
				<div class="form-group">
					<label for="groupName" class="col-sm-3 control-label">Vendor Name</label>
					<div class="col-sm-4">
						<input type="" class="form-control" id="nameVendor" placeholder="Customer/Agent" name="nameVendor" required>
					</div>
				</div>
                <div class="form-group">
					<label for="groupName" class="col-sm-3 control-label">C/P Name</label>
					<div class="col-sm-4">
						<input type="" class="form-control" id="nameCP" placeholder="Contact Person" name="nameCP">
					</div>
				</div>
                <div class="form-group">
					<label for="phone" class="col-sm-3 control-label">Phone</label>
					<div class="col-sm-4">
						<div class="input-group">
                        	<span class="input-group-addon">+62</span>
                            <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone">
						</div>
					</div>
				</div>
                <div class="form-group">
					<label for="fax" class="col-sm-3 control-label">Fax</label>
					<div class="col-sm-4">
						<div class="input-group">
                        	<span class="input-group-addon">+62</span>
                            <input type="text" class="form-control" id="fax" placeholder="Fax" name="fax">
						</div>
					</div>
				</div>
                <div class="form-group">
					<label for="mobile" class="col-sm-3 control-label">Mobile</label>
					<div class="col-sm-4">
						<div class="input-group">
                        	<span class="input-group-addon">+62</span>
                            <input type="text" class="form-control" id="mobile" placeholder="mobile" name="mobile">
						</div>
					</div>
				</div>
			<div class="form-group">
					<label for="groupName" class="col-sm-3 control-label">Email</label>
					<div class="col-sm-4">
						<input type="" class="form-control" id="email" placeholder="Email" name="email">
					</div>
				</div>
			</fieldset>
            
            <fieldset>
				<legend class="form-legend">
					<span>Vendor Address</span>
				</legend>
                <div class="form-group">
					<label for="Address" class="col-sm-3 control-label">Address</label>
					<div class="col-sm-4">
						<textarea class="form-control autogrow" rows="4" placeholder="Address" name="Address"></textarea>
					</div>
				</div>
                
                <div class="form-group">
					<label for="city" class="col-sm-3 control-label">City</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="city" placeholder="City" name="city">
					</div>
				</div>
                <div class="form-group">
					<label for="province" class="col-sm-3 control-label">Province</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="province" placeholder="Province" name="provinsi">
					</div>
				</div>
                <div class="form-group">
					<label for="country" class="col-sm-3 control-label">Country</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="country" placeholder="Country" name="Country">
					</div>
				</div>
			</fieldset>
            
            <fieldset>
                <legend class="form-legend">
					<span>Others Information</span>
				</legend>
				<div class="form-group">
					<label for="ktpPic" class="col-sm-3 control-label">KTP Vendor</label>
					<div class="col-sm-4">
                      
						<input type="file" name="uploadKTP"> Format file KTP images: .jpg
					</div>
				</div>
                <div class="form-group">
					<label for="" class="col-sm-3 control-label">KTP No.</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="" placeholder="KTP Number" name="NoKTP">
					</div>
				</div>
                
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-9">
						<a href="javascript:void(0)" class="btn btn-primary vendoradd" ><i class="fa fa-check"></i> Submit</a>
						<a href="javascript:void(0)" style="display:none" class="btn btn-primary" id="button-pop" ></a>
						<button style="display:none" type="submit" class="trigereditprofile"><i class="fa fa-check"></i> </button>
                        <a href="<?php echo base_url(); ?>data/vendor" class="btn btn-primary"><i class="fa fa-times"></i> Cancel</a>
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
        </div>
    </div>
    
</div>

</div> <!-- page content end -->


