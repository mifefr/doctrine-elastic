<?php

namespace DoctrineElastic\Entity;

/**
 *
 * @author Allan bruyere <mifefr@gmail.com>
 *
 * @ElasticORM\Type(name="foo_nested", index="foo_family")
 * @ORM\Entity
 */
class FooNested {
    /**
     * @var int
     *
     * @ElasticORM\Field(name="nested_val_1", type="integer")
     */
    private $nestedValue1;

    /**
     * @var string
     *
     * @ElasticORM\Field(name="nested_val_2", type="string")
     */
    private $nestedValue2;

    /**
     * @return int
     */
    public function getnestedValue1()
    {
        return $this->nestedValue1;
    }

    /**
     * @param int $customNumericField
     * @return FooType
     */
    public function setnestedValue1($customNumericField)
    {
        $this->nestedValue1 = $customNumericField;

        return $this;
    }

    /**
     * @return string
     */
    public function getnestedValue2()
    {
        return $this->nestedValue2;
    }

    /**
     * @param string $customField
     * @return FooType
     */
    public function setnestedValue2($customField)
    {
        $this->nestedValue2 = $customField;

        return $this;
    }
}