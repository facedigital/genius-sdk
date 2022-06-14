<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAffiliationsResponse StructType
 * @subpackage Structs
 */
class GetAffiliationsResponse extends AbstractStructBase
{
    /**
     * The GetAffiliationsResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GetAffiliationsResult|null
     */
    protected ?\StructType\GetAffiliationsResult $GetAffiliationsResult = null;
    /**
     * Constructor method for GetAffiliationsResponse
     * @uses GetAffiliationsResponse::setGetAffiliationsResult()
     * @param \StructType\GetAffiliationsResult $getAffiliationsResult
     */
    public function __construct(?\StructType\GetAffiliationsResult $getAffiliationsResult = null)
    {
        $this
            ->setGetAffiliationsResult($getAffiliationsResult);
    }
    /**
     * Get GetAffiliationsResult value
     * @return \StructType\GetAffiliationsResult|null
     */
    public function getGetAffiliationsResult(): ?\StructType\GetAffiliationsResult
    {
        return $this->GetAffiliationsResult;
    }
    /**
     * Set GetAffiliationsResult value
     * @param \StructType\GetAffiliationsResult $getAffiliationsResult
     * @return \StructType\GetAffiliationsResponse
     */
    public function setGetAffiliationsResult(?\StructType\GetAffiliationsResult $getAffiliationsResult = null): self
    {
        $this->GetAffiliationsResult = $getAffiliationsResult;
        
        return $this;
    }
}
