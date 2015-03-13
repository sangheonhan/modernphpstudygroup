<?php

namespace bookwormkr\Dice;

class Dice
{
    const DEFAULT_ROLLING = 1;
    const DEFAULT_SIZE = 6;
    const DEFAULT_BONUS = 0;

    private $rolling;
    private $size;
    private $bonus;

    public function __construct($dice)
    {
        $this->rolling = self::DEFAULT_ROLLING;
        $this->size = self::DEFAULT_SIZE;
        $this->rolling = self::DEFAULT_BONUS;
        list($this->rolling, $this->size, $this->bonus) = self::getRollingAndSizeAndBonus($dice);
        mt_srand();
    }

    public function roll()
    {
        return self::simulate($this->rolling, $this->size, $this->bonus);
    }

    public static function rollWithDice($dice)
    {
        list($rolling, $size, $bonus) = self::getRollingAndSizeAndBonus($dice);
        return self::simulate($rolling, $size, $bonus);
    }

    private static function simulate($rolling = self::DEFAULT_ROLLING, $size = self::DEFAULT_SIZE, $bonus = self::DEFAULT_BONUS)
    {
        $total = $bonus;
        for ($i = 0; $i < $rolling; $i++) {
            $total += mt_rand(1, $size);
        }

        return $total;
    }

    private static function getRollingAndSizeAndBonus($dice)
    {
        if (preg_match('/^\s*(?<rolling>\d+)d(?<size>\d+)(?:\+(?<bonus>\d+))?\s*$/i', $dice, $matches)) {
            return array(
                intval($matches['rolling']),
                intval($matches['size']),
                isset($matches['bonus']) ? intval($matches['bonus']) : self::DEFAULT_BONUS
            );
        }

        throw new \Exception('Invalid dice format');
    }
}
