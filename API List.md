===
### Creating a Sale
===

_Simple Sale_
    transtype=sale&mkey=MTA6MzM6NTYgUE0tLVBheVRhY3RpeALO&amount=9.95&cardnum=4111111111111111&cardexp=1010&cvv=999

_Advanced Sale_
    transtype=sale&mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&amount=57.85&cardnum=4111111111111111&cardexp=1010&cvv=999&skunumber_1=5558779&description_1=menssweaterblue&amount_1=50.00&quantity_1=1&tax=2.85&shipamount=5.00&firstname=John&lastname=Smith&address1=888+test+address&city=Los+Angeles&country=US&state=CA&phone=222-444-2938&shipfirstname=John&shiplastname=Smith&shipaddress1=888+test+address&shipcity=Los+Angeles&shipstate=CA&shipphone=2224442938

===
### Creating an Authorization and Capture
===

_Simple Authorization_
    transtype=auth&mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&amount=9.95&cardnum=4111111111111111&cardexp=1010&cvv=999

_Simple Capture_
    transtype=capture&mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&amount=9.95&transid=123456&sendtransreceipttobillemail=true

_Simple Offline Capture_
    transtype=offline&mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&amount=9.95&cardnum=4111111111111111&cardexp=1010&cvv=999&authcode=987654&authdate=03/25/2016

_Advanced Capture_
    transtype=capture&mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&amount=9.95&transid=123456&sendtransreceipttobillemail=true&orderid=54321

===
### Issuing a Refund
===

_Simple Refund_
    transtype=refund&mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&transid=12345678&amount=3.95

_Advanced Refund_
    transtype=refund&mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&transid=12345678&amount=12.00&sendtransreceipttoemails=John.Smith@email.com

===
### Issuing a Void
===

_Simple Void_
    transtype=void&mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&transid=12345678

_Advanced Void_
    transtype=void&mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&transid=12345678&sendtransreceipttoemails=John.Smith@email.com

===
### Airline Passenger Sale
===

_Passenger Sale_
    transtype=passengersale `???`

===
### Military Star Card
===

_Simple Star Card_
    transtype=sale&mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&cardnum=6019440000011111&amount=20.00&CID=52347800001

_Advanced Star Card_
    transtype=sale&mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&amount=57.85&cardnum=6019440000011111&CID=12345678911&cvv=999&skunumber_1=5558779&description_1=menssweaterblue&amount_1=50.00&quantity_1=1&tax=2.85&shipamount=5.00&firstname=John&lastname=Smith&address1=888+test+address&city=Los+Angeles&country=US&state=CA&phone=222-444-2938&shipfirstname=John&shiplastname=Smith&shipaddress1=888+test+address&shipcity=Los+Angeles&shipstate=CA&shipphone=2224442938

===
### ACH and eCheck
===

_Simple ACH_
    _ACH account type: Personal_
        transtype=sale&mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&amount=9.95&bankname=BankofAmerica&routing=123456789&account=11111999&achaccounttype=checking&achaccountsubtype=personal
    _ACH account type: Business_
        transtype=sale&mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&amount=9.95&bankname=BankofAmerica&routing=123456789&account=11111999&achaccounttype=checking&achaccountsubtype=business&company=CompanyName

_Advanced ACH_
    _ACH account type: Personal_
        transtype=sale&mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&amount=9.95&bankname=BankofAmerica&routing=123456789&account=11111999&achaccounttype=checking&achaccountsubtype=personal&firstname=Henry&lastname=Johnson&phone=8526547896&email=hjohnson@test.com
    _ACH account type: Business_
        transtype=sale&mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&amount=9.95&bankname=BankofAmerica&routing=123456789&account=11111999&achaccounttype=checking&achaccountsubtype=business&company=CompanyName&firstname=Henry&lastname=Johnson&phone=8526547896&email=hjohnson@test.com

