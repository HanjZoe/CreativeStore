@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Категории</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item active">Категории</li>
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
                    <a href="{{route('category.create')}}" type="button" class="btn btn-block btn-primary">Добавить</a>
                </div>
            </div>

            <div class="row">
                <div class="card-body table-responsive p-0">
                    @if(count($categories) > 0)
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Название</th>
                            <th colspan="3" class="text-center">Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td class="text-center">{{$category->id}}</td>
                            <td class="text-center">{{$category->title}}</td>
                            <td class="text-center"><a
                                    href=" {{route('category.show',$category->id)}}"><i
                                        class="fas fa-eye"></i></a></td>
                            <td class="text-center"><a
                                    href="{{route('category.edit',$category->id)}}"
                                    class="text-success"><i class="fas fa-pen"></i></a></td>
                            <td class="text-center">
                                <form method="POST"
                                      action="{{route('category.delete',$category->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="border-0 bg-transparent">
                                        <i class="far fa-trash-alt text-danger" role="button"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                        <p> Тут пусто<p>
                    @endif
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
