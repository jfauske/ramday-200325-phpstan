# Ramday PHPStan



## Installing

composer require --dev phpstan/phpstan

## Using

```sh
git checkout level-0
```

vendor/bin/phpstan analyse -l 0 Developer.php

PHPStan offers different strictness levels

## Configure

phpstan.neon


## What level is best for my project?

https://github.com/TomasVotruba/phpstan-bodyscan


composer require --dev tomasvotruba/phpstan-bodyscan

vendor/bin/phpstan-bodyscan



## What is PHPStan?

```sh
git checkout intro
```

PHPStan is a static analysis tool that can help us find bugs and problematic areas in our code without actually executing it.


## How do PHPStan work?

PHPStan parses php files and build an Abstract Syntax Tree (AST).

An Abstract Syntax Tree (AST) is a tree representation of the structure, breaking down the source code into its fundamental syntactic components.

An example:
```php
<?php
echo 2+3;
```

```php
ddev exec php ast.php
```

From this, PHPStan will infer types from function signatures, docblocks and code usage.
It will then apply a set of predefined rules to detect common issues.
Those may be things like accessing undefined variables, invalid function calls or incompatible argument types used.

## Introducing PHPStan to your project

phpstan + mglaman

## Some sommon concerns

- will it slow down development?
No, it speeds up development by catching issues early rather than having to debug issues later on.
- Do we have to refactor everything at once?
No, phpstan support gradual adoption - fix the necessary first.
- Does it work with our existing tools?
PHPStan complement our existing toolset