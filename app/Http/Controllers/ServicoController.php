<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicoRequest;
use App\Models\Servico;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    /**
     * Lista os serviços cadastrados no banco
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        //$servicos = Servico::simplepaginate(10);
        $servicos = Servico::paginate(10);
        return view('servicos.index')->with('servicos', $servicos);
    }

    /**
     * Redireciona para o formulário de serviços (vazio)
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        return view('servicos.create');
    }

    /**
     * Pega os dados inseridos no formulário e envia para o banco de dados, 
     * em seguida redireciona para a página da listagem dos serviços
     *
     * @param ServicoRequest $request
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function store(ServicoRequest $request)
    {
        $dados = $request->except('_token');

        Servico::create($dados);
        return redirect()->route('servicos.index')->with('mensagem', 'Serviço cadastrado com sucesso!!!');
    }

    /**
     * Redireciona para o formulário preenchido com as informações dos serviços cadastradas no banco de dados
     * usando Route Model Bind
     * @param Servico $servico
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function edit(Servico $servico)
    {
        return view('servicos.edit')->with('servico', $servico);
    }

    /**
     * Recebe os dados do formulário e atualiza os serviços do banco de dados
     * Redireciona para a listagem de serviços
     * Usa Route Model Bind     
     * @param Servico $servico
     * @param ServicoRequest $request
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function update(Servico $servico, ServicoRequest $request)
    {
        $dados = $request->except(['_token', '_method']);

        $servico->update($dados);

        return redirect()->route('servicos.index')->with('mensagem', 'Serviço atualizado com sucesso!!!');
    }
}
