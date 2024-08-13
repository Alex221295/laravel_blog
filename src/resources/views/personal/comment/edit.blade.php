@extends('personal.layouts.main')
@section('content')
    <?php /**  @var \App\Models\Comment $comment */ ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Update comment</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('personal.index')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('personal.comment.index')}}">Comments</a></li>
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
                    <div class="row">
                        <div class="col-12">
                            <form method="post" action="{{route('personal.comment.update',$comment->id)}}">
                                @csrf
                                @method('patch')
                                <div class="form-group mt-4">
                                <textarea id="summernote" class="form-control  w-400" placeholder="Add content"
                                          aria-label="Add message" name="message">
                                    {{$comment->message}}
                                </textarea>
                                </div>
                                @error('message')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                                @enderror
                                <input type="submit" class="btn btn-block btn-primary mt-4 w-25" value="update">
                            </form>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
