&lt;?php declare(strict_types=1);

namespace Acme\Demo;

use Cspray\AnnotatedContainer\Attribute\Service;
use Cspray\AnnotatedContainer\Attribute\ServicePrepare;

#[Service]
interface Widget {

}

#[Service]
class Foo implements Widget {

}

#[Service]
interface WidgetAwareConsumer {

    // Any service constructed by the Container that implements WidgetAwareConsumer will automatically
    // have setWidget invoked with an instance of Foo passed to $widget
    #[ServicePrepare]
    public function setWidget(Widget $widget) : void;

}

#[Service]
class WidgetService implements WidgetAwareConsumer {

    public function setWidget(Widget $widget) : void {
        // Do something with the $widget
    }

}