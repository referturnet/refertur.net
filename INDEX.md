# INDEX — refertur.net Repository

> **Последнее обновление:** 2026-05-26
> **Ветка:** main
> **Статус:** Фаза 3 — WordPress сборка (в работе)

Этот файл — живой индекс всех файлов и папок репозитория. Обновляется при каждом значимом изменении.

---

## Структура репозитория

```
refertur.net/
├── ARCHITECTURE.md          # Живая архитектурная память проекта ✅ NEW
├── INDEX.md                 # Этот файл — индекс всех файлов
├── ROADMAP.md               # Роадмап проекта
├── CHANGELOG.md             # Лог всех изменений
├── README.md                # Описание репозитория
│
├── legacy/
│   └── homepage-source.html
│
├── docs/
│   ├── migration-plan.md
│   ├── content-map.md
│   └── wordpress-github-sync.md
│
├── research/
│   └── mcp-wordpress-woocommerce.md  # Deep research: MCP vs SSH ✅ NEW
│
├── wordpress-migration/
│   ├── child-theme/
│   │   └── refertur-child/
│   │       ├── style.css
│   │       ├── functions.php
│   │       └── assets/
│   │           ├── css/custom.css
│   │           └── js/main.js
│   ├── helper-plugin/
│   │   └── refertur-site-core/
│   │       └── refertur-site-core.php
│   └── patterns/
│       ├── hero.json
│       ├── services.json
│       └── faq.json
│
└── .github/
    └── workflows/
        └── deploy.yml
```

---

## Файлы по категориям

### Корень репозитория

| Файл | Назначение | Статус |
|------|-----------|--------|
| `ARCHITECTURE.md` | Живая архитектурная память проекта | ✅ Готов |
| `README.md` | Описание проекта | ✅ Готов |
| `INDEX.md` | Индекс всех файлов | ✅ Готов |
| `ROADMAP.md` | Роадмап проекта | ✅ Готов |
| `CHANGELOG.md` | Лог изменений | ✅ Готов |

### Legacy (исходный сайт)

| Файл | Назначение | Статус |
|------|-----------|--------|
| `legacy/homepage-source.html` | Исходный HTML refertur.net | ✅ Готов |

### Документация

| Файл | Назначение | Статус |
|------|-----------|--------|
| `docs/migration-plan.md` | План миграции на WordPress | ✅ Готов |
| `docs/content-map.md` | Карта секций и блоков | 🔄 Обновляется |
| `docs/wordpress-github-sync.md` | GitHub Actions + WP деплой | ✅ Готов |

### Research

| Файл | Назначение | Статус |
|------|-----------|--------|
| `research/mcp-wordpress-woocommerce.md` | MCP vs SSH/WP-CLI/REST API | ✅ Готов |

### WordPress Child Theme

| Файл | Назначение | Статус |
|------|-----------|--------|
| `wordpress-migration/child-theme/refertur-child/style.css` | Заголовок темы, базовые стили | ✅ Готов |
| `wordpress-migration/child-theme/refertur-child/functions.php` | wp_enqueue: app.css + app.js | ✅ Готов |
| `wordpress-migration/child-theme/refertur-child/assets/css/custom.css` | Кастомный CSS | 🔄 В работе |
| `wordpress-migration/child-theme/refertur-child/assets/js/main.js` | JS: reveal, FAQ, messenger, canvas | 🔄 В работе |

### Helper Plugin

| Файл | Назначение | Статус |
|------|-----------|--------|
| `wordpress-migration/helper-plugin/refertur-site-core/refertur-site-core.php` | Шорткод [refertur_cta], v0.1.0 | ✅ Скелет готов |

### Gutenberg Patterns

| Файл | Назначение | Статус |
|------|-----------|--------|
| `wordpress-migration/patterns/hero.json` | Hero секция | 🔄 В работе |
| `wordpress-migration/patterns/services.json` | Сетка услуг (9 карточек) | 📋 Запланировано |
| `wordpress-migration/patterns/faq.json` | FAQ аккордеон | 📋 Запланировано |

### CI/CD

| Файл | Назначение | Статус |
|------|-----------|--------|
| `.github/workflows/deploy.yml` | Авто-деплой rsync → VPS при push | 📋 Запланировано |

---

## Легенда статусов

| Иконка | Статус |
|--------|--------|
| ✅ | Готов и залит |
| 🔄 | В активной разработке |
| 📋 | Запланировано |
| ❌ | Заблокировано / требует решения |

---

## Как обновлять этот файл

Обновляй INDEX.md при каждом:
- добавлении нового файла или папки
- изменении статуса существующего файла
- переименовании или удалении файлов

Дату обновления в заголовке обновлять вручную.
