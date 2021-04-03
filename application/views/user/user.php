 	<!-- begin:: Content -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

		<div class="kt-portlet kt-portlet--mobile">
			<div class="kt-portlet__head kt-portlet__head--lg kt-portlet_btn">
				<div class="row" style="width: 100%; margin-top: auto;margin-bottom: auto;">
					<div class="col-md-3">
						<select class="form-control" id="level_user" style="width: 100%">
							<option></option>
							<?php foreach($level as $row) { ?>
								<option value="<?php echo $row->id ?>"><?php echo $row->level ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-3 col-sm-6">
						<button type="button" id="filter" class="btn btn-outline-info"><i class="fa fa-sm fa-filter"></i> Filter</button>
						<button type="button" id="reset" class="btn btn-outline-warning"><i class="fa fa-sm fa-sync"></i> Reset</button>
					</div>
					<div class="col-md-6" style="text-align: right; padding-right: 0px">
						<button type="button" id="add_new" class="btn btn-outline-success"><i class="fa fa-plus"></i> Tambah</button>
					</div>	
				</div>
			</div>
			<div class="kt-portlet__body">

				<!--begin: Datatable -->
				<table class="table table-striped- table-bordered table-hover table-checkable" id="tbl-user">
					<thead>
						<tr>
							<th style="width: 3%">No.</th>
							<th>Nama</th>
							<th>No. Hp</th>
							<th>Username</th>
							<th>Level</th>
							<th style="width: 5%">#</th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>

				<!--end: Datatable -->
			</div>
		</div>
	</div>

	<!-- end:: Content -->
</div>

<!--begin::Modal-->
<div class="modal fade" id="modal" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form id="form">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Form User</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<input type="hidden" name="id" id="id">
					<div class="form-group">
						<label for="nama" class="form-control-label">Nama</label>
						<input type="text" class="form-control" required="required" id="nama" name="nama">
					</div>
					<div class="form-group">
						<label for="no_hp" class="form-control-label">No. Hp</label>
						<input type="number" class="form-control" required="required" id="no_hp" name="no_hp">
					</div>
					<div class="form-group">
						<label for="username" class="form-control-label">Username</label>
						<input type="text" class="form-control" required="required" id="username" name="username">
					</div>
					<div class="form-group">
						<label for="password" class="form-control-label">Password</label>
						<input type="password" class="form-control" id="password" name="password">
						<span class="required form-text text-logo" id="teks-password">* Kosongi jika tidak ingin mengubah password</span>
					</div>
					<div class="form-group" id="el-level">
						<label for="level" class="form-control-label">Level</label>
						<select class="form-control" id="level" name="level">
							<option></option>
							<?php foreach($level as $row) { ?>
								<option value="<?php echo $row->id ?>"><?php echo $row->level ?></option>
							<?php } ?>
						</select>
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


<!--begin::Modal-->
<div class="modal fade" id="modal-menu" tabindex="-1" role="dialog"  data-backdrop="static" data-keyboard="false"aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form id="form_menu_user">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Management Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                    </button>
                </div>
                <div class="modal-body">
                        <input type="hidden" name="id-menu" id="id-menu">
                        <div class="form-group">
                            <label>Nama <span class="required">*</span></label>
                            <input type="text" required="required" class="form-control" placeholder="Nama" id="nama-menu" name="nama-menu">
                        </div>
                        <div id="tree-edit"></div>
                </div>
                <div class="modal-footer">
				    <button type="submit" class="btn btn-outline-info" ><i class="fa fa-save"></i> Simpan</button> 
					<button type="button" class="btn btn-outline-danger" data-dismiss="modal" id="close"><i class="fa fa-times"></i> Close</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!--end::Modal-->