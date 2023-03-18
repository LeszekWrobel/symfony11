<?php

namespace App\Controller\Admin;

use App\Entity\Announcements;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class AnnouncementsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Announcements::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
    return $crud
        ->setPaginatorPageSize(30)
        ;
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
