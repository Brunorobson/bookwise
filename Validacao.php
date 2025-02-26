<?php
class Validacao
{

    public $validacoes;

    public static function validar($regras, $dados)
    {
        $validacao = new Validacao();
        //pode ser $validacao = new self();
        foreach ($regras as $campo => $regrasDoCampo) {
            foreach ($regrasDoCampo as $regra) {
                $valorDoCampo = $dados[$campo];
                if ($regra == 'confirmed') {
                    $validacao->$regra($campo, $valorDoCampo, $dados["{$campo}_confirmacao"]);
                } elseif (str_contains($regra, ':')) {
                    $temp = explode(":", $regra);
                    $regra = $temp[0];
                    $parametro = $temp[1];
                    $validacao->$regra($parametro, $campo, $valorDoCampo);
                } else {
                    $validacao->$regra($campo, $valorDoCampo);
                }
            }
        }
        return $validacao;
    }

    private function required($campo, $valor)
    {
        if (strlen($valor) == 0) {
            $this->validacoes[] = "O campo $campo é obrigatório";
        }
    }

    private function email($campo, $valor)
    {
        if (!filter_var($valor, FILTER_VALIDATE_EMAIL)) {
            $this->validacoes[] = "O campo $campo deve ser um email válido";
        }
    }

    private function confirmed($campo, $valor, $valorDeConfirmacao)
    {
        if ($valor != $valorDeConfirmacao) {
            $this->validacoes[] = "Os campos $campo de confirmação esta diferente";
        }
    }

    private function min($min, $campo, $valor)
    {
        if (strlen($valor) <= $min) {
            $this->validacoes[] = "O campo $campo deve ter pelo menos $min caracteres";
        }
    }

    private function max($max, $campo, $valor)
    {
        if (strlen($valor) > $max) {
            $this->validacoes[] = "O campo $campo deve ter no maximo $max caracteres";
        }
    }
    private function strong($campo, $valor)
    {
        if (!strpbrk($valor, '!@#$%()*^&')) {
            $this->validacoes[] = "O campo $campo deve conter pelo menos um caractere especial";
        }
    }
    public function naoPassou()
    {
        $_SESSION['validacoes'] = $this->validacoes;
        return sizeof($this->validacoes) > 0;
    }
}
