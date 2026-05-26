# ARCHITECTURE — refertur.net

> **Последнее обновление:** 2026-05-26
>  **Ветка:** main  
> **Статус:** Фаза 3 в процессе: Gutenberg patterns ✅ | CI/CD workflows ✅ | MVP готов к деплою
Этот файл — живая архитектурная память проекта. Обновляется при каждом значимом изменении структуры, стека или решений.

---

## 1. Цель проекта

Перенести текущий статичный HTML-лендинг **refertur.net** в управляемую архитектуру WordPress (Blocksy + Spectra) без потери SEO/AEO, контента и ключевых CTA.

---

## 2. Технологический стек

| Слой | Технология | Статус |
|------|-----------|--------|
| CMS | WordPress (самохостинг, VPS) | 📋 Устанавливается |
| Тема | Blocksy (родительская) | 📋 Устанавливается |
| Child Theme | refertur-child (custom) | ✅ Готов в репо |
| Page Builder | Gutenberg + Spectra | 📋 Настраивается |
| SEO | Rank Math | 📋 Запланировано |
| Helper Plugin | refertur-site-core | ✅ Скелет готов |
| CI/CD | GitHub Actions → rsync → VPS | 📋 Запланировано |
| Деплой | SSH + rsync (оптимально для VPS) | 📋 Настраивается |
| MCP | WordPress MCP Plugin (вспомогательно) | 🔬 Исследовано |

---

## 3. Структура репозитория

```
refertur.net/
├── ARCHITECTURE.md          # Этот файл — память проекта
├── INDEX.md                 # Живой индекс всех файлов
├── ROADMAP.md               # Фазы и задачи
├── CHANGELOG.md             # Лог изменений
├── README.md                # Описание репозитория
│
├── legacy/
│   └── homepage-source.html # Исходный HTML refertur.net (до WP)
│
├── docs/
│   ├── migration-plan.md    # План миграции HTML → Blocksy/Spectra
│   ├── content-map.md       # Карта секций → блоки WP
│   └── wordpress-github-sync.md # GitHub Actions + WP деплой
│
├── research/
│   └── mcp-wordpress-woocommerce.md # Deep research: MCP vs SSH/REST API
│
├── wordpress-migration/
│   ├── child-theme/
│   │   └── refertur-child/
│   │       ├── style.css          # Заголовок темы, базовые стили
│   │       ├── functions.php      # wp_enqueue: app.css + app.js
│   │       └── assets/
│   │           ├── css/
│   │           │   └── custom.css # Кастомный CSS (в разработке)
│   │           └── js/
│   │               └── main.js    # JS: reveal, FAQ, messenger, canvas
│   ├── helper-plugin/
│   │   └── refertur-site-core/
│   │       └── refertur-site-core.php  # Шорткод [refertur_cta], v0.1.0
│   └── patterns/                  # Gutenberg patterns (запланированы)
│       ├── hero.json
│       ├── services.json
│       └── faq.json
│
└── .github/
    └── workflows/
        └── deploy.yml             # GitHub Actions (запланировано)
```

---

## 4. Архитектура страниц

### 4.1 Секции главной страницы (из legacy)

| № | Секция | WordPress-реализация | Статус |
|---|--------|----------------------|--------|
| 1 | Header (лого + nav) | Blocksy Header Builder | 📋 |
| 2 | Hero (заголовок + CTA) | Gutenberg/Spectra + [refertur_cta] | 📋 |
| 3 | Market stats (3 цифры) | Spectra Counter Block | 📋 |
| 4 | Services grid (карточки) | Spectra Grid + ACF или Custom Post Type | 📋 |
| 5 | About / SEO text block | Gutenberg Paragraphs + Schema | 📋 |
| 6 | FAQ (аккордеон) | Spectra FAQ Block + JSON-LD | 📋 |
| 7 | Contacts / Footer | Blocksy Footer Builder + [refertur_cta] | 📋 |

### 4.2 Приоритеты рефакторинга

- Нормализовать иерархию заголовков (H1 → H2 → H3)
- Карточки услуг — в data-driven структуру (CPT или ACF)
- Убрать inline onclick, перенести в делегированный JS
- SEO-метаданные — в Rank Math / WordPress

---

## 5. Слои кастомизации

### 5.1 Child Theme (refertur-child)

**Файлы:**
- `style.css` — заголовок темы, наследование от Blocksy
- `functions.php` — подключает `assets/css/app.css` и `assets/js/app.js`
- `assets/css/custom.css` — кастомные стили поверх Blocksy
- `assets/js/main.js` — reveal-анимации, FAQ-toggle, messenger-кнопка, canvas-эффекты

**Принцип:** child theme отвечает только за визуал и JS-поведение. Контент и настройки — через WP/Blocksy.

### 5.2 Helper Plugin (refertur-site-core v0.1.0)

**Файл:** `refertur-site-core.php`

**Текущий функционал:**
- Шорткод `[refertur_cta type="tg" label="Написать" message="..."]` → кнопка с data-атрибутами для открытия мессенджера

**Запланировано:**
- Schema.org JSON-LD (LocalBusiness, FAQ, Service)
- AI-links (специальные ссылки для AEO/AI-поиска)
- Интеграции (аналитика, CRM)

---

## 6. CI/CD архитектура

**Принятое решение (из research):** SSH + rsync — основной метод деплоя для VPS.

```
GitHub (main branch)
    ↓ push
GitHub Actions (.github/workflows/deploy.yml)
    ↓ rsync over SSH
VPS (WordPress installation)
    ↓
wordpress/wp-content/themes/refertur-child/
wordpress/wp-content/plugins/refertur-site-core/
```

