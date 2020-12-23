 <ul class="navbar-nav bg-danger sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('emp-back-dash')}}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laptop"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Work<sup>Report</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{route('emp-back-dash')}}">Dashboard
        <!-- <a class="nav-link" href="{{url('/users')}}"> -->
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span></span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-file"></i>
          <span>Work Update</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="{{route('add-work')}}">Add Daily Work</a>
      <a class="collapse-item" href="{{route('view-work')}}">View Daily Work</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-list"></i>
          <span>Reports</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
           
            
            <a class="collapse-item" href="AddSubcategory.html">daily worklist</a>
            <a class="collapse-item" href="Viewsubcategory.html">project wised worklist</a>
            <a class="collapse-item" href="Viewsubcategory.html">user wised worklist</a>
          </div>
        </div>
      </li> -->

      <!-- Divider -->
      <hr class="sidebar-divider">

      

      <!-- Heading -->
      <!-- <div class="sidebar-heading">
        Addons
      </div> -->

      <!-- Nav Item - Pages Collapse Menu -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Product</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="Addproduct.html">Add product</a>
            <a class="collapse-item" href="Viewproduct.html">View product</a>
            
          </div>
        </div>
      </li> -->

      


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
<br>
<br>
<br>
     <!--  <div class="" align="center">
            <a href="{{ URL::previous() }}"><i class="fas fa-2x fa-chevron-left" style="color: white"></i></a>
            &nbsp;
            <a href="{{ URL::previous() }}"><i class="fas fa-2x fa-chevron-right" style="color: white"></i></a>
        </div> -->

      <!-- Sidebar Toggler (Sidebar) -->
      <!-- <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div> -->

    </ul>