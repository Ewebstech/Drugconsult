
<!doctype html>
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js">
<!--<![endif]-->

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- /Added by HTTrack -->
<meta http-equiv="refresh" content="">

<head>
  <!-- Basic page needs ================================================== -->
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

  
  <!-- Title and description ================================================== -->
  <title>
   Drug Consult Pharmacy
  </title>

<?php require_once __DIR__ . '/includes/header.inc.php'; ?>
  <!-- Navigation Menu Starts -->

 <?php require_once __DIR__ .'/includes/nav.inc.php'; ?>

  <!-- End of Navigation Menu -->
  <main class="main-content">
    <div class="container">
      <div class="row">
        <?php require_once __DIR__ .'/includes/leftsidebar.inc.php'; ?>
       
       <div class="col-md-9 col-sm-8 col-xs-12 rightw">

        <!--  Slider Start   -->
        <?php require_once __DIR__ .'/includes/slider.inc.php'; ?>
          <!--  Slider End   -->

          <!-- BEGIN content_for_index -->
          <div id="shopify-section-1528178950362" class="shopify-section index-section col-lg-3 bsell hidden-md hidden-sm hidden-xs">
            <div data-section-id="1528178950362" data-section-type="bestseller" class="bestseller">
              <h1 class="lefthead" style="color:#fff; background: #156322;">
                B.P. Drugs
              </h1>

              <div class="allbgc">

                <ul class="owl-best">
                <?php
                $CAT = $queryclass->displayItems('B.P. DRUGS');
                
                foreach($CAT as $item){
                  
                  $imagelink = $queryclass->getImage($item['category']);
                  $href = "products_view.php?".$item['id']."";
                ?>

                  <li class="leftpro item-row   " id="product-741690441780">
                    <div class="product-container col-xs-12">

                      <div class="imgblock col-xs-4">
                        <center>
                        <a href="<?php echo $href ?>">
                          <img class="" src="<?php echo $imagelink ?>"
                             style="max-height: 50px;" />
                        </center>
                        </a>
                        <a href="<?php echo $href ?>">
                          <img src="imgfiles/cartout.jpg"  style="max-height: 50px;" class="second-img featured-image"
                            > </a>

                      </div>

                      <div class="wbproductdes col-xs-8">
                        <div class="shopify-product-reviews-badge" data-id="741690441780"></div>
                        <h5>
                          <a href="<?php echo $href ?>" class="grid-link__title"><?php echo $item['product'] ?></a>
                        </h5>
                        <div class="product_price">

                          <span>
                            <span class="Bold-theme-hook-DO-NOT-DELETE bold_product_price" data-override-value-set="1" data-override-value="50000"
                              style="display:none !important;"></span>
                            <span class=money>&#8358 <?php echo $item['price'] ?>.00</span>
                          </span>

                        </div>


                      </div>

                    </div>
                  </li>
                <?php } ?>
                </ul>
              </div>

            </div>


            <script>
              $(document).on('ready', function () {
                $(".owl-best").slick({
                  rows: 3,
                  dots: false,
                  infinite: false,
                  slidesToShow: 1,
                  slidesToScroll: 1
                });
              });
            </script>




          </div>

          <div id="shopify-section-1528096723788" class="shopify-section index-section cboth">
            <div class="product-tab-item">
              <div class="pro-tab tabs">
                <ul class="list-inline nav nav-tabs text-xs-right">
                  <li class="nav-item active">
                    <a class="nav-link" href="#tab-fea-0" data-toggle="tab" style="color:#dd3a2e;">
                      Antibiotics
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#tab-new-0" data-toggle="tab" style="color:#dd3a2e;">
                      Analgesics
                    </a>
                  </li>
                </ul>
              </div>

              <div class="tab-content tab-pro" id="tab-content">
                <div id="tab-fea-0" class="tab-pane active clearfix fadeIn animated">
                  <div data-section-id="1528096723788" data-section-type="featured" class="featured">


                    <ul class="owl-fea 1528096723788 owl-carousel owl-theme">

                      
<!-- ------------------------------------------------------ -->
                <?php
                $products = $queryclass->displayItems('ANTIBIOTICS');
                
                foreach($products as $item){
                  
                  $imagelink = $queryclass->getImage($item['category']);
                  $href = "products_view.php?".$item['id']."";
                ?>
                    <div class="item-row" id="product-649437413428">
                        <div class="product-container">

                          <div class="imgblock">
                            
                            <a href="<?php echo $href ?>">
                            <center>
                              <img class="" src="<?php echo $imagelink ?>" class="featured-image" alt="" style="max-height: 150px; align: center;" />
                            </center>
                            </a>
                            <a href="<?php echo $href ?>">
                              <img src="imgfiles/cartout.jpg" style="max-height: 120px; margin-top: 20px;" class="second-img featured-image" alt=""> </a>
                          </div>


                          <div class="wbproductdes text-center">
                            <div class="btnh">
                              <div class="shopify-product-reviews-badge" data-id="649437413428"></div>
                              <h5>
                                <a href="<?php echo $href ?>" class="grid-link__title" style="font-size: 11px; font-weight: bold;" ><?php echo $item['product'] ?></a>
                              </h5>
                              <div class="product_price">

                                <div class="grid-link__org_price">
                                  <span class="Bold-theme-hook-DO-NOT-DELETE bold_product_price" data-override-value-set="1" data-override-value="15000" style="display:none !important;"></span>
                                  <span class=money>&#8358 <?php echo $item['price'] ?>.00</span>
                                </div>


                              </div>

                              <p class="thumbdes"></p>
                            </div>


                            <div class="button-group">

                              <div class=" addcart">

                                <form action="#" method="post" class="variants clearfix" id="cart-form-649437413428">
                                  <input type="hidden" name="id" value="7387341783092" />
                                  <a class="add-cart-btn btn">
                                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon iconcartp" viewBox="0 0 459.529 459.529">
                                      <path d="M17,55.231h48.733l69.417,251.033c1.983,7.367,8.783,12.467,16.433,12.467h213.35c6.8,0,12.75-3.967,15.583-10.2
      l77.633-178.5c2.267-5.383,1.7-11.333-1.417-16.15c-3.117-4.817-8.5-7.65-14.167-7.65H206.833c-9.35,0-17,7.65-17,17
      s7.65,17,17,17H416.5l-62.9,144.5H164.333L94.917,33.698c-1.983-7.367-8.783-12.467-16.433-12.467H17c-9.35,0-17,7.65-17,17
      S7.65,55.231,17,55.231z"></path>
                                      <path d="M135.433,438.298c21.25,0,38.533-17.283,38.533-38.533s-17.283-38.533-38.533-38.533S96.9,378.514,96.9,399.764
      S114.183,438.298,135.433,438.298z"></path>
                                      <path d="M376.267,438.298c0.85,0,1.983,0,2.833,0c10.2-0.85,19.55-5.383,26.35-13.317c6.8-7.65,9.917-17.567,9.35-28.05
      c-1.417-20.967-19.833-37.117-41.083-35.7c-21.25,1.417-37.117,20.117-35.7,41.083
      C339.433,422.431,356.15,438.298,376.267,438.298z"></path>
                                    </svg>
                                    <span class="hidden-xs">add to cart</span>
                                  </a>
                                </form>

                              </div>



                              <div class="quickv">
                                <a href="javascript:void(0)" id="new-product-for-test" class="quick-view-text">
                                  <svg aria-hidden="true" focusable="false" role="presentation" class="icon iconquick" viewBox="0 0 456.795 456.795" style="width: 18px; height: 17px;">
                                    <path d="M448.947,218.475c-0.922-1.168-23.055-28.933-61-56.81c-50.705-37.253-105.877-56.944-159.551-56.944
      c-53.672,0-108.844,19.691-159.551,56.944c-37.944,27.876-60.077,55.642-61,56.81L0,228.397l7.846,9.923
      c0.923,1.168,23.056,28.934,61,56.811c50.707,37.252,105.879,56.943,159.551,56.943c53.673,0,108.845-19.691,159.55-56.943
      c37.945-27.877,60.078-55.643,61-56.811l7.848-9.923L448.947,218.475z M228.396,315.039c-47.774,0-86.642-38.867-86.642-86.642
      c0-7.485,0.954-14.751,2.747-21.684l-19.781-3.329c-1.938,8.025-2.966,16.401-2.966,25.013c0,30.86,13.182,58.696,34.204,78.187
      c-27.061-9.996-50.072-24.023-67.439-36.709c-21.516-15.715-37.641-31.609-46.834-41.478c9.197-9.872,25.32-25.764,46.834-41.478
      c17.367-12.686,40.379-26.713,67.439-36.71l13.27,14.958c15.498-14.512,36.312-23.412,59.168-23.412
      c47.774,0,86.641,38.867,86.641,86.642C315.037,276.172,276.17,315.039,228.396,315.039z M368.273,269.875
      c-17.369,12.686-40.379,26.713-67.439,36.709c21.021-19.49,34.203-47.326,34.203-78.188s-13.182-58.697-34.203-78.188
      c27.061,9.997,50.07,24.024,67.439,36.71c21.516,15.715,37.641,31.609,46.834,41.477
      C405.91,238.269,389.787,254.162,368.273,269.875z"></path>
                                    <path d="M173.261,211.555c-1.626,5.329-2.507,10.982-2.507,16.843c0,31.834,25.807,57.642,57.642,57.642
      c31.834,0,57.641-25.807,57.641-57.642s-25.807-57.642-57.641-57.642c-15.506,0-29.571,6.134-39.932,16.094l28.432,32.048
      L173.261,211.555z"></path>
                                  </svg>
                                  <span class="hidden-xs">quickview</span>
                                </a>
                              </div>



                              <div class="add-to-wishlist">
                                <div class="show">
                                  <div class="default-wishbutton-new-product-for-test loading">
                                    <a class="add-in-wishlist-js" href="<?php echo $href ?>">
                                      <svg aria-hidden="true" focusable="false" role="presentation" class="icon iconwish" viewBox="0 0 67.949 67.949" style="width: 18px; height: 17px;">
                                        <path d="M62.49,11.239c-7.39-7.388-19.412-7.388-26.8,0l-1.716,1.715l-1.715-1.715c-7.388-7.389-19.411-7.389-26.799,0
    c-7.238,7.238-7.285,18.711-0.109,26.688c6.545,7.273,25.848,22.986,26.667,23.651c0.556,0.452,1.225,0.672,1.89,0.672
    c0.022,0,0.044,0,0.065-0.001c0.688,0.032,1.381-0.204,1.955-0.671c0.819-0.665,20.124-16.378,26.671-23.652
    C69.774,29.95,69.727,18.477,62.49,11.239z M58.139,33.913c-5.103,5.669-19.13,17.361-24.166,21.51
    c-5.036-4.148-19.06-15.839-24.162-21.509C4.805,28.35,4.758,20.426,9.702,15.482c2.525-2.524,5.841-3.787,9.157-3.787
    s6.632,1.262,9.157,3.787l3.772,3.772c0.449,0.449,1.015,0.717,1.609,0.811c0.964,0.207,2.01-0.062,2.76-0.81l3.774-3.773
    c5.051-5.049,13.267-5.048,18.315,0C63.19,20.426,63.143,28.35,58.139,33.913z"></path>
                                      </svg>
                                      <span class="tooltip-label hidden-xs">Wishlist</span>
                                    </a>
                                  </div>
                                  <div class="loadding-wishbutton-new-product-for-test loading" style="display: none; pointer-events: none">
                                    <a class="add_to_wishlist" href="#">
                                      <i class="fa fa-circle-o-notch fa-spin"></i>
                                    </a>
                                  </div>
                                  <div class="added-wishbutton-new-product-for-test loading" style="display: none;">
                                    <a class="added-wishlist add_to_wishlist" href="#">
                                      <svg aria-hidden="true" focusable="false" role="presentation" class="icon iconwish" viewBox="0 0 176.104 176.104" style="width: 18px; height: 17px;">
                                        <path d="M150.383,18.301c-7.13-3.928-15.308-6.187-24.033-6.187c-15.394,0-29.18,7.015-38.283,18.015
			c-9.146-11-22.919-18.015-38.334-18.015c-8.704,0-16.867,2.259-24.013,6.187C10.388,26.792,0,43.117,0,61.878
			C0,67.249,0.874,72.4,2.457,77.219c8.537,38.374,85.61,86.771,85.61,86.771s77.022-48.396,85.571-86.771
			c1.583-4.819,2.466-9.977,2.466-15.341C176.104,43.124,165.716,26.804,150.383,18.301z" />
                                      </svg>
                                      <span class="tooltip-label hidden-xs">View Wishlist</span>
                                    </a>
                                  </div>
                                </div>
                              </div>


                            </div>

                          </div>
                          <center>
                            <a href="<?php echo $href ?>" style="font-size: 11px; text-align: center; color:#dd3a2e">Available for Sale!</a>
                          </center>
                        </div>
                      </div>
                    <?php  } ?>
