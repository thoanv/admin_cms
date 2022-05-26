@extends('admin.layouts.app')
@section('title', 'Thiết lập menu')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Thiết lập Menu</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{route('dashboard')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{route('menus.index')}}">Danh sách</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Thiết lập Menu</li>
                </ol>
            </nav>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <form class="theme-form" method="POST" action="{{route('menus.setup', $menu['id'])}}">
                @csrf
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        @if(isset($menu['id']))
                            <div class="card mt-4">
                                <div class="card-body">
                                    <h5 class="card-title">Cài đặt Menu</h5>
                                    <hr>
                                    <div class="form-group row">
                                        <div class="col-sm-6 col-form-label">
                                            <div class="card">
                                                <div class="card-body">
                                                    1234
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-form-label">
                                            <div class="card">
                                                <div class="card-body">
                                                    123456
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="card mt-4">
                            <div class="card-body">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary me-2">Lưu</button>
                                    <a href="{{route('menus.index')}}" class="btn btn-dark">Quay lại</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection
