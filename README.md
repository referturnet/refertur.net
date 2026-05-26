# refertur.net

Основной репозиторий сайта refertur.net.

## Структура
- `legacy/` — исходный экспорт текущего лендинга до миграции в WordPress
- `docs/` — документация по миграции и архитектуре
- `patterns/` — будущие Gutenberg/Spectra patterns
- `wordpress-migration/child-theme/` — child theme для Blocksy
- `wordpress-migration/helper-plugin/` — служебный WP-плагин для CTA, AI-links и интеграций

## Ближайшие шаги
1. Разобрать legacy HTML на секции.
2. Перенести контентные блоки в Gutenberg/Spectra.
3. Вынести интерактив и AEO-логику в child theme и helper plugin.
