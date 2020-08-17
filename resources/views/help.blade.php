@extends('layouts.app')

@section('content')


<div class="container">

    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Начните воодить" aria-label="Начните воодить" aria-describedby="basic-addon2" id="search">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button">Поиск</button>
        </div>
      </div>

    <div class="row justify-content-center">
        <div class="col-md-8" id="cards">

            @foreach ($users as $user)
                <div class="card" style="margin-bottom: 10px;">
                    <div class="card-header">
                            @IF($user->role[0]->role_ru)
                            <span class="badge badge-pill badge-secondary">{{ $user->role[0]->role_ru }}</span>
                            @ENDIF

                            {{ $user->name }}
                    </div>
                    <div class="card-body">
                        @IF($user->description)
                            <h6 class="card-title">Могу Вам помочь:</h6>

                            <p>{{ $user->description }}</p>
                        @ENDIF
                    </div>
                    <div class="card-footer">
                        <h6 class="card-title">Способы связи:</h6>

                        @IF(!empty($user->phone_b))
                            <div>
                                <a href="tel:{{$user->phone}}"><i class="fas fa-phone"></i> {{$user->phone}}</a>
                            </div>
                        @ENDIF

                        @IF(!empty($user->email_b))
                            <div>
                                <a href="mailto:{{$user->email}}"><i class="fas fa-envelope-open-text"></i> {{$user->email}}</a>
                            </div>
                        @ENDIF

                        @IF(!empty($user->telegram_b))
                            <div>
                                <i class="fab fa-telegram"></i> {{$user->phone}}
                            </div>
                        @ENDIF
                        
                        @IF(!empty($user->viber_b))
                            <div>
                                <i class="fab fa-viber"></i> {{$user->phone}}
                            </div>
                        @ENDIF                        

                        @IF(!empty($user->whatsapp_b))
                            <div>
                                <i class="fab fa-whatsapp"></i> {{$user->phone}}
                            </div>
                        @ENDIF
                    </div>
                </div>
            @endforeach
                        
        </div>
    </div>
</div>
@endsection
