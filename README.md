# Easy Coding Standard Prefixed

[![Downloads](https://img.shields.io/packagist/dt/symplify/easy-coding-standard-prefixed.svg?style=flat-square)](https://packagist.org/packages/symplify/easy-coding-standard-prefixed)

Prefixed version of ECS compiled in PHAR with [`compiler`](https://github.com/Symplify/Symplify/tree/master/packages/easy-coding-standard/compiler).

## Install

```bash
composer require symplify/easy-coding-standard-prefixed --dev
```

## Use

Create a config:

```bash
vendor/bin/ecs init
```

Setup config and run ECS in dry run:

```bash
vendor/bin/ecs check src 
```

To fix the code, add `--fix`:

```bash
vendor/bin/ecs check src --fix
```

### Non-Prefixed Version

Head over to the ["Easy Coding Standard" repository](https://github.com/symplify/easy-coding-standard) for more information.
