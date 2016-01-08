<?php

namespace AppVentus\AlmanachBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DocController extends Controller
{
    /**
     * @Route("/{framework}", name="almanach_doc_index")
     * @Template()
     */
    public function indexAction($framework)
    {
        $almanachExtension = $this->get('appventus_almanach_display');
        $almanachExtension->setFramework($framework);

        $almanach = $this->getParameter('almanach_'.$framework);
        $container = isset($almanach['container']) ? $almanach['container'] : null;
        $containerFluid = isset($almanach['containerFluid']) ? $almanach['containerFluid'] : null;
        $gridItem = isset($almanach['gridItem']) ? $almanach['gridItem'] : null;
        $label = isset($almanach['label']) ? $almanach['label'] : null;
        $alert = isset($almanach['alert']) ? $almanach['alert'] : null;
        $heading = isset($almanach['heading']) ? $almanach['heading'] : null;
        $inlineText = isset($almanach['inlineText']) ? $almanach['inlineText'] : null;
        $transformText = isset($almanach['transformText']) ? $almanach['transformText'] : null;
        $alignmentText = isset($almanach['alignmentText']) ? $almanach['alignmentText'] : null;
        $list = isset($almanach['list']) ? $almanach['list'] : null;
        $tab = isset($almanach['tab']) ? $almanach['tab'] : null;
        $tabTitle = isset($almanach['tabTitle']) ? $almanach['tabTitle'] : null;
        $tabContent = isset($almanach['tabContent']) ? $almanach['tabContent'] : null;
        $button = isset($almanach['button']) ? $almanach['button'] : null;
        $dropdownButton = isset($almanach['dropdownButton']) ? $almanach['dropdownButton'] : null;
        $splitDropdownButton = isset($almanach['splitDropdownButton']) ? $almanach['splitDropdownButton'] : null;
        $buttonGroup = isset($almanach['buttonGroup']) ? $almanach['buttonGroup'] : null;

        return [
            'framework'                  => $framework,
            'config_container'           => $container,
            'config_containerFluid'      => $containerFluid,
            'config_gridItem'            => $gridItem,
            'config_label'               => $label,
            'config_alert'               => $alert,
            'config_heading'             => $heading,
            'config_inlineText'          => $inlineText,
            'config_transformText'       => $transformText,
            'config_alignmentText'       => $alignmentText,
            'config_list'                => $list,
            'config_tab'                 => $tab,
            'config_tabTitle'            => $tabTitle,
            'config_tabContent'          => $tabContent,
            'config_button'              => $button,
            'config_dropdownButton'      => $dropdownButton,
            'config_splitDropdownButton' => $splitDropdownButton,
            'config_buttonGroup'         => $buttonGroup,
        ];
    }
}
