<?php
// ARQUIVO: app.php
// Carrega todas as classes do projeto automaticamente via Composer.
require __DIR__ . '/vendor/autoload.php';

// Importa as classes que serão utilizadas
use Hogwarts\Model\Admissoes\GerenciadorAdmissoes;
use Hogwarts\Model\Admissoes\Aluno;
use Hogwarts\Model\Casas\Casa;
use Hogwarts\Model\Casas\ChapeuSeletor;
use Hogwarts\Model\Torneios\GerenciadorTorneios;
use Hogwarts\Model\Academico\GerenciadorAcademico;
use Hogwarts\Model\CorpoDocente\Professor;
use Hogwarts\Model\Comunicacao\GerenciadorComunicacao;

// --- Bloco de Execução Principal ---
echo "=========================================================\n";
echo "      Sistema de Gestão de Hogwarts - Simulação Completa\n";
echo "=========================================================\n\n";

// --- Configuração Inicial do Sistema ---
// Cria as casas de Hogwarts com seus valores em português
$casas = [
    new Casa("Grifinória", ["Coragem", "Ousadia", "Cavalheirismo", "Determinação"]),
    new Casa("Sonserina", ["Ambição", "Astúcia", "Liderança", "Busca por poder"]),
    new Casa("Lufa-Lufa", ["Lealdade", "Dedicação", "Trabalho duro", "Justiça"]),
    new Casa("Corvinal", ["Inteligência", "Aprendizado", "Sabedoria", "Criatividade"])
];

// Instancia os gerenciadores de cada módulo
$admissoes = new GerenciadorAdmissoes();
$chapeuSeletor = new ChapeuSeletor($casas);
$academico = new GerenciadorAcademico();
$torneios = new GerenciadorTorneios();
$comunicacao = new GerenciadorComunicacao();
$professorSnape = new Professor("Severo Snape", "Poções");

// --- Simulação do Fluxo de um Ano Letivo ---

// 1. Admissão de novos alunos (AGORA COMPLETO PARA TODOS)
echo "--- Módulo 1: Admissão de Novos Alunos ---\n";
$alunoHarry = new Aluno("Harry Potter");
$alunoHermione = new Aluno("Hermione Granger");
$alunoDraco = new Aluno("Draco Malfoy");
$alunoCedrico = new Aluno("Cedrico Diggory");

$admissoes->enviarCartaConvite($alunoHarry);
$admissoes->enviarCartaConvite($alunoHermione);
$admissoes->enviarCartaConvite($alunoDraco);
$admissoes->enviarCartaConvite($alunoCedrico);

$admissoes->confirmarRecebimento($alunoHarry);
$admissoes->confirmarRecebimento($alunoHermione);
$admissoes->confirmarRecebimento($alunoDraco);
$admissoes->confirmarRecebimento($alunoCedrico);
echo "\n";

// 2. Cerimônia de Seleção
echo "--- Módulo 2: Cerimônia de Seleção ---\n";
$chapeuSeletor->selecionarCasa($alunoHarry, "Coragem, Ousadia");
$chapeuSeletor->selecionarCasa($alunoHermione, "Inteligência, Determinação, Coragem");
$chapeuSeletor->selecionarCasa($alunoDraco, "Ambição, Astúcia, Liderança");
$chapeuSeletor->selecionarCasa($alunoCedrico, "Lealdade, Justiça, Trabalho duro");
echo "\n";

// 3. Vida Acadêmica e Disciplinar
echo "--- Módulo 4: Vida Acadêmica ---\n";
$academico->registrarNota($professorSnape, $alunoHarry, "E (Excepcional)");
$academico->registrarNota($professorSnape, $alunoDraco, "A (Aceitável)");
$alunoHarry->exibirBoletim();
$alunoDraco->exibirBoletim();
$academico->aplicarPontos($alunoHarry->getCasa(), 20, "Poção perfeitamente executada.");
$academico->aplicarPontos($alunoDraco->getCasa(), -10, "Conversa durante a aula.");
echo "\n";

// 4. Competições e Ranking
echo "--- Módulo 3: Taça das Casas ---\n";
$torneios->criarTorneio("Torneio de Duelos", "Varinhas em punho!");
$torneios->inscreverAluno($alunoHarry, "Torneio de Duelos");
$torneios->inscreverAluno($alunoCedrico, "Torneio de Duelos");
$torneios->gerarRanking($casas);
echo "\n";

// 5. Comunicação
echo "--- Módulo 6: Comunicações ---\n";
$comunicacao->enviarAlerta("Prof. Dumbledore", "Todos", "O Torneio de Duelos começará em breve.");
echo "\n";

echo "=========================================================\n";
