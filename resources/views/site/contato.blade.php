@extends('site.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">
                @component('site.layouts._components.form_contato', ['classe' => 'borda-preta'])
                <p>A nossa equipe analisará a mensagem e retornará o mais brevemente possível.</p>
                <p>Nosso tempo médio de resposta é 48 horas.</p>
                @endcomponent
            </div>
        </div>
    </div>

    @include('site.layouts._partials.base')

@endsection
