<?php 
function diaDaSemana(int $dia): string{
    switch($dia){
        case 1:
            return 'Segunda-feira';
            break;
        case 2:
            return 'Terça-feira';
            break;
        case 3:
            return 'Quarta-feira';
            break;
        case 4:
            return 'Quinta-feira';
            break;
        case 5:
            return 'Sexta-feira';
            break;
        case 6:
            return 'Sábado';
            break;
        case 7:
            return 'Domingo';
            break; 
        default:
            return 'Dia inválido';
            break; 

    }
}

echo "Dia da semana: ".diaDaSemana(8);

?>