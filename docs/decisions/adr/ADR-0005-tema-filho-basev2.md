# ADR-0005 — Tema filho BaseV2 com build de assets centralizado

**Status:** aceito
**Data:** 2026-08-21
**Rodada:** setup

## Contexto

A customização visual de Nova Lima deve ser mantida sem reescrever o tema base do Mapas Culturais, permitindo aproveitar correções e evoluções do BaseV2.

## Decisão

Criar o tema `MapasNovaLima` como tema filho de `\MapasCulturais\Themes\BaseV2\Theme`. O build de SCSS é feito via Laravel Mix com configuração centralizada no pacote `@mapas/scripts`. O arquivo `theme-BaseV2.scss` importa o tema pai e adiciona overrides.

## Consequências

- Manutenção visual simplificada: mudanças ficam em SCSS e imagens.
- O path de importação do SCSS do pai (`../../../BaseV2/...`) é frágil e depende da estrutura interna do container.
- Builds devem ser executados dentro do container, pois `@mapas/scripts` só existe no workspace do core.
