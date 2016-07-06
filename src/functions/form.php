<?php


if (! function_exists('MarvisionFormDay')) {
    
    function MarvisionFormDay($name,$old=null){
    	$select  = "<select name='".$name."' class='form-control'>";
    	for ($i=1; $i < 32; $i++) { 
    		$selected = ($old == $i)? "selected":"";
    		$select .= "<option value='".$i."' ". $selected.">".$i."</option>";
    	}
    	$select .= "</select>"; 
    	return $select ; 
    }
}

if (! function_exists('MarvisionFormMonth')) {//month
    
    function MarvisionFormMonth($name,$old=null){
    	$montharray = lang('date.month');
    	$select  = "<select name='".$name."' class='form-control'>";
    	foreach ($montharray as $k => $m) { 
    		$selected = ($old == $m)? "selected":"";
    		$select .= "<option value='".$k."' ". $selected.">".$m."</option>";
    	}
    	$select .= "</select>"; 
    	return $select ; 
    }
}
if (! function_exists('MarvisionFormYear')) {
    
    function MarvisionFormYear($name,$old=null){
        $select  = "<select name='".$name."' class='form-control'>";
        for ($i=date('Y'); $i > 1900; $i--) { 
            $selected = ($old == $i)? "selected":"";
            $select .= "<option value='".$i."' ". $selected.">".$i."</option>";
        }
        $select .= "</select>"; 
        return $select ; 
    }
}

if (! function_exists('MarvisionFormCountry')) {
    
    function MarvisionFormCountry($name,$old=null){
        $contryarray = lang('country.base');
        $select  = "<select name='".$name."' class='form-control'>";
        foreach ($contryarray as $k => $c) { 
            $selected = ($old == $k)? "selected":"";
            $select .= "<option value='".$k."' ". $selected.">".$c."</option>";
        }
        $select .= "</select>"; 
        return $select ; 
    }
}