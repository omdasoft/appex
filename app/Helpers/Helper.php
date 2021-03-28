<?php
function getHallName($hall_id){
    $hall = App\Models\Hall::where('id','=',$hall_id)->first();
    return $hall->name;
}

function getWingName($wing_id){
    $wing = App\Models\Wing::where('id','=',$wing_id)->first();
    $wing_name = App::getLocale() == 'ar' ? $wing->name:$wing->name_en; 
    return $wing_name;
}
