# Convenções de Git — Mapas Nova Lima

> Criado em: 2026-08-21 · Última revisão: 2026-08-21
> Regra: doc desatualizado é corrigido ou marcado como obsoleto — nunca deixado apodrecendo em silêncio.

## Estrutura de branches

- `develop` — desenvolvimento de novas funcionalidades e testes locais.
- `master` — ambiente de homologação.
- Tags — ambiente de produção, seguindo SemVer.

## Versionamento Semântico

- **PATCH** (`1.0.x`) — configuração, correção de bug, atualização de versão de plugin/core patch.
- **MINOR** (`1.x.0`) — nova funcionalidade, novo plugin, mudança minor do Mapas Culturais.
- **MAJOR** (`x.0.0`) — quebra de compatibilidade, upgrade major do Mapas Culturais.

## Commits

<!-- TODO: preencher — formato de mensagem, uso de issue IDs, etc. -->

## Pull Requests

- Sempre vincular ao épico/tarefa correspondente.
- Incluir evidência de testes manuais ou comandos verificáveis do `AGENTS.md`.
