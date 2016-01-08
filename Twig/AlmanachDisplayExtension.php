<?php

namespace AppVentus\AlmanachBundle\Twig;

use Symfony\Component\Templating\EngineInterface;

class AlmanachDisplayExtension extends \Twig_Extension {

    protected $almanach;

    /** @var \Twig_Environment templating */
    protected $templating;

    /** @var string framework */
    protected $framework;

    /** @var array $defaultOptions */
    static protected $defaultOptions = [
        'class' => [],
        'attr'  => [],
        'tag'   => null,
        'link'  => null,
    ];

    /**
     * @param $template
     * @param array $defaultOptions
     * @param array $options
     * @return string
     */
    protected function renderTemplate($template, array $defaultOptions, array $options) {
        $defaultOptions = array_merge($this::$defaultOptions, $defaultOptions);

        $options = (is_array($options) && !empty($options)) ? array_merge($defaultOptions, $options) : $defaultOptions;
        $options['framework'] = $this->framework;

        return $this->templating->render("AlmanachBundle:bricks:" . $this->framework . "/" . $template, $options);
    }

    /**
     * @param $almanach
     * @param \Twig_Environment $templating
     * @param $framework
     */
    public function __construct($almanach, \Twig_Environment $templating, $framework) {
        $this->almanach = $almanach;
        $this->templating = $templating;
        $this->framework = $framework;
    }

    /**
     * @param $framework
     */
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
            'contentContainer' => $contentContainer,
            'classCont'        => 'cont',
        ];

        return $this->renderTemplate('_container.html.twig', $defaultOptions, $options);
    }

    public function displayContainerFluid($contentContainerFluid, $options = [])
    {
        $defaultOptions = [
            'contentContainerFluid'      => $contentContainerFluid,
            'framework'                  => $this->framework,
            'classContFluid'             => 'contFluid',
        ];

        return $this->renderTemplate('_containerFluid.html.twig', $defaultOptions, $options);
    }

    public function displayGrid($contentGrid, $options = [])
    {
        $defaultOptions = [
            'contentGrid'                => $contentGrid,
            'framework'                  => $this->framework,
        ];

        return $this->renderTemplate('_grid.html.twig', $defaultOptions, $options);
    }
    public function displayGridItem($contentGridItem, $options = [])
    {
        $defaultOptions = [
            'contentGridItem'            => $contentGridItem,
            'framework'                  => $this->framework,
            'classGridItem'              => [],
        ];

        return $this->renderTemplate('_gridItem.html.twig', $defaultOptions, $options);
    }

    public function displayLabel($contentLabel, $options = [])
    {
        $defaultOptions = [
            'contentLabel'               => $contentLabel,
            'framework'                  => $this->framework,
            'theme'                      => 'default',
            'border'                     => 'default',
        ];

        return $this->renderTemplate('_label.html.twig', $defaultOptions, $options);
    }

    public function displayAlert($contentAlert, $options = [])
    {
        $defaultOptions = [
            'contentAlert'               => $contentAlert,
            'framework'                  => $this->framework,
            'theme'                      => 'default',
            'border'                     => 'default',
        ];

        return $this->renderTemplate('_alert.html.twig', $defaultOptions, $options);
    }

    public function displayHeading($contentHeading, $options = [])
    {
        $defaultOptions = [
            'contentHeading'             => $contentHeading,
            'framework'                  => $this->framework,
            'size'                       => 'default',
        ];

        return $this->renderTemplate('_heading.html.twig', $defaultOptions, $options);
    }

    public function displayInlineText($contentInlineText, $options = [])
    {
        $defaultOptions = [
            'contentInlineText'          => $contentInlineText,
            'framework'                  => $this->framework,
            'inline'                     => 'default',
        ];

        return $this->renderTemplate('_inlineText.html.twig', $defaultOptions, $options);
    }

    public function displayTransformText($contentTransformText, $options = [])
    {
        $defaultOptions = [
            'contentTransformText'       => $contentTransformText,
            'framework'                  => $this->framework,
            'transform'                  => 'default',
        ];

        return $this->renderTemplate('_transformText.html.twig', $defaultOptions, $options);
    }

    public function displayAlignmentText($contentAlignmentText, $options = [])
    {
        $defaultOptions = [
            'contentAlignmentText'       => $contentAlignmentText,
            'framework'                  => $this->framework,
            'alignment'                  => 'default',
        ];

        return $this->renderTemplate('_alignmentText.html.twig', $defaultOptions, $options);
    }

    public function displayList($contentList, $options = [])
    {
        $defaultOptions = [
            'contentList'                => $contentList,
            'framework'                  => $this->framework,
            'order'                      => 'default',
            'decoration'                 => 'default',
            'list'                       => [],
        ];

        return $this->renderTemplate('_list.html.twig', $defaultOptions, $options);
    }

    public function displayListItem($contentListItem, $options = [])
    {
        $defaultOptions = [
            'contentListItem'            => $contentListItem,
            'framework'                  => $this->framework,
        ];

        return $this->renderTemplate('_listItem.html.twig', $defaultOptions, $options);
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
        ];

        return $this->renderTemplate('_tab.html.twig', $defaultOptions, $options);
    }

    public function displayTabTitle($content, $options = [])
    {
        $defaultOptions = [
            'content'                    => $content,
            'framework'                  => $this->framework,
            'state'                      => 'default',
            'list'                       => [],
        ];

        return $this->renderTemplate('_tabTitle.html.twig', $defaultOptions, $options);
    }

    public function displayTabContent($content, $options = [])
    {
        $defaultOptions = [
            'content'                    => $content,
            'framework'                  => $this->framework,
            'state'                      => 'default',
            'list'                       => [],
        ];

        return $this->renderTemplate('_tabContent.html.twig', $defaultOptions, $options);
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
        ];

        return $this->renderTemplate('_button.html.twig', $defaultOptions, $options);
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
        ];

        return $this->renderTemplate('_dropdownButton.html.twig', $defaultOptions, $options);
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
        ];

        return $this->renderTemplate('_splitDropdownButton.html.twig', $defaultOptions, $options);
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
            'classes'                    => [], //TODO classes ?
        ];

        return $this->renderTemplate('_buttonGroup.html.twig', $defaultOptions, $options);
    }

    public function getName() {
        return 'appventus_almanach_display';
    }
}
