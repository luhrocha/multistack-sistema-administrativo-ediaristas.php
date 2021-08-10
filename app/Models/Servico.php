<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome', 'icone', 'posicao', 'nome', 'valor_minimo', 'quantidade_horas', 'porcentagem_comissao',
        'valor_quarto', 'horas_quarto', 'valor_sala', 'horas_sala', 'valor_banheiro', 'horas_banheiro', 'valor_cozinha',
        'horas_cozinha', 'valor_quintal', 'horas_quintal', 'valor_outros', 'horas_outros'
    ];
}
