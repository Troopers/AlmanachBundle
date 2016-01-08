<?php

namespace AppVentus\AlmanachBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{

    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('almanach');
        $rootNode
            ->children()
                ->scalarNode('framework')->defaultValue('bootstrap')->end()
            ->end();

        $frameworks = ['bootstrap', 'foundation'];

        foreach ($frameworks as $framework) {

            $frameworkNode =
                $rootNode
                    ->children()
                        ->arrayNode($framework);

            $this->addContainer($frameworkNode);
            $this->addContainerFluid($frameworkNode);
            $this->addGridItem($frameworkNode);
            $this->addLabel($frameworkNode);
            $this->addAlert($frameworkNode);
            $this->addHeading($frameworkNode);
            $this->addInlineText($frameworkNode);
            $this->addTransformText($frameworkNode);
            $this->addAlignmentText($frameworkNode);
            $this->addList($frameworkNode);
            $this->addTab($frameworkNode);
            $this->addTabTitle($frameworkNode);
            $this->addTabContent($frameworkNode);
            $this->addButton($frameworkNode);
            $this->addDropdownButton($frameworkNode);
            $this->addSplitDropdownButton($frameworkNode);
            $this->addButtonGroup($frameworkNode);

            $frameworkNode
                ->end()
                    ->end();
        }

        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.

