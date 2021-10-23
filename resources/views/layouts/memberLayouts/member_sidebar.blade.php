<nav id="sidebar" class="">
  <div class="sidebar-header">
    <a href="index.html"><img class="main-logo" src="{{ asset('images/backend_images/logo/logo.png') }}" alt="" /></a>
    <strong><a href="index.html"><img src="{{ asset('images/backend_images/logo/logosn.png') }}" alt="" /></a></strong>
  </div>
  <div class="left-custom-menu-adp-wrap comment-scrollbar">
    <nav class="sidebar-nav left-sidebar-menu-pro">
      <ul class="metismenu" id="menu1">        
        <li>
          <a title="Landing Page" href="{{ route('memberDashboard')}}" aria-expanded="false"><span class="fas fa-tachometer-alt" aria-hidden="true"></span> <span class="mini-click-non">Member Dashboard</span></a>
        </li>
        <li>
          <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Members</span></a>
          <ul class="submenu-angle" aria-expanded="false">
            <li><a title="My Sponser" href="{{route('viewMyMembers')}}"><span class="mini-sub-pro">My Members</span></a></li>
            <li><a title="My Matrix" href="{{route('viewMyMatrix')}}"><span class="mini-sub-pro">My Matrix</span></a></li>
          </ul>
        </li>
        <li>
          <a class="has-arrow" href="all-professors.html" aria-expanded="false"><i class="fas fa-thumbtack"></i>&nbsp;&nbsp; <span class="mini-click-non">E-pins</span></a>
          <ul class="submenu-angle" aria-expanded="false">
            <li><a title="Add new member" href="{{ route('addNewMember') }}"><span class="mini-sub-pro">Request New Pins</span></a></li>
            <li><a title="My Sponser" href="#"><span class="mini-sub-pro">View Pins</span></a></li>
          </ul>
        </li>
        <li>
          <a class="has-arrow" href="all-professors.html" aria-expanded="false"><i class="fas fa-wallet"></i>&nbsp;&nbsp; <span class="mini-click-non">Wallets</span></a>
          <ul class="submenu-angle" aria-expanded="false">
            <li><a title="Add new member" href="#"><span class="mini-sub-pro">My Wallet</span></a></li>
            <li><a title="My Sponser" href="#"><span class="mini-sub-pro">Transactions History</span></a></li>
          </ul>
        </li>
        <li>
          <a class="has-arrow" href="all-professors.html" aria-expanded="false"><i class="fas fa-ticket-alt"></i>&nbsp;&nbsp; <span class="mini-click-non">Support</span></a>
          <ul class="submenu-angle" aria-expanded="false">
            <li><a title="Add new member" href="#"><span class="mini-sub-pro">Open Ticket</span></a></li>
            <li><a title="My Sponser" href="#"><span class="mini-sub-pro">Ticket History</span></a></li>
          </ul> 
        </li>               
      </ul>
    </nav>
  </div>
</nav>