@extends('personal.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Comments</h1>
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
                    <div class="col-lg-3 col-6">
                    </div>
                    <div class="col-12">
                        @if(isset($getComments))

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">All comments</h3>

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
                                        <th>Message</th>
                                        <th colspan="2" class="text-center">Action</th>
                                    </tr>

                                    </thead>
                                    <tbody>
                                    @foreach($getComments as $comment)
                                        <tr>
                                            <td>{{$comment->id}}</td>
                                            <td>{{$comment->message}}</td>
                                            <td class="text-center">
                                                <a href="{{route('personal.comment.edit',$comment->id)}}"><i
                                                        class="fas fa-pen"></i></a>
                                            </td>
                                            <td class="text-center">
                                                <form action="{{route('personal.comment.destroy',$comment->id)}}"
                                                      method="post">
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
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
        @endif
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
@endsection
