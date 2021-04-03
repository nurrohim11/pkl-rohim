var table = $("#tbl-template").DataTable({
	processing : true,
	serverSide : true,
	responsive :true,
	destroy : true,
	ajax : base_url+'master/data_template',
	columns : [
		{'orderable' : false},
		null,
		null,
		null,
		{'orderable' : false},
	],
	lengthMenu: [
        [10, 15, 20, -1],
        [10, 15, 20, "All"]
    ],
    pageLength: 10,
});

$('#add').click(()=>{
	$('#modal').modal('show')
	clear_form()
})

const clear_form=()=>{
	$('#form').trigger('reset')
	$('#kode_template').val('')
	validator.resetForm()
}

var validator = $("#form").validate({
    rules: {
        template: {
            required: true
        }
    }
});

$("#member").val(null).trigger("change");
ajax_select2(base_url+'master/ajax_member', '#member', 'Pilih member');

$('#form').submit(function(event){

    if (!validator.valid()) {
        return false;
    }

	event.preventDefault();
    formData = new FormData($(this)[0]);
    $.ajax({
    	url:base_url+"master/process_template",
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
                toastr.error(res.message);
            }
        },
        error:(err)=>{
        	unblockModal()
        	console.log(err)
        }
    })
})

$(document).on('click', '.delete', function(){
	refkode_template = $(this).data('refid');
	swal({
	  	text: "Apakah anda yakin akan menghapus data ?",
	  	icon: "warning",
	  	buttons: true,
	  	dangerMode: true,
	})
	.then((willDelete) => {
	  	if (willDelete) {
	  		$.ajax({
	  			url : base_url+'master/delete_template',
	  			type : 'post',
	  			data : {
	  				'kode_template' : refkode_template
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
		                toastr.error(res.message);
		            }
	  			},
	  			error : function() {
	  				toastr.error('Terjadi kesalahan saat menghapus data');
	  			}
	  		});
	  	}
	});
});

$(document).on('click', '.update', function(){
	clear_form()
	refkode_template = $(this).data('refid');
	$.ajax({
		url : base_url+"master/id_template",
		type : "post",
		data : {
			'kode_template' : refkode_template
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
				$('#member').empty().append($("<option/>").val(response.uid).text(response.nama)).val(response.uid).trigger("change");
				$('#kode_template').val(response.kode_template);
				$('#template').val(response.template);
			}else{
				toastr.error('Data tidak ditemukan');
			}
		},
		error : ()=> {
			toastr.error('Terjadi kesalahan saat memuat data');
		}
	});
});