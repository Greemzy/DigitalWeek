<?php

namespace App\Http\Controllers;

use App\Activity;
use App\TypeActivity;
use App\UserActivity;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $activities = Activity::where('date_activity', '>=' , Carbon::now())
            ->orderBy('date_activity', 'desc')
            ->take(4)
            ->get();

        return view('activities.index', ['activities' => $activities, 'user' => $user]);
    }

    public function more(){
        if(\Request::ajax()) {
            $data = Input::all();
            if(array_key_exists('nb', $data))
            {
                $activities = Activity::where('date_activity', '>=' , Carbon::now())
                    ->orderBy('date_activity', 'desc')
                    ->skip($data['nb'])
                    ->take(2)
                    ->get();

                if($activities->count() > 0){
                    foreach($activities as $act){
                        $act->image = $act->type;
                        $act->useract = $act->user;
                    }

                    if(!is_null($activities))
                    {
                        return \Response::json(array(
                            'success' => true,
                            'activities' => $activities->toJson()
                        ));
                    }
                }

            }
        }
        return \Response::json(array(
            'success' => false
        ));
    }

    public function perso()
    {
        $user = Auth::user();
        if(!is_null($user)){
            $activities = Activity::where('user_id', '=', '1')->get();

            $activitiesAll = $activities;
            foreach($user->userActivity as $act){
                $activitiesAll->push($act->activity);
            }

            return view('activities.perso', ['activities' => $activitiesAll]);
        }

        return redirect(route('activities.index'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = TypeActivity::all();
        return view('activities.create', ['types' => $type]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $activity = Activity::create($request->all());
        $activity->user_id = 1;
        $activity->hotel_id = 1;
        $activity->save();
        if(Auth::user()->role == "admin")
        {
            return redirect(route('admin.index'));
        }
        else
        {
            return redirect(route('activities.index'));
        }
    }

    public function add(Activity $activity){

        $connected = Auth::user()->id;
        if(!is_null($connected) && $connected != $activity->user_id && !$activity->isParticipate()) {
            $activityUser = new UserActivity();
            $activityUser->user_id = $connected;
            $activityUser->activity_id = $activity->id;

            $activityUser->save();
        }

        return redirect(route('activities.perso'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
        $user = Auth::user();
        $users = $activity->participate()->get();

        return view('activities.show', ['activity' => $activity,'user' => $user,'users' => $users]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
