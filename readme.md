# Usage of fraudDetector Api

## Name of the endpoint

* https://frauddetectorapi.onrender.com

## Method

* POST

## Name of the keys for the apis

* ```movementType``` ->  String = "DEPOSIT_TRANSACTION" / "WITHDRAWAL_TRANSACTION"
* ```amount``` -> Float = >=0.0

## Api key?

*  No need of an api key ;)

## Response

* The response will be the action and the risk, giving true or false and the risk of fraud of the current transaction.
