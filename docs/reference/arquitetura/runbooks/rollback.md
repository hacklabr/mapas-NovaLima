# Runbook — Rollback

> Criado em: 2026-08-21 · Última revisão: 2026-08-21
> Regra: doc desatualizado é corrigido ou marcado como obsoleto — nunca deixado apodrecendo em silêncio.

## Propósito

Reverter o ambiente de produção para uma versão anterior estável.

## Pré-condições

- Último dump do banco disponível.
- Tag ou commit de referência da versão estável.
- Acesso ao servidor de produção.

## Passos

1. Pare a aplicação: `sudo ./stop.sh`.
2. Faça checkout da versão estável (tag ou commit).
3. Atualize submódulos: `git submodule update --init --recursive`.
4. Restaure o banco a partir do dump mais recente, se necessário.
5. Execute `sudo ./update.sh` para rebuild e restart.
6. Valide funcionalidades críticas.

## Rollback deste runbook

- Se o rollback também falhar, retome a versão anterior e acione o runbook de incidentes.
