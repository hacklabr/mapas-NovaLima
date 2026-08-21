# ADR-0010 — Imagens e favicon do tema via `env()` + `config.d`

**Status:** aceito
**Data:** 2026-08-21
**Rodada:** setup

## Contexto

Identidade visual do tema (logo, favicon, imagens da home) precisa ser parametrizável por ambiente sem alterar código.

## Decisão

Configurar imagens e favicon através de arquivos PHP em `docker/common/config.d/` (produção) e `dev/config.d/` (desenvolvimento), usando `env('VAR', fallback)` com fallbacks apontando para `themes/MapasNovaLima/assets/img/`.

## Consequências

- Permite trocar imagens por ambiente apenas ajustando `.env`.
- Duplicação de configuração entre dev e produção exige manter sincronismo manual.
- Fallbacks podem apontar para assets inexistentes se o `.env` não for preenchido corretamente.
