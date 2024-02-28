@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Цвета</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item active">Цвета</li>
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
                    <a href="{{route('color.create')}}" type="button" class="btn btn-block btn-primary">Добавить</a>
                </div>
            </div>

            <div class="row">
                <div class="card-body table-responsive p-0">
                    @if(count($colors) > 0)
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Название</th>
                            <th class="text-center">Цвет</th>
                            <th colspan="3" class="text-center">Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($colors as $color)
                        <tr>
                            <td class="text-center">{{$color->id}}</td>
                            <td class="text-center">{{$color->title}}</td>
                            <td class="text-center"><div style="width: 16px; height: 16px; background-color: {{'#' . $color->title}}"></div></td>
                            <td class="text-center"><a
                                    href=" {{route('color.show',$color->id)}}"><i
                                        class="fas fa-eye"></i></a></td>
                            <td class="text-center"><a
                                    href="{{route('color.edit',$color->id)}}"
                                    class="text-success"><i class="fas fa-pen"></i></a></td>
                            <td class="text-center">
                                <form method="POST"
                                      action="{{route('color.delete',$color->id)}}">
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
