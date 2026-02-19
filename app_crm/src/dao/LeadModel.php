<?php 

namespace src\dao;

use src\DB;

use src\interfaces\ICadastro;
use src\componentes\Notificacao;
use src\componentes\Log;
use src\interfaces\Inotificacao;

class LeadModel extends DB implements ICadastro, Inotificacao{


public function salvar(){

}

public function enviarNotificacao(Notificacao $notificacao){

}



}



?>