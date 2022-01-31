<?php 


/**
 * Class EntityType
 *
 * @package App\Http
 */
final class UserType
{
    const USER = '10';
    const COUNSELLOR = '20';
    const SUPER_ADMIN = '30';

    /**
     * Returns respective value.
     *
     * @param $x
     *
     * @return null
     */
    public static function getValue($x)
    {
        $value = null;
        switch ($x) {
            case '10':
                $value = 'User';
                break;
            case '20':
                $value = 'Counsellor';
                break;
            case '30':
                $value = 'Super Admin';
                break;
        }

        return $value;
    }

    /**
     * @return array
     */
    public static function getAll()
    {
        return [
            self::USER => UserType::getValue(self::USER), 
            self::COUNSELLOR => UserType::getValue(self::COUNSELLOR)
        ];
    }
}


final class Gender
{
    CONST MALE = '10';
    CONST FEMALE = '20';
    CONST NOT_SPECIFIED = '30';

    /**
     * Returns respective value.
     *
     * @param $x
     *
     * @return null
     */
    public static function getValue($x)
    {
        $value = null;
        switch ($x) {
            case '10':
                $value = 'Male';
                break;
            case '20':
                $value = 'Female';
                break;
        }

        return $value;
    }

    /**
     * @return array
     */
    public static function getAll()
    {
        return [
            self::MALE => Gender::getValue(self::MALE),
            self::FEMALE => Gender::getValue(self::FEMALE),
        ];
    }
}
