
<?php
/*echo "# Blackjack" >> README.md
git init
git add README.md
git commit -m "first commit"
git remote add origin https://github.com/thebirdman33/Blackjack.git
git push -u origin master*/
//create a deck of cards
  $suits = array('Hearts', 'Spades', 'Clubs', 'Diamonds');
  $values = array(2, 3, 4, 5, 6, 7, 8, 9, 10, 'J'=>10, 'Q'=>10, 'K'=>10, 'A');
  $deck = array();
  foreach($suits as $suit) {
    foreach($values as $value) {
      $deck[] = array('value'=>$value, 'suit'=>$suit);
    }
  }
  //shuffle a deck of cards
  shuffle($deck);

//  $hand = array_pop($card['value'] . $card['suit']);
  //echo $card['value'] . ' of ' . $card['suit'];
//deal two hands of two cards
function deal() {
  for($i=0; $i<1; $i++) {
    global $deck;
    $card = array_pop($deck);
    return $card['value'] . ' of ' . $card['suit'] . '<br />';

    //create card values
  }
}
//function declare_winner

$player1 = deal() . deal();
$player2 = deal() . deal();
  echo 'Player 1'. '<br />' . $player1;
  echo 'Player 2'. '<br />' . $player2;
if ($player1 > $player2) {
  echo 'Player 1 Wins!';
} elseif ($player1 < $player2) {
  echo 'Player 2 Wins!';
} elseif ($player1 == $player2) {
  echo 'Tie Game';
}















/*echo 'Player 1 <br />';
echo deal();
echo 'Player 2 <br />';
echo deal();*/
//evaluate the best hand
