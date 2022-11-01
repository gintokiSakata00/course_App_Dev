<?php
  function hp_sum($ginLearningswithGil){ //function
    $add_hp =0; //initialize
    foreach ($ginLearningswithGil as $hp){
           $add_hp = $add_hp + $hp[5];
    }
    return $add_hp; //return value
  }

  function ave_attack($ginLearningswithGil){ //function average attack
    $avg_attack =0; //initialize 0 as variable avg_attack
    $countTotalPokemon = count($ginLearningswithGil); //count the array indexes it will results to 10
    foreach ($ginLearningswithGil as $avg){ //iterate using foreach loop with variable $avg
           $avg_attack = $avg_attack + $avg[6]; //geting values of attack index 6 of the array
    }
    $average = $avg_attack/$countTotalPokemon; //getting the average
    return $average; //return value
  }

  $ginLearningswithGil = array //2.Create a multidimensional array named YourTeamName.
  (
      array(1, "Bulbasaur", "Grass", "Poison", "Overgrow", 45, 49, 49),
      array(2, "Ivysaur", "Grass", "Poison", "Overgrow", 60, 62, 63),
      array(3, "Venusaur", "Grass", "Poison", "Overgrow", 80, 82, 83),
      array(4, "Charmander", "Fire", "N/A", "Blaze", 39, 52, 43),
      array(5, "Charmeleon", "Fire", "N/A", "Blaze", 58, 64, 58),
      array(6, "Charizard", "Fire", "Flying", "Blaze", 78, 84, 78),
      array(7, "Squirtle", "Water", "N/A", "Torrent", 44, 48, 65),
      array(8, "Wartotle", "Water", "N/A", "Torrent", 59, 63, 80),
      array(9, "Blastoise", "Water", "N/A", "Torrent", 79, 83, 100),
      array(10, "Caterpie", "Bug", "N/A", "Shield Dust", 50, 20, 55),
      
  );

  echo "Total pokemon hp: ".hp_sum($ginLearningswithGil)."<br>"; //printing total hp
  echo "Average pokemon attack ".ave_attack($ginLearningswithGil); //printing avg attack



?>