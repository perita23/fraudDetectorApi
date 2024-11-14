<?php
header("Content-Type: application/json");

// Verificar el método de la solicitud
$method = $_SERVER['REQUEST_METHOD'];
$depositData[""];
$withdrawal[""];
if ($method == 'POST') {
    $movementType = $_POST["movementType"];
    $amount = $_POST["amount"];

    if ($movementType == "DEPOSIT_TRANSACTION") {
        switch ($amount) {
            case 0:
                # code...
                break;
            case 0:
                # code...
                break;
            case 0:
                # code...
                break;
            case 0:
                # code...
                break;

            default:
                # code...
                break;
        }
    } else if ($movementType == "WITHDRAWAL_TRANSACTION") {
        switch ($amount) {
            case 0:
                # code...
                break;
            case 0:
                # code...
                break;
            case 0:
                # code...
                break;
            case 0:
                # code...
                break;

            default:
                # code...
                break;
        }
        $response = ["error" => "Movimiento no especificado"];
    }

} else {
    http_response_code(405);
    $response = ["error" => "Método no permitido. Use POST."];
}

echo json_encode($response);
?>