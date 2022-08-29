<?php

namespace Kiboko\Magento\v2_3\Model;

class QuoteDataCartItemExtensionInterface
{
    /**
     * Interface CompanyQuoteConfigInterface
     *
     * @var NegotiableQuoteDataNegotiableQuoteItemInterface
     */
    protected $negotiableQuoteItem;
    /**
     * Interface CompanyQuoteConfigInterface
     *
     * @return NegotiableQuoteDataNegotiableQuoteItemInterface
     */
    public function getNegotiableQuoteItem(): NegotiableQuoteDataNegotiableQuoteItemInterface
    {
        return $this->negotiableQuoteItem;
    }
    /**
     * Interface CompanyQuoteConfigInterface
     *
     * @param NegotiableQuoteDataNegotiableQuoteItemInterface $negotiableQuoteItem
     *
     * @return self
     */
    public function setNegotiableQuoteItem(NegotiableQuoteDataNegotiableQuoteItemInterface $negotiableQuoteItem): self
    {
        $this->negotiableQuoteItem = $negotiableQuoteItem;
        return $this;
    }
}
