# Runbook — Deploy

> Criado em: 2026-08-21 · Última revisão: 2026-08-21
> Regra: doc desatualizado é corrigido ou marcado como obsoleto — nunca deixado apodrecendo em silêncio.

## Propósito

Publicar uma nova versão do Mapas Nova Lima em produção.

## Pré-condições

- Acesso SSH ao servidor de produção.
- Repositório clonado em `/srv` ou `/var/mapasculturais`.
- Arquivo `.env` configurado e fora do controle de versão.
- Certificados TLS válidos (se usar Let’s Encrypt, ver `init-letsencrypt.sh`).

## Passos

1. Acesse o servidor e entre no diretório do projeto.
2. Execute `git pull` (com submódulos: `git pull --recurse-submodules`).
3. Execute `sudo ./update.sh` para baixar a imagem, fazer build e reiniciar os containers.
4. Verifique se todos os serviços subiram: `sudo docker-compose ps`.
5. Valide a aplicação no navegador (HTTP 200, assets carregando).

## Rollback deste runbook

- Reverter o commit problemático.
- Executar novamente `sudo ./update.sh` para recriar a imagem.
- Em caso de banco corrompido, restaurar o último dump disponível.
