<a href="agdp.php">ENTRAR</a>
<br>
<a href="index.php">VOLTAR</a>
<?php 
    class MeuBanco{
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;
        
        public function abrirConta($t){
                $this->setStatus(true);
                $this->setTipo($t);
            if ($this->status == false && $this->tipo == "CP" || $this->tipo=="cp"){
                $this->setSaldo(150); 
            }elseif($this->status == false && $this->tipo=="CC" || $this->tipo=="cc"){
                $this->setSaldo(50);
            } 
        }

        public function fecharConta(){
            if($this->getSaldo() == 0 && $this->getStatus()==true) {
                $this->setStatus(false);
                $this->setnumConta(false);
                $this->setDono(false);
                echo"<p>Fechando conta, foi um prazer ter você conosco " .$this->getDono(). "</p>";
            } else {
                echo "<p> Não foi possível fechar a conta, verifique se há algum valor nela. </p>";
            }
            
        }

        public function depositar($v){
            if ($this->getStatus() == true) {
                $this->setSaldo($this->getSaldo()+$v);
                echo "<p> Depósito concluído de $v na conta de " .$this->getDono(). "</p>";
            } else {
                echo "[ERRO], tente novamente ou chame um gerente.";
            }
        }
        
        public function sacar($v){
            if($this->getSaldo() >= $v && $this->getStatus() == true){
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p> Saque de $v R$ concluído, na conta de " .$this->getDono()."</p>";
            }else{
                echo "Não foi possível completar o saque.";
            }
        }
        
        public function pagarMensal(){
            if ($this->getTipo() == "CC" || $this->getTipo() == "cc" && $this->getSaldo() > 0) {
                $v = 12;
                $this->setSaldo($this->getSaldo() - 12);
                echo "<p> Mensalidade de $v R$ debitada da conta de " .$this->getDono(). "</p>";
            }elseif ($this->getTipo() == "CP" || $this->getTipo()=="cp" && $this->getSaldo() > 0) {
                $v = 20;
                $this->setSaldo($this->getSaldo() - 20);
                echo "<p> Mensalidade de $v R$ debitada da conta de " .$this->getDono(). "</p>";
            }else{
                echo "Problemas com a conta, não posso cobrar";
            }
        }
         
        //Métodos Especiais       
                
        public function setSaldo($s){
            $this->saldo = $s;
        }
        
        public function getSaldo(){
            return $this->saldo;
        }
        public function setnumConta($n){
            $this->numConta = $n;
        }

        public function getnumConta(){
            return $this->numConta;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function setTipo($t){
            $this->tipo = $t;
        }
        
        public function setStatus($st){
            $this->status = $st;
        }

        public function getStatus(){
            return $this->status;
        }
        
        public function getDono(){
            return $this->dono;
        }
        
        public function setDono($d){
            $this->dono = $d;
        }
        
        public function __construct(){
            $this->setSaldo(0);
            $this->setSaldo(false);
            echo "<p> Conta criada com sucesso";
        }
    }
    
?>