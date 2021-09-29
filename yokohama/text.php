<?php
  class Palindrome {
    public function solve($input) {
        $count = 0;
        $monsterList = [];
        $sordList = [];
        $text = str_split($input);
        for ($i = 0; $i < count($text); $i++) {
            if (
                $text[$i] == 'B' ||
                $text[$i] == 'D' ||
                $text[$i] == 'F' ||
                $text[$i] == 'H' ||
                $text[$i] == 'J' ||
                $text[$i] == 'L') {
                    array_push($monsterList, $text[$i]);
            } else if (
                $text[$i] == 'a' ||
                $text[$i] == 'c' ||
                $text[$i] == 'e' ||
                $text[$i] == 'g' ||
                $text[$i] == 'i' ||
                $text[$i] == 'k') {
                    array_push($sordList, $text[$i]);
            }
        }
        sort($monsterList);
        sort($sordList);
    
        // for ($i = 0; $i < count($monsterList); $i++) {
        //     for ($j = 0; $j < count($sordList); $j++) {
        //         if ($monsterList[$i] == 'B' && $sordList[$j] == 'a') {
        //             // unset($monsterList[$i]);
        //             $monsterList = array_values($monsterList);
        //             array_push($sordList, 'c');
        //             sort($sordList);
        //         } else if ($monsterList[$i] == 'D' && $sordList[$j] == 'c') {
        //             // unset($monsterList[$i]);
        //             $monsterList = array_values($monsterList);
        //             array_push($sordList, 'e');
        //             sort($sordList);
        //         } else if ($monsterList[$i] == 'F' && $sordList[$j] == 'e') {
        //             // unset($monsterList[$i]);
        //             $monsterList = array_values($monsterList);
        //             array_push($sordList, 'g');
        //             sort($sordList);
        //         } else if ($monsterList[$i] == 'H' && $sordList[$j] == 'g') {
        //             // unset($monsterList[$i]);
        //             $monsterList = array_values($monsterList);
        //             array_push($sordList, 'i');
        //             sort($sordList);
        //         } else if ($monsterList[$i] == 'J' && $sordList[$j] == 'i') {
        //             // unset($monsterList[$i]);
        //             $monsterList = array_values($monsterList);
        //             array_push($sordList, 'k');
        //             sort($sordList);
        //         } else if ($monsterList[$i] == 'L' && $sordList[$j] == 'k') {
        //             // unset($monsterList[$i]);
        //             $monsterList = array_values($monsterList);
        //             array_push($sordList, 'a');
        //             sort($sordList);
        //         }
        //     }
        // }


        for ($i = 0; $i < count($monsterList); $i++) {
            for ($j = 0; $j < count($sordList); $j++) {
                if ($monsterList[$i] == 'B' && in_array('a', $sordList)) {
                    unset($monsterList[$i]);
                    $monsterList = array_values($monsterList);
                    sort($sordList);
                    array_push($sordList, 'c');
                    $count++;
                    continue;
                } else if ($monsterList[$i] == 'D' && in_array('c', $sordList)) {
                    unset($monsterList[$i]);
                    $monsterList = array_values($monsterList);
                    sort($sordList);
                    array_push($sordList, 'e');
                    $count++;
                    continue;
                } else if ($monsterList[$i] == 'F' && in_array('e', $sordList)) {
                    unset($monsterList[$i]);
                    $monsterList = array_values($monsterList);
                    sort($sordList);
                    array_push($sordList, 'g');
                    $count++;
                    continue;
                } else if ($monsterList[$i] == 'H' && in_array('g', $sordList)) {
                    unset($monsterList[$i]);
                    $monsterList = array_values($monsterList);
                    sort($sordList);
                    array_push($sordList, 'i');
                    $count++;
                    continue;
                } else if ($monsterList[$i] == 'J' && in_array('i', $sordList)) {
                    unset($monsterList[$i]);
                    $monsterList = array_values($monsterList);
                    sort($sordList);
                    array_push($sordList, 'k');
                    $count++;
                    continue;
                } else if ($monsterList[$i] == 'L' && in_array('k', $sordList)) {
                    unset($monsterList[$i]);
                    $monsterList = array_values($monsterList);
                    sort($sordList);
                    array_push($sordList, 'a');
                    $count++;
                    continue;
                }
            }
        }
        for ($i = 0; $i < count($monsterList); $i++) {
            for ($j = 0; $j < count($sordList); $j++) {
                if ($monsterList[$i] == 'B' && in_array('a', $sordList)) {
                    unset($monsterList[$i]);
                    $monsterList = array_values($monsterList);
                    sort($sordList);
                    array_push($sordList, 'c');
                    $count++;
                    continue;
                } else if ($monsterList[$i] == 'D' && in_array('c', $sordList)) {
                    unset($monsterList[$i]);
                    $monsterList = array_values($monsterList);
                    sort($sordList);
                    array_push($sordList, 'e');
                    $count++;
                    continue;
                } else if ($monsterList[$i] == 'F' && in_array('e', $sordList)) {
                    unset($monsterList[$i]);
                    $monsterList = array_values($monsterList);
                    sort($sordList);
                    array_push($sordList, 'g');
                    $count++;
                    continue;
                } else if ($monsterList[$i] == 'H' && in_array('g', $sordList)) {
                    unset($monsterList[$i]);
                    $monsterList = array_values($monsterList);
                    sort($sordList);
                    array_push($sordList, 'i');
                    $count++;
                    continue;
                } else if ($monsterList[$i] == 'J' && in_array('i', $sordList)) {
                    unset($monsterList[$i]);
                    $monsterList = array_values($monsterList);
                    sort($sordList);
                    array_push($sordList, 'k');
                    $count++;
                    continue;
                } else if ($monsterList[$i] == 'L' && in_array('k', $sordList)) {
                    unset($monsterList[$i]);
                    $monsterList = array_values($monsterList);
                    sort($sordList);
                    array_push($sordList, 'a');
                    $count++;
                    continue;
                }
            }
        }
        // print_r($monsterList);
        // print_r($sordList);
        // print($count);
        return strval($count);


    }    
  }
  $test = [
    ["gLDLBgBgHDaD", "6"],
    ["DBcDLaLgDBH", "6"],
    ["JJca", "0"],
    ["FJDLBH", "0"],    
    ["HJBLFDg", "6"], 
    ["HBaDLFJ", "6"],   
    ["DJaHLB", "2"],
    ["gDLHJF", "3"],  
    ["cJFgLHD", "5"],
    ["FFBJaJJ", "1" ],  
    ["FJeJFBJ", "2"],   
    ["iJFFJJB", "3"],
    ["JBJiLFJF", "5" ],  
    ["JDiFLFBJJ", "8"],    
    ["BDFDFFDFFLLFFJFDBFDFFFFDDFaDBFFB", "28"], 
    ["DDFBFcBDFFFFFFLBFDFFBFLFDFDJDFDF", "24"],    
    ["FDLBFDDBFFFeFFFFFDFBLDDFDDFBFFJF", "16"],    
    ["FDBFFLFDFFDBBDFFBJDLFgDFFFDFFDFF", "0"],    
    ["FDiFLDFFFFBDDJDDBFBFDFFFBFFDFLFF", "31"],    
    ["FDFDJBLBLBFFDDFFFDFFFFFDDFBkFDFF", "30"],    
    ["HBkFFFFHBLH", "3"],   
    ["FBHHFFFHLaB", "2"],    
    ["LFHFBBcHFHF", "0"],   
    ["LFBHFFeFHBH", "7"],    
    ["LgFHHHBFBFF", "3"],    
    ["FFiFHBHLBFH", "0"], 
    ["BFHHFFHBeFLk", "10"],   
    ["FHFaBBHFHLFg", "5"],    
    ["FFgacaFg", "0"],    
    ["JHDaDcBJiiHccBHDBDH", "9"],    
    ["FHJJLckFckFJHDFF", "12"],    
    ["DeDHJHDFHJBLHDLLDHJLBDD", "22"],    
    ["gJLLLJgJgJLJL", "0"],
    ["DaaaDDD", "0"],
    ["HFeJFHiBiiBJeJBBFFB", "9"],    
    ["FJFFJDBHBHaLJBHJHDLHkLLLFFFgJgHJLHkJkB", "32"],    
    ["giFLBiBJLLJgHBFJigJJJBLHFLDLL", "23"],
    ["cgkLJcLJJJJgJc", "2"], 
    ["LDFHJHcFBDBLJBLFLcFJcDFBL", "22"],   
    ["JJHHHkHJkHLJk", "1"],    
    ["kHHBBaBgHagHgaHBBB", "11"],    
    ["HDBFFDHHHDFLDcHHLFDcJD", "20"],    
    ["HFFFHeFFee", "7"],    
    ["gLLDHgDLgFL", "1"],    
    ["JJJBBaBBHBBHaLBHJ", "7"],
    ["FBFBgJBDBDgF", "0"],
    ["LLLLakakLakLL", "7"],    
    ["HeJHeJe", "0"],    
    ["LDFLBLLeBLDBBFFBLFBB", "4"]
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