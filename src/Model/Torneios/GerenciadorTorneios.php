<?php
namespace Hogwarts\Model\Torneios;

use Hogwarts\Model\Admissoes\Aluno;

/**
 * Gerencia a criação de torneios, inscrições e rankings.
 */
class GerenciadorTorneios
{
    public function criarTorneio(string $nome, string $regras): void
    {
        echo "-> [M3] Torneio '{$nome}' foi criado. Regras: '{$regras}'.\n";
    }

    public function inscreverAluno(Aluno $aluno, string $nomeTorneio): void
    {
        echo "-> [M3] {$aluno->getNome()} da casa {$aluno->getCasa()->getNome()} se inscreveu no '{$nomeTorneio}'.\n";
    }

    /**
     * Exibe o ranking atual da Copa das Casas.
     */
    public function gerarRanking(array $casas): void
    {
        echo "-> [M3] Ranking da Copa das Casas:\n";
        // A lógica de ordenação seria mais complexa em um sistema real.
        foreach ($casas as $casa) {
            echo "   - {$casa->getNome()}: {$casa->getPontos()} pontos.\n";
        }
    }
}
