<div class="row">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Thông tin chung</h5>
                    <hr>
                    <div class="form-group row mb-3">
                        <label for="title_font" class="col-sm-3 col-form-label">Tên danh mục</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" placeholder="" name="name" value="{{old('name', $category['name'])}}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="parent_id" class="col-sm-3 col-form-label">Danh mục</label>
                        <div class="col-sm-9">
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="">--Root--</option>
                                @foreach($categories as $key => $value)
                                    <option value="{{$value['id']}}">
                                    @php
                                    $str = '';
                                    for($i = 0; $i< $value->level; $i++){
                                        echo $str;
                                        $str.='-- ';
                                    }
                                    @endphp
                                    {{$value['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="type" class="col-sm-3 col-form-label">Thể loại</label>
                        <div class="col-sm-9">
                            <select name="type" id="type" class="form-control">
                                <option value="">Chọn</option>
                                <option {{$category['type'] == 'news' ? 'selected' : ''}} value="news">Tin tức</option>
                                <option {{$category['type'] == 'activities' ? 'selected' : ''}} value="activities">Lĩnh
                                    vực hoạt động
                                </option>
                                <option {{$category['type'] == 'project' ? 'selected' : ''}} value="project">Dự án
                                </option>
                                <option {{$category['type'] == 'system' ? 'selected' : ''}} value="system">Hệ thống
                                    HPL
                                </option>
                                <option {{$category['type'] == 'introduces' ? 'selected' : ''}} value="introduces">Giới
                                    thiệu chung
                                </option>
                                <option {{$category['type'] == 'recruit' ? 'selected' : ''}} value="recruit">Tuyển
                                    dụng
                                </option>
                                <option {{$category['type'] == 'journal' ? 'selected' : ''}} value="journal">Tạp chí
                                </option>
                                <option {{$category['type'] == 'contact' ? 'selected' : ''}} value="contact">Liên hệ
                                </option>
                                <option {{$category['type'] == 'events' ? 'selected' : ''}} value="events">Sự kiện
                                </option>
                            </select>
                            @if ($errors->has('type'))
                                <div class="mt-1 notification-error">
                                    {{$errors->first('type')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="title" class="col-sm-3 col-form-label">Tiêu đề</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="title" placeholder="" name="title" value="">
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="serial" class="col-sm-3 col-form-label">Thứ tự</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="serial" placeholder="" name="serial" value="">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="parent_id" class="col-sm-3 col-form-label">Ngôn ngữ</label>
                        <div class="col-sm-9">
                            <img width="30px" src="/assets/images/vietnam.png" alt="">
                        </div>
                    </div>
                </div>

            </div>
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">Mô tả</h5>
                    <hr>
                    <div class="form-group">
                        <textarea class="form-control content"
                                  name="description">{!! $category['description'] !!}</textarea>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Chức năng</h5>
                    <hr>
                    <div class="form-check form-check-flat form-check-primary mb-4">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input"
                                   {{$category['status'] ? "checked" : ''}} value="{{$category['status']}}" name="status">
                            Trạng thái <i class="input-helper"></i></label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary me-2" value="save&amp;exit">Lưu</button>
                        <a href="{{route('categories.index')}}" class="btn btn-dark">Quay lại</a>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Ảnh đại diện</h5>
                    <hr>
                    <div class="form-group">
                        <div class="upload_image" data-name="avatar">
                            <input type="hidden" class="avatar" name="avatar" value="">
                            <img src="/assets/images/department.jpg" width="180px" alt="" class="image-avatar">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>

