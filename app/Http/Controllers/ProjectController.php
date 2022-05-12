<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Category;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
class ProjectController extends Controller
{
    public function index(){

        $projects = Project::all();
        $category = Category::all();
        return view('projects.index', ['projects' => $projects, 'category' => $category]);

    }

    public function viewcat($cat){
        if(Category::where('category_name', $cat)->exists()){
            $categories = Category::all();
            $category = Category::where('category_name', $cat)->first();
            $projects = Project::where('id_category', $category->id)->get();
            return view('projects.category', compact('category', 'projects', 'categories'));
        }else{
            return redirect('/projects');
        }
    }

    public function details($title){

        $projects = Project::where('title', $title)->first();
        return view('projects.details', ['projects' => $projects]);

    }

    public function create(){
        $category = Category::all();
        return view('projects.create', compact("category"));
    }

    public function store(Project $project){

        request()->validate([
            'title'=>'required|unique:project',
            'description'=>'required',
            'id_category'=>'required',
            'dateLancement'=>'required',
            'dateRealisation'=>'required'
        ]);

        Project::create([
            'title'=>request('title'),
            'description'=>request('description'),
            'id_category'=>request('id_category'),
            'dateLancement'=>request('dateLancement'),
            'dateRealisation'=>request('dateRealisation')
        ]);

        return redirect('/projects');


    }

    public function edit(Project $project){
        //$category = Category::all();
        $category = Category::all();
        $prodcat = DB::table('category')->join('project', 'category.id', '=', 'project.id_category')->select('category.category_name')->where('category.id', $project->id_category)->value('category_name');
        //$pp = array_first($prodcat, 1);
        return view('projects.edit', ['project' => $project, 'category' => $category, 'prodcat' => $prodcat]);

    }

    public function update(Project $project){

        request()->validate([
            'title'=>'required|unique:project',
            'description'=>'required',
            'id_category'=>'required',
            'dateLancement'=>'required',
            'dateRealisation'=>'required'
        ]);

        $project->update([
            'id'=>request('id'),
            'title'=>request('title'),
            'description'=>request('description'),
            'id_category'=>request('id_category'),
            'dateLancement'=>request('dateLancement'),
            'dateRealisation'=>request('dateRealisation')
        ]);

        return redirect('/projects');
    }

    public function destroy(int $id){

        //dd($request->all());
        $project = Project::find($id);
        $project->delete();
        return redirect('/projects');

    }


    public  function addStudent() {        
        $projects=Project::all();
        return view('projects.addStudent',['projects' => $projects]);
    }


    public  function storeStudent(Request $request) {
        $request->validate([
        "code_apogee"=>"required",
        "id"=>"required",
        "mission"=>"required"
        ]);
        
        //dd($request->libelle);
        $student= Student::all();
       
            $project= Project::find($request->id); //club_id
            $project->students()->attach($request->code_apogee, ['mission'=>$request->mission]); //etudiant_CNE
            
            return redirect('/projects');
          /* }
           else{
            return back()->withErrors(['CNE' => [" Etudiant n'existe pas"]]);
           }
       }  */
       // dd($club->bureau);
        //avec specification de fillable dans models club.php
       //Club::create($request->all());
        
    }


    public  function deletion() {        
        $projects=Project::all();
        return view('projects.removeStudent',['projects' => $projects]);
    }


    public  function removeStudent(Request $request) {
        $request->validate([
        "code_apogee"=>"required",
        "id"=>"required"
        
        ]);
        
        //dd($request->libelle);
        $student= Student::all();
       /*foreach($etudiant as $e){
           if ($e->CNE == $request->CNE ){*/
            $project= Project::find($request->id); //club_id
            $project->students()->detach($request->code_apogee); 
            return redirect('/projects');
          /* }
           else{
            return back()->withErrors(['CNE' => [" Etudiant n'existe pas"]]);
           }
       }  */
       // dd($club->bureau);
        //avec specification de fillable dans models club.php
       //Club::create($request->all());
        
    }

    /*public function edit(Student $student){

        return view('students.edit', ['student' => $student]);

    }

    public function update(Student $student){

        request()->validate([
            'cne'=>'required',
            'cin'=>'required',
            'nom'=>'required',
            'naissance'=>'required',
            'filiere'=>'required',
            'email'=>'required|unique:students',
        ]);

        $student->update([
            'cne'=>request('cne'),
            'cin'=>request('cin'),
            'nom'=>request('nom'),
            'naissance'=>request('naissance'),
            'filiere'=>request('filiere'),
            'email'=>request('email'),
        ]);

        return redirect('/students');
    }

    public function create(){
        return view('students.create');
    }

    public function store(Student $student){

        request()->validate([
            'cne'=>'required|unique:students',
            'cin'=>'required|unique:students',
            'nom'=>'required',
            'naissance'=>'required',
            'filiere'=>'required',
            'email'=>'required|unique:students',
        ]);

        Student::create([
            'cne'=>request('cne'),
            'cin'=>request('cin'),
            'nom'=>request('nom'),
            'naissance'=>request('naissance'),
            'filiere'=>request('filiere'),
            'email'=>request('email'),
        ]);

        return redirect('/students');


    }

    public function destroy(string $cne){

        //dd($request->all());
        $student = Student::find($cne);
        $student->delete();
        return redirect('/students');

    }*/
}
