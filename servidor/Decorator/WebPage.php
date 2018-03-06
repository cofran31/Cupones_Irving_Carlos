<?php
include 'Decorator/RenderableInterface.php';
include 'Decorator/RendererDecorator.php';
include 'Decorator/Decoradores.php';

class WebPage implements RenderableInterface
{

    private $data;
    public function __construct( $data)
    {
        $this->data = $data;
    }
    public function renderData()
    {
        return $this->data;
    }
}