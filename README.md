# 🐘 PHP POO Skeleton

[![PHP Version](https://img.shields.io/badge/php-8.1%2B-blue)](https://www.php.net/)
[![License: MIT](https://img.shields.io/badge/license-MIT-green.svg)](LICENSE)
[![Composer](https://img.shields.io/badge/Autoload-PSR--4-orange)](https://getcomposer.org/doc/04-schema.md#autoload)

---

## 🇧🇷 Português

Projeto base em PHP 8+ para uso em atividades da disciplina de **POO — Programação Orientada a Objetos**.  
Ideal para estudantes dos cursos de **Análise e Desenvolvimento de Sistemas**, **Ciência da Computação** e **Engenharia de Software**.  
Utiliza Composer e Autoload PSR-4 para ensinar boas práticas de organização e estruturação de código orientado a objetos.

### ✅ Estrutura
```
php-poo-skeleton/
├── composer.json
├── .gitignore
├── README.md
├── src/
│   └── Model/
│       └── Example.php
└── app.php
```

### 🚀 Como Usar

1. Clone o projeto:

```
git clone https://github.com/angelomesquita/php-poo-skeleton.git
cd php-poo-skeleton
```
2. Instalação
```
composer install
composer dump-autoload
```

3. Execute o arquivo `app.php`
```
php app.php
```
4. Você verá:
```
Hi, OOP World in PHP!
```

## Licença

Este projeto está licenciado sob a Licença MIT - veja o arquivo [LICENSE](LICENSE) para detalhes.

## Integrantes da Equipe

-   Lucas Dias
-   Kauan Gonçalves
-   Davi Gomes
-   Carlos Alberto
-   João Pedro Ferreira

## Descrição dos Módulos Implementados

O sistema foi dividido em seis módulos principais, cada um com responsabilidades específicas:

-   **Módulo 1: Convite e Cadastro de Alunos**
    -   Automatiza o envio de cartas-convite para novos alunos, permite a confirmação de participação e a visualização do status dos convites.

-   **Módulo 2: Seleção de Casas**
    -   Gerencia a cerimônia do Chapéu Seletor, associando alunos a uma das quatro casas (Grifinória, Sonserina, Corvinal, Lufa-Lufa) e permitindo a consulta da distribuição de alunos.

-   **Módulo 3: Gerenciamento de Torneios e Competições**
    -   Permite a criação de torneios, a inscrição de alunos e o cálculo automático de pontos para a Copa das Casas, com geração de rankings.

-   **Módulo 4: Controle Acadêmico e Disciplinar**
    -   Possibilita o registro de notas pelos professores, a consulta de boletins pelos alunos e a aplicação de bônus ou penalidades de pontos às casas.

-   **Módulo 5: Gerenciamento de Professores e Funcionários**
    -   Centraliza o cadastro de professores, associando-os a disciplinas e permitindo que consultem seus cronogramas de aulas.

-   **Módulo 6: Sistema de Alertas e Comunicação**
    -   Moderniza a comunicação interna com um sistema de notificações digitais para envio de alertas em tempo real ou comunicados agendados.

## Instruções de Execução

Para executar este projeto, você precisará ter o [PHP](https://www.php.net/) e o [Composer](https://getcomposer.org/) instalados em sua máquina.

1.  **Clone o repositório:**
    ```bash
    git clone <URL_DO_SEU_REPOSITORIO>
    cd hogwarts-sistema
    ```

2.  **Instale as dependências:**
    O Composer irá gerar o arquivo `autoload.php`, essencial para carregar as classes do projeto automaticamente.
    ```bash
    composer install
    ```

3.  **Execute a simulação:**
    O arquivo `app.php` contém um script que simula o funcionamento integrado de todos os módulos. Para executá-lo, utilize o seguinte comando no seu terminal:
    ```bash
    php app.php
    ```



## 🇺🇸 English

This is a PHP 8+ skeleton project designed for Object-Oriented Programming (OOP) classes.
It serves as a base for practical exercises in Systems Analysis and Development, Computer Science, and Software Engineering courses.
Composer and PSR-4 Autoload are used to teach best practices in modern PHP application development.

### ✅ Structure
```
php-poo-skeleton/
├── composer.json
├── .gitignore
├── README.md
├── src/
│   └── Model/
│       └── Example.php
└── app.php
```

### 🚀 How to use

1. Clone the project:

```
git clone https://github.com/angelomesquita/php-poo-skeleton.git
cd php-poo-skeleton
```
2. Install Composer autoloader
```
composer install
composer dump-autoload
```

3. Run the file `app.php`
```
php app.php
```
4. You will see:
```
Hi, OOP World in PHP!
```
## License

This project is licensed under the MIT License—see the [LICENSE](LICENSE) file for details.
