    <!--Modal de Cadastro de funcionários-->
    <div class="modal fade" id="adcionaUsuario" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <img src="<?=base_url('vendor/dist/img/rs.png');?>" style="width: 15rem" class="rounded" alt="imagem-responsiva">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h4>Adicionar Usuário:</h4>
            <br>
            <form action="<?=base_url('gerente/cadastrarusuario');?>" method="post">
              <div class="form-row">
              <div class="form-group col-md-6">
                  <label for="inputtext4">Usuário</label>
                  <input type="text" name="usuario" class="form-control" id="inputEmail4" placeholder="Usúario">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputtext4">Senha</label>
                  <input type="password" name="senha" class="form-control" id="inputEmail4" placeholder="Senha">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputtext4">Nome</label>
                  <input type="text" name="nome" class="form-control" id="inputEmail4" placeholder="Nome">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputtext4">Sobrenome</label>
                  <input type="text" name="sobrenome" class="form-control" id="inputEmail4" placeholder="Sobrenome">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputName">Cargo exercido pelo funcionário</label>
           			<select class="form-control" id="inputCargo" name="cargo">
						<?php foreach($cargos as $cg){; ?> 
							<option value="<?=$cg->id_cargo;?>"><?=$cg->cargo;?></option>
						<?php }; ?>
					</select>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Email</label>
                  <input type="Email" name="email" class="form-control" id="inputEmail" placeholder="Email do funcionário">
                </div>
                <div class="form-group row ml-1">
                  <label for="example-date-input" class=" col-form-label">Data de nascimento</label>
                  <div class="col-12">
                    <input class="form-control" name="dt_nascimento" data-mask="00/00/0000" type="text" placeholder="DD/MM/AAAA" id="example-date-input">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Adicionar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
	<!--modal-->