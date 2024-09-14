<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/admin/home')}}" class="brand-link">
      <img src="{{ asset('uploads/'.$general_setting->logo) }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><b> stkExpress</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('asset/img/milon.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">admin</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Dashbord  -->
          <li class="nav-item has-treeview">
            <a href="{{url('/admin/home')}}" class="nav-link">
            <i class="fas fa-home"></i>
              <p>
                DashBoard Pages
                <!-- <i class="right fas fa-angle-left  menu-open"></i> -->
              </p>
            </a>
          </li>
          <!-- End Dashbord  -->
          <!-- manage User -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="material-icons" style="font-size:16px;">&#xe7fb;</i>
              <p>
                User Manage
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('users/create')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create user</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('users')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage user</p>
                </a>
              </li>
            </ul>
          </li>
          <!--End manage User -->
          <!-- manage User -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="material-icons" style="font-size:16px;">&#xe7fb;</i>
              <p>
                Branch Manage
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('branch/create')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create branch</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('branch')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage branch</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- merchant manage  -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-user"></i>
              <p>
                Merchant
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
           <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('adminmerchant/create')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Merchant</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('adminmerchant')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Merchant</p>
                </a>
              </li>
            </ul> 
          </li>
          <!--End merchant manage  -->
          <!-- Catagory management -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-cube"></i>
              <p>
                Category manage
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('category/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('category')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Category</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- parcel management -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-cube"></i>
              <p>
                Parcel manage
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Today parcel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('adminparcel')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All parcel</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- delivery Boy management -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-cube"></i>
              <p>
                Pickup/Delivery Boy
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/deliveryboy/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Pickup/Delivery boy</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/deliveryboy')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Pickup boy</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Zone management -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-cube"></i>
              <p>
                Zone
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/zones/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Zone</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/zones')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Zone</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Zone management -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-cube"></i>
              <p>
                Weight manage
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/wight/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create weight</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/wight')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage weight</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- General setting management -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-cube"></i>
              <p>
                Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/general/setting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>general_settings</p>
                </a>
              </li>
            </ul>
          </li> 
          <!-- Payment management -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-cube"></i>
              <p>
                Payment
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/payment')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Payment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/payment/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Payment</p>
                </a>
              </li>
            </ul>
          </li>    
            <!----Logout---->        
              <li class="nav-item">
                <a href="{{url('admin/logout')}}" class="nav-link">
                  <i class="fas fa-sign-out-alt"></i>
                    <p>Logout</p>
                </a>
              </li>
        </ul>
    </nav>
      <!-- /.sidebar-menu -->
  </div>
    <!-- /.sidebar -->
</aside>