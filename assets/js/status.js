$(document).ready(function () {
    const prapath = window.location.origin;
    const path = `../../PA_laper/`

    let laper_status;
    let validasi = "Belum Validasi";
    // console.log(validasi);

    $.ajax({
        type: "POST",
        url: `${path}/get_status/`,
        // data: {
        //     id: id
        // },
        dataType: "json",
        success: function (response) {
            laper_status = response;
            console.log(response);


        }
    });

    if (laper_status = "Belum Validasi") {
        //rubah tampilan modal jadi full
        $('#validate').attr('class', 'text-white bg-gradient-warning text-xs font-weight-normal');
    } else {
        $('#validate').attr('class', 'text-white bg-gradient-danger text-xs font-weight-normal');
    }

    const flashData = $('.flash-data').data('flashdata');
    if (flashData) {
        Swal.fire(

            'Success',
            flashData,
            'success'
        );
    }

    const flashMsg = $('.flash-data2').data('flashdata');
    if (flashMsg) {
        Swal.fire(
            'Error',
            flashMsg,
            'error'
        );
    }
});