<?php

namespace Kiboko\Magento\v2_1\Model;

class V1NegotiableCartsCartIdEstimateShippingMethodsByAddressIdPostBody
{
    /**
     * The estimate address id
     *
     * @var int
     */
    protected $addressId;
    /**
     * The estimate address id
     *
     * @return int
     */
    public function getAddressId(): int
    {
        return $this->addressId;
    }
    /**
     * The estimate address id
     *
     * @param int $addressId
     *
     * @return self
     */
    public function setAddressId(int $addressId): self
    {
        $this->addressId = $addressId;
        return $this;
    }
}
