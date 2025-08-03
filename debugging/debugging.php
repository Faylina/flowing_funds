<?php

#********************************************#
#********** SIMPLE DEBUG OUTPUT *************#
#********************************************#

#********** A process has been started: *****#
function debugProcessStart($process, $file) {
    if(DEBUG) { 
        echo "<p class='debug'>⏩️ <b>Line " . __LINE__ . "</b>: $process ... <i>(" . basename($file) . ")</i></p>\n";
    }
}

#*******************************************************************************************************************************************************#


#********************************************#
#********** SUCCESS-/ERROR-MESSAGES *********#
#********************************************#

#********** Debug-Output for error: *********#
function debugError($errorMessage, $file) {
    if(DEBUG) {	
        echo "<p class='debug err'><b>Line " . __LINE__ . "</b>: ERROR: $errorMessage <i>(" . basename($file) . ")</i></p>\n";
    }
}

#********** Debug-Output for db error: ******#
function debugErrorDB($error, $file) {
    if(DEBUG) {	
        echo "<p class='debug db err'><b>Line " . __LINE__ . "</b>: ERROR: " . $error->GetMessage() . "<i>(" . basename($file) . ")</i></p>\n";			
    }
}	


#********** Debug-output for success: *******#
function debugSuccess($successMessage, $file) {
    if(DEBUG) {	
        echo "<p class='debug ok'><b>Line " . __LINE__ . "</b>: $successMessage <i>(" . basename($file) . ")</i></p>\n";	
    }
}

#*******************************************************************************************************************************************************#
		
				
#*********************************************#
#********** OUTPUT VARIABLE VALUES ***********#
#*********************************************#
                
#********** SIMPLE DATA TYPES (STRING, INTEGER, FLOAT, BOOLEAN) **********#
function debugVariable($name, $variable, $file) {
    if(DEBUG_V)	{
        echo "<p class='debug value'><b>Line " . __LINE__ . "</b>: \$$name: $variable <i>(" . basename($file) . ")</i></p>\n";
    }
}
                

#********** COMPLEX DATA TYPES (ARRAYS, OBJECTS) **********#
function debugArray($name, $array, $file) {
    if(DEBUG_A) {
        echo "<pre class='debug value'><b>Line " . __LINE__ . "</b>: \$$name <i>(" . basename($file) . ")</i>:<br>\n";
        print_r($array);
        echo "</pre>";
    }
}

function debugObject($name, $object, $file) {
    if(DEBUG_O) {
        echo "<pre class='debug value'><b>Line " . __LINE__ . "</b>: \$$name <i>(" . basename($file) . ")</i>:<br>\n";
        print_r($object);
        echo "</pre>";
    }
}

#*******************************************************************************************************************************************************#


#********************************#
#********** FUNCTIONS ***********#
#********************************#

function debugFunction($name, $function, $file) {
    if(DEBUG_F) {		
        echo "<p class='debug $name'>🌀 <b>Line " . __LINE__ . "</b>: Invoking " . $function . "() <i>(" . basename($file) . ")</i></p>\n";
    }
}

#*******************************************************************************************************************************************************#
				

#*****************************#
#********** CLASSES **********#
#*****************************#

#********** CONSTRUCTOR *********#
function debugConstructorInvoke($method, $file) {
    if(DEBUG_CC) {	
        echo "<p class='debug class'>🛠 <b>Line " . __LINE__ .  "</b>: Invoking $method()  (<i>" . basename($file) . "</i>)</p>\n";
    }
}

function debugConstructorObject($method, $object, $file) {
    if(DEBUG_CC) {
        echo "<pre class='debug class value'><b>Line " . __LINE__ .  "</b> | $method(): <i>(" . basename($file) . ")</i>:<br>\n";
        print_r($object);
        echo "</pre>";
    }
}


#********** DESTRUCTOR **********#
function debugDestructor($method, $file) {
    if(DEBUG_CC) {	
        echo "<p class='debug class'>☠️  <b>Line " . __LINE__ .  "</b>: Invoking $method()  (<i>" . basename($file) . "</i>)</p>\n";			
    }			
}
                        
    
#********** METHODS **********#
function debugMethod($method, $file) {
    if(DEBUG_C) {		
        echo "<p class='debug class'>🌀 <b>Line " . __LINE__ .  "</b>: Invoking $method() (<i>" . basename($file) . "</i>)</p>\n";
    }
}

function debugMethodMessage($method, $message, $file) {
    if(DEBUG_C) {		
        echo "<p class='debug class'><b>Line " . __LINE__ .  "</b> | $method(): $message... (<i>" . basename($file) . "</i>)</p>\n";
    }
}

function debugMethodError($method, $message, $file) {
    if(DEBUG_C)	{
        echo "<p class='debug class err'><b>Line " . __LINE__ . "</b>: $method(): $message <i>(" . basename($file) . ")</i></p>\n";
    }
}

?>