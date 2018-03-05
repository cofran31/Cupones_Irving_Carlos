<?php
abstract class RendererDecorator implements RenderableInterface
{
    /**
     * @var RenderableInterface
     */
    protected $wrapped;
    /**
     * @param RenderableInterface $renderer
     */
    public function __construct(RenderableInterface $renderer)
    {
        $this->wrapped = $renderer;
    }
}