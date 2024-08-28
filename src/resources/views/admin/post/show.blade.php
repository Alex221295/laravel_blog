@extends('admin.layouts.main')
@section('content')
    <?php /**  @var \App\Models\Post $post */ ?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-2 ">Post {{$post->title}}</h1>
                        <a href="{{route('admin.post.edit',$post->id)}}"><i class="fas fa-pen"></i></a>
                        <form action="{{route('admin.post.destroy',$post->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="border-0 bg-transparent">
                                <i class="fas fa-trash text-danger" role="button"></i>
                            </button>
                        </form>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.post.index')}}">Posts</a></li>
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
                <div class="col-12">
                    <!-- /.row -->
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>

                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Content</th>
                                        <th>Category</th>
                                    </tr>

                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{$post->id}}</td>
                                        <td>{{$post->title}}</td>
                                        <td>{{$post->created_at}}</td>
                                        <td><span class="tag tag-success">Approved</span></td>
                                        <td>{{$post->content}}</td>
                                        <td>{{$post->category_id}}</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <a href="{{route('admin.post.index')}}">Back</a>

                </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
