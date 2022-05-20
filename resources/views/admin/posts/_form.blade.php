<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-7">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Thông tin chung</h5>
                <hr>
                <div class="form-group row mb-3">
                    <label for="name" class="col-sm-3 col-form-label">Tên bài viết</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="name" placeholder="" name="name"
                               value="{{old('name', $post['name'])}}">
                        @if ($errors->has('name'))
                            <div class="mt-1 notification-error">
                                {{$errors->first('name')}}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="parent_id" class="col-sm-3 col-form-label">Danh mục</label>
                    <div class="col-sm-9">
                        @if(isset($list_cates))
                        <select class="js-example-basic-multiple select2-hidden-accessible" multiple=""
                                name="categories[]"
                                style="width:100%">
                            @foreach($categories as $category)
                                <option {{ (in_array($category['id'], $list_cates)) ? 'selected' : '' }}
                                    value="{{$category['id']}}">{{$category['name']}}</option>
                            @endforeach
                        </select>
                        @else
                            <select class="js-example-basic-multiple select2-hidden-accessible" multiple=""
                                    name="categories[]"
                                    style="width:100%">
                                @foreach($categories as $category)
                                    <option {{ (collect(old('categories'))->contains($category['id'])) ? 'selected':'' }}
                                            value="{{$category['id']}}">{{$category['name']}}</option>
                                @endforeach
                            </select>
                        @endif
                        @if ($errors->has('categories'))
                            <div class="mt-1 notification-error">
                                {{$errors->first('categories')}}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="parent_id" class="col-sm-3 col-form-label">Điểm đến</label>
                    <div class="col-sm-9">
                        @if(isset($list_des))
                            <select class="js-example-basic-multiple select2-hidden-accessible" multiple=""
                                    name="destinations[]"
                                    style="width:100%">
                                @foreach($destinations as $destination)
                                    <option {{ (in_array($destination['id'], $list_des)) ? 'selected' : '' }}
                                        value="{{$destination['id']}}">{{$destination['name']}}</option>
                                @endforeach
                            </select>
                        @else
                            <select class="js-example-basic-multiple select2-hidden-accessible" multiple=""
                                    name="destinations[]"
                                    style="width:100%">
                                @foreach($destinations as $destination)
                                    <option {{ (collect(old('destinations'))->contains($destination['id'])) ? 'selected':'' }}
                                            value="{{$destination['id']}}">{{$destination['name']}}</option>
                                @endforeach
                            </select>
                        @endif
                        @if ($errors->has('destinations'))
                            <div class="mt-1 notification-error">
                                {{$errors->first('destinations')}}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="form-group  row mb-3">
                    <label class="col-sm-3 col-form-label" for="description">Mô tả</label>
                    <div class="col-sm-9">
                    <textarea  rows="5" cols="70" id="description" class="form-control"
                               name="description">{!! old('description', $post['description']) !!}</textarea>
                    @if ($errors->has('description'))
                        <div class="mt-1 notification-error">
                            {{$errors->first('description')}}
                        </div>
                    @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Nội dung</h5>
                <hr>
                <div class="form-group">
                    <textarea  rows="5" cols="70" id="content" class="form-control content"
                               name="content">{!! old('content', $post['content']) !!}</textarea>
                    @if ($errors->has('content'))
                        <div class="mt-1 notification-error">
                            {{$errors->first('content')}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Chức năng</h5>
                <hr>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary me-2" name="type_submit" value="save&default">Lưu bản nháp</button>
                    <button type="submit" class="btn btn-success me-2" name="type_submit" value="save&send">Gửi duyệt</button>
                    <a href="{{route('posts.index')}}" class="btn btn-dark">Quay lại</a>
                </div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">Ảnh đại diện</h5>
                <hr>
                <div class="form-group">
                    <div class="upload_image" data-name="avatar">
                        <input type="hidden" class="avatar" name="avatar" value="{{old('avatar', $post['avatar'])}}">
                        <img src="{{$post['avatar'] ? old('avatar', $post['avatar']) : (old('avatar') ? old('avatar') : '/assets/images/department.jpg')}}" width="180px" alt="" class="image-avatar">
                    </div>
                    @if ($errors->has('avatar'))
                        <div class="mt-1 notification-error">
                            {{$errors->first('avatar')}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
