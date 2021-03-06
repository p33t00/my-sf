<?php
/**
 * Created by PhpStorm.
 * User: p33t
 * Date: 23/12/16
 * Time: 13:45
 */

namespace AppBundle\Form;

use AppBundle\Entity\Tst;
use AppBundle\Form\PeetSubTestType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
//use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class PeetTestType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, ['required' => false])
            ->add('last_name', TextType::class)
            ->add('file', FileType::class, ['required' => false, 'image_path' => 'file'])
            ->add('send', SubmitType::class);
    }
}