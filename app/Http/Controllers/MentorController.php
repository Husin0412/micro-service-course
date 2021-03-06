<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class MentorController extends Controller
{

    public function index()
    {
        $mentors = Mentor::all();
        return response()->json([
            'status' => 'success',
            'data' => $mentors,
        ]);
    }

    public function show($id)
    {
        $mentor = Mentor::find($id);
        // $m = \json_decode(\json_encode($mentor), true);
        // $count = $m ? count($m) : 0;
        if (!$mentor) {
            return \response()->json([
                'status' => 'error',
                'message' => 'mentor not found',
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $mentor,
        ]);

    }

    public function create(Request $request)
    {
        $rules = [
            'name' => 'required|string',
            'profile' => 'required|url',
            'profession' => 'required|string',
            'email' => 'required|email',
        ];

        $data = $request->all();

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return \response()->json([
                'status' => 'error',
                'message' => $validator->errors(),
            ], 400);
        }

        $mentor = Mentor::create($data);

        return response()->json([
            'status' => 'success',
            'data' => $mentor,
        ]);

    }

    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'string',
            'profile' => 'url',
            'profession' => 'string',
            'email' => 'email',
        ];

        $data = $request->all();

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return \response()->json([
                'status' => 'error',
                'message' => $validator->errors(),
            ], 400);
        }

        $mentor = Mentor::find($id);

        if (!$mentor) {
            return response()->json([
                'status' => 'error',
                'message' => 'mentor not found',
            ], 404);
        }

        $mentor->fill($data);

        $mentor->save();
        return \response()->json([
            'status' => 'success',
            'data' => $mentor,
        ], 200);

    }

    public function search(Request $request)
    {
        $search = $request->input('data');
        $search_mentor = DB::table('mentors')->where( function($query) use ($search) {
            $query->where('name','like','%'.$search.'%');
        })->get();

        return response()->json([
            'status' => 'success',
            'data' => $search_mentor,
        ]);
    }

    public function destroy($id)
    {
        $mentor = Mentor::find($id);
        if (!$mentor) {
            return \response()->json([
                'status' => 'error',
                'message' => 'mentor not found',
            ], 404);
        }

        $mentor->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'mentor deleted',
        ]);
    }

}