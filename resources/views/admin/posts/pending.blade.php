@extends('admin.layouts.app')
@section('title', 'Tin tức Chớ xuất bản')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Tin tức Chờ xuất bản</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12">
                @if (session('success'))
                    <div class="alert alert-success notification-submit">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card mb-2">
                    <div class="card-body">
                        <div>
                            <h4 class="card-title">
                                Tìm kiếm
                            </h4>
                            <hr>
                        </div>
                        <form class="forms-sample" action="{{route('posts.pending')}}">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="name">Từ khóa</label>
                                        <input type="text" class="form-control" name="name" value="{{isset($request->name) ? $request->name : ''}}" id="name" placeholder="Nhập từ khóa ....">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="category">Danh mục</label>
                                        <select name="category" id="category" class="form-control">
                                            <option value="">Tất cả</option>
                                            @foreach($categories as $cate)
                                                <option {{(isset($request->category) && $request->category == $cate['id']) ? 'selected' : ''}} value="{{$cate['id']}}">{{$cate['name']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="destination">Điểm đến</label>
                                        <select name="destination" id="destination" class="form-control">
                                            <option value="">Tất cả</option>
                                            @foreach($destinations as $des)
                                                <option {{(isset($request->destination) && $request->destination == $des['id']) ? 'selected' : ''}} value="{{$des['id']}}">{{$des['name']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary me-2">Tìm kiếm</button>
                                    <a href="{{route('posts.pending')}}" class="btn btn-dark">Làm mới</a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h4 class="card-title">
                                Danh sách
                            </h4>

                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col" class="text-center">STT</th>
                                    <th scope="col" >Tên bài viết</th>
                                    <th scope="col" class="text-center">Hình ảnh</th>
                                    <th scope="col" class="text-center">Danh mục</th>
                                    <th scope="col" class="text-center">Điểm đến</th>
                                    <th scope="col" class="text-center">Lượt xem</th>
                                    <th scope="col" class="text-center">Ngày tạo</th>
                                    <th scope="col" class="text-center">Tạo bởi</th>
                                    <th scope="col" class="text-center">Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $item)
                                    <tr role="row">
                                        <td role="cell" class="text-center">{{$loop->iteration}}</td>
                                        <td>
                                            <div class="text-break">{{$item->name}}</div>
                                        </td>
                                        <td>
                                            <img class="img-dev-custom" src="{{$item['avatar'] ? $item['avatar'] : '/assets/images/no-image.png'}}" alt="{{$item->name}}">
                                        </td>
                                        <td class="text-center">
                                            @foreach($item->categories as $category)
                                                <span class="badge badge-outline-primary badge-pill">{{$category['name']}}</span>
                                            @endforeach
                                        </td>
                                        <td class="text-center">
                                            @foreach($item->destinations as $destination)
                                                <span class="badge badge-outline-success badge-pill">{{$destination['name']}}</span>
                                            @endforeach
                                        </td>
                                        <td class="text-center">
                                            {{$item->view}}
                                        </td>
                                        <td role="cell" class="text-center">{{date('H:i d/m/Y', strtotime($item->created_at))}}</td>
                                        <td role="cell" class="text-center">{{$item->owner->name}}</td>
                                        <td class="text-center">
                                            <a href="{{route('posts.showDetail', ['post' => $item['id'], 'type' => 'pending'])}}" class="btn btn-primary btn-icon-text btn-sm"><i class="mdi mdi-eye btn-icon-prepend icon-mr"></i> Xem</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        @if(!count($posts))
                            @include('admin.components.data-empty')
                        @endif
                        <div class="text-center mt-3 float-end">
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
