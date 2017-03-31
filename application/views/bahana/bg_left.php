<!-- aSide Menu START -->

        <div class="page-wrapper">
            <aside class="sidebar sidebar-default">
                <div class="sidebar-profile">
                    <img class="img-circle profile-image" src="<?php echo base_url().'files/'.$session['FilesName'].''; ?>">

                    <div class="profile-body">
                        <h4><?php echo $session['NamaLengkap'];?></h4>

                        <div class="sidebar-user-links">
                            <a class="btn btn-link btn-xs" href="<?php echo base_url(); ?>user/profile" data-placement="bottom" data-toggle="tooltip" data-original-title="Profile"><i class="fa fa-user"></i></a>
                            <a class="btn btn-link btn-xs" href="<?php echo base_url(); ?>setting"  data-placement="bottom" data-toggle="tooltip" data-original-title="Settings"><i class="fa fa-cog"></i></a>
                            <a class="btn btn-link btn-xs" href="<?php echo base_url(); ?>dashboard/logout" data-placement="bottom" data-toggle="tooltip" data-original-title="Logout"><i class="fa fa-sign-out"></i></a>
                        </div>
                    </div>
                </div>
                <nav>
                    <h5 class="sidebar-header">Navigation</h5>
                    <ul class="nav nav-pills nav-stacked">
                        <li <?php if($this->uri->segment(1)=='dashboard'){ echo' class="active"' ;}?> >
                            <a href="<?php echo base_url(); ?>dashboard" title="Dashboards">
                                <i class="fa fa-lg fa-fw fa-home"></i> Dashboards 
                            </a>
                        </li>
                        <li class="nav-dropdown <?php if($this->uri->segment(1)=='user'){ echo'active';}?>">
                            <a href="#" title="Users">
                                <i class="fa fa-lg fa-fw fa-user"></i> Users
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a href="<?php echo base_url(); ?>user/profile" title="Profile">
                                        <i class="fa fa-fw fa-caret-right"></i> Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>user/member" title="Members">
                                        <i class="fa fa-fw fa-caret-right"></i> Members
                                    </a>
                                </li>
                                <li>
                                    <a href="pages-group.php" title="Group Profiles">
                                        <i class="fa fa-fw fa-caret-right"></i> Group Profiles
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="nav-dropdown">
                            <a href="#" title="Data">
                                <i class="fa fa-lg fa-fw fa-database"></i> Data
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a href="<?php echo base_url(); ?>data/client" title="Clients">
                                        <i class="fa fa-fw fa-caret-right"></i> Clients
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>data/vendor" title="Vendor">
                                        <i class="fa fa-fw fa-caret-right"></i> Vendors
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>data/data_car" title="Cars">
                                        <i class="fa fa-fw fa-caret-right"></i> Cars
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>data/data_driver" title="Drivers">
                                        <i class="fa fa-fw fa-caret-right"></i> Drivers
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="nav-dropdown">
                            <a href="#" title="Faktur">
                                <i class="fa fa-lg fa-fw fa-edit"></i> Faktur
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a href="<?php echo base_url(); ?>faktur" title="List Faktur">
                                        <i class="fa fa-fw fa-caret-right"></i> List Faktur
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>faktur/createfaktur" title="Create Faktur">
                                        <i class="fa fa-fw fa-caret-right"></i> Create Faktur
                                    </a>
                                </li>                                
                            </ul>
                        </li>
                        
                        <li class="nav-dropdown">
                            <a href="#" title="Surat Jalan">
                                <i class="fa fa-lg fa-fw fa-paper-plane"></i> Surat Jalan
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a href="<?php echo base_url(); ?>suratjalan" title="List Surat Jalan">
                                        <i class="fa fa-fw fa-caret-right"></i> List Surat Jalan
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>suratjalan/createsuratjalan" title="Create Surat Jalan">
                                        <i class="fa fa-fw fa-caret-right"></i> Create Surat Jalan
                                    </a>
                                </li>                                
                            </ul>
                        </li>
                        
                        <li class="nav-dropdown">
                            <a href="#" title="Invoice">
                                <i class="fa fa-lg fa-fw fa-file-text"></i> Invoice
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a href="<?php echo base_url(); ?>invoice" title="List Invoice">
                                        <i class="fa fa-fw fa-caret-right"></i> List Invoice
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>invoice/createinvoice" title="Create Invoice">
                                        <i class="fa fa-fw fa-caret-right"></i> Create Invoice
                                    </a>
                                </li>                                
                            </ul>
                        </li>
                        
                        <li class="nav-dropdown">
                            <a href="#" title="Report">
                                <i class="fa fa-lg fa-fw fa-clipboard"></i> Report
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a href="report-order.php" title="Report Orders">
                                        <i class="fa fa-fw fa-caret-right"></i> Report Orders
                                    </a>
                                </li>
                                <li>
                                    <a href="report-client.php" title="Report Clients">
                                        <i class="fa fa-fw fa-caret-right"></i> Report Clients
                                    </a>
                                </li>
                                <li>
                                    <a href="report-vendor.php" title="Report Vendors">
                                        <i class="fa fa-fw fa-caret-right"></i> Report Vendors
                                    </a>
                                </li>
                                <li>
                                    <a href="report-car.php" title="Report Cars">
                                        <i class="fa fa-fw fa-caret-right"></i> Report Cars
                                    </a>
                                </li>
                                <li>
                                    <a href="report-driver.php" title="Report Drivers">
                                        <i class="fa fa-fw fa-caret-right"></i> Report Drivers
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="disabled">
                            <a href="javascript:;" title="Disabled">
                                <i class="fa fa-lg fa-fw fa-th"></i> Disabled
                            </a>
                        </li>
                    </ul>
                    <h5 class="sidebar-header">Faktur Taks</h5>
                    <ul class="nav nav-pills nav-stacked">
                        <li>
                            <a href="list-faktur.php">
                                <i class="fa fa-fw fa-circle text-danger"></i>
                                New <span class="badge badge-danger pull-right"><strong> 8 </strong></span>
                            </a>
                        </li>
                        <li>
                            <a href="list-faktur.php">
                                <i class="fa fa-fw fa-circle text-info"></i>
                                Approve <span class="badge badge-info pull-right"><strong> 5 </strong></span>
                            </a>
                        </li>
                        <li>
                            <a href="list-faktur.php">
                                <i class="fa fa-fw fa-circle text-warning"></i>
                                Update <span class="badge badge-warning pull-right"><strong> 3 </strong></span>
                            </a>
                        </li>
                        <li>
                            <a href="list-faktur.php">
                                <i class="fa fa-fw fa-circle text-success"></i>
                                Finish <span class="badge badge-success pull-right"><strong> 12 </strong></span>
                            </a>
                        </li>
                    </ul>
                    <h5 class="sidebar-header">Summary</h5>
                    <ul class="sidebar-summary">
                        <li>
                            <div class="mini-chart mini-chart-block">
                                <div class="chart-details">
                                    <div class="chart-name">Total Order</div>
                                    <div class="chart-value">Rp.261,885</div>
                                </div>
                                <div id="mini-chart-sidebar-1" class="chart pull-right"></div>
                            </div>
                        </li>
                        <li>
                            <div class="mini-chart mini-chart-block">
                                <div class="chart-details">
                                    <div class="chart-name">Total Clients</div>
                                    <div class="chart-value">12,491</div>
                                </div>
                                <div id="mini-chart-sidebar-2" class="chart pull-right"></div>
                            </div>
                        </li>
                        <li>
                            <div class="mini-chart mini-chart-block">
                                <div class="chart-details">
                                    <div class="chart-name">Total Cars</div>
                                    <div class="chart-value">1,231</div>
                                </div>
                                <div id="mini-chart-sidebar-3" class="chart pull-right"></div>
                            </div>
                        </li>
                        <li>
                            <div class="mini-chart mini-chart-block">
                                <div class="chart-details">
                                    <div class="chart-name">Total Drivers</div>
                                    <div class="chart-value">976</div>
                                </div>
                                <div id="mini-chart-sidebar-4" class="chart pull-right"></div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </aside>
            
            <!-- aSide Menu END -->
