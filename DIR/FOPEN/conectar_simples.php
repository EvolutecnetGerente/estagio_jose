<?php

// Configuraчѕes para o banco MySQL
//se for 1 entra no oracle
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
$oracle=
    0
;
if($oracle==1) {

    // Configuraчѕes para o banco Oracle
    $GLOBALS['banco_tipo'] = "ORACLE";
    $GLOBALS['banco_host'] = "192.168.15.252";
    $GLOBALS['banco_user'] = 'BRASKARNE2';
//    $GLOBALS['banco_user'] = 'WINPORT';

    $GLOBALS['banco_pass'] = "thebest";
    $GLOBALS['banco_nome'] = "(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = 192.168.15.252)(PORT = 1521)) (CONNECT_DATA = (SERVER = DEDICATED) (SERVICE_NAME = winport) ) )";
    $GLOBALS['banco_empresa'] = 'BRASKARNE';

}else {

    $GLOBALS['banco_tipo'] = "MYSQL";
    $GLOBALS['banco_host'] = "192.168.15.252";
    $GLOBALS['banco_user'] = "winport";
    $GLOBALS['banco_pass'] = "thebest";
    $GLOBALS['banco_nome'] = "treinamento";
    $GLOBALS['banco_empresa'] = 'TEPORTI';
    // $GLOBALS['banco_empresa'] = 'ITAZEM';
}


// Caminho padrуo para logs de conexуo
if (PHP_OS == 'WINNT') {
    $GLOBALS['banco_arquivo_log'] = 'c:\web\online-cliente-braskarne\logs\consultas.log';
} else {
    $GLOBALS['banco_arquivo_log'] = '/var/www/online-cliente-braskarne/logs/consultas.log';
}

// Configuraчуo para exibir o caminho da requisiчуo no arquivo de logs'
// Torna o arquivo de logs muito maior, mas oferece a possibilidade de localizar as consultas
// com mais facilidade
$GLOBALS['banco_arquivo_log_trace'] = true;

// Configuraчуo para exibir no rodapщ do sistema
// os dados de conexуo com o banco de dados
// њtil para saber se o ambiente acessado щ o ambiente correto
$GLOBALS['banco_exibir'] = true;


function banco_obtem_linha_simples($r, $assoc = true, $obj = false)
{
    if (MYSQL) {
        if ($assoc) {
            $retorno = mysqli_fetch_assoc($r);
            if ($retorno) {
                foreach ($retorno as $key => $value) {
                    $retorno[$key] = Encoding::toISO8859($value);
                }
                $retornolower = array_change_key_case($retorno, CASE_LOWER);
                $retorno = array_merge($retornolower, $retorno);
            }
        } elseif ($obj) {
            $retorno = mysqli_fetch_object($r);
        } else {
            $retorno = mysqli_fetch_array($r, MYSQLI_NUM);
            foreach ($retorno as $key => $value) {
                $retorno[$key] = Encoding::toISO8859($value);
            }
        }

    } elseif (ORACLE) {
        if ($assoc) {
            $retorno = @oci_fetch_assoc($r);

            if ($retorno) {
                foreach ($retorno as $key => $value) {
                    $retorno[$key] = Encoding::toISO8859($value);
                }
                $retornolower = array_change_key_case($retorno, CASE_LOWER);
                $retorno = array_merge($retornolower, $retorno);

            }
        } elseif ($obj) {
            $retorno = oci_fetch_object($r);
        } else {
            $retorno = oci_fetch_array($r, OCI_NUM);
            foreach ($retorno as $key => $value) {
                $retorno[$key] = Encoding::toISO8859($value);
            }
        }
    }

    // Analisa cada campo retornado e se for data converte para o padr?o
    // Y-m-d H:i:s e se for um objeto LOB converter para string para poder ser
    // analisado com o PHP.

    if (empty($retorno)) {
        return null;
    } else {
        return $retorno;
    }
}


function banco_consultar_simples($sql, $connect = NULL, $charset = 'UTF8', $mensagemerror = false)
{
    global $erros;

    $connect = banco_conectar_simples(false, $charset);

    $retorno = false;
    if (MYSQL) {
        $retorno = mysqli_query($connect, $sql);
        mysqli_store_result($connect);

        if (!$retorno) {
            if ($mensagemerror) {
                $retorno = mysqli_error($connect);
            } else {
                return false;
            }
        }
    } elseif (ORACLE) {
        $retorno = @oci_parse($connect, $sql);
        if (@!oci_execute($retorno)) {
            if ($mensagemerror) {
                $retorno = oci_error($retorno);
            } else {
                return false;
            }
        }
    }
    return $retorno;

}

function banco_conectar_simples($forcarConexao = false, $charset = 'UTF8')
{
    $BANCO_NOME = $GLOBALS['banco_nome'];

    $BANCO_HOST = $GLOBALS['banco_host'];
    $BANCO_USER = $GLOBALS['banco_user'];
    $BANCO_PASS = $GLOBALS['banco_pass'];


    global $erros;
    if (MYSQL) {

        $conn = mysqli_connect($GLOBALS['banco_host'], $GLOBALS['banco_user'], $GLOBALS['banco_pass']) or $erros[] = 'N?o foi poss?vel conectar ao banco de dados';

        mysqli_select_db($conn, $GLOBALS['banco_nome']) or $erros[] = 'N?o foi poss?vel selecionar o banco de dados';

        if ($charset == 'UTF8') {
            $char = 'utf8';
        } else {
            $char = 'iso88591';
        }

        mysqli_set_charset($conn, $char);
        mysqli_autocommit($conn, false);


    } elseif (ORACLE) {
// TODO: coisas para conectar com o Oracle
        $BANCO_HOST = $GLOBALS['banco_nome'];
        if ($charset == 'UTF8') {
            $char = 'AL32UTF8';
        } else {
            $char = 'WE8ISO8859P1';
        }

        $conn = @oci_new_connect($BANCO_USER, $BANCO_PASS, $BANCO_HOST, $char);
    }
//var_dump( BANCO_HOST, BANCO_USER, BANCO_PASS );
//var_dump( $erros );
//die();

    return $conn;

}



?>