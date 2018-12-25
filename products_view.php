

<!doctype html>
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js">
<!--<![endif]-->

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- /Added by HTTrack -->
<meta http-equiv="refresh" content="">
<link href="sidebar.css" rel="stylesheet">
<head>
    <!-- Basic page needs ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->


    <!-- Title and description ================================================== -->
    <title>
        Drug Consult Pharmacy
    </title>
    <?php require_once __DIR__ . '/includes/sidebar_cart.inc.php'; ?>
    <?php require_once __DIR__ . '/includes/header.inc.php'; ?>
    <!-- Navigation Menu Starts -->

    <?php 
      //$id = 
      if(isset($_REQUEST['variant']) and !empty($_REQUEST['variant'])){
        $pid = $_REQUEST['variant'];
      }
      else{
        $base->redirectback();
      }
     
      $Product = $queryclass->displayProductsById($pid);
     
      $href = "products_view.php?".$Product['id']."";
      //var_dump($Product);
    ?>



    <?php require_once __DIR__ .'/includes/nav.inc.php'; ?>

    <!-- End of Navigation Menu -->
    <main class="main-content">
        <div class="container">
            <div class="row">
                <nav class="breadcrumb" aria-label="breadcrumbs">

                    <a href="index.php" title="Back to the frontpage">Home</a>
                    <span aria-hidden="true" class="breadcrumb__sep">|</span>
                    <span>Items</span>


                </nav>
                <?php require_once __DIR__ .'/includes/leftsidebar.inc.php'; 
                 $imagelink = $queryclass->getImage($Product['category']);
                ?>
<!-- Begincontent_for_pages -->
<div class="col-md-12 col-sm-8 col-xs-12 rightw">

                    <div class="contback">
        <div class="">
            
            <div itemscope itemtype="#">
  <meta itemprop="url" content="">
  <meta itemprop="image" content="">
  <div class="singlepro row">

    <div class="col-md-4 col-xs-12  sticky">
      
      <div class="product-photo-container" style="padding-top: 30px; padding-left: 30px;">
        
        <a href="<?php echo $imagelink ?>">
          <img id="product-featured-image" src="<?php echo $imagelink ?>" alt="<?php echo $Product['product']; ?>" data-zoom-image="<?php echo $imagelink ?>" />
        </a>

      </div>
      		
      <div class="more-view-wrapper-owlslider" style="padding-top: 5px; padding-left: 30px;">
         <ul id="ProductThumbs" class="product-photo-thumbs owl-carousel owl-theme thumbs">
          
          <li class="col-xs-12">
            <a href="javascript:void(0)" data-image="<?php echo $imagelink ?>" data-zoom-image="<?php echo $imagelink ?>">
            <img src="imgfiles/icons/icon1.jpg" alt="<?php echo $Product['product'] ?>">
            </a>
          </li>

          <li class="col-xs-12">
            <a href="javascript:void(0)" data-image="<?php echo $imagelink ?>" data-zoom-image="<?php echo $imagelink ?>">
              <img src="imgfiles/icons/icon2.png" alt="">
            </a>
          </li>
          
          <li class="col-xs-12">
            <a href="javascript:void(0)" data-image="<?php echo $imagelink ?>" data-zoom-image="<?php echo $imagelink ?>">
             <img src="imgfiles/icons/icon2.png" alt="">
            </a>
          </li>
          
          <li class="col-xs-12">
            <a href="javascript:void(0)" data-image="<?php echo $imagelink ?>" data-zoom-image="<?php echo $imagelink ?>">
             <img src="imgfiles/icons/icon4.png" alt="">
            </a>
          </li>
          
        </ul>
      </div>
      
      
    </div>
    <div class="propage col-md-7 col-xs-12">
      <h2 itemprop="name" class="proname"><?php echo $Product['product'];?> </h2><hr>

       
        <div class="page-des" itemprop="description">
        <?php echo "". $Product['product']. " is stocked under " .$Product['category']. " category in the inventory and is sold in " . $Product['status'] ."(S)" ; ?> 
        </div><hr>
      <div class="shopify-product-reviews-badge" data-id="747392958516"></div><hr>
      <div class="product_single_price">
        <label>Price:</label>
        <div class="product_price">
          
          <span class="grid-link__org_price" >
            <span class="Bold-theme-hook-DO-NOT-DELETE bold_product_price" data-override-value-set="1" data-override-value="" style="display:none !important;"></span><span>&#8358 <?php echo $Product['price'];?></span>
          </span>
          
          <span class="sale_price" style="text-decoration: line-through; opacity: 0.5; font-size: 12px; margin-left: 4px;"><span class="Bold-theme-hook-DO-NOT-DELETE bold_product_compare_price" data-override-value-set="1" style="display:none !important;"></span><span class=money>&#8358 <?php echo round($Product['price']*1.888299902986733823);?></span></span>
          
        </div>
      </div>
        
        
      <div itemprop="offers" itemscope itemtype="#">
        
        <meta itemprop="priceCurrency" content="NGN">
        <link itemprop="availability" href="#">
        
       
        <div class="product-infor">
          <p>
            <label>Category:</label>
            <span><?php echo $Product['category']; ?></span>
          </p>
          
          <p>
            <label>Packaging:</label>
            <span><?php echo $Product['status']; ?></span>
          </p>

          <p class="product-inventory">
            <label>Availability:  </label>              
            <span>
              
              
              
            <?php echo $Product['quantity']; ?>  In Stock
              
              
            </span>
          </p>
          <p>
            <label>Shipping Info:  </label>              
            <span>
               Yes. <?php echo $Product['shipping']; ?> 
            </span>
          </p>
                  
        
          </div>

        <form id="FormCart" action="#" method="post"> 
               
          <div class="singlepro__quantity">
            <div class="quantity-box-section">
              <label>Quantity:</label>
              <div class="quantity-box col-sm-2" >
                <input class="form-control" id="qty" name="qty" style="border: 1px solid #000;" type="number" value="1" size="5"/> 
              </div>
            </div>
            <input type="hidden" id="product_name" name="product_name" value="<?php echo $Product['product']; ?>" />
            <input type="hidden" id="product_id" name="product_id" value="<?php echo $Product['id']; ?>" />
          </div>
            <button type="submit" data-toggle="modal" data-target="#myModal2" name="add" class="btn btn-demo pull-left procart">
              <span id="CartAdded">Add to Cart</span>
            </button>
                     
        </form> 
       
      </div>
      
      <div class="add-to-wishlist p-pagew">     
