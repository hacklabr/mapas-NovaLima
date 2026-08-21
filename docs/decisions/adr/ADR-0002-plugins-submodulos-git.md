# ADR-0002 — Plugins gerenciados como submódulos Git

**Status:** aceito
**Data:** 2026-08-21
**Rodada:** setup

## Contexto

O projeto reutiliza plugins mantidos em repositórios oficiais do Mapas Culturais. Copiar o código desses plugins para dentro deste repositório dificultaria atualizações e rastreabilidade.

## Decisão

Incluir os plugins via submódulos Git apontando para `https://github.com/mapasculturais/plugin-*`. Os commits dos submódulos são versionados junto com o projeto.

## Consequências

- Checkout inicial requer `git submodule update --init --recursive`; sem isso o ambiente não sobe.
- Atualizações exigem `git pull --recurse-submodules` e versionamento explícito dos commits dos submódulos.
- Facilita acompanhar correções e novidades dos plugins oficiais.
