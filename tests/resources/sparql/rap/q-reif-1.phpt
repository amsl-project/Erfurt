return array(
    'name'              => 'ask-02.rq',
    'group'             => 'RAP Ask Test Cases',
    'result_form'       => 'construct',
    'query'             => 'PREFIX  rdf:   <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
    CONSTRUCT
      { _:b0 rdf:subject ?s .
        _:b0 rdf:predicate ?p .
        _:b0 rdf:object ?o .
      }
    WHERE
      { ?s ?p ?o . }
    ORDER BY ?s ?o'
);