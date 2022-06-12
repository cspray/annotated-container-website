&lt;?php declare(strict_types=1);

namespace Acme\Demo;

use Cspray\AnnotatedContainer\ContainerDefinitionBuilderContext;
use Cspray\AnnotatedContainer\CallableContainerDefinitionBuilderContextConsumer as CallableConsumer;
use Cspray\AnnotatedContainer\ContainerDefinitionCompileOptionsBuilder as CompileOptionsBuilder;
use function Cspray\AnnotatedContainer\compiler;

$contextConsumer = function(ContainerDefinitionBuilderContext $context) {
    // Take a look at the "Third-party Services" code example for details on what to put here!
};

// If your source code is split across multiple directories pass additional arguments to scanDirectories()
$containerDefinition = compiler()->compile(
    CompileOptionsBuilder::scanDirectories(__DIR__ . '/src')
        ->withContainerDefinitionBuilderContextConsumer(new CallableConsumer($contextConsumer))
        ->build()
);
