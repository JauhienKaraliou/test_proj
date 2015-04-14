<?php

namespace JK\WebsiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContactType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name','text',['constraints'=>new NotBlank()])
            ->add('email','email',['label'=>'E-mail','constraints'=> [new NotBlank(), new Email()]])
            ->add('text','textarea',
                ['label'=>'Message',
                    'constraints'=>
                        [new NotBlank(),
                            new Length($options=['min'=>2, 'max'=>20])]])
            ->add('save','submit',['label'=>'Send a message'])
            ->getForm();
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'jk_website_contact';
    }
}
