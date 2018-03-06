<?php

class JsonRenderer extends RendererDecorator {
    private $jsondata = [];

    public function renderData() {
        $datos = $this->wrapped->renderData();
        if (count($datos) > 0) {
            $this->jsondata["success"] = true;
            $this->jsondata['response'] = $this->wrapped->renderData();
        } else
        $this->jsondata["success"] = false;
        return json_encode($this->jsondata);
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
