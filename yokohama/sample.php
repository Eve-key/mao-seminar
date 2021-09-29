<?php
  class POKER {
    public function get($input) {
      $replace = [
        '10' => 'T',
        'D' => '',
        'C' => '',
        'S' => '',
        'H' => '',
      ];
      $array = str_replace(array_keys($replace), array_values($replace), $input);
      $rank = str_split($array);
      $count = array_count_values($rank);
      print_r($count);
      echo $count['3'];
    }
  }
  $test = [
        ['D3C3C10D10S3', 'FH'],
        // ['S8D10HJS10CJ', '2P'],
        // ['DASAD10CAHA', '4K'],
        // ['S10HJDJCJSJ', '4K'],
        // ['S10HAD10DAC10', 'FH'],
        // ['HJDJC3SJS3', 'FH'],
        // ['S3S4H3D3DA', '3K'],
        // ['S2HADKCKSK', '3K'],
        // ['SASJDACJS10', '2P'],
        // ['S2S10H10HKD2', '2P'],
        // ['CKH10D10H3HJ', '1P'],
        // ['C3D3S10SKS2', '1P'],
        // ['S3SJDAC10SQ', '--'],
        // ['C3C9SAS10D2', '--'],
  ];
  $poker = new POKER();
  foreach($test as $key=>$data){
    $answer = $poker->get($data[0]);
    if($answer !== $data[1]){
      print('error');
    }
  }
?>