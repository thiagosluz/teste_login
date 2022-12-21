@extends('layouts.app')

@section('content')
    <div class="container">

{{--        detalhes do curriculo --}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Detalhes do Curriculo</div>
                    <div class="card-body">
                        <p><strong>Nome: </strong>{{$curriculo->name}}</p>
                        <p><strong>Criado em: </strong>{{$curriculo->created_at->format('d/m/Y')}}</p>
                        <p><strong>Atualizado em: </strong>{{$curriculo->updated_at->format('d/m/Y')}}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
