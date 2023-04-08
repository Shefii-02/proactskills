<?php

function date_only($time){
    return  date('d M Y',strtotime($time));

}