<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Carbon;
use Image;

class ProjectController extends Controller
{
    public function AllProject()
    {
        $project = Project::latest()->get();
        return view("admin.project.project_all", compact("project"));
    } // End Method

    public function AddProject()
    {
        return view("admin.project.project_add");
    } // End Method

    public function StoreProject(Request $request)
    {
        $request->validate(
            [
                "project_name" => "required",
                "project_title" => "required",
                "project_image" => "required",
            ],
            [
                "project_name.required" => "Project Name is Required",
                "project_title.required" => "Project Titile is Required",
            ]
        );

        $image = $request->file("project_image");
        $name_gen =
            hexdec(uniqid()) . "." . $image->getClientOriginalExtension(); // 3434343443.jpg

        Image::make($image)
            ->resize(1020, 519)
            ->save("upload/project/" . $name_gen);
        $save_url = "upload/project/" . $name_gen;

        Project::insert([
            "project_name" => $request->project_name,
            "project_title" => $request->project_title,
            "project_description" => $request->project_description,
            "project_image" => $save_url,
            "created_at" => Carbon::now(),
        ]);
        $notification = [
            "message" => "Project Inserted Successfully",
            "alert-type" => "success",
        ];

        return redirect()
            ->route("all.project")
            ->with($notification);
    } // End Method

    public function EditProject($id)
    {
        $project = Project::findOrFail($id);
        return view("admin.project.project_edit", compact("project"));
    } // End Method

    public function UpdateProject(Request $request)
    {
        $project_id = $request->id;

        if ($request->file("project_image")) {
            $image = $request->file("project_image");
            $name_gen =
                hexdec(uniqid()) . "." . $image->getClientOriginalExtension(); // 3434343443.jpg

            Image::make($image)
                ->resize(1020, 519)
                ->save("upload/project/" . $name_gen);
            $save_url = "upload/project/" . $name_gen;

            Project::findOrFail($project_id)->update([
                "project_name" => $request->project_name,
                "project_title" => $request->project_title,
                "project_description" => $request->project_description,
                "project_image" => $save_url,
            ]);
            $notification = [
                "message" => "Project Updated with Image Successfully",
                "alert-type" => "success",
            ];

            return redirect()
                ->route("all.project")
                ->with($notification);
        } else {
            Project::findOrFail($project_id)->update([
                "project_name" => $request->project_name,
                "project_title" => $request->project_title,
                "project_description" => $request->project_description,
            ]);
            $notification = [
                "message" => "Project Updated without Image Successfully",
                "alert-type" => "success",
            ];

            return redirect()
                ->route("all.project")
                ->with($notification);
        } // end Else
    } // End Method

    public function DeleteProject($id)
    {
        $project = Project::findOrFail($id);
        $img = $project->project_image;
        unlink($img);

        Project::findOrFail($id)->delete();

        $notification = [
            "message" => "Project Image Deleted Successfully",
            "alert-type" => "success",
        ];

        return redirect()
            ->back()
            ->with($notification);
    } // End Method

    public function ProjectDetails($id)
    {
        $project = Project::findOrFail($id);
        return view("frontend.project_details", compact("project"));
    } // End Method

    public function HomeProject()
    {
        $project = Project::latest()->get();
        return view("frontend.project", compact("project"));
    } // End Method
}
