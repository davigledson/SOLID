<?php 

namespace src\dao;

use src\DB;


use src\componentes\Notificacao;
use src\componentes\Log;

use src\interfaces\ICadastro;
use src\interfaces\Ilog;
use src\interfaces\Inotificacao;


class UsuarioModel extends DB implements ICadastro, Inotificacao, Ilog{
public function salvar(){

}
public function registrarLog(Log $log){

}
public function enviarNotificacao(Notificacao $notificacao){

}

}



?>