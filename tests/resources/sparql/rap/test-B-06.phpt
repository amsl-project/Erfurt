return array(
    'name'              => 'ask-02.rq',
    'group'             => 'RAP Ask Test Cases',
    'result_form'       => 'select',
    'query'             => 'PREFIX  ns: <http://rdf.hp.com/ns#>
    SELECT  ?z
    WHERE
        { ?x ?y ?z . 
          FILTER ( ( str(?z) = "value" ) && ( datatype(?z) = ns:someType ) ) .
        }'
);
