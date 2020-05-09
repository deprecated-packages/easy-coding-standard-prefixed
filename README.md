# Easy Coding Standard Prefixed

[![Downloads](https://img.shields.io/packagist/dt/symplify/easy-coding-standard-prefixed.svg?style=flat-square)](https://packagist.org/packages/symplify/easy-coding-standard-prefixed)

Prefixed version of ECS compiled in PHAR with [`compiler`](https://github.com/Symplify/Symplify/tree/master/packages/EasyCodingStandard/compiler).

## Install

```bash
composer require symplify/easy-coding-standard-prefixed --dev
```

### Phar file Version

`ecs.phar` is also included in this repository

```
wget https://github.com/symplify/easy-coding-standard-prefixed/blob/master/ecs.phar
```

### Non-Prefixed Version 

Head over to the ["Easy Coding Standard" repository](https://github.com/symplify/easy-coding-standard) for more information.

## Use

```bash
vendor/bin/ecs check src --set dead-code --dry-run
```
