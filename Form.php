<?php
include_once ('FiledCreator.php');
include_once ('myInput.php');
include_once ('myTextarea.php');

/**
 * Interface FormBase
 */
interface FormBase{
    public function createElement(string $type, string $name, string $value = '', array $attributes, string $formType = 'input');
    public function __toString();
}

/**
 * Class Form
 */

class Form implements FormBase
{

    private $formMethod = 'POST';
    private $formAction = '';
    private $formName = '';
    private $formFields = [];

    public function __construct(string $method, string $action, string $name = 'myForm')
    {
        $this->formMethod = $method;
        $this->formAction = $action;
        $this->formName = $name;
    }

    /**
     * Method to create element of form input, textareat etc...
     * @param string $type
     * @param string $name
     * @param string $value
     * @param array $attributes
     * @param string $formType
     * @return Form
     */
    public function createElement(string $type, string $name, string $value = '', array $attributes, string $formType = 'input'): self
    {
        switch($formType) {
            case 'textarea':
                $filed = new myTextarea();
                break;
            default:
                $filed = new myInput();
                break;
        }

        $filed->setName($name);
        $filed->setType($type);
        $filed->setValue($value);
        $filed->setAttributes($attributes);
        $this->formFields[] = $filed;

        return $this;
    }

    /**
     * Print our form
     * @return string
     */
    public function __toString(): string
    {
        $toPrint = '<form name="' . $this->formName . '" method="' . $this->formMethod . '" action="' . $this->formAction . '">';
        foreach ($this->formFields as $filed) {
            $toPrint .= "{$filed}";
        }
        $toPrint .= '</form>';
        return $toPrint;
    }
}