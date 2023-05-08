<?php

namespace App\Controller\Admin;

use App\Entity\Plats;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class PlatsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Plats::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        yield from parent::configureFields($pageName);
        yield AssociationField::new('categorie');
    }
    
}