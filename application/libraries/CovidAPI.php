<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// Include the REST LIB
require_once ('Rest_request.php');

class CovidAPI {

    function __construct() {
        //$this->url = 'https://www.facethechildren.org/si/ftc';
    }

    function get_summary($params) {
        $rest = new Rest_request($params);
        $rest->execute();
        $result = $rest->getResponseBody();
        return json_decode($result, true);
//        return $rest->getCurlError();
    }

    function deleteWallet($SID, $wid) {
        $data = array(
            'cmd' => 'delete',
            'cid' => $SID,
            'wid' => $wid
        );
//        $params['data'] = http_build_query($data);
//        $params['verb'] = 'POST';
//        $params['url'] = $this->url;
        
        $params['data'] = null;
        $params['url'] = $this->url .'?'.http_build_query($data);
        $params['verb'] = 'GET';

        $rest = new Rest_request($params);
        $rest->execute();
        $result = $rest->getResponseBody();
        $djson = json_decode($result);
        return $djson;
//        return $rest->getCurlError();
    }

    function getCCExpiration($intuits) {
        $mh = curl_multi_init();
        foreach ($intuits as $intuit) :
            if ($intuit->recurring) :
                $urldata = array(
                    'cmd' => 'query',
                    'cid' => $intuit->customerID,
                    'wid' => $intuit->walletID
                );
                $url = $this->url .'?'.http_build_query($urldata);
                $ch[$intuit->PIID] = curl_init();

                curl_setopt($ch[$intuit->PIID], CURLOPT_TIMEOUT, 120);

                curl_setopt($ch[$intuit->PIID], CURLOPT_SSL_VERIFYHOST, true);
                curl_setopt($ch[$intuit->PIID], CURLOPT_SSL_VERIFYPEER, false);

                curl_setopt($ch[$intuit->PIID], CURLOPT_URL, $url);
                curl_setopt($ch[$intuit->PIID], CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch[$intuit->PIID], CURLOPT_HTTPHEADER,
                    array('Accept: application/json', 'Content-Type: application/json', 'User-Agent: Curl-Rest')
                );

                curl_multi_add_handle($mh, $ch[$intuit->PIID]);
            endif;
        endforeach;

        // execute all queries simultaneously, and continue when all are complete
        $running = null;
        do {
            curl_multi_exec($mh, $running);
        } while ($running);

        foreach ($intuits as $intuit) :
            if ($intuit->recurring) :
                $data[$intuit->PIID] = json_decode(curl_multi_getcontent($ch[$intuit->PIID]));
                curl_multi_remove_handle($mh, $ch[$intuit->PIID]);
            endif;
        endforeach;
        curl_multi_close($mh);

        return $data;
    }
}
