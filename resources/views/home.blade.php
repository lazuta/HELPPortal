@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Статус предложения</div>

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

                                @IF(!$user['public'] && $user['status'] == 'active')
                                    <span class="badge badge-success">Заявка на помощь в обработке</span>
                                @ENDIF

                                @IF($user->role->role_ru)
                                    - {{ $user->role->role_ru }}
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

            <div class="card" style="margin-top: 10px">
                <div class="card-header">Информация</div>

                <div class="card-body">
                    <form action="{{ route('update.inf', Auth::id()) }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Направление') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="role" class="form-control @error('role') is-invalid @enderror" required>
                                    <option disabled selected>Выберите ваше направлнеи</option>
                                     @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->role_ru }}</option>
                                     @endforeach
                                </select>
                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="descr" class="col-md-4 col-form-label text-md-right">{{ __('Чем можете помочь') }}</label>

                            <div class="col-md-6">
                                <textarea class="form-control @error('descr') is-invalid @enderror" id="exampleFormControlTextarea1 descr" rows="3" name="descr" value={{ $user->description }}></textarea>
                                @error('descr')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Изменить</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
