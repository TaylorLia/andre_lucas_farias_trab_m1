@extends('produtos.layout')

@section('title',__('Alterar Produtos (Andre Lucas Farias)'))

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
                        <span>@lang('Alterar Produtos (Andre Lucas Farias)')</span>
                        <a href="{{ url('prod') }}" class="btn-info btn-sm">
                            <i class="fa fa-arrow-left"></i> @lang('Voltar')
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {!! Form::open(['action' => ['PacienteController@update',$paciente->id], 'method' => 'PUT'])!!}

                    <div class="form-group">
                        {!! Form::label(__('Tipo do Produto:')) !!}
                        {!! Form::text("tipo", $produto->tipo ,["id" => "tipo", "class"=>"form-control mmss","required"=>"required"]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label(__('Modelo do Produto:')) !!}
                        {!! Form::text("modelo", $produto->modelo ,["id" => "modelo", "class"=>"form-control mmss","required"=>"required"]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label(__('Marca do Produto:')) !!}
                        {!! Form::text("marca", $produto->marca ,["id" => "marca", "class"=>"form-control mmss","required"=>"required"]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label(__('Preço de Venda:')) !!}
                        {!! Form::text("precoVenda", $produto->precoVenda ,["id" => "precoVenda", "class"=>"form-control mmss","required"=>"required"]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label(__('Cor do Produto:')) !!}
                        {!! Form::text("cor", $produto->cor ,["id" => "cor", "class"=>"form-control mmss","required"=>"required"]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label(__('Peso do Produto:')) !!}
                        {!! Form::text("peso", $produto->peso ,["id" => "peso", "class"=>"form-control mmss","required"=>"required"]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label(__('Descrição do Produto:')) !!}
                        {!! Form::text("descricao", $produto->descricao ,["id" => "descricao", "class"=>"form-control mmss","required"=>"required"]) !!}
                    </div>

                    <div class="well well-sm clearfix">
                        <button class="btn btn-success pull-right" title="@lang('Salvar')"
                            type="submit">@lang('Alterar')</button>
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script language='JavaScript'>
    $(".mmss").focusout(function () {
        var id = $(this).attr('id');
        var vall = $(this).val();
        var regex = /[^0-9]/gm;
        const result = vall.replace(regex, ``);
        $('#' + id).val(result);
    });
</script>
@endpush