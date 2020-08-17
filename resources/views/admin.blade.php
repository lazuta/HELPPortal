@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @IF(!empty($users))
                @foreach ($users as $user)
                    <div class="card">
                        <p>{{$user->name}}</p>
                        <p>{{$user->description}}</p>
                        <p>{{$user->role->role_ru}}</p>
                        <form action="{{ route('admin.ok', $user->id)}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">OK</button>
                        </form>
                        <form action="{{ route('admin.no', $user->id)}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">NO</button>
                        </form>
                    </div>
                @endforeach
            @ENDIF
        </div>
    </div>
</div>
@endsection
