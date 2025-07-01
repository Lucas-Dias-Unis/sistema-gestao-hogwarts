<?php

namespace Hogwarts\Model\Admissoes;

/**
 * Gerencia o processo de convite e cadastro de novos alunos.
 */
class GerenciadorAdmissoes
{
    /**
     * Simula a criação e o envio de uma carta-convite.
     */
    public function enviarCartaConvite(Aluno $aluno): void
    {
        echo "-> [M1] Carta-convite enviada para {$aluno->getNome()}.\n";
    }

    /**
     * Simula a confirmação de recebimento da carta pelo aluno.
     */
    public function confirmarRecebimento(Aluno $aluno): void
    {
        echo "-> [M1] {$aluno->getNome()} confirmou o recebimento e sua participação.\n";
    }

    /**
     * Exibe um relatório de status dos convites.
     */
    public function visualizarStatusConvites(): void
    {
        echo "-> [M1] Relatório: 150 convites enviados, 148 confirmados.\n";
    }
}