<!-- ------------------------------------------------------ -->



                <div class="product-container">

                    <div class="wbproductdes text-center">

                     <div class="button-group">
                  
                      <div class="item-row    on-sale" id="product-741731205172">
                        <div class="product-container">

                          <div class="imgblock">

                            <a href="<?php echo $href ?>">
                              <img class="" src="cdn.shopify.com/s/files/1/0012/3024/1844/products/10_2efd9ba9-4e50-469a-8af6-dcc73101e0eb_large0d60.jpg?v=1528966759"
                                alt="" />
                            </a>
                            <a href="products/new-latest-collection-product.html">
                              <img src="cdn.shopify.com/s/files/1/0012/3024/1844/products/9_888366fa-b5df-404a-8d4c-81b4da22db01_large285b.jpg?v=1528966775"
                                class="second-img featured-image" alt=""> </a>

                          </div>


                          <div class="wbproductdes text-center">
                            <div class="btnh">
                              <div class="shopify-product-reviews-badge" data-id="741731205172"></div>
                              <h5>
                                <a href="collections/featured-products/products/new-latest-collection-product.html" class="grid-link__title">Hello pals</a>
                              </h5>
                              <div class="product_price">

                                <div class="grid-link__org_price">
                                  <span class="Bold-theme-hook-DO-NOT-DELETE bold_product_price" data-override-value-set="1" data-override-value="12000" style="display:none !important;"></span>
                                  <span class=money>$120.00</span>
                                </div>
                                <span class="dis-price">
                                  <span class="Bold-theme-hook-DO-NOT-DELETE bold_product_compare_price" data-override-value-set="1"
                                    data-override-value="39900" style="display:none !important;"></span>
                                  <span class=money>$399.00</span>
                                </span>

                              </div>

                              <p class="thumbdes">simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an u...</p>
                            </div>


                            <div class="button-group">

                              <div class=" addcart">

                                <form action="https://maxdino-demo.myshopify.com/cart/add" method="post" class="variants clearfix" id="cart-form-741731205172">
                                  <input type="hidden" name="id" value="7644808970292" />
                                  <a class="add-cart-btn btn">
                                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon iconcartp" viewBox="0 0 459.529 459.529">
                                      <path d="M17,55.231h48.733l69.417,251.033c1.983,7.367,8.783,12.467,16.433,12.467h213.35c6.8,0,12.75-3.967,15.583-10.2
      l77.633-178.5c2.267-5.383,1.7-11.333-1.417-16.15c-3.117-4.817-8.5-7.65-14.167-7.65H206.833c-9.35,0-17,7.65-17,17
      s7.65,17,17,17H416.5l-62.9,144.5H164.333L94.917,33.698c-1.983-7.367-8.783-12.467-16.433-12.467H17c-9.35,0-17,7.65-17,17
      S7.65,55.231,17,55.231z"></path>
                                      <path d="M135.433,438.298c21.25,0,38.533-17.283,38.533-38.533s-17.283-38.533-38.533-38.533S96.9,378.514,96.9,399.764
      S114.183,438.298,135.433,438.298z"></path>
                                      <path d="M376.267,438.298c0.85,0,1.983,0,2.833,0c10.2-0.85,19.55-5.383,26.35-13.317c6.8-7.65,9.917-17.567,9.35-28.05
      c-1.417-20.967-19.833-37.117-41.083-35.7c-21.25,1.417-37.117,20.117-35.7,41.083
      C339.433,422.431,356.15,438.298,376.267,438.298z"></path>
                                    </svg>
                                    <span class="hidden-xs">add to cart</span>
                                  </a>
                                </form>

                              </div>



                              <div class="quickv">
                                <a href="javascript:void(0)" id="new-latest-collection-product" class="quick-view-text">
                                  <svg aria-hidden="true" focusable="false" role="presentation" class="icon iconquick" viewBox="0 0 456.795 456.795" style="width: 18px; height: 17px;">
                                    <path d="M448.947,218.475c-0.922-1.168-23.055-28.933-61-56.81c-50.705-37.253-105.877-56.944-159.551-56.944
      c-53.672,0-108.844,19.691-159.551,56.944c-37.944,27.876-60.077,55.642-61,56.81L0,228.397l7.846,9.923
      c0.923,1.168,23.056,28.934,61,56.811c50.707,37.252,105.879,56.943,159.551,56.943c53.673,0,108.845-19.691,159.55-56.943
      c37.945-27.877,60.078-55.643,61-56.811l7.848-9.923L448.947,218.475z M228.396,315.039c-47.774,0-86.642-38.867-86.642-86.642
      c0-7.485,0.954-14.751,2.747-21.684l-19.781-3.329c-1.938,8.025-2.966,16.401-2.966,25.013c0,30.86,13.182,58.696,34.204,78.187
      c-27.061-9.996-50.072-24.023-67.439-36.709c-21.516-15.715-37.641-31.609-46.834-41.478c9.197-9.872,25.32-25.764,46.834-41.478
      c17.367-12.686,40.379-26.713,67.439-36.71l13.27,14.958c15.498-14.512,36.312-23.412,59.168-23.412
      c47.774,0,86.641,38.867,86.641,86.642C315.037,276.172,276.17,315.039,228.396,315.039z M368.273,269.875
      c-17.369,12.686-40.379,26.713-67.439,36.709c21.021-19.49,34.203-47.326,34.203-78.188s-13.182-58.697-34.203-78.188
      c27.061,9.997,50.07,24.024,67.439,36.71c21.516,15.715,37.641,31.609,46.834,41.477
      C405.91,238.269,389.787,254.162,368.273,269.875z"></path>
                                    <path d="M173.261,211.555c-1.626,5.329-2.507,10.982-2.507,16.843c0,31.834,25.807,57.642,57.642,57.642
      c31.834,0,57.641-25.807,57.641-57.642s-25.807-57.642-57.641-57.642c-15.506,0-29.571,6.134-39.932,16.094l28.432,32.048
      L173.261,211.555z"></path>
                                  </svg>
                                  <span class="hidden-xs">quickview</span>
                                </a>
                              </div>



                              <div class="add-to-wishlist">
                                <div class="show">
                                  <div class="default-wishbutton-new-latest-collection-product loading">
                                    <a class="add-in-wishlist-js" href="new-latest-collection-product.html">
                                      <svg aria-hidden="true" focusable="false" role="presentation" class="icon iconwish" viewBox="0 0 67.949 67.949" style="width: 18px; height: 17px;">
                                        <path d="M62.49,11.239c-7.39-7.388-19.412-7.388-26.8,0l-1.716,1.715l-1.715-1.715c-7.388-7.389-19.411-7.389-26.799,0
    c-7.238,7.238-7.285,18.711-0.109,26.688c6.545,7.273,25.848,22.986,26.667,23.651c0.556,0.452,1.225,0.672,1.89,0.672
    c0.022,0,0.044,0,0.065-0.001c0.688,0.032,1.381-0.204,1.955-0.671c0.819-0.665,20.124-16.378,26.671-23.652
    C69.774,29.95,69.727,18.477,62.49,11.239z M58.139,33.913c-5.103,5.669-19.13,17.361-24.166,21.51
    c-5.036-4.148-19.06-15.839-24.162-21.509C4.805,28.35,4.758,20.426,9.702,15.482c2.525-2.524,5.841-3.787,9.157-3.787
    s6.632,1.262,9.157,3.787l3.772,3.772c0.449,0.449,1.015,0.717,1.609,0.811c0.964,0.207,2.01-0.062,2.76-0.81l3.774-3.773
    c5.051-5.049,13.267-5.048,18.315,0C63.19,20.426,63.143,28.35,58.139,33.913z"></path>
                                      </svg>
                                      <span class="tooltip-label hidden-xs">Wishlist</span>
                                    </a>
                                  </div>
                                  <div class="loadding-wishbutton-new-latest-collection-product loading" style="display: none; pointer-events: none">
                                    <a class="add_to_wishlist" href="new-latest-collection-product.html">
                                      <i class="fa fa-circle-o-notch fa-spin"></i>
                                    </a>
                                  </div>
                                  <div class="added-wishbutton-new-latest-collection-product loading" style="display: none;">
                                    <a class="added-wishlist add_to_wishlist" href="pages/wishlist.html">
                                      <svg aria-hidden="true" focusable="false" role="presentation" class="icon iconwish" viewBox="0 0 176.104 176.104" style="width: 18px; height: 17px;">
                                        <path d="M150.383,18.301c-7.13-3.928-15.308-6.187-24.033-6.187c-15.394,0-29.18,7.015-38.283,18.015
			c-9.146-11-22.919-18.015-38.334-18.015c-8.704,0-16.867,2.259-24.013,6.187C10.388,26.792,0,43.117,0,61.878
			C0,67.249,0.874,72.4,2.457,77.219c8.537,38.374,85.61,86.771,85.61,86.771s77.022-48.396,85.571-86.771
			c1.583-4.819,2.466-9.977,2.466-15.341C176.104,43.124,165.716,26.804,150.383,18.301z" />
                                      </svg>
                                      <span class="tooltip-label hidden-xs">View Wishlist</span>
                                    </a>
                                  </div>
                                </div>
                              </div>


                            </div>

                          </div>
                          <a href="collections/featured-products/products/new-latest-collection-product.html">


                            <span class="sale">Sale</span>



                          </a>
                        </div>
                      </div>
