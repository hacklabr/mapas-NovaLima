# ADR-0003 — Separação de Redis para cache e sessões

**Status:** aceito
**Data:** 2026-08-21
**Rodada:** setup

## Contexto

A aplicação precisa simultaneamente de cache de aplicação e armazenamento de sessões PHP. Colocar ambos no mesmo serviço Redis poderia causar contenção de memória e dificultar ajustes de escala.

## Decisão

Executar dois serviços Redis independentes (`redis` e `sessions`), cada um com política `allkeys-lru` e limites de memória distintos. Sessões PHP usam `SESSIONS_SAVE_PATH=tcp://sessions:6379` e cache usa `REDIS_CACHE=redis`.

## Consequências

- Isolamento de carga entre cache e sessões.
- Configuração dos endpoints deve permanecer coerente entre `docker-compose.yml` e a aplicação.
- Aumenta levemente a complexidade operacional (dois serviços para monitorar).
