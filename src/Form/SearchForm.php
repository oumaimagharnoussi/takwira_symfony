<?php

namespace App\Form;

use App\data\SearchData;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class SearchForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('ville',ChoiceType::class,[
            'choices'=>[ 'Tunis' =>'Tunis',
                         'Ariana'=>'Ariana'],
        'attr'=>[ 'id' => 'load',
              'class'=>'dropdown-item']]);
    }


}