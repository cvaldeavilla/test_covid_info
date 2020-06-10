<?php 
class Rest_request {

    protected $url;
    protected $verb;
    protected $requestBody;
    protected $requestLength;
    protected $username;
    protected $password;
    protected $acceptType;
    protected $responseBody;
    protected $responseInfo;
    protected $curlError;

    public function __construct($params) {
		$url = (isset($params['url'])) ? $params['url'] : null;
        $verb = (isset($params['verb'])) ? $params['verb'] : 'GET';
        $requestBody = (isset($params['data'])) ? $params['data'] : null;
        
        $this->url = $url;
        $this->verb = $verb;
        $this->requestBody = $requestBody;
        $this->requestLength = 0;
        $this->username = null;
        $this->password = null;
//        $this->acceptType = 'text/plain';
        $this->acceptType = 'application/json';
        $this->responseBody = null;
        $this->responseInfo = null;
        $this->curlError = null;
    }

    public function flush() {
        $this->requestBody = null;
        $this->requestLength = 0;
        $this->verb = 'GET';
        $this->responseBody = null;
        $this->responseInfo = null;
    }

    public function execute() {
        $ch = curl_init();
        $this->setAuth($ch);

        try {
            switch (strtoupper($this->verb)) {
                case 'GET':
                    $this->executeGet($ch);
                    break;
                case 'POST':
                    $this->executePost($ch);
                    break;
                case 'PUT':
                    $this->executePut($ch);
                    break;
                case 'DELETE':
                    $this->executeDelete($ch);
                    break;
                default:
                    throw new InvalidArgumentException('Current verb (' . $this->verb . ') is an invalid REST verb.');
            }
        } catch (InvalidArgumentException $e) {
            curl_close($ch);
            throw $e;
        } catch (Exception $e) {
            curl_close($ch);
            throw $e;
        }
    }

    protected function executeGet($ch) {
        $this->doExecute($ch);
    }

    protected function executePost($ch) {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->requestBody);

        $this->doExecute($ch);
    }

    protected function executePut($ch) {
        $this->requestLength = strlen($this->requestBody);

        $fh = fopen('php://memory', 'rw');
        fwrite($fh, $this->requestBody);
        rewind($fh);

        curl_setopt($ch, CURLOPT_INFILE, $fh);
        curl_setopt($ch, CURLOPT_INFILESIZE, $this->requestLength);
        curl_setopt($ch, CURLOPT_PUT, true);

        $this->doExecute($ch);

        fclose($fh);
    }

    protected function executeDelete($ch) {
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');

        $this->doExecute($ch);
    }

    protected function doExecute($curlHandle) {
        $this->setCurlOpts($curlHandle);
        $this->responseBody = curl_exec($curlHandle);
        $this->responseInfo = curl_getinfo($curlHandle);
        $this->curlError = curl_error($curlHandle);

        curl_close($curlHandle);
    }

    protected function setCurlOpts($curlHandle) {
        curl_setopt($curlHandle, CURLOPT_TIMEOUT, 10);
        
//        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, true);
//        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, false);
        
        curl_setopt($curlHandle, CURLOPT_URL, $this->url);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlHandle, CURLOPT_HTTPHEADER, array('Accept: ' . $this->acceptType, 'Content-Type: ' . $this->acceptType,'User-Agent: Curl-Rest'));
    }

    protected function setAuth($curlHandle) {
        if ($this->username !== null && $this->password !== null) {
//			curl_setopt($curlHandle, CURLOPT_HTTPAUTH, CURLAUTH_DIGEST);
            curl_setopt($curlHandle, CURLOPT_USERPWD, $this->username . ':' . $this->password);
        }
    }

    public function getAcceptType() {
        return $this->acceptType;
    }

    public function setAcceptType($acceptType) {
        $this->acceptType = $acceptType;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getResponseBody() {
        return $this->responseBody;
    }

    public function getResponseInfo() {
        return $this->responseInfo;
    }
    
    public function getCurlError() {
        return $this->curlError;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getVerb() {
        return $this->verb;
    }

    public function setVerb($verb) {
        $this->verb = $verb;
    }

    public function test() {
        echo "hello testing";
    }

}
