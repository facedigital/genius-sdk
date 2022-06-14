<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEnvironmentInfoResponse StructType
 * @subpackage Structs
 */
class GetEnvironmentInfoResponse extends AbstractStructBase
{
    /**
     * The GetEnvironmentInfoResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EnvironmentInfo|null
     */
    protected ?\StructType\EnvironmentInfo $GetEnvironmentInfoResult = null;
    /**
     * Constructor method for GetEnvironmentInfoResponse
     * @uses GetEnvironmentInfoResponse::setGetEnvironmentInfoResult()
     * @param \StructType\EnvironmentInfo $getEnvironmentInfoResult
     */
    public function __construct(?\StructType\EnvironmentInfo $getEnvironmentInfoResult = null)
    {
        $this
            ->setGetEnvironmentInfoResult($getEnvironmentInfoResult);
    }
    /**
     * Get GetEnvironmentInfoResult value
     * @return \StructType\EnvironmentInfo|null
     */
    public function getGetEnvironmentInfoResult(): ?\StructType\EnvironmentInfo
    {
        return $this->GetEnvironmentInfoResult;
    }
    /**
     * Set GetEnvironmentInfoResult value
     * @param \StructType\EnvironmentInfo $getEnvironmentInfoResult
     * @return \StructType\GetEnvironmentInfoResponse
     */
    public function setGetEnvironmentInfoResult(?\StructType\EnvironmentInfo $getEnvironmentInfoResult = null): self
    {
        $this->GetEnvironmentInfoResult = $getEnvironmentInfoResult;
        
        return $this;
    }
}
