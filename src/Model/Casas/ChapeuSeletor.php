<?php
// ARQUIVO: src/Model/Casas/ChapeuSeletor.php
namespace Hogwarts\Model\Casas;

use Hogwarts\Model\Admissoes\Aluno;

/**
 * Contém a lógica aprimorada para a seleção de um aluno para uma casa.
 */
class ChapeuSeletor
{
    private $casas;

    public function __construct(array &$casas)
    {
        $this->casas = &$casas;
    }

    /**
     * Associa um aluno a uma casa, com lógica de desempate.
     */
    public function selecionarCasa(Aluno $aluno, string $caracteristicas): void
    {
        $caracteristicasAluno = explode(', ', $caracteristicas);
        
        $melhoresCasas = [];
        $maiorPontuacao = -1;

        foreach ($this->casas as $casa) {
            $pontuacaoAtual = count(array_intersect($caracteristicasAluno, $casa->getValores()));

            if ($pontuacaoAtual > $maiorPontuacao) {
                $maiorPontuacao = $pontuacaoAtual;
                $melhoresCasas = [$casa]; // Começa uma nova lista de melhores casas
            } elseif ($pontuacaoAtual === $maiorPontuacao && $maiorPontuacao > 0) {
                $melhoresCasas[] = $casa; // Adiciona à lista de casas empatadas
            }
        }
        
        // Lógica de decisão final
        $casaEscolhida = null;
        if (count($melhoresCasas) === 1) {
            $casaEscolhida = $melhoresCasas[0];
        } elseif (count($melhoresCasas) > 1) {
            // Regra de desempate: Se a Grifinória for uma opção, a coragem prevalece.
            foreach ($melhoresCasas as $casa) {
                if ($casa->getNome() === 'Grifinória') {
                    $casaEscolhida = $casa;
                    break;
                }
            }
            // Se não houver Grifinória no empate, escolhe a primeira opção
            if (!$casaEscolhida) {
                $casaEscolhida = $melhoresCasas[0];
            }
        }

        if ($casaEscolhida) {
            $aluno->setCasa($casaEscolhida);
            $casaEscolhida->adicionarAluno($aluno);
            echo "-> [M2] O Chapéu Seletor, considerando '{$caracteristicas}', decidiu: {$aluno->getNome()} irá para a casa {$casaEscolhida->getNome()}!\n";
        } else {
            echo "-> [M2] O Chapéu Seletor está indeciso sobre {$aluno->getNome()}.\n";
        }
    }
}
