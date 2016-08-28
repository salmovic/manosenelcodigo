<?php
function set_value_input($result=array(),$post,$campo)
     {
        if(sizeof($result)==0)
                {
                    if(isset($_POST[$post]))
                    {
                         return $_POST[$post];   
                    }else
                    {
                        return '';
                    }
                }else
                {
                    if($campo)
                    {
                         return $campo;   
                    }else
                    {
                        return '';
                    }
                }
     }
     function set_value_select($result=array(),$post,$campo,$valor)
     {
        if(sizeof($result)==0)
                {
                    if(isset($_POST[$post]) and $_POST[$post]==$valor)
                    {
                         return 'selected="true"';   
                    }else
                    {
                        return '';
                    }
                }else
                {
                    if($campo==$valor)
                    {
                         return 'selected="true"';   
                    }else
                    {
                        return '';
                    }
                }
     }
     function validaSelect($valor)
    {
        if($valor==0)
        {
            return false;
        }else
        {
            return true;
        }    
    }