<div class="show">
  <div class="default-wishbutton-fashionable-new-design-shirt loading">
    <a class="add-in-wishlist-js btn" onclick="AxiosFunc()"><span class="tooltip-label">Add to wishlist</span></a>
  </div>
 <div class="loadding-wishbutton-fashionable-new-design-shirt loading btn" style="display: none; pointer-events: none"><a class="add_to_wishlist" href="fashionable-new-design-shirt.html"></a></div>
  <div class="added-wishbutton-fashionable-new-design-shirt loading" style="display: none;"><a class="added-wishlist btn add_to_wishlist" href="../pages/wishlist.html"><span class="tooltip-label">View Wishlist</span></a></div>
</div>
 </div>
     <hr>    
      <div class="share_this_btn">
   <div class="addthis_toolbox addthis_default_style addthis_32x32_style"  >
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<a class="addthis_button_preferred_3"></a>
<a class="addthis_button_preferred_4"></a>
<a class="addthis_button_compact"></a>
<a class="addthis_counter addthis_bubble_style"></a>
</div>
<script type='text/javascript'>
var addthis_product = 'sfy-2.0.2';
var addthis_plugin_info = {"info_status":"enabled","cms_name":"Shopify","cms_version":null,"plugin_name":"AddThis Sharing Tool","plugin_version":"2.0.2","plugin_mode":"AddThis"};
var addthis_config     = {/*AddThisShopify_config_begins*/pubid:'xa-525fbbd6215b4f1a', button_style:'style3', services_compact:'', ui_delay:0, ui_click:false, ui_language:'', data_track_clickback:true, data_ga_tracker:'', custom_services:'', custom_services_size:true/*AddThisShopify_config_ends*/};
</script>
<script type='text/javascript' src='#'></script>
      
      </div>
       </div>
  </div>
     
  </div>
<br><hr><br>

    <!----- Related Items ---->
<br clear="all" />
      <div id="shopify-section-1492424920625" class="shopify-section index-section">
            <div data-section-id="1492424920625" data-section-type="special" class="special">
              <h1 class="heading" style="color:#dd3a2e;">
                <span>Related</span>
              </h1>

              <div class="allbgc">



                <ul class="owl-spe 1492424920625 owl-carousel owl-theme">

                <?php
                $CAT = $queryclass->relatedItems($Product['category']);
                
                foreach($CAT as $item){
                    if($item['id'] != $pid){
                  $imagelink = $queryclass->getImage($item['category']);
                  $href = "products_view.php?".$item['id']."";
                ?>
                  <div class="item-row on-sale" id="product-747392958516">
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

  <?php  } 
  
      }
?>
                  

                 


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


<!----- /Related Items ---->

           

    </div>
</div>

       
        </div>
</div>


  
</div>
          </div>
    

                    </div>

                </div>
<!-- END content_for_pages -->

            </div>
        </div>

    </main>
    <script src="node_modules/axios/dist/axios.min.js"></script>
    <script src="node_modules/qs/dist/qs.js"></script>
    <script src="asset/myscript.js"></script>

    <?php require_once __DIR__ . '/includes/footer.inc.php' ?>
    
    <script>
       
        import axios from 'axios';
        var username = 'Ewebstech';
        axios.get('https://www.google.com')
        .then(function(response){
          console.log(response.data); // ex.: { user: 'Your User'}
          console.log(response.status); // ex.: 200
        });
      
      

    </script>

    </body>

</html>