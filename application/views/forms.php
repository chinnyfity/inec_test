
		

		<div class="main-banner banner_up banner_up1">
			<div id="rev_slider_34_1_wrapper" class="rev_slider_wrapper" data-alias="news-gallery34">
				<!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
				<div id="rev_slider_34_1" class="rev_slider" data-version="5.0.7">
					<ul>
						<!-- SLIDE  -->
						<li data-index="rs-129"  >
							<!-- MAIN IMAGE -->
							<img src="<?=base_url();?>assets/images/banner/slider1.jpg"  alt=""  class="rev-slidebg" >
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
							</div>
						</li>
						<!-- SLIDE  -->
						<li data-index="rs-130" data-title="" data-description="">
							<!-- MAIN IMAGE -->
							<img src="<?=base_url();?>assets/images/banner/slider2.jpg"  alt="" class="rev-slidebg">
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
							</div>
						</li>
					</ul>

					<div class="tp-bannertimer tp-bottom"></div>
				</div>
			</div>
		</div>
		

		<div class="gray-bg1 mt-xs--20_ pt-15 pb-15 count_bg">
			<div class="container_ pl-30 pr-30 pl-md-30 pl-xs-20 pr-xs-10">
				<div class="row">

					<div class="col-lg-12 pl-0" style="backgrounds: red">
						<div class="pl-20_ count_items">
							<div>Home - Enter Result</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- About_us -->
		<div class="section-bar pt-20 mt-xs-0">
			<div class="container pl-20 pr-20">
				<div class="pb-60 pb-xs-30">
					<div class="row">
						<div class="col-sm-7 pl-xs-5 pr-xs-5 first_form">
							<div class="cards">
								<div class="body mt-10">
									<form class="input-groups form_score" id="" autocomplete="off">
										<div style="font-size: 14px; color: red">All the fields here are compulsory</div>

										<div class="row mt-30 mt-xs-15">
											<div class="col-sm-3">
												<label for="email_address">Select Party</label>
											</div>

											<div class="col-sm-8">
												<select class="form-control" name="txtparty">
													<option value=''>-Select-</option>
													<?php
													foreach($parties->result() as $rows){ ?>
														<option value='<?=$rows->partyname;?>'><?=$rows->partyname;?></option>
													<?php
													}
													?>
												</select>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-3">
												<label for="email_address">Polling Unit</label>
											</div>

											<div class="col-sm-8">
												<select class="form-control" name="txtunit">
													<option value=''>-Select-</option>
													<?php
													foreach($pu->result() as $rows){ ?>
														<option value='<?=$rows->uniqueid;?>'><?=ucwords($rows->polling_unit_name);?></option>
													<?php
													}
													?>
												</select>
											</div>
										</div>

										

										<div class="row">
											<div class="col-sm-3">
												<label for="email_address">Enter Score</label>
											</div>

											<div class="col-sm-8">
												<input type="number" name="txtscore" class="form-control" placeholder="Enter the score" style="text-transform: capitalize;" value="">
											</div>
										</div>


										<div class="row">
											<div class="col-sm-3">
												<label for="email_address">Enter Your Name</label>
											</div>

											<div class="col-sm-8">
												<input type="text" name="txtname" class="form-control" placeholder="Enter your names" style="text-transform: capitalize;" value="">
											</div>
										</div>


										<div class="row">
											<div class="col-sm-3">
												
											</div>

											<div class="col-sm-8 mt-15">
											<button type="button" class="btn btn-success m-t-15 waves-effect waves-light enter_score">ENTER SCORE</button>
											</div>
										</div>


										<div class="alert alert_msgs alert_msg1"></div>
										<div style="clear: both;"></div>
										
									</form>
								</div>
							</div>
						</div>

						<div class="col-sm-5 p-xs-0 img_1">
							<img src="<?=base_url();?>assets/images/inec.jpg">
						</div>
					</div>
				</div>
			</div>
		</div>
		
		