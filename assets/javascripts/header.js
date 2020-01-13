$(document).ready(function () {

    var url = window.location.href.split('/');
    var last_part = url[url.length-1]; // was -2 , now is -1
    last_part = last_part.slice(0, -4)
    $("#"+last_part).removeClass("unselected").addClass("selected");
    last_part = last_part.charAt(0).toUpperCase() + last_part.substr(1); // capitalize first letter, because that looks good
    if (last_part === 'Index') {
        last_part = 'Home'
    }
    $('title').html('Marimba - ' + last_part + '');

    var hamburger_url = BASE_URL+"assets/images/template_images/hamburger.svg";
    var x_url = BASE_URL+"assets/images/template_images/x.svg";
    var uparrow_url = BASE_URL+'assets/images/template_images/chevron-up.svg';
    var downarrow_url = BASE_URL+'assets/images/template_images/chevron-down.svg'

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

    $("#drop-link").on("mouseenter",function(){
        if( $(window).width() < 751 ){
            // on click dropdown of browse, sub menu appears
            // and the down carat changes to up carat icon
            $("#drop-link").on("click", function(){
                $(".browse-sub").toggleClass("submenu-drop");
                if($(".browse-sub").hasClass("submenu-drop")){
                   $(this).children('.drop-carat').children().attr('src',uparrow_url);
                }
                else{
                   $(this).children('.drop-carat').children().attr('src',downarrow_url);
                }
            });
        } else {
            $(this).children('.drop-carat').children().attr('src',uparrow_url);
        }
    }).mouseleave(function() {
        $(this).children('.drop-carat').children().attr('src',downarrow_url);
    });

    // when width of browser more than 768px dropdown appears on hover of browse
    $("#drop-link").on("mouseenter",function(){
        if( $(window).width() > 751 ){
            $(".drop-carat").off();
            $(".browse-sub").css("display", "block");
        }
    });
    $("#drop-link").on("mouseleave",function(){
        if( $(window).width() > 751 ){
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
      console.log(window.scrollY)
        if(window.scrollY > 127){
            $(".navigation-header").addClass("fixedheader");
            $(".MSUwrapper").css("display", "none");
        }else{
            $(".navigation-header").removeClass("fixedheader");
            $(".MSUwrapper").css("display", "block");
        }
        $(".fixedheader").css("top","0px");
    })




});
