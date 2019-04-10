<header>
<nav class="f4 headerBear">
  <?php if ($page != 'Index') {echo '<img src="images/bear.svg" alt="" class="headerBearPink">';}?>
  <a href="./" class="logo"><img src="images/logo.svg" alt="Om Verden"></a>
  <button class="mobileCart" data-items='true'>
  <img src="images/cart.svg" alt="Shopping Cart">
  </button>
  <button class="hamburger hamburger--3dx" type="button">
    <span class="hamburger-box">
      <span class="hamburger-inner"></span>
    </span>
  </button>
<ul class="navMenu hidden">
  <a href="./" class="<?php if ($page == 'Index') {echo 'activeSite';}?>"><li>Forside</li></a>
  <a href="./" class="disabled"><li>Mænd</li></a>
  <a href="./" class="disabled"><li>Kvinder</li></a>
  <li class="dropdown"><span class="<?php if ($page == 'Påske edition') {echo 'activeSite';}?>">Kollektioner</span>
    <ul>
      <a href="easter.php" class="<?php if ($page == 'Påske edition') {echo 'activeSite';}?>">
        <li>Påske edition</li>
      </a>
      <a href="./" class="disabled">
        <li>Bø</li>
      </a>
      <a href="./" class="disabled">
        <li>Adrians revenge</li>
      </a>
      <a href="./" class="disabled">
        <li>Hygge<wbr>hyggen</li>
      </a>
      <a href="./" class="disabled">
        <li>X Psycho</li>
      </a>
    </ul>
  </li>
  <a href="./" class="disabled"><li>Kontakt</li></a>
  <li class="buttons"><img src="images/search.svg" alt="Search"></li>
  <li class="buttons" data-items='true'><img src="images/cart.svg" alt="Shopping Cart"></li>
</ul>
</nav>
</header>
