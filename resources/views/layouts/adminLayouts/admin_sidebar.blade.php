<nav id="sidebar" class="">
  <div class="sidebar-header">
    <a href="index.html"><img class="main-logo" src="{{ asset('images/backend_images/logo/logo.png') }}" alt="" /></a>
    <strong><a href="index.html"><img src="{{ asset('images/backend_images/logo/logosn.png') }}" alt="" /></a></strong>
  </div>
  <div class="left-custom-menu-adp-wrap comment-scrollbar">
    <nav class="sidebar-nav left-sidebar-menu-pro">
      <ul class="metismenu" id="menu1">        
        <li>
          <a title="Landing Page" href="{{ route('adminDashboard')}}" aria-expanded="false"><span class="fas fa-tachometer-alt" aria-hidden="true"></span> <span class="mini-click-non">Member Dashboard</span></a>
        </li>
        <li>
          <a class="has-arrow" href="all-professors.html" aria-expanded="false"><i class="fas fa-user-tie"></i>&nbsp;&nbsp; <span class="mini-click-non">Admin Users</span></a>
          <ul class="submenu-angle" aria-expanded="false">
            <li><a title="Add new admin" href="{{ route('viewAdminUsers') }}"><span class="mini-sub-pro">View Admin Users</span></a></li>
            <li><a title="My Sponser" href="{{ route('addAdminUser') }}"><span class="mini-sub-pro">Add Admin User</span></a></li>
          </ul>
        </li>
        <li>
          <a class="has-arrow" href="all-professors.html" aria-expanded="false"><i class="far fa-user"></i>&nbsp;&nbsp; <span class="mini-click-non">Members</span></a>
          <ul class="submenu-angle" aria-expanded="false">
            <li><a title="Add new admin" href="{{ route('viewAllMembers') }}"><span class="mini-sub-pro">View Members</span></a></li>
          </ul>
        </li>
        <li>
          <a class="has-arrow" href="all-professors.html" aria-expanded="false"><i class="fab fa-product-hunt"></i>&nbsp;&nbsp; <span class="mini-click-non">Products</span></a>
          <ul class="submenu-angle" aria-expanded="false">
            <li><a title="View all Products" href="{{ route('viewProducts') }}"><span class="mini-sub-pro">View Products</span></a></li>
            <li><a title="Add New Product" href="{{ route('addEditProduct') }}"><span class="mini-sub-pro">Add New Product</span></a></li>
          </ul>
        </li>        
        <li>
          <a class="has-arrow" href="all-professors.html" aria-expanded="false"><i class="fas fa-wallet"></i>&nbsp;&nbsp; <span class="mini-click-non">Income</span></a>
          <ul class="submenu-angle" aria-expanded="false">
            <li><a title="Add new admin" href="#"><span class="mini-sub-pro">Income Table</span></a></li>
            <li><a title="My Sponser" href="#"><span class="mini-sub-pro">Other Income</span></a></li>
          </ul>
        </li>
        <li>
          <a class="has-arrow" href="#" aria-expanded="false"><i class="far fa-clipboard"></i>&nbsp;&nbsp; <span class="mini-click-non">Web Contents</span></a>
          <ul class="submenu-angle" aria-expanded="false">
            <li><a title="View all sliders" href="{{ route('viewSliders') }}"><span class="mini-sub-pro">View Sliders</span></a></li>
            <li><a title="Add Web Content" href="{{ route('viewWebContents') }}"><span class="mini-sub-pro">View Web Contents</span></a></li>
          </ul>
        </li>
        <li>
          <a class="has-arrow" href="all-professors.html" aria-expanded="false"><i class="fas fa-ticket-alt"></i>&nbsp;&nbsp; <span class="mini-click-non">Support</span></a>
          <ul class="submenu-angle" aria-expanded="false">
            <li><a title="Add new admin" href="#"><span class="mini-sub-pro">Open Ticket</span></a></li>
            <li><a title="My Sponser" href="#"><span class="mini-sub-pro">Ticket History</span></a></li>
          </ul>
        </li>               
      </ul>
    </nav>
  </div>
</nav>