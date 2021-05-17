var table = $("#tbl-pelanggan").DataTable({
    processing: true,
    serverSide: true,
    order: [
        [0, 'desc']
    ],
	ajax : base_url+'pelanggan/data_pelanggan',
	columns : [
		{'orderable' : false},
		null,
		null,
		null,
		null,
		null,
		null,
		{'orderable' : false}
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
	pageLength: 10,
	dom: "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>"
});

const clear_form=()=>{
	$('#form').trigger('reset')
	$('#kode_pelanggan').val('');
	$('#member').val(null).trigger('change')
	$('#template').val(null).trigger('change')
}

$("#member").val(null).trigger("change");
ajax_select2(base_url+'master/ajax_member/'+null, '#member', 'Pilih member');


$("#template").val(null).trigger("change");
ajax_select2(base_url+'master/ajax_template', '#template', 'Pilih template');

$('#member').change(function(){
	ajax_select2(base_url+'master/ajax_template/'+$(this).val(), '#template', 'Pilih template');
})

$('#add').click(()=>{
	clear_form();
	$('#kode_pelanggan').val('')
	$('#modal').modal('show');
	validator.resetForm()
})

var validator = $("#form").validate({
    rules: {
        template: {
            required: true
        },
        nama: {
            required: true
        },
        no_hp: {
            required: true
        },
        alamat: {
            required: true
        },
    }
});

$('#form').submit(function(event){

    if (!validator.valid()) {
        return false;
    }
    
	event.preventDefault();
    formData = new FormData($(this)[0]);
    $.ajax({
    	url:base_url+"pelanggan/process_pelanggan",
    	data:formData,
    	type:"post",
        async : false,
        cache : false,
        dataType : "json",
        contentType : false,
        processData : false,
	    beforeSend:()=>{
	    	blockModal()
	    },
	    complete : ()=>{
        	unblockModal()
	    },
        success:(res)=>{
            if(res.status == true) {
                toastr.success(res.message);
				table.ajax.reload(null,false)
                clear_form();
                $('#modal').modal('hide');
            } else {
                toastr.warning(res.message);
            }
        },
        error:(err)=>{
        	unblockModal()
        	console.log(err)
        }
    })
})

$(document).on('click', '.delete', function(){
	refkode_pelanggan = $(this).data('refid');
	swal({
	  	text: "Apakah anda yakin akan menghapus data ?",
	  	icon: "warning",
	  	buttons: true,
	  	dangerMode: true,
	})
	.then((willDelete) => {
		console.log(refkode_pelanggan)
	  	if (willDelete) {
	  		$.ajax({
	  			url : base_url+'pelanggan/hapus_pelanggan',
	  			type : 'post',
	  			data : {
	  				'kode_pelanggan' : refkode_pelanggan
	  			},
			    beforeSend:()=>{
				    blockContent();
			    },
			    complete : ()=>{
					unblockContent();
			    },
	  			dataType : 'json',
	  			success : function(res) {
	  				if(res.status == true) {
		                toastr.success(res.message);
		                table.ajax.reload(null, false);
		            } else {
		                toastr.warning(res.message);
		            }
	  			},
	  			error : function() {
	  				toastr.warning('Terjadi kesalahan saat menghapus data');
	  			}
	  		});
	  	}
	});
});

$(document).on('click', '.update', function(){
	clear_form()
	refid = $(this).data('refid');
	$('.text-password').hide()
	$.ajax({
		url : base_url+"pelanggan/id_pelanggan",
		type : "post",
		data : {
			'kode_pelanggan' : refid
		},
	    beforeSend:()=>{
	    	blockContent();
	    },
	    complete : ()=>{
	    	unblockContent();
	    },
		dataType : "json",
		success : (res)=> {
			if(res['metadata'].status == true){
				var response= res['response']
				$("#modal").modal('show');
				$('#kode_pelanggan').val(response.kode_pelanggan);
				$('#member').empty().append($("<option/>").val(response.uid).text(response.member)).val(response.uid).trigger("change");
				$('#template').empty().append($("<option/>").val(response.kode_template).text(response.template)).val(response.kode_template).trigger("change");
				$('#nama').val(response.nama);
				$('#alamat').val(response.alamat);
				$('#no_hp').val(response.no_hp);
			}else{
				toastr.warning('Data tidak ditemukan');
			}
		},
		error : ()=> {
			toastr.warning('Terjadi kesalahan saat memuat data');
		}
	});
});

const clear_form_import=()=>{
	$('#form-import').trigger('reset')
	$('#member_import').val(null).trigger('change')
	$('#template_import').val(null).trigger('change')
}

$("#member_import").val(null).trigger("change");
ajax_select2(base_url+'master/ajax_member', '#member_import', 'Pilih member');


$("#template_import").val(null).trigger("change");
ajax_select2(base_url+'master/ajax_template', '#template_import', 'Pilih template');

$('#member_import').change(function(){
	ajax_select2(base_url+'master/ajax_template/'+$(this).val(), '#template_import', 'Pilih template');
})

$('#import').click(()=>{
	clear_form_import();
	$('#modal-import').modal('show');
	validatorImport.resetForm()
})

var validatorImport = $("#form-import").validate({
    rules: {
        template_import: {
            required: true
        },
        file: {
            required: true
        }
    }
});

$('#form-import').submit(function(event){

    if (!validator.valid()) {
        return false;
    }
    
	event.preventDefault();
    formData = new FormData($(this)[0]);
    $.ajax({
    	url:base_url+"pelanggan/import_pelanggan",
    	data:formData,
    	type:"post",
        async : false,
        cache : false,
        dataType : "json",
        contentType : false,
        processData : false,
	    beforeSend:()=>{
	    	blockModal()
	    },
	    complete : ()=>{
        	unblockModal()
	    },
        success:(res)=>{
            if(res.status == true) {
                toastr.success(res.message);
				table.ajax.reload(null,false)
                clear_form_import();
                $('#modal-import').modal('hide');
            } else {
                toastr.warning(res.message);
            }
        },
        error:(err)=>{
        	unblockModal()
        	console.log(err)
        }
    })
})