<div class="page-content"> <!-- page content start -->

<div class="page-subheading page-subheading-md">
    <ol class="breadcrumb">
        <li><a href="javascript:;">Dashboard</a></li>
        <li><a href="javascript:;">Data</a></li>
        <li class="active"><a href="javascript:;">Edit Car</a></li>
    </ol>
</div>
<div class="page-heading page-heading-md">
    <h2>Edit Car</h2>
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
			<?php echo form_open_multipart("data/editsimpancar",'class="form-horizontal form-bordered FormProfile",data-toggle="validator"','data-toggle="validator"'); ?>
			<fieldset>
				<legend class="form-legend">
					<span>Vendor Car</span>
				</legend>
                <div class="form-group">
					<label for="" class="col-sm-3 control-label">Vendor Name</label>
					<div class="col-sm-4">
						<select class="form-control form-select2" name="VendorName">
							<?php foreach ($data as $val){ ?>
							<?php if ( $val->nameVendor === $VendorName ) : ?>
							<?php echo "<option value='".$val->nameVendor."' selected>".$val->nameVendor."</option>"; ?>
							<?php else : ?>
							<?php echo "<option value='".$val->nameVendor."'>".$val->nameVendor."</option>"; ?>
							<?php endif; ?>
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
							<option value="TOYOTA" <?php if(!empty($CarBrand) && $CarBrand == "TOYOTA") echo 'selected'; ?>>TOYOTA</option>
							<option value="DAIHATSU" <?php if(!empty($CarBrand) && $CarBrand == "DAIHATSU") echo 'selected'; ?>>DAIHATSU</option>
							<option value="SUZUKI" <?php if(!empty($CarBrand) && $CarBrand == "SUZUKI") echo 'selected'; ?>>SUZUKI</option>
							<option value="HONDA" <?php if(!empty($CarBrand) && $CarBrand == "HONDA") echo 'selected'; ?>>HONDA</option>
							<option value="NISSAN" <?php if(!empty($CarBrand) && $CarBrand == "NISSAN") echo 'selected'; ?>>NISSAN</option>
							<option value="MITSUBISHI" <?php if(!empty($CarBrand) && $CarBrand == "MITSUBISHI") echo 'selected'; ?>>MITSUBISHI</option>
							<option value="MERCEDES-BENZ" <?php if(!empty($CarBrand) && $CarBrand == "MERCEDES-BENZ") echo 'selected'; ?>>MERCEDES-BENZ</option>
							<option value="BMW" <?php if(!empty($CarBrand) && $CarBrand == "BMW") echo 'selected'; ?>>BMW</option>
							<option value="HYUNDAI" <?php if(!empty($CarBrand) && $CarBrand == "HYUNDAI") echo 'selected'; ?>>HYUNDAI</option>
							<option value="KIA" <?php if(!empty($CarBrand) && $CarBrand == "KIA") echo 'selected'; ?>>KIA</option>
							<option value="OTHERS" <?php if(!empty($CarBrand) && $CarBrand == "OTHERS") echo 'selected'; ?>>OTHERS</option>
                        </select>
					</div>
				</div>
                <div class="form-group">
					<label for="" class="col-sm-3 control-label">Car Name</label>
					<div class="col-sm-4">
						<input type="" class="form-control" id="CarName" placeholder="Car Name" name="CarName" value="<?php echo $CarName ?>">
					</div>
				</div>
                <div class="form-group">
					<label for="" class="col-sm-3 control-label">No. Polisi</label>
					<div class="col-sm-4">
						<input type="" class="form-control" id="NoPolisi" placeholder="No. Polisi" name="NoPolisi" value="<?php echo $NoPolisi ?>">
					</div>
				</div>
                <div class="form-group">
					<label for="" class="col-sm-3 control-label">Color</label>
					<div class="col-sm-4">
						<select class="form-control form-select2" id="Color" data-placeholder="Color..." name="Color">
							<option value=""></option>
							<option value="BLACK" <?php if(!empty($Color) && $Color == "BLACK") echo 'selected'; ?>>BLACK</option>
							<option value="WHITE" <?php if(!empty($Color) && $Color == "WHITE") echo 'selected'; ?>>WHITE</option>
							<option value="SILVER" <?php if(!empty($Color) && $Color == "SILVER") echo 'selected'; ?>>SILVER</option>
							<option value="GREY" <?php if(!empty($Color) && $Color == "GREY") echo 'selected'; ?>>GREY</option>
							<option value="GOLD" <?php if(!empty($Color) && $Color == "GOLD") echo 'selected'; ?>>GOLD</option>
							<option value="RED" <?php if(!empty($Color) && $Color == "RED") echo 'selected'; ?>>RED</option>
							<option value="BLUE" <?php if(!empty($Color) && $Color == "BLUE") echo 'selected'; ?>>BLUE</option>
							<option value="GREEN" <?php if(!empty($Color) && $Color == "GREEN") echo 'selected'; ?>>GREEN</option>
                        </select>
					</div>
				</div>
                <div class="form-group">
					<label for="" class="col-sm-3 control-label">Year</label>
					<div class="col-sm-4">
						<input type="" class="form-control" id="Year" placeholder="Year" name="Year" value="<?php echo $Year ?>">
						<input type="hidden" name="id_car" value="<?php echo $id_car; ?>">
					</div>
				</div>
                <div class="form-group">
					<label for="" class="col-sm-3 control-label">Transmission</label>
					<div class="col-sm-4">
						<select class="form-control form-select2" id="Transmission" data-placeholder="Transmission..." name="Transmission">
							<option value=""></option>
							<option value="MANUAL" <?php if(!empty($Transmission) && $Transmission == "MANUAL") echo 'selected'; ?>>MANUAL</option>
							<option value="AUTOMATIC" <?php if(!empty($Transmission) && $Transmission == "AUTOMATIC") echo 'selected'; ?>>AUTOMATIC</option>
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
                        <select class="form-control form-select2" id="Status" name="Status">
							<option value="1" <?php if(!empty($Status) && $Status == "1") echo 'selected'; ?>>READY</option>
							<option value="2" <?php if(!empty($Status) && $Status == "2") echo 'selected'; ?>>OTR</option>
							<option value="3" <?php if(!empty($Status) && $Status == "3") echo 'selected'; ?>>REPAIR</option>
							<option value="4" <?php if(!empty($Status) && $Status == "4") echo 'selected'; ?>>PENDING</option>
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
                        <img alt="image" class="img-profile"   width="320" id="blah" src="<?php echo base_url(); ?><?php echo 'files/'.$CarPhoto;?>">
						<input type="file" name="CarPhoto"> Format file Car images: .jpg
					</div>
				</div>
                <div class="form-group">
					<label for="" class="col-sm-3 control-label">Notes</label>
					<div class="col-sm-4">
						<textarea class="form-control autogrow" id="Notes" name="Notes" rows="4" placeholder="Notes"><?php echo $Notes ?></textarea>
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
