<?php
$page = 'Index';
include 'partials/head.php';
?>

<body>
  <?php
include 'partials/header.php';
?>

  <main class="indexPage">
    <!-- Easter collection hero image -->
    <section class="collection">
      <img src="images/all-products.jpg" alt="Påske kollektion">
      <div class="tagline">
        <h2 class="tagline-text">NY PÅSKE EDITION</h2>
        <div class="tagline-bear"><svg width="108" height="88" viewBox="0 0 108 88" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.871323 50.8201C1.56606 43.872 3.12196 37.0357 5.50378 30.4659C1.54002 27.1281 -2.74354 21.4336 3.95317 12.8436C10.1169 4.86938 17.2206 7.4954 21.2619 10.6986C28.385 6.27377 37.9503 3.56117 50.8204 3.20526C57.2378 2.98895 63.6491 3.7844 69.8154 5.56195C72.4902 1.59886 77.6363 -1.92174 85.7092 1.19486C94.693 4.6289 93.4622 13.4689 91.3689 18.1246C99.6353 26.3181 105.033 36.9292 106.768 48.396C110.577 72.7036 108.397 86.4975 57.8369 87.8826C-0.931259 89.4602 -2.03607 75.0315 0.871323 50.8201Z" fill="#FFB0CE"/>
<path d="M34.8685 36.9495C35.4306 30.8413 39.5881 24.4446 47.4672 24.2714C55.3462 24.0983 60.5117 30.8606 60.7249 36.988C60.8412 40.903 55.5401 43.0096 47.6998 43.2212C39.8595 43.4328 34.5196 40.8452 34.8685 36.9495Z" fill="#272525"/>
<path d="M23.2162 28.0753C21.3617 26.109 21.9902 22.5342 24.6199 20.0908C27.2496 17.6474 30.8848 17.2607 32.7393 19.227C34.5938 21.1934 33.9654 24.7681 31.3357 27.2115C28.7059 29.6549 25.0708 30.0416 23.2162 28.0753Z" fill="#272525"/>
<path d="M63.6322 25.084C60.8707 22.7882 60.0447 19.2532 61.7872 17.1884C63.5297 15.1236 67.1808 15.3109 69.9423 17.6066C72.7037 19.9024 73.5297 23.4374 71.7872 25.5022C70.0447 27.567 66.3936 27.3797 63.6322 25.084Z" fill="#272525"/>
</svg>
</div>
      </div>
      <a href="easter.php" class="link">Se kollektionen</a>
      <a href="easter.php" class="productPage"></a>
    </section>

    <!-- Scrolling products -->
    <section class="products">
      <div class="scrollItems">
        <div class="items">

          <!-- Product 1 -->
          <section class="item item-1">
          <img src="images/chikkens.png" alt="Påskekyllinger (3)">
          <div class="tagline">
          <h2 class="tagline-text">“THE GANG” IS HERE</h2>
          </div>
          <button class="link">Læg i kurv</button>
          <a href="#" class="productPage"></a>
          </section>

          <!-- Product 2 -->
          <section class="item item-2">
            <img src="images/oneEgg.png" alt="Pyntepåskeæg">
            <div class="tagline">
              <h2 class="tagline-text">ET ÆG DER VIL NOGET</h2>
            </div>
            <button class="link">Læg i kurv</button>
            <a href="#" class="productPage"></a>
          </section>

          <!-- Product 3 -->
          <section class="item item-3">
            <img src="images/sheep.png" alt="Får">
            <div class="tagline">
              <h2 class="tagline-text">VI KAN IKKE FÅR NOK</h2>
            </div>
            <button class="link">Læg i kurv</button>
            <a href="#" class="productPage"></a>
          </section>

          <!-- Product 4 -->
          <section class="item item-4">
            <img src="images/straws.png" alt="Påske sugerør (20)">
            <div class="tagline">
              <h2 class="tagline-text">SUG BARE LØS</h2>
              <div class="tagline-bear"><svg width="65" height="52" viewBox="0 0 65 52" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.524478 21.97C0.943011 26.0755 1.87943 30.1152 3.31252 33.9974C0.926935 35.9698 -1.65114 39.3347 2.37928 44.4106C6.08891 49.1226 10.3643 47.5709 12.7966 45.6781C17.0836 48.2928 22.8405 49.8957 30.5864 50.106C34.4487 50.233 38.3072 49.763 42.0186 48.7134C43.6284 51.0552 46.7256 53.1356 51.5842 51.2939C56.9912 49.2647 56.2504 44.0411 54.9906 41.29C59.9657 36.4484 63.2145 30.1782 64.2588 23.4023C66.551 9.03877 65.2387 0.887852 34.8093 0.0693486C-0.560405 -0.86284 -1.22535 7.66323 0.524478 21.97Z" fill="#67D7B5"/>
