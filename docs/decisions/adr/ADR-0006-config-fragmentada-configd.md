# ADR-0006 — Configuração fragmentada em diretórios `config.d`

**Status:** aceito
**Data:** 2026-08-21
**Rodada:** setup

## Contexto

O mesmo repositório serve a múltiplos ambientes (desenvolvimento, homologação/produção) com configurações distintas de autenticação, plugins, logs e imagens.

## Decisão

Organizar a configuração em arquivos PHP que retornam arrays, separados por ambiente: `docker/common/config.d/` (comum), `docker/production/config.d/` (produção) e `dev/config.d/` (desenvolvimento). O core faz merge desses arrays na inicialização.

## Consequências

- Clareza sobre qual configuração vale em cada ambiente.
- Risco de divergência entre ambientes (ex.: `CommitteeDraw` ativo em produção mas não em desenvolvimento).
- Alterações em configuração exigem entender o mecanismo de merge do core.
