<?php
$products = array(
            "Electronics" => array(
                            "Television" => array(
                                                  array(
                                                      "id" => "PR001",
                                                      "name" => "MAX-001",
                                                      "brand" => "Samsung"
                                                       ),
                                                  array(
                                                  "id" => "PR002",
                                                  "name" => "BIG-301",
                                                  "brand" => "Bravia"
                                                        ),
                                                  array(
                                                  "id" => "PR003",
                                                  "name" => "APL-02",
                                                  "brand" => "Apple"
                                                        )
                                                ),
                            "Mobile" => array(
                                    array(
                                    "id" => "PR004",
                                    "name" => "GT-1980",
                                    "brand" => "Samsung"
                                    ),
                                    array(
                                    "id" => "PR005",
                                    "name" => "IG-5467",
                                    "brand" => "Motorola"
                                    ),
                                    array(
                                    "id" => "PR006",
                                    "name" => "IP-8930",
                                    "brand" => "Apple"
                                    )
      
                                  )
                            ),
                "Jewelry" => array(
                    "Earrings" => array(
                        array(
                        "id" => "PR007",
                        "name" => "ER-001",
                        "brand" => "Chopard"
                        ),
                        array(
                        "id" => "PR008",
                        "name" => "ER-002",
                        "brand" => "Mikimoto"
                        ),
                        array(
                        "id" => "PR009",
                        "name" => "ER-003",
                        "brand" => "Bvlgari"
                        )
                      ),
                
                    "Necklaces" => array(
                       array(
                       "id" => "PR010",
                       "name" => "NK-001",
                       "brand" => "Piaget"
                        ),
                       array(
                       "id" => "PR011",
                       "name" => "NK-002",
                       "brand" => "Graff"
                         ),
                       array(
                       "id" => "PR012",
                       "name" => "NK-003",
                       "brand" => "Tiffany"
        )
    )
  )
);
echo '<table><tr><th>Category</th><th>SubCategory</th><th>Id</th><th>Name</th><th>Brand</th></tr>';
foreach($products as $key => $value){
     //key is category
    foreach($value as $k => $v){
        //k is subcategory
        foreach($v as $item => $items){
             //item is index
             echo '<tr><td>'.$key .'</td><td>'.$k.'</td><td>'.$items['id'].'</td><td>'.$items['name'].'</td><td>'.$items['brand'].'</td></tr>';
            
            
        }
    }
}
echo '</table>';
echo '<br><br>';
echo '<table><tr><th>Category</th><th>SubCategory</th><th>Id</th><th>Name</th><th>Brand</th></tr>';
foreach($products as $key => $value){
    //key is category
   foreach($value as $k => $v){
       //k is subcategory
       if($k == "Mobile") {
       foreach($v as $item => $items){
            //item is index
            echo '<tr><td>'.$key .'</td><td>'.$k.'</td><td>'.$items['id'].'</td><td>'.$items['name'].'</td><td>'.$items['brand'].'</td></tr>';
           
           
       }
   }
   }
}
echo '</table>';

echo '<br><br>';
echo '<table>';
foreach($products as $key => $value){
    //key is category
   foreach($value as $k => $v){
       //k is subcategory
       foreach($v as $item => $items){
           if($items['brand']=="Samsung"){
            //item is index
            echo '<tr><td>Product ID: '.$items['id'].'</td></tr>';
            echo '<tr><td>Product Name: '.$items['name'].'</td></tr>';
            echo '<tr> <td>Subcategory: '.$k.'</td></tr>';
            echo '<tr><td>Category: '.$key .'</td></tr>';
           echo '---------------------';
       }
   }
   }
}
echo '</table>';

echo '<br><br>';
echo '<table><tr><th>Category</th><th>SubCategory</th><th>Id</th><th>Name</th><th>Brand</th></tr>';
foreach($products as $key => $value){
    //key is category
   foreach($value as $k => $v){
       //k is subcategory
       foreach($v as $item => $items){
            //item is index
            if($items['id'] == "PR003") {
                continue;
            
            }else{
            echo '<tr><td>'.$key .'</td><td>'.$k.'</td><td>'.$items['id'].'</td><td>'.$items['name'].'</td><td>'.$items['brand'].'</td></tr>';
   
        }
           
      }
   }
}
echo '</table>';

echo '<br><br>';
echo '<table><tr><th>Category</th><th>SubCategory</th><th>Id</th><th>Name</th><th>Brand</th></tr>';
foreach($products as $key => $value){
     //key is category
    foreach($value as $k => $v){
        //k is subcategory
        foreach($v as $item => $items){
            if($items['id'] == "PR002") {
             //item is index
             $items['name'] = "BIG-555";
             }
             echo '<tr><td>'.$key .'</td><td>'.$k.'</td><td>'.$items['id'].'</td><td>'.$items['name'].'</td><td>'.$items['brand'].'</td></tr>';
        }
    }
}
echo '</table>';
?>