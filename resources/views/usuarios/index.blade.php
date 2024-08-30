{{-- resources/views/animais/index.blade.php --}}

@extends('base')

@section('titulo', 'Usuários')

@section('conteudo')
<p>
    <a class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
        href="{{ route('usuarios.inserir') }}"><i class="fas fa-plus mr-2"></i>Cadastrar Usuário</a>
</p>


<p class="text-xl flex items-center">
    <i class="fas fa-list mr-3 m-5"></i> Lista de usuários
</p>

<table class="min-w-full bg-white">
    <thead class="bg-gray-800 text-white">
        <tr>
            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">ID</th>
            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Nome</th>
            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Admin</th>
            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Ação</th>
        </tr>
    </thead>

    <tbody class="text-gray-700">
        @foreach ($usuarios as $usuario)
            <tr @if($loop->even) class="bg-gray-200" @endif>
                <td class="w-1/3 text-left py-3 px-4">{{ $usuario->id }}</td>
                <td class="w-1/3 text-left py-3 px-4">{{ $usuario->name }}</td>
                <td class="w-1/3 text-left py-3 px-4">{{ $usuario->email }}</td>
                <td class="w-1/3 text-left py-3 px-4">{{ $usuario->admin ? 'Sim' : 'Não' }}</td>
                <td class="w-1/3 text-left py-3 px-4"><a href="{{ route('usuarios.apagar', $usuario->id) }}" class="py-1 px-2 bg-red-500 text-white rounded-full flex items-center" ><i class="fas fa-trash mr-1"></i>Apagar</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection