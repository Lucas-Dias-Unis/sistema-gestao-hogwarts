<?php
// ARQUIVO: src/Model/Compartilhado/Pessoa.php
namespace Hogwarts\Model\Compartilhado;

/**
 * Classe Abstrata Pessoa.
 * Define a base para qualquer indivíduo no sistema (Aluno, Professor).
 * Utiliza Herança para compartilhar propriedades comuns.
 */
abstract class Pessoa
{
    protected $id;
    protected $nome;

    public function __construct(string $nome)
    {
        $this->id = uniqid();
        $this->nome = $nome;
    }

    public function getId(): string { return $this->id; }
    public function getNome(): string { return $this->nome; }
}
