@extends('layouts.app')

@section('content')
    <div class="container">
{{--     formulario de cadastro de curriculo   --}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Cadastro de Curriculo</div>
                    <div class="card-body">
                        <form action="{{route('curriculo.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" id="nome" class="form-control">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
