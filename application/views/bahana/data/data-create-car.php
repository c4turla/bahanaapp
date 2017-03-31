<div class="page-content"> <!-- page content start -->

<div class="page-subheading page-subheading-md">
    <ol class="breadcrumb">
        <li><a href="javascript:;">Dashboard</a></li>
        <li><a href="javascript:;">Data</a></li>
        <li class="active"><a href="javascript:;">Create Car</a></li>
    </ol>
</div>
<div class="page-heading page-heading-md">
    <h2>Create Car</h2>
</div>

<div class="container-fluid-md">
	<div class="panel panel-primary">    	
        <div class="panel-heading">
            <h4 class="panel-title"><strong>DATA CAR</strong></h4>

            <div class="panel-options">
                <a href="#" data-rel="collapse"><i class="fa fa-fw fa-minus"></i></a>
                <a href="#" data-rel="reload"><i class="fa fa-fw fa-refresh"></i></a>
            </div>
        </div>
        <div class="panel-body">
			<?php echo form_open_multipart("data/simpan_car",'class="form-horizontal form-bordered FormProfile",data-toggle="validator"','data-toggle="validator"'); ?>
			<fieldset>
				<legend class="form-legend">
					<span>Vendor Car</span>
				</legend>
                <div class="form-group">
					<label for="" class="col-sm-3 control-label">Vendor Name</label>
					<div class="col-sm-4">
						<select class="form-control form-select2" data-placeholder="Vendor Name..." name="VendorName">
							<?php foreach ($data as $val){ ?>
							<?php echo "<option value='".$val->nameVendor."'>".$val->nameVendor."</option>"; ?>
							<?php } ?>
							
							
                        </select>
					</div>
				</div>
			</fieldset>
            
            <fieldset>
				<legend class="form-legend">
					<span>Car Information</span>
				</legend>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Car Brand</label>
					<div class="col-sm-4">
						<select class="form-control form-select2" id="CarBrand"  name="CarBrand" data-placeholder="Car Brand...">
							<option value=""></option>
							<option value="TOYOTA">TOYOTA</option>
                            <option value="DAIHATSU">DAIHATSU</option>
                            <option value="SUZUKI">SUZUKI</option>
                            <option value="HONDA">HONDA</option>
                            <option value="NISSAN">NISSAN</option>
                            <option value="MITSUBISHI">MITSUBISHI</option>
                            <option value="MERCEDES-BENZ">MERCEDES-BENZ</option>
                            <option value="BMW">BMW</option>
                            <option value="HYUNDAI">HYUNDAI</option>
                            <option value="KIA">KIA</option>
                            <option value="OTHERS">OTHERS</option>
                        </select>
					</div>
				</div>
                <div class="form-group">
					<label for="" class="col-sm-3 control-label">Car Name</label>
					<div class="col-sm-4">
						<input type="" class="form-control" id="CarName" placeholder="Car Name" name="CarName" required>
					</div>
				</div>
                <div class="form-group">
					<label for="" class="col-sm-3 control-label">No. Polisi</label>
					<div class="col-sm-4">
						<input type="" class="form-control" id="NoPolisi" placeholder="No. Polisi" name="NoPolisi">
					</div>
				</div>
                <div class="form-group">
					<label for="" class="col-sm-3 control-label">Color</label>
					<div class="col-sm-4">
						<select class="form-control form-select2" id="Color" data-placeholder="Color..." name="Color">
							<option value=""></option>
							<option value="BLACK">BLACK</option>
                            <option value="WHITE">WHITE</option>
                            <option value="SILVER">SILVER</option>
                            <option value="GREY">GREY</option>
                            <option value="GOLD">GOLD</option>
                            <option value="RED">RED</option>
                            <option value="BLUE">BLUE</option>
                            <option value="GREEN">GREEN</option>
                        </select>
					</div>
				</div>
                <div class="form-group">
					<label for="" class="col-sm-3 control-label">Year</label>
					<div class="col-sm-4">
						<input type="" class="form-control" id="Year" placeholder="Year" name="Year">
					</div>
				</div>
                <div class="form-group">
					<label for="" class="col-sm-3 control-label">Transmission</label>
					<div class="col-sm-4">
						<select class="form-control form-select2" id="Transmission" data-placeholder="Transmission..." name="Transmission">
							<option value=""></option>
							<option value="MANUAL">MANUAL</option>
                            <option value="AUTOMATIC">AUTOMATIC</option>
                        </select>
					</div>
				</div>
                <div class="form-group">
					<label for="" class="col-sm-3 control-label">Status</label>
					<div class="col-sm-4">
						Status Now : <span class="label label-success">READY</span> &nbsp;
                        <span class="label label-info">OTR</span> &nbsp;
                        <span class="label label-warning">REPAIR</span> &nbsp;
                        <span class="label label-danger">PENDING</span><br /><br />
                        <select class="form-control form-select2" id="Status" name="Status"  data-placeholder="Car Status...">
							<option value=""></option>
							<option value="1">READY</option>
                            <option value="2">OTR</option>
							<option value="3">REPAIR</option>
                            <option value="4">PENDING</option>
                        </select>
					</div>
				</div>                
                
			</fieldset>

            <fieldset>
                <legend class="form-legend">
					<span>Others Information</span>
				</legend>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Car Photo</label>
					<div class="col-sm-4">
                        <img alt="image" class="img-profile" src="app/images/car/car-sample.jpg" width="320">
						<input type="file" name="CarUpload"> Format file Car images: .jpg
					</div>
				</div>
                <div class="form-group">
					<label for="" class="col-sm-3 control-label">Notes</label>
					<div class="col-sm-4">
						<textarea class="form-control autogrow" id="Notes" name="Notes" rows="4" placeholder="Notes"></textarea>
					</div>
				</div>
                
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-9">
						<a href="javascript:void(0)" class="btn btn-primary vendoradd" ><i class="fa fa-check"></i> Submit</a>
						<a href="javascript:void(0)" style="display:none" class="btn btn-primary" id="button-pop" ></a>
						<button style="display:none" type="submit" class="trigereditprofile"><i class="fa fa-check"></i> </button>
                        <a href="<?php echo base_url(); ?>data/data_car" class="btn btn-primary"><i class="fa fa-times"></i> Cancel</a>
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
