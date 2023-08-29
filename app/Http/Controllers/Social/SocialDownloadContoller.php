<?php

namespace App\Http\Controllers\Social;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class SocialDownloadContoller extends Controller
{
    // $endpoint = "https://www.instagram.com/p/CwIYJgkMq-Q?__a=1&__d=dis";
    // $endpoint = "https://instagram.com/stories/virat.kohli/3180126433460034227?__a=1&__d=dis";  
    // $endpoint = "https://www.instagram.com/reel/Cwh0xLQt9JP?__a=1&__d=dis";  //Reels
    public function instaDownload(){
        $url = 'https://www.instagram.com/reel/CwhBoshqU23/?igshid=MzRlODBiNWFlZA==';
        $url = str_replace(' ', '', $url);
        $url = explode('/?', $url)[0];
        $endpoint = $url.''.'?__a=1&__d=dis'; 
        $data = $this->clienAjaxCall($endpoint); // Ajax call
        $jsonData =json_decode($data['result']);
        $type = $jsonData->graphql->shortcode_media->__typename;
        $imageList = [];
        if($type=='GraphSidecar'){  //  Images and Videos
            $shortcodeMedia = $jsonData->graphql->shortcode_media;
            $edges =$shortcodeMedia->edge_sidecar_to_children->edges;
            foreach ($edges as $edge) 
            {
                if(isset($edge->node->is_video) && $edge->node->is_video){
                    $json =[
                        'url'=>$edge->node->video_url,
                        'type'=>$type,
                        'thumbnail'=>$edge->node->display_url 
                    ];
                    array_push($imageList, $json);
                }else{
                    $json =[
                        'url'=>$edge->node->display_url,
                        'type'=>$type
                    ];
                    array_push($imageList, $json); 
                }
            }
        }
        else if($type=='GraphImage'){ // Images
            $url = $jsonData->graphql->shortcode_media->display_url;
            $json =[
                'url'=>$url,
                'type'=>$type,
            ];
            array_push($imageList, $json);  
            
        }
        else if($type == 'GraphVideo'){ //  Videos
            $shortcodeMedia = $jsonData->graphql->shortcode_media;
             $json =[
                'url'=>$shortcodeMedia->video_url,
                'thumbnail'=>$shortcodeMedia->thumbnail_src,
                'type'=>$type,
            ];
            array_push($imageList, $json);  
        }
        return response()->json(['succeess' => $imageList]);
    } 


    public function clienAjaxCall($url){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url, [
            'headers'=>[
                'Content-Type' => 'application/json'
            ],
            'verify' => false,
        ]);
        $statusCode = $response->getStatusCode();
        $content = $response->getBody();
        $result = $content->getContents();
        return [
            'status' =>$statusCode,
            'result'=>$result
        ];
    }
}

