return array(
    'name'              => 'ask-02.rq',
    'group'             => 'RAP Ask Test Cases',
    'result_form'       => 'select',
    'query'             => 'BASE <http://example.org/x/> 
    PREFIX : <#>

    SELECT * WHERE { :x ?p ?v }'
);
 
