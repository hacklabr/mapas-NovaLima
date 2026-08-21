# Product Requirements Document (PRD) — Mapas Nova Lima

> Criado em: 2026-08-21 · Última revisão: 2026-08-21
> Regra: doc desatualizado é corrigido ou marcado como obsoleto — nunca deixado apodrecendo em silêncio.
> Fonte da verdade do produto.

## Visão geral

O Mapas Nova Lima é uma instância da plataforma Mapas Culturais mantida para a cidade de Nova Lima. Seu propósito é mapear e divulgar a produção cultural do município, conectando cidadãos, agentes culturais, espaços, eventos, projetos e oportunidades (editais) em um único ambiente colaborativo.

Públicos principais:
- **Cidadãos e produtores culturais**: buscam, cadastram e se inscrevem em oportunidades.
- **Gestores culturais**: publicam editais, gerenciam avaliações, selos e sorteios de pareceristas.
- **Equipe de suporte**: atende demandas técnicas via impersonação e chat integrado.

## Requisitos funcionais (RF)

| ID | Requisito | Critério de aceite |
|---|---|---|
| RF-001 | Cadastro e gestão de agentes, espaços, eventos e projetos | Usuário autenticado consegue criar, editar e publicar cada entidade |
| RF-002 | Publicação e gestão de oportunidades (editais) | Gestor cria oportunidade com inscrição, fases, avaliação e resultados |
| RF-003 | Inscrição em oportunidades | Cidadão inscreve-se, anexa documentos e acompanha status |
| RF-004 | Autenticação local e social | Usuário loga com usuário/senha ou OAuth (Google, Facebook, LinkedIn, Twitter) |
| RF-005 | Gestão de avaliadores e sorteio de bancas | Sistema sorteia e gerencia pareceristas por oportunidade |
| RF-006 | Auditoria de alterações | Registro de quem alterou entidades e quando |
| RF-007 | Conformidade com LGPD | Termos de uso, política de privacidade e autorização de uso de imagem disponíveis |
| RF-008 | Suporte ao cidadão via chat | Integração Zammad para atendimento |

## Requisitos não funcionais (RNF)

| ID | Requisito | Métrica |
|---|---|---|
| RNF-001 | Disponibilidade | Ambiente de produção acessível 24/7, exceto janelas de manutenção comunicadas |
| RNF-002 | Escalabilidade horizontal | Containerização via Docker Compose permite replicação de serviços |
| RNF-003 | Georreferenciamento | Busca e exibição de entidades no mapa com coordenadas corretas |
| RNF-004 | Segurança | Comunicação HTTPS em produção; sessões isoladas em Redis |
| RNF-005 | Rastreabilidade de versões | Core, plugins e tema têm versões fixadas e versionadas |

## Fora do escopo

- Desenvolvimento do core do Mapas Culturais (mantido externamente pelo Hacklab).
- Reescrita do tema BaseV2; customizações visuais limitam-se ao tema filho.
- Funcionalidades não previstas nos plugins ativados neste projeto.

## Glossário

- **Agente**: pessoa física ou jurídica cadastrada na plataforma.
- **Espaço**: local onde ocorrem atividades culturais.
- **Evento**: atividade cultural com data/horário.
- **Projeto**: agrupamento de ações culturais.
- **Oportunidade**: edital ou chamamento público com inscrições.
- **Selo verificador**: certificação atribuída a agentes/espaços.
