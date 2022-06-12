&lt;?php declare(strict_types=1);

namespace Acme\Demo;

use Cspray\AnnotatedContainer\Attribute\Service;
use Cspray\AnnotatedContainer\Attribute\ServiceDelegate;

#[Service]
interface Widget {

}

class WidgetFactory {

    #[ServiceDelegate(Widget::class)]
    public function createWidget() : Widget {
        // Do whatever is necessary to create a Widget instance
        // You can depend on other services in the __construct and createWidget
    }

}