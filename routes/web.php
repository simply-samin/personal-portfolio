<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\PortfolioController;
use App\Http\Controllers\Home\ProjectController;
use App\Http\Controllers\Home\FooterController;
use App\Http\Controllers\Home\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function () {
    //return view('welcome');
    return view("frontend.index");
})->name("home");

Route::get("/dashboard", function () {
    return view("admin.index");
})
    ->middleware(["auth", "verified"])
    ->name("dashboard");

Route::middleware("auth")->group(function () {
    // Admin all routes
    Route::controller(AdminController::class)->group(function () {
        Route::get("/admin/logout", "destroy")->name("admin.logout");
        Route::get("/admin/profile", "Profile")->name("admin.profile");
        Route::get("/edit/profile", "EditProfile")->name("edit.profile");
        Route::post("/store/profile", "StoreProfile")->name("store.profile");
        Route::get("/change/password", "ChangePassword")->name(
            "change.password"
        );
        Route::post("/update/password", "UpdatePassword")->name(
            "update.password"
        );
    });
});

// Home Slide All Route
Route::controller(HomeSliderController::class)->group(function () {
    Route::get("/home/slide", "HomeSlider")->name("home.slide");
    Route::post("/update/slider", "UpdateSlider")->name("update.slider");
});

// About Page All Route
Route::controller(AboutController::class)->group(function () {
    Route::get("/about/page", "AboutPage")->name("about.page");
    Route::post("/update/about", "UpdateAbout")->name("update.about");
    Route::get("/about", "HomeAbout")->name("home.about");
    Route::get("/about/multi/image", "AboutMultiImage")->name(
        "about.multi.image"
    );
    Route::post("/store/multi/image", "StoreMultiImage")->name(
        "store.multi.image"
    );
    Route::get("/all/multi/image", "AllMultiImage")->name("all.multi.image");
    Route::get("/edit/multi/image/{id}", "EditMultiImage")->name(
        "edit.multi.image"
    );

    Route::post("/update/multi/image", "UpdateMultiImage")->name(
        "update.multi.image"
    );
    Route::get("/delete/multi/image/{id}", "DeleteMultiImage")->name(
        "delete.multi.image"
    );
});

// Portfolio All Route
Route::controller(PortfolioController::class)->group(function () {
    Route::get("/all/portfolio", "AllPortfolio")->name("all.portfolio");
    Route::get("/add/portfolio", "AddPortfolio")->name("add.portfolio");
    Route::post("/store/portfolio", "StorePortfolio")->name("store.portfolio");
    Route::get("/edit/portfolio/{id}", "EditPortfolio")->name("edit.portfolio");
    Route::post("/update/portfolio", "UpdatePortfolio")->name(
        "update.protfolio"
    );
    Route::get("/delete/portfolio/{id}", "DeletePortfolio")->name(
        "delete.portfolio"
    );
    Route::get("/portfolio/details/{id}", "PortfolioDetails")->name(
        "portfolio.details"
    );
    Route::get("/portfolio", "HomePortfolio")->name("home.portfolio");
});

// Footer All Route
Route::controller(FooterController::class)->group(function () {
    Route::get("/footer/setup", "FooterSetup")->name("footer.setup");
    Route::post("/update/footer", "UpdateFooter")->name("update.footer");
});

// Contact All Route
Route::controller(ContactController::class)->group(function () {
    Route::get("/contact", "Contact")->name("contact.me");
    Route::post("/store/message", "StoreMessage")->name("store.message");
    Route::get("/contact/message", "ContactMessage")->name("contact.message");
    Route::get("/delete/message/{id}", "DeleteMessage")->name("delete.message");
});

// Project All Route
Route::controller(ProjectController::class)->group(function () {
    Route::get("/all/project", "AllProject")->name("all.project");
    Route::get("/add/project", "AddProject")->name("add.project");
    Route::post("/store/project", "StoreProject")->name("store.project");
    Route::get("/edit/project/{id}", "EditProject")->name("edit.project");
    Route::post("/update/project", "UpdateProject")->name("update.project");
    Route::get("/delete/project/{id}", "DeleteProject")->name("delete.project");
    Route::get("/project/details/{id}", "ProjectDetails")->name(
        "project.details"
    );
    Route::get("/project", "HomeProject")->name("home.project");
});

require __DIR__ . "/auth.php";
