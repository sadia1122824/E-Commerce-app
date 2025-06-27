<!-- Topbar -->
<div class="alert alert-dismissible bg-dark text-white rounded-0 py-2 px-0 m-0 fade show" data-bs-theme="dark">
  <div class="container position-relative d-flex min-w-0">
    <div class="d-flex flex-nowrap align-items-center g-2 w-100 min-w-0 mx-auto mt-n1" style="max-width: 458px">
      <div class="nav me-2">
        <button type="button" class="nav-link fs-lg p-0" id="topbarPrev" aria-label="Prev">
          <i class="ci-chevron-left"></i>
        </button>
      </div>
      <div class="swiper fs-sm text-white" data-swiper="{
            &quot;spaceBetween&quot;: 24,
            &quot;loop&quot;: true,
            &quot;autoplay&quot;: {
              &quot;delay&quot;: 5000,
              &quot;disableOnInteraction&quot;: false
            },
            &quot;navigation&quot;: {
              &quot;prevEl&quot;: &quot;#topbarPrev&quot;,
              &quot;nextEl&quot;: &quot;#topbarNext&quot;
            }
          }">
        <div class="swiper-wrapper min-w-0" id="swipper_code">

        </div>
      </div>
      <div class="nav ms-2">
        <button type="button" class="nav-link fs-lg p-0" id="topbarNext" aria-label="Next">
          <i class="ci-chevron-right"></i>
        </button>
      </div>
    </div>
    <button type="button" class="btn-close position-static flex-shrink-0 p-1 ms-3 ms-md-n4" data-bs-dismiss="alert"
      aria-label="Close"></button>
  </div>
</div>


<!-- Navigation bar (Page header) -->
<header class="navbar navbar-expand-lg navbar-sticky bg-body d-block z-fixed p-0"
  data-sticky-navbar="{&quot;offset&quot;: 500}">
  <div class="container py-2 py-lg-3">
    <div class="d-flex align-items-center gap-3">

      <!-- Mobile offcanvas menu toggler (Hamburger) -->
      <button type="button" class="navbar-toggler me-4 me-md-2" data-bs-toggle="offcanvas" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


    </div>

    <!-- Navbar brand (Logo) -->
    <a class="navbar-brand fs-2 py-0 m-0 me-auto me-sm-n5 text-uppercase" href="#" id="companyName">Test</a>
    <div class="d-flex align-items-center">
      <button type="button" class="navbar-toggler d-none navbar-stuck-show me-3" data-bs-toggle="collapse"
        data-bs-target="#stuckNav" aria-controls="stuckNav" aria-expanded="false"
        aria-label="Toggle navigation in navbar stuck state">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="dropdown">
        <button type="button"
          class="theme-switcher btn btn-icon btn-lg btn-outline-secondary fs-lg border-0 rounded-circle animate-scale"
          data-bs-toggle="dropdown" aria-expanded="false" aria-label="Toggle theme (light)">
          <span class="theme-icon-active d-flex animate-target">
            <i class="ci-sun"></i>
          </span>
        </button>
        <ul class="dropdown-menu" style="--cz-dropdown-min-width: 9rem">
          <li>
            <button type="button" class="dropdown-item active" data-bs-theme-value="light" aria-pressed="true">
              <span class="theme-icon d-flex fs-base me-2">
                <i class="ci-sun"></i>
              </span>
              <span class="theme-label">Light</span>
              <i class="item-active-indicator ci-check ms-auto"></i>
            </button>
          </li>
          <li>
            <button type="button" class="dropdown-item" data-bs-theme-value="dark" aria-pressed="false">
              <span class="theme-icon d-flex fs-base me-2">
                <i class="ci-moon"></i>
              </span>
              <span class="theme-label">Dark</span>
              <i class="item-active-indicator ci-check ms-auto"></i>
            </button>
          </li>
          <li>
            <button type="button" class="dropdown-item" data-bs-theme-value="auto" aria-pressed="false">
              <span class="theme-icon d-flex fs-base me-2">
                <i class="ci-auto"></i>
              </span>
              <span class="theme-label">Auto</span>
              <i class="item-active-indicator ci-check ms-auto"></i>
            </button>
          </li>
        </ul>
      </div>

      <!-- Search toggle button visible on screens < 992px wide (lg breakpoint) -->
      <button type="button"
        class="btn btn-icon btn-lg fs-xl btn-outline-secondary border-0 rounded-circle animate-shake d-lg-none"
        data-bs-toggle="offcanvas" data-bs-target="#searchBox" aria-controls="searchBox" aria-label="Toggle search bar">

      </button>

      <!-- Account button visible on screens > 768px wide (md breakpoint) -->
      <a class="btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-shake d-none d-md-inline-flex"
        href="account-signin.html">

        <span class="visually-hidden">Account</span>
      </a>

      <!-- Wishlist button visible on screens > 768px wide (md breakpoint) -->
      <a class="btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-pulse d-none d-md-inline-flex"
        href="#!">

        <span class="visually-hidden">Wishlist</span>
      </a>

      <!-- Cart button -->
      <button type="button"
        class="btn btn-icon btn-lg fs-xl btn-outline-secondary position-relative border-0 rounded-circle animate-scale"
        data-bs-toggle="offcanvas" data-bs-target="#shoppingCart" aria-controls="shoppingCart"
        aria-label="Shopping cart">
        <!-- <span class="position-absolute top-0 start-100 badge fs-xs text-bg-primary rounded-pill mt-1 ms-n4 z-2" style="--cz-badge-padding-y: .25em; --cz-badge-padding-x: .42em">3</span> -->

      </button>
    </div>
  </div>

  <!-- Main navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
  <div class="collapse navbar-stuck-hide" id="stuckNav">
    <nav class="offcanvas offcanvas-start" id="navbarNav" tabindex="-1" aria-labelledby="navbarNavLabel">
      <div class="offcanvas-header py-3">
        <h5 class="offcanvas-title" id="navbarNavLabel">Browse <span id="company_name_id"></span></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>


      <div class="offcanvas-body pt-1 pb-3 py-lg-0">
        <div class="container pb-lg-2 px-0 px-lg-3">
          <div class="d-flex justify-content-center"> <!-- Center the content -->
            <ul class="navbar-nav" id="navbarContainer">
              <!-- Your nav items go here -->
            </ul>
          </div>
        </div>
      </div>
      

      <!-- Account and Wishlist buttons visible on screens < 768px wide (md breakpoint) -->
      <div class="offcanvas-header border-top px-0 py-3 mt-3 d-md-none">
        <div class="nav nav-justified w-100">
          <a class="nav-link border-end" href="account-signin.html">
            <i class="ci-user fs-lg opacity-60 me-2"></i>
            Account
          </a>
          <a class="nav-link" href="#!">
            <i class="ci-heart fs-lg opacity-60 me-2"></i>
            Wishlist
          </a>
        </div>
      </div>
    </nav>
  </div>
</header>

<script>
  let get_swiper = async () => {
    let response = await fetch('./apis/get_swiper.php');
    let swipper_code = document.getElementById('swipper_code');
    let data = await response.json();
    data.forEach(element => {
      swipper_code.innerHTML += `<div class="swiper-slide text-truncate text-center">${element.swiper}</div>`
    });
  }
  get_swiper();

  const currentUrl = window.location.href;

  let get_company_name = async () => {
    let company_name_id = document.getElementById('company_name_id');
    let response = await fetch('./apis/get_user_id.php', {
      method: "POST",
      body: JSON.stringify({
        "currentUrl": currentUrl,
      })
    });
    let data = await response.json();
    company_name_id.innerHTML = data;
  }
  get_company_name();

</script>