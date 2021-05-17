	<!-- begin:: Content -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

		<div class="row">
			<div class="col-md-6 col-sm-12 col-xs-12 col-lg-7">
				<div class="kt-portlet kt-portlet--mobile"  id="kt-portlet_parent">
					<div class="kt-portlet__body">
						<form id="form">
							<div class="form-group">
								<label for="message">Masukkan Pesan</label>
								<textarea class="form-control" id="message" name="message" rows="3" placeholder="Masukkan Pesan"></textarea>
							</div>
							<div class="form-group">
								<label>Gambar</label></br>
								<img src="<?php echo base_url() ?>assets/apps/img/placeholder.png" style="width: 160px; border-radius: 10px" id="preview" class="img-responsive">
								<input type="file" class="form-control" multiple="false" accept="image/*" id="image" onchange="preview()" style="margin-top: 6px">
								<span class="form-text required">* Pilih jika ingin mengirim gambar</span>
							</div>
							<div class="form-group">
								<div class="kt-radio-inline">
									<label class="kt-radio">
										<input type="radio" name="metode_pengiriman" value="plg" id="plg"> Kirim By Pelanggan
										<span></span>
									</label>
									<label class="kt-radio">
										<input type="radio" name="metode_pengiriman" value="tmp" id="tmp"> Kirim By Template
										<span></span>
									</label>
								</div>
							</div>	
							<?php if($this->session->userdata('level') == 1){ ?>
							<div class="form-group">
								<label for="template">Member <span class="required">*</span></label>
								<select class="form-control" id="member" name="member" style="width: 100%"></select>
							</div>
							<?php } ?>
							<div class="form-group" id="divtmp" style="display: none;">
								<label for="template">Template <span class="required">*</span></label>
								<select class="form-control" id="template" name="template" style="width: 100%"></select>
								<span class="form-text required">* Pesan akan terkirim ke semua pelanggan yang ada di template</span>
							</div>
							<div class="form-group" id="divplg"  style="display: none;">
								<label>Pilih Pelanggan</label></br>
								<select style="width: 100%" class="form-control" id="pelanggan" name="pelanggan[]" multiple="multiple">
								</select>
								<span class="form-text required">* Pesan akan terkirim ke pelanggan yang anda pilih </span> 
							</div>
							<div class="form-group form-group-last">
								<button type="submit" class="btn btn-success"><i class="fa fa-paper-plane"></i>Kirim</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-sm-12 col-xs-12 col-lg-5">
				<img src="<?php echo base_url() ?>assets/apps/img/img_wa.png" class="img_wa">
			</div>
		</div>
</div>

	<!-- end:: Content -->
</div>