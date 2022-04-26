<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <div class="d-flex sidebar-profile">
        <div class="sidebar-profile-image">
          <img src="{{asset('assets')}}/admin/images/faces/face29.png" alt="image">
          <span class="sidebar-status-indicator"></span>
        </div>
        <div class="sidebar-profile-name">
          <p class="sidebar-name">
            Kenneth Osborne
          </p>
          <p class="sidebar-designation">
            Welcome
          </p>
        </div>
      </div>
      <div class="nav-search">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Type to search..." aria-label="search" aria-describedby="search">
          <div class="input-group-append">
            <span class="input-group-text" id="search">
              <i class="typcn typcn-zoom"></i>
            </span>
          </div>
        </div>
      </div>
      <p class="sidebar-menu-title">Dash menu</p>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/admin/category">
      <ion-icon name="home-sharp" style="color:blue"></ion-icon>Dashboard
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/admin/category">
        <ion-icon name="apps-sharp" style="color:cyan"></ion-icon>Categories
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/admin/book">
        <ion-icon name="book-sharp" style="color:red"></ion-icon>Books
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/admin/comment">
        <ion-icon name="git-commit-sharp" style="color:lightseagreen"></ion-icon>Comments
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/admin/faq">
        <ion-icon name="help-circle-sharp" style="color:greenyellow"></ion-icon>FAQ
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/admin/message">
        <ion-icon name="mail-outline" style="color:yellow"></ion-icon>Messages
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/admin/user">
        <ion-icon name="people-sharp" style="color:crimson"></ion-icon>Users
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/admin/social">
        <ion-icon name="mail-sharp" style="color:mediumslateblue"></ion-icon>Social Media
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="typcn typcn-briefcase menu-icon" style="color:salmon"></i>
        <span class="menu-title">Reservations</span>
        <i class="typcn typcn-chevron-right menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">New Orders</a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Accepted Orders</a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Shipping Orders</a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Completed Orders</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="pages/documentation/documentation.html">

        <i class="typcn typcn-document-text menu-icon"></i>
        <span class="menu-title">Documentation</span>
      </a>
    </li>
  </ul>
  <ul class="sidebar-legend">
    <li>
      <p class="sidebar-menu-title">Labels</p>


    <li class="nav-item">
      <a href="/admin/settings" class="nav-link">
        <ion-icon name="settings-sharp" style="color:lightseagreen"></ion-icon>Settings
      </a>
    </li>
    </li>
  </ul>
</nav>