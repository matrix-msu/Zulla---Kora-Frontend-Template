<!-- page author: Kevin Sutherland -->
<div class="container main">
	<div class="container middlewrap">
        <br>
        <br>
        <h1 class="search">Search Page</h1>
        <br>
        <div class="container search">
            <form action="submit">
                <div class="search-field">
                    <input id="search-field" class="search-field" type="text" name="searchbar" placeholder="Search for whatever it is you want in life"/>
                </div>
                <input id="search-btn" class="search-submit"/>
            </form>
        </div>
    </div>
</div>

<main>
    <section>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat sed cras ornare arcu dui. Ac tortor vitae purus faucibus ornare. Ultricies mi eget mauris pharetra et ultrices. Sagittis eu volutpat odio facilisis mauris sit amet massa. Quam pellentesque nec nam aliquam sem et. In eu mi bibendum neque egestas. Eget egestas purus viverra accumsan in nisl. Vel facilisis volutpat est velit. Pellentesque elit eget gravida cum sociis natoque. <b>Adipiscing elit ut aliquam purus sit amet.</b> Urna cursus eget nunc scelerisque viverra mauris in aliquam sem. Scelerisque mauris pellentesque pulvinar pellentesque habitant. Id diam vel quam elementum pulvinar etiam non. Felis eget nunc lobortis mattis aliquam. Libero enim sed faucibus turpis in eu. Fermentum iaculis eu non diam phasellus vestibulum lorem sed. Nunc pulvinar sapien et ligula ullamcorper. Tellus in metus vulputate eu scelerisque felis imperdiet. <a href="#">Egestas sed tempus urna et pharetra.</a></p>

        <p>Amet venenatis urna cursus eget. Feugiat scelerisque varius morbi enim nunc faucibus. Sem viverra aliquet eget sit amet tellus cras adipiscing. Malesuada bibendum arcu vitae elementum curabitur vitae. Tempor orci eu lobortis elementum nibh. Convallis tellus id interdum velit laoreet id donec ultrices tincidunt. Hac habitasse platea dictumst vestibulum. Ac auctor augue mauris augue neque gravida in fermentum et. Arcu odio ut sem nulla pharetra. Pretium viverra suspendisse potenti nullam ac tortor vitae purus faucibus. Odio pellentesque diam volutpat commodo sed egestas egestas fringilla. Libero nunc consequat interdum varius sit. Mattis nunc sed blandit libero volutpat sed. Pellentesque id nibh tortor id aliquet lectus.</p>
    </section>
</main>

<script src="<?php echo BASE_JS_URL;?>search.js"></script>

<!--searchResults php-->
<!-- page author: Kevin Sutherland -->
<div class="container main">
	<div class="container middlewrap">
		<h4 class="search-button-header"><a id="new-search-button" href="<?php echo BASE_URL;?>search"><img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>arrow-left-green.svg" alt="start new search"> Start a New Search</a></h4>
  	<h1 class="search">Search Page</h1>
		<br>
    <div class="container search">
        <form action="submit">
            <div class="search-field">
                <input id="search-field" class="search-field" type="text" name="searchbar" placeholder="Search for whatever it is you want in life"/>
            </div>
            <input id="search-btn" class="search-submit"/>
        </form>
        <p id="searchResults-showing">Showing <span>X</span> of <span>###</span> Results</p>
  	</div>
  </div>
</div>

