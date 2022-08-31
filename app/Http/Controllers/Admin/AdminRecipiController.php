<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\StoreRecipiRequest;
use App\Models\Recipi;

class AdminRecipiController extends Controller
{
    // レシピ一覧画面
    public function index()
    {
        $recipis = Recipi::all();
        return view('admin.recipis.index', ['recipis' => $recipis]);
    }

    // レシピ投稿画面
    public function create()
    {
        return view('admin.recipis.create');
    }

    // レシピ投稿処理
    public function store(StorerecipiRequest $request)
    {
        $savedImagePath = $request->file('image')->store('recipis', 'public');
        $recipi = new Recipi($request->validated());
        $recipi->image = $savedImagePath;
        $recipi->save();

        return to_route('admin.recipis.index')->with('success', 'レシピを投稿しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    //    指定したIDのレシピの編集画面
    public function edit($id)
    {
        $recipi = Recipi::find($id);
        return view('admin.recipis.edit', ['recipi' => $recipi]);
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
