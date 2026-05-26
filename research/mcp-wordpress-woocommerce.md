# MCP для WordPress и WooCommerce: Deep Research

> **Дата:** 2026-05-26  
> **Цель:** Сравнить SSH/WP-CLI/REST API/MCP для связки GitHub + WordPress

---

## Что такое MCP?

**Model Context Protocol (MCP)** — открытый стандарт от Anthropic[web:2] для связи AI-ассистентов (Claude, ChatGPT, Cursor) с внешними системами. Для WordPress это означает:
- AI может **создавать посты**, управлять контентом, плагинами, настройками
- **Работает через REST API** + специальный adapter-plugin
- **Не требует SSH** — только HTTP-доступ[web:8]

---

## WordPress MCP Plugin

### Официальный плагин Automattic

**Репозиторий:** https://github.com/Automattic/wordpress-mcp[web:3]

**Что делает:**
- Превращает WordPress в MCP-сервер
- Expose WordPress Abilities API как MCP tools/resources[web:2]
- Работает с Claude Desktop, Cursor, Windsurf[web:9]

**Установка:**
```bash
# Скачать релиз wordpress-mcp.zip
wp plugin install wordpress-mcp.zip --activate
# Настроить в Settings > WordPress MCP
```

**Требует:**
- Application Password для авторизации[web:5]
- `npx @automattic/wordpress-remote` как MCP-клиент[web:6]

---

## WP-CLI как MCP Host

В 2025 году на CloudFest Hackathon[web:4] команда создала **WP-CLI MCP Host**:

**Идея:** Превратить WP-CLI в MCP-сервер, чтобы AI мог управлять WordPress **локально через терминал**.

**Архитектура:**
```
AI (Claude) → MCP Client → WP-CLI MCP Host → WordPress Core
```

**Преимущества:**
- **Не требует живого сайта**[web:14]
- Работает в dev-окружении
- AI получает доступ ко всем WP-CLI командам

**Источники:** 
- https://hackathon.cloudfest.com/project/wp-cli-mcp-host/[web:4]
- https://pascalbirchler.com/wordpress-model-context-protocol-mcp/[web:14]

---

## WooCommerce MCP (2025-2026)

### Официальная интеграция WooCommerce 10.3+

**Анонс:** WooCommerce 10.3 (октябрь 2025)[web:7] включил **beta MCP integration**.

**Возможности:**
- Product Management: создание, редактирование, удаление товаров
- Order Management: работа с заказами[web:10]
- Через WordPress Abilities API + MCP adapter[web:16]

**Текущий статус (май 2026):** developer preview[web:10]

**Community проекты:**
- https://github.com/deibiCP/WooCommerce-MCP-Server[web:13] — полный MCP-сервер для WooCommerce через REST API (JSON-RPC 2.0)

---

## Сравнение методов деплоя

| Метод | SSH нужен? | Сложность | Скорость | Подходит для |
|-------|-----------|-----------|----------|-------------|
| **rsync + SSH** | ✅ Да | Средняя | Быстро | VPS, дедик |
| **WP-CLI через SSH** | ✅ Да | Средняя | Быстро | VPS, дедик |
| **REST API** | ❌ Нет | Низкая | Средне | Любой хостинг |
| **MCP (WordPress)** | ❌ Нет | Низкая | Средне | Любой хостинг |
| **SFTP** | ❌ Нет (SFTP) | Низкая | Медленно | Шаред хостинг |

---

## MCP vs SSH: когда использовать?

### Используй SSH + rsync:
- У тебя VPS/выделенный сервер
- Нужен полный контроль над файлами
- Высокая скорость деплоя критична
- GitHub Actions уже настроен

### Используй MCP:
- Шаред хостинг без SSH
- Нужно управление контентом, а не файлами
- AI-ассистенты работают с сайтом напрямую
- Хочешь избежать SSH-ключей в Secrets

---

## Практический пример: GitHub Actions + MCP

Вместо rsync можно использовать MCP для обновления контента/плагинов через REST API:

```yaml
name: Deploy via MCP
on:
  push:
    branches: [main]
jobs:
  deploy:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v4
      
      - name: Deploy via WordPress REST API
        env:
          WP_URL: ${{ secrets.WP_URL }}
          WP_USER: ${{ secrets.WP_USER }}
          WP_APP_PASSWORD: ${{ secrets.WP_APP_PASSWORD }}
        run: |
          # Обновление контента через REST API
          curl -X POST "$WP_URL/wp-json/wp/v2/posts" \
            -u "$WP_USER:$WP_APP_PASSWORD" \
            -H "Content-Type: application/json" \
            -d '{"title":"Updated via MCP","status":"publish"}'
```

**Но:** для деплоя файлов темы/плагина — всё ещё нужен SSH/SFTP.

---

## Источники

- [web:2] https://make.wordpress.org/ai/2025/07/17/mcp-adapter/
- [web:3] https://github.com/Automattic/wordpress-mcp
- [web:4] https://hackathon.cloudfest.com/project/wp-cli-mcp-host/
- [web:5] https://www.youtube.com/watch?v=XO4L5Hv3RTw
- [web:6] https://webdevstudios.com/2025/06/11/using-wordpress-mcp-as-a-development-tool/
- [web:7] https://developer.woocommerce.com/2025/10/22/woocommerce-10-3-cogs-comes-to-core-and-mcp-beta/
- [web:8] https://mcpmarket.com/server/wordpress-rest-api
- [web:9] https://www.reddit.com/r/Wordpress/comments/1of01qa/wordpress_mcp_server_free_ai_integration_for/
- [web:10] https://www.pootlepress.com/2025/10/10-ways-woocommerce-mcp-could-make-your-storefront-actually-exciting/
- [web:11] https://www.seedprod.com/wp-cli-mcp-ai-agent-superpowers/
- [web:13] https://github.com/deibiCP/WooCommerce-MCP-Server
- [web:14] https://pascalbirchler.com/wordpress-model-context-protocol-mcp/
- [web:16] https://developer.woocommerce.com/docs/features/mcp/

---

## Вывод для refertur.net

Для текущего проекта **rsync + SSH — оптимально**:
- VPS доступен
- Быстро и надёжно
- Уже настроен deploy.yml

**MCP** полезен для:
- AI-ассистентов для работы с контентом
- WooCommerce automation (товары, заказы)
- Разработки локально через WP-CLI MCP Host

Рекомендация: **Оставить SSH** для deploy, **добавить MCP** для будущих WooCommerce интеграций.
