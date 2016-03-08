 <?php

    class SearchController extends \BaseController {


        public function getSearch()
        {
            //get keywords input for search
            $keyword=  Input::get('q');
            $keywords = Explode(' ',$keyword);
            $query= DB::table('events')
                        ->leftJoin('organizations', 'organizations.id', '=', 'events.org_id');
            foreach ($keywords as $key => $value) {
                $query ->orWhere('organizations.name', 'like', DB::raw("'%$value%'"));
                $query ->orWhere('events.name', 'like', DB::raw("'%$value%'"));
            }

            //search that event in Database
             $events= $query->get();
             // var_dump($events);

            //return display search result to user by using a view
            return View::make('event')->with('event', $events);
        }

    }