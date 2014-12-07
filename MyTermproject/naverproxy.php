$this->load->library('NaverSearch');

$this->naversearch->target = "blog";

$this->naversearch->query = "맛집";

echo $this->naversearch->getSearch();

