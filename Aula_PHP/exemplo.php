<?php
//include "aula.php";
//
//$resultado = somar(10,25);
//
//echo $resultado;
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//$qualASuaIdade = 125;
//
//$idadeCriança = 12;
//
//$idadeMaior = 18;
//
//$idadeMelhor = 65;
//
//if ($qualASuaIdade < $idadeCriança) {
//
//    echo "Criança";
//
//} else if ($qualASuaIdade < $idadeMaior) {
//
//echo "adolecente";
//
//} else if($qualASuaIdade <$idadeMelhor){
//
//    echo "Adulto";
//
//} else {
//    echo "Idoso";
//}
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//$diaDaSemana = date("w");
//
//switch($diaDaSemana) {
//
//    case 0:
//        echo "Domingo";
//        break;
//
//    case 1:
//        echo "Segunda-feira";
//        break;
//
//    case 2:
//        echo "Terça-feira";
//        break;
//
//    case 3:
//        echo "Quarta-feira";
//        break;
//
//    case 4:
//        echo "Quinta-feira";
//        break;
//
//    case 5:
//        echo "Sexta-feira";
//        break;
//
//    case 6:
//        echo "Sabado";
//        break;
//
//    default:
//        echo "DATA INVÁLIDA !@$%#!";
//        break;
//}
//
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//for($i = 0; $i <= 10; $i++){
//    echo $i . "<br>";
//}
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//for($i =0; $i<=1000; $i +=5 ){
//
//    if ($i >= 200 && $i <= 800) continue;
//
//    if ($i === 900) break;
//
//    echo $i . "<br>";
//}
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//for ($i = 0; $i < 10; $i--){
//    echo $i . "<br>";
//
//}
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//echo "<select>";
//
//for ($i=date("Y"); $i>=date("Y")-100; $i--){
//
//    echo '<option value="'.$i.'">'.$i.'</option>';
//}
//
//echo "</select>"
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//$meses = array(
//    "Janeiro", "Fevereiro", "Março",
//    "Abril", "Maio", "Junho",
//    "Julho", "Agosto", "Setembro",
//    "Outubro", "Novembro", "Dezembro"
//);
//
//foreach ($meses as $index => $mes) {
//    echo "Indice: " . $index . "<br>";
//    echo "mes é " . $mes . "<br><br>";
//}
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<!--<form>-->
<!---->
<!--    <input type="text" name="Nome">-->
<!--    <input type="date" name="Nascimento">-->
<!--    <input type="submit" value="Ok">-->
<!---->
<!--</form>-->
<?php
//
//if (isset($_GET)) {
//
//    foreach ($_GET as $key => $value) {
//
//        echo "Nome do campo: " . $key . "<br>";
//
//        echo "Valor do campo: " . $value;
//
//        echo "<hr>";
//    }
//
//}
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//if (isset($_GET)){
//
//    foreach ($_GET as $key => $value){
//
//        echo "nome doas campos: " . $key;
//        echo "valor do campo " . $value;
//        echo "<hr>";
//
//    }
//
//}
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//$condicao = true;
//
//while ($condicao){
//
//    $numero = rand(1, 10);
//
//    if ($numero === 3) {
//
//        echo "TRÊS!!!";
//        $condicao = false;
//    }
//    echo $numero . " ";
//}
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//$total = 150;
//$desconto = 0.9;
//
//do {
//
//    $total *= $desconto;
//
//}  //while ($total > 100);
//
//echo $total;
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//$frutas = array("laranja", "abacaxi", "melancia");
//
//print_r($frutas);
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//$carros[0][0] = "GM";
//$carros[0][1] = "Cobalt";
//$carros[0][2] = "Onix";
//$carros[0][3] = "Camaro";
//
//$carros[1][0] = "Ford";
//$carros[1][1] = "Fiesta";
//$carros[1][2] = "Fusion";
//$carros[1][3] = "Eco Sport";
//
//echo $carros [0][3] . " ";
//
//echo end($carros[1]);
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//$pessoas = array();
//array_push($pessoas, array(
//        'nome' => 'João',
//        'idade'=>20
//    ));
//
//array_push($pessoas, array(
//        'nome' =>'Glaucio',
//        'idade'=>'25'
//));
//
//print_r($pessoas[0]['nome']);
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//$pessoas = array();
//array_push($pessoas, array(
//        'nome' => 'João',
//        'idade'=>20
//    ));
//
//array_push($pessoas, array(
//        'nome' =>'Glaucio',
//        'idade'=>'25'
//));
//
//echo json_encode($pessoas);
//
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":"25"}]';
//
//$data = json_decode($json, true);
//
//var_dump($data);
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//define("SERVIDOR","127.0.0.1");
//
//echo SERVIDOR;
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<!--                                    SÓ NA VERSÃO 7 DO PHP-->

