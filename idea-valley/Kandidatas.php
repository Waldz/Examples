<?php

class Kandidatas extends IdeaValley
{
    public function run($kandidatas)
    {
        $sugebejimai = array(
            'PHP 5.5',
            'PHP 5.6',
            'MySQL',
            'ORM', //(Eloquent būtų privalumas);
            'PHP Framework', //(Laravel būtų privalumas);
            'MVC',
            'GIT',
            'HTML5',
            'CSS3',
            'JQuery'
        );

        $privalumai => array(
            'Automatiniai testai', //(PHPUnit, Selenium);
            'Composer',
            'Linux',
            'PHPStorm'
        );

        $mesSiulome => array(
            'Darbo vietą Kaune',
            'Darbą su įdomiais projektais',
            'Draugišką ir šiuolaikišką kolektyvą',
            'Patogią darbo aplinką ir priemones',
            'Galimybę tobulėti savo srityje',
            'Pluoštą pinigų'
        );

        if ( $kandidatas == $sugebejimai && $kandidatas == $privalumai ) {
            mail('info@ideavalley.lt', 'Noriu darbo', 'Prisegu CV' );

            return $mesSiulome;
        }

        return redirect( 'home' );
    }
}

?>
