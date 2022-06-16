# Boas vindas ao repositório do projeto CRUD Com PHP!

Aqui você vai encontrar os detalhes de como Execulta o desenvolvimento do meu projeto a partir desse repositório.

# Entregáveis

<details>
  <summary><strong>🤷🏽‍♀️ Como execulta</strong></summary><br />

Para execulta o meu projeto você deverá da um git Clone deste repositório.

</details>

<details>
  <summary><strong>👨‍💻 O que foi desenvolvido</strong></summary><br />

Hoje, no projeto **_PHP CRUD _**, Usei meus conhecimentos para revisar e consolidar **todos** os principais conceitos vistos até o momento.

## Desenvolvimento

Você devera cria sua api com o nome api no arquivo .env.

Tambem tera que execulta o comando no seu terminal "php artisan migrate" para subir sua migrate para seu banco de dados Alerta verifique se as tabelas foram criadas no seu banco!.

Depois comando no seu terminal "php artisan serve" para abrir seu servido web. e verifica as tabelas Unidade e Empreendimentos do seu banco de dados Estao renderizadas na tela do seu desktop.

</details>

<details>
  <summary><strong>🗓 Data de Entrega</strong></summary><br />

-   Serão `2` dias de praso para o projeto.
-   Data de entrega: `16/06/2022 03:00`.

</details>

## Orientações

<details>
  <summary><strong>:Voce precisa ter o PHP e o Compose instalado na sua maquina</strong></summary><br />
  verifique se o PHP esta instalado com o camando no seu terminal "php -v"
</details>

-   Verificar se o Servi esta rodando localmente com http://127.0.0.1:8000/ como a rota padrão do DB;

## Como Criar no seu banco de dados, os Valores da tabela Unidades

-   utilizer a rota um banco com o nome de **`criarApiUnidade`** deste modo sua requisição deve se paresce com esta http://127.0.0.1:8000/criarApiUnidade

-   Depois Preenher os campos em Branco com valores no formato da migrate Unidade da pasta database/migrations

-   Depois e so salva e verifica no seu banco de dados!

<details>
  <summary><strong>👇 As configurações possuem o seguinte formato</strong></summary><br />
            $table->integer('codigo');
            $table->integer('bloco');
            $table->decimal('valor');
            $table->string('status');
</details>

## Como Ler no seu banco de dados, os Valores da tabela Unidades

-   utilizer a rota um banco com o nome de **`ler-unidade/'`** deste modo sua requisição deve se paresce com esta http://127.0.0.1:8000/ler-unidade/1'

-   Depois Verifica o ID no seu BANCO e Passa ele depois da / para que assim possa ver a Unidade

-   Assim sera retornado para vocÊ o Render das Informações da unidade!

## Como atualizar no seu banco de dados, os Valores da tabela Unidades

-   utilizer a rota um banco com o nome de **`atualizar-unidade/'`** deste modo sua requisição deve se paresce com esta http://127.0.0.1:8000/ler-unidade/1'

-   Depois Verifica o ID no seu BANCO e Passa ele depois da / para que assim possa atualizar a Unidade

-   Assim sera retornado para vocÊ o os campos das Informações da unidade para atualizar!

-   Depois click no Botão atualizar e verifica em seu banco de dados se foi atualizado

## Como Deleta no seu banco de dados, os Valores da tabela Unidades

-   utilizer a rota um banco com o nome de **`excluir-unidade/'`** deste modo sua requisição deve se paresce com esta http://127.0.0.1:8000/excluir-unidade/1'

-   Depois Verifica o ID no seu BANCO e Passa ele depois da / para que assim possa excluir a Unidade

-   Depois e so verifica se a unidade foi excluida no seu DB

## Como Criar no seu banco de dados, os Valores da tabela empreendimento

-   utilizer a rota um banco com o nome de **`criarApiEmpreendimento`** deste modo sua requisição deve se paresce com esta http://127.0.0.1:8000/criarApiEmpreendimento

-   Depois Preenher os campos em Branco com valores no formato da migrate empreendimento da pasta database/migrations

-   Depois e so salva e verifica no seu banco de dados!

<details>
  <summary><strong>👇 As configurações possuem o seguinte formato</strong></summary><br />
            $table->integer('codigo');
            $table->string('nome');
            $table->string('localização');
            $table->string('previsão');
</details>

## Como Ler no seu banco de dados, os Valores da tabela empreendimento

-   utilizer a rota um banco com o nome de **`ler-empreendimento/'`** deste modo sua requisição deve se paresce com esta http://127.0.0.1:8000/ler-empreendimento/1'

-   Depois Verifica o ID no seu BANCO e Passa ele depois da / para que assim possa ver o empreendimento

-   Assim sera retornado para vocÊ o Render das Informações da empreendimento!

## Como atualizar no seu banco de dados, os Valores da tabela empreendimento

-   utilizer a rota um banco com o nome de **`atualizar-empreendimento/'`** deste modo sua requisição deve se paresce com esta http://127.0.0.1:8000/atualizar-empreendimento/1'

-   Depois Verifica o ID no seu BANCO e Passa ele depois da / para que assim possa atualizar o empreendimento

-   Assim sera retornado para vocÊ o os campos das Informações do empreendimento para atualizar!

-   Depois click no Botão atualizar e verifica em seu banco de dados se foi atualizado

## Como Deleta no seu banco de dados, os Valores da tabela empreendimento

-   utilizer a rota um banco com o nome de **`excluir-empreendimento/'`** deste modo sua requisição deve se paresce com esta http://127.0.0.1:8000/excluir-empreendimento/1'

-   Depois Verifica o ID no seu BANCO e Passa ele depois da / para que assim possa excluir o empreendimento

-   Depois e so verifica se o empreendimento foi excluida no seu DB

<details>
  <summary><strong>➕ Informações Importantes</strong></summary><br />

As migrations estão no caminho api/database/migrations:

O codigo da views estão no caminho api/resources/views com html:

O codigo dos GET/POST estão no caminho api/routes/web.php com todas a funções comentadas:

Espero que aproveitem o projeto me dando um feedback, Pois tive que me vira para apreender php pois nunca tinha programado em php, pois quero muito da meu melhor e apreender essa liguagem, o projeto foi feito com PHP Laravel

Gostou venha fala comigo meu email e samuellucas24383@gmail.com

esse projeto e pub se quiser implementa funçonalidades novas e so clonar o repositorio e eu mesmo me resposabilizo por atualiza-lo

</details>
