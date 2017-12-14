SALE: SUCCESS
_REQUEST_
    POST /Payments/Services_api.aspx
    mkey=HSOHEEC0N5GF5FQQ5YTZ6PNT
    transtype=sale
    cardnum=4111111111111111
    cardexp=1019
    amount=3.77
    zip=671223

_RESPONSE_
    response=1&textresponse=++NO++MATCH+++++&transid=11179104&xref=000000000083577&authcode=TAS431&orderid=&type=sale&avsresponse=N&cvvresponse=&coderesponse=00&codedescription=Approved+and+completed&status=200&cardlevelresults=A+&commercialcardindicator=0

_RESPONSE CLEAN_
    response=1
    textresponse=++NO++MATCH+++++
    transid=11179104
    xref=000000000083577
    authcode=TAS431
    orderid=
    type=sale
    avsresponse=N
    cvvresponse=
    coderesponse=00
    codedescription=Approved+and+completed
    status=200
    cardlevelresults=A+
    commercialcardindicator=0

======

SALE: FAIL - flagged for review

_REQUEST_
    POST /Payments/Services_api.aspx
    mkey=HSOHEEC0N5GF5FQQ5YTZ6PNT
    transtype=sale
    cardnum=4111111111111111
    cardexp=1019
    amount=1.55
    zip=671223

_RESPONSE_
    response=3&textresponse=Flagged+for+Review+by+Velocity+and+Duplicates+Policy+(Duplicate+Sale+Transactions+Rule).+Original+Transaction+ID%3a+11181094&transid=11181318&xref=&authcode=&orderid=&type=sale&avsresponse=&cvvresponse=&coderesponse=&codedescription=&status=300&origtransid=11181094&origresponse=1&origtextresponse=++NO++MATCH+++++

_RESPONSE CLEAN_
    response=3
    textresponse=Flagged+for+Review+by+Velocity+and+Duplicates+Policy+(Duplicate+Sale+Transactions+Rule).+Original+Transaction+ID%3a+11181094
    transid=11181318
    xref=
    authcode=
    orderid=
    type=sale
    avsresponse=
    cvvresponse=
    coderesponse=
    codedescription=
    status=300
    origtransid=11181094
    origresponse=1
    origtextresponse=++NO++MATCH+++++

======

SALE: FAIL - no `zip` field
_REQUEST_
    POST /Payments/Services_api.aspx
    mkey=HSOHEEC0N5GF5FQQ5YTZ6PNT
    transtype=sale
    cardnum=4111111111111111
    cardexp=1019
    amount=3.77

_RESPONSE_
    response=3&textresponse=Required+payment+field+zip+is+missing&transid=11179809&xref=&authcode=&orderid=&type=sale&avsresponse=&cvvresponse=&coderesponse=&codedescription=&status=500

_RESPONSE CLEAN_
    response=3
    textresponse=Required+payment+field+zip+is+missing
    transid=11179809
    xref=
    authcode=
    orderid=
    type=sale
    avsresponse=
    cvvresponse=
    coderesponse=
    codedescription=
    status=500

======

SALE: FAIL - decline, `amount` set < 1.00
_REQUEST_
    POST /Payments/Services_api.aspx
    mkey=HSOHEEC0N5GF5FQQ5YTZ6PNT
    transtype=sale
    cardnum=4111111111111111
    cardexp=1019
    amount=0.23
    zip=671223

_RESPONSE_
    response=2&textresponse=++++DECLINE+++++&transid=11179996&xref=000000000083894&authcode=++++++&orderid=&type=sale&avsresponse=N&cvvresponse=&coderesponse=61&codedescription=Exceeds+withdrawal+limit&status=400

_RESPONSE CLEAN_
    response=2
    textresponse=++++DECLINE+++++
    transid=11179996
    xref=000000000083894
    authcode=++++++
    orderid=
    type=sale
    avsresponse=N
    cvvresponse=
    coderesponse=61
    codedescription=Exceeds+withdrawal+limit
    status=400

======

SALE: FAIL - verification error, invalid `cardnum`
_REQUEST_
    POST /Payments/Services_api.aspx
    mkey=HSOHEEC0N5GF5FQQ5YTZ6PNT
    transtype=sale
    cardnum=41111111111111119
    cardexp=1019
    amount=3.77
    zip=671223

_RESPONSE_
    response=2&textresponse=+CHECK+DIGIT+ERR&transid=11180346&xref=&authcode=++++++&orderid=&type=sale&avsresponse=0&cvvresponse=&coderesponse=EB&codedescription=Verification+error&status=400

_RESPONSE CLEAN_
    response=2
    textresponse=+CHECK+DIGIT+ERR
    transid=11180346
    xref=
    authcode=++++++
    orderid=
    type=sale
    avsresponse=0
    cvvresponse=
    coderesponse=EB
    codedescription=Verification+error
    status=400
