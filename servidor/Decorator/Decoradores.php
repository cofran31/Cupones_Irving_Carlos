<?php

class JsonRenderer extends RendererDecorator
{
    public function renderData()
    {
        return json_encode($this->wrapped->renderData());
    }
}

class XmlRenderer extends RendererDecorator
{
    public function renderData()
    {
        $doc = new \DOMDocument();
        $data = $this->wrapped->renderData();
        $doc->appendChild($doc->createElement('content', $data));
        return $doc->saveXML();
    }
}
