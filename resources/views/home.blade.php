@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Личный кабинет</div>

                <div class="card-body">
                    <form action="{{ route('update', Auth::id()) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Статус Вашего предложения
                                @IF($user['status'] == 'X')
                                    <span class="badge badge-secondary">Не активен</span>
                                @ELSEIF($user['status'] == 'work')
                                    <span class="badge badge-info">В работе</span>
                                @ELSEIF($user['status'] == 'active')
                                    <span class="badge badge-success">Активно</span>
                                @ENDIF

                            </label>
                            <select class="form-control form-control-sm" name='status' required>
                                <option>Выберите статус</option>
                                <option value="active">Активно</option>
                                <option value="work">В работе</option>
                                <option value="X">Не активен</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Изменить</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
