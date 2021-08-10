    <!--campo oculto com um token, para comprovar que foi enviado dentro do Laravel -->
        @csrf
        <div class="card">
        <div class="card-body">
            <fieldset>
                <legend>Identificação:</legend>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                        <input value="{{ isset($servico->nome) ? $servico->nome : ' ' }}" type="text" class="form-control" name="nome" id="nome" required placeholder="Nome do serviço">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="icone">Ícone</label>
                            <select name="icone" id="icone" class="form-control">
                                <option value="">Selecione o ícone</option>
                                <Option value="twf-cleaning-1" {{ isset($servico) && $servico->icone === 'twf-cleaning-1' ? 'selected' : ''}}>Ícone 1</Option>
                                <Option value="twf-cleaning-2" {{isset($servico) && $servico->icone === 'twf-cleaning-2' ? 'selected' : ''}}>Ícone 2</Option>
                                <Option value="twf-cleaning-3" {{isset($servico) && $servico->icone === 'twf-cleaning-3' ? 'selected' : ''}}>Ícone 3</Option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="posicao">posicão na plataforma</label>
                            <input value="{{ isset($servico->posicao) ? $servico->posicao : ' ' }}" type="text" class="form-control" name="posicao" id="posicao" required placeholder="posicão do serviço na plataforma">
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>                    
                    <legend>Globais</legend>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="valor_minimo">Valor Mínimo</label>
                                <input value="{{ isset($servico->valor_minimo) ? $servico->valor_minimo : ' ' }}" type="input" class="form-control" name="valor_minimo" id="valor_minimo" required placeholder="Valor mínimo do serviço">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="quantidade_horas">Quantidade Mínima de horas</label>
                                <input value="{{ $servico->quantidade_horas ?? ' ' }}" type="input" class="form-control" name="quantidade_horas" id="quantidade_horas" required placeholder="Quantidade mínima de horas">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="porcentagem">Porcentagem de Comissão</label>
                                <input value="{{ $servico->porcentagem_comissao ?? ' ' }}" type="input" class="form-control" name="porcentagem_comissao" id="porcentagem_comissao" required placeholder="porcentagem de comissão no serviço">
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Cômodos</legend>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="valor_quarto">Valor por Quarto</label>
                                <input value="{{ $servico->valor_quarto ?? ' ' }}" type="input" class="form-control" name="valor_quarto" id="valor_quarto" required placeholder="Valor por quarto">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="horas_quarto">Quantidade de Horas por quarto</label>
                                <input value="{{ $servico->horas_quarto ?? ' ' }}" type="input" class="form-control" name="horas_quarto" id="horas_quarto" required placeholder="Quantidade horas por quarto">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="valor_sala">Valor por sala</label>
                                <input value="{{ $servico->valor_sala ?? ' ' }}" type="input" class="form-control" name="valor_sala" id="valor_sala" required placeholder="Valor por sala">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="horas_sala">Quantidade de horas por sala</label>
                                <input value="{{ $servico->horas_sala ?? ' ' }}" type="input" class="form-control" name="horas_sala" id="horas_sala" required placeholder="Quantidade horas por sala">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="valor_banheiro">Valor por banheiro</label>
                                <input value="{{ $servico->valor_banheiro ?? ' ' }}"type="input" class="form-control" name="valor_banheiro" id="valor_banheiro" required placeholder="Valor por banheiro">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="horas_banheiro">Quantidade de horas por banheiro</label>
                                <input value="{{ $servico->horas_banheiro ?? ' ' }}" type="input" class="form-control" name="horas_banheiro" id="horas_banheiro" required placeholder="Quantidade horas por banheiro">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="valor_cozinha">Valor por cozinha</label>
                                <input value="{{ $servico->valor_cozinha ?? ' ' }}" type="input" class="form-control" name="valor_cozinha" id="valor_cozinha" required placeholder="Valor por cozinha">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="horas_cozinha">Quantidade de horas por cozinha</label>
                                <input value="{{ $servico->horas_cozinha ?? ' ' }}" type="input" class="form-control" name="horas_cozinha" id="horas_cozinha" required placeholder="Quantidade horas por cozinha">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="valor_quintal">Valor por quintal</label>
                                <input value="{{ $servico->valor_quintal ?? ' ' }}" type="input" class="form-control" name="valor_quintal" id="valor_quintal" required placeholder="Valor por quintal">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="horas_quintal">Quantidade de horas por quintal</label>
                                <input value="{{ $servico->horas_quintal ?? ' ' }}" type="input" class="form-control" name="horas_quintal" id="horas_quintal" required placeholder="Quantidade horas por quintal">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="valor_outros">Valor por outros tipos de cômodos</label>
                                <input value="{{ $servico->valor_outros ?? ' ' }}" type="input" class="form-control" name="valor_outros" id="valor_outros" required placeholder="Valor por outros">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="horas_outros">Quantidade de horas por outros tipos de cômodos</label>
                                <input value="{{ $servico->horas_outros ?? ' ' }}" type="input" class="form-control" name="horas_outros" id="horas_outros" required placeholder="Quantidade horas por outros">
                            </div>
                        </div>
                    </div>
                </fieldset>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
        </div>