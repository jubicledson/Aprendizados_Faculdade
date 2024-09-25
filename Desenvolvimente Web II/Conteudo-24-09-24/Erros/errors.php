<?php 

    class TryExcept{

        public function erroSoma($n1, $n2){
            try{
                $resultado = $n1 + $n2;
                echo $resultado;
            } catch (TypeError $erroDigitacao){
                echo "Erro: ".$erroDigitacao;
            }
            catch(Error $excecao){
                echo "Erro: ".$excecao->getMessage();
            }
        }

        public function erroSub($n1, $n2){
            try{
                $resultado = $n1 - $n2;
                echo $resultado;
            } catch (TypeError $erroDigitacao){
                echo "Erro: ".$erroDigitacao;
            }
            catch(Error $excecao){
                echo "Erro: ".$excecao->getMessage();
            }
        }

        public function erroMult($n1, $n2){
            try{
                $resultado = $n1 * $n2;
                echo $resultado;
            } catch (TypeError $erroDigitacao){
                echo "Erro: ".$erroDigitacao;
            }
            catch(Error $excecao){
                echo "Erro: ".$excecao->getMessage();
            }
        }

        public function erroDiv($n1, $n2){
            try{
                $resultado = $n1 / $n2;
                echo $resultado;
            }catch (TypeError $erroDigitacao){
                echo "Erro: ".$erroDigitacao;
            }catch (DivisionByZero $erroDivideZero){
                echo "Erro: ".$erroDivideZero;
            }
            catch(Error $excecao){
                echo "Erro: ".$excecao->getMessage();
            }
        }

    }

?>