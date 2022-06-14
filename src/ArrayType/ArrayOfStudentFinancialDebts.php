<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfStudentFinancialDebts ArrayType
 * @subpackage Arrays
 */
class ArrayOfStudentFinancialDebts extends AbstractStructArrayBase
{
    /**
     * The StudentFinancialDebts
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\StudentFinancialDebts[]
     */
    protected ?array $StudentFinancialDebts = null;
    /**
     * Constructor method for ArrayOfStudentFinancialDebts
     * @uses ArrayOfStudentFinancialDebts::setStudentFinancialDebts()
     * @param \StructType\StudentFinancialDebts[] $studentFinancialDebts
     */
    public function __construct(?array $studentFinancialDebts = null)
    {
        $this
            ->setStudentFinancialDebts($studentFinancialDebts);
    }
    /**
     * Get StudentFinancialDebts value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\StudentFinancialDebts[]
     */
    public function getStudentFinancialDebts(): ?array
    {
        return isset($this->StudentFinancialDebts) ? $this->StudentFinancialDebts : null;
    }
    /**
     * This method is responsible for validating the values passed to the setStudentFinancialDebts method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStudentFinancialDebts method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStudentFinancialDebtsForArrayConstraintsFromSetStudentFinancialDebts(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfStudentFinancialDebtsStudentFinancialDebtsItem) {
            // validation for constraint: itemType
            if (!$arrayOfStudentFinancialDebtsStudentFinancialDebtsItem instanceof \StructType\StudentFinancialDebts) {
                $invalidValues[] = is_object($arrayOfStudentFinancialDebtsStudentFinancialDebtsItem) ? get_class($arrayOfStudentFinancialDebtsStudentFinancialDebtsItem) : sprintf('%s(%s)', gettype($arrayOfStudentFinancialDebtsStudentFinancialDebtsItem), var_export($arrayOfStudentFinancialDebtsStudentFinancialDebtsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The StudentFinancialDebts property can only contain items of type \StructType\StudentFinancialDebts, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set StudentFinancialDebts value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\StudentFinancialDebts[] $studentFinancialDebts
     * @return \ArrayType\ArrayOfStudentFinancialDebts
     */
    public function setStudentFinancialDebts(?array $studentFinancialDebts = null): self
    {
        // validation for constraint: array
        if ('' !== ($studentFinancialDebtsArrayErrorMessage = self::validateStudentFinancialDebtsForArrayConstraintsFromSetStudentFinancialDebts($studentFinancialDebts))) {
            throw new InvalidArgumentException($studentFinancialDebtsArrayErrorMessage, __LINE__);
        }
        if (is_null($studentFinancialDebts) || (is_array($studentFinancialDebts) && empty($studentFinancialDebts))) {
            unset($this->StudentFinancialDebts);
        } else {
            $this->StudentFinancialDebts = $studentFinancialDebts;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\StudentFinancialDebts|null
     */
    public function current(): ?\StructType\StudentFinancialDebts
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\StudentFinancialDebts|null
     */
    public function item($index): ?\StructType\StudentFinancialDebts
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\StudentFinancialDebts|null
     */
    public function first(): ?\StructType\StudentFinancialDebts
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\StudentFinancialDebts|null
     */
    public function last(): ?\StructType\StudentFinancialDebts
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\StudentFinancialDebts|null
     */
    public function offsetGet($offset): ?\StructType\StudentFinancialDebts
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\StudentFinancialDebts $item
     * @return \ArrayType\ArrayOfStudentFinancialDebts
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\StudentFinancialDebts) {
            throw new InvalidArgumentException(sprintf('The StudentFinancialDebts property can only contain items of type \StructType\StudentFinancialDebts, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string StudentFinancialDebts
     */
    public function getAttributeName(): string
    {
        return 'StudentFinancialDebts';
    }
}
