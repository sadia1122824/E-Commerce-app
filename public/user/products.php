<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">
<?php include('./includes/headerLinks.php') ?>
<script>
</script>

<body>

  <?php include('./includes/header.php') ?>
  <main class="content-wrapper">
    <section class="bg-body-tertiary">
      <div class="container">
        <div class="row">

        </div>
      </div>
    </section>



    <!-- Product gallery and details -->
    <section class="container">
      <div class="row">

        <!-- Gallery -->
        <div class="col-md-6 pb-4 pb-md-0 mb-2 mb-sm-3 mb-md-0">
          <div class="position-relative">
            <span class="badge text-bg-danger position-absolute top-0 start-0 z-2 mt-3 mt-sm-4 ms-3 ms-sm-4">Sale</span>
            <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-lg bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-2 mt-sm-3 me-2 me-sm-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-sm" data-bs-title="Add to Wishlist" aria-label="Add to Wishlist">
              <i class="ci-heart animate-target"></i>
            </button>
            <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden mb-3 mb-sm-4 mb-md-3 mb-lg-4" href="assets/img/shop/fashion/product/01.png" data-glightbox="" data-gallery="product-gallery">
              <i class="ci-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
              <div class="ratio hover-effect-target bg-body-tertiary rounded" style="--cz-aspect-ratio: calc(706 / 636 * 100%)">
                <img src="assets/img/shop/fashion/product/01.png" alt="Image">
              </div>
            </a>
          </div>
          <div class="collapse d-md-block" id="morePictures">
            <div class="row row-cols-2 g-3 g-sm-4 g-md-3 g-lg-4 pb-3 pb-sm-4 pb-md-0">
              <div class="col">
                <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden" href="assets/img/shop/fashion/product/02.png" data-glightbox="" data-gallery="product-gallery">
                  <i class="ci-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                  <div class="ratio hover-effect-target bg-body-tertiary rounded" style="--cz-aspect-ratio: calc(342 / 306 * 100%)">
                    <img src="assets/img/shop/fashion/product/02.png" alt="Image">
                  </div>
                </a>
              </div>
              <div class="col">
                <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden" href="assets/img/shop/fashion/product/03.png" data-glightbox="" data-gallery="product-gallery">
                  <i class="ci-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                  <div class="ratio hover-effect-target bg-body-tertiary rounded" style="--cz-aspect-ratio: calc(342 / 306 * 100%)">
                    <img src="assets/img/shop/fashion/product/03.png" alt="Image">
                  </div>
                </a>
              </div>
              <div class="col">
                <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden" href="assets/img/shop/fashion/product/04.png" data-glightbox="" data-gallery="product-gallery">
                  <i class="ci-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                  <div class="ratio hover-effect-target bg-body-tertiary rounded" style="--cz-aspect-ratio: calc(342 / 306 * 100%)">
                    <img src="assets/img/shop/fashion/product/04.png" alt="Image">
                  </div>
                </a>
              </div>
              <div class="col">
                <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden" href="assets/img/shop/fashion/product/05.png" data-glightbox="" data-gallery="product-gallery">
                  <i class="ci-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                  <div class="ratio hover-effect-target bg-body-tertiary rounded" style="--cz-aspect-ratio: calc(342 / 306 * 100%)">
                    <img src="assets/img/shop/fashion/product/05.png" alt="Image">
                  </div>
                </a>
              </div>
            </div>
          </div>
          <button type="button" class="btn btn-lg btn-outline-secondary w-100 collapsed d-md-none" data-bs-toggle="collapse" data-bs-target="#morePictures" data-label-collapsed="Show more pictures" data-label-expanded="Show less pictures" aria-expanded="false" aria-controls="morePictures" aria-label="Show / hide pictures">
            <i class="collapse-toggle-icon ci-chevron-down fs-lg ms-2 me-n2"></i>
          </button>
        </div>


        <div class="col-md-6" id="productDetails">
          
        </div>
      </div>
    </section>


    <!-- Sticky product preview + Add to cart CTA -->
    <section class="sticky-product-banner sticky-top" data-sticky-element="">
      <div class="sticky-product-banner-inner pt-5">
        <div class="navbar container flex-nowrap align-items-center bg-body pt-4 pt-lg-5 mt-lg-n2">
          <div class="d-flex align-items-center min-w-0 ms-lg-2 me-3">
            <div class="ratio ratio-1x1 flex-shrink-0" style="width: 50px">
              <img src="assets/img/shop/fashion/product/thumb.png" alt="Image">
            </div>
            <h4 class="h6 fw-medium d-none d-lg-block ps-3 mb-0">Denim midi skirt with pockets</h4>
            <div class="w-100 min-w-0 d-lg-none ps-2">
              <h4 class="fs-sm fw-medium text-truncate mb-1">Denim midi skirt with pockets</h4>
              <div class="h6 mb-0">$126.50 <del class="fs-xs fw-normal text-body-tertiary">$156.00</del></div>
            </div>
          </div>
          <div class="h4 d-none d-lg-block mb-0 ms-auto me-4">$126.50 <del class="fs-sm fw-normal text-body-tertiary">$156.00</del></div>
          <div class="d-flex gap-2">
            <button type="button" class="btn btn-icon btn-secondary animate-pulse" aria-label="Add to Wishlist">
              <i class="ci-heart fs-base animate-target"></i>
            </button>
            <button type="button" class="btn btn-dark ms-auto d-none d-md-inline-flex px-4">Add to cart</button>
            <button type="button" class="btn btn-icon btn-dark animate-slide-end ms-auto d-md-none" aria-label="Add to Cart">
              <i class="ci-shopping-cart fs-base animate-target"></i>
            </button>
          </div>
        </div>
      </div>
    </section>


    <!-- Product details tabs -->
    <section class="container pt-5 mt-2 mt-sm-3 mt-lg-4 mt-xl-5">

      <!-- Nav tabs -->
      <ul class="nav nav-underline flex-nowrap border-bottom" role="tablist">
        <li class="nav-item me-md-1" role="presentation">
          <button type="button" class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description-tab-pane" role="tab" aria-controls="description-tab-pane" aria-selected="true">
            Description
          </button>
        </li>
        <li class="nav-item me-md-1" role="presentation">
          <button type="button" class="nav-link" id="washing-tab" data-bs-toggle="tab" data-bs-target="#washing-tab-pane" role="tab" aria-controls="washing-tab-pane" aria-selected="false">
            Washing<span class="d-none d-md-inline">&nbsp;instructions</span>
          </button>
        </li>
        <li class="nav-item me-md-1" role="presentation">
          <button type="button" class="nav-link" id="delivery-tab" data-bs-toggle="tab" data-bs-target="#delivery-tab-pane" role="tab" aria-controls="delivery-tab-pane" aria-selected="false">
            Delivery<span class="d-none d-md-inline">&nbsp;and returns</span>
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button type="button" class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews-tab-pane" role="tab" aria-controls="reviews-tab-pane" aria-selected="false">
            Reviews<span class="d-none d-md-inline">&nbsp;(23)</span>
          </button>
        </li>
      </ul>

      <div class="tab-content pt-4 mt-sm-1 mt-md-3">

        <!-- Description tab -->
        <div class="tab-pane fade show active" id="description-tab-pane" role="tabpanel" aria-labelledby="description-tab">
          <div class="row">
            <div class="col-lg-6 fs-sm">
              <ul class="list-unstyled">
                <li>Model's height: <span class="text-dark-emphasis fw-semibold">176 cm</span></li>
                <li>The model is wearing size: <span class="text-dark-emphasis fw-semibold">S/36</span></li>
              </ul>
              <p>This skirt is designed to fall just below the knee, offering a flattering length that is suitable for various occasions. It is made from a soft and lightweight fabric that drapes beautifully, ensuring comfort and ease of movement. The blue color adds a vibrant touch, making it a standout piece in your wardrobe.</p>
              <ul>
                <li>fitted waistband</li>
                <li>fastened with a hidden zipper</li>
                <li>midi length</li>
              </ul>
              <p class="mb-0">The blue color of the skirt allows for easy pairing with a variety of tops. You can opt for a crisp white blouse for a classic and polished outfit, or choose a patterned or contrasting-colored top for a more vibrant and fashion-forward look.</p>
            </div>
            <div class="col-lg-6 col-xl-5 offset-xl-1">
              <div class="row row-cols-2 g-4 my-0 my-lg-n2">
                <div class="col">
                  <div class="py-md-1 py-lg-2 pe-sm-2">
                    <i class="ci-feather fs-3 text-body-emphasis mb-2 mb-md-3"></i>
                    <h6 class="fs-sm mb-2">Lightweight</h6>
                    <p class="fs-sm mb-0">Designed with lightweight European fabrics, perfect for life on the go.</p>
                  </div>
                </div>
                <div class="col">
                  <div class="py-md-1 py-lg-2 ps-sm-2">
                    <i class="ci-hanger fs-3 text-body-emphasis mb-2 mb-md-3"></i>
                    <h6 class="fs-sm mb-2">Perfect fit</h6>
                    <p class="fs-sm mb-0">Our clothing is designed to fit any body type, find your perfect look!</p>
                  </div>
                </div>
                <div class="col">
                  <div class="py-md-1 py-lg-2 pe-sm-2">
                    <i class="ci-delivery-2 fs-3 text-body-emphasis mb-2 mb-md-3"></i>
                    <h6 class="fs-sm mb-2">Free delivery</h6>
                    <p class="fs-sm mb-0">Get free door-to-door delivery for all orders over $250.</p>
                  </div>
                </div>
                <div class="col">
                  <div class="py-md-1 py-lg-2 ps-sm-2">
                    <i class="ci-leaf fs-3 text-body-emphasis mb-2 mb-md-3"></i>
                    <h6 class="fs-sm mb-2">Sustainability</h6>
                    <p class="fs-sm mb-0">We are proud to offer a Lifetime Guarantee on all products.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Washing instructions tab -->
        <div class="tab-pane fade fs-sm" id="washing-tab-pane" role="tabpanel" aria-labelledby="washing-tab">
          <p>Following below washing instructions can help prolong the life of your denim skirt and keep it looking its best for longer.</p>
          <div class="row row-cols-1 row-cols-md-2">
            <div class="col mb-3 mb-md-0">
              <dl class="pe-lg-2 pe-xl-3 mb-0">
                <dt>Machine wash cold</dt>
                <dd>Turn the denim midi skirt inside out before placing it in the washing machine. Use cold water to help preserve the color and fabric integrity.</dd>
                <dt>Gentle cycle</dt>
                <dd>Select the gentle or delicate cycle on your washing machine to prevent excessive agitation, which can cause unnecessary wear and tear on the denim.</dd>
                <dt>Mild detergent</dt>
                <dd>Use a mild detergent specifically formulated for denim or delicate fabrics. Avoid using bleach or harsh chemicals, as they can damage the denim fibers.</dd>
                <dt>Avoid overloading</dt>
                <dd class="mb-0">Do not overcrowd the washing machine with too many garments. This can lead to inadequate cleaning and may cause friction that damages the denim skirt.</dd>
              </dl>
            </div>
            <div class="col">
              <dl class="ps-lg-2 ps-xl-3 mb-0">
                <dt>Wash separately</dt>
                <dd>Wash the denim midi skirt separately from items with zippers, buttons, or other sharp accessories that could snag or damage the fabric.</dd>
                <dt>Skip fabric softener</dt>
                <dd>Avoid using fabric softener, as it can leave a residue on the denim and reduce its natural stiffness, which is characteristic of denim garments.</dd>
                <dt>Air dry or tumble dry low</dt>
                <dd>After washing, reshape the skirt and either lay it flat to air dry or tumble dry on a low heat setting. Avoid high heat, as it can shrink or distort the denim.</dd>
                <dt>Ironing</dt>
                <dd class="mb-0">If necessary, iron the denim midi skirt inside out using a low to medium heat setting. Avoid ironing directly on any embellishments or pockets to prevent damage.</dd>
              </dl>
            </div>
          </div>
        </div>

        <!-- Delivery and returns tab -->
        <div class="tab-pane fade fs-sm" id="delivery-tab-pane" role="tabpanel" aria-labelledby="delivery-tab">
          <div class="row row-cols-1 row-cols-md-2">
            <div class="col mb-3 mb-md-0">
              <div class="pe-lg-2 pe-xl-3">
                <h6>Delivery</h6>
                <p>We strive to deliver your denim midi skirt with pockets to you as quickly as possible. Our estimated delivery times are as follows:</p>
                <ul class="list-unstyled">
                  <li>Standard delivery: <span class="text-dark-emphasis fw-semibold">Within 3-7 business days</span></li>
                  <li>Express delivery: <span class="text-dark-emphasis fw-semibold">Within 1-3 business days</span></li>
                </ul>
                <p>Please note that delivery times may vary depending on your location and any ongoing promotions or holidays. You can track your order using the provided tracking number once your package has been dispatched.</p>
              </div>
            </div>
            <div class="col">
              <div class="ps-lg-2 ps-xl-3">
                <h6>Returns</h6>
                <p>We want you to be completely satisfied with your denim midi skirt with pockets. If for any reason you are not happy with your purchase, you can return it within 30 days of receiving your order for a full refund or exchange.</p>
                <p>To be eligible for a return, the skirt must be unused, unwashed, and in its original condition with tags attached. Please ensure that all packaging is intact when returning the item.</p>
                <p class="mb-0">To initiate a return, please contact our customer service team with your order number and reason for the return. We will provide you with a return shipping label and instructions on how to proceed. Please note that shipping fees are non-refundable.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Reviews tab -->
        <div class="tab-pane fade" id="reviews-tab-pane" role="tabpanel" aria-labelledby="reviews-tab">

          <!-- Heading + Add review button -->
          <div class="d-sm-flex align-items-center justify-content-between border-bottom pb-2 pb-sm-3">
            <div class="mb-3 me-sm-3">
              <h2 class="h5 pb-2 mb-1">Customer reviews</h2>
              <div class="d-flex align-items-center text-body-secondary fs-sm">
                <div class="d-flex gap-1 me-2">
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star text-body-tertiary opacity-75"></i>
                </div>
                Based on 23 reviews
              </div>
            </div>
            <button type="button" class="btn btn-outline-dark mb-3" data-bs-toggle="modal" data-bs-target="#reviewForm">Leave a review</button>
          </div>

          <!-- Review -->
          <div class="border-bottom py-4">
            <div class="row py-sm-2">
              <div class="col-md-4 col-lg-3 mb-3 mb-md-0">
                <div class="d-flex h6 mb-2">
                  Rafael Marquez
                  <i class="ci-check-circle text-success mt-1 ms-2" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Verified customer"></i>
                </div>
                <div class="fs-sm mb-2 mb-md-3">June 25, 2024</div>
                <div class="d-flex gap-1 fs-sm">
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star-filled text-warning"></i>
                </div>
              </div>
              <div class="col-md-8 col-lg-9">
                <p class="mb-md-4">Absolutely love this chair! It's exactly what I was looking for to complete my Scandinavian-themed living room. The wooden legs add a touch of warmth and the design is timeless. Comfortable and sturdy, couldn't be happier with my purchase!</p>
                <div class="d-sm-flex justify-content-between">
                  <div class="d-flex align-items-center fs-sm fw-medium text-dark-emphasis pb-2 pb-sm-0 mb-1 mb-sm-0">
                    <i class="ci-check fs-base me-1" style="margin-top: .125rem"></i>
                    Yes, I recommend this product
                  </div>
                  <div class="d-flex align-items-center gap-2">
                    <div class="fs-sm fw-medium text-dark-emphasis me-1">Helpful?</div>
                    <button type="button" class="btn btn-sm btn-secondary">
                      <i class="ci-thumbs-up fs-sm ms-n1 me-1"></i>
                      0
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Review -->
          <div class="border-bottom py-4">
            <div class="row py-sm-2">
              <div class="col-md-4 col-lg-3 mb-3 mb-md-0">
                <div class="d-flex h6 mb-2">
                  Bessie Cooper
                  <i class="ci-check-circle text-success mt-1 ms-2" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Verified customer"></i>
                </div>
                <div class="fs-sm mb-2 mb-md-3">April 8, 2024</div>
                <div class="d-flex gap-1 fs-sm">
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star text-body-tertiary opacity-75"></i>
                  <i class="ci-star text-body-tertiary opacity-75"></i>
                </div>
              </div>
              <div class="col-md-8 col-lg-9">
                <p class="mb-md-4">While the design of the chair is nice and it does add a touch of retro vibe to my space, I found the quality to be lacking. After just a few weeks of use, one of the legs started to wobble, and the seat isn't as comfortable as I had hoped. Disappointed with the durability. Additionally, the assembly process was a bit frustrating as some of the screws didn't align properly with the holes, requiring extra effort to secure them in place. Overall, while it looks good, I expected better quality for the price.</p>
                <div class="d-sm-flex justify-content-between">
                  <div class="d-flex align-items-center fs-sm fw-medium text-dark-emphasis pb-2 pb-sm-0 mb-1 mb-sm-0">
                    <i class="ci-close fs-base me-1" style="margin-top: .125rem"></i>
                    No, I don't recommend this product
                  </div>
                  <div class="d-flex align-items-center gap-2">
                    <div class="fs-sm fw-medium text-dark-emphasis me-1">Helpful?</div>
                    <button type="button" class="btn btn-sm btn-secondary">
                      <i class="ci-thumbs-up fs-sm ms-n1 me-1"></i>
                      3
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Review -->
          <div class="border-bottom py-4">
            <div class="row py-sm-2">
              <div class="col-md-4 col-lg-3 mb-3 mb-md-0">
                <div class="d-flex h6 mb-2">Savannah Nguyen</div>
                <div class="fs-sm mb-2 mb-md-3">March 30, 2024</div>
                <div class="d-flex gap-1 fs-sm">
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star text-body-tertiary opacity-75"></i>
                </div>
              </div>
              <div class="col-md-8 col-lg-9">
                <p class="mb-md-4">Great addition to our dining room! The chair looks fantastic and is quite comfortable for short sits. Assembly was a breeze, and the quality seems decent for the price. Overall, satisfied with the purchase.</p>
                <div class="d-sm-flex justify-content-between">
                  <div class="d-flex align-items-center fs-sm fw-medium text-dark-emphasis pb-2 pb-sm-0 mb-1 mb-sm-0">
                    <i class="ci-check fs-base me-1" style="margin-top: .125rem"></i>
                    Yes, I recommend this product
                  </div>
                  <div class="d-flex align-items-center gap-2">
                    <div class="fs-sm fw-medium text-dark-emphasis me-1">Helpful?</div>
                    <button type="button" class="btn btn-sm btn-secondary">
                      <i class="ci-thumbs-up fs-sm ms-n1 me-1"></i>
                      7
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Review -->
          <div class="border-bottom py-4">
            <div class="row py-sm-2">
              <div class="col-md-4 col-lg-3 mb-3 mb-md-0">
                <div class="d-flex h6 mb-2">Daniel Adams</div>
                <div class="fs-sm mb-2 mb-md-3">March 16, 2024</div>
                <div class="d-flex gap-1 fs-sm">
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star-filled text-warning"></i>
                </div>
              </div>
              <div class="col-md-8 col-lg-9">
                <p class="mb-md-4">Couldn't be happier with this chair! It's not only stylish but also incredibly comfortable. The size is perfect for our space, and the wooden legs feel sturdy. Definitely recommend it to anyone looking for a chic and functional seating option.</p>
                <div class="d-sm-flex justify-content-between">
                  <div class="d-flex align-items-center fs-sm fw-medium text-dark-emphasis pb-2 pb-sm-0 mb-1 mb-sm-0">
                    <i class="ci-check fs-base me-1" style="margin-top: .125rem"></i>
                    Yes, I recommend this product
                  </div>
                  <div class="d-flex align-items-center gap-2">
                    <div class="fs-sm fw-medium text-dark-emphasis me-1">Helpful?</div>
                    <button type="button" class="btn btn-sm btn-secondary">
                      <i class="ci-thumbs-up fs-sm ms-n1 me-1"></i>
                      14
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Review -->
          <div class="border-bottom py-4">
            <div class="row py-sm-2">
              <div class="col-md-4 col-lg-3 mb-3 mb-md-0">
                <div class="d-flex h6 mb-2">Kristin Watson</div>
                <div class="fs-sm mb-2 mb-md-3">February 7, 2024</div>
                <div class="d-flex gap-1 fs-sm">
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star text-body-tertiary opacity-75"></i>
                </div>
              </div>
              <div class="col-md-8 col-lg-9">
                <p class="mb-md-4">The chair is nice, but it's not the most comfortable for extended periods of sitting. The wooden legs give it a nice aesthetic, but they seem a bit fragile. It's a decent chair for occasional use, but I wouldn't recommend it for daily use or long sitting sessions.</p>
                <div class="d-sm-flex justify-content-between">
                  <div class="d-flex align-items-center fs-sm fw-medium text-dark-emphasis pb-2 pb-sm-0 mb-1 mb-sm-0">
                    <i class="ci-check fs-base me-1" style="margin-top: .125rem"></i>
                    Yes, I recommend this product
                  </div>
                  <div class="d-flex align-items-center gap-2">
                    <div class="fs-sm fw-medium text-dark-emphasis me-1">Helpful?</div>
                    <button type="button" class="btn btn-sm btn-secondary">
                      <i class="ci-thumbs-up fs-sm ms-n1 me-1"></i>
                      9
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Pagination -->
          <nav class="mt-3 pt-2 pt-md-3" aria-label="Reviews pagination">
            <ul class="pagination">
              <li class="page-item active" aria-current="page">
                <span class="page-link">
                  1
                  <span class="visually-hidden">(current)</span>
                </span>
              </li>
              <li class="page-item">
                <a class="page-link" href="#!">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#!">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#!">4</a>
              </li>
              <li class="page-item">
                <span class="page-link pe-none">...</span>
              </li>
              <li class="page-item">
                <a class="page-link" href="#!">6</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </section>


    <!-- Complete look (carousel) -->
    <section class="container pt-5 mt-2 mt-sm-3 mt-lg-4 mt-xl-5">
      <div class="d-flex align-items-center justify-content-between pt-1 pt-lg-0 pb-3 mb-2 mb-sm-3">
        <h2 class="mb-0 me-3">Complete your look</h2>

        <!-- Slider prev/next buttons -->
        <div class="d-flex gap-2">
          <button type="button" class="btn btn-icon btn-outline-secondary animate-slide-start rounded-circle me-1" id="lookPrev" aria-label="Prev">
            <i class="ci-chevron-left fs-lg animate-target"></i>
          </button>
          <button type="button" class="btn btn-icon btn-outline-secondary animate-slide-end rounded-circle" id="lookNext" aria-label="Next">
            <i class="ci-chevron-right fs-lg animate-target"></i>
          </button>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 order-md-2 mb-4 mb-md-0">

          <!-- Slider -->
          <div class="swiper" data-swiper="{
              &quot;slidesPerView&quot;: 1,
              &quot;spaceBetween&quot;: 40,
              &quot;loop&quot;: true,
              &quot;navigation&quot;: {
                &quot;prevEl&quot;: &quot;#lookPrev&quot;,
                &quot;nextEl&quot;: &quot;#lookNext&quot;
              }
            }">
            <div class="swiper-wrapper">

              <!-- Slide -->
              <div class="swiper-slide">
                <div class="row row-cols-2">

                  <!-- Item -->
                  <div class="col">
                    <div class="animate-underline hover-effect-opacity">
                      <div class="position-relative mb-3">
                        <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                          <i class="ci-heart animate-target"></i>
                        </button>
                        <a class="d-flex bg-body-tertiary rounded p-3" href="#!">
                          <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                            <img src="assets/img/shop/fashion/02.png" alt="Image">
                          </div>
                        </a>
                        <div class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                          <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                            <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">S</span>
                            <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">M</span>
                            <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">L</span>
                            <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">XL</span>
                            <div class="nav">
                              <a class="nav-link fs-xs text-body-tertiary py-1 px-2" href="#!">+1</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="nav mb-2">
                        <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="#!">
                          <span class="text-truncate">Cotton lace blouse with necklace</span>
                        </a>
                      </div>
                      <div class="h6 mb-2">$54.00</div>
                      <div class="position-relative">
                        <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+2 colors</div>
                        <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                          <input type="radio" class="btn-check" name="colors-2" id="color-2-1" checked="">
                          <label for="color-2-1" class="btn btn-color fs-base" style="color: #dcb1b1">
                            <span class="visually-hidden">Pink</span>
                          </label>
                          <input type="radio" class="btn-check" name="colors-2" id="color-2-2">
                          <label for="color-2-2" class="btn btn-color fs-base" style="color: #ced6f0">
                            <span class="visually-hidden">Blue</span>
                          </label>
                          <input type="radio" class="btn-check" name="colors-2" id="color-2-3">
                          <label for="color-2-3" class="btn btn-color fs-base" style="color: #e1e0cf">
                            <span class="visually-hidden">Mustard</span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Item -->
                  <div class="col">
                    <div class="animate-underline hover-effect-opacity">
                      <div class="position-relative mb-3">
                        <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                          <i class="ci-heart animate-target"></i>
                        </button>
                        <a class="d-flex bg-body-tertiary rounded p-3" href="#!">
                          <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                            <img src="assets/img/shop/fashion/07.png" alt="Image">
                          </div>
                        </a>
                        <div class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                          <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                            <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">6</span>
                            <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">6.5</span>
                            <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">7</span>
                            <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">7.5</span>
                            <div class="nav">
                              <a class="nav-link fs-xs text-body-tertiary py-1 px-2" href="#!">+4</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="nav mb-2">
                        <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="#!">
                          <span class="text-truncate">Black massive women's boots</span>
                        </a>
                      </div>
                      <div class="h6 mb-2">$160.00</div>
                      <div class="position-relative">
                        <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+1 color</div>
                        <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                          <input type="radio" class="btn-check" name="colors-7" id="color-7-1" checked="">
                          <label for="color-7-1" class="btn btn-color fs-base" style="color: #364254">
                            <span class="visually-hidden">Black</span>
                          </label>
                          <input type="radio" class="btn-check" name="colors-7" id="color-7-2">
                          <label for="color-7-2" class="btn btn-color fs-base" style="color: #e0e5eb">
                            <span class="visually-hidden">White</span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Slide -->
              <div class="swiper-slide">
                <div class="row row-cols-2">

                  <!-- Item -->
                  <div class="col">
                    <div class="animate-underline hover-effect-opacity">
                      <div class="position-relative mb-3">
                        <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                          <i class="ci-heart animate-target"></i>
                        </button>
                        <a class="d-flex bg-body-tertiary rounded p-3" href="#!">
                          <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                            <img src="assets/img/shop/fashion/09.png" alt="Image">
                          </div>
                        </a>
                        <div class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                          <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                            <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">XS</span>
                            <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">S</span>
                            <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">M</span>
                            <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">L</span>
                            <div class="nav">
                              <a class="nav-link fs-xs text-body-tertiary py-1 px-2" href="#!">+3</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="nav mb-2">
                        <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="#!">
                          <span class="text-truncate">White cotton blouse with necklace</span>
                        </a>
                      </div>
                      <div class="h6 mb-2">$38.50</div>
                      <div class="position-relative">
                        <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+1 color</div>
                        <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                          <input type="radio" class="btn-check" name="colors-9" id="color-9-1" checked="">
                          <label for="color-9-1" class="btn btn-color fs-base" style="color: #e0e5eb">
                            <span class="visually-hidden">White</span>
                          </label>
                          <input type="radio" class="btn-check" name="colors-9" id="color-9-2">
                          <label for="color-9-2" class="btn btn-color fs-base" style="color: #364254">
                            <span class="visually-hidden">Black</span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Item -->
                  <div class="col">
                    <div class="animate-underline hover-effect-opacity">
                      <div class="position-relative mb-3">
                        <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                          <i class="ci-heart animate-target"></i>
                        </button>
                        <a class="d-flex bg-body-tertiary rounded p-3" href="#!">
                          <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                            <img src="assets/img/shop/fashion/08.png" alt="Image">
                          </div>
                        </a>
                        <div class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                          <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                            <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">6.5</span>
                            <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">7</span>
                            <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">7.5</span>
                            <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">8</span>
                            <div class="nav">
                              <a class="nav-link fs-xs text-body-tertiary py-1 px-2" href="#!">+3</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="nav mb-2">
                        <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="#!">
                          <span class="text-truncate">Leather sneakers with golden laces</span>
                        </a>
                      </div>
                      <div class="h6 mb-2">$74.00</div>
                      <div class="position-relative">
                        <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+2 colors</div>
                        <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                          <input type="radio" class="btn-check" name="colors-8" id="color-8-1" checked="">
                          <label for="color-8-1" class="btn btn-color fs-base" style="color: #b1aa9b">
                            <span class="visually-hidden">Cream</span>
                          </label>
                          <input type="radio" class="btn-check" name="colors-8" id="color-8-2">
                          <label for="color-8-2" class="btn btn-color fs-base" style="color: #496c33">
                            <span class="visually-hidden">Dark green</span>
                          </label>
                          <input type="radio" class="btn-check" name="colors-8" id="color-8-3">
                          <label for="color-8-3" class="btn btn-color fs-base" style="color: #364254">
                            <span class="visually-hidden">Black</span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Product image -->
        <div class="col-md-6 order-md-1">
          <img src="assets/img/shop/fashion/product/01.png" class="d-block bg-body-tertiary rounded" alt="Image">
        </div>
      </div>
    </section>


    <!-- Viewed products (carousel) -->
    <section class="container pt-5 mt-2 mt-sm-3 mt-lg-4 mt-xl-5">
      <div class="d-flex align-items-center justify-content-between pt-1 pt-lg-0 pb-3 mb-2 mb-sm-3">
        <h2 class="mb-0 me-3">Viewed products</h2>

        <!-- Slider prev/next buttons -->
        <div class="d-flex gap-2">
          <button type="button" class="btn btn-icon btn-outline-secondary animate-slide-start rounded-circle me-1" id="viewedPrev" aria-label="Prev">
            <i class="ci-chevron-left fs-lg animate-target"></i>
          </button>
          <button type="button" class="btn btn-icon btn-outline-secondary animate-slide-end rounded-circle" id="viewedNext" aria-label="Next">
            <i class="ci-chevron-right fs-lg animate-target"></i>
          </button>
        </div>
      </div>

      <!-- Slider -->
      <div class="swiper" data-swiper="{
          &quot;slidesPerView&quot;: 2,
          &quot;spaceBetween&quot;: 24,
          &quot;loop&quot;: true,
          &quot;navigation&quot;: {
            &quot;prevEl&quot;: &quot;#viewedPrev&quot;,
            &quot;nextEl&quot;: &quot;#viewedNext&quot;
          },
          &quot;breakpoints&quot;: {
            &quot;768&quot;: {
              &quot;slidesPerView&quot;: 3
            },
            &quot;992&quot;: {
              &quot;slidesPerView&quot;: 4
            }
          }
        }">
        <div class="swiper-wrapper">

          <!-- Item -->
          <div class="swiper-slide">
            <div class="animate-underline hover-effect-opacity">
              <div class="position-relative mb-3">
                <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                  <i class="ci-heart animate-target"></i>
                </button>
                <a class="d-flex bg-body-tertiary rounded p-3" href="#!">
                  <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                    <img src="assets/img/shop/fashion/11.png" alt="Image">
                  </div>
                </a>
                <div class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                  <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">S</span>
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">M</span>
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">L</span>
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">XL</span>
                    <div class="nav">
                      <a class="nav-link fs-xs text-body-tertiary py-1 px-2" href="#!">+1</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="nav mb-2">
                <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="#!">
                  <span class="text-truncate">Warm sweatshirts without a hoodie</span>
                </a>
              </div>
              <div class="h6 mb-2">$32.99</div>
              <div class="position-relative">
                <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+2 colors</div>
                <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                  <input type="radio" class="btn-check" name="colors-11" id="color-11-1" checked="">
                  <label for="color-11-1" class="btn btn-color fs-base" style="color: #42675f">
                    <span class="visually-hidden">Green</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-11" id="color-11-2">
                  <label for="color-11-2" class="btn btn-color fs-base" style="color: #476585">
                    <span class="visually-hidden">Blue</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-11" id="color-11-3">
                  <label for="color-11-3" class="btn btn-color fs-base" style="color: #724c74">
                    <span class="visually-hidden">Purple</span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="swiper-slide">
            <div class="animate-underline hover-effect-opacity">
              <div class="position-relative mb-3">
                <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                  <i class="ci-heart animate-target"></i>
                </button>
                <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion.html">
                  <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                    <img src="assets/img/shop/fashion/03.png" alt="Image">
                  </div>
                </a>
                <div class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                  <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">6</span>
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">6.5</span>
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">7</span>
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">7.5</span>
                    <div class="nav">
                      <a class="nav-link fs-xs text-body-tertiary py-1 px-2" href="shop-product-fashion.html">+4</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="nav mb-2">
                <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion.html">
                  <span class="text-truncate">Sneakers with a massive sole</span>
                </a>
              </div>
              <div class="h6 mb-2">$86.50</div>
              <div class="position-relative">
                <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+1 color</div>
                <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                  <input type="radio" class="btn-check" name="colors-3" id="color-3-1" checked="">
                  <label for="color-3-1" class="btn btn-color fs-base" style="color: #e0e5eb">
                    <span class="visually-hidden">White</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-3" id="color-3-2">
                  <label for="color-3-2" class="btn btn-color fs-base" style="color: #364254">
                    <span class="visually-hidden">Black</span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="swiper-slide">
            <div class="animate-underline hover-effect-opacity">
              <div class="position-relative mb-3">
                <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                  <i class="ci-heart animate-target"></i>
                </button>
                <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion.html">
                  <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                    <img src="assets/img/shop/fashion/04.png" alt="Image">
                  </div>
                </a>
              </div>
              <div class="nav mb-2">
                <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion.html">
                  <span class="text-truncate">Knitted bag with a wooden handle</span>
                </a>
              </div>
              <div class="h6 mb-2">$105.00</div>
              <div class="position-relative">
                <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+1 color</div>
                <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                  <input type="radio" class="btn-check" name="colors-4" id="color-4-1" checked="">
                  <label for="color-4-1" class="btn btn-color fs-base" style="color: #e7ddb4">
                    <span class="visually-hidden">Beige</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-4" id="color-4-2">
                  <label for="color-4-2" class="btn btn-color fs-base" style="color: #8b9bc4">
                    <span class="visually-hidden">Blue</span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="swiper-slide">
            <div class="animate-underline hover-effect-opacity">
              <div class="position-relative mb-3">
                <span class="badge text-bg-danger position-absolute top-0 start-0 z-2 mt-2 mt-sm-3 ms-2 ms-sm-3">-17%</span>
                <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                  <i class="ci-heart animate-target"></i>
                </button>
                <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion.html">
                  <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                    <img src="assets/img/shop/fashion/05.png" alt="Image">
                  </div>
                </a>
              </div>
              <div class="nav mb-2">
                <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion.html">
                  <span class="text-truncate">Polarized sunglasses for men</span>
                </a>
              </div>
              <div class="h6 mb-2">$96.00 <del class="fs-sm fw-normal text-body-tertiary">$112.00</del></div>
              <div class="position-relative">
                <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+2 colors</div>
                <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                  <input type="radio" class="btn-check" name="colors-5" id="color-5-1" checked="">
                  <label for="color-5-1" class="btn btn-color fs-base" style="color: #8cc4ac">
                    <span class="visually-hidden">Green</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-5" id="color-5-2">
                  <label for="color-5-2" class="btn btn-color fs-base" style="color: #8cb7c4">
                    <span class="visually-hidden">Blue</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-5" id="color-5-3">
                  <label for="color-5-3" class="btn btn-color fs-base" style="color: #ccb782">
                    <span class="visually-hidden">Brown</span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="swiper-slide">
            <div class="animate-underline hover-effect-opacity">
              <div class="position-relative mb-3">
                <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                  <i class="ci-heart animate-target"></i>
                </button>
                <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion.html">
                  <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                    <img src="assets/img/shop/fashion/10.png" alt="Image">
                  </div>
                </a>
              </div>
              <div class="nav mb-2">
                <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion.html">
                  <span class="text-truncate">Leather handbag for women</span>
                </a>
              </div>
              <div class="h6 mb-2">$140.00</div>
              <div class="position-relative">
                <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+2 colors</div>
                <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                  <input type="radio" class="btn-check" name="colors-10" id="color-10-1" checked="">
                  <label for="color-10-1" class="btn btn-color fs-base" style="color: #869286">
                    <span class="visually-hidden">Olive</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-10" id="color-10-2">
                  <label for="color-10-2" class="btn btn-color fs-base" style="color: #364254">
                    <span class="visually-hidden">Black</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-10" id="color-10-3">
                  <label for="color-10-3" class="btn btn-color fs-base" style="color: #526f99">
                    <span class="visually-hidden">Blue</span>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Instagram feed -->
    <section class="container pt-5 mt-2 mt-sm-3 mt-lg-4 mt-xl-5">
      <div class="text-center pt-1 pb-2 pb-md-3">
        <h2 class="pb-2 mb-1">
          <span class="animate-underline">
            <a class="animate-target text-dark-emphasis text-decoration-none" href="#!">#cartzilla</a>
          </span>
        </h2>
        <p>Find more inspiration on our Instagram</p>
      </div>
    </section>
  </main>


  <?php include('./includes/footer.php') ?>
  <?php include('./includes/footerLinks.php') ?>

