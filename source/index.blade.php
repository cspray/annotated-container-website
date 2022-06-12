@extends('_layouts.main')

@section('body')
    <p>
        A dependency injection framework powered by <a href="https://www.php.net/manual/en/language.attributes.overview.php">PHP 8 Attributes</a>.
        Add Attributes to your shared services and Annotated Container will do the work to wire-up your <a href="https://www.php-fig.org/psr/psr-11/">PSR-11 Container</a>!
    </p>
    <section id="attribute-features">
        <h1>Annotate your Codebase</h1>
        <p>
            First step, add Attributes to your codebase! Select a use-case listed below to learn how to use Annotated
            Container to solve common problems working with dependency injection.
        </p>
        <div>
            <ul>
                <li>
                    <a href="#features--sharing-services">Sharing Services</a>
                    <p>
                        Annotated Container's core building block, the <code>#[Service]</code> Attribute. With it, you
                        can mark interfaces and classes to be shared and aliased in a PSR-11 Container.
                    </p>
                </li>
                <li>
                    <a href="#features--resolving-aliases-with-profiles">Resolving Aliases with Profiles</a>
                    <p>
                        Interfaces marked as a <code>#[Service]</code> will often have multiple implementations. You can
                        use profiles, think of them as tags for a running environment, to let Annotated Container know
                        which concrete implementation to use.
                    </p>
                </li>
                <li>
                    <a href="#features--using-factory-to-create-services">Using a Factory to Create Services</a>
                    <p>
                        Sometimes you need to have more control over how a <code>#[Service]</code> is created. Easily
                        delegate construction of a Service to your own Factory method with <code>#[ServiceDelegate]</code>.
                    </p>
                </li>
                <li>
                    <a href="#features--invoking-methods-post-construct">Invoking Methods Post Construct</a>
                    <p>
                        When you're dealing with an API that makes use of setter injection Annotated Container has you
                        covered! Make use of the <code>#[ServicePrepare]</code> Attribute to automatically resolve dependencies
                        and invoke methods after service construction.
                    </p>
                </li>
                <li>
                    <a href="#features--injecting-scalar-values">Injecting Scalar Values</a>
                    <p>
                        At some point your <code>#[Service]</code> is gonna need to inject a value that's not another
                        Service or object. With the <code>#[Inject]</code> Attribute you have complete control over what
                        values are used when Annotated Container can't figure it out.
                    </p>
                </li>
                <li>
                    <a href="#features--injecting-service-values">Injecting Service Values</a>
                    <p>
                        Maybe profiles aren't sufficient to determine which Service to use when there are multiple options.
                        Use the <code>#[Inject]</code> Attribute to specify which concrete object to use as a dependency.
                    </p>
                </li>
                <li>
                    <a href="#features--type-safe-configuration">Type-safe Configurations</a>
                    <p>
                        Use the power of the <code>#[Inject]</code> Attribute and <a href="https://www.php.net/manual/en/language.oop5.properties.php#language.oop5.properties.readonly-properties">PHP 8.1 <code>readonly</code> properties</a>
                        to create type-safe <code>#[Configuration]</code> objects. Also shows how you can take complete
                        control over the values that are injected!
                    </p>
                </li>
                <li>
                    <a href="#features--third-party-services">Third-party Services</a>
                    <p>
                        Sometimes the code you want configured in your Container can't have Attributes added. Annotated Container
                        provides a functional API for doing everything you can do with Attributes!
                    </p>
                </li>
            </ul>
        </div>
        <div>
            <article id="features--sharing-services" class="features--code-example">
                <h1>Sharing Services</h1>
                <x-code-example codeExample="sharing_services"></x-code-example>
            </article>
            <article id="features--resolving-aliases-with-profiles" class="features--code-example">
                <h1>Resolving Aliases wth Profiles</h1>
                <x-code-example codeExample="aliases_with_profiles"></x-code-example>
            </article>
            <article id="features--using-factory-to-create-services" class="features--code-example">
                <h1>Using a Factory to Create Services</h1>
                <x-code-example codeExample="service_delegate"></x-code-example>
            </article>
            <article id="features--invoking-methods-post-construct" class="features--code-example">
                <h1>Invoking Methods Post Construct</h1>
                <x-code-example codeExample="invoking_methods_post_construct"></x-code-example>
            </article>
            <article id="features--injecting-scalar-values" class="features--code-example">
                <h1>Injecting Scalar Values</h1>
                <x-code-example codeExample="inject_scalar_values"></x-code-example>
            </article>
            <article id="features--injecting-service-values" class="features--code-example">
                <h1>Injecting Service Values</h1>
                <x-code-example codeExample="inject_service_values"></x-code-example>
            </article>
            <article id="features--type-safe-configuration" class="features--code-example">
                <h1>Type-safe Configurations</h1>
                <x-code-example codeExample="type_safe_configurations"></x-code-example>
            </article>
            <article id="features--third-party-services" class="features--code-example">
                <h1>Third-party Services</h1>
                <x-code-example codeExample="third_party_services"></x-code-example>
            </article>
        </div>
    </section>
    <hr />
    <section id="analyze-codebase">
        <h1>Analyze your Codebase</h1>
        <p>
            Second step, analyze your codebase and compile information about found Attributes! Annotated Container uses
            <a href="https://github.com/nikic/PHP-Parser">PHP-Parser</a> to statically analyze the Attributes in your
            codebase and create a <code>ContainerDefinition</code>. It's recommended to use the <code>compiler()</code>
            function to retrieve an instance of <code>ContainerDefinitionCompiler</code>.
        </p>
        <article>
            <h1><em>Without</em> Third-party Services</h1>
            <p>
                If you don't need to specify third-party services that can't be annotated, you only need to let Annotated
                Container know which directories to scan. We'll assume that all of your code is in <code>__DIR__ . '/src'</code>.
            </p>
            <x-code-example codeExample="compile_default_options"></x-code-example>
        </article>
        <article>
            <h1><em>With</em> Third-party Services</h1>
            <p>
                If you <em>do</em> need to specify third-party services that can't be annotated, you need to let Annotated
                Container know what code to run after scanning your source code. We'll assume that all of your code is in
                <code>__DIR__ . '/src'</code>.
            </p>
            <x-code-example codeExample="compile_third_party_options"></x-code-example>
        </article>
    </section>
    <hr />
    <section id="create-container">
        <h1>Create your Container</h1>
        <p>
            Finally, turn that <code>ContainerDefinition</code> into a Container! Call the <code>containerFactory()</code>
            method, to get a <code>ContainerFactory</code>. This object allows you to create a PSR-11 Container using the
            backing library you chose on installation. For more information about this, check out the <a href="#install-guide">Installation</a>
            step below.
        </p>
        <article>
            <h1><em>Without</em> Custom Profiles</h1>
            <x-code-example codeExample="create_container"></x-code-example>
        </article>
        <article>
            <h1><em>With</em> Custom Profiles</h1>
            <x-code-example codeExample="create_container_custom_profiles"></x-code-example>
        </article>
        <article>
            <h1><em>With</em> Custom ParameterStore</h1>
            <x-code-example codeExample="create_container_custom_parameter_store"></x-code-example>
        </article>
    </section>
    <hr />
    <section id="install-guide">
        <h1>Installation</h1>
        <x-code-example codeExample="composer_install_annotated_container"></x-code-example>
        <h2>Bring Your Own Container!</h2>
        <p>
            One of the motivating goals behind Annotated Container is to not lock you in to a single Container implementation.
            Think of Annotated Container as a package-agnostic way to define a Container! For Annotated Container to work
            you'll need to install a supported library. Currently, there's support for the following implementations
            out-of-the-box.
        </p>
        <ul>
            <li>
                <a href="https://github.com/rdlowrey/auryn">Auryn</a>
                <x-code-example codeExample="composer_install_auryn"></x-code-example>
            </li>
            <li>
                <a href="https://php-di.org/">PHP-DI</a>
                <x-code-example codeExample="composer_install_phpdi"></x-code-example>
            </li>
        </ul>
        <blockquote>
            Don't see your preferred Container listed? There's plans to <a href="https://github.com/cspray/annotated-container/issues?q=is%3Aissue+is%3Aopen+label%3Acontainer-library">support more Containers</a> or you
            could <a href="https://github.com/cspray/annotated-container/issues">create a new issue</a> detailing what package you'd like to see integrated.
        </blockquote>
    </section>
@endsection
