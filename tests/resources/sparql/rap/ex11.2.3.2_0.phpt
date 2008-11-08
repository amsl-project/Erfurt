return array(
    'name'              => 'ask-02.rq',
    'group'             => 'RAP Ask Test Cases',
    'result_form'       => 'select',
    'query'             => 'PREFIX foaf: <http://xmlns.com/foaf/0.1/>
    PREFIX dc:   <http://purl.org/dc/elements/1.1/>
    SELECT ?name ?givenName
     WHERE { { ?x foaf:name  ?name } UNION { ?x foaf:givenName ?givenName; dc:created ?created } .
             FILTER ( bound(?name) || ?created < "2005-01-01T00:00:00Z" ) }'
);


