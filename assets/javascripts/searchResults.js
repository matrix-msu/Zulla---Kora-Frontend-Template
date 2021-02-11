// jQuery's '.css' inserts css styles as inline-styles
// this can be problematic because it overwrites css styles applied in the stylesheet
// $(element).css('style',''); unsets these inline styles
var setView; // load grid or table view, with # results per page from last page visit on page load
var cards;
var num_of_results;
//Set pagination when page first loads (total_length_of_cards, card_limit, card_offset) (pagination.js needs to be included before searchResults.js)
setPagination(22, 11, 0);

$(document).ready(function() {

    //Change in current-page input so call searchResults function (this is example function from Enslaved Search Results DO NOT DELETE)
    // $('#pagination .current-page').change(function(){
    //     var val = $('#pagination .current-page').val();
    //     //Call searchResults normally except calculate new offset
    //     searchResults(search_type, card_limit, (val - 1) * card_limit);
    // });

    $('span.results-per-page > span').html(result_array.length);
    setView = window.localStorage.getItem('view');
    if (!setView || setView === 'grid') {
        cards = false;
        $('span.grid-view').trigger('click');
    } else {
        cards = true
        $('span.table-view').trigger('click');
    }
    num_of_results = window.localStorage.getItem('display_amount')
    if (!num_of_results) {
        $('span.results-per-page > span').html('11');
        $('#searchResults-showing >span:first-child').html('11');
    } else {
        $('span.results-per-page > span').html(num_of_results);
        $('#searchResults-showing >span:first-child').html(num_of_results);
    }
    $(".show-filter").trigger('click');
    correctTableHeights()
});

$(document).click(function() { // close things with clicked-off
    $('span.results-per-page').find("img:first").removeClass('show');
    $('span.results-per-page').next().removeClass('show');
    $('span.sort-by').next().removeClass('show');
    $('span.sort-by').find("img:first").removeClass('show');
    if (window.innerWidth < 820 && filter) {
        $(".show-filter").trigger('click');
    }
});

$('div.container.main').click(function(e) {
    e.stopPropagation();
})

$("span.align-center").click(function(e) { // toggle show/hide per-page submenu
    e.stopPropagation();
    $(this).find("img:first").toggleClass('show');
    $(this).next().toggleClass('show');
});

$("ul.results-per-page li").click(function(e) { // set the per-page value
    e.stopPropagation();
    num_of_results = $(this).find('span:first').html();
    localStorage.setItem('display_amount', num_of_results);
    location.reload();
});

var timer
$("span.view-toggle").mouseenter(function() { // show tooltips on hover
    var that = this
    timer = setTimeout(function() {
        $('span p.tooltip').removeClass('hovered');
        $(that).find("p.tooltip").addClass('hovered');
    }, 750);
}).mouseleave(function() {
    $('span p.tooltip').removeClass('hovered');
    clearTimeout(timer)
});

var view
var result
result_array = []
result_array.length = 11
$("span.grid-view").click(function gridView(e) { // grid view
    e.stopPropagation()
    if (cards === false) {
        $('tbody > tr').remove();
        $("#search-result-configure-download-row").hide();
        $("#search-result-table").hide();
        $('span.view-toggle img.hide').show();
        $('span.view-toggle img.show').hide();
        $('<div class="column"><div class="cardwrap"><ul class="row"></ul></div></div>').appendTo("div#search-result-wrap");
        result = parseInt(localStorage.getItem('display_amount'), 10)
        if (result) {
            result_array.length = result
        }
        $.each(result_array, function() {
            $('<li><a><div class="container cards"><p class="card-title">Person Name or Narrative Title</p><p><span>Gender</span>: Male</p><p><span>Born</span>: fl.1845 Virginia, United States</p><p><span>Occupation</span>: Fugitive Slave, Slave Narrative, Occupation..</p><a class="card-learn-more">View Narrative</a></div></a></li>').appendTo("ul.row");
        });
        cards = true
        view = 'grid'
        window.localStorage.setItem('cards', cards)
        window.localStorage.setItem('view', view)
        $('div.column').css('padding', '0', 'margin-top', '-30px', 'margin-bottom', '-15px');
    }
});

