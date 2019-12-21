@extends('master-layout')
@section('content')
<div class="container">

    <!-- login -->
    <div>
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
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
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle" style="text-transform: uppercase;">Đăng
                        nhập
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url("dang-nhap") }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên tài khoản hoặc địa chỉ email <span
                                    style="color: #d70000;">*</span></label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email" require>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mật khẩu <span style="color: #d70000;">*</span>
                            </label>
                            <input type="password" class="form-control" name="password"
                                placeholder="Password" require>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">ghi nhớ mật khẩu</label>
                        </div>
                        <button type="submit" class="btn btn-primary" style="text-transform: uppercase;">đăng
                            nhập</button>
                        <a href="{{ url("dang-ky") }}">Đăng Ký</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endSection