<!-- ------------------------------------------------------ -->
                    </ul>
                    <div class="owl-feature slidebtn">
                      <a class="prev">
                        <i class="fa fa-angle-left"></i>
                      </a>
                      <a class="next">
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </div>
                </div>



<!-------- ---- Latest -------------------------------------------------------------->

                <div id="tab-new-0" class="tab-pane clearfix fadeIn animated">
                  <div data-section-id="1528096723788" data-section-type="latest" class="latest">


                    <ul class="owl-new 1528096723788 owl-carousel owl-theme">

                       <?php
                $analgesics = $queryclass->displayItems('ANALGESIC');
                
                foreach($analgesics as $item){
                  
                  $imagelink = $queryclass->getImage($item['category']);
                  $href = "products_view.php?".$item['id']."";
                ?>
                      <div class="item-row   " id="product-1046195961908">
                        <div class="product-container">

                          <div class="imgblock">

                             <center>
                              <img class="" src="<?php echo $imagelink ?>" class="featured-image" alt="" style="max-height: 150px; align: center;" />
                            </center>
                            <a href="<?php echo $href ?>">
                            <img src="imgfiles/cartout.jpg" style="max-height: 120px; margin-top: 20px;" class="second-img featured-image" alt=""> </a>

                          </div>
                          <div class="wbproductdes text-center">
                            <div class="btnh">
                              <div class="shopify-product-reviews-badge" data-id="1046195961908"></div>
                              <h5>
                                <a href="<?php echo $href ?>"
                                  class="grid-link__title"><?php echo $item['product'] ?></a>
                              </h5>
                              <div class="product_price">

                                <div class="grid-link__org_price">
                                  <span class="Bold-theme-hook-DO-NOT-DELETE bold_product_price" data-override-value-set="1" data-override-value="45000" style="display:none !important;"></span>
                                  <span class=money>&#8358 <?php echo $item['price'] ?>.00</span>
                                </div>


                              </div>

                              <p class="thumbdes"></p>
                            </div>


                            <div class="button-group">

                              <div class=" addcart">

                                <form action="#" method="post" class="variants clearfix" id="cart-form-1046195961908">
                                  <input type="hidden" name="id" value="8714839687220" />
                                  <a class="add-cart-btn btn">
                                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon iconcartp" viewBox="0 0 459.529 459.529">
                                      <path d="M17,55.231h48.733l69.417,251.033c1.983,7.367,8.783,12.467,16.433,12.467h213.35c6.8,0,12.75-3.967,15.583-10.2
      l77.633-178.5c2.267-5.383,1.7-11.333-1.417-16.15c-3.117-4.817-8.5-7.65-14.167-7.65H206.833c-9.35,0-17,7.65-17,17
      s7.65,17,17,17H416.5l-62.9,144.5H164.333L94.917,33.698c-1.983-7.367-8.783-12.467-16.433-12.467H17c-9.35,0-17,7.65-17,17
      S7.65,55.231,17,55.231z"></path>
                                      <path d="M135.433,438.298c21.25,0,38.533-17.283,38.533-38.533s-17.283-38.533-38.533-38.533S96.9,378.514,96.9,399.764
      S114.183,438.298,135.433,438.298z"></path>
                                      <path d="M376.267,438.298c0.85,0,1.983,0,2.833,0c10.2-0.85,19.55-5.383,26.35-13.317c6.8-7.65,9.917-17.567,9.35-28.05
      c-1.417-20.967-19.833-37.117-41.083-35.7c-21.25,1.417-37.117,20.117-35.7,41.083
      C339.433,422.431,356.15,438.298,376.267,438.298z"></path>
                                    </svg>
                                    <span class="hidden-xs">add to cart</span>
                                  </a>
                                </form>

                              </div>



                              <div class="quickv">
                                <a href="javascript:void(0)" id="lacus-sem-laoreet-nisl-vel-fringilla-ante-orci-at-felis" class="quick-view-text">
                                  <svg aria-hidden="true" focusable="false" role="presentation" class="icon iconquick" viewBox="0 0 456.795 456.795" style="width: 18px; height: 17px;">
                                    <path d="M448.947,218.475c-0.922-1.168-23.055-28.933-61-56.81c-50.705-37.253-105.877-56.944-159.551-56.944
      c-53.672,0-108.844,19.691-159.551,56.944c-37.944,27.876-60.077,55.642-61,56.81L0,228.397l7.846,9.923
      c0.923,1.168,23.056,28.934,61,56.811c50.707,37.252,105.879,56.943,159.551,56.943c53.673,0,108.845-19.691,159.55-56.943
      c37.945-27.877,60.078-55.643,61-56.811l7.848-9.923L448.947,218.475z M228.396,315.039c-47.774,0-86.642-38.867-86.642-86.642
      c0-7.485,0.954-14.751,2.747-21.684l-19.781-3.329c-1.938,8.025-2.966,16.401-2.966,25.013c0,30.86,13.182,58.696,34.204,78.187
      c-27.061-9.996-50.072-24.023-67.439-36.709c-21.516-15.715-37.641-31.609-46.834-41.478c9.197-9.872,25.32-25.764,46.834-41.478
      c17.367-12.686,40.379-26.713,67.439-36.71l13.27,14.958c15.498-14.512,36.312-23.412,59.168-23.412
      c47.774,0,86.641,38.867,86.641,86.642C315.037,276.172,276.17,315.039,228.396,315.039z M368.273,269.875
      c-17.369,12.686-40.379,26.713-67.439,36.709c21.021-19.49,34.203-47.326,34.203-78.188s-13.182-58.697-34.203-78.188
      c27.061,9.997,50.07,24.024,67.439,36.71c21.516,15.715,37.641,31.609,46.834,41.477
      C405.91,238.269,389.787,254.162,368.273,269.875z"></path>
                                    <path d="M173.261,211.555c-1.626,5.329-2.507,10.982-2.507,16.843c0,31.834,25.807,57.642,57.642,57.642
      c31.834,0,57.641-25.807,57.641-57.642s-25.807-57.642-57.641-57.642c-15.506,0-29.571,6.134-39.932,16.094l28.432,32.048
      L173.261,211.555z"></path>
                                  </svg>
                                  <span class="hidden-xs">quickview</span>
                                </a>
                              </div>



                              <div class="add-to-wishlist">
                                <div class="show">
                                  <div class="default-wishbutton-lacus-sem-laoreet-nisl-vel-fringilla-ante-orci-at-felis loading">
                                    <a class="add-in-wishlist-js" href="#">
                                      <svg aria-hidden="true" focusable="false" role="presentation" class="icon iconwish" viewBox="0 0 67.949 67.949" style="width: 18px; height: 17px;">
                                        <path d="M62.49,11.239c-7.39-7.388-19.412-7.388-26.8,0l-1.716,1.715l-1.715-1.715c-7.388-7.389-19.411-7.389-26.799,0
    c-7.238,7.238-7.285,18.711-0.109,26.688c6.545,7.273,25.848,22.986,26.667,23.651c0.556,0.452,1.225,0.672,1.89,0.672
    c0.022,0,0.044,0,0.065-0.001c0.688,0.032,1.381-0.204,1.955-0.671c0.819-0.665,20.124-16.378,26.671-23.652
    C69.774,29.95,69.727,18.477,62.49,11.239z M58.139,33.913c-5.103,5.669-19.13,17.361-24.166,21.51
    c-5.036-4.148-19.06-15.839-24.162-21.509C4.805,28.35,4.758,20.426,9.702,15.482c2.525-2.524,5.841-3.787,9.157-3.787
    s6.632,1.262,9.157,3.787l3.772,3.772c0.449,0.449,1.015,0.717,1.609,0.811c0.964,0.207,2.01-0.062,2.76-0.81l3.774-3.773
    c5.051-5.049,13.267-5.048,18.315,0C63.19,20.426,63.143,28.35,58.139,33.913z"></path>
                                      </svg>
                                      <span class="tooltip-label hidden-xs">Wishlist</span>
                                    </a>
                                  </div>
                                  <div class="loadding-wishbutton-lacus-sem-laoreet-nisl-vel-fringilla-ante-orci-at-felis loading" style="display: none; pointer-events: none">
                                    <a class="add_to_wishlist" href="#">
                                      <i class="fa fa-circle-o-notch fa-spin"></i>
                                    </a>
                                  </div>
                                  <div class="added-wishbutton-lacus-sem-laoreet-nisl-vel-fringilla-ante-orci-at-felis loading" style="display: none;">
                                    <a class="added-wishlist add_to_wishlist" href="#">
                                      <svg aria-hidden="true" focusable="false" role="presentation" class="icon iconwish" viewBox="0 0 176.104 176.104" style="width: 18px; height: 17px;">
                                        <path d="M150.383,18.301c-7.13-3.928-15.308-6.187-24.033-6.187c-15.394,0-29.18,7.015-38.283,18.015
			c-9.146-11-22.919-18.015-38.334-18.015c-8.704,0-16.867,2.259-24.013,6.187C10.388,26.792,0,43.117,0,61.878
			C0,67.249,0.874,72.4,2.457,77.219c8.537,38.374,85.61,86.771,85.61,86.771s77.022-48.396,85.571-86.771
			c1.583-4.819,2.466-9.977,2.466-15.341C176.104,43.124,165.716,26.804,150.383,18.301z" />
                                      </svg>
                                      <span class="tooltip-label hidden-xs">View Wishlist</span>
                                    </a>
                                  </div>
                                </div>
                              </div>


                            </div>

                          </div>
                          <center>
                            <a href="<?php echo $href ?>" style="font-size: 11px; text-align: center; color:#dd3a2e">Available for Sale!</a>
                          </center>
                        </div>
                      </div>
                      <?php  } ?>
