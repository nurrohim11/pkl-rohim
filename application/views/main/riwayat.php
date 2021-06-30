	<!-- begin:: Content -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

		<div class="kt-portlet kt-portlet--mobile">

		<div class="kt-portlet kt-portlet--mobile">
			<div class="kt-portlet__head kt-portlet__head--lg kt-portlet_btn">
				<div class="row" style="width: 100%; margin-top: auto;margin-bottom: auto;">
					<?php if($this->session->userdata('level') == 1){ ?>
					<div class="col-md-4">
						<select class="form-control" id="member" name="member" style="width: 100%"></select>
					</div>
					<?php } ?>
					<div class="col-md-4 col-sm-6">
						<div class="input-group pull-right" id="kt_daterangepicker_4">
							<input type="text" class="form-control" readonly="" placeholder="Select date" id="tgl">
							<div class="input-group-append">
								<span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<button type="button" id="filter" class="btn btn-outline-success" style="width: 50%"><i class="fa fa-filter"></i> Filter</button>
						<button type="button" id="reset" class="btn btn-outline-info" style="width: 50%"><i class="fa fa-sync"></i> Refresh</button>
					</div>	
				</div>
			</div>

			<div class="kt-portlet__body">
				<!--begin: Datatable -->
				<table class="table table-striped- table-bordered table-hover table-checkable" id="tbl-riwayat">
					<thead>
						<tr>
							<th style="width: 8%">No.</th>
							<th style="width: 17%">Kode Pelanggan</th>
							<th>Nama</th>
							<th>No. Hp</th>
							<th>Pesan</th>
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
