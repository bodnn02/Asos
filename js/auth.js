

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
/* Register Page Scripts *Stop* */