_Simple eCheck_
    _ACH account type: Personal_
        transtype=sale&mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&amount=9.95&bankname=BankofAmerica&routing=110000000&account=1234567890123&achaccounttype=personal&firstname=Henry&lastname=Johnson&address1=Main+Street+45&city=Scottsdale&zip=12345&country=US&state=AZ
    _ACH account type: Business_
        transtype=sale&mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&amount=9.95&bankname=BankofAmerica&routing=110000000&account=1234567890123&achaccounttype=business&company=CompanyName&firstname=Henry&lastname=Johnson&address1=Main+Street+45&city=Scottsdale&zip=12345&country=US&state=AZ

_Advanced eCheck_
    _ACH account type: Personal_
        transtype=sale&mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&amount=9.95&bankname=BankofAmerica&routing=110000000&account=1234567890123&achaccounttype=personal&firstname=Henry&lastname=Johnson&address1=Main+Street+45&city=Scottsdale&zip=12345&country=US&state=AZ&phone=8526547896&email=hjohnson@test.com
    _ACH account type: Business_
        transtype=sale&mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&amount=9.95&bankname=BankofAmerica&routing=110000000&account=1234567890123&achaccounttype=business&company=CompanyName&firstname=Henry&lastname=Johnson&address1=Main+Street+45&city=Scottsdale&zip=12345&country=US&state=AZ&phone=8526547896&email=hjohnson@test.com

===
### eWallet
===

_eWallet Simple Credit_
    transtype=credit&mkey=MTA6MzM6NTYgUE0tLVBheVRhY3RpeALO&amount=9.95&ewalletaccount=user@example.com&ewallettype=paypal&currency=USD

===
### Fiserv
===

_Fiserv Simple Sale_
    transtype=sale&mkey=MTA6MzM6NTYgUE0tLVBheVRhY3RpeALO&amount=9.95&cardnum=000123456789002&cardexp=1010

_Advanced Fiserv Sale_
    transtype=sale&mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&amount=57.85&cardnum=4000123456789002&cardexp=1010&skunumber_1=5558779&description_1=menssweaterblue&amount_1=50.00&quantity_1=1&tax=2.85&shipamount=5.00&firstname=John&lastname=Smith&address1=888+test+address&city=Los+Angeles&country=US&state=CA&phone=222-444-2938&shipfirstname=John&shiplastname=Smith&shipaddress1=888+test+address&shipcity=Los+Angeles&shipstate=CA&shipphone=2224442938

===
### Chargeback Entry
===

_Marking a successful transaction as a Chargeback_
    transtype=chargeback&mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&transid=12345678&reason=fraudulent+transaction

===
### Balance Inquiry
===

_Retrieve Card Balance_
    transtype=balanceinquire&mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&amount=9.95&cardnum=4111111111111111&cardexp=0719

===
### Decrypting Custom Fields
===

_Decrypting Custom Fields_
    transtype=decrypt&mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&fieldname=socialsecurity&token=H6FV89KL156

===
### Credit Card Verification
===

_Account Verification_
    transtype=auth&mkey=HNJ45D23MKLO85J2D00LOP&cardnum=4111111111111111&cardexp=1019&amount=0.00&zip=85254

===
### Data Vault
===

_Adding a Customer_
    transtype=addcustomer&mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&firstname=Samantha&lastname=Simmons&address1=1234+N+Wells+street&city=Phoenix&state=AZ&zip=85254&email@sam@test.com&phone=4801234567&paytype_1=creditcard&cardnum_1=4111111111111111&cardexp_1=0220

_Add Customer by Payment Type_
    _Credit Card_
        mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&transtype=addcustomer&firstname=John&lastname=Doe&paytype_1=creditcard&cardnum_1=4111111111111111&cardexp_1=0220
    _ACH_
        mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&transtype=addcustomer&firstname=John&lastname=Doe&paytype_1=ach&bankname_1=wellsfargo&achaccounttype_1=checking&achaccountsubtype_1=personal&routing_1=223456&account_1=123456789
    _Star Card_
        transtype=addcustomer&mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&firstname=John&lastname=Doe&paytype_1=starcard&cardnum_1=6019440000011111&CID=52347800001
    _eWallet_
        transtype=addcustomer&mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&firstname=John&lastname=Doe&paytype_1=ewallet&ewallettype_1=paypal&ewalletaccount_1=email@email.com

