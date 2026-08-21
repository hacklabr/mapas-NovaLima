# ADR-0001 — Fixar imagem base `hacklab/mapasculturais:7.8.4`

**Status:** aceito
**Data:** 2026-08-21
**Rodada:** setup

## Contexto

O projeto depende do core do Mapas Culturais mantido pelo Hacklab. Utilizar a tag `latest` introduziria instabilidade e dificultaria reprodução de builds e rollback.

## Decisão

Fixar a imagem base em `hacklab/mapasculturais:7.8.4` no `docker/Dockerfile` e refletir a mesma versão no script `update.sh`. Atualizações de patch/minor/major seguem SemVer e são aplicadas manualmente e coordenadamente.

## Consequências

- Builds reproduzíveis e previsíveis.
- Atualizações do core exigem alteração explícita em dois arquivos (`Dockerfile` e `update.sh`).
- Fica claro no histórico do Git quando a versão do core mudou.
