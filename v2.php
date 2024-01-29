<?php
//echo $_GET['reg'];

if (isset($_GET['reg'])) {
  $number = $_GET['reg'];
  $curl = curl_init();

  curl_setopt_array(
    $curl,
    array(
      CURLOPT_URL => "https://driver-vehicle-licensing.api.gov.uk/vehicle-enquiry/v1/vehicles",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => "{\n\t\"registrationNumber\": \"$number\"\n}",
      CURLOPT_HTTPHEADER => array(
        "x-api-key: O98wO9UJJI1Fv2V4e2ail4usOUXvM6iC6XP4GJyW",
        "Content-Type: application/json"
      ),
    )
  );

  $response = curl_exec($curl);

  curl_close($curl);
}

require __DIR__ . "/vendor/autoload.php";
if (isset($_GET['fname'])) {

  $stripe_secret_key = "sk_test_51OcfOjK1LtX7HFiObLeAVXEJ8ia54fUwhNCinAxoiu6UiB9loKwAvUPPaLzCYc6u0c32l34hAvLKTm342Z8MmqWc00v7oFbZLE";

  \Stripe\Stripe::setApiKey($stripe_secret_key);
  $amount = $_GET['amount'] * 100;
  $checkout_session = \Stripe\Checkout\Session::create(
    [
      'line_items' => [
        [
          'price_data' => [
            'product_data' => [
              'name' => 'insurance',
              'metadata' => [
                'pro_id' => 'reg'
              ]
            ],
            'unit_amount' => $amount,
            'currency' => 'gbp',
          ],
          'quantity' => 1
        ]
      ],
      'mode' => 'payment',
      'success_url' => 'https://konstructionpro.site/carreg/edit/v2.php?success=1',
      'cancel_url' => 'https://konstructionpro.site/carreg/edit/v2.php?error=1',
    ]
  );
  http_response_code(303);
  header("Location: " . $checkout_session->url);
}
?>
<html lang="en" data-n-head="">

<head>
  <meta data-n-head="ssr" charset="utf-8">
  <meta data-n-head="ssr" name="viewport" content="width=device-width,initial-scale=1">
  <meta data-n-head="ssr" data-hid="description" name="description" content="">
  <meta data-n-head="ssr" name="format-detection" content="telephone=no">
  <title>Temporary Insurance Instant Quote | 1hr- 1 Short Term Insurance |Go Direct  </title>
  <link data-n-head="ssr" rel="icon" type="image/x-icon" href="/favicon.ico">
  <link data-n-head="ssr" rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;display=swap">
  <link data-n-head="ssr" rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/@mdi/font@latest/css/materialdesignicons.min.css">





  <link rel="preload" href="_nuxt/25ce5c3.js" as="script">

  <link rel="stylesheet" type="text/css" href="styles.css"
    data-vue-ssr-id="d377a398:0 4d712f29:0 12efc3fb:0 3793b0ca:0 2690702c:0 3c5b6726:0 2b58e4b2:0 5d4c93ae:0 49484a70:0 9b8fdcf0:0 16191f7a:0 0266779e:0 314cea4f:0 19dbdb11:0 8b480f8e:0 14fdb664:0 75d9d316:0 5932e966:0 32cdb29c:0 7615c920:0 35ad0744:0 315e86dc:0 2b389df6:0 2697d5c2:0 b95c8a74:0 234e07d2:0 dd13877e:0 3567d272:0 c2a6fc3c:0">
  <link rel="stylesheet" type="text/css" href="styles1.css">
  <link rel="stylesheet" type="text/css" href="mine.css">


  <!--<link rel="preload" href="_nuxt/static/1705401445/state.js" as="script">
    <link rel="preload" href="_nuxt/static/1705401445/payload.js" as="script">
    <link rel="preload" href="_nuxt/static/1705401445/manifest.js" as="script"> -->
  <style type="text/css">
    h1[data-v-35e10596] {
      font-size: 20px
    }
  </style>
  <script async="" src="https://widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js"></script>
  <!--<script charset="utf-8" src="_nuxt/static/1705401445/manifest.js"></script>
    <script charset="utf-8" src="_nuxt/static/1705401445/payload.js"></script> -->


  <!--<script charset="utf-8" src="_nuxt/a1df162.js"></script>
    <script charset="utf-8" src="_nuxt/61c0c64.js"></script>
    <script charset="utf-8" src="_nuxt/15675dd.js"></script>
    <script charset="utf-8" src="_nuxt/90fbd91.js"></script>-->

    <!--
  <script id="tmx_tags_js" type="text/javascript"
    src="https://muziwakk.#/630gzhwxbfsm5poi.js?mqfzojoh6r8lfio6=96si7pc0&amp;jqj2rdkd1rncpks0=2-105d70-18d11d8e8cc-9bc3c7a&amp;8hh0ic6wespfq7d6=1">
    </script>


  <meta http-equiv="origin-trial"
    content="AymqwRC7u88Y4JPvfIF2F37QKylC04248hLCdJAsh8xgOfe/dVJPV3XS3wLFca1ZMVOtnBfVjaCMTVudWM//5g4AAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjk1MTY3OTk5LCJpc1RoaXJkUGFydHkiOnRydWV9">
  <script type="text/javascript" async=""
    src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/622512607/?random=1705580880609&amp;cv=11&amp;fst=1705580880609&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45He41a0v813094902&amp;gcd=11r1r1l1l5&amp;dma=0&amp;u_w=1536&amp;u_h=864&amp;url=https%3A%2F%2Fbuy.v2.#%2F%3Freg%3DGF17HNO%26gclid%3DCj0KCQiAhomtBhDgARIsABcaYyk9Ay2CwP-IbqAoSZdmOAwmqtDGckvjKwY-bj1mK1eS7rjjGAL8HnoaAlk5EALw_wcB&amp;ref=https%3A%2F%2F#%2F&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Temporary%20Insurance%20Instant%20Quote%20%7C%201hr-%201%20Short%20Term%20Insurance%20%7C%20GoShorty&amp;auid=607326266.1705515086&amp;uaa=x86&amp;uab=64&amp;uafvl=Not_A%2520Brand%3B8.0.0.0%7CChromium%3B120.0.6099.217%7CGoogle%2520Chrome%3B120.0.6099.217&amp;uamb=0&amp;uap=Windows&amp;uapv=15.0.0&amp;uaw=0&amp;rfmt=3&amp;fmt=4">
    </script>
  <script src="https://cdn-ukwest.onetrust.com/scripttemplates/202308.2.0/otBannerSdk.js" async=""
    type="text/javascript"></script>
  <script async="" type="text/javascript" src="https://www.clickcease.com/monitor/stat.js"></script>
  <script src="https://bat.bing.com/p/action/56290114.js" type="text/javascript" async="" data-ueto="ueto_76e7a0ba1e">
  </script>
  <script type="text/javascript" src="/c.webtrends-optimize.com/acs/common/js/5.4/sizzle.min.js" async="true"
    defer="true"></script>
  <script type="text/javascript" src="/c.webtrends-optimize.com/acs/common/js/5.4/common.js" async="true"
    defer="true"></script>
  <script type="text/javascript" src="/c.webtrends-optimize.com/acs/common/js/5.4/wt_debugger.js" async="true"
    defer="true"></script>
  <script type="text/javascript" src="/c.webtrends-optimize.com/acs/common/js/5.4/wt_lib.js" async="true"
    defer="true"></script>

  <script charset="utf-8" src="https://analytics.tiktok.com/i18n/pixel/static/identify_55404.js"></script> -->
</head>

