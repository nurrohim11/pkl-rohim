$(document).ready(function(){
    $('#level_user').select2({
        placeholder:"Level user",
        width:"100%"
    })

    $('#filter').click(()=>{
        var level_user = $('#level_user').val()
        table.ajax.url(base_url+"user/data_user?level_user="+$('#level_user').val()).load()
    })
    
    $(document).on('click','#reset',function(){
        $('#level_user').val(null).trigger('change')
        table.ajax.url(base_url+"user/data_user").load()
    })
})

var table = $("#tbl-user").DataTable({
	processing : true,
	serverSide : true,
	responsive :true,
	ajax : base_url+'user/data_user',
	columns : [
		{'orderable' : false},
		null,
		null,
		null,
		null,
		{'orderable' : false}
	]
});

$('#level').select2({
	placeholder : "Pilih level",
	width : "100%"
})

var validator = $("#form").validate({
    rules: {
        nama: {
            required: true
        },
        no_hp:{
        	required: true,
        	digits:true
        },
        username :{
        	required:true,
        	noSpace:true
        }
    }
});

const clear_form=()=>{
    $('#id').val('')
	$('#form').trigger('reset');
    validator.resetForm();
}

$('#add_new').click(()=>{
	$('#username').attr('readonly',false);
	$('#teks-password').hide();
	clear_form();
	$('#modal').modal('show');
})

$('#form').submit(function(event){

    if (!validator.valid()) {
        return false;
    }

	event.preventDefault();
    formData = new FormData($(this)[0]);
    $.ajax({
    	url:base_url+"user/proses_user",
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
                $('#modal').modal('toggle');
				$('#tbl-user').DataTable().ajax.reload();
                clear_form();
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

$(document).on('click', '.update', function(){
    clear_form()
	$('#username').attr('readonly',true);
	$('#teks-password').show();

	refid = $(this).data('refid');
	$.ajax({
		url : base_url+"user/id_user",
		type : "post",
		data : {
			'id' : refid
		},
		dataType : "json",
		success : (res)=> {
			if(res.status == true){
				$("#modal").modal('show');
				$("#id").val(res['response'].id);
				$("#nama").val(res['response'].nama);
				$("#username").val(res['response'].username);
				$("#no_hp").val(res['response'].no_hp);
                $('#level').val(res['response'].level).trigger('change');
                $('#id_level').val(res['response'].level);
			}else{
				toastr.warning('Data tidak ditemukan');
			}
		},
		error : ()=> {
			toastr.warning('Terjadi kesalahan saat memuat data');
		}
	});
});

$(document).on('click', '.delete', function(){
	refid = $(this).data('refid');
	swal({
	  	text: "Apakah anda yakin akan menghapus data ?",
	  	icon: "warning",
	  	buttons: true,
	  	dangerMode: true,
	})
	.then((willDelete) => {
	  	if (willDelete) {
	  		$.ajax({
	  			url : base_url+'user/hapus_user',
	  			type : 'post',
	  			data : {
	  				'id' : refid
	  			},
			    beforeSend:()=>{
			    	blockContent()
			    },
			    complete : ()=>{
		        	unblockContent()
			    },
	  			dataType : 'json',
	  			success : function(res) {
	  				if(res.status == true) {
		                table.ajax.reload(null, false);
		                toastr.success(res.message);
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

$(document).on('click', '.reset', function(){
    refid = $(this).data('refid');
    swal({
        text: "Apakah anda yakin akan mereset password ? (password akan menjadi '1234')",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            $.ajax({
                url : base_url+'user/reset_password',
                type : 'post',
                data : {
                    'id' : refid
                },
                beforeSend:()=>{
                    blockContent()
                },
                complete : ()=>{
                    unblockContent()
                },
                dataType : 'json',
                success : function(res) {
                    if(res.status == true) {
                        table.ajax.reload(null, false);
                        toastr.success(res.message);
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

var validator_password = $("#form-password").validate({
    rules: {
        password_lama: {
            required: true
        },
        password_baru:{
            required: true,
        },
        re_password_baru:{
            required: true,
        }
    }
});

$('#form-password').submit(function(event){

    if (!validator_password.valid()) {
        return false;
    }

    event.preventDefault();
    formData = new FormData($(this)[0]);
    $.ajax({
        url:base_url+"user/process_change_password",
        data:formData,
        type:"post",
        async : false,
        cache : false,
        dataType : "json",
        contentType : false,
        processData : false,
        beforeSend:()=>{
            blockContent()
        },
        complete : ()=>{
            unblockContent()
        },
        success:(res)=>{
            if(res.status == true) {
                toastr.success(res.message);
                $('#password_lama').val('')
                $('#password_baru').val('')
                $('#re_password_baru').val('')
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