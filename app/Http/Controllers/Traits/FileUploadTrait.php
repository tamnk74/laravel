<?php
namespace App\Http\Controllers\Traits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
trait FileUploadTrait
{
    /**
     * File upload trait used in controllers to upload files
     */

    public function saveAvatar(Request $request, $oldAvatar){
        if (! file_exists(public_path('images'))) {
            mkdir(public_path('images'), 0777);
        }
        if (! file_exists(public_path(config('path.avatar')))) {
            mkdir(public_path(config('path.avatar')), 0777);
        }
        $key = 'avatar';
        $finalRequest = $request;
        if ($request->hasFile($key)) {
            $oldname = $request->file($key)->getClientOriginalName();
            $filename = time() . '-' . substr($oldname, -20);
            $request->file($key)->move(public_path(config('path.avatar')), $filename);
            if(!$oldAvatar.equalTo('default.png')){
                \File::delete(public_path(config('path.avatar').$oldAvatar));
            }
            $finalRequest = new Request(array_merge($finalRequest->all(), [$key => $filename]));
        }
        return $finalRequest;
    }
    public function saveFiles(Request $request)
    {
        if (! file_exists(public_path('uploads'))) {
            mkdir(public_path('uploads'), 0777);
            mkdir(public_path('uploads/thumb'), 0777);
        }
        $finalRequest = $request;
        foreach ($request->all() as $key => $value) {
            if ($request->hasFile($key)) {
                if ($request->has($key . '_max_width') && $request->has($key . '_max_height')) {
                    // Check file width
                    $filename = time() . '-' . $request->file($key)->getClientOriginalName();
                    $file     = $request->file($key);
                    $image    = Image::make($file);
                    if (! file_exists(public_path('uploads/thumb'))) {
                        mkdir(public_path('uploads/thumb'), 0777, true);
                    }
                    Image::make($file)->resize(50, 50)->save(public_path('uploads/thumb') . '/' . $filename);
                    $width  = $image->width();
                    $height = $image->height();
                    if ($width > $request->{$key . '_max_width'} && $height > $request->{$key . '_max_height'}) {
                        $image->resize($request->{$key . '_max_width'}, $request->{$key . '_max_height'});
                    } elseif ($width > $request->{$key . '_max_width'}) {
                        $image->resize($request->{$key . '_max_width'}, null, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                    } elseif ($height > $request->{$key . '_max_width'}) {
                        $image->resize(null, $request->{$key . '_max_height'}, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                    }
                    $image->save(public_path('uploads') . '/' . $filename);
                    $finalRequest = new Request(array_merge($finalRequest->all(), [$key => $filename]));
                } else {
                    $filename = time() . '-' . $request->file($key)->getClientOriginalName();
                    $request->file($key)->move(public_path('uploads'), $filename);
                    $finalRequest = new Request(array_merge($finalRequest->all(), [$key => $filename]));
                }
            }
        }
        return $finalRequest;
    }
}