<?php
header("Content-Type: application/json");


$method = $_SERVER['REQUEST_METHOD'];

$depositData = [
    [
        "movement" => "DEPOSIT_TRANSACTION",
        "amount" => 5000,
        "action" => false,
        "risk" => 25,
        "id" => "1"
    ],
    [
        "movement" => "DEPOSIT_TRANSACTION",
        "amount" => 10000,
        "action" => false,
        "risk" => 50,
        "id" => "2"
    ],
    [
        "movement" => "DEPOSIT_TRANSACTION",
        "amount" => 20000,
        "action" => true,
        "risk" => 75,
        "id" => "3"
    ],
    [
        "movement" => "DEPOSIT_TRANSACTION",
        "amount" => 50000,
        "action" => true,
        "risk" => 100,
        "id" => "4"
    ]
];

$withdrawal = [
    [
        "movement" => "WITHDRAW_TRANSACTION",
        "amount" => 1000,
        "action" => false,
        "risk" => 25,
        "id" => "5"
    ],
    [
        "movement" => "WITHDRAW_TRANSACTION",
        "amount" => 2500,
        "action" => false,
        "risk" => 50,
        "id" => "6"
    ],
    [
        "movement" => "WITHDRAW_TRANSACTION",
        "amount" => 5000,
        "action" => true,
        "risk" => 75,
        "id" => "7"
    ],
    [
        "movement" => "WITHDRAW_TRANSACTION",
        "amount" => 10000,
        "action" => true,
        "risk" => 100,
        "id" => "8"
    ]
];

if ($method == 'POST') {
    $movementType = $_POST["movementType"];
    $amount = $_POST["amount"];
    switch ($movementType) {
        case 'DEPOSIT_TRANSACTION':
            if ($amount > 50000)
                return json_encode(["error" => "max amount detected for deposit"]);
            foreach ($depositData as $key => $value) {
                if ($amount <= $value["amount"]) {
                    $response = [
                        "action" => $value['action'],
                        "risk" => $value['risk']
                    ];
                    break;
                }
            }
            break;

        case 'WITHDRAWAL_TRANSACTION':
            foreach ($withdrawalData as $key => $value) {
                if ($amount <= $value["amount"]) {
                    $response = [
                        "action" => $value['action'],
                        "risk" => $value['risk']
                    ];
                    break;
                }
            }
            break;
        default:
            $response = ["error" => "Movimiento no especificado"];
            break;
    }
} else {
    http_response_code(405);
    $response = ["error" => "Método no permitido. Use POST."];
}
echo json_encode($response);
?>