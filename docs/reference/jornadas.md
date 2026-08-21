# Jornadas de usuário — Mapas Nova Lima

> Criado em: 2026-08-21 · Última revisão: 2026-08-21
> Regra: doc desatualizado é corrigido ou marcado como obsoleto — nunca deixado apodrecendo em silêncio.

## Atores

- **Cidadão/Produtor cultural**: busca e consome conteúdo cultural; cadastra-se e participa de editais.
- **Gestor cultural**: publica editais, gerencia inscrições, avaliações e resultados.
- **Avaliador/Parecerista**: avalia inscrições em oportunidades.
- **Administrador/Suporte**: gerencia usuários, impersona contas e atende chamados.

## Jornadas

### Jornada 1 — Descoberta cultural

1. Cidadão acessa a home do Mapas Nova Lima.
2. Visualiza destaques de agentes, espaços, eventos e projetos.
3. Usa busca ou mapa para encontrar conteúdo de interesse.
4. Acessa página detalhada da entidade.

### Jornada 2 — Cadastro e participação

1. Cidadão clica em "Entrar" e faz login ou cria conta.
2. Completa cadastro como agente (pessoa física ou jurídica).
3. Cria/edit espaços, eventos e projetos vinculados.
4. Encontra uma oportunidade (edital) e realiza inscrição.
5. Acompanha status da inscrição e recebe notificações.

### Jornada 3 — Publicação e gestão de oportunidades

1. Gestor autentica-se com permissões adequadas.
2. Cria uma nova oportunidade com fases, critérios e formulário.
3. Configura avaliadores ou utiliza sorteio de bancas.
4. Abre inscrições e acompanha submissões.
5. Avalia inscrições e publica resultados.

### Jornada 4 — Suporte e moderação

1. Usuário encontra dificuldade e aciona o chat Zammad.
2. Equipe de suporte responde; se necessário, impersona o usuário para investigar.
3. Moderador verifica conteúdo reportado e aplica ações via SpamDetector.

## Pontos de dor conhecidos

- Submódulos de plugins precisam ser inicializados manualmente (`git submodule update --init --recursive`).
- Inconsistência na lista de plugins entre desenvolvimento e produção (`CommitteeDraw` ativo apenas em produção).
- Processo manual de renovação de certificados Let’s Encrypt.
