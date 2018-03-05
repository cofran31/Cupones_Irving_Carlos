<?php
class DecoratorSlider extends RendererDecorator
{
    public function renderData(): string
    {
        return json_encode($this->wrapped->renderData());
    }
}