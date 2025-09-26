<?php

// Declarar um ARRAY que contenha os nomes das disciplinas
// que vocês estão matriculados de segunda a sexta-feira.

// Criar outro ARRAY que contenha os nomes dos professores
// dessas disciplinas.

// Fazer um LOOP for, que faça 5 iterações, e escreva o seguinte:

// “Disciplina DDD, professor PPP.”


$disciplinas = [
                'Estrutura de Dados II', 
                'Engenharia de Software II', 
                'Administração e Sistemas de Informação', 
                'Programação Web I', 
                'Banco de Dados II
                '];

$professores = ['Fernando Bastos', 'Julian', 'Marciel', 'Cleber Nardelli', 'Marco'];

for ($i=0; $i < 5; $i++) { 
    echo 'Disciplina '. $disciplinas[$i] .', Professor '. $professores[$i] .'<br><br>';
}
