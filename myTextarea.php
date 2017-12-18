<?php

/**
 * Class myTextarea
 */
class myTextarea extends fieldCreator{

    /**
     * Method to print our textarea filed
     * @return string
     */
    public function __toString(): string
    {
        $toPrint = '<textarea type="'.$this->type.'" name="'.$this->name.'"  '.$this->getAttributesToFiled().' />'.$this->value.'</textarea>';
        return $toPrint;
    }


}