<?php
//task1
function task1($file) {
    $fileData = file_get_contents($file);
    $xml = new SimpleXMLElement($fileData);
    $orderNumber = $xml->PurchaseOrder;
    print "<pre>";
    var_dump($orderNumber);

        foreach($xml->PurchaseOrder[0]->attributes() as $a => $b) {
            echo $a,'="',$b,"\"\n";
        }
    $shipping = $xml->xpath("//Adress[@Type='Shipping']")[0];
    $billing = $xml->xpath("//Adress[@Type='Billing']")[0];
    $deliveryNotes = $xml->DeliveryNotes;
    $items = $xml->Items->Item;





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
