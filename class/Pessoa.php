<?php

    class Pessoa{

        private $pessoaId;
        private $pessoaNome;
        private $pessoaIdade;
        private $pessoaCpf;

        public function getPessoaId(){
            return $this->pessoaId;
        }

        public function setPessoaId($value){
            $this->pessoaId=$value;
        }

        public function getPessoaNome(){
            return $this->pessoaNome;
        }

        public function setPessoaNome($value){
            $this->pessoaNome=$value;
        }

        public function getPessoaIdade(){
            return $this->pessoaIdade;
        }

        public function setPessoaIdade($value){
            $this->pessoaIdade=$value;
        }

        public function getPessoaCpf(){
            return $this->pessoaCpf;
        }

        public function setPessoaCpf($value){
            $this->pessoaCpf=$value;
        }

        public function loadById($id){
            $sql= new Sql();

            $results=$sql->select("SELECT * FROM tb_pessoa WHERE TB_PESSOA_ID = :ID", array(
                ":ID"=>$id
            ));

            if(count($results)>0){

                $row= $results[0];

                $this->setPessoaId($row['TB_PESSOA_ID']);
                $this->setPessoaNome($row['TB_PESSOA_NOME']);
                $this->setPessoaIdade($row['TB_PESSOA_IDADE']);
                $this->setPessoaCpf($row['TB_PESSOA_CPF']);
                //para data $this->setDataCadastro(new DateTime($row['data cadastro']));

            }
        }

        public static function getList(){

            $sql= new Sql();

            return $sql->select("SELECT * FROM tb_pessoa ORDER BY TB_PESSOA_NOME;");

        }

        public static function search($nome){
            $sql = new Sql();

            return $sql->select("SELECT * FROM tb_pessoa WHERE TB_PESSOA_NOME like :SEARCH ORDER BY TB_PESSOA_NOME;",array(
                ":SEARCH"=>"%".$nome."%"
            ));

        }

        public function login($nome,$cpf){

            $sql= new Sql();

            $results=$sql->select("SELECT * FROM tb_pessoa WHERE TB_PESSOA_NOME = :NOME AND TB_PESSOA_CPF = :CPF", array(
                ":NOME"=>$nome,
                ":CPF"=>$cpf
            ));

            if(count($results)>0){

                $row= $results[0];

                $this->setPessoaId($row['TB_PESSOA_ID']);
                $this->setPessoaNome($row['TB_PESSOA_NOME']);
                $this->setPessoaIdade($row['TB_PESSOA_IDADE']);
                $this->setPessoaCpf($row['TB_PESSOA_CPF']);
                //para data $this->setDataCadastro(new DateTime($row['data cadastro']));

            }else{
                throw new Exception("Nome e/ou senha invalidos");
            }

        }

        public function __toString(){

            return json_encode(array(
                "TB_PESSOA_ID"=>$this->getPessoaId(),
                "TB_PESSOA_NOME"=>$this->getPessoaNome(),
                "TB_PESSOA_IDADE"=>$this->getPessoaIdade(),
                "TB_PESSOA_CPF"=>$this->getPessoaCpf()
                //para data no final do get coloca ->format("d/m/Y H:I:s")
            ));

        }

    }

?>