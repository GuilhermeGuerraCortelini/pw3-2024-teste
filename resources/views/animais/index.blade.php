{{-- resources/views/animais/index.blade.php --}}

@extends('base')

@section('titulo', 'Animais para adoção')

@section('conteudo')
<p>
    <a class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded " href="{{ route('animais.cadastrar') }}"><i class="fas fa-plus mr-2"></i>Cadastrar animal</a>
</p>
<p>Veja nossa lista de animais para adoção</p>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>

    @foreach ($animais as $animal)
    <tr>
        <td>{{ $animal['nome'] }}</td>
        <td>{{ $animal['idade'] }}</td>
        <td><a href="{{ route('animais.apagar', $animal['id']) }}">Apagar</a></td>
    </tr>
    @endforeach

</table>
@endsection