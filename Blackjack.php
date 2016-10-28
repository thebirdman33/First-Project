echo "# Blackjack" >> README.md
git init
git add README.md
git commit -m "first commit"
git remote add origin https://github.com/thebirdman33/Blackjack.git
git push -u origin master
<?php
//create a deck of cards
  $suits = array('Hearts', 'Spades', 'Clubs', 'Diamonds');
  $values = array(2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K', 'A');
  $deck = array();
  foreach($suits as $suit) {
    foreach($values as $value) {
      $deck[] = array('value'=>$value, 'suit'=>$suit);
    }
  }
  //shuffle a deck of cards
  shuffle($deck);
  $card = array_pop($deck);
//  $hand = array_pop($card['value'] . $card['suit']);
  //echo $card['value'] . ' of ' . $card['suit'];
//deal two hands of two cards
function deal() {
  //for($i=0; $i<2; $i++) {
    global $deck, $card;
    echo $card['value'] . ' of ' . $card['suit'];

//}
}

echo deal();
