# Localzet PSR

[English documentation](README.md)

Общие PHP-интерфейсы в namespace Localzet.

## Состояние и совместимость

Интерфейсы используют namespace localzet\PSR. Они не заменяют автоматически пакеты Composer psr/* и интерфейсы Psr\; совместимость нужно проверять явно.

## Зависимости

- `php`: `^8.2`

## Установка

```sh
composer require localzet/psr
```

## Проверки разработки

```sh
composer validate --strict
composer install
composer dump-autoload --optimize --strict-psr
composer audit
```

Установка, lint и автозагрузка не подтверждают сквозное поведение или готовность к эксплуатации.

[Исторические примеры](docs/legacy-readme.md) нужно сверять с текущим API.

## Автор и лицензия

Ivan Zorin (`localzet`), <creator@localzet.com>, https://www.localzet.com.
Source: https://github.com/localzet/PSR. AGPL-3.0-or-later; [LICENSE](LICENSE). Сохраняются исходные уведомления авторов и лицензии сторонних компонентов.

[Authors](.github/AUTHORS.md) · [Contributing](.github/CONTRIBUTING.md) · [Security](.github/SECURITY.md)
