<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ServicoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Sobrescrevendo o método validationData(), para poder alterar o padrão monetário da máscara
     *
     * @return void
     */
    public function validationData()
    {
        $dados = $this->all();

        $dados['valor_minimo'] = $this->formatarValorMonetario($dados['valor_minimo']);
        $dados['valor_quarto'] = $this->formatarValorMonetario($dados['valor_quarto']);;
        $dados['valor_sala'] = $this->formatarValorMonetario($dados['valor_sala']);;
        $dados['valor_banheiro'] = $this->formatarValorMonetario($dados['valor_banheiro']);;
        $dados['valor_cozinha'] = $this->formatarValorMonetario($dados['valor_cozinha']);;
        $dados['valor_quintal'] = $this->formatarValorMonetario($dados['valor_quintal']);;
        $dados['valor_outros'] = $this->formatarValorMonetario($dados['valor_outros']);;

        $this->replace($dados);

        return $dados;
    }

    /**
     * Formata o valor monetário padrão pt-BR para o padrão internacional
     *
     * @param String $valor
     * @return void
     */
    protected function formatarValorMonetario(String $valor)
    {
        return str_replace(['.', ','], ['', '.'], $valor);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "nome" => ['required', 'min:2', 'max:255'],
            'icone' => ['required', Rule::in(['twf-cleaning-1', 'twf-cleaning-2', 'twf-cleaning-3'])],
            'posicao' => ['required', 'integer'],
            'valor_minimo' => ['required', 'numeric'],
            'quantidade_horas' => ['required', 'integer'],
            'porcentagem_comissao' => ['required', 'numeric'],
            'valor_quarto' => ['required', 'numeric'],
            'horas_quarto' => ['required', 'integer'],
            'valor_sala' => ['required', 'numeric'],
            'horas_sala' => ['required', 'integer'],
            'valor_banheiro' => ['required', 'numeric'],
            'horas_banheiro' => ['required', 'integer'],
            'valor_cozinha' => ['required', 'numeric'],
            'horas_cozinha' => ['required', 'integer'],
            'valor_quintal' => ['required', 'numeric'],
            'horas_quintal' => ['required', 'integer'],
            'valor_outros' => ['required', 'numeric'],
            'horas_outros' => ['required', 'integer']
        ];
    }
}
