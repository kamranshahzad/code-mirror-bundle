<?php

namespace Kamran\CodeMirrorBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;


class CodeMirrorType extends AbstractType
{

    /**
    * {@inheritdoc}
    */
    public function finishView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['mode'] = $options['mode'];
        parent::finishView($view, $form, $options);
    }


    /**
    * {@inheritdoc}
    */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
                'mode' => 'htmlmixed',
            ));
    }

    /**
    * {@inheritdoc}
    */
    public function getParent()
    {
        return 'textarea';
    }

    /**
    * {@inheritdoc}
    */
    public function getName()
    {
        return 'codemirror';
    }

}