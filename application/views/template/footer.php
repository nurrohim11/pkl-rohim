					<!-- modal print -->
					<div class="modal" id="form_struk" tabindex="-1" role="dialog" aria-hidden="true">
					    <div class="modal-dialog modal-dialog-centered " role="document">
					        <div class="modal-content"><iframe id="frame" src="" width="100%" style="border:none;"> </iframe></div>
					    </div>  
					</div>
					<!-- end modal print -->
					<!-- begin:: Footer -->
					<div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
						<div class="kt-container  kt-container--fluid ">
							<div class="kt-footer__copyright">
								2020 <a href="http://gmedia.net.id" target="_blank" class="kt-link">Gmedia</a>
							</div>
						</div>
					</div>

					<!-- end:: Footer -->
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!-- begin::Scrolltop -->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="fa fa-arrow-up"></i>
		</div>

		<!-- end::Scrolltop -->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#2c77f4",
						"light": "#ffffff",
						"dark": "#282a3c",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
			var base_url = '<?php echo base_url () ?>';
		</script>

		<!-- end::Global Config -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="<?php echo base_url() ?>assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
		<script src="<?php echo base_url() ?>assets/js/scripts.bundle.js" type="text/javascript"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/mask/jquery.mask.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/mask/jquery.mask.min.js"></script>
		<script src="<?php echo base_url() ?>assets/js/core.js" type="text/javascript"></script>
		<script src="<?php echo base_url() ?>assets/js/jquery.redirect.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors(used by this page) -->
		<!-- <script src="<?php echo base_url() ?>assets/plugins/pace/pace.min.js" type="text/javascript"></script> -->
		<script src="<?php echo base_url() ?>assets/plugins/sweetalert/sweetalert2.min.js" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts(used by this page) -->
		<?php echo isset($js) ? $js : '' ?>

		<!--end::Page Scripts -->

	</body>

	<!-- end::Body -->
</html>