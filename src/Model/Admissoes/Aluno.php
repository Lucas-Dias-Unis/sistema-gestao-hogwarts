<?php
namespace Hogwarts\Model\Admissoes;

use Hogwarts\Model\Compartilhado\Pessoa;
use Hogwarts\Model\Casas\Casa;

/**
 * Classe Aluno.
 * Representa um estudante. Herda de Pessoa e possui associações
 * com outras classes, como Casa.
 */
class Aluno extends Pessoa
{
    private $casa = null;
    private $notas = [];

    public function setCasa(Casa $casa): void
    {
        $this->casa = $casa;
    }

    public function getCasa(): ?Casa
    {
        return $this->casa;
    }

    public function adicionarNota(string $disciplina, string $nota): void
    {
        $this->notas[$disciplina] = $nota;
    }

    public function exibirBoletim(): void
    {
        echo "   > Boletim de {$this->getNome()}:\n";
        if (empty($this->notas)) {
            echo "     Nenhuma nota registrada.\n";
            return;
        }
        foreach ($this->notas as $disciplina => $nota) {
            echo "     - {$disciplina}: {$nota}\n";
        }
    }
}