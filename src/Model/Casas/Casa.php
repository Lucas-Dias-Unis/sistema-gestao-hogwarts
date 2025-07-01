<?php
// ARQUIVO: src/Model/Casas/Casa.php
namespace Hogwarts\Model\Casas;

use Hogwarts\Model\Admissoes\Aluno;

/**
 * Representa uma das quatro casas de Hogwarts, com nomes e valores em português.
 */
class Casa
{
    private $nome;
    private $valores;
    private $pontos = 0;
    private $alunos = [];

    public function __construct(string $nome, array $valores)
    {
        $this->nome = $nome;
        $this->valores = $valores;
    }

    public function getNome(): string { return $this->nome; }
    public function getPontos(): int { return $this->pontos; }
    public function getValores(): array { return $this->valores; }

    public function adicionarAluno(Aluno $aluno): void
    {
        $this->alunos[] = $aluno;
    }

    public function adicionarPontos(int $pontos): void
    {
        $this->pontos += $pontos;
    }
}
