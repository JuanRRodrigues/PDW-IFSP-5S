<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class CadastrarController extends Controller
{
    public function salvar(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'name' => 'required|string|min:4|max:255',
            'species' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
            'color' => 'nullable|string|max:255',
            'is_adopted' => 'boolean',
            'date_of_birth' => 'nullable|date',
        ]);

        // Cria uma nova instância do modelo Animal
        $objeto = new Animal();

        // Preenche a instância com os dados validados
        $objeto->fill($request->all());

        // Tratamento do campo is_adopted separadamente
        $objeto->is_adopted = $request->has('is_adopted') ? 1 : 0;

        // Salva a instância no banco de dados
        $objeto->save();

        return view('cadastrosalvo');
    }
}
