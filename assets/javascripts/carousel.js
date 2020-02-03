var images = {
    '1': {
        'image': BASE_TEMPLATE_IMAGE_URL+'Images/Home/maxresdefault.jpg',
        'title': 'Title',
        'description': 'Slide Description. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        'link': 'Link to Someplace',
        'linkLocation': '#'
    },
    '2': {
        'image': BASE_TEMPLATE_IMAGE_URL+'Images/Home/nature1.jpg',
        'title': 'Image 2',
        'description': 'This is the second of four images that were uploaded to test this page',
        'link': 'This is a new link!',
        'linkLocation': 'https://i.imgur.com/g3D5jNz.jpg'
    },
    '3': {
        'image': BASE_TEMPLATE_IMAGE_URL+'Images/Home/yellowtrees.jpg',
        'title': 'This is the third image',
        'description': 'This is a different (shorter) description!',
        'link': 'Another new link!',
        'linkLocation': 'https://i.imgur.com/0XHcPko.jpg'
    },
    '4': {
        'image': BASE_TEMPLATE_IMAGE_URL+'Images/Home/purplefields.jpg',
        'title': 'Last Image',
        'description': 'This is the last of the images uploaded for this demonstration!',
        'link': 'Another newer link!!!',
        'linkLocation': 'https://i.imgur.com/Cxagv.jpg'
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

var currpos_img_records = 0
var currpos_img_collections = 0

$('#records-left').click(function () {
    currpos_img_records = currpos_img_records + 25.9;
    $('#cardwrap-records').animate( {left: currpos_img_records + '%'});
});

$('#records-right').click(function () {
    currpos_img_records = currpos_img_records - 25.9;
    $('#cardwrap-records').animate( {left: currpos_img_records + '%'});
});

$('#collections-left').click(function () {
    currpos_img_collections = currpos_img_collections + 50.7;
    $('#cardwrap-collections').animate( {left: currpos_img_collections + '%'});
});

$('#collections-right').click(function () {
    currpos_img_collections = currpos_img_collections - 50.7;
    $('#cardwrap-collections').animate( {left: currpos_img_collections + '%'});
});