<body>
  <noscript data-n-head="ssr" data-hid="gtm-noscript" data-pbody="true">
   <!-- <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5G37GMM&" height="0" width="0"
      style="display:none;visibility:hidden" title="gtm"></iframe> -->
  </noscript>
  <div id="__nuxt">
    <!---->
    <div id="__layout">
      <div data-app="true" id="app" class="v-application v-application--is-ltr theme--light">
        <div class="v-application--wrap">
          <main class="v-main" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0" data-booted="true">
            <div class="v-main__wrap">
              <div id="gtm--navigation" data-zuko-id="zuko--navigation" class="navigation-container" data-v-66653094="">
                <div class="row grey lighten-2 d-none d-sm-flex header-bar mb-1" data-v-66653094="">
                  <div class="col col-12" data-v-66653094="">
                    <ul class="d-flex flex-row justify-end px-10 pt-2" data-v-66653094="">
                      <li class="my-1 footer-section" data-v-66653094="">
                        <a href="https://#/" target="_blank" id="gtm--navigation-home"
                          data-zuko-id="zuko--navigation-home" class="text-body-1" data-v-66653094=""> Home </a>
                      </li>
                      <li class="my-1 footer-section" data-v-66653094="">
                        <a href="https://#/faqs/" target="_blank" id="gtm--navigation-faqs"
                          data-zuko-id="zuko--navigation-faqs" class="text-body-1" data-v-66653094=""> FAQs </a>
                      </li>
                      <li class="my-1 footer-section" data-v-66653094="">
                        <a href="https://#/blog/" target="_blank" id="gtm--navigation-blog"
                          data-zuko-id="zuko--navigation-blog" class="text-body-1" data-v-66653094=""> Blog </a>
                      </li>
                      <li class="my-1 footer-section" data-v-66653094="">
                        <a href="https://#/contact" target="_blank" id="gtm--navigation-contactUs"
                          data-zuko-id="zuko--navigation-contactUs" class="text-body-1" data-v-66653094=""> Contact us
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="container px-5 py-8" data-v-66653094="">
                  <div class="d-flex justify-space-between align-center" data-v-66653094="">
                    <img src="imgs/logo1.png" alt="Go Direct short term vehicle insurance"
                      class="goshorty-logo" data-v-66653094="">
                    <div class="d-block d-sm-none" data-v-66653094="">
                    <!--  <button type="button"
                        class="v-icon notranslate navigation-bars brandDarkestGrey--text v-icon--link mdi mdi-menu theme--light"
                        data-v-66653094=""></button> -->
                    </div>
                  </div>
                </div>
                <div class="side-menu-container" data-v-66653094="">
                  <ul data-v-66653094="">
                    <li class="my-2 footer-section" data-v-66653094="">
                      <a href="https://#/" target="_blank" id="gtm--navigation-home-mobile"
                        data-zuko-id="zuko--navigation-home-mobile" class="text-decoration-none text-body-1"
                        data-v-66653094=""> Home </a>
                    </li>
                    <li class="my-2 footer-section" data-v-66653094="">
                      <a href="https://#/faqs/" target="_blank" id="gtm--navigation-faqs-mobile"
                        data-zuko-id="zuko--navigation-faqs-mobile" class="text-decoration-none text-body-1"
                        data-v-66653094=""> FAQs </a>
                    </li>
                    <li class="my-2 footer-section" data-v-66653094="">
                      <a href="https://#/blog/" target="_blank" id="gtm--navigation-blog-mobile"
                        data-zuko-id="zuko--navigation-blog-mobile" class="text-decoration-none text-body-1"
                        data-v-66653094=""> Blog </a>
                    </li>
                    <li class="my-2 footer-section" data-v-66653094="">
                      <a href="https://#/contact" target="_blank" id="gtm--navigation-contactUs-mobile"
                        data-zuko-id="zuko--navigation-contactUs-mobile" class="text-decoration-none text-body-1"
                        data-v-66653094=""> Contact us
                      </a>
                    </li>
                  </ul>
                  <div class="close-button-container" data-v-66653094="">
                    <i aria-hidden="true"
                      class="v-icon notranslate close-button mdi mdi-close-circle-outline theme--light"
                      data-v-66653094=""></i>
                  </div>
                </div>
              </div>
              <div class="container" data-v-3b8d5b18="">
                <div id="progress-bar-wrapper" data-v-1d55dd0c="" data-v-3b8d5b18="">
                  <div data-v-1d55dd0c="" class="">
                    <div role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="20"
                      class="v-progress-linear v-progress-linear--rounded v-progress-linear--visible theme--light"
                      style="height:15px" data-v-1d55dd0c="">
                      <div class="v-progress-linear__background brandGreen"
                        style="opacity: 0.3; left: 20%; width: 80%;"></div>
                      <div class="v-progress-linear__buffer"></div>
                      <div class="v-progress-linear__determinate brandGreen" id="progressbar1" style="width: 20%;">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row" data-v-3b8d5b18="" style="display: none;">
                  <div class="text-center col" style="margin-top:50px;margin-bottom:50px" data-v-3b8d5b18="">
                    <div style="max-width:200px;margin-left:auto;margin-right:auto" data-v-3b8d5b18="">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 1000 1000" width="1000" height="1000" preserveAspectRatio="xMidYMid meet"
                        style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;">
                        <defs>
                          <clipPath id="__lottie_element_2">
                            <rect width="1000" height="1000" x="0" y="0"></rect>
                          </clipPath>
                          <g id="__lottie_element_3">
                            <g style="display: block;"
                              transform="matrix(7.800000190734863,0,0,7.800000190734863,-11200,-11199.2197265625)"
                              opacity="1">
                              <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                <g opacity="1" transform="matrix(1,0,0,1,500,499.95001220703125)">
                                  <g opacity="1" transform="matrix(1,0,0,1,500,499.95001220703125)">
                                    <g opacity="1" transform="matrix(1,0,0,1,500,499.95001220703125)">
                                      <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                        <path fill="url(#__lottie_element_6)" fill-opacity="1"
                                          d=" M-12.100000381469727,-20.950000762939453 C-13.899999618530273,-20.950000762939453 -15.5,-19.850000381469727 -16.100000381469727,-18.149999618530273 C-16.100000381469727,-18.149999618530273 -16.100000381469727,-18.149999618530273 -16.100000381469727,-18.049999237060547 C-16.100000381469727,-18.049999237060547 -18.100000381469727,-13.449999809265137 -18.100000381469727,-13.449999809265137 C-18.100000381469727,-13.449999809265137 -22.700000762939453,-13.449999809265137 -22.700000762939453,-13.449999809265137 C-25.100000381469727,-13.449999809265137 -27,-11.550000190734863 -27,-9.149999618530273 C-27,-6.75 -25.100000381469727,-4.849999904632568 -22.700000762939453,-4.849999904632568 C-22.700000762939453,-4.849999904632568 -22.600000381469727,-4.849999904632568 -22.600000381469727,-4.849999904632568 C-23.799999237060547,-3.549999952316284 -24.5,-1.75 -24.5,0.15000000596046448 C-24.5,0.15000000596046448 -24.5,12.449999809265137 -24.5,12.449999809265137 C-24.5,13.149999618530273 -24,13.649999618530273 -23.299999237060547,13.649999618530273 C-23.299999237060547,13.649999618530273 -19.700000762939453,13.649999618530273 -19.700000762939453,13.649999618530273 C-19.700000762939453,13.649999618530273 -19.700000762939453,19.850000381469727 -19.700000762939453,19.850000381469727 C-19.700000762939453,20.549999237060547 -19.200000762939453,21.049999237060547 -18.5,21.049999237060547 C-18.5,21.049999237060547 -11.100000381469727,21.049999237060547 -11.100000381469727,21.049999237060547 C-10.399999618530273,21.049999237060547 -9.899999618530273,20.450000762939453 -9.899999618530273,19.850000381469727 C-9.899999618530273,19.850000381469727 -9.899999618530273,13.649999618530273 -9.899999618530273,13.649999618530273 C-9.899999618530273,13.649999618530273 9.699999809265137,13.649999618530273 9.699999809265137,13.649999618530273 C9.699999809265137,13.649999618530273 9.699999809265137,19.850000381469727 9.699999809265137,19.850000381469727 C9.699999809265137,20.549999237060547 10.199999809265137,21.049999237060547 10.899999618530273,21.049999237060547 C10.899999618530273,21.049999237060547 18.299999237060547,21.049999237060547 18.299999237060547,21.049999237060547 C19,21.049999237060547 19.5,20.450000762939453 19.5,19.850000381469727 C19.5,19.850000381469727 19.5,13.649999618530273 19.5,13.649999618530273 C19.5,13.649999618530273 23.299999237060547,13.649999618530273 23.299999237060547,13.649999618530273 C24,13.649999618530273 24.5,13.050000190734863 24.5,12.449999809265137 C24.5,12.449999809265137 24.5,0.05000000074505806 24.5,0.05000000074505806 C24.5,-1.850000023841858 23.799999237060547,-3.6500000953674316 22.600000381469727,-4.949999809265137 C22.600000381469727,-4.949999809265137 22.700000762939453,-4.949999809265137 22.700000762939453,-4.949999809265137 C25.100000381469727,-4.949999809265137 27,-6.849999904632568 27,-9.25 C27,-11.649999618530273 25.100000381469727,-13.550000190734863 22.700000762939453,-13.550000190734863 C22.700000762939453,-13.550000190734863 18.100000381469727,-13.550000190734863 18.100000381469727,-13.550000190734863 C18.100000381469727,-13.550000190734863 16.100000381469727,-18.149999618530273 16.100000381469727,-18.149999618530273 C16.100000381469727,-18.149999618530273 16.100000381469727,-18.149999618530273 16.100000381469727,-18.25 C15.5,-19.950000762939453 13.899999618530273,-21.049999237060547 12.100000381469727,-21.049999237060547 C12.100000381469727,-21.049999237060547 -12.100000381469727,-21.049999237060547 -12.100000381469727,-21.049999237060547 C-12.100000381469727,-21.049999237060547 -12.100000381469727,-20.950000762939453 -12.100000381469727,-20.950000762939453z M-12.100000381469727,-18.450000762939453 C-12.100000381469727,-18.450000762939453 12,-18.450000762939453 12,-18.450000762939453 C12.600000381469727,-18.450000762939453 13.600000381469727,-17.75 13.800000190734863,-17.25 C13.800000190734863,-17.25 13.800000190734863,-17.25 13.800000190734863,-17.149999618530273 C13.800000190734863,-17.149999618530273 18.100000381469727,-7.25 18.100000381469727,-7.25 C17.799999237060547,-7.25 17.5,-7.349999904632568 17.100000381469727,-7.349999904632568 C17.100000381469727,-7.349999904632568 -17.200000762939453,-7.349999904632568 -17.200000762939453,-7.349999904632568 C-17.5,-7.349999904632568 -17.799999237060547,-7.349999904632568 -18.200000762939453,-7.25 C-18.200000762939453,-7.25 -13.899999618530273,-17.149999618530273 -13.899999618530273,-17.149999618530273 C-13.899999618530273,-17.149999618530273 -13.899999618530273,-17.149999618530273 -13.899999618530273,-17.25 C-13.600000381469727,-17.75 -12.600000381469727,-18.450000762939453 -12.100000381469727,-18.450000762939453 C-12.100000381469727,-18.450000762939453 -12.100000381469727,-18.450000762939453 -12.100000381469727,-18.450000762939453z M-22.700000762939453,-11.050000190734863 C-22.700000762939453,-11.050000190734863 -19.200000762939453,-11.050000190734863 -19.200000762939453,-11.050000190734863 C-19.200000762939453,-11.050000190734863 -20.799999237060547,-7.349999904632568 -20.799999237060547,-7.349999904632568 C-20.799999237060547,-7.349999904632568 -22.700000762939453,-7.349999904632568 -22.700000762939453,-7.349999904632568 C-23.700000762939453,-7.349999904632568 -24.5,-8.149999618530273 -24.5,-9.25 C-24.5,-10.350000381469727 -23.799999237060547,-11.050000190734863 -22.700000762939453,-11.050000190734863z M19.200000762939453,-11.050000190734863 C19.200000762939453,-11.050000190734863 22.700000762939453,-11.050000190734863 22.700000762939453,-11.050000190734863 C23.700000762939453,-11.050000190734863 24.5,-10.25 24.5,-9.149999618530273 C24.5,-8.050000190734863 23.700000762939453,-7.349999904632568 22.700000762939453,-7.349999904632568 C22.700000762939453,-7.349999904632568 20.799999237060547,-7.349999904632568 20.799999237060547,-7.349999904632568 C20.799999237060547,-7.349999904632568 19.200000762939453,-11.050000190734863 19.200000762939453,-11.050000190734863z M-17.200000762939453,-4.949999809265137 C-17.200000762939453,-4.949999809265137 17.100000381469727,-4.949999809265137 17.100000381469727,-4.949999809265137 C19.799999237060547,-4.949999809265137 22,-2.75 22,0.05000000074505806 C22,0.05000000074505806 22,11.149999618530273 22,11.149999618530273 C22,11.149999618530273 -22.100000381469727,11.149999618530273 -22.100000381469727,11.149999618530273 C-22.100000381469727,11.149999618530273 -22.100000381469727,0.05000000074505806 -22.100000381469727,0.05000000074505806 C-22.100000381469727,-2.75 -19.899999618530273,-4.949999809265137 -17.200000762939453,-4.949999809265137 C-17.200000762939453,-4.949999809265137 -17.200000762939453,-4.949999809265137 -17.200000762939453,-4.949999809265137z M-18.5,0.05000000074505806 C-19.200000762939453,0.05000000074505806 -19.700000762939453,0.6499999761581421 -19.700000762939453,1.25 C-19.700000762939453,1.25 -19.700000762939453,7.449999809265137 -19.700000762939453,7.449999809265137 C-19.700000762939453,8.149999618530273 -19.200000762939453,8.649999618530273 -18.5,8.649999618530273 C-18.5,8.649999618530273 -13.5,8.649999618530273 -13.5,8.649999618530273 C-11.199999809265137,8.649999618530273 -9.300000190734863,6.650000095367432 -9.300000190734863,4.349999904632568 C-9.300000190734863,2.049999952316284 -11.100000381469727,0.05000000074505806 -13.5,0.05000000074505806 C-13.5,0.05000000074505806 -18.5,0.05000000074505806 -18.5,0.05000000074505806 C-18.5,0.05000000074505806 -18.5,0.05000000074505806 -18.5,0.05000000074505806z M13.300000190734863,0.05000000074505806 C11,0.05000000074505806 9.100000381469727,2.049999952316284 9.100000381469727,4.349999904632568 C9.100000381469727,6.650000095367432 10.899999618530273,8.649999618530273 13.300000190734863,8.649999618530273 C13.300000190734863,8.649999618530273 18.299999237060547,8.649999618530273 18.299999237060547,8.649999618530273 C19,8.649999618530273 19.5,8.050000190734863 19.5,7.449999809265137 C19.5,7.449999809265137 19.5,1.25 19.5,1.25 C19.5,0.550000011920929 19,0.05000000074505806 18.299999237060547,0.05000000074505806 C18.299999237060547,0.05000000074505806 13.300000190734863,0.05000000074505806 13.300000190734863,0.05000000074505806 C13.300000190734863,0.05000000074505806 13.300000190734863,0.05000000074505806 13.300000190734863,0.05000000074505806z M-17.200000762939453,2.549999952316284 C-17.200000762939453,2.549999952316284 -13.399999618530273,2.549999952316284 -13.399999618530273,2.549999952316284 C-12.5,2.549999952316284 -11.699999809265137,3.3499999046325684 -11.699999809265137,4.449999809265137 C-11.699999809265137,5.550000190734863 -12.5,6.349999904632568 -13.399999618530273,6.349999904632568 C-13.399999618530273,6.349999904632568 -17.200000762939453,6.349999904632568 -17.200000762939453,6.349999904632568 C-17.200000762939453,6.349999904632568 -17.200000762939453,2.549999952316284 -17.200000762939453,2.549999952316284z M13.300000190734863,2.549999952316284 C13.300000190734863,2.549999952316284 17.100000381469727,2.549999952316284 17.100000381469727,2.549999952316284 C17.100000381469727,2.549999952316284 17.100000381469727,6.25 17.100000381469727,6.25 C17.100000381469727,6.25 13.300000190734863,6.25 13.300000190734863,6.25 C12.399999618530273,6.25 11.600000381469727,5.449999809265137 11.600000381469727,4.349999904632568 C11.600000381469727,3.25 12.399999618530273,2.549999952316284 13.300000190734863,2.549999952316284z M-17.200000762939453,13.649999618530273 C-17.200000762939453,13.649999618530273 -12.300000190734863,13.649999618530273 -12.300000190734863,13.649999618530273 C-12.300000190734863,13.649999618530273 -12.300000190734863,18.549999237060547 -12.300000190734863,18.549999237060547 C-12.300000190734863,18.549999237060547 -17.200000762939453,18.549999237060547 -17.200000762939453,18.549999237060547 C-17.200000762939453,18.549999237060547 -17.200000762939453,13.649999618530273 -17.200000762939453,13.649999618530273z M12.300000190734863,13.649999618530273 C12.300000190734863,13.649999618530273 17.200000762939453,13.649999618530273 17.200000762939453,13.649999618530273 C17.200000762939453,13.649999618530273 17.200000762939453,18.549999237060547 17.200000762939453,18.549999237060547 C17.200000762939453,18.549999237060547 12.300000190734863,18.549999237060547 12.300000190734863,18.549999237060547 C12.300000190734863,18.549999237060547 12.300000190734863,13.649999618530273 12.300000190734863,13.649999618530273z">
                                        </path>
                                      </g>
                                    </g>
                                  </g>
                                </g>
                              </g>
                            </g>
                          </g>
                          <linearGradient id="__lottie_element_6" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-44775.55078125" y1="-2531.199951171875" x2="25.385000228881836"
                            y2="15.562999725341797">
                            <stop offset="0%" stop-color="rgb(206,67,255)"></stop>
                            <stop offset="26%" stop-color="rgb(136,97,255)"></stop>
                            <stop offset="51%" stop-color="rgb(66,128,255)"></stop>
                            <stop offset="76%" stop-color="rgb(89,183,205)"></stop>
                            <stop offset="100%" stop-color="rgb(112,237,155)"></stop>
                          </linearGradient>
                          <linearGradient id="__lottie_element_10" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-138" y1="-150" x2="136" y2="102">
                            <stop offset="0%" stop-color="rgb(206,67,255)"></stop>
                            <stop offset="26%" stop-color="rgb(136,97,255)"></stop>
                            <stop offset="51%" stop-color="rgb(66,128,255)"></stop>
                            <stop offset="76%" stop-color="rgb(89,183,205)"></stop>
                            <stop offset="100%" stop-color="rgb(112,237,155)"></stop>
                          </linearGradient>
                          <mask id="__lottie_element_3_1" mask-type="alpha">
                            <use xlink:href="#__lottie_element_3"></use>
                          </mask>
                          <linearGradient id="__lottie_element_15" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-107.3499984741211" y1="-37.29999923706055" x2="4.573999881744385"
                            y2="-37.29999923706055">
                            <stop offset="0%" stop-color="rgb(206,67,255)"></stop>
                            <stop offset="26%" stop-color="rgb(136,97,255)"></stop>
                            <stop offset="51%" stop-color="rgb(66,128,255)"></stop>
                            <stop offset="76%" stop-color="rgb(89,183,205)"></stop>
                            <stop offset="100%" stop-color="rgb(112,237,155)"></stop>
                          </linearGradient>
                          <linearGradient id="__lottie_element_19" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-94.75" y1="-77.6500015258789" x2="17.173999786376953" y2="-77.6500015258789">
                            <stop offset="0%" stop-color="rgb(206,67,255)"></stop>
                            <stop offset="26%" stop-color="rgb(136,97,255)"></stop>
                            <stop offset="51%" stop-color="rgb(66,128,255)"></stop>
                            <stop offset="76%" stop-color="rgb(89,183,205)"></stop>
                            <stop offset="100%" stop-color="rgb(112,237,155)"></stop>
                          </linearGradient>
                          <linearGradient id="__lottie_element_23" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-74.5" y1="-103.6500015258789" x2="37.42399978637695" y2="-103.6500015258789">
                            <stop offset="0%" stop-color="rgb(206,67,255)"></stop>
                            <stop offset="26%" stop-color="rgb(136,97,255)"></stop>
                            <stop offset="51%" stop-color="rgb(66,128,255)"></stop>
                            <stop offset="76%" stop-color="rgb(89,183,205)"></stop>
                            <stop offset="100%" stop-color="rgb(112,237,155)"></stop>
                          </linearGradient>
                          <linearGradient id="__lottie_element_27" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-50.349998474121094" y1="-109.50800323486328" x2="61.57400131225586"
                            y2="-109.50800323486328">
                            <stop offset="0%" stop-color="rgb(206,67,255)"></stop>
                            <stop offset="26%" stop-color="rgb(136,97,255)"></stop>
                            <stop offset="51%" stop-color="rgb(66,128,255)"></stop>
                            <stop offset="76%" stop-color="rgb(89,183,205)"></stop>
                            <stop offset="100%" stop-color="rgb(112,237,155)"></stop>
                          </linearGradient>
                          <linearGradient id="__lottie_element_31" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-27.200000762939453" y1="-94.9000015258789" x2="84.7239990234375"
                            y2="-94.9000015258789">
                            <stop offset="0%" stop-color="rgb(206,67,255)"></stop>
                            <stop offset="26%" stop-color="rgb(136,97,255)"></stop>
                            <stop offset="51%" stop-color="rgb(66,128,255)"></stop>
                            <stop offset="76%" stop-color="rgb(89,183,205)"></stop>
                            <stop offset="100%" stop-color="rgb(112,237,155)"></stop>
                          </linearGradient>
                          <linearGradient id="__lottie_element_35" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-9.800000190734863" y1="-60.79999923706055" x2="102.1240005493164"
                            y2="-60.79999923706055">
                            <stop offset="0%" stop-color="rgb(206,67,255)"></stop>
                            <stop offset="26%" stop-color="rgb(136,97,255)"></stop>
                            <stop offset="51%" stop-color="rgb(66,128,255)"></stop>
                            <stop offset="76%" stop-color="rgb(89,183,205)"></stop>
                            <stop offset="100%" stop-color="rgb(112,237,155)"></stop>
                          </linearGradient>
                          <linearGradient id="__lottie_element_39" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-1.75" y1="-13.699999809265137" x2="110.17400360107422" y2="-13.699999809265137">
                            <stop offset="0%" stop-color="rgb(206,67,255)"></stop>
                            <stop offset="26%" stop-color="rgb(136,97,255)"></stop>
                            <stop offset="51%" stop-color="rgb(66,128,255)"></stop>
                            <stop offset="76%" stop-color="rgb(89,183,205)"></stop>
                            <stop offset="100%" stop-color="rgb(112,237,155)"></stop>
                          </linearGradient>
                          <linearGradient id="__lottie_element_43" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-4.599999904632568" y1="35.099998474121094" x2="107.3239974975586"
                            y2="35.099998474121094">
                            <stop offset="0%" stop-color="rgb(206,67,255)"></stop>
                            <stop offset="26%" stop-color="rgb(136,97,255)"></stop>
                            <stop offset="51%" stop-color="rgb(66,128,255)"></stop>
                            <stop offset="76%" stop-color="rgb(89,183,205)"></stop>
                            <stop offset="100%" stop-color="rgb(112,237,155)"></stop>
                          </linearGradient>
                          <linearGradient id="__lottie_element_47" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-17.649999618530273" y1="76.55000305175781" x2="94.27400207519531"
                            y2="76.55000305175781">
                            <stop offset="0%" stop-color="rgb(206,67,255)"></stop>
                            <stop offset="26%" stop-color="rgb(136,97,255)"></stop>
                            <stop offset="51%" stop-color="rgb(66,128,255)"></stop>
                            <stop offset="76%" stop-color="rgb(89,183,205)"></stop>
                            <stop offset="100%" stop-color="rgb(112,237,155)"></stop>
                          </linearGradient>
                          <linearGradient id="__lottie_element_51" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-38.5" y1="101.1500015258789" x2="73.42400360107422" y2="101.1500015258789">
                            <stop offset="0%" stop-color="rgb(206,67,255)"></stop>
                            <stop offset="26%" stop-color="rgb(136,97,255)"></stop>
                            <stop offset="51%" stop-color="rgb(66,128,255)"></stop>
                            <stop offset="76%" stop-color="rgb(89,183,205)"></stop>
                            <stop offset="100%" stop-color="rgb(112,237,155)"></stop>
                          </linearGradient>
                          <linearGradient id="__lottie_element_55" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-62.95000076293945" y1="106.6500015258789" x2="48.9739990234375" y2="106.6500015258789">
                            <stop offset="0%" stop-color="rgb(206,67,255)"></stop>
                            <stop offset="26%" stop-color="rgb(136,97,255)"></stop>
                            <stop offset="51%" stop-color="rgb(66,128,255)"></stop>
                            <stop offset="76%" stop-color="rgb(89,183,205)"></stop>
                            <stop offset="100%" stop-color="rgb(112,237,155)"></stop>
                          </linearGradient>
                          <linearGradient id="__lottie_element_59" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-85.5" y1="90.44999694824219" x2="26.423999786376953" y2="90.44999694824219">
                            <stop offset="0%" stop-color="rgb(206,67,255)"></stop>
                            <stop offset="26%" stop-color="rgb(136,97,255)"></stop>
                            <stop offset="51%" stop-color="rgb(66,128,255)"></stop>
                            <stop offset="76%" stop-color="rgb(89,183,205)"></stop>
                            <stop offset="100%" stop-color="rgb(112,237,155)"></stop>
                          </linearGradient>
                          <linearGradient id="__lottie_element_63" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-102.1500015258789" y1="55.25" x2="9.77400016784668" y2="55.25">
                            <stop offset="0%" stop-color="rgb(206,67,255)"></stop>
                            <stop offset="26%" stop-color="rgb(136,97,255)"></stop>
                            <stop offset="51%" stop-color="rgb(66,128,255)"></stop>
                            <stop offset="76%" stop-color="rgb(89,183,205)"></stop>
                            <stop offset="100%" stop-color="rgb(112,237,155)"></stop>
                          </linearGradient>
                          <linearGradient id="__lottie_element_67" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-109.9000015258789" y1="10.649999618530273" x2="2.0239999294281006"
                            y2="10.649999618530273">
                            <stop offset="0%" stop-color="rgb(206,67,255)"></stop>
                            <stop offset="26%" stop-color="rgb(136,97,255)"></stop>
                            <stop offset="51%" stop-color="rgb(66,128,255)"></stop>
                            <stop offset="76%" stop-color="rgb(89,183,205)"></stop>
                            <stop offset="100%" stop-color="rgb(112,237,155)"></stop>
                          </linearGradient>
                        </defs>
                        <g clip-path="url(#__lottie_element_2)">
                          <g style="display: block;"
                            transform="matrix(7.797178268432617,0.209794819355011,-0.209794819355011,7.797178268432617,913.5405883789062,558.333984375)"
                            opacity="0.17671941764041996">
                            <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                              <path fill="url(#__lottie_element_67)" fill-opacity="1"
                                d=" M0.8999999761581421,-6.050000190734863 C0.8999999761581421,-1.9500000476837158 0.5,2.049999952316284 -0.4000000059604645,6.050000190734863 C-0.4000000059604645,6.050000190734863 -0.8999999761581421,5.949999809265137 -0.8999999761581421,5.949999809265137 C0,2.049999952316284 0.4000000059604645,-1.9500000476837158 0.4000000059604645,-6.050000190734863 C0.4000000059604645,-6.050000190734863 0.8999999761581421,-6.050000190734863 0.8999999761581421,-6.050000190734863z">
                              </path>
                            </g>
                          </g>
                          <g style="display: block;"
                            transform="matrix(7.797178268432617,0.209794819355011,-0.209794819355011,7.797178268432617,848.3711547851562,732.92431640625)"
                            opacity="0.003996300622626251">
                            <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                              <path fill="url(#__lottie_element_63)" fill-opacity="1"
                                d=" M3.450000047683716,-5.050000190734863 C1.75,-1.350000023841858 -0.3499999940395355,2.1500000953674316 -2.8499999046325684,5.349999904632568 C-2.8499999046325684,5.349999904632568 -3.450000047683716,4.849999904632568 -3.450000047683716,4.849999904632568 C-0.949999988079071,1.75 1.25,-1.75 2.950000047683716,-5.349999904632568 C2.950000047683716,-5.349999904632568 3.450000047683716,-5.050000190734863 3.450000047683716,-5.050000190734863z">
                              </path>
                            </g>
                          </g>
                          <g style="display: none;"
                            transform="matrix(1.3848506212234497,7.676079273223877,-7.676079273223877,1.3848506212234497,187.9354705810547,784.5664672851562)"
                            opacity="0.039267969342820945">
                            <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                              <path fill="url(#__lottie_element_59)" fill-opacity="1"
                                d=" M5.400000095367432,-3.049999952316284 C2.299999952316284,-0.3499999940395355 -1.2000000476837158,1.9500000476837158 -4.800000190734863,3.8499999046325684 C-4.800000190734863,3.8499999046325684 -5.400000095367432,2.549999952316284 -5.400000095367432,2.549999952316284 C-1.7999999523162842,0.8500000238418579 1.600000023841858,-1.350000023841858 4.800000190734863,-3.8499999046325684 C4.800000190734863,-3.8499999046325684 5.400000095367432,-3.049999952316284 5.400000095367432,-3.049999952316284z">
                              </path>
                            </g>
                          </g>
                          <g style="display: none;"
                            transform="matrix(-1.0078907012939453,7.734607696533203,-7.734607696533203,-1.0078907012939453,75.6451416015625,493.86480712890625)"
                            opacity="0.0011617967027713406">
                            <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                              <path fill="url(#__lottie_element_55)" fill-opacity="1"
                                d=" M6.150000095367432,0.05000000074505806 C2.1500000953674316,1.0499999523162842 -2.049999952316284,1.649999976158142 -6.150000095367432,1.75 C-6.150000095367432,1.75 -6.150000095367432,-0.44999998807907104 -6.150000095367432,-0.44999998807907104 C-2.1500000953674316,-0.44999998807907104 1.850000023841858,-0.8500000238418579 5.75,-1.75 C5.75,-1.75 6.150000095367432,0.05000000074505806 6.150000095367432,0.05000000074505806z">
                              </path>
                            </g>
                          </g>
                          <g style="display: none;"
                            transform="matrix(-1.927068829536438,7.558201313018799,-7.558201313018799,-1.927068829536438,145.4473876953125,263.100341796875)"
                            opacity="0.04836262912610735">
                            <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                              <path fill="url(#__lottie_element_51)" fill-opacity="1"
                                d=" M5.699999809265137,3.25 C1.600000023841858,2.450000047683716 -2.5,1.149999976158142 -6.300000190734863,-0.550000011920929 C-6.300000190734863,-0.550000011920929 -5,-3.25 -5,-3.25 C-1.399999976158142,-1.5499999523162842 2.4000000953674316,-0.15000000596046448 6.300000190734863,0.75 C6.300000190734863,0.75 5.699999809265137,3.25 5.699999809265137,3.25z">
                              </path>
                            </g>
                          </g>
                          <g style="display: none;"
                            transform="matrix(-4.058742523193359,6.660826683044434,-6.660826683044434,-4.058742523193359,399.0546875,81.80671691894531)"
                            opacity="0.003638033465044828">
                            <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                              <path fill="url(#__lottie_element_47)" fill-opacity="1"
                                d=" M3.549999952316284,5.550000190734863 C0.15000000596046448,2.950000047683716 -2.950000047683716,-0.05000000074505806 -5.650000095367432,-3.3499999046325684 C-5.650000095367432,-3.3499999046325684 -2.8499999046325684,-5.550000190734863 -2.8499999046325684,-5.550000190734863 C-0.3499999940395355,-2.450000047683716 2.549999952316284,0.44999998807907104 5.650000095367432,2.950000047683716 C5.650000095367432,2.950000047683716 3.549999952316284,5.550000190734863 3.549999952316284,5.550000190734863z">
                              </path>
                            </g>
                          </g>
                          <g style="display: none;"
                            transform="matrix(-5.125704765319824,5.879383563995361,-5.879383563995361,-5.125704765319824,658.2806396484375,98.85857391357422)"
                            opacity="0.016935196191513173">
                            <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                              <path fill="url(#__lottie_element_43)" fill-opacity="1"
                                d=" M0.4000000059604645,6.5 C-1.5,2.5999999046325684 -2.9000000953674316,-1.399999976158142 -3.9000000953674316,-5.599999904632568 C-3.9000000953674316,-5.599999904632568 -0.10000000149011612,-6.5 -0.10000000149011612,-6.5 C0.800000011920929,-2.5999999046325684 2.0999999046325684,1.2000000476837158 3.9000000953674316,4.800000190734863 C3.9000000953674316,4.800000190734863 0.4000000059604645,6.5 0.4000000059604645,6.5z">
                              </path>
                            </g>
                          </g>
                          <g style="display: none;"
                            transform="matrix(-6.361971855163574,4.5127949714660645,-4.5127949714660645,-6.361971855163574,878.0209350585938,292.10235595703125)"
                            opacity="0.0006881517706453622">
                            <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                              <path fill="url(#__lottie_element_39)" fill-opacity="1"
                                d=" M-2.6500000953674316,6.400000095367432 C-2.6500000953674316,2.0999999046325684 -2.1500000953674316,-2.200000047683716 -1.149999976158142,-6.400000095367432 C-1.149999976158142,-6.400000095367432 2.6500000953674316,-5.5 2.6500000953674316,-5.5 C1.75,-1.600000023841858 1.350000023841858,2.4000000953674316 1.350000023841858,6.400000095367432 C1.350000023841858,6.400000095367432 -2.6500000953674316,6.400000095367432 -2.6500000953674316,6.400000095367432z">
                              </path>
                            </g>
                          </g>
                          <g style="display: none;"
                            transform="matrix(-7.019726753234863,3.400505781173706,-3.400505781173706,-7.019726753234863,929.2000732421875,546.896240234375)"
                            opacity="0.001417241992994036">
                            <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                              <path fill="url(#__lottie_element_35)" fill-opacity="1"
                                d=" M-4.900000095367432,4.5 C-3,0.699999988079071 -0.6000000238418579,-2.9000000953674316 2.0999999046325684,-6.199999809265137 C2.0999999046325684,-6.199999809265137 4.900000095367432,-4 4.900000095367432,-4 C2.4000000953674316,-0.8999999761581421 0.30000001192092896,2.5999999046325684 -1.5,6.199999809265137 C-1.5,6.199999809265137 -4.900000095367432,4.5 -4.900000095367432,4.5z">
                              </path>
                            </g>
                          </g>
                          <g style="display: none;"
                            transform="matrix(-7.437467098236084,2.3503386974334717,-2.3503386974334717,-7.437467098236084,828.696044921875,776.5072021484375)"
                            opacity="0.0025069954035267018">
                            <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                              <path fill="url(#__lottie_element_31)" fill-opacity="1"
                                d=" M-6.099999904632568,2 C-2.700000047683716,-0.6000000238418579 1,-2.700000047683716 4.800000190734863,-4.5 C4.800000190734863,-4.5 6.099999904632568,-1.899999976158142 6.099999904632568,-1.899999976158142 C2.5,-0.10000000149011612 -0.8999999761581421,2 -4,4.5 C-4,4.5 -6.099999904632568,2 -6.099999904632568,2z">
                              </path>
                            </g>
                          </g>
                          <g style="display: none;"
                            transform="matrix(-7.667297840118408,1.432671070098877,-1.432671070098877,-7.667297840118408,626.2056884765625,905.7613525390625)"
                            opacity="0.0037667181416358633">
                            <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                              <path fill="url(#__lottie_element_27)" fill-opacity="1"
                                d=" M-6.25,-0.6919999718666077 C-2.1500000953674316,-1.4919999837875366 2.049999952316284,-1.8919999599456787 6.25,-1.7920000553131104 C6.25,-1.7920000553131104 6.25,0.40799999237060547 6.25,0.40799999237060547 C2.25,0.40799999237060547 -1.75,0.9079999923706055 -5.650000095367432,1.8079999685287476 C-5.650000095367432,1.8079999685287476 -6.25,-0.6919999718666077 -6.25,-0.6919999718666077z">
                              </path>
                            </g>
                          </g>
                          <g style="display: none;"
                            transform="matrix(-7.774870872497559,0.6256070733070374,-0.6256070733070374,-7.774870872497559,393.669677734375,909.5979614257812)"
                            opacity="0.00020757942636720372">
                            <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                              <path fill="url(#__lottie_element_23)" fill-opacity="1"
                                d=" M-5.599999904632568,-2.8499999046325684 C-1.600000023841858,-1.850000023841858 2.299999952316284,-0.3499999940395355 6,1.5499999523162842 C6,1.5499999523162842 5.400000095367432,2.8499999046325684 5.400000095367432,2.8499999046325684 C1.7999999523162842,1.149999976158142 -2,-0.25 -6,-1.0499999523162842 C-6,-1.0499999523162842 -5.599999904632568,-2.8499999046325684 -5.599999904632568,-2.8499999046325684z">
                              </path>
                            </g>
                          </g>
                          <g style="display: none;"
                            transform="matrix(-7.7967681884765625,0.22452059388160706,-0.22452059388160706,-7.7967681884765625,211.92088317871094,806.7694091796875)"
                            opacity="0.007321780329889691">
                            <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                              <path fill="url(#__lottie_element_19)" fill-opacity="1"
                                d=" M-3.950000047683716,-4.650000095367432 C-0.8500000238418579,-1.9500000476837158 2.049999952316284,0.949999988079071 4.550000190734863,4.150000095367432 C4.550000190734863,4.150000095367432 3.950000047683716,4.650000095367432 3.950000047683716,4.650000095367432 C1.4500000476837158,1.5499999523162842 -1.4500000476837158,-1.350000023841858 -4.550000190734863,-3.8499999046325684 C-4.550000190734863,-3.8499999046325684 -3.950000047683716,-4.650000095367432 -3.950000047683716,-4.650000095367432z">
                              </path>
                            </g>
                          </g>
                          <g style="display: none;"
                            transform="matrix(-7.799971103668213,0.021411186084151268,-0.021411186084151268,-7.799971103668213,105.31473541259766,640.7039184570312)"
                            opacity="0.023597728479726358">
                            <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                              <path fill="url(#__lottie_element_15)" fill-opacity="1"
                                d=" M-1.75,-5.800000190734863 C-0.05000000074505806,-2.0999999046325684 1.350000023841858,1.7000000476837158 2.25,5.699999809265137 C2.25,5.699999809265137 1.75,5.800000190734863 1.75,5.800000190734863 C0.8500000238418579,1.899999976158142 -0.550000011920929,-1.899999976158142 -2.25,-5.5 C-2.25,-5.5 -1.75,-5.800000190734863 -1.75,-5.800000190734863z">
                              </path>
                            </g>
                          </g>
                          <g mask="url(#__lottie_element_3_1)" style="display: block;">
                            <g transform="matrix(-0.8740900158882141,0,0,-0.9116600155830383,489,477)" opacity="1">
                              <g opacity="1" transform="matrix(1,0,0,1,-3,-11)">
                                <path fill="url(#__lottie_element_10)" fill-opacity="1"
                                  d=" M287,-245 C287,-245 287,245 287,245 C287,245 -287,245 -287,245 C-287,245 -287,-245 -287,-245 C-287,-245 287,-245 287,-245z">
                                </path>
                              </g>
                            </g>
                          </g>
                        </g>
                      </svg>
                    </div>
                    <div style="font-weight:600" data-v-3b8d5b18=""> Finding the vehicle you want to
                      insure... </div>
                  </div>
                </div>
                <div class="row" style="" data-v-3b8d5b18="">
                  <div class="col" data-v-3b8d5b18="">
                    <div class="container pt-0 pt-md-2 justify-center journey-manager-container" data-v-3b8d5b18="">
                      <div class="row">
                        <div class="col">
                          <div data-locale="en-GB" data-businessunit-id="601bf83da023a000010814c1"
                            data-style-height="20px" data-style-width="100%" data-theme="light"
                            class="trustpilot-widget" data-template-id="5419b6ffb0d04a076446a9af"
                            style="position: relative;">
                            <iframe title="Customer reviews powered by Trustpilot" loading="auto"
                              src="https://widget.trustpilot.com/trustboxes/5419b6ffb0d04a076446a9af/index.html?businessunitId=601bf83da023a000010814c1&amp;templateId=5419b6ffb0d04a076446a9af#locale=en-GB&amp;styleHeight=20px&amp;styleWidth=100%25&amp;theme=light"
                              style="position: relative; height: 20px; width: 100%; border-style: none; display: block; overflow: hidden;"></iframe>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-0 mt-md-2" style="" data-v-3b8d5b18="">
                  <div class="pt-0 pt-md-2 col" data-v-3b8d5b18="">
                    <div data-v-4f3c6938="" data-v-3b8d5b18="" refreshonload="true" class="component-fade-enter-to">
                      <div data-v-4f3c6938="" class="cover-details-input">
                        <div data-v-4f3c6938="" class="container cover-details-container quote-step--cover-details">
                          <div class="row align-center justify-center">
                            <div class="vehicle-details-container__title-col pb-0 pb-md-4 col-sm-7 col-12">
                              <h1
                                class="mb-4 vehicle-details-container__title-col__title font-weight-regular font-weight-normal">
                                About the Vehicle you want to insure

                              </h1>
                            </div>
                          </div>
                          <!--CAR DETAILS-->
                          <div class="row mt-0 mt-md-2 text-body-2 text-md-body-1 align-center justify-center mx-md-16"
                            style="border: 0px solid red;">
                            <div class="cover-details-container__cover-details-col pt-6 col-sm-12 col-md-8 col-xl-6 col-12 " id="outer1" >
                               <div class="row justify-content-center align-items-center flex-colmn pb-5"  >
                             
                                           
      
      <!--CAR DETAILS-->
                         
                  <!--CAR DETAILS-->
                                
            
        
        
        
        <style>
          .form-step {
    display: none; /* Hide all steps by default */
}

