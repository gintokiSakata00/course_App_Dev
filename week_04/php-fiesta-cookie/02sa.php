<?php
  function hp_sum($ginLearningswithGil){
    $add_hp =0;
    foreach ($ginLearningswithGil as $hp){
           $add_hp = $add_hp + $hp[5];
    }
    return $add_hp;
  }

  function ave_attack($ginLearningswithGil){
    $avg_attack =0;
    $countTotalPokemon = count($ginLearningswithGil);
    foreach ($ginLearningswithGil as $avg){
           $avg_attack = $avg_attack + $avg[6];
    }
    $average = $avg_attack/$countTotalPokemon;
    return $average;
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

  echo "Total pokemon hp: ".hp_sum($ginLearningswithGil)."<br>";
  echo "Average pokemon attack ".ave_attack($ginLearningswithGil);


?>