<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Fiets extends Model
{

    protected $primaryKey = 'fiets_id';
    protected $average;
    protected $amount;

    public function aanbieding(){
        return $this->hasOne(Aanbieding::class);
    }

    public function getAverage($id)
    {
        $temp = DB::table('reviews')
            ->where('fiets_id', '=', $id)
            ->select('review_waardering')
            ->get();

//        dd($temp);
        $output = 0;

        for($i = 0; $i < count($temp); $i++) {
            $output = $output + $temp[$i]->review_waardering;
        }


        if(count($temp) != 0) {
            $output = round($output / count($temp));
        } else {
            $output = 0;
        }

//        dd($output);
        $this->average = $output;
    }

    public function drawImage() {


        $output = "";

        if($this->amount < $this->average) {
            $output = "https://i.imgur.com/pQLblbt.png";
            $this->amount++;
        }

        return $output;
    }


}