.navigation-buttons {
    margin-top: 20px;
}
#step1 {
    display: flex;
}

.btn-success{
  background-color: #70ed9b;
  color:black;
}
.btn-primary{
  background-color: #fff;
  color:black;
}

</style>


<style>
      <style>
        /* CSS styles */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        .success-container {
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .success-message {
            margin-top: 20px;
            font-size: 24px;
            color: #333;
        }
</style>
<?php
if (isset($response)) {
  $decodedJson1 = json_decode($response);
}


if (isset($decodedJson1->yearOfManufacture)) {
  ?>
                                                                                                                    <form class="v-form white--text text-left mx-auto " id="multiStepForm" style="border: 0px solid red;">
                                                                                                                    <!-- Step 1 -->
                                                                                                            <div id="step1" class="form-step flex-column mx-1 ">
                                                                                                                 <h1 data-v-4f3c6938="" class="mx-auto white--text text-md-h5 text-body-1 text-center pb-6 pb-md-8 pt-md-2" >
                                                                                                                    Your Cover Details
                                                                                                                  </h1>
                                                                                                              <div data-v-cd6e8740="" data-v-4f3c6938="" width="95%" class="mt-n6">
                                                                                                                                       <div data-v-cd6e8740="" class="d-flex flex-column align-start my-4 px-4 pb-4 v-card v-card--flat v-sheet theme--light rounded-0">
                                                                                                                                         <div data-v-cd6e8740="" class="row" style="width: 100%;">
                                                                                                                                           <div data-v-cd6e8740="" class="vehicle-details-container__vehicle-details-col reg-container">
                                                                                                                                             <div class="registration-header__form-container__registration-input">
                                                                                                                                               <img src="imgs/veh-reg-uk.png" alt="Vehicle Registration Logo" class="registration-header__form-container__registration-input__image">
                                                                                                                                               <div class="v-input registration-header__form-container__registration-input__input v-input--is-label-active v-input--is-dirty v-input--is-readonly theme--light v-text-field v-text-field--is-booted v-text-field--placeholder">
                                                                                                                                                 <div class="v-input__control">
                                                                                                                                                   <div class="v-input__slot">
                                                                                                                                                     <div class="v-text-field__slot">
                                                                                                                                                       <input required="required" autocomplete="off" data-zuko-id="zuko--registrationForm-registration-number" id="gtm--registrationForm-registration-number" placeholder="<?php echo $_GET['reg']; ?>"
                                                                                                                                  readonly="readonly" type="text">
                                                                                                                              </div>
                                                                                                                            </div>
                                                                                                                            <div class="v-text-field__details">
                                                                                                                              <div class="v-messages theme--light">
                                                                                                                                <div class="v-messages__wrapper"></div>
                                                                                                                              </div>
                                                                                                                            </div>
                                                                                                                          </div>
                                                                                                                        </div>
                                                                                                                      </div>
                                                                                                                    </div>
                                                                                                                    <div data-v-cd6e8740="" class="d-flex flex-column py-0 py-md-3 col-sm-auto col-12">
                                                                                                                      <div data-v-cd6e8740="" class="v-card__title font-weight-bold pt-0 mt-2 px-0 card-detail"><?php
                                                                                                                      // echo $response;
                                                                                                                      // Decode the JSON string into a PHP object
                                                                                                                      $decodedJson = json_decode($response);

                                                                                                                      /* Iterate through the object and echo each value
                                                                                                                      foreach ($decodedJson as $key => $value) {
                                                                                                                        echo $key . ': ' . $value . ' ';
                                                                                                                        //echo $value . ' ';
                                                                                                                      } */
                                                                                                                      echo $decodedJson->make . ' ' . $decodedJson->yearOfManufacture . ' ' . $decodedJson->co2Emissions;
                                                                                                                      ?>
                                                                                                                      </div>
                                                                                                                      <div data-v-cd6e8740="" id="vehicle1a" class="v-card__subtitle font-weight-bold pb-2 px-0"><?php echo $decodedJson->make . ' ' . $decodedJson->yearOfManufacture . ' ' . $decodedJson->co2Emissions . ' ' . $decodedJson->fuelType . ' Exp ' . $decodedJson->motExpiryDate; ?>
                                                                                                                    </div>
                                                                                                                    </div>
                                                                                                                    <div data-v-cd6e8740="" class="d-flex align-end justify-end py-0 py-md-3 col col-auto">
                                                                                                                      <a data-v-cd6e8740="" href="./index.php" color="primary" text="" id="gtm--coverDetailsForm-change-vehicle"
                                                                                                                        data-zuko-id="zuko--coverDetailsForm-change-vehicle"
                                                                                                                        class="text-decoration-underline font-weight-bold px-0 px-md-0 text-body-1 mb-2">Change Vehicle</a>
                                                                                                                    </div>
                                                                                                                  </div>
                                                                                                                </div>
                                                                                                              </div>
                                                                                                                <!-- Form fields for step 1 -->
                                                                                                                <div data-v-0d86b310="" class="cover-details-container-label formLabel"> Reason for cover </div>
                                                                                                             <div class="row mb-3 mt-2">
                                                                                                                        <div class="col" style=" ">
                                                                                                                            <select class="form-select px-5 " id="reason" style="border-radius: 5px; background: white; color: #909099; height: 59px; width: 100%; border: 0px solid red; font-family: 'TT Norms Pro DemiBold',sans-serif; font-weight: 500; font-size: 18px;" >
                                                                                                                                <!-- Options here -->
                                                                                                                                <option>- select -</option>
                                                                                                                                  <option value="Borrowing a Car">Borrowing a Car</option>
                                                                                                              <option value="Drive Away Cover">Drive Away Cover</option>
                                                                                                              <option value="Learning to Drive in someone else's Car">Learning to Drive in someone else's Car</option>
                                                                                                              <option value="Learning to Drive in your own Car">Learning to Drive in your own Car</option>
                                                                                                              <option value="Obtain Road Tax">Obtain Road Tax</option>
                                                                                                              <option value="Need cover in an Emergency">Need cover in an Emergency</option>
                                                                                                              <option value="Reason for cover">Reason for cover</option>
                                                                                                              <option value="Problem with Annual Policy">Problem with Annual Policy</option>
                                                                                                              <option value="Sharing Driving on a Long Trip">Sharing Driving on a Long Trip</option>
                                                                                                              <option value="Test Drive">Test Drive</option>
                                                                                                              <option value="Temp Cover for Business Use">Temp Cover for Business Use</option>
                                                                                                              <option value="Moving House">Moving House</option>
                                                                                                              <option value="Back from or going to University, College, School">Back from or going to University, College, School</option>
                                                                                                              <option value="Courtesy Vehicle">Courtesy Vehicle</option>
                                                                                                              <option value="Pre-Booked MOT">Pre-Booked MOT</option>
                                                                                                              <option value="Drive Own Vehicle">Drive Own Vehicle</option>
                                                                                                              <option value="Add a Driver">Add a Driver</option>
                                                                                                              <option value="Buying a Vehicle">Buying a Vehicle</option>
                                                                                                              <option value="Impounded Vehicle Release">Impounded Vehicle Release</option>
                                                                                                                            </select>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <!-- Row 2: Buttons (Hours, Days, Weeks) -->
                                                                                                                       <div data-v-0d86b310="" class="cover-details-container-label formLabel">Duration type?</div>
                                                                                                                    <div class="row mb-3" id="b1s" >
                                                                                                                        <div class="col btnGroup d-flex justify-space-between transparent mt-2 mb-1 v-item-group theme--light v-btn-toggle">
                                                                                                                          <!--  <button type="button" class="  btn btn-success brandDarkestGrey--text px-0 mb-1 widthClass v-btn  v-btn--active v-btn--is-elevated  v-size--default" style="border-radius: 5px; width: 30%;" id="hoursBtn">Hours</button> -->
                                                                                                                            <button type="button" class=" btn btn-success  brandDarkestGrey--text px-0 mb-1 widthClass v-btn  v-btn--active v-btn--is-elevated  v-size--default" style="border-radius: 5px;  width: 47%;"  id="daysBtn">Days</button>
                                                                                                                            <button type="button" class="  btn btn-primary  brandDarkestGrey--text px-0 mb-1 widthClass v-btn  v-btn--active v-btn--is-elevated  v-size--default" style="border-radius: 5px;  width: 47%;" id="weeksBtn">Weeks</button>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <!-- Row 3: 4 Buttons -->
                                                                                                                     <div data-v-0d86b310="" class="cover-details-container-label formLabel">How long do you need cover for?</div>
                                                                                                                    <div class="row mb-3" id="timeOptions">
                                                                                                                        <div id="b2s"  class="col btnGroup d-flex justify-space-between transparent mt-2 mb-1 v-item-group theme--light v-btn-toggle">
                                                                                                                            <button type="button" class="  btn btn-primary brandDarkestGrey--text px-0 mb-1 widthClass v-btn  v-btn--active v-btn--is-elevated  v-size--default" style="border-radius: 5px;  width: 23%;" id="a1">1 Days</button>
                                                                                                                            <button type="button" class=" btn btn-success brandDarkestGrey--text px-0 mb-1 widthClass v-btn  v-btn--active v-btn--is-elevated  v-size--default" style="border-radius: 5px;  width: 23%;"  id="a2">2 Days</button>
                                                                                                                            <button type="button" class=" btn btn-primary brandDarkestGrey--text px-0 mb-1 widthClass v-btn  v-btn--active v-btn--is-elevated  v-size--default" style="border-radius: 5px;  width: 23%;"  id="a3">3 Days</button>
                                                                                                                            <button type="button" class="  btn btn-primary brandDarkestGrey--text px-0 mb-1 widthClass v-btn  v-btn--active v-btn--is-elevated  v-size--default" style="border-radius: 5px;  width: 23%;"  id="a4">5 Days</button>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <!-- Row 4: Select Input -->
                                                                                                                       <div data-v-0d86b310="" class="cover-details-container-label formLabel">Start date?</div>
                                                                                                                    <div class="row">
                                                                                                                        <div class="col">
                                                                                                                           <select id="dateSelect" class="form-select px-5 " style="border-radius: 5px; background: white; color: #909099; height: 59px; width: 100%; border: 0px solid red; font-family: 'TT Norms Pro DemiBold',sans-serif; font-weight: 500; font-size: 18px;"></select>

                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                            </div>

                                                                                                            <!-- Step 2 -->
                                                                                                            <div id="step2" class="form-step flex-column mx-1 " style="border:0px solid blue;  " >
                                                                                                                <!-- Form fields for step 2 -->
                                                                                                                 <h1 data-v-4f3c6938="" class="mx-auto white--text text-md-h5 text-body-1 text-center pb-6 pb-md-8 pt-md-2 mb-5" >
                                                                                                                    Please enter the details of the driver to be insured
                                                                                                                  </h1>
 
                                                                                                                <!-- Row 3: 4 Buttons -->
                                                                                                                     <div data-v-0d86b310="" class="cover-details-container-label formLabel" style="width: 100%;" >Title</div>
                                                                                                                    <div class="row mb-3" id="titleOptions" >
                                                                                                                        <div id="title" class="col btnGroup d-flex justify-space-between transparent mt-2 mb-1 v-item-group theme--light v-btn-toggle">
                                                                                                                            <button type="button" class="  btn btn-primary brandDarkestGrey--text px-0 mb-1 widthClass v-btn  v-btn--active v-btn--is-elevated  v-size--default" style="border-radius: 5px;  width: 23%;" id="t1">Mr</button>
                                                                                                                            <button type="button" class=" btn btn-success brandDarkestGrey--text px-0 mb-1 widthClass v-btn  v-btn--active v-btn--is-elevated  v-size--default" style="border-radius: 5px;  width: 23%;"  id="t2">Mrs</button>
                                                                                                                            <button type="button" class=" btn btn-primary brandDarkestGrey--text px-0 mb-1 widthClass v-btn  v-btn--active v-btn--is-elevated  v-size--default" style="border-radius: 5px;  width: 23%;"  id="t3">Miss</button>
                                                                                                                            <button type="button" class="  btn btn-primary brandDarkestGrey--text px-0 mb-1 widthClass v-btn  v-btn--active v-btn--is-elevated  v-size--default" style="border-radius: 5px;  width: 23%;"  id="t4">Ms</button>
                                                                                                                        </div>
                                                                                                                    </div>


                                                                                                                    <div data-v-0d86b310="" class="mt-5 mb-3 cover-details-container-label formLabel" >First Name</div>
                                                                                                                    <div>
                                                                                                                      <input type="text" id="fname" name="fname" placeholder="First name" class="mt-1"  style="padding-left: 20px; border-radius: 5px; background: white; color: #909099; height: 59px;width: 100%;  border: 0px solid red; font-family: 'TT Norms Pro DemiBold',sans-serif; font-weight: 500; font-size: 18px;" />
                                                                                                                  </div>


                                                                                                                    <div data-v-0d86b310="" class="mt-5 mb-3 cover-details-container-label formLabel" >Surname</div>
                                                                                                                    <div>
                                                                                                                      <input type="text" id="sname" name="sname" placeholder="Surname" class="mt-1"  style="padding-left: 20px; border-radius: 5px; background: white; color: #909099; height: 59px; width: 100%; border: 0px solid red; font-family: 'TT Norms Pro DemiBold',sans-serif; font-weight: 500; font-size: 18px;" />
                                                                                                                  </div>


                                                                                                                  <div data-v-0d86b310="" class="mt-5 mb-3 cover-details-container-label formLabel" >Postcode</div>
                                                                                                                    <div>
                                                                                                                      <input type="text"  id="postcode" name="postcode" placeholder="Postcode" class="mt-1"  style="padding-left: 20px; border-radius: 5px; background: white; color: #909099; height: 59px; width: 100%; border: 0px solid red; font-family: 'TT Norms Pro DemiBold',sans-serif; font-weight: 500; font-size: 18px;" />
                                                                                                                  </div>


                                                                                                                     <div data-v-0d86b310="" class="mt-5 mb-3 cover-details-container-label formLabel" >Address Line 1</div>
                                                                                                                    <div>
                                                                                                                      <input type="text" name="address1" id="address1" placeholder="Address 1" class="mt-1"  style="padding-left: 20px; border-radius: 5px; background: white; color: #909099; height: 59px; width: 100%; border: 0px solid red; font-family: 'TT Norms Pro DemiBold',sans-serif; font-weight: 500; font-size: 18px;" />
                                                                                                                  </div>

                                                                                                                     <div data-v-0d86b310="" class="mt-5 mb-3 cover-details-container-label formLabel" >Address Line 2</div>
                                                                                                                    <div>
                                                                                                                      <input type="text" name="state" placeholder="Address 2" id="state" class="mt-1"  style="padding-left: 20px; border-radius: 5px; background: white; color: #909099; height: 59px; width: 100%; border: 0px solid red; font-family: 'TT Norms Pro DemiBold',sans-serif; font-weight: 500; font-size: 18px;" />
                                                                                                                  </div>

                                                                                                                      <div data-v-0d86b310="" class="mt-5 mb-3 cover-details-container-label formLabel" >City</div>
                                                                                                                    <div>
                                                                                                                      <input type="text" name="city" placeholder="city" id="city" class="mt-1"  style="padding-left: 20px; border-radius: 5px; background: white; color: #909099; height: 59px; width: 100%; border: 0px solid red; font-family: 'TT Norms Pro DemiBold',sans-serif; font-weight: 500; font-size: 18px;" />
                                                                                                                  </div>


                                                                                                                     <div data-v-0d86b310="" class="mt-5 mb-3 cover-details-container-label formLabel" >Date of birth</div>
                                                                                                                    <div>
                                                                                                                      <input type="date" name="dob" id="dob" placeholder="DD/MM/YYYY" class="mt-1"  style="padding-left: 20px; border-radius: 5px; background: white; color: #909099; height: 59px; width: 100%; border: 0px solid red; font-family: 'TT Norms Pro DemiBold',sans-serif; font-weight: 500; font-size: 18px;" />
                                                                                                                  </div>


                                                                                                                     <div data-v-0d86b310="" class="mt-5 mb-3 cover-details-container-label formLabel" >What do you do for a living?</div>
                                                                                                                    <div>
                                                                                                                      <input type="text" name="occupation" id="occupation" placeholder="Type your occupation" class="mt-1"  style="padding-left: 20px; border-radius: 5px; background: white; color: #909099; height: 59px; width: 100%; border: 0px solid red; font-family: 'TT Norms Pro DemiBold',sans-serif; font-weight: 500; font-size: 18px;" />
                                                                                                                  </div>




    
                                                                                                            </div>

                                                                                                            <!-- Step 3 -->
                                                                                                            <div id="step3" class="form-step flex-column mx-1" style="border:0px solid blue;  ">
                                                                                                                 <!-- Form fields for step 2 -->
                                                                                                                 <h1 data-v-4f3c6938="" class="mx-auto white--text text-md-h5 text-body-1 text-center pb-6 pb-md-8 pt-md-2 mb-5" >
      
                                                                                                                  </h1> 
 
                                                                                                                <!-- Row 3: 4 Buttons -->
                                                                                                                     <div data-v-0d86b310="" class="cover-details-container-label formLabel" style="width: 100%;" >Issuing Country</div>
                                                                                                                    <div class="row mb-3" id="countryOptions" >
                                                                                                                        <div class="col btnGroup d-flex justify-space-between transparent mt-2 mb-1 v-item-group theme--light v-btn-toggle">
                                                                                                                            <button type="button" class=" btn btn-primary brandDarkestGrey--text px-0 mb-1 widthClass v-btn  v-btn--active v-btn--is-elevated  v-size--default" style="border-radius: 5px; width: 45%;" id="c1">UK</button>
                                                                                                                            <button type="button" class=" btn btn-success brandDarkestGrey--text px-0 mb-1 widthClass v-btn  v-btn--active v-btn--is-elevated  v-size--default" style="border-radius: 5px;  width: 45%; display: none;"  id="c2">Mrs</button>
                                                                                                                         </div>
                                                                                                                    </div>


                                                                                                                    <div data-v-0d86b310="" class="mt-5 mb-3 cover-details-container-label formLabel" >Licence Type</div>
                                                                                                                    <div>
                                                                                                                      <button type="button" id="ltype" class="col-12 ml-1 btn btn-success brandDarkestGrey--text px-0 mb-1 widthClass v-btn  v-btn--active v-btn--is-elevated  v-size--default" style="border-radius: 5px;"  id="">Full Drivers License</button>
                                                                                                                    </div>


                                                                                                                    <div data-v-0d86b310="" class="mt-5 mb-3 cover-details-container-label formLabel" >Whose vehicle are you learning to drive in?</div>
                                                                                                                    <div class="row mb-3" id="ownerOptions" >
                                                                                                                        <div class="col btnGroup d-flex flex-column justify-space-between transparent mt-2 mb-1 v-item-group theme--light v-btn-toggle">
                                                                                                                            <button type="button" class="  btn btn-primary brandDarkestGrey--text px-0 mb-2 widthClass v-btn  v-btn--active v-btn--is-elevated  v-size--default" style="border-radius: 5px; width: 100%;" id="o1">My Car</button>
                                                                                                                            <button type="button" class=" btn btn-success brandDarkestGrey--text px-0 mb-1 widthClass v-btn  v-btn--active v-btn--is-elevated  v-size--default" style="border-radius: 5px; width: 100%;"  id="o2">Someone Else's Car</button>
                                                                                                                         </div>
                                                                                                                    </div>
        <!-- START -->
        <div  style="display: none;">
  
                                                                                                                <div data-v-0d86b310="" style="display: none;" class="mt-5 mb-3 cover-details-container-label formLabel" >Driving licence number</div>
                                                                                                                  <div id="licencenumber" class="d-flex justify-space-between" >
                                                                                                                    <div class="" style="width: 30%;" >
                                                                                                                    <input type="text" name="d1" placeholder="" class="mt-1"  style="padding: 10px; border-radius: 5px; background: white; color: #909099; height: 59px; width: 100%; border: 0px solid red; font-family: 'TT Norms Pro DemiBold',sans-serif; font-weight: 500; font-size: 18px;" />
                                                                                                                    <span class="text-right" style="float: right;" >0/5</span>
                                                                                                                    </div>
                                                                                                                    <div class="" style="width: 30%;" >
                                                                                                                    <input type="text" name="d2" placeholder="" class="mt-1"  style="padding: 10px; border-radius: 5px; background: white; color: #909099; height: 59px; width: 100%; border: 0px solid red; font-family: 'TT Norms Pro DemiBold',sans-serif; font-weight: 500; font-size: 18px;" />
                                                                                                                   <span class="text-right" style="float: right;" >0/6</span>
                                                                                                                    </div>
                                                                                                                    <div class="" style="width: 30%;" >
                                                                                                                    <input type="text" name="d3" placeholder="" class="mt-1"  style="padding: 10px; border-radius: 5px; background: white; color: #909099; height: 59px; width: 100%; border: 0px solid red; font-family: 'TT Norms Pro DemiBold',sans-serif; font-weight: 500; font-size: 18px;" />
                                                                                                                    <span class="text-right" style="float: right;" >0/5</span>
                                                                                                                    </div>
                                                                                                                </div>


                                                                                                                   <div data-v-0d86b310="" class="mt-5 mb-3 cover-details-container-label formLabel" >Name and address of the person that owns the car that you are learning to driver in?
                                                                                                          </div>
                                                                                                          <div data-v-0d86b310="" class="mt-5 mb-3 cover-details-container-label formLabel" >Car owner first name</div>
                                                                                                                  <div>
                                                                                                                    <input type="hidden" name="cfname" id="cfname" placeholder="First name" class="mt-1"  style="padding-left: 20px; border-radius: 5px; background: white; color: #909099; height: 59px;width: 100%;  border: 0px solid red; font-family: 'TT Norms Pro DemiBold',sans-serif; font-weight: 500; font-size: 18px;" />
                                                                                                                </div>


                                                                                                                  <div data-v-0d86b310="" class="mt-5 mb-3 cover-details-container-label formLabel" >Car owner surname</div>
                                                                                                                  <div>
                                                                                                                    <input type="hidden" name="csname" id="csname"placeholder="Surname" class="mt-1"  style="padding-left: 20px; border-radius: 5px; background: white; color: #909099; height: 59px; width: 100%; border: 0px solid red; font-family: 'TT Norms Pro DemiBold',sans-serif; font-weight: 500; font-size: 18px;" />
                                                                                                                </div>


                                                                                                                <div data-v-0d86b310="" class="mt-5 mb-3 cover-details-container-label formLabel" >Car owner postcode</div>
                                                                                                                  <div>
                                                                                                                    <input type="hidden" name="cpostcode" id="cpostcode" placeholder="Postcode" class="mt-1"  style="padding-left: 20px; border-radius: 5px; background: white; color: #909099; height: 59px; width: 100%; border: 0px solid red; font-family: 'TT Norms Pro DemiBold',sans-serif; font-weight: 500; font-size: 18px;" />
                                                                                                                </div>


                                                                                                                   <div data-v-0d86b310="" class="mt-5 mb-3 cover-details-container-label formLabel" >Car owner street line 1</div>
                                                                                                                  <div>
                                                                                                                    <input type="hidden" name="caddress1" id="caddress1" placeholder="Street" class="mt-1"  style="padding-left: 20px; border-radius: 5px; background: white; color: #909099; height: 59px; width: 100%; border: 0px solid red; font-family: 'TT Norms Pro DemiBold',sans-serif; font-weight: 500; font-size: 18px;" />
                                                                                                                </div>

                                                                                                                   <div data-v-0d86b310="" class="mt-5 mb-3 cover-details-container-label formLabel" >Car owner state</div>
                                                                                                                  <div>
                                                                                                                    <input type="hidden" name="cstate" id="cstate" placeholder="state" class="mt-1"  style="padding-left: 20px; border-radius: 5px; background: white; color: #909099; height: 59px; width: 100%; border: 0px solid red; font-family: 'TT Norms Pro DemiBold',sans-serif; font-weight: 500; font-size: 18px;" />
                                                                                                                </div>

                                                                                                                    <div data-v-0d86b310="" class="mt-5 mb-3 cover-details-container-label formLabel" >Car owner city</div>
                                                                                                                  <div>
                                                                                                                    <input type="hidden" name="ccity" id="ccity"  placeholder="city" class="mt-1"  style="padding-left: 20px; border-radius: 5px; background: white; color: #909099; height: 59px; width: 100%; border: 0px solid red; font-family: 'TT Norms Pro DemiBold',sans-serif; font-weight: 500; font-size: 18px;" />
                                                                                                                </div>
        </div>
                                                                                                                <!-- END  -->



                                                                                                                      <div data-v-0d86b310="" class="mt-5 mb-3 cover-details-container-label formLabel" >Is the vehicle insured annually?</div>
                                                                                                                     <div class="col" style=" ">
                                                                                                                            <select name="isinsured" id="isinsured" class="form-select px-5 " style="border-radius: 5px; background: white; color: #909099; height: 59px; width: 100%; border: 0px solid red; font-family: 'TT Norms Pro DemiBold',sans-serif; font-weight: 500; font-size: 18px;" >
                                                                                                                                <!-- Options here -->
                                                                                                                                <option>- select -</option>
                                                                                                                                  <option value="Borrowing a Car">Yes</option>
                                                                                                              <option value="Drive Away Cover">No</option>
                                                                                                                            </select>
                                                                                                                        </div>


                                                                                                                     <div data-v-0d86b310="" class="mt-5 mb-3 cover-details-container-label formLabel" >Mobile number</div>
                                                                                                                    <div>
                                                                                                                      <input type="text" name="ctel" id="ctel" placeholder="07xxxxxxxxx" class="mt-1"  style="padding-left: 20px; border-radius: 5px; background: white; color: #909099; height: 59px; width: 100%; border: 0px solid red; font-family: 'TT Norms Pro DemiBold',sans-serif; font-weight: 500; font-size: 18px;" />
                                                                                                                  </div>


                                                                                                                     <div data-v-0d86b310="" class="mt-5 mb-3 cover-details-container-label formLabel" >What is your email address? </div>
                                                                                                                    <div>
                                                                                                                      <input type="text" name="email" id="email" placeholder="Please enter your email" class="mt-1"  style="padding-left: 20px; border-radius: 5px; background: white; color: #909099; height: 59px; width: 100%; border: 0px solid red; font-family: 'TT Norms Pro DemiBold',sans-serif; font-weight: 500; font-size: 18px;" />
                                                                                                                  </div>
                                                                                                                   <div data-v-0d86b310="" class="mt-5 mb-3 cover-details-container-label formLabel" >Confirm your email address </div>
                                                                                                                    <div>
                                                                                                                      <input type="text" id="email2" name="email2" placeholder="Please enter your email" class="mt-1"  style="padding-left: 20px; border-radius: 5px; background: white; color: #909099; height: 59px; width: 100%; border: 0px solid red; font-family: 'TT Norms Pro DemiBold',sans-serif; font-weight: 500; font-size: 18px;" />
                                                                                                                  </div>
                                                                                                                    <div data-v-0d86b310="" class="mt-5 mb-3 cover-details-container-label formLabel" >By clicking Get Quotes you agree to our Terms & Conditions and Privacy Policy.</div>



                                                                                                            </div>

                                                                                                            <!-- Step 4 -->
                                                                                                            <div id="step4" class="form-step">
                                                                                                            <div data-v-6404c5fc="" data-zuko-id="zuko--quoteForm" class=" d-flex white--text align-center justify-center mt-4 quoteFormContainer container--fluid" id="gtm--quoteForm"><div data-v-6404c5fc="" class="col col-12"><div data-v-6404c5fc="" class="row d-none d-md-flex"><div data-v-6404c5fc="" class="col col-3"><div data-v-6404c5fc="" class="text-body-1 font-weight-bold"><i data-v-6404c5fc="" aria-hidden="true" class="v-icon notranslate brandGreen--text pb-1 pr-1 mdi mdi-check-circle theme--light"></i>
                                                                                                                        Drivers aged 18-75
                                                                                                                      </div></div> <div data-v-6404c5fc="" class="col col-3"><div data-v-6404c5fc="" class="text-body-1 font-weight-bold"><i data-v-6404c5fc="" aria-hidden="true" class="v-icon notranslate brandGreen--text pb-1 pr-1 mdi mdi-check-circle theme--light"></i>Instant Cover available online
                                                                                                                      </div></div> <div data-v-6404c5fc="" class="col col-3"><div data-v-6404c5fc="" class="text-body-1 font-weight-bold text-center"><i data-v-6404c5fc="" aria-hidden="true" class="v-icon notranslate brandGreen--text pb-1 pr-1 mdi mdi-check-circle theme--light"></i>From 1hr - 28 days
                                                                                                                      </div></div> <div data-v-6404c5fc="" class="col col-3"><div data-v-6404c5fc="" class="text-body-1 font-weight-bold"><i data-v-6404c5fc="" aria-hidden="true" class="v-icon notranslate brandGreen--text pb-1 pr-1 mdi mdi-check-circle theme--light"></i>Flexible Pay as you Go cover
                                                                                                                      </div></div></div> <div data-v-6404c5fc="" class="row"><div data-v-6404c5fc="" class="col"><div data-v-6404c5fc="" class="text-h5 text-sm-h4 text-center">
                                                                                                                        Fully Comprehensive Cover for 
                                                                                                                        <span id="durat"></span>
                                                                                                                      </div> <!----></div></div> <div data-v-6404c5fc="" id="gtm--quoteForm-served" data-zuko-id="zuko--quoteForm-served" class="row text-center quote-step--quote-options-quotes-served"><div data-v-6404c5fc="" class="col col-12"><div data-v-62c809ee="" data-v-6404c5fc="" class="row quote-card-container my-1"><div data-v-62c809ee="" class="col-sm-12 col-lg-12 col-12"><div data-v-62c809ee="" class="quote-card py-3 v-card v-sheet theme--light" fill-height=""><div data-v-62c809ee="" class="row px-3 align-center"><div data-v-62c809ee="" align="center" class="col col-6" style="flex: 1 0 20%;"><div data-v-62c809ee="" class="v-image v-responsive theme--light" style="height: 100px; max-height: 100px; max-width: 140px;"><div class="v-responsive__sizer" style="padding-bottom: 28.5714%;"></div><div class="v-image__image v-image__image--contain" style="background-image: url(&quot;https://cdn.#/Strata/Insurer_logos/Granite_Underwriting_Logo_350px.jpg&quot;); background-position: center center;"></div><div class="v-responsive__content" style="width: 350px;"></div></div></div> <div data-v-62c809ee="" class="text-h5 text-xs-h4 text-sm-h3 font-weight-bold brandLightBlue white--text text-center d-flex align-center justify-center col col-6 align-self-stretch" style="flex: 1 0 20%;"><span>£</span><span data-v-62c809ee="" id="price1" ></span></div> <div data-v-62c809ee="" class="col col-6" style="flex: 1 0 20%;"><div data-v-62c809ee="" class="vehicle-value-label text-body-1 text-md-h6 text-center mb-0">
                                                                                                                        Max Vehicle Value
                                                                                                                      </div> <div data-v-62c809ee="" class="text-h6 text-xs-h5 brandDarkGrey--text font-weight-bold text-center">
                                                                                                                        £40,000
                                                                                                                      </div></div> <hr data-v-62c809ee="" role="separator" aria-orientation="vertical" class="my-7 v-divider v-divider--inset v-divider--vertical theme--light"> <div data-v-62c809ee="" class="col col-6" style="flex: 1 0 20%;"><div data-v-62c809ee="" class="compulsory-excess-label text-body-1 text-md-h6 text-center">
                                                                                                                        Compulsory Excess
                                                                                                                      </div> <div data-v-62c809ee="" class="text-h6 text-xs-h5 brandDarkGrey--text font-weight-bold text-center">
                                                                                                                        <span id="price7" ></span>
                                                                                                                      </div></div> <div data-v-62c809ee="" class="col col-12" style="flex: 1 0 20%;"><button data-v-62c809ee="" type="button" class="brandGreen brandDarkestGrey--text mb-2 v-btn v-btn--block v-btn--is-elevated v-btn--has-bg v-btn--rounded theme--light v-size--default" id="nextBtn1" data-zuko-id="zuko--quoteForm-quote-HR-buy"><span class="v-btn__content">Buy Now

                                                                                                                        <i data-v-62c809ee="" aria-hidden="true" class="v-icon notranslate ml-2 mdi mdi-arrow-right-circle-outline theme--light"></i></span></button> <a data-v-62c809ee="" id="gtm--quoteForm-quote-HR-more-information" data-zuko-id="zuko--quoteForm-quote-HR-more-information" class="black--text font-weight-bold text-decoration-underline">More Information</a></div></div></div></div></div></div><div data-v-6404c5fc="" class="col col-12"><div data-v-62c809ee="" data-v-6404c5fc="" class="row quote-card-container my-1"><div data-v-62c809ee="" class="col-sm-12 col-lg-12 col-12"><div data-v-62c809ee="" class="quote-card py-3 v-card v-sheet theme--light" fill-height=""><div data-v-62c809ee="" class="row px-3 align-center"><div data-v-62c809ee="" align="center" class="col col-6" style="flex: 1 0 20%;"><div data-v-62c809ee="" class="v-image v-responsive theme--light" style="height: 100px; max-height: 100px; max-width: 140px;"><div class="v-responsive__sizer" style="padding-bottom: 40.8163%;"></div><div class="v-image__image v-image__image--contain" style="background-image: url(&quot;https://cdn.#/Strata/Insurer_logos/LV.png&quot;); background-position: center center;"></div><div class="v-responsive__content" style="width: 98px;"></div></div></div> <div data-v-62c809ee="" class="text-h5 text-xs-h4 text-sm-h3 font-weight-bold brandLightBlue white--text text-center d-flex align-center justify-center col col-6 align-self-stretch" style="flex: 1 0 20%;"><span>£</span><span data-v-62c809ee="" id="price2" ></span></div> <div data-v-62c809ee="" class="col col-6" style="flex: 1 0 20%;"><div data-v-62c809ee="" class="vehicle-value-label text-body-1 text-md-h6 text-center mb-0">
                                                                                                                        Max Vehicle Value
                                                                                                                      </div> <div data-v-62c809ee="" class="text-h6 text-xs-h5 brandDarkGrey--text font-weight-bold text-center">
                                                                                                                        £65,000
                                                                                                                      </div></div> <hr data-v-62c809ee="" role="separator" aria-orientation="vertical" class="my-7 v-divider v-divider--inset v-divider--vertical theme--light"> <div data-v-62c809ee="" class="col col-6" style="flex: 1 0 20%;"><div data-v-62c809ee="" class="compulsory-excess-label text-body-1 text-md-h6 text-center">
                                                                                                                        Compulsory Excess
                                                                                                                      </div> <div data-v-62c809ee="" class="text-h6 text-xs-h5 brandDarkGrey--text font-weight-bold text-center">
                                                                                                                        £250
                                                                                                                      </div></div> <div data-v-62c809ee="" class="col col-12" style="flex: 1 0 20%;"><button data-v-62c809ee="" type="button" class="brandGreen brandDarkestGrey--text mb-2 v-btn v-btn--block v-btn--is-elevated v-btn--has-bg v-btn--rounded theme--light v-size--default" id="nextBtn2" data-zuko-id="zuko--quoteForm-quote-GU-buy"><span class="v-btn__content">Buy Now

                                                                                                                        <i data-v-62c809ee="" aria-hidden="true" class="v-icon notranslate ml-2 mdi mdi-arrow-right-circle-outline theme--light"></i></span></button> <a data-v-62c809ee="" id="gtm--quoteForm-quote-GU-more-information" data-zuko-id="zuko--quoteForm-quote-GU-more-information" class="black--text font-weight-bold text-decoration-underline">More Information</a></div></div></div></div></div></div><div data-v-6404c5fc="" class="col col-12"><div data-v-62c809ee="" data-v-6404c5fc="" class="row quote-card-container my-1"><div data-v-62c809ee="" class="col-sm-12 col-lg-12 col-12"><div data-v-62c809ee="" class="quote-card py-3 v-card v-sheet theme--light" fill-height=""><div data-v-62c809ee="" class="row px-3 align-center"><div data-v-62c809ee="" align="center" class="col col-6" style="flex: 1 0 20%;"><div data-v-62c809ee="" class="v-image v-responsive theme--light" style="height: 100px; max-height: 100px; max-width: 140px;"><div class="v-responsive__sizer" style="padding-bottom: 52%;"></div><div class="v-image__image v-image__image--contain" style="background-image: url(&quot;https://cdn.#/Strata/Email_assets/haven-logo.png&quot;); background-position: center center;"></div><div class="v-responsive__content" style="width: 300px;"></div></div></div> <div data-v-62c809ee="" class="text-h5 text-xs-h4 text-sm-h3 font-weight-bold brandLightBlue white--text text-center d-flex align-center justify-center col col-6 align-self-stretch" style="flex: 1 0 20%;"><span>£</span><span data-v-62c809ee="" id="price3" ></span></div> <div data-v-62c809ee="" class="col col-6" style="flex: 1 0 20%;"><div data-v-62c809ee="" class="vehicle-value-label text-body-1 text-md-h6 text-center mb-0">
                                                                                                                        Max Vehicle Value
                                                                                                                      </div> <div data-v-62c809ee="" class="text-h6 text-xs-h5 brandDarkGrey--text font-weight-bold text-center">
                                                                                                                        £40,000
                                                                                                                      </div></div> <hr data-v-62c809ee="" role="separator" aria-orientation="vertical" class="my-7 v-divider v-divider--inset v-divider--vertical theme--light"> <div data-v-62c809ee="" class="col col-6" style="flex: 1 0 20%;"><div data-v-62c809ee="" class="compulsory-excess-label text-body-1 text-md-h6 text-center">
                                                                                                                        Compulsory Excess
                                                                                                                      </div> <div data-v-62c809ee="" class="text-h6 text-xs-h5 brandDarkGrey--text font-weight-bold text-center">
                                                                                                                        £<span id="price8"></span>
                                                                                                                      </div></div> <div data-v-62c809ee="" class="col col-12" style="flex: 1 0 20%;"><button data-v-62c809ee="" type="button" class="brandGreen brandDarkestGrey--text mb-2 v-btn v-btn--block v-btn--is-elevated v-btn--has-bg v-btn--rounded theme--light v-size--default" id="nextBtn3" data-zuko-id="zuko--quoteForm-quote-HR-buy"><span class="v-btn__content">Buy Now

                                                                                                                        <i data-v-62c809ee="" aria-hidden="true" class="v-icon notranslate ml-2 mdi mdi-arrow-right-circle-outline theme--light"></i></span></button> <a data-v-62c809ee="" id="gtm--quoteForm-quote-HR-more-information" data-zuko-id="zuko--quoteForm-quote-HR-more-information" class="black--text font-weight-bold text-decoration-underline">More Information</a></div></div></div></div></div></div><div data-v-6404c5fc="" class="col col-12"><div data-v-62c809ee="" data-v-6404c5fc="" class="row quote-card-container my-1"><div data-v-62c809ee="" class="col-sm-12 col-lg-12 col-12"><div data-v-62c809ee="" class="quote-card py-3 v-card v-sheet theme--light" fill-height=""><div data-v-62c809ee="" class="row px-3 align-center"><div data-v-62c809ee="" align="center" class="col col-6" style="flex: 1 0 20%;"><div data-v-62c809ee="" class="v-image v-responsive theme--light" style="height: 100px; max-height: 100px; max-width: 140px;"><div class="v-responsive__sizer" style="padding-bottom: 31.5186%;"></div><div class="v-image__image v-image__image--contain" style="background-image: url(&quot;https://cdn.#/Strata/Insurer_logos/KGM.png&quot;); background-position: center center;"></div><div class="v-responsive__content" style="width: 349px;"></div></div></div> <div data-v-62c809ee="" class="text-h5 text-xs-h4 text-sm-h3 font-weight-bold brandLightBlue white--text text-center d-flex align-center justify-center col col-6 align-self-stretch" style="flex: 1 0 20%;"><span>£</span><span data-v-62c809ee="" id="price4" ></span></div> <div data-v-62c809ee="" class="col col-6" style="flex: 1 0 20%;"><div data-v-62c809ee="" class="vehicle-value-label text-body-1 text-md-h6 text-center mb-0">
                                                                                                                        Max Vehicle Value
                                                                                                                      </div> <div data-v-62c809ee="" class="text-h6 text-xs-h5 brandDarkGrey--text font-weight-bold text-center">
                                                                                                                        £50,000
                                                                                                                      </div></div> <hr data-v-62c809ee="" role="separator" aria-orientation="vertical" class="my-7 v-divider v-divider--inset v-divider--vertical theme--light"> <div data-v-62c809ee="" class="col col-6" style="flex: 1 0 20%;"><div data-v-62c809ee="" class="compulsory-excess-label text-body-1 text-md-h6 text-center">
                                                                                                                        Compulsory Excess
                                                                                                                      </div> <div data-v-62c809ee="" class="text-h6 text-xs-h5 brandDarkGrey--text font-weight-bold text-center">
                                                                                                                        £500
                                                                                                                      </div></div> <div data-v-62c809ee="" class="col col-12" style="flex: 1 0 20%;"><button data-v-62c809ee="" type="button" class="brandGreen brandDarkestGrey--text mb-2 v-btn v-btn--block v-btn--is-elevated v-btn--has-bg v-btn--rounded theme--light v-size--default" id="nextBtn4" data-zuko-id="zuko--quoteForm-quote-BF-buy"><span class="v-btn__content">Buy Now

                                                                                                                        <i data-v-62c809ee="" aria-hidden="true" class="v-icon notranslate ml-2 mdi mdi-arrow-right-circle-outline theme--light"></i></span></button> <a data-v-62c809ee="" id="gtm--quoteForm-quote-BF-more-information" data-zuko-id="zuko--quoteForm-quote-BF-more-information" class="black--text font-weight-bold text-decoration-underline">More Information</a></div></div></div></div></div></div><div data-v-6404c5fc="" class="col col-12"><div data-v-62c809ee="" data-v-6404c5fc="" class="row quote-card-container my-1"><div data-v-62c809ee="" class="col-sm-12 col-lg-12 col-12"><div data-v-62c809ee="" class="quote-card py-3 v-card v-sheet theme--light" fill-height=""><div data-v-62c809ee="" class="row px-3 align-center"><div data-v-62c809ee="" align="center" class="col col-6" style="flex: 1 0 20%;"><div data-v-62c809ee="" class="v-image v-responsive theme--light" style="height: 100px; max-height: 100px; max-width: 140px;"><div class="v-responsive__sizer" style="padding-bottom: 52.4038%;"></div><div class="v-image__image v-image__image--contain" style="background-image: url(&quot;https://cdn.#/Strata/Insurer_logos/Mulsanne.png&quot;); background-position: center center;"></div><div class="v-responsive__content" style="width: 208px;"></div></div></div> <div data-v-62c809ee="" class="text-h5 text-xs-h4 text-sm-h3 font-weight-bold brandLightBlue white--text text-center d-flex align-center justify-center col col-6 align-self-stretch" style="flex: 1 0 20%;"><span>£</span><span data-v-62c809ee="" id="price5" ></span></div> <div data-v-62c809ee="" class="col col-6" style="flex: 1 0 20%;"><div data-v-62c809ee="" class="vehicle-value-label text-body-1 text-md-h6 text-center mb-0">
                                                                                                                        Max Vehicle Value
                                                                                                                      </div> <div data-v-62c809ee="" class="text-h6 text-xs-h5 brandDarkGrey--text font-weight-bold text-center">
                                                                                                                        £40,000
                                                                                                                      </div></div> <hr data-v-62c809ee="" role="separator" aria-orientation="vertical" class="my-7 v-divider v-divider--inset v-divider--vertical theme--light"> <div data-v-62c809ee="" class="col col-6" style="flex: 1 0 20%;"><div data-v-62c809ee="" class="compulsory-excess-label text-body-1 text-md-h6 text-center">
                                                                                                                        Compulsory Excess
                                                                                                                      </div> <div data-v-62c809ee="" class="text-h6 text-xs-h5 brandDarkGrey--text font-weight-bold text-center">
                                                                                                                        £900
                                                                                                                      </div></div> <div data-v-62c809ee="" class="col col-12" style="flex: 1 0 20%;"><button data-v-62c809ee="" type="button" class="brandGreen brandDarkestGrey--text mb-2 v-btn v-btn--block v-btn--is-elevated v-btn--has-bg v-btn--rounded theme--light v-size--default" id="nextBtn5" data-zuko-id="zuko--quoteForm-quote-MG-buy"><span class="v-btn__content">Buy Now

                                                                                                                        <i data-v-62c809ee="" aria-hidden="true" class="v-icon notranslate ml-2 mdi mdi-arrow-right-circle-outline theme--light"></i></span></button> <a data-v-62c809ee="" id="gtm--quoteForm-quote-MG-more-information" data-zuko-id="zuko--quoteForm-quote-MG-more-information" class="black--text font-weight-bold text-decoration-underline">More Information</a></div></div></div></div></div></div> <div data-v-6404c5fc="" class="pt-16 pb-4 text-body-2 font-weight-medium col"><p data-v-6404c5fc="">
                                                                                                                       Go Direct  offer Quotes from a range of insurers, covering varying
                                                                                                                        situations that our customers may require short insurance for, it
                                                                                                                        is important that you read and understand our Assumptions and
                                                                                                                        Eligibility Criteria before purchasing any policy from this
                                                                                                                        website.
                                                                                                                      </p> <p data-v-6404c5fc="">
                                                                                                                        To find out more about our range of products visit our FAQ's page
                                                                                                                        for further details or follow the link below to read and download
                                                                                                                        important information.
                                                                                                                      </p></div></div> <!--- <div data-v-6404c5fc="" class="row justify-center"><div data-v-6404c5fc="" id="gtm--quoteForm-back" data-zuko-id="zuko--quoteForm-back" class="cta-back-button" style="margin-top: 0px;"><i data-v-6404c5fc="" aria-hidden="true" class="v-icon notranslate mr-1 mdi mdi-arrow-left-circle-outline theme--light white--text"></i> <span data-v-6404c5fc="">Go Back</span></div></div> --></div></div> 
                                                                                                            </div>

                                                                                                            <!-- Step 5 -->
                                                                                                            <div id="step5" class="form-step mx-auto"  style="" >
                                                                                                            <div class="row mt-0 mt-md-2 text-body-2 text-md-body-1 align-center justify-center ">
                                                                                                              <div class="cover-details-container__cover-details-col col col-12" style="background-color: white;">
                                                                                                                <div data-v-4b93d776="" class="row white d-flex justify-center"><!--<button data-v-4b93d776="" type="button"
        class="cta-submit-button px-12 brandGreen brandDarkestGrey--text d-none d-lg-flex v-btn v-btn--is-elevated v-btn--has-bg v-btn--rounded theme--light v-size--default"
        data-zuko-id="zuko--confirmationForm-submit"><span class="v-btn__content">
          Confirm &amp; Continue
          <i data-v-4b93d776="" aria-hidden="true"
            class="v-icon notranslate ml-2 mdi mdi-arrow-right-circle-outline theme--light"></i></span></button>--></div>
                                                                                                                <div data-v-4b93d776="" class="row">
                                                                                                                  <div data-v-4b93d776="" class="col-lg-4 col-12">
                                                                                                                    <div data-v-2d7c6b22="" data-v-4b93d776=""
                                                                                                                      class="mb-4 confirmation-costs-container mb-4 v-card v-sheet theme--light">
                                                                                                                      <div class="v-card__text brandGrey brandDarkGrey--text text-h6 text-center">Costs &amp; Breakdown of Costs
                                                                                                                      </div>
                                                                                                                      <div class="v-card__text brandGrey">
                                                                                                                        <div data-v-2d7c6b22="" class="row px-0 align-center">
                                                                                                                          <div data-v-2d7c6b22="" class="pr-0 col-sm-6 col-lg-4 col-6">
                                                                                                                            <div data-v-2d7c6b22="" class="costs-title text-body-1 text-md-body-1 font-weight-bold">
                                                                                                                              TOTAL TO PAY:
                                                                                                                            </div>
                                                                                                                          </div>
                                                                                                                          <div data-v-2d7c6b22="" class="pl-0 pl-md-2 col-sm-6 col-lg-8 col-6">
                                                                                                                            <div data-v-2d7c6b22=""
                                                                                                                              class="ml-auto text-h5 text-sm-h4 text-md-h5 text-lg-h4 font-weight-bold brandDarkestGrey--text text-right currency-flex">
                                                                                                                              £<span id="price6"></span>
                                                                                                                              <button data-v-2d7c6b22="" type="button"
                                                                                                                                class="v-icon notranslate v-icon--link mdi mdi-arrow-right-bold-circle theme--light brandGreen--text"
                                                                                                                                style="font-size: 3rem;"></button> <button data-v-2d7c6b22="" type="button"
                                                                                                                                class="v-icon notranslate v-icon--link mdi mdi-arrow-down-bold-circle theme--light brandGreen--text"
                                                                                                                                style="font-size: 3rem; display: none;"></button>
                                                                                                                            </div>
                                                                                                                          </div>
                                                                                                                        </div>
                                                                                                                        <div data-v-2d7c6b22="" class="row mt-0" style="display: none;">
                                                                                                                          <div data-v-2d7c6b22="" class="pt-0 col col-12">
                                                                                                                            <div data-v-2d7c6b22="" role="list" class="v-list brandGrey v-sheet theme--light">
                                                                                                                              <div data-v-2d7c6b22="" role="listbox" class="v-item-group theme--light v-list-item-group">
                                                                                                                                <div data-v-2d7c6b22="" tabindex="0" role="option" aria-selected="false"
                                                                                                                                  class="v-list-item v-list-item--link theme--light">
                                                                                                                                  <div data-v-2d7c6b22="" class="v-list-item__content">
                                                                                                                                    <div data-v-2d7c6b22="" class="v-list-item__title">Premium</div>
                                                                                                                                  </div>
                                                                                                                                  <div data-v-2d7c6b22="" align="right" class="v-list-item__content">
                                                                                                                                    <div data-v-2d7c6b22="" class="v-image v-responsive theme--light"
                                                                                                                                      style="max-width: 50px; display: none;">
                                                                                                                                      <div class="v-responsive__content"></div>
                                                                                                                                    </div>
                                                                                                                                    <div data-v-2d7c6b22="" class="font-weight-bold text-h6">
                                                                                                                                      £124.49
                                                                                                                                    </div>
                                                                                                                                  </div>
                                                                                                                                </div>
                                                                                                                                <hr data-v-2d7c6b22="" role="separator" aria-orientation="horizontal"
                                                                                                                                  class="v-divider theme--light">
                                                                                                                              </div>
                                                                                                                              <div data-v-2d7c6b22="" role="listbox" class="v-item-group theme--light v-list-item-group">
                                                                                                                                <div data-v-2d7c6b22="" tabindex="0" role="option" aria-selected="false"
                                                                                                                                  class="v-list-item v-list-item--link theme--light">
                                                                                                                                  <div data-v-2d7c6b22="" class="v-list-item__content">
                                                                                                                                    <div data-v-2d7c6b22="" class="v-list-item__title">Admin fee</div>
                                                                                                                                  </div>
                                                                                                                                  <div data-v-2d7c6b22="" align="right" class="v-list-item__content">
                                                                                                                                    <div data-v-2d7c6b22="" class="v-image v-responsive theme--light"
                                                                                                                                      style="max-width: 50px; display: none;">
                                                                                                                                      <div class="v-responsive__content"></div>
                                                                                                                                    </div>
                                                                                                                                    <div data-v-2d7c6b22="" class="font-weight-bold text-h6">
                                                                                                                                      £44.48
                                                                                                                                    </div>
                                                                                                                                  </div>
                                                                                                                                </div>
                                                                                                                                <hr data-v-2d7c6b22="" role="separator" aria-orientation="horizontal"
                                                                                                                                  class="v-divider theme--light">
                                                                                                                              </div>
                                                                                                                              <div data-v-2d7c6b22="" class="text-center pt-6">
                                                                                                                                Insurance Premium tax (IPT) is included where applicable
                                                                                                                              </div>
                                                                                                                            </div>
                                                                                                                          </div>
                                                                                                                        </div>
                                                                                                                      </div>
                                                                                                                    </div>
                                                                                                                    <div data-v-1f1c9093="" data-v-4b93d776=""
                                                                                                                      class="confirmation-documents-container mb-4 v-card v-sheet theme--light">
                                                                                                                      <div class="v-card__text brandGrey brandDarkGrey--text text-h6 text-center"> Important Documents </div>
                                                                                                                      <div class="v-card__text brandGrey">
                                                                                                                        <div data-v-1f1c9093="" role="list" class="v-list py-0 v-sheet theme--light">
                                                                                                                          <div data-v-1f1c9093=""
                                                                                                                            class="v-subheader d-block brandGrey brandDarkGrey--text text-subtitle text-center mb-2 theme--light"
                                                                                                                            style="min-width: 100%;">Click below to read</div>
                                                                                                                          <div data-v-1f1c9093="" tabindex="0" role="listitem"
                                                                                                                            class="d-block brandGrey v-list-item v-list-item--link theme--light">
                                                                                                                            <div data-v-1f1c9093="" class="row">
                                                                                                                              <div data-v-1f1c9093="" class="v-list-item__content">
                                                                                                                                <div data-v-1f1c9093="" class="v-list-item__title pt-2 text-wrap">Insurance Product Information
                                                                                                                                  Document (IPID)</div> <!---->
                                                                                                                              </div>
                                                                                                                              <div data-v-1f1c9093="" class="v-list-item__action"><button data-v-1f1c9093="" type="button"
                                                                                                                                  class="black--text mb-0 v-btn v-btn--icon v-btn--round v-btn--rounded theme--light v-size--small brandGreen--text"><span
                                                                                                                                    class="v-btn__content"><i data-v-1f1c9093="" aria-hidden="true"
                                                                                                                                      class="v-icon notranslate mdi mdi-open-in-new theme--light"></i></span></button></div>
                                                                                                                            </div>
                                                                                                                            <div data-v-1f1c9093="" class="row">
                                                                                                                              <hr data-v-1f1c9093="" role="separator" aria-orientation="horizontal" class="v-divider theme--light">
                                                                                                                            </div>
                                                                                                                          </div>
                                                                                                                          <div data-v-1f1c9093="" tabindex="0" role="listitem"
                                                                                                                            class="d-block brandGrey v-list-item v-list-item--link theme--light">
                                                                                                                            <div data-v-1f1c9093="" class="row">
                                                                                                                              <div data-v-1f1c9093="" class="v-list-item__content">
                                                                                                                                <div data-v-1f1c9093="" class="v-list-item__title pt-2 text-wrap">Policy wording</div> <!---->
                                                                                                                              </div>
                                                                                                                              <div data-v-1f1c9093="" class="v-list-item__action mt-6"><button data-v-1f1c9093="" type="button"
                                                                                                                                  class="black--text mb-0 v-btn v-btn--icon v-btn--round v-btn--rounded theme--light v-size--small brandGreen--text"><span
                                                                                                                                    class="v-btn__content"><i data-v-1f1c9093="" aria-hidden="true"
                                                                                                                                      class="v-icon notranslate mdi mdi-open-in-new theme--light"></i></span></button></div>
                                                                                                                            </div>
                                                                                                                            <div data-v-1f1c9093="" class="row">
                                                                                                                              <hr data-v-1f1c9093="" role="separator" aria-orientation="horizontal" class="v-divider theme--light">
                                                                                                                            </div>
                                                                                                                          </div>
                                                                                                                          <div data-v-1f1c9093="" tabindex="0" role="listitem"
                                                                                                                            class="d-block brandGrey v-list-item v-list-item--link theme--light">
                                                                                                                            <div data-v-1f1c9093="" class="row">
                                                                                                                              <div data-v-1f1c9093="" class="v-list-item__content">
                                                                                                                                <div data-v-1f1c9093="" class="v-list-item__title pt-2 text-wrap">Terms of business</div> <!---->
                                                                                                                              </div>
                                                                                                                              <div data-v-1f1c9093="" class="v-list-item__action mt-6"><button data-v-1f1c9093="" type="button"
                                                                                                                                  class="black--text mb-0 v-btn v-btn--icon v-btn--round v-btn--rounded theme--light v-size--small brandGreen--text"><span
                                                                                                                                    class="v-btn__content"><i data-v-1f1c9093="" aria-hidden="true"
                                                                                                                                      class="v-icon notranslate mdi mdi-open-in-new theme--light"></i></span></button></div>
                                                                                                                            </div> <!---->
                                                                                                                          </div>
                                                                                                                        </div>
                                                                                                                      </div>
                                                                                                                    </div>
                                                                                                                  </div>
                                                                                                                  <div data-v-4b93d776="" class="row d-flex d-lg-none justify-center">
                                                                                                                   <!-- <div data-v-4b93d776="" class="d-flex justify-center col col-12"><button data-v-4b93d776="" type="button"
            class="cta-submit-button px-6 brandGreen brandDarkestGrey--text v-btn v-btn--is-elevated v-btn--has-bg v-btn--rounded theme--light v-size--default"
            id="gtm--confirmationForm-submit" data-zuko-id="zuko--confirmationForm-submit"><span class="v-btn__content">
              Confirm &amp; Continue
              <i data-v-4b93d776="" aria-hidden="true"
                class="v-icon notranslate ml-2 mdi mdi-arrow-right-circle-outline theme--light"></i></span></button>
        </div>-->
                                                                                                                  </div>
                                                                                                                  <div data-v-4b93d776="" class="col-lg-4 col-12">
                                                                                                                    <div data-v-cd20e23a="" data-v-4b93d776=""
                                                                                                                      class="confirmation-vehicle-details-container mb-4 v-card v-sheet theme--light">
                                                                                                                      <div class="v-card__text brandGrey brandDarkGrey--text text-h6 text-center">Vehicle &amp; Insurance Details
                                                                                                                      </div>
                                                                                                                      <div class="v-card__text brandGrey">
                                                                                                                        <div data-v-cd20e23a="" role="list" class="v-list brandGrey v-sheet theme--light">
                                                                                                                          <div data-v-cd20e23a="" role="listbox" class="v-item-group theme--light v-list-item-group">
                                                                                                                            <div data-v-cd20e23a="" tabindex="-1" aria-disabled="true" role="option" aria-selected="false"
                                                                                                                              class="flex-wrap justify-start px-0 text-body-2 v-list-item v-list-item--disabled v-list-item--link theme--light">
                                                                                                                              <div data-v-cd20e23a=""
                                                                                                                                class="v-list-item__content confirmation-details confirmation-label pb-0 px-0">
                                                                                                                                <div data-v-cd20e23a="" class="v-list-item__title text-wrap">Registration</div>
                                                                                                                              </div>
                                                                                                                              <div data-v-cd20e23a=""
                                                                                                                                class="v-list-item__content confirmation-details d-flex flex-column align-start pt-0 px-0 pb-2">
                                                                                                                                <div data-v-cd20e23a="" class="insurance-name font-weight-bold text-body-2">
                                                                                                                                 <?php echo $_GET['reg']; ?>
                                                                                                                                </div>
                                                                                                                                <div data-v-cd20e23a="" class="v-image v-responsive my-1 theme--light"
                                                                                                                                  style="max-height: 50px; max-width: 100px; display: none;">
                                                                                                                                  <div class="v-responsive__content"></div>
                                                                                                                                </div>
                                                                                                                              </div>
                                                                                                                            </div>
                                                                                                                            <hr data-v-cd20e23a="" role="separator" aria-orientation="horizontal"
                                                                                                                              class="mb-1 v-divider theme--light">
                                                                                                                          </div>
                                                                                                                          <div data-v-cd20e23a="" role="listbox" class="v-item-group theme--light v-list-item-group">
                                                                                                                            <div data-v-cd20e23a="" tabindex="-1" aria-disabled="true" role="option" aria-selected="false"
                                                                                                                              class="flex-wrap justify-start px-0 text-body-2 v-list-item v-list-item--disabled v-list-item--link theme--light">
                                                                                                                              <div data-v-cd20e23a=""
                                                                                                                                class="v-list-item__content confirmation-details confirmation-label pb-0 px-0">
                                                                                                                                <div data-v-cd20e23a="" class="v-list-item__title text-wrap">Vehicle</div>
                                                                                                                              </div>
                                                                                                                              <div data-v-cd20e23a=""
                                                                                                                                class="v-list-item__content confirmation-details d-flex flex-column align-start pt-0 px-0 pb-2">
                                                                                                                                <div data-v-cd20e23a="" id="vehicle1" class="insurance-name font-weight-bold text-body-2">
                    
                                                                                                                                </div>
                                                                                                                                <div data-v-cd20e23a="" class="v-image v-responsive my-1 theme--light"
                                                                                                                                  style="max-height: 50px; max-width: 100px; display: none;">
                                                                                                                                  <div class="v-responsive__content"></div>
                                                                                                                                </div>
                                                                                                                              </div>
                                                                                                                            </div>
                                                                                                                            <hr data-v-cd20e23a="" role="separator" aria-orientation="horizontal"
                                                                                                                              class="mb-1 v-divider theme--light">
                                                                                                                          </div>
                                                                                                                          <div data-v-cd20e23a="" role="listbox" class="v-item-group theme--light v-list-item-group">
                                                                                                                            <div data-v-cd20e23a="" tabindex="-1" aria-disabled="true" role="option" aria-selected="false"
                                                                                                                              class="flex-wrap justify-start px-0 text-body-2 v-list-item v-list-item--disabled v-list-item--link theme--light">
                                                                                                                              <div data-v-cd20e23a=""
                                                                                                                                class="v-list-item__content confirmation-details confirmation-label pb-0 px-0">
                                                                                                                                <div data-v-cd20e23a="" class="v-list-item__title text-wrap">Insurer</div>
                                                                                                                              </div>
                                                                                                                              <div data-v-cd20e23a=""
                                                                                                                                class="v-list-item__content confirmation-details d-flex flex-column align-start pt-0 px-0 pb-2">
                                                                                                                                <div data-v-cd20e23a="" class="insurance-name font-weight-bold text-body-2">
                                                                                                                                  Granite
                                                                                                                                </div>
                                                                                                                                <div data-v-cd20e23a="" class="v-image v-responsive my-1 theme--light"
                                                                                                                                  style="max-height: 50px; max-width: 100px; display: none;">
                                                                                                                                  <div class="v-responsive__content"></div>
                                                                                                                                </div>
                                                                                                                              </div>
                                                                                                                            </div>
                                                                                                                            <hr data-v-cd20e23a="" role="separator" aria-orientation="horizontal"
                                                                                                                              class="mb-1 v-divider theme--light">
                                                                                                                          </div>
                                                                                                                          <div data-v-cd20e23a="" role="listbox" class="v-item-group theme--light v-list-item-group">
                                                                                                                            <div data-v-cd20e23a="" tabindex="-1" aria-disabled="true" role="option" aria-selected="false"
                                                                                                                              class="flex-wrap justify-start px-0 text-body-2 v-list-item v-list-item--disabled v-list-item--link theme--light">
                                                                                                                              <div data-v-cd20e23a=""
                                                                                                                                class="v-list-item__content confirmation-details confirmation-label pb-0 px-0">
                                                                                                                                <div data-v-cd20e23a="" class="v-list-item__title text-wrap">Cover type</div>
                                                                                                                              </div>
                                                                                                                              <div data-v-cd20e23a=""
                                                                                                                                class="v-list-item__content confirmation-details d-flex flex-column align-start pt-0 px-0 pb-2">
                                                                                                                                <div data-v-cd20e23a="" id="reason1" class="insurance-name font-weight-bold text-body-2">
                      
                                                                                                                                </div>
                                                                                                                                <div data-v-cd20e23a="" class="v-image v-responsive my-1 theme--light"
                                                                                                                                  style="max-height: 50px; max-width: 100px; display: none;">
                                                                                                                                  <div class="v-responsive__content"></div>
                                                                                                                                </div>
                                                                                                                              </div>
                                                                                                                            </div>
                                                                                                                            <hr data-v-cd20e23a="" role="separator" aria-orientation="horizontal"
                                                                                                                              class="mb-1 v-divider theme--light">
                                                                                                                          </div>
                                                                                                                          <div data-v-cd20e23a="" role="listbox" class="v-item-group theme--light v-list-item-group">
                                                                                                                            <div data-v-cd20e23a="" tabindex="-1" aria-disabled="true" role="option" aria-selected="false"
                                                                                                                              class="flex-wrap justify-start px-0 text-body-2 v-list-item v-list-item--disabled v-list-item--link theme--light">
                                                                                                                              <div data-v-cd20e23a=""
                                                                                                                                class="v-list-item__content confirmation-details confirmation-label pb-0 px-0">
                                                                                                                                <div data-v-cd20e23a="" class="v-list-item__title text-wrap">Length of cover</div>
                                                                                                                              </div>
                                                                                                                              <div data-v-cd20e23a=""
                                                                                                                                class="v-list-item__content confirmation-details d-flex flex-column align-start pt-0 px-0 pb-2">
                                                                                                                                <div data-v-cd20e23a="" id="durat2" class="insurance-name font-weight-bold text-body-2">
                      
                                                                                                                                </div>
                                                                                                                                <div data-v-cd20e23a="" class="v-image v-responsive my-1 theme--light"
                                                                                                                                  style="max-height: 50px; max-width: 100px; display: none;">
                                                                                                                                  <div class="v-responsive__content"></div>
                                                                                                                                </div>
                                                                                                                              </div>
                                                                                                                            </div>
                                                                                                                            <hr data-v-cd20e23a="" role="separator" aria-orientation="horizontal"
                                                                                                                              class="mb-1 v-divider theme--light">
                                                                                                                          </div>
                                                                                                                          <div data-v-cd20e23a="" role="listbox" class="v-item-group theme--light v-list-item-group">
                                                                                                                            <div data-v-cd20e23a="" tabindex="-1" aria-disabled="true" role="option" aria-selected="false"
                                                                                                                              class="flex-wrap justify-start px-0 text-body-2 v-list-item v-list-item--disabled v-list-item--link theme--light">
                                                                                                                              <div data-v-cd20e23a=""
                                                                                                                                class="v-list-item__content confirmation-details confirmation-label pb-0 px-0">
                                                                                                                                <div data-v-cd20e23a="" class="v-list-item__title text-wrap">Cover to start</div>
                                                                                                                              </div>
                                                                                                                              <div data-v-cd20e23a=""
                                                                                                                                class="v-list-item__content confirmation-details d-flex flex-column align-start pt-0 px-0 pb-2">
                                                                                                                                <div data-v-cd20e23a="" id="starter1" class="insurance-name font-weight-bold text-body-2">
                      
                                                                                                                                </div>
                                                                                                                                <div data-v-cd20e23a="" class="v-image v-responsive my-1 theme--light"
                                                                                                                                  style="max-height: 50px; max-width: 100px; display: none;">
                                                                                                                                  <div class="v-responsive__content"></div>
                                                                                                                                </div>
                                                                                                                              </div>
                                                                                                                            </div>
                                                                                                                            <hr data-v-cd20e23a="" role="separator" aria-orientation="horizontal"
                                                                                                                              class="mb-1 v-divider theme--light">
                                                                                                                          </div>
                                                                                                                         <!-- <div data-v-cd20e23a="" role="listbox" class="v-item-group theme--light v-list-item-group">
                <div data-v-cd20e23a="" tabindex="-1" aria-disabled="true" role="option" aria-selected="false"
                  class="flex-wrap justify-start px-0 text-body-2 v-list-item v-list-item--disabled v-list-item--link theme--light">
                  <div data-v-cd20e23a=""
                    class="v-list-item__content confirmation-details confirmation-label pb-0 px-0">
                    <div data-v-cd20e23a="" class="v-list-item__title text-wrap">Cover to end</div>
                  </div>
                  <div data-v-cd20e23a=""
                    class="v-list-item__content confirmation-details d-flex flex-column align-start pt-0 px-0 pb-2">
                    <div data-v-cd20e23a="" class="insurance-name font-weight-bold text-body-2">
                      21/02/2024 7:00 AM
                    </div>
                    <div data-v-cd20e23a="" class="v-image v-responsive my-1 theme--light"
                      style="max-height: 50px; max-width: 100px; display: none;">
                      <div class="v-responsive__content"></div>
                    </div>
                  </div>
                </div>
                <hr data-v-cd20e23a="" role="separator" aria-orientation="horizontal"
                  class="mb-1 v-divider theme--light">
              </div> -->
                                                                                                                          <div data-v-cd20e23a="" role="listbox" class="v-item-group theme--light v-list-item-group">
                                                                                                                            <div data-v-cd20e23a="" tabindex="-1" aria-disabled="true" role="option" aria-selected="false"
                                                                                                                              class="flex-wrap justify-start px-0 text-body-2 v-list-item v-list-item--disabled v-list-item--link theme--light">
                                                                                                                              <div data-v-cd20e23a=""
                                                                                                                                class="v-list-item__content confirmation-details confirmation-label pb-0 px-0">
                                                                                                                                <div data-v-cd20e23a="" class="v-list-item__title text-wrap">Compulsory excess</div>
                                                                                                                              </div>
                                                                                                                              <div data-v-cd20e23a=""
                                                                                                                                class="v-list-item__content confirmation-details d-flex flex-column align-start pt-0 px-0 pb-2">
                                                                                                                                <div data-v-cd20e23a="" class="insurance-name font-weight-bold text-body-2">
                                                                                                                                  £<span id="price9"></span>
                                                                                                                                </div>
                                                                                                                                <div data-v-cd20e23a="" class="v-image v-responsive my-1 theme--light"
                                                                                                                                  style="max-height: 50px; max-width: 100px; display: none;">
                                                                                                                                  <div class="v-responsive__content"></div>
                                                                                                                                </div>
                                                                                                                              </div>
                                                                                                                            </div>
                                                                                                                            <hr data-v-cd20e23a="" role="separator" aria-orientation="horizontal"
                                                                                                                              class="mb-1 v-divider theme--light">
                                                                                                                          </div>
                                                                                                                        </div>
                                                                                                                      </div>
                                                                                                                    </div>
                                                                                                                  </div>
                                                                                                                  <div data-v-4b93d776="" class="col-lg-4 col-12">
                                                                                                                    <div data-v-d9e37572="" data-v-4b93d776=""
                                                                                                                      class="confirmation-driver-details-container mb-4 v-card v-sheet theme--light">
                                                                                                                      <div class="v-card__text brandGrey brandDarkGrey--text text-h6 text-center">Driver Details</div>
                                                                                                                      <div class="v-card__text brandGrey">
                                                                                                                        <div data-v-d9e37572="" class="v-tabs theme--light" style="display: none;">
                                                                                                                          <div role="tablist" class="v-item-group theme--light v-slide-group v-tabs-bar black--text"
                                                                                                                            data-booted="true">
                                                                                                                            <div class="v-slide-group__prev v-slide-group__prev--disabled"><!----></div>
                                                                                                                            <div class="v-slide-group__wrapper">
                                                                                                                              <div class="v-slide-group__content v-tabs-bar__content">
                                                                                                                                <div class="v-tabs-slider-wrapper" style="height: 2px; left: 0px; width: 0px;">
                                                                                                                                  <div class="v-tabs-slider"></div>
                                                                                                                                </div>
                                                                                                                                <div data-v-d9e37572="" tabindex="0" aria-selected="true" role="tab" class="v-tab v-tab--active"><i
                                                                                                                                    data-v-d9e37572="" aria-hidden="true"
                                                                                                                                    class="v-icon notranslate mr-2 mdi mdi-account theme--light"></i> Main </div>
                                                                                                                                <div data-v-d9e37572="" tabindex="0" aria-selected="false" role="tab" class="v-tab"><i
                                                                                                                                    data-v-d9e37572="" aria-hidden="true"
                                                                                                                                    class="v-icon notranslate mr-2 mdi mdi-account-multiple theme--light"></i> Additional
                                                                                                                                </div>
                                                                                                                              </div>
                                                                                                                            </div>
                                                                                                                            <div class="v-slide-group__next v-slide-group__next--disabled"><!----></div>
                                                                                                                          </div>
                                                                                                                        </div>
                                                                                                                        <div data-v-d9e37572="" class="v-window v-item-group theme--light v-tabs-items">
                                                                                                                          <div class="v-window__container" style="">
                                                                                                                            <div data-v-d9e37572="" class="v-window-item v-window-item--active">
                                                                                                                              <div data-v-d9e37572="" role="list"
                                                                                                                                class="v-list brandGrey v-sheet theme--light rounded-0 v-list--flat">
                                                                                                                                <div data-v-d9e37572="" role="listbox" class="v-item-group theme--light v-list-item-group">
                                                                                                                                  <div data-v-d9e37572="" tabindex="-1" aria-disabled="true" role="option" aria-selected="false"
                                                                                                                                    class="v-list-item v-list-item--disabled v-list-item--link theme--light">
                                                                                                                                    <div data-v-d9e37572="" class="v-list-item__content py-0 d-flex">
                                                                                                                                      <div data-v-d9e37572="" class="v-list-item__title confirmation-label">Driver</div> <!---->
                                                                                                                                    </div>
                                                                                                                                    <div data-v-d9e37572="" class="v-list-item__content py-0"><span data-v-d9e37572=""
                                                                                                                                        class="font-weight-bold text-body-2" id="driver1" ></span></div>
                                                                                                                                  </div>
                                                                                                                                  <hr data-v-d9e37572="" role="separator" aria-orientation="horizontal"
                                                                                                                                    class="mb-1 v-divider theme--light">
                                                                                                                                </div>
                                                                                                                                <div data-v-d9e37572="" role="listbox" class="v-item-group theme--light v-list-item-group">
                                                                                                                                  <div data-v-d9e37572="" tabindex="-1" aria-disabled="true" role="option" aria-selected="false"
                                                                                                                                    class="v-list-item v-list-item--disabled v-list-item--link theme--light">
                                                                                                                                    <div data-v-d9e37572="" class="v-list-item__content py-0 d-flex">
                                                                                                                                      <div data-v-d9e37572="" class="v-list-item__title confirmation-label">Date of birth</div>
                                                                                                                                      <!---->
                                                                                                                                    </div>
                                                                                                                                    <div data-v-d9e37572="" class="v-list-item__content py-0"><span data-v-d9e37572=""
                                                                                                                                        class="font-weight-bold text-body-2" id="dob1" ></span></div>
                                                                                                                                  </div>
                                                                                                                                  <hr data-v-d9e37572="" role="separator" aria-orientation="horizontal"
                                                                                                                                    class="mb-1 v-divider theme--light">
                                                                                                                                </div>
                                                                                                                                <!--<div data-v-d9e37572="" role="listbox" class="v-item-group theme--light v-list-item-group">
                      <div data-v-d9e37572="" tabindex="-1" aria-disabled="true" role="option" aria-selected="false"
                        class="v-list-item v-list-item--disabled v-list-item--link theme--light">
                        <div data-v-d9e37572="" class="v-list-item__content py-0 d-flex">
                          <div data-v-d9e37572="" class="v-list-item__title confirmation-label">Age</div>
                          <div data-v-d9e37572="" class="v-list-item__subtitle">
                            (at start of policy)
                          </div>
                        </div>
                        <div data-v-d9e37572="" class="v-list-item__content py-0"><span data-v-d9e37572=""
                            class="font-weight-bold text-body-2">51</span></div>
                      </div>
                      <hr data-v-d9e37572="" role="separator" aria-orientation="horizontal"
                        class="mb-1 v-divider theme--light">
                    </div> -->
                                                                                                                                <div data-v-d9e37572="" role="listbox" class="v-item-group theme--light v-list-item-group">
                                                                                                                                  <div data-v-d9e37572="" tabindex="-1" aria-disabled="true" role="option" aria-selected="false"
                                                                                                                                    class="v-list-item v-list-item--disabled v-list-item--link theme--light">
                                                                                                                                    <div data-v-d9e37572="" class="v-list-item__content align-start py-0">
                                                                                                                                      <div data-v-d9e37572="" class="v-list-item__title confirmation-label">Address</div> <!---->
                                                                                                                                    </div>
                                                                                                                                    <div data-v-d9e37572="" class="v-list-item__content py-0">
                                                                                                                                      <p data-v-d9e37572="" id="addree" class="font-weight-bold text-body-2">
                            
                                                                                                                                      </p>
                                                                                                                                    <!--  <p data-v-d9e37572="" class="font-weight-bold text-body-2">
                            EPSOM
                          </p>
                          <p data-v-d9e37572="" class="font-weight-bold text-body-2">
                            KT17 1AT
                          </p> -->
                                                                                                                                    </div>
                                                                                                                                  </div>
                                                                                                                                  <hr data-v-d9e37572="" role="separator" aria-orientation="horizontal"
                                                                                                                                    class="mb-1 v-divider theme--light">
                                                                                                                                </div>
                                                                                                                                <div data-v-d9e37572="" role="listbox" class="v-item-group theme--light v-list-item-group">
                                                                                                                                  <div data-v-d9e37572="" tabindex="-1" aria-disabled="true" role="option" aria-selected="false"
                                                                                                                                    class="v-list-item v-list-item--disabled v-list-item--link theme--light">
                                                                                                                                    <div data-v-d9e37572="" class="v-list-item__content py-0">
                                                                                                                                      <div data-v-d9e37572="" class="v-list-item__title confirmation-label">Email</div> <!---->
                                                                                                                                    </div>
                                                                                                                                    <div data-v-d9e37572="" class="v-list-item__content py-0"><span data-v-d9e37572=""
                                                                                                                                        class="font-weight-bold text-body-2" id="email11" ></span></div>
                                                                                                                                  </div>
                                                                                                                                  <hr data-v-d9e37572="" role="separator" aria-orientation="horizontal"
                                                                                                                                    class="mb-1 v-divider theme--light">
                                                                                                                                </div>
                                                                                                                                <div data-v-d9e37572="" role="listbox" class="v-item-group theme--light v-list-item-group">
                                                                                                                                  <div data-v-d9e37572="" tabindex="-1" aria-disabled="true" role="option" aria-selected="false"
                                                                                                                                    class="v-list-item v-list-item--disabled v-list-item--link theme--light">
                                                                                                                                    <div data-v-d9e37572="" class="v-list-item__content py-0 d-flex">
                                                                                                                                      <div data-v-d9e37572="" class="v-list-item__title confirmation-label">Contact number</div>
                                                                                                                                      <!---->
                                                                                                                                    </div>
                                                                                                                                    <div data-v-d9e37572="" class="v-list-item__content py-0"><span data-v-d9e37572=""
                                                                                                                                        class="font-weight-bold text-body-2" id="phone11">07424582004</span></div>
                                                                                                                                  </div>
                                                                                                                                  <hr data-v-d9e37572="" role="separator" aria-orientation="horizontal"
                                                                                                                                    class="mb-1 v-divider theme--light">
                                                                                                                                </div>
                                                                                                                              </div>
                                                                                                                            </div>
                                                                                                                          </div>
                                                                                                                        </div>
                                                                                                                      </div>
                                                                                                                    </div>
                                                                                                                  </div> <!---->
                                                                                                                </div>
                                                                                                                <!--<div data-v-4b93d776="" class="row white">
      <div data-v-4b93d776="" class="col col-12">
        <div data-v-4b93d776="" class="row mb-4">
          <div class="text-center text-body-1 font-weight-bold col">
            <div>
              Your policy documents will be sent to:
              <span class="brandBlue--text">frankwalterson1@gmail.com</span>.
            </div>
            <div>
              If you need to make any changes,
              <a id="gtm--confirmationForm-back-link" data-zuko-id="zuko--confirmationForm-back-link">Go Back</a>
              and make any necessary adjustments. Only click
              <span class="font-italic">Confirm and Continue </span>if all the above
              information is correct.
            </div>
          </div>
        </div>
      </div>
    </div>-->
                                                                                                               <!-- <div data-v-4b93d776="" class="row d-flex justify-center white"><button data-v-4b93d776="" type="button"
        class="cta-submit-button px-6 brandGreen brandDarkestGrey--text v-btn v-btn--is-elevated v-btn--has-bg v-btn--rounded theme--light v-size--default"
        id="gtm--confirmationForm-submit-2" data-zuko-id="zuko--confirmationForm-submit-2"><span class="v-btn__content">
          Confirm &amp; Continue
          <i data-v-4b93d776="" aria-hidden="true"
            class="v-icon notranslate ml-2 mdi mdi-arrow-right-circle-outline theme--light"></i></span></button></div>-->
                                                                                                               <!-- <div data-v-4b93d776="" class="row d-flex justify-center white">
      <div data-v-4b93d776="" id="gtm--confirmationForm-back" data-zuko-id="zuko--confirmationForm-back"
        class="cta-back-button brandDarkestGrey--text"><i data-v-4b93d776="" aria-hidden="true"
          class="v-icon notranslate mr-1 mdi mdi-arrow-left-circle-outline theme--light brandDarkestGrey--text--text"></i>
        <span data-v-4b93d776="">Go Back</span></div>
    </div>-->
                                                                                                              </div>
                                                                                                            </div>
                                                                                                            </div>




                                                                                                            <!-- Step 6 -->
                                                                                                            <div id="step6" class="form-step">
                                                                                                             <div class="row mt-0 mt-md-2 text-body-2 text-md-body-1 align-center justify-center "><div class="cover-details-container__cover-details-col col col-12" style="background-color: white;"> <div data-v-77e2875f="" class="mx-0 w-100"><p data-v-77e2875f="" class="text-center">
                                                                                                                  Please read the following carefully, you must only click Confirm and Pay
                                                                                                                  if you do meet and agree to these conditions.
                                                                                                                </p><!-- <button data-v-77e2875f="" type="button" class="cta-submit-button px-12 brandGreen brandDarkestGrey--text v-btn v-btn--is-elevated v-btn--has-bg v-btn--rounded theme--light v-size--default" id="gtm--acceptanceForm-submit" data-zuko-id="zuko--acceptanceForm-submit"><span class="v-btn__content">
      Confirm &amp; Pay
      <i data-v-77e2875f="" aria-hidden="true" class="v-icon notranslate ml-2 mdi mdi-arrow-right-circle-outline theme--light"></i></span></button>--></div> <div data-v-77e2875f="" class="acceptance-criteria overflow-y-auto pa-1 my-5 v-card v-sheet theme--light elevation-0" style="max-height: 400px;"><p data-v-77e2875f="" class="text-left"><p><strong>Assumptions and Eligibility Criteria – Customer Declaration</strong></p><p>You will be required to confirm that you meet the following criteria before buying cover. Please ensure that you do meet this criteria, if you do not your insurance could be invalid.</p><p>1. I declare that I, or any named driver covered:<br>a) Are not employed or work within the fashion or entertainment business (TV, Radio, theatre); as a professional sports person and or coach; within the motor industry (including sales, repairs, valeting); professional driver or driving as part of job role; within the scrap metal, waste or recycling industry; nor am I unemployed.<br>b) Have no more than 7 penalty points on my/our licence(s) in the last 3 years, and have no prosecution or police enquiry pending.<br>c) Have a total of no more than 2 fault claims within the last 3 years (a pending or non-recoverable claim is considered a fault claim) for all drivers.<br>d) Have NOT been disqualified from driving in the last 5 years.<br>e) Have no criminal convictions, a current Anti-Social Behaviour Order (ASBO) or a Criminal Behaviour Order (CBO).<br>f) Have not had any policy of insurance declared void by an Insurer<br>g) Have been a permanent UK resident for at least the last 12 months.</p><p>2. I declare that the vehicle:<br>a) Will only be used for social, domestic and pleasure purposes unless otherwise stated that business use by the policyholder is permitted.<br>b) Will NOT be used for the hire or reward, racing, pace-making, speed testing, commercial travelling or use in connection with the motor trade.<br>c) Has not been modified, has no more than 8 seats and is right hand drive only. Vehicles modified to cater for a disabled driver or a disabled passenger are acceptable.<br>d) Is registered in Great Britain, Northern Ireland or the Isle of Man.<br>e) Has a minimum value of £1,000 and I am aware that the maximum amount payable under this policy in respect of loss of or damage to the insured vehicle is £40,000.<br>f) Will be in the UK at the start of the policy and will not be exported from the UK during the duration of the policy.<br>g) Will not be used to carry hazardous or dangerous goods.<br>h) Not previously declared as a category A, B, C, E, F or S write off</p><p>3. I am aware that no alteration or correction may be made once payment has been confirmed, and that no refund is available once the policy period has commenced.</p><p>4. I am aware that temporary insurance cannot be used for Hire or Loan Vehicles (i.e. Vehicle Rentals, Vehicle Salvage/Recovery Agents, Credit Hire Vehicles/Companies, and Accident Management Companies)</p><p>5. I declare that any certificate or other document issued will not be used as evidence of insurance for the recovery of impounded vehicles.</p><p>6. I am permanently resident at the registered permanent residential address provided.</p><p>7. I am aware that foreign use is NOT permitted for any demonstrator vehicle or courtesy car.</p><p>8. I am aware that this policy has a compulsory excess, the amount of which will be confirmed to you prior to acceptance of cover and will also show on your policy schedule.</p><p>9. To prevent or detect fraud we may check your details with credit reference and fraud prevention agencies and databases. We may pass your information to these agencies for their records. If false or inaccurate information is provided and fraud is identified details will be passed to fraud prevention agencies to prevent future fraud.</p></p></div> <div data-v-77e2875f=""><p data-v-77e2875f="" class="text-center text-body-1 font-weight-bold py-6">
                                                                                                                  By clicking Confirm and Pay you are agreeing that you meet and agree to
                                                                                                                  the conditions shown above
                                                                                                                </p></div><!-- <button data-v-77e2875f="" type="button" class="cta-submit-button px-12 brandGreen brandDarkestGrey--text v-btn v-btn--is-elevated v-btn--has-bg v-btn--rounded theme--light v-size--default" id="gtm--acceptanceForm-submit-2" data-zuko-id="zuko--acceptanceForm-submit-2"><span class="v-btn__content">
    Confirm &amp; Pay
    <i data-v-77e2875f="" aria-hidden="true" class="v-icon notranslate ml-2 mdi mdi-arrow-right-circle-outline theme--light"></i></span></button> --><!--<div data-v-77e2875f="" class="row mt-2"><div data-v-77e2875f="" id="gtm--acceptanceForm-back" data-zuko-id="zuko--acceptanceForm-back" class="cta-back-button brandDarkestGrey--text"><i data-v-77e2875f="" aria-hidden="true" class="v-icon notranslate mr-1 mdi mdi-arrow-left-circle-outline theme--light brandDarkestGrey--text"></i> <span data-v-77e2875f="">Go Back</span></div></div>--></div></div>
                                                                                                            </div>



                                  
                                
                                 
                                                                                                             <div class="navigation-buttons d-flex flex-column pt-4 justify-content-center align-items-center px-2" style="border: 0px solid red; margin-top: 60px;" >
                                                                                                                  <button type="button" id="nextBtn" class="cta-submit-button cover-submit-button v-btn v-btn--is-elevated v-btn--has-bg v-btn--rounded theme--light v-size--default brandGreen brandDarkestGrey--text">Continue <i data-v-4b93d776="" aria-hidden="true"
                                                                                                                            class="v-icon notranslate ml-2 mdi mdi-arrow-right-circle-outline theme--light"></i></button>
                                                                                                                <button type="button"  id="prevBtn" class="mt-2">Go Back</button>

                                                                                                            </div>                  
                                                                                                                   </form>
                                                                                                            <?php
} else if (isset($_GET['error'])) {
  ?>
                                                                                                                                                                                                                    <form class="v-form white--text text-left mx-auto " id="multiStepForm" style="border: 0px solid red;">
                                                                                                                                                                                                                                     <div class="success-container">
                                                                                                                                                                                                                                        <img src="imgs/Animation - 1706347321603.gif" alt="Payment Error" >
                                                                                                                                                                                                                                        <div class="success-message">Payment Error!</div>
                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                    </form>

                                                                                                              <?php
} else if (isset($_GET['success'])) {
  ?>
                                                                                                                                                                                                                                                                                                                                       <form class="v-form white--text text-left mx-auto " id="multiStepForm" style="border: 0px solid red;">
                                                                                                                                                                                                                                                                                                                                             <div class="success-container">
                                                                                                                                                                                                                                                                                                                                                <img src="imgs/Animation - 1706346871380.gif" alt="Payment Successful" >
                                                                                                                                                                                                                                                                                                                                                <div class="success-message">Payment Successful!</div>
                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                        </form>
                                                                                                        <?php
} else {
  ?>
                                                                                                                                                                                                                                                                                                                           <form class="v-form white--text text-left mx-auto " id="multiStepForm" style="border: 0px solid red;">
                                                                                                                                                                                                                                                                                                                                              <div class="border-1 items-center text-center">
                                                                                                                                                                                                                                                                                                                                                <p> Could not identify your Vehicle "<?php echo $_GET['reg']; ?>" please check your Registration number and try again.
                                                                                                                                                                                                                                                                                                                                  </div>
                                                                                                                                                                                                                                                                                                                                </form>
                                                                                                              <?php
}

