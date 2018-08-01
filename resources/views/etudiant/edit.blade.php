@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            @include('etudiant._file-ariane')
            
            <div class="panel panel-default">
                <div class="panel-heading">{{$titre}}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @include('etudiant._form')

                </div>
            </div>
        </div>
    </div>
</div>
@endsection