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

    // setTimeout(function() {
    //     KTApp.unblock('#kt-portlet_parent');
    // }, 2000);
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
    //         if(res.status == true) {
    //             toastr.success(res.message);
				// table.ajax.reload(null,false)
    //             clear_form();
    //             $('#modal').modal('hide');
    //         } else {
    //             toastr.warning(res.message);
    //         }
        },
        error:(err)=>{
        	KTApp.unblock('#kt-portlet_parent');
        	console.log(err)
        }
    })
})