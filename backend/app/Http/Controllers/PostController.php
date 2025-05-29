<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function customerAddPost(Request $request) {
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

    public function customerUpdatePost(Request $request, $postId) {
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
            'status' => 'pending'
        ]);
        return response()->json(['message'=>'Cập nhật bài đăng thành công'], 200);
    }

    public function customerDeletePost($postId) {
        $posts = Post::where('id', $postId)->first();
        if(!$posts) {
            return response()->json(['message'=>'Không tìm thấy bài đăng'], 201);
        }
        $posts->delete();
        return response()->json(['message'=>'Xóa bài đăng thành công'], 200);
    }

    public function landlordAddPost(Request $request) {
        $exist = Post::where('room_id', $request->room_id)->first();
        if($exist) {
            return response()->json(['error' => 'Phòng này đã được đăng, vui lòng chọn phòng khác'], 201);
        }
        $posts = Post::create([
            'title' => $request -> title,
            'room_id' => $request -> room_id,
            'user_id' => $request -> user_id
        ]);
        return response()->json(['message' => 'Thêm bài đăng thành công', 'posts' => $posts], 200);
    }

    //danh sách bài đăng của 1 khách hàng 
    public function getPostsOnePeople(Request $request, $peopleId) {
        $status = $request->query('status');
        $query = Post::with(['room','room.house.district','room.house.ward'])->where('user_id', $peopleId)->orderBy('created_at', 'desc');;
        if ($status) {
            $query->where('status', $status);
        }
        $posts = $query->get()->map(function ($post) {
            $room = optional($post->room);
            $house = optional($room->house);
            $district = optional($house->district);
            $ward = optional($house->ward);
            return [
                'id' => $post->id,
                'title' => $post->title,
                'max_people' => $post->room->user_number,
                'room_type' => $post->room->room_type,
                'price' => $post->room->price,
                'image' => $post->room->image,
                'is_available' => $post->room->is_available,
                'name_district' => $district->name ?? null,
                'name_ward' => $ward->name ?? null,
                'description' => $post->room->description,
                'status' => $post->status,
                'created_at' => $post->created_at->format('H:i d/m/Y')
            ];
        });;
        return response()->json($posts);
    }

    public function showPostCustomer($postId) {
        $posts = Post::with('district')->find($postId);
        if(!$posts) {
            return response()->json(['message'=>'Không tìm thấy bài đăng'], 404);
        }
        return response()->json($posts, 200);
    }

    //Admin
    public function getPostsCustomers(Request $request) {
        $status = $request->query('status');
        $query = Post::with(['user', 'district', 'ward'])        
            ->whereHas('user', function ($q) {
                $q->where('role_id', '1');
        })->orderBy('created_at', 'desc');
        
        if ($status) {
            $query->where('status', $status);
        }
        $posts = $query->get()->map(function ($post) {
            return [
                'id' => $post->id,
                'user_name' => $post->user->name,
                'title' => $post->title,
                'room_type' => $post->room_type,
                'price' => $post->price,
                'status' => $post->status,
                'district_name' => $post->district->name ?? null,
                'ward_name' => $post->ward->name ?? null,
                'created_at' => $post->created_at->format('H:i d/m/Y')
            ];
        });;
        return response()->json($posts);
    }

    public function approvePostCustomer($id) {
        $post = Post::find($id);
        if (!$post) {
            return response()->json(['message' => 'Không tìm thấy bài đăng'], 404);
        }
        $post->status = 'approved';
        $post->save();
        return response()->json(['message' => 'Duyệt bài đăng thành công'], 200);
    }

    public function rejectPostCustomer($id) {
        $post = Post::find($id);
        if (!$post) {
            return response()->json(['message' => 'Không tìm thấy bài đăng'], 404);
        }
        $post->status = 'reject';
        $post->save();
        return response()->json(['message' => 'Từ chối bài đăng thành công'], 200);
    }

    public function getAllPostByCustomerActive(Request $request) {
        $query = Post::with(['user', 'district', 'ward'])        
            ->whereHas('user', function ($q) {
                $q->where('role_id', '1'); 
            })
        ->where('status', 'approved')
        ->orderBy('created_at', 'desc');
        
        $posts = $query->get()->map(function ($post) {
            return [
                'id' => $post->id,
                'title' => $post->title,
                'room_type' => $post->room_type,
                'max_people' => $post->max_people,
                'price' => $post->price,
                'status' => $post->status,
                'district_name' => $post->district->name ?? null,
                'ward_name' => $post->ward->name ?? null,
                'description' => $post->description,
                'created_at' => $post->created_at->format('H:i d/m/Y')
            ];
        });;
        return response()->json($posts);
    }

    public function getPostsLandlord(Request $request) {
        $status = $request->query('status');
        $query = Post::with(['user', 'district', 'ward'])        
            ->whereHas('user', function ($q) {
                $q->where('role_id', '2');
        })->orderBy('created_at', 'desc');
        
        if ($status) {
            $query->where('status', $status);
        }
        $posts = $query->get()->map(function ($post) {
            return [
                'id' => $post->id,
                'user_name' => $post->user->name,
                'title' => $post->title,
                'room_type' => $post->room_type,
                'price' => $post->price,
                'status' => $post->status,
                'district_name' => $post->district->name ?? null,
                'ward_name' => $post->ward->name ?? null,
                'created_at' => $post->created_at->format('H:i d/m/Y')
            ];
        });;
        return response()->json($posts);
    }

    public function getAllPostByLandlordActive(Request $request) {
        $query = Post::with(['user','room','room.house.district','room.house.ward'])        
            ->whereHas('user', function ($q) {
                $q->where('role_id', '2'); 
            })
        ->where('status', 'approved')
        ->orderBy('created_at', 'desc');
        
        $posts = $query->get()->map(function ($post) {
            return [
                'id' => $post->id,
                'title' => $post->title,
                'price' => $post->room->price ?? null,
                'area' => $post->room->area ?? null,
                'image' => $post->room->image ?? null,
                'district_name' => $post->room->house->district->name ?? null,
                'ward_name' => $post->room->house->ward->name ?? null,
            ];
        });;
        return response()->json($posts);
    }

    public function getAllPostByLandlordActiveByDistrict($districtId) {
        $query = Post::with(['user','room','room.house.district','room.house.ward'])        
            ->whereHas('user', function ($q) {
                $q->where('role_id', '2');
            })
            ->whereHas('room.house', function ($q) use ($districtId) {
                if ($districtId) {
                    $q->where('district_id', $districtId);
                }
            })
            ->where('status', 'approved')
            ->orderBy('created_at', 'desc');
    
        $posts = $query->get()->map(function ($post) {
            return [
                'id' => $post->id,
                'title' => $post->title,
                'price' => $post->room->price ?? null,
                'area' => $post->room->area ?? null,
                'image' => $post->room->image ?? null,
                'district_name' => $post->room->house->district->name ?? null,
                'ward_name' => $post->room->house->ward->name ?? null,
            ];
        });
    
        return response()->json($posts);
    }
    
}
