<?php

namespace App\Form;

use App\Entity\Carrossel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class CarrosselType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo',TextType::class, ['label' => 'Título:'])
            ->add('texto', TextType::class, ['label' => 'Texto:'])
            ->add('link', TextType::class, ['label' => 'Link:'])
            ->add('arquivo', FileType::class, [
                'label' => 'Imagem:',
                'mapped' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2048k',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'Por favor envie um arquivo de imagem',
                    ])
                ],
        ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Carrossel::class,
        ]);
    }
}
