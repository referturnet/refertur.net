# HOSTING — Документация Timeweb

> **Последнее обновление:** 2026-05-26  
> **Статус:** 🔄 В процессе фетчинга

Центральный индекс документации по хостинговым решениям Timeweb для проекта refertur.net.

---

## 📋 Оглавление

1. [Timeweb Cloud](#timeweb-cloud)
2. [Timeweb Виртуальный Хостинг](#timeweb-виртуальный-хостинг)
3. [Структура документации](#структура-документации)
4. [Реферальные программы](#реферальные-программы)
5. [Roadmap фетчинга](#roadmap-фетчинга)

---

## 1. Timeweb Cloud

###  🌐 Официальная документация
- **URL:** https://timeweb.cloud/docs
- **Описание:** Облачная инфраструктура для бизнеса и разработки

### 📚 Основные разделы

#### Облачные сервисы
- [ ] **Облачные базы данных** (`dbaas.md`)
- [ ] **Хранилище S3** (`s3-storage.md`)
- [ ] **Kubernetes** (`k8s.md`)
- [ ] **App Platform** (`app-platform.md`)
- [ ] **Облако VMware** (`vmware.md`)
- [ ] **AI-агенты** (`ai-agents.md`)

#### Сети
- [ ] **Зоны доступности** (`availability-zones.md`)
- [ ] **Virtual Private Cloud** (`vpc.md`)
- [ ] **Балансировщик нагрузки** (`load-balancer.md`)
- [ ] **Firewall** (`firewall.md`)
- [ ] **Публичные IP** (`public-ip.md`)
- [ ] **Сетевые диски** (`network-drives.md`)
- [ ] **Виртуальные роутеры** (`virtual-routers.md`)
- [ ] **CDN** (`cdn.md`)

#### Серверы
- [ ] **Облачные серверы** (`cloud-servers/`)
  - [ ] Обзор и начало работы
  - [ ] Управление серверами
  - [ ] Спецификации и ограничения
  - [ ] HighCPU серверы
  - [ ] VDS в Европе
- [ ] **Выделенные серверы** (`dedicated.md`)
- [ ] **Серверы 152-ФЗ** (`152-fz.md`)
- [ ] **Администрирование серверов** (`admin.md`)
- [ ] **Защита от DDoS + CDN** (`anti-ddos.md`)

#### Другие услуги и сервисы
- [ ] **Почта** (`mail.md`)
- [ ] **Домены** (`domains.md`)
- [ ] **Лицензии** (`licenses.md`)
- [ ] **SSL-сертификаты** (`ssl.md`)

#### Инструкции для серверов
- [ ] **Инструкции для UNIX-систем** (`unix-guides/`)
- [ ] **Инструкции для Windows** (`windows-guides/`)
- [ ] **Панели управления** (`control-panels/`)

#### CMS
- [ ] **Инструкции для CMS** (`cms/`)

#### Общие вопросы
- [ ] **Роадмап и чейнджлог** (`roadmap-changelog.md`)
- [ ] **Наши дата-центры** (`datacenters.md`)
- [ ] **Общие вопросы** (`general.md`)

#### Инструменты для автоматизации
- [ ] **Public API** (`api.md`)
- [ ] **Timeweb Cloud CLI** (`cli.md`)
- [ ] **Terraform** (`terraform.md`)

#### Оплата и документы
- [ ] **Оплата** (`payments.md`)
- [ ] **Отчетные документы** (`accounting-docs.md`)
- [ ] **Договор** (`contract.md`)
- [ ] **Электронный документооборот** (`edo.md`)

#### Работа с аккаунтом
- [ ] **Работа с аккаунтом Timeweb Cloud** (`account-management.md`)
- [ ] **Управление доступом** (`iam.md`)
- [ ] **Проекты** (`projects.md`)
- [ ] **TimewebGPT** (`timewebgpt.md`)
- [ ] **Приложение Timeweb Cloud** (`mobile-app.md`)

---

## 2. Timeweb Виртуальный Хостинг

### 🌐 Официальная документация
- **URL:** https://timeweb.com/ru/docs/virtualnyj-hosting/
- **Описание:** Виртуальный хостинг для сайтов

### 📚 Основные разделы

- [ ] **Общая информация о хостинге** (`virtual-hosting/general.md`)
- [ ] **Тарифы и оплата** (`virtual-hosting/pricing.md`)
- [ ] **Перенос сайтов на хостинг** (`virtual-hosting/migration.md`)
- [ ] **Подключение к серверу хостинга** (`virtual-hosting/connection.md`)
- [ ] **Работа с сайтом** (`virtual-hosting/site-management.md`)
- [ ] **CMS** (`virtual-hosting/cms.md`)
- [ ] **Базы данных** (`virtual-hosting/databases.md`)
- [ ] **Резервное копирование** (`virtual-hosting/backups.md`)
- [ ] **PHP** (`virtual-hosting/php.md`)
- [ ] **Логи и статистика** (`virtual-hosting/logs.md`)
- [ ] **Файл .htaccess** (`virtual-hosting/htaccess.md`)
- [ ] **Вопросы по нагрузке** (`virtual-hosting/load.md`)
- [ ] **Защита от взломов и заражений** (`virtual-hosting/security.md`)
- [ ] **Оптимизация работы сайта** (`virtual-hosting/optimization.md`)
- [ ] **Защита от DDoS** (`virtual-hosting/ddos-protection.md`)
- [ ] **Дополнительный IP-адрес** (`virtual-hosting/additional-ip.md`)
- [ ] **Планировщик заданий Cron** (`virtual-hosting/cron.md`)
- [ ] **Приложения и фреймворки** (`virtual-hosting/frameworks.md`)
- [ ] **Возможные ошибки и их устранение** (`virtual-hosting/errors.md`)
- [ ] **Другие вопросы и инструкции** (`virtual-hosting/other.md`)

---

## 3. Структура документации

```
docs/hosting/
├── INDEX.md                          # Этот файл
├── ROADMAP.md                        # План фетчинга документации
│
├── timeweb-cloud/
│   ├── cloud-servers/
│   │   ├── overview.md
│   │   ├── getting-started.md
│   │   ├── management.md
│   │   ├── specifications.md
│   │   └── ...
│   ├── dbaas.md
│   ├── s3-storage.md
│   ├── k8s.md
│   └── ...
│
├── virtual-hosting/
│   ├── general.md
│   ├── pricing.md
│   ├── migration.md
│   └── ...
│
└── comparison/
    └── cloud-vs-vps-vs-hosting.md
```

---

## 4. Реферальные программы

### 🔗 Реферальные ссылки (будут добавлены)

#### Timeweb Cloud
- **Основная ссылка:** `[REFERRAL_LINK_PLACEHOLDER]`
- **Бонусы:** `[TO_BE_DEFINED]`
- **Условия:** `[TO_BE_DEFINED]`

#### Timeweb Виртуальный Хостинг
- **Основная ссылка:** `[REFERRAL_LINK_PLACEHOLDER]`
- **Бонусы:** `[TO_BE_DEFINED]`
- **Условия:** `[TO_BE_DEFINED]`

---

## 5. Roadmap фетчинга

### Фаза 1: Структура и индексация ✅
- [x] Создать INDEX.md
- [ ] Создать ROADMAP.md
- [ ] Создать Wiki страницу Hosting

### Фаза 2: Timeweb Cloud — Приоритетные разделы 🔄
- [ ] Облачные серверы (полная документация)
- [ ] Public API
- [ ] CLI
- [ ] Terraform

### Фаза 3: Timeweb Cloud — Сети и инфраструктура
- [ ] VPC
- [ ] Firewall
- [ ] Load Balancer
- [ ] CDN

### Фаза 4: Timeweb Виртуальный Хостинг
- [ ] Все разделы виртуального хостинга

### Фаза 5: Дополнительные сервисы
- [ ] DBaaS
- [ ] S3 Storage
- [ ] Kubernetes
- [ ] Остальные облачные сервисы

### Фаза 6: Финализация
- [ ] Создать сравнительные таблицы
- [ ] Добавить реферальные ссылки
- [ ] Обновить Wiki
- [ ] Синхронизировать с ARCHITECTURE.md

---

## 📌 Примечания

- Документация фетчится постепенно для избежания перегрузки
- Приоритет отдается разделам, необходимым для развертывания refertur.net
- Все markdown файлы структурированы и содержат метаданные
- Реферальные ссылки будут добавлены после подтверждения

---

## 🔗 Связанные документы

- [ARCHITECTURE.md](/ARCHITECTURE.md)
- [ROADMAP.md](/ROADMAP.md)
- [migration-plan.md](/docs/migration-plan.md)
- [Wiki: Hosting](https://github.com/referturnet/refertur.net/wiki/Hosting) _(будет создан)_
