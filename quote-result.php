<?php 
            if(isset($_GET['quantity']) && 
            isset($_GET['sizeX']) && 
            isset($_GET['sizeY']) &&
            isset($_GET['paper']) &&
            isset($_GET['color']) &&
            isset($_GET['lamination']) &&
            isset($_GET['plateSize']) &&
            isset($_GET['cutting'])
            
            ){
                $paper_explode = explode(',', $_GET['paper']);
                $pages = 1;//$_GET['pages'];
                $color_explode = explode(',', $_GET['color']);
                // Papaer Amount and Cost 
                $paperX = $paper_explode[0] ;
                $paperY = $paper_explode[1] ;
                $sizeX = $_GET['sizeX'];
                $sizeY = $_GET['sizeY'];

                // Assaining Paper Value
                $paperSheet = $paper_explode[3];
                $quantity = $_GET['quantity'];
                $paperPrice = $paper_explode[2];

               // Mesure per Sheet Paper Quantity by Area 
               function perSheetPaperQuantity($paperX,$paperY,$sizeX,$sizeY){
                 $over = 0.0787402;
                $sizeX = $sizeX + $over;
                $sizeY = $sizeY + $over;
                $paperXY = $paperX * $paperY ;
                $sizeXY = $sizeX * $sizeY ;
                $total =   $paperXY / $sizeXY ;
                 return floor($total);
               }
               
               $perSheetPaperQuantity = perSheetPaperQuantity($paper_explode[0],$paper_explode[1],$_GET['sizeX'],$_GET['sizeY']);
              // echo "Per sheet paper quantity :  " .$perSheetPaperQuantity ."<br>";
              // echo "Per packet art card : ". $paperSheet ." sheets" ."<br>";
              // echo "The card comes out in one packet : ". ($perSheetPaperQuantity* $paperSheet)." sheets"."<br>";
               $totalSheet =  $perSheetPaperQuantity * $paperSheet;
               $wastage = ($totalSheet / 100) * 4 ;
               //echo "Wastage Paper: ".$wastage."<br>";
               $paperPakets = ($quantity * $pages ) / ($totalSheet - $wastage);
               $paperPakets = round($paperPakets, 2);
               $totalPaperPrice = floor($paperPrice * $paperPakets);
               //echo "Total Packets need  ".$quantity." cards (". $quantity ."/". ($totalSheet - $wastage).") : ".$paperPakets." packets "."<br>";
               //echo "The estimated price of one packet of paper : ".$paperPrice ." BDT"."<br>";
              // echo "Total paper price : " . $totalPaperPrice." BDT<hr>";
                // Assain Plate Cost
                $totalPlate = $color_explode[0] * $color_explode[1];
                //echo "Total Plate  : ".$totalPlate."<br>";
                $platePrice =  $totalPlate * $color_explode[2];
               // echo " Plate  Price : ".$platePrice ." BDT "."<hr>";
                $totalPrintingImpressions = $quantity * $totalPlate;
                $sheet = $totalPrintingImpressions / $_GET['plateSize'];
                $printingCost = ($sheet / 1000 ) * 160 ;
                if($printingCost < 1000){
                  $printingCost = 1000;
                }
                //echo "Total printing impressions (".$quantity." x ".$totalPlate."): ". $totalPrintingImpressions ."<br>";
                //echo "If printed on a full sheet, the print quantity will be (".$totalPrintingImpressions ."/16) : ".$sheet."<br>";
                //echo $quantity." card printing cost ((".$sheet."/1000) x 150) : ".$printingCost ."<br><hr>";
                //Laminations
                $totalSquareInches = ($sizeX * $sizeY) * $quantity ;
                $laminationCost = floor($totalSquareInches * $_GET['lamination']);

               // echo "Total Square Inches:  ". $totalSquareInches."<br>";
                // echo "Total Lamination Cost :  ". $laminationCost."<br><hr>";
                $totalCuttingCost = (($paperPakets * $paperSheet)/1000)*100;
                if($totalCuttingCost < 500){
                  $totalCuttingCost = 500;
                }

                $totalPackingCost = 500; // $_GET['packing'] ;
                $totalDelivayCost = 2500;// $_GET['delivary'] ;
               $totalAmount = $totalPaperPrice + $platePrice + $printingCost + $laminationCost+ $totalCuttingCost+ $totalPackingCost+ $totalDelivayCost;

              $profit = (($totalAmount/100) * 5);
              $totalWithProfit = $totalAmount + $profit;
              $vat =  (($totalWithProfit/100) * 18);
               $grandTotal = $totalWithProfit + $vat;
                $unitPrice = $grandTotal / $quantity ;
                echo "Unit Price : ". $unitPrice;

                ?>
 <table style="text-align: center; margin:0px auto; border: 1px solid black;">
  <tr>
    <th style="width:5%;">SL</th>
    <th style="width:20%;">Job Title</th>
    <th style="width:55%;">Description</th>
    <th style="width:10%;">Quantity</th>
    <th style="width:10%;">Unit Price</th>

  </tr>
  <tr>
    <td>01</td>
    <td>
<?php
                echo "Size - ".$_GET['sizeX'].' X '. $_GET['sizeY']."<br />";
                //echo "Paper - ". $_GET['paper']."<br />";

                $paper_explode = explode(',', $_GET['paper']);
                echo "paper: ". $paper_explode[4]."<br />";
                $color_explode = explode(',', $_GET['color']);
                echo "Color: ". $color_explode[0]." side (".$color_explode[1].")";
                ?>

    </td>
    <td>
      <table style="text-align: center; margin:0px auto; border: 1px solid black;">
        <tr>
        <div style="font-size:20px;font-weight:bold;text-align:center;text-decoration: underline;">Paper</div> 
          <th> Title </th>
          <th> Description </th>
        </tr>

        <tr>
          <td>Per sheet paper quantity</td>
          <td><?=$perSheetPaperQuantity?></td>
        </tr>
        <tr>
          <td>Per packet</td>
          <td><?=$paperSheet?></td>
        </tr>
        <tr>
          <td>Wastage Paper</td>
          <td><?=$wastage?></td>
        </tr>
        <tr>
          <td>Total Packets </td>
          <td><?=$paperPakets?></td>
        </tr>
        <tr>
          <td>Total paper price </td>
          <td><?=$paperPakets  ?> x <?=$paperPrice ?> BDT / Packet = <b><?=$totalPaperPrice ?> BDT </b> </td>
        </tr>

        
      </table>

      <table style="text-align: center; margin:0px auto; border: 1px solid black;">
      <div style="font-size:20px;font-weight:bold;text-align:center;text-decoration: underline;">Plate</div>
        <tr>
          <th>Title</th>
          <th>Description</th>
        </tr>
        <tr>
          <td>Total Plate </td>
          <td><?=$totalPlate?></td>
        </tr>
        <tr>
          <td>Plate  </td>
          <td>
           <?=$totalPlate?> Plate X 300 BDT = <b> <?=$platePrice?> BDT </b>
          </td>
        </tr>
      </table>

      <table style="text-align: center; margin:0px auto; border: 1px solid black;">
      <div style="font-size:20px;font-weight:bold;text-align:center;text-decoration: underline;">Printing</div>
        <tr>
          <th>Title</th>
          <th>Description</th>
        </tr>
        <tr>
          <td>Total printing impressions </td>
          <td><?php echo "(".$quantity." Pics X ".$totalPlate." Plates) =  ". $totalPrintingImpressions ."<br>";?></td>
        </tr>
        <tr>
          <td>Printing Cost </td>
          <td>
           (<?=$sheet?> Sheet / 1000 ) * 160 = <b><?=$printingCost?> BDT</b>
          </td>
        </tr>
      </table>
     
      <table style="text-align: center; margin:0px auto; border: 1px solid black;">
      <div style="font-size:20px;font-weight:bold;text-align:center;text-decoration: underline;">Lamination</div>
      
        <tr>
          <th>Title</th>
          <th>Description</th>
        </tr>
        <tr>
          <td>Total Square Inches</td>
          <td><?=$totalSquareInches?></td>
        </tr>
        <tr>
          <td>Lamination Cost</td>
          <td><?= $_GET['lamination'] ?> X <?=$totalSquareInches?> = <b><?=$laminationCost?> BDT </b></td>

          
        </tr>
      </table>
      <div style="font-size:20px;font-weight:bold;text-align:left;text-decoration: underline;">Binding</div>
      <div style="font-size:20px;font-weight:bold;text-align:left;text-decoration: underline;">
      Cutting : <?=$totalCuttingCost?>

      </div>

      <div style="font-size:20px;font-weight:bold;text-align:left;text-decoration: underline;">Packing : <?=$totalPackingCost?></div>
      <div style="font-size:20px;font-weight:bold;text-align:left;text-decoration: underline;">Delivary : <?=$totalDelivayCost ?></div>


    </td>
    <td><?=$quantity?></td>
    <td><?=$unitPrice?></td>
    
  </tr>
</table>   

                
                <?php


            }
      