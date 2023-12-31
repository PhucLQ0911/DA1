<div id="layoutSidenav_nav">
  <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
      <div class="nav">
        <div class="sb-sidenav-menu-heading">Statistical</div>
        <a class="nav-link" href="?act=dashboard">
          <div class="sb-nav-link-icon">
            <i class="fas fa-tachometer-alt"></i>
          </div>
          Dashboard
        </a>

        <!--  -->
        <div class="sb-sidenav-menu-heading">Manager</div>

        <!-- Category -->
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCate" aria-expanded="false" aria-controls="collapseLayouts">
          <div class="sb-nav-link-icon">
            <i class="fas fa-columns"></i>
          </div>
          Category
          <div class="sb-sidenav-collapse-arrow">
            <i class="fas fa-angle-down"></i>
          </div>
        </a>
        <div class="collapse" id="collapseCate" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
          <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link" href="?act=listCategory">List categories</a>
            <a class="nav-link" href="?act=addCategory">Add categories</a>
          </nav>
        </div>

        <!-- Product -->
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProduct" aria-expanded="false" aria-controls="collapseLayouts">
          <div class="sb-nav-link-icon">
            <i class="fas fa-columns"></i>
          </div>
          Product
          <div class="sb-sidenav-collapse-arrow">
            <i class="fas fa-angle-down"></i>
          </div>
        </a>
        <div class="collapse" id="collapseProduct" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
          <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link" href="?act=listProduct">List product</a>
            <a class="nav-link" href="?act=addProduct">Add product</a>
          </nav>
        </div>

        <!-- User -->
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseUser" aria-expanded="false" aria-controls="collapseLayouts">
          <div class="sb-nav-link-icon">
            <i class="fas fa-columns"></i>
          </div>
          User
          <div class="sb-sidenav-collapse-arrow">
            <i class="fas fa-angle-down"></i>
          </div>
        </a>
        <div class="collapse" id="collapseUser" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
          <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link" href="?act=listUser">List user</a>
            <a class="nav-link" href="?act=addUser">Add user</a>
          </nav>
        </div>

        <!-- Comment -->
        <a class="nav-link  btn" href="?act=listCommentPro">
          <div class="sb-nav-link-icon">
            <i class="fas fa-columns"></i>
          </div>
          Comment
        </a>

        <!-- Order -->

        <a class="nav-link btn" href="?act=listOrder">
          <div class="sb-nav-link-icon">
            <i class="fas fa-columns"></i>
          </div>
          List order
        </a>

      </div>



  </nav>
</div>