</body>
<script>
  let get_products = async () => {
    const urlParams = new URLSearchParams(window.location.search);
    const productId = urlParams.get('id');
    let productDetails = document.getElementById('productDetails');

    let response = await fetch('./apis/get_product_by_id.php',{
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({ id: productId })
    });
    let data = await response.json();
    console.log(data)
    data.forEach(element => {
      productDetails.innerHTML += `
      <div class="ps-md-4 ps-xl-5">

            <a class="d-none d-md-flex align-items-center gap-2 text-decoration-none mb-3" href="#reviews">
              <div class="d-flex gap-1 fs-sm">
                <i class="ci-star-filled text-warning"></i>
                <i class="ci-star-filled text-warning"></i>
                <i class="ci-star-filled text-warning"></i>
                <i class="ci-star-filled text-warning"></i>
                <i class="ci-star text-body-tertiary opacity-75"></i>
              </div>
              <span class="text-body-tertiary fs-sm">23 reviews</span>
            </a>

            <!-- Title -->
            <h1 class="h3">${element.product_name}</h1>
            

            <div class="product">
              <p class="fs-sm mb-0">${element.description}</p>
            </div>

            <!-- Price -->
            <a class="d-inline-block fs-sm fw-medium text-dark-emphasis collapsed mt-1" href="#moreDescription" data-bs-toggle="collapse" aria-expanded="false" aria-controls="moreDescription" data-label-collapsed="Read more" data-label-expanded="Show less" aria-label="Show / hide description"></a>
            <div class="h4 d-flex align-items-center my-4">
              $${element.original_price}
              <del class="fs-sm fw-normal text-body-tertiary ms-2">$${element.compare_price}</del>
            </div>

            <!-- Size select -->
            <div class="mb-3">
              <div class="d-flex align-items-center justify-content-between mb-1">
                <label class="form-label fw-semibold mb-0">Size</label>
                <div class="nav">
                  <a class="nav-link animate-underline fw-normal px-0" href="#sizeGuide" data-bs-toggle="modal">
                    <i class="ci-ruler fs-lg me-2"></i>
                    <span class="animate-target">Size guide</span>
                  </a>
                </div>
              </div>
              <select class="form-select form-select-lg" data-select="{
                  &quot;classNames&quot;: {
                    &quot;containerInner&quot;: [&quot;form-select&quot;, &quot;form-select-lg&quot;]
                  }
                }" aria-label="Material select">
                <option value="">Choose a size</option>
                <option value="xs">6-8 (XS)</option>
                <option value="s">8-10 (S)</option>
                <option value="m">10-12 (M)</option>
                <option value="l">12-14 (L)</option>
                <option value="xl">14-16 (XL)</option>
              </select>
            </div>

            <!-- Count input + Add to cart button -->
            <div class="d-flex gap-3 pb-3 pb-lg-4 mb-3">
              <div class="count-input flex-shrink-0">
                <button type="button" class="btn btn-icon btn-lg" data-decrement="" aria-label="Decrement quantity">
                  <i class="ci-minus"></i>
                </button>
                <input type="number" class="form-control form-control-lg" min="1" value="1" readonly="">
                <button type="button" class="btn btn-icon btn-lg" data-increment="" aria-label="Increment quantity">
                  <i class="ci-plus"></i>
                </button>
              </div>
              <button type="button" class="btn btn-lg btn-dark w-100">Add to cart</button>
            </div>

            <!-- Info list -->
            <ul class="list-unstyled gap-3 pb-3 pb-lg-4 mb-3">
              <li class="d-flex flex-wrap fs-sm">
                <span class="d-flex align-items-center fw-medium text-dark-emphasis me-2">
                  <i class="ci-clock fs-base me-2"></i>
                  Estimated delivery:
                </span>
                15 - 27 Mar, 2024
              </li>
              <li class="d-flex flex-wrap fs-sm">
                <span class="d-flex align-items-center fw-medium text-dark-emphasis me-2">
                  <i class="ci-delivery fs-base me-2"></i>
                  Free shipping &amp; returns:
                </span>
                On all orders over $100.00
              </li>
            </ul>

            <!-- Stock status -->
            <div class="d-flex flex-wrap justify-content-between fs-sm mb-3">
              <span class="fw-medium text-dark-emphasis me-2">🔥 Hurry up! The sale is coming to an end</span>
              <span><span class="fw-medium text-dark-emphasis">6</span> items in stock!</span>
            </div>
            <div class="progress" role="progressbar" aria-label="Left in stock" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
              <div class="progress-bar rounded-pill" style="width: 25%"></div>
            </div>
          </div>`
    });
  }
  get_products();
 

</script>

</html>