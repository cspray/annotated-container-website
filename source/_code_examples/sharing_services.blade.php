&lt;?php declare(strict_types=1);

namespace Acme\Demo;

use Cspray\AnnotatedContainer\Attribute\Service;

#[Service]
interface Widget {

}

#[Service]
class FooWidget implements Widget {

}

#[Service]
class FooWidgetConsumer {

    public function __construct(Widget $widget) {}

}