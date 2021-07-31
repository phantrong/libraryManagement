const { default: Axios } = require("axios");

// document.addEventListener('DOMContentLoaded', function () {
$(function() {
    $('#list-order .admin__order-button-edit').on('click', function() {
        let Parent = $(this).parent().parent().parent();
        let date = Parent.find("input");
        let saveButton = Parent.find('.admin__order-button-save')
        date.prop('disabled', false)
        $(this).css('display', 'none');
        saveButton.css('display', 'inline-block');
    })

    $('#list-order .admin__order-button-save').on('click', function() {
        let Parent = $(this).parent().parent().parent();
        let date = Parent.find("input");
        let editButton = Parent.find('.admin__order-button-edit')
        date.prop('disabled', true)
        $(this).css('display', 'none');
        editButton.css('display', 'inline-block');
    })
    $('#list-order .background-notBorrow .btn-confirm').on('click', function() {
        let id = $(this).attr('attr-order');
        let type = 'one-to-three';
        let data = {
            id: id,
            type: type
        }
        axios.post('/admin/order/changestatus', data).then(res => {
            if (res.data.success) {
                let parent = $(this).closest('.admin__order-status');
                let background = parent.closest('.background-notBorrow');
                background.addClass('background-borrowed');
                background.removeClass('background-notBorrow');
                parent.html(`<span>Đang mượn</span>`);
            } else {
                alert('Lỗi hệ thống, không thể thực hiện!');
            }
        }).catch(err => {
            alert('Lỗi hệ thống, không thể thực hiện!');
        })
    })

    var idOrderCancel = 0;
    var colOrderCancel = '';
    $('.open-modal-pay').on('click', function() {
        $('#modal-pay').show();
    })
    $('.background-notBorrow .open-modal-cancel').on('click', function() {
        $('#modal-cancel').show();
        idOrderCancel = $(this).attr('attr-id');
        colOrderCancel = $(this).closest('.background-notBorrow');
    });
    $('#modal-pay #btn-modal-pay').on('click', function() {
        $('#modal-pay').css('display', 'none');
    });
    $('#modal-cancel #btn-modal-cancel').on('click', function() {
        $('#modal-cancel').css('display', 'none');
    });
    $('#modal-cancel #submit-cancel').on('click', function() {
        if (idOrderCancel && colOrderCancel) {
            let data = {
                id: idOrderCancel
            }
            axios.post('/user/order/cancel', data).then(res => {
                if (res.data.success) {
                    colOrderCancel.addClass('background-cancel');
                    colOrderCancel.removeClass('background-notBorrow');
                    $('#modal-cancel').css('display', 'none');
                }
            }).catch(err => {
                alert('Lỗi hệ thống, không thể thực hiện!');
            })
        }
    });
})
