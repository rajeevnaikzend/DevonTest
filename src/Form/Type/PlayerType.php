<?php

declare(strict_types=1);

namespace App\Form\Type;

use App\Entity\Player;
use App\Entity\Team;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotNull;

class PlayerType extends AbstractType
{
   public function buildForm(FormBuilderInterface $builder, array $options): void
   {
       $builder
           ->add('firstName', TextType::class, [
               'constraints' => [
                   new NotNull(),
               ]
           ])
           ->add('lastName', TextType::class, [
               'constraints' => [
                   new NotNull(),
               ]
           ])->add('playerimageURI', TextType::class, [
               'constraints' => [
                   new NotNull(),
               ]
           ])->add('team', EntityType::class, [
               'class' => Team::class,
              // 'multiple' => true,
               'constraints' => [
                   new NotNull(),
               ]
           ]);
   }       
   
   public function configureOptions(OptionsResolver $resolver): void
   {
       $resolver->setDefaults([
           'data_class' => Player::class,
       ]);
   }       
}
