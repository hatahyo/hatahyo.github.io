<?php namespace Track;

function main ($argc, $argv) {
  foreach ($argv as $index=>$value) {
    printf("argv[%s]: %s\n", $index, $value);
  }
}

main($argc - 1, array_slice($argv, 1));

echo run($argc, $argv);
echo run($argc, $argv);

function run ($argc, $argv) {
   $x = (int) $argv[1];
   $y = (int) $argv[2];
   $z = (int) $argv[3];
   return rec($x, $y, $z);
  }

function rec($x, $y, $z){
  static $result;
  var_dump($result);
  if(isset($result["{$x}{$y}{$z}"])){
    return $result["{$x}{$y}{$z}"];
  }

  if($x <= $y){
    $result["{$x}{$y}{$z}"] = $y;
    return $y;
  }else{
    return rec(
              rec($x - 1, $y, $z),
              rec($y - 1, $z, $x),
              rec($z - 1, $x, $y)
            );
  }
}




<?php namespace Track;
echo run($argc, $argv);

function run ($argc, $argv) {
   $x = (int) $argv[1];
   $y = (int) $argv[2];
   $z = (int) $argv[3];
   return rec($x, $y, $z);
  }

function rec($x, $y, $z){
  static $result;
  if(isset($result["{$x}{$y}{$z}"])){
    return $result["{$x}{$y}{$z}"];
  }

  if($x <= $y){
    $result["{$x}{$y}{$z}"] = $y;
    return $y;
  }else{
    return rec(
              rec($x - 1, $y, $z),
              rec($y - 1, $z, $x),
              rec($z - 1, $x, $y)
            );
  }
}