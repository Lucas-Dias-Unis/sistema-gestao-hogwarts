<?php
namespace Hogwarts\Model\Comunicacao;

/**
 * Gerencia o envio de alertas e comunicados agendados.
 */
class GerenciadorComunicacao
{
    /**
     * Envia um alerta em tempo real.
     */
    public function enviarAlerta(string $remetente, string $destinatario, string $mensagem): void
    {
        echo "-> [M6] ALERTA de {$remetente} para {$destinatario}: '{$mensagem}'.\n";
    }

    /**
     * Agenda um comunicado para uma data futura.
     */
    public function agendarComunicado(string $data, string $mensagem): void
    {
        echo "-> [M6] Comunicado agendado para {$data}: '{$mensagem}'.\n";
    }
}
