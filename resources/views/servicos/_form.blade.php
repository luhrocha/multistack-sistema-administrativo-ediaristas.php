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
                            <input value="{{ old('nome', $servico->nome ?? ' ') }}" type="text"  class="form-control" name="nome" id="nome" placeholder="Nome do serviço" required>
                    </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="icone">Ícone</label>
                            <select name="icone" id="icone" class="form-control">
                                <option value="">Selecione o ícone</option>
                                <Option value="twf-cleaning-1" {{ old('icone', $servico->icone ?? '') === 'twf-cleaning-1' ? 'selected' : ''}}>Ícone 1</Option>
                                <Option value="twf-cleaning-2" {{old('icone', $servico->icone ?? '') === 'twf-cleaning-2' ? 'selected' : ''}}>Ícone 2</Option>
                                <Option value="twf-cleaning-3" {{old('icone', $servico->icone ?? '') === 'twf-cleaning-3' ? 'selected' : ''}}>Ícone 3</Option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="posicao">posicão na plataforma</label>
                            <input value="{{ old('posicao', $servico->posicao ?? ' ') }}" type="text" data-mask="00"  class="form-control" name="posicao" id="posicao" placeholder="posicão do serviço na plataforma" required>
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
                                <input value="{{ old('valor_minimo', $servico->valor_minimo ?? ' ') }}" type="text" data-mask="#.##0,00" data-mask-reverse="true" class="form-control" name="valor_minimo" id="valor_minimo" placeholder="Valor mínimo do serviço" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="quantidade_horas">Quantidade Mínima de horas</label>
                                <input value="{{ old('quantidade_horas', $servico->quantidade_horas ?? ' ' )}}" type="text" data-mask="0"  class="form-control" name="quantidade_horas" id="quantidade_horas" placeholder="Quantidade mínima de horas" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="porcentagem">Porcentagem de Comissão</label>
                                <input value="{{ old('porcentagem_comissao', $servico->porcentagem_comissao ?? ' ') }}" type="text" data-mask="00" class="form-control" name="porcentagem_comissao" id="porcentagem_comissao" placeholder="porcentagem de comissão no serviço" required>
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
                                <input value="{{ old('valor_quarto', $servico->valor_quarto ?? ' ') }}" type="text" data-mask="#.##0,00" data-mask-reverse="true" class="form-control" name="valor_quarto" id="valor_quarto" placeholder="Valor por quarto" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="horas_quarto">Quantidade de Horas por quarto</label>
                                <input value="{{ old('horas_quarto', $servico->horas_quarto ?? ' ') }}" type="text" data-mask="0" class="form-control" name="horas_quarto" id="horas_quarto" placeholder="Quantidade horas por quarto" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="valor_sala">Valor por sala</label>
                                <input value="{{ old('valor_sala', $servico->valor_sala ?? ' ') }}" type="text" data-mask="#.##0,00" data-mask-reverse="true"  class="form-control" name="valor_sala" id="valor_sala" placeholder="Valor por sala" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="horas_sala">Quantidade de horas por sala</label>
                                <input value="{{ old('horas_sala', $servico->horas_sala ?? ' ') }}" type="text" data-mask="0" class="form-control" name="horas_sala" id="horas_sala" placeholder="Quantidade horas por sala" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="valor_banheiro">Valor por banheiro</label>
                                <input value="{{ old('valor_banheiro', $servico->valor_banheiro ?? ' ') }}"type="text" data-mask="#.##0,00" data-mask-reverse="true" class="form-control" name="valor_banheiro" id="valor_banheiro" placeholder="Valor por banheiro" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="horas_banheiro">Quantidade de horas por banheiro</label>
                                <input value="{{ old('horas_banheiro', $servico->horas_banheiro ?? ' ') }}" type="text" data-mask="0" class="form-control" name="horas_banheiro" id="horas_banheiro" placeholder="Quantidade horas por banheiro" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="valor_cozinha">Valor por cozinha</label>
                                <input value="{{ old('valor_cozinha', $servico->valor_cozinha ?? ' ') }}" type="text" data-mask="#.##0,00" data-mask-reverse="true" class="form-control" name="valor_cozinha" id="valor_cozinha" placeholder="Valor por cozinha" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="horas_cozinha">Quantidade de horas por cozinha</label>
                                <input value="{{ old('horas_cozinha', $servico->horas_cozinha ?? ' ') }}" type="text" data-mask="0" class="form-control" name="horas_cozinha" id="horas_cozinha" placeholder="Quantidade horas por cozinha" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="valor_quintal">Valor por quintal</label>
                                <input value="{{ old('valor_quintal', $servico->valor_quintal ?? ' ') }}" type="text" data-mask="#.##0,00" data-mask-reverse="true"  class="form-control" name="valor_quintal" id="valor_quintal" placeholder="Valor por quintal" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="horas_quintal">Quantidade de horas por quintal</label>
                                <input value="{{ old('horas_quintal', $servico->horas_quintal ?? ' ') }}" type="text" data-mask="0" class="form-control" name="horas_quintal" id="horas_quintal" placeholder="Quantidade horas por quintal" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="valor_outros">Valor por outros tipos de cômodos</label>
                                <input value="{{ old('valor_outros', $servico->valor_outros ?? ' ' )}}" type="text" data-mask="#.##0,00" data-mask-reverse="true" class="form-control" name="valor_outros" id="valor_outros" placeholder="Valor por outros" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="horas_outros">Quantidade de horas por outros tipos de cômodos</label>
                                <input value="{{ old('horas_outros', $servico->horas_outros ?? ' ') }}" type="text" data-mask="0" class="form-control" name="horas_outros" id="horas_outros" placeholder="Quantidade horas por outros" required>
                            </div>
                        </div>
                    </div>
                </fieldset>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a href="{{route('servicos.index')}}" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
        </div>