<main class="search-results">
    <div class="filter-menu">
        <h3>Filter Your Results</h3>
        <hr>
        <ul>
            <li class="filter-cat">Gender<span class="align-right"><img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down-dark.svg"></span>
            </li>
            <ul id="submenu">
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Unidentified <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Male <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Female <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
            </ul>
            <li class="filter-cat">Age Category<span class="align-right"><img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down-dark.svg"></span>
            </li>
            <ul id="submenu">
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Age Range <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Age Range <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Age Range <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
            </ul>
            <li class="filter-cat">Realm of Renown<span class="align-right"><img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down-dark.svg"></span>
            </li>
            <ul id="submenu">
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
            </ul>
            <li class="filter-cat">Slave Status<span class="align-right"><img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down-dark.svg"></span>
            </li>
            <ul id="submenu">
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
            </ul>
            <li class="filter-cat">Occupation<span class="align-right"><img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down-dark.svg"></span>
            </li>
            <ul id="submenu">
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
            </ul>
            <li class="filter-cat">Race of Parents<span class="align-right"><img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down-dark.svg"></span></li>
            <ul id="submenu">
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
            </ul>
            <li class="filter-cat">Biographical Detail<span class="align-right"><img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down-dark.svg"></span></li>
            <ul id="submenu">
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
            </ul>
            <li class="filter-cat">Biographical Detail<span class="align-right"><img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down-dark.svg"></span></li>
            <ul id="submenu">
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
            </ul>
            <li class="filter-cat">Biographical Detail<span class="align-right"><img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down-dark.svg"></span></li>
            <ul id="submenu">
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
            </ul>
            <li class="filter-cat">Biographical Detail<span class="align-right"><img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down-dark.svg"></span></li>
            <ul id="submenu">
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
            </ul>
            <li class="filter-cat">Biographical Detail<span class="align-right"><img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down-dark.svg"></span></li>
            <ul id="submenu">
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
            </ul>
            <li class="filter-cat">Biographical Detail<span class="align-right"><img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down-dark.svg"></span></li>
            <ul id="submenu">
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
            </ul>
            <li class="filter-cat">Biographical Detail<span class="align-right"><img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down-dark.svg"></span></li>
            <ul id="submenu">
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
            </ul>
            <li class="filter-cat">Biographical Detail<span class="align-right"><img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down-dark.svg"></span></li>
            <ul id="submenu">
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
            </ul>
            <li class="filter-cat">Biographical Detail<span class="align-right"><img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down-dark.svg"></span></li>
            <ul id="submenu">
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
            </ul>
            <li class="filter-cat">Biographical Detail<span class="align-right"><img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down-dark.svg"></span></li>
            <ul id="submenu">
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
            </ul>
            <li class="filter-cat">Biographical Detail<span class="align-right"><img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down-dark.svg"></span></li>
            <ul id="submenu">
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
            </ul>
            <li class="filter-cat">Biographical Detail<span class="align-right"><img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down-dark.svg"></span></li>
            <ul id="submenu">
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
            </ul>
            <li class="filter-cat">Biographical Detail<span class="align-right"><img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down-dark.svg"></span></li>
            <ul id="submenu">
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
            </ul>
            <li class="filter-cat">Biographical Detail<span class="align-right"><img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down-dark.svg"></span></li>
            <ul id="submenu">
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
            </ul>
            <li class="filter-cat">Biographical Detail<span class="align-right"><img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down-dark.svg"></span></li>
            <ul id="submenu">
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
            </ul>
            <li class="filter-cat">Biographical Detail<span class="align-right"><img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down-dark.svg"></span></li>
            <ul id="submenu">
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
            </ul>
            <li class="filter-cat">Biographical Detail<span class="align-right"><img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down-dark.svg"></span></li>
            <ul id="submenu">
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
            </ul>
            <li class="filter-cat">Biographical Detail<span class="align-right"><img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down-dark.svg"></span></li>
            <ul id="submenu">
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
            </ul>
            <li class="filter-cat">Biographical Detail<span class="align-right"><img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down-dark.svg"></span></li>
            <ul id="submenu">
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
            </ul>
            <li class="filter-cat">Biographical Detail<span class="align-right"><img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down-dark.svg"></span></li>
            <ul id="submenu">
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input id="checkBox" type="checkbox">
                        <p>Undefined <em>(234)</em></p>
                        <span></span>
                    </label>
                </li>
            </ul>
        </ul>
    </div>
    <div id="searchResults">
        <div id="search-result-controls">
            <span class="align-left show-filter" class="show-filter"><img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>arrow-right.svg" alt="show filter menu button"> Show Filter Menu</span>
            <span class="align-center results-per-page"><span>#</span> Per Page <img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down-dark.svg" alt="results per page button"></span>
            <ul id="submenu" class="results-per-page">
                <li><span>1</span> Per Page</li>
                <li><span>5</span> Per Page</li>
                <li><span>8</span> Per Page</li>
                <li><span>11</span> Per Page</li>
            </ul>
            <span class="align-center sort-by">Sort By <img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down-dark.svg" alt="results per page button"></span>
            <ul id="submenu" class="sort-by">
                <li>A - Z</li>
                <li>Z - A</li>
            </ul>
            <span class="align-right">
                <span class="grid-view view-toggle">
                    <img class="show" src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>grid-inActive.svg" alt="grid view button">
                    <img class="hide" src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>grid-Active.svg" alt="grid view button">
                    <p class="tooltip">View Grid</p>
                </span>
                &nbsp;&nbsp;
                <span class="table-view view-toggle">
                    <img class="hide" src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>table-inActive.svg" alt="table view button">
                    <img class="show" src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>table-Active.svg" alt="table view button">
                    <p class="tooltip">View Table</p>
                </span>
            </span>
        </div>
        <div id="search-result-configure-download-row">
            <span class="align-left">
                <a class="modal">Configure Table Columns</a>
            </span>
            <span class="align-right"><b>Download:</b> <span>Current View</span> | <span>All Results</span></span>
        </div>
        <div id="search-result-wrap">
            <div id="search-result-table">
                <table id="search-results">
                    <thead>
                        <tr>
                            <th class="name">NAME</th>
                            <th class="gender">GENDER</th>
                            <th class="age">AGE</th>
                            <th class="occupation">OCCUPATION</th>
                            <th class="meta">METADATA TITLE</th>
                            <th class="meta">METADATA TITLE</th>
                            <th class="meta">METADATA TITLE</th>
                            <th class="meta">METADATA TITLE</th>
                            <th class="meta">METADATA TITLE</th>
                            <th class="meta">METADATA TITLE</th>
                            <th class="meta">METADATA TITLE</th>
                            <th class="meta">METADATA TITLE</th>
                            <th class="meta">METADATA TITLE</th>
                            <th class="meta">METADATA TITLE</th>
                            <th class="meta">METADATA TITLE</th>
                            <th class="meta">METADATA TITLE</th>
                            <th class="meta">METADATA TITLE</th>
                            <th class="meta">METADATA TITLE</th>
                            <th class="meta">METADATA TITLE</th>
                            <th class="meta">METADATA TITLE</th>
                            <th class="meta">METADATA TITLE</th>
                            <th class="meta">METADATA TITLE</th>
                            <th class="meta">METADATA TITLE</th>
                            <th class="meta">METADATA TITLE</th>
                            <th class="meta">METADATA TITLE</th>
                            <th class="meta">METADATA TITLE</th>
                            <th class="meta">METADATA TITLE</th>
                            <th class="meta">METADATA TITLE</th>
                            <th class="meta">METADATA TITLE</th>
                            <th class="meta">METADATA TITLE</th>
                            <th class="meta">METADATA TITLE</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
		<div id="pagination">
            <input class="current-page" type="hidden" value="1">
            <div class="pagi-left"><img src="<?php echo BASE_TEMPLATE_IMAGE_URL; ?>chevron.svg" alt="Arrow Left"/></div>
            <div class="page-numbers">
                <span class="num pagi-first">1</span>
                <span class="dotsLeft">...</span>
                <span class="num one"></span>
                <span class="num two"></span>
                <span class="num three"></span>
                <span class="num four"></span>
                <span class="num five"></span>
                <span class="dotsRight">...</span>
                <span class="num pagi-last">310</span>
            </div>
            <div class="pagi-right"><img src="<?php echo BASE_TEMPLATE_IMAGE_URL; ?>chevron-light.svg" alt="Arrow Right"/></div>
        </div>
    </div>