<!-------- ---- Latest -------------------------------------------------------------->
                    </ul>
                    <div class="owl-newpro slidebtn">
                      <a class="prev">
                        <i class="fa fa-angle-left"></i>
                      </a>
                      <a class="next">
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>

                  </div>
                </div>
              </div>

            </div>

            <script type="text/javascript">
              $(document).ready(function () {
                var article_item = $(".owl-fea.1528096723788");
                article_item.owlCarousel({
                  itemsCustom: [
                    [0, 1],
                    [375, 2],
                    [600, 3],
                    [768, 2],
                    [992, 3],
                    [1200, 4]
                  ],
                  navigation: false,
                  pagination: false
                });

                // Custom Navigation Events
                $(".owl-feature .next").click(function () {
                  article_item.trigger('owl.next');
                })
                $(".owl-feature .prev").click(function () {
                  article_item.trigger('owl.prev');
                })
              });
            </script>

            <script type="text/javascript">
              $(document).ready(function () {
                var article_item = $(".owl-new.1528096723788");
                article_item.owlCarousel({
                  itemsCustom: [
                    [0, 1],
                    [375, 2],
                    [600, 3],
                    [768, 2],
                    [992, 3],
                    [1200, 4]
                  ],
                  navigation: false,
                  pagination: false
                });

                // Custom Navigation Events
                $(".owl-newpro .next").click(function () {
                  article_item.trigger('owl.next');
                })
                $(".owl-newpro .prev").click(function () {
                  article_item.trigger('owl.prev');
                })
              });
            </script>





          </div>
          <div id="shopify-section-1528104089223" class="shopify-section index-section">
            <div data-section-id="1528104089223" class="row imgbanner">



              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="beffect">


                   <img src="imgfiles/banner.jpg" alt="" />
                  <span class="hover">
                    <span class="r1"></span>
                    <span class="r2"></span>
                    <span class="r3"></span>
                    <span class="r4"></span>
                  </span>


                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="beffect">

                  <img src="imgfiles/banner33454.jpg" alt="" style="max-height: 150px;"/>
                 
                  <span class="hover">
                    <span class="r1"></span>
                    <span class="r2"></span>
                    <span class="r3"></span>
                    <span class="r4"></span>
                  </span>


                </div>
              </div>


            </div>

          </div>

          <div id="shopify-section-1492424920625" class="shopify-section index-section">
            <div data-section-id="1492424920625" data-section-type="special" class="special">
              <h1 class="heading" style="color:#dd3a2e;">
                <span>Cough/Cold</span>
              </h1>

              <div class="allbgc">



                <ul class="owl-spe 1492424920625 owl-carousel owl-theme">

                <?php
                $analgesics = $queryclass->displayItems('COUGH/COLD');
                
                foreach($analgesics as $item){
                  
                  $imagelink = $queryclass->getImage($item['category']);
                  $href = "products_view.php?".$item['id']."";
                ?>
                  <div class="item-row    on-sale" id="product-747392958516">
                    <div class="product-container">

                      <div class="imgblock">

                        <a href="<?php echo $href ?>">
                        <center>
                              <img class="" src="<?php echo $imagelink ?>" class="featured-image" alt="" style="max-height: 150px; align: center;" />
                        </center>
                        </a>
                        <a href="<?php echo $href ?>">
                            <img src="imgfiles/cartout.jpg" style="max-height: 100px; margin-top: 20px;" class="second-img featured-image" alt=""> </a>

                      </div>

                      <div class="wbproductdes text-center">
                        <div class="btnh">
                          <div class="shopify-product-reviews-badge" data-id="747392958516"></div>
                          <h5>
                            <a href="<?php echo $href ?>" class="grid-link__title"><?php echo $item['product'] ?></a>
                          </h5>
                          <div class="product_price">

                            <div class="grid-link__org_price">
                              <span class="Bold-theme-hook-DO-NOT-DELETE bold_product_price" data-override-value-set="1" data-override-value="60000" style="display:none !important;"></span>
                              <span class=money>&#8358 <?php echo $item['price'] ?>.00</span>
                            </div>
                            <span class="dis-price">
                              <span class="Bold-theme-hook-DO-NOT-DELETE bold_product_compare_price" data-override-value-set="1"
                                data-override-value="119900" style="display:none !important;"></span>
                             
                            </span>

                          </div>

                          <p class="thumbdes"></p>
                        </div>


                        <div class="button-group">

                          <div class=" addcart">

                            <form action="#" method="post" class="variants clearfix" id="cart-form-747392958516">
                              <input type="hidden" name="id" value="7661026803764" />
                              <a class="add-cart-btn btn">
                                <svg aria-hidden="true" focusable="false" role="presentation" class="icon iconcartp" viewBox="0 0 459.529 459.529">
                                  <path d="M17,55.231h48.733l69.417,251.033c1.983,7.367,8.783,12.467,16.433,12.467h213.35c6.8,0,12.75-3.967,15.583-10.2
      l77.633-178.5c2.267-5.383,1.7-11.333-1.417-16.15c-3.117-4.817-8.5-7.65-14.167-7.65H206.833c-9.35,0-17,7.65-17,17
      s7.65,17,17,17H416.5l-62.9,144.5H164.333L94.917,33.698c-1.983-7.367-8.783-12.467-16.433-12.467H17c-9.35,0-17,7.65-17,17
      S7.65,55.231,17,55.231z"></path>
                                  <path d="M135.433,438.298c21.25,0,38.533-17.283,38.533-38.533s-17.283-38.533-38.533-38.533S96.9,378.514,96.9,399.764
      S114.183,438.298,135.433,438.298z"></path>
                                  <path d="M376.267,438.298c0.85,0,1.983,0,2.833,0c10.2-0.85,19.55-5.383,26.35-13.317c6.8-7.65,9.917-17.567,9.35-28.05
      c-1.417-20.967-19.833-37.117-41.083-35.7c-21.25,1.417-37.117,20.117-35.7,41.083
      C339.433,422.431,356.15,438.298,376.267,438.298z"></path>
                                </svg>
                                <span class="hidden-xs">add to cart</span>
                              </a>
                            </form>

                          </div>



                          <div class="quickv">
                            <a href="javascript:void(0)" id="fashionable-new-design-shirt" class="quick-view-text">
                              <svg aria-hidden="true" focusable="false" role="presentation" class="icon iconquick" viewBox="0 0 456.795 456.795" style="width: 18px; height: 17px;">
                                <path d="M448.947,218.475c-0.922-1.168-23.055-28.933-61-56.81c-50.705-37.253-105.877-56.944-159.551-56.944
      c-53.672,0-108.844,19.691-159.551,56.944c-37.944,27.876-60.077,55.642-61,56.81L0,228.397l7.846,9.923
      c0.923,1.168,23.056,28.934,61,56.811c50.707,37.252,105.879,56.943,159.551,56.943c53.673,0,108.845-19.691,159.55-56.943
      c37.945-27.877,60.078-55.643,61-56.811l7.848-9.923L448.947,218.475z M228.396,315.039c-47.774,0-86.642-38.867-86.642-86.642
      c0-7.485,0.954-14.751,2.747-21.684l-19.781-3.329c-1.938,8.025-2.966,16.401-2.966,25.013c0,30.86,13.182,58.696,34.204,78.187
      c-27.061-9.996-50.072-24.023-67.439-36.709c-21.516-15.715-37.641-31.609-46.834-41.478c9.197-9.872,25.32-25.764,46.834-41.478
      c17.367-12.686,40.379-26.713,67.439-36.71l13.27,14.958c15.498-14.512,36.312-23.412,59.168-23.412
      c47.774,0,86.641,38.867,86.641,86.642C315.037,276.172,276.17,315.039,228.396,315.039z M368.273,269.875
      c-17.369,12.686-40.379,26.713-67.439,36.709c21.021-19.49,34.203-47.326,34.203-78.188s-13.182-58.697-34.203-78.188
      c27.061,9.997,50.07,24.024,67.439,36.71c21.516,15.715,37.641,31.609,46.834,41.477
      C405.91,238.269,389.787,254.162,368.273,269.875z"></path>
                                <path d="M173.261,211.555c-1.626,5.329-2.507,10.982-2.507,16.843c0,31.834,25.807,57.642,57.642,57.642
      c31.834,0,57.641-25.807,57.641-57.642s-25.807-57.642-57.641-57.642c-15.506,0-29.571,6.134-39.932,16.094l28.432,32.048
      L173.261,211.555z"></path>
                              </svg>
                              <span class="hidden-xs">quickview</span>
                            </a>
                          </div>



                          <div class="add-to-wishlist">
                            <div class="show">
                              <div class="default-wishbutton-fashionable-new-design-shirt loading">
                                <a class="add-in-wishlist-js" href="f#">
                                  <svg aria-hidden="true" focusable="false" role="presentation" class="icon iconwish" viewBox="0 0 67.949 67.949" style="width: 18px; height: 17px;">
                                    <path d="M62.49,11.239c-7.39-7.388-19.412-7.388-26.8,0l-1.716,1.715l-1.715-1.715c-7.388-7.389-19.411-7.389-26.799,0
    c-7.238,7.238-7.285,18.711-0.109,26.688c6.545,7.273,25.848,22.986,26.667,23.651c0.556,0.452,1.225,0.672,1.89,0.672
    c0.022,0,0.044,0,0.065-0.001c0.688,0.032,1.381-0.204,1.955-0.671c0.819-0.665,20.124-16.378,26.671-23.652
    C69.774,29.95,69.727,18.477,62.49,11.239z M58.139,33.913c-5.103,5.669-19.13,17.361-24.166,21.51
    c-5.036-4.148-19.06-15.839-24.162-21.509C4.805,28.35,4.758,20.426,9.702,15.482c2.525-2.524,5.841-3.787,9.157-3.787
    s6.632,1.262,9.157,3.787l3.772,3.772c0.449,0.449,1.015,0.717,1.609,0.811c0.964,0.207,2.01-0.062,2.76-0.81l3.774-3.773
    c5.051-5.049,13.267-5.048,18.315,0C63.19,20.426,63.143,28.35,58.139,33.913z"></path>
                                  </svg>
                                  <span class="tooltip-label hidden-xs">Wishlist</span>
                                </a>
                              </div>
                              <div class="loadding-wishbutton-fashionable-new-design-shirt loading" style="display: none; pointer-events: none">
                                <a class="add_to_wishlist" href="#">
                                  <i class="fa fa-circle-o-notch fa-spin"></i>
                                </a>
                              </div>
                              <div class="added-wishbutton-fashionable-new-design-shirt loading" style="display: none;">
                                <a class="added-wishlist add_to_wishlist" href="#">
                                  <svg aria-hidden="true" focusable="false" role="presentation" class="icon iconwish" viewBox="0 0 176.104 176.104" style="width: 18px; height: 17px;">
                                    <path d="M150.383,18.301c-7.13-3.928-15.308-6.187-24.033-6.187c-15.394,0-29.18,7.015-38.283,18.015
			c-9.146-11-22.919-18.015-38.334-18.015c-8.704,0-16.867,2.259-24.013,6.187C10.388,26.792,0,43.117,0,61.878
			C0,67.249,0.874,72.4,2.457,77.219c8.537,38.374,85.61,86.771,85.61,86.771s77.022-48.396,85.571-86.771
			c1.583-4.819,2.466-9.977,2.466-15.341C176.104,43.124,165.716,26.804,150.383,18.301z" />
                                  </svg>
                                  <span class="tooltip-label hidden-xs">View Wishlist</span>
                                </a>
                              </div>
                            </div>
                          </div>


                        </div>

                      </div>
                      <a href="">


                        <span class="sale">Sale</span>



                      </a>
                    </div>
                  </div>

  <?php  } ?>
                  

                 


                </ul>
                <div class="owl-spebtn slidebtn">
                  <a class="prev">
                    <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="next">
                    <i class="fa fa-angle-right"></i>
                  </a>
                </div>
              </div>

            </div>

            <script type="text/javascript">
              $(document).ready(function () {
                var article_item = $(".owl-spe.1492424920625");
                article_item.owlCarousel({
                  itemsCustom: [
                    [0, 1],
                    [375, 2],
                    [600, 3],
                    [768, 2],
                    [992, 3],
                    [1200, 4]
                  ],
                  navigation: false,
                  pagination: false
                });

                // Custom Navigation Events
                $(".owl-spebtn .next").click(function () {
                  article_item.trigger('owl.next');
                })
                $(".owl-spebtn .prev").click(function () {
                  article_item.trigger('owl.prev');
                })
              });
            </script>

          </div>
          <div id="shopify-section-1528104886496" class="shopify-section index-section">
            <div data-section-id="1528104886496">
              <div class="grid-uniform collectionItems">



                <div class="beffect">


                  <img src="imgfiles/livelife.png" alt="" />
                  <span class="hover">
                    <span class="r1"></span>
                    <span class="r2"></span>
                    <span class="r3"></span>
                    <span class="r4"></span>
                  </span>


                </div>


              </div>
            </div>

          </div>



