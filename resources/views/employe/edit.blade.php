@extends('layouts.app')
@section('page')
    Update
@endsection
@section('content')
@if (session()->has('success'))

<div class="alert alert-success" role="alert">
    <strong>{{session('success')}}</strong>
</div>


@endif   

<div class="container auth">
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header"><h5>Modifier Employe</h5></div>
              <div class="p-3">
                <form  action="{{route('employes.update',$employe->id)}}" method="POST" >
                  @method('PUT')
                  @csrf
                    
                  
                  
                  @error('nom')
                        
                          <p class="alert-heading text-danger">{{$message}}</p>

                    @enderror

                  <div class="mb-3">
                      <label for="" class="form-label">Nom</label>
                      <input type="text" class="form-control w-75" name="nom" >
                    </div>

                    @error('prenom')
                        
                          <p class="alert-heading text-danger">{{$message}}</p>

                    @enderror
                    <div class="mb-3">
                      <label for="" class="form-label">Prenom</label>
                      <input type="text" class="form-control w-75"  name="prenom" >
                    </div>

                    @error('adress')
                        
                          <p class="alert-heading text-danger">{{$message}}</p>

                    @enderror
                    <div class="mb-3">
                      <label for="" class="form-label">Adress</label>
                      <input type="text" class="form-control w-75"  name="adress" >
                    </div>

                   

                    @error('date_naissance')
                        
                          <p class="alert-heading text-danger">{{$message}}</p>

                    @enderror
                    
                    <div class="mb-3">
                      <label for="" class="form-label">Date Naissance</label>
                      <input type="date" class="form-control w-75"   name="date_naissance" >
                    </div>

                    @error('email')
                        
                    <p class="alert-heading text-danger">{{$message}}</p>

              @enderror

                    <div class="mb-3">
                      <label for="" class="form-label">Email</label>
                      <input type="email" class="form-control w-75" name="email" >
                    </div>

                    <div class="mb-3">
                      <label for="" class="form-label">Telephon</label>
                      <input type="text" class="form-control w-75"   name="telephon" >
                    </div>

                   

                    <div class="d-grid">
                        <button type="submit"  class="btn btn-primary w-75 mx-auto">Ajouter</button>
                    </div>

              </form>

      </div>
    </div>
  </div>
</div>
</div>
@endsection