$("span.table-view").click(function tableView(e) { // table view
    e.stopPropagation()
    if (cards === true) {
        cards = false
        window.localStorage.setItem('cards', cards)
        $('div.column').remove();
        $('div#search-result-table').show();
        $('span.view-toggle img.hide').hide();
        $('span.view-toggle img.show').show();
        $(this).addClass("show");
        $("span.grid-view").removeClass("show");
        $("#search-result-configure-download-row").show();
        $('table').css('width', '', 'margin', '');
        var view = 'table'
        window.localStorage.setItem('view', view)
        result = parseInt(localStorage.getItem('display_amount'), 10)
        if (result) {
            result_array.length = result
        }
        $.each(result_array, function() {
            $(
                '<tr class="tr"><td class="name td-name"><span>Name LastName</span></td><td class="gender"><p><span class="first">Gender: </span>Gndr</p></td><td class="age"><p><span class="first">Age: </span>##</p></td><td class="occupation"><p><span class="first">Occupation: </span>Fugitive Slave</p></td><td class="meta"><span class="meta">Metadata Content</span></td><td class="meta"><span class="meta">Metadata Content</span></td><td class="meta"><span class="meta">Metadata Content</span></td><td class="meta"><span class="meta">Metadata Content</span></td><td class="meta"><span class="meta">Metadata Content</span></td><td><span class="meta">Metadata Content</span></td><td class="meta"><span class="meta">Metadata Content</span></td><td class="meta"><span class="meta">Metadata Content</span></td><td class="meta"><span class="meta">Metadata Content</span></td><td class="meta"><span class="meta">Metadata Content</span></td><td class="meta"><span class="meta">Metadata Content</span></td><td class="meta"><span class="meta">Metadata Content</span></td><td class="meta"><span class="meta">Metadata Content</span></td><td class="meta"><span class="meta">Metadata Content</span></td><td class="meta"><span class="meta">Metadata Content</span></td><td class="meta"><span class="meta">Metadata Content</span></td><td class="meta"><span class="meta">Metadata Content</span></td><td class="meta"><span class="meta">Metadata Content</span></td><td class="meta"><span class="meta">Metadata Content</span></td><td class="meta"><span class="meta">Metadata Content</span></td><td class="meta"><span class="meta">Metadata Content</span></td><td class="meta"><span class="meta">Metadata Content</span></td><td class="meta"><span class="meta">Metadata Content</span></td><td class="meta"><span class="meta">Metadata Content</span></td><td class="meta"><span class="meta">Metadata Content</span></td><td class="meta"><span class="meta">Metadata Content</span></td><td class="meta"><span class="meta">Metadata Content</span></td><td class="meta"><a href="#">View Narrative</a></td></tr>'
            ).appendTo('tbody');
        });
    }
});

// need to be sure the first <td> in each <tr> has a height matching the <tr>
// first <td> is positioned absolutely, so that we may scroll the table without scrolling the first <td>
// absolute positioning makes height behave differently, so this function is needed to ensure height consistency between the first table cell and its respective row
// this element is structured as : <tr> <td.name> <span> ** words go here ** </span></td>
// with 1 line of text (default), height = 13(px)
// if <element>.height > 13 {var = <element>.height; element.parent(tr).height = var}
var tr = window.document.getElementsByClassName('tr');
var td = window.document.getElementsByClassName('td-name');

function correctTableHeights() {
    if (tr) {
        for (var i = 0; i < tr.length; i++) {
            // if row-height != first-cell-height OR if name-height != rowHeight
            // row height is flexable, so set that equal to the non-flexable element
            if (tr[i].offsetHeight != td[i].offsetHeight) {
                var height = tr[i].offsetHeight;
                td[i].style.height = '' + height + '';
                //} else if ($('.td-name span')[i].offsetHeight != td[i].offsetHeight) {
            } else if ($('.td-name span')[i].offsetHeight > 13) {
                var height = $('.td-name span')[i].offsetHeight;
                $('.td-name span')[i].style.paddingBottom = '40px';
                tr[i].style.height = '' + height + '';
            }
        }
        window.setTimeout('correctTableHeights()', 1000 * 1); // function reloads itself every 1 seconds
    }
}

// filter handled below here
var filter;
var tableWidth = 0;
$(".show-filter").click(function(e) { // toggle show/hide filter menu
    e.stopPropagation();
    filter = !filter;
    if (filter) {
        $("div.filter-menu").addClass("show");
        $(this).html('<img src="'+BASE_TEMPLATE_IMAGE_URL+'arrow-right.svg" alt="show filter menu button" style="transform:rotate(180deg);"> Hide Filter Menu');
        if (window.innerWidth <= 820) {
            $("#searchResults").removeClass("show");
        } else {
            centerStuffWithFilter();
        }
    } else { // toggle off filter-menu
        $(this).html('<img src="'+BASE_TEMPLATE_IMAGE_URL+'arrow-right.svg" alt="show filter menu button"> Show Filter Menu');
        $('div#searchResults').css('max-width', '');
        setTimeout(function() {
            $(".filter-menu").removeClass("show");
            $('div#searchResults').css('width', '');
            $("#searchResults").removeClass("show");
        }, 50);
    }
});

$('div.filter-menu').click(function(e) {
    e.stopPropagation();
});

function centerStuffWithFilter() {
    $("#searchResults").addClass("show");
    if (window.innerWidth <= 820) {
        $('div#searchResults.show').css('width', '');
        $("#searchResults").removeClass("show");
    } else {
        tableWidth = window.innerWidth - 330
        $('div#searchResults').css('max-width', '3000px'); // remove max-width property
        $('div#searchResults.show').css('width', tableWidth); // apply width
    }
}

$(window).resize(function() { // make main content responsive when filter is visible
    if (filter) {
        setTimeout(function() {
            centerStuffWithFilter();
        }, 150);
    }
});

//$("li.filter-cat").click(function() { // toggle show/hide filter-by submenus
//  $(this).find("span:first").toggleClass("show");
//    $(this).next().toggleClass("show");
//});
