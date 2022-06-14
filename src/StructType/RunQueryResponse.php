<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RunQueryResponse StructType
 * @subpackage Structs
 */
class RunQueryResponse extends AbstractStructBase
{
    /**
     * The RunQueryResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\RunQueryResult|null
     */
    protected ?\StructType\RunQueryResult $RunQueryResult = null;
    /**
     * Constructor method for RunQueryResponse
     * @uses RunQueryResponse::setRunQueryResult()
     * @param \StructType\RunQueryResult $runQueryResult
     */
    public function __construct(?\StructType\RunQueryResult $runQueryResult = null)
    {
        $this
            ->setRunQueryResult($runQueryResult);
    }
    /**
     * Get RunQueryResult value
     * @return \StructType\RunQueryResult|null
     */
    public function getRunQueryResult(): ?\StructType\RunQueryResult
    {
        return $this->RunQueryResult;
    }
    /**
     * Set RunQueryResult value
     * @param \StructType\RunQueryResult $runQueryResult
     * @return \StructType\RunQueryResponse
     */
    public function setRunQueryResult(?\StructType\RunQueryResult $runQueryResult = null): self
    {
        $this->RunQueryResult = $runQueryResult;
        
        return $this;
    }
}
