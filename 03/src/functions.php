<?php
//task1
function task1($file) {
    $fileData = file_get_contents($file);

    //print $fileData;
    $xml = new SimpleXMLElement($fileData);
    $orderNumber = $xml['PurchaseOrderNumber'];
    $orderDate = $xml['OrderDate'];
    $shippingAddress = $xml->xpath("//Address[@Type='Shipping']")[0];
    $billingAddress = $xml->xpath("//Address[@Type='Billing']")[0];
    $deliveryNotes = $xml->DeliveryNotes;
    $items = $xml->Items->Item;

   // var_dump($orderNumber);





}

//task2
function task2_1 ($arr) {
    $json = json_encode($arr);
    file_put_contents("output.json", $json);

}



//task3
function task3(){
    for($i =1; $i<=50; $i++){
        $arr[] = mt_rand(1,100);

    }
    print_r($arr);
    $file = "test.csv";
    $fp = fopen($file, "w") or die("Невозможно создать файл");

        fputcsv($fp, $arr);

    fclose($fp);
}
