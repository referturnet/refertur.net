# INDEX — refertur.net Repository

> **Последнее обновление:** 2026-05-26  
> **Ветка:** main  
> **Статус:** В активной разработке

Этот файл — живой индекс всех файлов и папок репозитория. Обновляется при каждом значимом изменении.

---

## Структура репозитория

```
refertur.net/
├── INDEX.md                          # Этот файл — индекс всех файлов
├── ROADMAP.md                        # Роадмап проекта
├── CHANGELOG.md                      # Лог всех изменений
├── README.md                         # Описание репозитория
│
├── legacy/                           # Исходный HTML-сайт (до WordPress)
│   └── homepage-source.html          # Полная HTML-страница refertur.net
│
├── docs/                             # Документация
│   ├── migration-plan.md             # План миграции HTML → Blocksy/Spectra
│   ├── content-map.md                # Карта контента: секции → блоки WP
│   └── wordpress-github-sync.md      # Инструкция: связка GitHub + WordPress
│
├── wordpress-migration/              # Всё для переноса на WordPress
│   ├── child-theme/
│   │   └── refertur-child/
│   │       ├── style.css             # Стили child theme (Blocksy)
│   │       ├── functions.php         # Хуки, подключение assets, JS
│   │       └── assets/
│   │           ├── css/
│   │           │   └── custom.css    # Кастомные стили
│   │           └── js/
│   │               └── main.js       # JS: reveal, FAQ, messenger, canvas
│   ├── helper-plugin/
│   │   └── refertur-site-core/
│   │       └── refertur-site-core.php # Плагин: AI-кнопки, schema, CTA
│   └── patterns/
│       ├── hero.json                 # Gutenberg pattern: Hero секция
│       ├── services.json             # Gutenberg pattern: Сетка услуг
│       └── faq.json                  # Gutenberg pattern: FAQ аккордеон
│
└── .github/
    └── workflows/
        └── deploy.yml                # GitHub Actions: деплой на WP-сервер
```

---

## Файлы по категориям

### Корень репозитория
| Файл | Назначение | Статус |
|------|-----------|--------|
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
| `docs/content-map.md` | Карта секций и блоков | ✅ Готов |
| `docs/wordpress-github-sync.md` | GitHub Actions + WP деплой | ✅ Готов |

### WordPress Child Theme
| Файл | Назначение | Статус |
|------|-----------|--------|
| `wordpress-migration/child-theme/refertur-child/style.css` | Заголовок темы, базовые стили | ✅ Готов |
| `wordpress-migration/child-theme/refertur-child/functions.php` | Хуки WP, подключение скриптов | ✅ Готов |
| `wordpress-migration/child-theme/refertur-child/assets/css/custom.css` | Кастомный CSS | 🔄 В работе |
| `wordpress-migration/child-theme/refertur-child/assets/js/main.js` | Кастомный JS | 🔄 В работе |

### Helper Plugin
| Файл | Назначение | Статус |
|------|-----------|--------|
| `wordpress-migration/helper-plugin/refertur-site-core/refertur-site-core.php` | Основной файл плагина | 🔄 В работе |

### Gutenberg Patterns
| Файл | Назначение | Статус |
|------|-----------|--------|
| `wordpress-migration/patterns/hero.json` | Hero секция | 📋 Запланировано |
| `wordpress-migration/patterns/services.json` | Сетка услуг | 📋 Запланировано |
| `wordpress-migration/patterns/faq.json` | FAQ аккордеон | 📋 Запланировано |

### CI/CD
| Файл | Назначение | Статус |
|------|-----------|--------|
| `.github/workflows/deploy.yml` | Авто-деплой на WP при push | 📋 Запланировано |

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

Дата обновления в заголовке (`Последнее обновление`) обновляется вручную или через GitHub Actions.
