console.log("hi")


var images2 = {
    '1': {
        'image': 'assets/images/template_images/Images/Home/maxresdefault.jpg',
        'title': 'Title',
        'description': 'Slide Description. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        'link': 'Learn More',
        'linkLocation': '#'
    },
    '2': {
        'image': 'assets/images/template_images/Images/Home/nature1.jpg',
        'title': 'Image 2',
        'description': 'This is the second of four images that were uploaded to test this page',
        'link': 'This is a new link!',
        'linkLocation': 'https://i.imgur.com/g3D5jNz.jpg'
    },
    '3': {
        'image': 'assets/images/template_images/Images/Home/yellowtrees.jpg',
        'title': 'This is the third image',
        'description': 'This is a different (shorter) description!',
        'link': 'Another new link!',
        'linkLocation': 'https://i.imgur.com/0XHcPko.jpg'
    },
    '4': {
        'image': 'assets/images/template_images/Images/Home/purplefields.jpg',
        'title': 'Last Image',
        'description': 'This is the last of the images uploaded for this demonstration!',
        'link': 'Another newer link!!!',
        'linkLocation': 'https://i.imgur.com/Cxagv.jpg'
    }
}
var dots2 = window.document.getElementsByClassName('dot2')
var img2 = 1
var curDot2 = 0

for (var i=0; i < dots2.length; i++) {
    dots2[i].addEventListener('click', dotControl2(i))
}

function dotControl2 (i) { // i represents which dot was clicked (0 -> 3)
    return function () {
        console.log('' + i)
        if (i > curDot2) {
            curDot2 = i
            img2 = i + 1 // images[0] is undefined, images[1] is the first valid value
            setImageLeft2 ()
        } else {
            curDot2 = i
            img2 = i + 1 // images[0] is undefined, images[1] is the first valid value
            setImageRight2 ()
        }
    }
}

$('.arrow-left2').click(function () {
    curDot2 = curDot2 - 1
    img2 = img2 - 1
    setImageRight2 ()
});
console.log("josh")
console.log($('.arrow-right2'))
$('.arrow-right2').click(function () {
  console.log("arrow right click")
    curDot2 = curDot2 + 1
    img2 = img2 + 1
    setImageLeft2 ()
});

function setImageLeft2 () {
    if (img2 < 1) {
        img2 = 4
    } else if (img > 4) {
        img2 = 1
    }
    $('<div class="carousel-title new2"><div class="title"><h1>' + images2[img2].title + '</h1></div><p class="description">' + images2[img2].description + '</p><a class="carousel-link" href="' + images2[img2].linkLocation + '" target="_blank">' + images2[img2].link + '</a></div>')
      .appendTo('#slider2');
    $('<img class="carousel-display new2" src="' + images2[img2].image + '" alt="' + images2[img2].description + '">')
      .appendTo('#slider2');
    $('.new2').css('left', '100%');
    transitionRight2 ()
}

function setImageRight2 () {
    if (img < 1) {
        img = 4
    } else if (img > 4) {
        img = 1
    }
    $('<div class="carousel-title new2"><div class="title"><h1>' + images2[img2].title + '</h1></div><p class="description">' + images2[img2].description + '</p><a class="carousel-link" href="' + images2[img2].linkLocation + '" target="_blank">' + images2[img2].link + '</a></div>').appendTo('#slider2');
    $('<img class="carousel-display new2" src="' + images2[img2].image + '" alt="' + images2[img2].description + '">').appendTo('#slider2');
    $('.new2').css('left', '-150%');
    transitionLeft2 ()
}

function transitionRight2 () {
    $('.old2').css('left', '-150%');
    setTimeout(function(){
      $('.new2').css('left', '0%');
      setTimeout(function(){
        $('.old2').remove();
        $('.new2').addClass('old2');
        $('.old2').removeClass('new2');
        setDots2 ()
      }, 400)
    }, 10);
}

function transitionLeft2 () {
    $('.old2').css('left', '100%');
    setTimeout(function(){
      $('.new2').css('left', '0%');
      setTimeout(function(){
        $('.old2').remove();
        $('.new2').addClass('old2');
        $('.old2').removeClass('new2');
        setDots2 ()
      }, 400)
    }, 10);
}

function setDots2 () {
    $('.dot2').removeClass('active2');
    if (curDot2 < 0) {
        curDot2 = 3
    } else if (curDot2 > 3) {
        curDot2 = 0
    }
    dots2[curDot2].classList.add('active2')
}


// http://whatamericaate.org/js/newRecipes.js
