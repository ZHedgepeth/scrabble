<?php
    class Scrabble
    {
        private $word;
        private $score;
        public $letters_players;

        function __construct($scrabble_word)
        {
            $this->word = $scrabble_word;
            $this->score = 0;
            $this->letters_players = [];
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
            $lowered_word = strtolower($word_to_score);
            $letters = str_split($lowered_word);
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


        function p1Letters()
        {
            $alphabet = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "x", "y", "z"];
            $p_one_given_letters = array();
            $p_two_given_letters = array();
            for ($index = 0; $index <= 10; $index++)
            {
                $alphabet_index = rand(0, 23);
                $player_letter = $alphabet[$alphabet_index];
                 array_push($p_one_given_letters, $player_letter);
            }
        }

        function p2Letters()
        {
            $alphabet = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "x", "y", "z"];
            $p_two_given_letters = array();
            for ($index = 0; $index <= 10; $index++)
            {
                $alphabet_index = rand(0, 23);
                $player_letter = $alphabet[$alphabet_index];
                 array_push($p_two_given_letters, $player_letter);
            }

        }

  }

?>
