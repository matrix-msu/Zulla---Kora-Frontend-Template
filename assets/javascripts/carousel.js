var images = {
    '1': {
        'image': BASE_TEMPLATE_IMAGE_URL+'1.jpg',
    },
    '2': {
        'image': BASE_TEMPLATE_IMAGE_URL+'2.jpg',
    },
    '3': {
        'image': BASE_TEMPLATE_IMAGE_URL+'3.jpg',
    },
    '4': {
        'image': BASE_TEMPLATE_IMAGE_URL+'4.jpg',
    }
}
var dots = window.document.getElementsByClassName('dot')
var img = 1
var curDot = 0

for (var i=0; i < dots.length; i++) {
    dots[i].addEventListener('click', dotControl(i))
}

function dotControl (i) { // i represents which dot was clicked (0 -> 3)
    return function () {
        console.log('' + i)
        if (i > curDot) {
            curDot = i
            img = i + 1 // images[0] is undefined, images[1] is the first valid value
            setImageLeft ()
        } else {
            curDot = i
            img = i + 1 // images[0] is undefined, images[1] is the first valid value
            setImageRight ()
        }
    }
}

$('.arrow-left').click(function () {
    curDot = curDot - 1
    img = img - 1
    setImageRight ()
});

$('.arrow-right').click(function () {
    curDot = curDot + 1
    img = img + 1
    setImageLeft ()
});

function setImageLeft () {
    if (img < 1) {
        img = 4
    } else if (img > 4) {
        img = 1
    }
    $('<div class="carousel-title new"><div class="title"><h1>' + images[img].title + '</h1></div><p class="description">' + images[img].description + '</p><a class="carousel-link" href="' + images[img].linkLocation + '" target="_blank">' + images[img].link + '</a></div>').appendTo('.image-carousel-fig');
    $('<img class="carousel-display new" src="' + images[img].image + '" alt="' + images[img].description + '">').appendTo('.image-carousel-fig');
    $('.new').css('left', '100%');
    transitionRight ()
}

function setImageRight () {
    if (img < 1) {
        img = 4
    } else if (img > 4) {
        img = 1
    }
    $('<div class="carousel-title new"><div class="title"><h1>' + images[img].title + '</h1></div><p class="description">' + images[img].description + '</p><a class="carousel-link" href="' + images[img].linkLocation + '" target="_blank">' + images[img].link + '</a></div>').appendTo('.image-carousel-fig');
    $('<img class="carousel-display new" src="' + images[img].image + '" alt="' + images[img].description + '">').appendTo('.image-carousel-fig');
    $('.new').css('left', '-150%');
    transitionLeft ()
}

function transitionRight () {
    $('.old').css('left', '-150%');
    setTimeout(function(){
      $('.new').css('left', '0%');
      setTimeout(function(){
        $('.old').remove();
        $('.new').addClass('old');
        $('.old').removeClass('new');
        setDots ()
      }, 400)
    }, 10);
}

function transitionLeft () {
    $('.old').css('left', '100%');
    setTimeout(function(){
      $('.new').css('left', '0%');
      setTimeout(function(){
        $('.old').remove();
        $('.new').addClass('old');
        $('.old').removeClass('new');
        setDots ()
      }, 400)
    }, 10);
}

function setDots () {
    $('.dot').removeClass('active');
    if (curDot < 0) {
        curDot = 3
    } else if (curDot > 3) {
        curDot = 0
    }
    dots[curDot].classList.add('active')
}

function featuredCollection(){
    collection_wrap = '.featured-collections .collectionwrap'

    var card_width = parseInt($(collection_wrap+' .cardwrap li.card').outerWidth()) + parseInt($(collection_wrap+' .cardwrap li.card').css('marginRight')); //card width + margin-right (margin-right always = 20px)
    var cardwrap_width = $(collection_wrap+' .cardwrap').outerWidth();
    $(collection_wrap+' .cardwrap li.card').last().css('margin-right', card_width+'px');

    var num_cards = $(collection_wrap+' .cardwrap li.card').length;
    var cardid = 1

    $('#collections-left').click(function(){
        if (cardid > 1) {
          cardid = cardid - 1;
          $('#cardwrap-collections').animate({
              scrollLeft: card_width * (cardid-1)
          }, 500);
        }
    });
    $('#collections-right').click(function(){
        if (cardid < num_cards) {
          cardid = cardid + 1;
          $('#cardwrap-collections').animate({
              scrollLeft: card_width * (cardid-1)
          }, 500);
        }
    });
}

function featuredRecord(){
    record_wrap = '.featured-records .collectionwrap'

    var card_width = parseInt($(record_wrap+' .cardwrap li.card').outerWidth()) + parseInt($(record_wrap+' .cardwrap li.card').css('marginRight')); //card width + margin-right (margin-right always = 20px)
    var cardwrap_width = $(record_wrap+' .cardwrap').outerWidth();
    $(record_wrap+' .cardwrap li.card').last().css('margin-right', card_width+'px');

    var num_cards = $(record_wrap+' .cardwrap ul#first li.card').length;
    var cardid = 1

    $('#records-left').click(function(){
        if (cardid > 1) {
          cardid = cardid - 1;
          $('#cardwrap-records').animate({
              scrollLeft: card_width * (cardid-1)
          }, 500);
        }
    });
    $('#records-right').click(function(){
        if (cardid < num_cards) {
          cardid = cardid + 1;
          $('#cardwrap-records').animate({
              scrollLeft: card_width * (cardid-1)
          }, 500);
        }
    });
}

$(document).ready(function(){


    featuredCollection();
    featuredRecord();


});