</main>

<div class="modal-view">
    <div class="config-table-modal">
        <div class="config-table-modal-content-wrap">
            <div class="close"><img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>x.svg" alt="close modal button"></div>
            <h4>Configure Table Columns</h4>
            <p>Choose Group of Variables
                <select>
                    <option value="1">Name of Variable Group</option>
                    <option value="2">####</option>
                    <option value="3">####</option>
                    <option value="4">####</option>
                </select>
            </p>
            <div>
                <div class="left-col">
                    <p>Available Columns</p>
                    <div>
                        <ul id="available-cols">
                            <li class="left">ID</li>
                            <li class="left">Sex</li>
                            <li class="left">Enslaved Role</li>
                            <li class="left">Origin / Ethnicity</li>
                            <li class="left">Color</li>
                            <li class="left">Occupation</li>
                            <li class="left">Column Name</li>
                            <li class="left">Column Name</li>
                            <li class="left">Column Name</li>
                            <li class="left">Column Name</li>
                            <li class="left">Column Name</li>
                            <li class="left">Column Name</li>
                        </ul>
                    </div>
                </div>
                <div class="arrow-wrap">
                    <img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down-dark.svg" alt="add item">
                    <img src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down-dark.svg" alt="remove item">
                </div>
                <div class="right-col">
                    <p>Selected Columns</p>
                    <div>
                        <ul id="selected-cols">
                            <li class="right">Column Name1</li>
                            <li class="right">Column Name2</li>
                            <li class="right">Column Name3</li>
                            <li class="right">Column Name4</li>
                            <li class="right">Column Name5</li>
                            <li class="right">Column Name6</li>
                        </ul>
                        <img class="down" src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down-dark.svg" alt="move down">
                        <img class="up" src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>chevron-down-dark.svg" alt="move up">
                    </div>
                </div>
            </div>
            <div class="update-columns-button">Update Table Columns</div>
        </div>
    </div>
</div>

<script src="<?php echo BASE_JS_URL;?>pagination.js"></script>
<script src="<?php echo BASE_JS_URL;?>searchResults.js"></script>
<script src="<?php echo BASE_JS_URL;?>modal.js"></script>
<script src="<?php echo BASE_JS_URL;?>search.js"></script>
