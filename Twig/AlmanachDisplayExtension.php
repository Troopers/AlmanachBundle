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
            'almanach_heading'             => new \Twig_Function_Method($this, 'displayHeading', ['is_safe' => ['html']]),
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

    public function displayContainer($contentContainer, $framework, $options = null)
    {
        $defaultOptions = [
            'contentContainer'           => $contentContainer,
            'framework'                  => $framework,
            'classCont'                  => 'cont',
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_container.html.twig", $defaultOptions);
    }

    public function displayContainerFluid($contentContainerFluid, $framework, $options = null)
    {
        $defaultOptions = [
            'contentContainerFluid'      => $contentContainerFluid,
            'framework'                  => $framework,
            'classContFluid'             => 'contFluid',
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_containerFluid.html.twig", $defaultOptions);
    }

    public function displayGrid($contentGrid, $framework, $options = null)
    {
        $defaultOptions = [
            'contentGrid'                => $contentGrid,
            'framework'                  => $framework,
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_grid.html.twig", $defaultOptions);
    }
    public function displayGridItem($contentGridItem, $framework, $options = null)
    {
        $defaultOptions = [
            'contentGridItem'            => $contentGridItem,
            'framework'                  => $framework,
            'classGridItem'              => [],
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_gridItem.html.twig", $defaultOptions);
    }

    public function displayLabel($contentLabel, $framework, $options = null)
    {
        $defaultOptions = [
            'contentLabel'               => $contentLabel,
            'framework'                  => $framework,
            'theme'                      => 'default',
            'border'                     => 'default',
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_label.html.twig", $defaultOptions);
    }

    public function displayAlert($contentAlert, $framework, $options = null)
    {
        $defaultOptions = [
            'contentAlert'               => $contentAlert,
            'framework'                  => $framework,
            'theme'                      => 'default',
            'border'                     => 'default',
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_alert.html.twig", $defaultOptions);
    }

    public function displayHeading($contentHeading, $framework, $options = null)
    {
        $defaultOptions = [
            'contentHeading'             => $contentHeading,
            'framework'                  => $framework,
            'size'                       => 'default',
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_heading.html.twig", $defaultOptions);
    }

    public function displayInlineText($contentInlineText, $framework, $options = null)
    {
        $defaultOptions = [
            'contentInlineText'          => $contentInlineText,
            'framework'                  => $framework,
            'inline'                     => 'default',
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_inlineText.html.twig", $defaultOptions);
    }

    public function displayTransformText($contentTransformText, $framework, $options = null)
    {
        $defaultOptions = [
            'contentTransformText'       => $contentTransformText,
            'framework'                  => $framework,
            'transform'                  => 'default',
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_transformText.html.twig", $defaultOptions);
    }

    public function displayAlignmentText($contentAlignmentText, $framework, $options = null)
    {
        $defaultOptions = [
            'contentAlignmentText'       => $contentAlignmentText,
            'framework'                  => $framework,
            'alignment'                  => 'default',
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_alignmentText.html.twig", $defaultOptions);
    }

    public function displayList($contentList, $framework, $options = null)
    {
        $defaultOptions = [
            'contentList'                => $contentList,
            'framework'                  => $framework,
            'order'                      => 'default',
            'decoration'                 => 'default',
            'list'                       => [],
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_list.html.twig", $defaultOptions);
    }

    public function displayListItem($contentListItem, $framework, $options = null)
    {
        $defaultOptions = [
            'contentListItem'            => $contentListItem,
            'framework'                  => $framework,
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_listItem.html.twig", $defaultOptions);
    }

    public function displayTab($titles, $content, $framework, $options = null)
    {
        $defaultOptions = [
            'tabTitles'                  => $titles,
            'tabContent'                 => $content,
            'framework'                  => $framework,
            'theme'                      => 'default',
            'style'                      => 'default',
            'list'                       => [],
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_tab.html.twig", $defaultOptions);
    }

    public function displayTabTitle($content, $framework, $options = null)
    {
        $defaultOptions = [
            'content'                    => $content,
            'framework'                  => $framework,
            'state'                      => 'default',
            'list'                       => [],
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_tabTitle.html.twig", $defaultOptions);
    }

    public function displayTabContent($content, $framework, $options = null)
    {
        $defaultOptions = [
            'content'                    => $content,
            'framework'                  => $framework,
            'state'                      => 'default',
            'list'                       => [],
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_tabContent.html.twig", $defaultOptions);
    }

    public function displayButton($contentButton, $framework, $options = null)
    {
        $defaultOptions = [
            'contentButton'              => $contentButton,
            'framework'                  => $framework,
            'theme'                      => 'default',
            'size'                       => 'default',
            'state'                      => 'default',
            'border'                     => 'default',
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_button.html.twig", $defaultOptions);
    }

    public function displayDropdownButton($contentDropdownButton, $framework, $options = null)
    {
        $defaultOptions = [
            'contentDropdownButton'      => $contentDropdownButton,
            'framework'                  => $framework,
            'theme'                      => 'default',
            'size'                       => 'default',
            'state'                      => 'default',
            'border'                     => 'default',
            'list'                       => [],
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_dropdownButton.html.twig", $defaultOptions);
    }

    public function displaySplitDropdownButton($contentSplitDropdownButton, $framework, $options = null)
    {
        $defaultOptions = [
            'contentSplitDropdownButton' => $contentSplitDropdownButton,
            'framework'                  => $framework,
            'theme'                      => 'default',
            'size'                       => 'default',
            'state'                      => 'default',
            'border'                     => 'default',
            'list'                       => [],
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $defaultOptions = array_merge($defaultOptions, $options);
        }
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_splitDropdownButton.html.twig", $defaultOptions);
    }

    public function displayButtonGroup($contentButtonGroup, $framework, $options = null)
    {
        $defaultOptions = [
            'contentButtonGroup'         => $contentButtonGroup,
            'framework'                  => $framework,
            'theme'                      => 'default',
            'size'                       => 'default',
            'state'                      => 'default',
            'border'                     => 'default',
            'group'                      => 'default',
            'classes'                    => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
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
