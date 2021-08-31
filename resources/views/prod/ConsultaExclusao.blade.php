@extends('produtos.layout')

@section('title',__('(Andre Lucas Farias)'))

@push('css')
<style>
    /* Personalizar layout*/
</style>
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between w-100">
                        <span>@lang('(Listagem de produtos)')</span>
                        <a href="{{ url('prod/InclusaoNovosProdutos') }}" class="btn-primary btn-sm">
                            <i class="fa fa-plus"></i> @lang('Novo Produto')
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>@lang('Tipo')</td>
                                <td>@lang('Modelo')</td>
                                <td>@lang('marca')</td>
                                <td>@lang('precoVenda')</td>
                                <td>@lang('cor')</td>
                                <td>@lang('peso')</td>
                                <td>@lang('descricao')</td>
                                <td colspan="3" class="text-center">@lang('Ações')</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pacientes as $paciente)
                            <tr>
                                <td>{{$paciente->id}}</td>
                                <td>{{$paciente->tipo}}</td>
                                <td>{{$paciente->modelo}}</td>
                                <td>{{$paciente->marca}}</td>
                                <td>{{$paciente->precoVenda}}</td>
                                <td>{{$paciente->cor}}</td>  
                                <td>{{$paciente->peso}}</td>
                                <td>{{$paciente->descricao}}</td>  
                                <td class="text-center p-0 align-middle" width="70">
                                    <a href="{{ route('pacientes.show', $paciente->id)}}"
                                        class="btn btn-info btn-sm">@lang('Visualizar')
                                    </a>
                                </td>
                                <td class="text-center p-0 align-middle" width="70">
                                    <a href="{{ route('pacientes.edit', $paciente->id)}}"
                                        class="btn btn-primary btn-sm">@lang('Alterar')
                                    </a>
                                </td>
                                <td class="text-center p-0 align-middle" width="70">
                                    <form action="{{ route('pacientes.destroy', $paciente->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit">Excluir</button>
                                    </form>
                                </td>
                            </tr>   
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    // Script personalizado
</script>
@endpush