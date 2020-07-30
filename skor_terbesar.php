<?php
function skor_terbesar($arr){
//kode di sini
   /*$kelasreactNative = [];
    $kelasreactJs = [];
    $kelasLaravel = [];
    foreach($arr as $key => $row){
        $nilai[$key] = $row['nilai'];
        $kelas[$key] = $row['kelas'];
    }

    array_multisort($kelas, SORT_DESC, $nilai, SORT_DESC, $arr);

    for($i = 0; $i < count($arr); $i++){
        if($arr[$i]['kelas'] == 'React Native'){
            $kelasreactNative[] = $arr[$i];
        }
        elseif($arr[$i]['kelas'] == 'React JS'){
            $kelasreactJs[] = $arr[$i];
        }
        elseif($arr[$i]['kelas'] == 'Laravel'){
            $kelasLaravel[] = $arr[$i];
        }
    }

    print_r($kelasreactNative);
    print_r($kelasreactJs);
    print_r($kelasLaravel);*/

    $output =[];
    $nilai1 = 0;
    $nilai2 = 0;
    $nilai3 = 0;

    foreach($arr as $key => $value){

        if($value['nilai'] > $nilai1 && $value['kelas'] == 'Laravel'){
            $nilai1 = $value['nilai'];
            $output[$value['kelas']] =
            [
                'nama' => $value['nama'],
                'kelas' => $value['kelas'],
                'nilai' => $value['nilai']
            ];
        }
        elseif($value['nilai'] > $nilai2 && $value['kelas'] == 'React Native'){
            $nilai2 = $value['nilai'];
            $output[$value['kelas']] =
            [
                'nama' => $value['nama'],
                'kelas' => $value['kelas'],
                'nilai' => $value['nilai']
            ];
        }
        elseif($value['nilai'] > $nilai3 && $value['kelas'] == 'React JS'){
            $nilai3 = $value['nilai'];
            $output[$value['kelas']] =
            [
                'nama' => $value['nama'],
                'kelas' => $value['kelas'],
                'nilai' => $value['nilai']
            ];
        }

       
    }
    return $output;
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];
echo"<pre>";
print_r(skor_terbesar($skor));
echo"</pre>";
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>