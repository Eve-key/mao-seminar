<?php
  class Palindrome {
    public function solve($input) {
        $count = 0;
        $textLength = strlen($input);
        if ($textLength == '1') {
          return '1';
        } else {
            $this->checkPalindromeText($input);
            echo $this->count * 2;
            if ($textLength % 2 == 0) {
              return $this->count * 2;
            } elseif($textLength % 2 != 0) {
              return $this->count * 2 + 1;
            }
        }
    }

    public function checkPalindromeText($input) {
      for ($i = 0; $i < strlen($input); $i++) {
        if (strlen($input) == 1) {
          break;
        } elseif ($input[$i] == $input[strlen($input) - 1]) {
          $this->count++;
          $this->checkPalindromeText(substr($input, $i + 1, strlen($input) - ($i +1)));
          break;
        } else {
          $this->checkPalindromeText(substr($input, $i + 1, strlen($input) - ($i +1)));
          break;
      }
      }
    }
    
  }
  $test = [
    // ['a', '1'],
    // ['ab', '1'],
    // ['I_believe_you_can_solve', '9']
    // ["I_believe_you_can_solve", "9"],   
    // ["a", "1"],
    // ["aa", "2"],    
    // ["aaa", "3"],   
    // ["ab", "1"],    
    // ["aabb", "2"],    
    // ["ABBA", "4"],    
    // ["Abba", "2"],   
    // ["1234567890", "1"],
    // ["1234567890987654321", "19"],
    ["abcdcba", "7"], 
    // ["0a1b2c3d4c5b6a7", "7"],
    // ["abcdcba0123210", "7"],    
    // ["abcdcba_123210", "7"], 
    // ["_bcdcba0123210", "7"],   
    // ["abcddcba0123210", "8"],
    // ["abcdcba01233210", "8"],  
    // ["a0bc1dc2ba3210a", "9"],  
    // ["a0bc1ddc2ba3210", "8" ],  
    // ["3a0bc1ddc2ba3210", "10"],    
    // ["11oooo1111o1oo1o111ooooooooooo", "20"], 
    // ["11o1111o1111oo11ooo11111ooo1oo", "20"],    
    // ["111111oo11o111ooo1o1ooo11ooo1o", "21"],    
    // ["11o1o1o11oo11o11oo111o1o1o11oo", "27"],    
    // ["oo111o1o11o1oo1ooo11o1o11o1o1o", "27"],    
    // ["1o1oo11111o1o1oo1o1o1111oo1o1o", "28"],    
    // ["QQooooQooooQQyQoyQQQyyyyQQoyoy", "15"],   
    // ["oQoooQooooQyoyQoyoyyyQQyQQQQoQ", "16"],    
    // ["yyyyyooyQyyyoyyQyyooyQoQoQQoQy", "17"],   
    // ["yyQoyQoyyQyQQoyooooyyQQyQyooQy", "24"],    
    // ["oQQooQoQyQQoyoQQoQyQyQyQoQoooo", "24"],    
    // ["oQQyQQyyQyQQoooyQQyyyQQQyyQQoy", "25"], 
    // ["WAk9iHI4jVDlStyudwTNqE138kwan2", "3"],   
    // ["c43fIu1Mlz0K9hEVOgGcUdbeB5ksa7", "3"],    
    // ["CAbYcW5VqHjzFdIkH_61PM0TsyRuie", "3"],    
    // ["jInQnUvSayrJTsQWujovbbqW0STvoj", "10"],    
    // ["iZDrvpUKgtj3FrZsZ4CLjrEgUdZzQG", "11"],    
    // ["ROgYUOu6er_DA7nB6UGquO1GUHC62R", "11"],    
    // ["Oh_be_a_fine_girl_kiss_me", "9"],
    // ["8086_6502_6809_Z80", "11"],
    // ["xcode_visualstudio_eclipse", "11"],    
    // ["word_excel_powerpoint_outlook", "9"],    
    // ["abcdefghijklmnopqrstuvwxyz0123", "1"]
  ];
  $poker = new Palindrome();
  foreach($test as $key=>$data){
    $answer = $poker->solve($data[0]);
    if($answer !== $data[1]){
      print_r('error');
    } else {
      print_r('ok');
    }
  }
?>