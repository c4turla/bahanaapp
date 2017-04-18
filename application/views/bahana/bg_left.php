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
                       <?php foreach ($arraymenu as $value) {  ?>
                         <li class="nav-dropdown <?php if($this->uri->segment(1)==$value['modul_action']){ echo'active';}?>" >
                             <a href="#" title="Users">
                                <i class="fa fa-lg fa-fw <?php echo $value['icon'];?>"></i> <?php echo $value['nama_menu'];?>
                             </a>
                               <ul class="nav-sub">
                                       <?php foreach ($value['childnya'] as $key2 => $value2) { ?>
                                        <li>
                                            <a href="<?php echo base_url().$value2['modul_action']; ?>" title="Profile">
                                                <i class="fa fa-fw fa-caret-right"></i> <?php echo $value2['nama_menu'];?>
                                            </a>
                                        </li>
                                        <?php }  ?>
                                    </ul>
                             </li>

                        <?php }  ?>
                   </ul>


                    <h5 class="sidebar-header">Faktur Taks</h5>
                    <ul class="nav nav-pills nav-stacked">
                        <li>
                            <a href="<?php echo base_url().'faktur'; ?>">
                                <i class="fa fa-fw fa-circle text-danger"></i>
                                New <span class="badge badge-danger pull-right"><strong> <?php echo $totalfakturnew;?> </strong></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'faktur'; ?>">
                                <i class="fa fa-fw fa-circle text-info"></i>
                                Approve <span class="badge badge-info pull-right"><strong> <?php echo $totalfakturapprove;?>  </strong></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'faktur'; ?>">
                                <i class="fa fa-fw fa-circle text-warning"></i>
                                Update <span class="badge badge-warning pull-right"><strong> <?php echo $totalfakturupdate;?>  </strong></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'faktur'; ?>">
                                <i class="fa fa-fw fa-circle text-success"></i>
                                Finish <span class="badge badge-success pull-right"><strong> <?php echo $totalfakturfinish;?> </strong></span>
                            </a>
                        </li>
                    </ul>
                    <h5 class="sidebar-header">Summary</h5>
                    <ul class="sidebar-summary">
                        <li>
                            <div class="mini-chart mini-chart-block">
                                <div class="chart-details">
                                    <div class="chart-name">Total Order</div>
                                    <div class="chart-value"><?php echo $totalso;?></div>
                                </div>
                                <div id="mini-chart-sidebar-1" class="chart pull-right"></div>
                            </div>
                        </li>
                        <li>
                            <div class="mini-chart mini-chart-block">
                                <div class="chart-details">
                                    <div class="chart-name">Total Clients</div>
                                    <div class="chart-value"><?php echo $totalClient;?></div>
                                </div>
                                <div id="mini-chart-sidebar-2" class="chart pull-right"></div>
                            </div>
                        </li>
                        <li>
                            <div class="mini-chart mini-chart-block">
                                <div class="chart-details">
                                    <div class="chart-name">Total Cars</div>
                                    <div class="chart-value"><?php echo $totalCars;?></div>
                                </div>
                                <div id="mini-chart-sidebar-3" class="chart pull-right"></div>
                            </div>
                        </li>
                        <li>
                            <div class="mini-chart mini-chart-block">
                                <div class="chart-details">
                                    <div class="chart-name">Total Drivers</div>
                                    <div class="chart-value"><?php echo $totalDrivers;?></div>
                                </div>
                                <div id="mini-chart-sidebar-4" class="chart pull-right"></div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </aside>
            
            <!-- aSide Menu END -->
