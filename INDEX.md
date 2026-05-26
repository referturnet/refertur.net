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
│   └── homepage-source.html # Исходный HTML лендинг
│
├── docs/
│   ├── migration-plan.md    # План миграции HTML -> Blocksy/Spectra
│   ├── content-map.md       # Карта секций и Gutenberg блоков
│   ├── wordpress-github-sync.md # Инструкция по CI/CD
│   ├── hosting/
│   │   └── INDEX.md         # Индекс документации по хостингу
│   └── patterns/
│       ├── hero.json        # Gutenberg Pattern: Hero section
│       ├── services.json    # Gutenberg Pattern: Services grid
│       └── faq.json         # Gutenberg Pattern: FAQ block
│
├── research/
│   └── mcp-wordpress-woocommerce.md # Deep Research: MCP vs SSH
│
├── wordpress-migration/
│   ├── child-theme/
│   │   └── refertur-child/
│   │       ├── assets/
│   │       │   ├── css/
│   │       │   │   ├── app.css
│   │       │   │   └── custom.css
│   │       │   └── js/
│   │       │       ├── app.js
│   │       │       └── main.js
│   │       ├── functions.php
│   │       └── style.css
│   │
│   └── helper-plugin/
│       └── refertur-site-core/
│           └── refertur-site-core.php
│
└── .github/
    └── workflows/
        ├── deploy.yml       # Авто-деплой на VPS
        └── wiki-sync.yml    # Синхронизация GitHub Wiki
```
