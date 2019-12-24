@extends('master-layout')
@section('content')
<section>
	<div class="container my_infor">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Tiếng Anh lớp 10</a></li>
			<li class="breadcrumb-item"><a href="{{ url("trang-ca-nhan") }}">Trang cá nhân</a></li>
		</ol>
		<div class="layout-main-container">
			<div class="container">
				<div class="user-profile">
					<div class="row" style="margin: 0;">
						<div class="col-sm 12 col-md-9 content_right"> <!-- content_right -->
							<div class="user--profile-right">
								<div class="user-profile-group">
                                    @if(count($errors) > 0)
                                    <div class="alert alert-danger">
                                        @foreach($errors->all() as $err)
                                        {{ $err }}<br>
                                        @endforeach
                                    </div>
                                    @endif
                                    @if(session('Information'))
                                    <div class="alert alert-success">
                                        {{ session('Information') }}
                                    </div>
                                    @endif
                                    @if(session('Warning'))
                                    <div class="alert alert-danger">
                                        {{ session('Warning') }}
                                    </div>
                                    @endif
									<h2 class="user-profile-group-tilte">Thông tin cá nhân </h2>
									<form class="init" action="{{ url("trang-ca-nhan") }}" method="POST">
                                        @csrf
										<div class="row init-1"> 
											<div class="col-12 col-md-9">
												<div class="row"> <!-- each input -->
													<div class="col-md-3">
														<div class="form-group">
															<label class="required">
																Họ tên
															</label>
														</div>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															{{-- <span id="span-name" class="span-display" style="display: unset;"></span> --}}
															<input name="fullname" type="text" class="form-control is-required" id="input" placeholder="Họ tên đầy đủ của bạn" value="{{ $user_login->fullname }}">
														</div>
													</div>
												</div>
												<div class="row"> <!-- each input -->
													<div class="col-md-3">
														<div class="form-group">
															<label >
																Ngày sinh
															</label>
														</div>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															{{-- <span id="span-name1" class="span-display" style="display: unset;">20-12-2000</span> --}}
															<input name="birthday" type="text" class="form-control is-required" id="input1" value="{{ $user_login->birthday }}" placeholder="Nhập ngày sinh của bạn">
														</div>
													</div>
												</div>
												<div class="row"> <!-- each input -->
													<div class="col-md-3">
														<div class="form-group">
															<label class="required">
																Số điện thoại
															</label>
														</div>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															{{-- <span id="span-name2" class="span-display" style="display: unset;">0123 456 789 </span> --}}
															<input name="phone" type="text" class="form-control is-required" id="input2" placeholder="Số điện thoại liên lạc" value="{{ $user_login->phone }}">
														</div>
													</div>
												</div>
												<div class="row"> <!-- each input -->
													<div class="col-md-3">
														<div class="form-group">
															<label class="required">
																Email
															</label>
														</div>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															{{-- <span id="span-name3" class="span-display" style="display: unset;">abc@xyz.com</span> --}}
															<input name="email" type="text" class="form-control is-required" id="input3" placeholder="Địa chỉ email" value="{{ $user_login->email }}" readonly>
														</div>
													</div>
												</div>
												<div class="row"> <!-- each input -->
													<div class="col-md-3">
														<div class="form-group">
															<label>
																Địa chỉ
															</label>
														</div>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															{{-- <span id="span-name6" class="span-display" style="display: unset;"></span> --}}
															<textarea name="address" placeholder="Địa chỉ bạn đang ở" id="input6" class="form-control" type="text" style="height: auto">{{ $user_login->address }}</textarea>
														</div>
													</div>
												</div>
												<div class="row" id="button_submit_infor">
													<div class="form-group pull-right">
														<button class="btn btn-save" type="submit">Lưu</button>
													</div>
												</div>
											</div>
										</div>
									</form>
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