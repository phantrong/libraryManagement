$(document).ready(function() {
    if ($('input[name="success"]').val()) {
        $("#overlay").css({ "display": "block" });
        $("#popup").css({ "display": "block" });
    }
    $('.clearfix .submitbtn').on('click', function() {
        $("#overlay").css({ "display": "none" });
        $("#popup").css({ "display": "none" });
    })
})