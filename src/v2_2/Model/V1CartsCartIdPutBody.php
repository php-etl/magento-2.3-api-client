<?php

namespace Kiboko\Magento\v2_2\Model;

class V1CartsCartIdPutBody
{
    /**
     * The customer ID.
     *
     * @var int
     */
    protected $customerId;
    /**
     *
     *
     * @var int
     */
    protected $storeId;
    /**
     * The customer ID.
     *
     * @return int
     */
    public function getCustomerId(): int
    {
        return $this->customerId;
    }
    /**
     * The customer ID.
     *
     * @param int $customerId
     *
     * @return self
     */
    public function setCustomerId(int $customerId): self
    {
        $this->customerId = $customerId;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getStoreId(): int
    {
        return $this->storeId;
    }
    /**
     *
     *
     * @param int $storeId
     *
     * @return self
     */
    public function setStoreId(int $storeId): self
    {
        $this->storeId = $storeId;
        return $this;
    }
}
