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

   print "Purchase Order: <strong>".$orderNumber." Date: <strong>".$orderDate."</strong>".PHP_EOL;
   print "<strong>Shipping address:</strong><br>".PHP_EOL;
   print $shippingAddress->Name."<br>".PHP_EOL;
   print $shippingAddress->Street."<br>".PHP_EOL;
   print $shippingAddress->City.", ".$shippingAddress->State.", ".$shippingAddress->Zip."<br>".PHP_EOL;
   print $shippingAddress->Country."<br><br>".PHP_EOL;
   print "<strong>Billing adress:</strong>".PHP_EOL;
   print $billingAddress->Name."<br>".PHP_EOL;
   print $billingAddress->Street."<br>".PHP_EOL;
   print $billingAddress->City.", ".$billingAddress->State.", ".$billingAddress->Zip."<br>".PHP_EOL;
   print $billingAddress->Country."<br><br>".PHP_EOL;

   $itemNum = 0;
   foreach ($items as $item) {
       $itemNum++;
       print "<strong>".$itemNum."</strong><br>".PHP_EOL;
       print "Part. number: ".$item['PartNumber']."<br>".PHP_EOL;
       print "Product name: ".$item->ProductName."<br>".PHP_EOL;
       print "Quantity: ".$item->Quantity."<br>".PHP_EOL;
       print "Price: " .$item->USPrice."<br>".PHP_EOL;
       print "Ship date: ".$item->ShipDate."<br>".PHP_EOL;
       print "Comment: ".$item->Comment."<br>".PHP_EOL;
   }





}

//task2
function task2 ($arr) {
    $json = json_encode($arr);
    file_put_contents("output.json", $json);

    $json2 = file_get_contents("output.json");
    $arr2 = json_decode($json2, true);

    foreach ($arr2 as $key=>$value) {
        $rand = rand(0, 1);
        if ($rand === 1) {
            array_pop($arr2);
        }
    }
    $json2 = json_encode($arr2);
    file_put_contents("output2.json", $json2 );

    $file1 = file_get_contents("output.json");
    $file2 = file_get_contents("output2.json");

    $array1 = json_decode($file1, true);
    $array2 = json_decode($file2, true);

    $result=array_diff($array1,$array2);
    print_r($result);

}



//task3
function task3(){
    $arr =array();
    for($i =1; $i<=50; $i++){
        $arr[] = mt_rand(1,100);

    }

    $file = "test.csv";
    $fp = fopen($file, "w") or die("Невозможно создать файл");

        fputcsv($fp, $arr);

    fclose($fp);

    $arr = str_getcsv(file_get_contents($file));
    $sum = 0;
    foreach ($arr as $key=>$value) {
        if($value%2==0) {
            $sum += $value;
        }

    }
}

function task4() {
    $url = "https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json";
    $json = json_decode(file_get_contents($url), true);

     print_r($json["query"]["pages"]["15580374"]["title"].PHP_EOL);
     print_r($json["query"]["pages"]["15580374"]["pageid"]);
}
