<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function Sodium\add;
use function Sodium\compare;

class GetDataController extends Controller
{
    protected function GetNews()
    {
        $news = DB::table('news')->orderBy('created_at', 'DESC')->get();
        return view('news', compact(['news']));
    }
    protected function GetEvents()
    {
        $events = DB::table('events')->orderBy('date', 'DESC')->get();
        return view('events', compact(['events']));
    }
    protected function GetDocuments()
    {
        $documents = DB::table('documents')->orderBy('id', 'DESC')->get();
        return view('documents', compact(['documents']));
    }
    protected function GetVideos()
    {
        $videos = DB::table('video')->orderBy('id', 'DESC')->get();
        return view('videos', compact(['videos']));
    }
    protected function GetUserData()
    {
        $userdata = DB::select('select * from users where id=' . Auth::user()->id);
        $bookdata = DB::select("select * from books where phonenumber='" . Auth::user()->phonenumber . "'");
        return view('private', compact(['userdata', 'bookdata']));
    }
    protected function GetEventsWithDate(Request $request)
    {
        $validateFields = $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);
        $start = Carbon::parse($request->input('start_date'));
        $end = Carbon::parse($request->input('end_date'));
        $events = DB::table('events')->whereBetween('date', [$start, $end])->orderBy('date', 'DESC')->get();
        return view('events', compact('events'));
    }
    protected function GetEventsWithName(Request $request)
    {
        $validateFields = $request->validate([
            'search' => 'required|max:255',
        ]);
        $search = $request->input('search');
        $events = DB::table('events')->where('name', 'LIKE', '%' . $search . '%')->orWhere('description', 'LIKE', '%' . $search . '%')->orderBy('date', 'DESC')->get();
        return view('events', compact('events'));
    }
    protected function GetProjects(Request $request)
    {
        $projects = DB::table('projects')->orderBy('date', 'DESC')->get();
        return view('projects', compact(['projects']));
    }
    protected function GetReviews(Request $request)
    {
        $reviews = DB::table('reviews')->orderBy('updated_at', 'DESC')->get();
        return view('readers', compact(['reviews']));
    }
    protected function GetMainData(Request $request)
    {
        $news = DB::table('news')->orderBy('created_at', 'DESC')->get();
        $events = DB::table('events')->orderBy('date', 'DESC')->get();
        $projects = DB::table('projects')->orderBy('created_at', 'DESC')->get();
        $mainvideo = DB::table('mainvideo')->orderBy('created_at', 'DESC')->get();
        return view('index', compact(['news', 'events', 'projects', 'mainvideo']));
    }
    protected function GetNewsID(Request $request)
    {
        $id = $_GET['id'];
        $news = DB::table('news')->where('id', '=', $id)->get();
        $tabletype = 'news';
        return view('page', compact(['news', 'tabletype']));
    }
    protected function GetEventsID(Request $request)
    {
        $id = $_GET['id'];
        $news = DB::table('events')->where('id', '=', $id)->get();
        $tabletype = 'events';
        return view('page', compact(['news', 'tabletype']));
    }
    protected function GetProjectsID(Request $request)
    {
        $id = $_GET['id'];
        $news = DB::table('projects')->where('id', '=', $id)->get();
        $tabletype = 'projects';
        return view('page', compact(['news', 'tabletype']));
    }
    protected function GetBooks(Request $request)
    {
        $books = DB::table('booksview')->get();
        return view('books', compact(['books']));
    }
    protected function GetBooksWithName(Request $request)
    {
        $validateFields = $request->validate([
            'search' => 'required|max:255',
        ]);
        $search = $request->input('search');
        $books = DB::table('booksview')->where('name', 'LIKE', '%' . $search . '%')->orWhere('description', 'LIKE', '%' . $search . '%')->orderBy('created_at', 'DESC')->get();
        return view('books', compact('books'));
    }
    protected function GetEditor(Request $request)
    {
        $pagecontents = DB::table('editorpage')->get();
        return view('editor', compact('pagecontents'));
    }

    public function GetListableBooks(Request $request)
    {
        $books = DB::table('listable_books')->get();
        return view('listablebooks', compact(['books']));
    }

    public function GetApiBook($id)
    {
        $book = DB::table('listable_books')->find($id);

        $list_html = [];

        for ($i = 1; $i <= $book->count; $i++) {
            array_push($list_html, url('/').'/books/'.$book->file.'/html_pages/page_'.$i.'.html');
        }
        return response()->json([
            "id" => $book->id,
            "name" => $book->name,
            "description" => $book->description,
            "html_pages" => $list_html,
            "count_pages" => $book->count
        ]);
    }

    public function GetBook($id) {
        return view('book', compact('id'));
    }

}
