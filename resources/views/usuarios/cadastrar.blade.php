{{-- views/animais/cadastrar.blade.php --}}

@extends('base')

@section('titulo', 'Cadastrar | Usuário')

@section('conteudo')
<p>Preencha o formulário</p>

@if($errors->any())
<div>
    <h4>Deu ruim</h4>
    @foreach($errors->all() as $erro)
        <p>{{ $erro }}</p>
    @endforeach
</div>  
@endif

<form method="post" action="{{ route('usuarios.gravar') }}" class="p-10 bg-white rounded shadow-xl">
    @csrf
    <label class="block text-sm text-gray-600 mt-2" for="name">Nome</label>
    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="text" name="name" placeholder="Nome" value="{{ old('name') }}">
    <br>
    <label class="block text-sm text-gray-600 mt-2" for="email">E-mail</label>
    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="email" name="email" placeholder="E-mail" value="{{ old('email') }}">
    <br>
    <label class="block text-sm text-gray-600 mt-2" for="username">Username</label>
    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="text" name="username" placeholder="Username" value="{{ old('username') }}">
    <br>
    <label class="block text-sm text-gray-600 mt-2" for="password">Senha</label>
    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="password" name="password" placeholder="Senha" value="{{ old('password') }}">
    <br>
    <label class="block text-sm text-gray-600 mt-2" for="password">Admin</label>
    <select class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="admin">
        <option value="0">Não</option>
        <option value="1">Sim</option>
    </select>
    <br>
    <div class="mt-6">
        <input class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit" value="Gravar">
    </div>
</form>
@endsection