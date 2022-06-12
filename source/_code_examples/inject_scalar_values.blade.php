&lt;?php declare(strict_types=1);

namespace Acme\Demo;

use Cspray\AnnotatedContainer\Attribute\Service;
use Cspray\AnnotatedContainer\Attribute\Inject;

#[Service]
class SomeApiClient {

    public function __construct(
        // The string 'my-api-key' will be injected into the $apiKey
        #[Inject('my-api-key')] private readonly string $apiKey,
        // The value from getenv('API_SECRET') will be injected into $secret
        #[Inject('API_SECRET', from: 'env')] private readonly string $secret
    } {}

}