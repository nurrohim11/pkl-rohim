function preview() {
	let frame = document.getElementById('preview');
	frame.src=URL.createObjectURL(event.target.files[0]);
}

$("#member").val(null).trigger("change");
ajax_select2(base_url+'master/ajax_member', '#member', 'Pilih member');

$("#pelanggan").val('Pilih pelanggan').trigger("change");
ajax_select2(base_url+'master/ajax_pelanggan/'+null, '#pelanggan', 'Pilih pelanggan');

$("#template").val(null).trigger("change");
ajax_select2(base_url+'master/ajax_template', '#template', 'Pilih template');

$('#member').change(function(){
	ajax_select2(base_url+'master/ajax_template/'+$(this).val(), '#template', 'Pilih template');
	ajax_select2(base_url+'master/ajax_pelanggan/'+$(this).val(), '#pelanggan', 'Pilih pelanggan');
})

$('input[type=radio][name=metode_pengiriman]').change(function(){
	var val = $(this).val();
	if(val == 'tmp'){
		$('#divtmp').css('display','block')
		$('#divplg').css('display','none')
	}
	else{
		$('#divplg').css('display','block')
		$('#divtmp').css('display','none')
	}
})

$('#form').submit(function(event){    
	KTApp.block('#kt-portlet_parent', {
        overlayColor: '#000000',
        type: 'v2',
        state: 'success',
        message: 'Sedang mengirim...'
    });

	event.preventDefault();
    formData = new FormData($(this)[0]);
    $.ajax({
    	url:base_url+"kirim/send_wa",
    	data:formData,
    	type:"post",
        async : false,
        cache : false,
        dataType : "json",
        contentType : false,
        processData : false,
        success:(res)=>{
        	KTApp.unblock('#kt-portlet_parent');
            if(res.status == true) {
                toastr.success(res.message);
                $('#form').trigger('reset')
                $('#template').val('').trigger('change')
                $('#pelanggan').val('').trigger('change')
                $('#member').val('').trigger('change')
            } else {
                toastr.warning(res.message);
            }
        },
        error:(err)=>{
        	KTApp.unblock('#kt-portlet_parent');
        	console.log(err)
        }
    })
})

// riwayat
var table = $("#tbl-riwayat").DataTable({
    processing: true,
    serverSide: true,
    order: [
        [0, 'desc']
    ],
    ajax : base_url+'kirim/data_riwayat_pesan',
    columns : [
        {'orderable' : false},
        null,
        null,
        null,
        null,
        {'orderable' : false},
    ],
    language: {
        aria: {
            sortAscending: ": activate to sort column ascending",
            sortDescending: ": activate to sort column descending"
        },
        emptyTable: "No data available in table",
        info: "Showing _START_ to _END_ of _TOTAL_ entries",
        infoEmpty: "No entries found",
        infoFiltered: "(filtered1 from _MAX_ total entries)",
        lengthMenu: "_MENU_ entries",
        search: "Search:",
        zeroRecords: "No matching records found",
        processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw" style="font-size:36px;"></i><span class="sr-only"></span>'
    },
    lengthMenu: [
        [10, 15, 20, -1],
        [10, 15, 20, "All"]
    ],
    buttons: [{
        extend: "print",
        className: "btn dark btn-outline"
    }, {
        extend: "copy",
        className: "btn red btn-outline"
    }, {
        extend: "pdf",
        className: "btn green btn-outline"
    }, {
        extend: "excel",
        className: "btn yellow btn-outline "
    }, {
        extend: "csv",
        className: "btn purple btn-outline "
    }, {
        extend: "colvis",
        className: "btn dark btn-outline",
        text: "Columns"
    }],
    pageLength: 10,
    dom: "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>"
});

$('#kt_daterangepicker_4').daterangepicker({
    buttonClasses: ' btn',
    applyClass: 'btn-primary',
    cancelClass: 'btn-secondary',
    timePicker: true,
    timePickerIncrement: 30,
    locale: {
        format: 'DD/MM/YYYY'
    }
}, function(start, end, label) {
    $('#kt_daterangepicker_4 .form-control').val( start.format('DD/MM/YYYY') + '-' + end.format('DD/MM/YYYY'));
});

$('#filter').click(()=>{
    tgl = $('#tgl').val()
    total_hutang(user,supplier,tgl)
    table.ajax.url(base_url+"ajax/hutang/data_hutang?user="+$('#user').val()+"&supplier="+$('#supplier').val()+"&tgl="+$('#tgl').val()).load()
})