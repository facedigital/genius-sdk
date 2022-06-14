<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EnvironmentInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EnvironmentInfo
 * @subpackage Structs
 */
class EnvironmentInfo extends AbstractStructBase
{
    /**
     * The GalileoBuildDateUTC
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $GalileoBuildDateUTC = null;
    /**
     * The GalileoBuildDateLocal
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $GalileoBuildDateLocal = null;
    /**
     * The TimeZone
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TimeZone = null;
    /**
     * Constructor method for EnvironmentInfo
     * @uses EnvironmentInfo::setGalileoBuildDateUTC()
     * @uses EnvironmentInfo::setGalileoBuildDateLocal()
     * @uses EnvironmentInfo::setTimeZone()
     * @param string $galileoBuildDateUTC
     * @param string $galileoBuildDateLocal
     * @param string $timeZone
     */
    public function __construct(?string $galileoBuildDateUTC = null, ?string $galileoBuildDateLocal = null, ?string $timeZone = null)
    {
        $this
            ->setGalileoBuildDateUTC($galileoBuildDateUTC)
            ->setGalileoBuildDateLocal($galileoBuildDateLocal)
            ->setTimeZone($timeZone);
    }
    /**
     * Get GalileoBuildDateUTC value
     * @return string|null
     */
    public function getGalileoBuildDateUTC(): ?string
    {
        return $this->GalileoBuildDateUTC;
    }
    /**
     * Set GalileoBuildDateUTC value
     * @param string $galileoBuildDateUTC
     * @return \StructType\EnvironmentInfo
     */
    public function setGalileoBuildDateUTC(?string $galileoBuildDateUTC = null): self
    {
        // validation for constraint: string
        if (!is_null($galileoBuildDateUTC) && !is_string($galileoBuildDateUTC)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($galileoBuildDateUTC, true), gettype($galileoBuildDateUTC)), __LINE__);
        }
        $this->GalileoBuildDateUTC = $galileoBuildDateUTC;
        
        return $this;
    }
    /**
     * Get GalileoBuildDateLocal value
     * @return string|null
     */
    public function getGalileoBuildDateLocal(): ?string
    {
        return $this->GalileoBuildDateLocal;
    }
    /**
     * Set GalileoBuildDateLocal value
     * @param string $galileoBuildDateLocal
     * @return \StructType\EnvironmentInfo
     */
    public function setGalileoBuildDateLocal(?string $galileoBuildDateLocal = null): self
    {
        // validation for constraint: string
        if (!is_null($galileoBuildDateLocal) && !is_string($galileoBuildDateLocal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($galileoBuildDateLocal, true), gettype($galileoBuildDateLocal)), __LINE__);
        }
        $this->GalileoBuildDateLocal = $galileoBuildDateLocal;
        
        return $this;
    }
    /**
     * Get TimeZone value
     * @return string|null
     */
    public function getTimeZone(): ?string
    {
        return $this->TimeZone;
    }
    /**
     * Set TimeZone value
     * @param string $timeZone
     * @return \StructType\EnvironmentInfo
     */
    public function setTimeZone(?string $timeZone = null): self
    {
        // validation for constraint: string
        if (!is_null($timeZone) && !is_string($timeZone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeZone, true), gettype($timeZone)), __LINE__);
        }
        $this->TimeZone = $timeZone;
        
        return $this;
    }
}
