// $(document).ready(function () {
// 	// const prapath = window.location.origin;
// 	// const path = `../../PA_laper/`;

// 	const path = window.location.origin + '/b5-frontend-lapperkara/';
// 	console.log(path);
	
// 	$('#modalPdf').on('show.bs.modal', function (e) {
//         let getdata = $(e.relatedTarget).data('id');
//         console.log(getdata);
//         let tampil = `<embed src="${path}/assets/files/${getdata}" type="application/pdf" width="100%" height="100%">`
//         $('#tampil').html(tampil);
//     })

	// let url = window.location.href;

	// let status;

	// $.ajax({
	// 	type: "GET",
	// 	url: `${path}/PA_laper/get_status`,
	// 	dataType: "json",
	// 	success: function (e) {
	// 		console.log(e);
	// 	}
	// }).responseText;

	// if (status != value) {
	// 	//rubah tampilan modal jadi full
	// 	$('#validate').attr('class', 'text-white bg-gradient-danger text-xs font-weight-normal');
	// }


	// let laporan_pa = $('laporan_pa').DataTable({
	// 	"ajax": `${path}/get_data/`,
	// 	"columns": [
	// 		{
	// 			"data": null, "sortable": false,
	// 			render: function (data, type, row, meta) {
	// 				return meta.row + meta.settings._iDisplayStart + 1;
	// 			}
	// 		},
	// 		{ "data": "periode" },
	// 		{ "data": "berkas_laporan" },
	// 		{ "data": "tgl_upload" },
	// 		{ "data": "tgl_terakhir_rev" },
	// 		{ "data": "status" },
	// 		{
	// 			"data": null,
	// 			"defaultContent": `<a href="javascript:;" id="view_doc" class="text-secondary font-weight-normal text-xs item_lihat"><i class="fa fa-eye title="Lihat Berkas"></i>`
	// 		}
	// 	]
	// })
// });



