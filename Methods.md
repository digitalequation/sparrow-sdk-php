->sale
->authorization
->capture
->refund
->void
->airline
->ewallet
->chargeback
->balance
->customField
->verification
->vault
->paymentPlan
->invoice



===
### Creating a Sale = ->sale
===
transtype=sale
_Simple Sale_   = ->sale->simple()
transtype=sale
_Advanced Sale_ = ->sale->simple()

===
### Creating an Authorization and Capture = ->authorization,->capture
===
transtype=auth
_Simple Authorization_   = ->authorization->simple()
transtype=capture
_Simple Capture_         = ->capture->simple()
transtype=offline
_Simple Offline Capture_ = ->capture->simpleOffline()
transtype=capture
_Advanced Capture_       = ->capture->advanced()

===
### Issuing a Refund = ->refund
===
transtype=refund
_Simple Refund_   = ->refund->simple()
transtype=refund
_Advanced Refund_ = ->refund->advanced()

===
### Issuing a Void = ->void
===
transtype=void
_Simple Void_   = ->void->simple()
transtype=void
_Advanced Void_ = ->void->advanced()

===
### Airline Passenger Sale = ->airline
===
transtype=passengersale
_Passenger Sale_ = ->airline->passengerSale()

===
### Military Star Card = `???`
===
transtype=sale
_Simple Star Card_   = `???`
transtype=sale
_Advanced Star Card_ = `???`

===
### ACH and eCheck = `???`
===
transtype=sale/refund/credit
_Simple ACH_      = `???`
    _ACH account type: Personal_
    _ACH account type: Business_
transtype=sale/refund/credit
_Advanced ACH_    = `???`
    _ACH account type: Personal_
    _ACH account type: Business_
transtype=sale/refund
_Simple eCheck_   = `???`
    _ACH account type: Personal_
    _ACH account type: Business_
transtype=sale/refund/credit
_Advanced eCheck_ = `???`
    _ACH account type: Personal_
    _ACH account type: Business_

===
### eWallet = ->ewallet
===
transtype=credit
_eWallet Simple Credit_ = ->ewallet->simpleCredit()

===
### Fiserv = `???`
===
transtype=sale
_Fiserv Simple Sale_   = `???`
transtype=sale
_Advanced Fiserv Sale_ = `???`

===
### Chargeback Entry = ->chargeback
===
transtype=chargeback
_Marking a successful transaction as a Chargeback_ = ->chargeback->markTransaction()

===
### Balance Inquiry = ->balance
===
transtype=balanceinquire
_Retrieve Card Balance_ = ->balance->inquire()

===
### Decrypting Custom Fields = ->customField
===
transtype=decrypt
_Decrypting Custom Fields_ = ->customField->decrypt()

===
### Credit Card Verification = ->verification
===
_Account Verification_ = ->verification->verifyAccount()

===
### Data Vault = ->vault
===
transtype=addcustomer
_Adding a Customer_                  = ->vault->addCustomer()
transtype=addcustomer
_Add Customer by Payment Type_       = `???`
    _Credit Card_                    = `???`
    _ACH_                            = `???`
    _Star Card_                      = `???`
    _eWallet_                        = `???`
transtype=updatecustomer
_Update Customer_                    = ->vault->updateCustomer()
transtype=updatecustomer
_Adding Payment Types to a Customer_ = ->vault->addPaymentType()
transtype=updatecustomer
_Update Payment Type_                = ->vault->updatePaymentType()
transtype=updatecustomer
_Delete Payment Type_                = ->vault->deletePaymentType()
transtype=deletecustomer
_Delete Data Vault Customer_         = ->vault->deleteCustomer()
transtype=getcustomer
_Retrieve Customer_                  = ->vault->getCustomer()
transtype=getcustomer
_Retrieve Payment Type_              = ->vault->getPaymentType()
transtype=decrypt
_Decrypt Payment Type_               = ->vault->decryptPaymentType()
    _Credit Card_                    = `???`
    _ACH_                            = `???`
    _eCheck_                         = `???`
    _Star Card_                      = `???`
    _eWallet_                        = `???`
_Tokenized Payments_                 = `???`

===
### Creating Custom Payment Plans = ->paymentPlan
===
transtype=addplan
_Creating a Payment Plan_                = ->paymentPlan->add()
transtype=updateplan
_Updating a Payment Plan_                = ->paymentPlan->update()
transtype=
_Building a Sequence_                    = ->paymentPlan->buildSequence()
transtype=
_Notification Settings_                  = ->paymentPlan->notificationSettings()
transtype=
_Adding or Updating a Sequence_          = `???`
transtype=
    _Add Sequence_                       = ->paymentPlan->addSequence()
transtype=
    _Update Sequence_                    = ->paymentPlan->updateSequence()
transtype=
_Deleting a Sequence_                    = ->paymentPlan->deleteSequence()
transtype=deleteplan
_Deleting a Plan_                        = ->paymentPlan->delete()
transtype=deleteplan
_Assigning a Payment Plan to a Customer_ = ->paymentPlan->assignToCustomer()
transtype=updateassignment
_Update Payment Plan Assignment_         = ->paymentPlan->updateAssignment()
transtype=cancelassignment
_Cancel Plan Assignment_                 = ->paymentPlan->cancelAssignment()

===
### Invoicing = ->invoice
===
transtype=createmerchantinvoice
_Creating an Invoice_                   = ->invoice->create()
transtype=updateinvoice
_Update Invoice_                        = ->invoice->update()
transtype=getinvoice
_Retrieve Invoice_                      = ->invoice->get()
transtype=cancelinvoice
_Cancel Invoice_                        = ->invoice->cancel()
transtype=cancelinvoicebycustomer
_Cancel Invoice by Customer_            = ->invoice->cancelByCustomer()
transtype=payinvoice
_Paying an Invoice with a Credit Card_  = ->invoice->payWithCreditCard() `???`
transtype=payinvoice
_Paying an Invoice with a Bank Account_ = ->invoice->payWithBankAccount() `???`
