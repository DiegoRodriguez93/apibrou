<?php

// Create a URL handle.
$ch = curl_init();

// Tell curl what URL we want.
curl_setopt($ch, CURLOPT_URL, 'https://www.brou.com.uy/c/portal/render_portlet?p_l_id=20593&p_p_id=cotizacionfull_WAR_broutmfportlet_INSTANCE_otHfewh1klyS&p_p_lifecycle=0&p_t_lifecycle=0&p_p_state=normal&p_p_mode=view&p_p_col_id=column-1&p_p_col_pos=0&p_p_col_count=2&p_p_isolated=1&currentURL=%2Fweb%2Fguest%2Fcotizaciones');

// We want to return the web page from curl_exec, not 
// print it.
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

// Set this if you don't want the content header.
curl_setopt($ch, CURLOPT_HEADER, 0);

// Download the HTML from the URL.
$content = curl_exec($ch);

// Check to see if there were errors.
if(curl_errno($ch)) {
    // We have an error. Show the error message.
    echo curl_error($ch);
}
else {
    // No error. Save the page content.
    $file = 'content.html';
    
    // Open a file for writing.
    $fh = fopen($file, 'w');
    
    if(!$fh) {
        // Couldn't create the file.
        echo "Unable to create $file";
    }
    else {
        // Write the retrieved
        // html to the file.
        fwrite($fh, $content);
        
        // Display a message to say
        // we've saved the file OK.
        echo "Saved $file
        <script>location.replace('ajaxrequest.php');</script>";
        
        // Close the file.
        fclose($fh);
    }
}

// Close the curl handle.
curl_close($ch);

?>