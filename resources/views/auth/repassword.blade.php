@extends('master-layout')
@section('content')
<div class="container">
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
                <h5 class="modal-title" id="exampleModalCenterTitle" style="text-transform: uppercase;">Đăng ký
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route("doi-mat-khau") }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Địa chỉ email <span style="color: #d70000;">*</span></label>
                        <input type="email" name="email" class="form-control" require>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mật khẩu cũ<span style="color: #d70000;">*</span>
                        </label>
                        <input type="password" name="oldpassword" class="form-control" require>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mật khẩu mới<span style="color: #d70000;">*</span>
                        </label>
                        <input type="password" name="password" class="form-control" require>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nhập lại mật khẩu mới<span style="color: #d70000;">*</span>
                        </label>
                        <input type="password" name="repassword" class="form-control" require>
                    </div>
                    <button id="sign_up_commit" type="submit" class="btn btn-primary"
                        style="text-transform: uppercase;">Đăng
                        ký</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endSection