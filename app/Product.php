<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/**
 * Class Product
 * @package App
 * @property integer $user_id
 * @property string $title
 * @property string $cost
 * @property string $url
 * @property integer $rating
 * @property string $created_at
 * @property string $updated_at
 */
class Product extends Model
{
    //

    public function getViewUrl()
    {
        return '/shop/product/' . $this->id;
    }

    public function getStars()
    {
        $o = "";
        for($i=1; $i<=5; $i++){
            if( $i <= $this->rating){
                $o .= "&#9733;";
            }else{
                $o .="&#9734;";
            }
        }
        return  $o;
    }

    public function setFormData( Request $request )
    {
        $this->title = $request->input("name");
        $this->cost = $request->input("cost");
        $this->url = $request->input("preview");
        $this->summary = $request->input("description");
        $this->rating = $request->input('rating');
    }
}
