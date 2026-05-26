# CHANGELOG — refertur.net

Все значимые изменения проекта в хронологическом порядке.Формат: [Keep a Changelog](https://keepachangelog.com/ru/1.0.0/)

---

## [0.4.1] — 2026-05-26

### Изменено
- `wordpress-migration/child-theme/refertur-child/functions.php` — исправлена логика подключения стилей и скриптов. Добавлена зависимость дочерней темы от родительской (`refertur-child-parent`), обновлены версии ассетов до `0.1.1`.

## [0.4.0] — 2026-05-26

### Добавлено
- `ARCHITECTURE.md` — живая архитектурная память проекта
- `research/mcp-wordpress-woocommerce.md` — Deep Research: MCP vs SSH/REST API

### Изменено
- `INDEX.md` — добавлены ARCHITECTURE.md, research/, обновлены статусы
- `ROADMAP.md` — Фаза 1+2 отмечены как завершённые, детализирована Фаза 3 (5 подфаз)
- `docs/content-map.md` — полный анализ 7 секций legacy HTML, карта миграции → Gutenberg

### Решения
- SSH + rsync как основной деплой (вместо MCP для VPS)
- MCP как вспомогательный инструмент для AI-ассистентов
- Blocksy + Spectra (вместо Elementor/Divi) для производительности

## [0.3.0] — 2026-05-26

### Добавлено
- `INDEX.md` — живой индекс всех файлов репозитория
- `ROADMAP.md` — поетапный план развития проекта (6 фаз)
- `CHANGELOG.md` — этот файл
- `docs/migration-plan.md` — полный план миграции HTML → Blocksy/Spectra
- `docs/content-map.md` — карта секций сайта
- `docs/wordpress-github-sync.md` — CI/CD инструкция для GitHub Actions + WordPress
- `wordpress-migration/patterns/` — Gutenberg patterns (hero, services, faq)
- `wordpress-migration/child-theme/refertur-child/assets/css/custom.css`
- `wordpress-migration/child-theme/refertur-child/assets/js/main.js`
- `helper-plugin/refertur-site-core.php` — полный код плагина
- `.github/workflows/deploy.yml` — GitHub Actions деплой
