# ROADMAP — refertur.net

> **Последнее обновление:** 2026-05-26

---

## Фаза 1 — Основа репозитория (2026-05)

- [x] Создать репозиторий `referturnet/refertur.net`
- [x] Залить исходный HTML-сайт в `legacy/`
- [x] Создать структуру `docs/`, `wordpress-migration/`
- [x] Создать `child-theme/refertur-child` (заголовок, functions.php)
- [x] Создать `helper-plugin/refertur-site-core`
- [x] Создать INDEX.md, ROADMAP.md, CHANGELOG.md

## Фаза 2 — Документация и планирование (2026-05/06)

- [x] `docs/migration-plan.md` — полный план миграции HTML → Blocksy/Spectra
- [x] `docs/content-map.md` — карта секций сайта
- [x] `docs/wordpress-github-sync.md` — CI/CD инструкция
- [ ] Анализ legacy HTML и полная распаковка на секции

## Фаза 3 — WordPress сборка (2026-06)

- [ ] Настройка Blocksy темы: цвета, типография, контейнеры, header/footer
- [ ] Установка child theme `refertur-child` на сервер
- [ ] Установка helper plugin `refertur-site-core`
- [ ] Подключение Spectra (блоки)
- [ ] Сборка главной страницы через Gutenberg patterns
  - [ ] Hero секция
  - [ ] Статистика
  - [ ] Сетка услуг
  - [ ] About/SEO секция
  - [ ] FAQ аккордеон
  - [ ] Footer
- [ ] Подключение кастомного JS (reveal, FAQ toggle, messenger CTA)

## Фаза 4 — SEO и производительность (2026-06)

- [ ] Настройка Rank Math: meta, OG, Twitter
- [ ] Перенос JSON-LD схем (Person, ProfessionalService, FAQPage) в Rank Math
- [ ] Настройка кэширования (WP Rocket / LiteSpeed)
- [ ] Core Web Vitals проверка и оптимизация
- [ ] Подключение Google Analytics 4 + Search Console

## Фаза 5 — CI/CD и автоматизация (2026-07)

- [ ] GitHub Actions деплой: `push main` → авто SSH-синх child theme и plugin на сервер
- [ ] Авто-обновление INDEX.md через GitHub Actions при каждом пуше
- [ ] Slack/Telegram уведомления о деплое и статусе сайта
- [ ] Авто-обновление CHANGELOG.md при мердже в main

## Фаза 6 — Развитие сайта (2026-07+)

- [ ] Страница Кейсы/Портфолио
- [ ] Страница Контакты
- [ ] Политика конфиденциальности
- [ ] Блог / контент-маркетинг
- [ ] Мультиязычность (RU/EN)
- [ ] Интеграция CRM / формы заявок
- [ ] A/B тесты CTA и hero-секции
