<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Task;
use App\User;
use Illuminate\Support\Facades\DB;

use Session;
class TasksController extends Controller
{
    public function index()
    {
    	$user = Auth::user();
    	return view('welcome',compact('user'));
    }

  public function wel()
    {
     $user = DB::table('tasks')->select('id','title','description')->get();
       return view('wel',compact('user'));
    }

    public function add(){
   	return view('add');
    }
   public function create(Request $request)
   {
   	$task = new Task();
   	$task->title = $request->title;
   	$task->description = $request->description;
   	$task->user_id = Auth::id();
   	$task->save();
   	return redirect('/');
   }
   public function edit(Task $task)
   {
   		return view('edit',compact('task'));

   }
   public function update(Request $request,Task $task)
   {
    if(isset($_POST['delete']))
    {

      $task->delete();

    //return view('welcome');
      return redirect()->back()->with('success','Member deleted');
      //return response()->json(['success'=>"Toto list deleted successfully."]);
    }
    else{
      $task->description = $request->description;
      $task->save();
      return redirect('/');
    }
   }
   // public function update(Request $request,Task $task)
   // {
   //      $task->title = $request->title;
   // 		$task->description = $request->description;
   // 		$task->save();
   // 		return redirect('/');
   // }

 // public function destroy(Task $task)
 //   {
 //   $task->delete();
 //      return redirect('/');

 //   }


}
