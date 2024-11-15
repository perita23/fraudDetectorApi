# Usage of fraudDetector Api

## Name of the endpoint

* https://frauddetectorapi.onrender.com

## Method

* POST

## Name of the keys for the api

* ```movementType```
  * ```PHP
      movementType : string = "DEPOSIT_TRANSACTION" | "WITHDRAWAL_TRANSACTION"
    ```
* ```amount```
    * ```PHP
      amount : float = float >= 0.0 
      ```

## Usage in PHP
  * ```PHP
    $curl = curl_init();

        $data = [
            'movementType' => $interface->getTransactionInfo(),
            'amount' => $interface->getAmount()
        ];

        $post_data = http_build_query($data);

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://frauddetectorapi.onrender.com",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $post_data,
        ));

        $response = json_decode(curl_exec($curl), true);
        $err = curl_error($curl);

        curl_close($curl);

        return $response;
    ```
## Api key?

*  No need of an api key ;)

## Response

* The response will be the action and the risk, giving true or false and the risk of fraud of the current transaction.
