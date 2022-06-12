&lt;?php declare(strict_types=1);

namespace Acme\Demo;

use Psr\Logger\LoggerInterface;
use Psr\Logger\LoggerAwareInterface;
use Cspray\AnnotatedContainer\ContainerDefinitionBuilderContext;
use Cspray\AnnotatedContainer\Attribute\ServiceDelegate;
use function Cspray\AnnotatedContainer\service;
use function Cspray\AnnotatedContainer\servicePrepare;
use function Cspray\Typiphy\objectType;

class LoggerFactory {

    #[ServiceDelegate(LoggerInterface::class)]
    public function createLogger() : LoggerInterface {
        // Create a PSR-3 Logger implementation and return it!
    }

}

// Be sure to check out the step below for analyzing your codebase with 3rd party services!
$contextConsumer = function(ContainerDefinitionBuilderContext $builderContext) : void {
    $loggerType = objectType(LoggerInterface::class);
    // Ensure that we share our LoggerInterface
    service($builderContext, $loggerType);
    // Have our LoggerFactory create instances of LoggerInterface
    serviceDelegate($builderContext, $loggerType, objectType(LoggerFactory::class), 'createLogger');
    // Ensure that any service that implements LoggerAwareInterface has setLogger called automatically
    // The LoggerInterface instance returned from LoggerFactory will be injected
    servicePrepare($builderContext, objectType(LoggerAwareInterface::class), 'setLogger');
};
