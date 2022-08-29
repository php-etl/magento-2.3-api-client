<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class CatalogCategoryLinkManagementV1GetAssignedProductsGet extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    protected $categoryId;
    /**
     * Get products assigned to category
     *
     * @param int $categoryId
     */
    public function __construct(int $categoryId)
    {
        $this->categoryId = $categoryId;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{categoryId}'), array($this->categoryId), '/V1/categories/{categoryId}/products');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogCategoryLinkManagementV1GetAssignedProductsGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\CatalogDataCategoryProductLinkInterface[]|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\CatalogDataCategoryProductLinkInterface[]', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\v2_2\Exception\CatalogCategoryLinkManagementV1GetAssignedProductsGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
