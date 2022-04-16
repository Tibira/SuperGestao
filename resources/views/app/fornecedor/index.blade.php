<h3>Fornecedores</h3>

@isset($fornecedores)
    
    @foreach ($fornecedores as $indice => $fornecedor)
        <h3>Fornecedor: {{ $fornecedor['nome'] }}</h3>
        <br>
        <h3>Status: {{ $fornecedor['status'] }}</h3>
        <br>
        <h3>CNPJ: {{ $fornecedor['cnpj'] ?? ''}}</h3>
        <br>
        <h3>Telefone: ({{ $fornecedor['ddd'] ?? ''}}) {{ $fornecedor['telefone'] ?? '' }}</h3>
    @endforeach
@endisset