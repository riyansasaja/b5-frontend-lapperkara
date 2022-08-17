$(document).ready(function () {
    const path = window.location.origin + '/b5-frontend-lapperkara/';
    console.log(path);

    $('#modalPdf').on('show.bs.modal', function (e) {
        let getdata = $(e.relatedTarget).data('id');
        console.log(getdata);
        let tampil = `<embed src="${path}/files_laporan/${getdata}" type="application/pdf" width="100%" height="100%">`
        $('#tampil').html(tampil);
    })

    $('#viewdocumentModal').on('show.bs.modal', function (e) {
        let getdata = $(e.relatedTarget).data('id');
        console.log(getdata);
        let lap_pdf = `<embed src="${path}/files_laporan/${getdata}" type="application/pdf" width="100%" height="100%">`
        $('#lap_pdf').html(lap_pdf);
    })

    $('#triwulanPdf').on('show.bs.modal', function (e) {
        let getdata = $(e.relatedTarget).data('id');
        console.log(getdata);
        let triwulan_pdf = `<embed src="${path}/laporan_triwulan/${getdata}" type="application/pdf" width="100%" height="100%">`
        $('#triwulan_pdf').html(triwulan_pdf);
    })

});