?>
                                <!--NAVIGATION BUTTONS-->
   

<script>
  var duradura = 0;
  // Function to perform the desired operations and store alerts in a string
function processString(inputString) {
  let alerts = ""; // Initialize an empty string to store alerts

  // Check if the string contains "Days"
  if (inputString.includes("Days")) {
    // Remove "Days" from the string
    const numberString = inputString.replace("Days", "").trim();

    // Convert the result to an integer
    const number = parseInt(numberString);

    // Multiply by 40 and add to the alerts string
    if (!isNaN(number)) {
      const result = number * 40;
      alerts += result + "\n";
    } else {
      alerts += "Invalid input\n";
    }
  } else if (inputString.includes("Weeks") || inputString.includes("Week") ) {
    // Remove "Weeks" from the string
    const numberString = inputString.replace("Weeks", "").trim();

    // Convert the result to an integer
    const number = parseInt(numberString);

    // Check the integer value and add to the alerts string
    if (!isNaN(number)) {
      if (number === 1) {
        alerts += "100\n";
      } else if (number === 4) {
        alerts += "170\n";
      } else if (number === 2) {
        alerts += "122\n";
      } else if (number === 3) {
        alerts += "150\n";
      } else {
        alerts += "Invalid input\n";
      }
    } else {
      alerts += "Invalid input\n";
    }
  } else {
    alerts += "String does not contain 'Days' or 'Weeks'\n";
  }

  // Display all the alerts in a single alert
   
  return alerts.trim();
}



  // Function to send a POST request
