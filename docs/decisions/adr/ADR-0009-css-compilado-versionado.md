# ADR-0009 — CSS compilado versionado no repositório

**Status:** aceito
**Data:** 2026-08-21
**Rodada:** setup

## Contexto

O tema gera um CSS compilado a partir do SCSS. Versionar o artefato compilado permite deploys rápidos sem depender de recompilação no servidor.

## Decisão

Manter `themes/MapasNovaLima/assets/css/theme-BaseV2.css` e `mix-manifest.json` versionados no Git. O build no Dockerfile regenera esses arquivos durante a construção da imagem.

## Consequências

- Deploy pode ocorrer sem executar build no ambiente de destino.
- Risco de divergência entre SCSS fonte e CSS compilado se o desenvolvedor esquecer de recompilar e commitar.
- Diffs de CSS gerado podem ser grandes e dificultar revisões.
