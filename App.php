<?php 


function getTransactionFile(string $path){

                $files =[];
            foreach(scandir($path) as $file){
                if(is_dir($file)){
                    continue;
                }
                $files[] = $path . $file;
            }
                return $files;
}

function getTransactions(string $fileName){

    if(!file_exists($fileName)){
        trigger_error('File "'.$fileName.'" does not exist',E_USER_ERROR);
    }
$file = fopen($fileName,'r');
fgetcsv($file);
$transactions =[];

while (($transaction = fgetcsv($file)) !== false){
 $transactions[] = extractTransactions($transaction);
}
return $transactions;

}

function extractTransactions(array $trRow){
    [$Series_reference,$Period,$Data_value,$Suppressed,$STATUS,$UNITS,$Magnitude,$Subject,$Group,$Series_title_1,$Series_title_2,$Series_title_3,$Series_title_4,$Series_title_5] = $trRow;

    return [
        'Series reference'=>$Series_reference,
        'Period' =>$Period,
        'Data value'=>$Data_value,
        'Suppressed'=>$Suppressed,
        'STATUS'=>$STATUS,
        'UNITS'=>$UNITS,
        'Magnitude'=>$Magnitude,
        'Subject'=>$Subject,
        'Group'=>$Group,
        'Series title 1'=>$Series_title_1,
       'Series title 2'=> $Series_title_2,
       'Series title 3'=> $Series_title_3,
       'Series title 4' =>$Series_title_4,
       'Series title 5' =>$Series_title_5
    ];
}

function formDates(string $d){
    return date('M j,Y',strtotime($d));
}