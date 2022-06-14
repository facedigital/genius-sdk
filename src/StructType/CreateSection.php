<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateSection StructType
 * @subpackage Structs
 */
class CreateSection extends AbstractStructBase
{
    /**
     * The Token
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Token = null;
    /**
     * The sectionInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\SectionInformation|null
     */
    protected ?\StructType\SectionInformation $sectionInfo = null;
    /**
     * Constructor method for CreateSection
     * @uses CreateSection::setToken()
     * @uses CreateSection::setSectionInfo()
     * @param string $token
     * @param \StructType\SectionInformation $sectionInfo
     */
    public function __construct(?string $token = null, ?\StructType\SectionInformation $sectionInfo = null)
    {
        $this
            ->setToken($token)
            ->setSectionInfo($sectionInfo);
    }
    /**
     * Get Token value
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->Token;
    }
    /**
     * Set Token value
     * @param string $token
     * @return \StructType\CreateSection
     */
    public function setToken(?string $token = null): self
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($token, true), gettype($token)), __LINE__);
        }
        $this->Token = $token;
        
        return $this;
    }
    /**
     * Get sectionInfo value
     * @return \StructType\SectionInformation|null
     */
    public function getSectionInfo(): ?\StructType\SectionInformation
    {
        return $this->sectionInfo;
    }
    /**
     * Set sectionInfo value
     * @param \StructType\SectionInformation $sectionInfo
     * @return \StructType\CreateSection
     */
    public function setSectionInfo(?\StructType\SectionInformation $sectionInfo = null): self
    {
        $this->sectionInfo = $sectionInfo;
        
        return $this;
    }
}
