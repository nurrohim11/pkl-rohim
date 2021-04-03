const axiosDefault = (method, url, data) => {
	return {
		method : method,
		url : base_url+url,
		data : data,
		responseType : 'json',
		headers : {'X-Requested-With': 'XMLHttpRequest'}
	}
};

const blockContent = () => {
    KTApp.block('.kt-content', {
        overlayColor: '#000000',
        type: 'v2',
        state: 'success',
        size: 'lg'
    });
}

const unblockContent = () => {
	KTApp.unblock('.kt-content');
}

const blockModal = (el) => {
	console.log('el '+el)
	var element = '';
	if(el === undefined){
		element = '#modal';
	}
	else{
		element = el;
	}
    KTApp.block(element+' .modal-content', {
        overlayColor: '#000000',
        type: 'v2',
        state: 'success',
        size: 'lg'
    });
}

const unblockModal = (el) => {
	console.log('el '+el)
	var element = '';
	if(el === undefined){
		element = '#modal';
	}
	else{
		element = el;
	}
	KTApp.unblock(element+' .modal-content');
}

const blockPage = () => {
    KTApp.blockPage({
        overlayColor: '#000000',
        type: 'v2',
        state: 'success',
        size: 'lg'
    });
}

const unblockPage = () => {
	KTApp.unblockPage();
}

const resetForm = (form) => {
	document.getElementById(form).reset();
}

const catchMessage = (params, error) => {
	var message;
	var status_code = error.response.status;
	if (status_code == 401) {
		toastr.error('Unauthorized');

		location.reload();
	} else if (status_code == 404) {
		toastr.error('Not Found!');
	} else {
		if (params == 'save') {
			message = 'Terjadi kesalahan saat menyimpan data';
		} else if (params == 'get') {
			message = 'Terjadi kesalahan saat memuat data';
		} else {
			message = 'Terjadi kesalahan saat menghapus data';
		}

		toastr.error(message);
	}
}

const datePicker = (el) => {
	$(el).datepicker({
        todayHighlight: true,
        orientation: "bottom left",
        format: 'dd/mm/yyyy',
        autoclose : true,
        templates: {
            leftArrow: '<i class="la la-angle-left"></i>',
            rightArrow: '<i class="la la-angle-right"></i>'
        }
    });
}

const tglConvert = (tgl) => {
	tgl = tgl.split('-');
	tgl = [tgl[2], tgl[1], tgl[0]].join('/');

	return tgl;
}

const staticLocation = () => {
	return {
        lat: '-6.966667',
        lng: '110.416664'
    };
}

const currentLocation = () => {
	// Try HTML5 geolocation.
    if (navigator.geolocation) {
      	navigator.geolocation.getCurrentPosition(function(position) {
        var pos = {
          	lat: position.coords.latitude,
          	lng: position.coords.longitude
        };

      	}, function() {
        	var pos = staticLocation();
      	});
    } else {
      	// Browser doesn't support Geolocation
      	var pos = staticLocation();
    }

    return pos;
}

const serverSideTable = (url) => {
	return {
		processing : true,
		serverSide : true,
		responsive :true,
		ajax : base_url+url,
		language : {
	        processing: '<i class="fa fa-refresh fa-spin" style="font-size:32px;"></i><span class="sr-only"></span>',
	        aria: {
	            sortAscending: ": activate to sort column ascending",
	            sortDescending: ": activate to sort column descending"
	        },
	        emptyTable: "Tidak ada data ditemukan",
	        info: "Showing _START_ to _END_ of _TOTAL_ entries",
	        infoEmpty: "No entries found",
	        infoFiltered: "(filtered1 from _MAX_ total entries)",
	        lengthMenu: "_MENU_ entries",
	        search: "Search:",
	        zeroRecords: "Tidak ada data ditemukan"
	    }
	};
}