_Update Customer_
    mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&transtype=updatecustomer&token=B31388EA20ABF2776C93&address1=939+St.+Winnie’s+st.&city=Forest+City

_Adding Payment Types to a Customer_
    mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&transtype=updatecustomer&token=B31388EA20ABF2776C93&operationtype_1=addpaytype&paytype_1=creditcard&cardnum_1=4111111111111111&cardexp_1=0226&firstname_1=John&lastname_1=Smith&operationtype_2=addpaytype&paytype_2=creditcard&cardnum_2=5454545454545454&cardexp_2=0720&firstname_2=John&lastname_2=Smith

_Update Payment Type_
    mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&transtype=updatecustomer&token=B31388EA20ABF2776C93&operationtype_1=updatepaytype&token_1=0HEUX6NFECQG8QCQ&cardnum_1=4111111111111112&operationtype_2=updatepaytype&token_2=4K8NSZSGGPMHGEW4&cardexp_2=0421

_Delete Payment Type_
    transtype=updatecustomer `???`

_Delete Data Vault Customer_
    mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&transtype=deletecustomer&token=B31388EA20ABF2776C93

_Retrieve Customer_
    mkey=MTA6MzM6NTYgUE0tLVBheVRhY3RpeALO&transtype=getcustomer&token=VGHBVEKS8TDRKUC2

_Retrieve Payment Type_
    mkey=MTA6MzM6NTYgUE0tLVBheVRhY3RpeALO&transtype=getcustomer&token=6AWRPCF7C4DZ6UU2

_Decrypt Payment Type_
    _Credit Card_
        mkey=MTA6MzM6NTYgUE0tLVBheVRhY3RpeALO&transtype=decrypt&token=6AWRPCF7C2DZ6UU2
    _ACH_
        mkey=MTA6MzM6NTYgUE0tLVBheVRhY3RpeALO&transtype=decrypt&token=LZCBU040WXKKXHR1
    _eCheck_
        mkey=MTA6MzM6NTYgUE0tLVBheVRhY3RpeALO&transtype=decrypt&token=A5MQFQPQ9KY8B5E1
    _Star Card_
        mkey=MTA6MzM6NTYgUE0tLVBheVRhY3RpeALO&transtype=decrypt&token=ODUFV8P12KRM8QK1
    _eWallet_
        mkey=MTA6MzM6NTYgUE0tLVBheVRhY3RpeALO&transtype=decrypt&token=3MK4184FCER633W1

_Tokenized Payments_
    mkey=MTA6MzM6NTYgUE0tLVBheVRhY3RpeALO&transtype=sale&token=0558050763310762&amount=10

===
### Creating Custom Payment Plans
===

_Creating a Payment Plan_
    transtype=addplan `???`

_Updating a Payment Plan_
    mkey=HMNK8687DVJHG45D4D3KL90&transtype=updateplan&token=HJFK87G5JBN0&userecycling=false&senderemail=accounting@test.com&reviewonassignment=false

_Building a Sequence_
    `???`

_Notification Settings_
    mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&transtype=addplan&planname=Monthly+fees&plandesc=Some+long+description.&startdate=4/13/2017&sequence_1=1&amount_1=12.45&scheduletype_1=monthly&scheduleday_1=5&duration_1=10

_Adding or Updating a Sequence_
    _Add Sequence_
        mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&transtype=updateplan&token=HJFK87G5JBN0&operationtype_1=addsequence&sequence_1=2&amount_1=9.99&scheduletype_1=monthly&scheduleday_1=5&duration_1=12
    _Update Sequence_
        mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&transtype=updateplan&token=HJFK87G5JBN0&operationtype_1=updatesequence&sequence_1=2&amount_1=10.99&scheduletype_1=monthly&scheduleday_1=5&duration_1=12

