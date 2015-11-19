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

    public function displayContainer($content, $framework, $class = 'container',
                                 $class = [], $attributes = [], $tag = null, $link = null)
    {
        $options = [
            'content'      => $content,
            'framework'    => $framework,
            'class'        => $class ? $class : [],
            'attributes'   => $attributes ? $attributes : [],
            'tag'          => $tag,
            'link'         => $link,
        ];
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_label.html.twig", $options);
    }

    public function displayLabel($content, $framework, $theme = 'default', $border = 'default',
                                 $class = [], $attributes = [], $tag = null, $link = null)
    {
        $options = [
            'content'      => $content,
            'framework'    => $framework,
            'theme'        => $theme,
            'border'       => $border,
            'class'        => $class ? $class : [],
            'attributes'   => $attributes ? $attributes : [],
            'tag'          => $tag,
            'link'         => $link,
        ];
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_label.html.twig", $options);
    }

    public function displayAlert($content, $framework, $theme = 'default', $border = 'default',
                                 $class = [], $attributes = [], $tag = null, $link = null)
    {
        $options = [
            'content'      => $content,
            'framework'    => $framework,
            'theme'        => $theme,
            'border'       => $border,
            'class'        => $class ? $class : [],
            'attributes'   => $attributes ? $attributes : [],
            'tag'          => $tag,
            'link'         => $link,
        ];
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_alert.html.twig", $options);
    }

    public function displayTitle($content, $framework, $size = 'default',
                                 $class = [], $attributes = [], $tag = null, $link = null)
    {
        $options = [
            'content'      => $content,
            'framework'    => $framework,
            'size'         => $size,
            'class'        => $class ? $class : [],
            'attributes'   => $attributes ? $attributes : [],
            'tag'          => $tag,
            'link'         => $link,
        ];
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_title.html.twig", $options);
    }

    public function displayInlineText($content, $framework, $inline = 'default',
                                      $class = [], $attributes = [], $tag = null, $link = null)
    {
        $options = [
            'content'      => $content,
            'framework'    => $framework,
            'inline'       => $inline,
            'class'        => $class ? $class : [],
            'attributes'   => $attributes ? $attributes : [],
            'tag'          => $tag,
            'link'         => $link,
        ];
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_inlineText.html.twig", $options);
    }

    public function displayTransformText($content, $framework, $transform = 'default',
                                         $class = [], $attributes = [], $tag = null, $link = null)
    {
        $options = [
            'content'      => $content,
            'framework'    => $framework,
            'transform'    => $transform,
            'class'        => $class ? $class : [],
            'attributes'   => $attributes ? $attributes : [],
            'tag'          => $tag,
            'link'         => $link,
        ];
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_transformText.html.twig", $options);
    }

    public function displayAlignmentText($content, $framework, $alignment = 'default',
                                         $class = [], $attributes = [], $tag = null, $link = null)
    {
        $options = [
            'content'      => $content,
            'framework'    => $framework,
            'alignment'    => $alignment,
            'class'        => $class ? $class : [],
            'attributes'   => $attributes ? $attributes : [],
            'tag'          => $tag,
            'link'         => $link,
        ];
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_alignmentText.html.twig", $options);
    }

    public function displayList($content, $framework, $order = 'default', $decoration = 'default', $list = [],
                                         $class = [], $attributes = [], $tag = null, $link = null)
    {
        $options = [
            'content'      => $content,
            'framework'    => $framework,
            'order'        => $order,
            'decoration'   => $decoration,
            'list'         => $list ? $list : [],
            'class'        => $class ? $class : [],
            'attributes'   => $attributes ? $attributes : [],
            'tag'          => $tag,
            'link'         => $link,
        ];
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_list.html.twig", $options);
    }

    public function displayListItem($content, $framework, $class = [], $attributes = [], $tag = null, $link = null)
    {
        $options = [
            'content'      => $content,
            'framework'    => $framework,
            'classes'        => $class ? $class : [],
            'attributes'   => $attributes ? $attributes : [],
            'tag'          => $tag,
            'link'         => $link,
        ];
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_listItem.html.twig", $options);
    }

    public function displayTab($titles, $content, $framework, $theme = 'default', $style = 'default', $list = [],
                                         $class = [], $attributes = [], $tag = null, $link = null)
    {
        $options = [
            'tabTitles'    => $titles,
            'tabContent'   => $content,
            'framework'    => $framework,
            'theme'        => $theme,
            'style'        => $style,
            'list'         => $list ? $list : [],
            'class'        => $class ? $class : [],
            'attributes'   => $attributes ? $attributes : [],
            'tag'          => $tag,
            'link'         => $link,
        ];
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_tab.html.twig", $options);
    }

    public function displayTabTitle($content, $framework, $state = 'default', $list = [],
                                         $class = [], $attributes = [], $tag = null, $link = null)
    {
        $options = [
            'content'      => $content,
            'framework'    => $framework,
            'state'        => $state,
            'list'         => $list ? $list : [],
            'class'        => $class ? $class : [],
            'attributes'   => $attributes ? $attributes : [],
            'tag'          => $tag,
            'link'         => $link,
        ];
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_tabTitle.html.twig", $options);
    }

    public function displayTabContent($content, $framework, $state = 'default', $list = [],
                                         $class = [], $attributes = [], $tag = null, $link = null)
    {
        $options = [
            'content'      => $content,
            'framework'    => $framework,
            'state'        => $state,
            'list'         => $list ? $list : [],
            'class'        => $class ? $class : [],
            'attributes'   => $attributes ? $attributes : [],
            'tag'          => $tag,
            'link'         => $link,
        ];
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_tabContent.html.twig", $options);
    }

    public function displayButton($content, $framework, $theme = 'default', $size = 'default', $state = 'default', $border = 'default',
                                  $class = [], $attributes = [], $tag = null, $link = null)
    {
        $options = [
            'content'      => $content,
            'framework'    => $framework,
            'theme'        => $theme,
            'size'         => $size,
            'state'        => $state,
            'border'       => $border,
            'class'        => $class ? $class : [],
            'attributes'   => $attributes ? $attributes : [],
            'tag'          => $tag,
            'link'         => $link,
        ];
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_button.html.twig", $options);
    }

    public function displayDropdownButton($content, $framework, $theme = 'default', $size = 'default', $state = 'default', $border = 'default', $list = [],
                                          $class = [], $attributes = [], $tag = null, $link = null)
    {
        $options = [
            'content'      => $content,
            'framework'    => $framework,
            'theme'        => $theme,
            'size'         => $size,
            'state'        => $state,
            'border'       => $border,
            'list'         => $list ? $list : [],
            'class'        => $class ? $class : [],
            'attributes'   => $attributes ? $attributes : [],
            'tag'          => $tag,
            'link'         => $link,
        ];
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_dropdownButton.html.twig", $options);
    }

    public function displaySplitDropdownButton($content, $framework, $theme = 'default', $size = 'default', $state = 'default', $border = 'default', $list = [],
                                               $class = [], $attributes = [], $tag = null, $link = null)
    {
        $options = [
            'content'      => $content,
            'framework'    => $framework,
            'theme'        => $theme,
            'size'         => $size,
            'state'        => $state,
            'border'       => $border,
            'list'         => $list ? $list : [],
            'class'        => $class ? $class : [],
            'attributes'   => $attributes ? $attributes : [],
            'tag'          => $tag,
            'link'         => $link,
        ];
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_splitDropdownButton.html.twig", $options);
    }

    public function displayButtonGroup($content, $framework, $theme = 'default', $size = 'default', $state = 'default', $border = 'default', $group = 'default',
                                       $class = [], $attributes = [], $tag = null, $link = null)
    {
        $options = [
            'content'      => $content,
            'framework'    => $framework,
            'theme'        => $theme,
            'size'         => $size,
            'state'        => $state,
            'border'       => $border,
            'group'        => $group,
            'class'        => $class ? $class : [],
            'attributes'   => $attributes ? $attributes : [],
            'tag'          => $tag,
            'link'         => $link,
        ];
        return $this->templating->render("AlmanachBundle:bricks:" . $framework . "/_buttonGroup.html.twig", $options);
    }

    public function getName() {
        return 'appventus_almanach_display';
    }
}
