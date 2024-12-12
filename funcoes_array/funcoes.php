<?php
    function somarArray($numeros) {
        $soma = 0;
        foreach ($numeros as $numeros) {
            $soma += $numeros; 

            }
            return $soma;

        }
        $meuArray = [5, 10, 15, 20];
        echo "A soma do array é: " . somarArray($meuArray) . "<br>";

        $produto = [
            "nome" => "Notebook",
            "preco" => 3000.00,
            "quantidade" => 2
        ];

        echo "Produto: " . $produto["nome"] . "<br>";
        echo "Preço Total: " . ($produto["preço"] * $produto["quantidade"]);
?>