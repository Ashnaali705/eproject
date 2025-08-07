
<?php include 'dbconn.php'; ?>
<?php include 'includes/navbar.php'; ?>

      <div class="container-fluid page-body-wrapper">
 

 <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>

       <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#category" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Category</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="category">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="Add-category.php">Add category</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="View-category.php">View category</a>
                  </li>
                </ul>
              </div>
            </li>


            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#product" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">product</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="product">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="Add-product.php">Add product</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="Add-product.php">View product</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#employee" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">employee</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="employee">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="Add-employee.php">Add employee</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="View-employee.php">View employee</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#customer" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">customer</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="customer">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="Add-customer.php">Add customer</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="View-customer.php">View customer</a>
                  </li>
                </ul>
              </div>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#orders" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">orders</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="orders">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="Add-orders.php">Add orders</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="View-orders.php">View orders</a>
                  </li>
                </ul>
              </div>
            </li>

          </ul>
        </nav>
        <!-- partial -->


        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
         
          

            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">View Product</h4>
                    <p class="card-description"> Add class <code>.table</code>
                    </p>
                    <table class="table">
                      <thead>
                        <tr>
                        
                          <th>Name</th>
                          <th>Description</th>
                          <th>Price</th>
                          <!-- <th>Image</th> -->
                           <th>Action</th>

                        </tr>
                      </thead>
                      <tbody>
                      
                          <tr>
                          <td>Hand bad</td>
                           <td>different color available</td>
                          <td>1000</td>
                          <!-- <td><img src="images/product/handbag.jpg" alt="Hand Bag" style="width: 50px; height: 50px;"></td> -->
                            <td>
                              <label class="badge
                           badge-danger">Edit</label>
                           <label class="badge
                            badge-success">delete</label>
                          </td>
                        </tr>
                  
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>



          </div>
          <!-- content-wrapper ends -->
          </div>


          <?php include 'includes/footer.php'; ?>