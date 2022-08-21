wheelzoom(document.querySelectorAll('.image-container > img'), {maxZoom: 3});
$("#social-share-button").on("click", function(e) {
    $(".share-bar-wrap").toggle();
});
$(".show-more").on("click", function(e) {
    $(this).children(".fade").children("a:first-child").toggleClass("show");
    $(this).children(".fade").children("a:last-child").toggleClass("show");
    $(".overflow-container").toggleClass("open");
});
$(".carouselPagination__btn").on("click", function(e) {
    var parent = $(this).parent().parent().parent().parent();
    var index = $(this).parent("li").index();
    $(this).parent().parent().find(".carouselPagination__btn").removeClass("carouselPagination__btn_active");
    $(this).toggleClass("carouselPagination__btn_active");
    parent.find(".section-overflow > .section-ul").css({"visibility":"hidden","margin-left":"-100%"});
    parent.find(".section-overflow > .section-ul").eq(index).css({"visibility":"visible","margin-left":"0"});
    parent.find(".section-overflow > .section-ul").eq(index).nextAll().css({"visibility":"hidden","margin-left":"100%"});
});
$(".slider-btn_left").on("click", function(e) {
    var tab_active = $(this).parent().parent().parent().parent().find(".carouselPagination__btn_active");
    tab_active.parent().parent().find(".carouselPagination__btn").eq(tab_active.parent().index()-1).trigger('click');
    $(this).parent().parent().find(".slider-btn_right").removeAttr("disabled");
    if(tab_active.parent().index()==1) {
        $(this).attr("disabled","disabled");
    }
});
$(".slider-btn_right").on("click", function(e) {
    var tab_active = $(this).parent().parent().parent().parent().find(".carouselPagination__btn_active");
    tab_active.parent().parent().find(".carouselPagination__btn").eq(tab_active.parent().index()+1).trigger('click');
    $(this).parent().parent().find(".slider-btn_left").removeAttr("disabled");
    if(tab_active.parent().index()==tab_active.parent().length) {
        $(this).attr("disabled","disabled");
    }
});
$(".window").children(".arrow-button-left").on("click", function(e) {
    var gallery = $(this).parent().find(".gallery-images");
    var active_index = gallery.find(".image-container:not(.hide-image)").index();
    gallery.find(".image-container").eq(active_index).addClass("hide-image");
    if(Number(active_index)<=0) {
        gallery.find(".image-container").eq($(".gallery-images > .image-container").length-1).removeClass("hide-image");
        gallery.css("margin-left",Number($(".gallery-images > .image-container").length-1)*-1*100+"%");
    }
    else {
        gallery.find(".image-container").eq(Number(active_index)-1).removeClass("hide-image");
        gallery.css("margin-left",(Number(active_index)-1)*100*-1+"%");
    }
});
$(".window").children(".arrow-button-right").on("click", function(e) {
    var gallery = $(this).parent().find(".gallery-images");
    var active_index = gallery.find(".image-container:not(.hide-image)").index();
    gallery.find(".image-container").eq(active_index).addClass("hide-image");
    if($(".gallery-images > .image-container").length==Number(active_index)+Number(1)) {
        gallery.find(".image-container").eq(0).removeClass("hide-image");
        gallery.css("margin-left","0%");
    }
    else {
        gallery.find(".image-container").eq(Number(active_index)+Number(1)).removeClass("hide-image");
        gallery.css("margin-left",((Number(active_index)+1)*100)*-1+"%");
    }
});

$(".image-thumbnail").on("click", function(e) {
    var gallery = $(this).parent().parent().parent().find(".gallery-images");
    var index = $(this).index();
    gallery.find(".image-container").addClass("hide-image");
    gallery.find(".image-container").eq(index).removeClass("hide-image");
    gallery.css("margin-left",((Number(index))*100)*-1+"%");
});

$(".backToTop").on("click", function(e) { 
    $('html, body').animate({ scrollTop: 0 }, 500);
		return false;
});