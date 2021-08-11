    <!--campo oculto com um token, para comprovar que foi enviado dentro do Laravel -->
        @csrf
        <div class="card">
        <div class="card-body">
            <fieldset>                
                <fieldset>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Nome do usuário</label>
                                <input value="{{ old('name', $usuario->name ?? ' ') }}" type="text" class="form-control" name="name" id="name" placeholder="Digite o nome do usuário" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email do usuário</label>
                                <input value="{{ old('email', $usuario->email ?? ' ') }}" type="email" class="form-control" name="email" id="email" placeholder="Digite o e-mail do usuário" required>
                            </div>
                        </div>
                    </div>   
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Senha</label>
                                <input value="{{ old('password', '') }}" type="password" class="form-control" name="password" id="password" placeholder="Crie uma senha" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password_confirmation">Confirmação da senha</label>
                                <input value="{{ old('password_confirmation', '') }}" type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirme a senha" required>
                            </div>
                        </div>
                    </div>                  
                </fieldset>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a href="{{route('usuarios.index')}}" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
        </div>