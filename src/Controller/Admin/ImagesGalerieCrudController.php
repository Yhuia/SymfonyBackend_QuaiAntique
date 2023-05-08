<?php

namespace App\Controller\Admin;

use App\Entity\ImagesGalerie;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ImagesGalerieCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ImagesGalerie::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
