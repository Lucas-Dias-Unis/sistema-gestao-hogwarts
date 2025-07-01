<?php
namespace Hogwarts\Model\CorpoDocente;

use Hogwarts\Model\Compartilhado\Pessoa;

/**
 * Representa um professor de Hogwarts. Herda de Pessoa.
 */
class Professor extends Pessoa
{
    private $disciplina;

    public function __construct(string $nome, string $disciplina)
    {
        parent::__construct($nome);
        $this->disciplina = $disciplina;
    }

    public function getDisciplina(): string
    {
        return $this->disciplina;
    }

    /**
     * Simula a consulta do cronograma de aulas pelo professor.
     */
    public function consultarCronograma(): void
    {
        echo "-> [M5] Prof. {$this->getNome()} consultou seu cronograma de aulas de {$this->getDisciplina()}.\n";
    }
}
