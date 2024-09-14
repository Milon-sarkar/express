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
        
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Dashbord  -->
          <li class="nav-item has-treeview">
            <a href="{{url('#')}}" class="nav-link">
            <i class="fas fa-home"></i>
              <p>
                DashBoard Pages
                <!-- <i class="right fas fa-angle-left  menu-open"></i> -->
              </p>
            </a>
          </li>
          <!-- End Dashbord  -->
          <!-- parcel management -->
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
                <a href="{{url('users/create')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Today parcel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('users')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Total parcel</p>
                </a>
              </li>
            </ul>
          </li>
          <!--End manage User -->
          <!-- merchant manage  -->
          <!-- <li class="nav-item has-treeview">
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
          </li> -->
          <!--End merchant manage  -->
          <!-- Catagory management -->
          <!-- <li class="nav-item has-treeview">
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
          </li> -->
          <!-- parcel management -->
          <!-- <li class="nav-item has-treeview">
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
          </li> -->
          <!-- delivery Boy management -->
          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-cube"></i>
              <p>
                Delivery Boy
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/deliveryboy/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Delivery boy</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/deliveryboy')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Delivery boy</p>
                </a>
              </li>
            </ul>
          </li> -->

          <!-- Zone management -->
          <!-- <li class="nav-item has-treeview">
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
          </li> -->
          <!-- General setting management --> 
            <!-- --Logout---->        
              <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link"
                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  <i class="fas fa-sign-out-alt"></i>
                    <p>Logout</p>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </li>
        </ul>
    </nav>
      <!-- /.sidebar-menu -->
  </div>
    <!-- /.sidebar -->
</aside>