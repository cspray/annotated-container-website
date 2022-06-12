&lt;?php declare(strict_types=1);

namespace Acme\Demo;

use Cspray\AnnotatedContainer\Attribute\Service;
use Cspray\AnnotatedContainer\Attribute\Inject;

#[Service]
interface Widget {

}

#[Service]
class Foo implements Widget {

}

#[Service]
class Bar implements Widget {

}

#[Service]
class Baz implements Widget {

}

#[Service]
class WidgetConsumer {

    public function __construct(#[Inject(Baz::class)] Widget $widget) {}

}
