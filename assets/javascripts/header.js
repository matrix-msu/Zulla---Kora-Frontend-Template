$(document).ready(function () {

    var url = window.location.href.split('/');
    var last_part = url[url.length-1]; // was -2 , now is -1
    //last_part = last_part.slice(0, -4)
    //$("#"+last_part).removeClass("unselected").addClass("selected");
    last_part = last_part.charAt(0).toUpperCase() + last_part.substr(1); // capitalize first letter, because that looks good
    if (last_part === '') {
        last_part = 'Home'
    }
    var title = formatTitle(last_part);
     $('title').html('Zulla - ' + title + '');

    var hamburger_url = BASE_URL+"assets/images/template_images/hamburger.svg";
    var x_url = BASE_URL+"assets/images/template_images/x.svg";
    var uparrow_url = BASE_URL+'assets/images/template_images/chevron-up.svg';
    var downarrow_url = BASE_URL+'assets/images/template_images/chevron-down.svg'
    
    // format title by removing hyphens and capitalizing words
    function formatTitle(s){
        var formatted_last_part = s.replace(/-/g, " ");
        return formatted_last_part.toLowerCase().replace( /\b./g, function(a){ return a.toUpperCase(); } );
    };

    // on click dropdown mobile menu appears
    $(".dropdown-button, #menu-button").on("click",function(event){
        $(".right-section").toggleClass("dropclass");
    });

    $("#menu-button").on("click",function(){
        if($(".right-section").hasClass("dropclass")){
             $(".hamburger").attr('src',x_url);
         }
         else{
             $(".hamburger").attr('src',hamburger_url);
         }
    })

    // on click of hamburger, it changes to X icon
     $(".dropdown-button").on("click",function(){
         if($(".right-section").hasClass("dropclass")){
             $(".hamburger").attr('src',x_url);
         }
         else{
             $(".hamburger").attr('src',hamburger_url);
         }
     });

    $("#drop-link").on("click",function(){
        if( $(window).width() < 750 ){
            $(".browse-sub").toggleClass("submenu-drop");
        }
    });

    // when width of browser more than 768px dropdown appears on hover of browse
    $("#drop-link").on("mouseenter",function(){
        if( $(window).width() > 750 ){
            $(".drop-carat").off();
            $(".browse-sub").css("display", "block");
        }
    });
    $("#drop-link").on("mouseleave",function(){
        if( $(window).width() > 750 ){
            $(".browse-sub").css("display", "none");
        }
    });

    // close menu on click outside
    $(document).click(function(event){
        if(!$(event.target).parents(".right-section").is(".right-section") && !$(event.target).parents(".dropdown-menu").is(".dropdown-menu")){
            $(".right-section").removeClass("dropclass");
            if($(".right-section").hasClass("dropclass")){
                $(".hamburger").attr('src',x_url);
            }
            else{
                $(".hamburger").attr('src',hamburger_url);
            }
        }

    })

     //fix header after landing section
    $(document).on("scroll",function(e){
        if(window.scrollY > 100){
            $(".navigation-header").addClass("fixedheader");
        }
        else{
            $(".navigation-header").removeClass("fixedheader");
            $(".navigation-header").css("top","unset");
        }      
        if(window.scrollY > 200){
            $(".fixedheader").css("top","0px");
        }
        else{
            $(".fixedheader").css("top","-200px");
        }
    });
    
    
    // Adds the '.selected' class to the according link, based on the page you're on
	$(function(){
	  $('a').each(function() {
	    if ($(this).prop('href') == window.location.href) {
	      $(this).addClass('selected');
	    }
	  });
	});




});

