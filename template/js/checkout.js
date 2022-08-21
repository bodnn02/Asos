$(".expandable-heading-container").on("click", function (e) {
    $(this).toggleClass("open");
    $("#discount-and-vouchers-container").slideToggle();
});
$(".add-discount").on("click", function (e) {
    var tablist = $(this).parent();
    tablist.children(".add-voucher").removeClass("is-active");
    $(this).addClass("is-active");
    tablist.parent().parent().children(".add-voucher").hide();
    tablist.parent().parent().children(".add-discount").show();
});
$(".add-voucher").on("click", function (e) {
    var tablist = $(this).parent();
    tablist.children(".add-discount").removeClass("is-active");
    $(this).addClass("is-active");
    tablist.parent().parent().children(".add-discount").hide();
    tablist.parent().parent().children(".add-voucher").show();
});