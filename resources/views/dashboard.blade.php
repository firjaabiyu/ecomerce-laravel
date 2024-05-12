@extends('layouts.admin')

@section('content')
{{-- untuk menampilkan halaman sesuai content yang diperlukan --}}
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Admin</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v2</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

@if(Auth::user()->level === 'admin')
{{-- admin --}}
<div class="semua">

    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">CPU Traffic</span>
                    <span class="info-box-number">
                        10
                        <small>%</small>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Likes</span>
                    <span class="info-box-number">41,410</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Sales</span>
                    <span class="info-box-number">760</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">New Members</span>
                    <span class="info-box-number">2,000</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
</div>
<p>You're Admin</p>
@else
{{-- Profile belum diisi --}}
@if(!$data)
<div class="alert alert-danger alert-dismissible text-white">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-ban"></i> Hi, {{Auth::user()->name}}</h5>
    <p>Please fill the profile correctly</p>

    <p><button href="#" type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-profile-xl">Here</button></p>

    <div class="modal fade" id="modal-profile-xl">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('penjual.store')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Profile Photo</label>
                            <input type="file" name="profile" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nomor HP</label>
                            <input type="text" name="no_hp" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Birth</label>
                            <input type="date" name="birth" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select name="gender" required class="form-control">
                                <option value="male">Men</option>
                                <option value="female">Women</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="alamat" required class="form-control" cols="10" rows="3"></textarea>
                        </div>
                    </div>
                    <input type="text" name="id_user" hidden value="{{Auth::user()->id}}">
    
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Data</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
@endif
@endif
@endsection
