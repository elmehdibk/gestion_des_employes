@extends('layouts.app')
@section('page')
    Veu
@endsection
@section('content')
        <div class="card">
            <div class="card-header">
                Vue
            </div>
            <div class="card-body">
                <h4 class="card-title">{{$employe->email}}</h4>
                
            </div>
            
        </div>

@endsection