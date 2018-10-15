<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.taxon_translation' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Form/Type/AbstractResourceType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Form/Type/TaxonTranslationType.php';

return $this->services['sylius.form.type.taxon_translation'] = new \Sylius\Bundle\TaxonomyBundle\Form\Type\TaxonTranslationType('Sylius\\Component\\Taxonomy\\Model\\TaxonTranslation', $this->parameters['sylius.form.type.taxon_translation.validation_groups']);
