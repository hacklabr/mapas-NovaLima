# ADR-0004 — PostGIS como fonte de verdade geoespacial

**Status:** aceito
**Data:** 2026-08-21
**Rodada:** setup

## Contexto

Agentes, espaços e eventos do Mapas Culturais possuem dados georreferenciados (latitude/longitude). É necessário um banco que suporte consultas espaciais eficientes.

## Decisão

Usar `postgis/postgis:14-master` como banco de dados principal, com inicialização via `docker/db/dump.sql`. O centro do mapa de Nova Lima é fixado em lat `-19.9856`, long `-43.8503`.

## Consequências

- Busca e exibição geoespacial nativa e eficiente.
- Backup e restore exigem dump espacial compatível.
- Upgrades de versão do PostgreSQL/PostGIS são breaking changes e exigem migração cuidadosa.
