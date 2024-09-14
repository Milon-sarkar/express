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
          <a href="#" class="d-block">{{session('mer_sess_user_name')}}</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Dashbord  -->
          <li class="nav-item has-treeview">
            <a href="{{url('merchant/dashboard')}}" class="nav-link">
            <i class="fas fa-home"></i>
              <p>
                DashBoard
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
                Parcel
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{Route('parcel.create')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Parcel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{Route('parcel.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Parcel</p>
                </a>
              </li>
            </ul>
          </li>
          <!--End manage User -->
          <!-- merchant manage  -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-user"></i>
              <p>
                Profile
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
           <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Profile</p>
                </a>
              </li>
            </ul> 
          </li>
          <!--End merchant manage  -->
            <!----Logout---->        
              <li class="nav-item">
                <a href="{{url('/merchant/logout')}}" class="nav-link">
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