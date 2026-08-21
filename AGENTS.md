# AGENTS.md — Mapas Nova Lima

## 1. Contexto do projeto

Mapas Nova Lima é uma instância do Mapas Culturais (PHP/Docker) mantida para a cidade de Nova Lima. O repositório contém configuração de deploy, tema filho (`MapasNovaLima`) e plugins gerenciados como submódulos Git. A fonte de verdade do produto é o PRD vivo em `docs/reference/prd.md`.

Stack: PHP 8 / MapasCulturais 7.8.4, nginx, PostgreSQL 14 + PostGIS, Redis, Docker Compose, SCSS/Laravel Mix.

## 2. Comandos verificáveis

| Ação | Comando |
|---|---|
| Build (tema, dentro do container) | `cd themes/MapasNovaLima && pnpm run build` |
| Build (tema, scripts npm no host) | `cd themes/MapasNovaLima && npm run build` |
| Watch (desenvolvimento) | `cd themes/MapasNovaLima && npm run watch` |
| Subir ambiente de dev | `cd dev && sudo ./start.sh` |
| Acessar shell do app | `cd dev && sudo ./bash.sh` |
| Acessar banco | `cd dev && sudo ./psql.sh` |
| Atualizar ambiente de produção | `sudo ./update.sh` |
| Testes | <!-- TODO: preencher --> |
| Lint | <!-- TODO: preencher --> |
| Typecheck | <!-- TODO: preencher --> |

Rode os comandos relevantes antes de declarar qualquer tarefa pronta.

## 3. Mapa da estrutura

- `docker/` — configuração de produção (Dockerfile, nginx, config.d).
- `docker-compose.yml` — orquestração de produção/homologação.
- `dev/` — scripts e docker-compose de desenvolvimento.
- `themes/MapasNovaLima/` — tema filho BaseV2 (SCSS, assets, Theme.php).
- `plugins/` — plugins via submódulos Git.
- `docker/common/config.d/` — configuração comum a todos os ambientes.
- `docs/reference/` — documentação viva do produto.
- `docs/decisions/adr/` — ADRs do projeto.

## 4. Regras invioláveis

- Nunca commitar sem rodar os testes (quando definidos).
- Nunca criar arquivos sem necessidade.
- Nunca editar migrations já aplicadas.
- Nunca adicionar dependências sem justificar.
- Nunca desativar checks de CI para fazer o build passar.
- Nunca commitar o arquivo `.env`.
- Sempre manter `dev/config.d/` e `docker/production/config.d/` sincronizados quando alterar plugins ou configurações sensíveis ao ambiente.

## 5. Convenções

As convenções vivem em `docs/reference/conventions/` (`code-style.md`, `git-workflow.md`, `api-design.md`). Leia antes de escrever código — este arquivo aponta, não duplica.

## 6. Workflow esperado

- Planeje antes de codar.
- Rode os testes (ou comandos verificáveis) antes de declarar pronto.
- Formato de commit e PR/MR conforme `docs/reference/conventions/git-workflow.md`.
- Consulte `docs/reference/jornadas.md` antes de alterar fluxos de usuário.

## 7. Ponteiros

- `docs/reference/prd.md` → produto e requisitos (fonte de verdade)
- `docs/reference/jornadas.md` → fluxos de usuário
- `docs/reference/arquitetura/INDEX.md` → fonte de verdade da arquitetura
- `docs/reference/arquitetura.md` → visão geral da arquitetura
- `docs/reference/decisions/` → ADRs
- `.agents/skills/` → catálogo de procedimentos sob demanda

## Skills — procedimentos sob demanda

Regras sempre ativas ficam neste arquivo; procedimentos vivem em `.agents/skills/`. Um procedimento só vira skill quando é repetível, multi-etapa ou de alto custo de erro — e não-óbvio.

**Evolução contínua:** quando uma decisão consolidada ou padrão recorrente emergir no dia a dia, proponha uma skill usando `.agents/skills/exemplo-skill/SKILL.md` como formato — nunca crie sem aprovação explícita.

## ADRs são imutáveis

Decisão nova = ADR novo em `docs/reference/decisions/` (sequência de 4 dígitos a partir do máximo existente), que referencia o substituído. Nunca edite um ADR aceito; nunca renumere ADRs existentes. Formato: `docs/reference/decisions/0000-template-adr.md`.
