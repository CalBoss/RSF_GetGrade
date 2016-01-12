<?php
/* Create a class for your webservice call structure*/
class GetGrade
{
    function GetGrade($api_key, $user_id, $language, $language_level) 
                {
                    $this->api_key = $api_key;
                    $this->user_id = $user_id;
                    $this->language = $language;
                    $this->language_level = $language_level;
                }
}
