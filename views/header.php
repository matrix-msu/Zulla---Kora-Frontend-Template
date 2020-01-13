<!-- msu header container -->
<div class="navigation-header">
  <?php
      include BASE_VIEW_PATH . 'MSU_header.php';
  ?>
  <div id="header-center-aligner">

            <div class="left-section">
                <a href="<?php echo BASE_URL;?>"><img class="logo-link" src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>logo.svg" alt="logo.svg"></a>
            </div>
            <div class="dropdown-menu">
                <div class="responsive-menu">
                    <a><a class="nav-link" id="menu-button">Menu</a><span class="dropdown-button"><img class="hamburger" src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>hamburger.svg" alt="hambrger.svg"/></span></a>
                </div>
            </div>
            <div class="right-section">
                <ul class="nav" id="nav-menu">
                    <li class="nav-item"><a class="nav-link unselected" id="index" href="<?php echo BASE_URL;?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link unselected" id="about" href="<?php echo BASE_URL;?>about">About</a></li>
                    <li class="nav-item" id="drop-link">
                        <a class="nav-link unselected" id="more">Components</a>
                        <span class="drop-carat">
                                    <img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down.svg" alt="down-arrow.svg"/>
                        </span>
                        <ul>
                            <li class="browse-sub">
                                <a class="nav-sublink" href="<?php echo BASE_URL;?>cards">Cards</a>
                                <a class="nav-sublink" href="<?php echo BASE_URL;?>carousel">Carousel</a>
                                <a class="nav-sublink" href="<?php echo BASE_URL;?>drawers">Drawers</a>
                                <a class="nav-sublink" href="<?php echo BASE_URL;?>fullRecord">Full Record</a>
                                <a class="nav-sublink" href="<?php echo BASE_URL;?>modal">Modal</a>
                                <a class="nav-sublink" href="<?php echo BASE_URL;?>admin">Admin</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link unselected" id="search" href="<?php echo BASE_URL;?>search">Search</a></li>
                </ul>
            </div>
    </div>
  </div>
