<?php


/**
 * Class myInput
 */
class myInput extends fieldCreator{

    /**
     * Method to print our input filed
     * @return string
     */
    public function __toString(): string
    {
        $toPrint = '<input type="'.$this->type.'" name="'.$this->name.'" value="'.$this->value.'" '.$this->getAttributesToFiled().' />';
        return $toPrint;
    }


}

