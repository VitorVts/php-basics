<!-- 🧠 Desafio 8: Função normalizarNome()

    Crie uma função que receba um nome todo em maiúsculas e retorne formatado: primeira letra maiúscula, o resto minúsculo.

    Ex: "MARIA" → "Maria"
 -->

 <?php
    
    function normalizarNome(string $nome) : string {
        $nome = strtolower($nome);
       return  ucfirst($nome);
    }

    print_r(normalizarNome("VItOR") . PHP_EOL);
