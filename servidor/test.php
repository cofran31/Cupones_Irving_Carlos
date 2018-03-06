<?php

interface RenderableInterface {

    public function renderData();
}

/**
 * the Decorator MUST implement the RenderableInterface contract, this is the key-feature
 * of this design pattern. If not, this is no longer a Decorator but just a dumb
 * wrapper.
 */
class Webservice implements RenderableInterface {

    /**
     * @var string
     */
    private $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function renderData() {
        return $this->data;
    }

}

abstract class RendererDecorator implements RenderableInterface {

    /**
     * @var RenderableInterface
     */
    protected $wrapped;

    /**
     * @param RenderableInterface $renderer
     */
    public function __construct(RenderableInterface $renderer) {
        $this->wrapped = $renderer;
    }

}

class JsonRenderer extends RendererDecorator {

    public function renderData() {
        return json_encode($this->wrapped->renderData());
    }

}

class XmlRenderer extends RendererDecorator {

    public function renderData() {
        $doc = new \DOMDocument();
        $data = $this->wrapped->renderData();
        $doc->appendChild($doc->createElement('content', $data));
        return $doc->saveXML();
    }

}

//private $service;
$doc = Array
    (
    'hash' => 'f694508cf8ca6d0e55f57e9b465de57e',
    'id' => 1,
    'username' => 'cofran31',
    'fullname' => 'JUAN CARLOS ORTUBE LAHOR',
    'password' => '202cb962ac59075b964b07152d234b70',
    'email' => 'cool3000bo@gmail.com',
    'active' => 1,
    'id_tipo_usuario' => 1
);
$documento = new Webservice($doc);
$service = new XmlRenderer($documento);
$proceso = $service->renderData();
print_r($proceso);
