
<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">Perfil do Investidor</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <div class="row">
              <div class="col-lg-4">
                <div class="card card-small mb-4 pt-3">
                  <div class="card-header border-bottom text-center">
                    <div class="mb-3 mx-auto">
                      <img class="rounded-circle" src="images/avatars/4.jpg" alt="User Avatar" width="110"> </div>
                    <h4 class="mb-0"><?php echo $_SESSION["nome_usuario"]; ?></h4>
                    <span class="text-muted d-block mb-2">Investidor</span>
                    <!--<button type="button" class="mb-2 btn btn-sm btn-pill btn-outline-primary mr-2">
                      <i class="material-icons mr-1">person_add</i>Follow</button>-->
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item px-4">
                      <div class="progress-wrapper">
                        <strong class="text-muted d-block mb-2">Dados preenchidos</strong>
                        <div class="progress progress-sm">
                          <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100" style="width: 74%;">
                            <span class="progress-value">74%</span>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item p-4">
                      <strong class="text-muted d-block mb-2">Situação da conta</strong>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3">
                          <span class="d-flex mb-2"><i class="material-icons mr-1">flag</i><strong class="mr-1">Em Aplicação:</strong> <strong class="text-success">R$<?php echo number_format($investimento_saldo+$rendimento_saldo, 2, ',', '.'); ?></strong></span>
                          <span class="d-flex mb-2"><i class="material-icons mr-1">visibility</i><strong class="mr-1">Total investido:</strong> R$<?php echo number_format($investimento_TOTAL, 2, ',', '.'); ?></span>
                          <span class="d-flex mb-2"><i class="material-icons mr-1">calendar_today</i><strong class="mr-1">Inicio:</strong> xx/xx/xxxx</span>
                          <span class="d-flex"><i class="material-icons mr-1">score</i><strong class="mr-1">Rentabilidade:</strong> <strong class="text-warning">5% a.m</strong></span>
                        </li>
                        <li class="list-group-item d-flex px-3">
                          <button class="btn btn-sm btn-outline-accent" ver><i class="material-icons">note_add</i> Aumentar Investimento</button>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Dados da Conta</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <form name="informacoes_pessoais" action="atualiza_dados_cadastrais.php" method="POST">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feFirstName">Nome Completo</label>
                                <input type="text" class="form-control" id="feFirstName" placeholder="First Name" value="<?php echo $cliente_nome; ?>" name="nome_completo"> </div>
                              <div class="form-group col-md-6">
                                <label for="feLastName">CPF</label>
                                <input type="text" class="form-control" id="feLastName" placeholder="Last Name" value="<?php echo $cliente_cpf; ?>" name="cpf"> </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feEmailAddress">Telefone</label>
                                <input type="number" class="form-control" id="feEmailAddress" placeholder="Email" value="<?php echo $cliente_telefone; ?>" name="telefone"> </div>
                              <div class="form-group col-md-6">
                                <label for="fePassword">RG</label>
                                <input type="number" class="form-control" id="fePassword" placeholder="Password" value="<?php echo $cliente_rg; ?>" name="rg"> </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feEmailAddress">Email</label>
                                <input type="email" readonly="readonly" class="form-control" id="feEmailAddress" placeholder="Email" value="<?php echo $cliente_email; ?>" name="email"> </div>
                              <div class="form-group col-md-6">
                                <label for="fePassword">Data de Nascimento</label>
                                <input type="date" class="form-control" value="<?php echo date('Y-m-d', strtotime($cliente_data_nascimento)); ?>" name="data_nascimento"> </div>
                            </div>
                            <div class="form-group">
                              <label for="feInputAddress">Endereço</label>
                              <input type="text" class="form-control" id="feInputAddress" value="<?php echo $cliente_endereco; ?>" name="endereco"> </div>
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="feEmailAddress">N°</label>
                                  <input type="number" class="form-control" id="feEmailAddress" value="<?php echo $cliente_endereco_numero; ?>" name="endereco_numero"> </div>
                                <div class="form-group col-md-6">
                                  <label for="fePassword">Bairro</label>
                                  <input type="text" class="form-control" value="<?php echo $cliente_bairro; ?>" name="bairro"> </div>
                              </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feInputState">Estado</label>
                                <select id="categoria-selecta" name="uf" class="form-control custom-select">
                                  <option value="">
                                    Selecione
                                  </option>

                                  <?php
                                   foreach ($result_endereco as $row){
                                     if($row['id'] == $estado){
                                       echo '<option selected value='.$row['id'].'>'.$row['nome'].'</option>';
                                     }
                                     else {
                                       echo '<option value='.$row['id'].'>'.$row['nome'].'</option>';
                                     }

                                  }
                                  ?>

                                </select>
                              </div>
                              <div class="form-group col-md-4">
                                <label for="feInputState">Cidade</label>
                                <div id="resultado" class="col-md-12">
                                  <select id="categoria-selecta" name="cidade" class="form-control custom-select">
                                          <option value="">
                                            Selecione
                                          </option>

                                          <?php

                                              echo '<option selected value='.$cidade.'>'.$cidade_nome.'</option>';

                                          ?>

                                        </select>
                                </div>
                              </div>
                              <div class="form-group col-md-2">
                                <label for="inputZip">Cep</label>
                                <input type="number" class="form-control" value="<?php echo $cliente_cep; ?>"  name="cep"> </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="feDescription">Descrição</label>
                                <textarea class="form-control" name="feDescription" rows="5"></textarea>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-accent">Atualizar dados</button>
                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- Small Stats Blocks -->

            <!-- End Small Stats Blocks -->

          </div>