<!----- Vitamins ---->
<br clear="all" />
      <div id="shopify-section-1492424920625" class="shopify-section index-section">
            <div data-section-id="1492424920625" data-section-type="special" class="special">
              <h1 class="heading" style="color:#dd3a2e;">
                <span>Vitamins</span>
              </h1>

              <div class="allbgc">



                <ul class="owl-spe 1492424920625 owl-carousel owl-theme">

                <?php
                $CAT = $queryclass->displayItems('VITAMINS');
                
                foreach($CAT as $item){
                  
                  $imagelink = $queryclass->getImage($item['category']);
                  $href = "products_view.php?".$item['id']."";
                ?>
                  <div class="item-row    on-sale" id="product-747392958516">
                    <div class="product-container">

                      <div class="imgblock">

                        <a href="<?php echo $href ?>">
                        <center>
                              <img class="" src="<?php echo $imagelink ?>" class="featured-image" alt="" style="max-height: 150px; align: center;" />
                        </center>
                        </a>
                        <a href="<?php echo $href ?>">
                            <img src="imgfiles/cartout.jpg" style="max-height: 100px; margin-top: 20px;" class="second-img featured-image" alt=""> </a>

                      </div>

                      <div class="wbproductdes text-center">
                        <div class="btnh">
                          <div class="shopify-product-reviews-badge" data-id="747392958516"></div>
                          <h5>
                            <a href="<?php echo $href ?>" class="grid-link__title"><?php echo $item['product'] ?></a>
                          </h5>
                          <div class="product_price">

                            <div class="grid-link__org_price">
                              <span class="Bold-theme-hook-DO-NOT-DELETE bold_product_price" data-override-value-set="1" data-override-value="60000" style="display:none !important;"></span>
                              <span class=money>&#8358 <?php echo $item['price'] ?>.00</span>
                            </div>
                            <span class="dis-price">
                              <span class="Bold-theme-hook-DO-NOT-DELETE bold_product_compare_price" data-override-value-set="1"
                                data-override-value="119900" style="display:none !important;"></span>
                             
                            </span>

                          </div>

                          <p class="thumbdes"></p>
                        </div>


                        <div class="button-group">

                          <div class=" addcart">

                            <form action="#" method="post" class="variants clearfix" id="cart-form-747392958516">
                              <input type="hidden" name="id" value="7661026803764" />
                              <a class="add-cart-btn btn">
                                <svg aria-hidden="true" focusable="false" role="presentation" class="icon iconcartp" viewBox="0 0 459.529 459.529">
                                  <path d="M17,55.231h48.733l69.417,251.033c1.983,7.367,8.783,12.467,16.433,12.467h213.35c6.8,0,12.75-3.967,15.583-10.2
      l77.633-178.5c2.267-5.383,1.7-11.333-1.417-16.15c-3.117-4.817-8.5-7.65-14.167-7.65H206.833c-9.35,0-17,7.65-17,17
      s7.65,17,17,17H416.5l-62.9,144.5H164.333L94.917,33.698c-1.983-7.367-8.783-12.467-16.433-12.467H17c-9.35,0-17,7.65-17,17
      S7.65,55.231,17,55.231z"></path>
                                  <path d="M135.433,438.298c21.25,0,38.533-17.283,38.533-38.533s-17.283-38.533-38.533-38.533S96.9,378.514,96.9,399.764
      S114.183,438.298,135.433,438.298z"></path>
                                  <path d="M376.267,438.298c0.85,0,1.983,0,2.833,0c10.2-0.85,19.55-5.383,26.35-13.317c6.8-7.65,9.917-17.567,9.35-28.05
      c-1.417-20.967-19.833-37.117-41.083-35.7c-21.25,1.417-37.117,20.117-35.7,41.083
      C339.433,422.431,356.15,438.298,376.267,438.298z"></path>
                                </svg>
                                <span class="hidden-xs">add to cart</span>
                              </a>
                            </form>

                          </div>



                          <div class="quickv">
                            <a href="javascript:void(0)" id="fashionable-new-design-shirt" class="quick-view-text">
                              <svg aria-hidden="true" focusable="false" role="presentation" class="icon iconquick" viewBox="0 0 456.795 456.795" style="width: 18px; height: 17px;">
                                <path d="M448.947,218.475c-0.922-1.168-23.055-28.933-61-56.81c-50.705-37.253-105.877-56.944-159.551-56.944
      c-53.672,0-108.844,19.691-159.551,56.944c-37.944,27.876-60.077,55.642-61,56.81L0,228.397l7.846,9.923
      c0.923,1.168,23.056,28.934,61,56.811c50.707,37.252,105.879,56.943,159.551,56.943c53.673,0,108.845-19.691,159.55-56.943
      c37.945-27.877,60.078-55.643,61-56.811l7.848-9.923L448.947,218.475z M228.396,315.039c-47.774,0-86.642-38.867-86.642-86.642
      c0-7.485,0.954-14.751,2.747-21.684l-19.781-3.329c-1.938,8.025-2.966,16.401-2.966,25.013c0,30.86,13.182,58.696,34.204,78.187
      c-27.061-9.996-50.072-24.023-67.439-36.709c-21.516-15.715-37.641-31.609-46.834-41.478c9.197-9.872,25.32-25.764,46.834-41.478
      c17.367-12.686,40.379-26.713,67.439-36.71l13.27,14.958c15.498-14.512,36.312-23.412,59.168-23.412
      c47.774,0,86.641,38.867,86.641,86.642C315.037,276.172,276.17,315.039,228.396,315.039z M368.273,269.875
      c-17.369,12.686-40.379,26.713-67.439,36.709c21.021-19.49,34.203-47.326,34.203-78.188s-13.182-58.697-34.203-78.188
      c27.061,9.997,50.07,24.024,67.439,36.71c21.516,15.715,37.641,31.609,46.834,41.477
      C405.91,238.269,389.787,254.162,368.273,269.875z"></path>
                                <path d="M173.261,211.555c-1.626,5.329-2.507,10.982-2.507,16.843c0,31.834,25.807,57.642,57.642,57.642
      c31.834,0,57.641-25.807,57.641-57.642s-25.807-57.642-57.641-57.642c-15.506,0-29.571,6.134-39.932,16.094l28.432,32.048
      L173.261,211.555z"></path>
                              </svg>
                              <span class="hidden-xs">quickview</span>
                            </a>
                          </div>



                          <div class="add-to-wishlist">
                            <div class="show">
                              <div class="default-wishbutton-fashionable-new-design-shirt loading">
                                <a class="add-in-wishlist-js" href="f#">
                                  <svg aria-hidden="true" focusable="false" role="presentation" class="icon iconwish" viewBox="0 0 67.949 67.949" style="width: 18px; height: 17px;">
                                    <path d="M62.49,11.239c-7.39-7.388-19.412-7.388-26.8,0l-1.716,1.715l-1.715-1.715c-7.388-7.389-19.411-7.389-26.799,0
    c-7.238,7.238-7.285,18.711-0.109,26.688c6.545,7.273,25.848,22.986,26.667,23.651c0.556,0.452,1.225,0.672,1.89,0.672
    c0.022,0,0.044,0,0.065-0.001c0.688,0.032,1.381-0.204,1.955-0.671c0.819-0.665,20.124-16.378,26.671-23.652
    C69.774,29.95,69.727,18.477,62.49,11.239z M58.139,33.913c-5.103,5.669-19.13,17.361-24.166,21.51
    c-5.036-4.148-19.06-15.839-24.162-21.509C4.805,28.35,4.758,20.426,9.702,15.482c2.525-2.524,5.841-3.787,9.157-3.787
    s6.632,1.262,9.157,3.787l3.772,3.772c0.449,0.449,1.015,0.717,1.609,0.811c0.964,0.207,2.01-0.062,2.76-0.81l3.774-3.773
    c5.051-5.049,13.267-5.048,18.315,0C63.19,20.426,63.143,28.35,58.139,33.913z"></path>
                                  </svg>
                                  <span class="tooltip-label hidden-xs">Wishlist</span>
                                </a>
                              </div>
                              <div class="loadding-wishbutton-fashionable-new-design-shirt loading" style="display: none; pointer-events: none">
                                <a class="add_to_wishlist" href="#">
                                  <i class="fa fa-circle-o-notch fa-spin"></i>
                                </a>
                              </div>
                              <div class="added-wishbutton-fashionable-new-design-shirt loading" style="display: none;">
                                <a class="added-wishlist add_to_wishlist" href="#">
                                  <svg aria-hidden="true" focusable="false" role="presentation" class="icon iconwish" viewBox="0 0 176.104 176.104" style="width: 18px; height: 17px;">
                                    <path d="M150.383,18.301c-7.13-3.928-15.308-6.187-24.033-6.187c-15.394,0-29.18,7.015-38.283,18.015
			c-9.146-11-22.919-18.015-38.334-18.015c-8.704,0-16.867,2.259-24.013,6.187C10.388,26.792,0,43.117,0,61.878
			C0,67.249,0.874,72.4,2.457,77.219c8.537,38.374,85.61,86.771,85.61,86.771s77.022-48.396,85.571-86.771
			c1.583-4.819,2.466-9.977,2.466-15.341C176.104,43.124,165.716,26.804,150.383,18.301z" />
                                  </svg>
                                  <span class="tooltip-label hidden-xs">View Wishlist</span>
                                </a>
                              </div>
                            </div>
                          </div>


                        </div>

                      </div>
                      <a href="">


                        <span class="sale">Sale</span>



                      </a>
                    </div>
                  </div>

  <?php  } ?>
                  

                 


                </ul>
                <div class="owl-spebtn slidebtn">
                  <a class="prev">
                    <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="next">
                    <i class="fa fa-angle-right"></i>
                  </a>
                </div>
              </div>

            </div>

            <script type="text/javascript">
              $(document).ready(function () {
                var article_item = $(".owl-spe.1492424920625");
                article_item.owlCarousel({
                  itemsCustom: [
                    [0, 1],
                    [375, 2],
                    [600, 3],
                    [768, 2],
                    [992, 3],
                    [1200, 4]
                  ],
                  navigation: false,
                  pagination: false
                });

                // Custom Navigation Events
                $(".owl-spebtn .next").click(function () {
                  article_item.trigger('owl.next');
                })
                $(".owl-spebtn .prev").click(function () {
                  article_item.trigger('owl.prev');
                })
              });
            </script>

          </div>

        </div>