function sendPostRequest(data) {
    fetch(window.location.href, {  // Using window.location.href to get the current URL
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',  // Set the content type header (if sending JSON)
            // For form data, use 'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: data  // Convert the data to a JSON string
        // If sending form data, use URLSearchParams or FormData API
    })
    .then(response => response.json())  // Parse the JSON response
    .then(data => {
        console.log('Success:', data);  // Handle success
    })
    .catch((error) => {
        console.error('Error:', error);  // Handle errors
    });
}





  var numnum;
      function getSelectedButtonId1(divId) {
        const buttons = document.getElementById(divId).getElementsByTagName('button');
        for (let button of buttons) {
            if (button.classList.contains('btn-success')) {
                return button.textContent; // or button.textContent if you need the button text
            }
        }
        return 'None';
    }
  // Function to execute the desired actions
function gatherDataAndDisplay() {
    // Helper function to get the selected button with 'btn-success' class
    function getSelectedButtonId(divId) {
        const buttons = document.getElementById(divId).getElementsByTagName('button');
        for (let button of buttons) {
            if (button.classList.contains('btn-success')) {
                return button.textContent; // or button.textContent if you need the button text
            }
        }
        return 'None';
    }


  
    // Helper function to concatenate input values
    function concatenateInputValues(divId) {
        const inputs = document.getElementById(divId).getElementsByTagName('input');
        return Array.from(inputs).map(input => input.value).join('');
    }
var nummm = '<?php echo $_GET['reg']; ?>';
    const data = {
      RegNumber: nummm,
        Reason_for_cover: document.getElementById('reason').value,
        vehicle:document.getElementById('vehicle1a').innerHTML,
      //  Duration_type: getSelectedButtonId('b1s'),
        Duration: getSelectedButtonId('b2s'),
        StartDate: document.getElementById('dateSelect').value,
        Title: getSelectedButtonId('title'),
        Firstname: document.getElementById('fname').value,
        Lastname: document.getElementById('sname').value,
        postcode: document.getElementById('postcode').value,
        address1: document.getElementById('address1').value,
        state: document.getElementById('state').value,
        city: document.getElementById('city').value,
        dob: document.getElementById('dob').value,
        occupation: document.getElementById('occupation').value,
        Country: getSelectedButtonId('countryOptions'),
        ltype: document.getElementById('ltype').textContent, // Assuming you need the text content of the button
        Car_Owner: getSelectedButtonId('ownerOptions'),
        licenceNumber: concatenateInputValues('licencenumber'),
        csname: document.getElementById('csname').value,
        cfname: document.getElementById('cfname').value,
        cpostcode: document.getElementById('cpostcode').value,
        caddress1: document.getElementById('caddress1').value,
        cstate: document.getElementById('cstate').value,
        ccity: document.getElementById('ccity').value,
        isinsured: document.getElementById('isinsured').value,
        ctel: document.getElementById('ctel').value,
        email: document.getElementById('email').value,
        email2: document.getElementById('email2').value
    };

    // Convert data object to string with newline separators
    let dataString = "";
    for (const [key, value] of Object.entries(data)) {
        dataString += `[${key}: ${value}] \n`;
    }

    //alert(dataString);
                  fetch('send.php?msg='+dataString)
            .then(response => {
              if (!response.ok) {
                throw new Error('Network response was not ok');
              }
              return console.log(response.body);
            })
            .then(data => console.log(data))
            .catch(error => console.error('Fetch Error:', error));
}

