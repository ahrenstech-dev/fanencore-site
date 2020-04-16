<?php

require_once __DIR__ . '/vendor/autoload.php';

use Tracy\Debugger;
use Netpromotion\Profiler\Profiler as Profiler;
use function phi\{match, fetch, render};

Debugger::enable();
Debugger::getBar()->addPanel(new Netpromotion\Profiler\Adapter\TracyBarAdapter());
Debugger::getBar()->addPanel(new Nofutur3\GitPanel\Diagnostics\Panel());
Debugger::$maxDepth = 6;
Profiler::enable();

Profiler::start('render page');

$source = include __DIR__ . '/data/fake.php';

$path = $_SERVER['REQUEST_URI'];
$matches = match($path, $source);

if (!$matches) {
  http_response_code(404);
  echo 'Not found';
  exit;
}

$queue = fetch($matches);
bdump($queue);
echo render($queue);

Profiler::finish('render page');