<!----- /Vitamins ---->


        </div>


        <div id="shopify-section-logo-bar" class="shopify-section index-section">
          <div class="col-xs-12 logoslide">

            <h1 class="heading" style="color:#dd3a2e;">
              <span>Logo list</span>
            </h1>

            <div class="allbgc">

              <ul class="logo-bar owl-theme owl-carousel" id="logo-slider">

                <li class="col-xs-12 logo-bar__item">


                  <img src="cdn.shopify.com/s/files/1/0012/3024/1844/files/menufacture-1_225x150%402x7bff.jpg?v=1528957551" alt="" class="logo-bar__image"
                  />


                </li>

                <li class="col-xs-12 logo-bar__item">


                  <img src="cdn.shopify.com/s/files/1/0012/3024/1844/files/menufacture-2_225x150%402x7cf4.jpg?v=1528957568" alt="" class="logo-bar__image"
                  />


                </li>

                <li class="col-xs-12 logo-bar__item">


                  <img src="cdn.shopify.com/s/files/1/0012/3024/1844/files/menufacture-3_225x150%402xf300.jpg?v=1528957577" alt="" class="logo-bar__image"
                  />


                </li>

                <li class="col-xs-12 logo-bar__item">


                  <img src="cdn.shopify.com/s/files/1/0012/3024/1844/files/menufacture-4_225x150%402xa197.jpg?v=1528957587" alt="" class="logo-bar__image"
                  />


                </li>

                <li class="col-xs-12 logo-bar__item">


                  <img src="cdn.shopify.com/s/files/1/0012/3024/1844/files/menufacture-5_225x150%402x178c.jpg?v=1528957597" alt="" class="logo-bar__image"
                  />


                </li>

                <li class="col-xs-12 logo-bar__item">


                  <img src="cdn.shopify.com/s/files/1/0012/3024/1844/files/menufacture-6_225x150%402x58a1.jpg?v=1528957607" alt="" class="logo-bar__image"
                  />


                </li>

                <li class="col-xs-12 logo-bar__item">


                  <img src="cdn.shopify.com/s/files/1/0012/3024/1844/files/menufacture-7_225x150%402x2abd.jpg?v=1528957615" alt="" class="logo-bar__image"
                  />


                </li>

                <li class="col-xs-12 logo-bar__item">


                  <img src="cdn.shopify.com/s/files/1/0012/3024/1844/files/menufacture-8_225x150%402x0173.jpg?v=1528957625" alt="" class="logo-bar__image"
                  />


                </li>

                <li class="col-xs-12 logo-bar__item">


                  <img src="cdn.shopify.com/s/files/1/0012/3024/1844/files/menufacture-9_225x150%402x5091.jpg?v=1528957637" alt="" class="logo-bar__image"
                  />


                </li>

                <li class="col-xs-12 logo-bar__item">


                  <img src="cdn.shopify.com/s/files/1/0012/3024/1844/files/menufacture-10_225x150%402xb609.jpg?v=1528957647" alt="" class="logo-bar__image"
                  />


                </li>

              </ul>
              <div class="owl-logobtn slidebtn">
                <a class="prev">
                  <i class="fa fa-angle-left"></i>
                </a>
                <a class="next">
                  <i class="fa fa-angle-right"></i>
                </a>
              </div>

            </div>

          </div>

          <script type="text/javascript">
            $(document).ready(function () {
              var article_item = $("#logo-slider");
              article_item.owlCarousel({
                itemsCustom: [
                  [0, 1],
                  [320, 2],
                  [600, 4],
                  [768, 5],
                  [992, 6],
                  [1200, 7],
                  [1410, 8]
                ],
                navigation: false,
                pagination: false
              });

              // Custom Navigation Events
              $(".owl-logobtn .next").click(function () {
                article_item.trigger('owl.next');
              })
              $(".owl-logobtn .prev").click(function () {
                article_item.trigger('owl.prev');
              })
            });
          </script>


        </div>

      </div>
    </div>

  </main>

  <?php require_once __DIR__ . '/includes/footer.inc.php' ?>
  
  <script src="cdn.shopify.com/s/files/1/0012/3024/1844/t/11/assets/timber020a.js?16680006302654876230" type="text/javascript"></script>
  <script src="cdn.shopify.com/s/files/1/0012/3024/1844/t/11/assets/core-files020a.js?16680006302654876230" type="text/javascript"></script>
  <script src="cdn.shopify.com/s/files/1/0012/3024/1844/t/11/assets/theme020a.js?16680006302654876230" type="text/javascript"></script>
  <script src="cdn.shopify.com/s/assets/themes_support/option_selection-ea4f4a242e299f2227b2b8038152223f741e90780c0c766883939e8902542bda.js"
    type="text/javascript"></script>
  <script src="cdn.shopify.com/s/assets/themes_support/api.jquery-0ea851da22ae87c0290f4eeb24bc8b513ca182f3eb721d147c009ae0f5ce14f9.js"
    type="text/javascript"></script>
  <script src="cdn.shopify.com/s/files/1/0012/3024/1844/t/11/assets/shop020a.js?16680006302654876230" type="text/javascript"></script>
  <script src="cdn.shopify.com/s/files/1/0012/3024/1844/t/11/assets/slick020a.js?16680006302654876230" type="text/javascript"></script>





  <script src="cdn.shopify.com/s/files/1/0012/3024/1844/t/11/assets/jquery.themepunch.tools.min020a.js?16680006302654876230"
    type="text/javascript"></script>
  <script src="cdn.shopify.com/s/files/1/0012/3024/1844/t/11/assets/jquery.themepunch.revolution.min020a.js?16680006302654876230"
    type="text/javascript"></script>
  <script src="cdn.shopify.com/s/files/1/0012/3024/1844/t/11/assets/slider-init020a.js?16680006302654876230" type="text/javascript"></script>

  


  <div class="loading-modal modal">Loading</div>
  <div class="ajax-error-modal modal">
    <div class="modal-inner">
      <div class="ajax-error-title">Error</div>
      <div class="ajax-error-message"></div>
    </div>
  </div>
  <div class="ajax-success-modal modal">
    <div class="overlay"></div>
    <div class="content">

      <p class="added-to-cart info">Added to cart</p>
      <p class="added-to-wishlist info">Added to wishlist</p>
      <div class="ajax-left">
        <img class="ajax-product-image img-responsive center-block" alt="modal window" src="index.html" />
      </div>
      <div class="ajax-right">
        <h3 class="ajax-product-title">Product name</h3>
        <span class="ajax_price"></span>
        <span class="ajax_dprice"></span>
        <p class="ajax_des"></p>
        <div class="success-message added-to-cart">
          <a href="cart.html" class="btn">View Cart</a>
        </div>
        <div class="success-message added-to-wishlist">
          <a href="pages/wishlist.html" class="btn">
            <i class="fa fa-heart"></i>View Wishlist</a>
        </div>
      </div>
      <a href="javascript:void(0)" class="close-modal">
        <i class="fa fa-times"></i>
      </a>
    </div>
  </div>

  <script src="cdn.shopify.com/s/javascripts/currencies.js" type="text/javascript"></script>
  <script src="cdn.shopify.com/s/files/1/0012/3024/1844/t/11/assets/jquery.currencies.min020a.js?16680006302654876230" type="text/javascript"></script>

  <script>      


    // Pick your format here:  
    // Can be 'money_format' or 'money_with_currency_format'
    Currency.format = 'money_format';
    var shopCurrency = 'USD';

    /* Sometimes merchants change their shop currency, let's tell our JavaScript file */
    Currency.moneyFormats[shopCurrency].money_with_currency_format = "${{amount}} USD";
    Currency.moneyFormats[shopCurrency].money_format = "${{amount}}";

    var cookieCurrency = Currency.cookie.read();

    // Fix for customer account pages 
    jQuery('span.money span.money').each(function () {
      jQuery(this).parent('span.money').removeClass('money');
    });

    // Add precalculated shop currency to data attribute 
    jQuery('span.money').each(function () {
      jQuery(this).attr('data-currency-USD', jQuery(this).html());
    });

    // Select all your currencies buttons.
    var currencySwitcher = jQuery('#currencies');

    // When the page loads.
    if (cookieCurrency == null || cookieCurrency == shopCurrency) {
      Currency.currentCurrency = shopCurrency;
    }
    else {
      Currency.currentCurrency = cookieCurrency;
      currencySwitcher.val(cookieCurrency);
      Currency.convertAll(shopCurrency, cookieCurrency);
    }

    currencySwitcher.selectize();

    jQuery('.selectize-input input').attr('disabled', 'disabled');

    // When customer clicks on a currency switcher.
    currencySwitcher.change(function () {
      var newCurrency = jQuery(this).val();
      Currency.cookie.write(newCurrency);
      Currency.convertAll(Currency.currentCurrency, newCurrency);
      //show modal
      jQuery("#currencies-modal span").text(newCurrency);
      if (jQuery("#cart-currency").length > 0) {
        jQuery("#cart-currency").text(newCurrency);
      }
      jQuery("#currencies-modal").fadeIn(500).delay(3000).fadeOut(500);
    });

    // For product options.
    var original_selectCallback = window.selectCallback;
    var selectCallback = function (variant, selector) {
      original_selectCallback(variant, selector);
      Currency.convertAll(shopCurrency, jQuery('#currencies').val());
    };
  </script>



  <style type="text/css">
    .selectize-control.plugin-drag_drop.multi>.selectize-input>div.ui-sortable-placeholder {
      visibility: visible !important;
      background: #f2f2f2 !important;
      background: rgba(0, 0, 0, 0.06) !important;
      border: 0 none !important;
      -webkit-box-shadow: inset 0 0 12px 4px #ffffff;
      box-shadow: inset 0 0 12px 4px #ffffff
    }

    .selectize-control.plugin-drag_drop .ui-sortable-placeholder::after {
      content: '!';
      visibility: hidden
    }

    .selectize-control.plugin-drag_drop .ui-sortable-helper {
      -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2)
    }

    .selectize-dropdown-header {
      position: relative;
      padding: 3px 12px;
      border-bottom: 1px solid #d0d0d0;
      background: #f8f8f8;
      -webkit-border-radius: 4px 4px 0 0;
      -moz-border-radius: 4px 4px 0 0;
      border-radius: 4px 4px 0 0
    }

    .selectize-dropdown-header-close {
      position: absolute;
      right: 12px;
      top: 50%;
      color: #333333;
      opacity: 0.4;
      margin-top: -12px;
      line-height: 20px;
      font-size: 20px !important
    }

    .selectize-dropdown-header-close:hover {
      color: #000000
    }

    .selectize-dropdown.plugin-optgroup_columns .optgroup {
      border-right: 1px solid #f2f2f2;
      border-top: 0 none;
      float: left;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box
    }

    .selectize-dropdown.plugin-optgroup_columns .optgroup:last-child {
      border-right: 0 none
    }

    .selectize-dropdown.plugin-optgroup_columns .optgroup:before {
      display: none
    }

    .selectize-dropdown.plugin-optgroup_columns .optgroup-header {
      border-top: 0 none
    }

    .selectize-control.plugin-remove_button [data-value] {
      position: relative;
      padding-right: 24px !important
    }

    .selectize-control.plugin-remove_button [data-value] .remove {
      z-index: 1;
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      width: 17px;
      text-align: center;
      font-weight: bold;
      font-size: 12px;
      color: inherit;
      text-decoration: none;
      vertical-align: middle;
      display: inline-block;
      padding: 1px 0 0 0;
      border-left: 1px solid rgba(0, 0, 0, 0);
      -webkit-border-radius: 0 2px 2px 0;
      -moz-border-radius: 0 2px 2px 0;
      border-radius: 0 2px 2px 0;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box
    }

    .selectize-control.plugin-remove_button [data-value] .remove:hover {
      background: rgba(0, 0, 0, 0.05)
    }

    .selectize-control.plugin-remove_button [data-value].active .remove {
      border-left-color: rgba(0, 0, 0, 0)
    }

    .selectize-control.plugin-remove_button .disabled [data-value] .remove:hover {
      background: none
    }

    .selectize-control.plugin-remove_button .disabled [data-value] .remove {
      border-left-color: rgba(77, 77, 77, 0)
    }

    .selectize-control {
      position: relative
    }

    .selectize-dropdown,
    .selectize-input,
    .selectize-input input {
      line-height: 20px;
      -webkit-font-smoothing: inherit
    }

    .selectize-input,
    .selectize-control.single .selectize-input.input-active {
      cursor: text;
      display: inline-block
    }

    .selectize-input {
      border: 1px solid #cccccc;
      padding: 6px 12px;
      display: inline-block;
      width: 100%;
      overflow: hidden;
      position: relative;
      z-index: 1;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      -webkit-box-shadow: none;
      box-shadow: none;
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      border-radius: 4px
    }

    .selectize-control.multi .selectize-input.has-items {
      padding: 5px 12px 2px
    }

    .selectize-input.disabled,
    .selectize-input.disabled * {
      cursor: default !important
    }

    .selectize-input.focus {
      -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.15);
      box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.15)
    }

    .selectize-input.dropdown-active {
      -webkit-border-radius: 4px 4px 0 0;
      -moz-border-radius: 4px 4px 0 0;
      border-radius: 4px 4px 0 0
    }

    .selectize-input>* {
      vertical-align: baseline;
      display: -moz-inline-stack;
      display: inline-block;
      zoom: 1;
      *display: inline
    }

    .selectize-control.multi .selectize-input>div {
      cursor: pointer;
      margin: 0 3px 3px 0;
      padding: 1px 3px;
      background: #efefef;
      color: #333333;
      border: 0 solid rgba(0, 0, 0, 0)
    }

    .selectize-control.multi .selectize-input>div.active {
      background: #428bca;
      color: #ffffff;
      border: 0 solid rgba(0, 0, 0, 0)
    }

    .selectize-control.multi .selectize-input.disabled>div,
    .selectize-control.multi .selectize-input.disabled>div.active {
      color: #808080;
      background: #ffffff;
      border: 0 solid rgba(77, 77, 77, 0)
    }

    .selectize-input>input {
      padding: 0 !important;
      min-height: 0 !important;
      max-height: none !important;
      max-width: 100% !important;
      margin: 0 !important;
      text-indent: 0 !important;
      border: 0 none !important;
      background: none !important;
      line-height: inherit !important;
      -webkit-user-select: auto !important;
      -webkit-box-shadow: none !important;
      box-shadow: none !important
    }

    .selectize-input>input::-ms-clear {
      display: none
    }

    .selectize-input>input:focus {
      outline: none !important
    }

    .selectize-input::after {
      content: ' ';
      display: block;
      clear: left
    }

    .selectize-input.dropdown-active::before {
      content: ' ';
      display: block;
      position: absolute;
      background: #ffffff;
      height: 1px;
      bottom: 0;
      left: 0;
      right: 0
    }

    .selectize-dropdown {
      position: absolute;
      z-index: 10;
      border: 1px solid #cccccc;
      background: #ffffff;
      margin: -1px 0 0 0;
      border-top: 0 none;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box
    }

    .selectize-dropdown [data-selectable] {
      cursor: pointer;
      overflow: hidden
    }

    .selectize-dropdown [data-selectable] .highlight {
      background: rgba(255, 237, 40, 0.4);
      -webkit-border-radius: 1px;
      -moz-border-radius: 1px;
      border-radius: 1px
    }

    .selectize-dropdown [data-selectable],
    .selectize-dropdown .optgroup-header {
      padding: 3px 12px
    }

    .selectize-dropdown .optgroup:first-child .optgroup-header {
      border-top: 0 none
    }

    .selectize-dropdown .optgroup-header {
      color: #999999;
      background: #ffffff;
      cursor: default
    }

    .selectize-dropdown .active {
      background-color: #f5f5f5;
      color: #262626
    }

    .selectize-dropdown .active.create {
      color: #262626
    }

    .selectize-dropdown .create {
      color: rgba(51, 51, 51, 0.5)
    }

    .selectize-dropdown-content {
      overflow-y: auto;
      overflow-x: hidden;
      max-height: 200px
    }

    .selectize-control.single .selectize-input,
    .selectize-control.single .selectize-input input {
      cursor: pointer
    }

    .selectize-control.single .selectize-input.input-active,
    .selectize-control.single .selectize-input.input-active input {
      cursor: text
    }

    .selectize-control.single .selectize-input:after {
      content: ' ';
      display: block;
      position: absolute;
      top: 50%;
      right: 17px;
      margin-top: -3px;
      width: 0;
      height: 0;
      border-style: solid;
      border-width: 5px 5px 0 5px;
      border-color: #333333 transparent transparent transparent
    }

    .selectize-control.single .selectize-input.dropdown-active:after {
      margin-top: -4px;
      border-width: 0 5px 5px 5px;
      border-color: transparent transparent #333333 transparent
    }

    .selectize-control.rtl.single .selectize-input:after {
      left: 17px;
      right: auto
    }

    .selectize-control.rtl .selectize-input>input {
      margin: 0 4px 0 -2px !important
    }

    .selectize-control .selectize-input.disabled {
      opacity: 0.5;
      background-color: #ffffff
    }

    .selectize-dropdown,
    .selectize-dropdown.form-control {
      height: auto;
      padding: 0;
      margin: 2px 0 0 0;
      z-index: 1000;
      background: #ffffff;
      border: 1px solid rgba(0, 0, 0, 0.15)
    }

    .selectize-dropdown .optgroup-header {
      font-size: 12px;
      line-height: 1.42857143
    }

    .selectize-dropdown .optgroup:first-child:before {
      display: none
    }

    .selectize-dropdown .optgroup:before {
      content: ' ';
      display: block;
      height: 1px;
      margin: 9px 0;
      overflow: hidden;
      background-color: #e5e5e5;
      margin-left: -12px;
      margin-right: -12px
    }

    .selectize-dropdown-content {
      padding: 5px 0
    }

    .selectize-dropdown-header {
      padding: 6px 12px
    }

    .selectize-input {
      min-height: 34px
    }

    .selectize-input.dropdown-active {
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      border-radius: 4px
    }

    .selectize-input.dropdown-active::before {
      display: none
    }

    .selectize-input.focus {
      border-color: #66afe9;
      outline: 0;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6)
    }

    .selectize-control.multi .selectize-input.has-items {
      padding-left: 9px;
      padding-right: 9px
    }

    .selectize-control.multi .selectize-input>div {
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
      border-radius: 3px
    }

    .form-control.selectize-control {
      padding: 0;
      height: auto;
      border: none;
      background: none;
      -webkit-box-shadow: none;
      box-shadow: none;
      -webkit-border-radius: 0;
      -moz-border-radius: 0;
      border-radius: 0
    }
  </style>

  <script type="text/javascript">// <![CDATA[
    jQuery(document).ready(function () {    //
      var $modalParent = jQuery('div.newsletterwrapper'),
        modalWindow = jQuery('#email-modal'),
        emailModal = jQuery('#email-modal'),
        modalPageURL = window.location.pathname;

      modalWindow = modalWindow.html();
      modalWindow = '<div id="email-modal">' + modalWindow + '</div>';
      $modalParent.css({ 'position': 'relative' });
      jQuery('.wrapper #email-modal').remove();
      $modalParent.append(modalWindow);

      if (jQuery.cookie('emailSubcribeModal') != 'closed') {
        openEmailModalWindow();
      };

      jQuery('#email-modal .btn.close').click(function (e) {
        e.preventDefault();
        closeEmailModalWindow();
      });
      jQuery('body').keydown(function (e) {
        if (e.which == 27) {
          closeEmailModalWindow();
          jQuery('body').unbind('keydown');
        }
      });
      jQuery('#mc_embed_signup form').submit(function () {
        if (jQuery('#mc_embed_signup .email').val() != '') {
          closeEmailModalWindow();
        }
      });

      function closeEmailModalWindow() {
        jQuery('#email-modal .modal-window').fadeOut(600, function () {
          jQuery('#email-modal .modal-overlay').fadeOut(600, function () {
            jQuery('#email-modal').hide();
            jQuery.cookie('emailSubcribeModal', 'closed', { expires: 1, path: '/' });
          });
        })
      }
      function openEmailModalWindow() {
        jQuery('#email-modal').fadeIn(600, function () {
          jQuery('#email-modal .modal-window').fadeIn(600);
        });
      }

    });