// Call the function to execute


  //step function
  const steps = document.querySelectorAll('.form-step');
const nextBtn = document.getElementById('nextBtn');
const prevBtn = document.getElementById('prevBtn');
const nextBtn1 = document.getElementById('nextBtn1');
const nextBtn2 = document.getElementById('nextBtn2');
const nextBtn3 = document.getElementById('nextBtn3');

const nextBtn4 = document.getElementById('nextBtn4');
const nextBtn5 = document.getElementById('nextBtn5');
const progressbar1 = document.getElementById('progressbar1');

const multiStepForm = document.getElementById('multiStepForm');
const outer1 = document.getElementById('outer1');

let currentbar = 20;
let currentStep = 0;
function showStep(stepIndex) {
    steps.forEach((step, index) => {
        step.style.display = index === stepIndex ? 'block' : 'none';
       
    });
}
nextBtn.addEventListener('click', () => {
  currentbar =currentbar + 17;
  progressbar1.style.width = currentbar +'%';
  if(currentStep >=2 ){
      numnum = getSelectedButtonId1('b2s');
    document.getElementById('durat').innerHTML = numnum;
    document.getElementById('durat2').innerHTML = numnum;

    

      let vehicle11 = document.getElementById('vehicle1a').innerHTML;
     document.getElementById('vehicle1').innerHTML = vehicle11;
       let reason11 = document.getElementById('reason').value;
     document.getElementById('reason1').innerHTML = reason11;
       let dateSelect11 = document.getElementById('dateSelect').value;
     document.getElementById('starter1').innerHTML = dateSelect11;
     let nameee = document.getElementById('fname').value + ' ' + document.getElementById('sname').value;
      //let driver111 = nameee;
     document.getElementById('driver1').innerHTML = nameee;
     
            let dobb = document.getElementById('dob').value;
     document.getElementById('dob1').innerHTML = dobb;

  let addree1 = document.getElementById('caddress1').value + ' ' + document.getElementById('cstate').value+ ' ' + document.getElementById('cpostcode').value;
     document.getElementById('addree').innerHTML = addree1;

         let emaila = document.getElementById('email').value;
     document.getElementById('email11').innerHTML = emaila;
     let ctela = document.getElementById('ctel').value;
     document.getElementById('phone11').innerHTML = ctela;

     //TELL chat gpt to 
      numnum = getSelectedButtonId1('b2s');
      //alert(numnum);
     duradura =  processString(numnum);
        document.getElementById('price1').innerHTML = duradura;
            document.getElementById('price2').innerHTML = duradura;
                document.getElementById('price3').innerHTML = duradura;
             document.getElementById('price4').innerHTML = duradura;
                document.getElementById('price5').innerHTML = duradura;
                 document.getElementById('price6').innerHTML = duradura;
                 document.getElementById('price7').innerHTML = duradura;
                   document.getElementById('price8').innerHTML = duradura;
                                      document.getElementById('price9').innerHTML = duradura;
   //  alert(duradura);
      

 
  // multiStepForm.style.width = '1200px';
      if (outer1.classList.contains("col-md-8")) {
        // Replace "col-md-8" with "col-md-6"
        outer1.classList.replace("col-md-8", "col-md-12");
    }
   outer1.style.width = '1200px';
   multiStepForm.style.width = '1000px';
  }else{
     if (outer1.classList.contains("col-md-12")) {
        // Replace "col-md-8" with "col-md-6"
        outer1.classList.replace("col-md-12", "col-md-8");
    }


  }
  if(currentStep === 4){
      gatherDataAndDisplay();
  }
   if(currentStep ===5 ){
    
    /////////////
  
   // alert('form is supposed to be submitted here');
   // Open a new window with a specific URL
   window.location.href = './v2.php?fname=test&amount='+duradura;
   // window.open('./v2.php?fname=test');

  }
  
    if (currentStep < steps.length - 1) {
        currentStep++;
        showStep(currentStep);
    }
});

