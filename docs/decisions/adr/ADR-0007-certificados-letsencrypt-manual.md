# ADR-0007 — Certificados Let’s Encrypt via script manual

**Status:** aceito
**Data:** 2026-08-21
**Rodada:** setup

## Contexto

O deploy em servidor próprio não utiliza load balancer gerenciado nem provedor de certificado. É necessário obter e renovar certificados TLS de forma econômica.

## Decisão

Usar o script `init-letsencrypt.sh` para: criar certificado dummy, subir nginx temporário via `docker-compose.certbot.yml`, emitir certificado real e mover arquivos para `docker-data/certs/`. Variáveis `domain`, `email` e `staging` são editadas diretamente no script.

## Consequências

- Processo manual e propenso a erro; exige portas 80/443 abertas durante a emissão.
- Domínio e e-mail ficam hardcoded no script.
- Renovação automática não está garantida; requer configuração adicional de cron.
