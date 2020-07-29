<?php

require_once __DIR__ . "/../lib/locale.php";

\Sprint\Migration\Locale::loadLocale(
    "ru",
    [
        "MODULE_NAME"                        => "Миграции для разработчиков",
        "MODULE_DESCRIPTION"                 => "Модуль для управления миграциями бд, создание, установка, откат миграций",
        "PARTNER_NAME"                       => "Андрей Рябин",
        "PARTNER_URI"                        => "https://packagist.org/packages/andreyryabin/sprint.migration",
        "ACCESS_DENIED"                      => "Доступ запрещен",
        "MENU_SPRINT"                        => "Миграции для разработчиков",
        "MENU_SCHEMAS"                       => "Схемы данных",
        "TITLE"                              => "Миграции",
        "FORM_DESCR"                         => "Описание",
        "FORM_PREFIX"                        => "Заголовок",
        "LIST_EMPTY"                         => "нет",
        "UP"                                 => "Установить",
        "DOWN"                               => "Откатить",
        "UP_START"                           => "Установить новые",
        "UP_START_WITH_TAG"                  => "Установить новые с тегом",
        "DOWN_START"                         => "Откатить все",
        "UP_CONFIRM"                         => "Установить новые миграции?",
        "DOWN_CONFIRM"                       => "Откатить все установленные миграции?",
        "VIEW_FILE"                          => "Просмотреть",
        "TRANSFER_TO"                        => "Перенести в",
        "TOGGLE_LIST"                        => "Все",
        "TOGGLE_NEW"                         => "Новые",
        "TOGGLE_STATUS"                      => "Суммарно",
        "TOGGLE_INSTALLED"                   => "Установленные",
        "TOGGLE_MODIFIED"                    => "Измененные",
        "TOGGLE_OLDER"                       => "Не поддерживаемые",
        "TOGGLE_TAG"                         => "Тег",
        "LINK_MP"                            => "Маркетплейс",
        "LINK_DOC"                           => "Документация",
        "LINK_ARTICLES"                      => "Статьи",
        "LINK_COMPOSER"                      => "Composer",
        "LINK_TASKS"                         => "Задачи",
        "LINK_TELEGRAM"                      => "Группа в телеграме",
        "LINK_IMPROVE_TRANSLATION"           => "Улучшите перевод на английский, создайте пул-реквест с этим файлом",
        "NEW"                                => "Новые миграции",
        "INSTALLED"                          => "Установленные",
        "UNKNOWN"                            => "Неизвестные",
        "VERSION_NEW"                        => "Новая",
        "VERSION_INSTALLED"                  => "Установленная",
        "DESC_NEW"                           => "(только файл)",
        "DESC_INSTALLED"                     => "(файл + запись об установке)",
        "DESC_UNKNOWN"                       => "(только запись об установке)",
        "META_NEW"                           => "Новые",
        "META_INSTALLED"                     => "Установленные",
        "META_UNKNOWN"                       => "Неизвестные",
        "CREATED_SUCCESS"                    => "Миграция #VERSION# создана",
        "SEARCH"                             => "Поиск",
        "ADMIN_INTERFACE_HIDDEN"             => "Управление миграциями через админку отключено",
        "CFG_TITLE"                          => "Миграции",
        "SCH_TITLE"                          => "Схемы данных",
        "CONFIG"                             => "Конфигурация",
        "CONFIG_archive"                     => "Архив",
        "CONFIG_migration_dir"               => "Директория для миграций",
        "CONFIG_migration_extend_class"      => "Класс, наследуемый миграциями",
        "CONFIG_migration_table"             => "Таблица в бд с миграциями",
        "CONFIG_version_prefix"              => "Заголовок класса миграции",
        "CONFIG_version_builders"            => "Конструкторы",
        "CONFIG_version_filter"              => "Фильтр списка миграций",
        "CONFIG_stop_on_errors"              => "Останавливать выполнение миграций при ошибках",
        "CONFIG_show_admin_interface"        => "Показывать сервис миграций в админке",
        "CONFIG_console_user"                => "Пользователь, от которого запускаются миграции в консоли",
        "CONFIG_console_auth_events_disable" => "Отключить обработчики авторизации в консоли",
        "CONFIG_config_file"                 => "Файл конфигурации",
        "CONFIG_title"                       => "Название конфигурации",
        "CONFIG_version_schemas"             => "Схемы данных",
        "CONFIG_yes"                         => "да",
        "CONFIG_no"                          => "нет",
        "CONFIG_version_name_template"       => "Шаблон названия миграции",
        "BUILDER_ERROR"                      => "Ошибка",
        "BUILDER_NEXT"                       => "Далее",
        "BUILDER_RESET"                      => "Сбросить",
        "SELECT_ALL"                         => "Выбрать все",
        "SELECT_ONE"                         => "Выбрать",

        "BUILDER_Transfer1"         => "Перенести миграции",
        "BUILDER_TransferTo"        => "Перенести в другую конфигурацию",
        "BUILDER_TransferAll"       => "Все",
        "BUILDER_TransferNew"       => "Новые",
        "BUILDER_TransferInstalled" => "Установленные",
        "BUILDER_TransferUnknown"   => "Неизвестные",
        "BUILDER_TransferSelect"    => "Выбрать миграции",

        "BUILDER_EventExport1"            => "Создать миграцию для почтовых событий",
        "BUILDER_EventExport2"            => "",
        "BUILDER_EventExport_event_types" => "Выберите типы почтовых событий",

        "BUILDER_AgentExport1"         => "Создать миграцию для агентов",
        "BUILDER_AgentExport2"         => "",
        "BUILDER_AgentExport_agent_id" => "Выберите агенты",

        "BUILDER_Version1" => "Создать простую миграцию",
        "BUILDER_Version2" => "",

        "BUILDER_UserGroupExport1"           => "Создать миграцию для групп пользователей",
        "BUILDER_UserGroupExport2"           => "",
        "BUILDER_UserGroupExport_user_group" => "Выберите группы",

        "BUILDER_IblockExport1"                      => "Создать миграцию для инфоблока",
        "BUILDER_IblockExport2"                      => "",
        "BUILDER_IblockExport_IblockId"              => "Выберите инфоблок",
        "BUILDER_IblockExport_PropertyIds"           => "Выберите свойства",
        "BUILDER_IblockExport_What"                  => "Что переносим",
        "BUILDER_IblockExport_WhatIblock"            => "Инфоблок",
        "BUILDER_IblockExport_WhatIblockType"        => "Тип инфоблока",
        "BUILDER_IblockExport_WhatIblockFields"      => "Поля инфоблока",
        "BUILDER_IblockExport_WhatIblockProperties"  => "Свойства инфоблока",
        "BUILDER_IblockExport_WhatIblockUserOptions" => "Настройки формы редактирования и списка",
        "BUILDER_IblockExport_WhatIblockPermissions" => "Доступ к инфоблоку",

        "BUILDER_IblockElementsExport1"         => "Перенести элементы инфоблоков",
        "BUILDER_IblockElementsExport2"         => "Переносит элементы с полями и свойствами\nПереносит изображения, файлы и списки",
        "BUILDER_IblockElementsExport_IblockId" => "Выберите инфоблок",

        "BUILDER_IblockCategoryExport1"         => "Перенести категории инфоблоков",
        "BUILDER_IblockCategoryExport2"         => "Переносит категории инфоблоков без изображений",
        "BUILDER_IblockCategoryExport_IblockId" => "Выберите инфоблок",

        "BUILDER_HlblockElementsExport1"          => "Перенести элементы highload-блоков",
        "BUILDER_HlblockElementsExport2"          => "Переносит элементы\nПереносит изображения, файлы и списки",
        "BUILDER_HlblockElementsExport_HlblockId" => "Выберите highload-блок",

        "BUILDER_USEROPTIONSEXPORT_TITLE"         => "Создать миграцию для пользовательских настроек",
        "BUILDER_UserOptionsExport_Desc"          => "",
        "BUILDER_UserOptionsExport_What"          => "Что переносим",
        "BUILDER_UserOptionsExport_WhatUserForm"  => "Настрока формы редактирования пользователей",
        "BUILDER_UserOptionsExport_WhatUserList"  => "Настрока списка пользователей",
        "BUILDER_UserOptionsExport_WhatGroupList" => "Настрока списка групп",

        "BUILDER_HlblockExport1"          => "Создать миграцию для highload-блока",
        "BUILDER_HlblockExport2"          => "",
        "BUILDER_HlblockExport_HlblockId" => "Выберите highload-блоки",

        "BUILDER_UserTypeEntities1"         => "Создать миграцию для пользовательских полей",
        "BUILDER_UserTypeEntities2"         => "",
        "BUILDER_UserTypeEntities_EntityId" => "Укажите поле для выгрузки",

        "BUILDER_FormExport1"         => "Создать миграцию для веб-формы",
        "BUILDER_FormExport2"         => "",
        "BUILDER_FormExport_FormId"   => "Выберите форму",
        "BUILDER_FormExport_What"     => "Что переносим?",
        "BUILDER_FormExport_Form"     => "Форму",
        "BUILDER_FormExport_Fields"   => "Поля формы",
        "BUILDER_FormExport_Statuses" => "Статусы",

        "BUILDER_OptionExport1"          => "Создать миграцию для настроек модулей",
        "BUILDER_OptionExport2"          => "",
        "BUILDER_OptionExport_module_id" => "Выберите модули",

        "BUILDER_CacheCleaner1" => "Очистка кеша",
        "BUILDER_CacheCleaner2" => "Выполнить BXClearCache(true)",

        "BUILDER_Configurator"             => "Создать конфигурацию",
        "BUILDER_Configurator_config_name" => "Название (лат буквы и цифры)",
        "BUILDER_Configurator_error"       => "Ошибка создания конфигурации",
        "BUILDER_Configurator_success"     => "Конфигурация создана",

        "BUILDER_Cleaner"             => "Удалить конфигурацию",
        "BUILDER_Cleaner_desc"        => "Удаление файла конфигурации, файлов миграций и записей в таблице миграций",
        "BUILDER_Cleaner_config_name" => "Название (лат буквы и цифры)",
        "BUILDER_Cleaner_error"       => "Ошибка удаления конфигурации",
        "BUILDER_Cleaner_success"     => "Конфигурация удалена",

        "BUILDER_SchemaImport" => "Установка схемы",
        "BUILDER_SchemaExport" => "Создание схемы",

        "GOTO_MIGRATION" => "Админка миграций",
        "GOTO_OPTIONS"   => "Настройки модуля",

        "OPTIONS_REMOVE"         => "Сбросить настройки модуля",
        "OPTIONS_REMOVE_success" => "Настройки сброшены",

        "MARK"              => "Отметить миграцию",
        "MARK_FIELD1"       => "Выбрать миграцию",
        "MARK_FIELD2"       => "Отметить как",
        "MARK_VERSION"      => "Название|installed|new|unknown",
        "MARK_AS_NEW"       => "новую",
        "MARK_AS_INSTALLED" => "установленную",
        "MARK_SUCCESS1"     => "Миграция #VERSION# отмечена как новая",
        "MARK_SUCCESS2"     => "Миграция #VERSION# отмечена как установленная",
        "MARK_SUCCESS3"     => "Миграция #VERSION# удалена",
        "MARK_ERROR1"       => "Миграция #VERSION# уже является новой",
        "MARK_ERROR2"       => "Миграция #VERSION# уже была установлена",
        "MARK_ERROR3"       => "Миграция #VERSION# не изменена",
        "MARK_ERROR4"       => "Не найдено миграций для изменения",

        "MARK_NEW_AS_INSTALLED" => "Отметить как установленную",
        "MARK_INSTALLED_AS_NEW" => "Отметить как новую",
        "MARK_UNKNOWN_AS_NEW"   => "Удалить",

        "DELETE"        => "Удалить",
        "DELETE_OK"     => "Миграция #VERSION# удалена",
        "DELETE_ERROR1" => "Миграций для удаления не найдено",
        "DELETE_ERROR2" => "Миграция #VERSION# не найдена",

        "TRANSFER_OK"     => "Миграция #VERSION# перенесена",
        "TRANSFER_OK_CNT" => "Перенесено миграций: #CNT#",
        "TRANSFER_ERROR1" => "Миграции для переноса не найдены",
        "TRANSFER_ERROR2" => "Миграция уже находится в этой конфигурации",

        "CREATE"            => "Создать миграцию",
        "VERSION_NOT_FOUND" => "Миграция не найдена",
        "RIGHT_D"           => "Доступ запрещен",
        "RIGHT_W"           => "Доступ разрешен",

        "MODIFIED_SCHEMA"  => "Содержимое схемы было изменено после установки",
        "MODIFIED_VERSION" => "Код миграции был изменен после установки",
        "MODIFIED_LABEL"   => "M",
        "OLDER_VERSION"    => "Код миграции был создан в более поздней версии модуля #V1#\nВозможно, он использует возможности, которые не реализованы в текущей версии #V2#",
        "OLDER_LABEL"      => "!",

        "TAG"           => "Миграция отмечена тегом",
        "SETTAG"        => "Поставить тег",
        "SETTAG_OK"     => "Тег для миграции #VERSION# задан",
        "SETTAG_ERROR1" => "Миграций для установки тега не найдено",
        "SETTAG_ERROR2" => "Миграция #VERSION# не найдена",

        "SCHEMA_DIFF"                  => "Проверить изменения",
        "SCHEMA_IMPORT"                => "Установить схему",
        "SCHEMA_EXPORT"                => "Создать схему",
        "SCHEMA_AGENT"                 => "Схема агентов",
        "SCHEMA_AGENT_DESC"            => "Агенты: #COUNT#",
        "SCHEMA_EVENT"                 => "Схема почтовых событий",
        "SCHEMA_EVENT_DESC"            => "Типы почтовых событий: #COUNT#",
        "SCHEMA_EVENT_MESSAGES_DESC"   => "Почтовые шаблоны: #COUNT#",
        "SCHEMA_USER_GROUP"            => "Схема групп пользователей",
        "SCHEMA_USER_GROUP_DESC"       => "Группы пользователей: #COUNT#",
        "SCHEMA_HLBLOCK"               => "Схема highload-блоков",
        "SCHEMA_HLBLOCK_DESC"          => "Highload-блоки: #COUNT#",
        "SCHEMA_HLBLOCK_FIELDS_DESC"   => "Полей: #COUNT#",
        "SCHEMA_IBLOCK"                => "Схема инфоблоков",
        "SCHEMA_IBLOCK_TYPE_DESC"      => "Типы инфоблоков: #COUNT#",
        "SCHEMA_IBLOCK_DESC"           => "Инфоблоков: #COUNT#",
        "SCHEMA_IBLOCK_PROPS_DESC"     => "Свойств инфоблоков: #COUNT#",
        "SCHEMA_IBLOCK_FORMS_DESC"     => "Форм редактирования: #COUNT#",
        "SCHEMA_OPTION"                => "Схема настроек модулей",
        "SCHEMA_OPTION_DESC"           => "Настроек: #COUNT#",
        "SCHEMA_USER_TYPE_ENTITY"      => "Схема пользовательских полей",
        "SCHEMA_USER_TYPE_ENTITY_DESC" => "Полей: #COUNT#",

        "CONFIG_LIST"    => "Список конфигураций",
        "COMMAND_RUN"    => "Выполнение команд",
        "COMMAND_HELP"   => "Помощь по командам",
        "COMMAND_CONFIG" => "Просмотр конфигурации",
        "CURRENT_USER"   => "Текущий пользователь",
        "BITRIX_VERSION" => "Версия bitrix",
        "MODULE_VERSION" => "Версия модуля",

        "ERR_BUILDER_NOT_FOUND"           => "Конструктор не найден",
        "ERR_CANT_CREATE_DIRECTORY"       => "Ошибка создания директории #NAME#",
        "ERR_MSSQL_NOT_SUPPORTED"         => "MSSQL не поддерживается",
        "ERR_JSON_NOT_SUPPORTED"          => "Установите php-расширение json",
        "ERR_PHP_NOT_SUPPORTED"           => "\"#NAME#\" не поддерживается",
        "ERR_EXCHANGE_DISABLED"           => "Обмен отключен, установите php-расширение XMLReader и XMLWriter",
        "ERR_CLASS_NOT_FOUND"             => "Класс \"#NAME#\" не найден",
        "ERR_MIGRATION_FAIL"              => "Миграция не выполнилась",
        "ERR_SOME_MIGRATIONS_FAILS"       => "Некоторые миграции не выполнились",
        "ERR_VERSION_NOT_FOUND"           => "Миграция не найдена",
        "ERR_INVALID_ARGUMENTS"           => "Укажите корректные аргументы, смотрите помощь",
        "ERR_COMMAND_NOT_FOUND"           => "Команда \"#NAME#\" не найдена, смотрите помощь",
        "ERR_METHOD_NOT_FOUND"            => "Метод \"#NAME#\"  не найден",
        "ERR_CANT_CREATE_FILE"            => "Ошибка создания файла \"#NAME#\"",
        "ERR_FORM_NOT_FOUND"              => "Форма \"#NAME#\" не найдена",
        "ERR_EMPTY_REQ_FIELD"             => "Обязательное поле \"#NAME#\" не заполнено",
        "ERR_HELPER_DISABLED"             => "Помощник \"#NAME#\" отключен",
        "ERR_AGENT_NOT_ADDED"             => "Агент \"#NAME#\" не добавлен",
        "ERR_EVENT_TYPE_NOT_UPDATED"      => "Тип почтового события не обновлен",
        "ERR_CANT_DELETE_FORM"            => "Ошибка удаления формы \"#NAME#\"",
        "ERR_CANT_DELETE_EVENT_TYPE"      => "Ошибка удаления типа почтового события \"#NAME#\"",
        "ERR_CANT_DELETE_EVENT_MESSAGE"   => "Ошибка удаления почтового шаблона \"#NAME#\"",
        "ERR_EVENT_TYPE_NOT_ADDED"        => "Тип почтового события \"#NAME#\" не добавлен",
        "ERR_EVENT_MESSAGE_NOT_ADDED"     => "Почтовый шаблон \"#NAME#\" не добавлен",
        "ERR_HLBLOCK_NOT_FOUND"           => "Highload-блок не найден",
        "ERR_DEFAULT_LANGUAGE_NOT_FOUND"  => "Основной яык не найден",
        "ERR_ACTIVE_LANGUAGES_NOT_FOUND"  => "Языки не найдены",
        "ERR_DEFAULT_SITE_NOT_FOUND"      => "Основной сайт не найден",
        "ERR_ACTIVE_SITES_NOT_FOUND"      => "Сайты не найдены",
        "ERR_USER_GROUP_CODE_NOT_FOUND"   => "Не найден код группы",
        "ERR_SET_FIELDS_FOR_UPDATE_GROUP" => "Заполните поля для обновления группы",
        "ERR_USERTYPE_NOT_ADDED"          => "Пользовательское поле \"#NAME#\" не добавлено",
        "ERR_USERTYPE_NOT_UPDATED"        => "Пользовательское поле \"#NAME#\" не обновлено",
        "ERR_USERTYPE_NOT_DELETED"        => "Пользовательское поле \"#NAME#\" не удалено",
        "ERR_IB_PROPERTY_CODE_NOT_FOUND"  => "Не заполнен символьный код свойства",
        "ERR_IB_CODE_NOT_FOUND"           => "Не заполнен символьный код инфоблока",
        "ERR_IB_SECTION_NAME_NOT_FOUND"   => "Не заполнено название категории инфоблока",
        "ERR_IB_NOT_FOUND"                => "Инфоблок не найден",
        "ERR_IB_TYPE_NOT_FOUND"           => "Тип инфоблока не найден",
        "ERR_CANT_DELETE_IBLOCK"          => "Ошибка удаления инфоблок \"#NAME#\"",
        "ERR_CANT_DELETE_IBLOCK_TYPE"     => "Ошибка удаления типа инфоблока \"#NAME#\"",
        "ERR_IB_FORM_OPTIONS_NOT_FOUND"   => "Не найдены настройки формы элемента инфоблока",
        "ERR_SCHEMA_EMPTY"                => "Схема \"#NAME#\" не содержит данных",
        "ERR_SCHEMA_CREATED"              => "Схема \"#NAME#\" сохранена",
        "ERR_EXCHANGE_FILE_NOT_FOUND"     => "Файл с данными не найден",

        "AGENT_CREATED" => "Агент \"#NAME#\" добавлен",
        "AGENT_UPDATED" => "Агент \"#NAME#\" обновлен",
        "AGENT_EQUAL"   => "Агент \"#NAME#\" совпадает",
        "AGENT_DELETED" => "Агент \"#NAME#\" удален",

        "EVENT_MESSAGE_CREATED" => "Почтовый шаблон \"#NAME#\" добавлен",
        "EVENT_MESSAGE_UPDATED" => "Почтовый шаблон \"#NAME#\" обновлен",
        "EVENT_MESSAGE_EQUAL"   => "Почтовый шаблон \"#NAME#\" совпадает",
        "EVENT_MESSAGE_DELETED" => "Почтовый шаблон \"#NAME#\" удален",

        "EVENT_TYPE_CREATED" => "Тип почтового события \"#NAME#\" добавлен",
        "EVENT_TYPE_UPDATED" => "Тип почтового события \"#NAME#\" обновлен",
        "EVENT_TYPE_EQUAL"   => "Тип почтового события \"#NAME#\" совпадает",
        "EVENT_TYPE_DELETED" => "Тип почтового события \"#NAME#\" удален",

        "HLBLOCK_CREATED" => "Highload-блок \"#NAME#\" добавлен",
        "HLBLOCK_UPDATED" => "Highload-блок \"#NAME#\" обновлен",
        "HLBLOCK_EQUAL"   => "Highload-блок \"#NAME#\" совпадает",
        "HLBLOCK_DELETED" => "Highload-блок \"#NAME#\" удален",

        "OPTION_CREATED" => "Настройка \"#NAME#\" добавлена",
        "OPTION_UPDATED" => "Настройка \"#NAME#\" обновлена",
        "OPTION_EQUAL"   => "Настройка \"#NAME#\" совпадает",

        "USER_GROUP_CREATED" => "Группа \"#NAME#\" добавлена",
        "USER_GROUP_UPDATED" => "Группа \"#NAME#\" обновлена",
        "USER_GROUP_EQUAL"   => "Группа \"#NAME#\" совпадает",
        "USER_GROUP_DELETED" => "Группа \"#NAME#\" удалена",

        "USER_OPTION_LIST_CREATED" => "Список \"#NAME#\" сохранен",
        "USER_OPTION_LIST_EQUAL"   => "Список \"#NAME#\" совпадает",

        "USER_OPTION_GRID_CREATED" => "Грид \"#NAME#\" сохранен",
        "USER_OPTION_GRID_EQUAL"   => "Грид \"#NAME#\" совпадает",

        "USER_OPTION_FORM_CREATED" => "Форма редактирования \"#NAME#\" сохранена",
        "USER_OPTION_FORM_EQUAL"   => "Форма редактирования \"#NAME#\" совпадает",

        "USER_TYPE_ENTITY_CREATED" => "Пользовательское поле \"#NAME#\" добавлено",
        "USER_TYPE_ENTITY_UPDATED" => "Пользовательское поле \"#NAME#\" обновлено",
        "USER_TYPE_ENTITY_EQUAL"   => "Пользовательское поле \"#NAME#\" совпадает",
        "USER_TYPE_ENTITY_DELETED" => "Пользовательское поле \"#NAME#\" удалено",

        "IB_PROPERTY_CREATED" => "Инфоблок \"#IBLOCK_ID#\": свойство \"#NAME#\" добавлено",
        "IB_PROPERTY_UPDATED" => "Инфоблок \"#IBLOCK_ID#\": свойство \"#NAME#\" обновлено",
        "IB_PROPERTY_EQUAL"   => "Инфоблок \"#IBLOCK_ID#\": свойство \"#NAME#\" совпадает",
        "IB_PROPERTY_DELETED" => "Инфоблок \"#IBLOCK_ID#\": свойство \"#NAME#\" удалено",

        "IB_CREATED" => "Инфоблок \"#NAME#\" добавлен",
        "IB_UPDATED" => "Инфоблок \"#NAME#\" обновлен",
        "IB_EQUAL"   => "Инфоблок \"#NAME#\" совпадает",
        "IB_DELETED" => "Инфоблок \"#NAME#\" удален",

        "IB_FIELDS_CREATED" => "Инфоблок \"#NAME#\": поля добавлены",
        "IB_FIELDS_UPDATED" => "Инфоблок \"#NAME#\": поля обновлены",
        "IB_FIELDS_EQUAL"   => "Инфоблок \"#NAME#\": поля совпадают",

        "IB_TYPE_CREATED" => "Тип инфоблока \"#NAME#\" добавлен",
        "IB_TYPE_UPDATED" => "Тип инфоблока \"#NAME#\" обновлен",
        "IB_TYPE_EQUAL"   => "Тип инфоблока \"#NAME#\" совпадает",
        "IB_TYPE_DELETED" => "Тип инфоблока \"#NAME#\" удален",

        "GD_INSTALL"          => "Установить гаджеты: \"Сводка по миграциям\"",
        "GD_INSTALL_success"  => "Гаджеты установлены",
        "GD_SELECT_CONFIGS"   => "Конфигурации",
        "GD_CHECK_SCHEMAS"    => "Показывать статус для схем",
        "GD_INFO_NAME"        => "Сводка по миграциям",
        "GD_INFO_DESC"        => "Сводка по миграциям",
        "GD_TYPE"             => "Тип",
        "GD_STATE"            => "Состояние",
        "GD_SHOW"             => "Перейти",
        "GD_SHOW_SCHEMAS"     => "Перейти к схемам",
        "GD_SHOW_MIGRATIONS"  => "Перейти к миграциям",
        "GD_MIGRATIONS"       => "Миграции",
        "GD_MIGRATIONS_RED"   => "Есть неустановленные миграции",
        "GD_MIGRATIONS_GREEN" => "Все миграции установлены",
        "GD_SCHEMAS"          => "Схемы данных",
        "GD_SCHEMA_RED"       => "Не установлена",
        "GD_SCHEMA_GREEN"     => "Установлена",
    ]
);
