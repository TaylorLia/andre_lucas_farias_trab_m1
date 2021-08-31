@extends('produtos.layout')

@section('title',__('Incluir Produtos (Andre Lucas Farias)')

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
                        <span>@lang('Incluir Produtos (Andre Lucas Farias)')</span>
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

                    {!! Form::open(['action' =>'ProdutoController@store', 'method' => 'POST'])!!}

                    <div class="form-group">
                        {!! Form::label(__('Tipo do Produto:')) !!}
                        {!! Form::text("tipo", null ,["class"=>"form-control","required"=>"required"]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label(__('Modelo do Produto:')) !!}
                        {!! Form::text("modelo", null ,["class"=>"form-control","required"=>"required"]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label(__('Marca do Produto:')) !!}
                        {!! Form::text("marca", null ,["class"=>"form-control","required"=>"required"]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label(__('Preço de Venda:')) !!}
                        {!! Form::text("precoVenda", null ,["class"=>"form-control","required"=>"required"]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label(__('Cor do Produto:')) !!}
                        {!! Form::text("cor", null ,["class"=>"form-control","required"=>"required"]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label(__('Peso do Produto:')) !!}
                        {!! Form::text("peso", null ,["class"=>"form-control","required"=>"required"]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label(__('Descrição do Produto:')) !!}
                        {!! Form::text("descricao", null ,["class"=>"form-control","required"=>"required"]) !!}
                    </div>

                    <div class="well well-sm clearfix">
                        <button class="btn btn-success pull-right" title="@lang('Salvar')"
                            type="submit">@lang('Incluir')</button>
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