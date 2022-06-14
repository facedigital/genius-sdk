<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateSection StructType
 * @subpackage Structs
 */
class UpdateSection extends AbstractStructBase
{
    /**
     * The sectionID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $sectionID;
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
     * Constructor method for UpdateSection
     * @uses UpdateSection::setSectionID()
     * @uses UpdateSection::setToken()
     * @uses UpdateSection::setSectionInfo()
     * @param int $sectionID
     * @param string $token
     * @param \StructType\SectionInformation $sectionInfo
     */
    public function __construct(int $sectionID, ?string $token = null, ?\StructType\SectionInformation $sectionInfo = null)
    {
        $this
            ->setSectionID($sectionID)
            ->setToken($token)
            ->setSectionInfo($sectionInfo);
    }
    /**
     * Get sectionID value
     * @return int
     */
    public function getSectionID(): int
    {
        return $this->sectionID;
    }
    /**
     * Set sectionID value
     * @param int $sectionID
     * @return \StructType\UpdateSection
     */
    public function setSectionID(int $sectionID): self
    {
        // validation for constraint: int
        if (!is_null($sectionID) && !(is_int($sectionID) || ctype_digit($sectionID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sectionID, true), gettype($sectionID)), __LINE__);
        }
        $this->sectionID = $sectionID;
        
        return $this;
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
     * @return \StructType\UpdateSection
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
     * @return \StructType\UpdateSection
     */
    public function setSectionInfo(?\StructType\SectionInformation $sectionInfo = null): self
    {
        $this->sectionInfo = $sectionInfo;
        
        return $this;
    }
}
