<?php
$htmlcontent = '';
$htmlcontent1 = '';
$htmlcontent2 = '';
// bihar 
if (strtolower($city) == "") {
   $htmlcontent = "
        
   ";
   $htmlcontent1 = "
   
   ";
   $htmlcontent2 = "
   
   ";
} else {
   $htmlcontent = "
      <h3 class='fw-bold text-dark fs-3 mb-3'>
         Relocating in $city Made Smooth, Safe &amp; Predictable
      </h3>

      <p class='text-muted small lh-lg mb-3'>
         Moving home or business in <strong>$city</strong> involves practical challenges—navigating congested neighborhood lanes, managing strict apartment elevator timings, arranging local society gate clearances, and ensuring fragile belongings survive unpredictable transit conditions. That is why families and corporate clients choose <strong>$company3</strong> over unorganized transport vendors.
      </p>

      <p class='text-muted small lh-lg mb-3'>
         We combine local on-ground knowledge of <strong>$city</strong> with ISO-certified moving protocols. Our crews arrive equipped with hydraulic lifters, furniture sliders, corrugated rolls, and high-tensile strapping. From dismantling king-size modular beds to custom-crating home theatre systems, we handle every detail with meticulous caution.
      </p>
        
   ";
   $htmlcontent1 = "
      <h3 class='fw-bold text-dark fs-3 mb-3'>
         Seamless Doorstep Moving Across $city &amp; Surrounding Areas
      </h3>
      <p class='text-muted small lh-lg mb-3'>
         Our dedicated relocation hub in <strong>$city</strong> covers every residential locality, commercial corridor, and industrial zone. Whether shifting within local colonies or connecting to major state and national highway routes, our experienced drivers and logistics coordinators ensure precise dispatch and real-time tracking.
      </p>
      <p class='text-muted small lh-lg mb-0'>
         With scheduled departures, GPS-enabled container vehicles, and pre-cleared toll passes, <strong>$company3</strong> guarantees timely pickup and safe delivery to any address across $city, $state and pan-India.
      </p>
   
   ";
   $htmlcontent2 = "
   
   ";
}