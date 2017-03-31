<div class="page-content"> <!-- page content start -->

<div class="page-subheading page-subheading-md">
    <ol class="breadcrumb">
        <li><a href="javascript:;">Dashboard</a></li>
        <li><a href="javascript:;">Invoice</a></li>
        <li class="active"><a href="javascript:;">List Invoice</a></li>
    </ol>
</div>
<div class="page-heading page-heading-md">
    <h2>List Invoice</h2>
</div>

<div class="container-fluid-md">
	<!-- STATUS LIST -->
	<div class="panel panel-danger">
        <div class="panel-heading">
            <h4 class="panel-title"><strong>LIST STATUS FAKTUR FINISH</strong></h4>
            <p><code>Finance harus Create NEW INVOICE, membuat invoice & proses pembayaran.</code></p>

            <div class="panel-options">
                <a href="#" data-rel="collapse"><i class="fa fa-fw fa-minus"></i></a>
                <a href="#" data-rel="reload"><i class="fa fa-fw fa-refresh"></i></a>
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th width="12%">No. SO</th>
                        <th width="12%">No. Faktur</th>
                        <th width="17%">Client</th>
                        <th width="17%">Car</th>
                        <th width="15%">No. Polisi</th>                        
                        <th width="10%">Status</th>
                        <th width="17%">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td>SO-20150501</td>
                        <td>FK-20150501</td>
                        <td>PT. ABC</td>
                        <td class="center">Innova</td>
                        <td class="center">B1234XYZ</td>
                        <td class="center"><span class="label label-success">FINISH</span></td>
                        <td class="center"><a href="#" class="btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Update"><i class="fa fa-plus-square"></i>&nbsp; NEW INVOICE</a></td>
                    </tr>
                    <tr class="">
                        <td>SO-20150501</td>
                        <td>FK-20150501</td>
                        <td>PT. ABC</td>
                        <td class="center">Innova</td>
                        <td class="center">B1234XYZ</td>
                        <td class="center"><span class="label label-success">FINISH</span></td>
                        <td class="center"><a href="#" class="btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Update"><i class="fa fa-plus-square"></i>&nbsp; NEW INVOICE</a></td>
                    </tr>
                </tbody>

            </table>
            10 entries
            <div class="text-center">
            	<ul class="pagination">
                	<li><a href="javascript:;"><i class="fa fa-angle-left"></i></a></li>
                    <li class="active"><a href="javascript:;">1</a></li>
                    <li><a href="javascript:;">2</a></li>
                    <li><a href="javascript:;">3</a></li>
                    <li><a href="javascript:;">4</a></li>
                    <li><a href="javascript:;">5</a></li>
                    <li><a href="javascript:;"><i class="fa fa-angle-right"></i></a></li>
                 </ul>
            </div>            
        </div>
    </div>
    <!-- STATUS LIST END -->
	<div class="panel panel-primary">
        <div class="panel-heading">
            <h4 class="panel-title"><strong>LIST ALL INVOICE</strong></h4>

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

