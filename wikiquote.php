<?php

  // wikiquote.php
  //
  // Autor: Javier Matos Odut
  // Date: 2008.08.17
  // email: niseteocurra AT gmail DOT com
  //
  // This script return three variables to show Quote of the Day in your webpage. You will find
  // quote in $quote variable, author in $author variable and a link to wikipedia in $author_link.
  // You can include this file in other php code and use these three variables.
  // It only works with english quote version.
  //
  // Este pequeño script devuelve a través de tres variables principales la frase célebre del
 
  $base = 'http://en.wikiquote.org/wiki/Special:Export/Wikiquote:Quote_of_the_day/';
  $date = date('F_j,_Y');

  
  $ch = curl_init();

  curl_setopt($ch, CURLOPT_URL, $base.$date);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


  $source = curl_exec($ch);

  
  curl_close($ch);

  $pattern = '/\| ([^|]*) ~ \[\[([^\]]*)\]\]/';
  preg_match($pattern, $source, $match);

  $quote = $match[1];
  $author = $match[2];

  $wikipedia_link = 'http://en.wikipedia.org/wiki/';
  $author_link = $wikipedia_link.preg_replace('/\ /', '_', $author);
  
?>