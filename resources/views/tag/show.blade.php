@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center">
                    <h1 class="m-0 mr-2"> Тег {{$tag->title}}</h1>
                    <a href="{{route('tag.edit',$tag->id)}}" class="text-success"><i
                            class="fas fa-pen"></i></a>
                    <form method="POST"
                          action="{{route('tag.delete',$tag->id)}}">
                        @csrf
                        @method('DELETE')
                        <button class="border-0 bg-transparent">
                            <i class="far fa-trash-alt text-danger" role="button"></i>
                        </button>

                    </form>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{route('tag.index')}}">Теги</a></li>
                        <li class="breadcrumb-item active">Тег</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-1 mb-3">
                </div>
            </div>
            <div class="row">
                <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Название</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">{{$tag->id}}</td>
                                    <td class="text-center">{{$tag->title}}</td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
