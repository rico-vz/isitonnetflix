<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{

    private function searchTitle($title)
    {
        $title = htmlspecialchars($title);
        $curl = curl_init();
        $apikey = env('APILAYER_KEY');
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.apilayer.com/unogs/search/titles?title=$title&limit=45&order_by=title",
            CURLOPT_HTTPHEADER => array(
                "Content-Type: text/plain",
                "apikey: $apikey"
            ),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET"
        ));

        $response = curl_exec($curl);

        $statuscode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        curl_close($curl);

        if ($statuscode == 200) {
            return $response;
            die();
        } else {
            return 'ratelimit';
            die();
        }
    }

    public function index()
    {
        if (isset($_GET['title'])) {
            return redirect('/search/results/' . $_GET['title']);
        }
        return view('search');
    }

    public function search($title)
    {


        if (isset($title)) {
            $response = $this->searchTitle($title);
            if ($response == 'ratelimit') {
                redirect('/ratelimit');
            } else {
                $results = json_decode($response, true);
                $resultsArray = $results['results'];
                if (!isset($resultsArray) or count($resultsArray) == 0) {
                    return abort(404, "No results found");
                }
                foreach ($resultsArray as $key => $result) {
                    $resultsArray[$key]['titleDistance'] = levenshtein($title, $result['title']);
                }
                usort($resultsArray, function ($a, $b) {
                    return $a['titleDistance'] <=> $b['titleDistance'];
                });

                $results['results'] = $resultsArray;

                $data = [
                    'title' => $title,
                    'results' => $results,

                ];
                return view('results', $data);
            }
        } else {
            return view('search');
        }
    }

    public function ratelimit()
    {
        return view('ratelimit');
    }
}