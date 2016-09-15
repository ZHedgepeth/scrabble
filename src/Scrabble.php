<?php
    class Scrabble
    {
        private $word;
        private $score;

        function __construct($scrabble_word)
        {
            $this->word = $scrabble_word;
            $this->score = 0;
        }

        function getWord()
        {
            return $this->word;
        }
        function setWord($word_to_score)
        {
            $this->word = (string) $word_to_score;
        }
        function getScore()
        {
            return $this->score;
        }
        function setScore($word_to_score_result)
        {
            $this->score = (int) $word_to_score_result;
        }

        function checkScore()
        {
            $word_to_score = $this->getWord();
            $letters = str_split($word_to_score);
            $value_one_letters = ["e", "a", "i", "o", "u", "l", "n", "r", "s", "t"];
            $value_two_letters = ["d", "g"];
            $value_three_letters= ["b","c","m","p"];
            $value_four_letters= ["f","h","v","w","y"];
            $value_five_letters= ["k"];
            $value_eight_letters= ["j", "x"];
            $value_ten_letters= ["q", "z"];
            $all_values = [$value_one_letters, $value_two_letters, $value_three_letters, $value_four_letters, $value_five_letters, $value_eight_letters, $value_ten_letters];
            $values = [1,2,3,4,5,8,10];
            $score = 0;


            foreach($letters as $letter)
            {
              for($index = 0; $index < count($all_values); $index++)
                {
                  foreach($all_values[$index] as $letter_value)
                  {
                    if($letter === $letter_value)
                    {
                        $score += $values[$index];
                    }
                  }
                }
              }
            return $score;


    }
  }

?>
