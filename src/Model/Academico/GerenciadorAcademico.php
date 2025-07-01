<?php
namespace Hogwarts\Model\Academico;

use Hogwarts\Model\Admissoes\Aluno;
use Hogwarts\Model\CorpoDocente\Professor;
use Hogwarts\Model\Casas\Casa;

/**
 * Gerencia o registro de notas e a aplicação de pontos às casas.
 */
class GerenciadorAcademico
{
    /**
     * Registra a nota de um aluno em uma disciplina.
     */
    public function registrarNota(Professor $professor, Aluno $aluno, string $nota): void
    {
        $aluno->adicionarNota($professor->getDisciplina(), $nota);
        echo "-> [M4] Prof. {$professor->getNome()} registrou a nota '{$nota}' para {$aluno->getNome()} em {$professor->getDisciplina()}.\n";
    }

    /**
     * Aplica bônus ou penalidades de pontos a uma casa.
     */
    public function aplicarPontos(Casa $casa, int $pontos, string $motivo): void
    {
        $casa->adicionarPontos($pontos);
        $acao = $pontos > 0 ? "Bônus" : "Penalidade";
        $valor = abs($pontos);
        echo "-> [M4] {$acao} de {$valor} pontos para a casa {$casa->getNome()} por: '{$motivo}'.\n";
    }
}