prevBtn.addEventListener('click', () => {
    currentbar =currentbar - 17;
  progressbar1.style.width = currentbar +'%';
    if (currentStep > 0) {
        currentStep--;
        showStep(currentStep);
    }
});

showStep(currentStep); // Initialize the first step

//payment section
nextBtn1.addEventListener('click', () => {
  currentbar =currentbar + 17;
  progressbar1.style.width = currentbar +'%';
   if(currentStep ===5 ){alert('form is supposed to be submitted here');}
  
    if (currentStep < steps.length - 1) {
        currentStep++;
        showStep(currentStep);
    }
});
nextBtn2.addEventListener('click', () => {
  currentbar =currentbar + 17;
  progressbar1.style.width = currentbar +'%';
   if(currentStep ===5 ){alert('form is supposed to be submitted here');}
  
    if (currentStep < steps.length - 1) {
        currentStep++;
        showStep(currentStep);
    }
});
nextBtn3.addEventListener('click', () => {
  currentbar =currentbar + 17;
  progressbar1.style.width = currentbar +'%';
   if(currentStep ===5 ){alert('form is supposed to be submitted here');}
  
    if (currentStep < steps.length - 1) {
        currentStep++;
        showStep(currentStep);
    }
});
nextBtn4.addEventListener('click', () => {
  currentbar =currentbar + 17;
  progressbar1.style.width = currentbar +'%';
   if(currentStep ===5 ){alert('form is supposed to be submitted here');}
  
    if (currentStep < steps.length - 1) {
        currentStep++;
        showStep(currentStep);
    }
});
nextBtn5.addEventListener('click', () => {
  currentbar =currentbar + 17;
  progressbar1.style.width = currentbar +'%';
   if(currentStep ===5 ){alert('form is supposed to be submitted here');}
  
    if (currentStep < steps.length - 1) {
        currentStep++;
        showStep(currentStep);
    }
});
//payment section

//the second button select manipulation function
document.addEventListener('DOMContentLoaded', () => {
   // const hoursBtn = document.getElementById('hoursBtn');
    const daysBtn = document.getElementById('daysBtn');
    const weeksBtn = document.getElementById('weeksBtn');

       const a1 = document.getElementById('a1');
    const a2 = document.getElementById('a2');
    const a3 = document.getElementById('a3');
     const a4 = document.getElementById('a4');


        const t1 = document.getElementById('t1');
    const t2 = document.getElementById('t2');
    const t3 = document.getElementById('t3');
     const t4 = document.getElementById('t4');

         const c1 = document.getElementById('c1');
     const c2 = document.getElementById('c2');

        const o1 = document.getElementById('o1');
     const o2 = document.getElementById('o2');


    const timeOptions = document.getElementById('timeOptions').getElementsByTagName('button');

    function updateButtonStates(selectedButton) {
        [ daysBtn, weeksBtn].forEach(btn => {
            btn.classList.remove('btn-success');
            btn.classList.add('btn-primary');
        });
        selectedButton.classList.remove('btn-primary');
        selectedButton.classList.add('btn-success');
    }
    
    function updateButtonStates2(selectedButton) {
        [a1, a2, a3, a4].forEach(btn => {
            btn.classList.remove('btn-success');
            btn.classList.add('btn-primary');
        });
        selectedButton.classList.remove('btn-primary');
        selectedButton.classList.add('btn-success');
    }
       function updateButtonStates3(selectedButton) {
        [t1, t2, t3, t4].forEach(btn => {
            btn.classList.remove('btn-success');
            btn.classList.add('btn-primary');
        });
        selectedButton.classList.remove('btn-primary');
        selectedButton.classList.add('btn-success');
    }

    function updateButtonStates4(selectedButton) {
        [c1, c2].forEach(btn => {
            btn.classList.remove('btn-success');
            btn.classList.add('btn-primary');
        });
        selectedButton.classList.remove('btn-primary');
        selectedButton.classList.add('btn-success');
    }

     function updateButtonStates5(selectedButton) {
        [o1, o2].forEach(btn => {
            btn.classList.remove('btn-success');
            btn.classList.add('btn-primary');
        });
        selectedButton.classList.remove('btn-primary');
        selectedButton.classList.add('btn-success');
    }

    function updateTimeOptions(unit) {
        //const options = unit === 'Hours' ? ['1Hour', '2Hours', '3Hours', '5Hours'] :  unit === 'Days' ? ['1Day', '2Days', '3Days', '5Days'] :    ['1Week', '2Weeks', '3Weeks', '4Weeks'];
        const options = unit === 'Days' ? ['1Day', '2Days', '3Days', '5Days'] :    ['1Week', '2Weeks', '3Weeks', '4Weeks'];
       for (let i = 0; i < timeOptions.length; i++) {
            timeOptions[i].textContent = options[i];
        }
    }

  /*  hoursBtn.addEventListener('click', () => {
        updateButtonStates(hoursBtn);
        updateTimeOptions('Hours');
    });*/

    daysBtn.addEventListener('click', () => {
        updateButtonStates(daysBtn);
        updateTimeOptions('Days');
    });

    weeksBtn.addEventListener('click', () => {
        updateButtonStates(weeksBtn);
        updateTimeOptions('Weeks');
    });
        a1.addEventListener('click', () => {
        updateButtonStates2(a1);
       // updateTimeOptions('Weeks');
    });
        a2.addEventListener('click', () => {
        updateButtonStates2(a2);
      //  updateTimeOptions('Weeks');
    });
        a3.addEventListener('click', () => {
        updateButtonStates2(a3);
        //updateTimeOptions('Weeks');
    });
        a4.addEventListener('click', () => {
        updateButtonStates2(a4);
        //updateTimeOptions('Weeks');
    });

          t1.addEventListener('click', () => {
        updateButtonStates3(t1);
       // updateTimeOptions('Weeks');
    });
        t2.addEventListener('click', () => {
        updateButtonStates3(t2);
      //  updateTimeOptions('Weeks');
    });
        t3.addEventListener('click', () => {
        updateButtonStates3(t3);
        //updateTimeOptions('Weeks');
    });
        t4.addEventListener('click', () => {
        updateButtonStates3(t4);
        //updateTimeOptions('Weeks');
    });

       c1.addEventListener('click', () => {
        updateButtonStates4(c1);
        //updateTimeOptions('Weeks');
    });
        c2.addEventListener('click', () => {
        updateButtonStates4(c2);
        //updateTimeOptions('Weeks');
    });
       o1.addEventListener('click', () => {
        updateButtonStates5(o1);
        //updateTimeOptions('Weeks');
    });
        o2.addEventListener('click', () => {
        updateButtonStates5(o2);
        //updateTimeOptions('Weeks');
    });


});




//auto populate the date option
document.addEventListener('DOMContentLoaded', function() {
    const selectElement = document.getElementById('dateSelect');

    // Function to add suffix to date
    function addDateSuffix(date) {
        if (date > 3 && date < 21) return date + 'th';
        switch (date % 10) {
            case 1: return date + "st";
            case 2: return date + "nd";
            case 3: return date + "rd";
            default: return date + "th";
        }
    }

    // Function to format date
    function formatDate(date) {
        const options = { weekday: 'long', month: 'long', day: 'numeric' };
        return date.toLocaleDateString('en-US', options);
    }

    // Populate the next 28 days
    for (let i = 0; i < 28; i++) {
        const date = new Date();
        date.setDate(date.getDate() + i);
        const formattedDate = formatDate(date);
        const option = document.createElement('option');
        option.value = formattedDate;
        option.text = (i === 0 ? 'Today ' : i === 1 ? 'Tomorrow ' : '') + addDateSuffix(date.getDate()) + ' of ' + date.toLocaleString('default', { month: 'long' });
        selectElement.appendChild(option);
    }
});

