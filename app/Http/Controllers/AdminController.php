<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Home;
use App\Models\Skill;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $homes = Home::all();
        $abouts = About::all();
        $skills = Skill::all();
        return view("backend.pages.admin", compact("homes","abouts","skills"));
    }
    public function update(Request $request, Home $home)
    {
        request()->validate([
            "name" => "required",
            "image" => "image|mimes:png,jpg,gif,jpeg",
            "image_cover" => "image|mimes:png,jpg,gif,jpeg",
            "skil_one" => "required",
            "skil_two" => "required",
            "skil_three" => "required",
            "skil_four" => "required",
            "twitter" => "required|url",
            "facebook" => "required|url",
            "instagram" => "required|url",
            "skype" => "required|url",
            "linkdin" => "required|url",
        ]);

        if ($home->image != "profile-img.jpg" && $request->file("image") != null) {
            $imageSrc = public_path('storage/assets/img/profil/') . $home->image;
            unlink($imageSrc);
        }
        if ($home->image_cover != "hero-bg.jpg" && $request->file("image_cover") != null) {
            $imageSrc = public_path('storage/assets/img/cover/') . $home->image_cover;
            unlink($imageSrc);
        }

        if ($request->file("image") != null) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/assets/img/profil', $fileName);
            $home->name = $request->name;
            $home->image = $fileName;
            $home->skil_one = $request->skil_one;
            $home->skil_two = $request->skil_two;
            $home->skil_three = $request->skil_three;
            $home->skil_four = $request->skil_four;
            $home->twitter = $request->twitter;
            $home->facebook = $request->facebook;
            $home->instagram = $request->instagram;
            $home->skype = $request->skype;
            $home->linkdin = $request->linkdin;
            $home->save();
        }
        if ($request->file("image_cover") != null) {
            $fileName = time() . '.' . $request->image_cover->extension();
            $request->image_cover->storeAs('public/assets/img/cover', $fileName);
            $home->name = $request->name;
            $home->image_cover = $fileName;
            $home->skil_one = $request->skil_one;
            $home->skil_two = $request->skil_two;
            $home->skil_three = $request->skil_three;
            $home->skil_four = $request->skil_four;
            $home->twitter = $request->twitter;
            $home->facebook = $request->facebook;
            $home->instagram = $request->instagram;
            $home->skype = $request->skype;
            $home->linkdin = $request->linkdin;
            $home->save();
        }
        $home->name = $request->name;
        $home->skil_one = $request->skil_one;
        $home->skil_two = $request->skil_two;
        $home->skil_three = $request->skil_three;
        $home->skil_four = $request->skil_four;
        $home->twitter = $request->twitter;
        $home->facebook = $request->facebook;
        $home->instagram = $request->instagram;
        $home->skype = $request->skype;
        $home->linkdin = $request->linkdin;
        $home->save();
        return redirect()->back();
    }

    // !!
    public function update_about(Request $request, About $about)
    {
        request()->validate([
            "birthday"=> "required",
            "website"=> "required",
            "phone"=> "required",
            "city"=> "required",
            "age"=> "required",
            "degree"=> "required",
            "email"=> "required",
            "freelance"=> "required",
            "info"=> "required",
        ]);

            $about->birthday = $request->birthday;
            $about->website = $request->website;
            $about->phone = $request->phone;
            $about->city = $request->city;
            $about->age = $request->age;
            $about->degree = $request->degree;
            $about->email = $request->email;
            $about->freelance = $request->freelance;
            $about->info = $request->info;
            $about->save();
            return redirect()->back();
    }
    public function update_skill(Request $request, Skill $skill)
    {
        request()->validate([
            "info"=> "required",
            "skill1"=> "required",
            "n1"=> "required",
            "skill2"=> "required",
            "n2"=> "required",
            "skill3"=> "required",
            "n3"=> "required",
            "skill4"=> "required",
            "n4"=> "required",
            "skill5"=> "required",
            "n5"=> "required",
            "skill6"=> "required",
            "n6"=> "required",
        ]);

            $skill->info = $request->info;
            $skill->skill1 = $request->skill1;
            $skill->n1 = $request->n1;
            $skill->skill2 = $request->skill2;
            $skill->n2 = $request->n2;
            $skill->skill3 = $request->skill3;
            $skill->n3 = $request->n3;
            $skill->skill4 = $request->skill4;
            $skill->n4 = $request->n4;
            $skill->skill5 = $request->skill5;
            $skill->n5 = $request->n5;
            $skill->skill6 = $request->skill6;
            $skill->n6 = $request->n6;
            $skill->save();
            return redirect()->back();
    }
}
