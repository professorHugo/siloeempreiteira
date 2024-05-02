<?php
  if( isset($_POST['button-send-email']) ){
    "<br>Enviar E-mail para contato";
    $Assunto = $_POST['your-subject'];
    $Nome = $_POST['your-name'];
    $SobreNome = $_POST['your-surname'];
    $NomeOrigem = $Nome . " " . $SobreNome;
    $EmailOrigem = $_POST['your-email'];

    $Mensagem = nl2br($_POST['your-message']);

    try{
      $EnviarEmail = EnviarEmail($EmailOrigem, $NomeOrigem, 'orcamento@siloeempreiteira.com.br', $Assunto, $Mensagem);
    }catch(PDOException $E){
      echo "Falha ao enviar o email. Erro: " . $E;
      $EnviarEmail = "Falha";
    }

    if( $EnviarEmail == "Ok" ){
      ?>
        <!-- Modal -->
        <div 
          class="modal fade show" 
          id="staticBackdrop" 
          data-bs-backdrop="static" 
          data-bs-keyboard="false" 
          tabindex="-1" 
          aria-labelledby="staticBackdropLabel" 
          aria-hidden="true"
          style="display: block; background-color: rgba(36, 73, 93, 0.5);"
        >
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Pedido de Orçamento enviado com sucesso</h1>
                <a href="?Page=Home" class="btn-close" aria-label="Close"></a>
              </div>
              <div class="modal-body">
                Muito obrigado pelo contato, assim que possível retornaremos o seu contato.
              </div>
              <div class="modal-footer">
                <a href="?Page=Home" class="btn btn-secondary" >Fechar</a>
              </div>
            </div>
          </div>
        </div>

      <?php
    }else{
      ?>
        <!-- Modal -->
        <div 
          class="modal fade show" 
          id="staticBackdrop" 
          data-bs-backdrop="static" 
          data-bs-keyboard="false" 
          tabindex="-1" 
          aria-labelledby="staticBackdropLabel" 
          aria-hidden="true"
          style="display: block; background-color: rgba(36, 73, 93, 0.5);"
        >
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5 text-danger" id="staticBackdropLabel">E-mail não enviado</h1>
                <a href="?Page=Contact" class="btn-close" aria-label="Close"></a>
              </div>
              <div class="modal-body">
                Não foi possível enviar seu e-mail tente novamente.
              </div>
              <div class="modal-footer">
                <a href="?Page=Contact" class="btn btn-secondary" >Fechar</a>
              </div>
            </div>
          </div>
        </div>

      <?php

    }
  }else{
    echo "<br>Falha ao entar enviar e-mail";
  }