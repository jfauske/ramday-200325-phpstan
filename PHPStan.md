# Ramday PHPStan

Hi all, and welcome to this Ramday session dedicated to PHPStan.

In this session I hope to ignite a little spark of curiosity into a really cool tool that have the potential to save us a lot of grief and gray hairs.
I've personally found that once you start tapping into the powers of PHPStan, you can save a tremendous amount of time where you previosuly spent debugging your code.

In this session I plan to talk a little bit about these topics:

## What is PHPStan?

We can take that immediately: PHPStan is a static analysis tool that can help us find bugs and problematic areas in our code without actually executing it.


## We will look briefly into how PHPStan works

## We are going to go through a basic installation using composer

## And some basic examples

Just some basic usage to show how PHPStan can help you dicsover and fix issues in seemingly perfect code.

## We will look at how we can introduce PHPStan to our project

## I will share a little bit about how PHPStan is already being used in some Ramsalt projects

## And in the end I thought we may do some questions and answers and potentially have a look at what PHPStan can tell us about the code quality in a project that has been around for a while


## So, how do PHPStan work

PHPStan uses the phpparser library to parse php files and build an Abstract Syntax Tree (AST).

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

## Installing

composer require --dev phpstan/phpstan

## Using

vendor/bin/phpstan analyse -l 0 src/Developer.php

PHPStan offers 10 different strictness levels starting with 0 as the least strcict and 10 as the most strict.
The individual levels are cumulative so of you tell phpstan to run at level 4, it will also give you all the checks for level 0 through 3.

## Some examples

We can start by running some prepared code with PHP 8.1.
Let's just switch to an IDE to look at the code and running it.

Now, let's see what PHPStan has to say.

Now, in level 0, phpstan will do basic checks, unknown classes, unknown functions, unknown methods called on $this, wrong number of arguments passed to those methods and functions, always undefined variables.

Let's start fixing the code and see what other gems phpstan may come up with when we level up.

## Configure

phpstan.neon


## What level is best for my project?

https://github.com/TomasVotruba/phpstan-bodyscan


composer require --dev tomasvotruba/phpstan-bodyscan

vendor/bin/phpstan-bodyscan