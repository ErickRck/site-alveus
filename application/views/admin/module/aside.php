  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <a href="<?php echo base_url('Admin/Admin/profile'); ?>" class="pull-left image" >
          <img src="<?php echo base_url();?>assets/dist/img/user-160x160.jpg" class="img-circle" alt="User Image">
        </a>

        <div class="pull-left info">
          <a href="<?php echo base_url('Admin/Admin/profile'); ?>"><p><?php echo $this->session->userdata('username'); ?></p></a>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Acceuil</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('Admin/Admin/index');?>"><i class="fa fa-circle-o"></i> acceuil</a></li>
            <li><a href="<?php echo base_url('Admin/Admin/index');?>"><i class="fa fa-circle-o"></i> acceuil</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="<?php echo base_url('Admin/Admin/index');?>"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="<?php echo base_url('Admin/Admin/index');?>"><i class="fa fa-circle-o"></i> Buttons</a></li>
            
          </ul>
        </li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('Admin/Admin/service');?>"><i class="fa fa-circle-o"></i>Service</a></li>
            <li><a href="<?php echo base_url('Admin/Admin/projet');?>"><i class="fa fa-circle-o"></i> Projet</a></li>
            <li><a href="<?php echo base_url('Admin/Admin/blog');?>"><i class="fa fa-circle-o"></i> Blog</a></li>
            <li><a href="<?php echo base_url('Admin/Admin/forum');?>"><i class="fa fa-circle-o"></i> Forum</a></li>
            <li><a href="<?php echo base_url('Admin/Admin/about');?>"><i class="fa fa-circle-o"></i> A proppos</a></li>
            <li><a href="<?php echo base_url('Admin/Admin/contact');?>"><i class="fa fa-circle-o"></i> Contact</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url('Admin/Admin/index');?>">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="<?php echo base_url('Admin/Admin/index');?>"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="<?php echo base_url('Admin/Admin/index');?>"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="<?php echo base_url('Admin/Admin/index');?>"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="<?php echo base_url('Admin/Admin/index');?>"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            
          </ul>
        </li>
        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
