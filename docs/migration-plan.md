# Migration plan: legacy landing -> WordPress (Blocksy + Spectra)

## Цель
Перенести текущий код refertur.net в управляемую архитектуру WordPress на базе темы Blocksy и плагина Spectra без потери SEO/AEO, контента и ключевых CTA.

## Текущее состояние
- Исходник представляет собой один кастомный HTML-лендинг.
- SEO и schema частично зашиты в head.
- Интерактив завязан на кастомный JS и CSS.
- Карточки услуг и FAQ захардкожены в HTML.

## Целевая архитектура
- Theme: Blocksy
- Page builder: Gutenberg + Spectra
- SEO: Rank Math
- Custom layer: child theme + helper plugin

## Принципы миграции
1. Не переносить legacy HTML как монолит.
2. Разделить контент, визуальный слой и поведение.
3. Всё редактируемое — в блоки или WP options.
4. Всё повторяемое — в patterns, reusable blocks или plugin settings.
5. Всё сложное JS/CSS — в child theme/plugin.

## Карта переноса
- Header/Footer -> Blocksy builder
- Hero/Stats/About/FAQ -> Gutenberg/Spectra
- Service cards -> patterns или dynamic output
- Messenger CTA -> helper plugin
- AI-links -> helper plugin
- Schema/meta -> Rank Math + custom schema hooks
