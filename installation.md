---
layout: default
permalink: /installation/
title: Installation
---

# Installation

Tactician is available on Packagist.

To install, just run:

    > composer require league/tactician

Now we need to configure Tactician for your project.

## Setup
There are a few different ways to configure Tactician, depending on your Framework.

- [No Framework](#no-framework)
- [Symfony](#symfony)
- [Zend Framework 2](#zend-framework-2)
- [Laravel](#laravel)
- [Yii Framework 1](#yii-framework-1)
- [Yii Framework 2](#yii-framework-2)
- [CakePHP](#cakephp)

## No Framework

If you just want to get started and don't care about tweaking anything, you can use our DefaultSetup factory to get running with a minimum of fuss.

~~~ php
// All you need to do is pass an array mapping your command class names to
// your handler instances. Everything else is already setup.
League\Tactician\Setup\QuickStart::create(
    [
        AddTaskCommand::class      => $someHandler,
        CompleteTaskCommand::class => $someOtherHandler
    ]
);

// The only rule is that your handlers must have a "handle" method
class AddTaskHandler
{
    public function handle(AddTaskCommand $command) {
        // ...
    }
}
~~~

That said, if you'd like to change the handler method called or any other options, take a look at the [Tweaking Tactician](/tweaking-tactician) page for more details. It's really easy. Promise.

## Supported Framework Adapters
These frameworks are currently on our targeted list.

### Symfony
There's an [official Tactician bundle for Symfony](https://github.com/thephpleague/tactician-bundle). It's still in active development but it works well and you can use it in your projects.

### Zend Framework 2
[Mike Zukowski](https://github.com/mikemix) already authored a ZF2 module. You can grab it [at its Github page](https://github.com/mikemix/TacticianModule)!

### Laravel
There's a number of Laravel Tactician packages on Packagist. We don't have a formal recommendation yet but [there's some really good ones available](https://packagist.org/search/?q=laravel%20tactician).

### Silex
[Prasetyo Wicaksono](https://github.com/Atriedes) is actively maintaining a [Silex service provider for Tactician](https://github.com/Atriedes/tactician-service-provider).

### Yii Framework 1
[Pavel Mikushin](https://github.com/pavelmics) has built an [adapter for the Yii framework 1](https://github.com/pavelmics/YiiTactician).

### Yii Framework 2
[Kilderson Sena](https://github.com/dersonsena) has built an [adapter for the Yii framework 2](https://github.com/dersonsena/yii2-tactician).

### CakePHP
For CakePHP integration a [Tactician plugin](https://github.com/robotusers/cakephp-tactician) has been implemented.
