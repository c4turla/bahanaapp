
<div class="page-content"> <!-- page content start -->

<div class="page-subheading page-subheading-md">
    <ol class="breadcrumb">
        <li><a href="javascript:;">Dashboard</a></li>
        <li><a href="javascript:;">Surat Jalan</a></li>
        <li class="active"><a href="javascript:;">List Surat Jalan</a></li>
    </ol>
</div>
<div class="page-heading page-heading-md">
    <h2>List Surat Jalan</h2>
</div>

<div class="container-fluid-md">
	<!-- STATUS LIST -->
	<div class="panel panel-danger">
        <div class="panel-heading">
            <h4 class="panel-title"><strong>LIST STATUS FAKTUR APPROVED</strong></h4>
            <p><code>Operational harus Create NEW SURAT JALAN, membuat surat jalan & proses order.</code></p>

            <div class="panel-options">
                <a href="#" data-rel="collapse"><i class="fa fa-fw fa-minus"></i></a>
                <a href="#" data-rel="reload"><i class="fa fa-fw fa-refresh"></i></a>
            </div>
        </div>
        <div class="panel-body">
            <?php echo $dt_fa_approved?>
        </div>
    </div>
    <!-- STATUS LIST END -->
    
	<div class="panel panel-primary">
        <div class="panel-heading">
            <h4 class="panel-title"><strong>LIST ALL SURAT JALAN</strong></h4>

            <div class="panel-options">
                <a href="#" data-rel="collapse"><i class="fa fa-fw fa-minus"></i></a>
                <a href="#" data-rel="reload"><i class="fa fa-fw fa-refresh"></i></a>
            </div>
        </div>
        <div class="panel-body">
          	<?php echo $dt_retrieve?>
        </div>
    </div>
</div>

</div> <!-- page content end -->