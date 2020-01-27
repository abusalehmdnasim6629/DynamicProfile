<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;



use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function adminHome(){

        return view('admin_layout');
    }

    public function addperson(){

        return view('admin.add_person');
    }

    public function saveperson(Request $request)
    {
           
       $result = DB::table('tbl_personalinfo')
                  ->select('tbl_personalinfo.*')
                  ->count();
         if($result < 1)
         {       
           $person = array();

           $person['person_first_name'] = $request->person_first_name;
           $person['person_last_name'] = $request->person_last_name;
           $person['person_designation'] = $request->person_designation;
           $person['person_career_goal'] = $request->person_career_goal;
           

           if($request->hasfile('person_image'))
           {
            $image = $request->file('person_image');
            
            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'image/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);

            if($success)
            {
                $person['person_image'] = $image_url;
                DB::table('tbl_personalinfo')->insert($person);
               
                return Redirect('/add-person-detail');
            
                
            }
           
            
        }
        else{
            $data['person_image'] ='';
            DB::table('tbl_personalinfo')->insert($person);
            
            return Redirect('/add-person-detail');
        }    
     
           }else{
            return Redirect::to('/add-person-detail');   
           }

    }

    public function showperson(){

         $result = DB::table('tbl_personalinfo')
                 ->select('tbl_personalinfo.*')
                 ->get();

        $persondetail = view('admin.show_person_details')
                 ->with('result',$result);
  
      return view('admin_layout')
         ->with('admin.show_person_details',$persondetail);


    }

    public function showEQ(){

        $result1 = DB::table('tbl_personaqualification')
        ->select('tbl_personaqualification.*')
        ->get();

        $persondetail1 = view('admin.show_educational_qualification')
                ->with('result1',$result1);

        return view('admin_layout')
          ->with('admin.show_educational_qualification',$persondetail1);

    }

    public function addQulification(){

        return view('admin.add_qualification');
    }

    public function saveQulification(Request $request){

       $qualification = array();

       $qualification['personQualification_degree'] = $request->degree;
       $qualification['personQualification_institute'] = $request->institution;
       $qualification['personQualification_cgpa'] = $request->cgpa;
       $qualification['personQualification_passing_year'] = $request->year;

       DB::table('tbl_personaqualification')
       ->insert($qualification);
       
       return Redirect('/add-educational-qualification');

     
    }

    public function addCv(){

        return view('admin.add_cv');
    }

    public function saveCv(Request $request){


        $cvfile = array();
        if($request->hasfile('cv'))
        {
         $cv = $request->file('cv');
         
         $cv_name = Str::random(20);
         $ext = strtolower($cv->getClientOriginalExtension());
         $cv_full_name = $cv_name.'.'.$ext;
         $upload_path = 'image/';
         $cv_url = $upload_path.$cv_full_name;
         $success = $cv->move($upload_path,$cv_full_name);

         if($success)
         {
             $cvfile['cv_file'] = $cv_url;
             DB::table('tbl_cv')->insert($cvfile);
            
             return Redirect('/add-cv');
         
             
         }


 
        }
 
      
     }

     public function download(){
         
         $n='';
         $dcv = DB::table('tbl_cv')
              ->select('tbl_cv.cv_file')
              ->get();

          foreach ($dcv as $c){
            $n = $c->cv_file;
          }   
        
        $file = public_path().'/'.$n;
        $header = array(
              'Content-Type: application/pdf',
              

        );
       return Response::download($file,'asmnasimCv.pdf',$header);
       

     }
     public function addService(){

        return view('admin.add_service');
     }
     
     public function saveService(Request $request){
                      

        $service = array();

        $service['service_name'] = $request->service_name;
        $service['service_description'] = $request->service_description;
       

        if($request->hasfile('service_image'))
        {
         $image = $request->file('service_image');
         
         $image_name = Str::random(20);
         $ext = strtolower($image->getClientOriginalExtension());
         $image_full_name = $image_name.'.'.$ext;
         $upload_path = 'image/';
         $image_url = $upload_path.$image_full_name;
         $success = $image->move($upload_path,$image_full_name);

         if($success)
         {
             $service['service_image'] = $image_url;
             DB::table('tbl_service')->insert($service);
            
             return Redirect('/add-service-detail');
         
             
         }
        
         
     }
     else{
         $data['service_image'] ='';
         DB::table('tbl_service')->insert($service);
         
         return Redirect('/add-service-detail');
     }    
  
      


     }
    

     public function showservice(){

        $result = DB::table('tbl_service')
        ->select('tbl_service.*')
        ->get();

        $service = view('admin.show_service_details')
                ->with('result',$result);

        return view('admin_layout')
        ->with('admin.show_service_details',$service);




     }


     public function addwork(){

        return view('admin.add_work');
    }

   
    public function saveWork(Request $request)
    {
           
      
           $work = array();

           $work['work_description'] = $request->work_description;
          

           if($request->hasfile('work_image'))
           {
            $image = $request->file('work_image');
            
            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'image/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);

            if($success)
            {
                $work['work_image'] = $image_url;
                DB::table('tbl_work')->insert($work);
               
                return Redirect('/add-work-detail');
            
                
            }
           
            
        }
        else{
            $work['work_image'] ='';
            DB::table('tbl_work')->insert($work);
            
            return Redirect('/add-work-detail');
        }    
     
           
       }

       public function addskill(){

          return view('admin.add_skill');
        }
        

        public function saveskill(Request $request){

            $skill = array();
     
            $skill['skill_title'] = $request->skill_title;
            $skill['skill_description'] = $request->skill_description;
     
            DB::table('tbl_skill')
            ->insert($skill);
            
            return Redirect('/add-skill-detail');
     
          
         }

         public function deleteEq($personQualification_id){


           
            DB::table('tbl_personaqualification')
            ->where('personQualification_id',$personQualification_id)
            ->delete(); 
            
            return Redirect::to('/show-educational-qualification');
         }

         public function showskill(){

            $result = DB::table('tbl_skill')
                    ->select('tbl_skill.*')
                    ->get();

            $skill = view('admin.show_skill_details')
                            ->with('result',$result);

            return view('admin_layout')
                    ->with('admin.show_skill_details',$skill);



          }

          public function deleteskill($skill_id){


           
            DB::table('tbl_skill')
            ->where('skill_id',$skill_id)
            ->delete(); 
            
            return Redirect::to('/show-skill-detail');
         }


         public function showwork(){

            $result = DB::table('tbl_work')
                    ->select('tbl_work.*')
                    ->get();

            $work = view('admin.show_work_details')
                            ->with('result',$result);

            return view('admin_layout')
                    ->with('admin.show_work_details',$work);



          }

          public function deletework($work_id){


           
            DB::table('tbl_work')
            ->where('work_id',$work_id)
            ->delete(); 
            
            return Redirect::to('/show-work-detail');
         }
         
         public function deletservice($service_id){


           
            DB::table('tbl_service')
            ->where('work_id',$service_id)
            ->delete(); 
            
            return Redirect::to('/show-service-detail');
         }
          
     
    


}
