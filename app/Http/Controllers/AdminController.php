<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Models\Tag;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $adminRequests = User::where('is_admin', NULL)->get();
        $revisorRequests = User::where('is_revisor', NULL)->get();
        $writerRequests = User::where('is_writer', NULL)->get();
        return view('admin.dashboard', compact('adminRequests', 'revisorRequests', 'writerRequests'));
    }
    public function setadmin(User $user)
    {
        $user->is_admin = true;
        $user->save();
        return redirect(route('admin.dashboard'))->with('message', "hai reso $user->name amministratore");
    }
    public function setrevisor(User $user)
    {
        $user->is_revisor = true;
        $user->save();
        return redirect(route('admin.dashboard'))->with('message', "hai reso $user->name  revisore");
    }
    public function setwriter(User $user)
    {
        $user->is_writer = true;
        $user->save();
        return redirect(route('admin.dashboard'))->with('message', "hai reso $user->name redattore");
    }

    public function editTag(Request $request, Tag $tag){
        $request->validate([
            'name' => 'required|unique:tags',
        ]);
        $tag->update([
            'name' => strtolower($request->name),
        ]);
        return redirect()->back()->with('message', 'Tag aggiornato correttamente');

    }

    public function deleteTag(Tag $tag){
        foreach($tag->articles as $article){
            $article->tags()->detach($tag);
        }
        $tag->delete();
        return redirect()->back()->with('message', 'Tag eliminato correttamente');
    }
    public function storeCategory(Request $request)
    {
        Category::create([
            'name' => strtolower($request->name),
        ]);
        return redirect()->back()->with('message', 'Categoria inserita correttamente');
    }
}
