<?php
$opt[1] = "--vertical-label Mbps --title \"TX/RX for $hostname / $servicedesc\" ";

$def[1] =   "DEF:tx=$RRDFILE[1]:$DS[1]:AVERAGE ";
$def[1] .=  "HRULE:$WARN[1]#FFFF00 ";
$def[1] .=  "HRULE:$CRIT[1]#FF0000 ";
$def[1] .=  "HRULE:-$WARN[2]#FFFF00 ";
$def[1] .=  "HRULE:-$CRIT[2]#FF0000 ";
$def[1] .=  "AREA:tx#76D5D6:\"TX\l\" ";
$def[1] .=  "DEF:rx=$RRDFILE[1]:$DS[2]:AVERAGE ";
$def[1] .=  "CDEF:rx_neg=rx,-1,* ";
$def[1] .=  "AREA:rx_neg#7BED8C:\"RX\l\" ";
$def[1] .=  "COMMENT:\"\u\" ";
$def[1] .=  "COMMENT:\"\u\" ";
$def[1] .=  "GPRINT:tx:LAST:\"        Last %2.0lf Mbit\" ";
$def[1] .=  "GPRINT:tx:MAX:\"Max %2.0lf Mbit\" ";
$def[1] .=  "GPRINT:tx:MIN:\"Min %2.0lf Mbit\" ";
$def[1] .=  "GPRINT:tx:AVERAGE:\"Average %2.0lf Mbit\l\" ";
$def[1] .=  "GPRINT:rx:LAST:\"        Last %2.0lf Mbit\" ";
$def[1] .=  "GPRINT:rx:MAX:\"Max %2.0lf Mbit\" ";
$def[1] .=  "GPRINT:rx:MIN:\"Min %2.0lf Mbit\" ";
$def[1] .=  "GPRINT:rx:AVERAGE:\"Average %2.0lf Mbit\l\" ";


$opt[2] = "--vertical-label dB --title \"Signal strength for $hostname / $servicedesc\" ";

$def[2] =   "DEF:signal=$RRDFILE[1]:$DS[3]:AVERAGE ";
$def[2] .=  "HRULE:$WARN[3]#FFFF00 ";
$def[2] .=  "HRULE:$CRIT[3]#FF0000 ";
$def[2] .=  "AREA:signal#888888:\"Signal\l\" ";
$def[2] .=  "COMMENT:\"\u\" ";
$def[2] .=  "GPRINT:signal:LAST:\"          Last %2.0lf dB\" ";
$def[2] .=  "GPRINT:signal:MAX:\"Max %2.0lf dB\" ";
$def[2] .=  "GPRINT:signal:MIN:\"Min %2.0lf dB\" ";
$def[2] .=  "GPRINT:signal:AVERAGE:\"Average %2.0lf dB\l\" ";
?>
