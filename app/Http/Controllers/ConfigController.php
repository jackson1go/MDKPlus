<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

// class ConfigController extends Controller
class ConfigController extends Controller
{
    public function show($slug = 'main')
    {
        // อ่านไฟล์ JSON
        $jsonString = Storage::disk('resources')->get('views/layouts/config.json');
        $data = json_decode($jsonString, true);

        // ตรวจสอบว่ามีวิวที่ต้องการแสดงหรือไม่
        if (view()->exists($slug)) {
            return view($slug, compact('data'));
        }

        // ถ้าไม่มีวิวที่ต้องการแสดง ให้แสดงหน้า 404
        abort(404);
        // return view('main', compact('data'));
    }
}

