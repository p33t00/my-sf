<?php
/**
 * Created by PhpStorm.
 * User: p33t
 * Date: 23/12/16
 * Time: 13:45
 */

namespace AppBundle\Form;

use AppBundle\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', ChoiceType::class, ['choices' => [
                'bikes' => '1',
                'cars' => '2'
            ],
            'required' => false,
            'label' => false,
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', Category::class);
    }
}