@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать тег</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{route('tag.index')}}">Теги</a></li>
                        <li class="breadcrumb-item"><a href="{{route('tag.show', $tag)}}">Тег</a></li>
                        <li class="breadcrumb-item active">Редактировать тег</li>
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
                <form action="{{route('tag.update',$tag)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input name="title" type="text" class="form-control" placeholder="Наименование" value="{{$tag->title}}">
                        @error('title')
                        <div class="text-danger"> {{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Создать">
                    </div>

                </form>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
