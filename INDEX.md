# INDEX — refertur.net Repository

> **Последнее обновление:** 2026-05-26
> **Ветка:** main
> **Статус:** Фаза 3 — WordPress сборка (в работе)

Этот файл — живой индекс всех файлов и папок репозитория. Обновляется при каждом значимом изменении.

---

## Структура репозитория

```
refertur.net/
├── ARCHITECTURE.md           # Живая архитектурная память проекта ✅ NEW
├── INDEX.md                  # Этот файл — индекс всех файлов
├── ROADMAP.md                # Роадмап проекта
├── CHANGELOG.md              # Лог всех изменений
├── README.md                 # Описание репозитория
│
├── legacy/
│   └── homepage-source.html  # Исходный HTML лендинг
│
├── docs/
│   ├── migration-plan.md     # План миграции HTML -> Blocksy/Spectra
│   ├── content-map.md        # Карта секций сайта
│   ├── wordpress-github-sync.md # Инструкция по синхронизации
│   └── patterns/             # Gutenberg Patterns (JSON)
│       ├── hero.json         # Hero секция
│       ├── services.json     # Сетка услуг
│       ├── faq.json          # FAQ аккордеон
│       └── market-stats.json # Секция статистики ✅ NEW
│
├── research/
│   └── mcp-wordpress-woocommerce.md # Deep Research: MCP vs SSH ✅ NEW
│
├── wordpress-migration/
│   ├── child-theme/
│   │   └── refertur-child/   # Дочерняя тема (Blocksy child)
│   │       ├── assets/
│   │       │   ├── css/
│   │       │   │   ├── app.css
│   │       │   │   └── custom.css
│   │       │   └── js/
│   │       │       ├── app.js
│   │       │       └── main.js
│   │       ├── functions.php # UPDATED: Исправлена логика ассетов
│   │       └── style.css
│   │
│   └── helper-plugin/
│       └── refertur-site-core/ # Плагин функционала
│           └── refertur-site-core.php
│
└── .github/
    └── workflows/
        ├── deploy.yml        # Deploy на VPS
        └── wiki-sync.yml     # Синхронизация с Wiki
```
