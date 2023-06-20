@extends('layouts.app')
@section('page')
    Index
@endsection
@section('content')
@if (session()->has('success'))
<div class="container-sm">
    <div class="alert alert-success" role="alert">
        <strong>{{session('success')}}</strong>
    </div>
</div>
    
    
@endif   

   
<div class="container-sm">
    
        <div class="card">
            <div class="card-header">
                <h4><i class="fa fa-filter" aria-hidden="true"></i>FILTER</h4>
            </div>
            <div class="card-body">
              
                <div class="list-group">
                    <div class="mb-3">
                

                        <div class="btn-group">
                        <button class="btn btn-secondary dropdown-toggle " style="width:450px; " type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                        EMAIL
                            </button>
                            <div class="dropdown-menu dropdown-menu-start" style="width:450px;" aria-labelledby="triggerId">
                                @foreach ($employes as $employe)
                                
                            <a href="{{route('employes.index',$employe->email)}}" class='dropdown-item'><option>{{$employe->email}}</option></a>
                            @endforeach
                                
                            </div>
                        </div>
                        
                    </div>
                   
                </div>
                                        
            </div>
            
            </div>        
        
      
    </div>
    

        
<div class="container-sm mt-3" style="position: relative;">
    <div class="table-responsive">
        <table class="table table-light">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOM</th>
                    <th scope="col">PRENOM</th>
                    <th scope="col">ADRESS</th>
                    <th scope="col">DATE NAISSANCE</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">TELEPHON</th>
                    <th scope="col">SDU</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employes as $employe)
                    
                <tr class="">
                    <td scope="row">{{$employe->id}}</td>
                    <td>{{$employe->nom}}</td>
                    <td>{{$employe->prenom}}</td>
                    <td>{{$employe->adresse}}</td>
                    <td>{{$employe->date_naissance}}</td>
                    <td>{{$employe->email}}</td>
                    <td>{{$employe->telephone}}</td>
                    <td><a  id="buttons" class="btn btn-success btn-sm" href="{{route('employes.show',$employe->id)}}" role="button">Veu</a>
                      
                        <a  id="buttons" class="btn btn-success btn-sm" href="{{route('employes.verification',$employe->id)}}"  role="button">Supprime</a>
                        <a  id="buttons" class="btn btn-success btn-sm" href="{{route('employes.edit',$employe->id)}}"  role="button">Modefier</a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        
        
</div>

@endsection
