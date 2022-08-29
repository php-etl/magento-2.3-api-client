<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class GetV1CustomerGroupsDefaultByStoreId extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    protected $storeId;
    /**
     * Get default customer group.
     *
     * @param int $storeId
     */
    public function __construct(int $storeId)
    {
        $this->storeId = $storeId;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{storeId}'), array($this->storeId), '/V1/customerGroups/default/{storeId}');
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
     * @throws \Kiboko\Magento\v2_2\Exception\GetV1CustomerGroupsDefaultByStoreIdBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\GetV1CustomerGroupsDefaultByStoreIdUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\GetV1CustomerGroupsDefaultByStoreIdInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\CustomerDataGroupInterface|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\CustomerDataGroupInterface', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\v2_2\Exception\GetV1CustomerGroupsDefaultByStoreIdBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\v2_2\Exception\GetV1CustomerGroupsDefaultByStoreIdUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\v2_2\Exception\GetV1CustomerGroupsDefaultByStoreIdInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
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
