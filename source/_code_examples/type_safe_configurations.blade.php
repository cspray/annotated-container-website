&lt;?php declare(strict_types=1);

namespace Acme\Demo;

use Cspray\AnnotatedContainer\ParameterStore;
use Cspray\AnnotatedContainer\Attribute\Configuration;
use Cspray\AnnotatedContainer\Attribute\Inject;
use Cspray\Typiphy\Type;
use Cspray\Typiphy\TypeIntersect;
use Cspray\Typiphy\TypeUnion;

// Be sure to checkout the step below for Creating your Container to include this custom ParameterStore
class SecretsParameterStore implements ParameterStore {

    public function getName() : string {
        return 'secrets';
    }

    public function fetch(Type|TypeUnion|TypeIntersect $type, string $key) : mixed {
        // Do whatever you need to retrieve the secret matching the given $key
        // The $type represents the property or method parameter type where the Inject attribute was used
    }

}

#[Configuration]
class MyConfiguration {

    #[Inject('API_KEY', from: 'env')]
    public readonly string $key;

    // You can provide your own custom store to retrieve Inject values from.
    // This gives you complete control
    #[Inject('API_SECRET', from: 'secrets')]
    public readonly string $secret;

    #[Inject(4200)]
    public readonly int $port;

}
