# Ramday PHPStan

Hi all, and welcome to this session dedicated to PHPStan.

In this session I hope to ignite a little spark of curiosity into a really cool tool that have the potential to save us a lot of grief and gray hairs.
I've personally found that once you start tapping into the powers of PHPStan, you can save a tremendous amount of time that you previosuly spent debugging your code.

So, to have a little bit of structure, I plan to talk a little bit about these bulletpoints:

## What is PHPStan?

We can take that immediately: PHPStan is a static analysis tool that can help us find bugs and problematic areas in our code without actually executing it.


## We will look briefly into how PHPStan works

## We are going to go through a basic installation using composer and do a small execrise for dempnstration purposes

Just some basic usage to show how PHPStan can help us dicsover and fix issues in seemingly flawless code.

## We will look at how we can introduce PHPStan to our projects
I will share a little bit about how PHPStan is already being used in some Ramsalt projects and how we can introduce it to new projects

## And in the end I thought we may do some questions and answers and potentially have a look at what PHPStan can tell us about the code quality in a project that has been around for a while.


## So, how do PHPStan work

PHPStan uses the phpparser library to parse php files and build an Abstract Syntax Tree (AST).

From this, PHPStan is able to infer a lot of information like for example types from function signatures, docblocks and code usage.
It will then apply a set of predefined rules to detect common issues.
Those may be things like accessing undefined variables, invalid function calls or incompatible argument types used.

An Abstract Syntax Tree (AST) is a tree representation of the application structure, breaking down the source code into its fundamental syntactic components.

Switch to an IDE and se how that may look from a simple example.

An example:
```php
<?php
echo 2+3;
```

```php
ddev exec php ast.php
```


## Installing

composer require --dev phpstan/phpstan

## Using

vendor/bin/phpstan analyse -l 0 src/Developer.php

PHPStan offers 10 different strictness levels starting with 0 as the least strcict and 10 as the most strict.
The individual levels are cumulative so of you tell phpstan to run at level 4, it will also give you all the checks for level 0 through 3.

I was thinking we could do a simple excercise and look some simple code I have prepared and see how we can make use of PHPStan to improve on that code.

Let's just switch to an IDE to look at the code and running it.

Now, let's see what PHPStan has to say.

Now, in level 0, phpstan will do basic checks, unknown classes, unknown functions, unknown methods called on $this, wrong number of arguments passed to those methods and functions, always undefined variables.

Let's start fixing the code and see what other gems phpstan may come up with when we level up.


## Use PHPStan in Ramsalt projects


If you want to use phpstan with a Ramsalt, or any Drupal project really, you need to use the commands you see on the screen.

The first line will make composer allow the phpstan-extension-installer plugin to run.
The rest installs phpstan itself along with 2 other useful tools:
* mglaman/phpstan-drupal - that help phpstan understand a Drupal codebase
* phpstan/phpstan-deprecation-rules - let phpstan report on use of deprecated code.


With recent versions of the ramsalt/drupal package we provide a default configuration that make phpstan target only our custom code - we usually care about what we have the powers to maintain so we ignore core and contrib by default.

Now, as Fred asked about in the Renovate session - how can we know if a Drupal core update breaks contrib modules or custom code?
Well, then we can instruct phpstan to look at that code an see what the verdict is.

There is on project where I know we have actively intruduced phpstan to the project and that is lakseelver.
Let's quickly have a quick look at what phpstan might say.

## Configure

phpstan.neon





## What level is best for my project?

https://github.com/TomasVotruba/phpstan-bodyscan


composer require --dev tomasvotruba/phpstan-bodyscan

vendor/bin/phpstan-bodyscan


## Questions?