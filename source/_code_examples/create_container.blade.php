&lt;?php declare(strict_types=1);

namespace Acme\Demo;

use function Cspray\AnnotatedContainer\compiler;
use function Cspray\AnnotatedContainer\containerFactory;

// However you compiled the ContainerDefinition in the previous step!
$containerDefinition = compiler()->compile( ... );

$container = containerFactory()->createContainer($containerDefinition);
