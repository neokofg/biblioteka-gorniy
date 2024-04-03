<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Rules\YoutubeURL;
use function Psy\debug;

class UploadController extends Controller
{
    protected function UploadNews(Request $request){
        $validateFields = $request->validate([
            'name' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'content' => 'required',
            'description' => 'required'
        ]);
        $name = $request->input('name');
        $description = $request->input('description');
        $content = $request->input('content');
        $file= $request->file('file');
        $filename= date('YmdHi').$file->hashName();
        $file-> move(public_path('images'), $filename);
        $data = array('name' => $name,'description' => $description,'content' => $content,'image' => $filename,"created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'));
        DB::table('news')->insert($data);
        return redirect()->back()->with('success', 'Новость добавлена!');
    }
    protected function UploadEvents(Request $request){
        $validateFields = $request->validate([
            'name' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'content' => 'required',
            'description' => 'required'
        ]);
        $name = $request->input('name');
        $date = $request->input('date');
        $description = $request->input('description');
        $content = $request->input('content');
        $time = $request->input('time');
        $file= $request->file('file');
        $filename= date('YmdHi').$file->hashName();
        $file-> move(public_path('images'), $filename);
        $data = array('name' => $name, 'date' =>  $date,'time' => $time, 'description' => $description,'content' => $content,'image' => $filename,"created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'));
        DB::table('events')->insert($data);
        return redirect()->back()->with('success', 'Мероприятие добавлено!');
    }
    protected function UploadDocument(Request $request){
        $validateFields = $request->validate([
            'name' => 'required',
            'file' => 'required|mimes:pdf,xlxs,xlx,docx,doc,csv,txt,png,gif,jpg,jpeg',
        ]);
        $name = $request->input('name');
        $file= $request->file('file');
        $filename= date('YmdHi').$file->hashName();
        $file-> move(public_path('images'), $filename);
        $data = array('name' => $name, 'document' => $filename,"created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'));
        DB::table('documents')->insert($data);
        return redirect()->back()->with('success', 'Документ добавлен!');
    }
    protected function DeleteDocument(Request $request){
        $document = $request->input('id');
        DB::table('documents')->where('id', $document)->delete();
        return back();
    }
    protected function UploadVideos(Request $request){
        $validateFields = $request->validate([
            'name' => 'required',
            'youtube_url' => ['required', new YoutubeURL],
            'description' => 'required'
        ]);
        $name = $request->input('name');
        $youtube_url = $request->input('youtube_url');
        $description = $request->input('description');
        $data = array('name' => $name, 'youtube_url' => $youtube_url,'description' => $description,"created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'));
        DB::table('video')->insert($data);
        return redirect()->back()->with('success', 'Видео добавлено!');
    }
    protected function GiveBook(Request $request){
        $validateFields = $request->validate([
            'booknamenew' => 'required',
            'phonenumber' => 'required|exists:users|numeric',
            'bookdate' => 'required|date'
        ]);
        $bookname = $request->input('booknamenew');
        $phonenumber = $request->input('phonenumber');
        $bookdate = $request->input('bookdate');
        $data = array('name' => $bookname, 'phonenumber' => $phonenumber, 'date' => $bookdate,"created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'));
        DB::table('books')->insert($data);
        return redirect()->back()->with('success', 'Книга сдана!');
    }
    protected function UploadReview(Request $request){
        $validateFields = $request->validate([
           'mark' => 'numeric|max:5',
           'review' => 'max:256'
        ]);
        $mark = $request->input('mark');
        $review = $request->input('review');
        $userid = Auth::user()->name;
        $data = array('mark' => $mark, 'review' => $review, 'userid' => $userid,"created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'));
        if (DB::table('reviews')->where('userid', Auth::user()->name)->count() > 0) {
            DB::table('reviews')->where('userid', Auth::user()->name)->update(['mark' => $mark,'review' => $review,"updated_at" => date('Y-m-d H:i:s')]);
        }else{
        DB::table('reviews')->insert($data);
        }
        return back();
    }
    protected function UploadProjects(Request $request){
        $validateFields = $request->validate([
            'name' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'date' => 'required',
            'content' => 'required',
            'description' => 'required'
        ]);
        $name = $request->input('name');
        $date = $request->input('date');
        $description = $request->input('description');
        $content = $request->input('content');
        $file= $request->file('file');
        $filename= date('YmdHi').$file->hashName();
        $file-> move(public_path('images'), $filename);
        $data = array('name' => $name, 'date' =>  $date, 'description' => $description,'content' => $content,'image' => $filename,"created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'));
        DB::table('projects')->insert($data);
        return redirect()->back()->with('success', 'Проект добавлен!');
    }
    protected function GetBook(Request $request){
       $validateFields = $request->validate([
            'id' => 'required|exists:books',
        ]);
        $id = $request->input('id');
        DB::table('books')->where('id','=',$id)->delete();
        return redirect()->back()->with('success', 'Книга возвращена!');
    }
    protected function DeletePost(Request $request){
	$validateFields = $request->validate([
            'id' => 'required',
	    'postType' => 'required'
        ]);
	$postid= $request->input('id');
	$posttype = $request->input('postType');
        DB::table($posttype)->where('id', $postid)->delete();
        return redirect(route($posttype));
    }
    protected function EditPage(Request $request){
	$validateFields = $request->validate([
            'newpagename' => 'required',
	    'newpageimage' => 'image|mimes:jpeg,png,jpg,gif,svg',
	    'newpagedescription' => 'required',
	    'newpagecontent' => 'required',
	    'postType' => 'required',
	    'id'=> 'required',
	    'oldpageimage' => 'required'
        ]);
        $pagename= $request->input('newpagename');
        $pagedescription= $request->input('newpagedescription');
        $pagecontent= $request->input('newpagecontent');
	$posttype= $request->input('postType');
	$id= $request->input('id');
	if($pageimage= $request->file('newpageimage')){
		$pageimagename= date('YmdHi').$pageimage->hashName();
        	$pageimage-> move(public_path('images'), $pageimagename);
	}else{
		$pageimagename = $request->input('oldpageimage');
	}
        $data = array('name' => $pagename, 'description' => $pagedescription,'content' => $pagecontent,'image' => $pageimagename,"updated_at" => date('Y-m-d H:i:s'));
        DB::table($posttype)->where('id',$id)->update($data);
        return redirect()->back()->with('success', 'Успешно!');
    }
    protected function DeleteVideo(Request $request){
    	$validateFields = $request->validate([
		'id' => 'required'
	]);
	$id =$request->input('id');
	DB::table('video')->where('id',$id)->delete();
	return redirect()->back()->with('success', 'Успешно!');
    }
    protected function UploadMainVideo(Request $request){
        $validateFields = $request->validate([
            'file' => 'required_without:youtube|mimes:jpeg,png,jpg,gif,svg,webp,avi,mp4,webm',
            'youtube' => 'required_without:file', [new YoutubeURL],
        ]);
        $file= $request->file('file');
        $youtube = $request->input('youtube');
        if($youtube == null){
            $filename= date('YmdHi').$file->hashName();
            $file-> move(public_path('images'), $filename);
            $data = array('video' => $filename,'youtube' => '0', "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'));
        }else{
            $data = array('video' => '0','youtube' => $youtube, "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'));
        }
        DB::table('mainvideo')->insert($data);
        return redirect()->back()->with('success', 'Контент добавлен!');
    }
    protected function DeleteMainVideo(Request $request){
        $validateFields = $request->validate([
            'id' => 'required',
        ]);
        $id = $request->input('id');
	    DB::table('mainvideo')->where('id',$id)->delete();
	    return redirect()->back()->with('success', 'Успешно!');
    }
    protected function UploadBook(Request $request){
        $validateFields = $request->validate([
            'name' => 'required',
            'file' => 'required|mimes:pdf,xlxs,xlx,docx,doc,csv,txt,png,gif,jpg,jpeg',
            'image' => 'required|mimes:png,gif,jpg,jpeg,webp',
            'description' => 'required'
        ]);
        $name = $request->input('name');
        $description = $request->input('description');
        $file= $request->file('file');
        $filename= date('YmdHi').$file->hashName();
        $file-> move(public_path('images'), $filename);
        $imagefile= $request->file('image');
        $imagefilename= date('YmdHi').$imagefile->hashName();
        $imagefile-> move(public_path('images'), $imagefilename);
        $data = array('pdf' => $filename,'name' => $name,'description' => $description,'image' => $imagefilename, "created_at" =>  date('Y-m-d H:i:s'),"updated_at" => date('Y-m-d H:i:s'));
        DB::table('booksview')->insert($data);
        return redirect()->back()->with('success', 'Успешно!');
    }
    protected function DeleteBooks(Request $request){
        $validateFields = $request->validate([
            'id' => 'required|exists:booksview,id'
        ]);
        $id = $request->input('id');
        DB::table('booksview')->where('id','=',$id)->delete();
        return redirect()->back()->with('success', 'Книга удалена!');
    }
    protected function EditorPageUpload(Request $request){
        $validateFields = $request->validate([
            'name' => 'string|min:2|max:20',
            'description' => 'string|min:2|max:25'
            ]);
        $name = $request->input('name');
        $description = $request->input('description');
        $pagecontent = $request->input('pageedit');
        $data = array('pagecontent' => $pagecontent,'name' => $name,'description' => $description, "created_at" =>  date('Y-m-d H:i:s'),"updated_at" => date('Y-m-d H:i:s'));
        DB::table('editorpage')->where('id', '=', 1)->update($data);
        return redirect()->back()->with('success', 'Успешно!');
    }

    public function uploadListableBook(Request $request)
    {
        $validateFields = $request->validate([
            'file' => 'required|file|mimes:pdf',
            'name' => 'required',
            'description' => 'required'
        ]);

        $name = $request->input('name');
        $description = $request->input('description');
        $file= $request->file('file');
        $filename= date('YmdHi').hash_hmac('sha256',$file->getClientOriginalName(),'file');
        $file-> move(public_path('books/'.$filename), $filename. '.' . $file->getClientOriginalExtension());


        $pdf = new \TvT\PdfToHtml\Pdf(public_path('books/'.$filename.'/'.$filename. '.' . $file->getClientOriginalExtension()), [
            'pdftohtml_path' => env('PDF_TO_HTML_PATH'),
            'pdfinfo_path' => env('PDF_INFO_PATH'),
            'generate' => [
                'singlePage' => false,
                'imageJpeg' => false,
                'ignoreImages' => false,
                'zoom' => 1,
                'noFrames' => false,
            ],
            'html' => [
                'inlineCss' => true,
                'inlineImages' => true,
                'onlyContent' => true,
            ]
        ]);
        print_r($pdf);

        $htmlFolderPath = public_path('books/'.$filename.'/html_pages');
        if (!file_exists($htmlFolderPath)) {
            mkdir($htmlFolderPath, 0777, true);
        }

        // Сохраните каждую страницу PDF как HTML-файл в папке
        foreach ($pdf->getHtml()->getAllPages() as $pageNumber => $page) {
            file_put_contents($htmlFolderPath.'/page_'.$pageNumber.'.html', $page);
        }

        $data = array(
            'name' => $name,
            'file' => $filename,
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            'description' => $description,
            "count" => $pdf->countPages()
        );
        DB::table('listable_books')->insert($data);
        return redirect()->back()->with('success', 'Проект добавлен!');
    }

    public function DeleteListableBook(Request $request)
    {
        $validateFields = $request->validate([
            'id' => 'required'
        ]);
        $id =$request->input('id');
        DB::table('listable_books')->where('id',$id)->delete();
        return redirect()->back()->with('success', 'Успешно!');
    }
}
