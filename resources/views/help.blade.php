@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @foreach ($users as $user)
                <div class="card" style="margin-bottom: 10px;">
                    <div class="card-header"> 
                            @IF($user->role == 'doctor')
                                <span class="badge badge-pill badge-secondary">Доктор</span>
                            @ELSEIF($user->role == 'psychologist')
                                <span class="badge badge-pill badge-secondary">Психолог</span>
                            @ELSEIF($user->role == 'rehabilitologist')
                                <span class="badge badge-pill badge-secondary">Реабилитолог</span>
                            @ENDIF
                            {{ $user->name }}
                    </div>

                    <div class="card-body">
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
