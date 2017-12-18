<?php

/**
 * Abstrract class which define basic method for all fields in create form
 * Class FieldCreator
 */
abstract class FieldCreator{
    protected $name = '';
    protected $value = '';
    protected $type = '';
    protected $attributes = [];

    /**
     * overwrite to display input
     * @return string
     */
    public abstract function __toString(): string;

    /**
     * Set name of field
     * @param string $name
     */
    public function setName(string $name){
        $this->name = $name;
    }

    /**
     * set Type of Field
     * @param string $type
     */
    public function setType(string $type){
        $this->type = $type;
    }

    /**
     * Set Value of filed
     * @param string $value
     */
    public function setValue(string $value){
        $this->value = $value;
    }

    /**
     * set attributes of field
     * @param array $attributes
     */
    public function setAttributes(array $attributes){
        $this->attributes = $attributes;
    }

    /**
     * Parse attributes to printing string
     * @return string
     */
    public function getAttributesToFiled(): string
    {
        $attr = '';
        foreach ($this->attributes as $k => $v){
            $attr .= $k.'="'.$v.'" ';
        }
        return $attr;

    }

}