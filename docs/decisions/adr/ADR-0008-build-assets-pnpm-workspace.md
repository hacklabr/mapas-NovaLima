# ADR-0008 — Build de assets com pnpm workspace

**Status:** aceito
**Data:** 2026-08-21
**Rodada:** setup

## Contexto

O build de frontend do tema precisa compartilhar scripts com o core do Mapas Culturais para manter compatibilidade de versão e evitar duplicar configuração de webpack.

## Decisão

O `package.json` do tema depende de `@mapas/scripts` com `workspace:*` e invoca `mix --mix-config=node_modules/@mapas/scripts/webpack.mix.js`. O build é executado dentro do container Docker com `pnpm install --recursive && pnpm run build`.

## Consequências

- Padronização do pipeline de build com o core.
- O pacote `@mapas/scripts` não é versionado neste repositório; builds só funcionam onde o workspace do core está presente (dentro do container).
- Exige pnpm instalado na imagem de build.
