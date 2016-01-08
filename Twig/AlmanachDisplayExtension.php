<?php

namespace AppVentus\AlmanachBundle\Twig;

use Symfony\Component\Templating\EngineInterface;

class AlmanachDisplayExtension extends \Twig_Extension {

    protected $almanach;

    /** @var \Twig_Environment templating */
    protected $templating;

    /** @var string framework */
    protected $framework;

    public function __construct($almanach, \Twig_Environment $templating, $framework) {
        $this->almanach = $almanach;
        $this->templating = $templating;
        $this->framework = $framework;
    }

    public function setFramework($framework) {
        $this->framework = $framework;
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

    public function displayContainer($contentContainer, $options = [])
    {
        $defaultOptions = [
            'contentContainer'           => $contentContainer,
            'classCont'                  => 'cont',
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $options = array_merge($defaultOptions, $options);
        } else {
            $options = $defaultOptions;
        }
        $options['framework'] = $this->framework;

        return $this->templating->render("AlmanachBundle:bricks:" . $this->framework . "/_container.html.twig", $options);
    }

    public function displayContainerFluid($contentContainerFluid, $options = [])
    {
        $defaultOptions = [
            'contentContainerFluid'      => $contentContainerFluid,
            'framework'                  => $this->framework,
            'classContFluid'             => 'contFluid',
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $options = array_merge($defaultOptions, $options);
        }
        $framework = (isset($options['framework']) ? $options['framework'] : $this->framework);

        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_containerFluid.html.twig", $options);
    }

    public function displayGrid($contentGrid, $options = [])
    {
        $defaultOptions = [
            'contentGrid'                => $contentGrid,
            'framework'                  => $this->framework,
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $options = array_merge($defaultOptions, $options);
        }
        $framework = (isset($options['framework']) ? $options['framework'] : $this->framework);

        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_grid.html.twig", $options);
    }
    public function displayGridItem($contentGridItem, $options = [])
    {
        $defaultOptions = [
            'contentGridItem'            => $contentGridItem,
            'framework'                  => $this->framework,
            'classGridItem'              => [],
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $options = array_merge($defaultOptions, $options);
        }
        $framework = (isset($options['framework']) ? $options['framework'] : $this->framework);

        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_gridItem.html.twig", $options);
    }

    public function displayLabel($contentLabel, $options = [])
    {
        $defaultOptions = [
            'contentLabel'               => $contentLabel,
            'framework'                  => $this->framework,
            'theme'                      => 'default',
            'border'                     => 'default',
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $options = array_merge($defaultOptions, $options);
        }
        $framework = (isset($options['framework']) ? $options['framework'] : $this->framework);

        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_label.html.twig", $options);
    }

    public function displayAlert($contentAlert, $options = [])
    {
        $defaultOptions = [
            'contentAlert'               => $contentAlert,
            'framework'                  => $this->framework,
            'theme'                      => 'default',
            'border'                     => 'default',
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $options = array_merge($defaultOptions, $options);
        }
        $framework = (isset($options['framework']) ? $options['framework'] : $this->framework);

        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_alert.html.twig", $options);
    }

    public function displayHeading($contentHeading, $options = [])
    {
        $defaultOptions = [
            'contentHeading'             => $contentHeading,
            'framework'                  => $this->framework,
            'size'                       => 'default',
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $options = array_merge($defaultOptions, $options);
        }
        $framework = (isset($options['framework']) ? $options['framework'] : $this->framework);

        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_heading.html.twig", $options);
    }

    public function displayInlineText($contentInlineText, $options = [])
    {
        $defaultOptions = [
            'contentInlineText'          => $contentInlineText,
            'framework'                  => $this->framework,
            'inline'                     => 'default',
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $options = array_merge($defaultOptions, $options);
        }
        $framework = (isset($options['framework']) ? $options['framework'] : $this->framework);

        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_inlineText.html.twig", $options);
    }

    public function displayTransformText($contentTransformText, $options = [])
    {
        $defaultOptions = [
            'contentTransformText'       => $contentTransformText,
            'framework'                  => $this->framework,
            'transform'                  => 'default',
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $options = array_merge($defaultOptions, $options);
        }
        $framework = (isset($options['framework']) ? $options['framework'] : $this->framework);

        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_transformText.html.twig", $options);
    }

    public function displayAlignmentText($contentAlignmentText, $options = [])
    {
        $defaultOptions = [
            'contentAlignmentText'       => $contentAlignmentText,
            'framework'                  => $this->framework,
            'alignment'                  => 'default',
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $options = array_merge($defaultOptions, $options);
        }
        $framework = (isset($options['framework']) ? $options['framework'] : $this->framework);

        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_alignmentText.html.twig", $options);
    }

    public function displayList($contentList, $options = [])
    {
        $defaultOptions = [
            'contentList'                => $contentList,
            'framework'                  => $this->framework,
            'order'                      => 'default',
            'decoration'                 => 'default',
            'list'                       => [],
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $options = array_merge($defaultOptions, $options);
        }
        $framework = (isset($options['framework']) ? $options['framework'] : $this->framework);

        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_list.html.twig", $options);
    }

    public function displayListItem($contentListItem, $options = [])
    {
        $defaultOptions = [
            'contentListItem'            => $contentListItem,
            'framework'                  => $this->framework,
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $options = array_merge($defaultOptions, $options);
        }
        $framework = (isset($options['framework']) ? $options['framework'] : $this->framework);

        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_listItem.html.twig", $options);
    }

    public function displayTab($titles, $content, $options = [])
    {
        $defaultOptions = [
            'tabTitles'                  => $titles,
            'tabContent'                 => $content,
            'framework'                  => $this->framework,
            'theme'                      => 'default',
            'style'                      => 'default',
            'list'                       => [],
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $options = array_merge($defaultOptions, $options);
        }
        $framework = (isset($options['framework']) ? $options['framework'] : $this->framework);

        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_tab.html.twig", $options);
    }

    public function displayTabTitle($content, $options = [])
    {
        $defaultOptions = [
            'content'                    => $content,
            'framework'                  => $this->framework,
            'state'                      => 'default',
            'list'                       => [],
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $options = array_merge($defaultOptions, $options);
        }
        $framework = (isset($options['framework']) ? $options['framework'] : $this->framework);

        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_tabTitle.html.twig", $options);
    }

    public function displayTabContent($content, $options = [])
    {
        $defaultOptions = [
            'content'                    => $content,
            'framework'                  => $this->framework,
            'state'                      => 'default',
            'list'                       => [],
            'class'                      => [],
            'attr'                       => [],
            'tag'                        => null,
            'link'                       => null,
        ];
        if (is_array($options)) {
            $options = array_merge($defaultOptions, $options);
        }
        $framework = (isset($options['framework']) ? $options['framework'] : $this->framework);

        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_tabContent.html.twig", $options);
    }

    public function displayButton($contentButton, $options = [])
    {
        $defaultOptions = [
            'contentButton'              => $contentButton,
            'framework'                  => $this->framework,
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
            $options = array_merge($defaultOptions, $options);
        }
        $framework = (isset($options['framework']) ? $options['framework'] : $this->framework);

        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_button.html.twig", $options);
    }

    public function displayDropdownButton($contentDropdownButton, $options = [])
    {
        $defaultOptions = [
            'contentDropdownButton'      => $contentDropdownButton,
            'framework'                  => $this->framework,
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
            $options = array_merge($defaultOptions, $options);
        }
        $framework = (isset($options['framework']) ? $options['framework'] : $this->framework);

        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_dropdownButton.html.twig", $options);
    }

    public function displaySplitDropdownButton($contentSplitDropdownButton, $options = [])
    {
        $defaultOptions = [
            'contentSplitDropdownButton' => $contentSplitDropdownButton,
            'framework'                  => $this->framework,
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
            $options = array_merge($defaultOptions, $options);
        }
        $framework = (isset($options['framework']) ? $options['framework'] : $this->framework);

        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_splitDropdownButton.html.twig", $options);
    }

    public function displayButtonGroup($contentButtonGroup, $options = [])
    {
        $defaultOptions = [
            'contentButtonGroup'         => $contentButtonGroup,
            'framework'                  => $this->framework,
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
            $options = array_merge($defaultOptions, $options);
        }
        $framework = (isset($options['framework']) ? $options['framework'] : $this->framework);

        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_buttonGroup.html.twig", $options);
    }

    public function getName() {
        return 'appventus_almanach_display';
    }
}
