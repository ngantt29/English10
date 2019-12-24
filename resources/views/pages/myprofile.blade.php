@extends('master-layout')
@section('content')
<section>
	<div class="container my_infor">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Tiếng Anh lớp 10</a></li>
			<li class="breadcrumb-item"><a href="{{ url("trang-ca-nhan") }}">Trang cá nhân</a></li>
		</ol>
		<div class="layout-main-container">
			<div class="user-profile">
				<div class="row" style="margin: 0;">
					<div class="col-sm 12 col-md-9 content_right">
						<!-- content_right -->
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
								<div class="row init-1">
									<div class="col-12 col-md-9">
										<div class="row">
											<!-- each input -->
											<div class="col-md-3">
												<div class="form-group">
													<label class="required">
														Họ tên
													</label>
												</div>
											</div>
											<div class="col-md-9">
												<div class="form-group">
													{{ $user->fullname }}
												</div>
											</div>
										</div>
										<div class="row">
											<!-- each input -->
											<div class="col-md-3">
												<div class="form-group">
													<label>
														Ngày sinh
													</label>
												</div>
											</div>
											<div class="col-md-9">
												<div class="form-group">
													{{ $user->birthday }}
												</div>
											</div>
										</div>
										<div class="row">
											<!-- each input -->
											<div class="col-md-3">
												<div class="form-group">
													<label class="required">
														Số điện thoại
													</label>
												</div>
											</div>
											<div class="col-md-9">
												<div class="form-group">
													{{ $user->phone }}
												</div>
											</div>
										</div>
										<div class="row">
											<!-- each input -->
											<div class="col-md-3">
												<div class="form-group">
													<label class="required">
														Email
													</label>
												</div>
											</div>
											<div class="col-md-9">
												<div class="form-group">
													{{ $user->email }}
												</div>
											</div>
										</div>
										<div class="row">
											<!-- each input -->
											<div class="col-md-3">
												<div class="form-group">
													<label>
														Địa chỉ
													</label>
												</div>
											</div>
											<div class="col-md-9">
												<div class="form-group">
													{{ $user->address }}
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-1 pencil">
										<a style="float: right;" href="{{ route('thay-doi-thong-tin') }}">
											<span> <i class="fas fa-pencil-alt"></i>
											</span>
										</a>
									</div>
								</div>
								<div class="score-table col-md-6">
									<h3>Điểm bài luyện tập</h3>
									<table>
										<tr>
											<th>
												Thứ tự
											</th>
											<th>
												Luyện tập
											</th>
											<th>
												Điểm
											</th>
										</tr>
										@for($i = 0; $i < count($scoresExercise); $i++)
										<tr>
											<td>
												{{ $i+1 }}
											</td>
											<td>
												{{ $scoresExercise[$i]->exercise->title }}
											</td>
											<td>
												{{ $scoresExercise[$i]->score }}
											</td>
										</tr>
										@endfor
									</table>
								</div>
								<div  class="score-table col-md-6">
									<h3>Điểm bài bài kiểm tra</h3>
									<table class="score-table">
										<tr>
											<th>
												Thứ tự
											</th>
											<th>
												Luyện tập
											</th>
											<th>
												Điểm
											</th>
										</tr>
										@for($i = 0; $i < count($scoresExam); $i++)
										<tr>
											<td>
												{{ $i+1 }}
											</td>
											<td>
												{{ $scoresExam[$i]->exam->title }}
											</td>
											<td>
												{{ $scoresExam[$i]->score }}
											</td>
										</tr>
										@endfor
									</table>
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