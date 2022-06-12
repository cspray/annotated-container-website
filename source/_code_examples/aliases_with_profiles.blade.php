&lt;php declare(strict_types=1);

namespace Acme\Demo;

use Cspray\AnnotatedContainer\Attribute\Service;

#[Service]
interface Widget {

}

#[Service(profiles: ['dev'])]
class DevWidget {

}

#[Service(profiles: ['prod'])
class ProdWidget {

}

#[Service]
class WidgetConsumer {

    // When active profiles include 'dev' DevWidget will be injected
    // When active profiles include 'prod' ProdWidget will be injected
    public function __construct(Widget $widget) {}

}