<?php
//
//define("BANCO_DE_DADOS", [
//        '127.0.0.1',
//        'root',
//        'password',
//        'test'
//]);
//var_dump(BANCO_DE_DADOS);
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//function ola(){
//
//    return "Olá Mundo!<br>";
//
//}
//
//echo ola();
//$frase = ola();
//
//echo strlen($frase);
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//function salario(){
//
//    return 946.00;
//
//}
//
//echo "Jose recebeu 3 salarios: ".(salario()*3);
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//function ola($texto = "Mundo", $periodo = "bom dia"){
//
//    return "Olá $texto! $periodo!<br>";
//
//}
//
//echo ola("mundo","bom dia" );
//echo ola("", "Boa noite!");
//echo ola("Glaucio", "Boa tarde!");
//echo ola("João", "");
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//function ola(){
//
//    $argumentos = func_get_args();
//
//    return $argumentos;
//
//}
//var_dump(ola ("Bom dia"));
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//$a = 10;
//
//function trocavalor(&$a){
//
//    $a += 50;
//
//    return $a;
//
//}
//
//$a = trocavalor($a);
//echo "<br>";
//echo $a;
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//$pessoas = array(
//        'nome'=>'joão',
//        'idade'=>20
//);
//foreach ($pessoas as $value){
//    echo $value.'br';
//
//}
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//$empresaA=array();
//
//$empresaA['Joao'] = '1000';
//$empresaA['Maria'] = '2000';
//$empresaA['Malaquias'] = '3000';
//
//
//$empresaB['Pedro'] = '4000';
//$empresaB['Marcia'] = '5000';
//$empresaB['Dilma'] = '6000';
//
//
//$salariosEmpresas['Microsoft']=$empresaA;
//
//$salariosEmpresas['PSN']=$empresaB;
//
//
//function deixaBonito($simbolo,$coisaPraDeixarBonito){
//
//    return "{$simbolo} {$coisaPraDeixarBonito} <br>";
//
//}
//
//foreach ($salariosEmpresas as $empresas=>$funcionarios){
//
//    if($empresas=='Microsoft'){
//        $simbolo="R$";
//
//    }else{
//        $simbolo="US$";
//    }
//
//    foreach($funcionarios as $nome=>$salario){
//
//        echo $nome.':'.deixaBonito($simbolo,$salario);
//        echo '<br>';
//    }
//
//}
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//$hierarquia = array(
//        array(
//                'nome_cargo' =>'CEO',
//                'subordinados'=>array(
//                        //Inicio: Diretor comercial
//                        array(
//                                'nome_cargo'=>'diretor Comecial',
//                                'subordinados'=>array(
//                                    //Inicio do gerente de vendas
//                                    array(
//                                            'nome_cargo'=>'Gerente de vendas'
//                                    )
//                                    //Termino do gerente de vendas
//                                )
//                        ),
//                        //Termino: Diretor comercial
//                        //Inicio diretor finaceiro
//                        array(
//                            'nome_cargo'=>'Diretor Financeiro',
//                            'subordinados'=>array(
//                                    //Inicio: Gerente de Contas a Pagar
//                                    array(
//                                            'nome_cargo'=>'gerente de contas a pagar',
//                                            'subordinados'=>array(
//                                               //inicio do Supervisor de Pagamentos
//                                                array(
//                                                        'nome_cargo'=>'supervisor de Pagamentos'
//                                                )
//                                               //termino de Supervisor de Pagamentos
//                                            )
//                                    ),
//                                    //Termino: Gerente de compras a pagar
//                                    //Inicio: Gerente de Compras
//                                    array(
//                                            'nome_cargo'=>'Gerente de Compras',
//                                            'subordinados'=>array(
//                                                    //inicio: Supervisor de Suprimentos
//                                                    array(
//                                                            'nome_cargo'=>'Supervisor de Suprimentos',
//                                                            'subordinados'=>array(
//
//                                                                    array(
//                                                                           'nome_cargo'=>'Funcionário'
//                                                                    )
//                                                            )
//                                                    )
//                                                    //Termino Supervisor de Suprimentos
//
//                                            )
//                                    )
//                            )
//                        )
//                        //Termino diretor financeiro
//                )
//        )
//);
//
//function exibe($cargos){
//
//    $html = '<ul>';
//
//    foreach ($cargos as $cargo){
//
//        $html .= "<li>";
//
//        $html .= $cargo['nome_cargo'];
//
//        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
//
//            $html .= exibe($cargo['subordinados']);
//        }
//
//        $html .= "</li>";
//
//    }
//
//    $html .="</ul>";
//
//    return $html;
//
//}
//
//echo exibe($hierarquia);
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//function test($callback){
//
//    //Processo lento
//
//    $callback();
//
//}
//
//test(function(){
//
//    echo"Terminou!";
//
//});
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//$fn = function($a){
//
//    var_dump($a);
//
//};
//
//$fn("Oi");
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//echo date("d/m/Y H:i:s", 1653568403);
//
//echo "<br>";
//
//echo time();
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//$ts = strtotime("+1 day");
//
////var_dump();
//
//$data = date("l, d/m/Y h:m", $ts);
//
//var_dump($data);
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
//
//echo ucwords(strftime("%A %B"));
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php

$dt = new DateTime();

$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s");

$dt->add($periodo);

echo "<br>";

echo $dt->format("d/m/Y H:i:s");

?>
