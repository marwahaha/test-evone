<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'bitbag_sylius_cms_plugin.repository.block_translation' shared service.

$a = ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService());

return $this->services['bitbag_sylius_cms_plugin.repository.block_translation'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($a, $a->getClassMetadata('BitBag\\SyliusCmsPlugin\\Entity\\BlockTranslation'));