<path d="M20.9857 30.1663C21.324 33.7757 23.8263 37.5556 28.5683 37.658C33.3103 37.7603 36.4191 33.7644 36.5475 30.1436C36.6174 27.8302 33.4269 26.5854 28.7083 26.4603C23.9896 26.3353 20.7758 27.8643 20.9857 30.1663Z" fill="#120F11"/>
<path d="M13.9728 35.4102C12.8567 36.5721 13.2349 38.6845 14.8176 40.1283C16.4003 41.5721 18.5881 41.8006 19.7043 40.6387C20.8204 39.4768 20.4422 37.3644 18.8595 35.9206C17.2768 34.4768 15.0889 34.2483 13.9728 35.4102Z" fill="#120F11"/>
<path d="M38.2927 37.1757C36.6307 38.5323 36.1336 40.6211 37.1823 41.8412C38.231 43.0613 40.4285 42.9507 42.0905 41.5941C43.7524 40.2375 44.2496 38.1487 43.2009 36.9286C42.1521 35.7085 39.9547 35.8191 38.2927 37.1757Z" fill="#120F11"/>
</svg>
</div>
            </div>
            <button class="link">Læg i kurv</button>
            <a href="#" class="productPage"></a>
          </section>

          <!-- Product 5 -->
          <section class="item item-5">
            <img src="images/napkins.png" alt="Påske servietter (15)">
            <div class="tagline">
              <h2 class="tagline-text">SELV ET SVIN KAN BLIVE REN MED<br> DE HER</h2>
              <div class="tagline-bear"><svg width="62" height="75" viewBox="0 0 62 75" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M35.6054 0.667166C30.8064 1.14392 26.0845 2.21058 21.5467 3.84299C19.2412 1.1256 15.3079 -1.81104 9.37484 2.77996C3.86696 7.00555 5.68078 11.8756 7.89323 14.6461C4.83699 19.5295 2.96338 26.0871 2.71755 34.9103C2.56904 39.3098 3.11845 43.705 4.34533 47.9326C1.60801 49.7663 -0.823699 53.2943 1.32896 58.8287C3.70087 64.9877 9.8067 64.1439 13.0224 62.7088C18.6817 68.376 26.0109 72.0766 33.9311 73.2662C50.7205 75.8772 60.248 74.3823 61.2047 39.7206C62.2943 -0.568614 52.3283 -1.32603 35.6054 0.667166Z" fill="#FCD237"/>
<path d="M26.0254 23.9741C21.8065 24.3594 17.3882 27.2097 17.2686 32.6113C17.149 38.0128 21.8197 41.5541 26.052 41.7003C28.7561 41.78 30.2111 38.1457 30.3573 32.7707C30.5035 27.3957 28.7162 23.7349 26.0254 23.9741Z" fill="#120F11"/>
<path d="M19.8277 16.1732C18.4696 14.9081 16.0074 15.344 14.3281 17.1467C12.6488 18.9495 12.3885 21.4364 13.7466 22.7014C15.1046 23.9665 17.5669 23.5306 19.2461 21.7279C20.9254 19.9252 21.1858 17.4382 19.8277 16.1732Z" fill="#120F11"/>
<path d="M17.8323 43.6882C16.2466 41.7951 13.805 41.2288 12.3788 42.4234C10.9526 43.618 11.0819 46.1211 12.6676 48.0142C14.2533 49.9073 16.695 50.4736 18.1211 49.279C19.5473 48.0844 19.418 45.5813 17.8323 43.6882Z" fill="#120F11"/>
</svg>
</div>
            </div>
            <button class="link">Læg i kurv</button>
            <a href="#" class="productPage"></a>
          </section>

          <!-- Product 6 -->
          <section class="item item-6">
            <img src="images/multiEggs.png" alt="Påskeæg (9)">
            <div class="tagline">

              <h2 class="tagline-text">DET ER EGGCELENT</h2>
            </div>
            <button class="link">Læg i kurv</button>
            <a href="#" class="productPage"></a>
          </section>
        </div>
      </div>

      <!-- Scroll arrows -->
      <div class="arrow next"><svg width="25" height="41" viewBox="0 0 25 41" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path d="M2.64575 2.875L20.2708 20.5L2.64575 38.125" stroke="#FFA756" stroke-width="6"
            stroke-miterlimit="10" />
        </svg>
      </div>
      <div class="arrow prev"><svg width="25" height="41" viewBox="0 0 25 41" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path d="M2.64575 2.875L20.2708 20.5L2.64575 38.125" stroke="#FFA756" stroke-width="6"
            stroke-miterlimit="10" />
        </svg>
      </div>

    </section>
    <!-- Scrolling products END -->
  </main>

  <?php
include 'partials/footer.php';
?>
</body>
