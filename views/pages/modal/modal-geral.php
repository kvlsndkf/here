<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../styles/style.css">
  <link rel="stylesheet" href="./modal-geral.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Manrope:wght@200;300;400;500;600;700;800&family=Sulphur+Point:wght@300&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="../../js/modal.js" defer></script>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Modais</title>
</head>

<body>

  <!-- Botôes do modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalUnitario" data-bs-whatever="@mdo">Modal unitario ETEC</button>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalLote" data-bs-whatever="@fat">Modal em Lote ETEC</button>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSecretaria" data-bs-whatever="@getbootstrap">Modal unitario Secretária</button>

  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalUniCurso" data-bs-whatever="@mdo">Modal unitário cursos</button>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalLoteCurso" data-bs-whatever="@fat">Modal Lote Cursos</button>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalUniTurma" data-bs-whatever="@getbootstrap">Modal unitário Turmas</button>

  <!-- Modal Unitário da ETEC -->
  <div class="modal fade" id="modalUnitario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content ">
        <div class="modal-header border-bottom-0">
          <h5 class="modal-title" id="exampleModalLabel">Cadastro unitário ETEC</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="container">
          <div class="modal-body">

            <!--Formulario Unitário da ETEC -->
            <form action="#">
              <div class="user-details">
                <div class="input-box">
                  <h6 class="nameGeral">Nome ETEC</h6>
                  <input type="text" class="box" placeholder="Digite o nome da ETEC" required>

                  <a href="#"><button type="submit" class="buttonCadastrar" value="Submit">Cadastrar ETEC</button></a><br>

                  <a href="#"><button type="reset" class="buttonLimpar" value="Reset">Limpar</button></a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal em Lote da ETEC -->
  <div class="modal fade1" id="modalLote" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
          <h5 class="modal-title" id="exampleModalLabel">Cadastro em lote ETEC's</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

          <!--Formulario em lote da ETEC -->
          <form action="#">
            <div class="user-details">
              <div class="input-box">
                <p class="nameGeral justify-content-center">Para efetuar o cadastro em lote baixe aqui o modelo da planilha</p>
                <div class="container">
                  <a href="#"><button type="submit" class="buttonDownload" value="Submit">Baixar modelo</button></a>
                  <div class="modal-header"> </div>

                  <br>
                  <h6 class="nameGeral  justify-content-center">Envie o modelo da planilha preenchido</h6>

                  <!-- Inicio do Alert -->
                  <div class="alert1">
                    <span class="fas fa-exclamation-circle"></span>
                    <span class="msg">Lembre-se de salvar o arquivo</span>
                    <span class="xml">xml</span>
                    <span class="msg">antes de enviar</span>


                  </div>

                  <!-- Final do Alert -->

                  <!-- Input de adicionar um arquivo -->

                  <input type="file" id="file">
                  <label for="file" class="label" >
                    <p class="arquivo">+ Adicionar arquivos</p>
                  </label>
                  <p class="text">Nenhum arquivo selecionado.</p>
                  <!-- Fim do Input -->

                  <br><a href="#"><button type="submit" class="cadastrarLote" value="Submit">Cadastrar em lote</button></a>

                  <br> <button type="close" class="buttonCancelar" data-bs-dismiss="modal">Cancelar</button>
                </div>
              </div>
            </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  </div>


  <!-- Modal da Secretária -->
  <div class="modal fade" id="modalSecretaria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
          <h5 class="modal-title" id="exampleModalLabel">Cadastro unitário secretário(a) </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="container">
        <div class="modal-body">

          <!-- Formulario Unitário da Secretária -->
          <form action="#">
            <div class="user-details">
              <div class="input-box">
                <h6 class="nameGeral">Etec responsável</h6>
                <select class="select1">
                  <option class="selected">
                    Selecione a ETEC responsável pela secretária
                  </option>
                </select>
                <div class="modal-header"> </div>

                <h6 class="nameSecretaria">Nome secretário</h6>
                <input type="text" class="box" placeholder="Digite o nome do secretário responsável pela ETEC" required>

                <h6 class="nameSecretaria">Email secretário</h6>
                <input type="email" class="box" placeholder="Digite o email para o secretário" required>

                <h6 class="nameSecretaria">Senha secretário</h6>
                <input type="password" class="box" placeholder="Digite uma senha para o secretário" required>



                <a href="#"><button type="submit" class="buttonCadastrar" value="Submit">Cadastrar secretário(a)</button></a><br>

                <a href="#"><button type="reset" class="buttonLimpar" value="Reset">Limpar</button></a>
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal do Curso -->
  <div class="modal fade" id="modalUniCurso" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
          <h5 class="modal-title" id="exampleModalLabel">Cadastro unitário cursos</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <!-- Formulario do Curso -->
          <form action="#">
            <div class="user-details">
              <div class="input-box">
              <div class="container">
                <h6 class="nameCurso">Nome Curso</h6>
                <input type="text" class="box" placeholder="Digite o nome do secretário responsável pela ETEC" required>
                
                <div class="custom-checkbox">
                  <input type="checkbox" class="checkbox" id="checkCurso">
                  <label for="checkCurso" class="nameCheck">Curso com período anual</label>
                </div>


                <a href="#"><button type="submit" class="buttonCadastrar" value="Submit">Cadastrar secretário(a)</button></a><br>

                <a href="#"><button type="reset" class="buttonLimpar" value="Reset">Limpar</button></a>
                </div>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>


  <!-- Modal da Secretária -->
  <div class="modal fade" id="modalSecretaria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
          <h5 class="modal-title" id="exampleModalLabel">Cadastro unitário secretário(a) </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <!-- Formulario Unitário da Secretária -->
          <form action="#">
            <div class="user-details">
              <div class="input-box">
                <h6 class="nameGeral">Etec responsável</h6>
                <div class="custom-select">
                  <select>
                  <option class="selected" >Selecione a ETEC responsável pela secretaria</option>
                </select>

                <span class="custom-arrow"></span>
                </div>
                <div class="modal-header"> </div>

                <h5 class="nameSecretaria">Nome secretário</h5>
                <input type="text" class="box" placeholder="Digite o nome do secretário responsável pela ETEC" required> 

                <h6 class="nameSecretaria">Email secretário</h6>
                <input type="email" class="box" placeholder="Digite o email para o secretário" required>

                <h6 class="nameSecretaria">Senha secretário</h6>
                <input type="password" class="box" placeholder="Digite uma senha para o secretário" required>



                <a href="#"><button type="submit" class="buttonCadastrar" value="Submit">Cadastrar secretário(a)</button></a><br>

                <a href="#"><button type="reset" class="buttonLimpar" value="Reset">Limpar</button></a>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>

  <!-- Modal em Lote do Curso-->
  <div class="modal fade1" id="modalLoteCurso" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
          <h5 class="modal-title" id="exampleModalLabel">Cadastro em lote de cursos</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

          <!--Formulario em lote do Curso -->
          <form action="#">
            <div class="user-details">
              <div class="input-box">
                <p class="nameGeral justify-content-center">Para efetuar o cadastro em lote baixe aqui o modelo da planilha</p>
                <div class="container">
                  <a href="#"><button type="submit" class="buttonDownload" value="Submit">Baixar modelo</button></a>
                  <div class="modal-header"> </div>

                  <br>
                  <h6 class="nameGeral  justify-content-center">Envie o modelo da planilha preenchido</h6>

                  <!-- Inicio do Alert -->
                  <div class="alert1">
                    <span class="fas fa-exclamation-circle"></span>
                    <span class="msg">Lembre-se de salvar o arquivo</span>
                    <span class="xml">xml</span>
                    <span class="msg">antes de enviar</span>


                  </div>

                  <!-- Final do Alert -->

                  <input type="file" id="file">
                  <label for="file" class="label">
                    <p class="arquivo">+ Adicionar arquivos</p>
                  </label>
                  <p class="text1">Nenhum arquivo selecionado.</p>



                  <br><a href="#"><button type="submit" class="cadastrarLote" value="Submit">Cadastrar em lote</button></a>

                  <br> <button type="close" class="buttonCancelar" data-bs-dismiss="modal">Cancelar</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>


  <!-- Modal Unitário da Turma-->
  <div class="modal fade" id="modalUniTurma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content ">
        <div class="modal-header border-bottom-0">
          <h5 class="modal-title" id="exampleModalLabel">Cadastro unitário turmas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="container">
          <div class="modal-body">

            <!--Formulario Unitário da Turma -->
            <form action="#">
              <div class="user-details">
                <div class="input-box">
                  <h6 class="nameGeral">Nome turma</h6>
                  <input type="text" class="box" placeholder="Digite o nome da turma" required>

                  <div class="row align-items-start">
                    <div class="col">
                      <h6 class="namecol">Data de ingresso</h6>
                      <input type="date" class="box" placeholder="Digite o nome da turma" required>
                    </div>
                    <div class="col">
                      <h6 class="namecol">Módulo</h6>
                      <input type="text" class="box" placeholder="Digite o nome da turma" required>
                    </div>
                  </div>
                  
                  <div class="modal-header"> </div>
                  <h6 class="nameSelect">Curso</h6>
                  <div class="custom-select">
                  <select>
                  <option class="selected" >Selecione o curso</option>
                </select>

                <span class="custom-arrow"></span>
                </div>
                  <a href="#"><button type="submit" class="buttonCadastrar" value="Submit">Cadastrar turma</button></a><br>

                  <a href="#"><button type="reset" class="buttonLimpar" value="Reset">Limpar</button></a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>