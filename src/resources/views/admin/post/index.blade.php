@extends('admin.layouts.main')
@section('content')
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
                        <div class="input-group mb-3">
                            <a href="{{route('admin.post.create')}}" class="btn btn-block btn-primary">Add
                                post</a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <div class="col-12">
                    <!-- /.row -->
                    @if(isset($getPost))
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">All post</h3>

                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" name="table_search" class="form-control float-right"
                                                   placeholder="Search">

                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>

                                        <tr>
                                            <th>ID</th>
                                            <th>User</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Content</th>
                                            <th colspan="3" class="text-center">Action</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        @foreach($getPost as $post)
                                            <tr>
                                                <td>{{$post->id}}</td>
                                                <td>{{$post->title}}</td>
                                                <td>{{$post->created_at}}</td>
                                                <td><span class="tag tag-success">Approved</span></td>
                                                <td>{{$post->content}}</td>
                                                <td class="text-center">
                                                    <a href="{{route('admin.post.show',$post->id)}}"><i
                                                            class="far fa-eye"></i></a>
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{route('admin.post.edit',$post->id)}}"><i
                                                            class="fas fa-pen"></i></a>
                                                </td>
                                                <td class="text-center">
                                                    <form action="{{route('admin.post.destroy',$post->id)}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="border-0 bg-transparent">
                                                            <i class="fas fa-trash text-danger" role="button"></i>
                                                        </button>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>

                    @endif
                </div><!-- /.container-fluid -->
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
