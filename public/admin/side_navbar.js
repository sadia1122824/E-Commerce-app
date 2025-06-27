let side_navbar = () => {

  let side_navbar = document.getElementById('side-navbar');
  side_navbar.innerHTML = `<div class="left-sidenav">
            <div class="brand">
                <a href="index.html" class="logo">
                    <span>
                        <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                    </span>
                    <span>
                        <img src="assets/images/logo.png" alt="logo-large" class="logo-lg logo-light">
                        <img src="assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
                    </span>
                </a>
            </div>
            <div class="menu-content h-100" data-simplebar>
                <ul class="metismenu left-sidenav-menu">
                    <li class="menu-label mt-0">Main</li>
                    <li>
                        <a href="#"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Home Page</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item">
                            <a class="nav-link" href="/index">
                            <i class="bi bi-images me-1"></i> index
                            </a>
                           </li>
                           <li class="nav-item">
                            <a class="nav-link" href="/headerFlayar">
                            <i class="bi bi-images me-1"></i> Add Flayers
                            </a>
                           </li>

                            <li class="nav-item">
                            <a class="nav-link" href="/adminImageSection">
                            <i class="bi bi-columns-gap me-1"></i> Add Section
                            </a>
                            </li>

                            <li class="nav-item">
                             <a class="nav-link" href="/adminshopimage">
                             <i class="bi bi-shop me-1"></i> Add Shopimage Section
                              </a>
                              </li>

                             <li class="nav-item">
                            <a class="nav-link" href="/adminProducts">
                           <i class="bi bi-tags me-1"></i> Create Category
                            </a>
                            </li>

                            </ul>
                             <a href="#"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Create Products</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul>
                           
                          <li class="nav-item">
                           <a class="nav-link" href="/makeupadmin">
                           <i class="bi bi-brush me-1"></i> Makeup Products
                           </a>
                            </li>

                            <li class="nav-item">
                            <a class="nav-link" href="/adminjewllery">
                            <i class="bi bi-gem me-1"></i> Jewellery Products
                            </a>
                             </li>

                            <li class="nav-item">
                             <a class="nav-link" href="/admindress">
                             <i class="bi bi-person-lines-fill me-1"></i> Dress Products
                            </a>
                           </li>

                            <li class="nav-item">
                            <a class="nav-link" href="/adminshoes">
                            <i class="bi bi-bag-heart me-1"></i> Shoes Products
                           </a>
                            </li>

                               </ul>
                             <a href="#"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Show Records</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                             <ul>
                          

                           <li class="nav-item">
                          <a class="nav-link" href="/ordersget">
                          <i class="bi bi-cart-check me-1"></i> Show Orders
                             </a>
                             </li>

                        </ul>
                        <a href="#"> <i data-feather="home" class="align-self-center menu-icon"></i><span>create blog</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul>
                             <li class="nav-item">
                          <a class="nav-link" href="/blogAdmin">
                          <i class="bi bi-cart-check me-1"></i> blog post
                             </a>
                             </li>
                        </ul>

                    </li>
    
                   
    
                   <hr class="hr-dashed hr-menu">
                    
                          
                           
                     
                             
                            
                        </ul>                        
                    </li>
    
                  
                </ul>
    
             
            </div>
        </div>`
}
side_navbar()