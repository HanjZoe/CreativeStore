@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center">
                    <h1 class="m-0 mr-2">Пользователь {{$user->title}}</h1>
                    <a href="{{route('user.edit',$user->id)}}" class="text-success"><i
                            class="fas fa-pen"></i></a>
                    <form method="POST"
                          action="{{route('user.delete',$user->id)}}">
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
                        <li class="breadcrumb-item"><a href="{{route('user.index')}}">Пользователи</a></li>
                        <li class="breadcrumb-item active">Пользователи</li>
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
                                <th class="text-center">Имя</th>
                                <th class="text-center">Фамилия</th>
                                <th class="text-center">Отчество</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Возраст</th>
                                <th class="text-center">Адрес</th>
                                <th class="text-center">Пол</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">{{$user->id}}</td>
                                    <td class="text-center">{{$user->name}}</td>
                                    <td class="text-center">{{$user->surname}}</td>
                                    <td class="text-center">{{$user->patronymic}}</td>
                                    <td class="text-center">{{$user->email}}</td>
                                    <td class="text-center">{{$user->age}}</td>
                                    <td class="text-center">{{$user->address}}</td>
                                    <td class="text-center">{{$user->genderTitle}}</td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
