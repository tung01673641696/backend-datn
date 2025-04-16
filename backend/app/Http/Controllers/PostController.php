<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function addPostsByCustomer(Request $request) {
        $posts = Post::create([
            'user_id' => $request -> user_id,
            'title' => $request-> title,
            'room_type'=> $request-> room_type,
            'price'=> $request-> price,
            'max_people'=> $request-> max_people,
            'district_id'=> $request-> district_id,
            'ward_id'=> $request-> ward_id,
            'description'=> $request-> description,
        ]);

        return response()->json(['message' => 'Thêm bài đăng thành công', 'posts' => $posts], 200);
    }
}
