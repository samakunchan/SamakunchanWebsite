<?php
/**
 * Created by PhpStorm.
 * User: Samakunchan
 * Date: 15/04/2018
 * Time: 22:06
 */

namespace SAM\PortfolioBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProjectEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->remove('date');
    }

    public function getParent()
    {
        return ProjectType::class;
    }
}