_Deleting a Sequence_
    mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&transtype=updateplan&token=HJFK87G5JBN0&operationtype_1=deletesequence&sequence_1=2

_Deleting a Plan_
    mkey=HMNK8687DVJHG45D4D3KL90&transtype=deleteplan&token=HJFK87G5JBN0&cancelpayments=true

_Assigning a Payment Plan to a Customer_
    mkey=JHG48D3V6N8HKFF3W221AA&transtype=assignplan&customertoken=HJG543D321HJK&&paymenttoken=9K7US80YUQ1LPN27&plantoken=JHG78HJGF55&startdate=10/01/2017&notifyfailures=true

_Update Payment Plan Assignment_
    mkey=JHG48D3V6N8HKFF3W221AA&transtype=updateassignment&assignmenttoken=HJG54VKJ888&startdate=11/01/2017&proratedpayment=true

_Cancel Plan Assignment_
    mkey=JHG48D3V6N8HKFF3W221AA&transtype=cancelassignment&assignmenttoken=HJG54VKJ888

===
### Invoicing
===

_Creating an Invoice_
    mkey=8VG63HD1LPBMIR5TPS7R52YV&transtype=createmerchantinvoice&customertoken=SBTQTLGTL2F31JPO&invoicedate=12/30/2017&currency=USD&invoicestatus=Draft&invoiceitemsku_1=123&invoiceitemdescription_1=Services+Rendered&invoiceitemprice_1=121.24&invoiceitemquantity_1=1.253&invoiceitemsku_2=223&invoiceitemdescription_2=desc2&invoiceitemprice_2=41.48&invoiceitemquantity_2=2.653

_Update Invoice_
    mkey=8VG63HD1LPBMIR5TPS7R52YV&transtype=updateinvoice&invoicenumber=Inv-80794&invoicedate=12/30/2017&currency=USD&invoicestatus=Active&invoiceitemsku_1=12345&invoiceitemdescription_1=desc1&invoiceitemprice_1=22.33&invoiceitemquantity_1=1&invoiceitemsku_2=223&invoiceitemdescription_2=desc2&invoiceitemprice_2=41.48&invoiceitemquantity_2=2.653

_Retrieve Invoice_
    mkey=8VG63HD1LPBMIR5TPS7R52YV&transtype=getinvoice&invoicenumber=Inv-80794

_Cancel Invoice_
    mkey=8VG63HD1LPBMIR5TPS7R52YV&transtype=cancelinvoice&invoicenumber=Inv-80794&invoicestatusreason=end+of+contract

_Cancel Invoice by Customer_
    mkey=8VG63HD1LPBMIR5TPS7R52YV&transtype=cancelinvoicebycustomer&invoicenumber=Inv-80794&invoicestatusreason=ending+contract

_Paying an Invoice with a Credit Card_
    transtype=payinvoice&mkey=KewO4GI%2B64I8Vg6xCCuqvAkuAkq9cbJH&invoicenumber=Inv-123456&cardnum=4111111111111111&cardexp=1010&cvv=999&firstname=John&lastname=Smith&address1=888+test+address&city=Los+Angeles&country=US&state=CA&phone=222-444-2938&shipfirstname=John&shiplastname=Smith&shipaddress1=888+test+address&shipcity=Los+Angeles&shipstate=CA&shipphone=2224442938

_Paying an Invoice with a Bank Account_
    mkey=8VG63HD1LPBMIR5TPS7R52YV&transtype=payinvoice&invoicenumber=Inv-80782&bankname=Bank&routing=122000496&account=122000496&achaccounttype=checking&achaccountsubtype=personal&firstname=Jake&lastname=Tred&address1=123+Feeed&city=New+York&state=NY&country=US&zip=12345&company=Comp
