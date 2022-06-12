&lt;?php declare(strict_types=1);

namespace Acme\Demo;

use Cspray\AnnotatedContainer\ContainerDefinitionCompileOptionsBuilder as CompileOptionsBuilder;
use function Cspray\AnnotatedContainer\compiler;

// If your source code is split across multiple directories pass additional arguments to scanDirectories()
$containerDefinition = compiler()->compile(
    CompileOptionsBuilder::scanDirectories(__DIR__ . '/src')->build()
);
