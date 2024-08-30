{{-- resources/views/animais/index.blade.php --}}

@extends('base')

@section('titulo', 'Animais para adoção')

@section('conteudo')
<p>
    <a class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
        href="{{ route('animais.cadastrar') }}"><i class="fas fa-plus mr-2"></i>Cadastrar animal</a>
</p>

<p class="text-xl flex items-center">
    <i class="fas fa-list mr-3 m-5"></i> Veja nossa lista de animais para adoção
</p>

<table class="min-w-full bg-white">
    <thead class="bg-gray-800 text-white">
        <tr>
            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Nome</th>
            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Idade</th>
            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Ação</th>
        </tr>
    </thead>

    <tbody class="text-gray-700">
        @foreach ($animais as $animal)
            <tr @if($loop->even) class="bg-gray-200" @endif>
                <td class="w-1/3 text-left py-3 px-4">{{ $animal['nome'] }}</td>
                <td class="w-1/3 text-left py-3 px-4">{{ $animal['idade'] }}</td>
                <td class="w-1/3 text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662"><a href="{{ route('animais.apagar', $animal['id']) }}" class="py-3 px-2  bg-red-500 text-white rounded-full"><i class="fas fa-trash mr-1"></i>Apagar</a></a></td>        
            </tr>
        @endforeach
    </tbody>
</table>

<!-- <table border="1">
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