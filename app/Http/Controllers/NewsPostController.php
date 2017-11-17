<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newspost;
use Session;

class NewsPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.news.index')
            ->with('news', Newspost::orderBy('created_at', 'desc')->get())
            ->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'image|max:5000',
            'content' => 'required'
        ]);

        $image = $request->image;
        $image_name = time() . $image->getClientOriginalName();
        $image->move('img/postImage', $image_name);

        $news = NewsPost::create([
            'title' => $request->title,
            'image' => 'img/postImage/' . $image_name,
            'content' => $request->content,
            'slug' => str_slug($request->title)
        ]);

        Session::flash("success", "You have successfully saved the details");

        return redirect()->route('news.index');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.news.edit')->with('news', Newspost::find($id));
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
        $this->validate($request, [
            'title' => 'required',
            'image' => 'image|max:5000',
            'content' => 'required'
        ]);

        $news = Newspost::find($id);

        if($request->hasFile('image')) {

            //Get item
            $image = $request->image;

            //Give name to the item
            $image_name = time() . $image->getClientOriginalName();

            //Move to the item to specified folder
            $image->move('img/postImage', $image_name);

            //Get the item with new name
            $news->image = $image_name;
        }

        $news->title = $request->title;
        $news->content = $request->content;
        $news->slug = str_slug($request->title);
        $news->save();

        Session::flash('success', "Post has been successfully updated");

        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = Newspost::find($id);

        $news->delete();

        Session::flash('success', "Post has been successfully deleted");

        return redirect()->route('news.index');
    }

    public function trashed()
    {
        $trashed = Newspost::onlyTrashed()->get();

        return view('admin.news.trashed')->with('trashed', $trashed);
    }

    public function restore($id)
    {
        $restore = Newspost::withTrashed()->where('id', $id)->first();

        $restore->restore();

        Session::flash('success', "Post has been successfully restored");

        return redirect()->route('news.index');
    }

    public function kill($id)
    {
        $kill = Newspost::withTrashed()->where('id', $id)->first();

        $kill->forceDelete();

        Session::flash('success', "Post has been permanently deleted");

        return redirect()->route('news.index');
    }

}
