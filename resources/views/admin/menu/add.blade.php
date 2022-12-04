@extends('admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')

    <form action="" method="POST" style="background:#bee5eb">
        <div class="card-body">
            <div class="form-group">
                <label for="menu">Tên Danh Mục</label>
                <input type="text" name="name" class="form-control"  placeholder="Nhập tên danh mục">
            </div>

            <div class="form-group">
                <label >Danh Mục</label>
                <select class="form-control" name="parent_id" >
                    <option value="0" >Danh Mục Cha</option>
                    @foreach ( $menus as $menu )
                        <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label >Mô Tả</label>
                <textarea name="" description class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label >Mô tả Chi Tiết</label>
                <textarea name="content" id="content" class="form-control" ></textarea>
            </div>

            <div class="form-group">
                <label for="menu">Ảnh Danh Mục</label>
                <input type="file"  class="form-control" id="upload">
                <div id="image_show">

                </div>
                {{--                //--}}
                <input type="hidden" name="thumb" id="thumb">
            </div>

            <!-- radio -->
            <div class="form-group">
                <label >Kích Hoạt</label><br>
                <div >
                    <input value="1" type="radio" id="active" name="active" checked="">
                    <label for="active" class="custom-control-label">Có</label>
                </div>
                <div >
                    <input value="0" type="radio" id="no_active" name="active">
                    <label for="no_active" class="custom-control-label">Không </label>
                </div>
            </div>

        </div>

        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-out">Tạo Danh Mục</button>
        </div>
        @csrf
    </form>

@endsection

{{-- khung soan thao --}}
@section('footer')
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace('content');
    </script>
@endsection
