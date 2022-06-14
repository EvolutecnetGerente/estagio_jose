<?php
//
//class Pessoa {
//
//    public $nome; //Atributo
//
//    public function falar(){  //Método
//        return "O meu nome é: ".$this->nome;
//    }
//
//}
//
//$glaucio = new Pessoa();
//$glaucio->nome = "<strong>Glaucio Daniel</strong>";
//echo $glaucio->falar();
//
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//class Carro{ //criando classe carro
//
//    private $modelo; // atributo
//    private $motor; // atributo
//    private $ano; // atributo
//
//                                          // metodos get e set
//
//    public function getModelo(){ //pega o valor
//
//        return $this->modelo;
//    }
//
//    public function setModelo($modelo){ //define o valor
//
//        $this->modelo = $modelo;
//
//    }
//
//    public function getMotor(){ //pega o valor
//
//        return $this->motor;
//
//    }
//
//    public function setMotor($motor){ //define o valor
//
//        $this->motor = $motor;
//
//    }
//
//    public function getAno(){ //pega o valor
//
//        return $this->ano;
//
//    }
//
//    public function setAno($ano){ //define o valor
//
//        $this->ano = $ano;
//
//    }
//
//    public function exibir(){
//
//        return array(
//            "modelo"=>$this->getModelo(),
//            "motor"=>$this->getMotor(),
//            "ano"=>$this->getAno()
//        );
//    }
//}
//
//$gol = new Carro();
//$gol->setModelo("Gol GT");
//$gol->setMotor("1.6");
//$gol->setAno("2017");
//
//print_r($gol->exibir());
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//class Documento {
//
//    private $numero;
//
//    public function getNumero(){
//        return $this->numero;
//    }
//
//    public function setNumero($numero){
//        $resultado = documento :: validarCPF($numero);
//
//        if($resultado === false){
//
//            throw new Exception("CPF informado não é valido.", 1);
//
//        }
//
//        $this->numero = $numero;
//    }
//
//    public static function validarCPF($cpf){
//
//                //verifica se um número foi informado
//        if(empty($cpf)) return false;
//
//                //Elimina possivel mascara
//        $cpf = preg_replace('[^0-9]', '', $cpf);
//        $cpf = str_pad($cpf, 11, "0", STR_PAD_LEFT);
//
//                //Verifica se o numero de digitos informados é igual a 11
//        if(strlen($cpf)!=11){
//            return false;
//        }
//                //verifica se nenhuma das sequencias invalidas abaixo
//                //foi digitada. Caso afirmativo, retorna falso
//        else if ($cpf == '00000000000' ||
//            $cpf == '11111111111' ||
//            $cpf == '22222222222' ||
//            $cpf == '33333333333' ||
//            $cpf == '44444444444' ||
//            $cpf == '55555555555' ||
//            $cpf == '66666666666' ||
//            $cpf == '77777777777' ||
//            $cpf == '88888888888' ||
//            $cpf == '99999999999') {
//            return false;
//        }
//                //Calcula os digitos verificadores para verificar se o
//                //CPF é valido
//        else {
//
//            for($t = 9; $t < 11; $t++){
//
//              for ($d = 0, $c = 0; $c < $t; $c++){
//                  $d += $cpf{$c} * (($t + 1) - $c);
//              }
//              $d = ((10 * $d) % 11) % 10;
//              if ($cpf{$c} != $d) {
//                return false;
//              }
//
//            }
//        }
//
//        return true;
//    }
//
//}
//
//$cpf = new Documento();
//$cpf->setNumero("12336539856");
//
//var_dump($cpf->getNumero());
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//class Endereco{
//
//    private $logradouro;
//    private $numero;
//    private $cidade;
//
//    public function __construct($a, $b, $c){
//        $this->logradouro =$a;
//        $this->numero =$b;
//        $this->cidade =$c;
//    }
//
////    public function __destruct(){
////        var_dump("DESTRUIR");
////    }
//
//    public function __toString(){
//        return $this->logradouro.", ".$this->numero.", ".$this->cidade;
//    }
//}
//
//$meuEndereco = new Endereco("Rua Adema", "228", "Carpazinha");
//
//echo $meuEndereco
//
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//Class Pessoa{
//
//    public $nome = "Rasmus Lerdorf";
//    protected $idade = 48;
//    private $senha = "123456";
//
//    public function verDados(){
//
//        echo $this->nome . "<br/>";
//        echo $this->idade . "<br/>";
//        echo $this->senha . "<br/>";
//    }
//
//}
//
//class Programador extends Pessoa{
//
//    public function verDados(){
//
//        echo get_class($this) . "<br/>"; //saber de que classe está vindo
//
//        echo $this->nome . "<br/>";
//        echo $this->idade . "<br/>";
//        echo $this->senha . "<br/>";
//    }
//
//}
//
//$objeto = new Programador();
//
////echo $objeto->nome  . "<br/>";
//
//$objeto->verDados();
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//class Documento {
//
//    private $numero
//
//    public function getNumero(){
//
//        return $this->numero;
//    }
//
//    public function setNumero($n){
//
//        $this->numero = $n;
//    }
//}
//
//class CPF extends Documento{
//
//    public function validar(){
//
//        $numeroCPF = $this->getNumero();
//
//        //aqui vai a validação do CPF...
//
//        return true;
//    }
//}
//$doc = new CPF();
//$doc->setNumero("111222333-44")
//$doc->validar();
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//interface Veiculo {
//
//    public function acelerar($velocidade);
//    public function frenar($velocidade);
//    public function trocarMarcha($marcha);
//}
//
//class Civic implements Veiculo{
//
//    public function acelerar($velocidade){
//        echo "O veiculo acelerou até: " . $velocidade . "km/h" . "<br/>";
//    }
//
//    public function frenar($velocidade){
//        echo "O veiculo frenou até: " . $velocidade . "km/h" . "<br/>";
//    }
//
//    public function trocarMarcha($marcha){
//        echo "O veiculo engatou a marcha: " . $marcha . "<br/>";
//    }
//
//}
//
//$carro = new Civic();
//$carro -> trocarMarcha(1);
//$carro -> acelerar(20);
//$carro -> trocarMarcha(2);
//$carro -> acelerar(35);
//$carro -> trocarMarcha(3);
//$carro -> acelerar(40);
//$carro -> trocarMarcha(4);
//$carro -> acelerar(55);
//$carro -> frenar(30);
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php
//
//abstract class Animal {
//
//    public function falar(){
//        return "Som";
//    }
//
//    public function mover(){
//        return "Anda";
//    }
//
//}
//
//class Cachorro extends Animal {
//
//    public function falar(){
//        return "Late";
//    }
//}
//
//class Gato extends Animal{
//
//    public function falar(){
//        return "Mia";
//    }
//
//}
//
//class Passarinho extends Animal{
//
//    public function falar(){
//        return "Canta";
//    }
//
//    public function mover(){
//        return "Voar e " . parent::mover();
//    }
//
//}
//
//$pluto = new cachorro();
//
//echo $pluto -> falar() . "<br/>";
//echo $pluto -> mover() . "<br/>";
//
//echo "-----------------------<br>";
//
//$garfield = new Gato();
//
//echo $garfield -> falar() . "<br/>";
//echo $garfield -> mover() . "<br/>";
//
//echo "-----------------------<br>";
//
//$piuPiu = new Passarinho();
//
//echo $piuPiu -> falar() . "<br/>";
//echo $piuPiu -> mover() . "<br/>";
//
//?>
<!--------------------------------------------------------------------------------------------------------------------->
<?php



?>
