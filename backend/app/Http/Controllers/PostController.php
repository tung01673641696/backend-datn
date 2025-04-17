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

    public function editPostsByCustomer(Request $request, $postId) {
        $posts = Post::find($postId);

        if(!$posts) {
            return response()->json(['message'=>'Không tìm thấy bài đăng'], 201);
        }
        $posts->update([
            'user_id' => $request -> user_id,
            'title' => $request-> title,
            'room_type'=> $request-> room_type,
            'price'=> $request-> price,
            'max_people'=> $request-> max_people,
            'district_id'=> $request-> district_id,
            'ward_id'=> $request-> ward_id,
            'description'=> $request-> description,
        ]);

        return response()->json(['message'=>'Cập nhật bài đăng thành công'], 200);
    }

    public function addPostByLandlord(Request $request) {
        $exist = Post::where('room_id', $request->room_id)->first();
        if($exist) {
            return response()->json(['error' => 'Phòng này đã đăng rồi'], 201);
        }

        $posts = Post::create([
            'title' => $request -> title,
            'room_id' => $request -> room_id,
            'user_id' => $request -> user_id
        ]);

        return response()->json(['message' => 'Thêm bài đăng thành công', 'posts' => $posts], 200);
    }

    public function getPostsByOneCustomer($customerId) {
        $posts = Post::with(['district','ward'])->where('user_id', $customerId)->get()->map(function ($post) {
            return [
                'id' => $post->id,
                'title' => $post->title,
                'max_people' => $post->max_people,
                'room_type' => $post->room_type,
                'price' => $post->price,
                'name_district' => $post->district->name,
                'name_ward' => $post->ward->name ?? null,
                'description' => $post->description,
                'created_at' => $post->created_at->format('H:i d/m/Y')
            ];
        });;

        return response()->json($posts);
    }

    public function getOnePostsByCustomer($postId) {
        $posts = Post::find($postId);

        if(!$posts) {
            return response()->json(['message'=>'Không tìm thấy bài đăng'], 201);
        }
        return response()->json($posts, 200);
    }
}
