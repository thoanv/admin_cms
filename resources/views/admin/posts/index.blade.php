@extends('admin.layouts.app')
@section('title', 'Tin tức')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Tin tức</h3>
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
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h4 class="card-title">
                                Danh sách
                                @can('create', \App\Models\Post::class)
                                <a href="{{route('posts.create')}}" class="btn btn-primary btn-fw float-end">Thêm mới</a>
                                @endcan
                            </h4>

                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col" class="text-center">STT</th>
                                    <th scope="col" >Tên bài viết</th>
                                    <th scope="col" class="text-center">Danh mục</th>
                                    <th scope="col" class="text-center">Điểm đến</th>
                                    <th scope="col" class="text-center">Lượt xem</th>
                                    <th scope="col" class="text-center">Ngày tạo</th>
                                    <th scope="col" class="text-center">Tạo bởi</th>
                                    <th scope="col" class="text-center">Trạng thái</th>
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
                                        <td class="text-center">
                                            @foreach($item->categories as $category)
                                                <span class="badge badge-primary">{{$category['name']}}</span>
                                            @endforeach
                                        </td>
                                        <td class="text-center">
                                            @foreach($item->destinations as $destination)
                                                <span class="badge badge-success">{{$destination['name']}}</span>
                                            @endforeach
                                        </td>
                                        <td class="text-center">
                                            {{$item->view}}
                                        </td>
                                        <td role="cell" class="text-center">{{date('H:i d/m/Y', strtotime($item->created_at))}}</td>
                                        <td role="cell" class="text-center">{{$item->owner->name}}</td>
                                        <td role="cell" class="text-center">
                                            @php
                                                $status = $item->getPublisher();
                                            @endphp
                                            <span class="badge {{$status['color_status']}}">{{$status['name_status']}}</span>

                                        </td>
                                        <td class="text-center">
                                            @if($item['published'] === \App\Models\Post::STATUS_DRAFT || $item['published'] === \App\Models\Post::STATUS_UNPUBLISHED)
                                                @can('update', $item)
                                                    <a href="{{route('posts.edit', $item['id'])}}" class="btn btn-primary btn-icon-text btn-sm"><i class="mdi mdi-file-check btn-icon-prepend icon-mr"></i> Sửa</a>
                                                @endcan
                                                @can('delete', $item)
                                                    <form class="d-inline-block" action="{{ route('posts.destroy', $item['id']) }}" method="POST" >
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có muốn xóa không?')"><i class="mdi mdi-delete btn-icon-prepend icon-mr"></i> Xóa</button>
                                                </form>
                                                @endcan
                                            @endif
                                            <a href="{{route('posts.edit', $item['id'])}}" class="btn btn-info btn-icon-text btn-sm"><i class="mdi mdi-history btn-icon-prepend icon-mr"></i> Lịch sử</a>
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
