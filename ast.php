<?php
require 'vendor/autoload.php';

use PhpParser\ParserFactory;
use PhpParser\NodeDumper;

$code = '<?php echo 2 + 3;';

$phpVersion = PhpParser\PhpVersion::getHostVersion();
$parser = (new ParserFactory)->createForVersion($phpVersion);
$ast = $parser->parse($code);

$dumper = new NodeDumper;
echo $dumper->dump($ast) . "\n";