        return $treeBuilder;
    }

    private function addContainer(ArrayNodeDefinition $frameworkNode) {
        $frameworkNode
            ->children()
                ->arrayNode('container')
                    ->children()
                        ->arrayNode('classCont')
                            ->children()
                                ->scalarNode('cont')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }

    private function addContainerFluid(ArrayNodeDefinition $frameworkNode) {
        $frameworkNode
            ->children()
                ->arrayNode('containerFluid')
                    ->children()
                        ->arrayNode('classContFluid')
                            ->children()
                                ->scalarNode('contFluid')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }

    private function addGridItem(ArrayNodeDefinition $frameworkNode) {
        $frameworkNode
            ->children()
                ->arrayNode('gridItem')
                    ->children()
                        ->arrayNode('classGridItem')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('xs1')->end()
                                ->scalarNode('xs2')->end()
                                ->scalarNode('xs3')->end()
                                ->scalarNode('xs4')->end()
                                ->scalarNode('xs5')->end()
                                ->scalarNode('xs6')->end()
                                ->scalarNode('xs7')->end()
                                ->scalarNode('xs8')->end()
                                ->scalarNode('xs9')->end()
                                ->scalarNode('xs10')->end()
                                ->scalarNode('xs11')->end()
                                ->scalarNode('xs12')->end()
                                ->scalarNode('sm1')->end()
                                ->scalarNode('sm2')->end()
                                ->scalarNode('sm3')->end()
                                ->scalarNode('sm4')->end()
                                ->scalarNode('sm5')->end()
                                ->scalarNode('sm6')->end()
                                ->scalarNode('sm7')->end()
                                ->scalarNode('sm8')->end()
                                ->scalarNode('sm9')->end()
                                ->scalarNode('sm10')->end()
                                ->scalarNode('sm11')->end()
                                ->scalarNode('sm12')->end()
                                ->scalarNode('md1')->end()
                                ->scalarNode('md2')->end()
                                ->scalarNode('md3')->end()
                                ->scalarNode('md4')->end()
                                ->scalarNode('md5')->end()
                                ->scalarNode('md6')->end()
                                ->scalarNode('md7')->end()
                                ->scalarNode('md8')->end()
                                ->scalarNode('md9')->end()
                                ->scalarNode('md10')->end()
                                ->scalarNode('md11')->end()
                                ->scalarNode('md12')->end()
                                ->scalarNode('lg1')->end()
                                ->scalarNode('lg2')->end()
                                ->scalarNode('lg3')->end()
                                ->scalarNode('lg4')->end()
                                ->scalarNode('lg5')->end()
                                ->scalarNode('lg6')->end()
                                ->scalarNode('lg7')->end()
                                ->scalarNode('lg8')->end()
                                ->scalarNode('lg9')->end()
                                ->scalarNode('lg10')->end()
                                ->scalarNode('lg11')->end()
                                ->scalarNode('lg12')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }

    private function addLabel(ArrayNodeDefinition $frameworkNode) {
        $frameworkNode
            ->children()
                ->arrayNode('label')
                    ->children()
                        ->arrayNode('theme')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('primary')->end()
                                ->scalarNode('secondary')->end()
                                ->scalarNode('success')->end()
                                ->scalarNode('information')->end()
                                ->scalarNode('error')->end()
                                ->scalarNode('warning')->end()
                                ->scalarNode('link')->end()
                            ->end()
                        ->end()
                        ->arrayNode('border')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('round')->end()
                                ->scalarNode('radius')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }

    private function addAlert(ArrayNodeDefinition $frameworkNode) {
        $frameworkNode
            ->children()
                ->arrayNode('alert')
                    ->children()
                        ->arrayNode('theme')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('primary')->end()
                                ->scalarNode('secondary')->end()
                                ->scalarNode('success')->end()
                                ->scalarNode('information')->end()
                                ->scalarNode('error')->end()
                                ->scalarNode('warning')->end()
                                ->scalarNode('link')->end()
                            ->end()
                        ->end()
                        ->arrayNode('border')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('round')->end()
                                ->scalarNode('radius')->end()
                                ->scalarNode('dismissible')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }

    private function addHeading(ArrayNodeDefinition $frameworkNode) {
        $frameworkNode
            ->children()
                ->arrayNode('heading')
                    ->children()
                        ->arrayNode('size')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('h1')->end()
                                ->scalarNode('h2')->end()
                                ->scalarNode('h3')->end()
                                ->scalarNode('h4')->end()
                                ->scalarNode('h5')->end()
                                ->scalarNode('h6')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }

    private function addInlineText(ArrayNodeDefinition $frameworkNode) {
        $frameworkNode
            ->children()
                ->arrayNode('inlineText')
                    ->children()
                        ->arrayNode('inline')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('marked')->end()
                                ->scalarNode('deleted')->end()
                                ->scalarNode('strike')->end()
                                ->scalarNode('inserted')->end()
                                ->scalarNode('underlined')->end()
                                ->scalarNode('small')->end()
                                ->scalarNode('bold')->end()
                                ->scalarNode('italic')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }

    private function addTransformText(ArrayNodeDefinition $frameworkNode) {
        $frameworkNode
            ->children()
                ->arrayNode('transformText')
                    ->children()
                        ->arrayNode('transform')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('lower')->end()
                                ->scalarNode('upper')->end()
                                ->scalarNode('capital')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }

    private function addAlignmentText(ArrayNodeDefinition $frameworkNode) {
        $frameworkNode
            ->children()
                ->arrayNode('alignmentText')
                    ->children()
                        ->arrayNode('alignment')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('left')->end()
                                ->scalarNode('smallLeft')->end()
                                ->scalarNode('smallOnlyLeft')->end()
                                ->scalarNode('mediumLeft')->end()
                                ->scalarNode('mediumOnlyLeft')->end()
                                ->scalarNode('largeLeft')->end()
                                ->scalarNode('largeOnlyLeft')->end()
                                ->scalarNode('xLargeLeft')->end()
                                ->scalarNode('xLargeOnlyLeft')->end()
                                ->scalarNode('xxLargeLeft')->end()
                                ->scalarNode('right')->end()
                                ->scalarNode('smallRight')->end()
                                ->scalarNode('smallOnlyRight')->end()
                                ->scalarNode('mediumRight')->end()
                                ->scalarNode('mediumOnlyRight')->end()
                                ->scalarNode('largeRight')->end()
                                ->scalarNode('LargeOnlyRight')->end()
                                ->scalarNode('xLargeRight')->end()
                                ->scalarNode('xLargeOnlyRight')->end()
                                ->scalarNode('xxLargeRight')->end()
                                ->scalarNode('center')->end()
                                ->scalarNode('smallCenter')->end()
                                ->scalarNode('smallOnlyCenter')->end()
                                ->scalarNode('mediumCenter')->end()
                                ->scalarNode('mediumOnlyCenter')->end()
                                ->scalarNode('largeCenter')->end()
                                ->scalarNode('largeOnlyCenter')->end()
                                ->scalarNode('xLargeCenter')->end()
                                ->scalarNode('xLargeOnlyCenter')->end()
                                ->scalarNode('xxLargeCenter')->end()
                                ->scalarNode('justify')->end()
                                ->scalarNode('smallJustify')->end()
                                ->scalarNode('smallOnlyJustify')->end()
                                ->scalarNode('mediumJustify')->end()
                                ->scalarNode('mediumOnlyJustify')->end()
                                ->scalarNode('largeJustify')->end()
                                ->scalarNode('largeOnlyJustify')->end()
                                ->scalarNode('xLargeJustify')->end()
                                ->scalarNode('xLargeOnlyJustify')->end()
                                ->scalarNode('xxLargeJustify')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }

    private function addList(ArrayNodeDefinition $frameworkNode) {
        $frameworkNode
            ->children()
                ->arrayNode('list')
                    ->children()
                        ->arrayNode('order')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('ordered')->end()
                                ->scalarNode('unordered')->end()
                            ->end()
                        ->end()
                        ->arrayNode('decoration')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('inline')->end()
                                ->scalarNode('unstyled')->end()
                                ->scalarNode('disc')->end()
                                ->scalarNode('square')->end()
                                ->scalarNode('circle')->end()
                                ->scalarNode('nothing')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }

    private function addTab(ArrayNodeDefinition $frameworkNode) {
        $frameworkNode
            ->children()
                ->arrayNode('tab')
                    ->children()
                        ->arrayNode('theme')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('tab')->end()
                                ->scalarNode('pill')->end()
                            ->end()
                        ->end()
                        ->arrayNode('style')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('vertical')->end()
                                ->scalarNode('justify')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }

    private function addTabTitle(ArrayNodeDefinition $frameworkNode) {
        $frameworkNode
            ->children()
                ->arrayNode('tabTitle')
                    ->children()
                        ->arrayNode('state')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('active')->end()
                                ->scalarNode('disabled')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }

    private function addTabContent(ArrayNodeDefinition $frameworkNode) {
        $frameworkNode
            ->children()
                ->arrayNode('tabContent')
                    ->children()
                        ->arrayNode('state')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('active')->end()
                                ->scalarNode('disabled')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }

    private function addButton(ArrayNodeDefinition $frameworkNode) {
        $frameworkNode
            ->children()
                ->arrayNode('button')
                    ->children()
                        ->arrayNode('theme')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('primary')->end()
                                ->scalarNode('secondary')->end()
                                ->scalarNode('success')->end()
                                ->scalarNode('information')->end()
                                ->scalarNode('error')->end()
                                ->scalarNode('warning')->end()
                                ->scalarNode('link')->end()
                            ->end()
                        ->end()
                        ->arrayNode('size')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('extra_small')->end()
                                ->scalarNode('small')->end()
                                ->scalarNode('medium')->end()
                                ->scalarNode('large')->end()
                                ->scalarNode('expanded')->end()
                            ->end()
                        ->end()
                        ->arrayNode('state')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('active')->end()
                                ->scalarNode('disabled')->end()
                            ->end()
                        ->end()
                        ->arrayNode('border')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('round')->end()
                                ->scalarNode('radius')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }

    private function addDropdownButton(ArrayNodeDefinition $frameworkNode) {
        $frameworkNode
            ->children()
                ->arrayNode('dropdownButton')
                    ->children()
                        ->arrayNode('theme')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('primary')->end()
                                ->scalarNode('secondary')->end()
                                ->scalarNode('success')->end()
                                ->scalarNode('information')->end()
                                ->scalarNode('error')->end()
                                ->scalarNode('warning')->end()
                                ->scalarNode('link')->end()
                            ->end()
                        ->end()
                        ->arrayNode('size')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('extra_small')->end()
                                ->scalarNode('small')->end()
                                ->scalarNode('medium')->end()
                                ->scalarNode('large')->end()
                                ->scalarNode('round')->end()
                                ->scalarNode('radius')->end()
                                ->scalarNode('expanded')->end()
                            ->end()
                        ->end()
                        ->arrayNode('state')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('active')->end()
                                ->scalarNode('disabled')->end()
                            ->end()
                        ->end()
                        ->arrayNode('border')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('round')->end()
                                ->scalarNode('radius')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }

    private function addSplitDropdownButton(ArrayNodeDefinition $frameworkNode) {
        $frameworkNode
            ->children()
                ->arrayNode('splitDropdownButton')
                    ->children()
                        ->arrayNode('theme')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('primary')->end()
                                ->scalarNode('secondary')->end()
                                ->scalarNode('success')->end()
                                ->scalarNode('information')->end()
                                ->scalarNode('error')->end()
                                ->scalarNode('warning')->end()
                                ->scalarNode('link')->end()
                            ->end()
                        ->end()
                        ->arrayNode('size')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('extra_small')->end()
                                ->scalarNode('small')->end()
                                ->scalarNode('medium')->end()
                                ->scalarNode('large')->end()
                                ->scalarNode('expanded')->end()
                            ->end()
                        ->end()
                        ->arrayNode('state')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('active')->end()
                                ->scalarNode('disabled')->end()
                            ->end()
                        ->end()
                        ->arrayNode('border')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('round')->end()
                                ->scalarNode('radius')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }

    private function addButtonGroup(ArrayNodeDefinition $frameworkNode) {
        $frameworkNode
            ->children()
                ->arrayNode('buttonGroup')
                    ->children()
                        ->arrayNode('theme')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('primary')->end()
                                ->scalarNode('secondary')->end()
                                ->scalarNode('success')->end()
                                ->scalarNode('information')->end()
                                ->scalarNode('error')->end()
                                ->scalarNode('warning')->end()
                                ->scalarNode('link')->end()
                            ->end()
                        ->end()
                        ->arrayNode('size')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('extra_small')->end()
                                ->scalarNode('small')->end()
                                ->scalarNode('medium')->end()
                                ->scalarNode('large')->end()
                            ->end()
                        ->end()
                        ->arrayNode('state')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('active')->end()
                                ->scalarNode('disabled')->end()
                            ->end()
                        ->end()
                        ->arrayNode('border')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('round')->end()
                                ->scalarNode('radius')->end()
                            ->end()
                        ->end()
                        ->arrayNode('group')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('stack')->end()
                                ->scalarNode('stackForSmall')->end()
                                ->scalarNode('vertical')->end()
                                ->scalarNode('expanded')->end()
                             ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }
}



