	<!-- begin:: Content -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

		<div class="kt-portlet kt-portlet--mobile">

		<div class="kt-portlet kt-portlet--mobile">
			<div class="kt-portlet__head kt-portlet__head--lg kt-portlet_btn">
				<div class="row" style="width: 100%; margin-top: auto;margin-bottom: auto;">
					<div class="col-md-12" style="text-align: right; padding-right: 0px">
						<button type="button" id="import" class="btn btn-outline-warning"><i class="fas fa-cloud-upload-alt"></i>Import Pelanggan</button>
						<button type="button" id="add" class="btn btn-outline-success"><i class="fa fa-plus"></i> Tambah</button>
					</div>	
				</div>
			</div>

			<div class="kt-portlet__body">
				<!--begin: Datatable -->
				<table class="table table-striped- table-bordered table-hover table-checkable" id="tbl-pelanggan">
					<thead>
						<tr>
							<th style="width: 8%">No.</th>
							<th>Member</th>
							<th>Kode Pelanggan</th>
							<th>Nama</th>
							<th>No. Hp</th>
							<th>Alamat</th>
							<th>Template</th>
							<th style="width: 5%">#</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
				<!--end: Datatable -->
			</div>
		</div>
	</div>

	<!-- end:: Content -->
</div>


<!--begin::Modal-->
<div class="modal fade modal-custom" id="modal" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form id="form">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Form Pelanggan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<input type="hidden" name="kode_pelanggan" id="kode_pelanggan">
					<?php if($this->session->userdata('level') == 1){ ?>
					<div class="form-group">
						<label for="template">Member <span class="required">*</span></label>
						<select class="form-control" id="member" name="member" style="width: 100%"></select>
					</div>
					<?php } ?>

					<div class="form-group">
						<label for="template">Template <span class="required">*</span></label>
						<select class="form-control" id="template" name="template" style="width: 100%"></select>
					</div>

					<div class="form-group">
						<label for="nama">Nama <span class="required">*</span></label>
						<input type="text" placeholder="Masukkan Nama" name="nama" class="form-control" id="nama">
					</div>
					<div class="form-group">
						<label for="no_hp">No. HP <span class="required">*</span></label>
						<input type="text" name="no_hp" placeholder="ex : 08xxxxxxxxx" class="form-control num-int" id="no_hp">
					</div>
					<div class="form-group">
						<label for="alamat">Alamat <span class="required">*</span></label>
						<textarea class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat" rows="4"></textarea>
					</div>
				</div>
				<div class="modal-footer">
				    <button type="submit" class="btn btn-outline-info" ><i class="fa fa-save"></i> Simpan</button> 
					<button type="button" class="btn btn-outline-danger" data-dismiss="modal" id="close"><i class="fa fa-times"></i> Close</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!--end::Modal-->


<!--begin::Form Import-->
<div class="modal fade modal-custom" id="modal-import" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form id="form-import">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Form Import Pelanggan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<?php if($this->session->userdata('level') == 1){ ?>
					<div class="form-group">
						<label for="member_import">Member <span class="required">*</span></label>
						<select class="form-control" id="member_import" name="member_import" style="width: 100%"></select>
					</div>
					<?php } ?>
					<div class="form-group">
						<label for="template_import">Template <span class="required">*</span></label>
						<select class="form-control" id="template_import" name="template_import" style="width: 100%"></select>
					</div>
					<div class="form-group">
						<label for="file">File <span class="required">*</span></label>
						<input type="file" name="file" class="form-control">
					</div>
				</div>
				<div class="modal-footer">
				    <button type="submit" class="btn btn-outline-info" ><i class="fa fa-save"></i> Import</button> 
					<button type="button" class="btn btn-outline-danger" data-dismiss="modal" id="close"><i class="fa fa-times"></i> Close</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!--end::Form Import-->