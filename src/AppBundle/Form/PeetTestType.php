<?php
/**
 * Created by PhpStorm.
 * User: p33t
 * Date: 23/12/16
 * Time: 13:45
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class PeetTestType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('last_name', TextType::class)
            ->add('file', FileType::class)
            ->add('send', SubmitType::class);
    }
}