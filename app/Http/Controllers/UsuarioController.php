<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UsuarioRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Mostra a lista de usuários
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $usuarios = User::paginate(10);

        return view('usuarios.index', [
            "usuarios" => $usuarios
        ]);
    }

    /**
     * Mostra um formulário vazio para criação de novo usuário
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Pega os dados do formulário e salva no banco de dados
     *
     * @param  App\Http\Requests\UsuarioRequest
     * @return \\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function store(UsuarioRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('usuarios.index')->with('mensagem', 'Usuário cadastrado com sucesso!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  User $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(User $usuario)
    {
    }

    /**
     * Busca o usuário e mostra uma formulário com seus dados para alteração
     *
     * @param  User $usuario
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function edit(User $usuario)
    {
        //$usuario = User::findOrFail($id);

        return view('usuarios.edit')->with('usuario', $usuario);
    }

    /**
     * Atualiza os dados de um usuário no banco de dados
     *
     * @param  App\Http\Requests\UsuarioRequest
     * @param  User $usuario
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function update(UsuarioRequest $request, User $usuario)
    {
        //$usuario = User::findOrFail($id);

        $usuario->update(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]
        );

        return redirect()->route('usuarios.index')->with('mensagem', 'Usuário atualizado com sucesso!!!');
    }

    /**
     * Remove um usuário do banco de dados
     *
     * @param  User $usuario
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function destroy(User $usuario)
    {
        //$usuario = User::findOrFail($id);
        $usuario->delete();

        return redirect()->route('usuarios.index')->with('mensagem', 'Usuário removido com sucesso!');
    }
}
