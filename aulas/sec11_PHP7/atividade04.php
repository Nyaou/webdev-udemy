Que tal um desafio para deixar as coisas mais interessantes?

Observe que no arquivo consultar_chamado.php  toda a lógica para controlar se um chamado deve ou não ser exibido está sendo feita no momento de exibição dos mesmo:

<div class="card-body">
    <? foreach($chamados as $chamado) { ?>
             
        <?php
            $chamado_dados = explode('#', $chamado);
            //
            if($_SESSION['perfil_id'] == 2) {
                //só vamos exibir o chamado, se ele foi criado pelo usuário
                if($_SESSION['id'] != $chamado_dados[0]) {
                    continue;
                }
            }
            if(count($chamado_dados) < 3) {
                continue;
            }
        ?>
 
        <div class="card mb-3 bg-light">
            <div class="card-body">
                <h5 class="card-title"><?=$chamado_dados[1]?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?=$chamado_dados[2]?></h6>
                <p class="card-text"><?=$chamado_dados[3]?></p>
            </div>
        </div>
    <? } ?>
    <div class="row mt-5">
        <div class="col-6">
            <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
        </div>
    </div>
</div>


E se a lógica dos chamados que devem ser exibidos fosse estabelecida diretamente no loop que recupera os registros do arquivo arquivo.hd ? Não seria mais interessante? O desafio portanto será, no trecho de código abaixo, implementar uma lógica capaz de recuperar e adicionar no array $chamados  apenas os chamados que atendam aos critérios da aplicação, de modo a retirar essa lógica do trecho do script responsável pela exibição dos cards de chamado.

<?php
  //chamados
  $chamados = array();
  //abrir o arquivo.hd
  $arquivo = fopen('arquivo.hd', 'r');
  //enquanto houver registros (linhas) a serem recuperados
  while(!feof($arquivo)) { //testa pelo fim de um arquivo
    //linhas  
    $registro = fgets($arquivo);
    $chamados[] = $registro;
  }
  //fechar o arquivo aberto
  fclose($arquivo);

  ...

//Minha resposta:

...

if($_SESSION['perfil_id'] == 2){

    $filtro = array();

    $id = $_SESSION['id'];

    foreach($chamados as $chamado_atual){
      $id_atual = explode('#',$chamado_atual);
      if($id_atual[0] != $id || count($teste) < 3){
        continue;
      }else{
        $filtro[] = $chamado_atual;
      }
    }

    $chamados = [];
    $chamados = $filtro;

}

?>
Boa sorte!