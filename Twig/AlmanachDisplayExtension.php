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
            'almanach_container'           => new \Twig_Function_Method($this, 'displayContainer', ['is_safe' => ['html']]),
            'almanach_containerFluid'      => new \Twig_Function_Method($this, 'displayContainerFluid', ['is_safe' => ['html']]),
            'almanach_grid'                => new \Twig_Function_Method($this, 'displayGrid', ['is_safe' => ['html']]),
            'almanach_gridItem'            => new \Twig_Function_Method($this, 'displayGridItem', ['is_safe' => ['html']]),
            'almanach_label'               => new \Twig_Function_Method($this, 'displayLabel', ['is_safe' => ['html']]),
            'almanach_alert'               => new \Twig_Function_Method($this, 'displayAlert', ['is_safe' => ['html']]),
            'almanach_title'               => new \Twig_Function_Method($this, 'displayTitle', ['is_safe' => ['html']]),
            'almanach_inlineText'          => new \Twig_Function_Method($this, 'displayInlineText', ['is_safe' => ['html']]),
            'almanach_transformText'       => new \Twig_Function_Method($this, 'displayTransformText', ['is_safe' => ['html']]),
            'almanach_alignmentText'       => new \Twig_Function_Method($this, 'displayAlignmentText', ['is_safe' => ['html']]),
            'almanach_list'                => new \Twig_Function_Method($this, 'displayList', ['is_safe' => ['html']]),
            'almanach_listItem'            => new \Twig_Function_Method($this, 'displayListItem', ['is_safe' => ['html']]),
            'almanach_tab'                 => new \Twig_Function_Method($this, 'displayTab', ['is_safe' => ['html']]),
            'almanach_tabTitle'            => new \Twig_Function_Method($this, 'displayTabTitle', ['is_safe' => ['html']]),
            'almanach_tabContent'          => new \Twig_Function_Method($this, 'displayTabContent', ['is_safe' => ['html']]),
            'almanach_button'              => new \Twig_Function_Method($this, 'displayButton', ['is_safe' => ['html']]),
            'almanach_dropdownButton'      => new \Twig_Function_Method($this, 'displayDropdownButton', ['is_safe' => ['html']]),
            'almanach_splitDropdownButton' => new \Twig_Function_Method($this, 'displaySplitDropdownButton', ['is_safe' => ['html']]),
            'almanach_buttonGroup'         => new \Twig_Function_Method($this, 'displayButtonGroup', ['is_safe' => ['html']]),
        );
    }

    public function displayContainer($content, $framework, $options = null)
    {
        $defaultOptions = [
            'content'        => $content,
            'framework'      => $framework,
            'classCont'      => 'container',
            'class'          => [],
            'attr'           => [],
            'tag'            => null,
            'link'           => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_container.html.twig", $defaultOptions);
    }

    public function displayContainerFluid($content, $framework, $options = null)
    {
        $defaultOptions = [
            'content'        => $content,
            'framework'      => $framework,
            'classContFluid' => 'containerFluid',
            'class'          => [],
            'attr'           => [],
            'tag'            => null,
            'link'           => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_containerFluid.html.twig", $defaultOptions);
    }

    public function displayGrid($content, $framework, $options = null)
    {
        $defaultOptions = [
            'content'        => $content,
            'framework'      => $framework,
            'class'          => [],
            'attr'           => [],
            'tag'            => null,
            'link'           => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_grid.html.twig", $defaultOptions);
    }
    public function displayGridItem($content, $framework, $options = null)
    {
        $defaultOptions = [
            'content'        => $content,
            'framework'      => $framework,
            'classGridItem'  => [],
            'class'          => [],
            'attr'           => [],
            'tag'            => null,
            'link'           => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_gridItem.html.twig", $defaultOptions);
    }

    public function displayLabel($content, $framework, $options = null)
    {
        $defaultOptions = [
            'content'        => $content,
            'framework'      => $framework,
            'theme'          => 'default',
            'border'         => 'default',
            'class'          => [],
            'attr'           => [],
            'tag'            => null,
            'link'           => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_label.html.twig", $defaultOptions);
    }

    public function displayAlert($content, $framework, $options = null)
    {
        $defaultOptions = [
            'content'        => $content,
            'framework'      => $framework,
            'theme'          => 'default',
            'border'         => 'default',
            'class'          => [],
            'attr'           => [],
            'tag'            => null,
            'link'           => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_alert.html.twig", $defaultOptions);
    }

    public function displayTitle($content, $framework, $options = null)
    {
        $defaultOptions = [
            'content'        => $content,
            'framework'      => $framework,
            'size'           => 'default',
            'class'          => [],
            'attr'           => [],
            'tag'            => null,
            'link'           => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_title.html.twig", $defaultOptions);
    }

    public function displayInlineText($content, $framework, $options = null)
    {
        $defaultOptions = [
            'content'        => $content,
            'framework'      => $framework,
            'inline'         => 'default',
            'class'          => [],
            'attr'           => [],
            'tag'            => null,
            'link'           => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_inlineText.html.twig", $defaultOptions);
    }

    public function displayTransformText($content, $framework, $options = null)
    {
        $defaultOptions = [
            'content'        => $content,
            'framework'      => $framework,
            'transform'      => 'default',
            'class'          => [],
            'attr'           => [],
            'tag'            => null,
            'link'           => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_transformText.html.twig", $defaultOptions);
    }

    public function displayAlignmentText($content, $framework, $options = null)
    {
        $defaultOptions = [
            'content'        => $content,
            'framework'      => $framework,
            'alignment'      => 'default',
            'class'          => [],
            'attr'           => [],
            'tag'            => null,
            'link'           => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_alignmentText.html.twig", $defaultOptions);
    }

    public function displayList($content, $framework, $options = null)
    {
        $defaultOptions = [
            'content'        => $content,
            'framework'      => $framework,
            'order'          => 'default',
            'decoration'     => 'default',
            'list'           => [],
            'class'          => [],
            'attr'           => [],
            'tag'            => null,
            'link'           => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_list.html.twig", $defaultOptions);
    }

    public function displayListItem($content, $framework, $options = null)
    {
        $defaultOptions = [
            'content'        => $content,
            'framework'      => $framework,
            'class'          => [],
            'attr'           => [],
            'tag'            => null,
            'link'           => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_listItem.html.twig", $defaultOptions);
    }

    public function displayTab($titles, $content, $framework, $options = null)
    {
        $defaultOptions = [
            'tabTitles'      => $titles,
            'tabContent'     => $content,
            'framework'      => $framework,
            'theme'          => 'default',
            'style'          => 'default',
            'list'           => [],
            'class'          => [],
            'attr'           => [],
            'tag'            => null,
            'link'           => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_tab.html.twig", $defaultOptions);
    }

    public function displayTabTitle($content, $framework, $options = null)
    {
        $defaultOptions = [
            'content'        => $content,
            'framework'      => $framework,
            'state'          => 'default',
            'list'           => [],
            'class'          => [],
            'attr'           => [],
            'tag'            => null,
            'link'           => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_tabTitle.html.twig", $defaultOptions);
    }

    public function displayTabContent($content, $framework, $options = null)
    {
        $defaultOptions = [
            'content'        => $content,
            'framework'      => $framework,
            'state'          => 'default',
            'list'           => [],
            'class'          => [],
            'attr'           => [],
            'tag'            => null,
            'link'           => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_tabContent.html.twig", $defaultOptions);
    }

    public function displayButton($content, $framework, $options = null)
    {
        $defaultOptions = [
            'content'        => $content,
            'framework'      => $framework,
            'theme'          => 'default',
            'size'           => 'default',
            'state'          => 'default',
            'border'         => 'default',
            'class'          => [],
            'attr'           => [],
            'tag'            => null,
            'link'           => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_button.html.twig", $defaultOptions);
    }

    public function displayDropdownButton($content, $framework, $options = null)
    {
        $defaultOptions = [
            'content'        => $content,
            'framework'      => $framework,
            'theme'          => 'default',
            'size'           => 'default',
            'state'          => 'default',
            'border'         => 'default',
            'list'           => [],
            'class'          => [],
            'attr'           => [],
            'tag'            => null,
            'link'           => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_dropdownButton.html.twig", $defaultOptions);
    }

    public function displaySplitDropdownButton($content, $framework, $options = null)
    {
        $defaultOptions = [
            'content'        => $content,
            'framework'      => $framework,
            'theme'          => 'default',
            'size'           => 'default',
            'state'          => 'default',
            'border'         => 'default',
            'list'           => [],
            'class'          => [],
            'attr'           => [],
            'tag'            => null,
            'link'           => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_splitDropdownButton.html.twig", $defaultOptions);
    }

    public function displayButtonGroup($content, $framework, $options = null)
    {
        $defaultOptions = [
            'content'        => $content,
            'framework'      => $framework,
            'theme'          => 'default',
            'size'           => 'default',
            'state'          => 'default',
            'border'         => 'default',
            'group'          => 'default',
            'classes'        => [],
            'attr'           => [],
            'tag'            => null,
            'link'           => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_buttonGroup.html.twig", $defaultOptions);
    }

    public function getName() {
        return 'appventus_almanach_display';
    }
}
