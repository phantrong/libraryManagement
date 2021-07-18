$(function() {
    $(document).on("input", "input[data-type='currency']", function() {
        this.value = this.value.replace(/\D/g, '');
    });
})