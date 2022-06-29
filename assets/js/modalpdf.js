$(document).ready(function () {
    const path = window.location.origin + '/b5-frontend-lapperkara/';
    console.log(path);

    $('#modalPdf').on('show.bs.modal', function (e) {
        let getdata = $(e.relatedTarget).data('id');
        console.log(getdata);
        let tampil = `<embed src="${path}/assets/files/${getdata}" type="application/pdf" width="100%" height="100%">`
        $('#tampil').html(tampil);
    })

});