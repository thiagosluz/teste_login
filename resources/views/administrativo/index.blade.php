@extends('layouts.app')

@section('content')
<div class="container">

{{--    botão de novo curriclo --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Cadastro de Curriculo</div>
                <div class="card-body">
                    <a href="{{route('curriculo.create')}}" class="btn btn-primary">Novo Curriculo</a>
                </div>
            </div>
        </div>
    </div>

{{--    tabela com todos os curriculos --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Curriculos</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>Criado em:</th>
                                <th>Ações</th>

                            </tr>
                        </thead>
                        <tbody>

                            @forelse($curriculos as $curriculo)
                            <tr>
                                <td>{{ $curriculo->name }}</td>
                                <td>{{ $curriculo->telefone }}</td>
                                <td>{{ $curriculo->created_at->format('d/m/Y') }}</td>
                                <td>
                                    <a href="{{route('curriculo.show', $curriculo->id)}}" class="btn btn-success">Ver</a>
                                    <a href="{{route('curriculo.edit', $curriculo->id)}}" class="btn btn-primary">Editar</a>

                                    <form action="{{route('curriculo.destroy', $curriculo->id)}}" method="post" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Excluir</button>
                                    </form>

                                </td>


                            </tr>
                            @empty
                            <tr>
                                <td colspan="4">Nenhum curriculo cadastrado</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
