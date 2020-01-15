@extends('layouts.app')

@section('content')
<div class="container" class="bg-info">
    <div class="row justify-content-center bg-primary">
        <div class="col-md-8 abnf ">
            <div class="card">
                <div class="card-header" >Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    tu ya estas logueado!
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
