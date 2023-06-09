// Add Note
$(document).on('submit', '#dataForm', function (e) {
    e.preventDefault();

    $.ajax({
        method: "POST",
        url: "./php/add.php",
        data: $(this).serialize(),
        success: function (data) {
            $('#dataForm').find('input:text').val('');
            $('#dataForm').find('textarea').val('');
            $('input:submit').blur();
            $('.warning-box').css('display', 'flex');
            $('.warning-box').css('align-items', 'center');
            $('.warning-box').fadeOut(3000);
            $.ajax({
                url: './php/get.php',
                success: function (data) {
                    $("#dataList").html(data);
                }
            });
        }
    });
});

// Get Table
$(document).ready(function () {
    $.ajax({
        url: './php/get.php',
        success: function (data) {
            $("#dataList").html(data);
        }
    });
});

// Clear Table
$(document).on('click', '#clearData', function () {
    $.ajax({
        url: './php/clear.php',
        success: function (data) {
            $("#dataList").html(data);
            $('#clearData').blur();
        }
    })
})

// Remove Row
$(document).on('click', '#removeRow', function (e) {
    let id = $(this).data('id');

    $.ajax({
        type: "POST",
        url: './php/remove.php',
        data: {
            dataid: id
        },
        success: function () {
            $.ajax({
                url: './php/get.php',
                success: function (data) {
                    $("#dataList").html(data);
                }
            });
        }
    })
})

// Edit Row
$(document).on('click', '#editRow', function (e) {
    let id = $(this).data('id');

    $.ajax({
        type: "POST",
        url: './php/edit.php',
        data: {
            dataid: id
        },
        success: function (data) {
            let arr = data.split("|-|*|.|_|");
            $("#title-input").val(arr[0]);
            $("#desc-input").val(arr[1]);
            $("#dataForm").attr("action", "update.php");
            $("#dataForm").attr("id", "editForm");
            $("#title-input").focus();
            $("input:hidden").val(id);
            $("#add-button").val("Düzenle");
            $("#add-button").removeClass("btn-success");
            $("#add-button").addClass("btn-danger");
        }
    })
})

// Update Row
$(document).on('submit', '#editForm', function (e) {
    e.preventDefault();
    $.ajax({
        method: "POST",
        url: "./php/update.php",
        data: $(this).serialize(),
        success: function (data) {
            $('.warning-box').html('Not güncellendi');
            $('.warning-box').css('display', 'flex');
            $('.warning-box').css('align-items', 'center');
            $('.warning-box').fadeOut(3000);
            $('#editForm').find('input:text').val('');
            $('#editForm').find('textarea').val('');
            $("#editForm").attr("action", "add.php");
            $("#editForm").attr("id", "dataForm");
            $("#add-button").removeClass("btn-danger");
            $("#add-button").addClass("btn-success");
            $("#add-button").val("Ekle");
            $("#add-button").blur();
            $('.warning-box').html('Yeni Not Eklendi');

            $.ajax({
                url: './php/get.php',
                success: function (data) {
                    $("#dataList").html(data);
                }
            });
        }
    });
});