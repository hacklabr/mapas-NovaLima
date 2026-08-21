# Runbook — Incidentes

> Criado em: 2026-08-21 · Última revisão: 2026-08-21
> Regra: doc desatualizado é corrigido ou marcado como obsoleto — nunca deixado apodrecendo em silêncio.

## Propósito

Responder a incidentes em produção de forma estruturada.

## Pré-condições

- Acesso ao servidor de produção e aos logs (`sudo ./logs.sh`).
- Contato da equipe de infraestrutura/suporte.

## Passos

1. **Detectar:** verifique health checks, alertas ou reclamações de usuários.
2. **Isolar:** se possível, coloque a aplicação em modo de manutenção ou redirecione tráfego.
3. **Diagnosticar:** colete logs recentes (`sudo ./logs.sh`), métricas de containers e status do banco.
4. **Mitigar:** aplique correção temporária ou execute rollback conforme `runbooks/rollback.md`.
5. **Comunicar:** informe usuários afetados e registre o incidente.
6. **Resolver:** aplique a correção definitiva e valide.
7. **Post-mortem:** documente causa raiz e ações preventivas.

## Rollback deste runbook

- Aplicar rollback conforme `runbooks/rollback.md` se a mitigação não resolver.
