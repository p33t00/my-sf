<?php
/**
 * Created by PhpStorm.
 * User: p33t
 * Date: 04/01/17
 * Time: 02:53
 */

namespace AppBundle\Admin;

use AppBundle\Entity\BlogPost;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Show\ShowMapper;


class BlogPostAdmin extends AbstractAdmin
{
    /**
     * @param FormMapper $formMapper
     *
     * Form fields
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->tab('Post')
            ->with('Content')
                ->add('title', 'text')
                ->add('body', 'textarea')
            ->end()
            ->end()

            ->tab('Options')
            ->with('Meta Data', array('class' => 'col-md-3'))
                ->add('draft', 'checkbox', array('required' => false))
                ->add('category', 'entity', array(
                    'class' => 'AppBundle\Entity\Category',
                    'choice_label' => 'name',
                ))
            ->end()
            ->end()
        ;
    }

    /**
     * @param ListMapper $listMapper
     *
     * Display fields in the list of posts
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            // names of the object's properties are used as a parameter
            // addIdentifief() makes the field akt as a link to edit page
            ->addIdentifier('title')
            ->add('category.name')
            ->add('draft')
        ;
    }

    /**
     * @param DatagridMapper $datagridMapper
     *
     * Filter to search blog posts by title or category
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            // Filtering by another model’s properties
            ->add('category', null, array(), 'entity', array(
                'class'    => 'AppBundle\Entity\Category',
                'choice_label' => 'name',
            ))
        ;
    }

    // Fields to be shown on show action
    // sym.loc/admin/app/blogpost/2/show
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('title')
            ->add('body')
            ->add('draft')
        ;
    }

    public function preShow()
    {
        exit;
    }

    /**
     * @param mixed $object
     *
     * Method that returns Post title instead of hash
     *
     * @return string
     */
    public function toString($object)
    {
        return $object instanceof BlogPost
            ? $object->getTitle()
            : 'Blog Post'; // shown in the breadcrumb on the create view
    }
}