# WordPress + GitHub: Связка и CI/CD

> Дата: 2026-05-26

## Схема

git push → GitHub Actions → SSH → rsync child-theme + plugin → wp cache flush

## SSH нужен ли?

- rsync + SSH: ✅ для VPS
- WP-CLI через SSH: ✅ для VPS  
- REST API / MCP: ❌ SSH не нужен, работает через HTTP

WP-CLI не требует SSH — он запускается локально. Из GitHub Actions — через SSH.

## GitHub Secrets

SSH_HOST, SSH_USER, SSH_PRIVATE_KEY, WP_PATH

## WP-CLI

wp plugin activate refertur-site-core
wp cache flush
wp theme list

## См. также

- .github/workflows/deploy.yml — задача автодеплоя
- research/mcp-wordpress-woocommerce.md — MCP как альтернатива SSH
