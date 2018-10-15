<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'bitbag_sylius_cms_plugin.controller.action.admin.import_data' shared service.

include_once $this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Controller/Action/Admin/ImportDataAction.php';

return $this->services['bitbag_sylius_cms_plugin.controller.action.admin.import_data'] = new \BitBag\SyliusCmsPlugin\Controller\Action\Admin\ImportDataAction(($this->privates['bitbag_sylius_cms_plugin.processor.import'] ?? $this->load('getBitbagSyliusCmsPlugin_Processor_ImportService.php')), ($this->services['form.factory'] ?? $this->getForm_FactoryService()), ($this->privates['session.flash_bag'] ?? $this->privates['session.flash_bag'] = new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag()), ($this->services['bitbag_sylius_cms_plugin.controller.helper.form_errors_flash'] ?? $this->load('getBitbagSyliusCmsPlugin_Controller_Helper_FormErrorsFlashService.php')), ($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['fos_rest.view_handler'] ?? $this->load('getFosRest_ViewHandlerService.php')));
