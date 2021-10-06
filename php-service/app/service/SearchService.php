<?php

namespace service;

use Version1\Favorites;
use Version1\Favorites\Movie;
use Version1\Favorites\Movie\Genre;
use Version1\Request;
use Version1\SearchServiceInterface;

class SearchService implements SearchServiceInterface
{
    /** @var Request */
    public Request $request;

    /**
     * @param Request $request
     * @return Favorites
     */
    public function searchFav(Request $request): Favorites
    {
        $this->request = $request;

        $asd =  $this->getUserFav();

        return $asd;
    }

    /**
     * @return Favorites
     */
    public function getUserFav()
    {
        $movie2 = new Movie([
            'title' => 'Squid Game',
            'genres' => [Genre::DRAMA, Genre::THRILLER, Genre::HORROR],
            'description' => '',
        ]);

//        var_export($movie2); die();

        $movie1 = new Movie([
            'title' => 'Firefly',
            'genres' => [Genre::ACTION, Genre::SCI_FI, Genre::COMEDY, Genre::DRAMA],
            'description' => "Take My Love, Take My Land
Take Me Where I Cannot Stand
I Don't Care, I'm Still Free
You Can't Take The Sky From Me
Take Me Out To The Black
Tell Them I Ain't Comin' Back
Burn The Land And Boil The Sea
You Can't Take The Sky From Me
There's No Place I Can Be
Since I Found Serenity
But You Can't Take The Sky From Me...",
        ]);

        /** @var Movie[] $favs */
        $favs = [$movie1, $movie2];

        $asd = new Favorites([
            'count' => count($favs),
            'movies' => $favs,
        ]);

        return $asd;
    }
}
