

		

		<div class="main-banner banner_up">
			<div id="rev_slider_34_1_wrapper" class="rev_slider_wrapper" data-alias="news-gallery34">
				<!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
				<div id="rev_slider_34_1" class="rev_slider" data-version="5.0.7">
					<ul>
						<!-- SLIDE  -->
						<li data-index="rs-129"  >
							<!-- MAIN IMAGE -->
							<img src="<?=base_url();?>assets/images/banner/slider2.jpg"  alt=""  class="rev-slidebg" >
							<!-- LAYERS -->
							<!-- LAYER NR. 2 -->
							<!-- data-x="['left','left','left','left']" data-hoffset="['20','50','50','10']" -->
							<div class="tp-caption Newspaper-Title tp-resizeme "
							id="slide-129-layer-1"
							data-x="['left','left','left','left']" data-hoffset="['20','50','50','10']"
							data-y="['top','200','150','center']" data-voffset="['190','135','50','10']"
							data-fontsize="['50','50','50','30']"
							data-lineheight="['55','55','55','35']"
							data-width="['600','600','600','458']"
							data-height="none"
							data-whitespace="normal"
							data-transform_idle="o:1;"
							data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
							data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
							data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
							data-mask_out="x:0;y:0;s:inherit;e:inherit;"
							data-start="1000"
							data-splitin="none"
							data-splitout="none"
							data-responsive_offset="on" >
								<div class="banner-text mt--5 mt-xs-0">
									<h2>Find a Polling Unit</h2>
									<form method="post" autocomplete="off" action="javascript:;">
										<div class="search input_container">
											<div class="textbox">
												<div class="textbox-box">
													<div class="textbox-field">
														<input class="textbox-text txtsearchs" id="txtsearchs" type="text" placeholder="Enter City or State" onkeyup="autocomplet()" />
													</div>
													<button type="button" class="close-icon"></button>

													<div class="textbox-action">
														
													</div>
												</div>
											</div>
										</div>
									</form>
									<!-- <ul id="country_list_id"></ul> -->
								</div>
							</div>
						</li>
						<!-- SLIDE  -->
						<li data-index="rs-130" data-title="" data-description="">
							<!-- MAIN IMAGE -->
							<img src="<?=base_url();?>assets/images/banner/slider1.jpg"  alt="" class="rev-slidebg">
							<div class="tp-caption Newspaper-Title tp-resizeme "
							id="slide-129-layer-1"
							data-x="['left','left','left','left']" data-hoffset="['20','50','50','10']"
							data-y="['top','200','150','center']" data-voffset="['190','135','50','10']"
							data-fontsize="['50','50','50','30']"
							data-lineheight="['55','55','55','35']"
							data-width="['600','600','600','458']"
							data-height="none"
							data-whitespace="normal"
							data-transform_idle="o:1;"
							data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
							data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
							data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
							data-mask_out="x:0;y:0;s:inherit;e:inherit;"
							data-start="1000"
							data-splitin="none"
							data-splitout="none"
							data-responsive_offset="on">
								<div class="banner-text mt--10 mt-xs-0">
									<h2>Find a Polling Unit</h2>
									<form method="post" autocomplete="off" action="javascript:;">
										<div class="search input_container">
											<div class="textbox">
												<div class="textbox-box">
													<div class="textbox-field">
														<input class="textbox-text txtsearchs1" id="txtsearchs1" type="text" placeholder="Enter City or Polling Unit" onkeyup="autocomplet1()" />
													</div>
													<button type="button" class="close-icon1"></button>

													<div class="textbox-action">
														
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</li>
					</ul>

					

					<div class="tp-bannertimer tp-bottom"></div>
				</div>
			</div>
		</div>

		<ul id="country_list_id"></ul>
		

		<div class="gray-bg1 mt-xs--20_ pt-15 pb-15 count_bg">
			<div class="container_ pl-30 pr-30 pl-md-30 pl-xs-20 pr-xs-10">
				<div class="row">

					<div class="col-lg-9 pl-0" style="backgrounds: red">
						<div class="pl-20_ count_items">
							<div>Loading...</div>
						</div>
					</div>

					<div class="col-lg-3 text-right" style="backgrounds: yellow">
						<div class="mt--5 mt-xs--35">
							<label>Sort By:</label>
							<select class="txtsort">
								<option value="oldest">Oldest</option>
								<option value="latest">Latest</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- About_us -->
		<div class="section-bar pt-20 mt-xs-20">
			<div class="container_ pl-20 pr-20">
				<div class="row pb-60 pb-xs-30 text-center">

					<div class="col-sm-2 left_info pr-0">
						<img src="<?=base_url();?>assets/images/img1.jpg" alt="">
						<p>Your Vote Is Your right</p>
						<div class="text-left">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>

					


					<div class="col-sm-10 p-xs-0">
						<div class="text-left featured_sel mt-xs-15 mb-xs-5" style="margin-left:6px !important;">
							<select class="txt_lga">
								<option value='all'>All LGAs</option>
								<?php
								foreach($city1->result() as $rows){ ?>
									<option value='<?=$rows->lga_id;?>'><?=$rows->lga_name;?></option>
								<?php
								}
								?>
							</select>
						</div>

						<div class="box-body_ mt-0" style="overflow: hidden !important; width:99%">
							<div class="table-responsive project-table">
								<table id="tbl_search" class="table table-striped table-bordered display responsive wrap all_tables1_" cellspacing="0">
									<thead>
										<tr>
											<th></th>
											<!-- <th>Polling Unit ID</th> -->
											<!-- <th>Polling Unit No</th> -->
											<th>LGA</th>
											<th>Polling Unit Name</th>
											<th>Description</th>
											<!-- <th>Entered By</th> -->
										</tr>
									</thead>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		

		