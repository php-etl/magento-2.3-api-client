<?php

namespace Kiboko\Magento\v2_3\Model;

class V1BundleProductsOptionsOptionIdPutBody
{
    /**
     * Interface OptionInterface
     *
     * @var BundleDataOptionInterface
     */
    protected $option;
    /**
     * Interface OptionInterface
     *
     * @return BundleDataOptionInterface
     */
    public function getOption(): BundleDataOptionInterface
    {
        return $this->option;
    }
    /**
     * Interface OptionInterface
     *
     * @param BundleDataOptionInterface $option
     *
     * @return self
     */
    public function setOption(BundleDataOptionInterface $option): self
    {
        $this->option = $option;
        return $this;
    }
}
