<?php
namespace AppVentus\AlmanachBundle\Twig;

use Symfony\Component\Templating\EngineInterface;

class AlmanachDisplayExtension extends \Twig_Extension {

    protected $almanach;
    protected $templating;

    public function __construct($almanach, \Twig_Environment $templating) {
        $this->almanach = $almanach;
        $this->templating = $templating;
    }

    public function getFunctions() {
        return array(
            'almanach_button'              => new \Twig_Function_Method($this, 'displayButton', ['is_safe' => ['html']]),
            'almanach_dropdownButton'      => new \Twig_Function_Method($this, 'displayDropdownButton', ['is_safe' => ['html']]),
            'almanach_splitDropdownButton' => new \Twig_Function_Method($this, 'displaySplitDropdownButton', ['is_safe' => ['html']]),
            'almanach_buttonGroup'         => new \Twig_Function_Method($this, 'displayButtonGroup', ['is_safe' => ['html']]),
        );
    }

    public function displayButton($content, $framework = 'bootstrap', $theme = 'default', $size = 'default', $state = 'default', $border = 'default',
                                  $class = [], $attributes = [], $tag = null, $link = null)
    {
        $options = [
            'content'    => $content,
            'framework'  => $framework,
            'theme'      => $theme,
            'size'       => $size,
            'state'      => $state,
            'border'     => $border,
            'class'      => $class,
            'attributes' => $attributes,
            'tag'        => $tag,
            'link'       => $link,
        ];
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_button.html.twig", $options);
    }

    public function displayDropdownButton($content, $framework = 'bootstrap', $theme = 'default', $size = 'default', $state = 'default', $border = 'default', $list = [],
                                  $class = [], $attributes = [], $tag = null, $link = null)
    {
        $options = [
            'content'    => $content,
            'framework'  => $framework,
            'theme'      => $theme,
            'size'       => $size,
            'state'      => $state,
            'border'     => $border,
            'list'       => $list,
            'class'      => $class,
            'attributes' => $attributes,
            'tag'        => $tag,
            'link'       => $link,
        ];
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_dropdownButton.html.twig", $options);
    }

    public function displaySplitDropdownButton($content, $framework = 'bootstrap', $theme = 'default', $size = 'default', $state = 'default', $border = 'default', $list = [],
                                  $class = [], $attributes = [], $tag = null, $link = null)
    {
        $options = [
            'content'   => $content,
            'framework'  => $framework,
            'theme'      => $theme,
            'size'       => $size,
            'state'      => $state,
            'border'     => $border,
            'list'       => $list,
            'class'      => $class,
            'attributes' => $attributes,
            'tag'        => $tag,
            'link'       => $link,
        ];
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_splitDropdownButton.html.twig", $options);
    }

    public function displayButtonGroup($content, $framework = 'bootstrap', $theme = 'default', $size = 'default', $state = 'default', $border = 'default', $group = 'default',
                                  $class = [], $attributes = [], $tag = null, $link = null)
    {
        $options = [
            'content'    => $content,
            'framework'  => $framework,
            'theme'      => $theme,
            'size'       => $size,
            'state'      => $state,
            'border'     => $border,
            'group'      => $group,
            'class'      => $class,
            'attributes' => $attributes,
            'tag'        => $tag,
            'link'       => $link,
        ];
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_buttonGroup.html.twig", $options);
    }

    public function getName() {
        return 'appventus_almanach_display';
    }
}
