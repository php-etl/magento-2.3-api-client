<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class TemandoShippingCollectionPointGuestCartCollectionPointManagementV1SaveSearchRequestPut extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    protected $cartId;
    /**
     *
     *
     * @param string $cartId
     * @param null|\Kiboko\Magento\v2_4\Model\V1GuestCartsCartIdCollectionPointSearchRequestPutBody $requestBody
     */
    public function __construct(string $cartId, ?\Kiboko\Magento\v2_4\Model\V1GuestCartsCartIdCollectionPointSearchRequestPutBody $requestBody = null)
    {
        $this->cartId = $cartId;
        $this->body = $requestBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/guest-carts/{cartId}/collection-point/search-request');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Kiboko\Magento\v2_4\Model\V1GuestCartsCartIdCollectionPointSearchRequestPutBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if ($this->body instanceof \Kiboko\Magento\v2_4\Model\V1GuestCartsCartIdCollectionPointSearchRequestPutBody) {
            return array(array('Content-Type' => array('application/xml')), $this->body);
        }
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_4\Exception\TemandoShippingCollectionPointGuestCartCollectionPointManagementV1SaveSearchRequestPutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\TemandoShippingDataCollectionPointSearchRequestInterface|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\TemandoShippingDataCollectionPointSearchRequestInterface', 'json');
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\v2_4\Exception\TemandoShippingCollectionPointGuestCartCollectionPointManagementV1SaveSearchRequestPutInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
