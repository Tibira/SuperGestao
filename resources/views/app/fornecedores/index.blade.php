<h3>Fornecedores</h3>

@isset($fornecedores)

@foreach ($fornecedores as $indice => $fornecedor)
        {{-- @dd($loop) --}}
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? ''}}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? ''}}) {{ $fornecedor['telefone'] ?? '' }}
        <hr>
    @endforeach
@endisset
