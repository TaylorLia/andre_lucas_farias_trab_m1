@extends('produtos.layout')

@section('title',__($produto->tipo . ': Andre Lucas Farias'))

@push('css')
<style>
table{
    font-family: Verdana,sans-serif;
    border: 1px solid #ccc;
    margin: 20px 0;
}
table th{
    padding:10px;
    font-weight: normal;
}
</style>
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between w-100">
                        <span><span class="text-info">{{$produto->tipo}}</span>: (@lang('Andre Lucas Farias'))</span>
                        <a href="{{ url('prod') }}" class="btn-info btn-sm">
                            <i class="fa fa-arrow-left"></i> @lang('Voltar')
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif


                    <table class="w3-table-all notranslate" width="100%" border="1">
                        <tbody>
                        <tr>
                          <th align="left"><strong>ID:</strong></th>
                          <th align="left">{{$produtos->id}}</th>
                        </tr>
                        <tr>
                            <th align="left"><strong>@lang('Tipo')</strong>:</th>
                            <th align="left">{{$produtos->tipo}}</th>
                        </tr>
                        <tr>
                            <th align="left"><strong>@lang('Modelo')</strong>:</th>
                            <th align="left">{{$produtos->modelo}}</th>
                          </tr>
                          <tr>
                            <th align="left"><strong>@lang('Marca')</strong>:</th>
                            <th align="left">{{$produtos->marca}}</th>
                        </tr>
                        <tr>
                            <th align="left"><strong>@lang('Preço de venda')</strong>:</th>
                            <th align="left">{{$produtos->precoVenda}}</th>
                          </tr>
                          <tr>
                            <th align="left"><strong>@lang('Cor')</strong>:</th>
                            <th align="left">{{$produtos->cor}}</th>
                        </tr>
                        <tr>
                            <th align="left"><strong>@lang('Peso')</strong>:</th>
                            <th align="left">{{$produtos->peso}}</th>
                          </tr>
                          <th align="left"><strong>@lang('Descrição')</strong>:</th>
                            <th align="left">{{$produtos->descricao}}</th>
                          </tr>
                          <tr>
                            <th align="left"><strong>@lang('Adicionado')</strong>:</th>
                            <th align="left">{{$produtos->created_at}}</th>
                          </tr>
                          <tr>
                              <th align="left"><strong>@lang('Atualizado')</strong>:</th>
                              <th align="left">{{$produtos->updated_at}}</th>
                          </tr>
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