class NaverSearch{

 

 var $key = "94746ea41e3df3b8fcdcafd7ec4ccf72"; // 사용자가 발급받은 오픈API 키 

 var $searchUrl = "http://192.168.0.27"; // 오픈API 호출URL

 var $target = "blog";

 var $query = "맛집";

 

 function __construct() {  

 }

 

 function query($query)

 {

   $url = sprintf("%s?query=%s&target=%s&key=%s&display=100", $this->searchUrl, $this->query, $this->target, $this->key);

   $data =file_get_contents($url);

   $xml = simplexml_load_string($data);

 

   return $xml;

 }

 

 /**

  * API의 결과를 Json 으로 encode 하려 반환하는 메소드

  * XML을 직접 parsing 하지 않고 json으로 변환하여 반환한다. 

  */

 function getSearch()

 {       $xml = $this->query($this->query);

   $result = json_encode($xml);

 

   return $result; 

 }

} 


