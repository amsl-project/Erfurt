return array(
    'name'              => 'ask-02.rq',
    'group'             => 'RAP Ask Test Cases',
    'result_form'       => 'select',
    'query'             => 'PREFIX  xsd: <http://www.w3.org/2001/XMLSchema#>
    PREFIX  : <http://example.org/ns#>
    SELECT  ?a
    WHERE
        { ?a :p ?v . 
          FILTER (?v) .
        }'
);
