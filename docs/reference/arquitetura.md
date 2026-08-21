# Arquitetura — Mapas Nova Lima

> Criado em: 2026-08-21 · Última revisão: 2026-08-21
> Regra: doc desatualizado é corrigido ou marcado como obsoleto — nunca deixado apodrecendo em silêncio.

## Visão geral

O Mapas Nova Lima é executado como uma aplicação PHP containerizada baseada na imagem oficial `hacklab/mapasculturais:7.8.4`. A arquitetura segue o padrão do Mapas Culturais Base Project: core mantido externamente, customizações locais via tema filho e plugins, e configuração por ambiente através de arquivos PHP em diretórios `config.d`.

## Componentes principais

| Componente | Responsabilidade | Tecnologia |
|---|---|---|
| nginx | Proxy reverso e servidor estático | nginx:latest |
| mapasculturais | Aplicação PHP/Mapas Culturais | `hacklab/mapasculturais:7.8.4` |
| db | Banco de dados relacional e espacial | PostgreSQL 14 + PostGIS |
| redis | Cache de aplicação | Redis 6 |
| sessions | Sessões PHP | Redis 6 |
| tema MapasNovaLima | Camada visual e assets | Tema filho BaseV2, SCSS, Laravel Mix |
| plugins | Extensões de funcionalidade | PHP, submódulos Git |

## Integrações

- **OAuth social**: Google, Facebook, LinkedIn, Twitter (plugin MultipleLocalAuth).
- **Zammad**: chat de suporte ao cidadão.
- **PostGIS**: extensão espacial do PostgreSQL para busca georreferenciada.
- **Mapas Culturais Core**: imagem Docker e pacote `@mapas/scripts` mantidos pelo Hacklab.

## Decisões técnicas vigentes

Ver ADRs em `docs/decisions/adr/`:
- ADR-0001 — Fixar imagem base `hacklab/mapasculturais:7.8.4`
- ADR-0002 — Plugins gerenciados como submódulos Git
- ADR-0003 — Separação de Redis para cache e sessões
- ADR-0004 — PostGIS como fonte de verdade geoespacial
- ADR-0005 — Tema filho BaseV2 com build de assets centralizado
- ADR-0006 — Configuração fragmentada em diretórios `config.d`
- ADR-0007 — Certificados Let’s Encrypt via script manual
- ADR-0008 — Build de assets com pnpm workspace
- ADR-0009 — CSS compilado versionado no repositório
- ADR-0010 — Imagens e favicon do tema via `env()` + `config.d`
