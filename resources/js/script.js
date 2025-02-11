$(document).ready(function() {
    $(".tab").click(function() {
        $(".tab").removeClass("active");
        $(this).addClass("active");
    });

    $(".cta-button").click(function() {
        alert("Call To Action Clicked!");
    });
});
