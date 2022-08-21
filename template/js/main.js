$(".header-search__input").on("click", function(e) {
    $(".header-search__overlay").show();
    if($(this).val().length > 1){
        $(this).parent().find(".search-results").addClass("search-results_active");
    }
});
$(".header-search__input").on('input', function() { 
    if($(this).val().length > 1)
    {
        $(this).parent().find(".search-results").addClass("search-results_active");
    }
    else {
        $(this).parent().find(".search-results").removeClass("search-results_active");
    }
});
$(".header-search__overlay").on("click", function(e) {
    $(this).hide();
    $(this).parent().find(".search-results").removeClass("search-results_active");
});
$(".header-widgets__search").parent().on("click", function(e) {
    $(".search-overlay").show();
});
$(".mm-category > button").on("click", function(e) {
    $(".mm-sublist__item[data-id="+$(this).parent().attr('data-id')+"]").parent(".mm-sublist__section").parent("mm-sublist").addClass("active");
    $(".mm-sublist__item[data-id="+$(this).parent().attr('data-id')+"]").parent(".mm-sublist__section").addClass("active");
    $(".mm-sublist__item[data-id="+$(this).parent().attr('data-id')+"]").addClass("active");
});
$(".mm-sublist__back").on("click", function(e) {
    $(".mm-sublist").removeClass("active");
    $(".mm-sublist *").removeClass("active");
});
$(".mm-slider__item").on("click", function(e) {
    $(this).parent().children(".mm-slider__item").removeClass("mm-slider__item_active");
    $(this).addClass("mm-slider__item_active");
    $(this).parent().parent().parent(".mm-submenu__banner_slider").toggleClass("active");
});
$(".burger-menu").on("click", function(e) {
    $(".mm-background").toggleClass("active");
    $(".mm-overlay").toggleClass("active");
    $('html, body').css({
        overflow: 'hidden',
        height: '100%'
    });
});
$(".mm__close").on("click", function(e) {
    $(".mm-background").toggleClass("active");
    $(".mm-overlay").toggleClass("active");
    $('html, body').css({
        overflow: 'auto',
        height: 'auto'
    });
});
$(".preferences-flex__country").parent().on("click", function(e) {
    $(".preferences-overlay").fadeIn();
    $('html, body').css({
        overflow: 'hidden',
        height: '100%'
    });
});
$(".footer-shopping__btn").parent().on("click", function(e) {
    $(".preferences-overlay").fadeIn();
    $('html, body').css({
        overflow: 'hidden',
        height: '100%'
    });
});
$(".preferences-overlay__close").on("click", function(e) {
    $(".preferences-overlay").fadeOut();
    $('html, body').css({
        overflow: 'auto',
        height: 'auto'
    });
});
$(".search-overlay__close").on("click", function(e) {
    $(".search-overlay").hide();
});
$("button[data-id=mm-women-btn]").on("click", function(e) {
    $(".mm-sections").children(".mm-sections__item").removeClass("mm-sections__item_active");
    $(this).parent().addClass("mm-sections__item_active");
    $(".mm-section[data-id=mm-women-section]").show();
    $(".mm-section[data-id=mm-men-section]").hide();
});
$("button[data-id=mm-men-btn]").on("click", function(e) {
    $(".mm-sections").children(".mm-sections__item").removeClass("mm-sections__item_active");
    $(this).parent().addClass("mm-sections__item_active");
    $(".mm-section[data-id=mm-women-section]").hide();
    $(".mm-section[data-id=mm-men-section]").show();
});
$(".header-dropdown__close").on("click", function(e) {
    $(this).parent().parent().parent().addClass("noHover");
});
$(".header-widgets__item > button").hover(function(e) {
    $(this).parent().find(".noHover").removeClass("noHover");
});
$(".header-widgets__item > a").hover(function(e) {
    $(this).parent().find(".noHover").removeClass("noHover");
});
var scrollPos = 0;
$(window).scroll(function(){
   var st = $(this).scrollTop();
   if (st > scrollPos){
    $(".header").removeClass("headroom headroom--pinned headroom--scrolled");
   } else {
     $(".header").addClass("headroom headroom--pinned headroom--scrolled");
     if ($(this).scrollTop() == 0) {
        $(".header").removeClass("headroom headroom--pinned headroom--scrolled");
    }
   }
   scrollPos = st;
});