const dropdownSelect = (el, url, label, minInput) => {
	$(el).select2({
		minimumInputLength: minInput,
		placeholder: label,
		allowClear: true,
		ajax: {
			url: base_url+url,
			dataType: 'json',
			delay: 250,
			data: function(params){
				return {
					q: params.term
				}
			},
			processResults: function(data) {
				var results = [];
				$.each(data, function(i, val){
					results.push({
						id: val.id,
						text: val.text
					});
				});

				return {
					results : results
				}
			}
		}
	});
}

// ajax_select2(base_url+"report/ajax_kota","#filter_kota","Pilih kota");
const ajax_select2 = (url, element, placeholder)=> {
	$(element).select2({
		placeholder: placeholder,
		allowClear: true,
		ajax: {
			dataType: "json",
			delay: 250,
			url: function (params) {
				console.log(params.term);
				return url + "/" + params.term;
			},
			processResults: function(data) {
				var results = [];
				$.each(data, function(i, val) {
					results.push({
						id: val.id,
						text: val.text
					});
				});
				return {
					results: results
				};
			}
		}
	});
};

const dateRangeConfig = () => {
	return {
        buttonClasses: 'm-btn btn',
        applyClass: 'btn-primary',
        cancelClass: 'btn-secondary',
        startDate: start,
        endDate: end,
        locale: {
            format: 'DD/MM/YYYY'
        }
    }
}

$(".dropdown-select2").select2({
	placeholder : "Pilih Item"
});

const sessionSetItem = (name, data) => {
	sessionStorage.setItem(name, JSON.stringify(data));
}

const sessionGetItem = (name) => {
	let data = sessionStorage.getItem(name);
	return JSON.parse(data);
}

const disableAlertDatatable = () => {
	$.fn.dataTable.ext.errMode = 'throw';
}

function makeToken(length) {
   var result           = '';
   var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < length; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   return result;
}

jQuery.validator.addMethod("noSpace", function(value, element) { 
	return value.indexOf(" ") < 0 && value != ""; 
}, "No space please and don't leave it empty");

function formatRupiah(angka){
   var reverse = angka.toString().split('').reverse().join(''),
   ribuan = reverse.match(/\d{1,3}/g);
   ribuan = ribuan.join('.').split('').reverse().join('');
   return ribuan;
}

$(".num-float").on("keypress keyup blur",function (event) {
	$(this).val($(this).val().replace(/[^0-9\.]/g,''));
	if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
	    event.preventDefault();
	}
});

$(".num-int").on("keypress keyup blur",function (event) {    
	$(this).val($(this).val().replace(/[^\d].+/, ""));
	if ((event.which < 48 || event.which > 57)) {
		event.preventDefault();
	}
});

$('.uang' ).mask('000.000.000.000', {reverse: true});	

const isInt=(idx)=>{
	var input = $('.num-int'+idx).val();
	if(input != null  || input != ''){
		$('.num-int'+idx).val($('.num-int'+idx).val().replace(/[^\d].+/, ""));
		if ((event.which < 48 || event.which > 57)) {
			event.preventDefault();
		}
	}
}	

const isFloat=(idx)=>{
	$('.num-float'+idx).val($('.num-float'+idx).val().replace(/[^0-9\.]/g,''));
	if ((event.which != 46 ) && (event.which < 48 || event.which > 57)) {
	    event.preventDefault();
	}
}

const isMaskRupiah=()=>{
	$(".harga").mask('000.000.000.000', {reverse: true});
}

$("#username").on({
	keydown: function(e) {
		if (e.which === 32)
			return false;
	},
	change: function() {
		this.value = this.value.replace(/\s/g, "");
	}
});

const back=()=> {
	window.history.back();
}

const readImageUrl = (input,el) => {
	if (input.files && input.files[0]) {
		const reader = new FileReader()
		reader.onload = (e) => {
			$('#'+el).removeAttr('src')
			$('#'+el).attr('src', e.target.result)
		}
		reader.readAsDataURL(input.files[0])
	}
}