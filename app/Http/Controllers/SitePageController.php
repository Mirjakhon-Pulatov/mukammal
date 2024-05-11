<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Models\journals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SitePageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contact()
    {
        return view('blocks.contact');
    }

    public function maqolalar()
    {
        return view('blocks.maqolalar');
    }

    public function content($slug)
    {
        $contents = DB::table('pages')->where('slug', $slug)->get();
        return view('blocks.view_content', compact('contents'));
    }

    public function news()
    {
        return view('blocks.news');
    }

    public function news_view($slug)
    {
        $news = DB::table("news")->where("slug", $slug)->first();
        return view('blocks.view_news', compact('news'));
    }

    public function all_books()
    {
        return view('blocks.all_books');
    }

    public function about_author($slug)
    {
        $authors = DB::table("about_author")->where("slug", $slug)->first();
        return view('blocks.view_author', compact('authors'));
    }

    public function gallery()
    {
        return view('blocks.gallery');
    }

    public function videogallery()
    {
        return view('blocks.videogallery');
    }

    public function download(Request $request)
    {

        $id = $request->input('journalId');
        // Находим журнал по его идентификатору
        $journal = journals::findOrFail($id);

        // Увеличиваем счетчик загрузок
        $journal->counterdownload += 1;

        // Сохраняем изменения в базе данных
        $journal->save();
    }

    public function download_book(Request $request)
    {
        $id = $request->input('bookId');
        // Находим журнал по его идентификатору
        $book = books::findOrFail($id);

        // Увеличиваем счетчик загрузок
        $book->yuklangan += 1;

        // Сохраняем изменения в базе данных
        $book->save();
    }

    public function getImage($table, $code)
    {
        $getImageId = DB::select("SELECT image_id FROM `featured_images` where dt = '$table' and article = '$code' ");
        if ($getImageId) {
            $getImageId = $getImageId[0]->image_id;
            $getImage = DB::select("Select file from gallerys where id = '$getImageId' ");
            if ($getImage) {
                return $getImage = $getImage[0]->file;
            }
            return '';
        } else {
            return '';
        }
    }
}
