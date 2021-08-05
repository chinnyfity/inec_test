<footer class="footer pt-50 mt-50">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-4 footer_logo">
						<a href=""><img src="<?=base_url();?>assets/images/logo.png" alt=""></a>
						<p class="footer_desc">
							This is where you will place a short content paragraph about the company. You can also make it more than one line so that it can be seen on google site intro.
						</p>
						<ul>
							<li>
								<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>

					<div class="offset-3_ col-6 offset-lg-1 col-lg-3 mt-xs-30 link_footer">
						<h4>Quick Links</h4>
						<ul>
							<li>
								<a href="<?=base_url();?>">Home</a>
							</li>
							<li>
								<a href="<?=base_url();?>enter-results/">Enter Result</a>
							</li>
							<li>
								<a href="<?=base_url();?>another-link/">Another Link</a>
							</li>
							<li>
								<a href="<?=base_url();?>help-center/">Help Center</a>
							</li>
						</ul>
					</div>

					<div class="col-6 col-lg-3 mt-xs-30 link_footer">
						<h4>Quick Links</h4>
						<ul>
							<li>
								<a href="<?=base_url();?>another-link/">Another Link</a>
							</li>
							<li>
								<a href="<?=base_url();?>another-link/">Another Link</a>
							</li>
							<li>
								<a href="<?=base_url();?>privacy-policy/">Privacy & Policy</a>
							</li>
							<li>
								<a href="<?=base_url();?>terms/">Terms of Use</a>
							</li>
						</ul>
					</div>

				</div>
			</div>
			<div class="bottom-footer text-center">
				<div class="container">
					<div class="bor_top clearfix">
						<p>Copyright © 2021 INEC NIgeria. All rights reserved</p>
					</div>
				</div>
			</div>
		</footer>


		<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
		<script src="<?=base_url();?>assets/js/jquery.easing.js" type="text/javascript"></script>

		<script src="<?=base_url();?>assets/js/jquery.mousewheel-3.0.6.pack.js" type="text/javascript"></script>
		<script src="<?=base_url();?>assets/js/jquery.fancybox.pack.js" type="text/javascript"></script>

		<script src="<?=base_url();?>assets/js/owl.carousel.min.js" type="text/javascript"></script>

		<script src="<?=base_url();?>assets/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
		<script src="<?=base_url();?>assets/js/isotope.pkgd.min.js" type="text/javascript"></script>
		<script src="<?=base_url();?>assets/js/masonry.pkgd.min.js" type="text/javascript"></script>
		<script src="<?=base_url();?>assets/js/jquery.appear.js" type="text/javascript"></script>

		<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="<?=base_url();?>assets/extensions/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="<?=base_url();?>assets/extensions/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="<?=base_url();?>assets/extensions/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="<?=base_url();?>assets/extensions/revolution.extension.parallax.min.js"></script>
		<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.revolution.js"></script>

		<script src="<?=base_url();?>assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>

		<script src="<?=base_url();?>assets/js/custom2.js" type="text/javascript"></script>


		<script src="<?=base_url();?>assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

		<script src="<?=base_url();?>assets/js1/jquery.dataTables.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="<?=base_url();?>assets/js1/fnReloadAjax.js"></script>
		<script src="<?=base_url();?>assets/js1/dataTables.responsive.min.js" type="text/javascript"></script>
		<script src="<?=base_url();?>assets/js1/dataTables.bootstrap.min.js" type="text/javascript"></script>


		<script src="<?=base_url()?>assets/sweetalert/sweetalert.min.js"></script>
    	<script src="<?=base_url()?>assets/js_adm/dialogs.js"></script>


		<script src="<?=base_url();?>assets/js/jscripts.js" type="text/javascript"></script>


		<script>
			var site_urls = $('#txtsite_url').val();
			var txt_pagename = $('#txtpage_name').val();

			var urls = site_urls+"node/fetch_records/"+txt_pagename+"/";
			var dataTable = $('#tbl_search, #lga_units').DataTable({
				"processing": true,
				"serverSide": true,
				"pageLength": 25,
				//'paging': true,
				"order":[],
				"ajax":{
					url : urls,
					type: "post"
				},
				"columnDefs":[
				{
					"target":[0,3,4],
					"orderable": false
				}
				],

				dom: 'lBfrtip',
				"lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
			});
		</script>
	</body>

</html>

