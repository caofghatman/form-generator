<?php
namespace FormGenerateBundle\Service;

use PHPMentors\DomainKata\Service\ServiceInterface;
use src\FormBundle\Entity\InputTypeInterface;

class FormGenerator implements ServiceInterface
{
    private $form = [];

    public function generate()
    {

    }

    public function add(InputTypeInterface $input)
    {
        $this->form[] = $input;
    }
}
