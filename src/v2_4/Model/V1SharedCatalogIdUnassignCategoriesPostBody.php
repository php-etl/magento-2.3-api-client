<?php

namespace Kiboko\Magento\v2_4\Model;

class V1SharedCatalogIdUnassignCategoriesPostBody
{
    /**
     *
     *
     * @var CatalogDataCategoryInterface[]
     */
    protected $categories;
    /**
     *
     *
     * @return CatalogDataCategoryInterface[]
     */
    public function getCategories(): array
    {
        return $this->categories;
    }
    /**
     *
     *
     * @param CatalogDataCategoryInterface[] $categories
     *
     * @return self
     */
    public function setCategories(array $categories): self
    {
        $this->categories = $categories;
        return $this;
    }
}
