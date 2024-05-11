@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать пользователя</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{route('user.index')}}">Пользователи</a></li>
                        <li class="breadcrumb-item"><a href="{{route('user.show', $user)}}">Пользователь</a></li>
                        <li class="breadcrumb-item active">Редактировать пользователя</li>
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
                <form action="{{route('user.update',$user)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input name="name" type="text" class="form-control" value="{{$user->name}}" placeholder="Имя">
                        @error('name')
                        <div class="text-danger"> {{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input name="surname" type="text" class="form-control" value="{{$user->surname}}" placeholder="Фамилия">
                        @error('surname')
                        <div class="text-danger"> {{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input name="patronymic" type="text" class="form-control" value="{{$user->patronymic}}"  placeholder="Отчество">
                        @error('patronymic')
                        <div class="text-danger"> {{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input name="email" type="text" class="form-control" value="{{$user->email}}" placeholder="Email">
                        @error('email')
                        <div class="text-danger"> {{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <section name = "gender" class="custom-select form-control">
                            <option disabled selected>Пол</option>
                            <option {{ $user->gender == 1 ? ' selected' : '' }} value="1">Муж</option>
                            <option {{ $user->gender == 2 ? ' selected' : '' }} value="2">Жен</option>
                        </section>
                    </div>

                    <div class="form-group">
                        <input name="age" type="number" value="{{$user->age}}" class="form-control" placeholder="Возраст">
                        @error('age')
                        <div class="text-danger"> {{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input name="address"  value="{{$user->address}}" type="text" class="form-control" placeholder="Адрес">
                        @error('address')
                        <div class="text-danger"> {{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Изменить">
                    </div>

                </form>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
