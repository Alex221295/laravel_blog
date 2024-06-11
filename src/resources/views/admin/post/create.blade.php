@extends('admin.layouts.main')
@section('content')
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add post</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-4">
                            <form method="post" action="{{route('admin.post.store')}}">
                                @csrf
                                <input type="text" name="title" class="form-control w-400" placeholder="Add title"
                                       aria-label="Add post">
                                @error('title')
                                <div class="text-danger">
                                {{$message}}
                                </div>
                                @enderror
                                <input type="text" name="content" class="form-control mt-4 w-400" placeholder="Add content"
                                       aria-label="Add post">
                                @error('content')
                                <div class="text-danger">
                                {{$message}}
                                </div>
                                    <textarea id="summernote" name="editordata"></textarea>
                                @enderror
{{--                                <select class="form-control mt-4 w-400">--}}
{{--                                    @foreach($getCategory as $categoryForPost)--}}
{{--                                        <option>{{$categoryForPost->id}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                                @error('content')--}}
{{--                                <div class="text-danger">--}}
{{--                                {{$message}}--}}
{{--                                </div>--}}
{{--                                @enderror--}}
                                <input type="submit" class="btn btn-block btn-primary mt-4 w-25" value="Add post">
                            </form>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
