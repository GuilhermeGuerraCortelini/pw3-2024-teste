<?php

namespace App\Http\Controllers;

use App\Mail\AnimalCadastrado;
use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AnimaisController extends Controller
{
    public function index() {
        $dados = Animal::get(); 
        // onlyTrashed - Só o que foi pro lixo
        // somente get() - Acesso normal aos não apagados
        // withTrashed - Com apagados
        
        return view('animais.index', [
            'animais' => $dados,
        ]);
    }

    public function cadastrar() {
        return view('animais.cadastrar');
    }

    public function gravar(Request $form) {
        $img = $form->file('imagem')->store('animais', 'imagens'); // nome da pasta, nome do disco

        // dd($form); 
        $dados = $form->validate([
            'nome' => 'required|min:3',
            'idade' => 'required|integer',
            'imagem' => 'required'
        ]);

        $dados['imagem'] = $img;
        
        #Animal::create($dados);
        Mail::to('alguem@batata.com')->send(new AnimalCadastrado());
        return;
        #return redirect()->route('animais');
    }

    public function apagar(Animal $animal) {
        return view('animais.apagar', [
            'animal' => $animal,
        ]);
    }

    public function deletar(Animal $animal) {
        $animal->delete();
        return redirect()->route('animais');
    }
}
