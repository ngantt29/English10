@extends('master-layout')
@section('content')
<section>
	<div class="container my_infor">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">My information</a></li>
		</ol>
		<div class="layout-main-container">
			<div class="container">
				<div class="user-profile">
					<div class="row">
						<div class="col-sm-12 col-md-3 content_left">
							<div class="user--profile-left">
								<ul class="user--profile--list-function">
								<li class="active"><a href="{{ route('my_information') }}">Information &amp; Contact </a></li>
								<li><a href="{{ route('change_user') }}">Change Username </a></li>
								<li><a href="{{ route('team_manage') }}">Team Management</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm 12 col-md-9 content_right"> <!-- content_right -->
							<div class="user--profile-right">
								<div class="user-profile-group">
									<h2 class="user-profile-group-tilte">Information </h2>
									<form class="init">
										<div class="row init-1"> 
											<div class="col-12 col-md-2">
												<div class="row">
													<div class="no-img">
													</div>
												</div>
												<div class="row " id="avatar-selector">
													<div class="form-group uploadAvatar">
														<label id="yourAvatar" style="display: block;">Your Avatar</label>
														<div class="input-group">
															<span class="input-group-btn">
																<button class="select-img" id="Upload-Ava" style="display: block;">
																	Select photo
																</button>
															</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-12 col-md-9">
												<div class="row"> <!-- each input -->
													<div class="col-md-3">
														<div class="form-group">
															<label class="required">
																Family name 
															</label>
														</div>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<span id="span-name" class="span-display" style="display: unset;">Jone Smith</span>
															<input type="text" class="form-control is-required" id="input" >
														</div>
													</div>
												</div>
												<div class="row"> <!-- each input -->
													<div class="col-md-3">
														<div class="form-group">
															<label >
																Birthday
															</label>
														</div>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<span id="span-name1" class="span-display" style="display: unset;">20-12-2000</span>
															<input type="text" class="form-control is-required" id="input1" value="01-3" >
														</div>
													</div>
												</div>
												<div class="row"> <!-- each input -->
													<div class="col-md-3">
														<div class="form-group">
															<label class="required">
																Phone number
															</label>
														</div>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<span id="span-name2" class="span-display" style="display: unset;">0123 456 789 </span>
															<input type="text" class="form-control is-required" id="input2" >
														</div>
													</div>
												</div>
												<div class="row"> <!-- each input -->
													<div class="col-md-3">
														<div class="form-group">
															<label class="required">
																Email address
															</label>
														</div>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<span id="span-name3" class="span-display" style="display: unset;">abc@xyz.com</span>
															<input type="text"  class="form-control is-required" id="input3" >
														</div>
													</div>
												</div>
												<div class="row"> <!-- each input -->
													<div class="col-md-3">
														<div class="form-group">
															<label class="required">
																Country/Region
															</label>
														</div>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<span id="span-name4" class="span-display" style="display: unset;"></span>
															<select class="form-control is-required" id="input4" >
																<option value selected="Select Country">Select Country</option>
																<option value="Viet Nam">Viet Nam</option>
																<option value="China">China</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row"> <!-- each input -->
													<div class="col-md-3">
														<div class="form-group">
															<label class="required">
																City
															</label>
														</div>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<span id="span-name5" class="span-display" style="display: unset;"></span>
															<select class="form-control is-required" id="input5" >
																<option value selected="Select City">Select City</option>
																<option value="Viet Nam">Ha Noi</option>
																<option value="China">Ho Chi Minh</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row"> <!-- each input -->
													<div class="col-md-3">
														<div class="form-group">
															<label>
																Address
															</label>
														</div>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<span id="span-name6" class="span-display" style="display: unset;"></span>
															<textarea placeholder="Province/city name that you're living now" id="input6" class="form-control" type="text" style="height: auto"></textarea>
														</div>
													</div>
												</div>
												<div class="row" id="button_submit_infor">
													<div class="form-group pull-right">
														<input type="button" class="btn btn-cancel" onclick="hiddenInput()" value="Cancel">
														<button class="btn btn-save">Save</button>
													</div>
												</div>
											</div>
											<div class="col-12 col-md-1 pencil">
												<p style="float: right;" onclick="showInput()">
													<span> <i class="fas fa-pencil-alt"></i>
													</span>
												</p>
											</div>
										</div>
									</form>
									<hr>
									<h2 class="user-profile-group-tilte">Experience </h2>
									<div id="describe_exp">
										<div class="row">
											<div class="col-md-6">
												<label id="experience" class="label-experience">Describe your experienced background.</label>
											</div>
										</div>
										<div class="row">
											<div class="col-md-3">
												<img src="image/add-single-education.svg" class="img-plus" onclick="showFrmEpx()">
											</div>
										</div>
									</div>
									<form id="frm-experience">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="required">Professional </label>
													<input type="text" class="form-control" placeholder="Your position" id="position">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="required">Company name (if you are working) </label>
													<input type="text" class="form-control" placeholder="Your company name" id="company_name">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label class="required">From </label>
													<input type="text" class="form-control" placeholder="yyyy/mm/dd" id="from_epx">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label class="required">To </label>
													<input type="text" class="form-control" placeholder="yyyy/mm/dd" id="to_exp">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group" style="margin-top: 30px">
													<input type="checkbox" class="experience-checkbox">
													<label class="experience-checkbox-label"> Current job </label>
												</div>
											</div>
										</div>
										<div class="row btn_epx"  id="button_submit_exp">
											<div class="form-group pull-right">
												<input type="button" class="btn btn-cancel" onclick="hiddenFrmEpx()" value="Cancel">
												<button class="btn btn-save">Save</button>
											</div>
											<div style="clear: both;"></div>
										</div>

									</form>
									<hr>
									<h2 class="user-profile-group-tilte">Education </h2>
									<div id="describe_edu">
										<div class="row">
											<div class="col-md-6">
												<label id="experience" class="label-experience">Describe your educational background. </label>
											</div>
										</div>
										<div class="row">
											<div class="col-md-3">
												<img src="image/add-single-education.svg" class="img-plus" onclick="showFrmEdu()">
											</div>
										</div>
									</div>
									<form id="frm-education">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="required">College </label>
													<input type="text" class="form-control" id="college">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="required">Major </label>
													<input type="text" class="form-control" placeholder="Your graduated major" id="major">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label class="required">From </label>
													<input type="text" class="form-control" placeholder="yyyy/mm/dd" id="from_edu">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label class="required">To </label>
													<input type="text" class="form-control" placeholder="yyyy/mm/dd" id="to_edu">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group" style="margin-top: 30px">
													<input type="checkbox" class="experience-checkbox">
													<label class="experience-checkbox-label"> Current job </label>
												</div>
											</div>
										</div>
										<div class="row "  id="button_submit_edu">
											<div class="form-group pull-right">
												<input type="button" class="btn btn-cancel" onclick="hiddenFrmEdu()" value=" Cancel">
												<button class="btn btn-save">Save</button>
											</div>
											<div style="clear: both;"></div>
										</div>
									</form>
									<hr>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection