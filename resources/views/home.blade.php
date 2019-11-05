@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($post as $ps)
            <div class="card">
                <div class="card-header">
                    <img src="{{asset('img/python.png')}}" class="circle" width="20" height="20">&nbsp;<b style="color:black;">{{ \App\User::where(['id' => $ps->user_id])->first()->name }}</b>
                </div>
                <div class="card-body">

                    <center><img src="{{ str_replace('public/', '', $ps->image) }}" alt="" style="width: 100%;" height="320"></center>
                </div>
                <div class="card-footer text-muted">
                    <b style="color:black;">{{ \App\User::where(['id' => $ps->user_id])->first()->email }}</b><br>
                    {{$ps->caption}}
                </div>
            </div>
            <br><br>
            @endforeach
            {{-- <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    You are logged in!
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection