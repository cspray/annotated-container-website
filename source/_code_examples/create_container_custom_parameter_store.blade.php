&lt;?php declare(strict_types=1);

namespace Acme\Demo;

use Cspray\AnnotatedContainer\ParameterStore;
use function Cspray\AnnotatedContainer\compiler;
use function Cspray\AnnotatedContainer\containerFactory;

// Check out the code example for Type-safe Configurations to see more details!
class SecretsParameterStore implements ParameterStore { ... }

// However you compiled the ContainerDefinition in the previous step!
$containerDefinition = compiler()->compile( ... );

// Add your custom ParameterStore implementations.
// As long as the name of the store is different you can have as many stores as you want!
$containerFactory = containerFactory();
$containerFactory->addParameterStore(new SecretsParameterStore());

$container = $containerFactory->createContainer($containerDefinition);
