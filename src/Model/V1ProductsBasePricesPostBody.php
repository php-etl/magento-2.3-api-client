<?php

namespace Kiboko\Magento\Model;

class V1ProductsBasePricesPostBody
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var CatalogDataBasePriceInterface[]|null
     */
    protected $prices;
    /**
     * 
     *
     * @return CatalogDataBasePriceInterface[]|null
     */
    public function getPrices() : ?array
    {
        return $this->prices;
    }
    /**
     * 
     *
     * @param CatalogDataBasePriceInterface[]|null $prices
     *
     * @return self
     */
    public function setPrices(?array $prices) : self
    {
        $this->initialized['prices'] = true;
        $this->prices = $prices;
        return $this;
    }
}