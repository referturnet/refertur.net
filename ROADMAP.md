# ROADMAP — refertur.net

> **Последнее обновление:** 2026-05-26

## Фаза 1 — Основа репозитория (2026-05) ✅ ЗАВЕРШЕНО
* [x] Создать репозиторий `referturnet/refertur.net`
* [x] Залить исходный HTML-сайт в `legacy/`
* [x] Создать структуру `docs/`, `wordpress-migration/`
* [x] Создать `child-theme/refertur-child` (заголовок, functions.php)
* [x] Создать `helper-plugin/refertur-site-core`
* [x] Создать INDEX.md, ROADMAP.md, CHANGELOG.md

## Фаза 2 — Документация и планирование (2026-05/06) ✅ ЗАВЕРШЕНО
* [x] `docs/migration-plan.md` — полный план миграции HTML → Blocksy/Spectra
* [x] `docs/content-map.md` — карта секций сайта ✅ UPDATED
* [x] `docs/wordpress-github-sync.md` — CI/CD инструкция
* [x] `ARCHITECTURE.md` — живая память проекта ✅ NEW
* [x] `research/mcp-wordpress-woocommerce.md` — Deep Research: MCP vs SSH ✅ NEW

## Фаза 3 — WordPress сборка (2026-06) 🔄 В РАБОТЕ

### 3.1 Настройка базовой среды
* [ ] Установить WordPress на VPS
* [ ] Установить и настроить Blocksy тему
* [ ] Установить Spectra plugin
* [ ] Загрузить child theme `refertur-child`
* [ ] Загрузить plugin `refertur-site-core`

### 3.2 Анализ legacy HTML ✅ ЗАВЕРШЕНО
* [x] Анализ legacy HTML и полная распаковка на секции
* [x] Обновить `docs/content-map.md` с детальной картой секций

### 3.3 Gutenberg Patterns ✅ ЗАВЕРШЕНО
* [x] Создать `docs/patterns/hero.json` (главная секция + CTA)
* [x] Создать `docs/patterns/services.json` (9 карточек услуг)
* [x] Создать `docs/patterns/faq.json` (FAQ аккордеон)
* [x] Создать `docs/patterns/market-stats.json` (3 цифры)

### 3.4 Child Theme Assets ✅ ЗАВЕРШЕНО
* [x] `assets/css/custom.css` — кастомные стили поверх Blocksy
* [x] `assets/js/main.js` — reveal-анимации, FAQ toggle, messenger открытие
* [x] `functions.php` — исправлена логика подключения ассетов и зависимостей ✅ NEW

### 3.5 Сборка главной страницы 🔄 В РАБОТЕ
* [ ] Hero секция (заголовок + CTA)
* [ ] Market stats (3 цифры)
* [ ] Services grid (9 карточек)
* [ ] About / SEO text block
* [ ] FAQ аккордеон
* [ ] Contacts / Footer

## Фаза 4 — SEO и производительность (2026-06) 📋 ЗАПЛАНИРОВАНО
* [ ] Установить Rank Math
* [ ] Перенести JSON-LD schemas (LocalBusiness, FAQPage, Service)
* [ ] Настроить кэширование (Redis / Object Cache Pro)
* [ ] Оптимизация Core Web Vitals (картинки, lazy load, critical CSS)
* [ ] Настроить аналитику (Google Analytics / Plausible)

## Фаза 5 — CI/CD и автоматизация (2026-06) ✅ ЗАВЕРШЕНО
* [x] `deploy.yml` — GitHub Actions rsync → VPS
* [x] `wiki-sync.yml` — Автосинхронизация Wiki
* [ ] Авто-обновление CHANGELOG.md при коммитах
* [ ] Уведомления в Slack / Telegram при деплое

## Фаза 6 — Развитие сайта (2026+) 📋 БУДУЩЕЕ
* [ ] Страница «Портфолио» (Custom Post Type: Projects)
* [ ] Страница «Контакты» (Contact Form 7 / WPForms)
* [ ] Мультиязычность (Polylang / TranslatePress)
* [ ] Интеграция CRM (Bitrix24 / AmoCRM)
* [ ] A/B тестирование CTA (кнопок и мессенджеров)