**MCP** — вспомогательный инструмент для:
- AI-ассистенты работают с контентом WP без SSH
- Автоматизация WooCommerce задач (если появится)
- Дополнение к REST API в GitHub Actions

---

## 7. Принятые решения (Decision Log)

| Дата | Решение | Обоснование |
|------|---------|-------------|
| 2026-05-26 | Blocksy + Spectra вместо Elementor/Divi | Производительность, нативные блоки, без vendor lock-in |
| 2026-05-26 | SSH + rsync как основной деплой | VPS, скорость, надёжность, прямой контроль |
| 2026-05-26 | MCP как вспомогательный инструмент | Не заменяет SSH для файлов, но полезен для контента и AI |
| 2026-05-26 | child theme + plugin вместо monolith | Разделение ответственности, обновляемость |
| 2026-05-26 | Rank Math для SEO | AEO-возможности, JSON-LD, совместимость с WP |

---

## 8. Текущий статус (2026-05-26)

### Завершено:
- ✅ Фаза 1: Репозиторий, структура, legacy HTML, child theme скелет, helper plugin скелет
- ✅ Фаза 2: Документация (migration-plan, content-map, wordpress-github-sync)
- ✅ Research: MCP vs SSH/REST API (research/mcp-wordpress-woocommerce.md)

### В работе:
- 🔄 Фаза 3: WordPress сборка на VPS
  - Следующий шаг: Полный анализ legacy HTML → детальная карта секций
  - Затем: Gutenberg patterns для Hero, Services, FAQ

### Запланировано:
- 📋 Фаза 4: SEO и производительность (Rank Math, JSON-LD, Core Web Vitals)
- 📋 Фаза 5: CI/CD (GitHub Actions + rsync + deploy.yml)
- 📋 Фаза 6: Развитие (Портфолио, Контакты, мультиязычность)

---

## 9. Как использовать этот файл

### 📝 Синхронизация с GitHub Wiki

**Правило:** При каждом значимом изменении ARCHITECTURE.md — обновить Wiki:

1. Открыть [Wiki > Architecture](https://github.com/referturnet/refertur.net/wiki/Architecture)
2. Нажать кнопку "Edit"
3. Добавить ссылку на актуальную версию в репозитории
4. Сохранить

**Частота обновления:**
- При изменении tech stack
- При добавлении новых Decision Log записей
- При изменении структуры репозитория

**Alternatively:** Можно автоматизировать через GitHu Actions — **✅ РЕАЛИЗОВАНО** (см. `.github/workflows/wiki-sync.yml`)

Синхронизация происходит автоматически:
- При изменении файлов ARCHITECTURE.md, ROADMAP.md, docs/content-map.md
- Еженедельно (каждый понедельник в 00:00 UTC)
- Вручную через GitHub Actions (workflow_dispatch)

---

## 10. Gutenberg Patterns

### 📦 Созданные паттерны

В директории `docs/patterns/` созданы JSON-паттерны для WordPress Gutenberg:

1. **hero.json** — Героическая секция
   - H1 заголовок
   - 2 CTA кнопки (Telegram/WhatsApp)
   - Центрованная раскладка

2. **services.json** — Сетка услуг (4 колонки)
   - Блок "Послуги та переваги"
   - 4 карточки с иконками:
     - Пошук турів
     - Гарантія якості
     - Економія 40-80%
     - Підтримка 24/7

3. **faq.json** — FAQ секция
   - 4 вопроса с ответами
   - Аккордеон-стиль (core/details)

### 🔗 Использование

Паттерны можно импортировать в WordPress через:
- WP-CLI: `wp pattern import`
- REST API: POST `/wp/v2/patterns`
- Ручная установка через admin panel

---

## 11. CI/CD и автоматизация

### 🤖 GitHub Actions Workflows

#### wiki-sync.yml — Автосинхронизация Wiki
**Статус:** ✅ Активен  
**Триггеры:**
- Push в main (при изменении ARCHITECTURE.md, ROADMAP.md, content-map.md)
- Расписание: еженедельно (понедельник 00:00 UTC)
- Ручной запуск (workflow_dispatch)

**Действия:**
1. Checkout репозитория и Wiki
2. Копирование ARCHITECTURE.md → wiki/Architecture.md
3. Копирование ROADMAP.md → wiki/Roadmap.md
4. Копирование docs/content-map.md → wiki/Content-Map.md
5. Коммит и push в Wiki

#### deploy.yml — Деплой на WordPress
**Статус:** ✅ Активен  
**Триггеры:**
- Push в main (при изменении wordpress-migration/child-theme/** или helper-plugin/**)

**Действия:**
1. Checkout кода
2. Настройка SSH (webfactory/ssh-agent)
3. Rsync child theme → удаленный сервер
4. Rsync helper plugin → удаленный сервер
5. Flush WordPress cache (wp cache flush)

**Секреты (требуются):**
- `SSH_PRIVATE_KEY` — приватный ключ для подключения
- `SSH_HOST` — хост сервера WordPress
- `SSH_USER` — пользователь SSH

### 🚀 Рекомендации по деплою

1. **MVP деплой:**
   ```bash
   # Через WP-CLI
   wp theme activate refertur-child
   wp plugin activate refertur-site-core
   ```

2. **Импорт паттернов:**
   ```bash
   wp post create --post_type=wp_block --post_title="Hero Section" \
     --post_content="$(cat docs/patterns/hero.json)"
   ```

3. **Тестирование:**
   - Staging: `https://staging.refertur.net`
   - Production: после проверки на staging

---

При каждой новой сессии:
1. Прочитать ARCHITECTURE.md для понимания текущего состояния
2. Прочитать ROADMAP.md для понимания следующего шага
3. После выполнения задачи — обновить оба файла
4. Лог изменений — в CHANGELOG.md
5. Новые файлы — добавить в INDEX.md
