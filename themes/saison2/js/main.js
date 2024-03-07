jQuery(document).ready(function ($) {
    console.log("toto");
    setTimeout(() => {
        $("h1").css({
            backgroundColor: "#89E4F5",
            color: "#fff",
            borderRadius: 10,
        });
    }, 2500);
});
