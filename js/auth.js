$(".qa-password-textbox").on("keyup", function (e) { 
    $(this).parent().find(".qa-reveal").removeClass("hidden");
});
$(".qa-reveal").on("click", function (e) { 
    $(this).addClass("hidden");
    $(this).parent().find(".qa-hide").removeClass("hidden");
    $(this).parent().find(".qa-password-textbox").attr('type', 'text');
});
$(".qa-hide").on("click", function (e) { 
    $(this).addClass("hidden");
    $(this).parent().find(".qa-reveal").removeClass("hidden");
    $(this).parent().find(".qa-password-textbox").attr('type', 'password');
});
/* Register Page Scripts *Start* */
$("#clear-all-checkbox-button").on("click", function (e) {
    if($(this).attr("aria-pressed") == "false")
    {
        $(this).text("Clear");
        $(this).attr("aria-label","Deselect all contact preferences");
        $(this).attr("aria-pressed","true");
        $("#preferences-checkboxlist-container").find('input[type=checkbox]').each(function() {
            this.checked = true; 
        });
    }
    else {
        $(this).text("Select All");
        $(this).attr("aria-label","Select all contact preferences");
        $(this).attr("aria-pressed","false");
        $("#preferences-checkboxlist-container").find('input[type=checkbox]').each(function() {
            this.checked = false; 
        });
    }
});
$(".tickbox-container").on("click", function (e) { 
    $(".tickbox-container").removeClass("selected");
    $(this).addClass("selected");
});
/* Register Page Scripts *Stop* */