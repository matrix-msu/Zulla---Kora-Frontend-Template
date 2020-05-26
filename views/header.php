<!-- msu header container -->
<div class="navigation-header">
  <div id="header-center-aligner">
            <div class="left-section">
             	<a href="<?php echo BASE_URL;?>"><img class="logo-link" src="<?php echo BASE_IMAGE_URL;?>logo.svg" alt="Logo"></a>
            </div>
            <div class="dropdown-menu">
                <div class="responsive-menu">
                    <a><a class="nav-link" id="menu-button">Menu</a><span class="dropdown-button"><img class="hamburger" src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>hamburger.svg" alt="hambrger.svg"/></span></a>
                </div>
            </div>
            <div class="right-section">
                <ul class="nav" id="nav-menu">

                    <li class="nav-item"><a class="nav-link unselected" id="index" href="<?php echo BASE_URL;?>essays">ESSAYS</a></li>
                    <li class="nav-item"><a class="nav-link unselected" id="index" href="<?php echo BASE_URL;?>collections">COLLECTIONS</a></li>
                    
                    <li class="nav-item" id="drop-link">
                    <a class="nav-link unselected" id="more">About</a>
                    	<span class="drop-carat">
                            <img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down.svg" alt="down-arrow.svg"/>
						</span>
						<ul>
                            <li class="browse-sub">
                                <a class="nav-sublink" href="<?php echo BASE_URL;?>cards">Our Mission</a>
                                <a class="nav-sublink" href="<?php echo BASE_URL;?>carousel">Team</a>
                                <a class="nav-sublink" href="<?php echo BASE_URL;?>drawers">Get Involved</a>
                                <a class="nav-sublink" href="<?php echo BASE_URL;?>fullRecord">Donate</a>
                            </li>
                    	</ul>
					</li>

                    <li class="nav-item">
                        <a class="nav-link unselected search-icon" id="search" href="<?php echo BASE_URL;?>search">
                            <img src="<?php echo BASE_IMAGE_URL;?>Search.svg" alt="Search.svg">
                        </a>
                    </li>
                   
                </ul>
            </div>
    </div>
  </div>
