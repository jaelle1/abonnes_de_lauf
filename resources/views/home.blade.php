@extends('layouts.app')

@section('content')


                <div class="alert alert-success col-md-6 offset-md-3 text-center text-light fw-bold bg-success" id="timeout">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('vous etes connectés!') }}
                </div>    
                
                <div class="container">
        <div class="row">
            <div class="col-md-6 vous">
                <h1 class=" col-md-12 offset-md-6 text-center mb-3">QUE VOULEZ-VOUS FAIRE?</h1>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row coll">
            <div class="col-md-12 conect ">
                <span class="enre"><a href="{{route('abonne.create') }}">Enregistrer</a></span><br><br>
                <span class="list"><a href="{{route('abonne.index') }}">Lister</a></span><br>

            </div>
            
        </div>
    </div>
@endsection
