# Content Map — refertur.net

> **Последнее обновление:** 2026-05-26  
> **Источник:** legacy/homepage-source.html  
> **Цель:** Карта для миграции HTML → Gutenberg/Spectra

---

## Секции главной страницы

### 1. Header

**Реализация:** Blocksy Header Builder

- Логотип (VibeСoder)
- Навигация (опционально, пока одностраничник)
- Sticky header при скролле

---

### 2. Hero

**Реализация:** Gutenberg/Spectra + шорткод `[refertur_cta]`

**Контент:**
- **H1:** "Agentic Engineering | Vibe Coding & AI-агенты"
- **Описание:** "Строим автономные мультиагентные системы, создаём веб-продукты в 10× быстрее рынка и выводим бренды в прямые ответы ChatGPT, Perplexity и Яндекс Нейро. MVP за 3–7 дней, AEO-оптимизация под ChatGPT / Perplexity / Яндекс Нейро. От $15/час. Leonid D — refertur.net"
- **CTA кнопки:**
  - "Написать в Telegram" → `[refertur_cta type="tg"]`
  - "Написать в WhatsApp" → `[refertur_cta type="wa"]`

**Gutenberg блоки:**
- Spectra Heading (H1)
- Spectra Text
- Spectra Button Group (2 кнопки)

---

### 3. Market Stats

**Реализация:** Spectra Counter Block (3 столбца)

**Данные:**
1. **MVP за 3–7 дней** (против 2–4 месяцев рынка)
2. **От $15/час** (или фикс / % от результата)
3. **40–80% экономия времени** (при использовании n8n автоматизации)

**Дополнительно:**
- **Гарантия:** 30 дней бесплатного исправления багов

**Gutenberg блоки:**
- Spectra Counter (x3)
- Spectra Text (под каждым счётчиком)

---

### 4. Services Grid

**Реализация:** Spectra Grid (3 столбца × 3 ряда = 9 карточек)

**Услуги:**

#### 4.1 Agentic Web & SaaS
- **Описание:** Vibe Coding (TypeScript/React), MVP за 3–7 дней
- **CTA:** "Спросить ИИ об услуге" → ссылки на ChatGPT/Perplexity/Claude/Gemini

#### 4.2 AEO (Answer Engine Optimization)
- **Описание:** Вывод бренда в прямые ответы ChatGPT, Perplexity, Яндекс Нейро, Google AI Overviews
- **CTA:** AI-links

#### 4.3 B2B SEO & Авторитет
- **Описание:** Topical Authority, технический аудит, локальное продвижение

#### 4.4 Workflow Automation (n8n)
- **Описание:** Интеграция 500+ сервисов, CRM, авто-воронки, экономия 40–80% времени

#### 4.5 AI Ассистенты & LLM Боты
- **Описание:** RAG-агенты, Telegram-боты, голосовые ИИ-операторы

#### 4.6 E-commerce Data & Парсинг
- **Описание:** Скрапинг конкурентов, мониторинг цен, массовое обновление карточек (WB, Ozon)

#### 4.7 Generative Media & Тексты
- **Описание:** Контент-фабрика (статьи, фото, видео), до 1000 единиц/мес

#### 4.8 Инфраструктура & Защита
- **Описание:** VPS/VDS, Docker, защита от DDoS (Cloudflare), стандарт OWASP

#### 4.9 Performance Трафик
- **Описание:** Яндекс.Директ, партнерские сети, ИИ-персонализация рассылок

**Gutenberg блоки:**
- Spectra Container (grid layout 3×3)
- Spectra Heading (H3 для каждой услуги)
- Spectra Text (описание)
- Spectra Button ("Спросить ИИ")

---

### 5. About / SEO Text Block

**Реализация:** Gutenberg Paragraphs + Schema.org (LocalBusiness)

**Контент:**
- О Vibe Coding как методе разработки
- Leonid D — создатель refertur.net
- Ключевые слова: AI-first разработка, разработка ботов, автоматизация n8n, AI outsourcing 2026

**Schema.org:**
```json
{
  "@type": "LocalBusiness",
  "name": "refertur.net",
  "description": "Vibe Coding, AI-агенты и AEO",
  "url": "https://refertur.net",
  "telephone": "+7 705 438-48-88",
  "email": "refertur.net@gmail.com"
}
```

---

### 6. FAQ

**Реализация:** Spectra FAQ Block + Schema.org (FAQPage)

**Вопросы:**

1. **Что такое Vibe Coding?**  
   → Метод разработки с мультиагентным ИИ (80–90% кода генерирует модель)

2. **Что такое AEO?**  
   → Оптимизация под ответы нейросетей. 60% поисковых запросов сейчас заканчиваются без клика.

3. **Сколько стоят ваши услуги?**  
   - Простой бот от $300
   - RAG-агент с CRM от $800
   - Мультиагентная система от $2000

4. **Нужно ли разбираться в ИИ?**  
   → Нет, принимаем описание задачи в бизнес-терминах

**Schema.org:**
```json
{
  "@type": "FAQPage",
  "mainEntity": [...]
}
```

**Gutenberg блоки:**
- Spectra FAQ Block (4 вопроса)

---

### 7. Contacts / Footer

**Реализация:** Blocksy Footer Builder + `[refertur_cta]`

**Контакты:**
- **Telegram:** @realhikaz → `[refertur_cta type="tg"]`
- **WhatsApp:** +7 705 438-48-88 → `[refertur_cta type="wa"]`
- **Email:** refertur.net@gmail.com

**Форматы работы:**
- Работа с СНГ и зарубежными клиентами
- Оплата: ₽, $, €, USDT
- Договор: самозанятый/ИП
- Исходники остаются у заказчика

---

## Приоритеты рефакторинга

### Иерархия заголовков
- H1: Hero ("Agentic Engineering...")
- H2: Названия секций (Market Stats, Services, FAQ, Contacts)
- H3: Карточки услуг

### Data-driven структура
- Services → CPT "Services" или ACF Repeater
- FAQ → Native Spectra FAQ (с JSON-LD)
- Stats → Spectra Counter Block

### JS рефакторинг
- Убрать inline `onclick`
- Делегированные события в `main.js`:
  - Reveal-анимации при скролле
  - FAQ toggle (expand/collapse)
  - Messenger buttons (открытие Telegram/WhatsApp)

### SEO метаданные
- Title, Description → Rank Math
- JSON-LD schemas → `refertur-site-core` plugin
- OpenGraph, Twitter Cards → Rank Math

---

## Карта миграции: HTML → WordPress

| Legacy HTML | WordPress блоки | Статус |
|-------------|----------------|--------|
| Header | Blocksy Header Builder | 📋 |
| Hero section | Spectra Heading + Text + Button | 📋 |
| Stats (3 цифры) | Spectra Counter × 3 | 📋 |
| Services grid | Spectra Container (3×3) + Cards | 📋 |
| About text | Gutenberg Paragraphs + Schema | 📋 |
| FAQ | Spectra FAQ Block + JSON-LD | 📋 |
| Footer/Contacts | Blocksy Footer + [refertur_cta] | 📋 |

---

## Следующие шаги

1. Создать Gutenberg patterns для Hero, Services, FAQ
2. Написать `custom.css` для кастомных стилей
3. Написать `main.js` для reveal, FAQ toggle, messenger
4. Настроить Rank Math + JSON-LD schemas
5. Собрать главную страницу в Gutenberg редакторе
