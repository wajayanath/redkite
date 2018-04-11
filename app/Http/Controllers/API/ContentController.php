<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Validator;
use App\Content;

class ContentController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = Content::all();
        return $this->sendResponse($contents->toArray(), 'Contents retrieved successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'title' => 'required',
            'body' => 'required',
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $content = Content::create($input);
        return $this->sendResponse($content->toArray(), 'Content created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $content = Content::find($id);
        if (is_null($content)) {
            return $this->sendError('Content not found.');
        }
        return $this->sendResponse($content->toArray(), 'Content retrieved successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'title' => 'required',
            'body' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        $content->user_id = $input['user_id'];
        $content->title = $input['title'];
        $content->body = $input['body'];
        $content->cancertype_id = $input['cancertype_id'];
        $content->category_id = $input['category_id'];
        $content->treatment_stage_id = $input['treatment_stage_id'];
        $content->save();
        return $this->sendResponse($content->toArray(), 'content updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        $content->delete();
        return $this->sendResponse($content->toArray(), 'Content deleted successfully.');
    }
}