// ]]
// ]]></script>
  <!-- <div class="newsletterwrapper">
    <div id="email-modal" style="display: none;">
      <div class="modal-overlay"></div>
      <div class="modal-window" style="display: none;">
        <div class="window-window" style="background-image:url('cdn.shopify.com/s/files/1/0012/3024/1844/t/11/assets/popup_newsletter_img020a.jpg?16680006302654876230');">
          <a class="btn close" title="Close Window"></a>
          <div class="window-content">
            <div id="mailchimp-email-subscibe">
              <div class="newsletter-title">
                <h2 class="title">subscribe newsletter</h2>
              </div>
              <p class="message">Subscribe our newsletters now and stay up-to-date with new collections, the latest updates and exclusive offers.</p>
              <div id="mc_embed_signup">


                <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
                  <input type="email" value="" placeholder="Email address" name="EMAIL" id="mail" aria-label="Email address">
                  <button type="submit" class="btn" name="subscribe" id="subscribe">subscribe</button>
                </form>
              </div>
              <span>Note:we do not spam</span>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div> -->


  <script src="cdn.shopify.com/s/files/1/0012/3024/1844/t/11/assets/wow020a.js?16680006302654876230" type="text/javascript"></script>

  <script src="cdn.shopify.com/s/files/1/0012/3024/1844/t/11/assets/latest-products020a.js?16680006302654876230"></script>
  <script src="cdn.shopify.com/s/files/1/0012/3024/1844/t/11/assets/jquery.prettyPhoto020a.js?16680006302654876230"></script>

  <script>
    jQuery(function ($) {
      function dropDown() {
        elementClick = '.header_toggle';
        elementSlide = '.header_slide_element';
        activeClass = 'active';
        $(elementClick).on('click', function (e) {
          e.stopPropagation();
          var subUl = $(this).next(elementSlide);
          $(this).toggleClass(activeClass);

          $(elementClick).not(this).removeClass(activeClass);
          e.preventDefault();
        });
        $(document).on('click', elementSlide, function (e) {
          e.stopPropagation();
        });
        $(document).on('click', function (e) {
          e.stopPropagation();
          if (e.which != 3) {
            var elementHide = $(elementClick).next(elementSlide);
            // $(elementHide).hide();
            $(elementClick).removeClass('active');
          }
        });
      }
      dropDown()
    });
  </script>



  <script>
    $('.qtyplus').click(function (e) {
      e.preventDefault();
      var currentVal = parseInt($('input[name="quantity"]').val());
      if (!isNaN(currentVal)) {
        $('input[name="quantity"]').val(currentVal + 1);
      } else {
        $('input[name="quantity"]').val(1);
      }

    });

    $(".qtyminus").click(function (e) {

      e.preventDefault();
      var currentVal = parseInt($('input[name="quantity"]').val());
      if (!isNaN(currentVal) && currentVal > 0) {
        $('input[name="quantity"]').val(currentVal - 1);
      } else {
        $('input[name="quantity"]').val(1);
      }

    });
  </script>


  <script type="text/javascript">
    $('.quick-view .close-window').click(function () {
      $('.quick-view').switchClass("open-in", "open-out");
    });
  </script>

  <script>
    var x, i, j, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.getElementsByClassName("custom-select");
    for (i = 0; i < x.length; i++) {
      selElmnt = x[i].getElementsByTagName("select")[0];
      /*for each element, create a new DIV that will act as the selected item:*/
      a = document.createElement("DIV");
      a.setAttribute("class", "select-selected");
      a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
      x[i].appendChild(a);
      /*for each element, create a new DIV that will contain the option list:*/
      b = document.createElement("DIV");
      b.setAttribute("class", "select-items select-hide");
      for (j = 1; j < selElmnt.length; j++) {
        /*for each option in the original select element,
        create a new DIV that will act as an option item:*/
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function (e) {
          /*when an item is clicked, update the original select box,
          and the selected item:*/
          var i, s, h;
          s = this.parentNode.parentNode.getElementsByTagName("select")[0];
          h = this.parentNode.previousSibling;
          for (i = 0; i < s.length; i++) {
            if (s.options[i].innerHTML == this.innerHTML) {
              s.selectedIndex = i;
              h.innerHTML = this.innerHTML;
              break;
            }
          }
          h.click();
        });
        b.appendChild(c);
      }
      x[i].appendChild(b);
      a.addEventListener("click", function (e) {
        /*when the select box is clicked, close any other select boxes,
        and open/close the current select box:*/
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
      });
    }
    function closeAllSelect(elmnt) {
      /*a function that will close all select boxes in the document,
      except the current select box:*/
      var x, y, i, arrNo = [];
      x = document.getElementsByClassName("select-items");
      y = document.getElementsByClassName("select-selected");
      for (i = 0; i < y.length; i++) {
        if (elmnt == y[i]) {
          arrNo.push(i)
        } else {
          y[i].classList.remove("select-arrow-active");
        }
      }
      for (i = 0; i < x.length; i++) {
        if (arrNo.indexOf(i)) {
          x[i].classList.add("select-hide");
        }
      }
    }
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);
  </script>

  <script>
    // left column append

    $(document).ready(function () {
      if ($(window).width() <= 767) {
        $('.leftw').appendTo('.rightw');
        $('.collection_sidebar').appendTo('.appfilter');
      }
    });

  </script>

  <script src="mc.boldapps.net/install_assets/bold.multicurrency.js" defer></script>
  <script src="cdn.shopify.com/s/files/1/0012/3024/1844/t/11/assets/bold-currency-bootstrap020a.js?16680006302654876230"
    defer></script>
  <script type="text/template" id="bold-currency-picker-template">
    <div class="BOLD-mc-picker multi">
        <div class="currentCurrency loading" data-current-currency>
            <span class="flag flag-loading" data-flag></span>
            <span class="name" data-name>&bull;&bull;&bull;</span>
            <span class="chevron">
                <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg"><path d="M13.148 10.398l-1.297 1.289q-0.148 0.148-0.352 0.148t-0.352-0.148l-4.148-4.148-4.148 4.148q-0.148 0.148-0.352 0.148t-0.352-0.148l-1.297-1.289q-0.148-0.148-0.148-0.355t0.148-0.355l5.797-5.789q0.148-0.148 0.352-0.148t0.352 0.148l5.797 5.789q0.148 0.148 0.148 0.355t-0.148 0.355z" /></svg>
            </span>
        </div>
        <ul class="currencyList" data-currency-list></ul>
    </div>
</script>

  <script type="text/template" id="bold-currency-picker-mount-template">

<span style="display:none;" class="BOLD-mc-picker-mnt" data-open="up" data-bold-mc-picker-mnt></span>
</script>
</body>
</html>