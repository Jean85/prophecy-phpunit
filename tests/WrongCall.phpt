--TEST--
A test fails due to calling an unexisting method on a mock 
--FILE--
<?php

require_once dirname(__DIR__) . '/xdebug_filter.php'; 
require dirname(__DIR__) . '/vendor/autoload.php';

(new PHPUnit\TextUI\Application())->run(['phpunit', 'fixtures/WrongCall.php', '--no-progress'], false);
--EXPECTF--
PHPUnit 10.%s

Runtime:       PHP 8.%s
Configuration: %s

Time: %s

There was 1 error:

1) Prophecy\PhpUnit\Tests\Fixtures\WrongCall::testMethod
Prophecy\Exception\Doubler\MethodNotFoundException: Method `Double\stdClass\P1::talk()` is not defined.

%a%s/fixtures/WrongCall.php:%d

ERRORS!
Tests: 1, Assertions: 0, Errors: 1.
