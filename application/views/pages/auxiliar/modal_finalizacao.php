<!--Modal de finalização de agendamento-->
<div class="container-fluid">
        <div class="modal fade" id="largeShoes2" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge"
          aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <img src="img/rs.png" style="width: 15rem" class="rounded" alt="imagem-responsiva">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <h4>Cadastrar Candidatos:</h4>
                <br>
                <form action="<?=base_url("auxiliar/cadastrarcandidato");?>" method="post">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputtext4">Nome</label>
                      <input type="text" class="form-control" id="inputEmail4" name="nome" placeholder="Nome">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputtext4">Sobrenome</label>
                      <input type="text" class="form-control" id="inputEmail4" name="sobrenome" placeholder="Sobrenome">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Email</label>
                      <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputCurriculo">Canal de Seleção</label>
                      <select class="form-control" id="inputCurriculo" name="curriculo">

                        <option value="1">Indeed</option>

                        <option value="2">Facebook</option>

                        <option value="3">Vagas.com</option>

                        <option value="4">InfoJobs</option>

                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputNumero">Telefone</label>
                      <input type="text" class="form-control" id="inputNumero" name="telefone"
                        placeholder="(DDD) + Número">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputName">Cargo</label>
                      <select class="form-control" id="inputCargo" name="cargo">
                        <option value="1">consultor</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="example-datetime-local-input" class="col-4 col-form-label">Data e Hora</label>
                      <input class="form-control" type="datetime-local" name="data" id="example-datetime-local-input">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputCurriculo">Status</label>
                      <select class="form-control" id="inputCurriculo" name="curriculo">
                        <option value="1">Aprovado</option>
                        <option value="2">Reprovado</option>
                        <option value="3">Stand-Bie</option>
                        <option value="4">Black-list</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Observações:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="observacao"
                      rows="3"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>