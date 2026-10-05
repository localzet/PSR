# Localzet PSR

[Русская документация](README.ru.md)

Common PHP interfaces in the Localzet namespace.

## Status and compatibility

Interfaces use localzet\PSR namespaces. They are not a drop-in replacement for Composer psr/* packages or their Psr\ interfaces; check interoperability explicitly.

## Dependencies

- `php`: `^8.2`

## Installation

```sh
composer require localzet/psr
```

## Development checks

```sh
composer validate --strict
composer install
composer dump-autoload --optimize --strict-psr
composer audit
```

Installation, lint and autoload checks do not establish end-to-end behavior or production readiness.

[Historical usage notes](docs/legacy-readme.md) need verification against the current API.

## Author and license

Ivan Zorin (`localzet`), <creator@localzet.com>, https://www.localzet.com.
Source: https://github.com/localzet/PSR. AGPL-3.0-or-later; [LICENSE](LICENSE). Original copyright and third-party licenses remain applicable.

[Authors](.github/AUTHORS.md) · [Contributing](.github/CONTRIBUTING.md) · [Security](.github/SECURITY.md)
