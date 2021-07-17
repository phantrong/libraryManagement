// document.addEventListener('DOMContentLoaded', function () {
$(function() {
    $('#list-order .admin__order-button-edit').on('click', function() {
        let Parent = $(this).parent().parent().parent();
        let date =  Parent.find("input");
        let saveButton = Parent.find('.admin__order-button-save')
        date.prop('disabled', false)
        $(this).css('display','none');
        saveButton.css('display', 'inline-block');
    })

    $('#list-order .admin__order-button-save').on('click', function() {
        let Parent = $(this).parent().parent().parent();
        let date =  Parent.find("input");
        let editButton = Parent.find('.admin__order-button-edit')
        date.prop('disabled', true)
        $(this).css('display','none');
        editButton.css('display', 'inline-block');
    })
})
   

// });


