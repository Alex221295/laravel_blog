@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Update user</h1>
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
                            <form method="post" action="{{route('admin.user.update',$user->id)}}">
                                @csrf
                                @method('patch')
                                <input type="text" name="name" class="form-control w-400" value="{{$user->name}}" placeholder="enter name"
                                       aria-label="Add user">
                                @error('name')
                                <div class="text-danger">
                                {{$message}}
                                </div>
                                @enderror
                                <input type="email" name="email" class="form-control w-400" value="{{$user->email}}" placeholder="enter email"
                                       aria-label="Add email">
                                @error('email')
                                <div class="text-danger">
                                {{$message}}
                                </div>
                                @enderror
                                <input type="submit" class="btn btn-block btn-primary mt-4 w-25" value="update">
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
