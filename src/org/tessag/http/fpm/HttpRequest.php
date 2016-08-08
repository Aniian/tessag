<?php
/**
 * Created by @panyao on 2016/7/18.
 * @author panyao
 * @email sunny17178@163.com
 * @coding.net https://coding.net/u/pandaxia
 */

namespace org\tessag\http\fpm;

use org\tessag\http\IRequest;
use org\tessag\http\streams\ResourceStream;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UriInterface;

final class HttpRequest implements IRequest
{
    private $_uri;

    public function __construct(){
        $this->_uri = new URI();
    }

    public function getProtocolVersion()
    {
        return '1.1';
    }

    public function withProtocolVersion($version)
    {

    }

    public function getParameter($name)
    {
        $params = $this->getServerParams();
        return isset($params[$name]) ? $params[$name] : '';
    }

    public function getQueryParameter($name)
    {
        $params = $this->getQueryParams();
        return isset($params[$name]) ? $params[$name] : '';
    }


    public function getHeaders()
    {

    }

    public function hasHeader($name)
    {

    }

    public function getHeader($name)
    {
    }

    public function getHeaderLine($name)
    {
        // TODO: Implement getHeaderLine() method.
    }

    public function withHeader($name, $value)
    {

    }

    public function withAddedHeader($name, $value)
    {
        // TODO: Implement withAddedHeader() method.
    }

    public function withoutHeader($name)
    {
        // TODO: Implement withoutHeader() method.
    }

    public function getBody()
    {
        return new ResourceStream(fopen('php://input', 'r'));
    }

    public function withBody(StreamInterface $body)
    {
        throw new \ErrorException('what the fuck?!');
    }

    public function getRequestTarget()
    {
        // TODO: Implement getRequestTarget() method.
    }

    public function withRequestTarget($requestTarget)
    {
        // TODO: Implement withRequestTarget() method.
    }

    public function getMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function withMethod($method)
    {
        throw new \ErrorException('what the fuck?!');
    }

    public function getUri()
    {
        // REDIRECT_URL
        return $this->_uri;
    }

    public function withUri(UriInterface $uri, $preserveHost = false)
    {
        // TODO: Implement withUri() method.
    }

    public function getServerParams()
    {

    }

    public function getCookieParams()
    {

    }

    public function withCookieParams(array $cookies)
    {

    }

    public function getQueryParams()
    {
        return $this->_uri->getQuery();
    }

    public function withQueryParams(array $query)
    {
        // TODO: Implement withQueryParams() method.
    }

    public function getUploadedFiles()
    {
        // TODO: Implement getUploadedFiles() method.
    }

    public function withUploadedFiles(array $uploadedFiles)
    {
        // TODO: Implement withUploadedFiles() method.
    }

    public function getParsedBody()
    {
        return $_POST;
    }

    public function withParsedBody($data)
    {
        // TODO: Implement withParsedBody() method.
    }

    public function getAttributes()
    {
        // TODO: Implement getAttributes() method.
    }

    public function getAttribute($name, $default = null)
    {
        // TODO: Implement getAttribute() method.
    }

    public function withAttribute($name, $value)
    {
        // TODO: Implement withAttribute() method.
    }

    public function withoutAttribute($name)
    {
        // TODO: Implement withoutAttribute() method.
    }

}