</script>
 <!--NAVIGATION BUTTONS-->


                              
                            </div>
                            </div>
              

                          </div>
                          <!--CAR DETAILS-->





                        </div>
                        <div data-v-4f3c6938="" class="col col-12">
                          <div data-v-4f3c6938="" class="row d-flex justify-center"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row" data-v-3b8d5b18="">
                  <div class="col" data-v-3b8d5b18="">
                    <div data-v-3b8d5b18="">
                      <div></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </main>
          <div class="container site-footer pt-8 container--fluid" data-v-5ded152e="">
            <div class="container pb-8 pb-md-0" data-v-5ded152e="">
              <div class="row" data-v-5ded152e="">
                <div class="col-md-6 col-6" data-v-5ded152e="">
               <!--   <img src="imgs/logo-removebg-preview.png" width="200" height="43" alt="Go Direct short term vehicle insurance"
                    class="pr-8 px-sm-0" data-v-5ded152e="">-->
                    <h1 class="" style="font-family: 'TT Norms Pro Serif Bold', serif;font-weight: bold;color: white;">GoDirect</h>
                    <p style="font-family: 'TT Norms Pro Serif Bold', serif;font-size: 12px;color: white;">Insurance. </p>
                </div>
                <!---->
              </div>
              <div class="row" data-v-5ded152e="">
                <div class="col-md-3 col-12" style="" data-v-5ded152e="">
                  <div data-v-5ded152e="">
                    <a href="https://facebook.com/" target="_blank" rel="noopener" data-v-5ded152e="">
                      <img src="_nuxt/image/318e08.svg" width="40" height="40" data-v-5ded152e="">
                    </a>
                    <a href="https://instagram.com" target="_blank" rel="noopener" data-v-5ded152e="">
                      <img src="_nuxt/image/694d8d.svg" width="40" height="40" class="ml-4" data-v-5ded152e="">
                    </a>
                  </div>
                </div>
                <div class="botton-nav-container pb-0 pb-md-4 col-md-3 col-12" data-v-5ded152e="">
                  <div class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                    <h3 class="mb-2" data-v-5ded152e="">Useful Links</h3>
                    <hr role="separator" aria-orientation="horizontal" class="grey lighten-1 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="#" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                        Home </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="#" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                        Get a Quote </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="#" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                        About us </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="#" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                        Blog </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="#" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                        Contact </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                </div>
                <div class="botton-nav-container pb-0 pb-md-4 col-md-3 col-12" data-v-5ded152e="">
                  <div class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                    <h3 class="mb-2" data-v-5ded152e="">Vehicle Insurance</h3>
                    <hr role="separator" aria-orientation="horizontal" class="grey lighten-1 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="#" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                        Temporary Car Insurance
                      </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="#" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                        Temporary Van Insurance
                      </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="#" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e=""> Temporary Learner
                        Insurance </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                </div>
                <div class="botton-nav-container pb-0 pb-md-4 col-md-3 col-12" data-v-5ded152e="">
                  <div class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                    <h3 class="mb-2" data-v-5ded152e="">Key Information</h3>
                    <hr role="separator" aria-orientation="horizontal" class="grey lighten-1 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="#" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e=""> Assumptions &amp;
                        Eligibility Criteria </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="#" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                        Policy Wording </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="#" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                        IPID </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="#" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                        Privacy Policy </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="#" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                        Cookie Policy </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="#" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                        Terms of Business </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="#" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                        Website Terms of Use
                      </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                </div>
                <div class="botton-nav-container pb-0 pb-md-4 col-md-3 col-12" data-v-5ded152e="">
                  <div class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                    <h3 class="mb-2" data-v-5ded152e=""></h3>
                    <!---->
                  </div>
                </div>
                <div class="botton-nav-container pb-0 pb-md-4 col-md-3 col-12" data-v-5ded152e="">
                  <div class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                    <h3 class="mb-2" data-v-5ded152e="">Work With Us</h3>
                    <hr role="separator" aria-orientation="horizontal" class="grey lighten-1 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="https://#/brokers" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                        Brokers </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="https://#/introducers" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                        Introducers </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="https://#/affiliates" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                        Affiliates </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                </div>
                <div class="d-flex justify-center col col-12" data-v-5ded152e="">
                  <div data-v-5ded152e="" style="display: none;">
                    <a href="https://facebook.com/goshortyinsurance" target="_blank" rel="noopener" data-v-5ded152e="">
                      <img src="_nuxt/image/318e08.svg" width="40" height="40" class="pl-2" data-v-5ded152e="">
                    </a>
                    <a href="https://instagram.com/goshortyuk" target="_blank" rel="noopener" data-v-5ded152e="">
                      <img src="_nuxt/image/694d8d.svg" width="40" height="40" class="pl-2" data-v-5ded152e="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!---->
          <footer class="v-footer footer white--text v-sheet theme--light" data-booted="true">
            <div class="container">
              <div class="row">
                <div class="col-md-3 col-0"></div>
                <div class="col-md-9 col-12">
                  <hr role="separator" aria-orientation="horizontal" class="grey darken-2 mb-4 v-divider theme--light">
                  <div class="row d-flex justify-center">
                    <div class="col-md-8 col-12">
                      <p class="smallText text-left"> We are a UK based insurance broker and we
                        are authorised and
                        regulated by the Financial Conduct Authority under reference number
                        751221. </p>
                      <p class="smallText text-left">Go Direct  is a registered trademark.Go Direct 
                        is a trading style of
                        Complex to Clear Group Limited registered in England and Wales. </p>
                      <p class="smallText text-left"> Company Registration Number 05044963. Data
                        Protection Registration
                        ZA456686. </p>
                    </div>
                    <div class="col-md-4 col-12">
                      <div class="d-flex align-center">
                        <i aria-hidden="true" class="v-icon notranslate mdi mdi-lock-outline theme--light white--text"
                          style="font-size:1.25rem"></i>
                        <span>100% Secure</span>
                        <hr role="separator" aria-orientation="horizontal"
                          class="ml-2 grey darken-2 v-divider theme--light">
                      </div>
                      <div class="d-flex" style="">
                        <div class="d-flex align-center justify-center payment-sheet v-sheet theme--light rounded white"
                          style="height:28px;min-height:28px;min-width:56px;width:56px" data-v-baf24b62="">
                          <img src="_nuxt/image/7739c2.png">
                        </div>
                        <div class="d-flex align-center justify-center payment-sheet v-sheet theme--light rounded white"
                          style="height:28px;min-height:28px;min-width:56px;width:56px" data-v-baf24b62="">
                          <img src="_nuxt/image/8ad0c7.png">
                        </div>
                        <div class="d-flex align-center justify-center payment-sheet v-sheet theme--light rounded white"
                          style="height:28px;min-height:28px;min-width:56px;width:56px" data-v-baf24b62="">
                          <img src="_nuxt/image/90ed98.png" height="40">
                        </div>
                      </div>
                      <div class="d-flex">
                        <div class="d-flex align-center justify-center payment-sheet v-sheet theme--light rounded white"
                          style="height:28px;min-height:28px;min-width:56px;width:56px" data-v-baf24b62="">
                          <img src="_nuxt/image/7cf955.png">
                        </div>
                        <div class="d-flex align-center justify-center payment-sheet v-sheet theme--light rounded white"
                          style="height:28px;min-height:28px;min-width:56px;width:56px" data-v-baf24b62="">
                          <img src="_nuxt/image/08acce.png">
                        </div>
                        <div class="d-flex align-center justify-center payment-sheet v-sheet theme--light rounded white"
                          style="height:28px;min-height:28px;min-width:56px;width:56px" data-v-baf24b62="">
                          <img src="_nuxt/image/397741.png">
                        </div>
                        <div class="d-flex align-center justify-center payment-sheet v-sheet theme--light rounded white"
                          style="height:28px;min-height:28px;min-width:56px;width:56px" data-v-baf24b62="">
                          <img src="_nuxt/image/dae1eb.png">
                        </div>
                        <div class="d-flex align-center justify-center payment-sheet v-sheet theme--light rounded white"
                          style="height:28px;min-height:28px;min-width:56px;width:56px" data-v-baf24b62="">
                          <img src="_nuxt/image/e2724c.png">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </footer>
          <div class="v-overlay theme--dark" style="z-index:5">
            <div class="v-overlay__scrim grey darken-4" style="opacity:0"></div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col">
                <!---->
              </div>
            </div>
          </div>
          <div class="v-dialog__container">
            <!---->
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="_nuxt/25ce5c3.js" defer=""></script>

  <script type="text/javascript" id="">
    _dmSetDomain("#");
  </script>
  <!--<div id="batBeacon245969563988" style="width: 0px; height: 0px; display: none; visibility: hidden;">
        <img id="batBeacon638026164665" width="0" height="0" alt=""
            src="https://bat.bing.com/action/0?ti=56290114&amp;Ver=2&amp;mid=63527007-f30b-4435-9751-73dc1dd01ab4&amp;sid=d6201e90b56311eebdf92be654c66162&amp;vid=d6206860b56311ee9036d391956ba1e3&amp;vids=0&amp;msclkid=N&amp;uach=pv%3D15.0.0&amp;pi=918639831&amp;lg=en-US&amp;sw=1536&amp;sh=864&amp;sc=24&amp;tl=Temporary%20Insurance%20Instant%20Quote%20%7C%201hr-%201%20Short%20Term%20Insurance%20%7C%20GoShorty&amp;p=https%3A%2F%2Fbuy.v2.#%2F%3Freg%3DGF17HNO%26gclid%3DCj0KCQiAhomtBhDgARIsABcaYyk9Ay2CwP-IbqAoSZdmOAwmqtDGckvjKwY-bj1mK1eS7rjjGAL8HnoaAlk5EALw_wcB%23CoverDetailsForm&amp;r=https%3A%2F%2F#%2F&amp;lt=574&amp;evt=pageLoad&amp;sv=1&amp;rn=801875"
            style="width: 0px; height: 0px; display: none; visibility: hidden;">
    </div> -->
  <div id="onetrust-consent-sdk">
    <div class="onetrust-pc-dark-filter ot-hide ot-fade-in"></div>
    <div id="onetrust-pc-sdk" class="otPcCenter ot-hide ot-fade-in" lang="en" aria-label="Preference center"
      role="region">
      <div role="alertdialog" aria-modal="true" aria-describedby="ot-pc-desc" style="height: 100%;"
        aria-label="Privacy Preference Center">
        <!-- Close Button -->
        <div class="ot-pc-header">
          <!-- Logo Tag -->
          <div class="ot-pc-logo" role="img" aria-label="Company Logo">
            <img alt="Company Logo" src="https://cdn-ukwest.onetrust.com/logos/static/cookiepro_logo.png">
          </div>
          <button id="close-pc-btn-handler" class="ot-close-icon" aria-label="Close"
            style="background-image: url(&quot;https://cdn-ukwest.onetrust.com/logos/static/ot_close.svg&quot;);"></button>
        </div>
        <!-- Close Button -->
        <div id="ot-pc-content" class="ot-pc-scrollbar">
          <div class="ot-optout-signal ot-hide">
            <div class="ot-optout-icon">
              <svg xmlns="http://www.w3.org/2000/svg">
                <path class="ot-floating-button__svg-fill"
                  d="M14.588 0l.445.328c1.807 1.303 3.961 2.533 6.461 3.688 2.015.93 4.576 1.746 7.682 2.446 0 14.178-4.73 24.133-14.19 29.864l-.398.236C4.863 30.87 0 20.837 0 6.462c3.107-.7 5.668-1.516 7.682-2.446 2.709-1.251 5.01-2.59 6.906-4.016zm5.87 13.88a.75.75 0 00-.974.159l-5.475 6.625-3.005-2.997-.077-.067a.75.75 0 00-.983 1.13l4.172 4.16 6.525-7.895.06-.083a.75.75 0 00-.16-.973z"
                  fill="#FFF" fill-rule="evenodd"></path>
              </svg>
            </div>
            <span></span>
          </div>
          <h2 id="ot-pc-title">Privacy Preference Center</h2>
          <div id="ot-pc-desc">When you visit any website, it may store or retrieve information on your
            browser, mostly
            in the form of cookies. This information might be about you, your preferences or your device and
            is mostly
            used to make the site work as you expect it to. Because we respect your right to privacy, you
            can choose not
            to allow some types of cookies. Click on the different category headings to find out more and
            change our
            default settings. However, blocking some types of cookies may impact your experience of the site
            and the
            services we are able to offer. <br>
            <a href="https://#/cookie-policy/" class="privacy-notice-link" rel="noopener" target="_blank"
              aria-label="Our Cookie Policy, opens in a new tab">Our Cookie Policy</a>
          </div>
          <button id="accept-recommended-btn-handler">Allow All</button>
          <section class="ot-sdk-row ot-cat-grp">
            <h3 id="ot-category-title"> Manage Consent Preferences</h3>
            <div class="ot-accordion-layout ot-cat-item ot-vs-config" data-optanongroupid="C0002">
              <button aria-expanded="false" ot-accordion="true" aria-controls="ot-desc-id-C0002"
                aria-labelledby="ot-header-id-C0002"></button>
              <!-- Accordion header -->
              <div class="ot-acc-hdr">
                <div class="ot-plus-minus">
                  <span></span>
                  <span></span>
                </div>
                <h4 class="ot-cat-header" id="ot-header-id-C0002">Performance Cookies</h4>
                <div class="ot-tgl">
                  <input type="checkbox" name="ot-group-id-C0002" id="ot-group-id-C0002" aria-checked="true"
                    role="switch" class="category-switch-handler" data-optanongroupid="C0002" checked=""
                    aria-labelledby="ot-header-id-C0002">
                  <label class="ot-switch" for="ot-group-id-C0002">
                    <span class="ot-switch-nob" aria-checked="false" role="switch"
                      aria-label="Performance Cookies"></span>
                    <span class="ot-label-txt">Performance Cookies</span>
                  </label>
                </div>
              </div>
              <!-- accordion detail -->
              <div class="ot-acc-grpcntr ot-acc-txt">
                <p class="ot-acc-grpdesc ot-category-desc" id="ot-desc-id-C0002">These cookies allow us
                  to count visits
                  and traffic sources so we can measure and improve the performance of our site. They
                  help us to know
                  which pages are the most and least popular and see how visitors move around the
                  site. All information
                  these cookies collect is aggregated and therefore anonymous. If you do not allow
                  these cookies we will
                  not know when you have visited our site, and will not be able to monitor its
                  performance.</p>
              </div>
            </div>
            <div class="ot-accordion-layout ot-cat-item ot-vs-config" data-optanongroupid="C0001">
              <button aria-expanded="false" ot-accordion="true" aria-controls="ot-desc-id-C0001"
                aria-labelledby="ot-header-id-C0001"></button>
              <!-- Accordion header -->
              <div class="ot-acc-hdr ot-always-active-group">
                <div class="ot-plus-minus">
                  <span></span>
                  <span></span>
                </div>
                <h4 class="ot-cat-header" id="ot-header-id-C0001">Strictly Necessary Cookies</h4>
                <div class="ot-always-active">Always Active</div>
              </div>
              <!-- accordion detail -->
              <div class="ot-acc-grpcntr ot-acc-txt">
                <p class="ot-acc-grpdesc ot-category-desc" id="ot-desc-id-C0001">These cookies are
                  necessary for the
                  website to function and cannot be switched off in our systems. They are usually only
                  set in response
                  to actions made by you which amount to a request for services, such as setting your
                  privacy
                  preferences, logging in or filling in forms. You can set your browser to block or
                  alert you about
                  these cookies, but some parts of the site will not then work. These cookies do not
                  store any
                  personally identifiable information.</p>
              </div>
            </div>
            <div class="ot-accordion-layout ot-cat-item ot-vs-config" data-optanongroupid="C0004">
              <button aria-expanded="false" ot-accordion="true" aria-controls="ot-desc-id-C0004"
                aria-labelledby="ot-header-id-C0004"></button>
              <!-- Accordion header -->
              <div class="ot-acc-hdr">
                <div class="ot-plus-minus">
                  <span></span>
                  <span></span>
                </div>
                <h4 class="ot-cat-header" id="ot-header-id-C0004">Targeting Cookies</h4>
                <div class="ot-tgl">
                  <input type="checkbox" name="ot-group-id-C0004" id="ot-group-id-C0004" aria-checked="true"
                    role="switch" class="category-switch-handler" data-optanongroupid="C0004" checked=""
                    aria-labelledby="ot-header-id-C0004">
                  <label class="ot-switch" for="ot-group-id-C0004">
                    <span class="ot-switch-nob" aria-checked="false" role="switch"
                      aria-label="Targeting Cookies"></span>
                    <span class="ot-label-txt">Targeting Cookies</span>
                  </label>
                </div>
              </div>
              <!-- accordion detail -->
              <div class="ot-acc-grpcntr ot-acc-txt">
                <p class="ot-acc-grpdesc ot-category-desc" id="ot-desc-id-C0004">These cookies may be
                  set through our
                  site by our advertising partners. They may be used by those companies to build a
                  profile of your
                  interests and show you relevant adverts on other sites. They do not store directly
                  personal
                  information, but are based on uniquely identifying your browser and internet device.
                  If you do not
                  allow these cookies, you will experience less targeted advertising.</p>
              </div>
            </div>
            <!-- Groups sections starts -->
            <!-- Group section ends -->
            <!-- Accordion Group section starts -->
            <!-- Accordion Group section ends -->
          </section>
        </div>
        <section id="ot-pc-lst" class="ot-hide ot-hosts-ui ot-pc-scrollbar">
          <div id="ot-pc-hdr">
            <div id="ot-lst-title">
              <button class="ot-link-btn back-btn-handler" aria-label="Back">
                <svg id="ot-back-arw" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                  x="0px" y="0px" viewBox="0 0 444.531 444.531" xml:space="preserve">
                  <title>Back Button</title>
                  <g>
                    <path fill="#656565" d="M213.13,222.409L351.88,83.653c7.05-7.043,10.567-15.657,10.567-25.841c0-10.183-3.518-18.793-10.567-25.835
                    l-21.409-21.416C323.432,3.521,314.817,0,304.637,0s-18.791,3.521-25.841,10.561L92.649,196.425
                    c-7.044,7.043-10.566,15.656-10.566,25.841s3.521,18.791,10.566,25.837l186.146,185.864c7.05,7.043,15.66,10.564,25.841,10.564
                    s18.795-3.521,25.834-10.564l21.409-21.412c7.05-7.039,10.567-15.604,10.567-25.697c0-10.085-3.518-18.746-10.567-25.978
                    L213.13,222.409z"></path>
                  </g>
                </svg>
              </button>
              <h3>Cookie List</h3>
            </div>
            <div class="ot-lst-subhdr">
              <div class="ot-search-cntr">
                <p role="status" class="ot-scrn-rdr"></p>
                <input id="vendor-search-handler" type="text" name="vendor-search-handler" placeholder="Search…"
                  aria-label="Cookie list search">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  viewBox="0 -30 110 110" aria-hidden="true">
                  <title>Search Icon</title>
                  <path fill="#2e3644" d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23
            s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92
            c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17
            s-17-7.626-17-17S14.61,6,23.984,6z"></path>
                </svg>
              </div>
              <div class="ot-fltr-cntr">
                <button id="filter-btn-handler" aria-label="Filter" aria-haspopup="true">
                  <svg role="presentation" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 402.577 402.577"
                    xml:space="preserve">
                    <title>Filter Icon</title>
                    <g>
                      <path fill="#fff" d="M400.858,11.427c-3.241-7.421-8.85-11.132-16.854-11.136H18.564c-7.993,0-13.61,3.715-16.846,11.136
      c-3.234,7.801-1.903,14.467,3.999,19.985l140.757,140.753v138.755c0,4.955,1.809,9.232,5.424,12.854l73.085,73.083
      c3.429,3.614,7.71,5.428,12.851,5.428c2.282,0,4.66-0.479,7.135-1.43c7.426-3.238,11.14-8.851,11.14-16.845V172.166L396.861,31.413
      C402.765,25.895,404.093,19.231,400.858,11.427z"></path>
                    </g>
                  </svg>
                </button>
              </div>
              <div id="ot-anchor"></div>
              <section id="ot-fltr-modal">
                <div id="ot-fltr-cnt">
                  <button id="clear-filters-handler">Clear</button>
                  <div class="ot-fltr-scrlcnt ot-pc-scrollbar">
                    <div class="ot-fltr-opts">
                      <div class="ot-fltr-opt">
                        <div class="ot-chkbox">
                          <input id="chkbox-id" type="checkbox" aria-checked="false" class="category-filter-handler">
                          <label for="chkbox-id">
                            <span class="ot-label-txt">checkbox label</span>
                          </label>
                          <span class="ot-label-status">label</span>
                        </div>
                      </div>
                    </div>
                    <div class="ot-fltr-btns">
                      <button id="filter-apply-handler">Apply</button>
                      <button id="filter-cancel-handler">Cancel</button>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
          <section id="ot-lst-cnt" class="ot-host-cnt ot-pc-scrollbar">
            <div id="ot-sel-blk">
              <div class="ot-sel-all">
                <div class="ot-sel-all-hdr">
                  <span class="ot-consent-hdr">Consent</span>
                  <span class="ot-li-hdr">Leg.Interest</span>
                </div>
                <div class="ot-sel-all-chkbox">
                  <div class="ot-chkbox" id="ot-selall-hostcntr">
                    <input id="select-all-hosts-groups-handler" type="checkbox" aria-checked="false">
                    <label for="select-all-hosts-groups-handler">
                      <span class="ot-label-txt">checkbox label</span>
                    </label>
                    <span class="ot-label-status">label</span>
                  </div>
                  <div class="ot-chkbox" id="ot-selall-vencntr">
                    <input id="select-all-vendor-groups-handler" type="checkbox" aria-checked="false">
                    <label for="select-all-vendor-groups-handler">
                      <span class="ot-label-txt">checkbox label</span>
                    </label>
                    <span class="ot-label-status">label</span>
                  </div>
                  <div class="ot-chkbox" id="ot-selall-licntr">
                    <input id="select-all-vendor-leg-handler" type="checkbox" aria-checked="false">
                    <label for="select-all-vendor-leg-handler">
                      <span class="ot-label-txt">checkbox label</span>
                    </label>
                    <span class="ot-label-status">label</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ot-sdk-row">
              <div class="ot-sdk-column"></div>
            </div>
          </section>
        </section>
        <div class="ot-pc-footer">
          <div class="ot-btn-container">
            <button class="ot-pc-refuse-all-handler">Reject All</button>
            <button class="save-preference-btn-handler onetrust-close-btn-handler">Confirm My
              Choices</button>
          </div>
          <!-- Footer logo -->
          <div class="ot-pc-footer-logo">
            <a href="https://www.cookiepro.com/products/cookie-consent/" target="_blank" rel="noopener noreferrer"
              aria-label="Powered by OneTrust Opens in a new Tab">
              <img alt="Powered by Onetrust" src="https://cdn-ukwest.onetrust.com/logos/static/poweredBy_cp_logo.svg"
                title="Powered by OneTrust Opens in a new Tab">
            </a>
          </div>
        </div>
        <!-- Cookie subgroup container -->
        <!-- Vendor list link -->
        <!-- Cookie lost link -->
        <!-- Toggle HTML element -->
        <!-- Checkbox HTML -->
        <!-- plus minus-->
        <!-- Arrow SVG element -->
        <!-- Accordion basic element -->
        <span class="ot-scrn-rdr" aria-atomic="true" aria-live="polite"></span>
        <!-- Vendor Service container and item template -->
      </div>
   <!--   <iframe class="ot-text-resize" sandbox="allow-same-origin" title="onetrust-text-resize"
        style="position: absolute; top: -50000px; width: 100em;" aria-hidden="true"></iframe> -->
    </div>
  </div>
 <!-- <iframe src="about:blank" id="tmx_tags_iframe" title="empty" tabindex="-1" aria-disabled="true" aria-hidden="true"
    data-time="1705580882059" style="width: 0px; height: 0px; border: 0px; position: absolute; top: -5000px;"></iframe>
  <iframe id="tdz_ifrm" title="empty" name="" width="0px" height="0px" marginwidth="0" marginheight="0" frameborder="0"
    aria-disabled="true" aria-hidden="true" tabindex="-1"
    src="https://muziwakk.#/fp/HP?session_id=2-105d70-18d11d8e8cc-9bc3c7a&amp;org_id=96si7pc0&amp;nonce=aa871bbd2a179188&amp;mode=2&amp;hp=.co-operativebank.co.uk/CBIBSWeb/login.do.co-operativebank.co.uk/CBIBSWeb/start.do.de/portal/portal/x.entropay.com/basemenu/prot/x.facebook.comx.nationet.com/x.netbank.commbank.com.au/netbank/bankmainx.npbs.co.uk/netmastergoldbanking/x.nwolb.xlogin.aspx?refereridentx.rbsdigital.xAccountSummaryx.smile.co.uk/SmileWeb/login.do.smile.co.uk/SmileWeb/start.do.yandex.rux/CapitalOne_Consumer/x/easypay.by/x/sbank.ru/x53.com/servlet/efsonlinex://online.wellsfargo.com/x://secure.assist.ru/assistid/protected/main.doxabbeynational.co.uk/EBAN_ENS/BtoChannelDriverxalliance-leicesterxaltergold.com/login.phpxamericanexpress.com/myca/intl/acctsumm/emea/accountSummaryxbancaintesa.it/xbankcardservices.co.ukxbankofamerica.com/xbanquepopulaire.fr/xbnpparibas.net/xcahoot.comxcapitaloneonline.co.uk/CapitalOne_Consumer/Transactionsxcbonline.co.uk/ralu/reglm-web/setupSecurityQuestionPagexcibc.comxPreSignOnxcibc.comxSignOnxcitibank.ru/xclient.uralsibbank.ruxco-operativebank.co.uk/CBIBSWeb/loginSpixcommerceonlinebanking.comxcoventrybuildingsociety.co.ukxdeutsche-bank.dexdiscovercard.com/cardmembersvcs/strongauth/app/sa_mainxebanking.bawag.comxebc_ebc1961xegg.com/customer/movemoneyxegg.com/customer/yourmoneyxfacebook.com/xhalifax-online.co.ukxMyAccountsxhalifax-online.co.uk/x/Mhalifax-online.co.uk/personalxhsbc.co.uk/1/2/personal/internet-banking/xhsbc.comxhttps://banking.postbank.de/app/finanzstatus.init.do;jsessionidxib.fineco.it/FinecoWeb/BonificiServletxib.fineco.it/FinecoWeb/jsp/Main/HBFineco.jspxib.fineco.it/FinecoWeb/jsp/Main/Principale.jspxibank.alfabank.ruxin-biz.it/xipko.plxlibertyreserve.com/x/historylibertyreserve.com/x/loginwww.libertyreserve.com/x/Core.jswww.libertyreserve.com/x/transfer.libertyreserve.com/x/commonscript.jslloydstsb.co.uk/personal/a/account_overview/xmbna.co.ukxmenyala.ruxmoney.yandex.ruxmoneybookers.com/app/login.plxmoneymail.ruxmy.ebay.co.uk/ws/eBayISAPI.dll?MyEbayxmy.ebay.com/ws/eBayISAPI.dll?MyEbayxmy.ebay.fr/ws/eBayISAPI.dll?MyEbayxmybusinessbank.co.ukxnationet.com/AppServices/SignOn/SignOnProcess/RcaSignOnxnpbs.co.ukxnwolb.com/AccountSummaryxnwolb.com/Statementsxnwolb.com/TransfersLandingPagexoltx.fidelity.com/x/x/ofsummary/summaryxonline.lloydstsb.co.ukxonlinebanking.mandtbank.com/summary/AccountSummaryxpassport.yandex.ruxpaypal.com/x/cgi-bin/webscr?cmd=_accountxpaypal.com/x/cgi-bin/webscr?cmd=_login-done&amp;login_access=xpaypal.com/us/cgi-bin/webscr?cmd=_login-done&amp;login_access=xposte.it/xpsk.co.at/xsecure.lloydstsb.co.uk/personal/a/account_overviewxsmile.co.uk/SmileWeb/passcodexusaa.com/xusbank.com/internetBanking/RequestRouter?requestCmdId=Gxwachovia.comxybonline.co.uk/ralu/reglm-web/setupSecurityQuestionPagex.amazon.fr/xhistory/orders/view.htmlx.banquepopulaire.frxShowPortal.dox.bnpparibasfortis.bexHome_Logon.aspx.cdiscount.com/Account/Home.aspxx.cmb.frxaccueil.jspx.credit-agricole.frxentreeBam?sessionSAGx.labanquepostale.fr/xreleveCPP-releve_ccp.eax.secure.bnpparibas.net/NSFR?Actionx.secure.lcl.frxAccueilxcredem.it/OneToOne/ebank/functionsxmijn.ing.nl/xonline.ybs.co.ukxwww.discover.com/xorder.cdiscount.comxCustomer.aspxxsealinfo.verisign.com/splash?form_filexvos-comptes.credit-du-nord.fr/CDC_TableauDeBord_0.asp?xvoscomptesenligne.labanquepostale.frxwww.x.caisse-epargne.fr/Portail.aspxxwww.exabanque.netxonglet.phpxdeutsche-bank.de/xnorisbank.de/xpostbank.de/xtargobank.de/x.x.de/portal/x.bankofamerica.com/x/commonscript.js.bmo.com/OLB?id=x.bmo.com/RMC?id=x.chase.com/x.aspxx.chase.com/js/Reporting.jsx.koodomobile.com/account/selfserve/x/xaccountId=x.payment.ru/x.scotiabank.com/portal/index.jsp?xbancopopular.es/empresasxcreval.it/login2007/loginSiciliano.aspxfirst-direct.com/xipko.plxmybusinessbank.co.ukxsanpaoloimi.com/xulsterbankanytimebanking.x/login.aspxx"
    style="display: none !important; z-index: -9999 !important; visibility: hidden !important;"></iframe> -->
</body>
<!-- <iframe id="__JSBridgeIframe_1.0__" title="jsbridge___JSBridgeIframe_1.0__" style="display: none;"></iframe>
<iframe id="__JSBridgeIframe_SetResult_1.0__" title="jsbridge___JSBridgeIframe_SetResult_1.0__"
  style="display: none;"></iframe>
<iframe id="__JSBridgeIframe__" title="jsbridge___JSBridgeIframe__" style="display: none;"></iframe>
<iframe id="__JSBridgeIframe_SetResult__" title="jsbridge___JSBridgeIframe_SetResult__" style="display: none;"></iframe> -->

</html>