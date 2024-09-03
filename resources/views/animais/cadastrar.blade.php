{{-- views/animais/cadastrar.blade.php --}}

@extends('base')

@section('titulo', 'Cadastrar | Animais para adoção')

@section('conteudo')
<p class="text-xl pb-6 flex items-center">
    <i class="fas fa-list mr-3"></i>Preencha o formulário
</p>


@if($errors->any())
    <div>
        <h4>Deu ruim</h4>
        @foreach($errors->all() as $erro)
            <p>{{ $erro }}</p>
        @endforeach
    </div>
@endif

<!-- <form method="post" action="{{ route('animais.gravar') }}">
    @csrf
    <input type="text" name="nome" placeholder="Nome" value="{{ old('nome') }}">
    <br>
    <input type="number" name="idade" placeholder="Idade" value="{{ old('idade') }}">
    <br>
    <input type="submit" value="Gravar">
</form> -->

<form method="post" enctype="multipart/form-data" action="{{ route('animais.gravar') }}" class="p-10 bg-white rounded shadow-xl">
    @csrf
    <label class="block text-sm text-gray-600" for="name">Nome</label>
    <input type="text" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="nome" placeholder="Nome"
        value="{{ old('nome') }}">
    <br>
    <label class="block text-sm text-gray-600" for="idade">Idade</label>
    <input type="number" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="idade" placeholder="Idade"
        value="{{ old('idade') }}">
    <br>
    <label class="block text-sm text-gray-600" for="imagem">Imagem</label>
    <input type="file" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="imagem" name="imagem" placeholder="Imagem" value="{{ old('imagem') }}">
    <div class="mt-6">
        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Gravar</button>
    </div>
</form>
@endsection